# Host: localhost  (Version 5.5.5-10.1.36-MariaDB)
# Date: 2020-08-30 17:22:34
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "gejala"
#

CREATE TABLE `gejala` (
  `kode_gejala` char(5) NOT NULL DEFAULT '',
  `nama_gejala` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`kode_gejala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "gejala"
#

INSERT INTO `gejala` VALUES ('G0001','Demam'),('G0002','Lesu'),('G0003','Sakit Kepala'),('G0004','Nyeri Punggung'),('G0005','Nyeri Otot'),('G0006','Muntah'),('G0007','Mata Merah'),('G0008','Nyeri Sendi'),('G0009','Pilek'),('G0010','Batuk'),('G0011','Mual'),('G0012','Perut Sering Berbunyi'),('G0014','Nafsu Makan Berkurang'),('G0015','Muncul Tonjolan Merah'),('G0016','Tenggorokan Tampak Merah'),('G0018','BAB Intensif'),('G0019','Vesikel'),('G0020','Ruam Merah');

#
# Structure for table "pengelola"
#

CREATE TABLE `pengelola` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `kata_sandi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pengelola"
#

INSERT INTO `pengelola` VALUES ('123','123'),('admin','admin'),('admin1','1'),('mus','mus');

#
# Structure for table "penyakit"
#

CREATE TABLE `penyakit` (
  `kode_penyakit` char(5) NOT NULL DEFAULT '',
  `nama_penyakit` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`kode_penyakit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "penyakit"
#

INSERT INTO `penyakit` VALUES ('P0000','Tidak Diketahui'),('P0001','Campak'),('P0002','Demam Berdarah Dengue'),('P0003','Cacar Air'),('P0004','Polio'),('P0005','Diare');

#
# Structure for table "diagnosa"
#

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT,
  `kode_penyakit` char(5) NOT NULL DEFAULT '',
  `kode_gejala` char(5) DEFAULT NULL,
  `CF` float(2,1) DEFAULT NULL,
  PRIMARY KEY (`id_diagnosa`),
  KEY `kode_penyakit` (`kode_penyakit`),
  KEY `kode_gejala` (`kode_gejala`),
  CONSTRAINT `diagnosa_ibfk_1` FOREIGN KEY (`kode_penyakit`) REFERENCES `penyakit` (`kode_penyakit`),
  CONSTRAINT `diagnosa_ibfk_2` FOREIGN KEY (`kode_gejala`) REFERENCES `gejala` (`kode_gejala`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

#
# Data for table "diagnosa"
#

INSERT INTO `diagnosa` VALUES (1,'P0001','G0001',0.4),(2,'P0001','G0009',0.4),(3,'P0001','G0010',0.4),(4,'P0001','G0005',0.3),(5,'P0001','G0004',0.4),(6,'P0001','G0007',0.5),(7,'P0001','G0020',0.8),(8,'P0002','G0001',0.6),(9,'P0002','G0002',0.3),(10,'P0002','G0014',0.5),(11,'P0002','G0008',0.6),(12,'P0002','G0005',0.2),(13,'P0002','G0003',0.6),(14,'P0003','G0001',0.7),(15,'P0003','G0015',0.4),(16,'P0003','G0004',0.4),(17,'P0003','G0003',0.5),(18,'P0003','G0019',0.6),(19,'P0004','G0001',0.7),(20,'P0004','G0016',0.2),(21,'P0004','G0003',0.6),(22,'P0004','G0006',0.2),(23,'P0005','G0011',0.6),(24,'P0005','G0018',0.8),(25,'P0005','G0006',0.3),(26,'P0005','G0012',0.3);
