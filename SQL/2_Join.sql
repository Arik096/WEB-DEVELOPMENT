--> Northwind sample database <--


// table 1 name --> Customers
// columns --> CustomerID, CustomerName, ContactName, Address, City, PostalCode, Country

// table 2 name --> Products
//columns --> ProductID, ProductName, SupplierID, CategoryID, Unit, Price

// table 3 name --> Orders
// columns --> OrderID,	CustomerID,	EmployeeID,	OrderDate, ShipperID

// table 4 name --> Suppliers
// columns --> SupplierID,	SupplierName,	ContactName,	Address,	City,	PostalCode,	Country

// table 5 name --> Shippers
// columns --> ShipperID,	ShipperName

// table 6 name --> Employees
// columns --> EmployeeID,	LastName,	FirstName,	BirthDate,	Photo,	Notes

// table 7 name --> OrderDetails
// columns --> OrderDetailID,	OrderID,	ProductID,	Quantity


// INNER JOIN
SELECT Orders.OrderID, Customers.CustomerID FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;

// LEFT JOIN
SELECT Customers.CustomerID, Orders.OrderID FROM Customers LEFT JOIN Orders ON Customers.CustomerID=Orders.CustomerID;

// RIGHT JOIN
SELECT Orders.OrderID, Customers.CustomerID FROM Orders RIGHT JOIN Customers ON Orders.CustomerID=Customers.CustomerID;

// FULL OUTER JOIN
SELECT Customers.CustomerID, Orders.OrderID FROM Customers FULL OUTER JOIN Orders ON Customers.CustomerID=Orders.CustomerID;


// UNION
SELECT City FROM Customers UNION SELECT City FROM Suppliers;
SELECT City, Country FROM Customers WHERE Country='Germany' UNION SELECT City, Country FROM Suppliers WHERE Country='Germany';

// UNION ALL --> returns duplicate also
SELECT City FROM Customers UNION ALL SELECT City FROM Suppliers;


// GROUP BY
SELECT COUNT(CustomerID), Country FROM Customers GROUP BY Country;
SELECT COUNT(CustomerID), Country FROM Customers GROUP BY Country ORDER BY COUNT(CustomerID) DESC;
SELECT Shippers.ShipperName, COUNT(Orders.OrderID) FROM Orders LEFT JOIN Shippers ON Orders.ShipperID=Shippers.ShipperID GROUP bY ShipperName;


// HAVING --> when WHERE cluse dont work
SELECT COUNT(CustomerID), Country FROM Customers GROUP BY Country HAVING COUNT(CustomerID)>5;
SELECT Employees.FirstName, COUNT(Orders.OrderID) FROM Orders INNER JOIN Employees ON Orders.EmployeeID=Employees.EmployeeID HAVING COUNT(Orders.OrderID)>10;


// SELECT INTO --> copy some columns into a new table
SELECT CustomerID, CustomerName INTO New_Customers FROM Customers WHERE Country='USA';


// INSERT INTO SELECT --> copy columns into a existing table
INSERT INTO Customers_2 SELECT * FROM Customers WHERE Country='USA';

// CASE
SELECT OrderID, Quantity
CASE
    WHEN Quantity>30 THEN 'Quantity is more then 30'
    WHEN Quantity=30 THEN 'Quantity is equal to 30'
    ELSE 'Quantity is less then 30'
END
FROM OrderDetails;

SELECT CustomerName, City, Country FROM Customers ORDER BY
(
  CASE
      WHEN City IS NULL THEN Country
      ELSE City
  END
);


// PROCEDURE
CREATE PROCEDURE SelectAllCustomers
AS
SELECT * FROM Customers
GO;

// EXEC PROCEDURE
EXEC SelectAllCustomers;
