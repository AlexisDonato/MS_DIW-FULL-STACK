
-- Ex 1 : Liste des clients français :
SELECT CompanyName AS Société, ContactName AS Contact, ContactTitle AS Fonction, Phone AS Téléphone FROM customers
WHERE country LIKE '%france%'
ORDER BY CompanyName ASC;


-- Ex 2 : Liste des produits vendus par le fournisseur "Exotic Liquids" :
SELECT ProductName AS Produit, UnitPrice AS Prix FROM suppliers
JOIN products ON suppliers.SupplierID = products.SupplierID
WHERE CompanyName LIKE 'Exotic Liquids';


-- Ex 3 : Nombre de produits mis à disposition par les fournisseurs français (tri par nombre de produits décroissant) :
SELECT CompanyName AS Fournisseur, COUNT(ProductID) AS 'Nbre produits' FROM products
JOIN suppliers ON products.SupplierID = suppliers.SupplierID
WHERE country LIKE '%france%'
GROUP BY CompanyName
ORDER BY `Nbre produits` DESC;-- Les backticks ` (AltGr + 7) sont obligatoires si un nom de table ou un champ contient des espaces


-- Ex 4 : Liste des clients français ayant passé plus de 10 commandes :
SELECT CompanyName AS Client, COUNT(OrderID) AS 'Nbre commandes' FROM customers
JOIN orders
ON customers.CustomerID = orders.CustomerID
WHERE Country LIKE "France"
GROUP BY CompanyName
HAVING `Nbre commandes` > 10;


-- Ex 5 : Liste des clients dont le montant cumulé de toutes les commandes passées est supérieur à 30000 € :
-- (NB: chiffre d'affaires (CA) = total des ventes)
SELECT CompanyName AS Client,ShipCountry AS Pays, SUM(UnitPrice * Quantity) AS CA FROM customers
JOIN orders ON customers.CustomerID = orders.CustomerID
JOIN `order details` ON orders.OrderID = `order details`.OrderID
GROUP BY CompanyName
HAVING CA > 30000
ORDER BY CA DESC;


-- Ex 6 : Liste des pays dans lesquels des produits fournis par "Exotic Liquids" ont été livrés :
SELECT DISTINCT orders.ShipCountry AS Pays FROM suppliers
JOIN products ON suppliers.SupplierID = products.SupplierID
JOIN `order details` ON products.ProductID = `order details`.ProductID
JOIN orders ON `order details`.OrderID = orders.OrderID
WHERE suppliers.CompanyName LIKE '%Exotic Liquids%'
ORDER BY ShipCountry;


-- Ex 7 : Chiffre d'affaires global sur les ventes de 1997 :
-- (NB: chiffre d'affaires (CA) = total des ventes)
SELECT SUM(UnitPrice * Quantity) AS `Montant ventes 97` FROM orders
JOIN `order details` ON orders.OrderID = `order details`.OrderID
WHERE YEAR(OrderDate) = '1997';

-- Ex 8 : Chiffre d'affaires détaillé par mois, sur les ventes de 1997 :
SELECT date_format(OrderDate, '%m') AS 'Mois 97', SUM(UnitPrice * Quantity) AS `Montant ventes` FROM orders
JOIN `order details` ON orders.OrderID = `order details`.OrderID
WHERE YEAR(OrderDate) = '1997'
GROUP BY `Mois 97`
ORDER BY `Mois 97`;

select month(OrderDate) as "mois 97", sum(UnitPrice * Quantity) as "Montant Ventes" from orders
JOIN `order details` ON orders.OrderID = `order details`.OrderID
WHERE YEAR(OrderDate) = '1997'
group by month(OrderDate);


-- Ex 9 : A quand remonte la dernière commande du client nommé "Du monde entier" ?
SELECT MAX(OrderDate) AS 'Date de la dernière commande' FROM customers
JOIN orders ON customers.CustomerID = orders.CustomerID
WHERE CompanyName LIKE 'Du monde entier';


-- Quel est le délai moyen de livraison en jours ?
SELECT ROUND(AVG(DATEDIFF(ShippedDate, OrderDate))) AS 'Délai moyen de livraison en jours' FROM orders;