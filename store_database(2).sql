-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2015 at 10:15 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_Id` varchar(10) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Postal_Code` int(5) NOT NULL,
  `Age` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_Id`, `FName`, `LName`, `Phone`, `Email`, `Street`, `City`, `Postal_Code`, `Age`) VALUES
('1', 'Gavin', 'Ackerman', '0216584856', 'sdfsdf@gmail.com', '14 peach ', 'cape town', 7780, 20),
('10', 'Chad', 'Smith', '0487541259', 'chadchad@gmail.com', '87 circle', 'joburg', 9854, 22),
('11', 'zaheer', 'flanders', '0765841258', 'fatty@yahoo.com', '34 lucy', 'cape town', 7587, 22),
('12', 'Trevor', 'Noah', '0157895412', 'tNoah@gmail.com', '23 locke', 'pretoria', 4587, 25),
('13', 'Charlize', 'Theron', '0125898544', 'charT@gmail.com', '75 holly', 'joburg', 9856, 35),
('14', 'Angelina ', 'Jolie', '0458987556', 'Angel@gmail.com', '55 lowkey', 'cape town', 3587, 45),
('15', 'daniel', 'craig', '0587894521', 'dCraig@yahoo.com', '34 bond', 'joburg', 8756, 35),
('16', 'James ', 'Bond', '0000000007', 'theOne@gmail.com', '53 nowhere', 'cape town', 87452, 34),
('17', 'Peter', 'Cruz', '0487895421', 'Cruzing@gmail.com', '64 link', 'cape town', 6452, 25),
('18', 'Peeta', 'Swanson', '0458855421', 'Swanny@yahoo.com', '18 wonder', 'cape town', 6974, 21),
('19', 'Jason', 'Rider', '0588742149', 'JrIDER@gmail.com', '204 fast', 'cape town', 7765, 25),
('2', 'peter', 'johnson', '0127854621', 'ptj@gmail.com', '12 adams', 'joburg', 6654, 32),
('20', 'Prince', 'John', '0257846512', 'PJOhn@gmail.com', '54 nock', 'cape town', 8456, 35),
('21', 'jason', 'statham', '015879865', 'jStat@yahoo.com', '65 lake', 'joburg', 6421, 87),
('22', 'Rebcecca', 'peterson', '0358894521', 'Rpt@gmail.com', '35 long', 'cape town', 65421, 26),
('23', 'lana', 'person', '0458756521', 'lPer@gmail.com ', '82 short ', 'cape town', 6714, 24),
('24', 'johnny', 'lescott', '0187954215', 'Jless@yahoo.com', '43 gale', 'joburg', 6421, 68),
('25', 'andy', 'davids', '0124587456', 'AdAV@yahoo.com', '25 market', 'cape town', 6412, 75),
('26', 'Garland', 'hale', '0487541231', 'gHale@gmail.com', '54 mont', 'cape town', 3245, 21),
('27', 'Nathan', 'paulse', '0245897542', 'NpAUL@yahoo.com', '63 tell', 'cape town', 6485, 25),
('28', 'Josh', 'Leck', '0128754875', 'Jleck@gmail.com', '23 weet', 'cape town', 5741, 28),
('29', 'Aj', 'Langston', '0458795412', 'AlANG@gmail.com', '62 wrong', 'cape town', 4687, 56),
('3', 'Brad', 'Adriaan', '0115486512', 'badr@yahoo.com', '65 ship', 'joburg', 9810, 25),
('30', 'Lester', 'Johnson', '0245865412', 'LesJ@gmail.com', '73 mantus', 'cape town', 4265, 36),
('4', 'Amy', 'peirce', '0124589584', 'AmyP@gmail.com', '84 kraal', 'cape town', 7740, 35),
('5', 'Moegie', 'Davids', '0128754632', 'DonkeyDavids@gmail.com', '53 lester', 'cape town', 7765, 21),
('6', 'Qiyaam', 'sydow', '0854786521', 'qmsyd23@gmail.com', '24 angel', 'cape town', 7785, 24),
('7', 'andre', 'johnson', '072458985', 'aj43@yahoo.com', '103 clock', 'joburg', 9854, 57),
('8', 'watheeqah', 'abrahams', '0756884123', 'monkeyA@gmail.com', '23 crow', 'cape town', 7780, 21),
('9', 'Genna', 'Martin', '0751468521', 'gennaM@hotmail.com', '23 clive ', 'cape town', 7781, 20);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE IF NOT EXISTS `customer_order` (
  `Order_Id` varchar(10) NOT NULL,
  `Cus_Id` varchar(10) NOT NULL,
  `Prod_Id` varchar(10) NOT NULL,
  `Price` float NOT NULL,
  `Date` date NOT NULL,
  `Quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`Order_Id`, `Cus_Id`, `Prod_Id`, `Price`, `Date`, `Quantity`) VALUES
('1', '1', '1', 520, '2015-10-21', 1),
('10', '10', '10', 250, '2015-10-28', 1),
('11', '11', '11', 173, '2015-10-30', 1),
('12', '12', '12', 510, '2015-10-27', 1),
('13', '13', '13', 260, '2015-10-30', 1),
('14', '14', '14', 540, '2015-10-30', 1),
('15', '15', '15', 610, '2015-10-23', 1),
('16', '16', '16', 540, '2015-10-31', 1),
('17', '17', '17', 612, '2015-10-31', 1),
('18', '18', '18', 680, '2015-10-29', 1),
('19', '19', '19', 630, '2015-10-23', 1),
('2', '2', '2', 840, '2015-10-20', 1),
('20', '20', '20', 530, '2015-10-23', 1),
('21', '21', '21', 910, '2015-10-31', 1),
('22', '22', '22', 420, '2015-10-29', 1),
('23', '23', '23', 870, '2015-10-31', 1),
('25', '25', '25', 620, '2015-10-30', 1),
('26', '26', '26', 210, '2015-10-28', 1),
('27', '27', '27', 210, '2015-10-31', 1),
('28', '28', '28', 640, '2015-10-31', 1),
('29', '29', '29', 410, '2015-10-31', 1),
('3', '3', '3', 240, '2015-10-22', 1),
('30', '30', '30', 510, '2015-10-30', 1),
('4', '4', '4', 540, '2015-10-31', 1),
('5', '5', '5', 620, '2015-10-24', 1),
('6', '6', '6', 820, '2015-10-29', 1),
('7', '7', '7', 250, '2015-10-31', 1),
('8', '8', '8', 650, '2015-10-31', 1),
('9', '9', '9', 870, '2015-10-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `Delivery_Id` varchar(10) NOT NULL,
  `Ord_Id` varchar(10) NOT NULL,
  `Cus_Id` varchar(10) NOT NULL,
  `Delivery_Date` date NOT NULL,
  `Delivery_Quantity` int(5) NOT NULL,
  `Price` float NOT NULL,
  `Cus_Street` varchar(30) NOT NULL,
  `Cus_City` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`Delivery_Id`, `Ord_Id`, `Cus_Id`, `Delivery_Date`, `Delivery_Quantity`, `Price`, `Cus_Street`, `Cus_City`) VALUES
('1', '1', '1', '2015-10-31', 1, 520, '14 peach', 'cape town'),
('10', '10', '10', '2015-10-31', 1, 250, '87 circle', 'joburg'),
('11', '11', '11', '2015-10-31', 1, 173, '34 lucy', 'cape town'),
('12', '12', '12', '2015-10-31', 1, 510, '23 locke', 'pretoria'),
('13', '13', '13', '2015-10-31', 1, 260, '75 holly', 'joburg'),
('14', '14', '14', '2015-10-31', 1, 540, '55 lowkey', 'cape town'),
('15', '15', '15', '2015-10-31', 1, 610, '34 bond', 'joburg'),
('16', '16', '16', '2015-10-31', 1, 540, '53 nowhere', 'cape town'),
('17', '17', '17', '2015-10-31', 1, 612, '64 link', 'cape town'),
('18', '18', '18', '2015-10-31', 1, 680, '18 wonder', 'cape town'),
('19', '19', '19', '2015-10-31', 1, 630, '204 fast', 'cape town'),
('2', '2', '2', '2015-10-31', 1, 840, '13 adams', 'joburg'),
('20', '20', '20', '2015-10-31', 1, 530, '54 nock', 'cape town'),
('21', '21', '21', '2015-10-31', 1, 910, '65 lake', 'joburg'),
('22', '22', '22', '2015-10-31', 1, 420, '35 long ', 'cape town'),
('23', '23', '23', '2015-10-31', 1, 870, '82 short', 'cape town'),
('25', '25', '25', '2015-10-31', 1, 620, '25 market', 'cape town'),
('26', '26', '26', '2015-10-31', 1, 210, '54 mont', 'cape town'),
('27', '27', '27', '2015-10-31', 1, 210, '63 tell', 'cape town'),
('28', '28', '28', '2015-10-31', 1, 640, '23 weet', 'cape town'),
('29', '29', '29', '2015-10-31', 1, 410, '62 wrong', 'cape town'),
('3', '3', '3', '2015-10-31', 1, 240, '65 ship', 'joburg'),
('30', '30', '30', '2015-10-31', 1, 510, '73 mantus', 'cape town'),
('4', '4', '4', '2015-10-31', 1, 540, '84 kraal', 'cape town'),
('5', '5', '5', '2015-10-31', 1, 620, '53 Lester', 'cape town'),
('6', '6', '6', '2015-10-31', 1, 820, '24 angel', 'cape town'),
('7', '7', '7', '2015-10-31', 1, 250, '103 clock', 'joburg'),
('8', '8', '8', '2015-10-31', 1, 650, '23 crow', 'cape town'),
('9', '9', '9', '2015-10-31', 1, 870, '23 clive', 'cape town');

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

CREATE TABLE IF NOT EXISTS `order_line` (
  `Order_Line_Id` varchar(10) NOT NULL,
  `Prod_id` varchar(10) NOT NULL,
  `Order_Id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`Order_Line_Id`, `Prod_id`, `Order_Id`) VALUES
('1', '1', '1'),
('10', '10', '10'),
('11', '11', '11'),
('12', '12', '12'),
('13', '13', '13'),
('14', '14', '14'),
('15', '15', '15'),
('16', '16', '16'),
('17', '17', '17'),
('18', '18', '18'),
('19', '19', '19'),
('2', '2', '2'),
('20', '20', '20'),
('21', '21', '21'),
('22', '22', '22'),
('23', '23', '23'),
('25', '25', '25'),
('26', '26', '26'),
('27', '27', '27'),
('28', '28', '28'),
('29', '29', '29'),
('3', '3', '3'),
('30', '30', '30'),
('4', '4', '4'),
('5', '5', '5'),
('6', '6', '6'),
('7', '7', '7'),
('8', '8', '8'),
('9', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Product_Id` varchar(10) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Product_Name` varchar(20) NOT NULL,
  `Sup_Id` varchar(10) NOT NULL,
  `Product_Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_Id`, `Description`, `Product_Name`, `Sup_Id`, `Product_Price`) VALUES
('1', 'new black shoes', 'Adidas Sport shoes', '24', 520),
('10', 'long sleeve shirt blue', 'blue slimshirt', '10', 250),
('11', 'red and blue check shirt', 'stripecheck shirt', '11', 173),
('12', 'grey pattern tshirt', 'pattern tshirt', '12', 510),
('13', 'black low cut vest ', 'Low black', '13', 260),
('14', 'green low rise running shoes', 'green sprints', '14', 540),
('15', 'white j21 top', 'j21 low', '15', 610),
('16', 'red track shoes', 'go go', '16', 540),
('17', 'slim fit womens jeans', 'blue smlim', '17', 612),
('18', 'grey running shorts', 'high greys', '18', 680),
('19', 'blue hooded jersey', 'hood j', '19', 630),
('2', 'high top shoes', 'nike 64', '2', 840),
('20', 'white v-neck', 'w vneck', '20', 530),
('21', 'green high top sneaker', 'green highs', '21', 910),
('22', 'light grey low tops', 'grey lows', '22', 420),
('23', 'blue vest ', 'blue breeze', '23', 870),
('25', 'low cut shorts', 'low shorts', '25', 620),
('26', 'lime tights', 'yoga tights', '26', 210),
('27', 'blue low socks', 'blue wings', '27', 210),
('28', 'dark green high tops', 'spring jumps', '28', 640),
('29', 'purple overcoat', 'long coat', '29', 410),
('3', 'green running shoes', 'Puma Run', '1', 240),
('30', 'new White running shorts', 'Super brights', '30', 510),
('4', 'luxury vest', 'lime vest', '3', 540),
('5', 'blue comfort shoes', 'smooth 6', '5', 620),
('6', ' blue slim jeans', 'slim j34', '6', 820),
('7', 'new grey sling beanie', 'sling b43', '7', 250),
('8', 'tight fit grey vest', 'run cool vest', '8', 650),
('9', 'boot leg black jeans', 'bootleg j36', '9', 870);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `Supplier_Id` varchar(10) NOT NULL,
  `Supplier_Name` varchar(20) NOT NULL,
  `Supplier_City` varchar(30) NOT NULL,
  `Supplier_Phone` varchar(10) NOT NULL,
  `Supplier_Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_Id`, `Supplier_Name`, `Supplier_City`, `Supplier_Phone`, `Supplier_Email`) VALUES
('1', 'puma', 'cape town', '0145875413', 'pumC@gmail.com'),
('10', 'shado', 'cape town', '0459876521', 'shadow2@gmail.com'),
('11', 'superga', 'pretoria', '0254879321', 'superG@gmail.com'),
('12', 'tracer', 'cape town', '0487512485', 'tracerrrr@gmail.com'),
('13', 'petron', 'joburg', '0345218976', 'petron54@yahoo.com'),
('14', 'letchko', 'pretoria', '0789456123', 'letchko64@gmail.com'),
('15', 'Run-Pro', 'cape town', '048765123', 'runner54@gmail.com'),
('16', 'clima-smooth', 'joburg', '0547898452', 'clima74@gmail.com'),
('17', 'tackle', 'cape town', '0547895412', 'tackleHard@gmail.com'),
('18', 'lessismore', 'cape town', '0657841235', 'lessismore@gmail.com'),
('19', 'lugo', 'cape town', '0784513258', 'lugo64@gmail.com'),
('2', 'nike', 'pretoria', '0125789855', 'nike54@gmail.com'),
('20', 'layton', 'cape town', '0487974412', 'layton74@gmail.com'),
('21', 'portay', 'pretoria', '0547898513', 'portay@gmail.com'),
('22', 'wesglow', 'pretoria', '0654789411', 'wesglow@yahoo.com'),
('23', 'locke-smith', 'joburg', '0657841235', 'lockey@gmail.com'),
('24', 'adidas', 'cape town', '0218754695', 'adi11@gmail.com'),
('25', 'one-way', 'joburg', '0547898451', 'oneyway@gmail.com'),
('26', 'tony-mark', 'cape town', '0354897412', 'tony24@gmail.com'),
('27', 'redbat', 'pretoria', '6875321458', 'redbat@gmail.com'),
('28', 'lexi', 'pretoria', '0248756512', 'lexi83@gmail.com'),
('29', 'longlong', 'cape town', '0241657894', 'longy@gmail.com'),
('3', 'Ascis', 'joburg', '0458768521', 'asc1@gmail.com'),
('30', 'blue', 'cape town', '0147851265', 'bluey@gmail.com'),
('4', 'gucci', 'cape town', '0658741235', 'gucci24@gmail.com'),
('5', 'balenciaga', 'cape town', '0235478974', 'balaga32@yahoo.com'),
('6', 'prada', 'joburg', '0124578987', 'prada54@gmail.com'),
('7', 'marc jacobs', 'pretoria', '0458789654', 'mjS@gmail.com'),
('8', 'hi-tech', 'cape town', '0145879563', 'hitech32@yahoo.com'),
('9', 'reebok', 'joburg', '0354789751', 'reeboky@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`Order_Id`),
  ADD KEY `Cus_Id` (`Cus_Id`),
  ADD KEY `Prod_Id` (`Prod_Id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`Delivery_Id`),
  ADD KEY `Ord_Id` (`Ord_Id`),
  ADD KEY `Cus_Id` (`Cus_Id`),
  ADD KEY `Cus_Street` (`Cus_Street`),
  ADD KEY `Cus_City` (`Cus_City`),
  ADD KEY `Price` (`Price`);

--
-- Indexes for table `order_line`
--
ALTER TABLE `order_line`
  ADD PRIMARY KEY (`Order_Line_Id`),
  ADD KEY `Prod_id` (`Prod_id`),
  ADD KEY `Order_Id` (`Order_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_Id`),
  ADD UNIQUE KEY `Sup_Id` (`Sup_Id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`Cus_Id`) REFERENCES `customer` (`Customer_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_order_ibfk_2` FOREIGN KEY (`Prod_Id`) REFERENCES `product` (`Product_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`Ord_Id`) REFERENCES `customer_order` (`Order_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`Cus_Id`) REFERENCES `customer` (`Customer_Id`);

--
-- Constraints for table `order_line`
--
ALTER TABLE `order_line`
  ADD CONSTRAINT `order_line_ibfk_1` FOREIGN KEY (`Prod_id`) REFERENCES `product` (`Product_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_line_ibfk_2` FOREIGN KEY (`Order_Id`) REFERENCES `customer_order` (`Order_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
