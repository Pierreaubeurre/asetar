DROP DATABASE IF EXISTS BD_ASETAR;

CREATE DATABASE BD_ASETAR;

USE BD_ASETAR;

CREATE USER IF NOT EXISTS 'Admin'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON *.* TO 'Admin'@'localhost';




CREATE TABLE COMPTE
    (
    ID_U        INTEGER     NOT NULL,
    PSEUDO_U   VARCHAR(20)    NULL,
    MDP_U   VARCHAR(200)    NULL,
    ROLE_U    VARCHAR(20)    NULL,
    PRIMARY KEY (ID_U)
    );




CREATE TABLE PROFIL
	(
      ID_U      INTEGER     NOT NULL AUTO_INCREMENT,
      NOM   VARCHAR(20)     NULL,
      PRENOM  VARCHAR(20)    NULL,
      PSEUDO_U    VARCHAR(20)    NULL,
      AGE    INTEGER        NOT NULL,
      BIO    VARCHAR(200)    NULL,
      CODE_POSTAL INTEGER    NOT NULL, 
      DATE_NAISSANCE DATE    NULL,
      TEL VARCHAR(20)        NULL,
      CENTRE_FORMATION   VARCHAR(200)   NULL,
      LANGUE    VARCHAR(20)     NULL,
      MAIL      VARCHAR(200)        NULL,
      PRIMARY KEY (ID_U),
      FOREIGN KEY (ID_U) REFERENCES COMPTE (ID_U)
    );




CREATE TABLE BOUTIQUE
	(
      ARTICLE VARCHAR(30)    NULL,
      PRIX INTEGER    NOT NULL,
      STOCK INTEGER     NOT NULL,
      PRIMARY KEY (ARTICLE)
    );



INSERT INTO COMPTE VALUES (1, "TATA",        "toto",         "User");
INSERT INTO COMPTE VALUES (2, "TATA2000",    "tata2000",     "User");
INSERT INTO COMPTE VALUES (3, "Thib",        "Thib1234",     "Admin");
INSERT INTO COMPTE VALUES (4, "Aeklys",      "Ryan1234",     "Admin");
INSERT INTO COMPTE VALUES (5, "Theo",        "Theo1234",     "Admin");
INSERT INTO COMPTE VALUES (6, "Gaetan",      "Gaetan1234",   "Admin");
INSERT INTO COMPTE VALUES (7, "Lumiere",     "sombre",       "User");
INSERT INTO COMPTE VALUES (8, "Test",        "test2022",     "User");

INSERT INTO PROFIL VALUES (4, "Ryan", "TEIXEIRA", "Aeklys", "18", "Jeune-entrepreneur", "08000", "2003-05-27", "06-06-06-06-06", "BTS SIO MONGE", "Français",  "ryan.txa27@gmail.com");
