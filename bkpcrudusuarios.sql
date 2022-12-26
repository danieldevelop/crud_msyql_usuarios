CREATE DATABASE IF NOT EXISTS crudmysql;
USE crudmysql;

--
-- STRUCTURE TABLE mvc_usuario
--
CREATE TABLE IF NOT EXISTS usuario(
    idcod INT,
    rut VARCHAR(14),
    apll VARCHAR(45),
    nom VARCHAR(45),
    nacionalidad VARCHAR(30),
    sexo VARCHAR(5),
    fchNacimiento VARCHAR(25),
    username VARCHAR(45),
    userpass VARCHAR(255)
);

--
-- ADD INDEX IN TABLE
--
ALTER TABLE usuario ADD PRIMARY KEY(idcod);
ALTER TABLE usuario ADD UNIQUE KEY(username), ADD UNIQUE KEY(rut);

-- 
-- ADD AUTO_INCREMENT IN TABLE
--
ALTER TABLE usuario MODIFY idcod INT AUTO_INCREMENT, AUTO_INCREMENT = 0;