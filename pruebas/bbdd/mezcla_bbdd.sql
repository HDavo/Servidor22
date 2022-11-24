CREATE DATABASE examen;
CREATE USER 'examen'@'localhost' IDENTIFIED BY 'examen';
GRANT ALL PRIVILEGES ON examen.* TO 'examen'@'localhost' WITH GRANT OPTION;



CREATE DATABASE becarios;
CREATE USER 'pepe'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON becarios.* TO 'pepe'@'localhost' WITH GRANT OPTION;



CREATE DATABASE mibasededatos;
CREATE USER 'alumno'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON mibasededatos.* TO 'alumno'@'localhost' WITH GRANT OPTION;


CREATE TABLE Ciclistas ( 
    id int auto_increment PRIMARY KEY,
    nombre VARCHAR(255),
    num_trofeos INT
);

INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Jorge', 10);
INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Paco', 9);

INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Juan', 8);
INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Laura', 9);
INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Amparo', 4);
INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Iñaki', 8);






