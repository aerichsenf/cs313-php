DROP TABLE order_item;
-- ther tables


CREATE DATABASE store to the DATABASE

CREATE TABLE address
(
	addressID SERIAL PRIMARY KEY
	, street_address1 VARCHAR(100) NOT NULL
	, street_address2 VARCHAR(100)
	, city VARCHAR(15) NOT NULL
	, state VARCHAR(15) NOT NULL
	, zip INT NOT NULL
	, country DEFAULT 'USA'
);

CREATE TABLE client
(
	clientID SERIAL PRIMARY KEY
	, firstname VARCHAR(30) NOT NULL
	, lastname VARCHAR(30) NOT NULL
	, email VARCHAR(254) NOT NULL 
	, addressID INT FOREIGN KEY REFERENCES address(addressID)
);


CREATE TABLE product
(
	productID SERIAL PRIMARY KEY
	, name VARCHAR(100) NOT NULL
	, description VARCHAR(150) NOT NULL
	, image BINARY(3) NOT NULL
	, price DECIMAL(0,0) NOT NULL
);

CREATE TABLE order_item
(
	order_itemID SERIAL PRIMARY KEY
	, clientID INT FOREIGN KEY REFERENCES client(clientID)
	, productID INT FOREIGN KEY REFERENCES product(productID)
	, order_date DATE NOT NULL
	
);


