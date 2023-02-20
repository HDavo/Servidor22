import datetime

from django.db import models
from django.utils import timezone
from django.contrib import admin


class Usuario(models.Model):
    nombre_usuario = models.CharField(max_length=100)
    email = models.EmailField()
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
    fecha_creacion = models.DateTimeField('fecha_creacion_hilo')
    
    def __str__(self):
        return f"{self.creador} ({self.titulo}) ({self.fecha_creacion})"

class Comentario(models.Model):
    autor = models.ForeignKey(Usuario, on_delete=models.CASCADE)
    nombre_hilo = models.ForeignKey(Hilo, on_delete=models.CASCADE)
    fecha_creacion = models.DateTimeField('fecha_creacion_com')
    contenido = models.TextField()
    imagen_com_1 = models.ImageField(upload_to='f_hilo', null=True)
    imagen_com_2 = models.ImageField(upload_to='f_hilo', null=False)
    imagen_com_3 = models.ImageField(upload_to='f_hilo', null=False)
    
    def __str__(self):
        return f"{self.autor} ({self.nombre_hilo}) ({self.fecha_creacion}) ({self.contenido})"
    
    def getImages(self):
        return [self.imagen_com_1, self.imagen_com_2, self.imagen_com_3]
    
    def verComentario(self):
        self.__str__()
        self.getImages()
    
    
""" from django.db import models


class Usuario(models.Model):
    question_text = models.CharField(max_length=200)
    pub_date = models.DateTimeField('date published')


class Hilo(models.Model):
    question = models.ForeignKey(Usuario, on_delete=models.CASCADE)
    choice_text = models.CharField(max_length=200)
    votes = models.IntegerField(default=0) """