-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 04:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `msg`) VALUES
(3, 'mdkamrulislam', 'k.islam64577@gmail.com', 'Hello World,,'),
(4, 'Md KHAN', 'k_islam9994@yahoo.com', 'abcdefghijklmnop');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course1` varchar(255) NOT NULL,
  `course-code1` varchar(255) NOT NULL,
  `course-title1` varchar(255) NOT NULL,
  `course-credits1` float NOT NULL,
  `course-teacher1` varchar(255) NOT NULL,
  `course-code2` varchar(255) NOT NULL,
  `course-title2` varchar(255) NOT NULL,
  `course-credits2` float NOT NULL,
  `course-teacher2` varchar(255) NOT NULL,
  `course-code3` varchar(255) NOT NULL,
  `course-title3` varchar(255) NOT NULL,
  `course-credits3` float NOT NULL,
  `course-teacher3` varchar(255) NOT NULL,
  `course-code4` varchar(255) NOT NULL,
  `course-title4` varchar(255) NOT NULL,
  `course-credits4` float NOT NULL,
  `course-teacher4` varchar(255) NOT NULL,
  `course-code5` varchar(255) NOT NULL,
  `course-title5` varchar(255) NOT NULL,
  `course-credits5` float NOT NULL,
  `course-teacher5` varchar(255) NOT NULL,
  `course-code6` varchar(255) NOT NULL,
  `course-title6` varchar(255) NOT NULL,
  `course-credits6` float NOT NULL,
  `course-teacher6` varchar(255) NOT NULL,
  `course-code7` varchar(255) NOT NULL,
  `course-title7` varchar(255) NOT NULL,
  `course-credits7` float NOT NULL,
  `course-teacher7` varchar(255) NOT NULL,
  `course-code8` varchar(255) NOT NULL,
  `course-title8` varchar(255) NOT NULL,
  `course-credits8` float NOT NULL,
  `course-teacher8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `course1`, `course-code1`, `course-title1`, `course-credits1`, `course-teacher1`, `course-code2`, `course-title2`, `course-credits2`, `course-teacher2`, `course-code3`, `course-title3`, `course-credits3`, `course-teacher3`, `course-code4`, `course-title4`, `course-credits4`, `course-teacher4`, `course-code5`, `course-title5`, `course-credits5`, `course-teacher5`, `course-code6`, `course-title6`, `course-credits6`, `course-teacher6`, `course-code7`, `course-title7`, `course-credits7`, `course-teacher7`, `course-code8`, `course-title8`, `course-credits8`, `course-teacher8`) VALUES
(9, '1st Semester', ' Ms. Tasnim Zahan (TZT)', 'CSE 111 ', 'Fundamentals of Computers', 3, 'Mr. Pranta Sarker (PSD)', 'ENG 101', 'English Language', 3, 'Ms. Nusrat Rikza (NR)', 'GED 101', 'Bangladesh Studies', 3, 'Mr. Md. Thanvir Ahmed Chowdhury (TAC)', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, ''),
(10, '2nd Semester', 'Ms. Tasnim Zahan (TZT)', 'CSE 121 ', 'Basic Electrical Engineering', 3, 'Mr. Shahadat Hussain Parvez (SHP)', 'CSE 122', 'Basic Electrical Engineering LAB ', 1.5, 'Mr. Shahadat Hussain Parvez (SHP)', 'CSE 131', 'Data Structure', 3, 'Ms. Tasnim Zahan (TZT)', 'CSE 132', 'Data Structure Lab', 1.5, 'Ms. Tasnim Zahan (TZT)', 'GED 101', 'Bangladesh Studies', 3, 'Mr. Md. Thanvir Ahmed Chowdhury (TAC)', '', '', 0, '', '', '', 0, '', '', '', 0, ''),
(13, '3rd Semester', 'Mr. Shahadat Hussain Parvez (SHP)', 'CSE 121', 'Basic Electrical Engineering', 3, 'Mr. Shahadat Hussain Parvez (SHP)', 'CSE 121', 'Basic Electrical Engineering LAB', 1.5, 'Mr. Shahadat Hussain Parvez (SHP)', 'CSE 131', 'Data Structure', 3, 'Ms. Tasnim Zahan (TZT)', 'CSE 132', 'Data Structure Lab', 1.5, 'Ms. Tasnim Zahan (TZT)', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, ''),
(15, '4th Semester', ' Mr. Noushad Sojib (NS)', 'CSE 211', 'Object Oriented Programming Language', 3, ' Mr. Noushad Sojib (NS)', 'CSE 212', 'Object Oriented Programming Language Lab', 1.5, ' Mr. Noushad Sojib (NS)', 'CSE 213', 'Electronic Devices and Circuits', 3, 'Mr. Shahadat Hussain Parvez (SHP)', 'CSE 214', 'Electronic Devices and Circuits Lab', 1.5, 'Mr. Shahadat Hussain Parvez (SHP)', 'MAT 203', 'Complex Variables, Laplace Transform and Fourier Series', 3, 'Mr. Rathindra Chandra Gope (RCG)', 'CSE 315', 'Communication Engineering', 3, 'Mr. Rathindra Chandra Gope (RCG)', '', '', 0, '', '', '', 0, ''),
(16, '5th Semester', ' Mr. Noushad Sojib (NS)', 'MAT 203 ', 'Complex Variables, Laplace Transform and Fourier Series', 3, 'Mr. Rathindra Chandra Gope (RCG)', 'CSE 221', 'Digital Logic Design', 3, ' Mr. Noushad Sojib (NS)', 'CSE 222', 'Digital Logic Design', 1.5, ' Mr. Noushad Sojib (NS)', 'CSE 313', 'Database System', 3, 'Mr. Muhammad Mahir Hasan Chowdhury (MMH)', 'CSE 313', 'Database System Lab', 1.5, 'Mr. Muhammad Mahir Hasan Chowdhury (MMH)', 'CSE 315', 'Communication Engineering', 3, 'Mr. Muhammad Mahir Hasan Chowdhury (MMH)', '', '', 0, '', '', '', 0, ''),
(17, '6th semester', 'Advisor: Mr. Muhammad Mahir Hasan Chowdhury (MMH)', 'MAT 203 ', 'Complex Variables, Laplace Transform and Fourier Series', 3, 'Mr. Rathindra Chandra Gope (RCG)', 'CSE 221', 'Digital Logic Design', 3, ' Mr. Noushad Sojib (NS)', 'CSE 222', 'Digital Logic Design Lab', 1.5, ' Mr. Noushad Sojib (NS)', 'CSE 313', 'Database System', 3, 'Mr. Muhammad Mahir Hasan Chowdhury (MMH)', 'CSE 314', 'Database System Lab', 1.5, 'Mr. Muhammad Mahir Hasan Chowdhury (MMH)', 'CSE 315', 'Communication Engineering', 3, 'Mr. Buddha Chandra Banik', '', '', 0, '', '', '', 0, ''),
(18, '7th semester', 'Advisor: Ms. Nafisa Nowshin (NNP)', 'MAT 201', 'Numerical Methods', 3, 'Ms. Tasnim Zahan (TZT)', 'CSE 323', 'Management Information Systems', 3, 'Ms. Nafisa Nowshin (NNP)', 'CSE 325', 'Computer Networking', 3, 'Ms. Nafisa Nowshin (NNP)', 'CSE 326', 'Computer Networking Lab', 3, 'Ms. Nafisa Nowshin (NNP)', 'CSE 333', 'Software Engineering', 3, 'Mr. Buddha Chandra Banik (BCB)', 'CSE 334', 'Software Engineering Lab', 3, 'Mr. Buddha Chandra Banik', '', '', 0, '', '', '', 0, ''),
(19, '8th semester', ' Ms. Nafisa Nowshin (NNP)', 'MAT 201', 'Numerical Methods', 3, 'Ms. Tasnim Zahan (TZT)', 'CSE 323', 'Management Information Systems', 3, 'Ms. Nafisa Nowshin (NNP)', 'CSE 325', 'Computer Networking', 3, 'Ms. Nafisa Nowshin (NNP)', 'CSE 326', 'Computer Networking Lab', 3, 'Ms. Nafisa Nowshin (NNP)', 'CSE 333', 'Software Engineering', 3, 'Mr. Buddha Chandra Banik (BCB)', 'CSE 334', 'Software Engineering Lab', 3, 'Mr. Buddha Chandra Banik', '', '', 0, '', '', '', 0, ''),
(20, '9th semester', 'Mr. Buddha Chandra Banik (BCB)', 'CSE 333', 'Software Engineering', 3, 'Mr. Buddha Chandra Banik (BCB)', 'CSE 334', 'Software Engineering Lab', 1.5, 'Mr. Buddha Chandra Banik (BCB)', 'CSE 411', 'Artificial Intelligence', 3, 'Mr. Al Mehdi Saadat Chowdhury (SC)', 'CSE 412', 'Artificial Intelligence Lab', 1.5, 'Mr. Al Mehdi Saadat Chowdhury (SC)', 'CSE 421', 'Compiler Construction', 3, 'Mr. Pranta Sarker (PSD)', 'CSE 422', 'Compiler Construction Lab', 3, 'Mr. Pranta Sarker (PSD)', '', '', 0, '', '', '', 0, ''),
(21, '10th semester', ' Mr. Pranta Sarker (PSD)', 'CSE 323', 'Management Information Systems', 3, 'Ms. Nafisa Nowshin (NNP)', 'CSE 400', 'Thesis / Project I', 2, 'Board', 'CSE 423', 'Computer Graphics', 3, 'Mr. Pranta Sarker (PSD)', 'CSE 424', 'Computer Graphics Lab', 1.5, 'Mr. Pranta Sarker (PSD)', 'CSE 459', 'Contemporary Course on Computer Science & Engineering', 3, 'Ms. Nafisa Nowshin (NNP)', 'CSE 460', 'Lab onContemporary Course on Computer Science &Engineering', 1.5, 'Ms. Nafisa Nowshin (NNP)', '', '', 0, '', '', '', 0, ''),
(22, '11th semester', ' Mr. Pranta Sarker (PSD)', 'CSE 323', 'Management Information Systems', 3, 'Ms. Nafisa Nowshin (NNP)', 'CSE 400', 'Thesis / Project II', 2, 'Board', 'CSE 423', 'Computer Graphics', 3, 'Mr. Pranta Sarker (PSD)', 'CSE 424', 'Computer Graphics Lab', 1.5, 'Mr. Pranta Sarker (PSD)', 'CSE 459', 'Contemporary Course on Computer Science & Engineering', 3, 'Ms. Nafisa Nowshin (NNP)', 'CSE 460', 'Lab onContemporary Course on Computer Science &Engineering', 1.5, 'Ms. Nafisa Nowshin (NNP)', '', '', 0, '', '', '', 0, ''),
(23, '12th semester', ' Mr. Al Mehdi Saadat Chowdhury (SC)', 'CSE 402', 'Thesis/ Project II', 1.2, 'Multiple Teachers', 'CSE 431', 'Digital Signal Processing', 3, 'Mr. Al Mehdi Saadat Chowdhury (SC)', 'CSE 432', 'Digital Signal Processing Lab', 1.5, 'Mr. Al Mehdi Saadat Chowdhury (SC)', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, ''),
(24, 'Others', ' Mr. Pranta Sarker (PSD)', '      CSE 113   ', 'Introduction to Computer Applications (DoBuA)', 3, 'Mr. Pranta Sarker (PSD)', 'CSE 106', 'Introduction to Computer Applications (DoENG)', 3, 'Mr. Pranta Sarker (PSD)', 'CSE 100', 'Computer Skills (DoLJ)', 3, 'Mr. Pranta Sarker (PSD)', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `img`) VALUES
(2, 'Event', 'upload/496389810203carl-raw-m3hn2Kn5Bns-unsplash.jpg'),
(3, 'Event 2', 'upload/374078966309carl-raw-m3hn2Kn5Bns-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `facility_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `title`, `img`, `facility_details`) VALUES
(1, 'Central Computer Lab (CCL)', 'upload/96447316089i-lab.jpg', 'CCL for computer science instructional use. The Central Computer Lab is equipped with 40 Intel Pentium Dual Core 2.9 GHZ desktop computers, and a multimedia projector. All the computers of the lab are networked and use standard switches. The lab provides   a range of software to support lab classes and research works in the broad field of Software Systems including programming, database systems, information system design, software engineering, computer networking, and high-performance simulation and modeling.'),
(5, 'Hardware Lab', 'upload/630621278608h-lab.jpg', 'This laboratory has inductor, capacitor, and resistor banks, single and variable AC power sources, DC power supplies, oscilloscopes, signal generators and various types of measuring instruments to enable students to conduct experiments on electrical circuits. Work related to electronics courses is performed in this lab also. It is equipped with modern analog and digital trainer boards, all types of IC chips, and other semiconductor devices. At most 10 students can perform their lab works at a time in this lab.'),
(6, 'Internet Lab', 'upload/3706289304internet-lab.jpg', 'Internet labs on the campus are for student work and internet browsing. The Internet Lab is equipped with 16 Intel Pentium Dual Core 2.9 GHZ desktop computers. These PCs are equipped with state of the art hardware and software where students can do their assignments and have practical knowledge which is an integral part of their learning. North East University Bangladesh has internet facility of 2 Mbps band width. Free Wi-Fi internet connections for faculty and students are available inside the campus.'),
(7, 'Robotics Lab', 'upload/488279556241robotics.jpg', 'Laboratory robotics is the practice of using robots to perform or assist in laboratory tasks. While laboratory robots have found applications in diverse industries and sciences, pharmaceutical companies have used them more than any other group.\r\n Advantages of laboratory robotics include high speed, high efficiency, minimal wastage, task reproducibility, task endurance, precision, high productivity, enhanced safety for laboratory personnel, the ability to withstand adverse environmental conditions');

-- --------------------------------------------------------

--
-- Table structure for table `facultys`
--

CREATE TABLE `facultys` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(150) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultys`
--

INSERT INTO `facultys` (`id`, `img`, `name`, `designation`, `qualification`, `institute`) VALUES
(2, 'upload/913292584190845966834557TasnimZahan.jpg', 'Tasnim Zahan', 'Assistant Professor & Head', 'B.Sc. (Engg.) in CSE', 'Shahjalal University of Science & Technology'),
(3, 'upload/335889365464365404131728AlMehdiSaadatChowdhury.jpg', 'Al Mehdi Saadat Chowdhury', 'Assistant Professor ', 'M.Sc. (Thesis) in CSE', 'Shahjalal University of Science & Technology'),
(4, 'upload/133706193576778806095268head.jpg', 'Noushad Sojib', 'Assistant Professor ', 'B.Sc. (Engg.) in CSE', 'Shahjalal University of Science & Technology'),
(5, 'upload/3995795491217754045067AhnafFarhan.jpg', 'Ahnaf Farhan (On Study Leave)   ', 'Lecturer', 'B.Sc. (Engg.) in CSE', 'Shahjalal University of Science & Technology'),
(6, 'upload/2593069163816085242203Shahadat_Hussain_Parvej.jpg', 'Shahadat Hussain Parvez', 'Lecturer', 'B.Sc. (Engg.) in CSE', 'Shahjalal University of Science & Technology'),
(7, 'upload/616169924009756820011889Mir_Lutfur_Rahman.jpg', 'Mir Lutfur Rahman', 'Lecturer', 'B.Sc. (Engg.) in CSE', 'North East University Bangladesh'),
(8, 'upload/171379388401264646790123Pranta_Sarker.jpg', 'Pranta Sarker', 'Lecturer', 'B.Sc. (Engg.) in CSE', 'North East University Bangladesh'),
(9, 'upload/72014116147788359457843Nafisa_Noushin.jpg', 'Nafisa Nowshin', 'Lecturer', 'B.Sc. (Engg.) in CSE', 'Shahjalal University of Science & Technology'),
(10, 'upload/751553889024137040490018Md._Mahir_Hasan_Chowdhury.jpg', 'Md. Mahir Hasan Chowdhury', 'Lecturer', 'B.Sc. (Engg.) in CSE', 'Shahjalal University of Science & Technology'),
(11, 'upload/763500839674135355953439Buddho_Chandra_Banik.jpg', 'Buddha Chandra Banik', 'Lecturer', 'B.Sc. (Engg.) in CSE', 'Shahjalal University of Science & Technology');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `name`, `email`, `password`) VALUES
(1, 'mdkamrulislam', 'admin@gmail.com', '123456'),
(2, 'Anamika pal', 'palanamika701@gmail.com', '125'),
(3, 'Anamika pal', 'anamikapaul910@gmail.com', '128'),
(4, 'Anamika', 'paulanamika701@gmail.com', '125');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `notice-details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `pdf`, `notice-details`) VALUES
(6, 'Notice of Semester Final Exam, Summer- 2020', 'upload/912938980732912654852845CSERoutineSummer2020Final_COL_forDistribution.pdf', 'This is to inform all students of North East University Bangladesh that according to the guideline of University Grants Commission (UGC) and the Authority of NEUB the Semester Final Online Examinations of Summer-2020 will be taken place between October 01, 2020 to October 10, 2020.  All concerned students of Summer-2020 Semester are advised to contact their respective Heads of Departments and concern course teachers to get detail guideline about the online examinations.  * Students are requested to clear their dues (if any).  * Due to COVID-19 pandemic situation the students are advised to make online payment system through bKash & Rocket for students’ convenience. Students are hereby requested to follow the attached images for reference.'),
(7, 'Office Order for Headship, Dept. of CSE', 'upload/657271854929912654852845CSERoutineSummer2020Final_COL_forDistribution.pdf', 'Ms. Tasnim Zahan, Assistant Professor, Department of Computer Science & Engineering (CSE) is appointed as Head of the Department of Computer Science & Engineering (CSE) in addition to her normal duties with effect from September 15, 2020 until further order.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultys`
--
ALTER TABLE `facultys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `facultys`
--
ALTER TABLE `facultys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
