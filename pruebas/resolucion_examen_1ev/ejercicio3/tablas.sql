-- para iniciar la bbdd y las tablas necesarias para que el ejercicio funcione

CREATE DATABASE examen; --NB BASE DE DATOS
CREATE USER 'examen'@'localhost' IDENTIFIED BY 'examen'; --NB USUARIO - CONTRASEÑA (IDENTIFIED)
GRANT ALL PRIVILEGES ON examen.* TO 'examen'@'localhost' WITH GRANT OPTION; --CONCEDER TODOS LOS PRIVILEGIOS AL USUARIO EXAMEN SOBRE LA BASE DE DATOS

-- después de haber hecho lo anterior 
USE examen;

--Iniciar la tabla como paso final.
CREATE TABLE logs (
    id int auto_increment PRIMARY KEY,
    navegador VARCHAR(255),
    tiempo int 
);