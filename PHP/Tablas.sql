CREATE TABLE `empresas` (
    `empresaID` int(11) NOT NULL AUTO_INCREMENT,
    `empresa` varchar(255) NOT NULL,
    `proyectos` int(11) NOT NULL,

    CONSTRAINT PRIMARY KEY (`empresaID`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `proyectos` (
    `proyectoID` int(11) NOT NULL AUTO_INCREMENT,
    `proyecto` varchar(255) NOT NULL,
    `fecha_inicio` date NOT NULL,
    `fecha_final` date NOT NULL,
    `presupuesto` FLOAT(11,2) NOT NULL,
    `gastos` FLOAT(11,2) NOT NULL,
    `beneficio` FLOAT(11,2) NOT NULL,
    CONSTRAINT PRIMARY KEY (`proyectoID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `contrato` (
    `proyectoID` int(11) NOT NULL,
    `empresaID` int(11) NOT NULL,
    `contratoID` int(11) NOT NULL,
    `presupuesto` FLOAT(11,2) NOT NULL,
    `beneficio` FLOAT(11,2) NOT NULL,
    FOREIGN KEY (`proyectoID`) REFERENCES `proyectos` (`proyectoID`) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE ,
    FOREIGN KEY (`empresaID`) REFERENCES `empresas` (`empresaID`) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE 

)ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `mano_de_obra`(
    `mano_de_obraID` int(11) NOT NULL AUTO_INCREMENT,
    `mano_de_obra` varchar(255) NOT NULL,
    `proyectoID` int(11) NOT NULL,
    `importe_hora` FLOAT(11,2) NOT NULL,
    `horas` FLOAT(11,2) NOT NULL,
    `fecha` date NOT NULL,
    `inicio_trabajo` time,
    `fin_trabajo` time,
    `comentarios` varchar(255),
    CONSTRAINT PRIMARY KEY (`mano_de_obraID`),
    FOREIGN KEY (`proyectoID`) REFERENCES `proyectos` (`proyectoID`) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE 
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


CREATE TABLE `materiales`(
    `materialesID` int(11) NOT NULL AUTO_INCREMENT,
    `materiales` varchar(255) NOT NULL,
    `proyectoID` int(11) NOT NULL,
    `base_imponible` FLOAT(11,2) NOT NULL,
    `IVA` FLOAT(11,2) NOT NULL,
    `importe_neto` FLOAT(11,2) NOT NULL,
    `fecha` date NOT NULL,
    `n_factura` varchar(25) NOT NULL,
    CONSTRAINT PRIMARY KEY (`materialesID`),
    FOREIGN KEY (`proyectoID`) REFERENCES `proyectos` (`proyectoID`) 
    ON DELETE CASCADE 
    ON UPDATE CASCADE 
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;



