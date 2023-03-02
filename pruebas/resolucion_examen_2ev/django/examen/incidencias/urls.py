# para las de aplicaciones:
from django.urls import path

from . import views

app_name = 'incidencias'
urlpatterns = [
    path('listado/', views.listado, name='listado'),
    path('incidencias/<int:id>', views.incidencia, name='incidencia'),
    path('exito/', views.exito, name='exito'),
    path('busqueda_incidencias/', views.busqueda_incidencias, name='busqueda'),
    path('busqueda_incidencias/buscar/', views.buscar, name='resultado'),
]