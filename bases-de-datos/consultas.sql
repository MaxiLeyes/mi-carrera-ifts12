-- Cargar a tus gatos y la tortuga
INSERT INTO Mascotas (nombre, especie, raza) 
VALUES ('Luna', 'Gato', 'Azul Ruso'),
       ('Simba', 'Gato', 'Ragdoll'),
       ('Manuelita', 'Tortuga', 'Chilensis');
       -- Análisis de datos del Laboratorio-IA
-- Calcular la edad promedio de las mascotas por especie
SELECT especie, 
       AVG(strftime('%Y', 'now') - strftime('%Y', fecha_nacimiento)) as edad_promedio
FROM Mascotas
GROUP BY especie;