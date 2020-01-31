-- phpMyAdmin SQL Dump
-- version 2.6.0-pl3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Erstellungszeit: 23. Januar 2005 um 15:07
-- Server Version: 4.1.8
-- PHP-Version: 5.0.3
-- 
-- Datenbank: `verein3_innodb`
-- 

-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `spieler`
-- 

CREATE TABLE `spieler` (
  `SPIELERNR` int(11) NOT NULL default '0',
  `NAME` varchar(40) collate latin1_general_ci NOT NULL default '',
  `VORNAME` varchar(40) collate latin1_general_ci default NULL,
  `TITEL` varchar(8) collate latin1_general_ci default NULL,
  `GEBOREN` datetime default NULL,
  `GESCHLECHT` char(1) collate latin1_general_ci default NULL,
  `BEITRITT` datetime default NULL,
  `STRASSE` varchar(40) collate latin1_general_ci default NULL,
  `HAUSNR` varchar(5) collate latin1_general_ci default NULL,
  `PLZ` varchar(6) collate latin1_general_ci default NULL,
  `ORT` varchar(40) collate latin1_general_ci default NULL,
  `TELEFON` varchar(50) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`SPIELERNR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Daten für Tabelle `spieler`
-- 

INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (2, 'Elfers', 'Rainer', NULL, '1981-12-09 00:00:00', 'M', '1969-05-01 00:00:00', 'Stadtring', '43', '40348', 'Düsseldorf', '0211-237893');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (6, 'Peters', 'Robert', NULL, '1981-05-04 00:00:00', 'M', '1992-05-03 00:00:00', 'Hafenallee', '80', '40234', 'Düsseldorf', '0211-476537');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (7, 'Wiegand', 'Günther', NULL, '1971-08-26 00:00:00', 'M', '1975-12-05 00:00:00', 'Erasmusweg', '39', '40648', 'Düsseldorf', '0211-347689');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (8, 'Neuhaus', 'Berta', NULL, '1979-09-05 00:00:00', 'W', '1996-06-01 00:00:00', 'Sporenallee', '4', '40304', 'Ratingen', '02102-45845');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (27, 'Kohl', 'Dagmar', NULL, '1962-11-14 00:00:00', 'W', '1980-08-01 00:00:00', 'Luisenpfad', '84', '40051', 'Meerbusch', '02105-23485');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (28, 'Kohl', 'Claudia', NULL, '1958-05-01 00:00:00', 'W', '1979-03-01 00:00:00', 'Domplatz', '10', '40402', 'Neuss', '02101-65959');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (39, 'Bischof', 'Dennis', NULL, '1959-01-09 00:00:00', 'M', '1975-11-01 00:00:00', 'Erikaplatz', '78', '40876', 'Düsseldorf', '0211-393435');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (44, 'Bürger', 'Egon', 'Dr.', '1980-04-03 00:00:00', 'M', '1989-04-01 00:00:00', 'Lichtenstra?', '23', '40323', 'Ratingen', '02102-36875');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (57, 'Bürgern', 'Manfred', 'von', '1984-12-19 00:00:00', 'M', '1993-09-01 00:00:00', 'Erasmusweg', '16', '40989', 'Düsseldorf', '0211-473458');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (83, 'Hofmann', 'Philipp', NULL, '1973-04-03 00:00:00', 'M', '1990-02-01 00:00:00', 'Marienufer', '16', '40127', 'Düsseldorf', '0211-353548');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (95, 'Müller', 'Paul', NULL, '1976-07-09 00:00:00', 'M', '1995-02-01 00:00:00', 'Hauptweg', '33', '40101', 'Hilden', '02103-86745');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (100, 'Peters', 'Franz', NULL, '1973-05-03 00:00:00', 'M', '1995-02-01 00:00:00', 'Hafenallee', '80', '40756', 'Düsseldorf', '02103-86756');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (104, 'Maurer', 'Doris', NULL, '1980-09-03 00:00:00', 'W', '1988-11-01 00:00:00', 'Stutenallee', '65', '40053', 'Meerbusch', '02105-98757');
INSERT INTO `spieler` (`SPIELERNR`, `NAME`, `VORNAME`, `TITEL`, `GEBOREN`, `GESCHLECHT`, `BEITRITT`, `STRASSE`, `HAUSNR`, `PLZ`, `ORT`, `TELEFON`) VALUES (112, 'Bauer', 'Irene', 'von', '1980-12-19 00:00:00', 'W', '1996-06-01 00:00:00', 'Fuchsweg', '8', '41501', 'Krefeld', '02151-54874');

-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `strafen`
-- 

CREATE TABLE `strafen` (
  `ZAHLUNGSNR` int(11) default NULL,
  `SPIELERNR` int(11) NOT NULL default '0',
  `DATUM` datetime default NULL,
  `BETRAG` decimal(18,4) default NULL,
  KEY `B556A64745B54B4A35DEC16B9C` (`SPIELERNR`),
  KEY `IX_STRAFENKEY0` (`SPIELERNR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Daten für Tabelle `strafen`
-- 

INSERT INTO `strafen` (`ZAHLUNGSNR`, `SPIELERNR`, `DATUM`, `BETRAG`) VALUES (1, 27, '1996-09-10 00:00:00', 100.0000);
INSERT INTO `strafen` (`ZAHLUNGSNR`, `SPIELERNR`, `DATUM`, `BETRAG`) VALUES (2, 27, '1996-11-12 00:00:00', 75.0000);
INSERT INTO `strafen` (`ZAHLUNGSNR`, `SPIELERNR`, `DATUM`, `BETRAG`) VALUES (3, 6, '2005-07-08 00:00:00', 100.0000);
INSERT INTO `strafen` (`ZAHLUNGSNR`, `SPIELERNR`, `DATUM`, `BETRAG`) VALUES (4, 104, '1996-12-08 00:00:00', 50.0000);
INSERT INTO `strafen` (`ZAHLUNGSNR`, `SPIELERNR`, `DATUM`, `BETRAG`) VALUES (5, 44, '1996-12-08 00:00:00', 25.0000);
INSERT INTO `strafen` (`ZAHLUNGSNR`, `SPIELERNR`, `DATUM`, `BETRAG`) VALUES (6, 8, '1996-12-08 00:00:00', 25.0000);
INSERT INTO `strafen` (`ZAHLUNGSNR`, `SPIELERNR`, `DATUM`, `BETRAG`) VALUES (7, 44, '1996-12-30 00:00:00', 30.0000);
INSERT INTO `strafen` (`ZAHLUNGSNR`, `SPIELERNR`, `DATUM`, `BETRAG`) VALUES (8, 44, '2005-06-05 00:00:00', 75.0000);

-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `teams`
-- 

CREATE TABLE `teams` (
  `TEAMNR` int(11) NOT NULL default '0',
  `SPIELERNR` int(11) default NULL,
  `LIGA` varchar(40) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`TEAMNR`),
  KEY `TEAMSSPIELERNR3` (`SPIELERNR`),
  KEY `IX_TEAMSKEY1` (`SPIELERNR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Daten für Tabelle `teams`
-- 

INSERT INTO `teams` (`TEAMNR`, `SPIELERNR`, `LIGA`) VALUES (1, 6, 'Bundesliga');
INSERT INTO `teams` (`TEAMNR`, `SPIELERNR`, `LIGA`) VALUES (2, 27, 'Regionalliga');

-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `wettkaempfe`
-- 

CREATE TABLE `wettkaempfe` (
  `TEAMNR` int(11) NOT NULL default '0',
  `SPIELERNR` int(11) NOT NULL default '0',
  `GEWONNEN` int(11) default NULL,
  `VERLOREN` int(11) default NULL,
  PRIMARY KEY  (`TEAMNR`,`SPIELERNR`),
  KEY `D6DCE74B17B24B677E2F51185C` (`SPIELERNR`),
  KEY `TEAMSWETTKMPFE5` (`TEAMNR`),
  KEY `IX_WETTKMPFEKEY0` (`SPIELERNR`),
  KEY `IX_WETTKMPFEKEY2` (`TEAMNR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Daten für Tabelle `wettkaempfe`
-- 

INSERT INTO `wettkaempfe` (`TEAMNR`, `SPIELERNR`, `GEWONNEN`, `VERLOREN`) VALUES (1, 2, 4, 8);
INSERT INTO `wettkaempfe` (`TEAMNR`, `SPIELERNR`, `GEWONNEN`, `VERLOREN`) VALUES (1, 6, 9, 1);
INSERT INTO `wettkaempfe` (`TEAMNR`, `SPIELERNR`, `GEWONNEN`, `VERLOREN`) VALUES (1, 8, 0, 1);
INSERT INTO `wettkaempfe` (`TEAMNR`, `SPIELERNR`, `GEWONNEN`, `VERLOREN`) VALUES (1, 44, 7, 5);
INSERT INTO `wettkaempfe` (`TEAMNR`, `SPIELERNR`, `GEWONNEN`, `VERLOREN`) VALUES (1, 57, 5, 0);
INSERT INTO `wettkaempfe` (`TEAMNR`, `SPIELERNR`, `GEWONNEN`, `VERLOREN`) VALUES (1, 83, 3, 3);
INSERT INTO `wettkaempfe` (`TEAMNR`, `SPIELERNR`, `GEWONNEN`, `VERLOREN`) VALUES (2, 8, 4, 4);
INSERT INTO `wettkaempfe` (`TEAMNR`, `SPIELERNR`, `GEWONNEN`, `VERLOREN`) VALUES (2, 27, 11, 2);
INSERT INTO `wettkaempfe` (`TEAMNR`, `SPIELERNR`, `GEWONNEN`, `VERLOREN`) VALUES (2, 104, 8, 4);
INSERT INTO `wettkaempfe` (`TEAMNR`, `SPIELERNR`, `GEWONNEN`, `VERLOREN`) VALUES (2, 112, 4, 8);

-- 
-- Constraints der exportierten Tabellen
-- 

-- 
-- Constraints der Tabelle `strafen`
-- 
ALTER TABLE `strafen`
  ADD CONSTRAINT `strafen_ibfk_1` FOREIGN KEY (`SPIELERNR`) REFERENCES `spieler` (`SPIELERNR`);

-- 
-- Constraints der Tabelle `teams`
-- 
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`SPIELERNR`) REFERENCES `spieler` (`SPIELERNR`);

-- 
-- Constraints der Tabelle `wettkaempfe`
-- 
ALTER TABLE `wettkaempfe`
  ADD CONSTRAINT `wettkaempfe_ibfk_1` FOREIGN KEY (`SPIELERNR`) REFERENCES `spieler` (`SPIELERNR`),
  ADD CONSTRAINT `wettkaempfe_ibfk_2` FOREIGN KEY (`TEAMNR`) REFERENCES `teams` (`TEAMNR`);
        
