-- USE ecommerce; # (NOMBRE DE LA BASE DE DATOS)

CREATE TABLE IF NOT EXISTS perfil (id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45),
    nivel INT NOT NULL UNIQUE
);

/**
INSERT INTO perfil(nombre, nivel) VALUES
('adminstrador', 1),
('usuario', 2);
*/

CREATE TABLE IF NOT EXISTS usuario (id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(45),
    username VARCHAR(45) NOT NULL UNIQUE,
    contrasenha VARCHAR(45) NOT NULL,
    nivel_perfil INT NOT NULL UNIQUE,
    CONSTRAINT fk_level_profile FOREIGN KEY(nivel_perfil) REFERENCES perfil(nivel)
);

/**
INSERT INTO usuario(nombre, username, contrasenha, nivel_perfil) VALUES
('informactica', 'informatica@test.cl', '1234', 1),
('pedro', 'pedro@correoaiep.cl', '1234', 2);
*/

/**
SELECT u.nombre, u.username, p.nombre
FROM usuario u, perfil p
WHERE p.nivel = u.nivel_perfil
*/