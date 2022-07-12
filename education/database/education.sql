-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 02:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image`, `status`, `description`) VALUES
(1, 'pic254.jpg', 1, '<blockquote>\r\n<p><em><strong>EduS8ul transform career through various skills and certification training.</strong></em></p>\r\n</blockquote>\r\n\r\n<ul>\r\n	<li>&nbsp;We are leading education provider of training for working professionals in the arrears of project management , service management , big data ,data science , quality management and team management.</li>\r\n	<li>&nbsp;We offer live online training for our students and online e- learning self paced training .</li>\r\n	<li>&nbsp;Our trainers and team are always ready to train learning minds in various areas of courses pmp scrum master, six sigma , ITIL , prince2 , z</li>\r\n	<li>Total Educator is one of the best running online professional training and career guidance provider. We provide aspiring professionals to achieve their career goal in the field of IT sector, Business Management program and many other professional courses. It is the largest training platform for the students to get career growth in respective field.</li>\r\n</ul>\r\n'),
(2, 'pic254.jpg', 1, '<blockquote>\r\n<p><em><strong>EduS8ul transform career through various skills and certification training.</strong></em></p>\r\n</blockquote>\r\n\r\n<ul>\r\n	<li>&nbsp;We are leading education provider of training for working professionals in the arrears of project management , service management , big data ,data science , quality management and team management.</li>\r\n	<li>&nbsp;We offer live online training for our students and online e- learning self paced training .</li>\r\n	<li>&nbsp;Our trainers and team are always ready to train learning minds in various areas of courses pmp scrum master, six sigma , ITIL , prince2 , z</li>\r\n	<li>Total Educator is one of the best running online professional training and career guidance provider. We provide aspiring professionals to achieve their career goal in the field of IT sector, Business Management program and many other professional courses. It is the largest training platform for the students to get career growth in respective field.</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'Tushar', 'chauhantushar282@gmail.com', 'tushar123', 7835906264),
(3, 'Tillu Rajput', 'chauhan@gmail.com', 'tushar123', 7835906264),
(4, 'Tillu Rajp', 'chauhan12@gmail.com', 'tushar123', 7835906264),
(5, 'Tillu Ra', 'chauhan@gmail.com', 'tushar123', 7835906264);

-- --------------------------------------------------------

--
-- Table structure for table `cat_course`
--

CREATE TABLE `cat_course` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_course`
--

INSERT INTO `cat_course` (`cat_id`, `cat_name`, `status`) VALUES
(1, 'Science', 1),
(2, 'Commerce', 1),
(4, 'Maths', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `url` longtext NOT NULL,
  `location` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `url`, `location`, `email`, `mobile`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14571.85502372358!2d91.55906932614575!3d24.067580850941717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753def25f579e77%3A0xbd60dda9858871b5!2sGournagar%2C%20Tripura!5e0!3m2!1sen!2sin!4v1657086697075!5m2!1sen!2sin', 'State - Tripura , city - khowai , village - grounagar', 'Ajaymkj8@gmail.com', 7678237434);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` bigint(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `short_description` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `category`, `course_name`, `image`, `price`, `status`, `short_description`, `description`) VALUES
(1, 'Science', 'ADVANCE JAVA CERTIFICATION AND TRAINING', 'pic22-07-09-01-02-341226583.jpg', 399, 1, '<p>The lexicon means that means of <strong>advance</strong> is a forward movement or development or improvement and therefore the which means of up means a factor that produces one thing higher. All in all, we&#39;ve got to enhance our basic information to master that individual field.</p>\r\n', '<p>What is Advance Java?<br />\r\nThe lexicon which means advance is a forward movement or development or improvement that means rising means a factor that produces one thing higher. All in all, we&#39;ve got to enhance our basic information to master that specific field.</p>\r\n\r\n<p>Java is split into 2 components i.e. Core Java (J2SE) and Advanced Java (JEE). The core Java half covers the basics (data varieties, functions, operators, loops, thread, exception handling, etc.) of the Java programing language. it&#39;s accustomed develop all-purpose applications. Whereas Advanced Java covers the quality ideas like information property, networking, Servlet, internet services, etc. during this section, we are going to discuss what is advanced Java, its profit, its uses, topics of advanced Java, and the difference between core Java and advanced Java.</p>\r\n\r\n<p>Advance Java<br />\r\nIt is a locality of the Java artificial language. it&#39;s a complicated technology or advanced version of Java specially designed to develop web-based, network-centric, or enterprise applications. It includes the ideas like &nbsp;JDBC, etc. it&#39;s a specialization in a very specific domain.</p>\r\n\r\n<p>Most of the applications developed exploitation advanced Java use tow-tier design i.e. consumer and Server. All the applications that run on the Server may be thought of as advanced Java applications.</p>\r\n'),
(2, 'Commerce', 'LEADING SAFE® 5 WITH SA CERTIFICATION', 'pic22-07-09-01-22-58957078.jpg', 599, 1, '<p>Develop a skillset that&rsquo;s in demand worldwide&mdash;and empower your enterprise to succeed in a disruptive marketplace&mdash;when you become a SAFe 5&nbsp;Agilist (SA). During this two-day course, you&rsquo;ll learn the principles and practices of the Scaled Agile Framework&reg;&nbsp;(SAFe)</p>\r\n', '<h3>APPLYING A LEAN-AGILE MINDSET WITH SAFE WITH SAFE 5&nbsp;AGILIST CERTIFICATION<br />\r\nBASED ON VERSION 5&nbsp;OF SAFE&reg; (SCALED AGILE FRAMEWORK)</h3>\r\n\r\n<p>Develop a skillset that&rsquo;s in demand worldwide&mdash;and empower your enterprise to succeed in a disruptive marketplace&mdash;when you become a SAFe 5&nbsp;Agilist (SA). During this two-day course, you&rsquo;ll learn the principles and practices of the Scaled Agile Framework&reg;&nbsp;(SAFe), how to execute and release value through Agile Release Trains, and what it means to lead a Lean-Agile transformation at enterprise scale.</p>\r\n\r\n<p>You will gain an understanding of the Lean-Agile mindset and why it&rsquo;s so effective in today&rsquo;s adapt-or-die marketplace. You&rsquo;ll also get practical advice on supporting Agile teams and programs, empowering a Lean Portfolio, building a continuous delivery pipeline and DevOps culture, and coordinating large solutions.</p>\r\n\r\n<h3><strong>BECOME A CERTIFIED SAFE 5&nbsp;AGILIST (SA)</strong></h3>\r\n\r\n<h3>LEARNING GOALS</h3>\r\n\r\n<p>To perform the role of a SAFe 5&nbsp;Agilist, you should be able to:</p>\r\n\r\n<ul>\r\n	<li>Understand the Five Core Competencies of the Lean Enterprise</li>\r\n	<li>Become a Lean-thinking manager-teacher</li>\r\n	<li>Apply the values and principles of a Lean-Agile Mindset</li>\r\n	<li>Apply SAFe&rsquo;s Lean and Agile principles to the roles and practices of SAFe</li>\r\n	<li>Create high-performing teams by establishing mission and purpose</li>\r\n	<li>Lead the transformation with the SAFe Implementation Roadmap</li>\r\n	<li>Support PI Planning and the events associated with successful Program execution</li>\r\n	<li>Drive Release on Demand with the Continuous Delivery Pipeline</li>\r\n	<li>Establish alignment and execution with Strategic Themes and Lean Portfolio Management</li>\r\n	<li>Coordinate multiple Agile Release Trains and suppliers with a Solution Train</li>\r\n</ul>\r\n'),
(3, 'Maths', 'CCNA TRAINING', 'pic22-07-09-01-30-263894688.jpg', 499, 1, '<p>TotalEducator&#39;s training in Cisco Certified Network Associate (CCNA) Routing and Switching is an ideal certification program for entry-level network engineers to maximize their foundational networking knowledge. Our training module imparts participants with practical, relevant and industry-ready domain knowledge on network solutions.</p>\r\n', '<p><strong>Course Description&nbsp;</strong><br />\r\nTotalEducator&#39;s training in Cisco Certified Network Associate (CCNA) Routing and Switching is an ideal certification program for entry-level network engineers to maximize their foundational networking knowledge. Our training module imparts participants with practical, relevant and industry-ready domain knowledge on network solutions.<br />\r\nOn demand Virtual training program is designed to help aspiring professionals earn Agile Certification (PMI-ACP)&reg; and empower the current &amp; future project managers to demonstrate their level of professionalism in agile principles, practices, tools and techniques. This course is taught by trainers who have years of experience in training and who have been practicing Agile Project Management with some of the top IT organizations</p>\r\n\r\n<p>The course validates participants the following skills at the end of the training:<br />\r\n&bull;Ability to install, configure, operate, and troubleshoot medium-size routed and switched networks<br />\r\n&bull;Manage and optimize network systems, focus on network infrastructure, which includes routing, switching, wireless access, security, and connectivity to branch offices using WAN</p>\r\n\r\n<p><strong>Why is the certification most sought-after?</strong></p>\r\n\r\n<p>According to the U.S. Bureau of Labor Statistics (BLS), employment opportunities are expected to increase by 12% from 2012-2022 for networking technicians and systems administrators.</p>\r\n\r\n<p>&bull;CCNA Routing and Switching certification is a widely respected IT certification program which adds value and help networking professionals to advance their careers.</p>\r\n\r\n<p>&bull;According to Robert Half Technology, networking professionals with Cisco networking administration skills can expect to earn a 9% premium above average salaries in the industry</p>\r\n\r\n<p><strong>What learning benefits do you get from TotalEducator&#39;s&nbsp;</strong><strong>training?</strong>&nbsp;TotalEducator&#39;s&nbsp;CCNA Routing and Switching training provides immense learning benefits to the participants and ensures the following skills: Participants are able to:&nbsp;<br />\r\n1.Install, operate and troubleshoot medium-sized network routers, switches, data center and offer service and support.</p>\r\n\r\n<p>2.Understand the key fundamentals of networking and TCP/IP with functionalities of Spanning Tree Protocol (STP) &amp; Ether Channel</p>\r\n\r\n<p>3.Gain key skills for managing the CISCO Internetwork, devices and the process of configuration and troubleshooting of OSPF, EIGRP, and IPv6</p>\r\n\r\n<p>4.Work confidently on WANs, Network Address Translation (NAT), DHCP &amp;NTP</p>\r\n\r\n<p><strong>What are the career benefits of this course?</strong></p>\r\n\r\n<p>CCNA Routing and Switching certification enhances one&rsquo;s credibility and marketability within organizations as well as greatly improve Job prospects. The training imparts practical, relevant and job-ready skills which are in demand in the industry. Fortune 500 companies like Cisco, British telecom, Orange telecom, Accenture, Nokia, Siemens, Dimension data, IBM, VM Ware, EMC2 prefer CCNA Routing and Switching certified networking professionals. The average salary of a CCNA Routing and Switching certified professional is $101,000.</p>\r\n\r\n<p><strong>Who should take this course?</strong></p>\r\n'),
(4, 'Science', 'LSSBB(LEAN SIX SIGMA BLACK BELT) CERTIFICATION', 'pic22-07-09-01-42-155836992.jpg', 599, 1, '<p>The IASSC Certified Lean Six Sigma Black Belt (ICBB) is a professional who is well versed in the Lean Six Sigma Methodology, who leads improvement projects, typically in a full-time role. A Lean Six Sigma Black Belt possesses a thorough understanding of all aspects within the phases of D-M-A-</p>\r\n', '<p><strong>Certified Lean Six Sigma Black Belts.</strong><br />\r\nThe IASSC Certified Lean Six Sigma Black Belt (ICBB) is a professional who is well versed in the Lean Six Sigma Methodology, who leads improvement projects, typically in a full-time role. A Lean Six Sigma Black Belt possesses a thorough understanding of all aspects within the phases of D-M-A-I-C. They understand how to perform and interpret Six Sigma tools and how to use standard principles of Lean.<br />\r\n<strong>Certification Testing</strong>&nbsp;The IASSC Certified Lean Six Sigma Black Belt (ICBB) Exam is a 4 hour 150 question, closed book, proctored exam based on the IASSC Universally Accepted Lean Six Sigma Body of Knowledge for Black Belts. The Exam contains approximately 30 multiple-choice and true/false questions from each major section of the ILSSBOK for Black Belts and is administered in more than 8,000 Testing Centers located within 165 countries throughout the world./p&gt;<strong>Requirements</strong></p>\r\n\r\n<p>In order to achieve the professional designation of IASSC Certified Black Belt (ICBB) from the International Association for Six Sigma Certification candidates must sit for the IASSC Certified Lean Six Sigma Black Belt Exam and achieve a minimum score of 580 points out of a total potential of 750 points.</p>\r\n\r\n<p>There are no prerequisites required in order to sit for the IASSC Certified Lean Six Sigma Black Belt Exam. For more about this see FAQ&rsquo;s and the IASSC position on knowledge and application&nbsp;<strong>Preparation</strong></p>\r\n\r\n<p>For those who wish to sit for the exam it is recommended, but not required, that Lean Six Sigma training is obtained through a qualified institution, Lean Six Sigma trainer or corporate program. It is also recommended, although not required, that those sitting for the exam have some degree of real-world Lean Six Sigma work experience and project application experience.</p>\r\n\r\n<p><strong>Who is the target audience?</strong></p>\r\n\r\n<p>Quality management professionals across sectors like Manufacturing, Medicine, IT/ITeS,Banking &amp; Finance and others. Also, anyone interested to learn more about Six Sigma tools and techniques can take up this course.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `url` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `image`, `url`, `status`) VALUES
(1, 'pic4279998.jpg', 'http://localhost/education/course_detail.php?detail=1', 1),
(2, 'pic2877639.jpg', 'http://localhost/education/course_detail.php?detail=2', 1),
(3, 'pic6860812.jpg', 'http://localhost/education/course_detail.php?detail=3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testinomial`
--

CREATE TABLE `testinomial` (
  `id` int(30) NOT NULL,
  `name` varchar(49) NOT NULL,
  `image` varchar(20) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testinomial`
--

INSERT INTO `testinomial` (`id`, `name`, `image`, `description`, `status`) VALUES
(1, 'Jena Karlis', 'pic527.jpg', 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.', 1),
(2, 'Matt Brandon', 'pic468.jpg', 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.', 1),
(3, 'Saul Goodman', 'pic240.jpg', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', 1),
(4, 'Sara Wilsson', 'pic969.jpg', ' Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.', 1),
(5, 'John Larson', 'pic992.jpg', 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(20) NOT NULL,
  `gender` text NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `gender`, `first_name`, `last_name`, `image`, `email`, `password`, `address`, `mobile`) VALUES
(1, 'Mr.', 'Tillu', 'Chauhan', 'pic1642.jpg', 'chauhan@gmail.com', 'tushar', 'G-672/90 east jawahar nagar loni road', 7835906264),
(4, 'Mr.', 'Tillu', 'Chauhan', 'pic1642.jpg', 'chauhan11@gmial.com', 'tushar', 'G-672/90 east jawahar nagar loni road', 7835906264),
(5, 'Mr.', 'Tushar', 'Chauhan', 'pic9187.jpg', 'chauhan1234@gmail.com', '123', 'G-672/90 east jawahar nagar loni road', 7835906264),
(6, 'Mr.', 'Tushar', 'Chauhan', 'pic5423.jpg', 'chauhan111@gmail.com', '123', 'G-672/90 east jawahar nagar loni road', 7835906264),
(8, 'Mr.', 'Tushar', 'Chauhan', 'pic6181.jpg', 'chauhantushar282@gmail.com ', 'tushar', 'G-672/90 east jawahar nagar loni road', 7835906264),
(9, 'Mr.', 'Sahil', 'malik', 'pic4666.jpg', 'sahil@gmail.com', '1234', 'G-672/90 east jawahar nagar loni road', 7835906264);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_course`
--
ALTER TABLE `cat_course`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testinomial`
--
ALTER TABLE `testinomial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cat_course`
--
ALTER TABLE `cat_course`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testinomial`
--
ALTER TABLE `testinomial`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
