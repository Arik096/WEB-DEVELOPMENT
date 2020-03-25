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


// CREATE DATABASE --> create new database
CREATE DATABASE Northwind;


//DROP DATABASE
DROP DATABASE Northwind;


// CREATE TABLE
CREATE TABLE Person(PersonID int, LastName varchar(255), FirstName varchar(255), City varchar(255));


// DROP TABLE
DROP TABLE Person;


// TRUNCATE TABLE --> empty table data
TRUNCATE TABLE Person;
