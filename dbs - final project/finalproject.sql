/*
Richard Truong
40115583
richard_truong@hmc.edu
*/

DROP DATABASE IF EXISTS finalproject;
CREATE DATABASE finalproject;
USE finalproject;

CREATE TABLE `Accounts` (
  username VARCHAR(64) NOT NULL, 
  password VARCHAR(64) NOT NULL, 
  type VARCHAR(64) NOT NULL,
  PRIMARY KEY (username)
);

CREATE TABLE `Administrators` (
  admin_id INTEGER NOT NULL,
  admin_type VARCHAR(256) NOT NULL,
  dept_id INTEGER NOT NULL,
  first_name VARCHAR(64) NOT NULL,
  last_name VARCHAR(64) NOT NULL,
  PRIMARY KEY (admin_id)
);

CREATE TABLE `Aquariums` (
  aquarium_id INTEGER NOT NULL,
  date_founded DATE,
  owner VARCHAR(64),
  manager VARCHAR(64),
  name VARCHAR(64),
  PRIMARY KEY (aquarium_id)
);

CREATE TABLE `AquariumManagers` (
  am_id INTEGER NOT NULL,
  first_name VARCHAR(64) NOT NULL,
  last_name VARCHAR(64) NOT NULL,
  PRIMARY KEY (am_id)
);

CREATE TABLE `Cart` (
  customer_id INTEGER NOT NULL,
  item_id INTEGER NOT NULL,
  last_visited DATE NOT NULL
);

CREATE TABLE `CreditCards` (
  card_id INTEGER NOT NULL,
  type VARCHAR(64) NOT NULL,
  card_number INTEGER NOT NULL,
  PRIMARY KEY (card_id)
);

CREATE TABLE `Customers` (
  customer_id INTEGER NOT NULL,
  address VARCHAR(256) NOT NULL,
  username INTEGER NOT NULL,
  card_id INTEGER,
  first_name VARCHAR(64) NOT NULL,
  last_name VARCHAR(64) NOT NULL,
  PRIMARY KEY (customer_id)
);

CREATE TABLE `Departments` (
  dept_id INTEGER NOT NULL,
  dept_name VARCHAR(64) NOT NULL,
  PRIMARY KEY (dept_id)
);

CREATE TABLE `Discounts` (
  discount_id INTEGER NOT NULL,
  percent_off INTEGER NOT NULL,
  PRIMARY KEY (discount_id)
);

CREATE TABLE `Hometowns` (
  city_id INTEGER NOT NULL,
  name VARCHAR(64) NOT NULL,
  population INTEGER NOT NULL,
  province VARCHAR(64) NOT NULL,
  PRIMARY KEY (city_id)
);

CREATE TABLE `ItemSpecials` (
  item_id INTEGER NOT NULL,
  special_id INTEGER NOT NULL
);

CREATE TABLE `Mayors` (
  mayor_id INTEGER NOT NULL,
  favorite_color VARCHAR(64),
  ssn INTEGER NOT NULL,
  name VARCHAR(64),
  PRIMARY KEY (mayor_id)
);

CREATE TABLE `Orders` (
  order_id INTEGER NOT NULL,
  customer_id VARCHAR(64) NOT NULL,
  item_type VARCHAR(64) NOT NULL,
  item_id INTEGER NOT NULL,
  date DATE NOT NULL,
  payment_type VARCHAR(64) NOT NULL,
  completed BOOLEAN NOT NULL,
  shipping_id INTEGER NOT NULL,
  PRIMARY KEY (order_id)
  );

CREATE TABLE `Pictures` (
  picture_id INTEGER NOT NULL,
  picture_url VARCHAR(256) NOT NULL,
  picture_width INTEGER NOT NULL,
  picture_height INTEGER NOT NULL,
  picture_type VARCHAR(64) NOT NULL,
  PRIMARY KEY (picture_id)
);
  
CREATE TABLE `Products` (
  item_id INTEGER NOT NULL,
  type VARCHAR(64)
);

CREATE TABLE `Reviews` (
  review_id INTEGER NOT NULL,
  item_type VARCHAR(64) NOT NULL,
  item_id INTEGER NOT NULL,
  username VARCHAR(64) NOT NULL,
  text VARCHAR(512) NOT NULL,
  rating INTEGER NOT NULL,
  PRIMARY KEY (review_id)
);

CREATE TABLE `RussianBrides` (
  item_id INTEGER NOT NULL,
  ssn INTEGER NOT NULL,
  name VARCHAR(64) NOT NULL,
  age INTEGER NOT NULL,
  gender VARCHAR(64) NOT NULL,
  city_id VARCHAR(64) NOT NULL,
  picture_id INTEGER NOT NULL,
  discount_id INTEGER,
  special_id INTEGER,
  price FLOAT NOT NULL,
  category VARCHAR(64) NOT NULL,
  PRIMARY KEY (item_id)
);

CREATE TABLE `Sharks` (
  item_id INTEGER NOT NULL,
  name VARCHAR(64) NOT NULL,
  age INTEGER NOT NULL,
  category VARCHAR(64) NOT NULL,
  gender VARCHAR(64) NOT NULL,
  picture_id INTEGER NOT NULL,
  aquarium_id INTEGER NOT NULL,
  discount_id INTEGER,
  special_id INTEGER,
  price FLOAT NOT NULL,
  PRIMARY KEY (item_id)
);

CREATE TABLE `ShippingMethods` (
  shipping_id INTEGER NOT NULL,
  shipper_name VARCHAR(64) NOT NULL,
  shipment_type VARCHAR(64) NOT NULL,
  shipment_cost FLOAT NOT NULL,
  PRIMARY KEY (shipping_id)
);

CREATE TABLE `Specials` (
  special_id INTEGER NOT NULL,
  percent_off INTEGER NOT NULL,
  PRIMARY KEY (special_id)
);

CREATE TABLE `Wishlist` (
  username VARCHAR(64) NOT NULL,
  item_id INTEGER NOT NULL
);