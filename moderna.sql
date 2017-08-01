-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 06:31 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moderna`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE `tbl_admin_user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(80) NOT NULL,
  `userEmail` varchar(80) NOT NULL,
  `userPass` varchar(32) NOT NULL,
  `userNumber` varchar(25) NOT NULL,
  `userAddress` varchar(60) NOT NULL DEFAULT '#',
  `userCity` varchar(40) NOT NULL DEFAULT '#',
  `userCountry` varchar(40) NOT NULL DEFAULT '#',
  `roleId` int(3) NOT NULL,
  `userGender` int(2) DEFAULT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `userComment` text,
  `userAddDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userStatus` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_user`
--

INSERT INTO `tbl_admin_user` (`userId`, `userName`, `userEmail`, `userPass`, `userNumber`, `userAddress`, `userCity`, `userCountry`, `roleId`, `userGender`, `userImage`, `userComment`, `userAddDate`, `userStatus`) VALUES
(1, 'Mahbubul Alam', 'mahbubrahman5676@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '#', '#', '#', 1, 1, 'user-1500788232-26592.jpg', NULL, '2017-07-23 05:26:34', 0),
(2, 'Ibrahim', 'ibrahim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01774573275', '#', '#', '#', 4, 1, 'user-1500787932-83741.jpg', NULL, '2017-07-23 05:30:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user_role`
--

CREATE TABLE `tbl_admin_user_role` (
  `roleId` int(3) NOT NULL,
  `roleName` varchar(50) DEFAULT NULL,
  `roleStatus` tinyint(2) NOT NULL,
  `roleCreateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_user_role`
--

INSERT INTO `tbl_admin_user_role` (`roleId`, `roleName`, `roleStatus`, `roleCreateDate`) VALUES
(1, 'Owner', 2, '2017-07-23 04:52:15'),
(2, 'Author', 2, '2017-07-23 04:52:15'),
(3, 'Editor', 2, '2017-07-23 04:52:15'),
(4, 'Adminstration', 2, '2017-07-23 04:52:15'),
(5, 'Subscriber', 1, '2017-07-23 04:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `bannerId` int(11) NOT NULL,
  `bannerTitle` varchar(150) NOT NULL,
  `bannerDetails` text CHARACTER SET utf8 NOT NULL,
  `bannerImage` varchar(150) NOT NULL,
  `bannerCategory` int(5) NOT NULL,
  `bannerButton` varchar(50) NOT NULL,
  `bannerUploaderId` int(11) NOT NULL,
  `bannerUploaderName` varchar(50) NOT NULL,
  `bannerButtonUrl` varchar(120) NOT NULL,
  `bannerType` int(4) NOT NULL,
  `bannerUplodeDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`bannerId`, `bannerTitle`, `bannerDetails`, `bannerImage`, `bannerCategory`, `bannerButton`, `bannerUploaderId`, `bannerUploaderName`, `bannerButtonUrl`, `bannerType`, `bannerUplodeDate`) VALUES
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum assumenda at saepe reprehenderit. Deleniti, veniam accusamus consequatur reprehenderit. Accusamus minus, laudantium. Suscipit iure fugit ipsa ducimus odit. Repellat saepe nulla vero ad. Nesciunt optio vel voluptatum, nobis omnis molestiae architecto, ratione quod iure, similique enim porro quasi voluptatem velit officia, reiciendis iste libero illum aperiam. Delectus blanditiis provident sint voluptates incidunt laudantium, eaque accusantium ex sunt vero voluptas dicta ratione eligendi nihil dolorum non laborum fuga, officia nam neque id animi dolores! Soluta voluptatibus doloribus, provident ut. Amet odit officiis minus sed, commodi nobis soluta officia ducimus dolore doloremque fugit?', 'banner-1500790578-58807.jpg', 0, 'Click Me', 1, 'Mahbubul Alam', '', 2, '2017-07-23 06:16:18'),
(4, 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum assumenda at saepe reprehenderit. Deleniti, veniam accusamus consequatur reprehenderit. Accusamus minus, laudantium. Suscipit iure fugit ipsa ducimus odit. Repellat saepe nulla vero ad. Nesciunt optio vel voluptatum, nobis omnis molestiae architecto, ratione quod iure, similique enim porro quasi voluptatem velit officia, reiciendis iste libero illum aperiam. Delectus blanditiis provident sint voluptates incidunt laudantium, eaque accusantium ex sunt vero voluptas dicta ratione eligendi nihil dolorum non laborum fuga, officia nam neque id animi dolores! Soluta voluptatibus doloribus, provident ut. Amet odit officiis minus sed, commodi nobis soluta officia ducimus dolore doloremque fugit?', 'banner-1500790651-23933.jpg', 0, 'Click Here', 1, 'Mahbubul Alam', '', 2, '2017-07-23 06:17:31'),
(5, 'Amet odit officiis minus sed, commodi nobis soluta offici', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum assumenda at saepe reprehenderit. Deleniti, veniam accusamus consequatur reprehenderit. Accusamus minus, laudantium. Suscipit iure fugit ipsa ducimus odit. Repellat saepe nulla vero ad. Nesciunt optio vel voluptatum, nobis omnis molestiae architecto, ratione quod iure, similique enim porro quasi voluptatem velit officia, reiciendis iste libero illum aperiam. Delectus blanditiis provident sint voluptates incidunt laudantium, eaque accusantium ex sunt vero voluptas dicta ratione eligendi nihil dolorum non laborum fuga, officia nam neque id animi dolores! Soluta voluptatibus doloribus, provident ut. Amet odit officiis minus sed, commodi nobis soluta officia ducimus dolore doloremque fugit?', 'banner-1500790679-64992.jpg', 0, 'Read more', 1, 'Mahbubul Alam', '', 2, '2017-07-23 06:17:59'),
(6, 'Really is it work?', 'dooooooooor, betaaa valaaa lageee naa bee, toi konta cinta korree ni ree...', 'banner-1501259741-33176.jpg', 0, 'Mouse a Click kor', 2, 'Ibrahim', '', 1, '2017-07-28 16:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contactId` int(11) NOT NULL,
  `contactName` varchar(50) CHARACTER SET latin1 NOT NULL,
  `contactEmail` varchar(80) CHARACTER SET latin1 NOT NULL,
  `contactSubject` varchar(100) CHARACTER SET latin1 NOT NULL,
  `contactMessage` text NOT NULL,
  `contactMessageDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contactStatus` int(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contactId`, `contactName`, `contactEmail`, `contactSubject`, `contactMessage`, `contactMessageDate`, `contactStatus`) VALUES
(4, 'Mahbub', 'mahbub@gmail.com', 'bangladesh', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eaque nisi architecto accusantium esse labore, placeat repudiandae exercitationem nostrum. Officiis modi, quas distinctio? Dolore temporibus corporis natus illo saepe possimus, maiores, excepturi quos delectus, autem veritatis! Laboriosam perferendis, neque commodi, iure quod aperiam molestiae enim quis porro maiores fuga dolorum ipsum reiciendis nihil veniam corporis. Quam aliquid quaerat enim obcaecati assumenda doloremque quisquam omnis repellat nulla, fugiat architecto, vero quia eum possimus officia ipsum veritatis dignissimos dolore iure harum, ea a molestiae voluptatem ullam. Facere voluptates distinctio iste necessitatibus expedita nihil sit rem! Vel a quas voluptatibus laboriosam soluta es', '2017-07-22 10:39:50', 2),
(6, 'Tamim', 'tamim@gmail.com', 'gadha', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eaque nisi architecto accusantium esse labore, placeat repudiandae exercitationem nostrum. Officiis modi, quas distinctio? Dolore temporibus corporis natus illo saepe possimus, maiores, excepturi quos delectus, autem veritatis! Laboriosam perferendis, neque commodi, iure quod aperiam molestiae enim quis porro maiores fuga dolorum ipsum reiciendis nihil veniam corporis. Quam aliquid quaerat enim obcaecati assumenda doloremque quisquam omnis repellat nulla, fugiat architecto, vero quia eum possimus officia ipsum veritatis dignissimos dolore iure harum, ea a molestiae voluptatem ullam. Facere voluptates distinctio iste necessitatibus expedita nihil sit rem! Vel a quas voluptatibus laboriosam soluta es', '2017-07-22 10:41:33', 2),
(7, 'Ruhul', 'ruhul@gmail.com', 'Amnite', 'Hi, I\'m Rahul. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero quidem magnam repellendus quos, neque sequi eos ea distinctio dolorem tenetur corporis provident soluta reiciendis magni deleniti ut, ipsa eius molestiae eveniet itaque! Ipsum consequuntur voluptas debitis voluptatem quam, laborum earum asperiores iusto magnam obcaecati aperiam, quaerat sequi quae pariatur harum voluptates animi? Quod nulla rerum quasi dolorem dicta laborum sed, modi perferendis voluptatum magnam impedit sapiente repellat doloribus, blanditiis aspernatur. Labore, sed, tempore! Iste officia quisquam fuga, vero doloremque quis labore tenetur repudiandae a odit cum, quaerat vitae optio atque possimus! Repellat eius repellendus sapiente commodi, minus repudiandae quod quae.', '2017-07-22 18:04:48', 1),
(8, 'Shakib', 'shakib@gmail.com', 'subject', 'Hi, hello', '2017-07-29 13:44:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `galleryId` int(11) NOT NULL,
  `galleryImage` varchar(255) NOT NULL,
  `galleryURL` varchar(120) NOT NULL,
  `galleryImageUploadeTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `galleryUploaderId` int(3) NOT NULL,
  `galleryUploaderName` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_postId` int(11) NOT NULL,
  `post_postTitle` varchar(150) NOT NULL,
  `post_postDetails` text NOT NULL,
  `post_categoryId` int(11) NOT NULL,
  `post_postButtonText` varchar(40) NOT NULL,
  `post_postUploader` varchar(50) NOT NULL,
  `post_postUploaderId` int(5) NOT NULL,
  `post_postImage` varchar(255) NOT NULL,
  `post_postUploadeDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_postComment` int(5) NOT NULL,
  `post_postStatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_postId`, `post_postTitle`, `post_postDetails`, `post_categoryId`, `post_postButtonText`, `post_postUploader`, `post_postUploaderId`, `post_postImage`, `post_postUploadeDate`, `post_postComment`, `post_postStatus`) VALUES
(1, 'Mahbub is a great boy', 'You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know. You better know.', 5, 'Click here for more', 'Owner', 1, 'post-1501047030-73922.jpg', '2017-07-26 05:30:30', 0, 2),
(2, 'This is an example of standard post format', 'Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.', 1, 'Read Continue', 'Owner', 1, 'post-1501048272-22636.jpg', '2017-07-26 05:51:12', 0, 2),
(3, 'This is an example of standard post format', 'Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.', 1, 'Read Continue', 'Owner', 1, 'post-1501048305-21757.jpg', '2017-07-26 05:51:45', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_category`
--

CREATE TABLE `tbl_post_category` (
  `post_categoryId` int(11) NOT NULL,
  `post_categoryName` varchar(60) NOT NULL,
  `post_categoryStatus` tinyint(2) NOT NULL,
  `post_categoryCreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_category`
--

INSERT INTO `tbl_post_category` (`post_categoryId`, `post_categoryName`, `post_categoryStatus`, `post_categoryCreationDate`) VALUES
(1, 'Web design', 2, '2017-07-23 04:18:05'),
(2, 'Graphics design', 2, '2017-07-23 04:18:21'),
(3, 'Web development', 1, '2017-07-23 05:42:43'),
(4, 'Android app development', 2, '2017-07-23 05:43:09'),
(5, 'SEO', 2, '2017-07-23 05:45:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `roleId` (`roleId`);

--
-- Indexes for table `tbl_admin_user_role`
--
ALTER TABLE `tbl_admin_user_role`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`bannerId`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`galleryId`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_postId`),
  ADD KEY `post_categoryId` (`post_categoryId`);

--
-- Indexes for table `tbl_post_category`
--
ALTER TABLE `tbl_post_category`
  ADD PRIMARY KEY (`post_categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_admin_user_role`
--
ALTER TABLE `tbl_admin_user_role`
  MODIFY `roleId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `bannerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `galleryId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_post_category`
--
ALTER TABLE `tbl_post_category`
  MODIFY `post_categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_ibfk_1` FOREIGN KEY (`post_categoryId`) REFERENCES `tbl_post_category` (`post_categoryId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
