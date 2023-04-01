import doctest

def comprueba_email(mailUsuario):
    
    """
    Función para comprobar que el email recibido cumple con lo necesario para ser considerado como correo.
    En este caso se valora que tenga @ en la posición correcta.
    
    >>> comprueba_email('pepe@pepemail.com')
    True
    
    >>> comprueba_email('agustin.pepemail.com')
    False
    
    >>> comprueba_email('manolo@pepemail.com')
    True
    
    >>> comprueba_email('alberto.mail@')
    False
    
    >>> comprueba_email('pepe@pepemail@.com')
    True
    
    """
    
    arroba = mailUsuario.count('@')
    
    if arroba!=1 or mailUsuario.rfind('@')==(len(mailUsuario)-1) or mailUsuario.find('@')==0:
        return False
    else:
        return True
    
doctest.testmod()