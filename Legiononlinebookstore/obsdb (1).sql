-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 05:53 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrtor`
--

CREATE TABLE `administrtor` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `f_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrtor`
--

INSERT INTO `administrtor` (`Username`, `Password`, `f_name`) VALUES
('meegoda60@yahoo.com', 'suwani1960', 'Nandana Meegoda');

-- --------------------------------------------------------

--
-- Table structure for table `bucket`
--

CREATE TABLE `bucket` (
  `bucket_no` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `bucket_img` varchar(100) NOT NULL,
  `telephone` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `requireddate` date NOT NULL,
  `pkgstate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bucket`
--

INSERT INTO `bucket` (`bucket_no`, `customer`, `bucket_img`, `telephone`, `email`, `requireddate`, `pkgstate`) VALUES
(1, 0, 'IMXJ1673.JPG', '0761911551', 'nilanmeegoda@gmail.com', '2019-10-11', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartiD` int(11) NOT NULL,
  `prodID` int(11) NOT NULL,
  `cusID` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `tot_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartiD`, `prodID`, `cusID`, `qty`, `tot_amount`) VALUES
(2, 17, 'Nilan', 2, 800),
(3, 9, 'Nilan', 1, 3000),
(5, 21, 'the', 3, 10500),
(13, 10, 'the', 3, 3600),
(16, 21, 'the', 4, 14000),
(20, 13, 'Amadhi', 2, 1120),
(21, 13, 'Amadhi', 3, 1680),
(23, 8, 'Amadhi', 4, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `catergory`
--

CREATE TABLE `catergory` (
  `Cat_ID` int(11) NOT NULL,
  `category_typ` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catergory`
--

INSERT INTO `catergory` (`Cat_ID`, `category_typ`) VALUES
(12, 'Adults'),
(16, 'Biographies'),
(10, 'E-Books'),
(11, 'Educational'),
(15, 'Fiction'),
(17, 'GuideBooks'),
(9, 'Novels'),
(14, 'ShortStories'),
(13, 'Teen&Love');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `addressity` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `customerimg` varchar(100) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `f_name`, `l_name`, `addressity`, `birthday`, `customerimg`, `Email`, `Password`) VALUES
(3, 'Nilan', 'Meegoda', 'no 02,mainstreet,hettipola', '1999-05-29', 'download.jpg', 'ndmnilan@yahoo.com', 'helloworld'),
(4, 'Hashini', 'Mudannkayake', '254, Kottawa', '1967-02-03', 'download (4).jpg', 'hashie.mudannayake@gmail.com', 'Left4dead!@#'),
(5, 'Amadie', 'Senarath', '274, Galle Road, Kollupitiya', '1995-06-14', 'images (4).jpg', 'ama.senarie@gmail.com', 'Kal123!@#'),
(6, 'Rambo', 'Dissanayake', 'Colombo Rd, Thalawa', '1972-06-13', 'images.jpg', 'Ramtam123@yahoo.com', 'Pty765298'),
(7, 'Pasindu', 'Samaraweera', 'Negombo Rd, Polgahawela, Katunayake', '1967-07-05', 'download (1).jpg', 'bena56yutu@gmail.com', 'pasibunny598#$%'),
(8, 'Shaini', 'Vimalasena', '78/45 Temple road,Kuliyapitiya. ', '1999-07-09', 'download (3).jpg', 'shainiasd@gmail.com', 'asdcvb789'),
(9, 'Prashadi', 'Silva', '67/23 heenpandala, Karapitiya', '1994-10-20', 'images (5).jpg', 'prashadighj@gmail.com', '123ghjkl'),
(11, 'Danuri', 'Senarathna', '67 baddegama road,Hapugala,Galle', '2002-07-22', 'images (3).jpg', 'danuri675@gmail.com', 'danuri67023'),
(12, 'Binu', 'Nagahawaththa', '89/34 kandy road,Pilimthalaw', '1982-12-29', 'images (6).jpg', 'binu890@gmail.com', 'bnm456sde'),
(13, 'Dinuka', 'Gunarathna', '90/23 galle road,Mathara', '1972-08-18', 'download (2).jpg', 'dinukanmvsd@gmail.com', 'jkky643df'),
(14, 'the', 'rambo', 'hhjsdhsdsd', '2019-09-20', 'b3.jpg', 'rambo@gmail.com', '123'),
(15, 'Amadhi', 'Weerathne', 'fgdfgdfg', '2019-09-11', 'b2.jpg', 'amadhi@gmail.com', '123'),
(16, 'ushani', 'balalal', 'asasahgsjhasas', '2019-03-15', 'IMXJ1673.JPG', 'test@gmail.com', '456');

-- --------------------------------------------------------

--
-- Table structure for table `ordertb`
--

CREATE TABLE `ordertb` (
  `orderid` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `orderqty` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `order_state` varchar(50) NOT NULL,
  `cus_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertb`
--

INSERT INTO `ordertb` (`orderid`, `product`, `orderqty`, `orderdate`, `order_state`, `cus_id`) VALUES
(8, 8, 1, '2019-09-29', 'Pending', 'Hashini'),
(9, 8, 10, '2019-09-29', 'Pending', 'Hashini'),
(13, 25, 1, '2019-09-30', 'Shipped', 'Nilan'),
(14, 9, 10, '2019-09-30', 'Shipped', 'Hashini'),
(15, 35, 2, '2019-09-30', 'Pending', 'Amadie'),
(16, 44, 3, '2019-09-30', 'Pending', 'Amadie'),
(17, 48, 1, '2019-09-30', 'Shipped', 'Amadie'),
(18, 18, 1, '2019-09-30', 'Pending', 'Danuri'),
(19, 28, 5, '2019-09-30', 'Shipped', 'Danuri'),
(20, 46, 3, '2019-09-30', 'Shipped', 'Binu'),
(21, 47, 4, '2019-09-30', 'Shipped', 'Binu'),
(23, 24, 20, '2019-09-30', 'Shipped', 'Shaini'),
(24, 25, 8, '2019-09-30', 'Shipped', 'Shaini'),
(25, 8, 31, '2019-09-29', 'Pending', 'Nilan'),
(26, 8, 5, '2019-09-29', 'Pending', 'Nilan'),
(27, 8, 3, '2019-09-29', 'Pending', 'Nilan'),
(28, 12, 3, '2019-09-30', 'Shipped', 'Nilan');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_No` int(11) NOT NULL,
  `PAmount` float NOT NULL,
  `CAmount` float NOT NULL,
  `Discount` float NOT NULL,
  `Cus_ID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodID` int(11) NOT NULL,
  `prodname` varchar(200) NOT NULL,
  `productDesc` varchar(500) NOT NULL,
  `prodprice` float NOT NULL,
  `producQty` int(11) NOT NULL,
  `productIMG` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `productcatergory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodID`, `prodname`, `productDesc`, `prodprice`, `producQty`, `productIMG`, `author`, `productcatergory`) VALUES
(8, 'Mist of the dead', 'Back in print at last, James Lee Burkeâ€™s suspense-packed sixth novel ', 1500, 3, 'Mist of the Dead.jpg', 'J. K. Rowling', 'Adults'),
(9, 'Ghost House', 'Finalist for the Irish Book Award for Crime Fiction Book of the Year', 3000, 8, 'Ghost House.jpg', 'J.K Ryan', 'Adults'),
(10, 'Darkness', 'Villejeune, Florida. A secluded little town at the edge of a vast, eerie\r\n', 1200, 9, 'Darkness.jpg', 'John Saul', 'Adults'),
(11, 'Flowers in the Attic', 'A major Lifetime movie eventâ€”the novel that captured the', 2300, 40, 'Flowers in the Attic.jpg', 'V.C. Andrews', 'Adults'),
(12, 'A Rebel in Exile', 'In this revealing book Shane â€˜Kiwiâ€™ Martin details his tough childhood and upbringing i', 380, 2, 'A Rebel in Exile.jpeg', 'Andrew Williams', 'Biographies'),
(13, 'Ant Middleton', 'Without fear, thereâ€™s no challenge. Without challenge, thereâ€™s no growth', 560, 6, 'Ant Middleton.jpg', 'Yuhoo', 'Biographies'),
(16, 'Break Point', 'Special Forces soldier and host of SAS  Who Dares Wins.', 600, 20, 'Break Point.jpg', 'V.C. Andrews', 'Biographies'),
(17, 'Hope Heals', 'Katherine and Jay married right after college and sought adventure far from home.', 400, 19, 'Hope Heals.jpg', 'Yara Noman', 'Biographies'),
(18, 'The Price of Truth', 'Governess Juliana has dreams reaching far beyond the confines.', 400, 12, 'The Price of Truth.jpg', 'Ben Adams', 'Biographies'),
(19, '2018 Rugby Almanack', 'The Rugby Almanack is the worldâ€™s longest running rugby book of record. It was first published in 1935 ', 790, 10, '2018 Rugby Almanack.jpg', 'Clive Akers', 'E-Books'),
(20, 'Around That Time', 'Vogueâ€™s Book of Houses, Gardens, People (1968) was a landmark publication among decoratin', 1800, 50, 'Around That Time.jpg', 'Valentine Lawford, Ivan Sha', 'E-Books'),
(21, 'Florence', 'A magnificent, never-before-published collection of every painting and fresco on display in the Uffizi, ', 3500, 3, 'flower.jpg', 'Anja Grebe ', 'E-Books'),
(22, 'Renaissance', 'photographer of his time, developed an intense interest in seeing the world', 560, 35, 'renaissance.jpg', 'J.K Ryan', 'E-Books'),
(23, 'Six and Out', 'riginal edition, a hardback with dw. One of the great anthologies', 890, 44, 'Six and Out.jpg', 'Jack Poralled', 'E-Books'),
(24, 'Hacking', 'uy Top Products on eBay. Money Back Guarantee! Buyer Protection Program. Featured Collections. ', 890, 30, 'Hacking.jpg', 'Kevin Bunere', 'Educational'),
(25, 'Forensic Science', 'Covering a range of fundamental topics essential to modern forensic investigation, ', 780, 1, 'Forensic Science.jpg', 'John.N.Norby', 'Educational'),
(26, 'Real Time C++', 'Microcontroller systems in C++. It is divided into three parts plus several appendices. ', 4000, 50, 'Real Time C++.jfif', 'Andrew Williams', 'Educational'),
(27, 'The Mad Science Book', 'On January 30, Rubik applied for a patent on his cube (1975). On the next day, 17 years earlier.', 560, 30, 'madscience.jpg', 'Randy Banlof', 'Educational'),
(28, 'The Act', '\r\n  Trivium Test Prepâ€™s unofficial Police Officer Exam Study Guide 2019-2020: Police Officer Exam Preparat\r\n\r\n', 560, 65, 'The Act.png', 'jenny j. vikta', 'Educational'),
(29, 'Carrow Haunt', 'Remy is a tour guide for Carrow House, a notoriously haunted building.', 990, 60, 'Carrow Haunt.jpg', 'Darcy Coates,', 'Fiction'),
(30, 'Revival', 'Remy is a tour guide for Carrow House, a notoriously haunted building. ', 780, 50, 'Revival.jpg', 'Stefan king', 'Fiction'),
(31, 'Crucible', 'Arriving home on Christmas Eve, Commander Gray Pierce discovers his house ransacked.', 1200, 30, 'Crucible.jpg', 'James Rollins', 'Fiction'),
(32, 'The Hobbit', 'This is the latest version of lord of the ring', 750, 45, 'The Hobbit.jpg', 'J.R.R. Tolkien', 'Fiction'),
(33, 'Sherlock Holmes', 'this is the lateest version', 890, 60, 'Sherlock Holmes.jfif', 'Arthur Conan Doyle,', 'Fiction'),
(35, 'Burn Book', ': In no way do we condone any kind of bullying! This book is intended as a fun tribute to the movie .', 900, 98, 'Burn Book.jpg', 'R. George ', 'GuideBooks'),
(36, 'Kylo', 'From the Album Kylo (Star Wars Hello Parody) [feat. Solos by the Solos]', 1670, 60, 'Kylo.jpg', 'Le Done', 'GuideBooks'),
(37, 'SouthEast Asia', 'In the company of thirteen dwarves and the wizard Gandalf the Grey (Ian McKellen), ', 5000, 493, 'SouthEast Asia.jfif', 'J.R.R. Tolkien', 'GuideBooks'),
(38, 'Making Books', 'From the London Centre for Books Arts, the internationally recognized, artistrun, open-acces', 2000, 50, 'Making Books.jpg', 'S.K.Logoho', 'GuideBooks'),
(39, 'Reckless Love', 'This is the latest version.', 600, 25, 'Reckless Love.jpg', 'Cory Asbury ', 'GuideBooks'),
(40, 'Children of Run', 'sten to this song plus tens of millions more songs. Exclusive Prime pricing.', 800, 50, 'Children of Run.jpg', 'Adrion trykossky', 'Novels'),
(41, 'Dangerous Love', 'Ray Norman spent most of his life living in far-flung corners of the globe.', 550, 15, 'Dangerous Love.jpg', 'Ray Norman', 'Novels'),
(42, 'Invisible City', 'when the woman he loves is kidnapped by one of earth alien overlords,', 450, 25, 'Invisible City.jpg', 'Julia Dahl', 'Novels'),
(43, 'Adventures', 'We all have things weâ€™d like to do one day but work, family, school, money, and responsibilities', 580, 80, 'Adventures.jpg', 'Perly Poore', 'ShortStories'),
(44, 'Big Friendly Bear', 'Teenage outsider Adam sets off on a daring quest to find his long-lost father only to learn,', 380, 17, 'Big Friendly Bear.jpg', 'Cindy Barker', 'ShortStories'),
(45, 'Famous Five', 'The Famous Five are a group of children who have the sort of adventures.', 500, 35, 'Famous Five.jpg', 'Enid Blyton', 'ShortStories'),
(46, 'Bright Star', 'Timeless tale of the passionate romance between English poet John Keats and his beloved muse.', 620, 9, 'Bright Star.jpg', 'John Keats', 'Teen&Love'),
(47, 'Broken Throne', 'Return once more to the deadly and dazzling world of Red Queen.', 700, 6, 'Broken Throne.jpg', 'Victoria Aveyard', 'Teen&Love'),
(48, 'Deathless Girls', 'This is the breathtakingly imagined untold story of the brides of Dracula.', 600, 19, 'Deathless Girls.jpg', 'Kiran Millwood', 'Teen&Love');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrtor`
--
ALTER TABLE `administrtor`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `bucket`
--
ALTER TABLE `bucket`
  ADD PRIMARY KEY (`bucket_no`),
  ADD UNIQUE KEY `customer` (`customer`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartiD`),
  ADD KEY `cartFK1` (`prodID`),
  ADD KEY `cartFK2` (`cusID`);

--
-- Indexes for table `catergory`
--
ALTER TABLE `catergory`
  ADD PRIMARY KEY (`Cat_ID`),
  ADD UNIQUE KEY `category_typ` (`category_typ`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `f_name` (`f_name`);

--
-- Indexes for table `ordertb`
--
ALTER TABLE `ordertb`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `product` (`product`),
  ADD KEY `order_FK` (`cus_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_No`),
  ADD UNIQUE KEY `Cus_ID` (`Cus_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodID`),
  ADD KEY `prod_FK` (`productcatergory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bucket`
--
ALTER TABLE `bucket`
  MODIFY `bucket_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartiD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `catergory`
--
ALTER TABLE `catergory`
  MODIFY `Cat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ordertb`
--
ALTER TABLE `ordertb`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cartFK1` FOREIGN KEY (`prodID`) REFERENCES `product` (`prodID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cartFK2` FOREIGN KEY (`cusID`) REFERENCES `customer` (`f_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ordertb`
--
ALTER TABLE `ordertb`
  ADD CONSTRAINT `order_FK` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`f_name`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `order_FK2` FOREIGN KEY (`product`) REFERENCES `product` (`prodID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `pymntFK2` FOREIGN KEY (`Cus_ID`) REFERENCES `customer` (`f_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `prod_FK` FOREIGN KEY (`productcatergory`) REFERENCES `catergory` (`category_typ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
