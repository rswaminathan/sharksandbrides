/*
Richard Truong
40115583
richard_truong@hmc.edu
*/

DROP DATABASE IF EXISTS finalproject;
CREATE DATABASE finalproject;
USE finalproject;

CREATE TABLE Accounts (
  username VARCHAR(64), 
  password VARCHAR(64), 
  type VARCHAR(64),
  PRIMARY_KEY (username)
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

CREATE TABLE `Administrators` (
admin_id INTEGER NOT NULL,
admin_type VARCHAR(256) NOT NULL,
dept_id INTEGER NOT NULL,
first_name VARCHAR(64) NOT NULL,
last_name VARCHAR(64) NOT NULL,
PRIMARY KEY (admin_id)
);

CREATE TABLE `Departments` (
dept_id INTEGER NOT NULL,
dept_name VARCHAR(64) NOT NULL,
PRIMARY KEY (dept_id)
