CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `created` date NOT NULL,
  `comleted` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;