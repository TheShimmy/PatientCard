CREATE TABLE `patients` (
  `patientID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `pesel` int(11) NOT NULL,
  PRIMARY KEY (`patientID`)
);

CREATE TABLE `examinations` (
  `examinationID` int(11) NOT NULL AUTO_INCREMENT,
  `patientID` int(11) NOT NULL,
  `exam_type` tinytext NOT NULL,
  `exam_notes` text NOT NULL,
  `exam_date` datetime NOT NULL,
  `weight` tinyint(3) UNSIGNED,
  `temperature` tinyint(2) UNSIGNED,
  PRIMARY KEY (`examinationID`),
  FOREIGN KEY (`patientID`)
    REFERENCES patients(`patientID`)
);
