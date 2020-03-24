// table name --> Customers
// columns --> CustomerID, CustomerName, ContactName, Address, City, PostalCode, Country


// SELECT
SELECT * FROM Customers; --> show the full table
SELECT CustomerID, City FROM Customers; --> show only the selected coulumns


// SELECT DISTINCT
SELECT DISTINCT country from Customers; --> do not show double entries
SELECT COUNT(DISTINCT country) FROM Customers; --> show the total number of distinct countries


// WHERE
SELECT * FROM Customers WHERE Country='Mexico';
SELECT * FROM Customers WHERE CustomerID=1;


// AND OR NOT
SELECT * FROM Customers WHERE Country='Mexico' AND Country='USA';
SELECT * FROM Customers WHERE Country='Mexico' OR Country='USA';
SELECT * FROM Customers WHERE NOT Country='Mexico';
SELECT * FROM Customers WHERE Country='Bangladesh' AND (City='Dhaka' OR City='Cumilla');
SELECT * FROM Customers WHERE NOT Country='Mexico' AND NOT Country='USA';

// ORDER BY
SELECT * FROM Customers ORDER BY Country;
SELECT * FROM Customers ORDER BY Country DESC;
SELECT * FROM Customers ORDER BY Country ASC;
SELECT * FROM Customers ORDER BY Country, CustomerName;
SELECT * FROM Customers ORDER BY CustomerName, Country;
SELECT * FROM Customers ORDER BY Country DESC, CustomerName ASC;


// INSERT INTO
INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country) VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway'); --> if you dont insert value for all columns then you have to specify the columns name
INSERT INTO Customers VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');


// IS NULL
SELECT * FROM Customers WHERE Address IS NULL;
// IS NOT NULL
SELECT * FROM Customers WHERE Address IS NOT NULL;


// UPDATE
UPDATE Customers SET Address="sebanir", City='Dhaka' WHERE CustomerID=1;


// DELETE
DELETE FROM Customers WHERE CustomerID=1;
DELETE FROM Customers; --> delete all rows without deleting the table


// LIMIT
SELECT * FROM Customers LIMIT 10; --> show only 10 rows


// MIN MAX
SELECT MIN(Price) AS minPrice FROM Products;
SELECT MAX(Price) AS maxPrice FROM Products;


// COUNT AVG SUM
