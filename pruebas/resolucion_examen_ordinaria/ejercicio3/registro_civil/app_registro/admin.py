from django.contrib import admin
from .models import Persona, Pareja




""" class EstacionInline(admin.TabularInline):
    model = Estacion
    extra = 3 """

class PersonaAdmin(admin.ModelAdmin):
    fieldsets = [
        ('Nombre',              {'fields': ['nombre']}),
        ('Apellido 1',               {'fields': ['apellido1']}),
        ('Apellido 2',           {'fields': ['apellido2']}),
        ('Descripción',           {'fields': ['descripcion']}),
    ]
    # inlines = [EstacionInline]


    # list_filter = ['fecha_incidencia']

# Register your models here.
admin.site.register(Persona, PersonaAdmin)
# admin.site.register(Estacion)
admin.site.register(Pareja)