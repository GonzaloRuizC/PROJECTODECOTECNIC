CREATE TABLE 'empresas' (
    `empresaID` int(11) NOT NULL AUTO_INCREMENT,
    `empresa` varchar(255) NOT NULL,
    `proyectos` int(11) NOT NULL,
    /*FALTA CONECTARSE CON PROYECTOS*/
    CONSTRAINT PRIMARY KEY (`memberID`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE 'proyectos' (
    'proyectoID' int(11) NOT NULL AUTO_INCREMENT,
    'proyecto' varchar(255) NOT NULL,
    'fecha_inicio' date NOT NULL,
    'fecha_final' date NOT NULL,
    'presupuesto' FLOAT(11,2) NOT NULL,
    'gastos' FLOAT(11,2) NOT NULL,
    'beneficio' FLOAT(11,2) NOT NULL,
    /*FALTA CONECTARSE CON EMPRESAS Y LA FILA EMPRESAS, DONDE APARECERAN QUE EMPRESAS
    ESTAN EN EL PROYECTO*/
    CONSTRAINT PRIMARY KEY (`proyecyoID`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE 'mano_de_obra'(
    'mano_de_obraID' int(11) NOT NULL AUTO_INCREMENT,
    'mano_de_obra' varchar(255) NOT NULL,
    /*CONECTAR CON EL PROYECTO*/
    'proyecto' int(11) NOT NULL,
    'base_imponible' FLOAT(11,2) NOT NULL,
    'IVA' FLOAT(11,2) NOT NULL,
    'importe_neto' FLOAT(11,2) NOT NULL,
    'fecha' date NOT NULL,

    /*falta asignar los gastos a un proyecto*/
    CONSTRAINT PRIMARY KEY (`mano_de_obraID`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE 'materiales'(
    'materialesID' int(11) NOT NULL AUTO_INCREMENT,
    'materiales' varchar(255) NOT NULL,
    /*CONECTAR CON EL PROYECTO*/
    'proyecto' int(11) NOT NULL,
    'base_imponible' FLOAT(11,2) NOT NULL,
    'IVA' FLOAT(11,2) NOT NULL,
    'importe_neto' FLOAT(11,2) NOT NULL,
    'fecha' date NOT NULL,

    /*falta asignar los gastos a un proyecto*/
    CONSTRAINT PRIMARY KEY (`materialesID`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;