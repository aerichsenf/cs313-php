INSERT INTO product 
VALUES (DEFAULT, 'Daisy', 'Daisy by Marc Jacobs', 53.48);

INSERT INTO product 
VALUES (DEFAULT, 'Versace', 'Versace by Bright Crystal', 45.99);

INSERT INTO product 
VALUES (DEFAULT, 'Romance', 'Romance by Ralph Lauren', 33.90);

INSERT INTO product 
VALUES (DEFAULT, 'Omnia', 'Omnia by Bvlgari', 32.99);

INSERT INTO product 
VALUES (DEFAULT, 'Cashmere Mist', 'Cashmere Mist by DonnaKaran', 49.49);

INSERT INTO product 
VALUES (DEFAULT, 'Black Opium', 'Black Opium by YvesSaintLaurent', 69.99);

INSERT INTO product VALUES (DEFAULT, 'Pira', 'bla bla bla', 9.99);

DELETE FROM product
WHERE productID = 7;

SELECT CURRVAL(pg_get_serial_sequence('product','productID'));

SELECT nextval('product_productid_seq'::regclass);

SELECT currval('product_productid_seq');

INSERT INTO product (name, description, price)
VALUES ('Pira', 'bla bla bla', 9.99);

SELECT MAX(productID)
FROM product;