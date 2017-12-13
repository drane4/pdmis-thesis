

CREATE TABLE `employeeprofile` (
  `employee_num` int(5) NOT NULL AUTO_INCREMENT,
  `status` int(1) NOT NULL,
  `firstname` char(50) NOT NULL,
  `middlename` char(1) NOT NULL,
  `address` text NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `mobile` varchar(18) NOT NULL,
  `position` char(15) NOT NULL,
  `lastname` char(50) NOT NULL,
  `transaction` int(1) NOT NULL,
  `employeeid` varchar(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `transaction_a` int(1) NOT NULL,
  `patientprofile_a` int(1) NOT NULL,
  `employeeprofile_a` int(1) NOT NULL,
  `labtest_a` int(1) NOT NULL,
  `nephrologist_a` int(1) NOT NULL,
  `descriptors_a` int(1) NOT NULL,
  `userprofile_a` int(1) NOT NULL,
  `maintenance_a` int(1) NOT NULL,
  `reports_a` int(1) NOT NULL,
  `account` varchar(1) NOT NULL,
  PRIMARY KEY (`employeeid`) USING BTREE,
  KEY `employee_num` (`employee_num`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO employeeprofile VALUES("1","1","Carl","a","admin","","123","Admin","Betio","0","E0001","admin","admin","1","1","1","1","1","1","1","1","1","1");
INSERT INTO employeeprofile VALUES("2","1","Jay Allan","L","Aguinaldo Street, Silay City, Negros Occidental","","09206348946","Nurse","Vasquez","1","E0002","","","0","0","0","0","0","0","0","0","0","");
INSERT INTO employeeprofile VALUES("3","1","John Paul","J","#90 Bayabas St. Elena Subdivision, Silay City, Negros Occidental","495 - 4538","09228167114","Nurse","Peornato","1","E0003","","","0","0","0","0","0","0","0","0","0","");
INSERT INTO employeeprofile VALUES("4","1","Guillermo","R","Purok Golf, Brgy. Guinhalaran, Silay City, Negros Occidental","","09207918057","Technician","Margate Sr.","1","E0004","","","0","0","0","0","0","0","0","0","0","");
INSERT INTO employeeprofile VALUES("5","1","Jenelle Marco","A","Lot 42 Block 30 St. Francis Subdivision, Silay City, Negros Occidental","495 - 5569","09055406423","Nurse","Paez","1","E0005","","","0","0","0","0","0","0","0","0","0","");
INSERT INTO employeeprofile VALUES("6","1","Christopher Niño","R","#10 Villa City High, Bacolod City, Negros Occidental","706 - 0186","09182446674","Nurse","Tolimao","1","E0006","","","0","0","0","0","0","0","0","0","0","");
INSERT INTO employeeprofile VALUES("7","1","Rhitt","L","Santan Ville, Brgy 5, Silay City, Negros Occidental","495 - 0108","09327372678","Head Nurse","Bancaya","1","E0007","","","0","0","0","0","0","0","0","0","0","");
INSERT INTO employeeprofile VALUES("8","1","Joebert","P","Purok Pag-asa, Talabaan Zone 1 Cadiz City, Negros Occidental","","09234346532","Nurse","Datu-on","1","E0008","","","0","0","0","0","0","0","0","0","0","");





CREATE TABLE `maintenance` (
  `employeeid` varchar(7) NOT NULL,
  `action` char(6) NOT NULL,
  `m_date` date NOT NULL,
  `name` char(30) NOT NULL,
  KEY `employeeid` (`employeeid`),
  CONSTRAINT `employeeid` FOREIGN KEY (`employeeid`) REFERENCES `employeeprofile` (`employeeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO maintenance VALUES("E0001","Export","2017-12-13","Carl Betio");





CREATE TABLE `nephrologist` (
  `nephrologistnum` int(6) NOT NULL AUTO_INCREMENT,
  `nephrologistid` varchar(8) NOT NULL,
  `n_lname` char(50) NOT NULL,
  `n_fname` char(50) NOT NULL,
  `n_mname` char(2) NOT NULL,
  `n_telephone` varchar(18) NOT NULL,
  `n_mobile` varchar(15) NOT NULL,
  `n_address` text NOT NULL,
  PRIMARY KEY (`nephrologistid`),
  KEY `nephrologistnum` (`nephrologistnum`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO nephrologist VALUES("1","N0001","Alayon","Ricky","A","444 - 2045","09173101106","#20 Celso Tan - Caroll sts, Brgy. Sum-ag, Bacolod City, Negros Occidental");
INSERT INTO nephrologist VALUES("2","N0002","Pramio","Celeste-Jo","V","434 - 2348","09231429248","#323, 109 St. Green Plains Subdivision, Bacolod City, Negros Occidental");
INSERT INTO nephrologist VALUES("3","N0003","Pepingco","Jerome","A","","","A");
INSERT INTO nephrologist VALUES("4","N0004","Tumaneng","Leo Manuel","A","","","A");





CREATE TABLE `patientprofile` (
  `Hospital_Id` varchar(50) NOT NULL,
  `P_Lname` char(50) NOT NULL,
  `P_Fname` char(50) NOT NULL,
  `P_Mname` char(50) NOT NULL,
  `P_BirthDate` date NOT NULL,
  `P_Age` int(5) NOT NULL,
  `P_Sex` char(11) NOT NULL,
  `P_Nationality` char(11) NOT NULL,
  `P_Religion` char(25) NOT NULL,
  `P_CivilStatus` char(11) NOT NULL,
  `P_PermanentAdd` varchar(150) NOT NULL,
  `P_ConNum1` varchar(18) NOT NULL,
  `P_PresentAdd` varchar(150) NOT NULL,
  `P_ConNum2` varchar(18) NOT NULL,
  `P_Relative` char(50) NOT NULL,
  `P_RelativeAdd` varchar(150) NOT NULL,
  `P_RelativeConNum` varchar(18) NOT NULL,
  `P_AgeFD` int(5) NOT NULL,
  `P_Erythropoetin` varchar(50) NOT NULL,
  `P_Diagnosis` varchar(100) NOT NULL,
  `P_PhilHealthNum` varchar(50) NOT NULL,
  `P_DFBName` char(50) NOT NULL,
  `P_DFBRelation` char(50) NOT NULL,
  `P_InDial` date NOT NULL,
  `dialysistype` int(1) NOT NULL,
  `nephrologistid` varchar(8) NOT NULL,
  PRIMARY KEY (`Hospital_Id`),
  KEY `nephrologistid` (`nephrologistid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO patientprofile VALUES("40-24-17","Roa","Corazon","Dionio","1937-09-06","80","Female","Filipino","Roman Catholic","Widow","361 Quezon Street, Brgy. 5, Victorias City, Negros Occidental","09194040465","361 Quezon Street, Brgy. 5, Victorias City, Negros Occidental","09194040465","Sheila Seballos","Purok 1B, Da-an Banwa, Brgy.9, Victorias City, Negros Occidental","399-2719","76","Epoetin Alfa 4,000 IU 2x/week","ESRD SECONDARY TO HYPERTENSIVE NEPHROSCLEROSIS","1117-5245-5909","Sheila Seballos","Daughter","2013-09-21","0","N0004");



