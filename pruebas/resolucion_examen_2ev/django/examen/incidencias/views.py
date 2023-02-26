from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse, HttpResponseRedirect
from django.urls import reverse
from django.utils import timezone
from .models import Linea, Estacion, Incidencia


# def index(request):
#     return HttpResponse("Hello, world. You're at the polls index.")

def listado(request):
    lineas = Linea.objects.all()
    estaciones = Estacion.objects.all()
    return render(request, 'incidencias/listado.html', {'lineas': lineas, 'estaciones': estaciones})

# def incidencia(request, id):
#     estacion  = Estacion.objects.get(id=id)
#     return render(request, "incidencias/incidencia.html", {
#         "incidencia": estacion
#     })
    
def incidencia(request, id):
    estacion = get_object_or_404(Estacion, id=id)
    texto_incidencia = request.POST.get('texto_incidencia', False)

    if texto_incidencia:
        incidencia = Incidencia(texto_incidencia=texto_incidencia, fecha_incidencia=timezone.now(), nombre_estacion=Estacion.objects.get(id=id))
        incidencia.save()

        return HttpResponseRedirect(reverse('incidencias:exito'))
    else:
        return render(request, 'incidencias/incidencia.html', {
            'estacion': estacion,
            'error': 'campo vacío'
        })

def exito(request):
    return render(request, 'incidencias/listado.html', {
        'lineas' : Linea.objects.all(),
        'estaciones': Estacion.objects.all(),
        'mensaje_exito': '--- Su incidencia ha sido dada de alta ---'
    })