-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 08:31 AM
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
(2, 'Ibrahim', 'ibrahim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01774573275', '#', '#', '#', 4, 1, 'user-1500787932-83741.jpg', NULL, '2017-07-23 05:30:32', 0),
(3, 'Mitul Ahmed', 'mitul@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01774573275', '#', '#', '#', 3, 1, NULL, NULL, '2017-08-03 14:17:49', 0);

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
(5, 'Subscriber', 2, '2017-07-23 04:52:15');

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
-- Table structure for table `tbl_description`
--

CREATE TABLE `tbl_description` (
  `value` varchar(20) NOT NULL,
  `website_heading` varchar(100) NOT NULL,
  `companyName` varchar(40) NOT NULL,
  `companyAddress` varchar(70) NOT NULL,
  `companyPhone` varchar(35) NOT NULL,
  `companyEmail` varchar(35) NOT NULL,
  `copyright` varchar(30) NOT NULL,
  `facebookUrl` varchar(50) NOT NULL,
  `twitterUrl` varchar(50) NOT NULL,
  `linkedinUrl` varchar(50) NOT NULL,
  `pinterestUrl` varchar(50) NOT NULL,
  `googleplusUrl` varchar(50) NOT NULL,
  `websiteLogo` varchar(100) NOT NULL,
  `companyOwner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_description`
--

INSERT INTO `tbl_description` (`value`, `website_heading`, `companyName`, `companyAddress`, `companyPhone`, `companyEmail`, `copyright`, `facebookUrl`, `twitterUrl`, `linkedinUrl`, `pinterestUrl`, `googleplusUrl`, `websiteLogo`, `companyOwner`) VALUES
('company_details', '', 'Mahbubul company Inc', 'Sukrabad, Dhanmondi Bangladesh', '+88 01774-573275', 'mahbubulalam5676@gmail.com', '', '', '', '', '', '', '', ''),
('company_owner', '', '', '', '', '', '', '', '', '', '', '', '', 'Mahbubul Alam'),
('copyright', '', '', '', '', '', 'Mahbubul Alam Mahbub', '', '', '', '', '', '', ''),
('logo', '', '', '', '', '', '', '', '', '', '', '', 'websiteLogo.jpg', ''),
('social_url', '', '', '', '', '', '', 'https://www.facebook.com/mahbub5676', 'https://www.twitter.com/mahbub5676', 'https://www.linkedin.com/in/mahbubul-alam-a2a94a13', 'https://www.pinterest.com/mahbubrahman567/', 'https://plus.google.com/100828625281391770524', '', ''),
('website_heading', 'Mahbubul Business of Export And Import', '', '', '', '', '', '', '', '', '', '', '', '');

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
  `galleryUploaderName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`galleryId`, `galleryImage`, `galleryURL`, `galleryImageUploadeTime`, `galleryUploaderId`, `galleryUploaderName`) VALUES
(4, 'gallery-1501767935-11963.jpg', '', '2017-08-03 13:45:35', 1, 'Mahbubul Alam'),
(5, 'gallery-1501769332-50239.jpg', 'https://www.facebook.com/mahbub5676', '2017-08-03 14:08:52', 1, 'Mahbubul Alam'),
(6, 'gallery-1501769339-55763.jpg', '', '2017-08-03 14:08:59', 1, 'Mahbubul Alam'),
(7, 'gallery-1501769345-30325.jpg', '', '2017-08-03 14:09:05', 1, 'Mahbubul Alam'),
(8, 'gallery-1501769351-12729.jpg', '', '2017-08-03 14:09:11', 1, 'Mahbubul Alam'),
(9, 'gallery-1501769357-40136.jpg', '', '2017-08-03 14:09:17', 1, 'Mahbubul Alam'),
(10, 'gallery-1501769361-14852.jpg', '', '2017-08-03 14:09:21', 1, 'Mahbubul Alam'),
(11, 'gallery-1501769448-97416.jpg', 'https://www.facebook.com/mahbub5676', '2017-08-03 14:10:48', 1, 'Mahbubul Alam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menuId` int(11) NOT NULL,
  `menuName` varchar(50) NOT NULL,
  `menuUrl` varchar(60) NOT NULL,
  `menuUploaderId` int(3) NOT NULL,
  `menuStatus` int(2) NOT NULL,
  `menuUploadeDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `menuPosition` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menuId`, `menuName`, `menuUrl`, `menuUploaderId`, `menuStatus`, `menuUploadeDate`, `menuPosition`) VALUES
(2, 'Portfolio', 'portfolio.php', 1, 2, '2017-08-03 18:59:06', 2),
(3, 'Blog', 'blog.php', 1, 2, '2017-08-03 18:59:21', 3),
(4, 'Contact', 'contact.php', 1, 2, '2017-08-03 18:59:48', 4),
(5, 'Home', 'index.php', 1, 2, '2017-08-03 19:08:14', 1),
(6, 'Feature', 'feature.php', 1, 1, '2017-08-03 19:29:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pageandfeature`
--

CREATE TABLE `tbl_pageandfeature` (
  `pId` int(11) NOT NULL,
  `pTitle` varchar(110) NOT NULL,
  `pIconClass` varchar(40) NOT NULL,
  `pDetails` text NOT NULL,
  `pCategory` int(11) NOT NULL,
  `pStatus` int(11) NOT NULL,
  `pUploaderId` int(11) NOT NULL,
  `pUploadedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pageandfeature`
--

INSERT INTO `tbl_pageandfeature` (`pId`, `pTitle`, `pIconClass`, `pDetails`, `pCategory`, `pStatus`, `pUploaderId`, `pUploadedDate`) VALUES
(1, 'Fully responsive', 'fa fa-desktop fa-3x', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam voluptatem modi qui fugiat aspernatur iste reprehenderit maxime est sit, consectetur expedita autem sint molestias error vitae enim esse explicabo ut voluptas, tenetur quisquam inventore sed earum. Dolor voluptatum reprehenderit modi commodi voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad suscipit soluta quam porro consequatur, incidunt assumenda dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate dolore consectetur iusto fuga at eius laboriosam velit, magni in? Dicta recusandae molestiae libero, consectetur ratione, perferendis quibusdam iste odit tempora consequuntur praesentium soluta, quia molestias sapiente repudiandae reiciendis vitae corporis consequatur ad. Labore eius, laboriosam deserunt illum veritatis debitis et, alias cupiditate expedita voluptatum veniam odio quisquam earum a perferendis in vel, ab voluptates ipsam harum quidem. Praesentium voluptatem quos corporis quas dolores delectus ea adipisci at doloribus iusto amet sint perspiciatis quod eligendi, distinctio vitae, quaerat dignissimos rem recusandae est quam repellendus, eos quasi tempore. Praesentium nulla optio sapiente repudiandae voluptate nam saepe blanditiis soluta porro earum error quas officia ab debitis, dolores quo commodi eveniet nihil dolorum veniam nobis consequatur. Harum ea officiis dicta voluptas dolorem culpa repellat accusamus totam, libero suscipit est quia nobis, sit atque nisi quam beatae delectus qui magni quis architecto. Sunt similique, deleniti minus dolorem mollitia quaerat quia ipsam amet at voluptatum beatae, saepe. Veritatis ipsam voluptatem, dolor non fugit natus amet delectus pariatur autem provident in unde harum tempore beatae, error, obcaecati rerum voluptatibus magnam minima veniam. Deserunt similique dolorum, ea maxime dolores. Dignissimos culpa animi veritatis optio, sit adipisci, accusantium, aperiam id saepe alias ab accusamus quam voluptatum nisi molestiae obcaecati! Nesciunt deleniti cum totam eos similique fuga placeat animi aliquid nobis, illo dolore officia dolorum nemo pariatur quibusdam vel excepturi magnam dolor quas, blanditiis labore. Reprehenderit voluptate, obcaecati ex pariatur tenetur possimus illum rem veritatis nemo molestiae est beatae ullam esse fugit molestias expedita numquam velit deleniti, sed. Quidem, error, repellendus! Dolores, dicta sapiente ipsum? Assumenda praesentium officia, dolor. Ducimus rem vitae blanditiis fugiat excepturi natus minus veritatis fugit nobis perferendis. Perferendis in illum minus quaerat reiciendis, nostrum. Id minus odit assumenda rem, impedit tempore, commodi ea atque maxime sequi eius pariatur autem et, magnam in harum consequatur illo ipsum ab eaque nihil eveniet voluptates dicta error. Cupiditate, libero. Temporibus dolores distinctio magnam assumenda accusantium alias aperiam velit dolorum quasi laboriosam laborum, pariatur accusamus nostrum fugit illum odit necessitatibus nisi adipisci cum cupiditate nesciunt reiciendis aliquid. Atque quidem reprehenderit, quo omnis modi iure officiis accusantium alias dolorum. Cum, natus, fuga. Veniam, sunt!', 1, 2, 1, '2017-08-08 01:22:33'),
(2, 'Modern Style', 'fa fa-star-o fa-3x', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam voluptatem modi qui fugiat aspernatur iste reprehenderit maxime est sit, consectetur expedita autem sint molestias error vitae enim esse explicabo ut voluptas, tenetur quisquam inventore sed earum. Dolor voluptatum reprehenderit modi commodi voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad suscipit soluta quam porro consequatur, incidunt assumenda dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate dolore consectetur iusto fuga at eius laboriosam velit, magni in? Dicta recusandae molestiae libero, consectetur ratione, perferendis quibusdam iste odit tempora consequuntur praesentium soluta, quia molestias sapiente repudiandae reiciendis vitae corporis consequatur ad. Labore eius, laboriosam deserunt illum veritatis debitis et, alias cupiditate expedita voluptatum veniam odio quisquam earum a perferendis in vel, ab voluptates ipsam harum quidem. Praesentium voluptatem quos corporis quas dolores delectus ea adipisci at doloribus iusto amet sint perspiciatis quod eligendi, distinctio vitae, quaerat dignissimos rem recusandae est quam repellendus, eos quasi tempore. Praesentium nulla optio sapiente repudiandae voluptate nam saepe blanditiis soluta porro earum error quas officia ab debitis, dolores quo commodi eveniet nihil dolorum veniam nobis consequatur. Harum ea officiis dicta voluptas dolorem culpa repellat accusamus totam, libero suscipit est quia nobis, sit atque nisi quam beatae delectus qui magni quis architecto. Sunt similique, deleniti minus dolorem mollitia quaerat quia ipsam amet at voluptatum beatae, saepe. Veritatis ipsam voluptatem, dolor non fugit natus amet delectus pariatur autem provident in unde harum tempore beatae, error, obcaecati rerum voluptatibus magnam minima veniam. Deserunt similique dolorum, ea maxime dolores. Dignissimos culpa animi veritatis optio, sit adipisci, accusantium, aperiam id saepe alias ab accusamus quam voluptatum nisi molestiae obcaecati! Nesciunt deleniti cum totam eos similique fuga placeat animi aliquid nobis, illo dolore officia dolorum nemo pariatur quibusdam vel excepturi magnam dolor quas, blanditiis labore. Reprehenderit voluptate, obcaecati ex pariatur tenetur possimus illum rem veritatis nemo molestiae est beatae ullam esse fugit molestias expedita numquam velit deleniti, sed. Quidem, error, repellendus! Dolores, dicta sapiente ipsum? Assumenda praesentium officia, dolor. Ducimus rem vitae blanditiis fugiat excepturi natus minus veritatis fugit nobis perferendis. Perferendis in illum minus quaerat reiciendis, nostrum. Id minus odit assumenda rem, impedit tempore, commodi ea atque maxime sequi eius pariatur autem et, magnam in harum consequatur illo ipsum ab eaque nihil eveniet voluptates dicta error. Cupiditate, libero. Temporibus dolores distinctio magnam assumenda accusantium alias aperiam velit dolorum quasi laboriosam laborum, pariatur accusamus nostrum fugit illum odit necessitatibus nisi adipisci cum cupiditate nesciunt reiciendis aliquid. Atque quidem reprehenderit, quo omnis modi iure officiis accusantium alias dolorum. Cum, natus, fuga. Veniam, sunt!', 1, 2, 1, '2017-08-08 01:22:33'),
(3, 'Customizable', 'fa fa-film fa-3x', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam voluptatem modi qui fugiat aspernatur iste reprehenderit maxime est sit, consectetur expedita autem sint molestias error vitae enim esse explicabo ut voluptas, tenetur quisquam inventore sed earum. Dolor voluptatum reprehenderit modi commodi voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad suscipit soluta quam porro consequatur, incidunt assumenda dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate dolore consectetur iusto fuga at eius laboriosam velit, magni in? Dicta recusandae molestiae libero, consectetur ratione, perferendis quibusdam iste odit tempora consequuntur praesentium soluta, quia molestias sapiente repudiandae reiciendis vitae corporis consequatur ad. Labore eius, laboriosam deserunt illum veritatis debitis et, alias cupiditate expedita voluptatum veniam odio quisquam earum a perferendis in vel, ab voluptates ipsam harum quidem. Praesentium voluptatem quos corporis quas dolores delectus ea adipisci at doloribus iusto amet sint perspiciatis quod eligendi, distinctio vitae, quaerat dignissimos rem recusandae est quam repellendus, eos quasi tempore. Praesentium nulla optio sapiente repudiandae voluptate nam saepe blanditiis soluta porro earum error quas officia ab debitis, dolores quo commodi eveniet nihil dolorum veniam nobis consequatur. Harum ea officiis dicta voluptas dolorem culpa repellat accusamus totam, libero suscipit est quia nobis, sit atque nisi quam beatae delectus qui magni quis architecto. Sunt similique, deleniti minus dolorem mollitia quaerat quia ipsam amet at voluptatum beatae, saepe. Veritatis ipsam voluptatem, dolor non fugit natus amet delectus pariatur autem provident in unde harum tempore beatae, error, obcaecati rerum voluptatibus magnam minima veniam. Deserunt similique dolorum, ea maxime dolores. Dignissimos culpa animi veritatis optio, sit adipisci, accusantium, aperiam id saepe alias ab accusamus quam voluptatum nisi molestiae obcaecati! Nesciunt deleniti cum totam eos similique fuga placeat animi aliquid nobis, illo dolore officia dolorum nemo pariatur quibusdam vel excepturi magnam dolor quas, blanditiis labore. Reprehenderit voluptate, obcaecati ex pariatur tenetur possimus illum rem veritatis nemo molestiae est beatae ullam esse fugit molestias expedita numquam velit deleniti, sed. Quidem, error, repellendus! Dolores, dicta sapiente ipsum? Assumenda praesentium officia, dolor. Ducimus rem vitae blanditiis fugiat excepturi natus minus veritatis fugit nobis perferendis. Perferendis in illum minus quaerat reiciendis, nostrum. Id minus odit assumenda rem, impedit tempore, commodi ea atque maxime sequi eius pariatur autem et, magnam in harum consequatur illo ipsum ab eaque nihil eveniet voluptates dicta error. Cupiditate, libero. Temporibus dolores distinctio magnam assumenda accusantium alias aperiam velit dolorum quasi laboriosam laborum, pariatur accusamus nostrum fugit illum odit necessitatibus nisi adipisci cum cupiditate nesciunt reiciendis aliquid. Atque quidem reprehenderit, quo omnis modi iure officiis accusantium alias dolorum. Cum, natus, fuga. Veniam, sunt!', 1, 2, 1, '2017-08-08 01:22:33'),
(4, 'Privacy', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam voluptatem modi qui fugiat aspernatur iste reprehenderit maxime est sit, consectetur expedita autem sint molestias error vitae enim esse explicabo ut voluptas, tenetur quisquam inventore sed earum. Dolor voluptatum reprehenderit modi commodi voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad suscipit soluta quam porro consequatur, incidunt assumenda dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate dolore consectetur iusto fuga at eius laboriosam velit, magni in? Dicta recusandae molestiae libero, consectetur ratione, perferendis quibusdam iste odit tempora consequuntur praesentium soluta, quia molestias sapiente repudiandae reiciendis vitae corporis consequatur ad. Labore eius, laboriosam deserunt illum veritatis debitis et, alias cupiditate expedita voluptatum veniam odio quisquam earum a perferendis in vel, ab voluptates ipsam harum quidem. Praesentium voluptatem quos corporis quas dolores delectus ea adipisci at doloribus iusto amet sint perspiciatis quod eligendi, distinctio vitae, quaerat dignissimos rem recusandae est quam repellendus, eos quasi tempore. Praesentium nulla optio sapiente repudiandae voluptate nam saepe blanditiis soluta porro earum error quas officia ab debitis, dolores quo commodi eveniet nihil dolorum veniam nobis consequatur. Harum ea officiis dicta voluptas dolorem culpa repellat accusamus totam, libero suscipit est quia nobis, sit atque nisi quam beatae delectus qui magni quis architecto. Sunt similique, deleniti minus dolorem mollitia quaerat quia ipsam amet at voluptatum beatae, saepe. Veritatis ipsam voluptatem, dolor non fugit natus amet delectus pariatur autem provident in unde harum tempore beatae, error, obcaecati rerum voluptatibus magnam minima veniam. Deserunt similique dolorum, ea maxime dolores. Dignissimos culpa animi veritatis optio, sit adipisci, accusantium, aperiam id saepe alias ab accusamus quam voluptatum nisi molestiae obcaecati! Nesciunt deleniti cum totam eos similique fuga placeat animi aliquid nobis, illo dolore officia dolorum nemo pariatur quibusdam vel excepturi magnam dolor quas, blanditiis labore. Reprehenderit voluptate, obcaecati ex pariatur tenetur possimus illum rem veritatis nemo molestiae est beatae ullam esse fugit molestias expedita numquam velit deleniti, sed. Quidem, error, repellendus! Dolores, dicta sapiente ipsum? Assumenda praesentium officia, dolor. Ducimus rem vitae blanditiis fugiat excepturi natus minus veritatis fugit nobis perferendis. Perferendis in illum minus quaerat reiciendis, nostrum. Id minus odit assumenda rem, impedit tempore, commodi ea atque maxime sequi eius pariatur autem et, magnam in harum consequatur illo ipsum ab eaque nihil eveniet voluptates dicta error. Cupiditate, libero. Temporibus dolores distinctio magnam assumenda accusantium alias aperiam velit dolorum quasi laboriosam laborum, pariatur accusamus nostrum fugit illum odit necessitatibus nisi adipisci cum cupiditate nesciunt reiciendis aliquid. Atque quidem reprehenderit, quo omnis modi iure officiis accusantium alias dolorum. Cum, natus, fuga. Veniam, sunt!', 2, 2, 1, '2017-08-08 01:22:33'),
(5, 'Setting', '', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum molestiae nihil ut maxime, inventore consequatur eaque quibusdam error, repellendus non libero quasi vero odit ipsa! Iure nobis dolor eius adipisci, similique. Porro nostrum blanditiis iste deleniti laudantium nihil reiciendis inventore id! Rem assumenda, iste officia voluptate odio, harum accusamus voluptatum aperiam repellendus sunt quos voluptatibus nostrum quia dolorum, officiis libero autem mollitia maiores eum ab nam? Fuga sit suscipit laborum non quaerat voluptatibus eligendi dicta explicabo officia vero totam architecto animi corporis atque reprehenderit ullam consequatur, tenetur vitae repellat eaque hic. Quisquam qui natus quas minus reiciendis atque aspernatur voluptate.&lt;/p&gt;', 1, 1, 1, '2017-08-08 01:22:33'),
(6, 'Setting', '', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum molestiae nihil ut maxime, inventore consequatur eaque quibusdam error, repellendus non libero quasi vero odit ipsa! Iure nobis dolor eius adipisci, similique. Porro nostrum blanditiis iste deleniti laudantium nihil reiciendis inventore id! Rem assumenda, iste officia voluptate odio, harum accusamus voluptatum aperiam repellendus sunt quos voluptatibus nostrum quia dolorum, officiis libero autem mollitia maiores eum ab nam? Fuga sit suscipit laborum non quaerat voluptatibus eligendi dicta explicabo officia vero totam architecto animi corporis atque reprehenderit ullam consequatur, tenetur vitae repellat eaque hic. Quisquam qui natus quas minus reiciendis atque aspernatur voluptate.&lt;/p&gt;', 2, 2, 1, '2017-08-08 01:22:33'),
(12, 'Adusting', 'fa fa-adjust fa-3x', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum repudiandae culpa enim inventore nostrum delectus laboriosam laudantium atque temporibus repellendus ea tenetur, laborum ad quis! Obcaecati cum commodi, inventore sit fugit aut ipsum corporis nesciunt, quaerat ut mollitia molestiae rem a amet praesentium in error sint qui nam reprehenderit maiores ad. Repellendus sit ducimus eaque veritatis eum, obcaecati, repellat velit aliquid tempore ipsa dolorum ipsum ratione explicabo corporis amet, adipisci rem exercitationem dicta, cum eius. Ratione amet eaque vitae eveniet doloremque itaque odit voluptates beatae, quibusdam sapiente ex soluta ipsum aliquid praesentium facere iste, quas earum labore possimus id ut.&lt;/p&gt;', 1, 2, 1, '2017-08-08 01:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `portfolioId` int(11) NOT NULL,
  `portfolioTitle` varchar(255) NOT NULL,
  `portfolioName` varchar(150) NOT NULL,
  `portfolioImage` varchar(255) NOT NULL,
  `portfolioStatus` int(2) NOT NULL,
  `portfolioUploaderId` int(3) NOT NULL,
  `portfolioUploaderName` varchar(70) NOT NULL,
  `portfolioUploadeDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `portfolio_categoryId` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`portfolioId`, `portfolioTitle`, `portfolioName`, `portfolioImage`, `portfolioStatus`, `portfolioUploaderId`, `portfolioUploaderName`, `portfolioUploadeDate`, `portfolio_categoryId`) VALUES
(1, 'Mahbubul Alam is best Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.', 'PSD Template', 'portfolio-1501792505-32665.jpg', 2, 1, 'Mahbubul Alam', '2017-08-03 20:35:05', 1),
(2, 'Graphics Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.', 'Mobile Graphics', 'portfolio-1501793318-96404.jpg', 2, 1, 'Mahbubul Alam', '2017-08-03 20:48:38', 2),
(3, 'Icon Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.', 'Love Icon', 'portfolio-1501793359-56133.jpg', 2, 1, 'Mahbubul Alam', '2017-08-03 20:49:19', 3),
(4, 'Web Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.', 'Tower Web', 'portfolio-1501793409-70554.jpg', 2, 1, 'Mahbubul Alam', '2017-08-03 20:50:09', 1);

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
-- Indexes for table `tbl_description`
--
ALTER TABLE `tbl_description`
  ADD UNIQUE KEY `value` (`value`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`galleryId`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menuId`),
  ADD UNIQUE KEY `menuPosition` (`menuPosition`);

--
-- Indexes for table `tbl_pageandfeature`
--
ALTER TABLE `tbl_pageandfeature`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`portfolioId`);

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
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `galleryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pageandfeature`
--
ALTER TABLE `tbl_pageandfeature`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `portfolioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
