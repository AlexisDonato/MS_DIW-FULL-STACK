
-- Ex 1 : Quelles sont les commandes du fournisseur n°9120 ?
SELECT nomfou, numcom, obscom, datcom FROM fournis
JOIN entcom ON fournis.numfou = entcom.numfou
WHERE fournis.numfou LIKE '%9120%';

-- Ex 2 : Afficher le code des fournisseurs pour lesquels des commandes ont été passées.
SELECT nomfou, fournis.numfou, numcom, datcom FROM fournis
JOIN entcom ON fournis.numfou = entcom.numfou
GROUP BY fournis.numfou;

-- Ex 3 : Afficher le nombre de commandes fournisseurs passées, et le nombre de fournisseur concernés.
SELECT COUNT(numcom), COUNT(DISTINCT(numfou)) FROM entcom;

-- Ex 4 : Extraire les produits ayant un stock inférieur ou égal au stock d'alerte, et dont la quantité annuelle est inférieure à 1000.
-- (Informations à fournir : n° produit, libellé produit, stock actuel, stock d'alerte, quantité annuelle)
SELECT codart, libart, stkale, stkphy, qteann FROM produit
WHERE stkphy <= stkale AND qteann < 1000;

-- Ex 5 : Quels sont les fournisseurs situés dans les départements 75, 78, 92, 77 ?
-- L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique.
SELECT nomfou, posfou FROM fournis
WHERE posfou LIKE '75%' OR posfou LIKE '78%' OR posfou LIKE '92%' OR posfou LIKE '77%'
ORDER BY posfou DESC, nomfou ASC;

-- Ex 6 : Quelles sont les commandes passées en mars et en avril ?
SELECT datcom, numcom FROM entcom
WHERE MONTH(datcom) IN (3, 4);

-- Ex 7 : Quelles sont les commandes du jour qui ont des observations particulières ?
-- (Afficher numéro de commande et date de commande)
SELECT numcom, obscom FROM entcom
WHERE obscom NOT LIKE '';

-- Ex 8 : Lister le total de chaque commande par total décroissant.
-- (Afficher numéro de commande et total)
SELECT ligcom.numcom, Sum(ligcom.qtecde * ligcom.priuni) AS Total FROM ligcom
GROUP BY ligcom.numcom
ORDER BY Total desc;

-- Ex 9 : Lister les commandes dont le total est supérieur à 10000€ ; on exclura dans le calcul du total les articles commandés en quantité supérieure ou égale à 1000.
-- (Afficher numéro de commande et total)

-- Avec sous-requête :
SELECT * FROM (
SELECT numcom, SUM(qtecde) as qte, sum(qtecde * priuni) AS Total FROM ligcom
GROUP BY numcom
) AS calc
WHERE qte < 1000 AND Total > 10000
ORDER BY Total DESC;

-- Avec la clause HAVING :
SELECT numcom, SUM(qtecde * priuni) AS total
FROM ligcom
GROUP BY numcom
HAVING SUM(qtecde) < 1000 AND total > 10000;

-- Ex 10 : Lister les commandes par nom de fournisseur.
-- (Afficher nom du fournisseur, numéro de commande et date)
SELECT ligcom.numcom, fournis.nomfou, entcom.datcom FROM ligcom
JOIN entcom ON ligcom.numcom = entcom.numcom
JOIN fournis ON entcom.numfou = fournis.numfou
GROUP BY fournis.nomfou;

-- Ex 11 : Sortir les produits des commandes ayant le mot "urgent' en observation.
-- Afficher numéro de commande, nom du fournisseur, libellé du produit et sous total (= quantité commandée * prix unitaire)
SELECT entcom.numcom, fournis.nomfou, ligcom.codart, ligcom.qtecde * ligcom.priuni AS Sous_total FROM ligcom
JOIN entcom ON ligcom.numcom = entcom.numcom
JOIN fournis ON entcom.numfou = fournis.numfou
WHERE obscom LIKE '%urgent%';

-- Ex 12 : Coder de 2 manières différentes la requête suivante : Lister le nom des fournisseurs susceptibles de livrer au moins un article.
SELECT fournis.nomfou FROM produit
JOIN ligcom ON produit.codart = ligcom.codart
JOIN entcom ON ligcom.numcom = entcom.numcom
JOIN fournis ON entcom.numfou = fournis.numfou
WHERE stkphy >= 1
GROUP BY fournis.nomfou;

SELECT fournis.nomfou FROM produit
JOIN ligcom ON produit.codart = ligcom.codart
JOIN entcom ON ligcom.numcom = entcom.numcom
JOIN fournis ON entcom.numfou = fournis.numfou
WHERE stkphy <> 0
GROUP BY fournis.nomfou;

-- Ex 13 : Coder de 2 manières différentes la requête suivante : Lister les commandes dont le fournisseur est celui de la commande n°70210.
-- (Afficher numéro de commande et date)
SELECT ligcom.numcom, fournis.nomfou, entcom.datcom FROM fournis
JOIN entcom ON fournis.numfou = entcom.numfou
JOIN ligcom ON entcom.numcom = ligcom.numcom
WHERE entcom.numcom LIKE '70210'

SELECT ligcom.numcom, fournis.nomfou, entcom.datcom FROM ligcom
JOIN entcom ON ligcom.numcom = entcom.numcom
JOIN fournis ON entcom.numfou = fournis.numfou 
WHERE entcom.numcom LIKE '70210'

-- Ex 14 : Dans les articles susceptibles d’être vendus, lister les articles moins chers (basés sur Prix1) que le moins cher des rubans (article dont le premier caractère commence par R).
-- (Afficher libellé de l’article et prix1)
SELECT codart, fournis.nomfou, prix1 FROM vente
JOIN fournis ON vente.numfou = fournis.numfou
WHERE prix1 < (
    SELECT MIN(prix1) AS mini FROM vente
    WHERE codart LIKE 'R%')

-- Ex 15 : Sortir la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte.
-- (La liste sera triée par produit puis fournisseur)
SELECT vente.codart, fournis.nomfou, produit.stkphy, 1.5 * stkale AS stkvir FROM produit
JOIN vente ON produit.codart = vente.codart
JOIN fournis ON vente.numfou = fournis.numfou
WHERE stkphy <= 1.5 * stkale
ORDER BY produit.codart ASC, fournis.nomfou ASC;

-- Ex 16 : Sortir la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte, et un délai de livraison d'au maximum 30 jours.
-- (La liste sera triée par fournisseur puis produit)
SELECT vente.codart, fournis.nomfou, produit.stkphy, vente.delliv, 1.5 * stkale AS stkvir FROM produit
JOIN vente ON produit.codart = vente.codart
JOIN fournis ON vente.numfou = fournis.numfou
WHERE stkphy <= 1.5 * stkale AND vente.delliv <= 30
ORDER BY fournis.nomfou ASC, produit.codart ASC;

-- Ex 17 : Avec le même type de sélection que ci-dessus, sortir un total des stocks par fournisseur, triés par total décroissant.
SELECT fournis.nomfou, SUM(produit.stkphy) AS Totalstk FROM produit
JOIN vente ON produit.codart = vente.codart
JOIN fournis ON vente.numfou = fournis.numfou
GROUP BY fournis.nomfou
ORDER BY Totalstk DESC;

-- Ex 18 : En fin d'année, sortir la liste des produits dont la quantité réellement commandée dépasse 90% de la quantité annuelle prévue.
SELECT numcom, SUM(qtecde * priuni) AS total
FROM ligcom
GROUP BY numcom
HAVING SUM(qtecde) < 1000 AND total > 10000;

-- Ex 19 : En fin d'année, sortir la liste des produits dont la quantité réellement commandée dépasse 90% de la quantité annuelle prévue.
SELECT ligcom.codart, ligcom.qtecde, qteann FROM ligcom
JOIN produit ON ligcom.codart = produit.codart
JOIN vente ON produit.codart = vente.codart
WHERE qtecde > 0.9 * qteann;

-- Ex 19 : Calculer le chiffre d'affaire par fournisseur pour l'année 2018, sachant que les prix indiqués sont hors taxes et que le taux de TVA est 20%.
SELECT fournis.nomfou, SUM(qteliv * priuni) AS Total FROM produit
JOIN ligcom ON produit.codart = ligcom.codart
JOIN entcom ON ligcom.numcom = entcom.numcom
JOIN fournis ON entcom.numfou = fournis.numfou
GROUP BY fournis.nomfou
HAVING Total * 1.2;

