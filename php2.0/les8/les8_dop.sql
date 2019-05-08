CREATE DATABASE main;
CREATE TABLE orders(order_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    order_email VARCHAR(30) NOT NULL,
                    order_date DATE NOT NULL);
CREATE TABLE users (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(30) NOT NULL,
                    email VARCHAR(30) NOT NULL UNIQUE);

ALTER TABLE orders ADD CONSTRAINT fk_users_orders FOREIGN KEY (order_email) REFERENCES users(email)
                                                ON UPDATE CASCADE ;

INSERT INTO main.users(name, email) VALUES ('alexey','email@email.ru');
INSERT INTO main.users(name, email) VALUES ('dima','email_2@email.ru');


INSERT INTO main.orders(order_email, order_date) VALUES ('email@email.ru',NOW());
INSERT INTO main.orders(order_email, order_date) VALUES ('email_2@email.ru',NOW());


ALTER TABLE orders DROP FOREIGN KEY fk_users_orders;
