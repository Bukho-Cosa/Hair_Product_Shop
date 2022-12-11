-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2022 at 07:41 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessory`
--

CREATE TABLE `accessory` (
  `image` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notype` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accessory`
--

INSERT INTO `accessory` (`image`, `id`, `name`, `notype`, `description`, `price`) VALUES
('https://i.pinimg.com/564x/12/16/9a/12169ad2869dfe918ff62da35938e128.jpg', 1, 'Sleep tight', 'Hair bonnet', 'Metalic, tie bonnet', 40),
('https://i.pinimg.com/564x/24/ff/b1/24ffb187e6da38185c991a51d007e6cf.jpg', 2, 'All the huurrrr', 'Hair bonnet', 'Metalic, elastic hair bonnet', 50),
('https://i.pinimg.com/564x/b7/4f/48/b74f48fc101d45c823e03b62160ebd32.jpg', 3, 'Daughter of Oshun', 'Hair bonnet', 'Edge lay, large, metalic bonnet.', 60),
('https://i.pinimg.com/564x/74/e1/12/74e1127939a04e76c9136aeeae78da8d.jpg', 4, 'Wig-cessories', 'Wig cap, Wig stand, wig band.', '3 Wig caps, a Wig stand, and a wig band.', 80),
('https://i.pinimg.com/564x/ca/3b/f2/ca3bf2c942606ef0f040c2eb26bb9272.jpg', 5, 'Lay me down', 'Hot comb', 'Electric hot comb', 180),
('https://i.pinimg.com/564x/7f/7b/9c/7f7b9c2167acb7d556f13a5cbd4095f3.jpg', 6, 'At Home', 'Bonnet hair drier', 'Black bonnet hair drier.', 180),
('https://images.pexels.com/photos/6831587/pexels-photo-6831587.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 7, 'Red sea', 'Hair durag', 'Red durag.', 99),
('https://images.pexels.com/photos/7327074/pexels-photo-7327074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 8, 'Mami Wata', 'Hair durag', 'Blue durag.', 99),
('https://images.pexels.com/photos/3844856/pexels-photo-3844856.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 9, 'Me Sonic', 'Hair scarf', 'Silk hair scarf', 80);

-- --------------------------------------------------------

--
-- Table structure for table `combs`
--

CREATE TABLE `combs` (
  `image` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notype` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `combs`
--

INSERT INTO `combs` (`image`, `id`, `name`, `notype`, `description`, `price`) VALUES
('https://i.pinimg.com/564x/df/4a/b3/df4ab3f8a95ab9c1011a38e9425d65f0.jpg1', 13, 'Take your Pick', 'Afro pick / Afro comb', 'Metal tooth, afro comb with black, plastic handle. ', '100'),
('https://images.pexels.com/photos/4857706/pexels-photo-4857706.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 14, 'Smooth day', 'Comb', 'Medium tooth, wooden comb.', '99'),
('https://images.pexels.com/photos/3992878/pexels-photo-3992878.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 15, 'Style and go', 'Fine tooth comb', 'Plastic, fine tooth combs. Thin base, wide top. Multiple colours.', '33'),
('https://i.pinimg.com/564x/3a/8c/f7/3a8cf7342fd3bd0501900da70db3208a.jpg', 16, 'Afro samurai', 'Afro pick / Afro comb', 'Black, plastic, fist handle. Metal, medium spaced teeth.', '100'),
('https://i.pinimg.com/564x/8f/83/5c/8f835c2385ab27d7eb0bc733d6e46ee4.jpg', 17, 'Mama Nature', 'Afro pick / Afro comb', 'Black, plastic, afro comb with multi-design handles.', '53'),
('https://i.pinimg.com/564x/ae/d5/3a/aed53ad49bb5bd99669dd878166fc7ab.jpg', 18, 'Beach day', 'Wide tooth comb', 'Black, wide tooth comb with curved, hanger tail.', '80'),
('https://i.pinimg.com/564x/4d/52/51/4d5251bd47901f1bfb05af0da261ebed.jpg', 19, 'Been chillin\'', 'Wide tooth comb', 'Black wide tooth comb with hook opening. ', '60'),
('https://i.pinimg.com/564x/d0/fc/a9/d0fca9e560323d12c56d93b0531268aa.jpg', 20, 'It\'s giving 80s', 'Fine tooth comb', 'Marble, brown, fine tooth comb.', '30'),
('https://i.pinimg.com/564x/b9/80/13/b98013b4b284010066e5426439ff6628.jpg', 21, 'Adore me', 'Dual tooth comb', 'Pink, fine tooth comb on the opposite side of a wide tooth comb.', '130'),
('https://i.pinimg.com/564x/57/ca/d9/57cad9c411b8127ca50001df7366e9eb.jpg', 22, 'I never miss', 'Rat tail comb', 'Black, plastic rat-tail comb, with metal tail. ', '45'),
('https://i.pinimg.com/564x/52/eb/be/52ebbed042008f92089ea7439b5d3521.jpg', 23, 'pre-purrrr', 'Detangling brush', 'Black, curvy detangling brush.', '40'),
('https://i.pinimg.com/564x/07/8a/f9/078af9decf1b2740307f87402b90e2f9.jpg', 24, 'Go knots!', 'Detangling brush', 'Detachable detangling brush. Multiple colours.', '60');

-- --------------------------------------------------------

--
-- Table structure for table `mousse`
--

CREATE TABLE `mousse` (
  `image` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notype` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mousse`
--

INSERT INTO `mousse` (`image`, `id`, `name`, `notype`, `description`, `price`) VALUES
('https://i.pinimg.com/564x/fd/e7/49/fde749269dfc4d448cdd3c9717bfd5dc.jpg', 1, 'Moistened', 'Mousse', 'Hair mousse.', 150),
('https://i.pinimg.com/564x/9b/8b/36/9b8b36cb82d9c2c52a4a06055ff35b15.jpg', 2, 'Protected', 'Mousse', 'Hair mousse', 150),
('https://i.pinimg.com/564x/b0/81/9f/b0819fd89013c9c8103ed72b5c5521a7.jpg', 3, 'Conditioning', 'Leave-in conditioner', 'Leave-in conditioner.', 150),
('https://i.pinimg.com/564x/df/5f/2c/df5f2c83f7dd314d23da3ba9e2d611ee.jpg', 4, 'Dripping', 'Leave-in conditioner', 'Leave-in conditioner.', 150),
('https://images.pexels.com/photos/8467972/pexels-photo-8467972.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 5, 'Supple', 'Mousse', 'Hair mousse.', 120),
('https://images.pexels.com/photos/8533224/pexels-photo-8533224.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 6, 'Bouncy', 'Hair cream', 'Hair cream.', 150),
('https://images.pexels.com/photos/11741343/pexels-photo-11741343.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 7, 'Hydrated', 'Moisturiser', 'Hair moisturiser.', 120),
('https://images.pexels.com/photos/4465124/pexels-photo-4465124.jpeg', 8, 'Rich', 'Hair cream', 'Hair cream.', 150),
('https://images.pexels.com/photos/6621462/pexels-photo-6621462.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 9, 'Pillowy', 'Mousse', 'Hair mousse.', 170),
('https://images.pexels.com/photos/5797999/pexels-photo-5797999.jpeg', 10, 'Fluffy', 'Moisturiser', 'Hair moisturiser', 100);

-- --------------------------------------------------------

--
-- Table structure for table `sealant`
--

CREATE TABLE `sealant` (
  `image` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notype` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sealant`
--

INSERT INTO `sealant` (`image`, `id`, `name`, `notype`, `description`, `price`) VALUES
('https://images.pexels.com/photos/8490222/pexels-photo-8490222.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 1, 'signed, sealed, delivered', 'Hair oil', 'Hair oil', 82),
('https://i.pinimg.com/564x/61/38/8e/61388e795131475fe406700ad4bcb618.jpg', 2, 'Coco-Nutty', 'Hair oil', 'Hair oil.', 90),
('https://i.pinimg.com/564x/af/2c/b0/af2cb0c74326559b8c6a4822a3cb984a.jpg', 3, 'Basted', 'Hair butter', 'Shea butter.', 180),
('https://images.pexels.com/photos/6694216/pexels-photo-6694216.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 4, 'Drippy', 'Hair oil', 'Hair oil', 66),
('https://i.pinimg.com/564x/cd/c1/71/cdc1714f0bc06e6f740653a24f09290e.jpg', 5, 'Honey! I\'m home!', 'Hair oil', 'Honey hair oil.', 265),
('https://i.pinimg.com/564x/6b/8e/54/6b8e54007ccfcee709af4b990843508f.jpg', 6, 'Locked!', 'Hair butter', 'Hair butter', 65),
('https://i.pinimg.com/564x/22/41/0c/22410cd5907ca8f53e1620638d7666ea.jpg', 7, 'Here I smell', 'Hair oil', 'Argan oil.', 70),
('https://i.pinimg.com/564x/cd/94/33/cd943310074f9696ff869aeb9bfd26a9.jpg', 8, 'Grown', 'Hair oil', 'Jamaican black castor oil', 420),
('https://i.pinimg.com/564x/af/8d/55/af8d5560222e8f813aab7c5ef01ee42a.jpg', 9, 'Proteccc, Attaccc and Be Snacc', 'Hair oil', 'Linseed oil', 44),
('https://i.pinimg.com/564x/d4/52/24/d452242e058d993cee96e116e33e3de6.jpg', 10, 'Floor length', 'Hair oil', 'Rosemary essential oil.', 135),
('https://i.pinimg.com/564x/9d/ff/8b/9dff8bd793e1afa46ebc22fa7aade5ca.jpg', 11, 'The Key', 'Hair oil', 'Peppermint essential oil', 136),
('https://i.pinimg.com/564x/48/47/51/484751bb0c6ede0f7fc0f31cf57dddcf.jpg', 12, 'Feed on Me', 'Hair oil', 'Extra virgin olive oil', 323);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combs`
--
ALTER TABLE `combs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mousse`
--
ALTER TABLE `mousse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sealant`
--
ALTER TABLE `sealant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessory`
--
ALTER TABLE `accessory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `combs`
--
ALTER TABLE `combs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `mousse`
--
ALTER TABLE `mousse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sealant`
--
ALTER TABLE `sealant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
