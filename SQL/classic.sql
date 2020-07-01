CREATE DATABASE publications;
CREATE TABLE classics(
    author varchar(128),
    title varchar(128),
    category varchar(16),
    year SMALLINT(6),
    isbn char(13),
    index(author(20)),
    index(title(20)),
    index(category(4)),
    index(year),
    PRIMARY KEY (isbn)) Engine InnoDB;

    SELECT * FROM `classics` WHERE 1
INSERT INTO classics (author, title, category, year, isbn)
VALUES("Mark Twain", "The Adventures of Tom Sawyer", "Fiction", 1876,12211234561);
INSERT INTO classics (author, title, category, year, isbn)
VALUES("Charles Dickens", "The Old Curiosity Shop", "Fiction", 1876,9780099533474);
INSERT INTO classics (author, title, category, year, isbn)
VALUES("Charles Dickens", "Little Dorrit", "Fiction", 1876,9780099533469);
INSERT INTO classics (author, title, category, year, isbn)
VALUES("William Shalespeare", "Romeo and Juliet", "Play", 1876,12211234568);
INSERT INTO classics (author, title, category, year, isbn)
VALUES("Charles Darwin", "The Origin of Species", "Non-Fiction", 1876,12211234441);
INSERT INTO classics (author, title, category, year, isbn)
VALUES("Jane Austen", "Pride and Prejudice", "Fiction", 1876,12211232061);

CREATE TABLE customers(
    name varchar(128),
    isbn varchar(13),
    PRIMARY key(isbn)) ENGINE INNODB;

    INSERT into customer(name, isbn)
    VALUES("Joe Bloggs", 12211232061);
       INSERT into customer(name, isbn)
    VALUES("Mary Smith", 12211234441);
       INSERT into customer(name, isbn)
    VALUES("Jack & Willson", 12211234568);