create database RAVINE;
use RAVINE;
drop database RAVINE;


create table users(
	id integer not null auto_increment,
	name varchar(30),
	email varchar(50),
	password varchar(100),
	img varchar(100),
	level TINYINT,
	telefono varchar(15),
	direccion varchar(255),
	primary key (id)
);

select * from users;

insert into users values (0,'Carlitos','admin@gmail.com','123','default.jpg',1,'6361310420','Calle rio #120');



create table proveedor(
id_proveedor integer not null auto_increment,
nombre varchar(30),
email varchar(50),
direccion varchar(50),
telefono varchar(15),

primary key(id_proveedor)
)

insert into proveedor values (0,'ala','prov1@gmail.com','calesitaazul','6361310422');
select * from proveedor;

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

drop table if exists ordenes;

create table ordenes(
	orden_id integer not null auto_increment,
	usuario_id int,
	fecha date,
	estado varchar(15),
	total decimal(10,2),
	primary key (orden_id),
	CONSTRAINT fk_users FOREIGN KEY (usuario_id) REFERENCES users(id)  ON DELETE CASCADE
);



