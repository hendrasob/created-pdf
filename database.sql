CREATE TABLE `tb_database` (
  `student_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_database` (`student_id`, `name`, `class`, `address`) VALUES
(1, 'Budi Father', '12', 'Jakarta'),
(2, 'Budi Mother', '12', 'Jakarta'),
(3, 'My name Budi', '10', 'Jakarta'),
(4, 'Budi Brother', '10', 'Jakarta'),
(5, 'Budi Sister', '9', 'Jakarta');