-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 26, 2021 at 05:49 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s&i_software_solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `stockmf`
--

DROP TABLE IF EXISTS `stockmf`;
CREATE TABLE IF NOT EXISTS `stockmf` (
  `Item_code` varchar(50) NOT NULL,
  `Item_name` varchar(50) NOT NULL,
  `Item_price` int(11) NOT NULL,
  `Available_quantity` int(11) NOT NULL,
  `Stock_balance` int(11) NOT NULL,
  `Stock_level` varchar(50) NOT NULL,
  `Last_date_of_transaction` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockmf`
--

INSERT INTO `stockmf` (`Item_code`, `Item_name`, `Item_price`, `Available_quantity`, `Stock_balance`, `Stock_level`, `Last_date_of_transaction`) VALUES
('R001GB', 'RAM_1GB', 850, 50, 100, 'Good', '2021-06-23'),
('R002GB', 'RAM_2GB', 1200, 25, 150, 'Good', '2021-06-25'),
('R004GB', 'RAM_4GB', 2400, 50, 100, 'Good', '2021-06-26'),
('C001', 'CPU_Intel', 5000, 80, 100, 'Good', '2021-06-26'),
('C002', 'CPU_AMD', 4400, 30, 100, 'Good', '2021-06-26'),
('G002GB', 'GPU_2GB', 12400, 50, 100, 'Good', '2021-06-26'),
('G004GB', 'GPU_4GB', 24800, 30, 100, 'Good', '2021-06-26'),
('H00512GB', 'HDD_512GB', 3400, 90, 100, 'Good', '2021-06-26'),
('H001TB', 'HDD_1TB', 10000, 10, 50, 'Good', '2021-06-26'),
('S00256GB', 'SSD_256GB', 5000, 20, 60, 'Good', '2021-06-26'),
('S00512GB', 'SSD_512GB', 10000, 20, 30, 'Good', '2021-06-26'),
('S001TB', 'SSD_1TB', 2500, 10, 10, 'Good', '2021-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `Supplier_number` varchar(50) NOT NULL,
  `Supplier_name` varchar(50) NOT NULL,
  `Item_type` varchar(50) NOT NULL,
  `Contact_no` varchar(50) NOT NULL,
  `Email_address` varchar(50) NOT NULL,
  `Registration_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_number`, `Supplier_name`, `Item_type`, `Contact_no`, `Email_address`, `Registration_date`) VALUES
('S0001', 'Shehan Ranasinghe', 'RAM', '0767523264', 'shehanranasinghe@gmail.com', '2021-06-25'),
('S0002', 'Ruvin', 'Hard_Disc', '0745689456', 'ruvinshehan@gamil.com', '2021-06-25'),
('S0003', 'Ishan Pathirana', 'SSD', '0746123597', 'ishanpathirana@gamil.com', '2021-06-25'),
('S0004', 'Shavin Lakdinu', 'GPU_NVIDIA', '0773465291', 'shavinlakdinu@yahoo.com', '2021-06-25'),
('S0005', 'Naveen Dilrukshan', 'GPU_Intel', '0776958423', 'naveendil@hotmail.com', '2021-06-25'),
('S0006', 'Sithija Sandeepa', 'CPU_Intel', '0712589101', 'sithijasandeepa@outlook.com', '2021-06-25'),
('S0007', 'Hansitha Amarasinghe', 'CPU_AMD', '0752589481', 'hansithaA@yahoo.com', '2021-06-25'),
('S0008', 'Supun Ravishan', 'Casing', '0777784562', 'supunravishan2001@yahoo.com', '2021-06-25'),
('S0009', 'Shehan Rangika', 'Fans', '0789456123', 'shehanRangika@gamil.com', '2021-06-25'),
('S00010', 'Pathirana', 'Motherboard', '0754816293', 'pathirana19890204@gamil.com', '2021-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `transpf`
--

DROP TABLE IF EXISTS `transpf`;
CREATE TABLE IF NOT EXISTS `transpf` (
  `Item_code` varchar(50) NOT NULL,
  `Item_name` varchar(50) NOT NULL,
  `Transaction_type` varchar(50) NOT NULL,
  `Transaction_quantity` int(11) NOT NULL,
  `Transaction_amount` int(11) NOT NULL,
  `New_stock_balance` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transpf`
--

INSERT INTO `transpf` (`Item_code`, `Item_name`, `Transaction_type`, `Transaction_quantity`, `Transaction_amount`, `New_stock_balance`) VALUES
('R001GB', 'RAM_1GB', 'Cash', 20, 17000, 50),
('R002GB', 'RAM_2GB', 'Cash', 10, 12000, 140),
('R004GB', 'RAM_4GB', 'Cash', 10, 12500, 50),
('C001', 'CPU_Intel', 'Cash', 5, 569900, 50),
('C002', 'CPU_AMD', 'Credit_Card', 20, 90000, 30),
('G002GB', 'GPU_2GB', 'Cash', 50, 45987, 60),
('G004GB', 'GPU_4GB', 'Debit_Card', 50, 132456, 15),
('H00512GB', 'HDD_512GB', 'Cash', 20, 155489, 20),
('H001TB', 'HDD_1TB', 'Credit_Card', 10, 107898, 40),
('S00256GB', 'SSD_256GB', 'Cash', 5, 246897, 16);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
