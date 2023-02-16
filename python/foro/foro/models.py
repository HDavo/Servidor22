import datetime

from django.db import models
from django.utils import timezone
from django.contrib import admin


class Usuario(models.Model):
    nombre_usuario = models.CharField(max_length=100)
    descripcion = models.TextField()
    fecha_registro = models.DateTimeField('fecha_registro')
    foto_perfil = models.ImageField(upload_to='')
    
    
    def __str__(self):
        return f"{self.nombre_usuario} ({self.descripcion})"