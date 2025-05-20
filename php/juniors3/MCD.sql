CREATE DATABASE juniors3;

use juniors3;

CREATE table users(
    id int AUTO_INCREMENT PRIMARY KEY,
    login varchar(200),
    password varchar(200),
    level int
);