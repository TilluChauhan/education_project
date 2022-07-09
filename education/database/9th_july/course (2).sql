-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 02:43 PM
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
(1, 'Science', 'ADVANCE JAVA CERTIFICATION AND TRAINING', 'pic22-07-09-01-02-341226583.jpg', 399, 1, '<p>The dictionary meaning of&nbsp;<strong>advance</strong>&nbsp;is a forward movement or a development or improvement and the meaning of improve means thing that makes something better. All in all, we have to improve our basic knowledge to master in that particular field.&nbsp;</p>\r\n', '<h1>What is Advance Java?</h1>\r\n\r\n<p>The dictionary meaning of&nbsp;<strong>advance</strong>&nbsp;is a forward movement or a development or improvement and the meaning of improve means thing that makes something better. All in all, we have to improve our basic knowledge to master in that particular field.</p>\r\n\r\n<p>Java is divided into two parts i.e.&nbsp;<strong>Core Java (J2SE)</strong>&nbsp;and&nbsp;<strong>Advanced Java (JEE)</strong>. The core Java part covers the fundamentals (data types, functions, operators, loops, thread, exception handling, etc.) of the Java programming language. It is used to develop general purpose applications. Whereas&nbsp;<strong>Advanced Java</strong>&nbsp;covers the standard concepts such as database connectivity, networking, Servlet, web-services, etc. In this section, we will discuss&nbsp;<strong>what is advance Java, its benefit, uses, topics of advance Java</strong>, and the&nbsp;<strong>difference between core Java and advance Java.</strong></p>\r\n\r\n<h2>Advance Java</h2>\r\n\r\n<p>It is a part of Java programming language. It is an advanced technology or advance version of Java specially designed to develop web-based, network-centric or enterprise applications. It includes the concepts like&nbsp;&nbsp;JDBC,, etc. It is a specialization in specific domain.</p>\r\n\r\n<p>Most of the applications developed using advance Java uses tow-tier architecture i.e. Client and Server. All the applications that runs on Server can be considered as advance Java applications.</p>\r\n'),
(2, 'Commerce', 'LEADING SAFE® 5 WITH SA CERTIFICATION', 'pic22-07-09-01-22-58957078.jpg', 599, 1, '<p>Develop a skillset that&rsquo;s in demand worldwide&mdash;and empower your enterprise to succeed in a disruptive marketplace&mdash;when you become a SAFe 5&nbsp;Agilist (SA). During this two-day course, you&rsquo;ll learn the principles and practices of the Scaled Agile Framework&reg;&nbsp;(SAFe)</p>\r\n', '<h3>APPLYING A LEAN-AGILE MINDSET WITH SAFE WITH SAFE 5&nbsp;AGILIST CERTIFICATION<br />\r\nBASED ON VERSION 5&nbsp;OF SAFE&reg; (SCALED AGILE FRAMEWORK)</h3>\r\n\r\n<p>Develop a skillset that&rsquo;s in demand worldwide&mdash;and empower your enterprise to succeed in a disruptive marketplace&mdash;when you become a SAFe 5&nbsp;Agilist (SA). During this two-day course, you&rsquo;ll learn the principles and practices of the Scaled Agile Framework&reg;&nbsp;(SAFe), how to execute and release value through Agile Release Trains, and what it means to lead a Lean-Agile transformation at enterprise scale.</p>\r\n\r\n<p>You will gain an understanding of the Lean-Agile mindset and why it&rsquo;s so effective in today&rsquo;s adapt-or-die marketplace. You&rsquo;ll also get practical advice on supporting Agile teams and programs, empowering a Lean Portfolio, building a continuous delivery pipeline and DevOps culture, and coordinating large solutions.</p>\r\n\r\n<h3><strong>BECOME A CERTIFIED SAFE 5&nbsp;AGILIST (SA)</strong></h3>\r\n\r\n<h3>LEARNING GOALS</h3>\r\n\r\n<p>To perform the role of a SAFe 5&nbsp;Agilist, you should be able to:</p>\r\n\r\n<ul>\r\n	<li>Understand the Five Core Competencies of the Lean Enterprise</li>\r\n	<li>Become a Lean-thinking manager-teacher</li>\r\n	<li>Apply the values and principles of a Lean-Agile Mindset</li>\r\n	<li>Apply SAFe&rsquo;s Lean and Agile principles to the roles and practices of SAFe</li>\r\n	<li>Create high-performing teams by establishing mission and purpose</li>\r\n	<li>Lead the transformation with the SAFe Implementation Roadmap</li>\r\n	<li>Support PI Planning and the events associated with successful Program execution</li>\r\n	<li>Drive Release on Demand with the Continuous Delivery Pipeline</li>\r\n	<li>Establish alignment and execution with Strategic Themes and Lean Portfolio Management</li>\r\n	<li>Coordinate multiple Agile Release Trains and suppliers with a Solution Train</li>\r\n</ul>\r\n'),
(3, 'Maths', 'CCNA TRAINING', 'pic22-07-09-01-30-263894688.jpg', 499, 1, '<p>TotalEducator&#39;s training in Cisco Certified Network Associate (CCNA) Routing and Switching is an ideal certification program for entry-level network engineers to maximize their foundational networking knowledge. Our training module imparts participants with practical, relevant and industry-ready domain knowledge on network solutions.</p>\r\n', '<p><strong>Course Description&nbsp;</strong><br />\r\nTotalEducator&#39;s training in Cisco Certified Network Associate (CCNA) Routing and Switching is an ideal certification program for entry-level network engineers to maximize their foundational networking knowledge. Our training module imparts participants with practical, relevant and industry-ready domain knowledge on network solutions.<br />\r\nOn demand Virtual training program is designed to help aspiring professionals earn Agile Certification (PMI-ACP)&reg; and empower the current &amp; future project managers to demonstrate their level of professionalism in agile principles, practices, tools and techniques. This course is taught by trainers who have years of experience in training and who have been practicing Agile Project Management with some of the top IT organizations</p>\r\n\r\n<p>The course validates participants the following skills at the end of the training:<br />\r\n&bull;Ability to install, configure, operate, and troubleshoot medium-size routed and switched networks<br />\r\n&bull;Manage and optimize network systems, focus on network infrastructure, which includes routing, switching, wireless access, security, and connectivity to branch offices using WAN</p>\r\n\r\n<p><strong>Why is the certification most sought-after?</strong></p>\r\n\r\n<p>According to the U.S. Bureau of Labor Statistics (BLS), employment opportunities are expected to increase by 12% from 2012-2022 for networking technicians and systems administrators.</p>\r\n\r\n<p>&bull;CCNA Routing and Switching certification is a widely respected IT certification program which adds value and help networking professionals to advance their careers.</p>\r\n\r\n<p>&bull;According to Robert Half Technology, networking professionals with Cisco networking administration skills can expect to earn a 9% premium above average salaries in the industry</p>\r\n\r\n<p><strong>What learning benefits do you get from TotalEducator&#39;s&nbsp;</strong><strong>training?</strong>&nbsp;TotalEducator&#39;s&nbsp;CCNA Routing and Switching training provides immense learning benefits to the participants and ensures the following skills: Participants are able to:&nbsp;<br />\r\n1.Install, operate and troubleshoot medium-sized network routers, switches, data center and offer service and support.</p>\r\n\r\n<p>2.Understand the key fundamentals of networking and TCP/IP with functionalities of Spanning Tree Protocol (STP) &amp; Ether Channel</p>\r\n\r\n<p>3.Gain key skills for managing the CISCO Internetwork, devices and the process of configuration and troubleshooting of OSPF, EIGRP, and IPv6</p>\r\n\r\n<p>4.Work confidently on WANs, Network Address Translation (NAT), DHCP &amp;NTP</p>\r\n\r\n<p><strong>What are the career benefits of this course?</strong></p>\r\n\r\n<p>CCNA Routing and Switching certification enhances one&rsquo;s credibility and marketability within organizations as well as greatly improve Job prospects. The training imparts practical, relevant and job-ready skills which are in demand in the industry. Fortune 500 companies like Cisco, British telecom, Orange telecom, Accenture, Nokia, Siemens, Dimension data, IBM, VM Ware, EMC2 prefer CCNA Routing and Switching certified networking professionals. The average salary of a CCNA Routing and Switching certified professional is $101,000.</p>\r\n\r\n<p><strong>Who should take this course?</strong></p>\r\n'),
(4, 'Science', 'LSSBB(LEAN SIX SIGMA BLACK BELT) CERTIFICATION', 'pic22-07-09-01-42-155836992.jpg', 599, 1, '<p>The IASSC Certified Lean Six Sigma Black Belt (ICBB) is a professional who is well versed in the Lean Six Sigma Methodology, who leads improvement projects, typically in a full-time role. A Lean Six Sigma Black Belt possesses a thorough understanding of all aspects within the phases of D-M-A-</p>\r\n', '<p><strong>Certified Lean Six Sigma Black Belts.</strong><br />\r\nThe IASSC Certified Lean Six Sigma Black Belt (ICBB) is a professional who is well versed in the Lean Six Sigma Methodology, who leads improvement projects, typically in a full-time role. A Lean Six Sigma Black Belt possesses a thorough understanding of all aspects within the phases of D-M-A-I-C. They understand how to perform and interpret Six Sigma tools and how to use standard principles of Lean.<br />\r\n<strong>Certification Testing</strong>&nbsp;The IASSC Certified Lean Six Sigma Black Belt (ICBB) Exam is a 4 hour 150 question, closed book, proctored exam based on the IASSC Universally Accepted Lean Six Sigma Body of Knowledge for Black Belts. The Exam contains approximately 30 multiple-choice and true/false questions from each major section of the ILSSBOK for Black Belts and is administered in more than 8,000 Testing Centers located within 165 countries throughout the world./p&gt;<strong>Requirements</strong></p>\r\n\r\n<p>In order to achieve the professional designation of IASSC Certified Black Belt (ICBB) from the International Association for Six Sigma Certification candidates must sit for the IASSC Certified Lean Six Sigma Black Belt Exam and achieve a minimum score of 580 points out of a total potential of 750 points.</p>\r\n\r\n<p>There are no prerequisites required in order to sit for the IASSC Certified Lean Six Sigma Black Belt Exam. For more about this see FAQ&rsquo;s and the IASSC position on knowledge and application&nbsp;<strong>Preparation</strong></p>\r\n\r\n<p>For those who wish to sit for the exam it is recommended, but not required, that Lean Six Sigma training is obtained through a qualified institution, Lean Six Sigma trainer or corporate program. It is also recommended, although not required, that those sitting for the exam have some degree of real-world Lean Six Sigma work experience and project application experience.</p>\r\n\r\n<p><strong>Who is the target audience?</strong></p>\r\n\r\n<p>Quality management professionals across sectors like Manufacturing, Medicine, IT/ITeS,Banking &amp; Finance and others. Also, anyone interested to learn more about Six Sigma tools and techniques can take up this course.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
