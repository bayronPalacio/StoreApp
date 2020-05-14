drop database if exists test;
create database test;
use test;

create table USER(
    username char(50) not null,
    PASSWORD CHAR(50) not null,
    role char(50) not null
);

insert into user VALUES('ana', 'siempre', 'admin');