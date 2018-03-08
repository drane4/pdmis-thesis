

CREATE TABLE `activitylog` (
  `employeeid` varchar(15) NOT NULL,
  `activity` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `activityid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`activityid`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

INSERT INTO activitylog VALUES("E0001","Login","2018-02-28","08:13:00","33");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","36");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","37");
INSERT INTO activitylog VALUES("E0005","Login","2018-02-28","08:25:00","38");
INSERT INTO activitylog VALUES("E0001","Login","2018-02-28","08:26:00","39");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-01","04:31:00","40");
INSERT INTO activitylog VALUES("","Update Patient Record","0000-00-00","00:00:00","41");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-02","03:45:00","42");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-02","10:53:00","43");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-03","01:00:00","44");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-03","01:43:00","45");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-03","01:49:00","46");
INSERT INTO activitylog VALUES("E00012","Login","2018-03-03","04:04:00","47");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-03","04:08:00","48");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-03","09:45:00","49");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-03","03:19:00","50");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-05","04:16:00","51");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-05","05:07:00","52");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-06","11:30:00","53");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-07","01:27:00","54");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-07","01:32:00","55");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-07","07:52:00","56");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-08","12:39:00","57");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-08","08:54:00","58");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-08","09:55:00","59");
INSERT INTO activitylog VALUES("E0001","Login","2018-03-08","04:47:00","60");





CREATE TABLE `confinement` (
  `hospitalname` varchar(30) NOT NULL,
  `confinementdate` date NOT NULL,
  `confinementreason` varchar(100) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `confinement_id` int(11) NOT NULL AUTO_INCREMENT,
  `confinement_monthyear` char(20) NOT NULL,
  PRIMARY KEY (`confinement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO confinement VALUES("Doctors","2015-12-15","Car accident","86-89-17","1","");
INSERT INTO confinement VALUES("asda","2018-02-14","Highblood","01-26-22","2","2018, February");
INSERT INTO confinement VALUES("sample","2018-02-10","wala","01-26-22","3","2018, February");
INSERT INTO confinement VALUES("cebs","2018-01-18","wla","01-26-22","4","2018, January");
INSERT INTO confinement VALUES("asd","2018-02-12","asd","05-29-07","5","2018, February");
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

INSERT INTO employeeprofile VALUES("1","1","Carl","a","admin","","123","Admin","Betio","1","E0001","admin","admin","1","1","1","1","1","1","1","1","1");
INSERT INTO employeeprofile VALUES("10","1","Smith","D","La Carlota","","+09 (504) 563-55-6","Nurse","Smith","0","E00010","Carlagi","123","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("11","1","Miriam","P","Bacolod City","","+63 (912) 345-67-8","Nurse","Gayoba","0","E00011","gayoba","miriam","1","1","1","0","1","1","1","0","a");
INSERT INTO employeeprofile VALUES("12","1","Queries Dela","Q","Q","","+09 (129) 817-11-2","Technician","Queries","0","E00012","sample","sample","1","1","0","0","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("2","1","Jay Allan","L","Aguinaldo Street, Silay City, Negros Occidental","","09206348946","Nurse","Vasquez","0","E0002","vasquez","vasquez","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("3","1","John Paul","J","#90 Bayabas St. Elena Subdivision, Silay City, Negros Occidental","495 - 4538","09228167114","Nurse","Peornato","0","E0003","peornato","peornato","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("4","1","Guillermo","R","Purok Golf, Brgy. Guinhalaran, Silay City, Negros Occidental","","09207918057","Technician","Margate Sr.","0","E0004","margate","margate","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("5","1","Jenelle Marco","A","Lot 42 Block 30 St. Francis Subdivision, Silay City, Negros Occidental","495 - 5569","09055406423","Nurse","Paez","0","E0005","paez","paez","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("6","1","Christopher Niño","R","#10 Villa City High, Bacolod City, Negros Occidental","706 - 0186","09182446674","Nurse","Tolimao","0","E0006","tolimao","tolimao","1","1","0","1","1","0","0","1","a");
INSERT INTO employeeprofile VALUES("8","1","Joebert","P","Purok Pag-asa, Talabaan Zone 1 Cadiz City, Negros Occidental","","09234346532","Nurse","Datu-on","0","E0008","datu-on","datu-on","0","0","0","0","0","0","0","0","");
INSERT INTO employeeprofile VALUES("9","1","Alvin","L","Bacolod City","","+23 (321) 332-32-3","Technician","Yanson","0","E0009","yanson","1234","1","1","0","1","1","0","0","1","a");





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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO hemo_order VALUES("1","0","1","","freqothers","durothers","0","1","2018-01-29","2018-01-29","2","2018-01-22","sad","1","2018-01-29","sad","1","2018-01-29","sad","1","3 hours","HIPS-18","0","0","sa","dsada","sad","21 Kg","sdasdasd","01-26-22","13","2018-02-09");
INSERT INTO hemo_order VALUES("1","0","0","","0","0","0","0","2018-01-29","2018-01-29","0","2018-01-29","as","1","2018-01-29","asd","1","2018-01-29","a","2","3 hours","F8HPS","0","0","sad","dsad","sad","20 Kg","sadasd","05-29-07","14","2018-01-29");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","0","2018-02-08","2018-02-08","1","2018-02-09","mango","1","2018-02-09","mango","1","2018-02-09","mango","2","3 hours","F8HPS","0","0","asd","250","sad"," Kg","sad","01-26-22","25","2018-02-09");
INSERT INTO hemo_order VALUES("1","1","1","leptospirosis","1","0","0","0","2018-02-12","2018-02-20","0","2018-02-07","a","1","2018-02-20","as","1","2018-02-11","s","2","3.5 hours","F8HPS","0","0","as","as","as","55","as","A","26","2018-02-11");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","2017-10-30","2017-12-30","1","2018-01-02","","0","0000-00-00","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","45-42-23","27","2018-02-07");
INSERT INTO hemo_order VALUES("1","1","1","","0","0","0","1","2017-09-16","2017-09-16","0","2015-07-01","Dr. Ranile","1","2015-07-01","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","33-42-13","28","2017-11-22");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","2018-01-29","2018-01-29","0","2018-01-22","sad","1","2018-01-29","sad","1","2018-01-29","sad","1","3 hours","HIPS-18","0","0","","","","21 Kg","sdasdasd","33-42-13","29","2018-02-09");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","0","2018-01-29","2018-01-29","0","2018-01-29","as","1","2018-01-29","asd","1","2018-01-29","a","2","","F8HPS","1","0","","",""," Kg","sadasd","65-10-03","30","2018-01-29");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","0","2018-02-08","2018-02-08","1","2018-02-09","mango","1","2018-02-09","mango","1","2018-02-09","mango","2","3 hours","F8HPS","0","0","","",""," Kg","sad","33-42-13","31","2018-02-09");
INSERT INTO hemo_order VALUES("1","0","0","","0","0","0","0","2018-01-31","2018-01-28","1","2018-01-30","surgeon","1","2018-02-12","surgeon","1","2018-01-31","sssa","2","3 hours","HIPS-18","0","1","a","1","1"," Kg K","mdnkadkwdwdas","01-26-22","32","2018-02-11");
INSERT INTO hemo_order VALUES("1","1","0","","0","0","0","1","2017-10-30","2017-12-30","1","2018-01-02","","0","0000-00-00","","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","Fennous sulfate 1tab TID
Calcium carbonate 1 tab ","45-42-23","33","2018-02-07");
INSERT INTO hemo_order VALUES("1","0","1","","0","0","0","1","2017-09-16","2017-09-16","0","2015-07-01","Dr. Ranile","1","2015-07-01","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc"," Kg","","33-42-13","34","2017-11-22");
INSERT INTO hemo_order VALUES("1","1","1","","0","0","0","1","2017-09-16","2017-09-16","0","2015-07-01","Dr. Ranile","1","2015-07-01","Dr. Ranile","0","0000-00-00","","2","4 hours","F8HPS","0","0","LMWH","2.5 iu","300cc","50 Kg","","86-89-17","35","2017-11-22");
INSERT INTO hemo_order VALUES("0","1","0","","1","1","0","1","0000-00-00","0000-00-00","0","2018-02-13","asd","1","2018-02-20","asd","1","2018-02-28","asd","1","4 hours","HIPS-18","0","0","alex","123","170","75 Kg","","12-12-12","36","2018-02-28");
INSERT INTO hemo_order VALUES("1","0","0","","","","0","1","0000-00-00","0000-00-00","0","2018-02-28","ranile","1","2018-02-14","gonzaga","0","0000-00-00","","1","3 hours","F8HPS","0","0","dalteparin sodium","2500iu","300cc","75 Kg","","AAA-AAA","37","2018-02-28");





CREATE TABLE `hepatitisbvaccine` (
  `description` varchar(10) NOT NULL,
  `administeredby` varchar(50) NOT NULL,
  `hepa_daterecieved` date NOT NULL,
  `hepa_nextdate` date NOT NULL,
  `hepa_id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(30) NOT NULL,
  `hepa_year` char(4) NOT NULL,
  PRIMARY KEY (`hepa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

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
INSERT INTO hepatitisprofile VALUES("2018-03-02","r","r","r","r","86-89-17","32","2018, March");





CREATE TABLE `influenzavaccine` (
  `influenza_administeredby` varchar(50) NOT NULL,
  `influenza_daterecieved` date NOT NULL,
  `influenza_datenext` date NOT NULL,
  `influenza_id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(30) NOT NULL,
  `influenza_year` char(4) NOT NULL,
  PRIMARY KEY (`influenza_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO influenzavaccine VALUES("johnsaac","2018-02-03","2018-02-28","1","01-26-22","");
INSERT INTO influenzavaccine VALUES("asda","2018-02-14","2018-02-28","5","01-26-22","");
INSERT INTO influenzavaccine VALUES("hehe","2018-02-09","2018-02-22","6","01-26-22","2018");
INSERT INTO influenzavaccine VALUES("johna","2018-02-03","2018-02-28","7","01-26-22","");
INSERT INTO influenzavaccine VALUES("c/o LYF vaccination & medical services","2016-07-17","2016-11-17","8","33-42-13","");
INSERT INTO influenzavaccine VALUES("s","2018-02-06","2018-02-07","9","12-12-12","2018");
INSERT INTO influenzavaccine VALUES("SASA","2018-02-21","2018-02-28","12","12-12-12","2018");
INSERT INTO influenzavaccine VALUES("rhiban","2018-02-07","2018-03-14","13","86-89-17","2018");





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

INSERT INTO initialtestresult VALUES("36","164/91","74","18","1","86-89-17","2017-06-26","7:11 am");
INSERT INTO initialtestresult VALUES("36.","169/90","70","19","2","86-89-17","2017-07-03","7:00 am");
INSERT INTO initialtestresult VALUES("35.5","152/85","68","19","3","86-89-17","2017-10-07","6:41 am");
INSERT INTO initialtestresult VALUES("35.2","176/93","68","19","4","86-89-17","2017-07-17","6:50 am");
INSERT INTO initialtestresult VALUES("35.8","176/95","68","19","5","86-89-17","2017-07-24","6:55 am");
INSERT INTO initialtestresult VALUES("35.6","167/81","76","20","6","86-89-17","2017-07-31","6:37 am");
INSERT INTO initialtestresult VALUES("35.6","167/81","76","20","7","86-89-17","2018-01-22","5:13 am");
INSERT INTO initialtestresult VALUES("32","151/171","78","22","8","45-45-24","2018-01-22","10:37 am");
INSERT INTO initialtestresult VALUES("35","175/80","70","40","10","45-45-24","2018-01-29","8:15 pm");
INSERT INTO initialtestresult VALUES("31","170 / 90","23","23","11","86-89-17","2018-02-05","1:32 am");
INSERT INTO initialtestresult VALUES("23","23 / 32","32","23","12","A","2018-02-11","9:36 pm");
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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

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
INSERT INTO laboratory VALUES("7.23","59.55","","","","4.76","137.30","266.41","152.21","88.03","146.69","109.09","","6.86","4.7","7.5","135","0.41","248","0.63","0.14","0.08","0.13","0.02","","","","","","","33-42-13","2017-02-02","26");
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
INSERT INTO laboratory VALUES("7.23","59.55","","","","4.76","137.30","266.41","152.21","88.03","146.69","109.09","","6.86","4.7","7.5","135","0.41","248","0.63","0.14","0.08","0.13","0.02","","","","","","","86-89-17","2017-02-02","38");
INSERT INTO laboratory VALUES("10.2","36.24","","7.68","","4.87","136.5","193.05","152.21","56.37","105.11","123.64","","9.85","","","","","","","","","","","","","","","","","86-89-17","2017-04-11","39");
INSERT INTO laboratory VALUES("8.45","41.29","","","","4.40","136","239.38","194.69","59.07","140.91","123.64","","7.43","","","","","","","","","","","","","","","","","86-89-17","2017-08-07","40");
INSERT INTO laboratory VALUES("s","s","s","s","ss","s","s","s","s","s","s","s","s","s","","","","","","","","","","","","","","","","","A","0000-00-00","41");
INSERT INTO laboratory VALUES("123","123","123","123","123","123","123","123","123","123","123","123","123","123","456","456","456","456","456","456","456","456","456","456","789","789","789","789","789","789","12-12-12","2018-02-28","42");
INSERT INTO laboratory VALUES("a2","a2","a2","a2","a2","a2","a2","a2","a2","a2","a2","a2","a2","a2","","","","","","","","","","","","","","","","","86-89-17","2018-03-02","43");





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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO laboratory_info VALUES("a","a","a","a","type b","b","a","1","01-26-22");
INSERT INTO laboratory_info VALUES("a","","","","","","","2","");
INSERT INTO laboratory_info VALUES("a","a","a","a","a","a","a","3","86-89-17");





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

INSERT INTO machineresult VALUES("164/91","72","250","80","180","1","86-89-17","2017-06-26","7:25 am");
INSERT INTO machineresult VALUES("165/88","78","300","80","200","2","86-89-17","2017-06-26","8:45 am");
INSERT INTO machineresult VALUES("172/86","75","300","80","200","3","86-89-17","2017-06-26","9:45 am");
INSERT INTO machineresult VALUES("165/95","78","300","80","200","4","86-89-17","2017-06-26","10:20 am");
INSERT INTO machineresult VALUES("170/83","70","300","80","200","5","86-89-17","2017-06-26","11:15 am");
INSERT INTO machineresult VALUES("160/80","","","","","6","86-89-17","2017-06-26","11:25 am");
INSERT INTO machineresult VALUES("160/80","","","","","7","86-89-17","2017-06-26","11:55 am");
INSERT INTO machineresult VALUES("152/88","70","250","36.3","200","8","86-89-17","2017-07-03","7:12 am");
INSERT INTO machineresult VALUES("175/90","78","250","80","200","9","86-89-17","2017-07-03","7:45 am");
INSERT INTO machineresult VALUES("174/90","78","250","80","200","10","86-89-17","2017-07-03","8:05 pm");
INSERT INTO machineresult VALUES("174/93","78","250","80","200","11","86-89-17","2017-07-03","9:05 pm");
INSERT INTO machineresult VALUES("160/80","80","300","80","240","12","86-89-17","2017-07-03","10:25 pm");
INSERT INTO machineresult VALUES("180/90","","","","","13","86-89-17","2017-07-03","11:15 pm");
INSERT INTO machineresult VALUES("160/90","","","","","14","86-89-17","2017-07-03","11:31 pm");
INSERT INTO machineresult VALUES("151/83","55","250","120","180","15","86-89-17","2017-10-07","7:00 am");
INSERT INTO machineresult VALUES("180/88","77","300","120","220","16","86-89-17","2017-10-07","8:00 pm");
INSERT INTO machineresult VALUES("150/80","80","300","140","200","17","86-89-17","2017-10-07","8:42 pm");
INSERT INTO machineresult VALUES("162/90","71","300","140","200","18","86-89-17","2017-10-07","9:30 am");
INSERT INTO machineresult VALUES("171/90","80","300","100","200","19","86-89-17","2017-10-07","10:05 am");
INSERT INTO machineresult VALUES("171/90","80","300","100","200","20","86-89-17","2017-10-07","11:05");
INSERT INTO machineresult VALUES("160/90","","","","","21","86-89-17","2017-10-07","11:05");
INSERT INTO machineresult VALUES("162/90","67","250","120","180","22","86-89-17","2017-07-17","6.50");
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
INSERT INTO machineresult VALUES("153/80","72","250","120","180","38","86-89-17","2017-07-31","6:45");
INSERT INTO machineresult VALUES("160/80","77","300","140","200","39","86-89-17","2017-07-31","7:45");
INSERT INTO machineresult VALUES("170/90","80","300","140","220","40","86-89-17","2017-07-31","8:30");
INSERT INTO machineresult VALUES("165/83","77","300","140","220","41","86-89-17","2017-07-31","9:00");
INSERT INTO machineresult VALUES("185/92","73","300","160","220","42","86-89-17","2017-07-31","10:0");
INSERT INTO machineresult VALUES("160/90","","","","","43","86-89-17","2017-07-31","10:45");
INSERT INTO machineresult VALUES("160/90","","","","","44","86-89-17","2017-07-31","11:15");
INSERT INTO machineresult VALUES("a","a","a","a","a","45","86-89-17","2018-01-22","5:12 am");
INSERT INTO machineresult VALUES("139/69","75","220","42","52","46","45-45-24","2018-01-22","10:39 am");
INSERT INTO machineresult VALUES("151/180","75","200","44","60","47","45-45-24","2018-01-22","10:40 am");
INSERT INTO machineresult VALUES("dsad","asd","dasd","sad","sada","48","01-26-22","2018-01-29","11:41 am");
INSERT INTO machineresult VALUES("dsa","dasd","ads","asdsa","dasd","49","01-26-22","2018-01-29","11:45 am");
INSERT INTO machineresult VALUES("175/90","75","300cc","70","70","50","45-45-24","2018-01-29","8:16 pm");
INSERT INTO machineresult VALUES("190 / 62","12","23","231","12","51","86-89-17","2018-02-05","1:39 am");
INSERT INTO machineresult VALUES("2 / 23","asd","asd","asd","sadsa","52","A","2018-02-11","9:36 pm");
INSERT INTO machineresult VALUES("1 / 23","sad","asdasd","asd","asd","53","A","2018-02-11","9:37 pm");
INSERT INTO machineresult VALUES("12 / 12","sd","ds","ds","ds","54","A","2018-02-11","9:46 pm");
INSERT INTO machineresult VALUES("123 / 12","1","2","2","2","55","86-89-17","2018-02-12","2:08 am");
INSERT INTO machineresult VALUES("2 / 2","100","1","1","1","56","86-89-17","2018-02-12","2:47 am");
INSERT INTO machineresult VALUES("1 / 1","2","1","1","1","57","86-89-17","2018-02-12","2:49 am");
INSERT INTO machineresult VALUES(" / ","","","","","58","86-89-17","2018-02-12","3:12 am");
INSERT INTO machineresult VALUES(" / ","","","","","59","86-89-17","2018-02-12","3:12 am");
INSERT INTO machineresult VALUES(" / ","","","","","60","86-89-17","2018-02-12","3:13 am");
INSERT INTO machineresult VALUES("1 / 1","1","1","1","1","61","86-89-17","2018-02-12","3:23 am");
INSERT INTO machineresult VALUES("1 / 1","123123","1","1","1","62","05-29-07","2018-02-14","3:28 am");
INSERT INTO machineresult VALUES("2 / 2","1asd","2","2","2","63","05-29-07","2018-02-14","3:42 am");
INSERT INTO machineresult VALUES("12 / 12","43","123","123","123","64","05-29-07","2018-02-14","5:19 am");
INSERT INTO machineresult VALUES("100 / 80","123","123","123","123","65","86-89-17","2018-02-19","1:39 am");
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

INSERT INTO maintenance VALUES("E0001","Export","2018-03-08 04:50 pm");





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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO nephrologist VALUES("1","N0001","Alayon","Ricky","A","444 - 2045","09173101106","#20 Celso Tan - Caroll sts, Brgy. Sum-ag, Bacolod City, Negros Occidental");
INSERT INTO nephrologist VALUES("10","N00010","Paylado","Franelin","D","","","");
INSERT INTO nephrologist VALUES("11","N00011","Austria","Joseph Peter","D","","","");
INSERT INTO nephrologist VALUES("12","N00012","Togle","Brian Antonio","D","","","");
INSERT INTO nephrologist VALUES("13","N00013","Garcia","Nina","A.","","","");
INSERT INTO nephrologist VALUES("14","N00014","Aaa","Aa","A","","","");
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

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
INSERT INTO nursenotes VALUES("a","a","a","a","E0001","2018-03-02","28","23-22-02");





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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

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
INSERT INTO patientdrugprofile VALUES("s s","s","s","s","2018-03-02","0","a","N00010","54","01-26-22","2018, March");
INSERT INTO patientdrugprofile VALUES("a 2","a","a","a","2018-03-02","1","a","N0003","55","05-29-07","2018, March");
INSERT INTO patientdrugprofile VALUES("a 1","a","1","a","2018-03-09","0","a","N0001","56","01-26-22","2018, March");





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

INSERT INTO patientprofile VALUES("01-26-22","Orota","Rosario","Abanilla","1933-09-24","83","Female","Filipino","Roman Catholic","Widowed","Comboy St. Phase II St. Francis Subd. Brgy. 5, Silay City, Negros Occidental","09064459636","Comboy St. Phase II St. Francis Subd. Brgy. 5, Silay City, Negros Occidental","09064459636","Jake Joaquin","HDA. Puyas Brgy. IV, Silay City, Negros Occidental","09126634789","83","Eposino 4,000 iu","ESRD Secondary to , Diabetic Nephropathy, Chronic Gromerulonephritis, Hypertensive Nephrosclerosis, ","1117-5342-4950","Dennis Valladarez","Guardian","2017-03-01","0","N0007","0","","Jan","2018");
INSERT INTO patientprofile VALUES("05-29-07","Cordova","Ronnie Sr.","Dusaran","1959-08-22","58","Male","Filipino","Roman Catholic","Married","HDA. Dacudao, Brgy. Guimbala-on, Silay City, Negros Occidental","09216844881","HDA. Dacudao, Brgy. Guimbala-on, Silay City, Negros Occidental","09216844881","Ronely Gerota","Panaogao 1, Brgy. 4, Silay City, Negros Occidental","09074632447","37","Epoetin Alpha 4,000 ui 2x/week","ESRD Secondary to , Diabetic Nephropathy","4000-6000-3707","Ma. Nelly Cordova","","1997-09-07","0","N00011","1","","Feb","2018");
INSERT INTO patientprofile VALUES("06-08-23","Ignacio","Rafael","Mayang","1955-10-24","61","Male","Filipino","MCG I","Married","Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental","09094652572","Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental","09466773230","Francisca Ignacio","Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental","09092673505","61","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Diabetic Nephropathy","0802-5420-0615","Josephine Ignacio","Wife","2017-03-17","0","N0001","1","","Dec","2017");
INSERT INTO patientprofile VALUES("12-12-12","Lad","Merc","A","1997-07-16","20","Male","A","A","Single","A","1","A","1","A","A","1","20","A","","A","A","Guardian","2018-03-01","0","N00011","1","2018-02-28","Feb","2018");
INSERT INTO patientprofile VALUES("13-18-17","Baroy","Edwin","Canindo","1960-07-19","57","Male","Filipino","Roman Catholic","Single","Antilla Subd., Brgy. 4, Silay City, Negros Occidental","495-4496","Antilla Subd., Brgy. 4, Silay City, Negros Occidental","495-4496","Dolores Baloy","Antilla Subd., Brgy. 4, Silay City, Negros Occidental","495-4496","52","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Hypertensive Neproclerosis","1102-5157-3190","Edwin Baroy","Self","2012-12-27","0","N0009","1","","Dec","2017");
INSERT INTO patientprofile VALUES("13-38-01","Duyo","Cerezille","Abella","1970-05-15","47","Female","Filipino","Roman Catholic","Married","Purok Acasia, Boulevard, Brgy. Mambulac, Silay City, Negros Occidental","495-6126","Purok Acasia, Boulevard, Brgy. Mambulac, Silay City, Negros Occidental","09462542671","Saturnina Duyo","Purok Acasia, Boulevard, Brgy. Mambulac, Silay City, Negros Occidental","714-5757","38","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Chronic Glomerulonephritis","","Cerezille Duyo","Self","2008-08-26","0","N00012","1","","","");
INSERT INTO patientprofile VALUES("13-67-08","Baroquillo","Jeresa","Serato","1970-01-13","47","Female","Filipino","Roman Catholic","Married","Brgy. Cabatangan, Talisay City, Negros Occidental","09183773619","Brgy. Cabatangan, Talisay City, Negros Occidental","09183773619","Marlyn Tulia","Dos Hermanas, Talisay City, Negros Occidental","09198446769","41","Epoetin Alpha 6,000 ui 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis","","Jeresa Baroquillo","Self","2011-08-23","0","N0003","1","","","");
INSERT INTO patientprofile VALUES("20-80-17","Pangue","Hubert","Castilla","1946-02-27","67","Male","Filipino","Roman Catholic","Married","Gov. Alfelon, Poblacion 2, Sagay City","09213310502","Gov. Alfelon, Poblacion 2, Sagay City","09213310502","Anita Zante","Patricia Homes Subd., Sta. Fe, Bacolod City","7098028","69","Eposino 4000 iu (Tuesday); Eposino 6,000 iu (frida","ESRD 2 degree to HPN Nephrosclerosis","111751916309","Eleanor Pangue","Wife","2015-02-01","0","N0009","1","","","");
INSERT INTO patientprofile VALUES("21-26-17","Arboleda","Ma. Theresa","Aldea","1960-01-12","57","Female","Filipino","Roman Catholic","Married","Villa Barbas 2, Cadiz City, Negros Occidental","493-0719","Villa Barbas 2, Cadiz City, Negros Occidental","09326160944","Joresa Arboleda","Villa Barbas 2, Cadiz City, Negros Occidental","09232225140","54","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis","1100-0070-7430","Ma. Theresa Arboleda","Self","2014-03-19","0","N00012","1","","","");
INSERT INTO patientprofile VALUES("23-22-02","Medel","Rebecca","Delgado","1956-11-01","61","Female","Filipino","Roman Catholic","Married","HDA. Guadalupe, Brgy. Salvacion, Murcia, Negros Occidental","09292538764","HDA. Guadalupe, Brgy. Salvacion, Murcia, Negros Occidental","09292538764","Archie Marcial","Gardenville Subdivision, Bacolod City, Negros Occidental","09128559773","53","Epoetin Alpha (Eposino) 6,000 ui 2x/week","End Stage Renal Disease Secondary to Diabetic Nephropathy","1120-1295-5017","Rolando Medel","Husband","2017-01-02","0","N00010","1","","","");
INSERT INTO patientprofile VALUES("25-84-10","Nolido","Mario Jr","Jentelizo","1985-11-29","32","Male","Filipino","Born Again Christian","Married","St. Francis De Asissi, Brgy. Lantad, Silay City, Negros Occidetal","09468572829","St. Francis De Asissi, Brgy. Lantad, Silay City, Negros Occidetal","09468572830","Dolores Baroy","Antilla Subd., Brgy. 4, Silay City, Negros Occidetal","495-4496","25","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to  Chronic Glomerulonephritis","","Mario Nolido Jr.","Self","2001-10-17","0","N00010","1","","","");
INSERT INTO patientprofile VALUES("31-24-32","Lanada","Fremrose","Gallego","1982-10-05","34","Female","Filipino","Roman Catholic","Single","New Site, Brgy. E Lopez, Silay City, Negros Occidental","09122408667","New Site, Brgy. E Lopez, Silay City, Negros Occidental","09122408667","Ma. Theresa Lanada","New Site, Brgy. E Lopez, Silay City, Negros Occidental","09752975653","33","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Chronic Glomerulonephritis","0202-6170-8907","Fremrose Lanasa","Self","2016-03-29","0","N0007","1","","","");
INSERT INTO patientprofile VALUES("33-42-13","Araneta","Arnold","Lacson","1965-04-09","52","Male","Filipino","Roman Catholic","Married","Lopez Jaena St., Brgy. 5, Silay City, Negros Occidental","714-5557","Lopez Jaena St., Brgy. 5, Silay City, Negros Occidental","09093670837","Allen Parrocho","Carmela Valley Subd., Talisay City, Negros Occidental","702-2017","50","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Diabetic Nephropathy","1100-0098-8928","Jennifer Araneta","Wife","2015-08-11","0","N00011","1","","","");
INSERT INTO patientprofile VALUES("37-67-12","Ditchella","Dionisio","Constantino","1949-10-03","68","Male","Fiilipino","Roman Catholic","Married","Yap Quina St., Brgy.4, Victorias City, Negros Occidental","09152910941","Yap Quina St., Brgy.4, Victorias City, Negros Occidental","09152910941","Marilyn Ditchella","Osmena Avenue, Brgy.5, Victorias, Negros Occidental","09152910941","63","Epoetin Alpha 4,000 iu 2x/week","End Stage Renal Disease Secondary to Diabetic Nephropathy","","Teresita Ditchella","Wife","2013-04-23","0","N0005","1","","","");
INSERT INTO patientprofile VALUES("40-24-17","Roa","Corazon","Dionio","1937-09-06","80","Female","Filipino","Roman Catholic","Widowed","361 Quezon Street, Brgy. 5, Victorias City, Negros Occidental","09194040465","361 Quezon Street, Brgy. 5, Victorias City, Negros Occidental","09194040465","Sheila Seballos","Purok 1B, Da-an Banwa, Brgy.9, Victorias City, Negros Occidental","399-2719","76","Epoetin Alfa 4,000 IU 2x/week","ESRD SECONDARY TO HYPERTENSIVE NEPHROSCLEROSIS","1117-5245-5909","Sheila Seballos","Daughter","2013-09-21","0","N0004","1","","","");
INSERT INTO patientprofile VALUES("40-78-21","Mahilum","Edbert","Jamora","1971-12-29","45","Male","Filipino","Roman Catholic","Married","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09128338521","Carmella, Phase I, Brgy. V, Silay City, Negros Occidental","09074507590","Eduardo Mahilum Jr.","Buenavista Subd., Phase IV, Brgy.Guinhalaran, Silay City, Negros Occidental","0918662686","36","Epoetin Alfa (Eposino) 6,000 ui 2x/week","ESRD SEC.TO CGN; S/P KT W/ CHRONIC REJECTION (2008)","1102-5121-3933","Almira Mahilum","Wife","2007-05-01","0","N0003","1","","","");
INSERT INTO patientprofile VALUES("40-89-11","De Asis","Myrna","Abancio","1944-08-10","73","Female","Filipino","Roman Catholic","Married","Lopez Subd. Brgy. 16, Victorias City, Negros Occidental","09466127045","Lopez Subd. Brgy. 16, Victorias City, Negros Occidental","09466127045","Maribelle De Asis","Lopez Subd. Brgy. 16, Victorias City, Negros Occidental","09328752532","68","Epoetin Alpha 4,000 iu 2x/week","","","Maribelle De Asis","Sibling","2013-05-08","0","N0008","1","","","");
INSERT INTO patientprofile VALUES("45-18-16","Inquig","Van Calvin","Bincal","1986-10-11","30","Male","Filipino","Roman Catholic","Married","Antilla Subd., Silay City, Negros Occidental ","09488030713","Paglaum Village, Mansilingan, Bacolod City, Negros Occidental","09484052091","Lamberto Inquig","Paglaum Village, Mansilingan, Bacolod City, Negros Occidental","09274675655","28","Epoetin Alpha 4,000 ui ","ESRD Secondary to CGN","1105-0363-0907","Van Calvin Inquig","Patient","2015-02-04","0","N0006","1","","","");
INSERT INTO patientprofile VALUES("45-42-23","Hermano","Herman","Tacda","1974-03-29","43","Male","Filipino","Roman Catholic","Single","Crossing Luguay, Brgy. Balaring, Silay City","09484038866","Crossing Luguay, Brgy. Balaring, Silay City","09072022155","Anabelle Guadalupe","Crossing Luguay, Brgy. Balaring, Silay City","09508915617","43","Epo Alpha 4000 ui","","","Hermano, Herman","Self","2018-01-02","0","N0004","1","","","");
INSERT INTO patientprofile VALUES("45-45-24","Ano","Jemmel","V","1997-11-20","20","Male","Filipino","RC","Divorced","Bacolod City","09129817112","Bacolod City","09129817112","Jems","Bacolod City","09129817112","20","Epoetin Alpha 4,000 ui","ESRD","","Jems","Guardian","2018-01-22","0","N00010","1","","","");
INSERT INTO patientprofile VALUES("46-20-04","Escalona","Elbert","Leonida","1970-04-16","45","Male","Filipino","Roman Catholic","Married","Antonio Luna Interior Brgy Mambulac, Silay City","099332599656","Antonio Luna Interior Brgy Mambulac, Silay City","09984979689","Elma Superficial","Antonio Luna Interior Brgy Mambulac, Silay City","09297598448","43","Epoetin Alfa (Eposino) 6,000 IO","ESRD 2 degree to Dm Nephropathy","","Elbert Escalona","Self","2014-12-16","0","N0006","1","","","");
INSERT INTO patientprofile VALUES("52-04-23","Valle","Restituto","","1955-10-14","62","Male","F","Roman Catholic","Married","Brgy. Tanza, EB Magalona, Silay City, Negros Occidental","09092954332","Brgy. Tanza, EB Magalona, Silay City, Negros Occidental","09092954332","Leilanie V. Lima","Brgy. Tanza, EB Magalona, Silay City, Negros Occidental","09217464044","60","Epoetin Alpha (Eposino) 6,000 ui 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis","1105-0229-0398","","Wife","2015-09-06","0","N00011","1","","","");
INSERT INTO patientprofile VALUES("55-14-06","Mabacquiao","Lilibeth","Vega","1967-04-18","50","Female","Filipino","Roman Catholic","Married","HDA. Bagacay, Brgy. Bagtic, Silay City, Negros Occidental","495-2761","HDA. Bagacay, Brgy. Bagtic, Silay City, Negros Occidental","0912533652","Judie Vega","St. Francis Subd., Silay City, Negros Occidental","0912533652","44","Epoetin Alpha (Eposino) 6,000 ui 2x/week","End Stage Renal Disease Secondary to Chronic Glomerulonephritis; Anemia  Secondary to CKD","1105-0228-7353-9","Lilibeth Mabacquiao","Self","2011-09-29","0","N0004","1","","","");
INSERT INTO patientprofile VALUES("58-67-08","Jimena","Josue","Abian","1949-03-10","68","Male","Filipino","Roman Catholic","Married","Tuburan Takas, Brgy. Tuburan, E.B Magalona, Negros Occidental","09214153247","Tuburan Takas, Brgy. Tuburan, E.B Magalona, Negros Occidental","09214153247","Jobosan Villaflor","Sagay City, Negros Occidental","09391217423","61","Epoetin Alpha(Renogen) 6,000 iu 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis","","Josue Jimena","Self","2010-06-07","0","N0008","1","","","");
INSERT INTO patientprofile VALUES("61-39-06","Gonzales","Lerma","Agbay","1963-08-28","54","Female","Filipino","Roman Catholic","Married","HDA. Makina, Brgy. Rizal, Silay City, Negros Occidental","09997739530","HDA. Makina, Brgy. Rizal, Silay City, Negros Occidental","09997739530","Mary Ann Ubay","HDA. Makina, Brgy. Rizal, Silay City, Negros Occidental","09997739530","53","Epoetin Alpha 4,000 iu 2x/week","End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis","","Lerma Gonzales","Self","2016-09-24","0","N0001","1","","","");
INSERT INTO patientprofile VALUES("65-10-03","Marayan","Brenda","Magbanua","1967-10-08","50","Female","Filipino","Roman Catholic","Single","Brgy. Tanza, EB Magalona, Negros Occidental","09123769375","Brgy. Tanza, EB Magalona, Negros Occidental","09123769375","Myra Davo","Brgy. Tanza, EB Magalona, Negros Occidental","09505758070","48","Epoetin Alpha 4,000 ui 2x/week","End Stage Renal Disease Secondary to Diabetic Nephropathy","","Brenda Marayan","Self","2015-03-05","0","N0004","0","","","");
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
  `treatment_time` varchar(20) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO patientschedule VALUES("11","13-18-17","Monday","morning");
INSERT INTO patientschedule VALUES("12","86-89-17","Monday","morning");
INSERT INTO patientschedule VALUES("13","40-89-11","Monday","morning");
INSERT INTO patientschedule VALUES("14","86-11-12","Monday","morning");
INSERT INTO patientschedule VALUES("15","93-94-12","Monday","afternoon");
INSERT INTO patientschedule VALUES("16","05-29-07","Monday","11:30 AM - 4:30 PM");
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
INSERT INTO patientschedule VALUES("38","AAA-AAA","Saturday","morning");





CREATE TABLE `pneumococcal_vaccine` (
  `pneumococcal_administeredby` varchar(50) NOT NULL,
  `pneumococcal_datenext` date NOT NULL,
  `pneumococcal_daterecieved` date NOT NULL,
  `pneumococcal_id` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital_Id` varchar(30) NOT NULL,
  `pneumococcal_year` char(4) NOT NULL,
  PRIMARY KEY (`pneumococcal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO pneumococcal_vaccine VALUES("johnhahaa","2018-02-15","2018-02-21","1","01-26-22","2018");
INSERT INTO pneumococcal_vaccine VALUES("qwer","2018-02-10","2018-02-14","2","01-26-22","");
INSERT INTO pneumococcal_vaccine VALUES("rtys","2018-02-09","2018-02-22","3","01-26-22","");
INSERT INTO pneumococcal_vaccine VALUES("asd","2018-02-03","2018-02-16","4","01-26-22","");
INSERT INTO pneumococcal_vaccine VALUES("gr","2018-02-23","2018-02-24","5","01-26-22","");
INSERT INTO pneumococcal_vaccine VALUES("","0000-00-00","0000-00-00","6","86-89-17","");
INSERT INTO pneumococcal_vaccine VALUES("c/o TLJPH hemodialysis unit","2017-03-22","2017-08-22","7","33-42-13","");
INSERT INTO pneumococcal_vaccine VALUES("SA","2018-02-28","2018-02-21","9","12-12-12","2018");
INSERT INTO pneumococcal_vaccine VALUES("","0000-00-00","0000-00-00","10","86-89-17","1970");





CREATE TABLE `problemlist` (
  `problem` varchar(50) NOT NULL,
  `datenoted` date NOT NULL,
  `dateresolved` date NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `problemlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `problemlist_monthyear` char(20) NOT NULL,
  PRIMARY KEY (`problemlist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO problemlist VALUES("sadsad","2018-01-28","2018-01-28","86-89-17","9","");
INSERT INTO problemlist VALUES("asda","2018-02-22","2018-02-07","01-26-22","10","");
INSERT INTO problemlist VALUES("gh","2018-02-14","2018-02-14","01-26-22","11","");
INSERT INTO problemlist VALUES("haha","2018-02-10","2018-02-17","01-26-22","12","2018, February");
INSERT INTO problemlist VALUES("sample","2018-01-19","2018-02-16","01-26-22","13","2018, January");
INSERT INTO problemlist VALUES("asd","2018-02-13","2018-02-13","01-26-22","14","2018, February");
INSERT INTO problemlist VALUES("asda","2018-02-12","2018-02-12","05-29-07","15","2018, February");
INSERT INTO problemlist VALUES("here","2018-02-06","2018-02-14","01-26-22","17","2018, February");
INSERT INTO problemlist VALUES("test1","2018-02-21","2018-02-28","12-12-12","18","2018, February");
INSERT INTO problemlist VALUES("test2","2018-02-28","2018-02-28","12-12-12","19","2018, February");
INSERT INTO problemlist VALUES("pneumonia","2018-02-21","2018-02-28","86-89-17","20","2018, February");
INSERT INTO problemlist VALUES("sepsis","2018-02-07","2018-02-08","86-89-17","21","2018, February");
INSERT INTO problemlist VALUES("SAMPLE","2018-03-15","2018-03-24","01-26-22","22","2018, March");





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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

INSERT INTO treatment VALUES("1","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","86-89-17 ","44.2","E0003","E0005","55","3:55 am","3:55 am","0","");
INSERT INTO treatment VALUES("2","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","86-89-17 ","43.9","E0003","E0003","41","3:55 am","3:55 am","0","");
INSERT INTO treatment VALUES("3","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","86-89-17 ","44.3","E0006","E0003","50","3:55 am","3:55 am","0","");
INSERT INTO treatment VALUES("4","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","86-89-17 ","44.3","E0003","E0003","45","3:55 am","3:55 am","0","");
INSERT INTO treatment VALUES("5","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","86-89-17 ","44.7","E0003","E0003","50","3:55 am","3:55 am","0","");
INSERT INTO treatment VALUES("6","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","86-89-17 ","44.1","E0008","E0003","44","3:55 am","3:55 am","0","");
INSERT INTO treatment VALUES("7","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","86-89-17 ","44.1","E0003","E0003","50","3:55 am","3:55 am","0","");
INSERT INTO treatment VALUES("9","2018-01-29","dasd","dasd","R AVF","dsad","3","01-26-22 ","30","E0001","E0004","31","","","0","");
INSERT INTO treatment VALUES("10","2018-01-29","300","reuse","L AVF","free","4","45-45-24 ","78","E0001","E00010","73","","","0","");
INSERT INTO treatment VALUES("11","2018-02-11","AS","ASD","R AVF","ASD","1","A ","23","E0001","E0001","41","","","0","");
INSERT INTO treatment VALUES("12","2018-02-12","1234","123","L AVF","123","4","86-89-17 ","123","E0001","E0002","123","3:55 am","3:55 am","0","");
INSERT INTO treatment VALUES("13","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","33-42-13","44.3","E0006","E0003","","","","0","");
INSERT INTO treatment VALUES("14","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","33-42-13","44.3","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("15","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","33-42-13","44.7","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("16","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","33-42-13","44.1","E0008","E0003","","","","0","");
INSERT INTO treatment VALUES("17","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","33-42-13","44.1","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("18","2018-01-29","300cc/min","2nd reuse","R AVF","free","3","33-42-13","30","E0001","E0004","31","","","0","");
INSERT INTO treatment VALUES("19","2018-01-29","300","reuse","L AVF","free","4","33-42-13","78","E0001","E00010","73","","","0","");
INSERT INTO treatment VALUES("20","2017-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","01-26-22","44.2","E0003","E0005","","","","0","");
INSERT INTO treatment VALUES("21","2017-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","01-26-22","43.9","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("22","2017-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","01-26-22","44.3","E0006","E0003","","","","0","");
INSERT INTO treatment VALUES("23","2017-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","01-26-22","44.3","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("24","2017-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","01-26-22","44.7","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("25","2017-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","01-26-22","44.1","E0008","E0003","","","","0","");
INSERT INTO treatment VALUES("26","2017-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","01-26-22","44.1","E0003","E0003","","","","0","");
INSERT INTO treatment VALUES("27","2018-01-29","300cc/min","2nd reuse","R AVF","free","3","01-26-22","30","E0001","E0004","31","","","0","");
INSERT INTO treatment VALUES("28","2018-01-29","300","reuse","L AVF","free","4","01-26-22","78","E0001","E00010","73","","","0","");
INSERT INTO treatment VALUES("30","2018-02-22","1","12","R AVF","12","1","05-29-07 ","12","E0001","E0001","12","8:34 am","12:10 pm","0","");
INSERT INTO treatment VALUES("31","2017-06-26","300cc/min","3rd re-use","L AVF","free","6","40-89-11 ","51.6","E0001","E0006","50","6:50 am","11:30 am","0","");
INSERT INTO treatment VALUES("32","2016-07-31","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","40-89-11","44.1","E0003","E0003","50","7:00 am","11:45 am","0","");
INSERT INTO treatment VALUES("33","2016-07-24","300 cc/min","2nd reuse","L AVF","0.261 lmwh","5","40-89-11","44.1","E0008","E0003","49","8:13 am","12:00 pm","0","");
INSERT INTO treatment VALUES("34","2016-07-17","300 cc/min","1st reuse","L AVF","0.261 lmwh","5","40-89-11","44.7","E0003","E0003","51","6:45 am","11:49 pm","0","");
INSERT INTO treatment VALUES("35","2016-07-10","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","40-89-11","44.3","E0003","E0003","52","7:05 am","11:30 am","0","");
INSERT INTO treatment VALUES("36","2016-10-07","300 cc/min","NEWSET","L AVF","0.261 lmwh","5","40-89-11","44.3","E0006","E0003","51","7:00 am","12:05 pm","0","");
INSERT INTO treatment VALUES("37","2016-07-03","300 cc/min","last use","AVF","0.261 lmwh","5","40-89-11","43.9","E0003","E0003","50","8:05 am","12:00 pm","0","");
INSERT INTO treatment VALUES("38","2016-06-26","350 cc/min","5th Re-use","AVF","0.261 lmwh","5","40-89-11","44.2","E0003","E0005","51","7:25 am","11:45 am","0","");
INSERT INTO treatment VALUES("42","2018-02-26","300cc","zxc","L AVF","zxc","2","86-89-17 ","80","E0001","E0001","100","","","50","F8HPS");
INSERT INTO treatment VALUES("43","2018-02-28","170","test","R AVF","1230","1","12-12-12 ","50","E0001","E00010","40","4:08 am","10:43 am","75","HIPS-18");
INSERT INTO treatment VALUES("44","2018-02-28","300cc","1st reuse","R AVF","2500 iu","7","AAA-AAA ","83","E0001","E00010","80","11:01 am","11:51 am","75","HIPS-18");
INSERT INTO treatment VALUES("45","2018-03-03","300cc","a","R AVF","a","1","AAA-AAA ","80","E0001","E00010","90","","","75","F8HPS");



