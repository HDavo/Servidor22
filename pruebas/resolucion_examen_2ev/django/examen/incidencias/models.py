from django.db import models

# Create your models here.

class Linea(models.Model):
    nombre_linea = models.CharField(max_length=200, null=False)
    color = models.CharField(max_length=200, null=False)
    distancia = models.IntegerField(default=0)
    
    def __str__(self):
        return f"{self.nombre_linea}"
    
class Estacion(models.Model):
    nombre_estacion = models.CharField(max_length=200, null=False)
    linea = models.ForeignKey(Linea, on_delete=models.CASCADE)
    
    def __str__(self):
        return f"{self.nombre_estacion}"
    
    
class Incidencia(models.Model):
    nombre_estacion = models.ForeignKey(Estacion, on_delete=models.CASCADE)
    texto_incidencia = models.CharField(max_length=500, null=False)
    fecha_incidencia = models.DateTimeField('fecha_hora', null=False)
    # nombre_estacion = models.ForeignKey(Estacion, on_delete=models.CASCADE)
    
    def __str__(self):
        return f"{self.nombre_estacion} ({self.nombre_estacion.linea}) {self.texto_incidencia}"
    