-- Proyecto COBALTECH
-- ADSI 1782186

-- Angie Lorena Clavijo Garcia
-- Christian Alfredo León Rodriguez
-- Leidy Patricia Quevedo Barreto

-- -------------------------------------------------------------------------------

-- Insercion de datos

USE COBALTECH;

-- Inserción de datos CATEGORIA

-- Eliminar estás linea luego de realizar los cambios,
-- En la tabla CATEGORIA modificar campo Nombre_categoria
-- De varchar(10) a varchar(40)

INSERT INTO Categoria (Nombre_categoria)
VALUES 	('Adaptadores y cables'),
		('Cámaras'),
		('Chasis/cajas/torres'),
		('Controles para juegos'),
		('Diademas'),
		('Discos duros HDD'),
		('Enfriadores CPU Cooler'),
		('Fuentes de poder PSU'),
		('Impresoras'),
		('Monitores'),
		('Memorias RAM'),
		('Microfonos'),
		('Mouse y padmouse'),
		('Parlantes'),
		('Pasta térmica'),
		('PC de escritorio'),
		('Portátiles'),
		('Procesadores CPU'),
		('Servidores'),
		('Tarjetas de sonido'),
		('Tarjetas de video GPU'),
		('Tarjetas madre MainBoard'),
		('Teclados'),
		('Tiras LED'),
		('Unidades de estado solido SSD'),
		('Ventiladores');

-- Insert Into Tabla CIUDAD
-- Se cambio de int de 

insert into Ciudad (Nombre_ciudad)
values 	('Bogota'),
		('medellin'),
		('Cali'),
		('Barranquilla'),
		('Cartagena'),
		('Villavicencio'),
		('Armenia');

-- Insert into Tabla ROL
 
insert into Rol (Tipo_rol)
values ('Super Administrador'),
       ('Administrador'),
       ('Usuario');

-- Insert into Tabla TIPO DE DOCUMENTO  
  
insert into Tipo_documento(Abreviatura,Tipodoc)
Values ('CC','Cedula de ciudadania'),
       ('CE','Cedula de extranjeria'),
       ('TP','Pasaporte'),
       ('NIT','Número de Identificación Tributaria');

-- Inserción de datos MARCA

INSERT INTO Marca (Nombre_marca)
VALUES ('ACER'),
       ('ADATA'),
       ('AMD'),
       ('ASRock'),
       ('ASUS'),
       ('be quiet'),
       ('Belkin'),
       ('BitFenix'),
       ('Cooler Master'),
       ('Corsair'),
       ('Cougar'),
       ('Creative'),
       ('EPSON'),
       ('EVGA'),
       ('FactalDesign'),
       ('G.Skill'),
       ('Generica'),
       ('Genius'),
       ('HP'),
       ('HyperX'),
       ('In Win'),
       ('Intel'),
       ('Kingston'),
       ('Lenovo'),
       ('Lian Li'),
       ('Logitech'),
       ('Microsoft'),
       ('MSI'),
       ('Noctua'),
       ('nVidia'),
       ('NZXT'),
       ('Phanteks'),
       ('PNY'),
       ('Razer'),
       ('ReDragon'),
       ('Rosewill'),
       ('Seagate'),
       ('Sapphire'),
       ('Sennheiser'),
       ('StarTek'),
       ('Steren'),
       ('Thermaltake'),
       ('VTA'),
       ('Western Digital'),
	   ('XFX'),
       ('Zotac');

-- Inserción de datos PROVEEDOR

INSERT INTO Proveedor(Razon_social,Contacto,Cargo,Telefono,Extension,Movil,Direccion,Bodega,Website,Email)
VALUES
(
	'INGRAM MICRO Colombia',NULL,'Servicio al cliente','8985361',NULL,'3178943767',
	'Calle 103 # 14A-53 Oficina 506','Parque industrial La Florida Bodega 27 Km 1.5 
	Autopista Medellín vía Bogotá - Siberia Costado sur','https://co.ingrammicro.com',
	'customer.servicecolombia@ingrammicro.com'
),
(
	'Tauret computadores','Esteban Chocontá','Gerente de Cuentas Online','6065852','1124','3195566192',
	'Centro comercial Unilago Cra. 15 78-33 Locales 2-275, 2-274, 2-319', '2-271 Segundo piso',
	'https://tauretcomputadores.com','ventas@tauretcomputadores.com'
),
(
	'MRPC Store s.a.s.',NULL,NULL,'2187445',NULL,'3105650594','Carrera 15 78-33 Local 2-224',NULL,
	'http://mrpc.com.co','info@mrpc.com.co'
),
(
	'Imagen World E.U.',NULL,'Ventas','7440834-6409173-2568944-7458576','102-103-104','3107681442-3143317512',
	'Carrera 15 77-05 Local 223 Oficina 314-315 Centro de Alta Tecnologia CAT',
	NULL,'http://www.imagenworld.com','ventas@imagenworld.com'
),
(
	'Makro computo S.A.',NULL,NULL,'8966000',NULL,NULL,'Centro de Alta Tecnologia Oficina 334-A Carrera 15 77-05',
	'Parque industrial Guadalajara Autopista Medellín Calle 80 Km 2.5 Vía Cota','http://www.makrocomputo.com/',NULL
);

-- Insert into Tarjeta crédito -- 

INSERT INTO Tarjeta_credito (Id_tarjeta_credito, Titular, Numero, Fecha_vencimiento, CVV)
VALUES (Not null, 'Rosaura Lozano', '123456789101', '2019-12-29', '001'),
       (Not null, 'Maria Diaz', '098654827162', '2020-01-14', '002'),
       (Not null, 'Lizeth Romero', '287635410971', '2029-10-30', '003'),
       (Not null, 'Carlos Parra Ceballos', '209876453212', '2019-06-12', '004'),
       (Not null, 'Marcos Martinez R', '645281726409', '2020-10-06', '005');

-- Insert into Tarjeta débito --

INSERT INTO Tarjeta_debito (Id_tarjeta_debito, Transaccion)
VALUES (Not null, 'CUS476539276'),
       (Not null, 'CUS765301928'),
       (Not null, 'CUS098765432'),
       (Not null, 'CUS123456789'),
       (Not null, 'CUS654321568'),
       (Not null, 'CUS673928765');

-- Insert into Efectivo -- 

INSERT INTO Efectivo (Id_efectivo, Descripcion)
VALUES (Not null, '8709543216'),
       (Not null, '5423174877'),
       (Not null, '7654324178'),
       (Not null, '5421112233');

-- Insert into Tabla Estado_envio

insert into Estado_envio(Id_estado_envio,Estado_envio)
Values (NULL,'Entregado'),
       (NULL,'En trasporte'),
       (NULL,'En facturacion'),
       (NULL,'Enviado');
       
-- Insert into Tabla Estado_garantia

insert into Estado_garantia(Id_estado_garantia,Estado_garantia)
Values (NULL,'Abierto'),
       (NULL,'En proceso'),
       (NULL,'Resuelto');

 -- Insert into Producto -- 

INSERT INTO Producto (Nombre_producto, Descripcion, Existencia, Imagen, Precio, CategoriaId_categoria, MarcaId_marca, ProveedorId_proveedor)
VALUES ('ACER SB220Q', 'Bi 215 full HD 1920 X 1080 ips monitor con y rad', 3,'', '453900',9,1,1),
       ('SSD ADATA SB800', 'Adata 480 Gb', 5, '', '209900', 6, 2, 1),
       ('AMD Ryzen 3 2200G', '2200g 3.7 Ghz Radeon Vega 8 Am4 2018', 3, '', '361000', 17,3, 1),
       ('Asrock H110 Pro Btc+', 'Sexta Y Septima Gen Intel, modelo:H110 Pro BTC+tipo de socket de CPU:LGA 1151', 4, '', '399900',21, 4, 2),
       ('Asus VivoBook S15 X542UF', 'X542uf Core I5 1tb 8gb Full Hd+nvidia, Ram: DDR4 8GB, disco 1TB, S.O Endless', 3, '', '2010900', 16, 5, 2),
       ('Cooler Master BladeMaster 92mm', 'Funcionamiento silencioso con hasta 14,7 dB(A) aletas con flujo de aire optimizado, el sistema de montaje antivibración evita la transmisión de vibraciones', 10, '', '159900', 25, 6, 3),
       ('Belkin Case QODE™', 'Ultimate Lite Keyboard Case for iPad 9.7” 6th Generation (2018)', 8, '', '99900', 3, 7, 1),
       ('Bitfenix Micro ATX', 'Mini-itx motherboard cases Bfc-prm-300-', 6, '', '655000', 3, 8, 3),
       ('Cooler Master Masterliquid ML120L RGB', 'Refrigeración Liquida AIO Cooler Master Masterliquid ML120L RGB', 7, '', '279000', 7, 9, 2),
       ('Corsair Air Series Af140', 'Led Quiet Edition High Airflow Vent', 10, '', '166900', 25, 10, 4),
       ('Diadema Cougar Phontum gaming', 'Interfaz: 3.5 mm / USB, respuesta de Frecuencia: 20-20000 Hz, impedancia: 32O +/- 15%', 9, '', '170000', 5, 11, 4),
       ('Redragon KUMARA K552', 'Teclado mecánico para juegos con interruptores de respuesta rápida, 7 modos de colore y función de modo de juego RGB.', 7, '', '231900', 22, 12, 3),
       ('Evga X299 Dark', 'Lga 2066, Intel X299, Sata 6 Gb / S, Usb 3, soporta Intel Core séptima generación de la familia de procesadores de 2.066 zócalo; Factor de forma EATX; 4 DIMM de canal cuádruple DDR4 hasta 64GB.', 3, '', '3035990',21, 13, 5),
       ('Fractal Design Nano S Window', 'Define Nano S - Formato Mini Itx Permite instalar hasta 6 discos HDD/SSD, permite instalar GPU de gran Formato', 6, '', '360000', 3, 14, 5),
       ('G-skill Trident Z F4-3400C16D-16GTZ', 'Trident Z Rgb 16gb 2 X 8 3000mhz. El kit de memoria Trident DDR4 RGB DDR4 combina la barra de luces RGB más brillante con un rendimiento impecable.', 15, '', '449900', 10, 15, 2);
       
-- Insert into Tabla USUARIO

INSERT INTO Usuario(Doc_usuario,Primer_nombre,Segundo_nombre,Primer_apellido,Segundo_apellido,Correo_electronico,Contrasena,Direccion,Telefono,
            Movil,RolId_rol,CiudadId_ciudad,Tipo_documentoId_tipodoc)
VALUES 	('1452687125','Rosaura','','Lozano','Diaz','rosld@gmail.com','null','Cll 10 #2-35',4562589,3124587956,1,1,1),
		('4526987851-1','Maria','Pilar','Diaz','Lopez','Mardi@gmail.com','null','Cra 30 #52-38',7856321,3003214569,2,2,4),
		('78969872','Rosa','Liseth','Romero','Rosales','Rosmr@outlook.com','null','Cll 43 #22-85',14569823,3218574255,2,3,2),
		('45820231','Carlos','','Parra','Ceballos','Capa_pu@gmail.com','null','Cll 35 #16-84',17859611,3224125879,3,4,1),
		('8759641','Marcos','','Martinez','Rosas','Marom01@outlook.com','null','Cra 88 #11-42',55869123,3054785623,3,5,1),
		('45012201','Jose','Maria','Gomez','Diaz','Josm89@gamil.com','null','Cll 35 #16-84',52639871,3145896732,3,6,2),
		('AR2457892','Eliza','','Rojas','Mora','Eliro65@gamil.com','null','Cll 54 #88-84',68962143,3051426982,3,7,3),
		('1485698541','Jorge','','Angarita','Rojas','Joran_32@gmail.com','null','Cll 100 #16-82',6892135,3125863654,3,1,1),
		('42587632','Mauricio','Dario','Hernandez','','Mauheer01@gmail.com','null','Cra 10 #10-45',36985414,3012569834,3,3,1),
		('1056974110-5','Eliana','Rosa','Ramirez','Pedraza','Elira34@outlook.com','null','Cll 73 #88-84',35896414,NULL,3,5,4),
		('1012358879','Mariana','','Burgos','Perez','Mariba_@outlook','null','Cll 32 #97-09',34589210,3105698214,3,7,1),
		('CH569712249','Hernando','Alonso','Puertas','Moreno','Hernanp02@gmail.com','null','Av 50 #22-80',32105497,3054789124,3,6,3),
		('1012458962','James','Isaac','Botero','Ruiz','James09@gamil.com','null','Cll 21 #56-44',25682347,3225698412,3,4,1),
		('10224561012-3','Luis','Jose','Gomez','','lugo_@gmail.com','null','Cll 44 #16-84',7834152,3112569874,3,3,4),
		('54789636','Lina','Maria','Rodriguez','Perez','lmape98@outlook.com','null','Av 68 #67-92',7635892,3216598720,3,1,1);

-- Insert into Factura --
  
INSERT INTO Factura(Fecha_venta,Total,UsuarioId_usuario,ProductoId_producto)
VALUES ('2019-01-15', '149000',1,1),
       ('2019-01-15', '60000','2',3),
       ('2019-01-15', '167950',3,5),
       ('2019-01-27', '87550',4,7),
       ('2019-01-27', '45987',5,8),
       ('2019-02-04', '1345900',6,9),
       ('2019-02-05', '49800',7,10),
       ('2019-03-10', '109900',8,12),
       ('2019-03-10', '109900',9,4),
       ('2019-03-15', '98500', 10,13),
       ('2019-03-23', '246700',11,14),
       ('2019-04-02', '149900',12,14),
       ('2019-04-06', '178500',13,15),
       ('2019-04-09', '35900',14,4),
       ('2019-04-13', '120900',15,6);

-- Insert into Pago-- 

INSERT INTO Pago (FacturaId_factura, Tarjeta_creditoId_tarjeta_credito, Tarjeta_debitoId_tarjeta_debito, EfectivoId_efectivo)
VALUES (1, 1, null, null),
       (2, null, 2, null),
       (3, null, null, 3),
       (4, null, null, 3),
       (5, 1, null, null),
       (6, null, 2, null),
       (7, 1, null, null),
       (8, null, null, 3),
       (9, 1, null, null),
       (10, null, 2, null),
       (11, null, 2, null),
       (12, null, null, 3),
       (13, 1, null, null),
       (14, null, 2, null),
       (15, 1, null, null);

-- -------------------------------------------------------------------------------  
       
-- Insert into Tabla envio

INSERT INTO Envio(Codigo_rastreo,FacturaId_factura,Estado_envioId_estado_envio)
VALUES ('458DDFT784T',001,02),
	   ('FGHT5678D3E',002,01),
       ('DTU456ON67G',003,03),
       ('45GHY678NAS',004,04),
       ('TREF721261J',005,03),
       ('Y687ZVYB8AS',006,02),
       ('R651BT340NJ',007,01),
       ('756BHF4Y5UQ',008,02),
       ('SKJHFHIURTH',009,03),
	   ('FDF759FDEFU',010,01),
       ('84N56N3N566',011,04),
       ('48920GHURT8',012,02),
       ('987LJXC450M',013,01),
       ('321HPLNAER9',014,03),
       ('12LPR675894',015,02);
        
-- Insert into Tabla Garantia

INSERT INTO Garantia(Fecha_ingreso,Descripcion,FacturaId_factura,Estado_garantiaId_estado_garantia)
VALUES ('2019-10-03','Defecto fabrica',001,1),
       ('2019-12-10','No enciende',003,2),
       ('2019-06-12','Reparacion',005,3),
       ('2019-07-29','Defecto fabrica',007,2),
       ('2019-08-30','Reparacion',009,1),
       ('2019-11-02','No enciende',012,3),
       ('2019-02-18','Defecto fabrica',015,1),
       ('2019-03-22','Reparacion',010,2),
       ('2019-05-19','No enciende',006,3);