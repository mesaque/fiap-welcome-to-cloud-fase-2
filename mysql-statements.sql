CREATE DATABASE IF NOT EXISTS fiap;

USE fiap;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username varchar(60) NOT NULL,
    password varchar(255),
    firstname varchar(50) NOT NULL,
    lastname varchar(50) NOT NULL,
    email varchar(100)
)  ENGINE=INNODB;

INSERT INTO users(username,password,firstname,lastname,email) VALUES('caio', '30c303c6735967f37dd48156df91e5ecdf83674deac374c08adcd497663d7e19', 'Caio', 'Carvalho', 'CaioMeloCarvalho@teleworm.us');
