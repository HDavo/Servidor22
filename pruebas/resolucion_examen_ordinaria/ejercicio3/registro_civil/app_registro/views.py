from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse
from . models import Persona, Pareja


# Create your views here.

# def index(request):
#     return HttpResponse("Hello, world. You're at the polls index.")

def index(request):
    # personas = Persona.objects.all()
    # parejas = Pareja.objects.all()
    
    lista = Pareja.objects.all()
    
    context = {
        'personas': lista,
    }
    
    
    return render(request, 'app_registro/index.html', context)


def detail(request, id):
    # cosa = get_object_or_404(Persona, pk=id)
    # return render(request, 'app_registro/detail.html', {'persona': cosa})

    persona = Pareja.objects.get(pk=id)

    return render(request, 'app_registro/detail.html', {'persona': persona})
