CREATE database ASM;

create table users(
id int(10) not null primary key auto_increment,
username varchar(12) not null unique ,
password varchar (100) not null,
fullname varchar (32),
address varchar(64)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


create table products(
productID int(10) not null primary key auto_increment,
productName varchar (20) not null unique ,
price int(10) not null,
company varchar(32),
nameImage varchar(32)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into products values ('', 'Samsung S9', 9999, 'Samsung', 'samsungs9.jpg');
update products set productName = 'Samsung S9', company = 'Samsung', price = 9000, nameImage='samsungs10.jpg' where productID = 1;
insert into users values('', 'manhhung','123456','Nong Phan Manh Hung', 'HN');