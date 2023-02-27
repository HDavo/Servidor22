from django.db import models

# Create your models here.

class Biblioteca(models.Model):
    nombre = models.CharField(max_length=200)
    direccion = models.CharField(max_length=200)
    foto = models.ImageField(upload_to="aplicacion/", blank=True, null=True)
    
    def __str__(self):
        return self.nombre
    
class Libro(models.Model): # ejemploe n:m
    titulo = models.CharField(max_length=200)
    pub_date = models.DateField('date published')
    bibliotecas = models.ManyToManyField(Biblioteca) 
    
    # def __str__(self):
    #     return self.titulo
    
    def _str_(self):
        valor = ", ".join(str(v) for v in self.bibliotecas.all())
        return f"{self.titulo} ({valor})"