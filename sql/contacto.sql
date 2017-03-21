
use contacto;
create table datos(
id int auto_increment not null,
nombre varchar(80) not null,
e_mail varchar(80) not null,
asunto varchar(30) not null,
mensaje varchar(400) not null,
primary key(id)
);
