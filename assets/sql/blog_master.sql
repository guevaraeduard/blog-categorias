CREATE TABLE categorias(
    id int(255) auto_increment not null,
    nombre varchar(250) not null,
    CONSTRAINT pk_categorias PRIMARY KEY(id) 
)ENGINE=InnoDB;

CREATE TABLE usuarios(
    id int(255) auto_increment not null,
    nombre varchar(255) not null,
    apellido varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    fecha date,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE entradas(
    id int(255) auto_increment not null,
    usuario_id int(255) not null,
    categoria_id int(255) not null,
    titulo varchar(255) not null,
    descripcion varchar(255) not null,
    fecha date,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_categorias FOREIGN KEY(cartegoria_id) REFERENCES categorias(id)
)ENGINE=InnoDB;