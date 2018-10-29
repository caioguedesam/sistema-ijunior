CREATE DATABASE tvnews;
CREATE TABLE Movie(
	idMovie INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	releaseYear INT NOT NULL,
	runningTime INT NOT NULL,
	genre VARCHAR(50) NOT NULL,
	director VARCHAR(50) NOT NULL,
	studio VARCHAR(50) NOT NULL,
	active BOOLEAN,
	PRIMARY KEY (idMovie)
);

CREATE TABLE TVShow(
	idTVShow INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	season INT NOT NULL,
	episodes INT NOT NULL,
	genre VARCHAR(50) NOT NULL,
	exibitionYear INT NOT NULL,
	creator VARCHAR(50) NOT NULL,
	channel VARCHAR(50) NOT NULL,
	status BOOLEAN,
	active BOOLEAN,
	PRIMARY KEY (idTVShow)
);

CREATE TABLE User(
	idUser INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	PRIMARY KEY (idUser)
);

CREATE TABLE User_Movies(
	idUser INT NOT NULL,
	idMovie INT NOT NULL,
	watchList BOOLEAN,
	rating INT NOT NULL, 
	CONSTRAINT User_Movies_id_fk1 FOREIGN KEY (idUser) REFERENCES User(idUser),
	CONSTRAINT User_Movies_id_fk2 FOREIGN KEY (idMovie) REFERENCES Movie(idMovie)
);

CREATE TABLE User_TVShow(
	idUser INT NOT NULL,
	idTVShow INT NOT NULL,
	watchList BOOLEAN,
	rating INT NOT NULL, 
	CONSTRAINT User_TVShow_id_fk1 FOREIGN KEY (idUser) REFERENCES User(idUser),
	CONSTRAINT User_TVShow_id_fk2 FOREIGN KEY (idTVShow) REFERENCES TVShow(idTVShow)
);