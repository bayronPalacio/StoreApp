DROP DATABASE IF EXISTS androidhive;
CREATE DATABASE androidhive;
USE androidhive;

CREATE TABLE products(
pid int(11) primary key auto_increment,
name varchar(100) not null,
price decimal(10,2) not null,
description text,
created_at timestamp default now(),
updated_at timestamp
);

insert into products (name, price, description, updated_at) values ('DELL XPS', 2342.23,"LAPTOP","2020-05-15 9:45:01");
insert into products (name, price, description, updated_at) values ('HP PAVILON', 1234.23,"LAPTOP","2020-05-19 17:34:34");
insert into products (name, price, description, updated_at) values ('SAMSUNG T-E23', 453.74,"DESKTOP","2020-05-23 10:12:45");
insert into products (name, price, description, updated_at) values ('IPHONE 10', 1153.74,"MOBILE","2020-05-23 10:12:45");