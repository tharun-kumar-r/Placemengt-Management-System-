-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2022 at 12:46 PM
-- Server version: 5.6.51
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajsofto_educms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`, `name`) VALUES
(1, 'admin@gpt.com', 'c892aa09efb52d5b04cf3be0756302a0', 'ADMIN GPT\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `ipid` text NOT NULL,
  `seen` int(11) NOT NULL DEFAULT '0',
  `msg` text,
  `date` varchar(200) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `ipid`, `seen`, `msg`, `date`, `admin`) VALUES
(64, '131cs16055', 1, 'Hi', 'June 24, 2022, 5:23 pm', 0),
(65, '131cs16055', 1, 'I do you know iam', 'June 24, 2022, 5:23 pm', 0),
(66, '131cs16055', 1, 'Please reply', 'June 24, 2022, 5:23 pm', 0),
(67, '131cs16055', 1, 'Error with server connection', 'June 24, 2022, 5:26 pm', 0),
(68, '131cs16055', 1, 'ya tell', 'June 24, 2022, 5:30 pm', 1),
(69, '131cs16055', 1, 'Thank you', 'June 24, 2022, 5:30 pm', 0),
(70, '131cs16055', 1, ' Oky', 'June 24, 2022, 5:34 pm', 0),
(71, '131cs16055', 1, 'Hii', 'June 24, 2022, 5:34 pm', 0),
(72, '131cs16055', 1, 'Hi', 'June 24, 2022, 5:34 pm', 0),
(73, '131cs16055', 1, 'Hi', 'June 24, 2022, 5:34 pm', 0),
(74, '131cs16055', 1, 'Ho', 'June 24, 2022, 5:37 pm', 0),
(75, '131cs16055', 1, 'Bro', 'June 24, 2022, 5:37 pm', 0),
(76, '131cs16055', 1, 'Telll', 'June 24, 2022, 5:38 pm', 1),
(77, '131cs16055', 1, 'Don\'t forget to upload the file', 'June 24, 2022, 5:38 pm', 1),
(78, '131cs16055', 1, 'Whic file', 'June 24, 2022, 5:38 pm', 0),
(79, '131cs16055', 1, 'Xml', 'June 24, 2022, 5:38 pm', 1),
(80, '131cs16055', 1, 'https://edu.rajsoft.org.in/cms/admin/chatnow?id=131cs16055', 'June 24, 2022, 5:38 pm', 1),
(81, '131cs16055', 1, 'Ojy', 'June 24, 2022, 5:39 pm', 0),
(82, '131cs16055', 1, 'Testing', 'June 24, 2022, 8:04 pm', 0),
(83, '131cs16055', 1, 'Hi', 'June 24, 2022, 8:06 pm', 0),
(84, '131cs16055', 1, 'hlo', 'June 24, 2022, 8:06 pm', 1),
(85, '131cs16055', 1, 'what yopu mwamjbj', 'June 24, 2022, 8:06 pm', 1),
(86, '131cs16055', 1, 'knlknl', 'June 24, 2022, 8:06 pm', 1),
(87, '131cs16055', 1, 'mknk', 'June 24, 2022, 8:06 pm', 1),
(88, '131cs16055', 1, 'Ok', 'June 24, 2022, 8:30 pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `text` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `text`, `link`) VALUES
(1, 'Diploma results karnataka 2022 Out Now click ->', 'https://btelinx.in/'),
(2, 'Admission opened for the year of 2021-2022', 'https://dte.karnataka.gov.in/Institutes/gptkgf/');

-- --------------------------------------------------------

--
-- Table structure for table `offcamp`
--

CREATE TABLE `offcamp` (
  `id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offcamp`
--

INSERT INTO `offcamp` (`id`, `photo`, `title`, `description`, `link`, `date`) VALUES
(3, 'https://d8it4huxumps7.cloudfront.net/bites/wp-content/banners/2022/1/61d6f5dd570c2_wipro_elite_nth_2022.png?d=700x400', 'Wipro Elite National Talent Hunt 2022', 'PHA+UXVhbGlmaWNhdGlvbjwvcD4KCjx1bD4KCTxsaT48c3Ryb25nPkIuRS4vQi4gVGVjaCAoQ29tcHVsc29yeSBkZWdyZWUpLyBNLkUuL00uIFRlY2ggKDUteWVhciBpbnRlZ3JhdGVkIGNvdXJzZSkgZnVsbC10aW1lIGNvdXJzZSByZWNvZ25pemVkIGJ5IHRoZSBDZW50cmFsL1N0YXRlIEdvdmVybm1lbnQgb2YgSW5kaWE8L3N0cm9uZz48L2xpPgoJPGxpPjxzdHJvbmc+QWxsIGJyYW5jaGVzIGV4Y2VwdCBGYXNoaW9uIFRlY2hub2xvZ3ksIFRleHRpbGUgRW5naW5lZXJpbmcsIEFncmljdWx0dXJlIGFuZCBGb29kIHRlY2hub2xvZ3k8L3N0cm9uZz48L2xpPgoJPGxpPjxzdHJvbmc+NjAlIG9yIDYuMCBDR1BBIG9yIGVxdWl2YWxlbnQgYXMgcGVyIHlvdXIgdW5pdmVyc2l0eSBndWlkZWxpbmVzPC9zdHJvbmc+PC9saT4KCTxsaT5Pbmx5IGZ1bGx0aW1lIGNvdXJzZXM6IE5vIHBhcnQtdGltZSBvciBjb3JyZXNwb25kZW5jZSBvciBkaXN0YW5jZSBsZWFybmluZyBlZHVjYXRpb24gaW4gZGVncmVlLCAxMHRoIG9yIDEydGg8L2xpPgoJPGxpPjEwdGggc3RhbmRhcmQ6IDYwJSBvciBhYm92ZTwvbGk+Cgk8bGk+MTJ0aCBzdGFuZGFyZDogNjAlIG9yIGFib3ZlPC9saT4KPC91bD4KCjxwPlllYXIgb2YgUGFzc2luZzwvcD4KCjx1bD4KCTxsaT4yMDIxICZhbXA7IDIwMjI8L2xpPgo8L3VsPgoKPHVsPgo8L3VsPgoKPHVsPgo8L3VsPgoKPHA+RGVzaWduYXRpb248L3A+Cgo8dWw+Cgk8bGk+UHJvamVjdCBFbmdpbmVlcjwvbGk+CjwvdWw+Cgo8cD5SZXZpc2VkIENvbXBlbnNhdGlvbjwvcD4KCjx1bD4KCTxsaT5Qcm9qZWN0IEVuZ2luZWVyPC9saT4KCTxsaT5Kb2luaW5nIENvbXAgJm5kYXNoOyAzNTAwMDA8L2xpPgoJPGxpPkZsYXQgQm9udXMgcG9zdCA2IG1vbnRocyBmcm9tIGpvaW5pbmcgJm5kYXNoOyAyNUsgKHRvIGJlIG1lcmdlZCB3aXRoIGNvbXAgYWZ0ZXIgMTIgbW9udGhzIG9mIGJvbnVzIHBheW91dCk8L2xpPgoJPGxpPlJlZ3VsYXIgeWVhcmx5IGluY3JlbWVudHM8L2xpPgoJPGxpPk1lcmdlIEJvbnVzZXMgb24gMTh0aCwgMjR0aCBhbmQgMzZ0aCBtb250aHMgZnJvbSBET0o8L2xpPgo8L3VsPgoKPHA+Q29tcGVuc2F0aW9uPC9wPgoKPHVsPgoJPGxpPklOUiAzLjUwIGxhY3MgcGVyIGFubnVtPC9saT4KPC91bD4KCjxwPlNlcnZpY2UgQWdyZWVtZW50PC9wPgoKPHVsPgoJPGxpPkFwcGxpY2FibGUgZm9yIDEyIG1vbnRocyBwb3N0IGpvaW5pbmcgQCBJTlIgNzUsMDAwIG9uIHBybyByYXRhIGJhc2lzPC9saT4KPC91bD4KCjxwPk90aGVyIENyaXRlcmlhPC9wPgoKPHVsPgoJPGxpPk9uZSBCYWNrbG9nIGlzIGFsbG93ZWQgYXQgdGhlIHRpbWUgb2YgQXNzZXNzbWVudCBTdGFnZS48L2xpPgoJPGxpPlRoZSBvZmZlciB3aWxsIGJlIHN1YmplY3QgdG8gYWxsIGJhY2tsb2dzIGJlaW5nIGNsZWFyLjwvbGk+Cgk8bGk+TWF4IDMgeWVhcnMgb2YgR0FQIGluIGVkdWNhdGlvbiBhbGxvd2VkICgxMHRoIHRvIGdyYWR1YXRpb24pPC9saT4KCTxsaT5DYW5kaWRhdGVzIHdobyBoYXZlIHBhcnRpY2lwYXRlZCBpbiBhbnkgc2VsZWN0aW9uIHByb2Nlc3MgaGVsZCBieSBXaXBybyBpbiB0aGUgbGFzdCBzaXggbW9udGhzIGFyZSBub3QgZWxpZ2libGUuPC9saT4KCTxsaT5TaG91bGQgYmUgYW4gSW5kaWFuIENpdGl6ZW4gb3Igc2hvdWxkIGhvbGQgYSBQSU8gb3IgT0NJIGNhcmQsIGluIHRoZSBldmVudCBvZiBob2xkaW5nIGEgcGFzc3BvcnQgb2YgYW55IG90aGVyIGNvdW50cnkuPC9saT4KCTxsaT5CaHV0YW4gYW5kIE5lcGFsIE5hdGlvbmFscyBuZWVkIHRvIHN1Ym1pdCB0aGVpciBjaXRpemVuc2hpcCBjZXJ0aWZpY2F0ZS48L2xpPgo8L3VsPgo=', 'https://app.joinsuperset.com/join/#/signup/student/jobprofiles/f51e03a3-9057-4502-8f77-2341376c9c50', 'June 22, 2022, 4:25 pm'),
(4, 'https://media.geeksforgeeks.org/wp-content/uploads/20211126212504/ninjaHiringmin.png', 'TCS Ninja Recruitment Test', 'PHA+VENTIGlzIG9uZSBvZiB0aGUgbGFyZ2VzdCBJbmRpYW4gY29tcGFuaWVzIGJ5IG1hcmtldCBjYXBpdGFsaXphdGlvbiAoJDgwIGJpbGxpb24pLiBUQ1MgaXMgbm93IHBsYWNlZCBhbW9uZyB0aGUgJmxzcXVvO0JpZyA0JnJzcXVvOyBtb3N0IHZhbHVhYmxlIElUIHNlcnZpY2VzIGJyYW5kcyB3b3JsZHdpZGUuIFRDUyBhbG9uZSBnZW5lcmF0ZXMgNzAlIGRpdmlkZW5kcyBvZiBpdHMgcGFyZW50IGNvbXBhbnksIFRhdGEgU29ucy4gSW4gMjAxNSwgVENTIGlzIHJhbmtlZCA2NnRoIG92ZXJhbGwgaW4gdGhlIEZvcmJlcyBXb3JsZCZyc3F1bztzIE1vc3QgSW5ub3ZhdGl2ZSBDb21wYW5pZXMgcmFua2luZywgbWFraW5nIGl0IGJvdGggdGhlIGhpZ2hlc3QtcmFua2VkIElUIHNlcnZpY2VzIGNvbXBhbnkgYW5kIHRoZSB0b3AgSW5kaWFuIGNvbXBhbnkuIEl0IGlzIHRoZSB3b3JsZCZyc3F1bztzIDEwdGggbGFyZ2VzdCBJVCBzZXJ2aWNlcyBwcm92aWRlciBieSByZXZlbnVlLiBBcyBvZiBEZWNlbWJlciAyMDE1LCBpdCBpcyByYW5rZWQgMTB0aCBvbiB0aGUgRm9ydHVuZSBJbmRpYSA1MDAgbGlzdC48YnIgLz4KJm5ic3A7PC9wPgoKPHA+SW4gdGhpcyBwcm9jZXNzLCBmcmVzaGVycyBjYW4gYXBwbHkgZnJvbSBVRy9QRyBjYXRlZ29yeS4gU2FsYXJ5IHdvdWxkIGJlIElOUiAzLDM2LDg3NzwvcD4KCjxwPjxzdHJvbmc+RWxpZ2liaWxpdHkgQ3JpdGVyaWE6PC9zdHJvbmc+PC9wPgoKPHVsPgoJPGxpPkIuRS4gLyBNLkUuIC8gQi5UZWNoIC8gTS5UZWNoIC8gTUNBIC8gTS5TYyB3aXRoIDYwJSBvciA2IENHUEEgaW4gYWxsIG92ZXIgZWR1Y2F0aW9uIDEwdGgsMTJ0aCwgVUcgb3IgUEcuPC9saT4KCTxsaT5Ob3QgbW9yZSB0aGFuIDEgQXJyZWFyIHdoaWxlIHNpdHRpbmcgaW4gdGhlIHNlbGVjdGlvbiBwcm9jZXNzLiBBbmQgYXQgdGhlIHRpbWUgb2Ygam9pbmluZyB0aGVyZSBzaG91bGQgYmUgbm8gcGVuZGluZyBiYWNrbG9ncy48L2xpPgoJPGxpPk5vdCBubyBtb3JlIHRoYW4gMiB5ZWFycyBvZiBlZHVjYXRpb24gZ2FwLjwvbGk+Cgk8bGk+RnVsbC10aW1lIGVkdWNhdGlvbiB3aWxsIGJlIHByZWZlcnJlZCAoRGlzdGFuY2UgZWR1Y2F0aW9uIGlzIG5vdCBhbGxvd2VkKS48L2xpPgo8L3VsPgoKPHA+PHN0cm9uZz5BcHBseSBQcm9jZXNzOjwvc3Ryb25nPjwvcD4KCjx1bD4KCTxsaT5PcGVuIFRDUyBOZXh0IFBvcnRhbC48L2xpPgoJPGxpPkFwcGx5IGluIG5leHQgcG9ydGFsIHRvIFRDUyBOaW5qYSBIaXJpbmcgcHJvY2VzcyBhbmQgZmlsbCBpbiBhbGwgZGV0YWlsczwvbGk+Cgk8bGk+QWZ0ZXIgY29tcGxldGlvbiBvZiB0aGUgZm9ybSBjbGljayBvbiBBcHBseSBmb3IgZHJpdmUgb3B0aW9uLjwvbGk+CjwvdWw+Cgo8cD48c3Ryb25nPk9ubGluZSBUZXN0IFBhdHRlcm48L3N0cm9uZz48L3A+Cgo8dGFibGU+Cgk8dGJvZHk+CgkJPHRyPgoJCQk8dGQ+U2VjdGlvbjwvdGQ+CgkJCTx0ZD5UaW1lPC90ZD4KCQkJPHRkPk51bWJlciBvZiBRdWVzdGlvbnM8L3RkPgoJCTwvdHI+CgkJPHRyPgoJCQk8dGQ+TnVtZXJpY2FsIEFiaWxpdHk8L3RkPgoJCQk8dGQ+NDA8L3RkPgoJCQk8dGQ+MjY8L3RkPgoJCTwvdHI+CgkJPHRyPgoJCQk8dGQ+UmVhc29uaW5nPC90ZD4KCQkJPHRkPjUwPC90ZD4KCQkJPHRkPjMwPC90ZD4KCQk8L3RyPgoJCTx0cj4KCQkJPHRkPlZlcmJhbCBBYmlsaXR5PC90ZD4KCQkJPHRkPjMwPC90ZD4KCQkJPHRkPjI0PC90ZD4KCQk8L3RyPgoJCTx0cj4KCQkJPHRkPlByb2dyYW1taW5nPC90ZD4KCQkJPHRkPjYwPC90ZD4KCQkJPHRkPjIgQ29kZSArMTUgTUNRJm5ic3A7PC90ZD4KCQk8L3RyPgoJPC90Ym9keT4KPC90YWJsZT4KCjxwPjxzdHJvbmc+Um91bmQgMjo8L3N0cm9uZz48L3A+Cgo8dWw+Cgk8bGk+SWYgeW91IGhhdmUgY2xlYXJlZCB0aGUgT25saW5lIHRlc3QgdGhlbiBUQ1Mgd2lsbCBjb250YWN0IHlvdSBmb3IgZnVydGhlciByb3VuZHMgd2lsbCBpbmNsdWRlOjwvbGk+Cgk8bGk+VGVjaG5pY2FsIFJvdW5kPC9saT4KCTxsaT5NYW5hZ2VyaWFsIFJvdW5kPC9saT4KCTxsaT5IUiBSb3VuZDwvbGk+CjwvdWw+Cgo8cD5JZiB5b3UgY2xlYXJlZCB0aGUgYWJvdmUgcm91bmQgeW91IHdpbGwgZ2V0IGFuIG9mZmVyIGxldHRlciBvbiB5b3VyIFRDUyBOZXh0IFN0ZXAgcG9ydGFsLjwvcD4K', 'https://www.tcs.com/careers/TCSFresherHiringYoP2023', 'June 24, 2022, 7:59 pm');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `cource` varchar(100) NOT NULL,
  `fee` varchar(200) NOT NULL DEFAULT 'N/A',
  `sem1` varchar(200) DEFAULT NULL,
  `sem2` varchar(200) DEFAULT NULL,
  `sem3` varchar(200) DEFAULT NULL,
  `sem4` varchar(200) DEFAULT NULL,
  `sem5` varchar(200) DEFAULT NULL,
  `sem6` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `regno`, `pass`, `name`, `dob`, `mobile`, `email`, `address`, `qualification`, `cource`, `fee`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`) VALUES
(1, '131CS16055', 'fcea920f7412b5da7be0cf42b8c93759', 'Tharun Kumar R', '24/03/2001', '7483440063', 'rajtharunir@gmail.com', '#143 lower Maskam D block, KGF, Karnataka, -563113', 'Diploma', 'Computer science and engg', 'N/A', 'https://www.7-zip.org/a/7z2107-x64.exe', 'https://www.7-zip.org/a/7z2107-x64.exe', 'https://www.7-zip.org/a/7z2107-x64.exe', 'https://www.7-zip.org/a/7z2107-x64.exe', 'https://www.7-zip.org/a/7z2107-x64.exe', 'https://www.7-zip.org/a/7z2107-x64.exe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offcamp`
--
ALTER TABLE `offcamp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offcamp`
--
ALTER TABLE `offcamp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
