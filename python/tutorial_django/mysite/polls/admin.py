from django.contrib import admin

from .models import Question, Choice
# Register your models here.



# from django.contrib import admin

# from .models import Question


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

admin.site.register(Question)
admin.site.register(Choice)