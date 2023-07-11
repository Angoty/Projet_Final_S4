CREATE DATABASE projet;
USE projet;


CREATE TABLE Administrateur(
    idAdministrateur INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    email VARCHAR(40),
    mdp VARCHAR(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Utilisateur(
    idUtilisateur INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    email VARCHAR(40),
    mdp VARCHAR(30),
    image VARCHAR(25)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE Code(
    idCode INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    numero VARCHAR(15),
    valeur DOUBLE PRECISION,
    etat INTEGER
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE PostValidation(
    numero VARCHAR(15),
    idUtilisateur INTEGER REFERENCES Utilisateur(idUtilisateur),
    etat INTEGER REFERENCES Code(etat)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Informations(
    idUtilisateur INTEGER REFERENCES Utilisateur(idUtilisateur),
    gentre VARCHAR(20),
    taille DOUBLE PRECISION,
    poids DOUBLE PRECISION
);