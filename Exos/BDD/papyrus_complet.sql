DROP DATABASE IF EXISTS papyrus;

CREATE DATABASE papyrus;

USE papyrus;

CREATE TABLE `fournis` (
  `numfou` int NOT NULL,
  `nomfou` varchar(25) NOT NULL,
  `ruefou` varchar(50) NOT NULL,
  `posfou` char(5) NOT NULL,
  `vilfou` varchar(30) NOT NULL,
  `confou` varchar(15) NOT NULL,
  `satisf` tinyint(4) DEFAULT NULL, 
  CHECK (`satisf` >=0 AND `satisf` <=10),
  PRIMARY KEY (`numfou`)
);

INSERT INTO `fournis` (`numfou`, `nomfou`, `ruefou`, `posfou`, `vilfou`, `confou`, `satisf`) VALUES
	(120, 'GROBRIGAN', '20 rue du papier', '92200', 'Papercity', 'Georges', 8),
	(540, 'ECLIPSE', '53 rue laisse flotter les rubans', '78250', 'Bugbugville', 'Nestor', 7),
	(8700, 'MEDICIS', '120 rue des plantes', '75014', 'Paris', 'Lison', 0),
	(9120, 'DISCOBOL', '11 rue des sports', '85100', 'La Roche sur Yon', 'Hercule', 8),
	(9150, 'DEPANPAP', '26 avenue des locomotives', '59987', 'Coroncountry', 'Pollux', 5),
	(9180, 'HURRYTAPE', '68 boulevard des octets', '78440', 'Dumpville', 'Track', 0),
	(10127, 'FOURNITOU', '30 allée des chaumières', '78440', 'Dumpville', 'Bobby', 3);

CREATE TABLE `produit` (
  `codart` char(4) NOT NULL,
  `libart` varchar(30) NOT NULL,
  `stkale` int(11) NOT NULL,
  `stkphy` int(11) NOT NULL,
  `qteann` int(11) NOT NULL,
  `unimes` char(5) NOT NULL,
  PRIMARY KEY (`codart`)
) ;


INSERT INTO `produit` (`codart`, `libart`, `stkale`, `stkphy`, `qteann`, `unimes`) VALUES
	('B001', 'Bande magnétique 1200', 20, 87, 240, 'unite'),
	('B002', 'Bande magnétique 6250', 20, 12, 410, 'unite'),
	('D035', 'CD R slim 80 mm', 40, 42, 150, 'B010'),
	('D050', 'CD R-W 80mm', 50, 4, 0, 'B010'),
	('I100', 'Papier 1 ex continu', 100, 557, 3500, 'B1000'),
	('I105', 'Papier 2 ex continu', 75, 5, 2300, 'B1000'),
	('I108', 'Papier 3 ex continu', 200, 557, 3500, 'B500'),
	('I110', 'Papier 4 ex continu', 10, 12, 63, 'B400'),
	('P220', 'Pré-imprimé commande', 500, 2500, 24500, 'B500'),
	('P230', 'Pré-imprimé facture', 500, 250, 12500, 'B500'),
	('P240', 'Pré-imprimé bulletin paie', 500, 3000, 6250, 'B500'),
	('P250', 'Pré-imprimé bon livraison', 500, 2500, 24500, 'B500'),
	('P270', 'Pré-imprimé bon fabrication', 500, 2500, 24500, 'B500'),
	('R080', 'ruban Epson 850', 10, 2, 120, 'unite'),
	('R132', 'ruban impl 1200 lignes', 25, 200, 182, 'unite');



CREATE TABLE `entcom` (
  `numcom` int(11) NOT NULL AUTO_INCREMENT,
  `obscom` varchar(50) DEFAULT NULL,
  `datcom` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `numfou` int(11) DEFAULT NULL,
  PRIMARY KEY (`numcom`),
  KEY `numfou` (`numfou`),
  CONSTRAINT `entcom_ibfk_1` FOREIGN KEY (`numfou`) REFERENCES `fournis` (`numfou`)
);


INSERT INTO `entcom` (`numcom`, `obscom`, `datcom`, `numfou`) VALUES
	(70010, '', '2018-04-23 15:59:51', 120),
	(70011, 'Commande urgente', '2020-05-21 17:32:43', 540),
	(70020, '', '2020-12-14 08:57:09', 9120),
	(70025, 'Commande urgente', '2021-04-13 16:17:45', 9150),
	(70210, 'Commande cadencée', '2021-06-05 10:40:05', 120),
	(70250, 'Commande cadencée', '2021-08-02 09:19:46', 8700),
	(70300, '', '2021-10-31 14:03:52', 9120),
	(70620, '', '2021-10-31 15:24:17', 540),
	(70625, '', '2022-02-19 13:07:33', 120),
	(70629, '', '2022-04-02 19:58:16', 9180);



CREATE TABLE `ligcom` (
  `numlig` tinyint(4) NOT NULL,
  `numcom` int(11) NOT NULL,
  `codart` char(4) NOT NULL,
  `qtecde` int(11) NOT NULL,
  `priuni` decimal(5,0) NOT NULL,
  `qteliv` int(11) DEFAULT NULL,
  `derliv` date NOT NULL,
  PRIMARY KEY (`numcom`,`codart`),
  KEY `codart` (`codart`),
  CONSTRAINT `ligcom_ibfk_1` FOREIGN KEY (`numcom`) REFERENCES `entcom` (`numcom`),
  CONSTRAINT `ligcom_ibfk_2` FOREIGN KEY (`codart`) REFERENCES `produit` (`codart`)
);


INSERT INTO `ligcom` (`numcom`, `numlig`, `codart`, `qtecde`, `priuni`, `qteliv`, `derliv`) VALUES
	(70010, 1, 'I100', 3000, 470, 3000, '2018-04-15'),
	(70010, 2, 'I105', 2000, 485, 2000, '2018-07-05'),
	(70010, 3, 'I108', 1000, 680, 1000, '2018-08-20'),
	(70010, 4, 'D035', 200, 40, 250, '2018-08-20'),
	(70010, 5, 'P220', 6000, 3500, 6000, '2018-08-31'),
	(70010, 6, 'P240', 6000, 2000, 2000, '2018-08-31'),
	(70011, 1, 'I105', 1000, 600, 1000, '2020-05-26'),
	(70011, 2, 'P220', 10000, 3500, 10000, '2020-05-31'),
	(70020, 1, 'B001', 200, 140, 0, '2020-12-31'),
	(70020, 2, 'B002', 200, 140, 0, '2020-12-31'),
	(70025, 1, 'I100', 1000, 590, 1000, '2021-04-15'),
	(70025, 2, 'I105', 500, 590, 500, '2021-05-16'),
	(70210, 1, 'I100', 1000, 470, 1000, '2021-06-13'),
	(70250, 1, 'P230', 15000, 4900, 12000, '2021-08-18'),
	(70250, 2, 'P220', 10000, 3350, 10000, '2021-09-08'),
	(70300, 1, 'I100', 50, 790, 50, '2021-11-08'),
	(70620, 1, 'I105', 200, 600, 200, '2021-11-08'),
	(70625, 1, 'I100', 1000, 470, 1000, '2022-10-15'),
	(70625, 2, 'P220', 10000, 3500, 10000, '2022-03-03'),
	(70629, 1, 'B001', 200, 140, 0, '2022-04-21'),
	(70629, 2, 'B002', 200, 140, 0, '2022-04-21');



CREATE TABLE `vente` (
  `codart` char(4) NOT NULL,
  `numfou` int(11) NOT NULL,
  `delliv` smallint(6) NOT NULL,
  `qte1` int(11) NOT NULL,
  `prix1` decimal(5,0) NOT NULL,
  `qte2` int(11) DEFAULT NULL,
  `prix2` decimal(5,0) DEFAULT NULL,
  `qte3` int(11) DEFAULT NULL,
  `prix3` decimal(5,0) DEFAULT NULL,
  PRIMARY KEY (`codart`,`numfou`),
  KEY `numfou` (`numfou`),
  CONSTRAINT `vente_ibfk_1` FOREIGN KEY (`numfou`) REFERENCES `fournis` (`numfou`),
  CONSTRAINT `vente_ibfk_2` FOREIGN KEY (`codart`) REFERENCES `produit` (`codart`)
) ;


INSERT INTO `vente` (`codart`, `numfou`, `delliv`, `qte1`, `prix1`, `qte2`, `prix2`, `qte3`, `prix3`) VALUES
	('B001', 8700, 15, 0, 150, 50, 145, 100, 140),
	('B002', 8700, 15, 0, 210, 50, 200, 100, 185),
	('D035', 120, 0, 0, 40, 0, 0, 0, 0),
	('D035', 9120, 5, 0, 40, 100, 30, 0, 0),
	('I100', 120, 90, 0, 700, 50, 600, 120, 500),
	('I100', 540, 70, 0, 710, 60, 630, 100, 600),
	('I100', 9120, 60, 0, 800, 70, 600, 90, 500),
	('I100', 9150, 90, 0, 650, 90, 600, 200, 590),
	('I100', 9180, 30, 0, 720, 50, 670, 100, 490),
	('I105', 120, 90, 10, 705, 50, 630, 120, 500),
	('I105', 540, 70, 0, 810, 60, 645, 100, 600),
	('I105', 8700, 30, 0, 720, 50, 670, 100, 510),
	('I105', 9120, 60, 0, 920, 70, 800, 90, 700),
	('I105', 9150, 90, 0, 685, 90, 600, 200, 590),
	('I108', 120, 90, 5, 795, 30, 720, 100, 680),
	('I108', 9120, 60, 0, 920, 70, 820, 100, 780),
	('I110', 9120, 60, 0, 950, 70, 850, 90, 790),
	('I110', 9180, 90, 0, 900, 70, 870, 90, 835),
	('P220', 120, 15, 0, 3700, 100, 3500, 0, 0),
	('P220', 8700, 20, 50, 3500, 100, 3350, 0, 0),
	('P230', 120, 30, 0, 5200, 100, 5000, 0, 0),
	('P230', 8700, 60, 0, 5000, 50, 4900, 0, 0),
	('P240', 120, 15, 0, 2200, 100, 2000, 0, 0),
	('P250', 120, 30, 0, 1500, 100, 1400, 500, 1200),
	('P250', 9120, 30, 0, 1500, 100, 1400, 500, 1200),
	('R080', 9120, 10, 0, 120, 100, 100, 0, 0),
	('R132', 9120, 5, 0, 275, 0, 0, 0, 0);



-- Ex 1 : Quelles sont les commandes du fournisseur n°9120 ?
-- SELECT nomfou, numcom, obscom, datcom FROM fournis
-- JOIN entcom ON fournis.numfou = entcom.numfou
-- WHERE fournis.numfou LIKE '%9120%';

-- Ex 2 : Afficher le code des fournisseurs pour lesquels des commandes ont été passées.
-- SELECT nomfou, fournis.numfou, numcom, datcom FROM fournis
-- JOIN entcom ON fournis.numfou = entcom.numfou
-- GROUP BY fournis.numfou;

-- Ex 3 : Afficher le nombre de commandes fournisseurs passées, et le nombre de fournisseur concernés.
-- SELECT COUNT(numcom), COUNT(DISTINCT(numfou)) FROM entcom;

-- Ex 4 : Extraire les produits ayant un stock inférieur ou égal au stock d'alerte, et dont la quantité annuelle est inférieure à 1000.
-- (Informations à fournir : n° produit, libellé produit, stock actuel, stock d'alerte, quantité annuelle)
-- SELECT codart, libart, stkale, stkphy, qteann FROM produit
-- WHERE stkphy <= stkale AND qteann < 1000;

-- Ex 5 : Quels sont les fournisseurs situés dans les départements 75, 78, 92, 77 ?
-- L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique.
-- SELECT nomfou, posfou FROM fournis
-- WHERE posfou LIKE '75%' OR posfou LIKE '78%' OR posfou LIKE '92%' OR posfou LIKE '77%'
-- ORDER BY posfou DESC, nomfou ASC;

-- Ex 6 : Quelles sont les commandes passées en mars et en avril ?
-- SELECT datcom, numcom FROM entcom
-- WHERE MONTH(datcom) IN (3, 4);

-- Ex 7 : Quelles sont les commandes du jour qui ont des observations particulières ?
-- (Afficher numéro de commande et date de commande)
-- SELECT numcom, obscom FROM entcom
-- WHERE obscom NOT LIKE '';

-- Ex 8 : Lister le total de chaque commande par total décroissant.
-- (Afficher numéro de commande et total)
-- SELECT ligcom.numcom, Sum(ligcom.qtecde * ligcom.priuni) AS Total FROM ligcom
-- GROUP BY ligcom.numcom
-- ORDER BY Total desc;

-- Ex 9 : Lister les commandes dont le total est supérieur à 10000€ ; on exclura dans le calcul du total les articles commandés en quantité supérieure ou égale à 1000.
-- (Afficher numéro de commande et total)
-- SELECT * FROM (
-- SELECT numcom, SUM(qtecde) as qte, sum(qtecde * priuni) AS Total FROM ligcom
-- GROUP BY numcom
-- ) AS calc
-- WHERE qte < 1000 AND Total > 10000
-- ORDER BY Total DESC;

-- Ex 10 : Lister les commandes par nom de fournisseur.
-- (Afficher nom du fournisseur, numéro de commande et date)
-- SELECT ligcom.numcom, fournis.nomfou, entcom.datcom FROM ligcom
-- JOIN entcom ON ligcom.numcom = entcom.numcom
-- JOIN fournis ON entcom.numfou = fournis.numfou
-- GROUP BY fournis.nomfou;

-- Ex 11 : Sortir les produits des commandes ayant le mot "urgent' en observation.
-- Afficher numéro de commande, nom du fournisseur, libellé du produit et sous total (= quantité commandée * prix unitaire)
-- SELECT entcom.numcom, fournis.nomfou, ligcom.codart, ligcom.qtecde * ligcom.priuni AS Sous_total FROM ligcom
-- JOIN entcom ON ligcom.numcom = entcom.numcom
-- JOIN fournis ON entcom.numfou = fournis.numfou
-- WHERE obscom LIKE '%urgent%';

-- Ex 12 : Coder de 2 manières différentes la requête suivante : Lister le nom des fournisseurs susceptibles de livrer au moins un article.
-- SELECT fournis.nomfou FROM produit
-- JOIN ligcom ON produit.codart = ligcom.codart
-- JOIN entcom ON ligcom.numcom = entcom.numcom
-- JOIN fournis ON entcom.numfou = fournis.numfou
-- WHERE stkphy >= 1
-- GROUP BY fournis.nomfou;

-- SELECT fournis.nomfou FROM produit
-- JOIN ligcom ON produit.codart = ligcom.codart
-- JOIN entcom ON ligcom.numcom = entcom.numcom
-- JOIN fournis ON entcom.numfou = fournis.numfou
-- WHERE stkphy <> 0
-- GROUP BY fournis.nomfou;

-- Ex 13 : Coder de 2 manières différentes la requête suivante : Lister les commandes dont le fournisseur est celui de la commande n°70210.
-- (Afficher numéro de commande et date)
-- SELECT ligcom.numcom, fournis.nomfou, entcom.datcom FROM fournis
-- JOIN entcom ON fournis.numfou = entcom.numfou
-- JOIN ligcom ON entcom.numcom = ligcom.numcom
-- WHERE entcom.numcom LIKE '70210'

-- SELECT ligcom.numcom, fournis.nomfou, entcom.datcom FROM ligcom
-- JOIN entcom ON ligcom.numcom = entcom.numcom
-- JOIN fournis ON entcom.numfou = fournis.numfou 
-- WHERE entcom.numcom LIKE '70210'

-- Ex 14 : Dans les articles susceptibles d’être vendus, lister les articles moins chers (basés sur Prix1) que le moins cher des rubans (article dont le premier caractère commence par R).
-- (Afficher libellé de l’article et prix1)
-- SELECT codart, fournis.nomfou, prix1 FROM vente
-- JOIN fournis ON vente.numfou = fournis.numfou
-- WHERE prix1 < (
--     SELECT MIN(prix1) AS mini FROM vente
--     WHERE codart LIKE 'R%')

-- Ex 15 : Sortir la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte.
-- (La liste sera triée par produit puis fournisseur)
-- SELECT vente.codart, fournis.nomfou, produit.stkphy, 1.5 * stkale AS stkvir FROM produit
-- JOIN vente ON produit.codart = vente.codart
-- JOIN fournis ON vente.numfou = fournis.numfou
-- WHERE stkphy <= 1.5 * stkale
-- ORDER BY produit.codart ASC, fournis.nomfou ASC;

-- Ex 16 : Sortir la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte, et un délai de livraison d'au maximum 30 jours.
-- (La liste sera triée par fournisseur puis produit)
-- SELECT vente.codart, fournis.nomfou, produit.stkphy, vente.delliv, 1.5 * stkale AS stkvir FROM produit
-- JOIN vente ON produit.codart = vente.codart
-- JOIN fournis ON vente.numfou = fournis.numfou
-- WHERE stkphy <= 1.5 * stkale AND vente.delliv <= 30
-- ORDER BY fournis.nomfou ASC, produit.codart ASC;

-- Ex 17 : Avec le même type de sélection que ci-dessus, sortir un total des stocks par fournisseur, triés par total décroissant.
-- SELECT fournis.nomfou, SUM(produit.stkphy) AS Totalstk FROM produit
-- JOIN vente ON produit.codart = vente.codart
-- JOIN fournis ON vente.numfou = fournis.numfou
-- GROUP BY fournis.nomfou
-- ORDER BY Totalstk DESC;

