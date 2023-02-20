from django.shortcuts import render
from django.http import HttpResponseRedirect
from django.shortcuts import get_object_or_404, render
from django.urls import reverse
# añadido para usar las vistas genéricas
from django.views import generic
# añadido en la parte de mejora de las vistas (dentro de la parte 5 del tutorial)
from django.utils import timezone

from .models import Hilo, Comentario

class IndexView(generic.ListView): #vistas genéricas
    template_name = 'hilos/index.html' # donde lo va a pintar
    context_object_name = 'latest_question_list' # contenido de lo que va a pintar
    
    def get_queryset(self):
        # para devolver las últimas 5 publicaciones
        # la siguiente línea permitía que se muestren preguntas que tenían fechas de publicación en el futuro
        # return Question.objects.order_by('-pub_date')[:5]
        # la siguiente línea arregla el problemas de las preguntas futuras que se mostraban 
        return Hilo.objects.filter(fecha_creacion__lte=timezone.now()).order_by('fecha_creacion')[:5]
    
"""
#Ejemplo de uso de herencia entre vistas
class CosasDePreguntas(generic.DetailView):
    model = Question
    context_object_name = 'encuesta'
    
    
class DetalleView(CosasDePreguntas):
    template_name = 'polls/detalle.html'
"""
   
class DetailView(generic.DetailView): # dentro de generic se usa la vista genérica de detail
    model = Hilo # modelo que usa para generarla
    template_name = 'hilos/detail.html'
    # con lo siguiente se excluyen (no se muestran) las preguntas que no han sido publicadas aún (pub_date en el futuro)
    def get_queryset(self):
        return Hilo.objects.filter(fecha_creacion__lte=timezone.now())

class ResultsView(generic.DetailView):
    model = Hilo
    template_name = 'hilos/results.html'
    
""" def vote(request, question_id):
    question = get_object_or_404(Hilo, pk=question_id)
    try:
        selected_choice = question.choice_set.get(pk=request.POST['choice'])
    except (KeyError, Comentario.DoesNotExist):
        # Redisplay the question voting form.
        return render(request, 'polls/detail.html', { #este template también los errores
            'question': question,
            'error_message': "You didn't select a choice.",
        })
    else:
        selected_choice.votes += 1
        selected_choice.save()
        # Always return an HttpResponseRedirect after successfully dealing
        # with POST data. This prevents data from being posted twice if a
        # user hits the Back button.
        return HttpResponseRedirect(reverse('polls:results', args=(qu.id,))) # con reverse hace que no tengamos que poner de forma específica la url, si no que podemos usar la url definida para esa vista dentro del namespace y la necesidad de cambiar urls en el caso de que se modifiquen
        # Evita que usemos return HttpResponseRedirect(f"/polls/{question.id}/results)
         """

# Desde aquí se mete el serializer de rest
""" from rest_framework import viewsets
from .serializer import QuestionSerializer


class QuestionViewSet(viewsets.ModelViewSet):
    
    queryset = Question.objects.all().order_by('pub_date')
    serializer_class = QuestionSerializer
     """
