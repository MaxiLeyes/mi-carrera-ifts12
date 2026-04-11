/* PROYECTO: Sistema Integral de Gestión Veterinaria
   AUTOR: Estudiante IFTS 12
   DESCRIPCIÓN: Script completo de creación de estructura (DDL)
*/

-- 1. TABLAS MAESTRAS (No dependen de nadie)
---------------------------------------------------------

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

-- 2. TABLAS RELACIONADAS (Dependen de las maestrass)
---------------------------------------------------------

CREATE TABLE Mascotas (
    id_mascota INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    especie TEXT, 
    raza TEXT,
    fecha_nacimiento DATE,
    id_dueno INTEGER, 
    -- Relación 1:N con Dueños
    FOREIGN KEY (id_dueno) REFERENCES Duenos(id_dueno)
);

-- 3. TABLA INTERMEDIA (Relación Muchos a Muchos N:M)
---------------------------------------------------------

CREATE TABLE Registro_Vacunacion (
    id_registro INTEGER PRIMARY KEY AUTOINCREMENT,
    id_mascota INTEGER,
    id_vacuna INTEGER,
    fecha_aplicacion DATE,
    proxima_dosis DATE,
    -- Conexión doble: une Mascotas con el Catálogo
    FOREIGN KEY (id_mascota) REFERENCES Mascotas(id_mascota),
    FOREIGN KEY (id_vacuna) REFERENCES Catalogo_Vacunas(id_catalogo)
);

/* CIERRE DEL SCRIPT:
   Este orden asegura la Integridad Referencial. 
   Primero los 'Padres' (Duenos, Catalogo), luego los 'Hijos' (Mascotas, Registro).
*/