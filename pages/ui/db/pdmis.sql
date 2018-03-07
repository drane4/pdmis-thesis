

CREATE TABLE `activitylog` (
  `employeeid` varchar(15) NOT NULL,
  `activity` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `activityid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`activityid`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

INSERT INTO activitylog VALUES("E0001","Login","2018-02-28","08:13:00","33");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","36");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","37");
INSERT INTO activitylog VALUES("E0005","Login","2018-02-28","08:25:00","38");
INSERT INTO activitylog VALUES("E0001","Login","2018-02-28","08:26:00","39");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-01","04:31:00","40");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","41");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-02","10:27:00","42");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-03","12:24:00","43");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","44");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","45");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","46");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","47");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","48");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","49");
INSERT INTO activitylog VALUES("E0001","Update Patient Record","0000-00-00","08:13:00","50");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","51");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","52");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","53");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","54");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","55");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","56");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","57");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","58");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","59");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","60");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","61");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-03","12:21:00","62");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-03","12:25:00","63");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-03","12:25:00","64");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-03","12:55:00","65");





CREATE TABLE `confinement` (
  `hospitalname` varchar(30) NOT NULL,
  `confinementdate` date NOT NULL,
  `confinementreason` varchar(100) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `confinement_id` int(11) NOT NULL AUTO_INCREMENT,
  `confinement_monthyear` char(20) NOT NULL,
  PRIMARY KEY (`confinement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO confinement VALUES("Doctors","2015-12-15","Car accident","86-89-17","1","");
INSERT INTO confinement VALUES("asda","2018-02-14","Highblood","01-26-22","2","2018, February");
INSERT INTO confinement VALUES("sample","2018-02-10","wala","01-26-22","3","2018, February");
INSERT INTO confinement VALUES("cebs","2018-01-18","wla","01-26-22","4","2018, January");
INSERT INTO confinement VALUES("TLJPH","2018-02-12","Pneumonia","05-29-07","5","2018, February");
INSERT INTO confinement VALUES("asd","2018-02-12","asd","01-26-22","6","2018, February");
INSERT INTO confinement VALUES("doctors","2018-01-28","reason","01-26-22","9","2018, January");
INSERT INTO confinement VALUES("Corazon Locsin","2017-12-29","difficulty of breathing","45-42-23","10","2017, December");
INSERT INTO confinement VALUES("Corazon Locsin","2014-02-22","re","33-42-13","12","2014, February");
INSERT INTO confinement VALUES("test1","2018-02-06","test","12-12-12","13","2018, February");
INSERT INTO confinement VALUES("test","2018-01-31","s","12-12-12","14","2018, January");
INSERT INTO confinement VALUES("tljph","2018-02-07","fever","86-89-17","15","2018, February");
INSERT INTO confinement VALUES("s","2018-02-06","a","","16","2018, February");
INSERT INTO confinement VALUES("s","2018-02-13","a","","17","2018, February");
INSERT INTO confinement VALUES("aaa","2018-02-21","aa","","18","2018, February");
INSERT INTO confinement VALUES("a","2018-01-31","a","","19","2018, January");
INSERT INTO confinement VALUES("a","2018-01-31","a","","20","2018, January");
INSERT INTO confinement VALUES("a","2018-02-07","a","","21","2018, February");
INSERT INTO confinement VALUES("A","2018-03-02","A","01-26-22","22","2018, March");
INSERT INTO confinement VALUES("TLJPH","2015-02-10","Menstrual Bleeding","01-15-33","23","2015, February");
INSERT INTO confinement VALUES("TLJPH","2012-07-13","Pneumonia","09-18-46","24","2012, July");
INSERT INTO confinement VALUES("BOLMSH","2016-10-25","Pneumonia","08-19-35","25","2016, October");
INSERT INTO confinement VALUES("TLJPH","2012-09-22","Pneumonia","03-18-20","26","2012, September");
INSERT INTO confinement VALUES("TLJPH","2015-10-27","Accident","03-25-11","27","2015, October");
INSERT INTO confinement VALUES("TLJPH","2016-10-27","Pneumonia","05-19-21","28","2016, October");
INSERT INTO confinement VALUES("BOLMSH","2016-10-29","Accident","06-08-23","29","2016, October");
INSERT INTO confinement VALUES("BOLMSH","2015-10-28","Accident","06-15-11","30","2015, October");
INSERT INTO confinement VALUES("TLJPH","2016-09-28","Pneumonia","07-18-01","31","2016, September");
INSERT INTO confinement VALUES("BOLMSH","2016-09-29","Pneumonia","07-36-23","32","2016, September");
INSERT INTO confinement VALUES("TLJPH","2016-10-28","Pneumonia","09-21-35","33","2016, October");
INSERT INTO confinement VALUES("TLJPH","2016-09-30","Pneumonia","10-12-56","34","2016, September");
INSERT INTO confinement VALUES("BOLMSH","2015-09-26","Pneumonia","10-25-17","35","2015, September");
INSERT INTO confinement VALUES("BOLMSH","2016-09-26","Accident","10-25-17","36","2016, September");
INSERT INTO confinement VALUES("BOLMSH","2015-09-27","Pneumonia","11-07-17","37","2015, September");
INSERT INTO confinement VALUES("BOLMSH","2016-09-28","Menstrual Bleeding","11-26-17","38","2016, September");
INSERT INTO confinement VALUES("TLJPH","2016-10-29","Pneumonia","11-37-17","39","2016, October");





;






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
  `employeeid` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `transaction_a` int(1) NOT NULL,
  `patientprofile_a` int(1) NOT NULL,
  `employeeprofile_a` int(1) NOT NULL,
  `schedule_a` int(1) NOT NULL,
  `nephrologist_a` int(1) NOT NULL,
  `userprofile_a` int(1) NOT NULL,
  `maintenance_a` int(1) NOT NULL,
  `reports_a` int(1) NOT NULL,
  `account` varchar(1) NOT NULL,
  PRIMARY KEY (`employeeid`) USING BTREE,
  KEY `employee_num` (`employee_num`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO employeeprofile VALUES("1","1","Carl","a","admin","","123","Admin","Betio","0","E0001","admin","admin","1","1","1","1","1","1","1","1","1");
INSERT INTO employeeprofile VALUES("10","1","Smith","D","La Carlota","","+09 (504) 563-55-6","Nurse","Smith","1","E00010","Carlagi","123","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("11","1","Miriam","P","Bacolod City","","+63 (912) 345-67-8","Nurse","Gayoba","1","E00011","gayoba","miriam","1","1","1","0","1","1","1","0","a");
INSERT INTO employeeprofile VALUES("12","1","Q","Q","Q","","+09 (129) 817-11-2","Technician","Q","1","E00012","","","0","0","0","0","0","0","0","0","");
INSERT INTO employeeprofile VALUES("2","1","Jay Allan","L","Aguinaldo Street, Silay City, Negros Occidental","","09206348946","Nurse","Vasquez","1","E0002","vasquez","vasquez","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("3","1","John Paul","J","#90 Bayabas St. Elena Subdivision, Silay City, Negros Occidental","495 - 4538","09228167114","Nurse","Peornato","1","E0003","peornato","peornato","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("4","1","Guillermo","R","Purok Golf, Brgy. Guinhalaran, Silay City, Negros Occidental","","09207918057","Technician","Margate Sr.","1","E0004","margate","margate","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("5","1","Jenelle Marco","A","Lot 42 Block 30 St. Francis Subdivision, Silay City, Negros Occidental","495 - 5569","09055406423","Nurse","Paez","1","E0005","paez","paez","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("6","1","Christopher Niño","R","#10 Villa City High, Bacolod City, Negros Occidental","706 - 0186","09182446674","Nurse","Tolimao","1","E0006","tolimao","tolimao","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("8","1","Joebert","P","Purok Pag-asa, Talabaan Zone 1 Cadiz City, Negros Occidental","","09234346532","Nurse","Datu-on","1","E0008","datu-on","datu-on","0","0","0","0","0","0","0","0","");
INSERT INTO employeeprofile VALUES("9","1","Alvin","L","Bacolod City","","+23 (321) 332-32-3","Technician","Yanson","1","E0009","yanson","1234","1","1","0","1","1","0","0","1","a");





CREATE TABLE `hemo_order` (
  `esrd_diabetic` int(1) NOT NULL,
  `esrd_chronic` int(1) NOT NULL,
  `esrd_hypertensive` int(1) NOT NULL,
  `esrd_others` varchar(30) NOT NULL,
  `freq_others` varchar(15) NOT NULL,
  `dur_others` varchar(15) NOT NULL,
  `hepastat` int(1) NOT NULL,
  `antihstat` int(1) NOT NULL,
  `hepstatdate` date NOT NULL,
  `antihstatdate` date NOT NULL,
  `access` int(1) NOT NULL,
  `insertdate` date NOT NULL,
  `surgeon` char(25) NOT NULL,
  `avfistula` int(1) NOT NULL,
  `avdate` date NOT NULL,
  `avsurgeon` char(25) NOT NULL,
  `ptfe` int(1) NOT NULL,
  `ptdate` date NOT NULL,
  `ptsurgeon` char(25) NOT NULL,
  `frequency` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `dialyzer` char(20) NOT NULL,
  `reuse` int(1) NOT NULL,
  `dialysatebath` int(1) NOT NULL,
  `hdrug` char(25) NOT NULL,
  `hdose` char(25) NOT NULL,
  `bloodflow` char(5) NOT NULL,
  `targetwt` char(5) NOT NULL,
  `medication` varchar(50) NOT NULL,
  `Hospital_id` varchar(30) NOT NULL,
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

INSERT INTO hemo_order VALUES("1","1","1","sampleothers","freqothers","durothers","0","1","2018-01-29","2018-01-29","2","2018-01-22","sad","1","2018-01-29","sad","1","2018-01-29","sad","1","3 hours","HIPS-18","0","0","sa","dsada","sad","21 Kg","sdasdasd","01-26-22","13","2018-02-09");
INSERT INTO hemo_order VALUES("1","0","0","","0","0","0","0","2018-01-29","2018-01-29","0","2018-01-29","as","1","2018-01-29","asd","1","2018-01-29","a","2","","F8HPS","1","0","sad","dsad","sad"," Kg","sadasd","05-29-07","14","2018-01-29");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","0","2018-02-08","2018-02-08","1","2018-02-09","mango","1","2018-02-09","mango","1","2018-02-09","mango","2","3 hours","F8HPS","0","0","asd","250","sad"," Kg","sad","01-26-22","25","2018-02-09");
INSERT INTO hemo_order VALUES("1","1","1","leptospirosis","1","0","0","0","2018-02-12","2018-02-20","0","2018-02-07","a","1","2018-02-20","as","1","2018-02-11","s","2","3.5 hours","F8HPS","0","0","as","as","as","55","as","A","26","2018-02-11");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","2017-10-30","2017-12-30","1","2018-01-02","","0","2017-03-06","","0","2017-03-05","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","45-42-23","27","2018-02-07");
INSERT INTO hemo_order VALUES("1","1","1","","0","0","0","1","2017-09-16","2017-09-16","0","2015-07-01","Dr. Ranile","1","2015-07-01","Dr. Ranile","0","2017-07-31","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","33-42-13","28","2017-11-22");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","2018-01-29","2018-01-29","0","2018-01-22","sad","1","2018-01-29","sad","1","2018-01-29","sad","1","3 hours","HIPS-18","0","0","","","","21 Kg","sdasdasd","33-42-13","29","2018-02-09");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","2018-01-29","2018-01-29","0","2018-01-29","as","1","2018-01-29","","1","2018-01-29","a","2","","F8HPS","1","0","","",""," Kg","sadasd","65-10-03","30","2018-01-29");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","0","2018-02-08","2018-02-08","1","2018-02-09","mango","1","2018-02-09","mango","1","2018-02-09","mango","2","3 hours","F8HPS","0","0","","",""," Kg","sad","33-42-13","31","2018-02-09");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","2018-01-31","2018-01-28","1","2018-01-30","surgeon","1","2018-02-12","surgeon","1","2018-01-31","sssa","2","3 hours","HIPS-18","1","1","","",""," Kg","mdnkadkwdwdas","01-26-22","32","2018-02-11");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","2017-10-30","2017-12-30","1","2018-01-02","","0","0000-00-00","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","45-42-23","33","2018-02-07");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","1","2017-09-16","2017-09-16","0","2015-07-01","Dr. Ranile","1","2015-07-01","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","33-42-13","34","2017-11-22");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","2017-09-16","2017-09-16","0","2015-07-01","Dr. Ranile","1","2015-07-01","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc","50 Kg","","86-89-17","35","2017-11-22");
INSERT INTO hemo_order VALUES("0","1","0","","","","0","1","2011-01-11","2011-01-11","0","0000-00-00","","1","2018-02-20","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","alex","123","170","75 Kg","","12-12-12","36","2018-02-28");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","2018-02-28","ranile","1","2018-02-14","gonzaga","0","0000-00-00","","1","3 hours","F8HPS","0","0","dalteparin sodium","2500iu","300cc","75 Kg","","AAA-AAA","37","2018-02-28");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","2015-02-10","2015-02-10","0","0000-00-00","","1","2015-02-10","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","01-15-33","38","2018-03-03");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","2015-02-12","2015-02-12","0","0000-00-00","","1","2015-02-12","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","01-21-19","39","2018-03-03");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","2016-12-12","2016-12-12","0","0000-00-00","","1","2016-12-12","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","02-07-15","40","2018-03-03");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","2016-12-12","2016-12-12","0","0000-00-00","","1","2016-12-12","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","03-01-15","41","2018-03-03");
INSERT INTO hemo_order VALUES("0","1","0","","","","0","1","2015-12-20","2015-12-20","0","0000-00-00","","1","2016-12-30","Dr. Alayon","0","0000-00-00","","","","","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","","03-18-20","42","2018-03-03");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","2017-03-07","2017-03-07","1","2017-03-07","","0","2017-03-07","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","03-25-11","43","2017-03-07");
INSERT INTO hemo_order VALUES("1","1","1","","0","0","0","1","2017-06-21","2017-06-21","0","0000-00-00","Dr. Ranile","1","2017-06-21","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg K","","03-45-15","44","2017-06-21");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","2018-01-13","2018-01-13","0","0000-00-00","sad","1","2018-01-13","sad","1","0000-00-00","sad","1","3 hours","HIPS-18","0","0","","","","21 Kg","Fennous sulfate 1tab TID","04-15-08","45","2018-01-13");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","2017-03-06","2017-03-06","0","0000-00-00","as","1","2017-03-06","asd","1","0000-00-00","a","2","","F8HPS","1","0","","",""," Kg","","04-17-26","46","2017-03-06");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","0","2017-05-23","2017-05-23","1","0000-00-00","","1","2017-05-23","mango","0","0000-00-00","","2","3 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","Calcium carbonate 1 tab","05-19-21","47","2017-05-23");
INSERT INTO hemo_order VALUES("1","0","1","","","","0","0","2017-03-15","2017-03-15","1","0000-00-00","","1","2017-03-15","Dr. Alayon","1","0000-00-00","","2","3 hours","HIPS-18","0","1","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID","05-29-07","48","2017-03-15");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","2017-03-13","2017-03-13","1","0000-00-00","","0","2017-03-13","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","06/08/2023","49","2017-03-13");
INSERT INTO hemo_order VALUES("1","0","1","","","","0","1","2016-10-02","2016-10-02","0","0000-00-00","","1","2016-10-02","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg K","Calcium carbonate 1 tab","06-15-11","50","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","2016-10-20","2014-10-20","0","0000-00-00","","1","2016-10-20","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc","50 Kg","","06-36-13","51","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","","","0","1","2017-01-30","2017-01-30","0","0000-00-00","","1","2017-01-30","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","Low Molecular Weight Hepa","2,500 iu","170","75 Kg","","07-18-01","52","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","2016-11-11","2014-11-11","0","0000-00-00","","1","2016-11-11","Dr. Gonzaga","0","0000-00-00","","1","3 hours","F8HPS","0","0","dalteparin sodium","2500iu","300cc","75 Kg","","07-36-23","53","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","2014-02-15","2013-02-15","0","0000-00-00","","1","2010-02-15","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","08-19-35","54","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","2015-02-10","2015-02-10","0","0000-00-00","","1","2015-10-20","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","09-18-46","55","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","2017-02-10","2017-02-10","0","0000-00-00","","1","2014-02-10","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","09-21-35","56","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","10/12/1956","57","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","2007-12-12","2007-12-12","0","0000-00-00","","1","2007-12-12","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","","10-25-17","58","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","2015-08-22","2016-09-22","0","0000-00-00","","1","2016-10-28","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","10-35-56","59","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","11/07/2017","60","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","0","2016-10-22","2015-11-29","0","0000-00-00","","1","2017-10-28","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","11-26-17","61","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","1","","","","0","1","2016-11-22","2016-10-29","0","0000-00-00","","1","2016-10-28","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","11-37-17","62","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","","","","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","","12/12/2012","63","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","2016-02-11","2016-02-11","1","0000-00-00","","1","2016-02-11","Dr. Alayon","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","12-35-11","64","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","1","","","","0","1","2016-02-10","2016-02-10","0","0000-00-00","Dr. Ranile","1","2016-02-10","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg K","","13-18-17","65","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","sad","1","0000-00-00","sad","1","0000-00-00","sad","1","3 hours","HIPS-18","0","0","","","","21 Kg","Fennous sulfate 1tab TID","13-38-01","66","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","0000-00-00","0000-00-00","0","0000-00-00","as","1","0000-00-00","asd","1","0000-00-00","a","2","","F8HPS","1","0","","",""," Kg","","13-67-08","67","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","0","0000-00-00","0000-00-00","1","0000-00-00","mango","1","0000-00-00","mango","1","0000-00-00","mango","2","3 hours","F8HPS","0","0","","",""," Kg","Calcium carbonate 1 tab","14-65-95","68","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","0000-00-00","0000-00-00","1","0000-00-00","surgeon","1","0000-00-00","surgeon","1","0000-00-00","sssa","2","3 hours","HIPS-18","1","1","","",""," Kg","Fennous sulfate 1tab TID","15-16-25","69","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","1","0000-00-00","","0","0000-00-00","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","15-28-07","70","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","Dr. Ranile","1","0000-00-00","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Calcium carbonate 1 tab","16-35-17","71","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","Dr. Ranile","1","0000-00-00","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc","50 Kg","","17-46-21","72","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","1","1","0","1","0000-00-00","0000-00-00","0","0000-00-00","asd","1","0000-00-00","asd","1","0000-00-00","asd","1","4 hours","HIPS-18","0","0","alex","123","170","75 Kg","","18-23-51","73","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","ranile","1","0000-00-00","gonzaga","0","0000-00-00","","1","3 hours","F8HPS","0","0","dalteparin sodium","2500iu","300cc","75 Kg","","18-46-15","74","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","19/11/1936","75","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","19-45-36","76","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","20/12/2017","77","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","20-42-17","78","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","","","","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","","20-45-17","79","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","20-80-17","80","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","21-26-17","81","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","21-29-18","82","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","22-25-20","83","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","","","","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","","23-22-02","84","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","1","0000-00-00","","0","0000-00-00","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","24/06/1946","85","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","1","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","Dr. Ranile","1","0000-00-00","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","24-19-46","86","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","sad","1","0000-00-00","sad","1","0000-00-00","sad","1","3 hours","HIPS-18","0","0","","","","21 Kg","Fennous sulfate 1tab TID","24-35-46","87","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","0000-00-00","0000-00-00","0","0000-00-00","as","1","0000-00-00","asd","1","0000-00-00","a","2","","F8HPS","1","0","","",""," Kg","","25-84-10","88","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","0","0000-00-00","0000-00-00","1","0000-00-00","mango","1","0000-00-00","mango","1","0000-00-00","mango","2","3 hours","F8HPS","0","0","","",""," Kg","Calcium carbonate 1 tab","30/11/2010","89","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","0000-00-00","0000-00-00","1","0000-00-00","surgeon","1","0000-00-00","surgeon","1","0000-00-00","sssa","2","3 hours","HIPS-18","1","1","","",""," Kg","Fennous sulfate 1tab TID","30-21-10","90","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","1","0000-00-00","","0","0000-00-00","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","31-24-32","91","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","Dr. Ranile","1","0000-00-00","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Calcium carbonate 1 tab","33-36-10","92","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","Dr. Ranile","1","0000-00-00","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc","50 Kg","","33-42-13","93","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","1","1","0","1","0000-00-00","0000-00-00","0","0000-00-00","asd","1","0000-00-00","asd","1","0000-00-00","asd","1","4 hours","HIPS-18","0","0","alex","123","170","75 Kg","","36-39-15","94","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","ranile","1","0000-00-00","gonzaga","0","0000-00-00","","1","3 hours","F8HPS","0","0","dalteparin sodium","2500iu","300cc","75 Kg","","37-67-12","95","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","40-24-17","96","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","40-78-21","97","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","40-89-11","98","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","41-10-17","99","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","","","","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","","45-18-16","100","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","45-42-23","101","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","45-45-24","102","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","46-10-20","103","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","46-17-40","104","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","","","","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","","46-20-04","105","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","1","0000-00-00","","0","0000-00-00","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","47-10-18","106","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","1","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","Dr. Ranile","1","0000-00-00","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","50-21-17","107","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","sad","1","0000-00-00","sad","1","0000-00-00","sad","1","3 hours","HIPS-18","0","0","","","","21 Kg","Fennous sulfate 1tab TID","51-27-19","108","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","0000-00-00","0000-00-00","0","0000-00-00","as","1","0000-00-00","asd","1","0000-00-00","a","2","","F8HPS","1","0","","",""," Kg","","52-04-23","109","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","0","0000-00-00","0000-00-00","1","0000-00-00","mango","1","0000-00-00","mango","1","0000-00-00","mango","2","3 hours","F8HPS","0","0","","",""," Kg","Calcium carbonate 1 tab","53-16-35","110","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","0000-00-00","0000-00-00","1","0000-00-00","surgeon","1","0000-00-00","surgeon","1","0000-00-00","sssa","2","3 hours","HIPS-18","1","1","","",""," Kg","Fennous sulfate 1tab TID","54-21-36","111","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","1","0000-00-00","","0","0000-00-00","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","55-14-06","112","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","Dr. Ranile","1","0000-00-00","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Calcium carbonate 1 tab","57-01-15","113","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","Dr. Ranile","1","0000-00-00","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc","50 Kg","","58-67-08","114","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","1","1","0","1","0000-00-00","0000-00-00","0","0000-00-00","asd","1","0000-00-00","asd","1","0000-00-00","asd","1","4 hours","HIPS-18","0","0","alex","123","170","75 Kg","","61-39-06","115","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","ranile","1","0000-00-00","gonzaga","0","0000-00-00","","1","3 hours","F8HPS","0","0","dalteparin sodium","2500iu","300cc","75 Kg","","62-17-06","116","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","63-01-17","117","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","65-10-03","118","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","71-26-19","119","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","73-23-13","120","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","","","","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","","76-25-36","121","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","77-10-06","122","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","79-86-17","123","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","80-67-10","124","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","83-49-22","125","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","","","","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","","84-63-02","126","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","1","0000-00-00","","0","0000-00-00","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","86-11-12","127","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","1","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","Dr. Ranile","1","0000-00-00","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","86-89-17","128","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","sad","1","0000-00-00","sad","1","0000-00-00","sad","1","3 hours","HIPS-18","0","0","","","","21 Kg","Fennous sulfate 1tab TID","89-93-08","129","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","0000-00-00","0000-00-00","0","0000-00-00","as","1","0000-00-00","asd","1","0000-00-00","a","2","","F8HPS","1","0","","",""," Kg","","89-96-01","130","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","0","0000-00-00","0000-00-00","1","0000-00-00","mango","1","0000-00-00","mango","1","0000-00-00","mango","2","3 hours","F8HPS","0","0","","",""," Kg","Calcium carbonate 1 tab","93-91-13","131","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","0000-00-00","0000-00-00","1","0000-00-00","surgeon","1","0000-00-00","surgeon","1","0000-00-00","sssa","2","3 hours","HIPS-18","1","1","","",""," Kg","Fennous sulfate 1tab TID","93-94-12","132","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","1","0000-00-00","","0","0000-00-00","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","96-34-17","133","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","Dr. Ranile","1","0000-00-00","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Calcium carbonate 1 tab","96-52-17","134","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","0000-00-00","0000-00-00","0","0000-00-00","Dr. Ranile","1","0000-00-00","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc","50 Kg","","99-06-03","135","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","1","1","0","1","0000-00-00","0000-00-00","0","0000-00-00","asd","1","0000-00-00","asd","1","0000-00-00","asd","1","4 hours","HIPS-18","0","0","alex","123","170","75 Kg","","A","136","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","ranile","1","0000-00-00","gonzaga","0","0000-00-00","","1","3 hours","F8HPS","0","0","dalteparin sodium","2500iu","300cc","75 Kg","","AAA-AAA","137","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","Abc","138","0000-00-00");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","B","139","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","HIPS-18","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","C","140","0000-00-00");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","0000-00-00","","1","0000-00-00","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","Q","141","0000-00-00");
INSERT INTO hemo_order VALUES("0","1","0","","","","0","1","2016-10-25","2016-10-25","0","0000-00-00","","1","2016-10-25","Dr. Alayon","0","0000-00-00","","1","4 hours","F8HPS","0","0","Anti-coagulation regular","2,500 iu","300 c"," Kg K","","06-08-23","142","2018-03-03");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","2016-12-12","2012-12-12","0","0000-00-00","","1","2016-12-12","Dr. Ranile","0","0000-00-00","","1","4 hours","F8HPS","0","0","Low Molecular Weight Hepa","2,500 iu","300 c"," Kg K","","10-12-56","143","2018-03-03");
INSERT INTO hemo_order VALUES("1","0","1","","","","0","1","2015-05-23","2015-11-23","0","0000-00-00","","1","2016-10-22","","0","0000-00-00","","1","","HIPS-18","0","0","Low Molecular Weight Hepa","2.5 iu","300 c"," Kg K","","11-07-17","144","2018-03-03");
INSERT INTO hemo_order VALUES("1","1","0","","","","0","1","2017-03-02","2017-03-02","0","2018-03-02","Dr P","1","2018-03-03","Dr P","0","0000-00-00","","2","4 hours","HIPS-18","0","0","LMWH","2.5 iu","300cc","70 Kg","","22-34-76","145","2018-03-02");





CREATE TABLE `hepatitisbvaccine` (
  `description` varchar(10) NOT NULL,
  `administeredby` varchar(50) NOT NULL,
  `hepa_daterecieved` date NOT NULL,
  `hepa_nextdate` date NOT NULL,
  `hepa_id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(30) NOT NULL,
  `hepa_year` char(4) NOT NULL,
  PRIMARY KEY (`hepa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

INSERT INTO hepatitisbvaccine VALUES("1","johnsaa","2018-02-10","2018-02-15","1","01-26-22","");
INSERT INTO hepatitisbvaccine VALUES("2","asd","2018-02-03","2018-02-23","2","01-26-22","");
INSERT INTO hepatitisbvaccine VALUES("2","haha","2018-02-15","2018-02-15","3","01-26-22","");
INSERT INTO hepatitisbvaccine VALUES("1","s4","2018-02-04","2018-02-04","4","01-26-22","");
INSERT INTO hepatitisbvaccine VALUES("1","johnsa","2018-02-10","2018-02-10","5","01-26-22","2018");
INSERT INTO hepatitisbvaccine VALUES("2","sam.e","2018-02-19","0000-00-00","14","01-26-22","2018");
INSERT INTO hepatitisbvaccine VALUES("2","s","2018-02-27","2018-02-28","15","06-08-23","2018");
INSERT INTO hepatitisbvaccine VALUES("2","a","2018-02-07","2018-02-14","16","12-12-12","2018");
INSERT INTO hepatitisbvaccine VALUES("1","sample1","2017-10-19","2018-02-07","17","12-12-12","2017");
INSERT INTO hepatitisbvaccine VALUES("1","r.banc","2018-02-07","2018-04-12","18","86-89-17","2018");
INSERT INTO hepatitisbvaccine VALUES("1","Datuon","2015-02-10","2016-02-01","19","01-15-33","2015");
INSERT INTO hepatitisbvaccine VALUES("2","Datuon","2016-10-20","2017-01-20","20","01-15-33","2016");
INSERT INTO hepatitisbvaccine VALUES("1","Vasquez","2015-02-12","2015-08-12","21","01-21-19","2015");
INSERT INTO hepatitisbvaccine VALUES("2","Vasquez","2015-12-12","2016-04-12","22","01-21-19","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Datuon","2016-12-20","2017-04-20","23","02-07-15","2016");
INSERT INTO hepatitisbvaccine VALUES("2","Datuon","2016-10-20","2017-03-20","24","02-07-15","2016");
INSERT INTO hepatitisbvaccine VALUES("2","Vasquez","2015-10-15","2016-10-15","25","03-01-15","2015");
INSERT INTO hepatitisbvaccine VALUES("2","Datuon","2015-02-11","2015-02-11","26","04-17-26","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Paylado","2015-02-10","2015-02-10","27","04-15-08","2015");
INSERT INTO hepatitisbvaccine VALUES("2","Vasquez","2017-02-10","2017-02-10","28","04-15-08","2017");
INSERT INTO hepatitisbvaccine VALUES("1","Vasquez","2015-06-14","2016-08-16","29","09-18-46","2015");
INSERT INTO hepatitisbvaccine VALUES("2","Paylado","2015-07-14","2016-07-25","30","09-18-46","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Datuon","2017-10-24","2017-10-28","31","09-21-35","2017");
INSERT INTO hepatitisbvaccine VALUES("2","Paylado","2015-02-22","2016-07-21","32","09-21-35","2015");
INSERT INTO hepatitisbvaccine VALUES("2","Vasquez","2014-09-24","2015-09-27","33","08-19-35","2014");
INSERT INTO hepatitisbvaccine VALUES("2","Datuon","2015-11-22","2016-11-24","34","03-18-20","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Vasquez","2015-10-25","2016-10-29","35","03-25-11","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Datuon","2015-09-27","2016-10-28","36","05-19-21","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Datuon","2015-10-23","2016-10-29","37","05-29-07","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Vasquez","2016-10-24","2017-10-29","38","06-08-23","2016");
INSERT INTO hepatitisbvaccine VALUES("1","Vasquez","2015-10-28","2016-10-28","39","06-15-11","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Datuon","2015-09-27","2016-10-27","40","06-36-13","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Vasquez","2015-09-22","2016-09-29","41","07-18-01","2015");
INSERT INTO hepatitisbvaccine VALUES("3","Datuon","2017-10-29","2018-10-29","42","07-18-01","2017");
INSERT INTO hepatitisbvaccine VALUES("1","Datuon","2015-09-27","2016-10-29","43","07-36-23","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Vasquez","2017-11-25","2017-09-28","44","10-12-56","2017");
INSERT INTO hepatitisbvaccine VALUES("2","Vasquez","2016-09-27","2017-10-30","45","10-25-17","2016");
INSERT INTO hepatitisbvaccine VALUES("1","Vasquez","2016-10-25","2017-10-29","46","10-25-17","2016");
INSERT INTO hepatitisbvaccine VALUES("2","Datuon","2014-09-25","2015-09-26","47","10-35-56","2014");
INSERT INTO hepatitisbvaccine VALUES("2","Datuon","2016-09-27","2017-09-29","48","11-07-17","2016");
INSERT INTO hepatitisbvaccine VALUES("1","Vasquez","2016-10-28","2017-10-29","49","11-07-17","2016");
INSERT INTO hepatitisbvaccine VALUES("1","Datuon","2015-10-28","2016-10-29","50","11-26-17","2015");
INSERT INTO hepatitisbvaccine VALUES("2","Paylado","2016-09-28","2017-10-27","51","11-26-17","2016");
INSERT INTO hepatitisbvaccine VALUES("1","Vasquez","2015-09-22","2016-10-28","52","11-37-17","2015");
INSERT INTO hepatitisbvaccine VALUES("2","Datuon","2015-10-28","2016-10-29","53","11-37-17","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Paylado","2015-09-27","2016-10-28","54","12-35-11","2015");
INSERT INTO hepatitisbvaccine VALUES("1","Alson","2018-03-02","2018-04-14","55","22-34-76","2018");





CREATE TABLE `hepatitisprofile` (
  `hepatitisdate` date NOT NULL,
  `HbsAg` varchar(3) NOT NULL,
  `AntiHBs` varchar(3) NOT NULL,
  `HCV` varchar(3) NOT NULL,
  `HIV` varchar(3) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `hepatitisprofile_id` int(11) NOT NULL AUTO_INCREMENT,
  `hepatitismonthyear` char(20) NOT NULL,
  PRIMARY KEY (`hepatitisprofile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

INSERT INTO hepatitisprofile VALUES("2018-02-09","r","r","nr","nr","01-26-22","10","2018, February");
INSERT INTO hepatitisprofile VALUES("2018-01-19","nr","r","nr","r","01-26-22","11","2018, January");
INSERT INTO hepatitisprofile VALUES("2018-02-15","","","","","","12","2018, February");
INSERT INTO hepatitisprofile VALUES("2018-02-15","","","","","","13","2018, February");
INSERT INTO hepatitisprofile VALUES("2018-02-06","nr","nr","nr","nr","05-29-07","14","2018, February");
INSERT INTO hepatitisprofile VALUES("2018-01-24","r","r","r","r","01-26-22","15","2018, January");
INSERT INTO hepatitisprofile VALUES("2018-01-25","r","r","nr","nr","01-26-22","16","2018, January");
INSERT INTO hepatitisprofile VALUES("2017-12-30","nr","nr","nr","nr","45-42-23","20","2017, December");
INSERT INTO hepatitisprofile VALUES("2018-02-05","nr","nr","nr","nr","45-42-23","21","2018, February");
INSERT INTO hepatitisprofile VALUES("2016-02-24","nr","r","nr","nr","33-42-13","22","2016, February");
INSERT INTO hepatitisprofile VALUES("2016-08-27","nr","r","nr","nr","33-42-13","23","2016, August");
INSERT INTO hepatitisprofile VALUES("2017-09-16","nr","r","nr","nr","33-42-13","24","2017, September");
INSERT INTO hepatitisprofile VALUES("2018-02-26","r","r","nr","nr","13-38-01","25","2018, February");
INSERT INTO hepatitisprofile VALUES("2018-02-27","r","nr","nr","nr","01-26-22","26","2018, February");
INSERT INTO hepatitisprofile VALUES("2018-02-27","r","nr","nr","nr","06-08-23","27","2018, February");
INSERT INTO hepatitisprofile VALUES("2018-02-12","r","r","nr","nr","12-12-12","28","2018, February");
INSERT INTO hepatitisprofile VALUES("2018-01-31","nr","nr","nr","nr","12-12-12","29","2018, January");
INSERT INTO hepatitisprofile VALUES("2018-02-05","nr","r","nr","nr","86-89-17","30","2018, February");
INSERT INTO hepatitisprofile VALUES("2018-03-02","r","r","nr","nr","01-26-22","31","2018, March");
INSERT INTO hepatitisprofile VALUES("2015-11-20","nr","nr","nr","nr","01-15-33","32","2015, November");
INSERT INTO hepatitisprofile VALUES("2016-12-20","nr","nr","nr","nr","01-15-33","33","2016, December");
INSERT INTO hepatitisprofile VALUES("2017-02-10","nr","nr","nr","nr","01-15-33","34","2017, February");
INSERT INTO hepatitisprofile VALUES("2015-02-10","nr","nr","nr","nr","01-21-19","35","2015, February");
INSERT INTO hepatitisprofile VALUES("2015-06-10","nr","nr","r","nr","01-21-19","36","2015, June");
INSERT INTO hepatitisprofile VALUES("2015-11-10","nr","nr","nr","nr","01-21-19","37","2015, November");
INSERT INTO hepatitisprofile VALUES("2016-02-10","nr","nr","nr","nr","01-21-19","38","2016, February");
INSERT INTO hepatitisprofile VALUES("2016-10-20","nr","nr","nr","nr","02-07-15","39","2016, October");
INSERT INTO hepatitisprofile VALUES("2017-02-12","nr","nr","nr","nr","02-07-15","40","2017, February");
INSERT INTO hepatitisprofile VALUES("2015-12-12","nr","nr","nr","nr","02-07-15","41","2015, December");
INSERT INTO hepatitisprofile VALUES("2015-02-15","nr","r","nr","nr","03-01-15","42","2015, February");
INSERT INTO hepatitisprofile VALUES("2016-02-15","r","nr","r","nr","03-01-15","43","2016, February");
INSERT INTO hepatitisprofile VALUES("2017-10-26","nr","nr","nr","nr","03-01-15","44","2017, October");
INSERT INTO hepatitisprofile VALUES("2015-11-11","r","nr","r","nr","04-17-26","45","2015, November");
INSERT INTO hepatitisprofile VALUES("2017-04-11","nr","nr","nr","nr","04-17-26","46","2017, April");
INSERT INTO hepatitisprofile VALUES("2017-10-11","nr","nr","nr","nr","04-17-26","47","2017, October");
INSERT INTO hepatitisprofile VALUES("2016-11-25","nr","nr","nr","nr","04-15-08","48","2016, November");
INSERT INTO hepatitisprofile VALUES("2017-10-15","nr","nr","nr","nr","04-15-08","49","2017, October");
INSERT INTO hepatitisprofile VALUES("2013-04-15","nr","nr","nr","nr","09-18-46","50","2013, April");
INSERT INTO hepatitisprofile VALUES("2014-01-19","nr","nr","nr","nr","09-18-46","51","2014, January");
INSERT INTO hepatitisprofile VALUES("2016-11-14","nr","nr","nr","nr","09-18-46","52","2016, November");
INSERT INTO hepatitisprofile VALUES("2012-07-10","nr","nr","nr","nr","09-21-35","53","2012, July");
INSERT INTO hepatitisprofile VALUES("2014-05-26","nr","nr","nr","nr","09-21-35","54","2014, May");
INSERT INTO hepatitisprofile VALUES("2016-02-10","nr","nr","nr","nr","08-19-35","55","2016, February");
INSERT INTO hepatitisprofile VALUES("2015-08-26","nr","nr","nr","nr","08-19-35","56","2015, August");
INSERT INTO hepatitisprofile VALUES("2016-07-13","nr","nr","nr","nr","08-19-35","57","2016, July");
INSERT INTO hepatitisprofile VALUES("2015-08-09","nr","nr","nr","nr","03-18-20","58","2015, August");
INSERT INTO hepatitisprofile VALUES("2015-10-25","nr","nr","nr","nr","03-18-20","59","2015, October");
INSERT INTO hepatitisprofile VALUES("2016-10-28","nr","nr","nr","nr","03-25-11","60","2016, October");
INSERT INTO hepatitisprofile VALUES("2016-10-24","nr","nr","nr","nr","03-25-11","61","2016, October");
INSERT INTO hepatitisprofile VALUES("2016-11-30","nr","nr","r","nr","05-19-21","62","2016, November");
INSERT INTO hepatitisprofile VALUES("2016-10-25","nr","nr","nr","nr","05-19-21","63","2016, October");
INSERT INTO hepatitisprofile VALUES("2016-10-24","nr","nr","nr","nr","05-29-07","64","2016, October");
INSERT INTO hepatitisprofile VALUES("2017-11-22","nr","nr","nr","nr","05-29-07","65","2017, November");
INSERT INTO hepatitisprofile VALUES("2016-10-23","nr","nr","nr","nr","06-08-23","66","2016, October");
INSERT INTO hepatitisprofile VALUES("2017-09-22","nr","nr","nr","nr","06-08-23","67","2017, September");
INSERT INTO hepatitisprofile VALUES("2016-10-22","nr","nr","r","nr","06-15-11","68","2016, October");
INSERT INTO hepatitisprofile VALUES("2016-09-26","nr","nr","r","nr","06-36-13","69","2016, September");
INSERT INTO hepatitisprofile VALUES("2017-12-25","nr","nr","nr","r","06-36-13","70","2017, December");
INSERT INTO hepatitisprofile VALUES("2015-10-25","nr","nr","nr","nr","07-18-01","71","2015, October");
INSERT INTO hepatitisprofile VALUES("2015-01-03","nr","nr","nr","nr","07-18-01","72","2015, January");
INSERT INTO hepatitisprofile VALUES("2015-10-23","nr","nr","nr","nr","07-36-23","73","2015, October");
INSERT INTO hepatitisprofile VALUES("2015-12-12","r","r","nr","nr","10-12-56","74","2015, December");
INSERT INTO hepatitisprofile VALUES("2016-11-11","nr","nr","nr","nr","10-12-56","75","2016, November");
INSERT INTO hepatitisprofile VALUES("2014-02-12","nr","nr","nr","nr","10-25-17","76","2014, February");
INSERT INTO hepatitisprofile VALUES("2012-12-12","nr","nr","nr","nr","10-25-17","77","2012, December");
INSERT INTO hepatitisprofile VALUES("2017-11-11","nr","nr","nr","nr","10-25-17","78","2017, November");
INSERT INTO hepatitisprofile VALUES("2016-10-18","nr","nr","nr","nr","10-35-56","79","2016, October");
INSERT INTO hepatitisprofile VALUES("2017-04-24","nr","nr","nr","nr","10-35-56","80","2017, April");
INSERT INTO hepatitisprofile VALUES("2014-02-18","nr","nr","nr","nr","10-35-56","81","2014, February");
INSERT INTO hepatitisprofile VALUES("2015-10-22","nr","nr","nr","nr","11-07-17","82","2015, October");
INSERT INTO hepatitisprofile VALUES("2015-09-21","nr","r","nr","nr","11-07-17","83","2015, September");
INSERT INTO hepatitisprofile VALUES("2010-10-10","nr","nr","nr","nr","11-07-17","84","2010, October");
INSERT INTO hepatitisprofile VALUES("2015-09-20","nr","nr","nr","nr","11-26-17","85","2015, September");
INSERT INTO hepatitisprofile VALUES("2016-12-12","nr","nr","nr","nr","11-26-17","86","2016, December");
INSERT INTO hepatitisprofile VALUES("2014-04-14","nr","r","nr","nr","11-26-17","87","2014, April");
INSERT INTO hepatitisprofile VALUES("2016-11-25","nr","nr","nr","nr","11-37-17","88","2016, November");
INSERT INTO hepatitisprofile VALUES("2016-10-25","nr","nr","nr","nr","11-37-17","89","2016, October");
INSERT INTO hepatitisprofile VALUES("2016-11-25","nr","r","r","nr","12-12-12","90","2016, November");
INSERT INTO hepatitisprofile VALUES("2017-10-25","nr","nr","nr","nr","12-12-12","91","2017, October");
INSERT INTO hepatitisprofile VALUES("2013-07-21","nr","nr","nr","nr","12-12-12","92","2013, July");
INSERT INTO hepatitisprofile VALUES("2012-12-12","nr","nr","nr","nr","12-12-12","93","2012, December");
INSERT INTO hepatitisprofile VALUES("2016-09-27","nr","nr","nr","nr","12-35-11","94","2016, September");
INSERT INTO hepatitisprofile VALUES("2014-10-26","nr","nr","nr","nr","12-35-11","95","2014, October");
INSERT INTO hepatitisprofile VALUES("2018-03-02","nr","nr","nr","nr","22-34-76","96","2018, March");





CREATE TABLE `influenzavaccine` (
  `influenza_administeredby` varchar(50) NOT NULL,
  `influenza_daterecieved` date NOT NULL,
  `influenza_datenext` date NOT NULL,
  `influenza_id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(30) NOT NULL,
  `influenza_year` char(4) NOT NULL,
  PRIMARY KEY (`influenza_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO influenzavaccine VALUES("johnsaac","2018-02-03","2018-02-28","1","01-26-22","");
INSERT INTO influenzavaccine VALUES("asda","2018-02-14","2018-02-28","5","01-26-22","");
INSERT INTO influenzavaccine VALUES("hehe","2018-02-09","2018-02-22","6","01-26-22","2018");
INSERT INTO influenzavaccine VALUES("johna","2018-02-03","2018-02-28","7","01-26-22","");
INSERT INTO influenzavaccine VALUES("c/o LYF vaccination & medical services","2016-07-17","2016-11-17","8","33-42-13","");
INSERT INTO influenzavaccine VALUES("s","2018-02-06","2018-02-07","9","12-12-12","2018");
INSERT INTO influenzavaccine VALUES("SASA","2018-02-21","2018-02-28","12","12-12-12","2018");
INSERT INTO influenzavaccine VALUES("rhiban","2018-02-07","2018-03-14","13","86-89-17","2018");
INSERT INTO influenzavaccine VALUES("TLJPH","2015-02-10","2016-02-01","14","01-15-33","2015");
INSERT INTO influenzavaccine VALUES("TLJPH","2016-10-20","2017-01-20","15","01-15-33","2016");
INSERT INTO influenzavaccine VALUES("TLJPH","2015-10-12","2015-01-12","16","01-21-19","2015");
INSERT INTO influenzavaccine VALUES("Vasquez","2016-06-12","2016-12-12","17","01-21-19","2016");
INSERT INTO influenzavaccine VALUES("TLJPH","2015-12-20","2016-04-20","18","02-07-15","2015");
INSERT INTO influenzavaccine VALUES("TLJPH","2016-12-20","2017-12-20","19","02-07-15","2016");
INSERT INTO influenzavaccine VALUES("Vasquez","2015-02-15","2016-02-15","20","03-01-15","2015");
INSERT INTO influenzavaccine VALUES("TLJPH","2017-02-11","2017-02-11","21","04-17-26","2017");
INSERT INTO influenzavaccine VALUES("Vasquez","2017-02-10","2018-02-10","22","04-15-08","2017");
INSERT INTO influenzavaccine VALUES("Vasquez","2015-03-21","2016-04-26","23","09-18-46","2015");
INSERT INTO influenzavaccine VALUES("Vasquez","2014-07-26","2015-08-26","24","09-21-35","2014");
INSERT INTO influenzavaccine VALUES("Vasquez","2017-06-19","2018-04-26","25","08-19-35","2017");
INSERT INTO influenzavaccine VALUES("Vasquez","2015-10-24","2016-09-28","26","03-18-20","2015");
INSERT INTO influenzavaccine VALUES("TLJPH","2016-10-27","2017-11-29","27","03-25-11","2016");
INSERT INTO influenzavaccine VALUES("Vasquez","2016-10-29","2017-10-29","28","05-19-21","2016");
INSERT INTO influenzavaccine VALUES("TLJPH","2015-10-28","2016-10-28","29","05-29-07","2015");
INSERT INTO influenzavaccine VALUES("Vasquez","2015-10-19","2016-10-29","30","06-08-23","2015");
INSERT INTO influenzavaccine VALUES("Vasquez","2016-10-29","2017-10-30","31","06-15-11","2016");
INSERT INTO influenzavaccine VALUES("Vasquez","2017-10-29","2018-09-29","32","06-36-13","2017");
INSERT INTO influenzavaccine VALUES("TLJPH","2015-10-23","2016-10-29","33","07-18-01","2015");
INSERT INTO influenzavaccine VALUES("Vasquez","2016-10-28","2017-10-29","34","07-18-01","2016");
INSERT INTO influenzavaccine VALUES("Vasquez","2016-09-28","2017-10-29","35","07-36-23","2016");
INSERT INTO influenzavaccine VALUES("Vasquez","2016-10-27","2017-09-29","36","10-12-56","2016");
INSERT INTO influenzavaccine VALUES("Vasquez","2016-10-27","2017-10-29","37","10-25-17","2016");
INSERT INTO influenzavaccine VALUES("TLJPH","2015-10-27","2016-10-28","38","10-25-17","2015");
INSERT INTO influenzavaccine VALUES("TLJPH","2015-09-28","2016-09-28","39","10-35-56","2015");
INSERT INTO influenzavaccine VALUES("Vasquez","2015-09-28","2016-10-29","40","11-07-17","2015");
INSERT INTO influenzavaccine VALUES("Vasquez","2015-09-28","2016-08-29","41","11-07-17","2015");
INSERT INTO influenzavaccine VALUES("Vasquez","2016-09-27","2016-10-29","42","11-26-17","2016");
INSERT INTO influenzavaccine VALUES("TLJPH","2015-09-27","2017-09-29","43","11-26-17","2015");
INSERT INTO influenzavaccine VALUES("Vasquez","2015-09-28","2016-10-28","44","11-37-17","2015");
INSERT INTO influenzavaccine VALUES("Vasquez","2016-09-28","2017-10-29","45","11-37-17","2016");
INSERT INTO influenzavaccine VALUES("TLJPH","2015-09-28","2015-08-28","46","12-35-11","2015");
INSERT INTO influenzavaccine VALUES("Alson","2018-03-02","2018-06-16","47","22-34-76","2018");





CREATE TABLE `initialtestresult` (
  `initialtemperature` varchar(5) NOT NULL,
  `bloodpressure` varchar(10) NOT NULL,
  `cardiacrate` varchar(10) NOT NULL,
  `repulsiverate` varchar(10) NOT NULL,
  `initialtestresult_id` int(10) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(8) NOT NULL,
  `initialtest_date` date NOT NULL,
  `initialtest_time` varchar(12) NOT NULL,
  PRIMARY KEY (`initialtestresult_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO initialtestresult VALUES("36","164/91","74","18","1","01-26-22","2016-07-03","7:11 AM");
INSERT INTO initialtestresult VALUES("36","169/90","70","19","2","01-26-22","2016-06-26","7:00 AM");
INSERT INTO initialtestresult VALUES("35.5","152/85","68","19","3","01-26-22","2018-02-26","6:41 AM");
INSERT INTO initialtestresult VALUES("35.2","176/93","68","19","4","01-26-22","2018-02-28","6:50 AM");
INSERT INTO initialtestresult VALUES("35.8","176/95","68","19","5","01-26-22","2018-02-28","6:55 AM");
INSERT INTO initialtestresult VALUES("35.6","167/81","76","20","6","01-26-22","2018-03-01","6:37 AM");
INSERT INTO initialtestresult VALUES("35.6","167/81","76","20","7","01-26-22","2018-03-02","5:13 AM");
INSERT INTO initialtestresult VALUES("32","151/171","78","22","8","45-45-24","2018-01-22","10:37 AM");
INSERT INTO initialtestresult VALUES("32","152/72","78","22","9","01-26-22","2018-01-29","11:41 AM");
INSERT INTO initialtestresult VALUES("35","175/80","70","40","10","45-45-24","2018-01-29","8:15 PM");
INSERT INTO initialtestresult VALUES("31","170 / 90","23","23","11","86-89-17","2018-02-05","1:32 AM");
INSERT INTO initialtestresult VALUES("23","23 / 32","32","23","12","86-89-17","2018-02-11","9:36 PM");
INSERT INTO initialtestresult VALUES("1","01-Jan","1123","1","13","05-29-07","2018-02-14","3:27 AM");
INSERT INTO initialtestresult VALUES("12","12 / 12","12","12","15","05-29-07","2018-02-22","1:34 am");
INSERT INTO initialtestresult VALUES("36","207 / 70","81","20","16","40-89-11","2017-06-26","6:50 am");
INSERT INTO initialtestresult VALUES("2","2 / 2","2","2","17","86-89-17","2018-02-26","3:55 am");
INSERT INTO initialtestresult VALUES("2","2 / 2","2","2","18","12-12-12","2018-02-28","4:08 am");
INSERT INTO initialtestresult VALUES("36","170 / 60","90","22","19","AAA-AAA","2018-02-28","11:01 am");





CREATE TABLE `laboratory` (
  `Creatinine` varchar(10) NOT NULL,
  `BUN` varchar(10) NOT NULL,
  `Magnesium` varchar(10) NOT NULL,
  `Calcium` varchar(10) NOT NULL,
  `Phosphorus` varchar(10) NOT NULL,
  `Potassium` varchar(10) NOT NULL,
  `Sodium` varchar(10) NOT NULL,
  `TCholesterol` varchar(10) NOT NULL,
  `Triglycerides` varchar(10) NOT NULL,
  `HDL` varchar(10) NOT NULL,
  `LDL` varchar(10) NOT NULL,
  `FBS` varchar(10) NOT NULL,
  `RBS` varchar(10) NOT NULL,
  `UricAcid` varchar(10) NOT NULL,
  `RBCBlood` varchar(10) NOT NULL,
  `WBC` varchar(10) NOT NULL,
  `Hemoglobin` varchar(10) NOT NULL,
  `Hematocrit` varchar(10) NOT NULL,
  `PlateletCount` varchar(10) NOT NULL,
  `Polys` varchar(10) NOT NULL,
  `Lymph` varchar(10) NOT NULL,
  `Eosinophyl` varchar(10) NOT NULL,
  `Monocytes` varchar(10) NOT NULL,
  `Basophil` varchar(10) NOT NULL,
  `pH` varchar(10) NOT NULL,
  `SpGravity` varchar(10) NOT NULL,
  `Albumin` varchar(10) NOT NULL,
  `Sugar` varchar(10) NOT NULL,
  `PlusCells` varchar(10) NOT NULL,
  `RBCUrine` varchar(10) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `Laboratory_date` date NOT NULL,
  `Laboratory_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Laboratory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=latin1;

INSERT INTO laboratory VALUES("a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","a1","86-89-17","2018-01-27","1");
INSERT INTO laboratory VALUES("1","1","1","1","1","1","1","1","1","1","1","1","1","1","","","","","","","","","","","","","","","","","01-26-22","2018-02-06","15");
INSERT INTO laboratory VALUES("1","1","1","1","1","1","1","1","1","1","1","1","1","1","a","a","a","a","a","a","a","a","a","a","","","","","","","01-26-22","2018-02-07","16");
INSERT INTO laboratory VALUES("1","1","1","1","1","1","1","1","1","1","1","1","","","","","","","","","","","","","","","","","","","23-22-02","2018-02-12","17");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","23-22-02","2018-02-14","18");
INSERT INTO laboratory VALUES("1","1","1","1","1","1","1","1","1","1","1","1","","","","","","","","","","","","","","","","","","","05-29-07","2018-02-12","19");
INSERT INTO laboratory VALUES("1","1","1","1","1","1","1","1","1","1","1","1","1","1","a","a","a","a","a","a","a","a","a","a","","","","","","","01-26-22","2018-02-07","20");
INSERT INTO laboratory VALUES("18.67","116.01","","","","3.70","","","","","","","","","2.84","9.2","","0.25","219","","5","4","2","","","","","","","","45-42-23","2018-01-03","21");
INSERT INTO laboratory VALUES("1","1","1","1","1","1","1","1","1","1","1","1","1","1","a","a","a","a","a","a","a","a","a","a","","","","","","","45-42-23","2018-02-07","24");
INSERT INTO laboratory VALUES("7.08","72.75","","6.32","2.47","3.83","134.9","235","163.73","67.18","136.68","107.27","","8.71","4.3","7.1","121","0.36","244","0.61","0.19","0.07","0.12","0.01","","","","","","","33-42-13","2016-12-05","25");
INSERT INTO laboratory VALUES("7.23","59.55","","","","4.76","137.30","266.41","152.21","88.03","146.69","109.09","","6.86","2.3","8.4","64","0.20","adequate","0.69","","0.11","0.04","0.01","","","","","","","33-42-13","2017-02-02","26");
INSERT INTO laboratory VALUES("10.2","36.24","","7.68","","4.87","136.5","193.05","152.21","56.37","105.11","123.64","","9.85","","","","","","","","","","","","","","","","","33-42-13","2017-04-11","27");
INSERT INTO laboratory VALUES("8.45","41.29","","","","4.40","136","239.38","194.69","59.07","140.91","123.64","","7.43","","","","","","","","","","","","","","","","","33-42-13","2017-08-07","28");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","","","4.12","8.1","114","0.34","adequate","0.60","0.28","0.03","0.09","","","","","","","","33-42-13","2016-11-05","29");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","","","4.05","8","114","0.34","adequate","","0.36","","0.12","","","","","","","","33-42-13","2017-01-07","30");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","","","3.57","7.6","103","0.31","adequate","0.61","0.21","0.02","0.15","0.01","","","","","","","33-42-13","2017-03-04","31");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","","","4.49","10","127","0.40","adequate","0.66","0.21","0.05","0.08","","","","","","","","33-42-13","2017-05-06","32");
INSERT INTO laboratory VALUES("11.75","77.47","","","","4.45","134","201.93","172.57","51.74","114.73","120","","","","","","","","","","","","","","","","","","","33-42-13","2017-11-14","33");
INSERT INTO laboratory VALUES("9.67","","","","","4.63","137.90","","","","","118","","","","","","","","","","","","","","","","","","","33-42-13","2018-01-18","35");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","","","4.4","11.1","124","0.39","183","0.71","0.14","0.05","0.10","0","","","","","","","33-42-13","2017-06-06","36");
INSERT INTO laboratory VALUES("7.08","72.75","","6.32","2.47","3.83","134.9","235","163.73","67.18","136.68","107.27","","8.71","4.3","7.1","121","0.36","244","0.61","0.19","0.07","0.12","0.01","","","","","","","86-89-17","2016-12-05","37");
INSERT INTO laboratory VALUES("7.23","59.55","","","","4.76","137.30","266.41","152.21","88.03","146.69","109.09","","6.86","2.3","8.4","64","0.20","adequate","0.69","","0.11","0.04","0.01","","","","","","","86-89-17","2017-02-02","38");
INSERT INTO laboratory VALUES("10.2","36.24","","7.68","","4.87","136.5","193.05","152.21","56.37","105.11","123.64","","9.85","","","","","","","","","","","","","","","","","86-89-17","2017-04-11","39");
INSERT INTO laboratory VALUES("8.45","41.29","","","","4.40","136","239.38","194.69","59.07","140.91","123.64","","7.43","","","","","","","","","","","","","","","","","86-89-17","2017-08-07","40");
INSERT INTO laboratory VALUES("s","s","s","s","ss","s","s","s","s","s","s","s","s","s","","","","","","","","","","","","","","","","","A","0000-00-00","41");
INSERT INTO laboratory VALUES("123","123","123","123","123","123","123","123","123","123","123","123","123","123","456","456","456","456","456","456","456","456","456","456","789","789","789","789","789","789","12-12-12","2018-02-28","42");
INSERT INTO laboratory VALUES("12.98","","","","","5.6","141.60","","","","","","","","2.9","7.8","86","0.30","191","0.72","0.27","0.06","0.06","0.00","","","","","","","02-07-15","2016-10-25","43");
INSERT INTO laboratory VALUES("12.98","","","","","4.6","137.00","","","","","","","","3.4","5.2","93","0.33","262","","0.23","0.04","","0.00","","","","","","2.9","01-15-33","2015-02-10","44");
INSERT INTO laboratory VALUES("12.00","","","","","4.0","135.00","","","","","","","","3.3","8.4","86","0.33","191","0.68","0.10","0.05","0.04","0.00","","","","","","","01-15-33","2016-05-25","45");
INSERT INTO laboratory VALUES("11.06","","","","","3.6","137.00","","","","","","","","","","","","","","","","","","","","","","","","01-15-33","2016-02-12","46");
INSERT INTO laboratory VALUES("12.98","","","","","4.6","139.60","","","","","","","","2.9","8.4","93","0.31","262","0.72","0.10","0.05","0.05","0.00","","","","","","","01-21-19","2015-11-02","47");
INSERT INTO laboratory VALUES("11.06","","","","","4.2","135.00","","","","","","","","3.4","8.4","93","0.31","262","0.83","0.10","0.04","0.05","0.00","","","","","","","01-21-19","2016-02-15","48");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","3.1","5.2","99","0.33","140","0.83","0.23","0.04","0.05","0.00","","","","","","","","","01-21-19","2016-02-16","49");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","139.60","","","","","","","","3.1","5.2","99","0.31","262","0.68","0.23","0.04","0.05","0.00","","","","","","","03-18-20","2016-10-12","50");
INSERT INTO laboratory VALUES("12.98","","","","","3.8","137.00","","","","","","","","3.4","5.2","93","0.33","262","","0.23","0.04","","0.00","","","","","","","03-18-20","2015-02-10","51");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","135.00","","","","","","","","2.9","5.2","99","0.33","140","0.83","0.10","0.05","0.04","0.00","","","","","","","03-25-11","2009-02-12","52");
INSERT INTO laboratory VALUES("8.04","","","","","3.8","137.00","","","","","","","","3.3","6.4","99","0.33","140","0.83","0.23","0.04","","0","","","","","","","03-25-11","2012-02-12","53");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","139.60","","","","","","","","3.3","8.4","99","0.31","262","0.83","0.10","0.04","0.05","0","","","","","","","04-15-08","2014-02-15","54");
INSERT INTO laboratory VALUES("12.98","","","","","4.2","137.00","","","","","","","","3.3","8.4","93","0.31","262","0.68","0.10","0.05","0.04","0.00","","","","","","","04-15-08","2015-02-25","55");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","139.60","","","","","","","","2.9","8.4","93","0.31","140","0.83","0.10","0.04","0.05","0","","","","","","","04-15-08","2016-12-20","56");
INSERT INTO laboratory VALUES("11.06","","","","","4.2","137.00","","","","","","","","3.4","8.4","93","0.31","262","0.83","0.10","0.04","0.05","0.00","","","","","","","04-17-26","2016-02-15","57");
INSERT INTO laboratory VALUES("11.06","","","","","4.2","137.00","","","","","","","","","","","","","","","","","","","","","","","","04-17-26","2017-11-20","58");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","2.9","5.2","3.3","8.4","93","0.31","140","0.68","0.23","0.04","0.05","0.00","","","","","","","04-17-26","2016-11-20","59");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","139.60","","","","","","","","2.9","5.2","99","0.33","140","0.68","0.23","0.05","0.04","0","","","","","","","05-19-21","2015-01-20","60");
INSERT INTO laboratory VALUES("8.04","","","","","3.8","137.00","","","","","","","","2.5","8.4","93","0.31","140","0.68","0.23","0.04","0.05","0.00","","","","","","","05-19-21","2016-05-15","61");
INSERT INTO laboratory VALUES("8.04","","","","","4.2","139.60","","","","","","","","","","","","","","","","","","","","","","","","05-29-07","2014-01-15","62");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","","5.2","93","0.31","262","0.83","0.10","0.04","0.04","0.00","","","","","","","","","05-29-07","2014-03-15","63");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","3.4","5.2","93","0.33","140","0.68","0.23","0.05","0.04","0.00","","","","","","","","","05-29-07","2015-02-25","64");
INSERT INTO laboratory VALUES("12.98","","","","","4.6","139.60","","","","","","","","3.3","8.4","99","0.31","262","0.83","0.10","0.04","0.05","0","","","","","","","06-08-23","2014-02-15","65");
INSERT INTO laboratory VALUES("8.04","","","","","4.2","137.00","","","","","","","","","","","","","","","","","","","","","","","","06-08-23","2015-12-20","66");
INSERT INTO laboratory VALUES("8.68","","","","","4.2","135.00","","","","","","","","3.3","7.8","101","0.30","116","0.58","0.28","0.06","0.05","0.00","","","","","","","02-07-15","2017-10-25","67");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","139.60","","","","","","","","3.3","8.4","93","0.31","262","0.83","0.10","0.04","0.04","0.00","","","","","","3.1","03-01-15","2016-12-15","68");
INSERT INTO laboratory VALUES("8.68","","","","","3.8","135.00","","","","","","","","2.5","7.8","93","0.33","140","0.72","0.30","0.04","9","0.00","","","","","","","03-01-15","2017-06-15","69");
INSERT INTO laboratory VALUES("9.04","","","","","6.4","137.60","","","","","","","","","","","","","","","","","","","","","","","","03-01-15","2017-02-20","70");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","2.9","8.4","99","0.31","140","0.83","0.23","0.04","0.05","0.00","","","","","","","","","03-01-15","2017-12-15","71");
INSERT INTO laboratory VALUES("12.98","","","","","5.6","141.6","","","","","","","","2.9","7.8","86","0.3","191","0.72","0.27","0.06","0.06","0","","","","","","","03-18-20","2015-03-01","72");
INSERT INTO laboratory VALUES("12.98","","","","","4.6","137","","","","","","","","3.4","5.2","93","0.33","262","","0.23","0.04","","0","","","","","","2.9","03-18-20","2015-09-06","73");
INSERT INTO laboratory VALUES("12","","","","","4","135","","","","","","","","3.3","8.4","86","0.33","191","0.68","0.1","0.05","0.04","0","","","","","","","03-18-20","2016-09-12","74");
INSERT INTO laboratory VALUES("11.06","","","","","3.6","137","","","","","","","","","","","","","","","","","","","","","","","","03-18-20","2016-03-03","75");
INSERT INTO laboratory VALUES("12.98","","","","","4.6","139.6","","","","","","","","2.9","8.4","93","0.31","262","0.72","0.1","0.05","0.05","0","","","","","","","04-17-26","2017-08-16","76");
INSERT INTO laboratory VALUES("11.06","","","","","4.2","135","","","","","","","","3.4","8.4","93","0.31","262","0.83","0.1","0.04","0.05","0","","","","","","","04-17-26","2017-06-14","77");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","3.1","5.2","99","0.33","140","0.83","0.23","0.04","0.05","0","","","","","","","","","04-17-26","2015-09-13","78");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","139.6","","","","","","","","3.1","5.2","99","0.31","262","0.68","0.23","0.04","0.05","0","","","","","","","04-17-26","0000-00-00","79");
INSERT INTO laboratory VALUES("12.98","","","","","3.8","137","","","","","","","","3.4","5.2","93","0.33","262","","0.23","0.04","","0","","","","","","","06-15-11","0000-00-00","80");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","135","","","","","","","","2.9","5.2","99","0.33","140","0.83","0.1","0.05","0.04","0","","","","","","","06-15-11","0000-00-00","81");
INSERT INTO laboratory VALUES("8.04","","","","","3.8","137","","","","","","","","3.4","5.2","99","0.33","262","0.83","0.23","0.04","0.05","0","","","","","","","06-15-11","0000-00-00","82");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","139.6","","","","","","","","3.3","8.4","99","0.31","262","0.83","0.1","0.04","0.05","0","","","","","","","06-15-11","0000-00-00","83");
INSERT INTO laboratory VALUES("12.98","","","","","4.2","137","","","","","","","","3.3","8.4","93","0.31","262","0.68","0.1","0.05","0.04","0","","","","","","","06-15-11","0000-00-00","84");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","139.6","","","","","","","","2.9","8.4","93","0.31","140","0.83","0.1","0.04","0.05","0","","","","","","","09-18-46","0000-00-00","85");
INSERT INTO laboratory VALUES("11.06","","","","","4.2","137","","","","","","","","3.4","8.4","93","0.31","262","0.83","0.1","0.04","0.05","0","","","","","","","09-18-46","0000-00-00","86");
INSERT INTO laboratory VALUES("11.06","","","","","4.2","137","","","","","","","","","","","","","","","","","","","","","","","","09-18-46","0000-00-00","87");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","2.9","5.2","99","0.33","140","0.68","0.23","0.05","0.04","0","","","","","","","","","09-18-46","0000-00-00","88");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","139.6","","","","","","","","2.9","5.2","99","0.33","140","0.68","0.23","0.05","0.04","0","","","","","","","09-18-56","0000-00-00","89");
INSERT INTO laboratory VALUES("8.04","","","","","3.8","137","","","","","","","","3.4","5.2","99","0.33","140","0.68","0.23","0.05","0.04","0","","","","","","","11-26-17","0000-00-00","90");
INSERT INTO laboratory VALUES("8.04","","","","","4.2","139.6","","","","","","","","","","","","","","","","","","","","","","","","11-26-17","0000-00-00","91");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","","5.2","93","0.31","262","0.83","0.1","0.04","0.04","0","","","","","","","","","11-26-17","0000-00-00","92");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","3.4","5.2","93","0.33","140","0.68","0.23","0.05","0.04","0","","","","","","","","","11-26-17","0000-00-00","93");
INSERT INTO laboratory VALUES("12.98","","","","","4.6","139.6","","","","","","","","3.3","8.4","99","0.31","262","0.83","0.1","0.04","0.05","0","","","","","","","11-26-17","0000-00-00","94");
INSERT INTO laboratory VALUES("8.04","","","","","4.2","137","","","","","","","","","","","","","","","","","","","","","","","","11-26-17","0000-00-00","95");
INSERT INTO laboratory VALUES("8.68","","","","","4.2","135","","","","","","","","3.3","7.8","101","0.3","116","0.58","0.28","0.06","0.05","0","","","","","","","11-37-17","0000-00-00","96");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","139.6","","","","","","","","3.3","8.4","93","0.31","262","0.83","0.1","0.04","0.04","0","","","","","","3.1","11-37-17","0000-00-00","97");
INSERT INTO laboratory VALUES("8.68","","","","","3.8","135","","","","","","","","2.5","7.8","93","0.33","140","0.72","0.3","0.04","9","0","","","","","","","11-37-17","0000-00-00","98");
INSERT INTO laboratory VALUES("9.04","","","","","6.4","137.6","","","","","","","","","","","","","","","","","","","","","","","","11-37-17","0000-00-00","99");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","2.9","8.4","99","0.31","140","0.83","0.23","0.04","0.05","0","","","","","","","","","11-37-17","0000-00-00","100");
INSERT INTO laboratory VALUES("12.98","","","","","4.2","135.00","","","","","","","","","","","","","","","","","","","","","","","","09-18-46","2017-02-11","101");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","139.6","","","","","","","","","","","","","","","","","","","","","","","","09-18-46","2016-06-12","102");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","2.9","8.4","93","0.31","140","0.83","0.1","0.04","0.05","0","","","","","","","","","09-18-46","2017-10-15","103");
INSERT INTO laboratory VALUES("9.04","","","","","4.2","139.60","","","","","","","","2.9","5.2","103","0.29","191","0.68","0.27","0.06","0.04","0.00","","","","","","","09-21-35","2010-02-20","104");
INSERT INTO laboratory VALUES("8.04","","","","","4.0","139.60","","","","","","","","","","","","","","","","","","","","","","","","09-21-35","2018-11-02","105");
INSERT INTO laboratory VALUES("12.00","","","","","4.0","137.60","","","","","","","","","","","","","","","","","","","","","","","","09-21-35","2014-02-05","106");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","2.5","8.2","101","0.29","258","0.67","0.23","0.02","9","0.00","","","","","","","","","09-21-35","2014-09-04","107");
INSERT INTO laboratory VALUES("8.04","","","","","4.2","139.60","","","","","","","","3.4","5.2","93","0.33","140","0.68","0.10","0.05","0.04","0.00","","","","","","","08-19-35","2017-08-24","108");
INSERT INTO laboratory VALUES("8.04","","","","","4.2","139.60","","","","","","","","","","","","","","","","","","","","","","","","08-19-35","2017-08-20","109");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","3.4","8.2","93","0.31","140","0.83","0.23","0.05","0.05","0.00","","","","","","","","","08-19-35","2016-06-09","110");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","137.00","","","","","","","","3.4","6.4","99","0.33","140","0.68","0.23","0.05","0.05","0.00","","","","","","","03-45-15","2015-09-16","111");
INSERT INTO laboratory VALUES("11.06","","","","","3.8","137.00","","","","","","","","","","","","","","","","","","","","","","","","03-45-15","2016-06-07","112");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","3.4","5.2","93","0.33","140","0.68","0.23","0.04","0.05","0.00","","","","","","","","","03-45-15","2016-12-13","113");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","3.4","8.4","93","0.33","140","0.83","0.10","0.04","0.05","0","","","","","","","","2.9","06-15-11","2016-10-28","114");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","139.60","","","","","","","","2.9","8.4","93","0.33","140","0.68","0.23","0.04","0.05","0","","","","","","","06-36-13","2015-08-07","115");
INSERT INTO laboratory VALUES("12.98","","","","","3.8","135.00","","","","","","","","","","","","","","","","","","","","","","","","06-36-13","2016-10-23","116");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","2.93","8.2","86","0.30","262","0.72","0.10","0.05","0.04","0","","","","","","","","","06-36-13","2016-02-10","117");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","137.00","","","","","","","","3.3","8.4","93","0.31","140","0.68","0.23","0.04","0.05","0.00","","","","","","","07-18-01","2016-11-20","118");
INSERT INTO laboratory VALUES("12.98","","","","","4.2","137.00","","","","","","","","","","","","","","","","","","","","","","","","07-18-01","2017-08-09","119");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","2.9","5.2","99","0.31","140","0.68","0.23","0.04","0.05","0.00","","","","","","","","","07-18-01","2017-11-20","120");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","137.00","","","","","","","","3.3","6.4","99","0.31","262","0.83","0.10","0.05","0.05","0.00","","","","","","","07-36-23","2015-12-31","121");
INSERT INTO laboratory VALUES("12.98","","","","","3.8","135.00","","","","","","","","3.3","8.4","99","0.31","262","0.83","0.10","0.04","0.05","0.00","","","","","","","07-36-23","2016-06-15","122");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","139.60","","","","","","","","3.4","5.2","99","0.33","140","0.68","0.23","0.04","0.05","0.00","","","","","","","10-12-56","2016-02-11","123");
INSERT INTO laboratory VALUES("8.04","","","","","3.8","137.00","","","","","","","","3.4","5.2","93","0.33","140","0.68","0.10","0.05","0.04","0","","","","","","","10-12-56","2017-12-12","124");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","137.00","","","","","","","","3.3","8.4","99","0.31","262","0.83","0.23","0.05","0.05","0.00","","","","","","","10-25-17","2013-03-13","125");
INSERT INTO laboratory VALUES("12.98","","","","","3.8","135.00","","","","","","","","3.4","5.2","99","0.31","140","0.68","0.23","0.04","0.05","0.00","","","","","","","10-25-17","2014-04-14","126");
INSERT INTO laboratory VALUES("12.98","","","","","4.0","137.00","","","","","","","","3.3","6.4","99","0.33","140","0.83","0.23","0.04","","0","","","","","","","10-25-17","2012-02-12","127");
INSERT INTO laboratory VALUES("12.98","","","","","4.2","135.00","","","","","","","","3.4","6.0","86","0.30","262","0.83","0.10","0.05","0.04","0.00","","","","","","","10-35-56","2013-06-17","128");
INSERT INTO laboratory VALUES("11.06","","","","","3.8","139.60","","","","","","","","","","","","","","","","","","","","","","","","10-35-56","2014-03-17","129");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","3.1","6.4","93","0.31","140","0.83","0.10","0.05","0.04","0","","","","","","","","","10-35-56","2016-05-17","130");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","139.60","","","","","","","","3.0","6.4","99","0.33","262","0.83","0.10","0.05","0.04","0.00","","","","","","","11-07-17","2015-08-24","131");
INSERT INTO laboratory VALUES("12.98","","","","","3.8","137.00","","","","","","","","","","","","","","","","","","","","","","","","11-07-17","0000-00-00","132");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","2.9","8.4","93","0.33","140","0.83","0.10","0.04","0.05","0.00","","","","","","","","","11-07-17","2017-12-20","133");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","137.00","","","","","","","","","","","","","","","","","","","","","","","","11-26-17","2017-10-12","134");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","2.9","8.4","99","0.33","140","0.83","0.23","0.04","0.04","0.00","","","","","","","","","11-26-17","2016-10-12","135");
INSERT INTO laboratory VALUES("11.06","","","","","4.0","135.00","","","","","","","","","","","","","","","","","","","","","","","","11-37-17","2014-02-22","136");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","2.9","7.8","99","0.33","140","0.67","0.28","0.01","0.08","0.00","","","","","","","","","11-37-17","2017-03-12","137");
INSERT INTO laboratory VALUES("12.98","","","","","4.2","137.00","","","","","","","","","","","","","","","","","","","","","","","","12-12-12","2016-04-12","138");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","3.4","5.2","3.4","8.4","99","0.31","140","0.68","0.10","0.04","0.04","0.00","","","","","","","12-12-12","2016-12-12","139");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","137.00","","","","","","","","2.5","8.4","93","0.31","140","0.68","0.23","0.04","0.05","0.00","","","","","","","12-12-12","2016-05-15","140");
INSERT INTO laboratory VALUES("11.06","","","","","4.2","137.00","","","","","","","","3.4","8.4","99","0.31","140","0.68","0.10","0.04","0.04","0.00","","","","","","","12-35-11","2016-12-12","141");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","141.60","","","","","","","","","","","","","","","","","","","","","","","","12-35-11","2015-11-11","142");
INSERT INTO laboratory VALUES("","","","","","","","","","","","","3.4","8.4","86","0.31","262","0.68","0.23","0.04","0.05","0.00","","","","","","","","","12-35-11","2016-11-11","143");
INSERT INTO laboratory VALUES("11.06","","","","","4.6","137.00","","","","","","","","3.4","8.4","93","0.33","262","0.83","0.10","0.05","0.04","0","","","","","","","13-18-17","2015-12-06","144");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","137.00","","","","","","","","3.3","5.2","99","0.31","140","0.83","0.23","0.05","0.05","0.00","","","","","","","13-38-01","2015-02-11","145");
INSERT INTO laboratory VALUES("8.04","","","","","4.6","137.00","","","","","","","","3.3","5.2","99","0.31","140","0.83","0.23","0.05","0.05","0.00","","","","","","","13-38-01","2016-03-10","146");
INSERT INTO laboratory VALUES("43","43","24","43","54","3.70","545","43","43","67.18","43","43","43","43","2.3","8.4","64","0.20","adequate","0.69","","0.11","0.04","0.01","","","","","","","22-34-76","2017-02-02","147");





CREATE TABLE `laboratory_info` (
  `hiv` varchar(10) NOT NULL,
  `hcv` varchar(10) NOT NULL,
  `rm` varchar(10) NOT NULL,
  `hbag` varchar(10) NOT NULL,
  `bloodtype` varchar(10) NOT NULL,
  `antihbv` varchar(10) NOT NULL,
  `rhfactor` varchar(10) NOT NULL,
  `labinfo_id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital_id` varchar(20) NOT NULL,
  PRIMARY KEY (`labinfo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO laboratory_info VALUES("a","a","a","a","type b","b","a","1","01-26-22");
INSERT INTO laboratory_info VALUES("NR","NR","","NR","O","NR","","2","11-37-17");
INSERT INTO laboratory_info VALUES("NR","NR","","NR","O","NR","","3","12-35-11");
INSERT INTO laboratory_info VALUES("NR","NR","","NR","","NR","","4","13-38-01");





CREATE TABLE `laboratory_others` (
  `labothers_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `value` varchar(10) NOT NULL,
  `labothers_date` date NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  PRIMARY KEY (`labothers_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO laboratory_others VALUES("1","s","s","2018-02-05","sad");
INSERT INTO laboratory_others VALUES("2","desc","s","2018-02-05","86-89-17");
INSERT INTO laboratory_others VALUES("3","red blood ","24","2018-02-21","01-26-22");
INSERT INTO laboratory_others VALUES("4","as","as","2018-02-07","01-26-22");
INSERT INTO laboratory_others VALUES("5","sample_two","2","2018-02-12","01-26-22");
INSERT INTO laboratory_others VALUES("6","aa","bb","2018-02-14","23-22-02");
INSERT INTO laboratory_others VALUES("7","sample_two","2","2018-02-12","23-22-02");
INSERT INTO laboratory_others VALUES("8","1","1","2018-02-28","23-22-02");
INSERT INTO laboratory_others VALUES("9","a","1","2018-02-15","23-22-02");
INSERT INTO laboratory_others VALUES("10","1zzzz","a","2018-02-27","23-22-02");
INSERT INTO laboratory_others VALUES("11","sample_two","2","2018-02-12","05-29-07");
INSERT INTO laboratory_others VALUES("12","sample_two1","22","2018-02-12","05-29-07");
INSERT INTO laboratory_others VALUES("13","desc","2","2018-01-27","86-89-17");
INSERT INTO laboratory_others VALUES("14","sample other","101112","2018-02-28","12-12-12");





CREATE TABLE `machineresult` (
  `m_bloodpressure` varchar(10) NOT NULL,
  `m_cardiacrate` varchar(10) NOT NULL,
  `m_bloodflowrate` varchar(10) NOT NULL,
  `m_transmempressure` varchar(10) NOT NULL,
  `m_venpressure` varchar(10) NOT NULL,
  `machineresult_id` int(10) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(30) NOT NULL,
  `m_date` date NOT NULL,
  `m_time` varchar(12) NOT NULL,
  PRIMARY KEY (`machineresult_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

INSERT INTO machineresult VALUES("164/91","72","250","80","180","1","86-89-17","2017-06-26","7:25 AM");
INSERT INTO machineresult VALUES("165/88","78","300","80","200","2","86-89-17","2017-06-26","8:45 AM");
INSERT INTO machineresult VALUES("172/86","75","300","80","200","3","86-89-17","2017-06-26","9:45 AM");
INSERT INTO machineresult VALUES("165/95","78","300","80","200","4","86-89-17","2017-06-26","10:20 AM");
INSERT INTO machineresult VALUES("170/83","70","300","80","200","5","86-89-17","2017-06-26","11:15 AM");
INSERT INTO machineresult VALUES("160/80","","","","","6","86-89-17","2017-06-26","11:25 AM");
INSERT INTO machineresult VALUES("160/80","","","","","7","86-89-17","2017-06-26","11:55 AM");
INSERT INTO machineresult VALUES("152/88","70","250","36.3","200","8","86-89-17","2017-07-03","7:12 AM");
INSERT INTO machineresult VALUES("175/90","78","250","80","200","9","86-89-17","2017-07-03","7:45 AM");
INSERT INTO machineresult VALUES("174/90","78","250","80","200","10","86-89-17","2017-07-03","8:05 PM");
INSERT INTO machineresult VALUES("174/93","78","250","80","200","11","86-89-17","2017-07-03","9:05 PM");
INSERT INTO machineresult VALUES("160/80","80","300","80","240","12","86-89-17","2017-07-03","10:25 PM");
INSERT INTO machineresult VALUES("180/90","","","","","13","86-89-17","2017-07-03","11:15 PM");
INSERT INTO machineresult VALUES("160/90","","","","","14","86-89-17","2017-07-03","11:31 PM");
INSERT INTO machineresult VALUES("151/83","55","250","120","180","15","86-89-17","2017-10-07","7:00 AM");
INSERT INTO machineresult VALUES("180/88","77","300","120","220","16","86-89-17","2017-10-07","8:00 PM");
INSERT INTO machineresult VALUES("150/80","80","300","140","200","17","86-89-17","2017-10-07","8:42 PM");
INSERT INTO machineresult VALUES("162/90","71","300","140","200","18","86-89-17","2017-10-07","9:30 AM");
INSERT INTO machineresult VALUES("171/90","80","300","100","200","19","86-89-17","2017-10-07","10:05 AM");
INSERT INTO machineresult VALUES("171/90","80","300","100","200","20","86-89-17","2017-10-07","11:05");
INSERT INTO machineresult VALUES("160/90","","","","","21","86-89-17","2017-10-07","11:05");
INSERT INTO machineresult VALUES("162/90","67","250","120","180","22","86-89-17","2017-07-17","6.5");
INSERT INTO machineresult VALUES("169/85","68","350","120","240","23","86-89-17","2017-07-17","7:45");
INSERT INTO machineresult VALUES("173/88","65","300","120","240","24","86-89-17","2017-07-17","820");
INSERT INTO machineresult VALUES("186/91","70","300","120","240","25","86-89-17","2017-07-17","8:43");
INSERT INTO machineresult VALUES("173/91","72","300","120","220","26","86-89-17","2017-07-17","9:15");
INSERT INTO machineresult VALUES("186/85","70","300","120","220","27","86-89-17","2017-07-17","10:00");
INSERT INTO machineresult VALUES("160/80","70","300","120","200","28","86-89-17","2017-07-17","10:20");
INSERT INTO machineresult VALUES("154/80","","","","","29","86-89-17","2017-07-17","11:10");
INSERT INTO machineresult VALUES("150/80","","","","","30","86-89-17","2017-07-17","11:25");
INSERT INTO machineresult VALUES("156/86","66","250","100","160","31","86-89-17","2017-07-24","7:15");
INSERT INTO machineresult VALUES("156/83","67","300","140","200","32","86-89-17","2017-07-24","7:50");
INSERT INTO machineresult VALUES("179/93","72","300","140","220","33","86-89-17","2017-07-24","8:05");
INSERT INTO machineresult VALUES("176/88","68","300","140","220","34","86-89-17","2017-07-24","10:30");
INSERT INTO machineresult VALUES("164/93","73","300","120","220","35","86-89-17","2017-07-24","11:10");
INSERT INTO machineresult VALUES("168/93","","","","","36","86-89-17","2017-07-24","11:32");
INSERT INTO machineresult VALUES("160/90","","","","","37","86-89-17","2017-07-24","11:40");
INSERT INTO machineresult VALUES("153/80","72","250","120","180","38","01-15-33 ","2017-06-26","6:45");
INSERT INTO machineresult VALUES("160/80","77","300","140","200","39","01-15-33","2017-07-03","7:45");
INSERT INTO machineresult VALUES("170/90","80","300","140","220","40","01-15-33","2017-07-03","8:30");
INSERT INTO machineresult VALUES("165/83","77","300","140","220","41","01-15-33","2017-07-03","9:00");
INSERT INTO machineresult VALUES("185/92","73","300","160","220","42","01-15-33","2017-07-03","10:00");
INSERT INTO machineresult VALUES("160/90","","","","","43","01-15-33 ","2017-07-03","10:45");
INSERT INTO machineresult VALUES("160/90","","","","","44","01-15-33 ","2017-07-03","11:15");
INSERT INTO machineresult VALUES("160/90","73","300","160","220","45","86-89-17","2018-01-22","5:12 AM");
INSERT INTO machineresult VALUES("139/69","75","220","42","52","46","01-21-19","2016-07-31","10:39 AM");
INSERT INTO machineresult VALUES("151/180","75","200","44","60","47","01-21-19","2016-07-31","10:40 AM");
INSERT INTO machineresult VALUES("151/181","75","200","44","60","48","01-21-19","2016-07-31","11:41 AM");
INSERT INTO machineresult VALUES("151/182","75","200","44","60","49","01-21-19","2016-07-31","11:45 AM");
INSERT INTO machineresult VALUES("175/90","75","200","44","60","50","01-26-22","2016-07-31","8:16 PM");
INSERT INTO machineresult VALUES("175/91","75","200","44","60","51","01-26-22","2016-06-26","1:39 AM");
INSERT INTO machineresult VALUES("175/92","75","200","44","60","52","01-26-22","2016-06-26","9:36 PM");
INSERT INTO machineresult VALUES("175/93","75","200","44","60","53","01-26-22","2016-06-26","9:37 PM");
INSERT INTO machineresult VALUES("175/94","75","200","44","60","54","01-26-22","2016-06-26","9:46 PM");
INSERT INTO machineresult VALUES("175/95","75","200","44","60","55","03-18-20","2016-06-26","2:08 AM");
INSERT INTO machineresult VALUES("175/96","75","200","44","60","56","03-18-20","2018-02-12","2:47 AM");
INSERT INTO machineresult VALUES("175/97","75","200","44","60","57","03-18-20","2018-02-12","2:49 AM");
INSERT INTO machineresult VALUES("175/98","75","200","44","60","58","03-18-20","2018-02-12","3:12 AM");
INSERT INTO machineresult VALUES("175/99","75","200","44","60","59","03-25-11","2018-02-12","3:12 AM");
INSERT INTO machineresult VALUES("175/100","75","200","44","60","60","03-25-11","2018-02-12","3:13 AM");
INSERT INTO machineresult VALUES("175/101","75","200","44","60","61","03-25-11","2018-02-12","3:23 AM");
INSERT INTO machineresult VALUES("175/102","75","200","44","60","62","03-25-11","2018-02-14","3:28 AM");
INSERT INTO machineresult VALUES("175/103","75","200","44","60","63","03-25-11","2018-02-14","3:42 AM");
INSERT INTO machineresult VALUES("175/104","75","200","44","60","64","03-25-11","2018-02-14","5:19 AM");
INSERT INTO machineresult VALUES("175/105","75","200","44","60","65","03-25-11","2018-02-14","1:39 AM");
INSERT INTO machineresult VALUES("12 / 12","12","12","12","12","66","05-29-07","2018-02-22","1:34 am");
INSERT INTO machineresult VALUES("12 / 12","sa","sa","as","as","67","05-29-07","2018-02-22","2:00 am");
INSERT INTO machineresult VALUES("198 / 64","78","200","40","80","68","40-89-11","2017-06-26","7:10 am");
INSERT INTO machineresult VALUES("206 / 68","76","200","40","80","69","40-89-11","2017-06-26","8:10 am");
INSERT INTO machineresult VALUES("194 / 60","76","220","40","80","70","40-89-11","2017-06-26","8:50 am");
INSERT INTO machineresult VALUES("216 / 72","76","220","20","80","71","40-89-11","2017-06-26","9:45 am");
INSERT INTO machineresult VALUES("193 / 66","76","220","20","80","72","40-89-11","2017-06-26","10:20 am");
INSERT INTO machineresult VALUES("195 / 71","-","-","-","-","73","40-89-11","2017-06-26","11:10 am");
INSERT INTO machineresult VALUES("150 / 80","-","-","-","-","74","40-89-11","2017-06-26","11:30 am");
INSERT INTO machineresult VALUES("2 / 2","72","2","2","2","75","86-89-17","2018-02-26","3:55 am");
INSERT INTO machineresult VALUES("2 / 2","2","2","2","2","76","12-12-12","2018-02-28","4:08 am");
INSERT INTO machineresult VALUES("2 / 2","2","2","2","2","77","12-12-12","2018-02-28","4:08 am");
INSERT INTO machineresult VALUES("170 / 60","85","300","150","180","78","12-12-12","2018-02-28","10:43 am");
INSERT INTO machineresult VALUES("198 / 64","78","200","40","80","79","AAA-AAA","2018-02-28","11:02 am");
INSERT INTO machineresult VALUES("206 / 68","76","200","40","80","80","AAA-AAA","2018-02-28","11:03 am");
INSERT INTO machineresult VALUES("120 / 100","65","200","56","57","81","AAA-AAA","2018-02-28","11:51 am");





CREATE TABLE `maintenance` (
  `employeeid` varchar(7) NOT NULL,
  `action` char(6) NOT NULL,
  `m_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO maintenance VALUES("E0001","Export","2018-03-02 03:05 pm");





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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO nephrologist VALUES("1","N0001","Alayon","Ricky","A","444 - 2045","09173101106","#20 Celso Tan - Caroll sts, Brgy. Sum-ag, Bacolod City, Negros Occidental");
INSERT INTO nephrologist VALUES("10","N00010","Paylado","Franelin","D","","","");
INSERT INTO nephrologist VALUES("11","N00011","Austria","Joseph Peter","D","","","");
INSERT INTO nephrologist VALUES("12","N00012","Togle","Brian Antonio","D","","","");
INSERT INTO nephrologist VALUES("13","N00013","Garcia","Nina","A.","","","");
INSERT INTO nephrologist VALUES("2","N0002","Pramio","Celeste-Jo","V","434 - 2348","09231429248","#323, 109 St. Green Plains Subdivision, Bacolod City, Negros Occidental");
INSERT INTO nephrologist VALUES("3","N0003","Pepingco","Jerome","A","","","A");
INSERT INTO nephrologist VALUES("4","N0004","Tumaneng","Leo Manuel","A","","","A");
INSERT INTO nephrologist VALUES("5","N0005","Antonio","Allan","D","","","Victorias");
INSERT INTO nephrologist VALUES("6","N0006","Pramio","Vicente","D","","","");
INSERT INTO nephrologist VALUES("7","N0007","Araneta","Maricris","","","","");
INSERT INTO nephrologist VALUES("8","N0008","Maravilla","Socorro","","","","");
INSERT INTO nephrologist VALUES("9","N0009","Tomas","Remedios","","","","");





CREATE TABLE `nephrologistschedule` (
  `nephroschedule_id` int(5) NOT NULL AUTO_INCREMENT,
  `nephrologistid` varchar(30) NOT NULL,
  `monday` int(1) NOT NULL,
  `tuesday` int(1) NOT NULL,
  `wednesday` int(1) NOT NULL,
  `thursday` int(1) NOT NULL,
  `friday` int(1) NOT NULL,
  PRIMARY KEY (`nephroschedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO nephrologistschedule VALUES("6","N0001","1","0","1","1","0");
INSERT INTO nephrologistschedule VALUES("7","N00010","0","0","0","0","0");





CREATE TABLE `nephronotesorder` (
  `nephrologistid` varchar(8) NOT NULL,
  `nephro_notes` text NOT NULL,
  `nephro_order` text NOT NULL,
  `notes_order_date` date NOT NULL,
  `notes_order_Id` int(5) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(30) NOT NULL,
  PRIMARY KEY (`notes_order_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO nephronotesorder VALUES("N0001","comfortable 160/80","UF to DW","2017-07-03","1","86-89-17");
INSERT INTO nephronotesorder VALUES("N0001","Comfortable 
clear bs
P edema
","UF to BW","2017-10-07","2","86-89-17");
INSERT INTO nephronotesorder VALUES("N0001","Comfortable clear ruls P edema 160/80","UF to 3.8 li talat
","2017-07-17","3","86-89-17");
INSERT INTO nephronotesorder VALUES("N0001","comfortable clear ruls, med edema","UF to DW","2017-07-24","4","86-89-17");
INSERT INTO nephronotesorder VALUES("N00010","a","a","2017-07-31","6","86-89-17");
INSERT INTO nephronotesorder VALUES("N00010","a","a","2018-01-22","7","86-89-17");
INSERT INTO nephronotesorder VALUES("N00010","asdasd","sadasd","2018-01-29","8","01-26-22");
INSERT INTO nephronotesorder VALUES("N00010","this is a note","this is an order","2018-01-29","9","45-45-24");
INSERT INTO nephronotesorder VALUES("N00010","asd","asd","2018-02-11","10","A");
INSERT INTO nephronotesorder VALUES("N00010","asd","asd","2018-02-26","11","86-89-17");
INSERT INTO nephronotesorder VALUES("N0002","test`","test1","2018-02-28","12","12-12-12");
INSERT INTO nephronotesorder VALUES("N0002","sample...lllll","sample","2018-02-28","13","AAA-AAA");





CREATE TABLE `nursenotes` (
  `focus` text NOT NULL,
  `data` text NOT NULL,
  `action` text NOT NULL,
  `resolution` text NOT NULL,
  `employeeid` varchar(8) NOT NULL,
  `nurse_notes_date` date NOT NULL,
  `nurse_notes_id` int(5) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(30) NOT NULL,
  PRIMARY KEY (`nurse_notes_id`),
  KEY `Hospital_Id` (`Hospital_Id`),
  CONSTRAINT `Hospital_Id` FOREIGN KEY (`Hospital_Id`) REFERENCES `patientprofile` (`Hospital_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO nursenotes VALUES("For hemodialysis","Recieved ambulatory concious and coherent","Recieved Ambulatory, consent signed, Avf site","Uf goal recieved, Hd assessment done. Post HD weight and vital signs checked. eposino 6000 iu given @ at  R abdominal well","E0001","2017-06-26","1","86-89-17");
INSERT INTO nursenotes VALUES("For Hemodialysis","Recieved ambulatory concious and coherent","Consent for HD signed 4vf site dressed aseptically, Uf goal set to 3,000ml connulation","Uf goal reacted, HD treatment ended and terminated past HD assessment done, epueno 6,000 is given at abdominal wall","E0001","2017-07-03","2","86-89-17");
INSERT INTO nursenotes VALUES("Health teaching in diet","","advised to strictly limit oral fluid in less than 1 liter per day","able to comprehend","E0001","2017-07-03","3","86-89-17");
INSERT INTO nursenotes VALUES("elevated blood pressure","BP 190/95","Due meds given","BP 160/90
","E0001","2017-07-03","4","86-89-17");
INSERT INTO nursenotes VALUES("For Hemodialysis","Came in ambulatory; concious and coherent; ready for hemodialysis","Pre HD assessment done, HD consent signed; mode comfortable on bedchair.","11:00 AM HD ended & terminated","E0001","2017-10-07","5","86-89-17");
INSERT INTO nursenotes VALUES("Health Teaching","","Instructed to limit fluid intake to 800 ml/day
-kept monitored","Able to Comprehend
-Epokine 4000 IU injected subcotaneously @the R abdominal wall
-Post HD weight taken and recorded. 11:25PM Discharged ambulatory; in fair
","E0001","2017-10-07","6","86-89-17");
INSERT INTO nursenotes VALUES("aaaaaaa","aaaa","aaaa","aaaaa","E0001","0000-00-00","7","05-29-07");
INSERT INTO nursenotes VALUES("For Hemodialysis","Recieved ambulatory consumes and coherent","Pre Hemodialysis assessment done, consent signed,","11:05 UF goal reached, HD ended and terminated, Post HD assessment done, Eporis 4000 ml given at (P) Abdominal wall.","E0003","2017-07-17","8","86-89-17");
INSERT INTO nursenotes VALUES("Health teaching on diet","","Advised to shortly limit oral fluid intake, to less than 1 liter per day","11:25 Discharged ambulatory in fair condition accompanied by folks
","E0003","2017-07-17","9","86-89-17");
INSERT INTO nursenotes VALUES("for hemodialysis","patient came in ambulatory and ready for HD","pre HD in, recorded UF goal set to 3800","UF goal recorded, HD ended","E0008","2017-07-24","10","86-89-17");
INSERT INTO nursenotes VALUES("Health teach","","instructed on proper one of AUF al to in OF to 800ml/day","able to complete","E0008","2017-07-24","11","86-89-17");
INSERT INTO nursenotes VALUES("For Hemodialysis","Recieved ambulatory concious and consent","consent for Hemodialysis signs, C AUF site dressed aseptically, UF goal set to 3,400 ml ","10:45 UF goal reached, HD ended and terminated, post HD weight and vital signs checked Eposino 6,000 ml given at R abdominal wall
","E0003","2017-07-31","12","86-89-17");
INSERT INTO nursenotes VALUES("Health teaching an diet","","Advised to strictly limit oral fluid intake to less than 1 liter per day","Able to comprehend
","E0003","2017-07-31","13","86-89-17");
INSERT INTO nursenotes VALUES("a","a","a","a","E0001","2018-01-22","14","86-89-17");
INSERT INTO nursenotes VALUES("for hemodialysis","came in ambulatory ","pre HD consent signed ","12:30pm HD ended","E0001","2018-01-22","15","45-45-24");
INSERT INTO nursenotes VALUES("sda","sdas","dasda","dasdas","E0001","2018-01-29","16","01-26-22");
INSERT INTO nursenotes VALUES("for hemodialysis","bp 170/40","give medicine","bp normal","E0001","2018-01-29","17","45-45-24");
INSERT INTO nursenotes VALUES("as","dasd","asd","asd","E0001","2018-02-11","18","A");
INSERT INTO nursenotes VALUES("as","sa","sa","sa","E0001","2018-02-12","19","86-89-17");
INSERT INTO nursenotes VALUES("for hemodialysis","came in per wheelchair; conscious and coherent; ready for HD","pre HD assessment done; HD consent signed; made comfortable on bed chair;
L AVF site cleansed & dressed aseptically;
7:10 am HD started; UF goal set to 2 liters;
TVSS flushing 50cc given IV bolus for 15 mins until end of HD","11:10 am HD ended and terminated","E0001","2017-06-26","21","40-89-11");
INSERT INTO nursenotes VALUES("Health teaching","","Instructed to limit fluid intake to 800ml/day","able to comprehend;
Eposino 6000 IV injected subcutaneously @ the abdominal wall;
Past HD weight taken and recorded
12pm discharged ambulatory; in fair condition","E0001","2017-06-26","22","40-89-11");
INSERT INTO nursenotes VALUES("test","test1","test2","test3","E0001","2018-02-28","23","12-12-12");
INSERT INTO nursenotes VALUES("test4","test5","test6","test7","E0001","2018-02-28","24","12-12-12");
INSERT INTO nursenotes VALUES("for hemodialysis","came in per wheelchair","pre hd assesment","11:00 am finished hemo
","E0001","2018-02-28","25","AAA-AAA");
INSERT INTO nursenotes VALUES("test","test","test","solved","E0001","2018-02-28","26","AAA-AAA");
INSERT INTO nursenotes VALUES("health teaching","yyyyy","ccccc","","E0001","2018-02-28","27","AAA-AAA");





CREATE TABLE `patientdrugprofile` (
  `drug_strength` varchar(30) NOT NULL,
  `dosage` varchar(15) NOT NULL,
  `frequency` varchar(20) NOT NULL,
  `ROA` varchar(20) NOT NULL,
  `dateordered` date NOT NULL,
  `PRN` int(1) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `nephrologistid` varchar(30) NOT NULL,
  `drugprofile_id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(30) NOT NULL,
  `drugprofile_date` char(20) NOT NULL,
  PRIMARY KEY (`drugprofile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

INSERT INTO patientdrugprofile VALUES(" s","s","s","s","2018-02-09","0","s","N00011","9","01-26-22","2018, February");
INSERT INTO patientdrugprofile VALUES(" s","s","s","s","2018-02-09","0","s","N0002","10","01-26-22","2018, February");
INSERT INTO patientdrugprofile VALUES(" a","a","a","a","2018-01-12","0","a","N00010","11","01-26-22","2018, January");
INSERT INTO patientdrugprofile VALUES(" 12","45","3 times a day","oral","2017-01-31","0","ksfkeer","N0005","12","01-26-22","2017, January");
INSERT INTO patientdrugprofile VALUES(" 3434","434","434","oral","2018-01-09","0","343434","N0001","13","01-26-22","2018, January");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate","1 tab","TID","P.O.","2018-02-07","0","","","18","45-42-23","2018, February");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate","1 tab","TID","P.O.","2018-02-07","0","","","19","45-42-23","2018, February");
INSERT INTO patientdrugprofile VALUES("Sodium bicarbonate","1 tab","TID","P.O.","2018-02-07","0","","","20","45-42-23","");
INSERT INTO patientdrugprofile VALUES("amlodipine 10mg","1 tab","OD","P.O.","2018-02-07","0","","","22","45-42-23","");
INSERT INTO patientdrugprofile VALUES("losartan 50mg","1 tab","OD","P.O.","2018-02-07","0","","","23","45-42-23","");
INSERT INTO patientdrugprofile VALUES("Epa alfa 4000iu","1 PFS","2x/week","SC","2018-02-07","0","","","24","45-42-23","");
INSERT INTO patientdrugprofile VALUES("Felodipine 5mg","1 tab","O.D.","P.O.","2016-04-20","0","","","27","33-42-13","2016, April");
INSERT INTO patientdrugprofile VALUES("Fero 8","1 capsule","B.I.D.","P.O.","2016-04-20","0","","","28","33-42-13","2016, April");
INSERT INTO patientdrugprofile VALUES("NaHCoO3","1 tab","B.I.D.","P.O.","2016-04-20","0","","","29","33-42-13","2016, April");
INSERT INTO patientdrugprofile VALUES("CaCO3","1 tab","B.I.D.","P.O.","2016-04-20","0","","","30","33-42-13","2016, April");
INSERT INTO patientdrugprofile VALUES("Tragenta 5mg","1 tab","ODAC","P.O.","2016-04-20","0","","","31","33-42-13","2016, April");
INSERT INTO patientdrugprofile VALUES("Epo Alfa (renogen)","4000 in","3x/week","SQ","2016-04-20","0","","","32","33-42-13","2016, April");
INSERT INTO patientdrugprofile VALUES("Felodipine 5mg","1 tab","OD","P.O.","2017-01-04","0","","","33","33-42-13","2017, January");
INSERT INTO patientdrugprofile VALUES("Fero B","1 capsule","B.I.O.","P.O.","2017-01-04","0","","","34","33-42-13","2017, January");
INSERT INTO patientdrugprofile VALUES("Epo Alfa (renogen)","4000 iu","2x/week alternate 1x","SQ","2017-01-04","0","","","35","33-42-13","2017, January");
INSERT INTO patientdrugprofile VALUES("Felodipine 5mg","1 tab","OD","","2018-01-03","0","","","36","33-42-13","2018, January");
INSERT INTO patientdrugprofile VALUES("Fero B","1 capsule","OD","","2018-01-03","0","","","37","33-42-13","2018, January");
INSERT INTO patientdrugprofile VALUES("calcium carbonate","1 cap","ODHS","","2018-01-03","0","","","38","33-42-13","2018, January");
INSERT INTO patientdrugprofile VALUES("EPO alfa ","4000 iu","2x/week","","2018-01-03","0","","","39","33-42-13","2018, January");
INSERT INTO patientdrugprofile VALUES("clonidine 150mg","1 tab","PRN","","2018-01-03","0","","","40","33-42-13","2018, January");
INSERT INTO patientdrugprofile VALUES(" sad","12","asd","12","2018-02-26","0","sad","N0002","41","13-38-01","2018, February");
INSERT INTO patientdrugprofile VALUES(" a","a","a","a","2018-02-27","0","a","N0001","42","01-26-22","2018, February");
INSERT INTO patientdrugprofile VALUES(" a","a","a","a","2018-02-28","0","a","N00013","43","12-12-12","2018, February");
INSERT INTO patientdrugprofile VALUES(" b","b","b","b","2018-01-17","0","b","N0001","44","12-12-12","2018, January");
INSERT INTO patientdrugprofile VALUES(" 1","1","1","1","2018-02-12","1","1","N00013","45","12-12-12","2018, February");
INSERT INTO patientdrugprofile VALUES(" 1","1","1","1","2018-02-06","1","1","N00010","46","12-12-12","2018, February");
INSERT INTO patientdrugprofile VALUES(" 1.01","1","1","1","2018-02-19","1","1","N00010","47","12-12-12","2018, February");
INSERT INTO patientdrugprofile VALUES("test 10.01","1","1","1","2018-02-19","1","1","N0001","48","12-12-12","2018, February");
INSERT INTO patientdrugprofile VALUES(" 10.01","1","1","1","2018-02-19","1","1","N0001","49","12-12-12","2018, February");
INSERT INTO patientdrugprofile VALUES("test2 10.01","1","1","1","2018-02-19","1","1","N0001","50","12-12-12","2018, February");
INSERT INTO patientdrugprofile VALUES("test23 10.01","1","1","1","2018-02-19","1","1","N0001","51","12-12-12","2018, February");
INSERT INTO patientdrugprofile VALUES("amlodipine 10mg","1 tablet","od","po","2018-01-02","0","for bp of 170/100","N0003","52","86-89-17","2018, January");
INSERT INTO patientdrugprofile VALUES("biogesics 10","1","1","a","2018-03-02","0","1","N00010","53","01-26-22","2018, March");
INSERT INTO patientdrugprofile VALUES("s s","s","s","s","2018-03-02","0","","N00010","54","01-26-22","2018, March");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 50mg","1 tab","TID","P.O","2015-02-10","0","","N00010","55","01-15-33","2015, February");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 10mg","1 tab","TID","P.O","2015-10-20","0","","N0001","56","01-15-33","2015, October");
INSERT INTO patientdrugprofile VALUES("Sodium bicarbonate 10mg","1 tab","TID","P.O","2016-02-02","0","","N00011","57","01-15-33","2016, February");
INSERT INTO patientdrugprofile VALUES("amlodipine  10mg","1 tab","TID","P.O","2016-10-05","0","","N00010","58","01-15-33","2016, October");
INSERT INTO patientdrugprofile VALUES("losartan  50mg"," 1 tab","OD","P.O","2017-10-20","0","","N00012","59","01-15-33","2017, October");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 10mg","1 tab","TID","P.O","2015-05-12","0","","N0002","60","01-21-19","2015, May");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","1 tab","TID","P.O","2015-02-10","0","","N00012","61","01-21-19","2015, February");
INSERT INTO patientdrugprofile VALUES("amlodipine  10mg","1 tab","TID","P.O","2016-10-25","0","","N00012","62","01-21-19","2016, October");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 500mg","1 tab","OD","P.O","2016-02-10","0","","N0002","63","02-07-15","2016, February");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","1 tab","OD","P.O","2016-10-20","0","","N00011","64","02-07-15","2016, October");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","SC","OD","P.O.","2016-04-12","0","","N0004","65","03-01-15","2016, April");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 500mg","SC","OD","P.O.","2016-02-11","0","","N00012","66","03-01-15","2016, February");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 10mg","1 tab","TID","P.O","2015-02-15","1","","N0003","67","03-18-20","2015, February");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 10mg","1 tab","TID","P.O","2016-02-10","0","","N00013","68","04-17-26","2016, February");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","SC","TID","P.O.","2016-02-15","0","","N00010","69","04-17-26","2016, February");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 50mg","1 tab","TID","P.O","2016-02-25","0","","N00010","70","04-17-26","2016, February");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 10mg","1 tab","TID","P.O","2017-11-22","0","","N00011","71","04-15-08","2017, November");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 10mg","1 tab","TID","P.O","2017-11-22","0","","N00011","72","04-15-08","2017, November");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 10mg","1 tab","OD","P.O.","2015-03-12","0","","N00011","73","09-18-46","2015, March");
INSERT INTO patientdrugprofile VALUES("amlodipine  10mg","1 tab","TID","P.O","2015-05-15","0","","N00010","74","09-18-46","2015, May");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","SC","TID","P.O","2014-07-08","0","","N00010","75","09-21-35","2014, July");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 500mg","1 tab","TID","P.O","2016-05-25","0","","N00010","76","09-21-35","2016, May");
INSERT INTO patientdrugprofile VALUES("amlodipine  650mg","SC","TID","P.O","2015-10-12","0","","N00010","77","08-19-35","2015, October");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 10mg","1 tab","TID","P.O","2016-02-12","0","","N00011","78","08-19-35","2016, February");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 500mg","SC","OD","P.O","2015-12-22","0","","N00010","79","03-25-11","2015, December");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","1 tab","OD","P.O","2017-10-29","0","","N00011","80","03-25-11","2017, October");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 500mg","1 tab","TID","P.O","2016-09-23","0","","N00010","81","05-19-21","2016, September");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 10mg","1 tab","OD","P.O","2016-10-27","0","","N00012","82","05-19-21","2016, October");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","1 tab","OD","P.O","2016-10-27","0","","N00010","83","05-29-07","2016, October");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","SC","OD","P.O","2016-10-27","0","","N00010","84","05-29-07","2016, October");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 10mg","1 tab","TID","P.O","2016-10-22","0","","N00010","85","06-08-23","2016, October");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 10mg","1 tab","TID","P.O.","2017-10-24","0","","N00011","86","06-08-23","2017, October");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","1 tab","TID","P.O","2016-11-23","0","","N0001","87","06-15-11","2016, November");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 10mg","SC","TID","P.O","2016-11-29","0","","N0001","88","06-36-13","2016, November");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 10mg","1 tab","TID","P.O","2016-10-26","0","","N0003","89","06-36-13","2016, October");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 500mg","1 tab","TID","P.O","2016-10-17","0","","N00010","90","07-18-01","2016, October");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 500mg","SC","OD","P.O.","2015-10-25","0","","N00013","91","07-18-01","2015, October");
INSERT INTO patientdrugprofile VALUES("amlodipine  500mg","SC","OD","P.O.","2016-10-23","0","","N00012","92","07-36-23","2016, October");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","1 tab","TID","P.O","2016-11-29","0","","N00012","93","07-36-23","2016, November");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 10mg","1 tab","TID","P.O","2016-01-12","0","","N00011","94","10-12-56","2016, January");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 10mg","SC","OD","P.O","2015-11-11","0","","N00012","95","10-12-56","2015, November");
INSERT INTO patientdrugprofile VALUES("amlodipine  500mg","SC","OD","P.O","2012-12-12","0","","N00012","96","10-25-17","2012, December");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 500mg","SC","TID","P.O","2014-02-12","0","","N00011","97","10-25-17","2014, February");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 500mg","1 tab","TID","P.O","2016-01-17","0","","N00012","98","10-25-17","2016, January");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","1 tab","OD","P.O","2010-10-10","0","","N0002","99","10-25-17","2010, October");
INSERT INTO patientdrugprofile VALUES("amlodipine  10mg","1 tab","TID","P.O","2016-06-06","0","","N0005","100","10-25-17","2016, June");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","SC","TID","P.O","2016-11-22","0","","N00010","101","10-35-56","2016, November");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 10mg","SC","OD","P.O.","2017-12-26","0","","N0001","102","11-07-17","2017, December");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 10mg","SC","OD","P.O","2016-10-25","0","","N00011","103","11-07-17","2016, October");
INSERT INTO patientdrugprofile VALUES("amlodipine  10mg","SC","OD","P.O","2016-09-23","0","","N0001","104","11-07-17","2016, September");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","1 tab","TID","P.O","2016-10-21","0","","N0001","105","11-26-17","2016, October");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 10mg","SC","OD","P.O","2016-10-27","0","","N00011","106","11-26-17","2016, October");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 10mg","SC","OD","P.O.","2015-02-12","0","","N0001","107","11-37-17","2015, February");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 500mg","SC","OD","P.O","2017-10-27","0","","N00012","108","12-12-12","2017, October");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 650mg","SC","OD","P.O.","2016-09-28","0","","N00013","109","12-12-12","2016, September");
INSERT INTO patientdrugprofile VALUES(" Calcium carbonate 10mg","1 tab","OD","P.O.","2016-09-27","0","","N00010","110","12-35-11","2016, September");
INSERT INTO patientdrugprofile VALUES("Fennous sulfate 500mg","SC","OD","P.O.","2016-10-29","0","","N00011","111","12-35-11","2016, October");
INSERT INTO patientdrugprofile VALUES("amlodipine  10mg","SC","OD","P.O.","2015-09-28","0","","N00013","112","12-35-11","2015, September");
INSERT INTO patientdrugprofile VALUES("biogesic 5mg","1 tab","3 times a day","oral","2018-03-02","1","","N00012","113","22-34-76","2018, March");





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
  `P_Status` int(1) NOT NULL,
  `P_Date` varchar(10) NOT NULL,
  `P_Month` varchar(10) NOT NULL,
  `P_Year` varchar(10) NOT NULL,
  PRIMARY KEY (`Hospital_Id`),
  KEY `nephrologistid` (`nephrologistid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO patientprofile VALUES("01-15-33","Diaz","Precious","Jaspi","1945-11-29","72","Female","Filipino","Roman Catholic","Married","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09128338521","Bacolod City, Negros Occidental","09236367547","Zyra Diaz","Brgy. Concepcion, Talisay City, Negros Occidental","09078953622","70","Epoetin Alfa (Eposino) 6,000 ui 2x/week","","1112-2568-8565","Precious Diaz","Self","2015-06-15","0","N00010","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("01-21-19","Mana-ay","Marc","Asin","1975-06-25","42","Male","Filipino","Born Again Christian","Married","La Carlota City, Negros Occidental","09852685106","La Carlota City, Negros Occidental","09852685106","Alec Asin","Bacolod City, Negros Occidental","09075698512","38","Eposino 4,000 iu alternate (once & twice a week)","","","Marc Mana-ay","Self","2013-10-15","0","N00011","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("01-26-22","Orota","Rosario","Abanilla","1933-09-24","83","Female","F","Dating Daan","Widowed","Comboy St. Phase II St. Francis Subd. Brgy. 5, Silay City, Negros Occidental","09064459636","Comboy St. Phase II St. Francis Subd. Brgy. 5, Silay City, Negros Occidental","09064459636","Jake Joaquin","HDA. Puyas Brgy. IV, Silay City, Negros Occidental","09126634789","83","Eposino 4,000 iu","ESRD Secondary to , Diabetic Nephropathy, Chronic Gromerulonephritis, Hypertensive Nephrosclerosis, ","1117-5342-4950","Dennis Valladarez","Guardian","2017-03-01","0","N0007","1","","Jan","2018");
INSERT INTO patientprofile VALUES("02-07-15","Montalvo","Zyra","Grande","1989-02-01","29","Female","Filipino","Roman Catholic","Married","Magallon, Moises Padilla, Negros Occidental","09079536854","Magallon, Moises Padilla, Negros Occidental","09079536854","Precious Montalvo","Magallon, Moises Padilla, Negros Occidental","09788568952","27","Epoetin Alpha 4,000 ui 2x/week","","2013-3688-8968","Zyra Montalvo","Sibling","2015-10-20","0","N00010","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("03-01-15","Velez","Keir","Montecillo","1985-11-10","32","Male","Filipino","Roman Catholic","Married","La Carlota City, Negros Occidental","09079856826","La Carlota City, Negros Occidental","09079856826","Carla Velez","La Carlota, Negros Occidental","09079856863","30","Epoetin Alpha 6,000 ui 2x/week","ESRD Secondary to , Diabetic Nephropathy","","Keir Velez","Self","2015-09-25","0","N0002","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("03-18-20","Rubiato","Alessander","Legaspi","1967-12-31","50","Male","Filipino","Roman Catholic","Married","Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","09128338521","Brgy. 3, EB Magalona, Silay City, Negros Occidental","09168430493","Alyana Rubiato","Dos Hermanas, Talisay City, Negros Occidental","09198446769","46","Epoetin Alfa (Eposino) 6,000 ui 2x/week","","","Alessander Rubiato","Self","2013-06-12","0","N00010","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("03-25-11","Britania","Michael","Dahildahil","1965-06-12","50","Male","Filipino","Born Again Christian","Married","Brgy. Tanza, EB Magalona, Negros Occidental","09124685215","Brgy. Tanza, EB Magalona, Negros Occidental","09124685215","May Anne Gonzaga","Brgy. 3, EB Magalona, Silay City, Negros Occidental","09079682451","51","Epoetin Alfa (Eposino) 6,000 ui 2x/week","","","May Anne Gonzaga","Child","2015-03-01","0","N00012","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("03-45-15","Velez","Keir","Montecillo","0000-00-00","32","Male","Filipino","Roman Catholic","Married","La Carlota City, Negros Occidental","9079856826","La Carlota City, Negros Occidental","9079856826","Carla Velez","La Carlota, Negros Occidental","9079856863","30","Epoetin Alpha 6,000 ui 2x/week","","","Keir Velez","Self","0000-00-00","0","N0002","1","25/02/2018","Feb","2018");
INSERT INTO patientprofile VALUES("04-15-08","Martir Sr.","Edgardo","Cordova","1971-11-22","46","Male","Filipino","Roman Catholic","Married","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","090785684215","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","090785684215","Edgardo Martir Jr.","Dos Hermanas, Talisay City, Negros Occidental","091285246841","42","Epoetin Alpha 6,000 ui 2x/week","","","Edgardo Martir Jr.","Child","2013-07-05","0","N0002","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("04-17-26","Plaza","Christan","Dela Pena","1975-08-27","42","Male","Filipino","Roman Catholic","Married","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09078685692","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09078685692","Suzette Plaza","Brgy. Concepcion, Talisay City, Negros Occidental","09186953613","40","Epoetin Beta (Recormon) 5,000 ui 2x/week","","","Christan Plaza","Self","2016-02-18","0","N00012","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("05-19-21","Lagdamen","Vira","Resonable","1968-04-04","49","Male","Filipino","Roman Catholic","Married","La Carlota City, Negros Occidental","09852685106","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09074507590","JP Dolocanog","Brgy. Concepcion, Talisay City, Negros Occidental","09198446769","47","Eposino 4,000 iu alternate (once & twice a week)","","1136-6986-6532","JP Dolocanog","Spouse","2015-12-06","0","N0001","1","2018-02-25","JAN","2018");
INSERT INTO patientprofile VALUES("05-29-07","Cordova","Ronnie Sr.","Dusaran","1959-08-22","58","Male","Filipino","Roman Catholic","Married","HDA. Dacudao, Brgy. Guimbala-on, Silay City, Negros Occidental","09216844881","HDA. Dacudao, Brgy. Guimbala-on, Silay City, Negros Occidental","09216844881","Ronely Gerota","Panaogao 1, Brgy. 4, Silay City, Negros Occidental","09074632447","37","Epoetin Alpha 4,000 ui 2x/week","ESRD Secondary to , Diabetic Nephropathy","4000-6000-3707","Ma. Nelly Cordova","","1997-09-07","0","N00011","1","","Feb","2018");
INSERT INTO patientprofile VALUES("06-08-23","Ignacio","Rafael","Mayang","1955-10-24","61","Male","Filipino","MCG I","Married","Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental","09094652572","Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental","09466773230","Francisca Ignacio","Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental","09092673505","61","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Diabetic Nephropathy","0802-5420-0615","Josephine Ignacio","Wife","2017-03-17","0","N0001","1","","Dec","2017");
INSERT INTO patientprofile VALUES("06-15-11","Pallarco","Miles","Vista","1975-06-25","42","Male","Filipino","Roman Catholic","Divorced","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09236367547","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09236367547","Marlyn Tulia","Brgy. Concepcion, Talisay City, Negros Occidental","0918662686","40","Epoetin Alpha 6,000 ui 2x/week","","","Miles Pallarco","Self","2015-12-25","0","N0001","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("06-36-13","Ignacio","Rafael","Mayang","0000-00-00","61","Male","Filipino","MCG I","Married","Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental","9094652572","Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental","9466773230","Francisca Ignacio","Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental","9092673505","61","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Diabetic Nephropathy","0802-5420-0615","Josephine Ignacio","Wife","0000-00-00","0","N0001","1","","Dec","2017");
INSERT INTO patientprofile VALUES("07-18-01","Samiilano","Joshua","Estrella","1942-06-26","75","Male","Filipino","Roman Catholic","Widowed","Blk 5, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","09073585215","Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","09073585215","Hannah Samillano","Blk 5, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","09076284521","73","Epoetin Alpha 4,000 ui 2x/week","","1112-2568-8565","Hannah Samillano","Child","2015-10-06","0","N0003","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("07-36-23","Labarejos","Matt","Cacana","1965-11-11","52","Male","Filipino","Roman Catholic","Single","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09168430493","Brgy. Cabatangan, Talisay City, Negros Occidental","09236367547","Alex Entera","Dos Hermanas, Talisay City, Negros Occidental","0918662686","50","Epoetin Alpha 4,000 ui 2x/week","","1120-0762-8091","Matt Labarejos","Sibling","2015-12-31","0","N0001","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("08-19-35","Licanel","Franz","Panganiban","1945-02-15","73","Male","Filipino","Catholic","Single","Bago City, Philippines","09645464604","Bago city, Philppines","09898454552"," Miriam Panganiban","Brgy. Concepcion, Talisay City, Negros Occidental","0918662686","70","Epoetin Alpha 6,000 ui 2x/week","","1120-0762-8091","Edgardo Martir Jr.","Cousin","2014-10-30","0","N00012","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("09-18-46","Juarez","Kathyryne","Muyco","1989-08-09","28","Female","Filipino","Roman Catholic","Single","Bago City, Negros Occidental","09098685462","Bago City, Negros Occidental","09098685462","Kent Juarez","Bago City, Negros Occidental","09089652863","28","Epoetin Alpha 6,000 ui 2x/week","","1117-5342-4950","Kent Juarez","Sibling","2017-12-20","0","N00010","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("09-21-35","Lacson","John Mark","Legaspi","1965-05-25","52","Male","Filipino","Born Again Christian","Married","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09075226835","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09075226835","Alexander Legaspi","Brgy. 3, EB Magalona, Silay City, Negros Occidental","09218689521","47","Epoetin Alpha 4,000 ui 2x/week","","","John Mark Lacson","Self","2013-10-09","0","N00012","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("10-12-56","Torres","Mark","Jandog","1956-07-20","61","Male","Filipino","Roman Catholic","Married","Dumaguete City, Negros Occidental","09071685426","Dumaguete City, Negros Occidental","09168430493","James Diaz","Dumaguete City, Negros Occidental","09198446769","57","Epoetin Alpha 6,000 ui 2x/week","","","James Diaz","Cousin","2013-08-16","0","N00011","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("10-25-17","Macabangon","John Kenneth","Chua","1945-06-13","72","Male","Filipino","Born Again Christian","Married","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09236367547","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09168430493","Kenny Macabangon","Bacolod City, Negros Occidental","09078953622","67","Epoetin Alpha 4,000 ui 2x/week","","","John Kenneth Macabayan","Self","2012-04-29","0","N00010","0","2018-03-01","Mar","2018");
INSERT INTO patientprofile VALUES("10-35-56","Torres","Mark","Jandog","0000-00-00","61","Male","Filipino","Roman Catholic","Married","Dumaguete City, Negros Occidental","9071685426","Dumaguete City, Negros Occidental","9168430493","James Diaz","Dumaguete City, Negros Occidental","9198446769","57","Epoetin Alpha 6,000 ui 2x/week","","","James Diaz","Cousin","0000-00-00","0","N00011","1","25/02/2018","Feb","2018");
INSERT INTO patientprofile VALUES("11-07-17","Abella","Dancel","Yu","1975-02-01","43","Male","Filipino","Roman Catholic","Single","Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","09168430493","Brgy. Cabatangan, Talisay City, Negros Occidental","","Maine Yu","Brgy. Concepcion, Talisay City, Negros Occidental","09078953622","41","Epoetin Alpha 4,000 ui 2x/week","","","Dancel Abella","Self","2015-12-31","0","N00011","0","2018-03-01","Mar","2018");
INSERT INTO patientprofile VALUES("11-26-17","Geduriagao","Decebel","Valdeviezo","1965-06-11","52","Female","Filipino","Roman Catholic","Married","La Carlota City, Negros Occidental","09168430493","La Carlota City, Negros Occidental","09168430493","Marie Villasis","Bacolod City, Negros Occidental","09079856231","49","Epoetin Alpha 6,000 ui 2x/week","","","Decebel Geduriagao","Self","2014-06-05","0","N00012","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("11-37-17","Abella","Dancel","Yu","0000-00-00","43","Male","Filipino","Roman Catholic","Single","Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","9168430493","Brgy. Cabatangan, Talisay City, Negros Occidental","","Maine Yu","Brgy. Concepcion, Talisay City, Negros Occidental","9078953622","41","Epoetin Alpha 4,000 ui 2x/week","","","Dancel Abella","Self","0000-00-00","0","N00011","0","01/03/2018","Mar","2018");
INSERT INTO patientprofile VALUES("12-12-12","Lad","Merc","A","1997-07-16","20","Male","A","A","Single","A","1","A","1","A","A","1","20","A","","A","A","Guardian","2018-03-01","0","N00011","1","2018-02-28","Feb","2018");
INSERT INTO patientprofile VALUES("12-35-11","Basanes","Jackylyn","Padilla","1945-11-11","72","Female","Filipino","Iglesia ni Cristo","Divorced","Brgy. Cabatangan, Talisay City, Negros Occidental","09183773619","Brgy. Cabatangan, Talisay City, Negros Occidental","09236367547","Kath Padilla","Dos Hermanas, Talisay City, Negros Occidental","0918662686","69","Eposino 4,000 iu alternate (once & twice a week)","","","Kath Padilla","Sibling","2014-06-15","0","N00011","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("13-18-17","Baroy","Edwin","Canindo","1960-07-19","57","Male","Filipino","Roman Catholic","Single","Antilla Subd., Brgy. 4, Silay City, Negros Occidental","495-4496","Antilla Subd., Brgy. 4, Silay City, Negros Occidental","495-4496","Dolores Baloy","Antilla Subd., Brgy. 4, Silay City, Negros Occidental","495-4496","52","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Hypertensive Neproclerosis","1102-5157-3190","Edwin Baroy","Self","2012-12-27","0","N0009","1","","Dec","2017");
INSERT INTO patientprofile VALUES("13-38-01","Duyo","Cerezille","Abella","1970-05-15","47","Female","Filipino","Roman Catholic","Married","Purok Acasia, Boulevard, Brgy. Mambulac, Silay City, Negros Occidental","495-6126","Purok Acasia, Boulevard, Brgy. Mambulac, Silay City, Negros Occidental","09462542671","Saturnina Duyo","Purok Acasia, Boulevard, Brgy. Mambulac, Silay City, Negros Occidental","714-5757","38","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Chronic Glomerulonephritis","","Cerezille Duyo","Self","2008-08-26","0","N00012","1","","","");
INSERT INTO patientprofile VALUES("13-67-08","Baroquillo","Jeresa","Serato","1970-01-13","47","Female","Filipino","Roman Catholic","Married","Brgy. Cabatangan, Talisay City, Negros Occidental","09183773619","Brgy. Cabatangan, Talisay City, Negros Occidental","09183773619","Marlyn Tulia","Dos Hermanas, Talisay City, Negros Occidental","09198446769","41","Epoetin Alpha 6,000 ui 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis","","Jeresa Baroquillo","Self","2011-08-23","0","N0003","1","","","");
INSERT INTO patientprofile VALUES("14-65-95","Nieles","Glenn","Malayang","1942-06-05","75","Male","Filipino","Roman Catholic","Married","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09128338521","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09168430493","Christine Nieles","Brgy. Concepcion, Talisay City, Negros Occidental","09194474423","73","Eposino 4,000 iu alternate (once & twice a week)","","","Christine Niels","Spouse","2016-02-20","0","N0002","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("15-16-25","Mori","John","Vincent","1985-11-25","32","Male","Filipino","Roman Catholic","Single","La Carlota City, Negros Occidental","09168430493","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09183773619","Merry Lim","Dos Hermanas, Talisay City, Negros Occidental","09505758070","30","Eposino 4,000 iu alternate (once & twice a week)","","","John Mori","Self","2015-11-20","0","N0003","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("15-28-07","Mayo","Paolo","Reyes","1975-06-15","42","Male","Filipino","Roman Catholic","Married","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09168430493","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09236367547","Paulita Mayo","Dos Hermanas, Talisay City, Negros Occidental","0918662686","41","Epoetin Alpha 6,000 ui 2x/week","","1126-2536-5632","Paulita Mayo","Sibling","2016-12-20","0","N00012","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("16-35-17","Puen","Michael","Lim","1986-06-15","31","Male","Filipino","Roman Catholic","Married","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09128338521","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09168430493","Jay R Casiano","Bacolod City, Negros Occidental","0918662686","28","Epoetin Alpha 6,000 ui 2x/week","","1121-2563-5896","Michael Puen","Self","2014-12-12","0","N0002","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("17-46-21","Domingo","Christopher","German","1965-02-15","53","Male","Filipino","Born Again Christian","Married","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09168430493","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09168430493","Lolita Domingo","Bacolod City, Negros Occidental","09505758070","51","Epoetin Alpha 4,000 ui 2x/week","","","Christopher Domingo","Self","2015-06-20","0","N00012","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("18-23-51","Hilado","Maui","Coleongco","1965-06-06","52","Male","Filipino","Born Again Christian","Married","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09168430493","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09183773619","Myra Hilado","Brgy. Concepcion, Talisay City, Negros Occidental","0918662686","51","Epoetin Alpha 4,000 ui 2x/week","","1136-6986-6532","Maui Hilado","Self","2016-06-26","0","N0003","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("18-46-15","Garcia","Von","Realon","1968-08-08","49","Male","Filipino","Born Again Christian","Married","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09236367547","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09183773619","Marie Guanzon","Brgy. Concepcion, Talisay City, Negros Occidental","0918662686","46","Epoetin Alpha 4,000 ui 2x/week","","","Marie Guanzon","Cousin","2015-02-22","0","N00012","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("19-11-36","Ausan","Joemar","Diongson","1946-05-12","71","Male","Filipino","Roman Catholic","Widowed","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09168430493","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09168430493","Macky Ausan","Bacolod City, Negros Occidental","0918662686","70","Epoetin Alpha 6,000 ui 2x/week","","","Macky Ausan","Child","2016-06-12","0","N0002","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("19-45-36","Ausan","Joemar","Diongson","0000-00-00","71","Male","Filipino","Roman Catholic","Widowed","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","9168430493","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","9168430493","Macky Ausan","Bacolod City, Negros Occidental","918662686","70","Epoetin Alpha 6,000 ui 2x/week","","","Macky Ausan","Child","0000-00-00","0","N0002","1","25/02/2018","Feb","2018");
INSERT INTO patientprofile VALUES("20-12-17","Bebit","Venacia","Mejasco","1968-08-05","48","Female","Filipino","Roman Catholic","Divorced","Brgy. Tanza, EB Magalona, Negros Occidental","09129417216","Brgy. Tanza, EB Magalona, Negros Occidental","09129417216","Rose Mae Hulleza","Brgy. Tanza, EB Magalona, Negros Occidental","0912836737","46","Eposino 4,000 iu  twice a week","ESRD SEC TO  CGN AND HPN NEPHROCLEROSIS","1120-2668-7147","Venancia Bebit","Self","2015-06-22","0","N0006","1","","","");
INSERT INTO patientprofile VALUES("20-42-17","Bebit","Venacia","Mejasco","0000-00-00","48","Female","Filipino","Roman Catholic","Divorced","Brgy. Tanza, EB Magalona, Negros Occidental","9129417216","Brgy. Tanza, EB Magalona, Negros Occidental","9129417216","Rose Mae Hulleza","Brgy. Tanza, EB Magalona, Negros Occidental","912836737","46","Eposino 4,000 iu  twice a week","ESRD SEC TO  CGN AND HPN NEPHROCLEROSIS","1120-2668-7147","Venancia Bebit","Self","0000-00-00","0","N0006","1","","","");
INSERT INTO patientprofile VALUES("20-45-17","Perez","Julian","Go","1946-12-18","71","Male","Filipino","Roman Catholic","Married","La Carlota City, Negros Occidental","09128338521","La Carlota City, Negros Occidental","09168430493","Anne Go","Bacolod City, Negros Occidental","09505758070","68","Eposino 4,000 iu alternate (once & twice a week)","","113-5698-5632","Anne Go","Sibling","2015-01-12","0","N0004","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("20-80-17","Pangue","Hubert","Castilla","1946-02-27","67","Male","Filipino","Roman Catholic","Married","Gov. Alfelon, Poblacion 2, Sagay City","09213310502","Gov. Alfelon, Poblacion 2, Sagay City","09213310502","Anita Zante","Patricia Homes Subd., Sta. Fe, Bacolod City","7098028","69","Eposino 4000 iu (Tuesday); Eposino 6,000 iu (frida","ESRD 2 degree to HPN Nephrosclerosis","111751916309","Eleanor Pangue","Wife","2015-02-01","0","N0009","1","","","");
INSERT INTO patientprofile VALUES("21-26-17","Arboleda","Ma. Theresa","Aldea","1960-01-12","57","Female","Filipino","Roman Catholic","Married","Villa Barbas 2, Cadiz City, Negros Occidental","493-0719","Villa Barbas 2, Cadiz City, Negros Occidental","09326160944","Joresa Arboleda","Villa Barbas 2, Cadiz City, Negros Occidental","09232225140","54","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis","1100-0070-7430","Ma. Theresa Arboleda","Self","2014-03-19","0","N00012","1","","","");
INSERT INTO patientprofile VALUES("21-29-18","Casiano","Jay","Relo","1956-12-26","61","Male","Filipino","Roman Catholic","Single","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09183773619","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","","Precious Casiano","Bacolod City, Negros Occidental","0918662686","47","Eposino 4,000 iu alternate (once & twice a week)","","","Jay Casiano","Self","2003-11-14","0","N0001","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("22-25-20","Guanzon","Khay","Gasendo","1949-03-22","68","Male","Filipino","Roman Catholic","Married","Bago City, Negros Occidental","09168430493","Bago City, Negros Occidental","09074507590","Clarisse Gasendo","Bacolod City, Negros Occidental","09194474423","67","Epoetin Beta (Recormon) 5,000 ui 2x/week","","","Khay Guanzon","Self","2016-11-14","0","N00012","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("22-34-76","Stark","Tony","G.","1986-03-27","31","Male","American","Roman Catholic","Single","Stark Tower, NYC","+639254884699","#47 P. Hernaez St.","+639254884699","Menard Gardose","#47 P. Hernaez St.","+63 (219) 304-82-0","30","LMWH 2500 iu","","","Menard Gardose","Cousin","2016-03-24","0","N00012","1","2018-03-02","Mar","2018");
INSERT INTO patientprofile VALUES("23-22-02","Medel","Rebecca","Delgado","1956-11-01","61","Female","Filipino","Roman Catholic","Married","HDA. Guadalupe, Brgy. Salvacion, Murcia, Negros Occidental","09292538764","HDA. Guadalupe, Brgy. Salvacion, Murcia, Negros Occidental","09292538764","Archie Marcial","Gardenville Subdivision, Bacolod City, Negros Occidental","09128559773","53","Epoetin Alpha (Eposino) 6,000 ui 2x/week","End Stage Renal Disease Secondary to Diabetic Nephropathy","1120-1295-5017","Rolando Medel","Husband","2017-01-02","0","N00010","1","","","");
INSERT INTO patientprofile VALUES("24-06-46","Lacson","Kimberly","Bocablo","1966-05-12","51","Female","Filipino","Roman Catholic","Married","Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","09434297658","Brgy. Cabatangan, Talisay City, Negros Occidental","","Hazel Bocablo","Buenavista Subd., Phase IV, Brgy.Guinhalaran, Silay City, Negros Occidental","09505758070","49","Epoetin Alpha 6,000 ui 2x/week","","","Kimberly Lacson","Self","2015-05-12","0","N0001","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("24-19-46","Hinojales","Joseph","Majometano","1976-12-12","41","Male","Filipino","Roman Catholic","Married","Bacolod City, Negros Occidental","09078956362","Bacolod City, Negros Occidental","09078956362","Shanelle Hinojales","Bacolod City, Negros Occidental","09079562631","39","Eposino 4,000 iu alternate (once & twice a week)","","1121-2658-5639","Joseph Hinojales","Self","2016-02-10","0","N00012","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("24-35-46","Lacson","Kimberly","Bocablo","0000-00-00","51","Female","Filipino","Roman Catholic","Married","Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","9434297658","Brgy. Cabatangan, Talisay City, Negros Occidental","","Hazel Bocablo","Buenavista Subd., Phase IV, Brgy.Guinhalaran, Silay City, Negros Occidental","9505758070","49","Epoetin Alpha 6,000 ui 2x/week","","","Kimberly Lacson","Self","0000-00-00","0","N0001","1","25/02/2018","Feb","2018");
INSERT INTO patientprofile VALUES("25-84-10","Nolido","Mario Jr","Jentelizo","1985-11-29","32","Male","Filipino","Born Again Christian","Married","St. Francis De Asissi, Brgy. Lantad, Silay City, Negros Occidetal","09468572829","St. Francis De Asissi, Brgy. Lantad, Silay City, Negros Occidetal","09468572830","Dolores Baroy","Antilla Subd., Brgy. 4, Silay City, Negros Occidetal","495-4496","25","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to  Chronic Glomerulonephritis","","Mario Nolido Jr.","Self","2001-10-17","0","N00010","1","","","");
INSERT INTO patientprofile VALUES("30-11-10","Amonin","Elyza","Pearl","1945-02-15","73","Female","Filipino","Born Again Christian","Divorced","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09123769375","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09123769375","Pearlyn Amonin","Buenavista Subd., Phase IV, Brgy.Guinhalaran, Silay City, Negros Occidental","09194474423","69","Epoetin Alfa (Eposino) 6,000 ui 2x/week","","","Pearl Amonin","Self","2013-12-20","0","N00012","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("30-21-10","Amonin","Elyza","Pearl","0000-00-00","73","Female","Filipino","Born Again Christian","Divorced","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","9123769375","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","9123769375","Pearlyn Amonin","Buenavista Subd., Phase IV, Brgy.Guinhalaran, Silay City, Negros Occidental","9194474423","69","Epoetin Alfa (Eposino) 6,000 ui 2x/week","","","Pearl Amonin","Self","0000-00-00","0","N00012","1","25/02/2018","Feb","2018");
INSERT INTO patientprofile VALUES("31-24-32","Lanada","Fremrose","Gallego","1982-10-05","34","Female","Filipino","Roman Catholic","Single","New Site, Brgy. E Lopez, Silay City, Negros Occidental","09122408667","New Site, Brgy. E Lopez, Silay City, Negros Occidental","09122408667","Ma. Theresa Lanada","New Site, Brgy. E Lopez, Silay City, Negros Occidental","09752975653","33","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Chronic Glomerulonephritis","0202-6170-8907","Fremrose Lanasa","Self","2016-03-29","0","N0007","1","","","");
INSERT INTO patientprofile VALUES("33-36-10","Diaz","Kim","Jalandoni","1965-08-11","52","Male","Filipino","Roman Catholic","Married","Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","09168430493","La Carlota City, Negros Occidental","09074507590","Lovely Diaz","Brgy. Concepcion, Talisay City, Negros Occidental","09076328521","51","Epoetin Beta (Recormon) 5,000 ui 2x/week","","1123-5636-5697","Kim Diaz","Self","2016-09-18","0","N0006","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("33-42-13","Araneta","Arnold","Lacson","1965-04-09","52","Male","Filipino","Roman Catholic","Married","Lopez Jaena St., Brgy. 5, Silay City, Negros Occidental","714-5557","Lopez Jaena St., Brgy. 5, Silay City, Negros Occidental","09093670837","Allen Parrocho","Carmela Valley Subd., Talisay City, Negros Occidental","702-2017","50","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Diabetic Nephropathy","1100-0098-8928","Jennifer Araneta","Wife","2015-08-11","0","N00011","1","","","");
INSERT INTO patientprofile VALUES("36-39-15","Balayo","Dianne","Garcia","1946-03-14","71","Female","Filipino","Roman Catholic","Single","Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","09128338521","Brgy. Cabatangan, Talisay City, Negros Occidental","","Emily Mabaquiao","Buenavista Subd., Phase IV, Brgy.Guinhalaran, Silay City, Negros Occidental","09194474423","67","Epoetin Alpha 6,000 ui 2x/week","","","Emily Mabaquiao","Sibling","2013-03-20","0","N0003","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("37-67-12","Ditchella","Dionisio","Constantino","1949-10-03","68","Male","Fiilipino","Roman Catholic","Married","Yap Quina St., Brgy.4, Victorias City, Negros Occidental","09152910941","Yap Quina St., Brgy.4, Victorias City, Negros Occidental","09152910941","Marilyn Ditchella","Osmena Avenue, Brgy.5, Victorias, Negros Occidental","09152910941","63","Epoetin Alpha 4,000 iu 2x/week","End Stage Renal Disease Secondary to Diabetic Nephropathy","","Teresita Ditchella","Wife","2013-04-23","0","N0005","1","","","");
INSERT INTO patientprofile VALUES("40-24-17","Roa","Corazon","Dionio","1937-09-06","80","Female","Filipino","Roman Catholic","Widowed","361 Quezon Street, Brgy. 5, Victorias City, Negros Occidental","09194040465","361 Quezon Street, Brgy. 5, Victorias City, Negros Occidental","09194040465","Sheila Seballos","Purok 1B, Da-an Banwa, Brgy.9, Victorias City, Negros Occidental","399-2719","76","Epoetin Alfa 4,000 IU 2x/week","ESRD SECONDARY TO HYPERTENSIVE NEPHROSCLEROSIS","1117-5245-5909","Sheila Seballos","Daughter","2013-09-21","0","N0004","1","","","");
INSERT INTO patientprofile VALUES("40-78-21","Mahilum","Edbert","Jamora","1971-12-29","45","Male","Filipino","Roman Catholic","Married","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09128338521","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09074507590","Eduardo Mahilum Jr.","Buenavista Subd., Phase IV, Brgy.Guinhalaran, Silay City, Negros Occidental","0918662686","36","Epoetin Alfa (Eposino) 6,000 ui 2x/week","ESRD SEC.TO CGN; S/P KT W/ CHRONIC REJECTION (2008)","1102-5121-3933","Almira Mahilum","Wife","2007-05-01","0","N0003","1","","","");
INSERT INTO patientprofile VALUES("40-89-11","De Asis","Myrna","Abancio","1944-08-10","73","Female","Filipino","Roman Catholic","Married","Lopez Subd. Brgy. 16, Victorias City, Negros Occidental","09466127045","Lopez Subd. Brgy. 16, Victorias City, Negros Occidental","09466127045","Maribelle De Asis","Lopez Subd. Brgy. 16, Victorias City, Negros Occidental","09328752532","68","Epoetin Alpha 4,000 iu 2x/week","","","Maribelle De Asis","Sibling","2013-05-08","0","N0008","1","","","");
INSERT INTO patientprofile VALUES("41-10-17","Pegariz","Alex","Surmaco","1975-10-07","42","Female","Filipino","Roman Catholic","Married","Brgy. Cabatangan, Talisay City, Negros Occidental","09236367547","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09434297658","Kurt Pegariz","Brgy. Concepcion, Talisay City, Negros Occidental","0918662686","41","Epoetin Alfa (Eposino) 6,000 ui 2x/week","","","Kurt Pegariz","Sibling","2016-06-24","0","N00011","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("45-18-16","Inquig","Van Calvin","Bincal","1986-10-11","30","Male","Filipino","Roman Catholic","Married","Antilla Subd., Silay City, Negros Occidental ","09488030713","Paglaum Village, Mansilingan, Bacolod City, Negros Occidental","09484052091","Lamberto Inquig","Paglaum Village, Mansilingan, Bacolod City, Negros Occidental","09274675655","28","Epoetin Alpha 4,000 ui ","ESRD Secondary to CGN","1105-0363-0907","Van Calvin Inquig","Patient","2015-02-04","0","N0006","1","","","");
INSERT INTO patientprofile VALUES("45-42-23","Hermano","Herman","Tacda","1974-03-29","43","Male","Filipino","Roman Catholic","Single","Crossing Luguay, Brgy. Balaring, Silay City","09484038866","Crossing Luguay, Brgy. Balaring, Silay City","09072022155","Anabelle Guadalupe","Crossing Luguay, Brgy. Balaring, Silay City","09508915617","43","Epo Alpha 4000 ui","","","Hermano, Herman","Self","2018-01-02","0","N0004","1","","","");
INSERT INTO patientprofile VALUES("45-45-24","Ano","Jemmel","V","1997-11-20","20","Male","Filipino","RC","Divorced","Bacolod City","09129817112","Bacolod City","09129817112","Jems","Bacolod City","09129817112","20","Epoetin Alpha 4,000 ui","ESRD","","Jems","Guardian","2018-01-22","0","N00010","1","","","");
INSERT INTO patientprofile VALUES("46-10-20","Distrito","Jakielyn","Bonavente","1965-06-15","52","Female","Filipino","Born Again Christian","Divorced","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09078963561","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09168430493","Sharmaine Distrito","Brgy. Tanza, EB Magalona, Negros Occidental","09078953622","52","Epoetin Alpha 6,000 ui 2x/week","","1112-2568-8565","Jackielyn Distrito","Self","2017-11-06","0","N0001","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("46-17-40","Espinase","Kim","Delos Santos","1965-12-07","52","Male","Filipino","Roman Catholic","Married","Bacolod City, Negros Occidental","09076853215","Bacolod City, Negros Occidental","09076853215","Sheila Gamgam","Bacolod City, Negros Occidental","0918662686","50","Epoetin Beta (Recormon) 5,000 ui 2x/week","","","Shiela Gamgam","Self","2015-06-19","0","N00010","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("46-20-04","Escalona","Elbert","Leonida","1970-04-16","45","Male","Filipino","Roman Catholic","Married","Antonio Luna Interior Brgy Mambulac, Silay City","099332599656","Antonio Luna Interior Brgy Mambulac, Silay City","09984979689","Elma Superficial","Antonio Luna Interior Brgy Mambulac, Silay City","09297598448","43","Epoetin Alfa (Eposino) 6,000 IO","ESRD 2 degree to Dm Nephropathy","","Elbert Escalona","Self","2014-12-16","0","N0006","1","","","");
INSERT INTO patientprofile VALUES("47-10-18","Benavente","Khalid","Ramos","1965-02-15","53","Male","Filipino","Catholic","Married","Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","09128338521","Bacolod City, Negros Occidental","09074507590","Jerome Palma","Dos Hermanas, Talisay City, Negros Occidental","09078953622","51","Epoetin Alpha 4,000 ui 2x/week","","1117-5342-4950","Khalid Benvente","Self","2015-12-20","0","N0001","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("50-21-17","Sollano","Hana","Cuevas","1942-02-20","76","Female","Filipino","Roman Catholic","Widowed","Bacolod City, Negros Occidental","09852685106","Brgy. 3, EB Magalona, Silay City, Negros Occidental","09078963561","Jam Cueva","Dos Hermanas, Talisay City, Negros Occidental","09505758070","75","Epoetin Alpha 6,000 ui 2x/week","","","Hana Sollano","Self","2016-07-22","0","N0001","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("51-27-19","Beldia","Renchelle","Beldia","1971-05-14","46","Female","Filipino","Roman Catholic","Married","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09852685106","Brgy. 3, EB Magalona, Silay City, Negros Occidental","09236367547","Shane Ambos","Brgy. Concepcion, Talisay City, Negros Occidental","09075698512","44","Epoetin Beta (Recormon) 5,000 ui 2x/week","","1136-6895-5631","Shane Ambos","Sibling","2015-09-18","0","N0001","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("52-04-23","Valle","Restituto","","1955-10-14","62","Male","F","Roman Catholic","Married","Brgy. Tanza, EB Magalona, Silay City, Negros Occidental","09092954332","Brgy. Tanza, EB Magalona, Silay City, Negros Occidental","09092954332","Leilanie V. Lima","Brgy. Tanza, EB Magalona, Silay City, Negros Occidental","09217464044","60","Epoetin Alpha (Eposino) 6,000 ui 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis","1105-0229-0398","","Wife","2015-09-06","0","N00011","1","","","");
INSERT INTO patientprofile VALUES("53-16-35","Velasco","Nikol","Estanol","1941-07-12","76","Female","Filipino","Roman Catholic","Widowed","La Carlota City, Negros Occidental","09123769375","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09852685106","Patricia Ignacio","Brgy. 3, EB Magalona, Silay City, Negros Occidental","09194474423","71","Epoetin Alpha 4,000 ui 2x/week","","","Patricia Ignacio","Child","2012-05-26","0","N00012","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("54-21-36","Lagreo","Loise","Borja","1985-01-26","33","Female","Filipino","Roman Catholic","Married","Brgy. Cabatangan, Talisay City, Negros Occidental","09123769375","Brgy. Cabatangan, Talisay City, Negros Occidental","","Esfe Langreo","Brgy. Tanza, EB Magalona, Negros Occidental","09198446769","32","Epoetin Beta (Recormon) 5,000 ui 2x/week","","","Esfe Langreo","Self","2016-09-19","0","N00011","0","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("55-14-06","Mabacquiao","Lilibeth","Vega","1967-04-18","50","Female","Filipino","Roman Catholic","Married","HDA. Bagacay, Brgy. Bagtic, Silay City, Negros Occidental","495-2761","HDA. Bagacay, Brgy. Bagtic, Silay City, Negros Occidental","0912533652","Judie Vega","St. Francis Subd., Silay City, Negros Occidental","0912533652","44","Epoetin Alpha (Eposino) 6,000 ui 2x/week","End Stage Renal Disease Secondary to Chronic Glomerulonephritis; Anemia  Secondary to CKD","1105-0228-7353-9","Lilibeth Mabacquiao","Self","2011-09-29","0","N0004","1","","","");
INSERT INTO patientprofile VALUES("57-01-15","Ambos","Diane Claire","Pablon","1963-10-20","54","Female","Filipino","Roman Catholic","Married","Brgy. 3, EB Magalona, Silay City, Negros Occidental","09168430493","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","09236367547","Shane Ambos","Brgy. Tanza, EB Magalona, Negros Occidental","09198446769","52","Epoetin Alpha 4,000 ui 2x/week","","","Shane Ambos","Sibling","2015-12-15","0","N0007","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("58-67-08","Jimena","Josue","Abian","1949-03-10","68","Male","Filipino","Roman Catholic","Married","Tuburan Takas, Brgy. Tuburan, E.B Magalona, Negros Occidental","09214153247","Tuburan Takas, Brgy. Tuburan, E.B Magalona, Negros Occidental","09214153247","Jobosan Villaflor","Sagay City, Negros Occidental","09391217423","61","Epoetin Alpha(Renogen) 6,000 iu 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis","","Josue Jimena","Self","2010-06-07","0","N0008","1","","","");
INSERT INTO patientprofile VALUES("61-39-06","Gonzales","Lerma","Agbay","1963-08-28","54","Female","Filipino","Roman Catholic","Married","HDA. Makina, Brgy. Rizal, Silay City, Negros Occidental","09997739530","HDA. Makina, Brgy. Rizal, Silay City, Negros Occidental","09997739530","Mary Ann Ubay","HDA. Makina, Brgy. Rizal, Silay City, Negros Occidental","09997739530","53","Epoetin Alpha 4,000 iu 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis","","Lerma Gonzales","Self","2016-09-24","0","N0001","1","","","");
INSERT INTO patientprofile VALUES("62-17-06","Lanaza","Marie","Gall","0000-00-00","34","Female","Filipino","Roman Catholic","Single","New Site, Brgy. E Lopez, Silay City, Negros Occidental","9122408667","New Site, Brgy. E Lopez, Silay City, Negros Occidental","9122408667","Ma. Theresa Lanada","New Site, Brgy. E Lopez, Silay City, Negros Occidental","9752975653","33","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Chronic Glomerulonephritis","0202-6170-8907","Fremrose Lanasa","Self","0000-00-00","0","N0007","1","","","");
INSERT INTO patientprofile VALUES("63-01-17","Jaranilla","Gwehn","Flora","1975-12-15","42","Female","Filipino","Roman Catholic","Married","Bacolod City, Negros Occidental","09123769375","La Carlota City, Negros Occidental","09168430493","Joey Flora","Dos Hermanas, Talisay City, Negros Occidental","09198446769","42","Epoetin Alpha 4,000 ui 2x/week","","","Gwehn Jaranilla","Self","2017-07-07","0","N00010","1","2018-02-25","Feb","2018");
INSERT INTO patientprofile VALUES("65-10-03","Marayan","Brenda","Magbanua","1967-10-08","50","Female","Filipino","Roman Catholic","Single","Brgy. Tanza, EB Magalona, Negros Occidental","09123769375","Brgy. Tanza, EB Magalona, Negros Occidental","09123769375","Myra Davo","Brgy. Tanza, EB Magalona, Negros Occidental","09505758070","48","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Diabetic Nephropathy","","Brenda Marayan","Self","2015-03-05","0","N0004","0","","","");
INSERT INTO patientprofile VALUES("71-26-19","Sartorio","Diane","Robles","0000-00-00","72","Female","Filipino","Born Again Christian","Widowed","La Carlota City, Negros Occidental","9128338521","Bacolod City, Negros Occidental","9078963561","Nam Thai","Brgy. 3, EB Magalona, Silay City, Negros Occidental","9078953622","68","Eposino 4,000 iu alternate (once & twice a week)","","","Diane Sartorio","Self","0000-00-00","0","N0005","1","25/02/2018","Feb","2018");
INSERT INTO patientprofile VALUES("73-23-13","Aguinaldo","Raymart","Vergara","0000-00-00","72","Male","Filipino","Roman Catholic","Married","La Carlota City, Negros Occidental","9078963561","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","","John Aguinaldo","Bacolod City, Negros Occidental","9194474423","65","Epoetin Alpha 4,000 ui 2x/week","","","John Aguinaldo","Child","0000-00-00","0","N0002","1","25/02/2018","Feb","2018");
INSERT INTO patientprofile VALUES("76-25-36","Caporas","Armando","Genova","0000-00-00","52","Female","Filipino","Roman Catholic","Married","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","9168430493","Brgy. 3, EB Magalona, Silay City, Negros Occidental","9078963561","Romenick Diaz","Brgy. Concepcion, Talisay City, Negros Occidental","9198446769","51","Epoetin Alfa (Eposino) 6,000 ui 2x/week","","","Edgardo Martir Jr.","Self","0000-00-00","0","N00010","0","25/02/2018","Feb","2018");
INSERT INTO patientprofile VALUES("77-10-06","Piansay","Emmanuel","Abello","0000-00-00","55","Male","Filipino","Born Again Christian","Married","La Carlota City, Negros Occidental","9078963561","Prk. Gumamela, Brgy. Zone 14B, Talisay City, Negros Occidental","9078963561","Ryan Medrano","Brgy. Tanza, EB Magalona, Negros Occidental","9198446769","53","Epoetin Alpha 6,000 ui 2x/week","","1120-0762-8091","Ryan Medrano","Self","0000-00-00","0","N00010","0","25/02/2018","Feb","2018");
INSERT INTO patientprofile VALUES("79-86-17","Borromeo","Paolo","Arcillas","0000-00-00","52","Male","Filipino","Born Again Christian","Married","Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","9128338521","Bacolod City, Negros Occidental","9236367547","Hannah Samillano","Brgy. 3, EB Magalona, Silay City, Negros Occidental","918662686","51","Epoetin Alpha 6,000 ui 2x/week","","","Edgardo Martir Jr.","Cousin","0000-00-00","0","N0001","1","25/02/2018","Feb","2018");
INSERT INTO patientprofile VALUES("80-67-10","Liven","Allan","Gutierrez","1971-11-11","46","Male","Filipino","Roman Catholic","Single","HDA. Necoton Brgy 13, Victorias City, Negros Occidental","09278852865","HDA. Necoton Brgy 13, Victorias City, Negros Occidental","09100317020","Lucily Gutierrez","HDA. Necoton Brgy 13, Victorias City, Negros Occidental","09278852865","45","Epoetin Alfa(Eposino) 4000 units","CKD 2 degree to Hypertensive Nephrosclerosis","","Lucily Gutierrez","Guardian","2017-08-01","0","N0007","0","","","");
INSERT INTO patientprofile VALUES("83-49-22","Hibionada","Ma. Carel","Dionio","1963-03-17","53","Female","Filipino","Roman Catholic","Married","Yap Quina Subd. Brgy.3, Victorias City, Negros Occidental","09226597988","Yap Quina Subd. Brgy.3, Victorias City, Negros Occidental","09226597988","Cyril Gustillo","Cantown Subd., Victorias City, Negros Occidental","09328657897","52","Eposino 4,000 iu alternate (once & twice a week)","ESRD Secondary to Hypertensive Nephrosclerosis","1150-0145-4893","Ma. Carel Hibionada","Self","2016-02-20","0","N00011","0","","","");
INSERT INTO patientprofile VALUES("84-63-02","Pedrajas","Lolita","Patrimonio","1939-02-19","78","Female","Filipino","Roman Catholic","Widowed","#52 Francisco Maravilla St., Brgy. 3, EB Magalona, Negros Occidental","09125896891","Antonio Luna St., Silay City, Negros Occidental","09125896891","Daisy Pedrajas","#52 Francisco Maravilla St., Brgy. 3, EB Magalona, Negros Occidental","09125896891","73","Epoetin Alpha (Eposino) 4,000 iu 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephroclerosis","","Daisy Pedrojas","Daughter","2013-02-10","0","N0003","0","","","");
INSERT INTO patientprofile VALUES("86-11-12","Toriano","Josette","Ballesteros","1971-10-14","44","Female","Filipino","Roman Catholic","Single","Blk. 11 Lot 4, Manmar Subd. Brgy Zone 15, Talisay City, Negros Occidental","09232381390","Blk. 11 Lot 4, Manmar Subd. Brgy Zone 15, Talisay City, Negros Occidental","09258746582","Gil Demis Toriano","Blk. 11 Lot 4, Manmar Subd. Brgy Zone 15, Talisay City, Negros Occidental","0923747400","40","Eposino 6,000 iu once a week","CKD Secondary to Hypertensive Nephrosclerosis","","Josette Toriano","Self","2013-02-27","0","N0003","0","","","");
INSERT INTO patientprofile VALUES("86-89-17","Bacaron","Genelyn","Amante","1979-09-25","36","Female","Filipino","Baptist","Single","HDA. Juliana Washington, Escalante City, Negros Occidental","09282278493","HDA. Juliana Washington, Escalante City, Negros Occidental","09303286809","Judith Amante","Quezon St. Victorias City, Negros Occidental","09185985952","31","Renogen 4,000 iu"," ESRD Secondary to Diabetic Nephropathy and Hypertensive Nephrosclorosis","","Genelyn Bacaron","Self","2011-01-05","0","N00010","1","","","");
INSERT INTO patientprofile VALUES("89-93-08","Deliva","Hazel Mae","Abancio","1980-02-07","37","Female","Filipino","Roman Catholic","Single","#359 Auxilladora St., Canetown Subd., Victorias City, Negros Occidental","09463696469","#359 Auxilladora St., Canetown Subd., Victorias City, Negros Occidental","09463696469","Cheryl Lademora","Brgy. 16, Bacolod City, Negros Occidenral","","31","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Chronic Glomerulonephritis","1100-0099-2372","Ma. Theresa Arboleda","Patient","2011-05-20","0","N00011","0","","","");
INSERT INTO patientprofile VALUES("89-96-01","Catigan","Sheryl","Entera","1978-11-23","38","Female","Filipino","Roman Catholic","Married","Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","09168430493","Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental","09168430493","Alex Entera","Brgy. Concepcion, Talisay City, Negros Occidental","09194474423","31","Renogen 4,000 iu","ESRD Secondary to CGN","","Edita Entera","Guardian","2013-05-13","0","N0005","0","","","");
INSERT INTO patientprofile VALUES("93-91-13","Boteros","Ma. Andrea","Marcasote","1983-11-30","34","Female","Filipino","Roman Catholic","Single","Brgy. 3, EB Magalona, Silay City, Negros Occidental","09236367547","Brgy. 3, EB Magalona, Silay City, Negros Occidental","09236367547","Ma. Donna Ortega","Brgy. 3, EB Magalona, Silay City, Negros Occidental","09198446769","30","Epoetin Beta (Recormon) 5,000 ui 2x/week","End Stage Renal Disease Secondary to Chronic Glomerulonephritis","","Ma. Andrea Boteros","Self","2014-02-17","0","N0007","0","","","");
INSERT INTO patientprofile VALUES("93-94-12","Nitro","Jose Marie","Rivas","1968-09-29","49","Male","Filipino","Roman Catholic","Married","Cinco De Noviembre, Brgy. III, Silay City, Negros Occidental","714-8416","Cinco De Noviembre, Brgy. III, Silay City, Negros Occidental","714-8416","Marivic Golez","Rizal Street, Silay City, Negros Occidental","09226763042","44","Epoetin Beta (Recormon) 5,000 ui 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis","1102-5136-3412","Ma. Soccoro Nitro","Wife","2013-01-28","0","N0009","0","","","");
INSERT INTO patientprofile VALUES("96-34-17","Susmiran","Liezl Corazon","Lavadia","1972-03-24","44","Female","Filipino","Born Again","Married","Purok Ipil-ipil, Brgy. Mambulac, Silay City, Negros Occidental","09079749850","Purok Ipil-ipil, Brgy. Mambulac, Silay City, Negros Occidental","09079749850","Mary Jane Lavadia","Purok Paghidaet, Brgy. Mambulac, Silay City, Negros Occidental","09103794462","43","Epoetin Alfa (Esposino 4000 units)","ESRD 2 degree Hypertensive Nephrosclerosis","","Liezl Susmiran","Self","2015-05-25","0","N0004","0","","","");
INSERT INTO patientprofile VALUES("96-52-17","Acosta","Ireneo Jr.","Chavez","1949-02-23","67","Male","Filipino","Roman Catholic","Married","Brgy. 19 Mallorca, Victorias City, Negros Occidental","09064975176","Brgy. 19 Mallorca, Victorias City, Negros Occidental","09064975176","Elena Marinas","Brgy. 19 Mallorca, Victorias City, Negros Occidental","09064975176","65","Eposino 4,000 iu","ESRD Secondary to DM Nephropathy, Urate Nephropathy","1120-0762-8091","Vilma Acosta","Wife","2014-08-01","0","N0007","0","","","");
INSERT INTO patientprofile VALUES("99-06-03","Villarte Sr.","Edwin","Condada","1954-08-19","63","","Filipino","Roman Catholic","","Sampaguita Village, Brgy. Lantad, Silay City, Negros Occidental","09951334869","Sampaguita Village, Brgy. Lantad, Silay City, Negros Occidental","09951334869","Alma Juarez","Sitio Berano, Brgy. Lantad, Silay City, Negross Occidental","09191623435","58","Epoetin Alpha (Renogen) 4,000 iu 2x/week","ESRD Secondary to Hypertensive Nephrosclerosis","1120-1172-3406","Edwin Villarte Sr.","Self","2012-11-24","0","N0005","0","","","");
INSERT INTO patientprofile VALUES("A","A","A","A","2018-01-21","20","Male","A","A","Single","A","a","A","123","A","A","123","12","123","","Asd","Asd","Guardian","2018-01-21","0","N00010","1","","","");
INSERT INTO patientprofile VALUES("AAA-AAA","Bayon-on","Alson","J","1990-03-08","27","Male","Filipino","Catholic","Single","Bacolod","0912345678","Bacolod ","0912345678","Alex","Bacolod","09123456789","27","Epoetin Alpha 4000iu","ESRD Secondary to , Diabetic Nephropathy","","Alex","Sibling","2018-02-28","0","N0001","1","2018-02-28","Feb","2018");
INSERT INTO patientprofile VALUES("Abc","Abc","Abc","Abc","1998-02-22","20","Male","F","F","Single","F","12313","F","12313","F","Asdasdad","123123123","20","Asdasdas","","3","Asdasd","Sibling","2018-02-13","0","N0001","1","2018-02-24","","");
INSERT INTO patientprofile VALUES("B","B","B","B","2018-01-21","2","Male","B","B","Married","B","123","B","123","B","B","123","2","Ds","Asd","123","123","Guardian","2018-01-22","0","N00011","0","","","");
INSERT INTO patientprofile VALUES("C","C","C","C","2018-01-21","2","Male","B","B","Married","B","123","B","123","B","B","123","12","Asd","Asd","Asd","Asd","Parent","2018-01-17","0","N00010","0","","","");
INSERT INTO patientprofile VALUES("Q","Q","Q","Q","2018-02-06","0","Female","Q","Q","Single","Q","2","Q","2","Q","Q","2","0","Q","","Q","Q","Guardian","2018-01-10","0","N00011","1","2018-02-25","Feb","2018");





CREATE TABLE `patientschedule` (
  `schedule_id` int(5) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(30) NOT NULL,
  `treatment_day` varchar(10) NOT NULL,
  `treatment_time` varchar(10) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

INSERT INTO patientschedule VALUES("11","13-18-17","Monday","morning");
INSERT INTO patientschedule VALUES("12","86-89-17","Monday","morning");
INSERT INTO patientschedule VALUES("13","40-89-11","Monday","morning");
INSERT INTO patientschedule VALUES("14","86-11-12","Monday","morning");
INSERT INTO patientschedule VALUES("15","93-94-12","Monday","afternoon");
INSERT INTO patientschedule VALUES("16","05-29-07","Monday","afternoon");
INSERT INTO patientschedule VALUES("17","40-78-21","Monday","morning");
INSERT INTO patientschedule VALUES("18","01-26-22","Tuesday","morning");
INSERT INTO patientschedule VALUES("19","45-45-24","Monday","morning");
INSERT INTO patientschedule VALUES("21","45-42-23","Wednesday","morning");
INSERT INTO patientschedule VALUES("22","33-42-13","Wednesday","morning");
INSERT INTO patientschedule VALUES("23","25-84-10","Monday","afternoon");
INSERT INTO patientschedule VALUES("24","45-18-16","Tuesday","morning");
INSERT INTO patientschedule VALUES("25","06-08-23","Tuesday","morning");
INSERT INTO patientschedule VALUES("26","13-38-01","Tuesday","afternoon");
INSERT INTO patientschedule VALUES("27","31-24-32","Tuesday","afternoon");
INSERT INTO patientschedule VALUES("28","20-12-17","Tuesday","afternoon");
INSERT INTO patientschedule VALUES("29","21-26-17","Wednesday","morning");
INSERT INTO patientschedule VALUES("30","52-04-23","Wednesday","morning");
INSERT INTO patientschedule VALUES("31","13-67-08","Wednesday","morning");
INSERT INTO patientschedule VALUES("32","58-67-08","Thursday","morning");
INSERT INTO patientschedule VALUES("33","37-67-12","Thursday","morning");
INSERT INTO patientschedule VALUES("34","61-39-06","Thursday","morning");
INSERT INTO patientschedule VALUES("35","46-20-04","Thursday","morning");
INSERT INTO patientschedule VALUES("36","23-22-02","Friday","morning");
INSERT INTO patientschedule VALUES("37","12-12-12","Wednesday","afternoon");
INSERT INTO patientschedule VALUES("38","AAA-AAA","Wednesday","morning");
INSERT INTO patientschedule VALUES("39","02-07-15","Monday","morning");
INSERT INTO patientschedule VALUES("40","03-01-15","Tuesday","afternoon");
INSERT INTO patientschedule VALUES("41","03-18-20","Wednesday","afternoon");
INSERT INTO patientschedule VALUES("42","04-15-08","Thursday","morning");
INSERT INTO patientschedule VALUES("43","04-17-26","Friday","morning");
INSERT INTO patientschedule VALUES("44","05-19-21","Tuesday","morning");
INSERT INTO patientschedule VALUES("45","06-36-13","Tuesday","afternoon");





CREATE TABLE `pneumococcal_vaccine` (
  `pneumococcal_administeredby` varchar(50) NOT NULL,
  `pneumococcal_datenext` date NOT NULL,
  `pneumococcal_daterecieved` date NOT NULL,
  `pneumococcal_id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(30) NOT NULL,
  `pneumococcal_year` char(4) NOT NULL,
  PRIMARY KEY (`pneumococcal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO pneumococcal_vaccine VALUES("johnhahaa","2018-02-15","2018-02-21","1","01-26-22","2018");
INSERT INTO pneumococcal_vaccine VALUES("qwer","2018-02-10","2018-02-14","2","01-26-22","");
INSERT INTO pneumococcal_vaccine VALUES("rtys","2018-02-09","2018-02-22","3","01-26-22","");
INSERT INTO pneumococcal_vaccine VALUES("asd","2018-02-03","2018-02-16","4","01-26-22","");
INSERT INTO pneumococcal_vaccine VALUES("gr","2018-02-23","2018-02-24","5","01-26-22","");
INSERT INTO pneumococcal_vaccine VALUES("","0000-00-00","0000-00-00","6","86-89-17","");
INSERT INTO pneumococcal_vaccine VALUES("c/o TLJPH hemodialysis unit","2017-03-22","2017-08-22","7","33-42-13","");
INSERT INTO pneumococcal_vaccine VALUES("SA","2018-02-28","2018-02-21","9","12-12-12","2018");
INSERT INTO pneumococcal_vaccine VALUES("","0000-00-00","0000-00-00","10","86-89-17","1970");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2016-02-01","2015-02-10","11","01-15-33","2015");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2017-10-20","2016-10-20","12","01-15-33","2016");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2017-12-20","2016-12-20","13","01-21-19","2016");
INSERT INTO pneumococcal_vaccine VALUES("BOLMH","2016-12-20","2015-12-20","14","01-21-19","2015");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2017-02-14","2016-02-14","15","02-07-15","2016");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2016-06-01","2016-02-15","16","02-07-15","2016");
INSERT INTO pneumococcal_vaccine VALUES("BOLMH","2016-02-15","2015-02-15","17","03-01-15","2015");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2017-02-11","2017-02-11","18","04-17-26","2017");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2018-10-10","2017-10-10","19","04-15-08","2017");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2016-07-26","2015-05-18","20","09-18-46","2015");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2015-11-26","2014-10-20","21","09-21-35","2014");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2017-10-29","2016-11-25","22","08-19-35","2016");
INSERT INTO pneumococcal_vaccine VALUES("BOLMH","2015-10-29","2015-10-23","23","03-18-20","2015");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2017-10-30","2016-10-27","24","03-25-11","2016");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2017-11-29","2016-10-29","25","05-19-21","2016");
INSERT INTO pneumococcal_vaccine VALUES("BOLMH","2017-11-29","2015-10-28","26","05-29-07","2015");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2017-10-30","2016-10-28","27","06-08-23","2016");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2015-10-29","2014-09-28","28","06-36-13","2014");
INSERT INTO pneumococcal_vaccine VALUES("BOLMH","2017-10-30","2016-10-29","29","07-18-01","2016");
INSERT INTO pneumococcal_vaccine VALUES("BOLMH","2017-09-29","2016-10-27","30","10-12-56","2016");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2016-10-28","2015-10-26","31","10-25-17","2015");
INSERT INTO pneumococcal_vaccine VALUES("BOLMH","2017-10-29","2016-10-27","32","10-25-17","2016");
INSERT INTO pneumococcal_vaccine VALUES("BOLMH","2016-09-29","2015-09-27","33","10-35-56","2015");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2016-09-29","2015-09-28","34","11-07-17","2015");
INSERT INTO pneumococcal_vaccine VALUES("BOLMH","2017-10-29","2016-09-27","35","11-26-17","2016");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2017-10-29","2016-09-29","36","11-37-17","2016");
INSERT INTO pneumococcal_vaccine VALUES("Brgy. Tanza Health Center","2016-10-29","2016-10-28","37","11-37-17","2016");
INSERT INTO pneumococcal_vaccine VALUES("BOLMH","2017-10-28","2016-09-28","38","12-35-11","2016");
INSERT INTO pneumococcal_vaccine VALUES("Alson","2018-04-21","2018-03-02","39","22-34-76","2018");





CREATE TABLE `problemlist` (
  `problem` varchar(50) NOT NULL,
  `datenoted` date NOT NULL,
  `dateresolved` date NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `problemlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `problemlist_monthyear` char(20) NOT NULL,
  PRIMARY KEY (`problemlist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

INSERT INTO problemlist VALUES("sadsad","2018-01-28","2018-01-28","86-89-17","9","");
INSERT INTO problemlist VALUES("asda","2018-02-22","2018-02-07","01-26-22","10","");
INSERT INTO problemlist VALUES("gh","2018-02-14","2018-02-14","01-26-22","11","");
INSERT INTO problemlist VALUES("haha","2018-02-10","2018-02-17","01-26-22","12","2018, February");
INSERT INTO problemlist VALUES("sample","2018-01-19","2018-02-16","01-26-22","13","2018, January");
INSERT INTO problemlist VALUES("asd","2018-02-13","2018-02-13","01-26-22","14","2018, February");
INSERT INTO problemlist VALUES("Fever","2018-02-12","2018-02-12","05-29-07","15","2018, February");
INSERT INTO problemlist VALUES("here","2018-02-06","2018-02-14","01-26-22","17","2018, February");
INSERT INTO problemlist VALUES("test1","2018-02-21","2018-02-28","12-12-12","18","2018, February");
INSERT INTO problemlist VALUES("test2","2018-02-28","2018-02-28","12-12-12","19","2018, February");
INSERT INTO problemlist VALUES("pneumonia","2018-02-21","2018-02-28","86-89-17","20","2018, February");
INSERT INTO problemlist VALUES("sepsis","2018-02-07","2018-02-08","86-89-17","21","2018, February");
INSERT INTO problemlist VALUES("SAMPLE","2018-03-15","2018-03-24","01-26-22","22","2018, March");
INSERT INTO problemlist VALUES("Fever","2015-02-10","2015-02-10","01-15-33","23","2015, February");
INSERT INTO problemlist VALUES("Hypertension","2015-02-20","2015-02-20","01-21-19","24","2015, February");
INSERT INTO problemlist VALUES("Fever","2014-06-20","2014-06-25","02-07-15","25","2014, June");
INSERT INTO problemlist VALUES("Hypertension","2017-02-11","2017-02-11","04-17-26","26","2017, February");
INSERT INTO problemlist VALUES("Hypertension","2015-06-20","0000-00-00","09-18-46","27","2015, June");
INSERT INTO problemlist VALUES("Hypertension","2015-06-20","0000-00-00","09-18-46","28","2015, June");
INSERT INTO problemlist VALUES("Fever","2015-10-24","2015-10-27","08-19-35","29","2015, October");
INSERT INTO problemlist VALUES("Hypertension","2016-10-24","2016-10-29","03-18-20","30","2016, October");
INSERT INTO problemlist VALUES("Leg Injured","2015-10-24","2016-10-31","03-25-11","31","2015, October");
INSERT INTO problemlist VALUES("Leg Injured","2016-09-28","2017-09-29","05-19-21","32","2016, September");
INSERT INTO problemlist VALUES("Leg Injured","2015-10-28","2016-10-29","06-08-23","33","2015, October");
INSERT INTO problemlist VALUES("Fever","2016-10-28","2017-10-29","06-15-11","34","2016, October");
INSERT INTO problemlist VALUES("Hypertension","2016-09-28","2017-10-29","06-36-13","35","2016, September");
INSERT INTO problemlist VALUES("Hypertension","2015-10-28","2016-10-29","07-18-01","36","2015, October");
INSERT INTO problemlist VALUES("Hypertension","2016-09-29","2017-10-29","07-36-23","37","2016, September");
INSERT INTO problemlist VALUES("Hypertension","2015-10-29","2016-10-29","09-21-35","38","2015, October");
INSERT INTO problemlist VALUES("Hypertension","2016-09-28","2017-10-29","10-12-56","39","2016, September");
INSERT INTO problemlist VALUES("Fever","2016-09-28","2016-10-29","10-25-17","40","2016, September");
INSERT INTO problemlist VALUES("Hypertension","2015-10-27","2016-10-28","10-25-17","41","2015, October");
INSERT INTO problemlist VALUES("Fever","2016-10-28","2016-10-29","11-07-17","42","2016, October");
INSERT INTO problemlist VALUES("Hypertension","2017-10-28","2018-11-29","11-07-17","43","2017, October");
INSERT INTO problemlist VALUES("Hypertension","2016-09-27","2017-10-29","11-26-17","44","2016, September");
INSERT INTO problemlist VALUES("Fever","2016-09-29","2017-10-29","11-37-17","45","2016, September");
INSERT INTO problemlist VALUES("Hypertension","2016-09-28","2017-10-29","12-35-11","46","2016, September");





CREATE TABLE `treatment` (
  `treatment_id` int(5) NOT NULL AUTO_INCREMENT,
  `treatment_date` date NOT NULL,
  `BFR` varchar(20) NOT NULL,
  `dialyzer_user` varchar(20) NOT NULL,
  `access` varchar(20) NOT NULL,
  `heparin` varchar(20) NOT NULL,
  `machine_num` int(2) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `preweight` varchar(10) NOT NULL,
  `employeeid` varchar(10) NOT NULL,
  `technicianid` varchar(10) NOT NULL,
  `postweight` varchar(10) NOT NULL,
  `treatment_start` varchar(10) NOT NULL,
  `treatment_end` varchar(10) NOT NULL,
  `targetwt` int(5) NOT NULL,
  `dialyzer` char(20) NOT NULL,
  PRIMARY KEY (`treatment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=220 DEFAULT CHARSET=latin1;

INSERT INTO treatment VALUES("1","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","86-89-17 ","44.2","E0003","E0005","55","3:55 AM","3:55 AM","0","");
INSERT INTO treatment VALUES("2","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","86-89-17 ","43.9","E0003","E0003","41","3:55 AM","3:55 AM","0","");
INSERT INTO treatment VALUES("3","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","86-89-17 ","44.3","E0006","E0003","50","3:55 AM","3:55 AM","0","");
INSERT INTO treatment VALUES("4","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","86-89-17 ","44.3","E0003","E0003","45","3:55 AM","3:55 AM","0","");
INSERT INTO treatment VALUES("5","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","86-89-17 ","44.7","E0003","E0003","50","3:55 AM","3:55 AM","0","");
INSERT INTO treatment VALUES("6","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","86-89-17 ","44.1","E0008","E0003","44","3:55 AM","3:55 AM","0","");
INSERT INTO treatment VALUES("7","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","86-89-17 ","44.1","E0003","E0003","50","3:55 AM","3:55 AM","0","");
INSERT INTO treatment VALUES("8","2018-01-29","dasd","dasd","R AVF","dsad","3","01-26-22 ","30","E0001","E0004","31","","","0","");
INSERT INTO treatment VALUES("9","2018-01-29","300","reuse","L AVF","free","4","45-45-24 ","78","E0001","E00010","73","","","0","");
INSERT INTO treatment VALUES("10","2018-02-11","AS","ASD","R AVF","ASD","1","A ","23","E0001","E0001","41","","","0","");
INSERT INTO treatment VALUES("11","2018-02-12","1234","123","L AVF","123","4","86-89-17 ","123","E0001","E0002","123","3:55 AM","3:55 AM","0","");
INSERT INTO treatment VALUES("12","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","33-42-13","44.3","E0006","E0003","","","","0","");
INSERT INTO treatment VALUES("13","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","33-42-13","44.3","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("14","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","33-42-13","44.7","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("15","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","33-42-13","44.1","E0008","E0003","","","","0","");
INSERT INTO treatment VALUES("16","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","33-42-13","44.1","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("17","2018-01-29","300cc/min","2nd reuse","R AVF","free","3","33-42-13","30","E0001","E0004","31","","","0","");
INSERT INTO treatment VALUES("18","2018-01-29","300","reuse","L AVF","free","4","33-42-13","78","E0001","E00010","73","","","0","");
INSERT INTO treatment VALUES("19","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","01-26-22","44.2","E0003","E0005","","","","0","");
INSERT INTO treatment VALUES("20","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","01-26-22","43.9","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("21","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","01-26-22","44.3","E0006","E0003","","","","0","");
INSERT INTO treatment VALUES("22","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","01-26-22","44.3","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("23","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","01-26-22","44.7","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("24","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","01-26-22","44.1","E0008","E0003","","","","0","");
INSERT INTO treatment VALUES("25","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","01-26-22","44.1","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("26","2018-01-29","300cc/min","2nd reuse","R AVF","free","3","01-26-22","30","E0001","E0004","31","","","0","");
INSERT INTO treatment VALUES("27","2018-01-29","300","reuse","L AVF","free","4","01-26-22","78","E0001","E00010","73","","","0","");
INSERT INTO treatment VALUES("28","2018-02-22","1","12","R AVF","12","1","05-29-07 ","12","E0001","E0001","12","8:34 AM","12:10 PM","0","");
INSERT INTO treatment VALUES("29","2017-06-26","300cc/min","3rd re-use","L AVF","free","6","40-89-11 ","51.6","E0001","E0006","50","6:50 AM","11:30 AM","0","");
INSERT INTO treatment VALUES("30","2016-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","40-89-11","44.1","E0003","E0003","50","7:00 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("31","2016-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","40-89-11","44.1","E0008","E0003","49","8:13 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("32","2016-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","40-89-11","44.7","E0003","E0003","51","6:45 AM","11:49 PM","0","");
INSERT INTO treatment VALUES("33","2016-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","40-89-11","44.3","E0003","E0003","52","7:05 AM","11:30 AM","0","");
INSERT INTO treatment VALUES("34","2016-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","40-89-11","44.3","E0006","E0003","51","7:00 AM","12:05 PM","0","");
INSERT INTO treatment VALUES("35","2016-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","40-89-11","43.9","E0003","E0003","50","8:05 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("36","2016-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","40-89-11","44.2","E0003","E0005","51","7:25 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("37","2018-02-26","300cc","zxc","L AVF","zxc","2","86-89-17 ","80","E0001","E0001","100","","","50","F8HPS");
INSERT INTO treatment VALUES("38","2018-02-28","170","test","R AVF","1230","1","12/12/2012","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("39","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","AAA-AAA ","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("40","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","01-15-33 ","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("41","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","01-15-33","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("42","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","01-15-33","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("43","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","01-15-33","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("44","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","01-15-33","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("45","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","01-15-33","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("46","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","01-15-33","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("47","2016-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","01-21-19","44.1","E0003","E0003","50","7:00 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("48","2016-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","01-21-19","44.1","E0008","E0003","49","8:13 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("49","2016-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","01-21-19","44.7","E0003","E0003","51","6:45 AM","11:49 PM","0","");
INSERT INTO treatment VALUES("50","2016-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","01-21-19","44.3","E0003","E0003","52","7:05 AM","11:30 AM","0","");
INSERT INTO treatment VALUES("51","2016-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","01-21-19","44.3","E0006","E0003","51","7:00 AM","12:05 PM","0","");
INSERT INTO treatment VALUES("52","2016-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","01-26-22","43.9","E0003","E0003","50","8:05 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("53","2016-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","01-26-22","44.2","E0003","E0005","51","7:25 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("54","2018-02-26","300cc","zxc","L AVF","zxc","2","01-26-22","80","E0001","E0001","100","","","50","F8HPS");
INSERT INTO treatment VALUES("55","2018-02-28","170","test","R AVF","1230","1","01-26-22","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("56","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","01-26-22","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("57","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","02/07/2015","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("58","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","02/07/2015","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("59","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","02/07/2015","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("60","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","03/01/2015","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("61","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","03-18-20","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("62","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","03-18-20","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("63","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","03-18-20","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("64","2018-02-28","170","test","R AVF","1230","1","03-18-20","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("65","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","03-18-20","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("66","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","03-25-11","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("67","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","03-25-11","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("68","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","03-25-11","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("69","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","03-25-11","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("70","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","03-25-11","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("71","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","03-45-15","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("72","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","03-45-15","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("73","2016-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","03-45-15","44.1","E0003","E0003","50","7:00 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("74","2016-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","03-45-15","44.1","E0008","E0003","49","8:13 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("75","2016-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","03-45-15","44.7","E0003","E0003","51","6:45 AM","11:49 PM","0","");
INSERT INTO treatment VALUES("76","2016-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","03-45-15","44.3","E0003","E0003","52","7:05 AM","11:30 AM","0","");
INSERT INTO treatment VALUES("77","2016-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","03-45-15","44.3","E0006","E0003","51","7:00 AM","12:05 PM","0","");
INSERT INTO treatment VALUES("78","2016-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","03-45-15","43.9","E0003","E0003","50","8:05 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("79","2016-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","04-15-08","44.2","E0003","E0005","51","7:25 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("80","2018-02-26","300cc","zxc","L AVF","zxc","2","04-15-08","80","E0001","E0001","100","","","50","F8HPS");
INSERT INTO treatment VALUES("81","2018-02-28","170","test","R AVF","1230","1","04-15-08","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("82","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","04-15-08","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("83","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","04-15-08","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("84","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","04-15-08","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("85","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","04-17-26","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("86","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","04-17-26","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("87","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","04-17-26","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("88","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","04-17-26","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("89","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","04-17-26","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("90","2018-02-28","170","test","R AVF","1230","1","05-19-21","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("91","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","05-19-21","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("92","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","05-19-21","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("93","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","05-19-21","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("94","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","05-19-21","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("95","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","05-19-21","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("96","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","05-29-07","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("97","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","05-29-07","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("98","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","05-29-07","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("99","2016-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","05-29-07","44.1","E0003","E0003","50","7:00 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("100","2016-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","05-29-07","44.1","E0008","E0003","49","8:13 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("101","2016-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","06/08/2023","44.7","E0003","E0003","51","6:45 AM","11:49 PM","0","");
INSERT INTO treatment VALUES("102","2016-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","06/08/2023","44.3","E0003","E0003","52","7:05 AM","11:30 AM","0","");
INSERT INTO treatment VALUES("103","2016-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","06/08/2023","44.3","E0006","E0003","51","7:00 AM","12:05 PM","0","");
INSERT INTO treatment VALUES("104","2016-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","06/08/2023","43.9","E0003","E0003","50","8:05 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("105","2016-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","06/08/2023","44.2","E0003","E0005","51","7:25 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("106","2018-02-26","300cc","zxc","L AVF","zxc","2","06-15-11","80","E0001","E0001","100","","","50","F8HPS");
INSERT INTO treatment VALUES("107","2018-02-28","170","test","R AVF","1230","1","06-15-11","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("108","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","06-15-11","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("109","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","06-15-11","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("110","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","06-15-11","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("111","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","06-36-13","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("112","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","06-36-13","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("113","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","06-36-13","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("114","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","06-36-13","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("115","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","07-18-01","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("116","2018-02-28","170","test","R AVF","1230","1","07-18-01","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("117","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","07-18-01","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("118","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","07-18-01","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("119","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","07-18-01","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("120","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","07-36-23","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("121","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","07-36-23","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("122","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","07-36-23","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("123","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","07-36-23","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("124","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","07-36-23","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("125","2016-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","08-19-35","44.1","E0003","E0003","50","7:00 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("126","2016-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","09-18-46","44.1","E0008","E0003","49","8:13 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("127","2016-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","09-21-35","44.7","E0003","E0003","51","6:45 AM","11:49 PM","0","");
INSERT INTO treatment VALUES("128","2016-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","09-21-35","44.3","E0003","E0003","52","7:05 AM","11:30 AM","0","");
INSERT INTO treatment VALUES("129","2016-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","09-21-35","44.3","E0006","E0003","51","7:00 AM","12:05 PM","0","");
INSERT INTO treatment VALUES("130","2016-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","09-21-35","43.9","E0003","E0003","50","8:05 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("131","2016-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","09-21-35","44.2","E0003","E0005","51","7:25 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("132","2018-02-26","300cc","zxc","L AVF","zxc","2","09-21-35","80","E0001","E0001","100","","","50","F8HPS");
INSERT INTO treatment VALUES("133","2018-02-28","170","test","R AVF","1230","1","10-25-17","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("134","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","10-25-17","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("135","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","10-25-17","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("136","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","10-25-17","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("137","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","10-25-17","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("138","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","10-35-56","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("139","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","10-35-56","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("140","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","10-35-56","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("141","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","10-35-56","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("142","2018-02-28","170","test","R AVF","1230","1","10-35-56","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("143","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","10-35-56","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("144","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","11-26-17","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("145","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","11-26-17","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("146","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","11-26-17","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("147","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","11-26-17","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("148","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","11-26-17","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("149","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","11-26-17","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("150","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","11-37-17","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("151","2016-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","11-37-17","44.1","E0003","E0003","50","7:00 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("152","2016-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","11-37-17","44.1","E0008","E0003","49","8:13 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("153","2016-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","11-37-17","44.7","E0003","E0003","51","6:45 AM","11:49 PM","0","");
INSERT INTO treatment VALUES("154","2016-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","11-37-17","44.3","E0003","E0003","52","7:05 AM","11:30 AM","0","");
INSERT INTO treatment VALUES("155","2016-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","11-37-17","44.3","E0006","E0003","51","7:00 AM","12:05 PM","0","");
INSERT INTO treatment VALUES("156","2016-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","12-35-11","43.9","E0003","E0003","50","8:05 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("157","2016-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","12-35-11","44.2","E0003","E0005","51","7:25 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("158","2018-02-26","300cc","zxc","L AVF","zxc","2","12-35-11","80","E0001","E0001","100","","","50","F8HPS");
INSERT INTO treatment VALUES("159","2018-02-28","170","test","R AVF","1230","1","12-35-11","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("160","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","12-35-11","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("161","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","12-35-11","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("162","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","13-18-17","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("163","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","13-18-17","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("164","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","13-18-17","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("165","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","13-18-17","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("166","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","13-18-17","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("167","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","13-18-17","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("168","2018-02-28","170","test","R AVF","1230","1","13-38-01","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("169","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","13-38-01","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("170","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","13-38-01","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("171","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","13-38-01","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("172","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","13-38-01","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("173","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","13-38-01","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("174","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","13-38-01","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("175","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","13-38-01","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("176","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","13-67-08","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("177","2016-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","13-67-08","44.1","E0003","E0003","50","7:00 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("178","2016-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","13-67-08","44.1","E0008","E0003","49","8:13 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("179","2016-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","13-67-08","44.7","E0003","E0003","51","6:45 AM","11:49 PM","0","");
INSERT INTO treatment VALUES("180","2016-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","13-67-08","44.3","E0003","E0003","52","7:05 AM","11:30 AM","0","");
INSERT INTO treatment VALUES("181","2016-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","13-67-08","44.3","E0006","E0003","51","7:00 AM","12:05 PM","0","");
INSERT INTO treatment VALUES("182","2016-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","13-67-08","43.9","E0003","E0003","50","8:05 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("183","2016-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","14-65-95","44.2","E0003","E0005","51","7:25 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("184","2018-02-26","300cc","zxc","L AVF","zxc","2","14-65-95","80","E0001","E0001","100","","","50","F8HPS");
INSERT INTO treatment VALUES("185","2018-02-28","170","test","R AVF","1230","1","14-65-95","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("186","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","14-65-95","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("187","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","14-65-95","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("188","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","14-65-95","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("189","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","15-16-25","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("190","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","15-16-25","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("191","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","15-16-25","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("192","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","15-16-25","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("193","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","15-16-25","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("194","2018-02-28","170","test","R AVF","1230","1","15-16-25","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("195","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","15-28-07","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("196","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","15-28-07","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("197","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","15-28-07","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("198","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","15-28-07","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("199","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","15-28-07","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("200","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","15-28-07","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("201","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","16-35-17","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("202","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","16-35-17","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");
INSERT INTO treatment VALUES("203","2016-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","16-35-17","44.1","E0003","E0003","50","7:00 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("204","2016-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","16-35-17","44.1","E0008","E0003","49","8:13 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("205","2016-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","16-35-17","44.7","E0003","E0003","51","6:45 AM","11:49 PM","0","");
INSERT INTO treatment VALUES("206","2016-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","16-35-17","44.3","E0003","E0003","52","7:05 AM","11:30 AM","0","");
INSERT INTO treatment VALUES("207","2016-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","17-46-21","44.3","E0006","E0003","51","7:00 AM","12:05 PM","0","");
INSERT INTO treatment VALUES("208","2016-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","17-46-21","43.9","E0003","E0003","50","8:05 AM","12:00 PM","0","");
INSERT INTO treatment VALUES("209","2016-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","17-46-21","44.2","E0003","E0005","51","7:25 AM","11:45 AM","0","");
INSERT INTO treatment VALUES("210","2018-02-26","300cc","zxc","L AVF","zxc","2","17-46-21","80","E0001","E0001","100","","","50","F8HPS");
INSERT INTO treatment VALUES("211","2018-02-28","170","test","R AVF","1230","1","17-46-21","50","E0001","E00010","40","4:08 AM","10:43 AM","75","HIPS-18");
INSERT INTO treatment VALUES("212","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","17-46-21","83","E0001","E00010","80","11:01 AM","11:51 AM","75","HIPS-18");
INSERT INTO treatment VALUES("213","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","18-23-51","44.2","E0003","E0005","55","8:34 AM","12:10 PM","50","F8HPS");
INSERT INTO treatment VALUES("214","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","18-23-51","43.9","E0003","E0003","41","6:50 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("215","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","18-23-51","44.3","E0006","E0003","50","7:00 AM","11:45 AM","75","HIPS-18");
INSERT INTO treatment VALUES("216","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","18-23-51","44.3","E0003","E0003","45","8:13 AM","12:00 PM","50","F8HPS");
INSERT INTO treatment VALUES("217","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","18-23-51","44.7","E0003","E0003","50","6:45 AM","11:49 PM","75","HIPS-18");
INSERT INTO treatment VALUES("218","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","18-23-51","44.1","E0008","E0003","44","7:05 AM","11:30 AM","75","HIPS-18");
INSERT INTO treatment VALUES("219","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","18-23-51","44.1","E0003","E0003","50","7:00 AM","12:05 PM","50","F8HPS");



