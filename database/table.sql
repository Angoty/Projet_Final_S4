CREATE DATABASE projet;
USE projet;


CREATE TABLE administrateur(
    idAdministrateur INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    email VARCHAR(40),
    mdp VARCHAR(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;                                                                                                   

CREATE TABLE utilisateur(
    idUtilisateur INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    email VARCHAR(40),
    mdp VARCHAR(30),
    image VARCHAR     
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE informations(
    idinformation INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    idUtilisateur  INTEGER,
    idgenre INTEGER(20),
    idchoix INTEGER,
    taille DOUBLE,
    poids DOUBLE,
    FOREIGN KEY (idgenre) REFERENCES genre(idgenre),
    FOREIGN KEY (idchoix) REFERENCES choix(idchoix)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
 

CREATE TABLE genre(
    idgenre INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    intitule VARCHAR(20)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE taille(
    idtaille INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    valeurDebut INTEGER,
    valeurFin INTEGER

)ENGINE=InnoDB DEFAULT CHARSET=utf8;                 



CREATE TABLE poids(
    idpoids INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    poidsDebut INTEGER,
    poidsFin INTEGER
)ENGINE=InnoDB DEFAULT CHARSET=utf8;                 


CREATE TABLE choix(
    idchoix INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    intituleP VARCHAR(20)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;                


CREATE TABLE jour(
    idjour INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    intituleJ VARCHAR(20)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;                  

CREATE TABLE moment(
    idmoment INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    intituleM VARCHAR(20)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;      

CREATE TABLE plat(
    idplat INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nomplat VARCHAR(100),
    description VARCHAR(500),
    idchoix INTEGER,
    idmoment INTEGER,
    FOREIGN KEY (idmoment) REFERENCES moment(idmoment),
    FOREIGN KEY (idchoix) REFERENCES choix(idchoix)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE sport(
    idsport INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nomsport VARCHAR(50),
    idchoix INTEGER,
    FOREIGN KEY (idchoix) REFERENCES choix(idchoix)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE regime(
    idregime INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nomregime VARCHAR(50),
    prix float,
    idpoids INTEGER,
    idsport INTEGER,
    idchoix INTEGER,
    FOREIGN KEY (idpoids) REFERENCES poids(idpoids),
    FOREIGN KEY (idsport) REFERENCES sport(idsport),
    FOREIGN KEY (idchoix) REFERENCES choix(idchoix)

)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE proposition(
    idproposition INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    idregime INTEGER,
    idplat INTEGER,
    idjour INTEGER,
    FOREIGN KEY (idregime) REFERENCES regime(idregime),
    FOREIGN KEY (idplat) REFERENCES plat(idplat),
    FOREIGN KEY (idjour) REFERENCES jour(idjour) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;                 

