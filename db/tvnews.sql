-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2019 at 08:34 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `Movie`
--

CREATE TABLE `Movie` (
  `idMovie` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `releaseYear` int(11) NOT NULL,
  `runningTime` int(11) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `studio` varchar(50) NOT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`idMovie`, `name`, `releaseYear`, `runningTime`, `genre`, `director`, `studio`, `active`) VALUES
(1, 'O Auto da Compadecida', 2000, 104, 'ComÃ©dia', 'Guel Arraes', 'Globo Filmes', 1),
(2, 'Eternal Sunshine of the Spotless Mind', 2004, 108, 'Romance', 'Michel Gondry', 'Universal', 1),
(3, 'Pulp Fiction', 1994, 154, 'Crime', 'Quentin Tarantino', 'Miramax Films', 1),
(4, 'Fight Club', 1999, 139, 'Drama', 'David Fincher', 'Fox', 1),
(5, 'Forrest Gump', 1994, 142, 'Drama', 'Robert Zemeckis', 'Paramount', 1),
(6, 'Matrix', 1999, 136, 'Sci-Fi', 'The Wachowski Brothers', 'Warner Bros', 1);

-- --------------------------------------------------------

--
-- Table structure for table `TVShow`
--

CREATE TABLE `TVShow` (
  `idTVShow` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `season` int(11) NOT NULL,
  `episodes` int(11) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `exibitionYear` int(11) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `channel` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TVShow`
--

INSERT INTO `TVShow` (`idTVShow`, `name`, `season`, `episodes`, `genre`, `exibitionYear`, `creator`, `channel`, `status`, `active`) VALUES
(1, 'Friends', 8, 24, 'ComÃ©dia', 2001, 'David Crane e Marta Kauffman', 'NBC', 1, 1),
(2, 'Breaking Bad', 5, 16, 'Suspense', 2012, 'Vince Gilligan', 'AMC', 1, 1),
(3, 'Rick and Morty', 1, 11, 'ComÃ©dia', 2014, 'Justin Roiland', 'Adult Swim', 0, 1),
(4, 'Game of Thrones', 8, 6, 'Fantasia', 2019, 'George R. R. Martin', 'HBO', 1, 1),
(5, 'Mr Robot', 1, 10, 'Drama', 2015, 'Sam Esmail', 'USA', 0, 1),
(6, 'Stranger Things', 3, 8, 'Sci-Fi', 2019, 'The Duffer Brothers', 'Netflix', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `idUser` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`idUser`, `name`) VALUES
(1, 'Guilherme'),
(2, 'Henrique'),
(3, 'JosÃ©'),
(4, 'Riobaldo'),
(5, 'Diadorim');

-- --------------------------------------------------------

--
-- Table structure for table `User_Movies`
--

CREATE TABLE `User_Movies` (
  `idUser` int(11) NOT NULL,
  `idMovie` int(11) NOT NULL,
  `watchList` tinyint(1) DEFAULT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_Movies`
--

INSERT INTO `User_Movies` (`idUser`, `idMovie`, `watchList`, `rating`) VALUES
(1, 1, 0, 5),
(2, 1, 1, 0),
(4, 2, 0, 5),
(5, 2, 0, 5),
(3, 2, 0, 4),
(4, 3, 1, 0),
(5, 3, 1, 0),
(2, 4, 0, 4),
(1, 4, 0, 5),
(1, 5, 1, 0),
(2, 5, 1, 0),
(4, 6, 1, 0),
(5, 6, 1, 0),
(3, 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `User_TVShow`
--

CREATE TABLE `User_TVShow` (
  `idUser` int(11) NOT NULL,
  `idTVShow` int(11) NOT NULL,
  `watchList` tinyint(1) DEFAULT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_TVShow`
--

INSERT INTO `User_TVShow` (`idUser`, `idTVShow`, `watchList`, `rating`) VALUES
(2, 1, 0, 5),
(1, 1, 1, 0),
(4, 1, 0, 5),
(5, 1, 0, 5),
(2, 4, 0, 5),
(1, 4, 0, 4),
(3, 4, 0, 4),
(4, 3, 0, 3),
(5, 3, 0, 4),
(3, 3, 0, 5),
(4, 5, 1, 0),
(5, 5, 1, 0),
(2, 5, 1, 0),
(1, 6, 1, 0),
(3, 6, 1, 0),
(3, 2, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Movie`
--
ALTER TABLE `Movie`
  ADD PRIMARY KEY (`idMovie`);

--
-- Indexes for table `TVShow`
--
ALTER TABLE `TVShow`
  ADD PRIMARY KEY (`idTVShow`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `User_Movies`
--
ALTER TABLE `User_Movies`
  ADD KEY `User_Movies_id_fk1` (`idUser`),
  ADD KEY `User_Movies_id_fk2` (`idMovie`);

--
-- Indexes for table `User_TVShow`
--
ALTER TABLE `User_TVShow`
  ADD KEY `User_TVShow_id_fk1` (`idUser`),
  ADD KEY `User_TVShow_id_fk2` (`idTVShow`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Movie`
--
ALTER TABLE `Movie`
  MODIFY `idMovie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `TVShow`
--
ALTER TABLE `TVShow`
  MODIFY `idTVShow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `User_Movies`
--
ALTER TABLE `User_Movies`
  ADD CONSTRAINT `User_Movies_id_fk1` FOREIGN KEY (`idUser`) REFERENCES `User` (`idUser`),
  ADD CONSTRAINT `User_Movies_id_fk2` FOREIGN KEY (`idMovie`) REFERENCES `Movie` (`idMovie`);

--
-- Constraints for table `User_TVShow`
--
ALTER TABLE `User_TVShow`
  ADD CONSTRAINT `User_TVShow_id_fk1` FOREIGN KEY (`idUser`) REFERENCES `User` (`idUser`),
  ADD CONSTRAINT `User_TVShow_id_fk2` FOREIGN KEY (`idTVShow`) REFERENCES `TVShow` (`idTVShow`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
