-- Proyecto COBALTECH
-- ADSI 1782186

-- Angie Lorena Clavijo Garcia
-- Christian Alfredo León Rodriguez
-- Freddy Jhovan Moreno León
-- Leidy Patricia Quevedo Barreto

-- -------------------------------------------------------------------------------

-- Insercion de datos

USE COBALTECH;

-- Inserción de datos CATEGORIA

-- Eliminar estás linea luego de realizar los cambios,
-- En la tabla CATEGORIA modificar campo Nombre_categoria
-- De varchar(10) a varchar(40)

INSERT INTO Categoria (Nombre_categoria)
VALUES ('Adaptadores y cables'),
       ('Cámaras'),
       ('Chasis/cajas/torres'),
       ('Controles para juegos'),
       ('Diademas'),
       ('Discos duros HDD'),
       ('Enfriadores CPU Cooler'),
       ('Fuentes de poder PSU'),
       ('Memorias RAM'),
       ('Microfonos'),
       ('Mouse y padmouse'),
       ('Parlantes'),
       ('Pasta térmica'),
       ('PC de escritorio'),
       ('PC estaciones de trabajo'),
       ('PC para juegos'),
       ('PC todo en uno'),
       ('PC portátiles'),
       ('PC portátiles 2 en 1'),
       ('PC portátiles estaciones de trabajo'),
       ('PC portátiles para juegos'),
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

insert into Ciudad (Nombre_Ciudad,Indicativo)
values ('Bogota','null'),
	   ('medellin','null'),
       ('Cali','null'),
       ('Barranquilla','null'),
       ('Cartagena','null'),
       ('Villavicencio','null'),
       ('Armenia','null')
       ;


-- Inserción de datos MARCA

-- Eliminar estás linea luego de realizar los cambios,
-- En la tabla MARCA modificar campo Nombre_marca
-- De varchar(10) a varchar(20)

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

-- Insert into Tabla Estado_envio

insert into Estado_envio(Id_estado_envio,Estado_envio)
Values (01,'Entregado'),
       (02,'En trasporte'),
       (03,'En facturacion'),
       (04,'Enviado')
       ;
       
-- Insert into Tabla Estado_garantia

insert into Estado_garantia(Id_estado_garantia,Tipo_estado)
Values (10,'Abierto'),
       (11,'En proceso'),
       (12,'Resuelto')
       ;
       
-- Insert into Tabla envio

insert into Envio(Id_envio,Codigo_rastreo,FacturaId_factura,Estado_envioId_estado_envio)
Values (101,'458DDFT784T',001,02),
	   (102,'FGHT5678D3E',002,01),
       (103,'DTU456ON67G',003,03),
       (104,'45GHY678NAS',004,04),
       (105,'TREF721261J',005,03),
       (106,'Y687ZVYB8AS',006,02),
       (107,'R651BT340NJ',007,01),
       (108,'756BHF4Y5UQ',008,02),
       (109,'SKJHFHIURTH',009,03),
	   (110,'FDF759FDEFU',010,01),
       (111,'84N56N3N566',011,04),
       (112,'48920GHURT8',012,02),
       (113,'987LJXC450M',013,01),
       (114,'321HPLNAER9',014,03),
       (115,'12LPR675894',015,02)
       ;
        
-- Insert into Tabla Garantia

insert into Garantia(Fecha_ingreso,Descripcion,FacturaId_factura,Estado_garantiaId_estado_garantia)
Values ('2019-10-03','Defecto fabrica',001,10),
       ('2019-12-10','No enciende',003,11),
       ('2019-06-12','Reparacion',005,12),
       ('2019-07-29','Defecto fabrica',007,10),
       ('2019-08-30','Reparacion',009,11),
       ('2019-11-02','No enciende',012,12),
       ('2019-02-18','Defecto fabrica',015,10),
       ('2019-03-22','Reparacion',010,11),
       ('2019-05-19','No enciende',006,12)
       ;


-- Insert into Tarjeta crédito -- 

INSERT INTO tarjeta_credito (Id_tarjeta_credito, Titular, Numero, Fecha_vencimiento, CVV)
VALUES (Not null, 'Rosaura Lozano', '123456789101', '2019-12-29', '001'),
       (Not null, 'Maria Diaz', '098654827162', '2020-01-14', '002'),
       (Not null, 'Lizeth Romero', '287635410971', '2029-10-30', '003'),
       (Not null, 'Carlos Parra Ceballos', '209876453212', '2019-06-12', '004'),
       (Not null, 'Marcos Martinez R', '645281726409', '2020-10-06', '005');



-- Insert into Tarjeta débito --

INSERT INTO tarjeta_debito (Id_tarjeta_debito, Transaccion)
VALUES (Not null, 'CUS476539276'),
       (Not null, 'CUS765301928'),
       (Not null, 'CUS098765432'),
       (Not null, 'CUS123456789'),
       (Not null, 'CUS654321568'),
       (Not null, 'CUS673928765');


-- Insert into Efectivo -- 

INSERT INTO efectivo (Id_efectivo, Descripcion)
VALUES (Not null, '8709543216'),
       (Not null, '5423174877'),
       (Not null, '7654324178'),
       (Not null, '5421112233');


-- Insert into Factura --

INSERT INTO factura (Id_factura, Fecha_Venta, Total, UsuarioId_usuario, ProductoId_producto)
VALUES (001, '2019-01-15', '149000', '', ''),
       (002, '2019-01-15', '60000', '', ''),
       (003, '2019-01-15', '167950', '', ''),
       (004, '2019-01-27', '87550', '', ''),
       (005, '2019-01-27', '45987', '', ''),
       (006, '2019-02-04', '1345900', '', ''),
       (007, '2019-02-05', '49800', '', ''),
       (008, '2019-03-10', '109900', '', ''),
       (009, '2019-03-10', '109900', '', ''),
       (010, '2019-03-15', '98500', '', ''),
       (011, '2019-03-23', '246700', '', ''),
       (012, '2019-04-02', '149900', '', ''),
       (013, '2019-04-06', '178500', '', ''),
       (014, '2019-04-09', '35900', '', ''),
       (015, '2019-04-13', '120900', '', '');



-- Isert into Pago-- 

INSERT INTO Pago (Id_pago, Facturaid_factura, Tarjeta_creditoid_tarjeta_credito, Tarjeta_debitoid_tarjeta_debito, EfectivoId_efectivo)
VALUES (1001, '001', '', '', ''),
       (1002, '002', '', '', ''),
       (1003, '003', '', '', ''),
       (1004, '004', '', '', ''),
       (1005, '005', '', '', ''),
       (1006, '006', '', '', ''),
       (1007, '007', '', '', ''),
       (1008, '008', '', '', ''),
       (1009, '009', '', '', ''),
       (1010, '010', '', '', ''),
       (1011, '011', '', '', ''),
       (1012, '012', '', '', ''),
       (1013, '013', '', '', ''),
       (1014, '014', '', '', ''),
       (1015, '015', '', '', '');



-- Insert into Producto -- 

INSERT INTO producto (Id_producto, Nombre_producto, Descripcion, Existencias, Imagen, Precio, CategoriaId_categoria, MarcaId_marca, ProveedorId_proveedor)
VALUES (1100, 'Monitor Acer Sb220q', 'Bi 215 full HD 1920 X 1080 ips monitor con y rad', '3', '', '453900', '17', '', ''),
       (1101, 'Disco Duro sólido Ssd', 'Adata 480 Gb', '5', '', '209900', '6', '', ''),
       (1102, 'Procesador Amd Ryzen 3', '2200g 3.7 Ghz Radeon Vega 8 Am4 2018', '3', '', '361000', '22', '', ''),
       (1103, 'Board Asrock H110 Pro Btc+', 'Sexta Y Septima Gen Intel, modelo:H110 Pro BTC+tipo de socket de CPU:LGA 1151', '4', '', '399900', '26', '', ''),
       (1104, 'Portátil Asus 15''', 'X542uf Core I5 1tb 8gb Full Hd+nvidia, Ram: DDR4 8GB, disco 1TB, S.O Endless', '3', '', '2010900', '18', '', ''),
       (1105, 'Ventilador Pwm 92mm 186 Dba', 'Funcionamiento silencioso con hasta 14,7 dB(A) aletas con flujo de aire optimizado, el sistema de montaje antivibración evita la transmisión de vibraciones', '10', '', '159900', '30', '', ''),
       (1106, 'Case QODE™', 'Ultimate Lite Keyboard Case for iPad 9.7” 6th Generation (2018)', '8', '', '99900', '11', '', ''),
       (1107, 'Bitfenix Micro Atx', 'Mini-itx motherboard cases Bfc-prm-300-', '6', '', '655000', '26', '', ''),
       (1108, 'Refrigeración Liquida', 'Cooler Master Masterliquid Ml120l Rgb', '7', '', '279000', '7', '', ''),
       (1109, 'Corsair Air Series Af140', 'Led Quiet Edition High Airflow Vent', '10', '', '166900', '30', '', ''),
       (1110, 'Diadema Cougar Phontum gaming', 'Interfaz: 3.5 mm / USB, respuesta de Frecuencia: 20-20000 Hz, impedancia: 32O +/- 15%', '9', '', '170000', '5', '', ''),
       (1111, 'RGB Mechanical Gaming Keyboard', 'Teclado mecánico para juegos con interruptores de respuesta rápida, 7 modos de colore y función de modo de juego.', '7', '', '231900', '27', '', ''),
       (1112, 'Evga X299 Oscuro', 'Lga 2066, Intel X299, Sata 6 Gb / S, Usb 3, soporta Intel Core séptima generación de la familia de procesadores de 2.066 zócalo; Factor de forma EATX; 4 DIMM de canal cuádruple DDR4 hasta 64GB.', '3', '', '3035990', '3', '', ''),
       (1113, 'Torre - Fractal Design', 'Define Nano S - Formato Mini Itx Permite instalar hasta 6 discos HDD/SSD, permite instalar GPU de gran Formato', '6', '', '360000', '3', '', ''),
       (1114, 'Memoria Ram Ddr4 G-skill', 'Trident Z Rgb 16gb 2 X 8 3000mhz. El kit de memoria Trident DDR4 RGB DDR4 combina la barra de luces RGB más brillante con un rendimiento impecable.', '15', '', '449900', '9', '', '');

-- -------------------------------------------------------------------------------
-- Insercion de Datos en las tablas Ciudad,Rol,Tipo_Doc y Usuario

-- Insert into Tabla ROL
 
insert into Rol (Tipo_Rol)
values ('Super Administrador'),
       ('Administrador'),
       ('Usuario')
       ;
	

-- Insert into Tabla TIPO DE DOCUMENTO  
  
insert into Tipo_documento(Abreviatura,Tipodoc)
Values ('CC','Cedula de ciudadania'),
       ('CE','Cedula de extranjeria'),
       ('TP','Pasaporte'),
       ('CI','Carnet de identidad')
       ;


-- Insert into Tabla USUARIO

insert into Usuario(Id_usuario,Doc_Usuario,Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Correo_Electronico,Contrasena,Direccion,Telefono,
            Movil,RolId_Rol,CiudadId_Ciudad,Tipo_documentoId_tipodoc,ProductoId_Producto)
values (01,'1452687125','Rosaura','','Lozano','Diaz','rosld@gmail.com','null','Cll 10 #2-35',4562589,3124587956,'','','',''),
	   (02,'4526987851','Maria','Pilar','Diaz','Lopez','Mardi@gmail.com','null','Cra 30 #52-38',7856321,'','','','',''),
       (03,'78969872','Rosa','Liseth','Romero','Rosales','Rosmr@outlook.com','null','Cll 43 #22-85',14569823,3218574255,'','','',''),
	   (04,'45820231','Carlos','','Parra','Ceballos','Capa_pu@gmail.com','null','Cll 35 #16-84',17859611,3224125879,'','','',''),
	   (05,'8759641','Marcos','','Martinez','Rosas','Marom01@outlook.com','null','Cra 88 #11-42',55869123,3054785623,'','','',''),
	   (06,'45012201','Jose','Maria','Gomez','Diaz','Josm89@gamil.com','null','Cll 35 #16-84',52639871,3145896732,'','','',''),
	   (07,'12G5R458H5','Eliza','','Rojas','Mora','Eliro65@gamil.com','null','Cll 54 #88-84',68962143,3051426982,'','','',''),
	   (08,'1485698541','Jorge','','Angarita','Rojas','Joran_32@gmail.com','null','Cll 100 #16-82',6892135,3125863654,'','','',''),
	   (09,'42587632','Mauricio','Dario','Hernandez','','Mauheer01@gmail.com','null','Cra 10 #10-45',36985414,3012569834,'','','',''),
	   (10,'1056974110','Eliana','Rosa','Ramirez','Pedraza','Elira34@outlook.com','null','Cll 73 #88-84',35896412,'','','','',''),
	   (11,'1012358879','Mariana','','Burgos','Perez','Mariba_@outlook','null','Cll 32 #97-09',34589210,3105698214,'','','',''),
       (12,'569712249','Hernando','Alonso','Puertas','Moreno','Hernanp02@gmail.com','null','Av 50 #22-80',32105497,3054789124,'','','',''),
	   (13,'1012458962','James','Isaac','Botero','Ruiz','James09@gamil.com','null','Cll 21 #56-44',25682347,3225698412,'','','',''),
       (14,'10224561012','Luis','Jose','Gomez','','lugo_@gmail.com','null','Cll 44 #16-84',7834152,3112569874,'','','',''),
       (15,'54789636','Lina','Maria','Rodriguez','Perez','lmape98@outlook.com','null','Av 68 #67-92',7635892,3216598720,'','','','')
       ;
  
  
