use jquery_evidence;

drop table if exists user;
CREATE TABLE `user` (
  `id` int(10) NOT NULL primary key auto_increment,
  `pass` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pass`, `email`) VALUES
(1, '1234', 'admin@hotmail.com'),
(2, '1234', 'demo@hotmail.com'),
(4, '1234', 'sumon@gmail.com'),
(5, '1234', 'rowdra@email.com'),
(6, '1234', 'admin@email.com');