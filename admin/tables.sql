CREATE TABLE USUARIO(
	id_usuario integer primary key auto_increment,
	username varchar(80),
	password varchar(80),
	pseudonimo varchar(30),
	bio varchar(80),
	facebook varchar(80),
	instagram varchar(80),
	twitter varchar(80)
);
CREATE TABLE MENSAJES(
	id_mensaje integer primary key auto_increment,
	asunto varchar(80),
	status varchar(80),
	contenido varchar(100),
	facebook varchar(100),
	correo varchar(100)
);
CREATE TABLE POST(
	id_post integer primary key auto_increment,
	titulo varchar(100),
	contenido TEXT,
	id_usuario_fk integer,
	FOREIGN KEY (id_usuario_fk) 
	REFERENCES USUARIO(id_usuario)
);
CREATE TABLE IMG(
	id_img integer primary key auto_increment,
	url varchar(80),
	id_post_fk integer,
	FOREIGN KEY (id_post_fk)
	REFERENCES POST(id_post)
);
CREATE TABLE TAGS(
	id_tags integer primary key auto_increment,
	nombre_tag varchar(100)
);
CREATE TABLE POSTS_TAGS(
	id_post_tag integer primary key auto_increment,
	id_tags_fk integer,
	id_post_fk integer,
	FOREIGN KEY (id_post_fk) 
	REFERENCES POST(id_post),
	FOREIGN KEY (id_tags_fk) 
	REFERENCES TAGS(id_tags)
);

CREATE TABLE GALERIA(
	id_galeria integer primary key auto_increment,
	nombre_foto varchar(80),
	url varchar(80),
	id_usuario_fk integer,
	FOREIGN KEY (id_usuario_fk) 
	REFERENCES USUARIO(id_usuario)
);
CREATE TABLE MENSAJES_GALERIA(
	id_mensajes_galeria integer primary key auto_increment,
	id_galeria_fk integer,
	id_mensaje_fk integer,
	FOREIGN KEY (id_galeria_fk) 
	REFERENCES GALERIA(id_galeria),
	FOREIGN KEY (id_mensaje_fk) 
	REFERENCES MENSAJES(id_mensaje)
);
insert into USUARIO (username) VALUES('admin');