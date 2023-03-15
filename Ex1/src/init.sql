CREATE DATABASE users;

USE users;

CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', 'nimda');
INSERT INTO users (username, password) VALUES ('huy', 'huy123');
INSERT INTO users (username, password) VALUES ('thanh', 'thanh111');
INSERT INTO users (username, password) VALUES ('dat', 'dat132');
INSERT INTO users (username, password) VALUES ('tien', 'tien301');


