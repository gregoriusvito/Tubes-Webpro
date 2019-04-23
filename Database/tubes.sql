-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 05:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `sender`, `receiver`, `subject`, `text`) VALUES
(1, 'vitogregorius@gmail.com', 'ezar@gmail.com', '123', 'myyu.yi'),
(2, 'vitogregorius@gmail.com', 'ezar@gmail.com', '123', 'sdyhk'),
(3, 'ezar@gmail.com', 'vitogregorius@gmail.com', 'fouk', 'buivl'),
(4, 'vitogregorius@gmail.com', 'ezar@gmail.com', 'ybuk', 'bwuevb'),
(5, 'ezar@gmail.com', 'vitogregorius@gmail.com', 'wev', 'iubibiwbe uiwebhb ibhv vjh vjhvjh vhj vhjv jhvj hvjh vj vjh vhjv hg gc fc gjhv jh vkh bkjb kb kjb kjvhj v hjv hjvj hvjh vhj vhj vjh vhj vhj vhj vhj vjh vhj vh fyfuf u hv iv v uv v hvb ivyv i'),
(6, 'vitogregorius@gmail.com', 'vitogregorius@gmail.com', 'wehku', 'iubibiwbe uiwebhb ibhv vjh vjhvjh vhj vhjv jhvj hvjh vj vjh vhjv hg gc fc gjhv jh vkh bkjb kb kjb kjvhj v hjv hjvj hvjh vhj vhj vjh vhj vhj vhj vhj vjh vhj vh fyfuf u hv iv v uv v hvb ivyv i\r\niubibiwbe uiwebhb ibhv vjh vjhvjh vhj vhjv jhvj hvjh vj vjh vhjv hg gc fc gjhv jh vkh bkjb kb kjb kjvhj v hjv hjvj hvjh vhj vhj vjh vhj vhj vhj vhj vjh vhj vh fyfuf u hv iv v uv v hvb ivyv i\r\niubibiwbe uiwebhb ibhv vjh vjhvjh vhj vhjv jhvj hvjh vj vjh vhjv hg gc fc gjhv jh vkh bkjb kb kjb kjvhj v hjv hjvj hvjh vhj vhj vjh vhj vhj vhj vhj vjh vhj vh fyfuf u hv iv v uv v hvb ivyv i\r\niubibiwbe uiwebhb ibhv vjh vjhvjh vhj vhjv jhvj hvjh vj vjh vhjv hg gc fc gjhv jh vkh bkjb kb kjb kjvhj v hjv hjvj hvjh vhj vhj vjh vhj vhj vhj vhj vjh vhj vh fyfuf u hv iv v uv v hvb ivyv i\r\niubibiwbe uiwebhb ibhv vjh vjhvjh vhj vhjv jhvj hvjh vj vjh vhjv hg gc fc gjhv jh vkh bkjb kb kjb kjvhj v hjv hjvj hvjh vhj vhj vjh vhj vhj vhj vhj vjh vhj vh fyfuf u hv iv v uv v hvb ivyv i\r\niubibiwbe uiwebhb ibhv vjh vjhvjh vhj vhjv jhvj hvjh vj vjh vhjv hg gc fc gjhv jh vkh bkjb kb kjb kjvhj v hjv hjvj hvjh vhj vhj vjh vhj vhj vhj vhj vjh vhj vh fyfuf u hv iv v uv v hvb ivyv i\r\niubibiwbe uiwebhb ibhv vjh vjhvjh vhj vhjv jhvj hvjh vj vjh vhjv hg gc fc gjhv jh vkh bkjb kb kjb kjvhj v hjv hjvj hvjh vhj vhj vjh vhj vhj vhj vhj vjh vhj vh fyfuf u hv iv v uv v hvb ivyv i\r\niubibiwbe uiwebhb ibhv vjh vjhvjh vhj vhjv jhvj hvjh vj vjh vhjv hg gc fc gjhv jh vkh bkjb kb kjb kjvhj v hjv hjvj hvjh vhj vhj vjh vhj vhj vhj vhj vjh vhj vh fyfuf u hv iv v uv v hvb ivyv i\r\niubibiwbe uiwebhb ibhv vjh vjhvjh vhj vhjv jhvj hvjh vj vjh vhjv hg gc fc gjhv jh vkh bkjb kb kjb kjvhj v hjv hjvj hvjh vhj vhj vjh vhj vhj vhj vhj vjh vhj vh fyfuf u hv iv v uv v hvb ivyv i');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `password`) VALUES
('ezar@gmail.com', 'esar31', '097e26b2ffb0339458b55da17425a71f'),
('faen@gmail.com', 'faen', '81dc9bdb52d04dc20036dbd8313ed055'),
('vitogregorius@gmail.com', 'vito', '31b70b3e803fb9bc82590f45e7a5f66d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender` (`sender`),
  ADD KEY `receiver` (`receiver`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mail`
--
ALTER TABLE `mail`
  ADD CONSTRAINT `mail_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `user` (`email`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mail_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `user` (`email`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
