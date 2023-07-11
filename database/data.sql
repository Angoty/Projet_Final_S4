INSERT INTO Administrateur VALUES(NULL, 'Rabenanahary', 'Rojo', 'rojo@gmail.com', 'projet');
INSERT INTO Utilisateur VALUES(NULL, 'angoty', 'Angoty', 'angoty@gmail.com', 'angoty', 'background.jpg');



INSERT INTO Code VALUES(NULL, '123456789789456', 40000, 0);
INSERT INTO Code VALUES(NULL, '789753741159654', 30000, 0);
INSERT INTO Code VALUES(NULL, '596312408723114', 20000, 0);
INSERT INTO Code VALUES(NULL, '758123924798401', 40000, 0);
INSERT INTO Code VALUES(NULL, '587462301230000', 10000, 0);
INSERT INTO Code VALUES(NULL, '111145507785636', 50000, 0);


INSERT INTO genre (intitule) VALUES ('Homme');
INSERT INTO genre (intitule) VALUES ('Femme');

INSERT INTO taille (valeurDebut,valeurFin) VALUES (150, 160);
INSERT INTO taille (valeurDebut,valeurFin) VALUES (161, 170);
INSERT INTO taille (valeurDebut,valeurFin) VALUES (171, 180);
INSERT INTO taille (valeurDebut,valeurFin) VALUES (181, 190);
INSERT INTO taille (valeurDebut,valeurFin) VALUES (191, 200);

INSERT INTO poids (poidsDebut,poidsFin) VALUES (50, 60);
INSERT INTO poids (poidsDebut,poidsFin) VALUES (61, 70);
INSERT INTO poids (poidsDebut,poidsFin) VALUES (71, 80);
INSERT INTO poids (poidsDebut,poidsFin) VALUES (81, 90);
INSERT INTO poids (poidsDebut,poidsFin) VALUES (91, 100);

INSERT INTO choix (intituleP) VALUES ('Reduire le poids');
INSERT INTO choix (intituleP) VALUES ('Augmenter le poids');

INSERT INTO jour (intituleJ) VALUES ('Jour 1');
INSERT INTO jour (intituleJ) VALUES ('Jour 2');
INSERT INTO jour (intituleJ) VALUES ('Jour 3');
INSERT INTO jour (intituleJ) VALUES ('Jour 4');
INSERT INTO jour (intituleJ) VALUES ('Jour 5');
INSERT INTO jour (intituleJ) VALUES ('Jour 6');
INSERT INTO jour (intituleJ) VALUES ('Jour 7 ');

INSERT INTO moment (intituleM) VALUES ('Petit dejeuner');
INSERT INTO moment (intituleM) VALUES ('Dejeuner');
INSERT INTO moment (intituleM) VALUES ('Diner');


-- petit dejeuner qui reduit le poids
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Omelette aux legumes ', 1,1,'un plat savoureux et sain qui combine des œufs battus avec une variete de legumes frais ou cuits.');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Yaourt grec',1,1,'produits laitiers riches et cremeux, originaires de la Grece');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Smoothie vert', 1,1,'une boisson saine et rafraîchissante preparee a partir d ingredients verts tels que des legumes feuillus et des fruits');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Porridge a l avoine', 1,1,' un petit-dejeuner chaud et reconfortant prepare a partir de flocons d avoine cuits dans du liquide, generalement de l eau ou du lait');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Tartine d avocat', 1,1,'une delicieuse collation ou un repas leger compose d une tranche de pain garnie d avocat ecrase et d autres ingredients savoureux. ');

-- petit dejeuner qui augmente le poids

INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Smoothie proteine', 2,1,' une boisson energisante et nutritive preparee a partir d ingredients riches en proteines');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Pain perdu', 2,1,'un delicieux dessert ou petit-dejeuner fait a partir de tranches de pain trempees dans un melange de lait, d oeufs, de sucre et d epices, puis cuites a la poele jusqu a ce qu elles soient dorees et croustillantes');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Omelette au fromage', 2,1,'un plat delicieux et reconfortant prepare en battant des œufs avec du fromage rape et d autres ingredients, puis en les cuisant a la poele jusqu a ce qu ils soient bien cuits');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Yaourt aux noix et aux fruits', 2,1,'une collation ou un dessert sain et dzlicieux compose de yaourt, de noix croquantes et de fruits frais ou seches');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Avocat sur du pain complet', 2,1,'une delicieuse collation ou un repas leger qui associe la texture cremeuse de l avocat a la saveur et a la richesse nutritive du pain complet');

-- dejeuner qui reduit le poids
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Salade de poulet grille', 1,2,' un plat frais et savoureux compose de morceaux de poulet grille servis sur un lit de legumes croquants et de verdure');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Wraps de laitue', 1,2,' une alternative legere et saine aux wraps traditionnels a base de tortillas ou de pains');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Soupe aux legumes', 1,2,'un plat reconfortant et nourrissant, prepare en cuisant differents legumes dans un bouillon savoureux');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Salade de quinoa', 1,2,' un plat savoureux et nutritif compose de quinoa cuit et melange a une variete d ingredients frais et colores');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Poisson grille avec legumes rotis', 1,2,'un plat delicieux et sain qui associe des filets de poisson cuits a la perfection avec des legumes colores et rotis');


-- dejeuner qui augmente le poids
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Bol de riz complet avec proteines', 2,2,'un repas sain et equilibre qui combine du riz complet avec une source de proteines pour une alimentation nourrissante');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Sandwich aux avocats et aux œufs', 2,2,'un delicieux sandwich qui associe la richesse cremeuse de l avocat avec la proteine nourrissante des œufs');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Pates a base de ble complet avec sauce riche en proteines', 2,2,'un plat nutritif et savoureux qui combine les bienfaits du ble complet avec une source de proteines pour un repas equilibre');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Wrap aux legumes et au fromage ', 2,2,'un delicieux repas ou une collation legere qui consiste a envelopper des legumes frais et du fromage dans une tortilla souple');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Bowl de burrito', 2,2,'un plat inspire des saveurs d un burrito traditionnel, mais presente dans un bol plutot que dans une tortilla');

-- diner qui reduit le poids
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Salade de poulet aux fruits', 1,3,'une combinaison savoureuse de morceaux de poulet cuits et de fruits frais, le tout melangé dans une vinaigrette légère et rafraichissante');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Poisson poche avec legumes sautes', 1,3,'un plat leger et delicieux qui met en valeur la saveur delicate du poisson et la texture croquante des legumes sautes');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Tofu saute avec nouilles de courgettes', 1,3,'un plat vegetarien et sain qui marie la texture tendre et moelleuse du tofu avec des nouilles de courgettes legeres et croquantes.');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Curry de legumes aux lentilles', 1,3,'un plat vegetarien ou vegetalien savoureux et nourrissant, rempli de legumes colores et de lentilles riches en proteines');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Soupe aux lentilles et aux legumes', 1,3,'un plat reconfortant et nutritif qui associe les bienfaits des lentilles riches en proteines et en fibres aux legumes savoureux');

-- diner qui augmente le poids
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Steak de bœuf avec pommes de terre douces', 2,3,'un plat classique et delicieux qui associe la tendrete du steak de bœuf a la douceur et a la saveur riche des pommes de terre douces.');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Pâtes a la sauce cremeuse', 2,3,' un plat reconfortant et delicieux qui consiste en des pates cuites al dente accompagnees d une sauce onctueuse a base de creme');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Bol de riz avec legumes et proteine', 2,3,'un repas équilibre et nourrissant qui combine du riz, des legumes colores et une source de proteines pour une alimentation saine');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Burger de dinde avec frites de patates douces', 2,3,'une option savoureuse et plus legere par rapport aux burgers traditionnels de bœuf');
INSERT INTO plat (nomplat, idchoix, idmoment, description) VALUES ('Poisson grille avec quinoa et legumes rôtis', 2,3,'un plat sain et equilibre qui associe les bienfaits du poisson grille, du quinoa nutritif et des legumes rotis savoureux');
 
-- sports qui reduit le poids
INSERT INTO sport (nomsport, idchoix) VALUES ('Course a pied',1);
INSERT INTO sport (nomsport, idchoix) VALUES ('Natation',1);
INSERT INTO sport (nomsport, idchoix) VALUES ('Cyclisme',1);
INSERT INTO sport (nomsport, idchoix) VALUES ('Pompes matinale',1);
INSERT INTO sport (nomsport, idchoix) VALUES ('Abdominaux matinale',1);
INSERT INTO sport (nomsport, idchoix) VALUES ('les fentes',1);

-- sports qui augmente le poids
INSERT INTO sport (nomsport, idchoix) VALUES ('10 min musculation',2);
INSERT INTO sport (nomsport, idchoix) VALUES ('10 * 2 tractions a la barre',2);
INSERT INTO sport (nomsport, idchoix) VALUES ('Develloper coucher',2);
INSERT INTO sport (nomsport, idchoix) VALUES ('Boxe',2);
INSERT INTO sport (nomsport, idchoix) VALUES ('Foot',2); 

-- regime  de perte de poids

INSERT INTO regime (nomregime,prix,idpoids,idsport,idchoix)
VALUES ('Defi Transforme-toi',60000,2,1,1);
INSERT INTO regime (nomregime,prix,idpoids,idsport,idchoix)
VALUES ('Gagne en muscle toi',60000,2,9,2);
INSERT INTO regime (nomregime,prix,idpoids,idsport,idchoix)
VALUES ('Perds pas',60000,2,8,2);


-- proposition  de perte de poids

INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,1 ,1 );
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,11 ,1);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,21 ,1);

INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,2 ,2 );
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,12 ,2 );
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,22 ,2);


INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,3 ,3);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,13,3);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,23 ,3);


INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,4 ,4 );
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,14 ,4 );
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,24 ,4 );


INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,5 ,5 );
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,15 , 5);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,25 ,5 );


INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,2 ,6);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,13 ,6);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,24 ,6);


INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,3 ,7 );
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,14 ,7);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (1,25 ,7);


INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,6,1);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,16,1);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,26,1);

INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,7,2);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,17,2);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,27,2);

INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,8,3);

INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,18,3);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,28,3);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,9,4);

INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,19,4);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,29,4);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,10,5);

INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,20,5);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,30,5);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,8,6);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,19,6);

INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,20,6);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,9,7);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,16,7);

INSERT INTO proposition (idregime, idplat, idjour) VALUES (2,26,7);

INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,26






INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,17,1);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,7,1);


INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,27,2);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,19,2);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,8,2);


INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,30,3);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,20,3);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,10,3);


INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,29,4);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,19,4);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,9,4);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,28,5);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,18,5);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,8,5);


INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,27,6);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,17,6);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,7,6);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,26,7);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,16,7);
INSERT INTO proposition (idregime, idplat, idjour) VALUES (3,6,7);

