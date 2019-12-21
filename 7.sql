CREATE DATABASE ukm;

CREATE TABLE customers(id int(25) NOT NULL PRIMARY KEY, first_name varchar(25) NOT NULL, last_name varchar(25) NOT NULL, email varchar(25) NOT NULL, address varchar(25) NOT NULL, city varchar(25) NOT NULL, state varchar(25) NOT NULL, zip_code int(25) NOT NULL);

CREATE TABLE orders(id int(25) NOT NULL PRIMARY KEY, customer_id int(25) NOT NULL, order_placed_date date NOT NULL);

ALTER TABLE orders ADD FOREIGN KEY (customer_id) REFERENCES customers(id);

INSERT INTO customers (id, first_name, last_name, email, address, city, state, zip_code) VALUES 
(1, 'Alfin', 'NoviAji', 'alpinnz@gmail.com', 'jalan','Malang', 'Indonesia', '65153'),
(2, 'Titis', 'Mariska', 'titismariska@gmail.com', 'jalan', 'Malang', 'Indonesia', '65153'),
(3, 'Teh', 'Gelas', 'tehgelas@gmail.com','jalan', 'Malang', 'Indonesia', '14521');

INSERT INTO orders (id, customer_id, order_placed_date) VALUES 
(1, '1', '2019-01-02'),
(2, '2', '2019-02-10'),
(3, '3', '2019-03-12'),
(4, '3', '2019-04-04'),
(5, '3', '2019-05-02'),
(6, '1', '2019-06-07'),
(7, '1', '2019-07-01'),
(8, '2', '2019-08-07'),
(9, '2', '2019-010-12'),
(10, '2', '2019-11-21');


SELECT
    customers.first_name AS Nama_Pelanggan,
    customers.email AS Email_Pelanggan,
    COUNT(email) AS Transaksi
FROM
    orders
INNER JOIN customers ON orders.customer_id = customers.id

WHERE
    (
        order_placed_date BETWEEN '2019-01-01' AND '2019-12-31'
    )GROUP BY email ORDER BY COUNT(email) DESC;

