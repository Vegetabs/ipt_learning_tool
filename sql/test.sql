DROP DATABASE IF EXISTS murp31db;
CREATE DATABASE murp31db;

DROP USER IF EXISTS 'murp31';
CREATE USER 'murp31' 
IDENTIFIED BY 'murp31';

GRANT INSERT, UPDATE, DELETE,SELECT ON murp31db.* TO murp31;

USE murp31db;
DROP TABLE IF EXISTS users;
CREATE TABLE users (
    user_name     VARCHAR(40) NOT NULL,
    password     VARCHAR(40) NOT NULL,
    first_name     VARCHAR(40) NOT NULL,
    last_name     VARCHAR(40) NOT NULL,
    PRIMARY KEY(user_name)
);
INSERT INTO users
    (user_name, password, first_name, last_name)
VALUES
    ('joe','bloggs','Joe','Bloggs'),
    ('user','password','User','User')