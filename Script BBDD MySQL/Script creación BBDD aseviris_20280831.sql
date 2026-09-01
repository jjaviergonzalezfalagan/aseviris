
/* 31/08/2026 */

/* Creación de la BBDD aseviris */
DROP DATABASE IF EXISTS aseviris;
CREATE DATABASE aseviris;
USE aseviris;

/* Creación de la cuenta de usuario de la BBDD*/
DROP USER IF EXISTS aseviris;
CREATE USER 'aseviris'@'%' IDENTIFIED BY 'K69N%BM#uNy1';
GRANT ALL PRIVILEGES ON aseviris.* TO 'aseviris'@'%';

/* Creación de la tabla bodegas */
DROP TABLE IF EXISTS bodegas;
CREATE TABLE bodegas (
	idBodega int(11) NOT NULL auto_increment,
	nombre varchar(100) NOT NULL default '',
	zona varchar(100),
	direccion varchar(250),
	latitud varchar (25),
	longitud varchar (25),
	telefono varchar(100),
	fax varchar(15),
	email varchar(100),
	web varchar(100),
	personaContacto varchar(100),
	superficie varchar (50),
	produccion varchar (50),
	marcasComerciales varchar(500),
	variedadesDeUva varchar(500),
	premios varchar(500),
	rutaLogo varchar(50),
	PRIMARY KEY (idBodega),
	CONSTRAINT uq_nombre UNIQUE (nombre),
	CONSTRAINT uq_email UNIQUE (email)
) ENGINE=InnoDB;

/* Creación de la tabla usuarios */
DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
	idUsuario int(11) NOT NULL AUTO_INCREMENT,
	dni char(9) NOT NULL,
	nombre varchar(50) NOT NULL,
	apellidos varchar(100) NOT NULL,
	nombreUsuario varchar(25) NOT NULL,
	contrasenia VARCHAR(255) NOT NULL,
	direccion varchar(250),
	codPostal varchar(5),
	localidad varchar(250),
	provincia varchar(250),
	email varchar(100),
	telefono varchar(100),
	idBodega int(11),
	PRIMARY KEY (IdUsuario),
	CONSTRAINT uq_dni UNIQUE (DNI),
	CONSTRAINT uq_nombreUsuario UNIQUE (nombreUsuario),
	CONSTRAINT uq_email UNIQUE (email)
) ENGINE=InnoDB;

/* Creación de la tabla emails */
DROP TABLE IF EXISTS emails;
CREATE TABLE emails (
	idEmail int(11) NOT NULL AUTO_INCREMENT,
	email varchar(100) NOT NULL,
	PRIMARY KEY (IdEmail),
	CONSTRAINT uq_email UNIQUE (email)
) ENGINE=InnoDB;

/* Inserción de registros en la tabla bodegas */
INSERT INTO bodegas VALUES
(1, 'Adega Algueira S.L.','Subzona de Amandi','Francos - Doade.  27424 Sober (Lugo)','42.417766','-7.474619','982 410 299','982 410 299','info@adegaalgueira.com','http://www.algueira.com','Pilar Montero Santiago','14 Hectáreas','70.000 botellas','Algueira, Algueira Amaral, Algueira Anadelia, Algueira Carravel, Algueira Castagaia, Algueira Cortezada, Algueira Escalada, Algueira Finca Cortezada, Algueira Fincas, Algueira Homenaje, Algueira Pizarra, Algueira Risco, Algueira Serradelo, Brandan, Carballo Gallego, Medialeva','Mencía, Merenzao, Sousón, Caíño, Garnacha, Treixadura, Godello, Albariño, Albarello','Premios','../images/adegasImage1.jpg'),
(2, 'Adega Cachín, SC','Subzona de Ribeiras do Sil','Abeleda CP: 32764 A Teixeira (Ourense)','','','666 501 800','','info@adegacachin.com','https://www.adegacachin.com','Carolina Ruiz Moya','5 Hectáreas', '23.000 litros','Peza do Rei, Do Pereira','Mencía, Brancellao, Treixadura, Godello, Albariño','Premios','../images/adegasImage2.jpg'),
(3, 'Adega do Mollón S.L. ','Subzona de Ribeiras do Sil','Casanova, Mollón.  32448 Nogueira de Ramuín (Ourense)','42.426222','-7.740147','988 222 272','988 222 272','pombares@mundo-r.com','http://www.pombares.com','Alejandra Prieto Iglesias','4 Hectáreas','30.000 litros','Pombares','Mencía, Garnacha, Treixadura, Godello, Albariño','Premios','../images/adegasImage3.png'),
(4, 'Adega Ponte da Boga S.L.','Subzona de Ribeiras do Sil','Lugar do Couto - Sampaio.  32760 Castro Caldelas (Ourense)','42.386944','-7.385555','988 203 306','988 203 299','ruben@pontedaboga.es','http://www.pontedaboga.com','Inmaculada Cabrera Díaz','23 Hectáreas','188.500 litros','A Ponte da Boga, Bancales Olvidados, Capricho, Expresión Histórica, G Ponte da Boga, Licis, Mañana Mejora, P Ponte da Boga, Ponte da Boga, Porto de Lobos, Sartenes o Canciones, Sazón','Mencía, Brancellao, Merenzao, Sousón, Treixadura, Godello, Dona Branca, Albariño','Premios','../images/adegasImage4.png'),
(5, 'Adega Vella Xeracións, S.L.','Subzona de Ribeiras do Sil','Eirexa 14 - Abeleda.  32764 A Teixeira (Ourense)','42.395104','-7.440251','660 047 602','','adegavella@terra.com','http://www.adegavella.com','Víctor Santiago Ortega','5 Hectáreas','43.000 litros','12 Adega Vella, 1904 Adega Vella, Adega Vella, Baluce, Quitapesares Adega Vella, Tradición','Mencía, Merenzao, Mouratón, Treixadura, Godello, Albariño','Premios','../images/adegasImage5.jpg'),
(6, 'Adegas e Viñedos Lareu S.L.','Subzona de Chantada','Fondo de Vila - Sabadelle.  27517 Chantada (Lugo)','42.643098','-7.736865','616 561 820','','adegaslareu@gmail.com','http://www.adegaslareu.com','Eva León Gallardo','2.5 Hectáreas','13.000 litros','Noa, Ouvenza, Sabatelius','Mencía, Garnacha, Treixadura, Godello','Premios','../images/adegasImage6.png'),
(7, 'Adegas e Viñedos Vía Romana S.L. ','Subzona de Chantada','A Ermida - Belesar.  27500 Chantada (Lugo)','42.594346','-7.730226','982 454 005','+34 982 454 094','viaromana@viaromana.es','http://www.viaromana.es','Alfonso Mora Delgado','16 Hectáreas','165.000 litros','Conde de Lagariños, Pazo de Outeiro ,Ribeirapena, Vía Romana, Vía Romana VR, Via Romana do Camiño','Mencía, Brancellao, Merenzao, Godello','Premios','../images/adegasImage7.jpg'),
(8, 'Adegas Moure S.A.','Subzona de Ribeiras do Miño','Avda. Buebnso Aires,12 - Escairón.  27540 O Saviñao (Lugo)','42.566202','-7.676697','982 452 031','982 452 700','abadiadacova@adegasmoure.com','http://www.adegasmoure.com ','Amparo Peña Hidalgo','15 Hectáreas','271.250 litros','A Rosa do Viño, Abadia da Cova, Abadia da Cova (1124), A Fuga, Cepa Vella, Cimbro, Moure Tradición','Mencía, Merenzao, Godello, Albariño, Albarello, Arauxa','Premios','../images/adegasImage8.jpeg'),
(9, 'Alma das Donas S.L.U.','Subzona de Ribeiras do Miño','Ribas de Sil nº 1 - Pombeiro.  27470 Pantón (Lugo)','42.449294','-7.707001','988 200 045','','info@almadasdonas.com','http://www.almadasdonas.com','Elisa Campos Herrera','3 Hectáreas','18.000 litros','Almalarga, Almamadre, Celeiros, Punta Minchocas, Verdes Matas','Mencía, Godello','Premios','../images/adegasImage9.jpg'),
(10, 'Amedo S.L.','Subzona de Chantada','Tarrio - San Fiz s/n  .  27500 Chantada (Lugo)','42.612227','-7.726990','982 184 488','','adegasamedo@gmail.com','http://www.adegasamedo.com','Vicente Navarro Ramírez','12 Hectáreas','55.000 litros','Amedo, As Glorias, Pero Bernal, Pero Bernal Selección','Mencía, Tempranillo, Garnacha, Treixadura, Godello, Albariño, Torrontés','Premios','../images/adegasImage10.jpg'),
(11, 'Bodegas Costoya S.L.','Subzona de Ribeiras do Sil','Boga, 26 - Abeleda.  32764 A Teixeira (Ourense)','42.391064','-7.437659','600 417 273','','carlos_costoya@temera.com','http://www.temera.com','Jesus Méndez Pastor','5 Hectáreas','35.000 litros','A Cerca, Alodio 212, Alodio 343, Alodio 898, Alodio de Antonia, Alodio Terradentro, Fraga Fonda, Noite Pecha, Pena de Matacas, Pena de Xastre, Pena Furada, Terroirs by Alodio, Terroirs of Alodio, Terroirs of Spain, Themera','Mencía, Brancellao, Merenzao, Treixadura, Godello, Dona Branca, Albariño, Torrontés','Premios','../images/adegasImage11.jpg'),
(12, 'Bodegas de Rectoral de Amandi S.A.U. ','Subzona de Amandi','Amandi.  27423 Sober (Lugo)','42.494378','-7.589026','988 384 200','988 384 068','miriam@bodegasgallegas.com','http://www.bodegasgallegas.com','Ángel Díaz Román','140 Hectáreas','2.000.000 botellas','Rectoral de Amandi','Mencía','Premios','../images/adegasImage12.png'),
(13, 'Casa Moreiras S.L. ','Subzona de Ribeiras do Miño','San Martín de Siós.  27430 Pantón (Lugo)','42.497788','-7.610272','986 122 774','986 122 774','bodega@casamoreiras.com','http://www.casamoreiras.com','Gema Cano Ferrer','10 Hectáreas','57.000 litros','Adrás, Campaza, Casa Curro, Casa Moreiras, Casa Moreiras Selección, La Invitación de Pepa, La Propuesta de María, Ladeiras de Adras, Massimo, Ordalia','Mencía, Godello, Albariño','Premios','../images/adegasImage13.png'),
(14, 'Don Bernardino S.L. ','Subzona de Amandi','Santa Cruz de Brosmos.  27425 Sober (Lugo)','42.4210916','-7.528713','982 403 600','982 403 600','info@donbernardino.com','http://www.donbernardino.com','Manuel Molina Guerrero','4 Hectáreas','38.000 litros','Antergo, Don Bernardino, Don Pedro, El Otro DB, Lagoa & Borges, O Sono de Ly, Santo Graal, Tierra de Preguntas','Mencía','Premios','../images/adegasImage14.jpg'),
(15, 'Grupo Peago S.L. ','Subzona de Chantada','Sequeiras, 1 - Camporramiro.  27515 Chantada (Lugo)','42.587591','-7.730427','982 446 238','944 120 227','condadodesequeiras@grupopeago.com','http://www.condadodesequeiras.com','Rubén Guerrero Durán','12 Hectáreas','85.000 litros','Besos de Laura, Caricias de Sara, Condado de Sequeiras, Esperón','Mencía, Treixadura, Godello','Premios','../images/adegasImage15.jpg'),
(16, 'Regina Viarum S.L. ','Subzona de Amandi','Doade.  27424 Sober (Lugo)','42.408851','-7.476543','986 288 212','986 227 129','info@reginaviarum.es','http://www.reginaviarum.es','Vanesa Morales Santos','14 Hectáreas','130.000 litros','Finca La Capitana,vHeroico,vRegina Expresión,vRegina Viarum Ecológico,vRegina Viarum Godello,vRegina Viarum Mencia,vRegina Viarum Rosae,vVia Appia','Mencía, Brancellao, Sousón, Tempranillo, Treixadura, Godello','Premios','../images/adegasImage16.jpg'),
(17, 'Régoa C.B.','Subzona de Amandi','Pinol.  27460 Sober (Lugo)','42.396159','-7.550163','649 101 555','','info@regoa.es','http://www.regoa.es','Álvaro Sáez Morales','10 Hectáreas','','Régoa, Régoa Iria, Régoa TN','Mencía, Brancellao, Caíño, Albarello','Premios','../images/adegasImage17.jpg'),
(18, 'Ronsel do Sil S.L. ','Subzona de Ribeiras do Sil','Sacardebois.  32740 Parada de Sil (Ourense)','42.383702','-7.51939,15','988 984 923   ','','info@ronseldosil.com','http://www.ronseldosil.com','Raúl Marín Moreno','10 Hectáreas','25.000 litros','Alba Plena, Alpendre, Arpegio, Ourive, Portico da Gloria, Veluveira, Vel´uveyra','Mencía, Merenzao, Caíño, Garnacha, Treixadura, Godello, Dona Branca','Premios','../images/adegasImage18.png'),
(19, 'S.A.T. Virxen dos Remedios 837 XUGA', 'Subzona de Ribeiras do Miño', 'Diomondi, 56.  27548 O Saviñao (Lugo)', '42.584852', '-7.709142', '982 171 720', '982 171 720', 'info@virxendosremedios.es', 'http://www.virxendosremedios.es', 'Marina Reyes Ramos', '3.5 Hectáreas', '33.000 litros', 'Castro Candaz Boca do Demo, Castro Candaz Finca El Curvado, Castro Candaz Finca La Vertical, Catropuntos, Demo, Maga, Maga Ouro, Pazo de Bexán, Rutas do Destino, Viña Vella','Mencía, Brancellao, Garnacha, Treixadura, Godello, Albariño, Torrontés', 'Premios', '../images/adegasImage19.png'),
(20, 'Bodegas Helmántica', 'Subzona de Ribeiras do Sil' ,'Rúa do Seminario 2, 32002 Ourense', '42.34340722941639', '-7.878509202894807', '988 877 766', '', 'info@bodegashelmantica.es', 'https://bodegashelmantica.es', 'Javier González Falagán', '7,7 Hectáreas', '1700 litros', 'Helmántica Roble, Helmántica Crianza, Helmántica Reserva', 'Mencía, Garnacha, Treixadura, Godello, Albariño', 'Premios', '../images/adegasImage20.jpg');

/* Inserción de registros en la tabla usuarios */
INSERT INTO Usuarios VALUES 
(1, '01234567A', 'Pilar', 'Moreno Santiago', 'pilar.moreno', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'pilar.moreno@adegaalgueira.com', '650 573 587', 1),
(2, '01234567B', 'Carolina', 'Ruiz Moya', 'carolina.ruiz', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'carolina.ruiz@adegacachin.com', '650 573 587', 2),
(3, '01234567C', 'Alejandra', 'Prieto Iglesias', 'alejandra.prieto', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'alejandra.prieto@pombares.com', '650 573 587', 3),
(4, '01234567D', 'Inmaculada', 'Cabrera Diaz', 'inmaculada.cabrera', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'inmaculada.cabrera@pontedaboga.com', '650 573 587', 4),
(5, '01234567E', 'Víctor', 'Santiago Ortega', 'victor.santiago', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'victor.santiago@adegavella.com', '650 573 587', 5),
(6, '01234567F', 'Eva', 'León Gallardo', 'eva.leon', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'eva.leon@adegaslareu.com', '650 573 587', 6),
(7, '01234567G', 'Alfonso', 'Mora Delgado', 'alfonso.mora', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'alfonso.mora@viaromana.es', '650 573 587', 7),
(8, '01234567H', 'Amparo', 'Peña Hidalgo', 'amparo.pena', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'amparo.pena@adegasmoure.com', '650 573 587', 8),
(9, '01234567I', 'Elisa', 'Campos Herrera', 'elisa.campos', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'elisa.campos@almadasdonas.com', '650 573 587', 9),
(10, '01234567J', 'Vicente', 'Navarro Ramírez', 'vicente.navarro', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'vicente.navarro@adegasamedo.com', '650 573 587', 10),
(11, '01234567K', 'Jesús', 'Méndez Pastor', 'jesus.mendez', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'jesus.mendez@temera.com', '650 573 587', 11),
(12, '01234567L', 'Ángel', 'Díaz Román', 'angel.diaz', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'angel.diaz@bodegasgallegas.com', '650 573 587', 12),
(13, '01234567M', 'Gema', 'Cano Ferrer', 'gema.cano', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'gema.cano@casamoreiras.com', '650 573 587', 13),
(14, '01234567N', 'Manuel', 'Molina Guerrero', 'manuel.molina', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'manuel.molina@donbernardino.com', '650 573 587', 14),
(15, '01234567O', 'Rubén', 'Guerrero Durán', 'ruben.guerrero', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'ruben.guerrero@condadodesequeiras.com', '650 573 587', 15),
(16, '01234567Q', 'Vanesa', 'Morales Santos', 'vanesa.morales', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'vanesa.morales@reginaviarum.es', '650 573 587', 16),
(17, '01234567P', 'Álvaro', 'Sáez Morales', 'alvaro.saez', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'alvaro.saez@regoa.es', '650 573 587', 17),
(18, '01234567R', 'Raúl', 'Marín Moreno', 'raul.marin', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'raul.marin@ronseldosil.com', '650 573 587', 18),
(19, '01234567S', 'Marina', 'Reyes Ramos', 'marina.reyes', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'marina.reyes@virxendosremedios.es', '650 573 587', 19),
(20, '01234567T', 'Javier', 'González Falagán', 'javier.falagan', '$2y$10$Of9UCI8JlWuC6R6iHLTT2OpoT9rl5Wprcd7Qbj5f5mECljcuZtHvK', 'Rúa do Seminario 2, 1º G', '32002', 'Ourense', 'Ourense', 'javier.falagan@bodegashelmantica.es', '650 573 587', 20);

/* Inserción de registros en la tabla emails */
INSERT INTO emails VALUES 
(1, 'pilar.moreno@adegaalgueira.com'),
(2, 'carolina.ruiz@adegacachin.com'),
(3, 'alejandra.prieto@pombares.com');
