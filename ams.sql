-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2019 at 12:15 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

CREATE DATABASE address_management_system;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Table structure for table `ulogin`
--

CREATE TABLE `ulogin` (
  `uid` int(11) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upass` varchar(200) NOT NULL,
  `urole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `line 1` varchar(100) NOT NULL,
  `line 2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `passcode` varchar(100) NOT NULL,
  `submittedby` varchar(100) NOT NULL,
  PRIMARY KEY (pid)
)

--
-- Dumping data for table `ulogin`
--

INSERT INTO `ulogin` (`uid`, `uemail`, `upass`, `urole`) VALUES
(1, 'admin@gmail.com', '$2y$10$PhXXUGdSIggNdq0aJ1kcfO1h8yfJMB.savi4.5ehCYuDjBMNFV8jq', 1),
(2, 'standard@gmail.com', '$2y$10$U05AMUkKqmnDOLpxmMyxE.Vxf0h4NrvA.wTWZqQCSTQ40D/4L6l3u', 2);


-- --
-- Indexes for table `ulogin`
--
ALTER TABLE `ulogin`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for table `ulogin`
--
ALTER TABLE `ulogin`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;