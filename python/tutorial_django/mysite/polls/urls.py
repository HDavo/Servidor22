from django.urls import path

from . import views

""" 
# Antes de la modificación para usar vistas genéricas de django
app_name = 'polls'
urlpatterns = [
    path('', views.index, name='index'),
    # añadiendo una parte de la url personalizada
    path('<int:question_id>/', views.detail, name='detail'),
    path('<int:question_id>/results/', views.results, name='results'),
    path('<int:question_id>/vote/', views.vote, name='vote'),
]
 """
 
# Después de los cambios para poder usar las vistas genéricas de django
app_name = 'polls'
urlpatterns = [
    path('', views.IndexView.as_view(), name='index'),
    path('<int:pk>/', views.DetailView.as_view(), name='detail'),
    path('<int:pk>/results/', views.ResultsView.as_view(), name='results'),
    path('<int:question_id>/vote/', views.vote, name='vote'),
]
