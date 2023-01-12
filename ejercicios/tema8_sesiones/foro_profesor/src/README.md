## INSTALACIÓN

Crear base de datos

```
CREATE DATABASE linkenin;
CREATE USER 'linkenin'@'localhost' IDENTIFIED BY 'linkenin';
GRANT ALL PRIVILEGES ON linkenin.* TO 'linkenin'@'localhost' WITH GRANT OPTION;


Comenzar aplicación en limpio
```
mysql -u usuario -p nombrebasededatos < src/db.create.sql
<!-- completar con el repositorio -->

Cargar ejemplos

mysql -u usuario -p nombrebasededatos < src/db.ejempl.sql


## Ejecutar servidor dev

```
./rundevserver.sh 8080
```