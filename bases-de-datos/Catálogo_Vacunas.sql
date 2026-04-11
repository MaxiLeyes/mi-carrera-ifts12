CREATE TABLE Catálogo_Vacunas (
    id_catalogo INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre_vacuna TEXT NOT NULL UNIQUE, -- Evita nombres repetidos
    laboratorio TEXT
);