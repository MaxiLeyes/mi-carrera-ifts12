-- Primero el dueño
INSERT INTO Duenos (nombre, apellido, email) VALUES ('TuNombre', 'TuApellido', 'tu@mail.com');

-- Luego las mascotas (el id_dueno será 1)
INSERT INTO Mascotas (nombre, especie, raza, id_dueno) 
VALUES ('Luna', 'Gato', 'Azul Ruso', 1),
       ('Simba', 'Gato', 'Ragdoll', 1),
       ('Manuelita', 'Tortuga', 'Chilensis', 1);

-- Luego el catálogo
INSERT INTO Catálogo_Vacunas (nombre_vacuna, laboratorio) VALUES ('Antirrábica', 'Zoetis');

-- Y finalmente el registro (Vacunamos a Luna con la Antirrábica)
INSERT INTO Registro_Vacunacion (id_mascota, id_vacuna, fecha_aplicacion) VALUES (1, 1, '2026-04-11');