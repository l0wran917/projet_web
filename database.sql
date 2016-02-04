-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: projetStage
-- ------------------------------------------------------
-- Server version	5.6.27-0ubuntu0.15.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary view structure for view `avis_stagiaire_v`
--

DROP TABLE IF EXISTS `avis_stagiaire_v`;
/*!50001 DROP VIEW IF EXISTS `avis_stagiaire_v`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `avis_stagiaire_v` AS SELECT 
 1 AS `idEtudiant`,
 1 AS `idTuteur`,
 1 AS `connaissance`,
 1 AS `organisation`,
 1 AS `initiative`,
 1 AS `perseverance`,
 1 AS `efficacite`,
 1 AS `interet`,
 1 AS `presentation`,
 1 AS `ponctualite`,
 1 AS `assiduite`,
 1 AS `expression`,
 1 AS `sociabilite`,
 1 AS `communication`,
 1 AS `embauche`,
 1 AS `raisonEmbauche`,
 1 AS `tuteurPresentSoutenance`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `constante`
--

DROP TABLE IF EXISTS `constante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `constante` (
  `id` int(10) unsigned NOT NULL,
  `valeur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `idEntreprise` int(10) unsigned NOT NULL,
  `type` int(10) unsigned NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idEntreprise`,`type`),
  CONSTRAINT `contact_identreprise_foreign` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `demandeAppariement`
--

DROP TABLE IF EXISTS `demandeAppariement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demandeAppariement` (
  `idEnseignant` int(10) unsigned NOT NULL,
  `idStage` int(10) unsigned NOT NULL,
  `status` int(11) NOT NULL DEFAULT '-1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idEnseignant`,`idStage`),
  KEY `demandeappariement_idstage_foreign` (`idStage`),
  CONSTRAINT `demandeappariement_idenseignant_foreign` FOREIGN KEY (`idEnseignant`) REFERENCES `tuteurEnseignant` (`idUtilisateur`),
  CONSTRAINT `demandeappariement_idstage_foreign` FOREIGN KEY (`idStage`) REFERENCES `stage` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `disponibilite`
--

DROP TABLE IF EXISTS `disponibilite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disponibilite` (
  `idUtilisateur` int(10) unsigned NOT NULL,
  `debutMinute` int(10) unsigned NOT NULL,
  `numJour` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idUtilisateur`,`debutMinute`,`numJour`),
  CONSTRAINT `disponibilite_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entreprise` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiant` (
  `idUtilisateur` int(10) unsigned NOT NULL,
  `tp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telEntrepriseEtudiant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailPerso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idUtilisateur`),
  CONSTRAINT `etudiant_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `etudiant_v`
--

DROP TABLE IF EXISTS `etudiant_v`;
/*!50001 DROP VIEW IF EXISTS `etudiant_v`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `etudiant_v` AS SELECT 
 1 AS `idEtudiant`,
 1 AS `tp`,
 1 AS `nom`,
 1 AS `prenom`,
 1 AS `email`,
 1 AS `emailPerso`,
 1 AS `dateNaissance`,
 1 AS `adresse`,
 1 AS `tel`,
 1 AS `telPortable`,
 1 AS `telEntrepriseEtudiant`,
 1 AS `typeUtilisateur`,
 1 AS `createdDateUser`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `stage`
--

DROP TABLE IF EXISTS `stage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idEtudiant` int(10) unsigned NOT NULL,
  `idTuteur` int(10) unsigned DEFAULT NULL,
  `idEnseignant` int(10) unsigned DEFAULT NULL,
  `sujet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `planAcces` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remunerationStage` int(11) NOT NULL DEFAULT '-1',
  `montantRemuneration` double(8,2) NOT NULL,
  `encadrageInformaticien` int(11) NOT NULL DEFAULT '-1',
  `appelInformaticien` int(11) NOT NULL DEFAULT '-1',
  `travailSeul` int(11) NOT NULL DEFAULT '-1',
  `tailleEquipe` int(11) NOT NULL DEFAULT '-1',
  `typeMateriel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `typeSysteme` int(11) NOT NULL DEFAULT '-1',
  `typeSystemeAutre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `langagesStage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `objetPrincipal` int(11) NOT NULL DEFAULT '-1',
  `objetPrincipalAutre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `satisactionStage` int(11) NOT NULL DEFAULT '-1',
  `pourquoiSatisaction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `satisactionObjectif` int(11) NOT NULL DEFAULT '-1',
  `pourquoiObjectif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `satisactionCours` int(11) NOT NULL DEFAULT '-1',
  `pourquoiCours` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apportStage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `niveauConnaissance` int(11) NOT NULL DEFAULT '-1',
  `niveauOrganisation` int(11) NOT NULL DEFAULT '-1',
  `niveauInitiative` int(11) NOT NULL DEFAULT '-1',
  `niveauPerseverance` int(11) NOT NULL DEFAULT '-1',
  `niveauEfficacite` int(11) NOT NULL DEFAULT '-1',
  `niveauInteret` int(11) NOT NULL DEFAULT '-1',
  `niveauPresentation` int(11) NOT NULL DEFAULT '-1',
  `niveauPonctualite` int(11) NOT NULL DEFAULT '-1',
  `niveauAssiduite` int(11) NOT NULL DEFAULT '-1',
  `niveauExpression` int(11) NOT NULL DEFAULT '-1',
  `niveauSociabilite` int(11) NOT NULL DEFAULT '-1',
  `niveauCommunication` int(11) NOT NULL DEFAULT '-1',
  `embaucheEtudiant` int(11) NOT NULL DEFAULT '-1',
  `embauchePourquoi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tuteurPresentSoutenance` int(11) NOT NULL DEFAULT '-1',
  `tuteurValide` tinyint(1) NOT NULL DEFAULT '0',
  `deplacementEnseignantVisite` int(11) NOT NULL DEFAULT '-1',
  `dateDeplacementEnseignantVisite` date DEFAULT NULL,
  `nomResponsableVisite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenomResponsableVisite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fonctionResponsableVisite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `encadrageInformaticienVisite` int(11) NOT NULL DEFAULT '-1',
  `appelInformaticienVisite` int(11) NOT NULL DEFAULT '-1',
  `travailSeulVisite` int(11) NOT NULL DEFAULT '-1',
  `tailleEquipeVisite` int(11) NOT NULL DEFAULT '-1',
  `objetPrincipalVisite` int(11) NOT NULL DEFAULT '-1',
  `objetPrincipalAutreVisite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avisTravailComportementVisite` int(11) NOT NULL DEFAULT '-1',
  `formationManquanteVisite` int(11) NOT NULL DEFAULT '-1',
  `formationManquanteDetailsVisite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avisStageVisite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `accueilNouveauxEtudiantVisite` int(11) NOT NULL DEFAULT '-1',
  `precautionAcceuilNouveauxVisite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `stage_idetudiant_foreign` (`idEtudiant`),
  KEY `stage_idtuteur_foreign` (`idTuteur`),
  KEY `stage_idenseignant_foreign` (`idEnseignant`),
  CONSTRAINT `stage_idenseignant_foreign` FOREIGN KEY (`idEnseignant`) REFERENCES `tuteurEnseignant` (`idUtilisateur`),
  CONSTRAINT `stage_idetudiant_foreign` FOREIGN KEY (`idEtudiant`) REFERENCES `etudiant` (`idUtilisateur`),
  CONSTRAINT `stage_idtuteur_foreign` FOREIGN KEY (`idTuteur`) REFERENCES `tuteur` (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `stage_v`
--

DROP TABLE IF EXISTS `stage_v`;
/*!50001 DROP VIEW IF EXISTS `stage_v`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `stage_v` AS SELECT 
 1 AS `idEtudiant`,
 1 AS `idStage`,
 1 AS `idEnseignant`,
 1 AS `idTuteurEntr`,
 1 AS `nomEtudiant`,
 1 AS `prenomEtudiant`,
 1 AS `emailEtudiant`,
 1 AS `telEtudiant`,
 1 AS `telPortableEtudiant`,
 1 AS `civilite`,
 1 AS `nomTuteur`,
 1 AS `prenomTuteur`,
 1 AS `emailTuteur`,
 1 AS `telTuteur`,
 1 AS `telPortableTuteur`,
 1 AS `nomEntreprise`,
 1 AS `rueEntreprise`,
 1 AS `codePostalEntreprise`,
 1 AS `villeEntreprise`,
 1 AS `sujet`,
 1 AS `planAcces`,
 1 AS `joursDispoRencontre`,
 1 AS `tuteurValide`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tuteur`
--

DROP TABLE IF EXISTS `tuteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tuteur` (
  `idUtilisateur` int(10) unsigned NOT NULL,
  `idEntreprise` int(10) unsigned DEFAULT NULL,
  `joursDispoRencontre` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idUtilisateur`),
  KEY `tuteur_identreprise_foreign` (`idEntreprise`),
  CONSTRAINT `tuteur_identreprise_foreign` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`id`),
  CONSTRAINT `tuteur_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tuteurEnseignant`
--

DROP TABLE IF EXISTS `tuteurEnseignant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tuteurEnseignant` (
  `idUtilisateur` int(10) unsigned NOT NULL,
  `joursDispoRencontre` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idUtilisateur`),
  CONSTRAINT `tuteurenseignant_idutilisateur_foreign` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `tuteur_v`
--

DROP TABLE IF EXISTS `tuteur_v`;
/*!50001 DROP VIEW IF EXISTS `tuteur_v`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `tuteur_v` AS SELECT 
 1 AS `idUtilisateur`,
 1 AS `idEntreprise`,
 1 AS `joursDispoRencontre`,
 1 AS `civiliteTuteur`,
 1 AS `nomTuteur`,
 1 AS `prenomTuteur`,
 1 AS `emailTuteur`,
 1 AS `telTuteur`,
 1 AS `telPortableTuteur`,
 1 AS `nomEntreprise`,
 1 AS `rueEntreprise`,
 1 AS `villeEntreprise`,
 1 AS `codePostalEntreprise`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaissance` date NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telPortable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `civilite` enum('0','1','2') COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=222 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping routines for database 'projetStage'
--

--
-- Final view structure for view `avis_stagiaire_v`
--

/*!50001 DROP VIEW IF EXISTS `avis_stagiaire_v`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`progWeb`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `avis_stagiaire_v` AS select `st`.`idEtudiant` AS `idEtudiant`,`st`.`idTuteur` AS `idTuteur`,`st`.`niveauConnaissance` AS `connaissance`,`st`.`niveauOrganisation` AS `organisation`,`st`.`niveauInitiative` AS `initiative`,`st`.`niveauPerseverance` AS `perseverance`,`st`.`niveauEfficacite` AS `efficacite`,`st`.`niveauInteret` AS `interet`,`st`.`niveauPresentation` AS `presentation`,`st`.`niveauPonctualite` AS `ponctualite`,`st`.`niveauAssiduite` AS `assiduite`,`st`.`niveauExpression` AS `expression`,`st`.`niveauSociabilite` AS `sociabilite`,`st`.`niveauCommunication` AS `communication`,`st`.`embaucheEtudiant` AS `embauche`,`st`.`embauchePourquoi` AS `raisonEmbauche`,`st`.`tuteurPresentSoutenance` AS `tuteurPresentSoutenance` from `stage` `st` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `etudiant_v`
--

/*!50001 DROP VIEW IF EXISTS `etudiant_v`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`progWeb`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `etudiant_v` AS select `u`.`id` AS `idEtudiant`,`et`.`tp` AS `tp`,`u`.`nom` AS `nom`,`u`.`prenom` AS `prenom`,`u`.`email` AS `email`,`et`.`emailPerso` AS `emailPerso`,`u`.`dateNaissance` AS `dateNaissance`,`u`.`adresse` AS `adresse`,`u`.`tel` AS `tel`,`u`.`telPortable` AS `telPortable`,`et`.`telEntrepriseEtudiant` AS `telEntrepriseEtudiant`,1 AS `typeUtilisateur`,`u`.`created_at` AS `createdDateUser` from (`etudiant` `et` join `utilisateur` `u`) where (`et`.`idUtilisateur` = `u`.`id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `stage_v`
--

/*!50001 DROP VIEW IF EXISTS `stage_v`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`progWeb`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `stage_v` AS select `st`.`idEtudiant` AS `idEtudiant`,`st`.`id` AS `idStage`,`st`.`idEnseignant` AS `idEnseignant`,`t`.`idUtilisateur` AS `idTuteurEntr`,`ue`.`nom` AS `nomEtudiant`,`ue`.`prenom` AS `prenomEtudiant`,`ue`.`email` AS `emailEtudiant`,`ue`.`tel` AS `telEtudiant`,`ue`.`telPortable` AS `telPortableEtudiant`,`u`.`civilite` AS `civilite`,`u`.`nom` AS `nomTuteur`,`u`.`prenom` AS `prenomTuteur`,`u`.`email` AS `emailTuteur`,`u`.`tel` AS `telTuteur`,`u`.`telPortable` AS `telPortableTuteur`,`e`.`nom` AS `nomEntreprise`,`e`.`rue` AS `rueEntreprise`,`e`.`cp` AS `codePostalEntreprise`,`e`.`ville` AS `villeEntreprise`,`st`.`sujet` AS `sujet`,`st`.`planAcces` AS `planAcces`,`t`.`joursDispoRencontre` AS `joursDispoRencontre`,`st`.`tuteurValide` AS `tuteurValide` from ((((`stage` `st` join `tuteur` `t`) join `entreprise` `e`) join `utilisateur` `u`) join `utilisateur` `ue`) where ((`st`.`idTuteur` = `t`.`idUtilisateur`) and (`t`.`idEntreprise` = `e`.`id`) and (`t`.`idUtilisateur` = `u`.`id`) and (`ue`.`id` = `st`.`idEtudiant`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `tuteur_v`
--

/*!50001 DROP VIEW IF EXISTS `tuteur_v`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`progWeb`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `tuteur_v` AS select `t`.`idUtilisateur` AS `idUtilisateur`,`t`.`idEntreprise` AS `idEntreprise`,`t`.`joursDispoRencontre` AS `joursDispoRencontre`,`u`.`civilite` AS `civiliteTuteur`,`u`.`nom` AS `nomTuteur`,`u`.`prenom` AS `prenomTuteur`,`u`.`email` AS `emailTuteur`,`u`.`tel` AS `telTuteur`,`u`.`telPortable` AS `telPortableTuteur`,`e`.`nom` AS `nomEntreprise`,`e`.`rue` AS `rueEntreprise`,`e`.`ville` AS `villeEntreprise`,`e`.`cp` AS `codePostalEntreprise` from ((`tuteur` `t` left join `entreprise` `e` on((`e`.`id` = `t`.`idEntreprise`))) join `utilisateur` `u`) where (`t`.`idUtilisateur` = `u`.`id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-29 12:29:16
