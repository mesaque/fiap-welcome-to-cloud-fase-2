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

INSERT INTO users(username,password,firstname,lastname,email) VALUES('caio', 'c68d50eeb4a8a3049a49a093153ca41b', 'Caio', 'Carvalho', 'CaioMeloCarvalho@teleworm.us');
INSERT INTO users(username,password,firstname,lastname,email) VALUES('pedro', 'e15423bea8bb63d94f0ad2ec566248e0', 'Pedro', 'Silva', 'pedrorvalho@teleworm.us');
INSERT INTO users(username,password,firstname,lastname,email) VALUES('francisco', '52bcacbdf0bf90fee60e16a4a9c7aae1', 'Francisco', 'Nunes', 'frameloCarvalho@teleworm.us');
INSERT INTO users(username,password,firstname,lastname,email) VALUES('jose', 'd57f7a2a2ef2e1cef3640d5f79c8fa62', 'Jose', 'Antonio', 'antonioarvalho@teleworm.us');
INSERT INTO users(username,password,firstname,lastname,email) VALUES('lara', '6a52e8f1cf3ad41d5300ae4373697888', 'Lara', 'Doe', 'laraCarvalho@teleworm.us');
INSERT INTO users(username,password,firstname,lastname,email) VALUES('estevao', '5908c99071cf36b5eb33eb06724a3f49', 'Estevão', 'Krispim', 'estevaalho@teleworm.us');