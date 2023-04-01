
""" La documentación en python puede hacerse mediante comentarios, los de una sola línea son visibles dentro del código y no afectan a la ejecución,
mientras que si hacemos un comentario con 3 comillas dobles dentro de una función podremos ver esos comentarios
en tiempo de ejecución si lo imprimimos de una manera específica.
Puede usarse para informar sobre clases, funciones, módulos importados... """

class Areas:
    
    """Clase hecha para calcular áreas de las diferentes formas geométricas.
    """
    def area_cuadrado(lado):
        
        return "El área de un cuadrado es: " + str(lado * lado)

    def area_triangulo(base, altura):
        """ La documentación en python puede hacerse mediante comentarios, los de una sola línea son visibles dentro del código y no afectan a la ejecución,
        mientras que si hacemos un comentario con 3 comillas dobles dentro de una función podremos ver esos comentarios
        en tiempo de ejecución si lo imprimimos de una manera específica."""
        
        return "El área del triángulo es: " + str((base * altura)/2)

# ----------------------------Formas de mostrar la documentación--------------------------------------------
    """
    Puede hacerse mediante help() o bien mediante print(funcion.__doc__).
    Para acceder a esa documentación debe tenerse en cuenta la estructura y jerarquía de nuestro código.
    Si pedimos documentación de una clase nos devolverá la documentación propia de la clase y
    además la documentación de los elementos que la tengan dentro de ella.
    Ej: Areas.area_triangulo
    
    """

help(Areas)
