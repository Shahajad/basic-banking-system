--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` Integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` Integer NOT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP
);

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Vishal', 'vishal@mail.com', 6000),
(2, 'Deepak', 'deepak@mail.com', 1000),
(3, 'Devika', 'devika@mail.com', 10000),
(4, 'Neeraja', 'neeraja@mail.com', 9000),
(5, 'Sreya', 'sreya@mail.com', 8000),
(6, 'Nisha', 'nisha@mail.com', 2000),
(7, 'BKK', 'BKK@mail.com', 3000),
(8, 'Tom', 'tom@mail.com', 1000),
(9, 'Jerry', 'jerry@mail.com', 8000),
(10, 'Justin', 'justin@mail.com', 15000);
