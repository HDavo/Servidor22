from django.contrib import admin
from . models import Usuario, Hilo, Comentario
# Register your models here.


admin.site.register(Usuario)
admin.site.register(Hilo)
admin.site.register(Comentario)