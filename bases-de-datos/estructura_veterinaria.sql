-- 1. Tablas Maestras
CREATE TABLE Duenos (
    id_dueno INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    apellido TEXT NOT NULL,
    telefono TEXT,
    direccion TEXT,
    email TEXT UNIQUE 
);

CREATE TABLE Catalogo_Vacunas (
    id_catalogo INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre_vacuna TEXT NOT NULL UNIQUE,
    laboratorio TEXT
);

-- 2. Tablas Dependientes
CREATE TABLE Mascotas (
    id_mascota INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    especie TEXT, 
    raza TEXT,
    fecha_nacimiento DATE,
    id_dueno INTEGER, 
    FOREIGN KEY (id_dueno) REFERENCES Duenos(id_dueno)
);

CREATE TABLE Registro_Vacunacion (
    id_registro INTEGER PRIMARY KEY AUTOINCREMENT,
    id_mascota INTEGER,
    id_vacuna INTEGER,
    fecha_aplicacion DATE,
    proxima_dosis DATE,
    FOREIGN KEY (id_mascota) REFERENCES Mascotas(id_mascota),
    FOREIGN KEY (id_vacuna) REFERENCES Catalogo_Vacunas(id_catalogo)
);
