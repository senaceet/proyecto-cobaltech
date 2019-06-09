-- Proyecto COBALTECH
-- ADSI 1782186
-- Angie Lorena Clavijo Garcia
-- Christian Alfredo León Rodriguez
-- Freddy Jhovan Moreno
-- Lady Patricia Quevedo Barreto

-- Bloque base de datos

DROP DATABASE COBALTECH;
CREATE DATABASE COBALTECH;
USE COBALTECH;

-- BLOQUE CREACIÓN DE TABLAS

-- Tabla CATEGORIA

CREATE TABLE Categoria(
	Id_Categoria int(10) NOT NULL AUTO_INCREMENT comment 'IdCategoria',
	Nombre_Categoria varchar(10) NOT NULL comment 'Nombre Categoria de productos',
	PRIMARY KEY (Id_Categoria)
);

-- Tabla CIUDAD

CREATE TABLE Ciudad(
	Id_Ciudad int(10) NOT NULL AUTO_INCREMENT comment 'Id ciudad',
	Nombre_Ciudad varchar(20) NOT NULL comment 'Nombre de la Ciudad',
	PRIMARY KEY (Id_Ciudad)
);

-- Tabla ENVIO

CREATE TABLE Envio(
	Id_Envio int(10) NOT NULL comment 'IdEnvio',
	Codigo_Rastreo varchar(15) NOT NULL comment 'Codigo rastreo del producto enviado',
	FacturaId_Factura int(10) NOT NULL,
	Estado_EnvioId_Estado_Envio int(10) NOT NULL,
	PRIMARY KEY (Id_Envio, FacturaId_Factura)
);

-- Tabla ESTADO DE GARANTIA

CREATE TABLE Estado_Garantia(
	Id_Estado_Garantia int(6) NOT NULL,
	Tipo_Estado varchar(12) comment 'Tipo estado de la garantia',
	PRIMARY KEY (Id_Estado_Garantia)
);

-- Tabla ESTADO DE ENVIO

CREATE TABLE Estado_Envio(
	Id_Estado_Envio int(2) NOT NULL comment 'IdEstadoEnvio',
	Estado_Envio varchar(10) NOT NULL comment 'Estado de envio del producto',
	PRIMARY KEY (Id_Estado_Envio)
);

-- Tabla FACTURA

CREATE TABLE Factura(
	Id_Factura int(10) NOT NULL,
	Fecha_Venta date NOT NULL comment 'Fecha de venta del producto',
	Total float NOT NULL comment 'Precio total de productos',
	UsuarioId_Usuario int(10) NOT NULL,
	ProductoId_Producto int(10) NOT NULL,
	PRIMARY KEY (Id_Factura)
);

-- Tabla GARANTIA

CREATE TABLE Garantia(
	Id_Garantia int(6) NOT NULL AUTO_INCREMENT,
	Fecha_Ingreso date comment 'Fecha ingreso del producto a garantia',
	Descripcion VARCHAR(300) NOT NULL,
	FacturaId_Factura int(10) NOT NULL,
	Estado_GarantiaId_Estado_Garantia int(10) NOT NULL,
	PRIMARY KEY (Id_Garantia)
);

-- Tabla MARCA

CREATE TABLE Marca(
	Id_Marca int(3) NOT NULL AUTO_INCREMENT comment 'IdMarca',
	Nombre_Marca varchar(10) NOT NULL comment 'Nombre Marca del producto',
	PRIMARY KEY (Id_Marca)
);

-- Tabla PAGO

CREATE TABLE Pago(
	Id_Pago int(10) NOT NULL,
	FacturaId_Factura int(10) NOT NULL,
    Tarjeta_CreditoId_Tarjeta_Credito int(10),
    Tarjeta_DebitoId_Tarjeta_Debito int(10),
    EfectivoId_Efectivo int(10),
	PRIMARY KEY (Id_Pago,
		FacturaId_Factura)
) comment='Metodo de pago seleccionado por el usuario';

-- Tabla TARJETA DE CREDITO

CREATE TABLE Tarjeta_Credito(
	Id_Tarjeta_Credito INTEGER(9) NOT NULL AUTO_INCREMENT,
	Titular VARCHAR(25) NOT NULL,
	Numero BIGINT(16) NOT NULL,
	Fecha_Vencimiento DATE NOT NULL,
	CVV SMALLINT(3) NOT NULL,
	PRIMARY KEY (Id_Tarjeta_Credito)
);

-- Tabla TARJETA DEBITO

CREATE TABLE Tarjeta_Debito(
	Id_Tarjeta_Debito INTEGER(9) NOT NULL AUTO_INCREMENT,
	Titular VARCHAR(25) NOT NULL,
	Numero BIGINT(16) NOT NULL,
	PRIMARY KEY (Id_Tarjeta_Debito)
);

-- Tabla EFECTIVO

CREATE TABLE Efectivo(
	Id_Efectivo INTEGER(9) NOT NULL AUTO_INCREMENT,
	Descripcion VARCHAR(30) NOT NULL,
	PRIMARY KEY (Id_Efectivo)
);

-- Tabla PRODUCTO

CREATE TABLE Producto(
	Id_Producto int(10) NOT NULL comment 'IdProducto',
	Nombre_Producto varchar(30) NOT NULL comment 'Nombre del producto',
	Descripcion varchar(255) NOT NULL comment 'Descripción del producto',
	Existencias int(3) NOT NULL comment 'Cantidad de existencias del producto',
	Imagen blob NOT NULL comment 'Imagen del producto',
	Precio float NOT NULL comment 'Precio del producto',
	CategoriaId_Categoria int(10) NOT NULL,
	MarcaId_Marca int(3) NOT NULL,
	ProveedorId_Proveedor int(2) NOT NULL,
	PRIMARY KEY(Id_Producto)
);

-- Tabla PROVEEDORES

CREATE TABLE Proveedor(
	Id_Proveedor int(2) NOT NULL AUTO_INCREMENT,
	Razon_Social varchar(25) NOT NULL comment 'Nombre razon social del proveedor',
	Contacto varchar(50) NOT NULL comment 'Contacto del proveedor',
	Telefono varchar(10) NOT NULL comment 'Teléfono del productor',
	Extension varchar(5) comment 'Extension del teléfono del proveedor',
	Direccion varchar(50) comment 'Dirección del proveedor',
	WebSite varchar(50) comment 'WebSite del proveedor',
	Email varchar(40) comment 'Email del proveedor',
	PRIMARY KEY (Id_Proveedor)
);

-- Tabla ROL

CREATE TABLE Rol(
	Id_Rol int(2) NOT NULL AUTO_INCREMENT,
	Tipo_Rol varchar(15) NOT NULL,
	PRIMARY KEY (Id_Rol)
);

-- Tabla TIPO DE DOCUMENTO  
  
CREATE TABLE Tipo_documento(
	Id_tipodoc int(3) NOT NULL AUTO_INCREMENT,
	Tipodoc varchar(25) NOT NULL,
	Abreviatura varchar(3) NOT NULL,
	PRIMARY KEY (ID_tipodoc)
);

-- Tabla USUARIO

CREATE TABLE Usuario(
	Id_Usuario int(10) NOT NULL comment 'Id usuario',
	Primer_Nombre varchar(20) NOT NULL comment 'Primer nombre de usuario',
	Segundo_Nombre varchar(20) comment 'Segundo nombre de usuario',
	Primer_Apellido varchar(20) NOT NULL comment 'Primer apellido de usuario',
	Segundo_Apellido varchar(20) comment 'Segundo apellido de usuario',
	Correo_Electronico varchar(40) NOT NULL UNIQUE comment 'Correo electronico de usuario',
	Password varchar(20) NOT NULL comment 'Contraseña de usuario',
	Direccion varchar(50) NOT NULL comment 'Dirección residencia de usuario',
	RolId_Rol int(2) NOT NULL,
	CiudadId_Ciudad int(10) NOT NULL,
	Tipo_documentoId_tipodoc int(3) NOT NULL,
	ProductoId_Producto int(10) NOT NULL,
	PRIMARY KEY (Id_Usuario,Tipo_documentoId_tipodoc)
);
  
  -- TABLAS DE SISTEMA

CREATE TABLE ServidorCorreo(
	Id_Servidor int(10) NOT NULL AUTO_INCREMENT,
	Tipo_Servidor_Web varchar(255) NOT NULL,
	Nombre_Servidor   varchar(10) NOT NULL,
	PRIMARY KEY (Id_Servidor));
  
  CREATE TABLE Error(
	Id_Error int(10) NOT NULL AUTO_INCREMENT comment 'IdError',
	Descripcion_Error varchar(255) NOT NULL comment 'Descripción del error',
	Fecha_Error date NOT NULL comment 'Fecha de error',
	PRIMARY KEY (Id_Error)
);

-- LLAVES FORANEAS
  
ALTER TABLE Usuario
ADD FOREIGN KEY (RolId_Rol) REFERENCES Rol (Id_Rol),
ADD FOREIGN KEY (CiudadId_Ciudad) REFERENCES Ciudad (Id_Ciudad),
ADD FOREIGN KEY (Tipo_documentoId_tipodoc) REFERENCES Tipo_documento (Id_tipodoc),
ADD FOREIGN KEY (ProductoId_Producto) REFERENCES Producto (Id_Producto);

ALTER TABLE Producto 
ADD FOREIGN KEY (CategoriaId_Categoria) REFERENCES Categoria (Id_Categoria),
ADD FOREIGN KEY (MarcaId_Marca) REFERENCES Marca (Id_Marca),
ADD FOREIGN KEY (ProveedorId_Proveedor) REFERENCES Proveedor (Id_Proveedor);

ALTER TABLE Envio 
ADD FOREIGN KEY (FacturaId_Factura) REFERENCES Factura (Id_Factura),
ADD FOREIGN KEY (Estado_EnvioId_Estado_Envio) REFERENCES Estado_Envio(Id_Estado_Envio);

ALTER TABLE Garantia 
ADD FOREIGN KEY (FacturaId_Factura) REFERENCES Factura (Id_Factura),
ADD FOREIGN KEY (Estado_GarantiaId_Estado_Garantia) REFERENCES Estado_Garantia (Id_Estado_Garantia);

ALTER TABLE Factura 
ADD FOREIGN KEY (UsuarioId_Usuario) REFERENCES Usuario (Id_Usuario),
ADD FOREIGN KEY (ProductoId_Producto) REFERENCES Producto (Id_Producto);

ALTER TABLE Pago
ADD FOREIGN KEY (FacturaId_Factura) REFERENCES Factura (Id_Factura),
ADD FOREIGN KEY (Tarjeta_CreditoId_Tarjeta_Credito) REFERENCES Tarjeta_Credito (Id_Tarjeta_Credito),
ADD FOREIGN KEY (Tarjeta_DebitoId_Tarjeta_Debito) REFERENCES Tarjeta_Debito (Id_Tarjeta_Debito),
ADD FOREIGN KEY (EfectivoId_Efectivo) REFERENCES Efectivo (Id_Efectivo);