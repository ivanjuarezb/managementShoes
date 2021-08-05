CREATE DATABASE NOT EXISTS dbshoe CHARACTER SET 'utf8' COLLATE 'utf8_general_ci IF';
USE dbshoe;

CREATE  TABLE shoes(
    id           INT(255) auto_increment NOT NULL,
    name         VARCHAR(255) NOT NULL,
    style        VARCHAR(50) NOT NULL,
    color        VARCHAR(50) NOT NULL,
    size         INT(100) NOT NULL,
    units        INT(100) NOT NULL,
    price        DECIMAL(4,2) NOT NULL,
    datetime     DATETIME NOT NULL,
    nameimage    VARCHAR(255) NOT NULL,
    image        LONGBLOB NOT NULL,
    type         VARCHAR(50) NOT NULL,

    CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;