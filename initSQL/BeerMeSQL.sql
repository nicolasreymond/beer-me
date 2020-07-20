-- MySQL dump 10.13  Distrib 8.0.18, for macos10.14 (x86_64)
--
-- Host: localhost    Database: beerMeDb
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ABONNEMENT`
--

DROP TABLE IF EXISTS `ABONNEMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ABONNEMENT` (
  `idABONNEMENT` int(11) NOT NULL AUTO_INCREMENT,
  `nomAbonnement` varchar(250) NOT NULL,
  `descriptionAbonnement` varchar(250) NOT NULL,
  `dureeAbonnement` int(11) NOT NULL,
  `nbrBoissonAbonnement` int(11) NOT NULL,
  `prixMensuelAbonnement` int(11) NOT NULL,
  PRIMARY KEY (`idABONNEMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ADRESSELIVRAISON`
--

DROP TABLE IF EXISTS `ADRESSELIVRAISON`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ADRESSELIVRAISON` (
  `idADRESSELIVRAISON` int(11) NOT NULL AUTO_INCREMENT,
  `rueLivraison` varchar(250) NOT NULL,
  `numRueLivraison` int(11) NOT NULL,
  `npaLivraison` int(11) NOT NULL,
  `villeLivraison` varchar(250) NOT NULL,
  `paysLivraison` varchar(250) NOT NULL,
  PRIMARY KEY (`idADRESSELIVRAISON`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `APERO`
--

DROP TABLE IF EXISTS `APERO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `APERO` (
  `idAPERO` int(11) NOT NULL AUTO_INCREMENT,
  `nbrParticipentApero` int(11) NOT NULL,
  `nbrBoissonParticipentApero` int(11) NOT NULL,
  `dateApero` datetime NOT NULL,
  `FK_idTYPEAPERO` int(11) NOT NULL,
  PRIMARY KEY (`idAPERO`),
  KEY `FK_idTYPEAPEROAPERO_idx` (`FK_idTYPEAPERO`),
  CONSTRAINT `FK_idTYPEAPEROAPERO` FOREIGN KEY (`FK_idTYPEAPERO`) REFERENCES `TYPEAPERO` (`idTYPEAPERO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `BOISSON`
--

DROP TABLE IF EXISTS `BOISSON`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `BOISSON` (
  `idBOISSON` int(11) NOT NULL AUTO_INCREMENT,
  `nomBoisson` varchar(250) NOT NULL,
  `descriptionBoisson` varchar(250) NOT NULL,
  `pourcentageAlcoolBoisson` float NOT NULL,
  `stockBoisson` int(11) NOT NULL,
  `prixBoisson` float NOT NULL,
  `FK_idBRASSERIE` int(11) NOT NULL,
  `FK_idTYPEBOISSON` int(11) NOT NULL,
  PRIMARY KEY (`idBOISSON`),
  KEY `FK_idBRASSERIEBOISSON_idx` (`FK_idBRASSERIE`),
  KEY `FK_idTYPEBOISSON_idx` (`FK_idTYPEBOISSON`),
  CONSTRAINT `FK_idBRASSERIEBOISSON` FOREIGN KEY (`FK_idBRASSERIE`) REFERENCES `BRASSERIE` (`idBRASSERIE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_idTYPEBOISSON` FOREIGN KEY (`FK_idTYPEBOISSON`) REFERENCES `TYPEBOISSON` (`idTYPEBOISSON`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `BOISSON-ABONNEMENT`
--

DROP TABLE IF EXISTS `BOISSON-ABONNEMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `BOISSON-ABONNEMENT` (
  `idBOISSON-ABONNEMENT` int(11) NOT NULL AUTO_INCREMENT,
  `FK_idBOISSON` int(11) NOT NULL,
  `FK_idABONNEMENT` int(11) NOT NULL,
  PRIMARY KEY (`idBOISSON-ABONNEMENT`),
  KEY `FK_idBOISSONABONNEMENT_idx` (`FK_idBOISSON`),
  KEY `FK_idABONNEMENTBOISSON_idx` (`FK_idABONNEMENT`),
  CONSTRAINT `FK_idABONNEMENTBOISSON` FOREIGN KEY (`FK_idABONNEMENT`) REFERENCES `ABONNEMENT` (`idABONNEMENT`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_idBOISSONABONNEMENT` FOREIGN KEY (`FK_idBOISSON`) REFERENCES `BOISSON` (`idBOISSON`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `BOISSON-CARTONCADEAU`
--

DROP TABLE IF EXISTS `BOISSON-CARTONCADEAU`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `BOISSON-CARTONCADEAU` (
  `idBOISSON-CARTONCADEAU` int(11) NOT NULL AUTO_INCREMENT,
  `idBOISSON` int(11) NOT NULL,
  `idCARTONCADEAU` int(11) NOT NULL,
  PRIMARY KEY (`idBOISSON-CARTONCADEAU`),
  KEY `FK_BOISSONCARTONCADEAU_idx` (`idBOISSON`),
  KEY `FK_CARTONCADEAUBOISSON_idx` (`idCARTONCADEAU`),
  CONSTRAINT `FK_BOISSONCARTONCADEAU` FOREIGN KEY (`idBOISSON`) REFERENCES `BOISSON` (`idBOISSON`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_CARTONCADEAUBOISSON` FOREIGN KEY (`idCARTONCADEAU`) REFERENCES `CARTONCADEAU` (`idCARTONCADEAU`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `BRASSERIE`
--

DROP TABLE IF EXISTS `BRASSERIE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `BRASSERIE` (
  `idBRASSERIE` int(11) NOT NULL AUTO_INCREMENT,
  `nomBrasserie` varchar(250) NOT NULL,
  `descriptionBrasserie` varchar(250) NOT NULL,
  `rueBrasserie` varchar(250) NOT NULL,
  `numRueBrasserie` int(11) NOT NULL,
  `villeBrasserie` varchar(250) NOT NULL,
  `npaBrasserie` int(11) NOT NULL,
  `paysBrasserie` varchar(250) NOT NULL,
  `autorisationBrasserie` varchar(45) NOT NULL,
  PRIMARY KEY (`idBRASSERIE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CARTONCADEAU`
--

DROP TABLE IF EXISTS `CARTONCADEAU`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CARTONCADEAU` (
  `idCARTONCADEAU` int(11) NOT NULL AUTO_INCREMENT,
  `textCartonCadeau` varchar(255) NOT NULL,
  PRIMARY KEY (`idCARTONCADEAU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `CARTONCADEAU-PANIER`
--

DROP TABLE IF EXISTS `CARTONCADEAU-PANIER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CARTONCADEAU-PANIER` (
  `idCARTONCADEAU-PANIER` int(11) NOT NULL AUTO_INCREMENT,
  `CARTONCADEAU-PANIERcol` varchar(45) DEFAULT NULL,
  `FK_idPANIER` int(11) NOT NULL,
  `FK_idCARTONCADEAU` int(11) NOT NULL,
  PRIMARY KEY (`idCARTONCADEAU-PANIER`),
  KEY `FK_idPANIER_idx` (`FK_idPANIER`),
  KEY `FK_idCARTONCADEAU_idx` (`FK_idCARTONCADEAU`),
  CONSTRAINT `FK_idCARTONCADEAUPANIER` FOREIGN KEY (`FK_idCARTONCADEAU`) REFERENCES `CARTONCADEAU` (`idCARTONCADEAU`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_idPANIERCARTONCADEAU` FOREIGN KEY (`FK_idPANIER`) REFERENCES `PANIER` (`idPANIER`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `COMMANDE`
--

DROP TABLE IF EXISTS `COMMANDE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `COMMANDE` (
  `idCOMMANDE` int(11) NOT NULL AUTO_INCREMENT,
  `statusCommande` varchar(250) NOT NULL,
  `dateCommande` datetime NOT NULL,
  `FK_idPANIER` int(11) NOT NULL,
  `FK_idADRESSLIVRAISON` int(11) NOT NULL,
  PRIMARY KEY (`idCOMMANDE`),
  KEY `FK_idPANIERCOMMANDE_idx` (`FK_idPANIER`),
  KEY `FK_idADRESSELIVRAISONCOMMANDE_idx` (`FK_idADRESSLIVRAISON`),
  CONSTRAINT `FK_idADRESSELIVRAISONCOMMANDE` FOREIGN KEY (`FK_idADRESSLIVRAISON`) REFERENCES `ADRESSELIVRAISON` (`idADRESSELIVRAISON`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_idPANIERCOMMANDE` FOREIGN KEY (`FK_idPANIER`) REFERENCES `PANIER` (`idPANIER`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `MEDIABOISSON`
--

DROP TABLE IF EXISTS `MEDIABOISSON`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MEDIABOISSON` (
  `idMEDIABOISSON` int(11) NOT NULL AUTO_INCREMENT,
  `pathMediaBoisson` varchar(200) NOT NULL,
  `typeMediaBoisson` varchar(200) NOT NULL,
  `FK_idBOISSON` int(11) NOT NULL,
  PRIMARY KEY (`idMEDIABOISSON`),
  KEY `FK_idBOISSONMEDIA_idx` (`FK_idBOISSON`),
  CONSTRAINT `FK_idBOISSONMEDIA` FOREIGN KEY (`FK_idBOISSON`) REFERENCES `BOISSON` (`idBOISSON`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `MEDIABRASSERIE`
--

DROP TABLE IF EXISTS `MEDIABRASSERIE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MEDIABRASSERIE` (
  `idMEDIABRASSERIE` int(11) NOT NULL AUTO_INCREMENT,
  `pathMediaBrasserie` varchar(200) NOT NULL,
  `typeMediaBrasserie` varchar(200) NOT NULL,
  `FK_idBRASSERIE` int(11) NOT NULL,
  PRIMARY KEY (`idMEDIABRASSERIE`),
  KEY `FK_idBRASSERIE_idx` (`FK_idBRASSERIE`),
  CONSTRAINT `FK_idBRASSERIE` FOREIGN KEY (`FK_idBRASSERIE`) REFERENCES `BRASSERIE` (`idBRASSERIE`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `MEDIACARTONCADEAU`
--

DROP TABLE IF EXISTS `MEDIACARTONCADEAU`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MEDIACARTONCADEAU` (
  `idMEDIACARTONCADEAU` int(11) NOT NULL AUTO_INCREMENT,
  `pathMediaCartonCadeau` varchar(200) NOT NULL,
  `typeMediaCartonCadeau` varchar(250) NOT NULL,
  `FK_idCARTONCADEAU` int(11) NOT NULL,
  PRIMARY KEY (`idMEDIACARTONCADEAU`),
  KEY `FK_idCARTONCADEAUMEDIA_idx` (`FK_idCARTONCADEAU`),
  CONSTRAINT `FK_idCARTONCADEAUMEDIA` FOREIGN KEY (`FK_idCARTONCADEAU`) REFERENCES `CARTONCADEAU` (`idCARTONCADEAU`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `PANIER`
--

DROP TABLE IF EXISTS `PANIER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PANIER` (
  `idPANIER` int(11) NOT NULL AUTO_INCREMENT,
  `FK_idUTILISATEUR` int(11) NOT NULL,
  PRIMARY KEY (`idPANIER`),
  KEY `FK_idUTILISATEUR_idx` (`FK_idUTILISATEUR`),
  CONSTRAINT `FK_idUTILISATEUR` FOREIGN KEY (`FK_idUTILISATEUR`) REFERENCES `UTILISATEUR` (`idUTILISATEUR`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `PANIER-ABONNEMENT`
--

DROP TABLE IF EXISTS `PANIER-ABONNEMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PANIER-ABONNEMENT` (
  `idPANIER-ABONNEMENT` int(11) NOT NULL AUTO_INCREMENT,
  `FK_idPANIER` int(11) NOT NULL,
  `FK_idABONNEMENT` int(11) NOT NULL,
  PRIMARY KEY (`idPANIER-ABONNEMENT`),
  KEY `FK_idPANIERABONNEMENT_idx` (`FK_idPANIER`),
  KEY `FK_idABONNEMENTPANIER_idx` (`FK_idABONNEMENT`),
  CONSTRAINT `FK_idABONNEMENTPANIER` FOREIGN KEY (`FK_idABONNEMENT`) REFERENCES `ABONNEMENT` (`idABONNEMENT`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_idPANIERABONNEMENT` FOREIGN KEY (`FK_idPANIER`) REFERENCES `PANIER` (`idPANIER`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `PANIER-APERO`
--

DROP TABLE IF EXISTS `PANIER-APERO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PANIER-APERO` (
  `idPANIER-APERO` int(11) NOT NULL AUTO_INCREMENT,
  `FK_idPANIER` int(11) NOT NULL,
  `FK_idAPERO` int(11) NOT NULL,
  PRIMARY KEY (`idPANIER-APERO`),
  KEY `FK_idPANIERAPERO` (`FK_idPANIER`),
  KEY `FK_idAPEROPANIER_idx` (`FK_idAPERO`),
  CONSTRAINT `FK_idAPEROPANIER` FOREIGN KEY (`FK_idAPERO`) REFERENCES `APERO` (`idAPERO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_idPANIERAPERO` FOREIGN KEY (`FK_idPANIER`) REFERENCES `PANIER` (`idPANIER`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `PANIER-BOISSON`
--

DROP TABLE IF EXISTS `PANIER-BOISSON`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PANIER-BOISSON` (
  `idPANIER-BOISSON` int(11) NOT NULL AUTO_INCREMENT,
  `FK_idPANIER` int(11) NOT NULL,
  `FK_idBOISSON` int(11) NOT NULL,
  PRIMARY KEY (`idPANIER-BOISSON`),
  KEY `FK_idPANIERBOISSON_idx` (`FK_idPANIER`),
  KEY `FK_idBOISSONPANIER_idx` (`FK_idBOISSON`),
  CONSTRAINT `FK_idBOISSONPANIER` FOREIGN KEY (`FK_idBOISSON`) REFERENCES `BOISSON` (`idBOISSON`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_idPANIERBOISSON` FOREIGN KEY (`FK_idPANIER`) REFERENCES `PANIER` (`idPANIER`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `TYPEAPERO`
--

DROP TABLE IF EXISTS `TYPEAPERO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `TYPEAPERO` (
  `idTYPEAPERO` int(11) NOT NULL AUTO_INCREMENT,
  `nomTypeApero` varchar(45) NOT NULL,
  PRIMARY KEY (`idTYPEAPERO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `TYPEAPERO-BOISSON`
--

DROP TABLE IF EXISTS `TYPEAPERO-BOISSON`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `TYPEAPERO-BOISSON` (
  `idTYPEAPERO-BOISSON` int(11) NOT NULL AUTO_INCREMENT,
  `FK_idTYPEAPERO` int(11) NOT NULL,
  `FK_idBOISSON` int(11) NOT NULL,
  `quantiteBoisson` int(11) NOT NULL,
  PRIMARY KEY (`idTYPEAPERO-BOISSON`),
  KEY `FK_idTYPEAPEROBOISSON_idx` (`FK_idTYPEAPERO`),
  KEY `FK_idBOISSONTYPEAPERO_idx` (`FK_idBOISSON`),
  CONSTRAINT `FK_idBOISSONTYPEAPERO` FOREIGN KEY (`FK_idBOISSON`) REFERENCES `BOISSON` (`idBOISSON`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_idTYPEAPEROBOISSON` FOREIGN KEY (`FK_idTYPEAPERO`) REFERENCES `TYPEAPERO` (`idTYPEAPERO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `TYPEBOISSON`
--

DROP TABLE IF EXISTS `TYPEBOISSON`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `TYPEBOISSON` (
  `idTYPEBOISSON` int(11) NOT NULL AUTO_INCREMENT,
  `nomTypeBoisson` varchar(250) NOT NULL,
  PRIMARY KEY (`idTYPEBOISSON`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `UTILISATEUR`
--

DROP TABLE IF EXISTS `UTILISATEUR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `UTILISATEUR` (
  `idUTILISATEUR` int(11) NOT NULL AUTO_INCREMENT,
  `nomUTILISATEUR` varchar(250) NOT NULL,
  `prenomUTILISATEUR` varchar(250) NOT NULL,
  `dateNaissanceUTILISATEUR` datetime NOT NULL,
  `emailUTILISATEUR` varchar(250) NOT NULL,
  `pwdUTILISATEUR` varchar(250) NOT NULL,
  PRIMARY KEY (`idUTILISATEUR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `UTILISATEUR-BRASSERIE`
--

DROP TABLE IF EXISTS `UTILISATEUR-BRASSERIE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `UTILISATEUR-BRASSERIE` (
  `idUTILISATEUR-BRASSERIE` int(11) NOT NULL AUTO_INCREMENT,
  `FK_idUTILISATEUR` int(11) NOT NULL,
  `FK_idBRASSERIE` int(11) NOT NULL,
  `dateCreation` datetime NOT NULL,
  PRIMARY KEY (`idUTILISATEUR-BRASSERIE`),
  KEY `FK_idUTILISATEURBRASSERIE_idx` (`FK_idUTILISATEUR`),
  KEY `FK_idBRASSERIEUILISATEUR_idx` (`FK_idBRASSERIE`),
  CONSTRAINT `FK_idBRASSERIEUILISATEUR` FOREIGN KEY (`FK_idBRASSERIE`) REFERENCES `BRASSERIE` (`idBRASSERIE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_idUTILISATEURBRASSERIE` FOREIGN KEY (`FK_idUTILISATEUR`) REFERENCES `UTILISATEUR` (`idUTILISATEUR`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping events for database 'beerMeDb'
--

--
-- Dumping routines for database 'beerMeDb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-03 13:47:45
