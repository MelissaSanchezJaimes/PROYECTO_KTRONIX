DROP DATABASE BdMYG;

CREATE DATABASE BdMYG;
USE BdMYG;

CREATE TABLE Conectividad(
idConectividad INT PRIMARY KEY AUTO_INCREMENT,
nombreHost VARCHAR (10) NOT NULL,
nombreRed VARCHAR (15) NOT NULL,
tipoRed VARCHAR (15) NOT NULL,
DireccionIPV4 DOUBLE,
PerfilDeRed VARCHAR (10) NOT NULL,
MascaraSubred DOUBLE,
PuertaEnlace DOUBLE,
MAC DOUBLE,
TipoNodo VARCHAR (10) NOT NULL);

CREATE TABLE TestEntrada(
idTestEntrada INT PRIMARY KEY AUTO_INCREMENT,
fechaRecibido INT,
procesoARealizar VARCHAR (100) NOT NULL,
Observaciones VARCHAR (50) NOT NULL);

CREATE TABLE TestSalida(
idTestSalida INT PRIMARY KEY AUTO_INCREMENT,
fechaEntrega INT,
procesoRealizado VARCHAR (100) NOT NULL,
ObservacionesTS VARCHAR (50) NOT NULL);

CREATE TABLE Hardware(
idHardware INT PRIMARY KEY AUTO_INCREMENT,
tipo VARCHAR (10) NOT NULL,
serialH double,
estado VARCHAR (5) NOT NULL,
velocidad DOUBLE,
capacidad VARCHAR (10) NOT NULL,
idEquipoFK INT);

CREATE TABLE Equipo(
idEquipo INT PRIMARY KEY AUTO_INCREMENT,
noEquipo INT,
tipo VARCHAR (10) NOT NULL,
Marca VARCHAR (10) NOT NULL,
Estado VARCHAR (5) NOT NULL,
idTestEntradaFK INT,
idTestSalidaFK INT,
IdHojaDeVidaFK INT,
idSoftwareFK INT);

CREATE TABLE Software(
idSoftware INT PRIMARY KEY AUTO_INCREMENT,
tipoSoftware VARCHAR (10) NOT NULL,
estadoSoftware VARCHAR (5) NOT NULL,
versionSoftware INT,
Licencia VARCHAR (15) NOT NULL,
ArquitecturaSoftware INT,
ServicePack INT,
Caracteristicas VARCHAR (40) NOT NULL);

CREATE TABLE HojaDeVida(
idHojaDeVida INT PRIMARY KEY AUTO_INCREMENT,
fechaRecibidoHojaV DATE,
numHojaV INT,
ObservacionHojaV DATE,
FechaEntregaHojaV DATE,
idUsuarioFK INT);

CREATE TABLE Usuario(
idUsuario INT PRIMARY KEY AUTO_INCREMENT,
nombre INT,
identificación INT,
telefono INT,
ciudad VARCHAR (10) NOT NULL, 
fecha DATE,
idConectividadFK INT,
idTestEntradaFK INT, 
idTestSalidaFK INT);

CREATE TABLE Incidencias(
idIncidencias INT PRIMARY KEY AUTO_INCREMENT,
NumTicket INT,
estado VARCHAR (5) NOT NULL,
Prioridad VARCHAR (10) NOT NULL,
Descripcion VARCHAR (10) NOT NULL,
AbiertoDia DATE,
InformadoPor VARCHAR (20) NOT NULL,
AsignadoA VARCHAR (20) NOT NULL,
fechaResolucion DATE,
cantidadDiasAbiertos INT,
ComentariosAdicionales VARCHAR (20) NOT NULL,
idHojaDeVidaFK INT,
idUsuarioFK INT);

ALTER TABLE Hardware
ADD CONSTRAINT FKEquipoHardware
FOREIGN KEY (idEquipoFK) 
REFERENCES Equipo (idEquipo);

ALTER TABLE Equipo
ADD CONSTRAINT FKTestEntradaEquipo
FOREIGN KEY (idTestEntradaFK)
REFERENCES TestEntrada (idTestEntrada);

ALTER TABLE Equipo
ADD CONSTRAINT FKTestSalidaEquipo
FOREIGN KEY (idTestSalidaFK)
REFERENCES TestSalida (idTestSalida); 

ALTER TABLE Equipo 
ADD CONSTRAINT FKHojaDeVidaEquipo
FOREIGN KEY (IdHojaDeVidaFK)
REFERENCES HojaDeVida (idHojaDeVida);

ALTER TABLE Equipo
ADD CONSTRAINT FKSoftwareEquipo
FOREIGN KEY (idSoftwareFK)
REFERENCES Software (idSoftware);

ALTER TABLE HojaDeVida
ADD CONSTRAINT FKUsuarioHojaDeVida
FOREIGN KEY (idUsuarioFK)
REFERENCES Usuario (idUsuario);

ALTER TABLE Usuario
ADD CONSTRAINT FKConectividadUsuario
FOREIGN KEY (idConectividadFK)
REFERENCES Conectividad (idConectividad);

ALTER TABLE Usuario 
ADD CONSTRAINT FKTestEntradaUsuario
FOREIGN KEY (idTestEntradaFK)
REFERENCES TestEntrada (idTestEntrada);

ALTER TABLE Usuario
ADD CONSTRAINT FKTestSalidaUsuario
FOREIGN KEY (idTestSalidaFK)
REFERENCES TestSalida (idTestSalida);

ALTER TABLE Incidencias
ADD CONSTRAINT FKHojaDeVidaIncidencias
FOREIGN KEY (idHojaDeVidaFK)
REFERENCES HojaDeVida (idHojaDeVida);

ALTER TABLE Incidencias
ADD CONSTRAINT FKUsuarioIncidencias
FOREIGN KEY (idUsuarioFK)
REFERENCES Usuario (idUsuario);