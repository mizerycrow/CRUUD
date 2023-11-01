DROP DATABASE usuario;
CREATE DATABASE usuario;

USE usuario;

CREATE TABLE usuario_site(
Id int primary key auto_increment not null,
email varchar(100) not null,
usuario varchar(100) not null,
senha int not null
);
select * from usuario_site;


