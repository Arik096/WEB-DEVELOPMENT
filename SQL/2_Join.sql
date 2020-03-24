// table 1 name --> Customers
// columns --> CustomerID, CustomerName, ContactName, Address, City, PostalCode, Country

// table 2 name --> Products
//columns --> ProductID, ProductName, SupplierID, CategoryID, Unit, Price

// table 3 name --> Orders
// columns --> OrderID,	CustomerID,	EmployeeID,	OrderDate, ShipperID

// table 4 name --> Suppliers
// columns --> SupplierID,	SupplierName,	ContactName,	Address,	City,	PostalCode,	Country


// INNER JOIN
SELECT Orders.OrderID, Customers.CustomerID FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;

// LEFT JOIN
SELECT Customers.CustomerID, Orders.OrderID FROM Customers LEFT JOIN Orders ON Customers.CustomerID=Orders.CustomerID;

// RIGHT JOIN
SELECT Orders.OrderID, Customers.CustomerID FROM Orders RIGHT JOIN Customers On Orders.CustomerID=Customers.CustomerID;

// FULL OUTER JOIN
SELECT Customers.CustomerID, Orders.OrderID FROM Customers FULL OUTER JOIN Orders on Customers.CustomerID=Orders.CustomerID;


// UNION
SELECT City FROM Customers UNION SELECT City FROM Suppliers;
SELECT City, Country FROM Customers WHERE Country='Germany' UNION SELECT City, Country FROM Suppliers WHERE Country='Germany';

// UNION ALL --> returns duplicate also
SELECT City FROM Customers UNION ALL SELECT City FROM Suppliers;
