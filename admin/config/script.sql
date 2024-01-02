CREAR BASE DE DATOS 

CREATE DATABASE admin_condominio;

CREAR TABLAS

CREATE TABLE `entidad` (
  `id` INT AUTO_INCREMENT,
  `cod_entidad` VARCHAR(8),
  `nombre` VARCHAR(50),
  PRIMARY KEY (`id`)
);

INSERT INTO entidad (cod_entidad,nombre) VALUES ('01','Distrito Capital'),('02','Amazonas'),('03','Anzoategui'), ('04','Apure'), ('05','Aragua'), ('06','Barinas'), ('07','Bolivar'), ('08','Carabobo'), ('09','Cojedes'), ('10','Delta Amacuro'), ('11','Falcon'), ('12','Guarico'), ('13',' Lara'), ('14',' Merida'), ('15',' Miranda'), ('16',' Monagas'), ('17',' Nueva Esparta'), ('18',' Portuguesa'), ('19','Sucre'), ('20','Tachira'), ('21','Trujillo'), ('22','La Guaira'), ('23','Yaracuy'), ('24','Zulia');



CREATE TABLE `municipio` (
  `id` INT AUTO_INCREMENT,
  `cod_municpio` VARCHAR(8),
  `nombre` VARCHAR(50),
  `id_entidad` INT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_entidad`) REFERENCES `entidad`(`id`)
);

CREATE TABLE `parroquia` (
  `id` INT AUTO_INCREMENT,
  `cod_parroquia` VARCHAR(8),
  `nombre` VARCHAR(50),
  `id_municipio` INT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_municipio`) REFERENCES `Municipio`(`id`)
);

CREATE TABLE `edificio` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `nombre` VARCHAR(100),
  `direccion` VARCHAR(300),
  `id_estado` INT,
  `id_municipio` INT,
  `id_parroquia` INT,
  FOREIGN KEY (`id_estado`) REFERENCES `Entidad`(`id`),
  FOREIGN KEY (`id_municipio`) REFERENCES `Municipio`(`id`),
  FOREIGN KEY (`id_parroquia`) REFERENCES `Parroquia`(`id`)
);

CREATE TABLE `Tipo_persona` (
  `id` INT AUTO_INCREMENT,
  `nombre` CHAR,
  PRIMARY KEY (`id`)
);

CREATE TABLE `Tipo_propietario` (
  `id` INT AUTO_INCREMENT,
  `nombre` VARCHAR(20),
  PRIMARY KEY (`id`)
);

CREATE TABLE `Propietarios` (
  `id` INT AUTO_INCREMENT,
  `id_edificio` INT,
  `nombre` VARCHAR(100),
  `apellido` VARCHAR(100),
  `email` VARCHAR(100),
  `num_identificacion` INT,
  `id_tipo_persona` INT,
  `id_tipo_propietario` INT,
  PRIMARY KEY (`id`),
   FOREIGN KEY (`id_edificio`) REFERENCES `edificio`(`id`),
  FOREIGN KEY (`id_tipo_persona`) REFERENCES `tipo_persona`(`id`),
  FOREIGN KEY (`id_tipo_propietario`) REFERENCES `tipo_propietario`(`id`)
);

CREATE TABLE `Tipo_moneda` (
  `id` INT AUTO_INCREMENT,
  `nombre` VARCHAR(20),
  PRIMARY KEY (`id`)
);


CREATE TABLE `Tipo_operacion` (
  `id` INT AUTO_INCREMENT,
  `nombre` VARCHAR(40),
  PRIMARY KEY (`id`)
);

CREATE TABLE `Estatus_Operacion` (
  `id` INT AUTO_INCREMENT,
  `nombre` VARCHAR(40),
  PRIMARY KEY (`id`)
);

CREATE TABLE `Banco` (
  `id` INT AUTO_INCREMENT,
  `nombre` VARCHAR(40),
  PRIMARY KEY (`id`)
);

CREATE TABLE `Pagos_propietarios` (
  `id` INT AUTO_INCREMENT,
  `id_propietario` INT,
  `id_tipo_cuota` VARCHAR(100),
  `fecha_pago` date,
  `fecha_registro` date,
  `id_tipo_operacion` INT,
  `id_banco` INT,
  `monto` INT,
  `id_estatus_operacion` INT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_tipo_operacion`) REFERENCES `Tipo_operacion`(`id`),
  FOREIGN KEY (`id_estatus_operacion`) REFERENCES `Estatus_Operacion`(`id`),
  FOREIGN KEY (`id_propietario`) REFERENCES `Propietarios`(`id`),
  FOREIGN KEY (`id_banco`) REFERENCES `Banco`(`id`)
);

CREATE TABLE `proveedor` (
  `id` INT AUTO_INCREMENT,
  `nombre` VARCHAR(40),
   `id_tipo_persona` INT,
   `identificacion` VARCHAR(9),
  PRIMARY KEY (`id`)
  FOREIGN KEY (`id_tipo_persona`) REFERENCES `tipo_persona`(`id`)
);

CREATE TABLE `categoria_gasto` (
  `id` INT AUTO_INCREMENT,
  `nombre` VARCHAR(50),
  PRIMARY KEY (`id`)
);

CREATE TABLE `gastos_edificio` (
  `id` INT AUTO_INCREMENT,
  `id_categoria_gasto` INT,
  `fecha_pago` DATE,
  `fecha_registro` DATE,
  `id_proveedor` INT,
  `monto` INT,
  `descripcion` VARCHAR(500),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor`(`id`),
  FOREIGN KEY (`id_categoria_gasto`) REFERENCES `categoria_gasto`(`id`)
);

CREATE TABLE `mes` (
  `id` INT AUTO_INCREMENT,
  `nombre` VARCHAR(20),
  PRIMARY KEY (`id`)
);

CREATE TABLE `estado_cuenta_bancaria` (
  `id` INT AUTO_INCREMENT,
  `id_mes` INT,
  `Ruta` VARCHAR(100),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_mes`) REFERENCES `mes`(`id`)
);

CREATE TABLE `anio` (
  `id` INT AUTO_INCREMENT,
  `nombre` VARCHAR(20),
  PRIMARY KEY (`id`)
);