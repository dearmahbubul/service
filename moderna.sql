-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 05:44 AM
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
(1, 'Mahbubul Alam', 'mahbubrahman5676@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01774-573275', 'Sukrabad', 'Dhaka', 'Bangladesh', 1, 1, 'user-1500788232-26592.jpg', '<p>Itz simple...</p>\r\n', '2017-07-23 05:26:34', 0),
(2, 'Ibrahim', 'ibrahim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01774573275', '#', '#', '#', 4, 1, 'user-1500787932-83741.jpg', NULL, '2017-07-23 05:30:32', 0),
(3, 'Mitul Ahmed', 'mitul@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01774573275', '#', '#', '#', 3, 1, NULL, NULL, '2017-08-03 14:17:49', 0),
(4, 'Md.shahad', 'shahadhossain98@gmail.com', '202cb962ac59075b964b07152d234b70', '01706043689', '#', '#', '#', 1, 1, NULL, NULL, '2017-08-15 16:56:00', 0),
(5, 'Khorshed  Alam', 'rifatabm1@gmail.com', '9246444d94f081e3549803b928260f56', '01772515721', 'shukrabad', 'Dhaka', 'Bangladesh', 1, 1, 'user-1502821363-15341.jpg', '<p><em>Hi every one...it&#39;s me....abm rifat&nbsp;.</em></p>\r\n', '2017-08-15 18:10:03', 0),
(6, 'Razu Ahmed', 'razu15-5794@diu.edu.bd', '81dc9bdb52d04dc20036dbd8313ed055', '', '#', '#', '#', 3, 1, NULL, NULL, '2017-08-16 03:42:42', 0),
(7, 'Kamal Ahmed', 'kamal15-6003@diu.edu.bd', '81dc9bdb52d04dc20036dbd8313ed055', '', '#', '#', '#', 3, 1, NULL, NULL, '2017-08-16 03:43:16', 0);

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
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident, dolorum! Harum id omnis delectus hic accusamus, dolorum consequatur. Soluta aliquid ad autem deserunt eos nihil iste fugit consequuntur dolore aut perspiciatis est dolorem hic quibusdam laborum velit quasi maiores molestias, illo quis vero. Quam culpa beatae facilis fugit dolorum vitae commodi aperiam rerum dolorem, modi, corporis aliquam, at quae, voluptates perspiciatis mollitia. Assumenda ad aperiam iure qui debitis perspiciatis sit aut at est&lt;/p&gt;\r\n\r\n&lt;p&gt;reprehenderit dolorem, reiciendis molestiae tempora commodi natus quos, quis earum non quia recusandae veniam tenetur animi asperiores. Totam itaque accusantium minima exercitationem rerum deserunt aliquam veniam minus, nam quis, nemo vel! In illo, nihil tempore esse ratione perspiciatis, alias ipsam error quo, dignissimos doloribus dolorum voluptas cum. Nulla cumque est doloremque ratione harum dignissimos necessitatibus deserunt at quod? Culpa iure impedit fugiat sint modi ad dolorem porro, architecto inventore, blanditiis rerum. Soluta aspernatur nisi, ex harum ad, perspiciatis quasi asperiores, sunt nihil similique quam accusantium architecto iusto et placeat, amet pariatur facilis quia? Ipsam, dolor voluptas autem, rem aliquam nobis pariatur praesentium sunt et excepturi neque incidunt unde dolores optio error quos vitae recusandae harum amet voluptate laudantium molestiae delectus adipisci aliquid. Incidunt, fugit laborum. Consequuntur error, vel, rerum fugit odit libero, doloremque vitae nam, quam in dolore ex. Labore officiis, magni, similique ducimus voluptatem aut, soluta sapiente cum, voluptas fuga velit dolore inventore magnam. Unde,&lt;/p&gt;\r\n\r\n&lt;p&gt;doloremque, ex, nobis itaque expedita ea sint veniam aperiam ipsam deleniti natus dolorem, libero voluptatibus vero fugit. Laudantium quo id ullam eum autem maxime debitis quasi illo aliquid eius eos deleniti, tenetur natus modi voluptatibus delectus mollitia similique molestias laborum, dolores a ab. Placeat consequuntur nostrum, sunt libero repellat numquam voluptas tempore expedita quod a, commodi necessitatibus voluptatibus repellendus aliquam optio reiciendis iure sequi nesciunt magni, iste impedit nihil dolore, eveniet assumenda. Voluptatum veritatis sed, omnis ratione ea saepe veniam earum provident ad exercitationem harum eligendi, culpa praesentium odio? Iusto porro libero quisquam placeat maxime laboriosam vero deserunt ex consectetur eos? Eligendi velit a dolore distinctio est ex provident saepe ea! Asperiores distinctio et suscipit nostrum optio ipsum, quod ab recusandae possimus, accusamus voluptate delectus repellendus voluptatem itaque iure, culpa. Nisi numquam est similique laboriosam, ex perspiciatis, explicabo dolore sapiente, eveniet rem&lt;/p&gt;\r\n\r\n&lt;p&gt;voluptatem doloremque aliquam omnis. Dicta animi illo exercitationem odio eligendi est corporis tenetur earum ad reiciendis, magni quo molestiae quaerat, excepturi hic maiores quis labore quia neque libero eaque, ullam harum quam dolores? Officiis id consequatur nesciunt voluptates, ipsum temporibus. Eum dignissimos dolorem ab tenetur optio corporis nostrum beatae reprehenderit, dolor harum nisi commodi recusandae, itaque labore libero doloremque debitis fugiat quod deleniti, mollitia quasi, fugit corrupti. Dolore atque pariatur maxime nesciunt, placeat ipsum assumenda quas veniam, ipsa, sed perspiciatis veritatis? Voluptatibus delectus laboriosam expedita earum corporis itaque animi. Amet eaque eum, exercitationem porro animi labore maiores, quam illo nostrum voluptatibus sequi inventore pariatur magni nemo quo excepturi quod molestiae eligendi quaerat, alias facere totam doloremque. Ex cupiditate magni, tempore similique omnis et autem beatae sapiente temporibus illum.&lt;/p&gt;', 'banner-1502324000-50737.jpg', 0, 'Read more', 1, 'Mahbubul Alam', '', 2, '2017-08-10 00:13:20'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident, dolorum! Harum id omnis delectus hic accusamus, dolorum consequatur. Soluta aliquid ad autem deserunt eos nihil iste fugit consequuntur dolore aut perspiciatis est dolorem hic quibusdam laborum velit quasi maiores molestias, illo quis vero. Quam culpa beatae facilis fugit dolorum vitae commodi aperiam rerum dolorem, modi, corporis aliquam, at quae, voluptates perspiciatis mollitia. Assumenda ad aperiam iure qui debitis perspiciatis sit aut at est</p>\r\n\r\n<p>reprehenderit dolorem, reiciendis molestiae tempora commodi natus quos, quis earum non quia recusandae veniam tenetur animi asperiores. Totam itaque accusantium minima exercitationem rerum deserunt aliquam veniam minus, nam quis, nemo vel! In illo, nihil tempore esse ratione perspiciatis, alias ipsam error quo, dignissimos doloribus dolorum voluptas cum. Nulla cumque est doloremque ratione harum dignissimos necessitatibus deserunt at quod? Culpa iure impedit fugiat sint modi ad dolorem porro, architecto inventore,</p>\r\n\r\n<p>blanditiis rerum. Soluta aspernatur nisi, ex harum ad, perspiciatis quasi asperiores, sunt nihil similique quam accusantium architecto iusto et placeat, amet pariatur facilis quia? Ipsam, dolor voluptas autem, rem aliquam nobis pariatur praesentium sunt et excepturi neque incidunt unde dolores optio error quos vitae recusandae harum amet voluptate laudantium molestiae delectus adipisci aliquid. Incidunt, fugit laborum. Consequuntur error, vel, rerum fugit odit libero, doloremque vitae nam, quam in dolore ex. Labore officiis, magni, similique ducimus voluptatem aut, soluta sapiente cum, voluptas fuga velit dolore inventore magnam. Unde,</p>\r\n\r\n<p>doloremque, ex, nobis itaque expedita ea sint veniam aperiam ipsam deleniti natus dolorem, libero voluptatibus vero fugit. Laudantium quo id ullam eum autem maxime debitis quasi illo aliquid eius eos deleniti, tenetur natus modi voluptatibus delectus mollitia similique molestias laborum, dolores a ab. Placeat consequuntur nostrum, sunt libero repellat numquam voluptas tempore expedita quod a, commodi necessitatibus voluptatibus repellendus aliquam optio reiciendis iure sequi nesciunt magni, iste impedit nihil dolore, eveniet assumenda.</p>\r\n\r\n<p>Voluptatum veritatis sed, omnis ratione ea saepe veniam earum provident ad exercitationem harum eligendi, culpa praesentium odio? Iusto porro libero quisquam placeat maxime laboriosam vero deserunt ex consectetur eos? Eligendi velit a dolore distinctio est ex provident saepe ea! Asperiores distinctio et suscipit nostrum optio ipsum, quod ab recusandae possimus, accusamus voluptate delectus repellendus voluptatem itaque iure, culpa. Nisi numquam est similique laboriosam, ex perspiciatis, explicabo dolore sapiente, eveniet rem voluptatem doloremque aliquam omnis. Dicta animi illo exercitationem odio eligendi est corporis tenetur earum ad reiciendis, magni quo molestiae quaerat, excepturi hic maiores quis labore quia neque libero eaque, ullam harum quam dolores? Officiis id consequatur nesciunt voluptates, ipsum temporibus. Eum dignissimos dolorem ab tenetur optio corporis nostrum beatae reprehenderit, dolor harum nisi commodi recusandae, itaque labore</p>\r\n\r\n<p>libero doloremque debitis fugiat quod deleniti, mollitia quasi, fugit corrupti. Dolore atque pariatur maxime nesciunt, placeat ipsum assumenda quas veniam, ipsa, sed perspiciatis veritatis? Voluptatibus delectus laboriosam expedita earum corporis itaque animi. Amet eaque eum, exercitationem porro animi labore maiores, quam illo nostrum voluptatibus sequi inventore pariatur magni nemo quo excepturi quod molestiae eligendi quaerat, alias facere totam doloremque. Ex cupiditate magni, tempore similique omnis et autem beatae sapiente temporibus illum.</p>', 'banner-1502324045-36263.jpg', 0, 'Click me', 1, 'Mahbubul Alam', '', 2, '2017-08-10 00:14:05'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident, dolorum! Harum id omnis delectus hic accusamus, dolorum consequatur. Soluta aliquid ad autem deserunt eos nihil iste fugit consequuntur dolore aut perspiciatis est dolorem hic quibusdam laborum velit quasi maiores molestias, illo quis vero. Quam culpa beatae facilis fugit dolorum vitae commodi aperiam rerum dolorem, modi, corporis aliquam, at quae, voluptates perspiciatis mollitia. Assumenda ad aperiam iure qui debitis perspiciatis sit aut at est</p>\r\n\r\n<p>reprehenderit dolorem, reiciendis molestiae tempora commodi natus quos, quis earum non quia recusandae veniam tenetur animi asperiores. Totam itaque accusantium minima exercitationem rerum deserunt aliquam veniam minus, nam quis, nemo vel! In illo, nihil tempore esse ratione perspiciatis, alias ipsam error quo, dignissimos doloribus dolorum voluptas cum. Nulla cumque est doloremque ratione harum dignissimos necessitatibus deserunt at quod? Culpa iure impedit fugiat sint modi ad dolorem porro, architecto inventore,</p>\r\n\r\n<p>blanditiis rerum. Soluta aspernatur nisi, ex harum ad, perspiciatis quasi asperiores, sunt nihil similique quam accusantium architecto iusto et placeat, amet pariatur facilis quia? Ipsam, dolor voluptas autem, rem aliquam nobis pariatur praesentium sunt et excepturi neque incidunt unde dolores optio error quos vitae recusandae harum amet voluptate laudantium molestiae delectus adipisci aliquid. Incidunt, fugit laborum. Consequuntur error, vel, rerum fugit odit libero, doloremque vitae nam, quam in dolore ex. Labore officiis, magni, similique ducimus voluptatem aut, soluta sapiente cum, voluptas fuga velit dolore inventore magnam. Unde,</p>\r\n\r\n<p>doloremque, ex, nobis itaque expedita ea sint veniam aperiam ipsam deleniti natus dolorem, libero voluptatibus vero fugit. Laudantium quo id ullam eum autem maxime debitis quasi illo aliquid eius eos deleniti, tenetur natus modi voluptatibus delectus mollitia similique molestias laborum, dolores a ab. Placeat consequuntur nostrum, sunt libero repellat numquam voluptas tempore expedita quod a, commodi necessitatibus voluptatibus repellendus aliquam optio reiciendis iure sequi nesciunt magni, iste impedit nihil dolore, eveniet assumenda.</p>\r\n\r\n<p>Voluptatum veritatis sed, omnis ratione ea saepe veniam earum provident ad exercitationem harum eligendi, culpa praesentium odio? Iusto porro libero quisquam placeat maxime laboriosam vero deserunt ex consectetur eos? Eligendi velit a dolore distinctio est ex provident saepe ea! Asperiores distinctio et suscipit nostrum optio ipsum, quod ab recusandae possimus, accusamus voluptate delectus repellendus voluptatem itaque iure, culpa. Nisi numquam est similique laboriosam, ex perspiciatis, explicabo dolore sapiente, eveniet rem voluptatem doloremque aliquam omnis. Dicta animi illo exercitationem odio eligendi est corporis tenetur earum ad reiciendis, magni quo molestiae quaerat, excepturi hic maiores quis labore quia neque libero eaque, ullam harum quam dolores? Officiis id consequatur nesciunt voluptates, ipsum temporibus. Eum dignissimos dolorem ab tenetur optio corporis nostrum beatae reprehenderit, dolor harum nisi commodi recusandae, itaque labore</p>\r\n\r\n<p>libero doloremque debitis fugiat quod deleniti, mollitia quasi, fugit corrupti. Dolore atque pariatur maxime nesciunt, placeat ipsum assumenda quas veniam, ipsa, sed perspiciatis veritatis? Voluptatibus delectus laboriosam expedita earum corporis itaque animi. Amet eaque eum, exercitationem porro animi labore maiores, quam illo nostrum voluptatibus sequi inventore pariatur magni nemo quo excepturi quod molestiae eligendi quaerat, alias facere totam doloremque. Ex cupiditate magni, tempore similique omnis et autem beatae sapiente temporibus illum.</p>', 'banner-1502324071-77313.jpg', 0, 'Click here', 1, 'Mahbubul Alam', '', 2, '2017-08-10 00:14:31'),
(4, 'Mahbubull Alam', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident, dolorum! Harum id omnis delectus hic accusamus, dolorum consequatur. Soluta aliquid ad autem deserunt eos nihil iste fugit consequuntur dolore aut perspiciatis est dolorem hic quibusdam laborum velit quasi maiores molestias, illo quis vero. Quam culpa beatae facilis fugit dolorum vitae commodi aperiam rerum dolorem, modi, corporis aliquam, at quae, voluptates perspiciatis mollitia. Assumenda ad aperiam iure qui debitis perspiciatis sit aut at est</p>\r\n\r\n<p>reprehenderit dolorem, reiciendis molestiae tempora commodi natus quos, quis earum non quia recusandae veniam tenetur animi asperiores. Totam itaque accusantium minima exercitationem rerum deserunt aliquam veniam minus, nam quis, nemo vel! In illo, nihil tempore esse ratione perspiciatis, alias ipsam error quo, dignissimos doloribus dolorum voluptas cum. Nulla cumque est doloremque ratione harum dignissimos necessitatibus deserunt at quod? Culpa iure impedit fugiat sint modi ad dolorem porro, architecto inventore,</p>\r\n\r\n<p>blanditiis rerum. Soluta aspernatur nisi, ex harum ad, perspiciatis quasi asperiores, sunt nihil similique quam accusantium architecto iusto et placeat, amet pariatur facilis quia? Ipsam, dolor voluptas autem, rem aliquam nobis pariatur praesentium sunt et excepturi neque incidunt unde dolores optio error quos vitae recusandae harum amet voluptate laudantium molestiae delectus adipisci aliquid. Incidunt, fugit laborum. Consequuntur error, vel, rerum fugit odit libero, doloremque vitae nam, quam in dolore ex. Labore officiis, magni, similique ducimus voluptatem aut, soluta sapiente cum, voluptas fuga velit dolore inventore magnam. Unde,</p>\r\n\r\n<p>doloremque, ex, nobis itaque expedita ea sint veniam aperiam ipsam deleniti natus dolorem, libero voluptatibus vero fugit. Laudantium quo id ullam eum autem maxime debitis quasi illo aliquid eius eos deleniti, tenetur natus modi voluptatibus delectus mollitia similique molestias laborum, dolores a ab. Placeat consequuntur nostrum, sunt libero repellat numquam voluptas tempore expedita quod a, commodi necessitatibus voluptatibus repellendus aliquam optio reiciendis iure sequi nesciunt magni, iste impedit nihil dolore, eveniet assumenda.</p>\r\n\r\n<p>Voluptatum veritatis sed, omnis ratione ea saepe veniam earum provident ad exercitationem harum eligendi, culpa praesentium odio? Iusto porro libero quisquam placeat maxime laboriosam vero deserunt ex consectetur eos? Eligendi velit a dolore distinctio est ex provident saepe ea! Asperiores distinctio et suscipit nostrum optio ipsum, quod ab recusandae possimus, accusamus voluptate delectus repellendus voluptatem itaque iure, culpa. Nisi numquam est similique laboriosam, ex perspiciatis, explicabo dolore sapiente, eveniet rem voluptatem doloremque aliquam omnis. Dicta animi illo exercitationem odio eligendi est corporis tenetur earum ad reiciendis, magni quo molestiae quaerat, excepturi hic maiores quis labore quia neque libero eaque, ullam harum quam dolores? Officiis id consequatur nesciunt voluptates, ipsum temporibus. Eum dignissimos dolorem ab tenetur optio corporis nostrum beatae reprehenderit, dolor harum nisi commodi recusandae, itaque labore</p>\r\n\r\n<p>libero doloremque debitis fugiat quod deleniti, mollitia quasi, fugit corrupti. Dolore atque pariatur maxime nesciunt, placeat ipsum assumenda quas veniam, ipsa, sed perspiciatis veritatis? Voluptatibus delectus laboriosam expedita earum corporis itaque animi. Amet eaque eum, exercitationem porro animi labore maiores, quam illo nostrum voluptatibus sequi inventore pariatur magni nemo quo excepturi quod molestiae eligendi quaerat, alias facere totam doloremque. Ex cupiditate magni, tempore similique omnis et autem beatae sapiente temporibus illum.</p>', 'banner-1502324117-83097.jpg', 0, 'Read more', 1, 'Mahbubul Alam', '', 2, '2017-08-10 00:15:17');

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
(8, 'Shakib', 'shakib@gmail.com', 'subject', 'Hi, hello', '2017-07-29 13:44:20', 1),
(9, 'Mahbub', 'mahbub@gmail.com', 'About pagination', 'All the top WordPress security tips to help you protect your website against hackers and malware.\r\nIf you are serious about your website, then you need to pay attention to these.\r\nEach week Google blacklists around 20,000 websites for malware and around 50,000 for phishing', '2017-08-10 10:26:51', 1),
(10, 'Khorshed', 'abmrifat16@gmail.com', 'What type course you share', 'What type course you share', '2017-08-15 18:29:26', 2);

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
('company_details', '', 'Friends company Inc', 'Sukrabad, Dhanmondi Bangladesh', '+88 01774-573275', 'mahbubulalam5676@gmail.com', '', '', '', '', '', '', '', ''),
('company_owner', '', '', '', '', '', '', '', '', '', '', '', '', 'Mahbubul Alam'),
('copyright', '', '', '', '', '', 'Friends fly', '', '', '', '', '', '', ''),
('logo', '', '', '', '', '', '', '', '', '', '', '', 'websiteLogo.jpg', ''),
('social_url', '', '', '', '', '', '', 'https://www.facebook.com/mahbub5676', 'https://www.twitter.com/mahbub5676', 'https://www.linkedin.com/in/mahbubul-alam-a2a94a13', 'https://www.pinterest.com/mahbubrahman567/', 'https://plus.google.com/100828625281391770524', '', ''),
('website_heading', 'Friends Business of Export And Import', '', '', '', '', '', '', '', '', '', '', '', '');

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
(11, 'gallery-1501769448-97416.jpg', 'https://www.facebook.com/mahbub5676', '2017-08-03 14:10:48', 1, 'Mahbubul Alam'),
(12, 'gallery-1502821234-92723.jpg', 'Abm rifat', '2017-08-15 18:20:34', 5, 'Khorshed  Alam'),
(13, 'gallery-1502821288-65553.jpg', 'Abm khorshed ', '2017-08-15 18:21:28', 5, 'Khorshed  Alam');

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
  `pUploaderName` varchar(25) NOT NULL,
  `pUploadedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pageandfeature`
--

INSERT INTO `tbl_pageandfeature` (`pId`, `pTitle`, `pIconClass`, `pDetails`, `pCategory`, `pStatus`, `pUploaderId`, `pUploaderName`, `pUploadedDate`) VALUES
(1, 'Fully responsive', 'fa fa-desktop fa-3x', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam voluptatem modi qui fugiat aspernatur iste reprehenderit maxime est sit, consectetur expedita autem sint molestias error vitae enim esse explicabo ut voluptas, tenetur quisquam inventore sed earum. Dolor voluptatum reprehenderit modi commodi voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad suscipit soluta quam porro consequatur, incidunt assumenda dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate dolore consectetur iusto fuga at eius laboriosam velit, magni in? Dicta recusandae molestiae libero, consectetur ratione, perferendis quibusdam iste odit tempora consequuntur praesentium soluta, quia molestias sapiente repudiandae reiciendis vitae corporis consequatur ad. Labore eius, laboriosam deserunt illum veritatis debitis et, alias cupiditate expedita voluptatum veniam odio quisquam earum a perferendis in vel, ab voluptates ipsam harum quidem. Praesentium voluptatem quos corporis quas dolores delectus ea adipisci at doloribus iusto amet sint perspiciatis quod eligendi, distinctio vitae, quaerat dignissimos rem recusandae est quam repellendus, eos quasi tempore. Praesentium nulla optio sapiente repudiandae voluptate nam saepe blanditiis soluta porro earum error quas officia ab debitis, dolores quo commodi eveniet nihil dolorum veniam nobis consequatur. Harum ea officiis dicta voluptas dolorem culpa repellat accusamus totam, libero suscipit est quia nobis, sit atque nisi quam beatae delectus qui magni quis architecto. Sunt similique, deleniti minus dolorem mollitia quaerat quia ipsam amet at voluptatum beatae, saepe. Veritatis ipsam voluptatem, dolor non fugit natus amet delectus pariatur autem provident in unde harum tempore beatae, error, obcaecati rerum voluptatibus magnam minima veniam. Deserunt similique dolorum, ea maxime dolores. Dignissimos culpa animi veritatis optio, sit adipisci, accusantium, aperiam id saepe alias ab accusamus quam voluptatum nisi molestiae obcaecati! Nesciunt deleniti cum totam eos similique fuga placeat animi aliquid nobis, illo dolore officia dolorum nemo pariatur quibusdam vel excepturi magnam dolor quas, blanditiis labore. Reprehenderit voluptate, obcaecati ex pariatur tenetur possimus illum rem veritatis nemo molestiae est beatae ullam esse fugit molestias expedita numquam velit deleniti, sed. Quidem, error, repellendus! Dolores, dicta sapiente ipsum? Assumenda praesentium officia, dolor. Ducimus rem vitae blanditiis fugiat excepturi natus minus veritatis fugit nobis perferendis. Perferendis in illum minus quaerat reiciendis, nostrum. Id minus odit assumenda rem, impedit tempore, commodi ea atque maxime sequi eius pariatur autem et, magnam in harum consequatur illo ipsum ab eaque nihil eveniet voluptates dicta error. Cupiditate, libero. Temporibus dolores distinctio magnam assumenda accusantium alias aperiam velit dolorum quasi laboriosam laborum, pariatur accusamus nostrum fugit illum odit necessitatibus nisi adipisci cum cupiditate nesciunt reiciendis aliquid. Atque quidem reprehenderit, quo omnis modi iure officiis accusantium alias dolorum. Cum, natus, fuga. Veniam, sunt!', 1, 2, 1, 'Mahbubul Alam', '2017-08-08 01:22:33'),
(2, 'Modern Style', 'fa fa-star-o fa-3x', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam voluptatem modi qui fugiat aspernatur iste reprehenderit maxime est sit, consectetur expedita autem sint molestias error vitae enim esse explicabo ut voluptas, tenetur quisquam inventore sed earum. Dolor voluptatum reprehenderit modi commodi voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad suscipit soluta quam porro consequatur, incidunt assumenda dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate dolore consectetur iusto fuga at eius laboriosam velit, magni in? Dicta recusandae molestiae libero, consectetur ratione, perferendis quibusdam iste odit tempora consequuntur praesentium soluta, quia molestias sapiente repudiandae reiciendis vitae corporis consequatur ad. Labore eius, laboriosam deserunt illum veritatis debitis et, alias cupiditate expedita voluptatum veniam odio quisquam earum a perferendis in vel, ab voluptates ipsam harum quidem. Praesentium voluptatem quos corporis quas dolores delectus ea adipisci at doloribus iusto amet sint perspiciatis quod eligendi, distinctio vitae, quaerat dignissimos rem recusandae est quam repellendus, eos quasi tempore. Praesentium nulla optio sapiente repudiandae voluptate nam saepe blanditiis soluta porro earum error quas officia ab debitis, dolores quo commodi eveniet nihil dolorum veniam nobis consequatur. Harum ea officiis dicta voluptas dolorem culpa repellat accusamus totam, libero suscipit est quia nobis, sit atque nisi quam beatae delectus qui magni quis architecto. Sunt similique, deleniti minus dolorem mollitia quaerat quia ipsam amet at voluptatum beatae, saepe. Veritatis ipsam voluptatem, dolor non fugit natus amet delectus pariatur autem provident in unde harum tempore beatae, error, obcaecati rerum voluptatibus magnam minima veniam. Deserunt similique dolorum, ea maxime dolores. Dignissimos culpa animi veritatis optio, sit adipisci, accusantium, aperiam id saepe alias ab accusamus quam voluptatum nisi molestiae obcaecati! Nesciunt deleniti cum totam eos similique fuga placeat animi aliquid nobis, illo dolore officia dolorum nemo pariatur quibusdam vel excepturi magnam dolor quas, blanditiis labore. Reprehenderit voluptate, obcaecati ex pariatur tenetur possimus illum rem veritatis nemo molestiae est beatae ullam esse fugit molestias expedita numquam velit deleniti, sed. Quidem, error, repellendus! Dolores, dicta sapiente ipsum? Assumenda praesentium officia, dolor. Ducimus rem vitae blanditiis fugiat excepturi natus minus veritatis fugit nobis perferendis. Perferendis in illum minus quaerat reiciendis, nostrum. Id minus odit assumenda rem, impedit tempore, commodi ea atque maxime sequi eius pariatur autem et, magnam in harum consequatur illo ipsum ab eaque nihil eveniet voluptates dicta error. Cupiditate, libero. Temporibus dolores distinctio magnam assumenda accusantium alias aperiam velit dolorum quasi laboriosam laborum, pariatur accusamus nostrum fugit illum odit necessitatibus nisi adipisci cum cupiditate nesciunt reiciendis aliquid. Atque quidem reprehenderit, quo omnis modi iure officiis accusantium alias dolorum. Cum, natus, fuga. Veniam, sunt!', 1, 2, 1, 'Mahbubul Alam', '2017-08-08 01:22:33'),
(3, 'Customizable', 'fa fa-film fa-3x', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam voluptatem modi qui fugiat aspernatur iste reprehenderit maxime est sit, consectetur expedita autem sint molestias error vitae enim esse explicabo ut voluptas, tenetur quisquam inventore sed earum. Dolor voluptatum reprehenderit modi commodi voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad suscipit soluta quam porro consequatur, incidunt assumenda dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate dolore consectetur iusto fuga at eius laboriosam velit, magni in? Dicta recusandae molestiae libero, consectetur ratione, perferendis quibusdam iste odit tempora consequuntur praesentium soluta, quia molestias sapiente repudiandae reiciendis vitae corporis consequatur ad. Labore eius, laboriosam deserunt illum veritatis debitis et, alias cupiditate expedita voluptatum veniam odio quisquam earum a perferendis in vel, ab voluptates ipsam harum quidem. Praesentium voluptatem quos corporis quas dolores delectus ea adipisci at doloribus iusto amet sint perspiciatis quod eligendi, distinctio vitae, quaerat dignissimos rem recusandae est quam repellendus, eos quasi tempore. Praesentium nulla optio sapiente repudiandae voluptate nam saepe blanditiis soluta porro earum error quas officia ab debitis, dolores quo commodi eveniet nihil dolorum veniam nobis consequatur. Harum ea officiis dicta voluptas dolorem culpa repellat accusamus totam, libero suscipit est quia nobis, sit atque nisi quam beatae delectus qui magni quis architecto. Sunt similique, deleniti minus dolorem mollitia quaerat quia ipsam amet at voluptatum beatae, saepe. Veritatis ipsam voluptatem, dolor non fugit natus amet delectus pariatur autem provident in unde harum tempore beatae, error, obcaecati rerum voluptatibus magnam minima veniam. Deserunt similique dolorum, ea maxime dolores. Dignissimos culpa animi veritatis optio, sit adipisci, accusantium, aperiam id saepe alias ab accusamus quam voluptatum nisi molestiae obcaecati! Nesciunt deleniti cum totam eos similique fuga placeat animi aliquid nobis, illo dolore officia dolorum nemo pariatur quibusdam vel excepturi magnam dolor quas, blanditiis labore. Reprehenderit voluptate, obcaecati ex pariatur tenetur possimus illum rem veritatis nemo molestiae est beatae ullam esse fugit molestias expedita numquam velit deleniti, sed. Quidem, error, repellendus! Dolores, dicta sapiente ipsum? Assumenda praesentium officia, dolor. Ducimus rem vitae blanditiis fugiat excepturi natus minus veritatis fugit nobis perferendis. Perferendis in illum minus quaerat reiciendis, nostrum. Id minus odit assumenda rem, impedit tempore, commodi ea atque maxime sequi eius pariatur autem et, magnam in harum consequatur illo ipsum ab eaque nihil eveniet voluptates dicta error. Cupiditate, libero. Temporibus dolores distinctio magnam assumenda accusantium alias aperiam velit dolorum quasi laboriosam laborum, pariatur accusamus nostrum fugit illum odit necessitatibus nisi adipisci cum cupiditate nesciunt reiciendis aliquid. Atque quidem reprehenderit, quo omnis modi iure officiis accusantium alias dolorum. Cum, natus, fuga. Veniam, sunt!</p>\r\n', 1, 2, 1, 'Mahbubul Alam', '2017-08-08 01:22:33'),
(4, 'Privacy', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam voluptatem modi qui fugiat aspernatur iste reprehenderit maxime est sit, consectetur expedita autem sint molestias error vitae enim esse explicabo ut voluptas, tenetur quisquam inventore sed earum. Dolor voluptatum reprehenderit modi commodi voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad suscipit soluta quam porro consequatur, incidunt assumenda dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate dolore consectetur iusto fuga at eius laboriosam velit, magni in? Dicta recusandae molestiae libero, consectetur ratione, perferendis quibusdam iste odit tempora consequuntur praesentium soluta, quia molestias sapiente repudiandae reiciendis vitae corporis consequatur ad. Labore eius, laboriosam deserunt illum veritatis debitis et, alias cupiditate expedita voluptatum veniam odio quisquam earum a perferendis in vel, ab voluptates ipsam harum quidem. Praesentium voluptatem quos corporis quas dolores delectus ea adipisci at doloribus iusto amet sint perspiciatis quod eligendi, distinctio vitae, quaerat dignissimos rem recusandae est quam repellendus, eos quasi tempore. Praesentium nulla optio sapiente repudiandae voluptate nam saepe blanditiis soluta porro earum error quas officia ab debitis, dolores quo commodi eveniet nihil dolorum veniam nobis consequatur. Harum ea officiis dicta voluptas dolorem culpa repellat accusamus totam, libero suscipit est quia nobis, sit atque nisi quam beatae delectus qui magni quis architecto. Sunt similique, deleniti minus dolorem mollitia quaerat quia ipsam amet at voluptatum beatae, saepe. Veritatis ipsam voluptatem, dolor non fugit natus amet delectus pariatur autem provident in unde harum tempore beatae, error, obcaecati rerum voluptatibus magnam minima veniam. Deserunt similique dolorum, ea maxime dolores. Dignissimos culpa animi veritatis optio, sit adipisci, accusantium, aperiam id saepe alias ab accusamus quam voluptatum nisi molestiae obcaecati! Nesciunt deleniti cum totam eos similique fuga placeat animi aliquid nobis, illo dolore officia dolorum nemo pariatur quibusdam vel excepturi magnam dolor quas, blanditiis labore. Reprehenderit voluptate, obcaecati ex pariatur tenetur possimus illum rem veritatis nemo molestiae est beatae ullam esse fugit molestias expedita numquam velit deleniti, sed. Quidem, error, repellendus! Dolores, dicta sapiente ipsum? Assumenda praesentium officia, dolor. Ducimus rem vitae blanditiis fugiat excepturi natus minus veritatis fugit nobis perferendis. Perferendis in illum minus quaerat reiciendis, nostrum. Id minus odit assumenda rem, impedit tempore, commodi ea atque maxime sequi eius pariatur autem et, magnam in harum consequatur illo ipsum ab eaque nihil eveniet voluptates dicta error. Cupiditate, libero. Temporibus dolores distinctio magnam assumenda accusantium alias aperiam velit dolorum quasi laboriosam laborum, pariatur accusamus nostrum fugit illum odit necessitatibus nisi adipisci cum cupiditate nesciunt reiciendis aliquid. Atque quidem reprehenderit, quo omnis modi iure officiis accusantium alias dolorum. Cum, natus, fuga. Veniam, sunt!', 2, 2, 1, 'Mahbubul Alam', '2017-08-08 01:22:33'),
(6, 'Setting', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum molestiae nihil ut maxime, inventore consequatur eaque quibusdam error, repellendus non libero quasi vero odit ipsa! Iure nobis dolor eius adipisci, similique. Porro nostrum blanditiis iste deleniti laudantium nihil reiciendis inventore id! Rem assumenda, iste officia voluptate odio, harum accusamus voluptatum aperiam repellendus sunt quos voluptatibus nostrum quia dolorum, officiis libero autem mollitia maiores eum ab nam? Fuga sit suscipit laborum non quaerat voluptatibus eligendi dicta explicabo officia vero totam architecto animi corporis atque reprehenderit ullam consequatur, tenetur vitae repellat eaque hic. Quisquam qui natus quas minus reiciendis atque aspernatur voluptate.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum molestiae nihil ut maxime, inventore consequatur eaque quibusdam error, repellendus non libero quasi vero odit ipsa! Iure nobis dolor eius adipisci, similique. Porro nostrum blanditiis iste deleniti laudantium nihil reiciendis inventore id! Rem assumenda, iste officia voluptate odio, harum accusamus voluptatum aperiam repellendus sunt quos voluptatibus nostrum quia dolorum, officiis libero autem mollitia maiores eum ab nam? Fuga sit suscipit laborum non quaerat voluptatibus eligendi dicta explicabo officia vero totam architecto animi corporis atque reprehenderit ullam consequatur, tenetur vitae repellat eaque hic. Quisquam qui natus quas minus reiciendis atque aspernatur voluptate.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum molestiae nihil ut maxime, inventore consequatur eaque quibusdam error, repellendus non libero quasi vero odit ipsa! Iure nobis dolor eius adipisci, similique. Porro nostrum blanditiis iste deleniti laudantium nihil reiciendis inventore id! Rem assumenda, iste officia voluptate odio, harum accusamus voluptatum aperiam repellendus sunt quos voluptatibus nostrum quia dolorum, officiis libero autem mollitia maiores eum ab nam? Fuga sit suscipit laborum non quaerat voluptatibus eligendi dicta explicabo officia vero totam architecto animi corporis atque reprehenderit ullam consequatur, tenetur vitae repellat eaque hic. Quisquam qui natus quas minus reiciendis atque aspernatur voluptate.</p>\r\n', 2, 2, 1, 'Mahbubul Alam', '2017-08-08 01:22:33'),
(12, 'Adusting', 'fa fa-adjust fa-3x', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum repudiandae culpa enim inventore nostrum delectus laboriosam laudantium atque temporibus repellendus ea tenetur, laborum ad quis! Obcaecati cum commodi, inventore sit fugit aut ipsum corporis nesciunt, quaerat ut mollitia molestiae rem a amet praesentium in error sint qui nam reprehenderit maiores ad. Repellendus sit ducimus eaque veritatis eum, obcaecati, repellat velit aliquid tempore ipsa dolorum ipsum ratione explicabo corporis amet, adipisci rem exercitationem dicta, cum eius. Ratione amet eaque vitae eveniet doloremque itaque odit voluptates beatae, quibusdam sapiente ex soluta ipsum aliquid praesentium facere iste, quas earum labore possimus id ut.</p>', 1, 2, 1, 'Mahbubul Alam', '2017-08-08 01:22:33'),
(13, 'Update', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam voluptatem modi qui fugiat aspernatur iste reprehenderit maxime est sit, consectetur expedita autem sint molestias error vitae enim esse explicabo ut voluptas, tenetur quisquam inventore sed earum. Dolor voluptatum reprehenderit modi commodi voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad suscipit soluta quam porro consequatur, incidunt assumenda dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam voluptatem modi qui fugiat aspernatur iste reprehenderit maxime est sit, consectetur expedita autem sint molestias error vitae enim esse explicabo ut voluptas, tenetur quisquam inventore sed earum. Dolor voluptatum reprehenderit modi commodi voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad <a href=\"https://www.facebook.com/mahbub5676\" target=\"_blank\">Mahbubul Alam facebook profile</a> dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis totam voluptatem modi qui fugiat aspernatur iste reprehenderit maxime est sit, consectetur expedita autem sint molestias error vitae enim esse explicabo ut voluptas, tenetur quisquam inventore sed earum. Dolor voluptatum reprehenderit modi commodi voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad suscipit soluta quam porro consequatur, incidunt assumenda dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate&nbsp;</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>voluptate, quia velit aliquid unde fuga perferendis, possimus nesciunt veritatis, temporibus! Deserunt eius laborum perspiciatis fugiat esse praesentium accusantium saepe quae explicabo perferendis at reiciendis quisquam magnam, ad <a href=\"https://www.facebook.com/mahbub5676\" target=\"_blank\">Mahbubul Alam facebook profile</a> dolores voluptas. Soluta optio eum ipsam dolore assumenda quasi fugit cumque nihil accusamus voluptatibus nostrum cum sunt tempora voluptates hic possimus repellendus, praesentium ad ipsa totam rerum? Qui blanditiis reiciendis, delectus. Voluptatum sint veritatis dicta velit voluptate dignissimos tempore sequi, rem repellat odio cum quae placeat, necessitatibus minus perferendis quaerat labore vel beatae aut! Deleniti voluptate fugit nam placeat vero! Est et corrupti sit, mollitia, optio laborum, accusantium possimus cupiditate&nbsp;</p>\r\n', 2, 2, 1, 'Mahbubul Alam', '2017-08-10 12:22:15'),
(14, 'Shukrabad', 'fa fa-home fa-3x', '<p>Shukrabad Market&nbsp;Scholastica was estab lished in 1977 by Mrs. Yasmeen Murshed. It was founded with a mission to provide a balanced and well-rounded education for all our students, using English as the primary medium of instruction but placing equal emphasis on Bangla. Scholastica&#39;s mission is to build curious, knowledgeable and caring young individuals, who will be equipped to tackle head-on the challenges of our modern-day &quot;global village&quot;. They will aspire to become responsible citizens, who will embrace and respect people from other cultures and walks of life.</p>\r\n', 1, 2, 1, 'Mahbubul Alam', '2017-08-15 17:04:08');

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
(4, 'Web Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.', 'Tower Web', 'portfolio-1501793409-70554.jpg', 2, 1, 'Mahbubul Alam', '2017-08-03 20:50:09', 1),
(5, 'Basis offers a free crouse', 'Web app develop', 'portfolio-1502821131-82275.jpg', 2, 5, 'Khorshed  Alam', '2017-08-15 18:18:51', 1);

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
(3, 'This is an example of standard post format', 'Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.', 1, 'Read Continue', 'Owner', 1, 'post-1501048305-21757.jpg', '2017-07-26 05:51:45', 0, 2),
(4, 'Highlight Current Page or Menu Item using php', '<p>Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)</p>\r\n\r\n<p>Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)</p>\r\n\r\n<p>Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)</p>\r\n\r\n<p>Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)</p>\r\n\r\n<p>Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)</p>\r\n', 1, 'Click for more', 'Owner', 1, 'post-1502615361-36928.jpg', '2017-08-13 09:09:21', 0, 2),
(7, '1947 Partition remains a horror story', '<p>Two million people &mdash; Hindus, Muslims, Sikhs &mdash; died in the carnage. Fifteen million left their ancestral homes, uprooted by hate ignited by misrepresentations and misinterpretations of faith, to seek new abodes in lands they had never been to before.</p>\r\n\r\n<p>Seventy years after the violent division of India, the ramifications are yet being felt. The division would lead to a second vivisection twenty four years into partition when the Bengalis of Pakistan, deprived of democratic rights in the country&rsquo;s political structure and victims of genocide initiated by Pakistan&rsquo;s army, would through a guerrilla war establish the free republic of Bangladesh.</p>\r\n\r\n<p>It was a quixotic, wrenching break-up of a country that Mountbatten and Cyril Radcliffe brought about in August 1947. There is little question that the last colonial viceroy was a man in a hurry, guided more by thoughts of his place in history than in the ramifications of the partition of India. And Radcliffe, having never before set foot in the subcontinent, found it convenient to be ensconced in a room and slice through regions in the Punjab and Bengal he thought should fall to India or Pakistan, as the case might be. The results were horrendous. Villages were ruptured and even homes lay in pieces, with part in one country and part in another. Just how uncertain and fraught with risks independence would turn out to be was made palpable in August when the Chakmas of the Chittagong Hill Tracts, happy in the belief that they were not to be part of Muslim Pakistan, hoisted the Indian tricolour. They would be in for a rude shock. Only hours later, they would find themselves herded into Pakistan. Their sufferings had only begun.</p>\r\n\r\n<p>In her seminal work,&nbsp;<em>The Great Partition</em>, it is a long tale of woe that Yasmin Khan weaves in her narration of the incidents and events that led to the vivisection of India in 1947. The difference between her story and those of others who preceded her in recounting the story is largely in Khan&rsquo;s bringing into focus the human dimensions of the tragedy that came in the wake of partition. Amazingly, almost unbelievably, none of the politicians involved in the gathering crisis &mdash; Gandhi, Nehru and Jinnah &mdash; appeared to have been aware of the horrible consequences that would befall Hindus as well as Muslims all across the country once partition came to pass.</p>\r\n', 6, 'Read Continue', 'Owner', 1, 'post-1502616274-73664.jpg', '2017-08-13 09:24:34', 0, 2),
(8, 'The former DJ is seeking lost earnings and to clear his name', '<p>Once he and his girlfriend left, Simbeck testified, Swift said aloud: &quot;Dude, that guy grabbed my ass,&quot; to which Simbeck responded, &quot;I knew it. I have the photograph.&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>They quickly found the Mueller image in her camera, and Swift said, &quot;That&#39;s him,&quot; Simbeck told jurors.</p>\r\n\r\n<p>Explaining why she did not report the incident to her managers and security detail right away, Swift said she still had more fans to meet and &ldquo;didn&rsquo;t want to ruin their concert experience.&rdquo;</p>\r\n\r\n<p>Questioned about her reaction to learning Mueller had been fired, Swift replied, &quot;I just never wanted to see him again. And here we are years later, and I&#39;m being blamed for the unfortunate events in his life.&quot;</p>\r\n\r\n<p>Mueller initiated the litigation, claiming Swift fabricated the story and put pressure on KYGO to fire him from his $150,000-a-year job. Swift then countersued for assault and battery, asking for symbolic damages of $1. Swift asserts she never demanded Mueller be fired.</p>\r\n\r\n<p>The former DJ is seeking lost earnings and to clear his name, telling the court this week that it was humiliating to be accused of &quot;something so despicable.&quot;</p>\r\n\r\n<p>Following Swift to the witness stand was KYGO manager Robert Call, who fired Mueller two days after the alleged incident, acting on a complaint from Swift&#39;s liaison to radio stations, Frank Bell. Call testified that he had known Bell for many years and had no reason to doubt him.</p>\r\n', 7, 'Click for more', 'Owner', 1, 'post-1502616687-67037.jpg', '2017-08-13 09:31:27', 0, 2),
(9, 'The situation has further worsened with the Saudi authoritiess', '<p>Mahbub Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)</p>\r\n\r\n<p>Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)</p>\r\n\r\n<p>Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)</p>\r\n\r\n<p>Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)</p>\r\n\r\n<p>Highlight Current Page or Menu Item using php. Learn how to create a cms style blog website in php oop and mysqli (Live web development video tutorials in Bangla)</p>\r\n', 6, 'Click here form Read more', 'Owner', 1, 'post-1502616790-14643.jpg', '2017-08-13 09:33:10', 0, 2),
(10, 'BASIS OFFER A FREE COURSE', '<p>Once successful competition of this course we will provide real world client project if you are capable doing so. Also we will help you to create your freelancer career on freelancer.com or upwork marketplace. For outstanding performer we will provide few initial projects from real client and you will be able to communicate directly with those client (this is for outstanding performer those will prove themselves to us and can take pressure to complete real project)<br />\r\n<br />\r\n<strong>Course Outline:</strong><br />\r\n<br />\r\n&nbsp;<strong>Module 1: Photoshop</strong></p>\r\n\r\n<ul>\r\n	<li>Basic knowledge of Photoshop</li>\r\n	<li>Tools overview</li>\r\n	<li>Image editing</li>\r\n	<li>Retouching Techniques</li>\r\n	<li>Filtrating &amp; Drawings</li>\r\n	<li>Layer Management</li>\r\n	<li>Using Presets</li>\r\n	<li>Typography</li>\r\n</ul>\r\n', 8, 'click more-', 'Owner', 5, 'post-1502820933-57758.jpg', '2017-08-15 18:15:33', 0, 2);

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
(5, 'SEO', 2, '2017-07-23 05:45:20'),
(6, 'History', 2, '2017-08-13 09:23:38'),
(7, 'News', 2, '2017-08-13 09:23:45'),
(8, 'Web app develop', 2, '2017-08-15 18:11:45');

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
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_admin_user_role`
--
ALTER TABLE `tbl_admin_user_role`
  MODIFY `roleId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `bannerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `galleryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pageandfeature`
--
ALTER TABLE `tbl_pageandfeature`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `portfolioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_post_category`
--
ALTER TABLE `tbl_post_category`
  MODIFY `post_categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
