-- Registro que vincula animales con sus vacunas
CREATE TABLE Registro_Vacunacion (
    id_registro INTEGER PRIMARY KEY AUTOINCREMENT,
    id_mascota INTEGER,
    id_vacuna INTEGER,
    fecha_aplicacion DATE,
    proxima_dosis DATE,
    FOREIGN KEY (id_mascota) REFERENCES Mascotas(id_mascota),
    FOREIGN KEY (id_vacuna) REFERENCES Catalogo_Vacunas(id_catalogo)
);