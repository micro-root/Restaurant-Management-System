-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 04, 2018 at 10:57 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bill`
--

CREATE TABLE `Bill` (
  `Order_Number` int(11) NOT NULL,
  `Bill_Number` int(11) NOT NULL,
  `Total_Price` float NOT NULL,
  `Date/Time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Bill`
--

INSERT INTO `Bill` (`Order_Number`, `Bill_Number`, `Total_Price`, `Date/Time`) VALUES
(2, 2, 56, '2018-11-24'),
(3, 3, 1695, '2018-11-24'),
(4, 4, 1130, '2018-11-25'),
(200, 70, 151.5, '2018-11-23'),
(113, 75, 112, '2018-11-25'),
(112, 76, 112, '2018-11-25'),
(111, 77, 336, '2018-11-25'),
(110, 78, 280, '2018-11-25'),
(301, 81, 252.5, '2018-11-24'),
(302, 82, 252.5, '2018-11-24'),
(303, 83, 252.5, '2018-11-24'),
(69, 99, 2260, '2018-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `Cashier`
--

CREATE TABLE `Cashier` (
  `Name` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Cashier Bill`
--

CREATE TABLE `Cashier Bill` (
  `Cashier_ID` int(11) NOT NULL,
  `Bill_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Chef`
--

CREATE TABLE `Chef` (
  `Name` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Chef Order`
--

CREATE TABLE `Chef Order` (
  `Chef_ID` int(11) NOT NULL,
  `Order_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `Name` varchar(255) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Name`, `Customer_ID`, `Phone_Number`, `Address`) VALUES
('bilal', 1, 13432123, 'wapda town'),
('Mahad', 5, 6326363, 'model town'),
('Ammar', 6, 83725252, 'iqbal town'),
('Ahmed', 8, 81988322, 'faisal town'),
('Huma', 10, 34261061, 'wapda town');

-- --------------------------------------------------------

--
-- Table structure for table `Customer Bill`
--

CREATE TABLE `Customer Bill` (
  `Customer_ID` int(11) NOT NULL,
  `Bill_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customer Bill`
--

INSERT INTO `Customer Bill` (`Customer_ID`, `Bill_Number`) VALUES
(1, 77),
(5, 82),
(5, 83),
(6, 2),
(6, 75),
(6, 81),
(6, 99),
(8, 3),
(8, 76),
(10, 70),
(10, 78);

-- --------------------------------------------------------

--
-- Table structure for table `Customer Order`
--

CREATE TABLE `Customer Order` (
  `Customer_ID` int(11) NOT NULL,
  `Order_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customer Order`
--

INSERT INTO `Customer Order` (`Customer_ID`, `Order_Number`) VALUES
(1, 111),
(5, 302),
(5, 303),
(6, 69),
(6, 113),
(6, 301),
(8, 112),
(10, 110),
(10, 200);

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `Name` varchar(255) NOT NULL,
  `Employee_ID` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`Name`, `Employee_ID`, `Address`, `Gender`) VALUES
('bilal', 1, 'wapda town', 'male'),
('ali', 2, 'wapda town', 'male'),
('mahad', 3, 'model town', 'male'),
('Hassan amin', 4, 'gulberg', 'male'),
('zain Haider', 5, 'wapda town', 'male'),
('fatima', 10, 'DHA', 'female'),
('minahil', 11, 'wapda town', 'female'),
('Zain', 12, 'moon market', 'Male'),
('Farah', 45, 'faisal town', 'female'),
('haris', 55, 'askhse', 'male'),
('Suleman', 65, 'iqbal town', 'Male'),
('Abdullah', 87, 'model town', 'Male'),
('hassan', 88, 'westwood', 'male'),
('Alishba', 92, 'Gulberg', 'female'),
('hello', 445, 'jhgfds', 'male'),
('hassan', 566, 'jhgfds', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `Employee Salary`
--

CREATE TABLE `Employee Salary` (
  `ID` int(11) NOT NULL,
  `Salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE `Inventory` (
  `Item_Number` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Inventory`
--

INSERT INTO `Inventory` (`Item_Number`, `Price`, `Name`, `Availability`) VALUES
(1, 50.5, 'burger', 1),
(2, 565, 'pizza', 1),
(3, 56, 'sabzi', 6),
(4, 899.99, 'wrap', 2),
(5, 577, 'chicken steak', 5),
(6, 553, 'biryani', 34);

-- --------------------------------------------------------

--
-- Table structure for table `Manager`
--

CREATE TABLE `Manager` (
  `ID` int(11) NOT NULL,
  `Restaurant_Number` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Manager`
--

INSERT INTO `Manager` (`ID`, `Restaurant_Number`, `Name`) VALUES
(566, 2, 'hassan');

-- --------------------------------------------------------

--
-- Table structure for table `Order Detail`
--

CREATE TABLE `Order Detail` (
  `Order_Number` int(11) NOT NULL,
  `Item_Number` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Order Detail`
--

INSERT INTO `Order Detail` (`Order_Number`, `Item_Number`, `Quantity`, `Price`) VALUES
(2, 3, 1, 56),
(3, 2, 3, 1695),
(4, 2, 2, 1130),
(69, 2, 4, 2260),
(110, 3, 5, 280),
(111, 3, 6, 336),
(112, 3, 2, 112),
(113, 3, 2, 112),
(200, 1, 3, 151.5),
(301, 1, 5, 252.5),
(302, 1, 5, 252.5),
(303, 1, 5, 252.5);

-- --------------------------------------------------------

--
-- Table structure for table `Restaurant`
--

CREATE TABLE `Restaurant` (
  `Name` varchar(255) NOT NULL,
  `Restaurant_Number` int(11) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Restaurant`
--

INSERT INTO `Restaurant` (`Name`, `Restaurant_Number`, `Phone_Number`, `Address`) VALUES
('KFC', 2, 543456543, 'DHA'),
('butt karahi', 3, 98765432, 'old lahore'),
('broadway pizza', 4, 1122334455, 'johar town'),
('Timmys', 5, 336677882, 'bahria town'),
('sweet tooth', 6, 456765, 'heera mandi'),
('JJ', 7, 1234512, 'Phase 4');

-- --------------------------------------------------------

--
-- Table structure for table `Serves`
--

CREATE TABLE `Serves` (
  `Waiter_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Order_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Serves`
--

INSERT INTO `Serves` (`Waiter_ID`, `Customer_ID`, `Order_Number`) VALUES
(65, 6, 2),
(65, 8, 3),
(88, 6, 69),
(12, 10, 110),
(12, 1, 111),
(12, 8, 112),
(12, 6, 113),
(45, 10, 200),
(65, 6, 301),
(65, 5, 302),
(65, 5, 303);

-- --------------------------------------------------------

--
-- Table structure for table `Waiter`
--

CREATE TABLE `Waiter` (
  `Name` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Waiter`
--

INSERT INTO `Waiter` (`Name`, `ID`) VALUES
('Zain', 12),
('Farah', 45),
('Suleman', 65),
('Abdullah', 87),
('hassan', 88),
('Alishba', 92);

-- --------------------------------------------------------

--
-- Table structure for table `Works At`
--

CREATE TABLE `Works At` (
  `ID` int(11) NOT NULL,
  `Restaurant_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Works At`
--

INSERT INTO `Works At` (`ID`, `Restaurant_Number`) VALUES
(445, 2),
(566, 2),
(12, 3),
(45, 3),
(65, 3),
(87, 3),
(92, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bill`
--
ALTER TABLE `Bill`
  ADD PRIMARY KEY (`Bill_Number`);

--
-- Indexes for table `Cashier`
--
ALTER TABLE `Cashier`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Cashier Bill`
--
ALTER TABLE `Cashier Bill`
  ADD PRIMARY KEY (`Cashier_ID`),
  ADD KEY `Cashier Bill_fk1` (`Bill_Number`);

--
-- Indexes for table `Chef`
--
ALTER TABLE `Chef`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Chef Order`
--
ALTER TABLE `Chef Order`
  ADD PRIMARY KEY (`Chef_ID`),
  ADD KEY `Chef Order_fk1` (`Order_Number`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `Customer Bill`
--
ALTER TABLE `Customer Bill`
  ADD PRIMARY KEY (`Bill_Number`),
  ADD KEY `Customer Bill_fk0` (`Customer_ID`);

--
-- Indexes for table `Customer Order`
--
ALTER TABLE `Customer Order`
  ADD PRIMARY KEY (`Order_Number`),
  ADD KEY `Customer Order_fk0` (`Customer_ID`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `Employee Salary`
--
ALTER TABLE `Employee Salary`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD PRIMARY KEY (`Item_Number`);

--
-- Indexes for table `Manager`
--
ALTER TABLE `Manager`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Manager_fk1` (`Restaurant_Number`);

--
-- Indexes for table `Order Detail`
--
ALTER TABLE `Order Detail`
  ADD PRIMARY KEY (`Order_Number`),
  ADD KEY `Order Detail_fk0` (`Item_Number`);

--
-- Indexes for table `Restaurant`
--
ALTER TABLE `Restaurant`
  ADD PRIMARY KEY (`Restaurant_Number`),
  ADD UNIQUE KEY `Phone Number` (`Phone_Number`),
  ADD UNIQUE KEY `Address` (`Address`);

--
-- Indexes for table `Serves`
--
ALTER TABLE `Serves`
  ADD PRIMARY KEY (`Order_Number`),
  ADD KEY `Waiter_ID` (`Waiter_ID`) USING BTREE,
  ADD KEY `Order_Number` (`Order_Number`),
  ADD KEY `Customer_ID` (`Customer_ID`) USING BTREE;

--
-- Indexes for table `Waiter`
--
ALTER TABLE `Waiter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Works At`
--
ALTER TABLE `Works At`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Works At_fk1` (`Restaurant_Number`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Cashier`
--
ALTER TABLE `Cashier`
  ADD CONSTRAINT `Cashier_fk0` FOREIGN KEY (`ID`) REFERENCES `Employee` (`Employee_ID`);

--
-- Constraints for table `Cashier Bill`
--
ALTER TABLE `Cashier Bill`
  ADD CONSTRAINT `Cashier Bill_fk0` FOREIGN KEY (`Cashier_ID`) REFERENCES `Cashier` (`ID`),
  ADD CONSTRAINT `Cashier Bill_fk1` FOREIGN KEY (`Bill_Number`) REFERENCES `Bill` (`Bill_Number`);

--
-- Constraints for table `Chef`
--
ALTER TABLE `Chef`
  ADD CONSTRAINT `Chef_fk0` FOREIGN KEY (`ID`) REFERENCES `Employee` (`Employee_ID`);

--
-- Constraints for table `Chef Order`
--
ALTER TABLE `Chef Order`
  ADD CONSTRAINT `Chef Order_fk0` FOREIGN KEY (`Chef_ID`) REFERENCES `Chef` (`ID`),
  ADD CONSTRAINT `Chef Order_fk1` FOREIGN KEY (`Order_Number`) REFERENCES `Order Detail` (`Order_Number`);

--
-- Constraints for table `Customer Bill`
--
ALTER TABLE `Customer Bill`
  ADD CONSTRAINT `Customer Bill_fk0` FOREIGN KEY (`Customer_ID`) REFERENCES `Customer` (`Customer_ID`),
  ADD CONSTRAINT `Customer Bill_fk1` FOREIGN KEY (`Bill_Number`) REFERENCES `Bill` (`Bill_Number`);

--
-- Constraints for table `Customer Order`
--
ALTER TABLE `Customer Order`
  ADD CONSTRAINT `Customer Order_fk0` FOREIGN KEY (`Customer_ID`) REFERENCES `Customer` (`Customer_ID`),
  ADD CONSTRAINT `Customer Order_fk1` FOREIGN KEY (`Order_Number`) REFERENCES `Order Detail` (`Order_Number`);

--
-- Constraints for table `Employee Salary`
--
ALTER TABLE `Employee Salary`
  ADD CONSTRAINT `Employee Salary_fk0` FOREIGN KEY (`ID`) REFERENCES `Employee` (`Employee_ID`);

--
-- Constraints for table `Manager`
--
ALTER TABLE `Manager`
  ADD CONSTRAINT `Manager_fk0` FOREIGN KEY (`ID`) REFERENCES `Employee` (`Employee_ID`),
  ADD CONSTRAINT `Manager_fk1` FOREIGN KEY (`Restaurant_Number`) REFERENCES `Restaurant` (`Restaurant_Number`);

--
-- Constraints for table `Order Detail`
--
ALTER TABLE `Order Detail`
  ADD CONSTRAINT `Order Detail_fk0` FOREIGN KEY (`Item_Number`) REFERENCES `Inventory` (`Item_Number`);

--
-- Constraints for table `Serves`
--
ALTER TABLE `Serves`
  ADD CONSTRAINT `Serves_fk0` FOREIGN KEY (`Waiter_ID`) REFERENCES `Waiter` (`ID`),
  ADD CONSTRAINT `Serves_fk1` FOREIGN KEY (`Customer_ID`) REFERENCES `Customer` (`Customer_ID`),
  ADD CONSTRAINT `Serves_fk2` FOREIGN KEY (`Order_Number`) REFERENCES `Order Detail` (`Order_Number`);

--
-- Constraints for table `Waiter`
--
ALTER TABLE `Waiter`
  ADD CONSTRAINT `Waiter_fk0` FOREIGN KEY (`ID`) REFERENCES `Employee` (`Employee_ID`);

--
-- Constraints for table `Works At`
--
ALTER TABLE `Works At`
  ADD CONSTRAINT `Works At_fk0` FOREIGN KEY (`ID`) REFERENCES `Employee` (`Employee_ID`),
  ADD CONSTRAINT `Works At_fk1` FOREIGN KEY (`Restaurant_Number`) REFERENCES `Restaurant` (`Restaurant_Number`);
