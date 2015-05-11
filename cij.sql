CREATE TABLE medicina (
	id_medicina int auto_increment,
	concepto varchar(255) not null,
	presentacion varchar(255) not null,
	unidad_medida varchar(255) not null,
	lote varchar(255) unique not null,
	caducidad date not null,
	cantidad int not null,
	ingreso date not null,
	primary key (id_medicina)
);

CREATE TABLE usuario(
	id_usuario int auto_increment not null,
	usuario varchar(255) not null,
	password varchar(255) not null,
	tipo varchar(255) not null,
	primary key(id_usuario)
);