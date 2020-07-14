CREATE databse ASM;

create table users values (
id int(10) not null primary key auto_increment;
username varchar(12) not null,
password varchar (100) not null,
fullname varchar (32),
address varchar(64)
)
