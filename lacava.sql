create database lacava;

use lacava;

create table datos(
id int auto_increment not null,
nombre varchar (30) not null,
Apellido varchar( 20) not null,
e_mail varchar (30) not null,
Telefono int(15) not null,
asistentes int(3) not null,
hora int(4) not null,
fecha date not null,
primary key(id)

);
