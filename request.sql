CREATE SCHEMA `sign`;

CREATE TABLE `sign`.`students` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255),
  `nom` varchar(255),
  `prenom` varchar(255)
);

CREATE TABLE `sign`.`registration` (
  `idStudent` int,
  `currentDate` date,
  `enterTime` datetime,
  `exitDate` datetime
);

ALTER TABLE `sign`.`registration` ADD FOREIGN KEY (`idStudent`) REFERENCES `sign`.`students` (`id`);

INSERT INTO students (pseudo, nom, prenom) VALUES
('Olawale22', 'BABATUNDE', 'Sulaiman'),
('Guibar', 'BARRE', 'Guillaume'),
('Mahdi', 'BEN ABDELSALEM', 'Mehdi'),
('YHA', 'BENALI', 'Yahya'),
('mus_36', 'BENAZZOUZ', 'Mustapha'),
