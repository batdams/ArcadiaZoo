-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 juin 2024 à 10:06
-- Version du serveur : 11.3.2-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `arcadia_zoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE `animal` (
  `animal_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `breed_id` int(11) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `diet` varchar(50) NOT NULL,
  `habitat_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`animal_id`, `name`, `breed_id`, `img_path`, `diet`, `habitat_id`, `description`) VALUES
(1, 'Lion', 1, '../public/pictures/animals/lion.jpg', 'carnivore', 1, 'Le lion, puissant félin avec une crinière majestueuse, vit en groupes en Afrique. Prédateur social, il chasse en groupe pour capturer des proies comme les antilopes et les zèbres.'),
(2, 'Léopard', 1, '../public/pictures/animals/leopard.jpg', 'carnivore', 1, 'Le léopard est un félin majestueux, reconnu pour sa puissance, son agilité et ses rosettes distinctives. Chasseur nocturne, il s\'adapte à divers habitats, du désert aux forêts tropicales.'),
(3, 'Guépard', 1, '../public/pictures/animals/guepard.jpg', 'carnivore', 1, 'Le guépard, félin le plus rapide, atteint 110 km/h. Sa silhouette élancée et ses taches noires distinctives en font un chasseur redoutable, spécialisé dans les grandes plaines d\'Afrique.'),
(4, 'Eléphant d\'Afrique', 2, '../public/pictures/animals/elephant.jpg', 'herbivore', 1, 'L\'éléphant d\'Afrique, le plus grand mammifère terrestre, est reconnu pour ses grandes oreilles et sa trompe polyvalente. Intelligent et social, il vit en groupes et joue un rôle crucial dans son écosystème.'),
(5, 'Girafe', 3, '../public/pictures/animals/girafe.jpg', 'herbivore', 1, 'La girafe, le plus grand animal terrestre, est célèbre pour son long cou et ses motifs uniques. Herbivore, elle se nourrit principalement de feuilles d\'acacia et vit en groupes dans les savanes africaines.'),
(6, 'Zèbre', 9, '../public/pictures/animals/zebre.jpg', 'herbivore', 1, 'Le zèbre, avec ses rayures noires et blanches uniques, vit en troupeaux dans les savanes africaines. Herbivore, il se nourrit d\'herbes et joue un rôle crucial dans l\'écosystème en facilitant la régénération des pâturages.'),
(7, 'Gnou', 10, '../public/pictures/animals/gnou.jpg', 'herbivore', 1, 'Le gnou, herbivore robuste des savanes africaines, est célèbre pour ses migrations spectaculaires en grands troupeaux. Doté de cornes incurvées, il joue un rôle essentiel dans l\'équilibre de l\'écosystème.'),
(8, 'Hyène', 11, '../public/pictures/animals/hyene.jpg', 'carnivore', 1, 'La hyène, carnivore des savanes africaines, est reconnue pour son rire caractéristique et son endurance exceptionnelle. Vivant en clans, elle joue un rôle crucial dans l\'écosystème en nettoyant les carcasses.'),
(9, 'Chimpanzé', 4, '../public/pictures/animals/chimpanzee.jpg', 'omnivore', 2, 'Le chimpanzé, primate intelligent et social, habite les forêts tropicales d\'Afrique. Connu pour ses comportements complexes et son usage d\'outils, il vit en groupes structurés et partage 98% de son ADN avec l\'humain.'),
(10, 'Tigre', 1, '../../../public/pictures/animals/tigre.jpg', 'Carnivore', 2, 'Le tigre, grand félin rayé, est un chasseur solitaire puissant. Il vit principalement en Asie, dans divers habitats, des forêts aux marécages.'),
(11, 'Perroquet', 12, '../../../public/pictures/animals/perroquet.jpg', 'Herbivore', 2, 'Le perroquet, oiseau coloré et intelligent, est célèbre pour sa capacité à imiter les sons. Il habite principalement les forêts tropicales.'),
(12, 'Éléphant d\'Asie', 2, '../../../public/pictures/animals/elephant_asie.jpg', 'Herbivore', 2, 'L\'éléphant d\'Asie, plus petit que son cousin d\'Afrique, vit dans les forêts tropicales et les prairies d\'Asie du Sud-Est. C\'est un herbivore social et intelligent, essentiel à son écosystème.'),
(13, 'Tapir', 16, '../../../public/pictures/animals/tapir.jpg', 'Herbivore', 2, 'Le tapir, mammifère herbivore au corps massif et à la trompe préhensile, vit dans les forêts tropicales d\'Amérique du Sud et d\'Asie du Sud-Est. Il joue un rôle important en dispersant les graines.'),
(14, 'Paresseux', 5, '../../../public/pictures/animals/paresseux.jpg', 'Herbivore', 2, 'Le paresseux, mammifère arboricole lent, vit dans les forêts tropicales d\'Amérique. Il est connu pour son mode de vie tranquille et suspendu.'),
(15, 'Serpent', 14, '../../../public/pictures/animals/serpent.jpg', 'Carnivore', 2, 'Le serpent, reptile sans pattes, est un prédateur silencieux et adaptable. Il vit dans divers habitats, des déserts aux forêts tropicales.'),
(16, 'Gorille', 4, '../../../public/pictures/animals/gorille.jpg', 'Herbivore', 2, 'Le gorille, grand primate social, vit dans les forêts tropicales africaines. Il est connu pour sa force, son intelligence et ses comportements sociaux.'),
(18, 'Crocodile', 13, '../../../public/pictures/animals/crocodile.jpg', 'Carnivore', 3, 'Le crocodile, grand reptile semi-aquatique, est un prédateur redoutable des rivières et marécages tropicaux. Il a une peau épaisse et des mâchoires puissantes.'),
(19, 'Héron cendré', 17, '../../../public/pictures/animals/heron_cendre.jpg', 'Piscivore', 3, 'L\'héron cendré est un grand échassier qui chasse dans les eaux peu profondes des marais et des étangs.'),
(20, 'Alligator', 18, '../../../public/pictures/animals/alligator.jpg', 'Carnivore', 3, 'L\'alligator est un grand reptile semi-aquatique des marais et des zones humides, connu pour sa morsure puissante et sa peau écailleuse.'),
(21, 'Tortue de Floride', 19, '../../../public/pictures/animals/tortue_floride.jpg', 'Omnivore', 3, 'La tortue de Floride est une espèce d\'eau douce souvent trouvée dans les marais et les lacs. Elle se nourrit d\'une variété de plantes et de petits animaux.'),
(22, 'Aigrette garzette', 20, '../../../public/pictures/animals/aigrette_garzette.jpg', 'Piscivore', 3, 'L\'aigrette garzette est un échassier élégant qui se nourrit de poissons et d\'insectes aquatiques dans les marais et les étangs.'),
(23, 'Ragondin', 21, '../../../public/pictures/animals/ragondin.jpg', 'Herbivore', 3, 'Le ragondin est un gros rongeur semi-aquatique que l\'on trouve souvent dans les marais et les zones humides, où il se nourrit de plantes aquatiques.'),
(24, 'Grenouille taureau', 22, '../../../public/pictures/animals/grenouille_taureau.jpg', 'Carnivore', 3, 'La grenouille taureau est une espèce de grenouille aquatique robuste présente dans les marais et les étangs, où elle se nourrit de petits animaux et d\'insectes.'),
(26, 'Sanglier', 24, '../../../public/pictures/animals/sanglier.jpg', 'Omnivore', 3, 'Le sanglier est un mammifère robuste que l\'on trouve parfois dans les marais, où il se nourrit de racines, de plantes et de petits animaux.');

-- --------------------------------------------------------

--
-- Structure de la table `app_user`
--

CREATE TABLE `app_user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `app_user`
--

INSERT INTO `app_user` (`user_id`, `email`, `password`, `firstname`, `lastname`, `role_id`) VALUES
(1, 'josebu@arcadia.com', '$2y$10$zS62lQI46h0yryQ6riYDDehZvGqMwWKUD8gktKxm.Y4.jK18/09rm', 'jose', 'bu', 1),
(2, 'vetTest@arcadia.com', '$2y$10$dOKz7KHZH6S1PXACs0UME.x/3cjvtBnWrSOehQQSocDeXAuNEqAfi', 'alba', 'tros', 2),
(3, 'employeeTest@arcadia.com', '$2y$10$dOKz7KHZH6S1PXACs0UME.x/3cjvtBnWrSOehQQSocDeXAuNEqAfi', 'benji', 'rafe', 3),
(5, 'neterroze@arcadia.com', '$2y$10$k5oewnZG/AbZtXDnGvs9xONPjjoGk/h8C47AeMwfkdn.EFcUScsE2', 'neterro', 'ze', 2),
(6, 'pinanulau@arcadia.com', '$2y$10$8RPxG.aiEO9VPEnfIoUTjOuMESMT/.9mvWi/HWFqPlrtf5m5KUAKe', 'pinanu', 'lau', 3),
(7, 'david.swiatkiewiez@arcadia.com', '$2y$10$wegK.bU1mf2VsfCYAiW5t.5mzzyYH/wUL3/UtVB9DJrGyEKly3NPq', 'david', 'swiatkiewiez', 1);

-- --------------------------------------------------------

--
-- Structure de la table `breed`
--

CREATE TABLE `breed` (
  `breed_id` int(11) NOT NULL,
  `breed_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `breed`
--

INSERT INTO `breed` (`breed_id`, `breed_name`) VALUES
(1, 'Félidé'),
(2, 'Éléphantidé'),
(3, 'Giraffidé'),
(4, 'Hominidés'),
(5, 'Mégalonychidés'),
(6, 'Alligatoridae'),
(7, 'Ardéidés'),
(8, 'Cricétidés'),
(9, 'Equidé'),
(10, 'Bovidé'),
(11, 'Hyénidé'),
(12, 'Psittacidés'),
(13, 'Crocodylidés'),
(14, 'Colubridés'),
(15, 'Falconidés'),
(16, 'Tapiridés'),
(17, 'Ardeidés'),
(18, 'Crocodylidés'),
(19, 'Émydidés'),
(20, 'Ardeidés'),
(21, 'Myocastoridés'),
(22, 'Ranidés'),
(23, 'Cyprinidés'),
(24, 'Suidés');

-- --------------------------------------------------------

--
-- Structure de la table `habitat`
--

CREATE TABLE `habitat` (
  `habitat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `habitat`
--

INSERT INTO `habitat` (`habitat_id`, `name`, `img_path`, `description`) VALUES
(1, 'Savane', '../../../public/pictures/habitats/savannah.jpg', 'Vaste plaine herbeuse parsemée de quelques arbres et arbustes, caractérisée par un climat tropical avec des saisons bien distinctes, offrant un habitat unique pour une diversité impressionnante d\'animaux sauvages.'),
(2, 'Jungle', '../../../public/pictures/habitats/jungle.jpg', 'La jungle est une forêt dense et luxuriante, riche en biodiversité, où des plantes exubérantes et une faune variée prospèrent dans un climat humide et chaud.'),
(3, 'Marais', '../../../public/pictures/habitats/swamp.jpg', 'Le marais est un habitat humide et riche en biodiversité, caractérisé par des eaux stagnantes et une végétation dense. C\'est un refuge pour une faune variée, allant des amphibiens et reptiles aux oiseaux et mammifères, qui trouvent nourriture et abri dans ce milieu aquatique.');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'vet'),
(3, 'employee');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`service_id`, `title`, `img_path`, `description`, `create_at`, `updated_at`) VALUES
(8, 'Visite guidée', '../public/pictures/services/womenMap.jpg', 'Découvrez notre zoo avec notre <b>service de visite gratuit</b>, accompagné d’un guide passionné. Profitez de cette opportunité pour en apprendre davantage sur nos animaux et leurs habitats, une expérience enrichissante et éducative.', '2024-06-03 13:39:49', '2024-06-03 13:39:49'),
(9, 'Train', '../public/pictures/services/anticTrain.jpg', 'Explorez notre zoo de manière ludique avec notre <b>service de visite en petit train</b>. Embarquez pour un parcours captivant qui vous permettra d\'admirer nos animaux dans leurs espaces tout en vous amusant et en découvrant des lieux fascinants.', '2024-06-03 13:41:45', '2024-06-03 13:41:45'),
(11, 'Restaurant', '../../../public/pictures/services/restaurant.jpg', 'Une simple halte ? Une pause plus longue ? Profitez d\'une expérience culinaire adaptée à votre envie. Que vous optiez pour une collation rapide ou un repas plus complet, <b>notre service de restauration</b> propose une cuisine simple mais délicieuse.', '2024-06-04 14:35:34', '2024-06-04 14:35:34');

-- --------------------------------------------------------

--
-- Structure de la table `view`
--

CREATE TABLE `view` (
  `view_id` int(11) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `view_message` text NOT NULL,
  `is_valide` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `view`
--

INSERT INTO `view` (`view_id`, `nickname`, `view_message`, `is_valide`) VALUES
(1, 'Zachari Bou', 'Super moment en famille au zoo d\'Arcadia. Les espaces sont immenses, les animaux sont magnifiques à voir dans leurs habitats naturels.', 1),
(2, 'Victor Anoutan', 'Quel merveilleux parc ! Nous avons profité d\'un séjour en Bretagne pour visiter le parc et y avons passé un excellent moment ! J\'ai adoré l\'enclos des hominidés, ils semblent si semblables a nous!', 1),
(3, 'Alba Tros', '2 jours à arpenter le parc, découvrir des animaux, leur habitat naturel et les mesures de sauvegarde et de préservation de la nature. Nous repartons changés sur notre vision de l\'écologie et notre rapport aux animaux.', 0),
(4, 'Natalie Gator', 'Le zoo d\'Arcadia offre une expérience captivante et éducative pour les visiteurs de tous âges. J\'ai particulièrement apprécié l\'habitat des alligators, qui est bien conçu pour permettre une observation rapprochée de ces fascinants reptiles.', 0),
(5, 'Aragon Din', 'Arcadia est un endroit idéal pour les amoureux de la nature et ceux qui veulent en apprendre davantage sur la diversité des espèces animales. Le personnel est également très instructif, fournissant des informations intéressantes sur le comportement des animaux et leur conservation. ', 0),
(6, 'Rodrigué Pard', 'Le zoo d\'Arcadia est un véritable modèle d\'engagement envers l\'écologie et la conservation. J\'ai été impressionné par leurs efforts pour sensibiliser les visiteurs à la protection des habitats naturels et à la biodiversité.', 0);

-- --------------------------------------------------------

--
-- Structure de la table `zoo_hours`
--

CREATE TABLE `zoo_hours` (
  `hours_id` int(11) NOT NULL,
  `day_of_week` int(11) NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `zoo_hours`
--

INSERT INTO `zoo_hours` (`hours_id`, `day_of_week`, `opening_time`, `closing_time`) VALUES
(1, 0, '09:00:00', '19:00:00'),
(2, 1, '09:00:00', '19:00:00'),
(3, 2, '09:00:00', '19:00:00'),
(4, 3, '09:00:00', '19:00:00'),
(5, 4, '09:00:00', '19:00:00'),
(6, 5, '09:00:00', '19:00:00'),
(7, 6, '10:00:00', '20:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`animal_id`),
  ADD KEY `habitat_id` (`habitat_id`),
  ADD KEY `breed_id` (`breed_id`);

--
-- Index pour la table `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Index pour la table `breed`
--
ALTER TABLE `breed`
  ADD PRIMARY KEY (`breed_id`);

--
-- Index pour la table `habitat`
--
ALTER TABLE `habitat`
  ADD PRIMARY KEY (`habitat_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Index pour la table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`view_id`);

--
-- Index pour la table `zoo_hours`
--
ALTER TABLE `zoo_hours`
  ADD PRIMARY KEY (`hours_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animal`
--
ALTER TABLE `animal`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `app_user`
--
ALTER TABLE `app_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `breed`
--
ALTER TABLE `breed`
  MODIFY `breed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `habitat`
--
ALTER TABLE `habitat`
  MODIFY `habitat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `view`
--
ALTER TABLE `view`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `zoo_hours`
--
ALTER TABLE `zoo_hours`
  MODIFY `hours_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`habitat_id`) REFERENCES `habitat` (`habitat_id`),
  ADD CONSTRAINT `animal_ibfk_2` FOREIGN KEY (`breed_id`) REFERENCES `breed` (`breed_id`);

--
-- Contraintes pour la table `app_user`
--
ALTER TABLE `app_user`
  ADD CONSTRAINT `app_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
