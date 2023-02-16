import datetime

from django.db import models
from django.utils import timezone
from django.contrib import admin


class Usuario(models.Model):
    nombre_usuario = models.CharField(max_length=100)
    descripcion = models.TextField()
    fecha_registro = models.DateTimeField('fecha_registro')
    foto_perfil = models.ImageField(upload_to='f_perfil', null=False)
    
    
    def __str__(self):
        return f"{self.nombre_usuario} ({self.descripcion}) ({self.fecha_registro})"
    
    def getFoto(self):
        return [self.foto_perfil]
    

class Hilo(models.Model):
    creador = models.ForeignKey(Usuario, on_delete=models.CASCADE)
    titulo = models.CharField(max_length=100)
    fecha_creacion = models.DateTimeField('fecha_creacion')
    contenido = models.TextField()
    imagen_hilo_1 = models.ImageField(upload_to='f_hilo', null=False)
    imagen_hilo_2 = models.ImageField(upload_to='f_hilo', null=True)
    imagen_hilo_3 = models.ImageField(upload_to='f_hilo', null=True)
    
    def __str__(self):
        return f"{self.creador} ({self.titulo}) ({self.fecha_creacion})"

class Comentario(models.Model):
    autor = models.ForeignKey(Usuario, on_delete=models.CASCADE)
    nombre_hilo = models.ForeignKey(Hilo, on_delete=models.CASCADE)