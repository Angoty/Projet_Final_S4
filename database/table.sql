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
    mdp VARCHAR(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



