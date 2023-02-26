from django.contrib import admin
from .models import Linea, Estacion, Incidencia
# Register your models here.


class EstacionInline(admin.TabularInline):
    model = Estacion
    extra = 3

class LineaMetroAdmin(admin.ModelAdmin):
    fieldsets = [
        ('Nombre de la linea',              {'fields': ['nombre_linea']}),
        ('Color',               {'fields': ['color']}),
        ('Distancia',           {'fields': ['distancia']}),
    ]
    inlines = [EstacionInline]

class IncidenciaAdmin(admin.ModelAdmin):
    fieldsets = [
        ('Info',               {'fields': ['texto_incidencia']}),
        ('Fecha y hora',    {'fields': ['fecha_incidencia'],
                           'classes': ['collapse']}),
    ]
    list_filter = ['fecha_incidencia']

# Register your models here.
admin.site.register(Linea, LineaMetroAdmin)
# admin.site.register(Estacion)
admin.site.register(Incidencia, IncidenciaAdmin)