DROP TABLE IF EXISTS users
;
DROP TABLE IF EXISTS news
;

CREATE TABLE users
(
	user VARCHAR(50) NOT NULL,
	password TEXT,
	name VARCHAR(100),
	email VARCHAR(100),
	status SMALLINT,
	validationcode TEXT,
	PRIMARY KEY (user)
) 
;


CREATE TABLE news
(
	ID INTEGER,
	title VARCHAR(100),
	image BLOB,
	text TEXT,
	datetime DATETIME,
	codeuser VARCHAR(50),
	KEY (codeuser)
) 
;





ALTER TABLE news ADD CONSTRAINT FK_News_User 
	FOREIGN KEY (codeuser) REFERENCES users (user)
	ON UPDATE CASCADE
;
