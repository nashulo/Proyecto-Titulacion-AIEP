# Ecommerce Buenas Carnes

<img src="./imagenes/banner principal.jpg">

----

# Recursos

- HTML5 HyperText Markup Language
- JS, JavaScript
- PHP, Hypertext Preprocessor (desde la version 5 hasta la 8)
- CSS, Hojas de estilos en cascada
- AppServer, Como Servidor local para las pruebas

----

## Implementacion de Database ecommerce
> Para implementar la base de datos de prueba, de debe ejecutar el siguiente codigo SQL, tambien
este se encontrara dentro del directorio docs, como archivo externo

```sql
    CREATE DATABASE ecommerce
    
    USE ecommerce;

    CREATE TABLE perfil (id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(45),
        nivel INT NOT NULL UNIQUE
    );

    INSERT INTO perfil(nombre, nivel) VALUES ('adminstrador', 1), ('usuario', 2);

    CREATE TABLE usuario (id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(45),
        username VARCHAR(45) NOT NULL UNIQUE,
        contrasenha VARCHAR(45) NOT NULL,
        nivel_perfil INT NOT NULL UNIQUE,
        CONSTRAINT fk_level_profile FOREIGN KEY(nivel_perfil) REFERENCES perfil(nivel)
    );

    INSERT INTO usuario(nombre, username, contrasenha, nivel_perfil) VALUES
    ('informactica', 'informatica@test.cl', '1234', 1),
    ('pedro', 'pedro@correoaiep.cl', '1234', 2);
```

----

## IMPORTANTE

> Para acceder a los datos, usted debera remplazar el usuario y constraseña de su
servidor local, este se encuenta dentro del archivo auth.php

- Si mi Usuario es root y mi Contraseña es "" (vacia), este tendria que quedar así:
    ```php
        $conexion = mysqli_connect("localhost", "root", "", "ecommerce");
    ```
- Si mi Usuario es root y mi Contraseña es root, este tendria que quedar así:
    ```php
        $conexion = mysqli_connect("localhost", "root", "root", "ecommerce");
    ```

---- 

## Credenciales Usuario y Administrador.

- Usuario: pedro@correoaiep.cl y Contraseña: 1234
- Administrador: informatica@test.cl y Contraseña: 1234

----

## License

Jose Ignacio - 2022
