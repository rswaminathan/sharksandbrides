/*
Richard Truong
40115583
richard_truong@hmc.edu
*/

DROP DATABASE IF EXISTS rdtps6;
CREATE DATABASE rdtps6;
USE rdtps6;

CREATE TABLE Products (maker VARCHAR(64), model VARCHAR(64), type VARCHAR(64));
CREATE TABLE PCs (model VARCHAR(64), speed FLOAT, ram FLOAT, hd FLOAT, price FLOAT);
CREATE TABLE Laptops (model VARCHAR(64), speed FLOAT, ram FLOAT, hd FLOAT, screen FLOAT, price FLOAT);
CREATE TABLE Printers (model VARCHAR(64), color BOOLEAN, type VARCHAR(64), price FLOAT);

INSERT INTO Products (maker, model, type) VALUES( "Toshiba", "SKT1", "PC" );
INSERT INTO Products (maker, model, type) VALUES( "Toshiba", "T8", "PC" );
INSERT INTO Products (maker, model, type) VALUES( "Toshiba", "CJ", "PC" );
INSERT INTO Products (maker, model, type) VALUES( "Samsung", "Stars", "PC" );
INSERT INTO Products (maker, model, type) VALUES( "Samsung", "KT", "PC" );
INSERT INTO Products (maker, model, type) VALUES( "Samsung", "STX", "PC" );
INSERT INTO Products (maker, model, type) VALUES( "Samsung", "ESTRO", "PC" );
INSERT INTO Products (maker, model, type) VALUES( "Samsung", "KHAN", "PC" );
INSERT INTO Products (maker, model, type) VALUES( "IBM", "ACE", "PC" );
INSERT INTO Products (maker, model, type) VALUES( "IBM", "MBC", "PC" );
INSERT INTO Products (maker, model, type) VALUES( "IBM", "HoSeo", "Laptop" );
INSERT INTO Products (maker, model, type) VALUES( "IBM", "IM", "Laptop" );
INSERT INTO Products (maker, model, type) VALUES( "IBM", "MvP", "Laptop" );
INSERT INTO Products (maker, model, type) VALUES( "Samsung", "oGs", "Laptop" );
INSERT INTO Products (maker, model, type) VALUES( "Samsung", "Prime", "Laptop" );
INSERT INTO Products (maker, model, type) VALUES( "Samsung", "SlayerS", "Laptop" );
INSERT INTO Products (maker, model, type) VALUES( "Toshiba", "StarTale", "Laptop" );
INSERT INTO Products (maker, model, type) VALUES( "Toshiba", "TSL", "Laptop" );
INSERT INTO Products (maker, model, type) VALUES( "Toshiba", "ZeNEX", "Laptop" );
INSERT INTO Products (maker, model, type) VALUES( "Toshiba", "coL", "Printer" );
INSERT INTO Products (maker, model, type) VALUES( "Samsung", "EG", "Printer" );
INSERT INTO Products (maker, model, type) VALUES( "Samsung", "gOsU", "Printer" );
INSERT INTO Products (maker, model, type) VALUES( "Samsung", "QxG", "Printer" );
INSERT INTO Products (maker, model, type) VALUES( "IBM", "FXO", "Printer" );

INSERT INTO PCs (model, speed, ram, hd, price) VALUES( "SKT1", 2, 4, 220, 569.99 );
INSERT INTO PCs (model, speed, ram, hd, price) VALUES( "T8", 5, 8, 500, 1999.99 );
INSERT INTO PCs (model, speed, ram, hd, price) VALUES( "CJ", 3, 6, 350, 689.99 );
INSERT INTO PCs (model, speed, ram, hd, price) VALUES( "Stars", 4, 6, 350, 699.99 );
INSERT INTO PCs (model, speed, ram, hd, price) VALUES( "KT", 4, 8, 300, 749.99 );
INSERT INTO PCs (model, speed, ram, hd, price) VALUES( "STX", 2, 4, 200, 559.99 );
INSERT INTO PCs (model, speed, ram, hd, price) VALUES( "ESTRO", 2, 4, 150, 529.99 );
INSERT INTO PCs (model, speed, ram, hd, price) VALUES( "KHAN", 5, 8, 450, 1699.99 );
INSERT INTO PCs (model, speed, ram, hd, price) VALUES( "ACE", 5, 4, 325, 1499.99 );
INSERT INTO PCs (model, speed, ram, hd, price) VALUES( "MBC", 2, 4, 250, 799.99 );

INSERT INTO Laptops (model, speed, ram, hd, screen, price) VALUES( "HoSeo", 2, 4, 220, 14, 669.99 );
INSERT INTO Laptops (model, speed, ram, hd, screen, price) VALUES( "IM", 4, 8, 450, 17, 1899.99 );
INSERT INTO Laptops (model, speed, ram, hd, screen, price) VALUES( "MvP", 4, 8, 440, 14, 1699.99 );
INSERT INTO Laptops (model, speed, ram, hd, screen, price) VALUES( "oGs", 3, 6, 280, 11, 899.99 );
INSERT INTO Laptops (model, speed, ram, hd, screen, price) VALUES( "Prime", 3, 8, 350, 14, 1299.99 );
INSERT INTO Laptops (model, speed, ram, hd, screen, price) VALUES( "SlayerS", 2, 8, 220, 14, 769.99 );
INSERT INTO Laptops (model, speed, ram, hd, screen, price) VALUES( "StarTale", 2, 4, 200, 14, 659.99 );
INSERT INTO Laptops (model, speed, ram, hd, screen, price) VALUES( "TSL", 2, 2, 220, 11, 569.99 );
INSERT INTO Laptops (model, speed, ram, hd, screen, price) VALUES( "ZeNEX", 2, 2, 100, 8, 369.99 );

INSERT INTO Printers (model, color, type, price) VALUES( "coL", 1, 'laser', 199.99 );
INSERT INTO Printers (model, color, type, price) VALUES( "EG", 0, 'ink-jet', 59.99 );
INSERT INTO Printers (model, color, type, price) VALUES( "gOsU", 0, 'laser', 99.99 );
INSERT INTO Printers (model, color, type, price) VALUES( "QxG", 0, 'ink-jet', 69.99 );
INSERT INTO Printers (model, color, type, price) VALUES( "FXO", 1, 'laser', 149.99 );

SELECT * FROM Products;