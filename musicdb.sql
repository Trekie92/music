/* Creation of the tables needed for the application. There's an independant user table for administrative purposes and
four tables for the actual music database.
*/

#User table
CREATE TABLE user (
user_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL UNIQUE,
passwd VARCHAR(50) NOT NULL,
dbrights CHAR(1) NOT NULL DEFAULT 'a',
userrights CHAR(1) NOT NULL DEFAULT 'a'
);

#Title table
CREATE TABLE title (
title_id INT AUTO_INCREMENT PRIMARY KEY,
titlename VARCHAR(150)
);

#Album table
CREATE TABLE album (
album_id INT AUTO_INCREMENT PRIMARY KEY,
albumname VARCHAR(150)
);

#Interpreter table
CREATE TABLE interpreter (
interpreter_id INT AUTO_INCREMENT PRIMARY KEY,
interpretername VARCHAR(150)
);

#Tracklist table
CREATE TABLE tracklist (
title_id INT,
interpreter_id INT,
album_id INT,
yearofpublic INT CHECK(yearofpublic > 1000 AND yearofpublic <= YEAR(curdate())),
CONSTRAINT FOREIGN KEY (title_id) references title (title_id) ON DELETE RESTRICT,
CONSTRAINT FOREIGN KEY (interpreter_id) references interpreter (interpreter_id) ON DELETE RESTRICT,
CONSTRAINT FOREIGN KEY (album_id) references album (album_id) ON DELETE RESTRICT,
PRIMARY KEY (title_id, interpreter_id, album_id, yearofpublic)
);
