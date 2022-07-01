CREATE TABLE `toll` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `location` varchar(255),
  `price` int,
  `created_at` timestamp
);

CREATE TABLE `vehicle` (
  `license_plate` varchar(255) PRIMARY KEY,
  `discount` int,
  `passing_through` int,
);

CREATE TABLE `owner` (
  `cpf` int PRIMARY KEY,
  `name` varchar(255),
  `age` int,
  `budget` float
);

ALTER TABLE `toll` ADD FOREIGN KEY (`id`) REFERENCES `vehicle` (`license_plate`);

ALTER TABLE `vehicle` ADD FOREIGN KEY (`license_plate`) REFERENCES `owner` (`cpf`);