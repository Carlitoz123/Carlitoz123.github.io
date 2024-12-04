create database RAVINE;
use RAVINE;


create table usuario(
id_user integer not null auto_increment,
nombre varchar(30),
email varchar(50),
password varchar(20),
telefono varchar(15),
fecha_registro date,

primary key (id_user)
)



create table proveedor(
id_proveedor integer not null auto_increment,
nombre varchar(30),
email varchar(50),
direccion varchar(50),
telefono varchar(15),

primary key(id_proveedor)
)

create table categoria(
id_categoria integer not null auto_increment,
nombre varchar(30),
descripcion varchar(100),
primary key (id_categoria)
)




create table product(
id_product integer not null auto_increment,
nombre varchar(30),
descripcion varchar(100),
price decimal,
stock numeric(15),
id_proveedor integer,
id_categoria integer,

primary key(id_product),


constraint id_categoria_fk foreign key(id_categoria) references categoria(id_categoria) on delete cascade,

constraint id_proveedor_fk foreign key (id_proveedor) references proveedor(id_proveedor) on delete cascade
)



