DROP DATABASE IF EXISTS fitness;

CREATE DATABASE fitness;

CREATE TABLE admin (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    admin_name VARCHAR(100) NOT NULL 

);

CREATE TABLE member (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    valid_From DATE NOT NULL,
    valid_To DATE NOT NULL
);

CREATE TABLE customer (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE product (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    price VARCHAR(255) NOT NULL,
    brand VARCHAR(255) NOT NULL
);

CREATE TABLE orders (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    productId int NOT NULL,
    memberId int NOT NULL,
    customerId int NOT NULL,
    orderDate DATE NOT NULL,
    orderStatus VARCHAR(255) NOT NULL,
    quantity int(11) NOT NULL,
    FOREIGN KEY (productId) REFERENCES product(id),
    FOREIGN KEY (memberId) REFERENCES member(id),
    FOREIGN KEY (customerId) REFERENCES customer(id)
);

CREATE TABLE image (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    directory VARCHAR(255) NOT NULL,
    caption VARCHAR(255) NOT NULL
);

CREATE TABLE productImage (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    productId int NOT NULL,
    imageId int NOT NULL,
    FOREIGN KEY (productId) REFERENCES product(id),
    FOREIGN KEY (imageId) REFERENCES image(id)
);