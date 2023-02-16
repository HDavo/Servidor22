# re_path e include añadidos para poder usar rest (no necesarios dentro del tutoral de django)
from django.urls import path, re_path, include

from . import views


# líneas añadidas para poder usar rest
# from rest_framework import routers
# router = routers.DefaultRouter()
# router.register(r'questions' , views.QuestionViewSet)


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
 
# Después de los cambios, se va a poder usar las vistas genéricas de django
app_name = 'polls'
urlpatterns = [
    path('', views.IndexView.as_view(), name='index'), #para pintar el index 
    path('<int:pk>/', views.DetailView.as_view(), name='detail'), #para pintar detalles
    path('<int:question_id>/vote/', views.vote, name='vote'), #para ejecutar la acción de vote
    path('<int:pk>/results/', views.ResultsView.as_view(), name='results'), # para pintar los resultados una vez se ha votado de forma correcta y se ha puesto el voto dentro de la bbdd
    # path('api/', include(router.urls))
   # añadido para poder usar rest
]
