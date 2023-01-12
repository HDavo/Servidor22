#!/bin/bash
#antes de ejecutarlo cambiar los permisos de ejecución para este archivo


if [[-ne ""]]; then
    PORT=$1
else
    PORT=8080
fi

php -S localhost::$PORT -t public