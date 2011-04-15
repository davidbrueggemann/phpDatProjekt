-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 17. Januar 2011 um 12:08
-- Server Version: 5.0.51
-- PHP-Version: 5.2.6-1+lenny9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Datenbank: `dbrueggemann_Webshop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Hersteller`
--

CREATE TABLE IF NOT EXISTS `Hersteller` (
  `ID_Hersteller` smallint(6) NOT NULL auto_increment,
  `Name` varchar(25) NOT NULL,
  `Web-Adresse` varchar(50) NOT NULL,
  `eMail` varchar(25) NOT NULL,
  PRIMARY KEY  (`ID_Hersteller`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `Hersteller`
--

INSERT INTO `Hersteller` (`ID_Hersteller`, `Name`, `Web-Adresse`, `eMail`) VALUES
(1, 'Hewlett Packard', 'www.hp.de', 'info@hp.de'),
(2, 'Siemens', 'www.siemens.de', 'support@siemens.de'),
(3, 'Medion', 'www.medion.de', 'support@medion.de');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Kategorie`
--

CREATE TABLE IF NOT EXISTS `Kategorie` (
  `ID_Kategorie` smallint(6) NOT NULL auto_increment,
  `Beschreibung` varchar(100) NOT NULL,
  PRIMARY KEY  (`ID_Kategorie`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `Kategorie`
--

INSERT INTO `Kategorie` (`ID_Kategorie`, `Beschreibung`) VALUES
(1, 'Scanner'),
(2, 'Monitore'),
(3, 'Drucker');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Kunde`
--

CREATE TABLE IF NOT EXISTS `Kunde` (
  `ID_Kunde` smallint(6) NOT NULL auto_increment,
  `Kennung` varchar(25) NOT NULL,
  `Vorname` varchar(25) NOT NULL,
  `Nachname` varchar(25) NOT NULL,
  `Strasse` varchar(50) NOT NULL,
  `PLZ` varchar(5) NOT NULL,
  `Ort` varchar(20) NOT NULL,
  `Kto.-nr` int(11) NOT NULL,
  `BLZ` int(11) NOT NULL,
  `Institut` varchar(25) NOT NULL,
  `Passwort` varchar(25) NOT NULL,
  PRIMARY KEY  (`ID_Kunde`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Daten für Tabelle `Kunde`
--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Produkt`
--

CREATE TABLE IF NOT EXISTS `Produkt` (
  `ID_Produkt` smallint(6) NOT NULL auto_increment,
  `Name` varchar(25) NOT NULL,
  `Beschreibung` varchar(100) NOT NULL,
  `Preis` double NOT NULL,
  `ID_Hersteller` smallint(6) NOT NULL,
  `ID_Kategorie` smallint(6) NOT NULL,
  PRIMARY KEY  (`ID_Produkt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Daten für Tabelle `Produkt`
--

INSERT INTO `Produkt` (`ID_Produkt`, `Name`, `Beschreibung`, `Preis`, `ID_Hersteller`, `ID_Kategorie`) VALUES
(1, 'HP ScanJet3300C', 'Flachbettscanner', 99, 0, 0),
(2, 'HP ScanJet 2220A', 'Flachbettscanner', 56, 0, 0),
(3, 'HP LaserJet 3477C', 'Laserdrucker', 299, 0, 0),
(4, 'HP LaserJet 7769C', 'Farblaserdrucker', 1590, 0, 0),
(5, 'MD 1772 JC', 'Monitor', 150, 0, 0),
(6, 'MD 6155 AH', '17 Zoll TFT Bildschirm', 350, 0, 0),
(7, 'MD 1334 S', 'Flachbettscanner', 65, 0, 0),
(8, 'MD 2443 S', 'Flachbettscanner', 76, 0, 0),
(9, 'SI 1221 C', '19 Zoll Monitor', 200, 0, 0),
(10, 'SI 7822 TFT', '21 Zoll TFT-Monitor', 569, 0, 0),
(11, 'SI P 3244', 'DIN A1 Plotter', 1590, 0, 0),
(12, 'SI D1121 C', 'Farblaserdrucker', 547, 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Rechnung`
--

CREATE TABLE IF NOT EXISTS `Rechnung` (
  `ID_Rechnung` smallint(6) NOT NULL auto_increment,
  `Datum` date NOT NULL,
  `Uhrzeit` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `ID_Kunde` smallint(6) NOT NULL,
  PRIMARY KEY  (`ID_Rechnung`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Daten für Tabelle `Rechnung`
--

