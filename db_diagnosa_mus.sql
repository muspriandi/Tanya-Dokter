# Host: localhost  (Version 5.5.5-10.1.36-MariaDB)
# Date: 2020-08-27 21:53:40
# Generator: MySQL-Front 6.0  (Build 2.20)


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

INSERT INTO `diagnosa` VALUES (1,'P0001','G0001',0.4),(7,'P0001','G0020',0.8),(6,'P0001','G0007',0.5),(5,'P0001','G0004',0.4),(4,'P0001','G0005',0.3),(3,'P0001','G0010',0.4),(2,'P0001','G0009',0.4),(13,'P0002','G0003',0.6),(12,'P0002','G0005',0.2),(11,'P0002','G0008',0.6),(10,'P0002','G0014',0.5),(9,'P0002','G0002',0.3),(8,'P0002','G0001',0.6),(18,'P0003','G0019',0.6),(17,'P0003','G0003',0.5),(16,'P0003','G0004',0.4),(15,'P0003','G0015',0.4),(14,'P0003','G0001',0.7),(22,'P0004','G0006',0.2),(21,'P0004','G0003',0.6),(20,'P0004','G0016',0.2),(19,'P0004','G0001',0.7),(23,'P0005','G0011',0.6),(24,'P0005','G0018',0.8),(25,'P0005','G0006',0.3),(26,'P0005','G0012',0.3);
