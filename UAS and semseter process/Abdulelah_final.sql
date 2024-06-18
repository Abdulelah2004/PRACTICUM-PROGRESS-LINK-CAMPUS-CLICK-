SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `students` (`id`, `student_name`, `major`) VALUES
(4, 'Abdulelah', 'Computer Science'),
(7, 'Ahmed', 'Linguistics '),
(8, 'mohammed', 'Islamic studeies');

ALTER TABLE `students` AUTO_INCREMENT = 12;

COMMIT;
