create database prenotazione;
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nomcl` varchar(50) NOT NULL,
  `Prenomcl` varchar(50) NOT NULL,
  `logincl` varchar(50) NOT NULL,
  `emailcl` varchar(50) NOT NULL,
  `mdpcl` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

