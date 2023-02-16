# from django.contrib import admin

# from .models import Question, Choice
# Register your models here.


from django.contrib import admin

from .models import Choice, Question


#Primera modificación del admin

""" class QuestionAdmin(admin.ModelAdmin):
    fields = ['pub_date', 'question_text']

admin.site.register(Question, QuestionAdmin) """

class ChoiceInline(admin.TabularInline):
    # stackedInline y TabularInline son formas de mostrar los elementos
    model = Choice
    extra = 3 # número de opciones que podremos añdir por defecto, que se suman a las ya existentes

class QuestionAdmin(admin.ModelAdmin):
    fieldsets = [ #conjuntos de campos, cada uno es un array con los campos que vamos a tener dentro de cada conjunto
        ('Principal',               {'fields': ['question_text']}),
        ('Date information', {'fields': ['pub_date'], 'classes': ['collapse']}),
    ]
    inlines = [ChoiceInline]
    list_display = ('question_text', 'pub_date', 'was_published_recently')
    list_filter = ['pub_date']
    search_fields = ['question_text']

admin.site.register(Question, QuestionAdmin)
# admin.site.register(Choice) # se debe eliminar o comentar para no tener la funcionabilidad duplicada, dentro y fuera de Questions


""" 
class ChoiceInline(admin.TabularInline):
    model = Choice
    
    stackedInline ->
    TabularInline -> 
    
class QuestionAdmin(admin.ModelAdmin):
    fieldsets = [ # campos, es un array en donde se indican los campos que vamos a tener
        (Principal,               {'fields': ['question_text']}),
        ('Date information', {'fields': ['pub_date']}),
        
    ]
    
   
admin.site.register(Question, QuestionAdmin) """

# admin.site.register(Question)
# admin.site.register(Choice)