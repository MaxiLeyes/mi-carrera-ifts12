CREATE TABLE Mascotas (
    id_mascota INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    especie TEXT, 
    raza TEXT,
    fecha_nacimiento DATE,
    id_dueno INTEGER, -- El nexo con duenos.sql
    FOREIGN KEY (id_dueno) REFERENCES Duenos(id_dueno)
);