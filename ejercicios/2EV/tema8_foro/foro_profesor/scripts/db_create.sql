--poner siempre 255 para que se pueda cifrar sin problemas

--comprobar el último push para ver si se han cambiado cosas de este fichero antes de ponerlo dentro de mariadb
drop table if exists usuarios on delete cascade;
create table usuarios (
    id int AUTO_INCREMENT,
    nombre varchar(255),
    passwd varchar(255), 
    img varchar(255),
    correo varchar(255),
    descripcion TEXT,
    constraint pk_us primary key (id),
);

drop table if exists tokens on delete cascade;
create table tokens (
    id int AUTO_INCREMENT,
    id_usuario int,
    valor varchar(255),
    expiracion datetime,
    constraint pk_tok primary key (id),
    constraint fk_tok foreign key (id_usuario) references usuarios on delete cascade 
);

-- revisar las cosas que puedan faltar del repositorio


-- DROP TABLE IF EXISTS usuarios;
-- CREATE TABLE usuarios (
--     id int auto_increment PRIMARY KEY,
--     nombre VARCHAR(255),
--     passwd VARCHAR(255),
--     img    VARCHAR(255),
--     correo VARCHAR(255),
--     descripcion TEXT
-- );

-- DROP TABLE IF EXISTS tokens;
-- CREATE TABLE tokens (
--     id int auto_increment PRIMARY KEY,
--     id_usuario int,
--     valor VARCHAR(255),
--     expiracion DATETIME,
--     CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
-- );