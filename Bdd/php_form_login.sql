-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 04 fév. 2020 à 09:35
-- Version du serveur :  5.7.24
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `php_form_login`
--

-- --------------------------------------------------------

--
-- Structure de la table `users_registred`
--

CREATE TABLE `users_registred` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `passHash` varchar(254) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users_registred`
--

INSERT INTO `users_registred` (`id`, `pseudo`, `passHash`, `email`, `birthday`) VALUES
(1, 'C3PO', '$2y$16$S8cqtmNol/5FGPqNzHZ7zekVHKj62Sd2oS5uXVMPN3opIkarHrHfm', 'c3po@lucasfilm.us', '2020-02-02'),
(2, 'Adhemar', '$2y$16$QxjSKljjWuF2JswGLZIlMeU7BCY8jLGDv5qGs86NkYcqofWwGImVi', 'adhemar.entrombe@fri.fr', '2019-07-11'),
(3, 'Alain', '$2y$14$YRDE4HIxKFKQqyOyrfgrQORytjzdhOueZKATFviNCMvgnDr4999ri', 'alain.di@non.fr', '2020-02-02'),
(4, 'Anne', '$2y$14$lRaF5JqgNheOhJL1ebF4WemOtxP3AUJazF4ZsYmEbQ2eyRKfEglb.', 'anne.honime@mail.fr', '2020-02-02'),
(5, 'Bruno', '$2y$14$ZpUz4bF2.LHpvhKWISUCuezu1d83BVWoWfEz3MZxCsmlNKRsvjW/O', 'bruno.Zieuvair@mail.fr', '2020-02-02'),
(6, 'Renaud', '$2y$14$/GPIR1JXtCVgO.bE8IBecuhiyR0AL9rtU4DNBCTk6OwzG266iALxq', 'renaud.cinque@mail.com', '2020-02-02'),
(7, 'MarsAttack', '$2y$14$nrS0Yb7F7O5cRMUKSGKi7OwaVhZ9CaDtsgyuyVrZR.8FXoUwUKDBG', 'david.vincent@mail.com', '2020-02-02'),
(9, 'Georgio', '$2y$14$BSjSY2RTQePlU6m0GhMn5OQ5zpzTKT7SDPehovXgqv5v7/s1yMOv6', 'starwars@lucasfilm.us', '2020-02-02'),
(10, 'Hubert', '$2y$14$pe2bHATWh2KfUvetEU3Id.w5CwEq9f5RX.AGDWeomOzEs/FSgFO1u', 'hubertdelabatte@mail.fr', '2020-02-03'),
(12, 'R2D2', '$2y$14$lcPlYJJRVgOHj625InEvGuNSfPhF8O8nuQRdvBHNukA5CJlL2mIhW', 'r2d2@lucasfilm.us', '2020-02-03'),
(33, 'Justin', '$2y$14$JvXzYvQcWm6.Br0zJPeg7.alWx7f7lOF/2YpiTURK1f0JfrGQfF7q', 'justin.doigt@hic.fr', '2020-02-03'),
(40, 'Anne', '$2y$14$17NKiticRZnAEBsfXTo0nOZj8iRjOLX6rKKpB00BvezLn7UPzYUIO', 'anne@mail.fr', '2020-02-03'),
(41, 'BrettSinclair', '$2y$14$aSNNAro2PdDtzAHxia98M.4m9MNxSsRUqi6YEI5r0OCalfjTjHvea', 'lord.brett.sinclair@amical.uk', '2020-02-04'),
(42, 'DannyWilde', '$2y$14$h82aqT9WrEae8lmt0Dx/4u/fn1GgYMEV5VzC5jXy/Gy5iQa7Ws05u', 'daniel.wilde@amical.uk', '2020-02-04'),
(43, 'Fulton', '$2y$14$7DauGTPmE8ApT/Pj.UdqR.D4O0gBNj7iy5RsQNKOxBZRTk/eggjcm', 'juge.fulton@amical.uk', '2020-02-04'),
(71, 'James.T.Kurk', '$2y$14$kBdTaEOCkZyYsQYbQmef.eVtJbgLvNL.NXgZjkb0FlyKTnBnlzBDS', 'cpt.jameskurk@enterprise.us', '2020-02-04'),
(86, 'Spook', '$2y$14$3zU0gbOEU9eAufFNcelfrO6OFkiWVxHKH6EbNdSM1LL5lQRPCHseq', 'cpt.spook@enterprise.us', '2020-02-04');

-- --------------------------------------------------------

--
-- Structure de la table `user_connect`
--

CREATE TABLE `user_connect` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_connect`
--

INSERT INTO `user_connect` (`id`, `username`, `password`, `age`, `email`) VALUES
(111, 'Sarah', '123456', 22, 'sarah.biboche@mail.com'),
(147, 'Larry', 'auBeurre', 0, 'larry.cohvert@mail.com'),
(149, 'Laurent', 'abracadabra', 12, 'laurent.barre@mail.fr'),
(150, 'Marcel', 'surlaviande', 0, 'marcel.demer@mail.com'),
(151, 'Lorie', 'oreille', 0, 'lorie.culaire@mail.fr'),
(152, 'Mélanie', 'pastis51', 51, 'melanie.zetdanlever@hic.fr'),
(153, 'Akim', 'papiertoilette', 38, 'akim.fechier@mail.com'),
(156, 'Marc', 'sanglier', 47, 'marc.hassin@mail.fr'),
(158, 'Momo', 'motdepasse', 11, 'toto.mobile@gmail.fr'),
(159, 'Theo', 'sixGarettes', 63, 'theo.rifumeuse@mail.fr'),
(161, 'Jean', 'lequel?', 0, 'jean-peuplu@email.fr'),
(164, 'Vincent', 'jai1longueurdavance', 42, 'vincentTimetre@gratos.com'),
(174, 'Remy', '123', 15, 'remy.fasol@dingdong.eu'),
(177, 'Remy', 'centFamille', 10, 'remyCent@sdf.fr'),
(182, 'toto', 'motdepasse', 32, 'lequel@surprise.fr'),
(185, 'toto', 'ilyenapas', 12, 'passnull@toto.to'),
(186, 'Alex', 'porteFenetre', 0, 'alex.terieur@window.us'),
(187, 'Domi', 'music', 0, 'domi.fasollasi@mail.fr'),
(188, 'Hugue', 'indien', 0, 'thomas.hok@sioux.us');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users_registred`
--
ALTER TABLE `users_registred`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `user_connect`
--
ALTER TABLE `user_connect`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users_registred`
--
ALTER TABLE `users_registred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `user_connect`
--
ALTER TABLE `user_connect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
