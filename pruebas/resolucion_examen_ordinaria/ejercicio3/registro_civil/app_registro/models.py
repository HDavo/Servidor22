from django.db import models

# Create your models here.

class Persona(models.Model):
    nombre = models.CharField(max_length=200)
    apellido1 = models.CharField(max_length=200)
    apellido2 = models.CharField(max_length=200)
    descripcion = models.TextField(max_length=600)
    
    def __str__(self):
        return f"{self.nombre} {self.apellido1} {self.apellido2} ({self.descripcion})"

class Pareja(models.Model):
    integrante1 = models.ForeignKey(Persona, on_delete=models.CASCADE,related_name='parte_1')
    integrante2 = models.ForeignKey(Persona, on_delete=models.CASCADE, related_name='parte_2')
    fecha = models.DateField('fecha')
    lugar = models.TextField(max_length=600)


    def __str__(self):
        return f"{self.integrante1.apellido1} {self.integrante2.apellido1} ({self.fecha})"


 