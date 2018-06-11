-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 08:54 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microcms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `id` mediumint(9) NOT NULL,
  `label` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  `target` varchar(30) NOT NULL,
  `position` int(3) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `label`, `url`, `target`, `position`, `status`) VALUES
(1, 'Home', 'http://localhost/l/MicroCMS1/home', '', 0, 1),
(2, 'About Us', 'http://localhost/l/MicroCMS1/about-us', '', 1, 1),
(3, 'Contact Us', 'http://localhost/l/MicroCMS1/contact-us', '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` mediumint(9) NOT NULL,
  `user` mediumint(9) NOT NULL,
  `type` mediumint(9) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `label` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user`, `type`, `slug`, `label`, `title`, `header`, `body`) VALUES
(1, 1, 1, 'home', 'Home', 'Home', 'Welcome to MicroCMS 1', 'Etiam condimentum, tortor in vehicula congue, enim ex mollis mauris, et rhoncus magna turpis quis lacus. Sed scelerisque, eros vel ullamcorper placerat, nulla mauris viverra mauris, sed porta augue nisi ac ante. Quisque eleifend eu sem quis tempus. Nunc ultrices quam risus, accumsan feugiat velit egestas eget. Mauris semper nulla ac mauris tempus vestibulum. Maecenas vel libero nec ex fringilla varius. In magna nulla, convallis ut mi ac, tempor tincidunt metus. Praesent quis nisi a mi efficitur porta mattis suscipit augue. Morbi ultrices vitae neque in mattis. Morbi mauris velit, scelerisque tincidunt pulvinar vel, efficitur et erat. Curabitur suscipit, ligula in elementum pellentesque, nibh arcu finibus velit, sed fermentum nisl velit sed nisl. Nulla ac ex blandit, malesuada risus eget, aliquam odio. Curabitur dui eros, auctor at dui facilisis, posuere molestie libero. Sed molestie pulvinar rutrum. Duis aliquet velit id quam malesuada porta. Fusce et nisl viverra, vulputate diam eu, suscipit libero. Donec id tellus vel dui tristique placerat. Aliquam sed eros at risus vulputate luctus nec eu eros. Nam lacinia, felis vitae semper convallis, ante libero vulputate odio, quis lacinia tortor eros vel erat. Phasellus at risus sed augue fermentum bibendum tincidunt eget tortor. Fusce eu erat in risus tempus rhoncus vel vitae odio. Morbi sollicitudin in magna et facilisis. Proin tempor scelerisque lorem vitae sollicitudin. Maecenas vel imperdiet justo. Aliquam et eros accumsan, tempor urna vitae, semper odio. Vestibulum sollicitudin maximus quam vel viverra. Nam vel velit lobortis justo scelerisque porta. Mauris ut congue nulla. Nulla sollicitudin ullamcorper nibh et scelerisque. Phasellus ornare eleifend dui ac euismod. Duis id tortor id leo viverra laoreet. Cras cursus, nunc in sodales finibus, elit lorem rhoncus tellus, eu luctus massa lectus in purus. Ut magna urna, viverra ac dignissim quis, condimentum sit amet erat. Phasellus ac scelerisque massa. Etiam quis nisl volutpat, pharetra erat at, faucibus augue. Aliquam vitae interdum ipsum. Praesent vitae purus nec libero tempor ullamcorper vel id odio. In tempor semper tortor sed fermentum. Nulla hendrerit accumsan massa, nec sodales purus semper sit amet. Nunc tristique hendrerit felis quis tempus. Donec sapien metus, condimentum vitae urna non, dapibus pellentesque dui. Nulla elementum eu ligula sed aliquam. Nulla hendrerit orci nulla, eget tempor turpis lobortis non. Praesent in tincidunt magna. Cras a lacus in sapien gravida tincidunt at in mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non porttitor quam, id placerat est.'),
(2, 2, 1, 'about-us', 'About', 'About Us', 'About MicroCMS 1', '<img style=\"float: right;\" src=\"images/11.jpg\" width=\"360px\" height=\"225px\">\r\n\r\nQuisque molestie ligula quis facilisis porttitor. Maecenas sodales mollis malesuada. Nunc orci ipsum, pharetra quis lorem ut, accumsan efficitur metus. Etiam varius non justo in sagittis. Phasellus sit amet justo sapien. Mauris tempus commodo arcu, quis consectetur metus aliquam quis. Suspendisse fringilla, dolor id faucibus semper, odio ante scelerisque ex, quis feugiat nulla lorem a ex. Vivamus sagittis dignissim tellus, in sodales leo ornare a. Nulla facilisi. Maecenas aliquet commodo ultrices. Aenean nibh risus, tincidunt ac lacus nec, semper pulvinar ligula. Donec lacinia porta varius. Maecenas sit amet urna tortor.\r\n\r\nProin tempus posuere justo, quis rhoncus nisl fermentum sed. Praesent vestibulum est sapien, ac tempor felis tempor quis. Maecenas non placerat urna. Mauris vestibulum tortor vitae quam scelerisque tristique a sed enim. Sed lobortis lorem justo, et tempor risus imperdiet at. Vivamus accumsan lacus vel feugiat facilisis. Fusce finibus ante at quam auctor ornare et et lacus. Aliquam interdum ante fringilla lacus ultrices finibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet feugiat est, quis convallis ipsum. Cras elit augue, egestas eu nunc in, semper mollis augue. Praesent porta, nulla non pellentesque ultrices, turpis lectus malesuada neque, sed venenatis lacus justo eu sapien. Morbi dapibus venenatis consectetur. In condimentum ornare justo a vestibulum. Sed eu ultricies diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nNulla dui ante, interdum vel est sit amet, vestibulum euismod dolor. Mauris dignissim dui sit amet ante tincidunt, sed euismod purus facilisis. Sed sed odio turpis. Vivamus facilisis, augue ac mollis dictum, dolor nunc consectetur odio, vitae pellentesque sapien libero quis felis. Nam porta, risus vel tristique fringilla, massa purus pretium magna, vitae gravida augue purus vel diam.');

-- --------------------------------------------------------

--
-- Table structure for table `post_types`
--

CREATE TABLE `post_types` (
  `id` mediumint(9) NOT NULL,
  `label` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_types`
--

INSERT INTO `post_types` (`id`, `label`, `name`, `status`) VALUES
(1, 'Pages', 'page', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `label`, `value`) VALUES
('debug-status', 'Debug Status', '1'),
('site-title', 'Site Title', 'Dynamic 1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `first`, `last`, `email`, `password`, `status`) VALUES
(1, '1526323627702.jpg', 'Bill', 'Gates', 'bill@gates.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 1),
(2, '1526323708272.JPG', 'Steve', 'Jobs', 'steve@jobs.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 1),
(3, '1526323829107.jpg', 'Elon', 'Musk', 'elon@musk.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `post_types`
--
ALTER TABLE `post_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_types`
--
ALTER TABLE `post_types`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/*
<footer>
    <p>
        &copy;
        <span id="copyright">
            <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
        </span>
        | MicroCMS 1 is created by <a href="https://about.me/YashasviJaiswal" target="_blank">Yashasvi Jaiswal</a>.
    </p>
</footer>
*/
