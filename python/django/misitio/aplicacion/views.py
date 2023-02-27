from django.shortcuts import render
from django.http import HttpResponse
from .models import Biblioteca, Libro


def index(request):
    bibliotecas = Biblioteca.objects.all()
    return render(request, "aplicacion/index.html", {
        'bibliotecas' : bibliotecas
    })
    # return HttpResponse("Hello, world. You're at the polls index.")


def detalle(request, id):
    biblioteca = Biblioteca.objects.get(id=id)
    return render(request, "aplicacion/detalle.html",{
        "biblioteca": biblioteca,
        "libros": Libro.objects.filter(bibliotecas=biblioteca)
        # debo coincidir con lo puesto en templates
    })
    
