import datetime
from django.test import TestCase
from django.utils import timezone

from .models import Question
from django.urls import reverse

class QuestionModelTests(TestCase):
    # Los 3 primeros tests nos indican que una pregunta ha sido publicada recientemente usando comprobaciones que usan el pasado ,presente y futuro.
    def test_was_published_recently_with_future_question(self):
        """
        was_published_recently() devuelve Falso para preguntas cuya fecha de publicación está en el futuro
        """
        time = timezone.now() + datetime.timedelta(days=30)
        future_question = Question(pub_date=time)
        self.assertIs(future_question.was_published_recently(), False)
    
    def test_was_published_recently_with_old_question(self):
        time = timezone.now() - datetime.timedelta(days=1, seconds=1)
        old_question = Question(pub_date=time)
        self.assertIs(old_question.was_published_recently(), False)
        """
        was_published_recently() devuelve Falso cuando una pregunta tiene una fecha de publicación más antiguo que 1 día.
        """
        
    def test_was_published_recently_with_recent_question(self):
        time = timezone.now() - datetime.timedelta(hours=23, minutes=59, seconds=59)
        recent_question = Question(pub_date=time)
        self.assertIs(recent_question.was_published_recently(),True)
        """
        was_published_recently() devuelve True cuando una pregunta tiene como fecha de publicación comprendida en el último día
        """
        
def create_question(question_text, days):
    """
    Crea una pregunta con el texto y los días dados, con los días crea una referencia respecto a la fecha actual. En el caso de que sea una pregunta publicada anteriormente o sea posterior a la fecha, establece un signo negativo o positivo para indicar la diferencia entre las fechas.
    """ 
    time = timezone.now() + datetime.timedelta(days=days)
    return Question.objects.create(question_text=question_text,pub_date=time)
    
# para la realización de test en el index
class QuestionIndexVIewTest(TestCase):
    def test_no_questions(self):
        """
        En el caso de que no existan preguntas, se muestra un mensaje para indicarlo.
        """
        response = self.client.get(reverse('polls:index'))
        # comprobación de que todo funciona de manera correcta
        self.assertEqual(response.status_code, 200)
        # muestra el mensaje en caso de que no existan preguntas.
        self.assertContains(response, "No polls are available.")
        # obtiene una lista de las últimas preguntas
        self.assertContains(response.context['latest_question_list'],
        [])
        
    def test_past_question(self):
        """
        Muestra las preguntas cuya fecha de publicación esté en el pasado (más de un día de antigüedad)
        """
        question = create_question(question_text="Past question.", days=-30)
        response = self.client.get(reverse('polls:index'))
        self.assertQuerysetEqual(
            response.context['latest_question_list'],[question],
        )
        
    def test_future_question(self):
        """
        No se muestra, en el index, las preguntas que
        tengan una fecha de publicación (pub_date) en el futuro.
        """
        create_question(question_text="Future question.", days=30)
        response = self.client.get(reverse('polls:index'))
        self.assertContains(response, "No polls are available.")
        
    def test_future_question_and_past_question(self):
        """
        Aunque existan preguntas pasadas y futuras, sólo se muestran las preguntas pasadas.
        """
        question = create_question(question_text="Past question.", days=-30)
        create_question(question_text="Future question.", days=30)
        response = self.client.get(reverse('polls:index'))
        self.assertQuerysetEqual(
            response.context['latest_question_list'],
            [question],
        )
    
    def test_two_past_questions(self):
        """
        Puede que se muestren múltiples preguntas en el index.
        """
        question1 = create_question(question_text="Past question 1.", days=-30)
        question2 = create_question(question_text="Past question 2.", days=-5)
        response = self.client.get(reverse('polls:index'))
        self.assertQuerysetEqual(
            response.context['latest_question_list'],
            [question2, question1],
        )

class QuestionDetailViewTests(TestCase):
    def test_future_question(self):
        """
        La vista detail de una pregunta cuya fecha de publicación (pub_date) esté en el futuro devuelve un 404, no encotnrado.
        """
        future_question = create_question(question_text='Future question.',days=5)
        url = reverse('polls:detail',args=(future_question.id,))
        response = self.client.get(url)
        self.assertEqual(response.status_code, 404)
        
    def test_past_question(self):
        """
        La vista detail de una pregunta con una fecha (pub_date) en el pasado nos muestra el texto de la pregunta.
        """
        past_question = create_question(question_text='Past question.', days=-5)        
        url = reverse('polls:detail', args=(past_question.id,))
        response = self.client.get(url)
        self.assertContains(response, past_question.question_text)
        