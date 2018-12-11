/* Creation of the tables needed for the application. There's an independant user table for administrative purposes and
four tables for the actual music database.
*/

#User table
CREATE TABLE user (
userid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL UNIQUE,
passwd VARCHAR(50) NOT NULL,
dbrights CHAR(1) NOT NULL DEFAULT 'a',
userrights CHAR(1) NOT NULL DEFAULT 'a'
);

#Title table
CREATE TABLE title (
titleid INT AUTO_INCREMENT PRIMARY KEY,
titlename VARCHAR(150)
);

#Album table
CREATE TABLE title (
albumid INT AUTO_INCREMENT PRIMARY KEY,
albumname VARCHAR(150)
);

#Interpreter table
CREATE TABLE title (
interpreterid INT AUTO_INCREMENT PRIMARY KEY,
interpretername VARCHAR(150)
);