--> Northwind sample database <--


// table 1 name --> Customers
// columns --> CustomerID, CustomerName, ContactName, Address, City, PostalCode, Country

// table 2 name --> Products
//columns --> ProductID, ProductName, SupplierID, CategoryID, Unit, Price

// table 3 name --> Orders
// columns --> OrderID,	CustomerID,	EmployeeID,	OrderDate, ShipperID


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
SELECT COUNT(ProductID) FROM Products;
SELECT AVG(Price) FROM Products;
SELECT SUM(Price) FROM Products;


// LIKE
SELECT * FROM Customers WHERE CustomerName LIKE 'a%'; --> starts with a [arik]
SELECT * FROM Customers WHERE CustomerName LIKE '%a'; --> ends with a [puja]
SELECT * FROM Customers WHERE CustomerName LIKE '%a%'; --> a in any position [biswas]

SELECT * FROM Customers WHERE CustomerName LIKE '_r%'; --> r in the 2nd position [arik]
SELECT * FROM Customers WHERE CustomerName LIKE '__i%'; --> i the 3rd position [arik]

SELECT * FROM Customers WHERE CustomerName LIKE 'a_%'; --> a in 1st the position and the length of name is 2 character [ab]
SELECT * FROM Customers WHERE CustomerName LIKE 'a___%'; --> a in the 1st position and the length of name is 4 character [arik]

SELECT * FROM Customers WHERE CustomerName LIKE 'a%k'; --> start with a and end with k [arik]

SELECT * FROM Customers WHERE CustomerName LIKE '_rik'; --> it can be start with any character but end with "rik"
SELECT * FROM Customers WHERE CustomerName LIKE 'a_r_'; --> [arik]
SELECT * FROM Customers WHERE CustomerName LIKE '_uj_'; --> [puja]

SELECT * FROM Customers WHERE CustomerName LIKE '[a,b,c]%'; --> can start with 'a', 'b' or 'c'


// IN --> shorthand for OR
SELECT * FROM Customers WHERE Country IN ('UK','USA','Mexico');

// NOT IN
SELECT * FROM Customers WHERE Country NOT IN ('UK','USA','Mexico');


// BETWEEN
SELECT * FROM Products WHERE Price BETWEEN 10 AND 20;
SELECT * FROM Products WHERE Price BETWEEN 10 AND 20 AND CategoryID IN (1,2,3);
SELECT * FROM Products WHERE Price BETWEEN 10 AND 20 AND CategoryID NOT IN (1,2,3);
SELECT * FROM Products WHERE ProductName BETWEEN 'Carnarvon Tigers' AND 'Mozzarella di Giovanni' ORDER BY ProductName; --> for text
SELECT * FROM Orders WHERE OrderDate BETWEEN #01/07/1996# AND #31/07/1996#; --> for date
SELECT * FROM Orders WHERE OrderDate BETWEEN '1996-07-01' AND '1996-07-31'; --> for date


// NOT BETWEEN
SELECT * FROM Products WHERE Price NOT BETWEEN 10 AND 20;
SELECT * FROM Products WHERE ProductName NOT BETWEEN 'Carnarvon Tigers' AND 'Mozzarella di Giovanni' ORDER BY ProductName;
