-- ============================================================
-- Tabla: Usuarios
-- Descripción: Almacena información de los usuarios registrados.
-- 
-- Columnas:
--   id              INT             Identificador único del usuario (PRIMARY KEY).
--   nombre          VARCHAR(50)     Nombre completo del usuario (NO NULO).
--   email           VARCHAR(100)    Correo electrónico del usuario (NO NULO, ÚNICO).
--   fecha_registro  DATE            Fecha de registro del usuario (por defecto: fecha actual).
--
-- Restricciones:
--   - PRIMARY KEY en 'id'.
--   - UNIQUE en 'email'.
--   - 'nombre' y 'email' no pueden ser nulos.
--
-- Motor de almacenamiento: InnoDB
-- Codificación de caracteres: latin1
--
-- Ejemplo de inserción de datos para tres usuarios.
-- ============================================================
CREATE TABLE Usuarios(
    id INT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    fecha_registro DATE DEFAULT CURRENT_DATE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO Usuarios (id, nombre, email) VALUES
(1, 'Juan Perez', 'juan.perez@example.com'),
(2, 'Maria Gomez', 'maria.gomez@example.com'),
(3, 'Luis Rodriguez', 'luis.rodriguez@example.com');
