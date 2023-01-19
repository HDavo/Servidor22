<?php

    //si no esta logueado

    if(!isset($_SESSION['nombre']) || $_SESSION['nombre'] == ""){
         //si el usuario presenta una cookie de recuerdame,

         if(isset($_COOKIE['recuerdame'])){
            // verificamos en la base de datos el usuario de ese token y lo obtenemos
            $DB->ejecuta( //ACTUALIZAR LAS COSAS
                "SELECT u.id, u.nombre, t.valor
                FROM usuarios u
                LEFT JOIN tokens t ON u.id = t.id_usuario
                WHERE t.valor = ? AND t.expiracion > NOW()",
                $_COOKIE['recuerdame']

            );
            $tokenInfoDb = $DB->obtenElDato();

            if($tokenInfoDb  != null){
                //login
                $_SESSION['id'] = $tokenInfoDb['id'];
                $_SESSION['nombre'] =$tokenInfoDb['nombre'];
                // extiendo la vida del token una semana más (necesario para que en cada inicio de sesión nos recuerde y no caduque)
                    //vida de cookie
                    setcookie(
                        'recuerdame',
                        $tokenInfoDb ['valor'],
                        [
                            "expires" => (time()+(7*24*60*60)),
                            // "secure" => true,
                            "httponly" => true
                        ]
                        
                    );
                    //PONER LAS COSAS QUE FALTAN
                    //vida del token
                    $DB->ejecuta("UPDATE tokens SET expiracion = NOW() + INTERVAL DAY WHERE
                    valor = ?",
                    $tokenInfoDb['valor']
                );


            }

         }
            
    }
       

    


?>