CREATE databse ASM;

create table users(
id int(10) not null primary key auto_increment,
username varchar(12) not null,
password varchar (100) not null,
fullname varchar (32),
address varchar(64)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

create table products(
productID int(10) not null primary key auto_increment,
productName varchar (20) not null,
price int(10) not null,
company varchar(32)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into products values ("", "Television", 9999, "Samsung");
update products set productName = 'Samsung S9', company = 'Samsung', price = 9000 where productID = 1;
insert into users values('', 'manhhung','123456','Nong Phan Manh Hung', 'HN');