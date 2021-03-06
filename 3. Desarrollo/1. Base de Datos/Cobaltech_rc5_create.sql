-- Proyecto COBALTECH
-- ADSI 1782186

-- Angie Lorena Clavijo Garcia
-- Christian Alfredo León Rodriguez
-- Leidy Patricia Quevedo Barreto

-- -------------------------------------------------------------------------------

-- Bloque base de datos

DROP DATABASE IF EXISTS COBALTECH;
CREATE DATABASE COBALTECH;
USE COBALTECH;

-- -------------------------------------------------------------------------------

-- BLOQUE CREACIÓN DE TABLAS
-- Para fácil navegación las tablas están en orden alfabetico

-- Tabla CATEGORIA

CREATE TABLE Categoria(
	Id_categoria int(3) NOT NULL AUTO_INCREMENT comment 'IdCategoria',
	Nombre_categoria varchar(40) NOT NULL comment 'Nombre Categoria de productos',
	PRIMARY KEY (Id_categoria)
);

-- Tabla CIUDAD

CREATE TABLE Ciudad(
	Id_ciudad int(5) NOT NULL AUTO_INCREMENT comment 'Id ciudad',
	Nombre_ciudad varchar(20) NOT NULL comment 'Nombre de la Ciudad',
	PRIMARY KEY (Id_ciudad)
);

-- Tabla EFECTIVO

CREATE TABLE Efectivo(
	Id_efectivo int(10) NOT NULL AUTO_INCREMENT,
	Descripcion varchar(30) NOT NULL,
	PRIMARY KEY (Id_efectivo)
);

-- Tabla ENVIO

CREATE TABLE Envio(
	Id_envio int(10) NOT NULL AUTO_INCREMENT comment 'IdEnvio',
	Codigo_rastreo varchar(15) NOT NULL comment 'Codigo rastreo del producto enviado',
	FacturaId_factura int(10) NOT NULL,
	Estado_envioId_estado_envio int(2) NOT NULL,
	PRIMARY KEY (Id_envio, FacturaId_factura)
);

-- Tabla ESTADO DE GARANTIA

CREATE TABLE Estado_garantia(
	Id_estado_garantia int(2) NOT NULL AUTO_INCREMENT comment 'Id estado garantía',
	Estado_garantia varchar(25) comment 'Tipo estado de la garantía',
	PRIMARY KEY (Id_estado_garantia)
);

-- Tabla ESTADO DE ENVIO

CREATE TABLE Estado_envio(
	Id_estado_envio int(5) NOT NULL AUTO_INCREMENT comment 'Id estado envío',
	Estado_envio varchar(25) NOT NULL comment 'Estado de envío del producto',
	PRIMARY KEY (Id_estado_envio)
);

-- Tabla FACTURA

CREATE TABLE Factura(
	Id_factura int(10) NOT NULL AUTO_INCREMENT comment 'Id factura',
	Fecha_venta date NOT NULL comment 'Fecha de venta del producto',
	Total float NOT NULL comment 'Precio total de productos',
	UsuarioId_usuario int(10) NOT NULL,
	ProductoId_producto int(10) NOT NULL,
	PRIMARY KEY (Id_factura)
);

-- Tabla GARANTIA

CREATE TABLE Garantia(
	Id_garantia int(10) NOT NULL AUTO_INCREMENT comment 'Id garantía',
	Fecha_ingreso date comment 'Fecha ingreso del producto a garantía',
	Descripcion VARCHAR(300) NOT NULL comment 'Breve descripción de la garantía',
	FacturaId_factura int(10) NOT NULL,
	Estado_garantiaId_estado_garantia int(10) NOT NULL,
	PRIMARY KEY (Id_garantia)
);

-- Tabla MARCA

CREATE TABLE Marca(
	Id_marca int(3) NOT NULL AUTO_INCREMENT comment 'Id marca',
	Nombre_marca varchar(20) NOT NULL comment 'Nombre marca del producto',
	PRIMARY KEY (Id_marca)
);

-- Tabla PAGO

CREATE TABLE Pago(
	Id_pago int(10) NOT NULL AUTO_INCREMENT comment 'Id pago',
	FacturaId_factura int(10) NOT NULL,
	Tarjeta_creditoId_tarjeta_credito int(10),
	Tarjeta_debitoId_tarjeta_debito int(10),
	EfectivoId_efectivo int(10),
	PRIMARY KEY (Id_pago, FacturaId_factura)
) comment='Método de pago seleccionado por el usuario';

-- Tabla PRODUCTO

CREATE TABLE Producto(
	Id_producto int(10) NOT NULL AUTO_INCREMENT comment 'Id producto',
	Nombre_producto varchar(50) NOT NULL comment 'Nombre del producto',
	Descripcion varchar(255) NOT NULL comment 'Descripción del producto',
	Existencia int(3) NOT NULL comment 'Stock de existencias del producto',
	Imagen varchar(250) NOT NULL comment 'Imagen del producto',
	Precio float NOT NULL comment 'Precio del producto',
	CategoriaId_categoria int(3) NOT NULL,
	MarcaId_marca int(3) NOT NULL,
	ProveedorId_proveedor int(2) NOT NULL,
	PRIMARY KEY(Id_producto)
);

-- Tabla PROVEEDOR

CREATE TABLE Proveedor(
	Id_proveedor int(3) NOT NULL AUTO_INCREMENT comment 'Id proveedor',
	Razon_social varchar(25) NOT NULL comment 'Nombre razón social del proveedor',
	Contacto varchar(50) comment 'Nombre persona contacto del proveedor',
	Cargo varchar(25) comment 'Cargo del contacto',
	Telefono varchar(50) comment 'Teléfono del proveedor',
	Extension varchar(25) comment 'Extensión del teléfono del proveedor',
	Movil varchar(60) comment 'Teléfono Móvil del proveedor',
	Direccion varchar(100) comment 'Dirección del proveedor',
	-- Bodega = Dirección de Bodega o dirección de despachos
	Bodega varchar(150) comment 'Dirección Bodega del proveedor',
	Website varchar(50) comment 'WebSite del proveedor',
	Email varchar(40) comment 'Email del proveedor',
	PRIMARY KEY (Id_proveedor)
);

-- Tabla ROL

CREATE TABLE Rol(
	Id_rol int(2) NOT NULL AUTO_INCREMENT,
	Tipo_rol varchar(20) NOT NULL,
	PRIMARY KEY (Id_rol)
);

-- Tabla TARJETA CREDITO

CREATE TABLE Tarjeta_credito(
	Id_tarjeta_credito int(10) NOT NULL AUTO_INCREMENT comment 'Id tarjeta crédito',
	Titular varchar(25) NOT NULL comment 'Nombre que aparece en la tarjeta de crédito',
	Numero varchar(16) NOT NULL comment 'Número de la tarjeta de crédito',
	Fecha_vencimiento DATE NOT NULL comment 'Fecha de vencimiento de la tarjeta de crédito',
	CVV varchar(3) NOT NULL comment 'Número oculto al respaldo de la tarjeta de crédito',
	PRIMARY KEY (Id_tarjeta_credito)
);

-- Tabla TARJETA DEBITO

CREATE TABLE Tarjeta_debito(
	Id_tarjeta_debito int(10) NOT NULL AUTO_INCREMENT comment 'Id tarjeta débito',
	Transaccion varchar(16) NOT NULL comment 'Número de aprobación de transacción',
	PRIMARY KEY (Id_tarjeta_debito)
);

-- Tabla TIPO DE DOCUMENTO  

CREATE TABLE Tipo_documento(
	Id_tipodoc int(3) NOT NULL AUTO_INCREMENT comment 'Id tipo de documento',
	Abreviatura varchar(3) NOT NULL comment 'Abreviatura del tipo de documento',
	Tipodoc varchar(50) NOT NULL comment 'Nombre del tipo de documento',
	PRIMARY KEY (Id_tipodoc)
);

-- Tabla USUARIO
CREATE TABLE Usuario(
	Id_usuario int(10) NOT NULL AUTO_INCREMENT comment 'Id usuario',
	Doc_usuario varchar (15) NOT NULL UNIQUE comment 'Documento del Usuario',
	Primer_nombre varchar(20) NOT NULL comment 'Primer nombre de usuario',
	Segundo_nombre varchar(20) comment 'Segundo nombre de usuario',
	Primer_apellido varchar(20) NOT NULL comment 'Primer apellido de usuario',
	Segundo_apellido varchar(20) comment 'Segundo apellido de usuario',
	Correo_electronico varchar(40) NOT NULL UNIQUE comment 'Correo electrónico de usuario',
	Contrasena varchar(20) NOT NULL comment 'Contraseña de usuario',
	Direccion varchar(50) comment 'Dirección residencia de usuario, opcional',
	Telefono char(10) comment 'Teléfono de envío del usuario, opcional',
	Movil char(12) comment 'Teléfono de envío del usuario, opcional',
	RolId_rol int(2) NOT NULL,
	CiudadId_ciudad int(5) NOT NULL,
	Tipo_documentoId_tipodoc int(3) NOT NULL,
	PRIMARY KEY (Id_usuario, Tipo_documentoId_tipodoc)
);
-- -------------------------------------------------------------------------------

-- TABLAS DE SISTEMA

CREATE TABLE ServidorCorreo(
	Id_servidor int(10) NOT NULL AUTO_INCREMENT,
	Tipo_servidor_Web varchar(255) NOT NULL,
	Nombre_servidor   varchar(10) NOT NULL,
	PRIMARY KEY (Id_Servidor)
);

CREATE TABLE Error(
	Id_error int(10) NOT NULL AUTO_INCREMENT comment 'IdError',
	Descripcion_error varchar(255) NOT NULL comment 'Descripción del error',
	Fecha_error date NOT NULL comment 'Fecha de error',
	PRIMARY KEY (Id_Error)
);

-- -------------------------------------------------------------------------------

-- LLAVES FORANEAS

ALTER TABLE Envio 
ADD FOREIGN KEY (FacturaId_factura) REFERENCES Factura (Id_factura),
ADD FOREIGN KEY (Estado_envioId_estado_envio) REFERENCES Estado_envio(Id_estado_envio);

ALTER TABLE Factura 
ADD FOREIGN KEY (UsuarioId_usuario) REFERENCES Usuario (Id_usuario),
ADD FOREIGN KEY (ProductoId_producto) REFERENCES Producto (Id_producto);

ALTER TABLE Garantia 
ADD FOREIGN KEY (FacturaId_factura) REFERENCES Factura (Id_factura),
ADD FOREIGN KEY (Estado_garantiaId_estado_garantia) REFERENCES Estado_garantia (Id_estado_garantia);

ALTER TABLE Pago
ADD FOREIGN KEY (FacturaId_Factura) REFERENCES Factura (Id_Factura),
ADD FOREIGN KEY (Tarjeta_creditoId_tarjeta_credito) REFERENCES Tarjeta_credito (Id_tarjeta_credito),
ADD FOREIGN KEY (Tarjeta_debitoId_tarjeta_debito) REFERENCES Tarjeta_debito (Id_tarjeta_debito),
ADD FOREIGN KEY (EfectivoId_efectivo) REFERENCES Efectivo (Id_efectivo);

ALTER TABLE Producto 
ADD FOREIGN KEY (CategoriaId_categoria) REFERENCES Categoria (Id_categoria),
ADD FOREIGN KEY (MarcaId_marca) REFERENCES Marca (Id_marca),
ADD FOREIGN KEY (ProveedorId_proveedor) REFERENCES Proveedor (Id_proveedor);

ALTER TABLE Usuario
ADD FOREIGN KEY (RolId_rol) REFERENCES Rol (Id_rol),
ADD FOREIGN KEY (CiudadId_ciudad) REFERENCES Ciudad (Id_ciudad),
ADD FOREIGN KEY (Tipo_documentoId_tipodoc) REFERENCES Tipo_documento (Id_tipodoc);