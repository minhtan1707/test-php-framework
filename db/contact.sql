-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 22, 2018 at 02:32 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `feature` tinyint(1) NOT NULL DEFAULT '0',
  `category_desc` text NOT NULL,
  `category_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `feature`, `category_desc`, `category_img`) VALUES
(1, 'Laptop', 1, 'Touchscreens, styluses, and Android apps, oh my! We tested 7 of the latest and greatest Chromebooks side-by-side to find the best one for every person. Chromebooks have made big leaps in the last year, some adding enough firepower and functionality to be used as a primary computer. However, all of those added abilities means an even more diverse range of products and thus more things to consider when buying a Chrome powered laptop.', 'noimage.jpg'),
(2, 'Mobile', 0, 'We encourage everyone to compare our prices. If you’re not with Kogan Mobile, you’re probably paying too much. Check out our amazing prices on prepaid mobile options.', 'phone.jpg'),
(3, 'Tablet', 0, 'We provide you the list of the best Tablets that are in and around. The selection is varied over various platforms. And simply the best choices based on utility, price-value and specifications feature in our elite list.', 'tablet.jpg'),
(4, 'TV', 1, 'The best TV we’ve tested available in a 48-49-50-inch size is the Sony XBR49X900F. The X900F is a great 4k TV with impressive picture quality. It can deliver deep and uniform blacks in a dark room due to the high contrast ratio and local dimming support. It has bright HDR highlights and rich, saturated colors.', 'tv-category.jpg'),
(5, 'Smart Watch', 0, 'Love them or hate them, wearables are the future. Although right now the technology seems mostly limited to smartwatches. Take a look at Amazon’s new wearable tech store, and it’s clear watches (and fitness bands) are by far the most popular type of wearable being developed and sold at the moment.', 'Smartwatches.jpg'),
(6, 'Speaker', 0, 'There was a time when Bluetooth speakers were like jelly beans: They were cheap, they all looked the same, and they were invariably of dubious quality. Times have changed. Every major audio manufacturer has at least one model on the market today, and most have several. If you haven’t listened to a Bluetooth speaker lately, you’re in for a very pleasant surprise.', 'speaker.jpg'),
(7, 'Lamp', 1, 'This is the lamp category', 'noimage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(19,2) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `product_id`, `quantity`, `price`, `order_id`) VALUES
(59, 25, 1, '600.00', 34),
(60, 24, 1, '200.00', 34),
(61, 26, 10, '800.00', 34),
(62, 27, 1, '800.00', 34),
(63, 24, 2, '200.00', 35),
(64, 27, 5, '800.00', 35);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` decimal(19,2) NOT NULL,
  `description` text NOT NULL,
  `image_file` text NOT NULL,
  `best_seller` tinyint(4) NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `seasonal` tinyint(4) NOT NULL,
  `trash` tinyint(4) NOT NULL DEFAULT '0',
  `trash_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `product_name`, `price`, `description`, `image_file`, `best_seller`, `feature`, `seasonal`, `trash`, `trash_date`) VALUES
(23, 1, 'Alienware 15 Gaming Laptop', '1199.00', '15-inch gaming laptop with the latest overclocked Intel® 6-Core™ CPU, upgraded cooling technology and dynamic overclocking and built with carbon-fiber for the ultimate gaming experience.</p>', 'alienware.jpg', 0, 1, 1, 0, '2018-11-17 11:14:49'),
(24, 3, 'Xiaomi Mi Pad 4 Tablet', '200.00', 'Equipped with a 8.0 inch touch display, brings your photos and videos to life. MIUI 9 OS ensures you more wonderful user experience. Powered by Qualcomm Snapdragon 660 processor, offers you smooth operation and stable multitasking experience. 13.0MP Rear-facing + 5.0MP front dual cameras for capturing memorable moments and high quality pictures in daily life. ', 'xiaomi-mipad.jpg', 1, 0, 1, 0, NULL),
(25, 4, ' Samsung 55\" 4K Ultra HD Smart LED Television ', '600.00', 'Let the cutting-edge technology of the Samsung 55\" 4K Ultra HD Smart LED Television transform your entertainment experience. The display is built with LED technology, so it enhances the colour and contrast of your favourite films and games. With a 4K Ultra HD panel, it will display your movies in lifelike colour and deep contrast. This Samsung Smart TV is great for easy access to all the best movies, shows, games and social apps. It has the Tizen TV operating system, which offers all the entertainment, personalisation and intelligence of your smartphone on the big screen.', 'samsung_tv.jpg', 1, 0, 1, 0, NULL),
(26, 5, 'Apple Watch Series 4', '800.00', 'Introducing Apple Watch Series 4. Fundamentally redesigned and re-engineered to help you stay even more active, healthy, and connected.', 'smart_watch.jpg', 1, 0, 1, 0, NULL),
(27, 2, 'Sony Xperia XZ (32GB, Blue)', '800.00', 'Packed with innovations in technology, the Sony Xperia XZ boasts a photo-pro’s camera, an intelligent battery and smart features that adapt to you. And it’s all delivered in a stunning, evolved design.', 'xperia_xz.png', 1, 0, 1, 0, NULL),
(28, 2, 'Samsung Galaxy Note8 Dual SIM (64GB, Midnight Black)', '1200.00', 'With the Samsung Galaxy Note8, the future is truly in your hands – and you’ll love the full screen display, the dual rear cameras and advanced security features it comes equipped with. The possibilities are endless with the Samsung Galaxy Note8. See the bigger picture, with a stunning edge-to-edge screen that makes writing emails, browsing the web and viewing photos and videos a delight. ', 'note9.jpg', 1, 1, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `status_changed_date` datetime DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `customer_name`, `customer_address`, `phone`, `email`, `status`, `status_changed_date`, `date_created`, `user_id`) VALUES
(34, 'Nguyen MInh Tan', '135/18 Ng Cuu Van', '01234654156', 'asd@test.com', 1, '2018-11-17 16:00:53', '2018-08-24 09:29:18', 1),
(35, 'map', 'abc', '1234', 'abcdef', 1, NULL, '2018-08-24 09:30:45', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) DEFAULT '0',
  `name` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `trash` tinyint(4) NOT NULL,
  `trash_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `admin`, `name`, `address`, `phone`, `email`, `trash`, `trash_date`) VALUES
(1, 'admin', 'admin', 1, 'Administrator', '', '', 'admin@test.com', 0, '2018-11-17 15:32:36'),
(2, 'user', 'user', 0, '', '', '', '', 0, NULL),
(4, 'mike', 'rasengan', 0, 'Mike Tanny', 'HCM city', '0123456789', 'tan@test.com', 0, NULL),
(5, 'miketanny', 'rasengan', 0, 'Mike', 'SG', '123456', 'mike@test.com', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `product_order` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
