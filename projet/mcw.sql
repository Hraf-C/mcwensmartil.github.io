-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 17 juin 2018 à 05:15
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mcw`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`fullname`, `username`, `password`) VALUES
('gdfg', 'gdfg', 'dsf'),
('dsf', 'dsf', '$2y$10$iusesomecrazystrings2uZktmso7.FV3N7k08H6jQ75nTyCG895e'),
('fdgd', 'gdf', '$2y$10$iusesomecrazystrings2ujswy6vbV1DwMNNVgqbOOQTbCVW3y506'),
('vhfgh', 'fghfghf', '$2y$10$iusesomecrazystrings2uIbMyGGRc3WWJBHAdffDS5yX1d0Y2XRi'),
('ssssss', 'ssssss', '$2y$10$iusesomecrazystrings2ua38TfXcTQNWJXuxJKw9q3r689uzxgpG'),
('dfwswf', 'feee', '$2y$10$iusesomecrazystrings2uwwf0hVruMEeK//PqI1TL.Es7EgGebcS'),
('dsfsdfdsfsd', 'dfdsffddc', '$2y$10$iusesomecrazystrings2utVIl78m/cIJYgk6fUI2Qr7V0CcnG2ba'),
('dsfsdfdsfsd', 'dfdsffdd', '$2y$10$iusesomecrazystrings2uUM8t8M5lqCefuOWZ29IbY1RWKoTlvDm'),
('dsfsdfdsfsd', 'dfdsffd', '$2y$10$iusesomecrazystrings2u8ej4/fFZ5fT973kbjt8kgvhZPWl9hh2'),
('vbc', 'vcbvcb', '$2y$10$iusesomecrazystrings2u26YPTSkZRhNWmD9ZqtOLjdGC22xGZpO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
