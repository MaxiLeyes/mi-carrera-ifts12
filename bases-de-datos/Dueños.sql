-- Definición de la tabla de Dueños
CREATE TABLE Duenos (
    id_dueno INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    apellido TEXT NOT NULL,
    telefono TEXT,
    direccion TEXT,
    email TEXT UNIQUE -- Atributo con restricción de unicidad
);