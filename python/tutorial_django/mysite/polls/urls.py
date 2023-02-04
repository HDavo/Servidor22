from django.urls import path

from . import views

app_name = 'polls'
urlpatterns = [ # en comentarios, ejemplos de las equivalencias
    path('', views.index, name='index'), #/polls/
    path('<int:pk>/', views.detail, name='detail'), # /polls/5/
    path('<int:pk>/results/', views.Resultsview.as_view(), name='results'), # /polls/5/results/
    path('<int:question_id>/vote/', views.vote, name='vote'), # /polls/5/vote/   
]

