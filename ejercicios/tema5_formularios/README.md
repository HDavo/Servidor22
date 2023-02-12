Para evitar ataques XCS enviados a través de formularios
```
function limpieza($data){
    if(is_string($data)){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }else{
        return $data;
    }
}

//trim -> elimina espacios en blanco y otros caracteres del string recibido
//stripslashes -> elimina las comillas del string recibido.
//htmlspecialchars -> transforma los caracteres especiales HTML en equivalentes que se pueden insertar sin problema
```

