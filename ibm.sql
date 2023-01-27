-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2023 at 03:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibm`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `ID` int(11) NOT NULL,
  `IV` text DEFAULT NULL,
  `messageID` text DEFAULT NULL,
  `recipientName` text DEFAULT NULL,
  `emailSubject` text DEFAULT NULL,
  `emailCode` text DEFAULT NULL,
  `TimeStamp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`ID`, `IV`, `messageID`, `recipientName`, `emailSubject`, `emailCode`, `TimeStamp`) VALUES
(1, 'IszzVoLMQJlRMGJKK4A1fA', 'exWvWD3jRertvoDRl6FT2akmvTVV2KtF5HduXK2tDS27qFmLxgwH9zfp4JnbgA', 'EFa4VGa6Usuo49vBnQ', 'GWqJcS+GAOeq6dPGqawih6l+/C1g2LoBtyxoCOynVXD43Vfd4w', 'dhOKDj7lS8v1u/SAxrghrvBToTt3+Pou6Ac6XNr7DSs', 'cBP5DyLmQ6XyuZCDxLZT3/Ilpw'),
(2, 'hp3/nMtemCyUY6H8Pt0F4Q', '37Ckzl+4NSeX1EtwETnQz2gSW6gC7NxqsuRpBZYdKAHHC8mGqW9tUXIJ7KxNGw', 'ufLulQTlJ1LS3UFlHA', 'sM7fsE3ZdX7Q10liKDShwzBCGrEyvs8usbw5AIZHcwnQKseHjA', 'rrWtyVvPMFWJ9hIuQSam7GZpR6BS7opw5pZtVsVvLlY', '2bevzkC5NjyIhQomQi7Wm2sZRA'),
(3, 'zfzxTSza3Jv+VAgmi3hCcQ', 'p5pSCpMmDSG9mJE1L00BzjItqMKRt7wjJ8mnjNvHDWCER8nEs9rHc9wE+GII+A', 'zYwZBpt+TFv4lsx2IA', 'xLAoI9JCHnf6nMRxFEB0jSRx4M6H7e1vZJf6hJ/gATPQ', 'qMhTKLMrWlyhuuVAeFQGyRIhwZGxxb48VMzR0/3mV2c', 'rclYXd8iXTWizoc1floBwWossw'),
(4, '6woxWzv0cgO3/r8Di8Dscg', '61HDvaI4T/ljHcRS7XB5tgvYRqmeQPGCT2oKjzvic98PSUQI5cYfS9ZfDOYHAA', 'iELT4fJgX48mFJgT4Q', 'gX7ixLtcDaMkHpAU1X0M+k+IDqXYHaTOCjVVgiPHKYJa', '6nSSvN41TPoIP8ZTv2t5vgylWPPvNvHqRxkN3UGyB6A', '6AeSurY8TuF8TNNQv2d4uwHQWQ'),
(5, 'YE2pGRUREPcYFF+xRsMTEw', 'GsFuAzZ7e1lFojLUdeX7/kKuy+dllDMQImjJuh5I1fZcQwnaeLClK5SmhYEOGQ', 'eYUrCGl1OXkA+2iVLg', 'cLkaLSBJa1UC8WCSGuiOugP2g+h0n2BcZGWU7Vgyi6sO', 'brYaUzEuKAkqoUfTd/iM+jSs0sVFtDZ7Vju6x0lC0/4', 'GcBqUy0pKBdaoyPWf/L//U2u0Q'),
(6, 'WMalaXqHSclJidPi6Mjs1Q', 'OFeaz9kxYRc24bMqJ+GxuEw7/DbfErZ9JbIZYfjvKgph34nQqv25cSVi2HF5mQ', 'WBKNltVtJGZz7e48Kw', 'US68s5xRdkpx5+Y7H+zErwxhtGCdSbMxab4QauuVIFY0', 'O1/OzI00M2AqtbwKdfvEn0o+kEjcZZERKJRGNP6TenM', 'OFfMzZExNQgptaV/eva17UI94w');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `IV` text DEFAULT NULL,
  `Name` text DEFAULT NULL,
  `Mobile` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `Role` text DEFAULT NULL,
  `Active` int(11) DEFAULT NULL,
  `Salt` text DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `accessCount` text DEFAULT NULL,
  `lastLoginID` text DEFAULT NULL,
  `lastLogin` text DEFAULT NULL,
  `secQuestion01` text DEFAULT NULL,
  `secAnswer01` text DEFAULT NULL,
  `secQuestion02` text DEFAULT NULL,
  `secAnswer02` text DEFAULT NULL,
  `secQuestion03` text DEFAULT NULL,
  `secAnswer03` text DEFAULT NULL,
  `TimeStamp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `IV`, `Name`, `Mobile`, `Email`, `Role`, `Active`, `Salt`, `Password`, `accessCount`, `lastLoginID`, `lastLogin`, `secQuestion01`, `secAnswer01`, `secQuestion02`, `secAnswer02`, `secQuestion03`, `secAnswer03`, `TimeStamp`) VALUES
(1, 'E/dQNdOrGI9WspEvrtA+YQ', 'unm9fQUdDDqvJDpGTA', '0Tn/J1hDGEH3fQ', 'mnm9fQUdAgukCzhWSRrQ4AJp5Hk', 'vV+LRw', 0, '3G36Iw4XTRz+LzcGRBSStkg7syXSlwnZPNh/BR/EIpE', '32r2JQ0UFEzwKjIDF0CdtRk6uSDWxgHdbN9+ABjOdchU1EKZnn55EEY1gfx1EZWUVCGqq8WIpoaYbcbKmQWnPg', NULL, NULL, NULL, 'v2SvYUwSRQ2+ayZQVxCF/UN/q3aPhleYMIZ2', 'qWSjcAgQThij', 'v2SvYUwGTQrnMj5AV1XB9kV84nqH1FDWKpw7RhmDfNtHllLIwW85VF89hKl1Gw', 'oUiF', 'v2SvYUwGTQrnPzlQBRvE6Ukq5HLAgFHdeY4gQQmDM9oDjR3BxD0zTwpzl6F9QcCUUDCz84aYoN2YYpCalg', 'rGOgMhhRXhyqLjxXQAc', '2jz8JkFBHVT1fnEEFU+RsRY4ug'),
(2, 'irybF78YsPdOTEncuDpl2w', 'ezQpMLwXUKqjHQTL6Q', 'EHRrauFJRNH7RA', 'WzQpMLwXXpuoMgjV4Wo3fqZG+A', 'fBIfCg', 1, 'S3JjYbROQdv+Qg6J4TNuMfQY9MhiLHXTfgpKAKwRkPc', 'EXVvbLAZSIz9Ql+Ms2FiYfIYo8Jke3yDfl1GVaoSw6Rrlq7a4O0tBLI5Rpm+tqQxLR/T+jK7ERBFDirt4T+/3w', NULL, NULL, NULL, 'fik7LPUYGZ2yUhjd8mZ7KapctZhuPCORJ1BM', 'GA', 'fik7LPUMEZrrCwDN8iM/Iqxf/JRmbiTfPUoBQ/1VzrIuhLiI76lnE/ZgQsztvQ', 'Gw', 'fik7LPUMEZrrBgfdoG06PaAJ+pwhOiXUblgaRO1VgbNqn/eB6vttCKMuUcTl56gyfw7BoyT/RBoUUiG56Q', 'Gg', 'G3Foa/hLQcT5RU+ItzlpZf8Yow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
