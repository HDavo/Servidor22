<?php

    //si no esta logueado

    if(!isset($_SESSION['nombre']) || $_SESSION['nombre'] == ""){
         //si el usuario presenta una cookie de recuerdame,

         if(isset($_COOKIE['recuerdame'])){
            // verificamos en la base de datos el usuario de ese token y lo obtenemos
            $DB->ejecuta(
                "select u.id, u.nombre
                from usuarios u
                left join toknes t on u.id = t.id_usuario
                where t.valor = '9098b0586cc4a45a8b982aa0bc74beb77911f68ec78df1a760376c86d422341b70085efc7d5b1a1aa2bd48f518fff176c9627e7b75171455c143c2f477794a2d'
                and t.expiracion > now()",
            );
            $token = $DB->obtenElDato();
            if($token  != null){
                //login
                $_SESSION['id'] = $token['id'];
                $_SESSION['nombre'] =$token['nombre'];
                // extiendo la vida del token una semana más
                
            }

         }
            
    }
       

    


?>