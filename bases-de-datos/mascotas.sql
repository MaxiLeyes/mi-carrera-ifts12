-- Crear la tabla de mascotas
CREATE TABLE Mascotas (
    id_mascota INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    especie TEXT, -- Gato, Tortuga, etc.
    raza TEXT,    -- Azul Ruso, Ragdoll, etc.
    fecha_nacimiento DATE
);

-- Crear la tabla de vacunas
CREATE TABLE Vacunas (
    id_vacuna INTEGER PRIMARY KEY AUTOINCREMENT,
    id_mascota INTEGER,
    nombre_vacuna TEXT,
    fecha_aplicacion DATE,
    proxima_dosis DATE,
    FOREIGN KEY (id_mascota) REFERENCES Mascotas(id_mascota)
);