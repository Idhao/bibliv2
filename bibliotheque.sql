-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 22 mai 2020 à 11:58
-- Version du serveur :  8.0.19
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliothèque`
--

-- --------------------------------------------------------

--
-- Structure de la table `Auteur`
--

CREATE TABLE `Auteur` (
  `idPersonne` int NOT NULL,
  `idLivre` varchar(15) NOT NULL,
  `idRole` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Auteur`
--

INSERT INTO `Auteur` (`idPersonne`, `idLivre`, `idRole`) VALUES
(1, '2264069112', 1),
(3, '2264069112', 2),
(4, '2264069112', 3),
(1, '2264056002', 1),
(1, '2264056169', 1),
(6, '203585573X', 1),
(5, '208127857X', 1),
(5, '2253163503', 1),
(6, '2253041475', 1),
(8, '2253160466', 1),
(8, '2253038741', 1),
(8, '2253037923', 1),
(2, '2035867916', 1),
(9, '2070373096', 1),
(10, '2081219972', 1),
(11, '2266152182', 1),
(12, '2266152182', 3),
(13, '2809710562', 1),
(14, '2809710562', 3),
(15, '2809710562', 3),
(16, '2266203533', 4),
(17, '096573840X', 1),
(18, '207036822X', 1),
(19, '2266232991', 1),
(20, '2070411613', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Editeur`
--

CREATE TABLE `Editeur` (
  `id` int NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Editeur`
--

INSERT INTO `Editeur` (`id`, `libelle`) VALUES
(1, 'Belfond'),
(2, 'Flammarion'),
(3, 'Librio'),
(4, 'Pocket'),
(5, 'Larousse'),
(6, 'Le livre de poche'),
(7, 'Folio Théâtre'),
(8, 'Philippe Picquier'),
(9, 'Guardian');

-- --------------------------------------------------------

--
-- Structure de la table `Genre`
--

CREATE TABLE `Genre` (
  `id` int NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Genre`
--

INSERT INTO `Genre` (`id`, `libelle`) VALUES
(4, 'Essai'),
(3, 'Nouvelle'),
(5, 'Poésie'),
(2, 'Roman'),
(1, 'Théâtre');

-- --------------------------------------------------------

--
-- Structure de la table `Langue`
--

CREATE TABLE `Langue` (
  `id` int NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Langue`
--

INSERT INTO `Langue` (`id`, `libelle`) VALUES
(1, 'Anglais'),
(2, 'Français'),
(3, 'Japonais'),
(4, 'Espagnol'),
(5, 'Italien');

-- --------------------------------------------------------

--
-- Structure de la table `Livre`
--

CREATE TABLE `Livre` (
  `isbn` varchar(15) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `editeur` int NOT NULL,
  `annee` int DEFAULT NULL,
  `genre` int DEFAULT NULL,
  `langue` int DEFAULT NULL,
  `nbpages` int DEFAULT NULL,
  `resume` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `stocks` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Livre`
--

INSERT INTO `Livre` (`isbn`, `titre`, `editeur`, `annee`, `genre`, `langue`, `nbpages`, `resume`, `stocks`) VALUES
('096573840X', 'A short history of Nearly Everything', 9, 2003, 4, 1, NULL, 'Une histoire de tout, ou presque... est un livre de Bill Bryson expliquant le développement de plusieurs domaines de la science tels que la chimie, la paléontologie, l\'astronomie et la physique des particules. Il explore l\'époque depuis le Big Bang jusqu\'à la découverte de la mécanique quantique, en passant par l\'évolution et la géologie.\r\n\r\nBryson nous raconte l\'histoire de la science à travers l\'histoire des personnes qui ont fait les découvertes, et de nombreuses anecdotes.', 4),
('203585573X', 'Ruy Blas', 2, 1838, 1, 2, 270, 'Peut-on aimer une reine quand on n\'est qu\'un valet? L\'amour peut-il triompher des différences sociales? \r\nHugo met en scène ce défi dans Ruy Blas en 1838 et inscrit l\'histoire d\'amour dans une machination. \r\nLe valet Ruy Blas s\'introduit en effet auprès de la reine aimée, mais grâce à une imposture conduite par un maître vengeur. \r\nPassion impossible, violence, trahison et pardon final... Le drame romantique mène jusqu\'à leur paroxysme les situations, le langage et l\'émotion.', 4),
('2035867916', 'L\'illusion comique', 6, 1639, 1, 2, NULL, 'Dans L\'Illusion comique, en 1636, Corneille met en scène Pridamant, un père à la recherche de son fils, Clindor. \r\nIl assiste, grâce au magicien Alcandre, à la représentation des aventures mouvementées de cet enfant prodigue. \r\nÀ chaque acte, on change de registre. Péripéties sentimentales, rebondissements comiques, fin tragique ? \r\nNon, tout cela n\'était que du théâtre !Alors, vive le jeu et que le spectacle continue.', 4),
('207036822X', '1984', 7, 1949, 2, 1, 448, 'De tous les carrefours importants, le visage à la moustache noire vous fixait du regard. BIG BROTHER VOUS REGARDE, répétait la légende, tandis que le regard des yeux noirs pénétrait les yeux de Winston. Au loin, un hélicoptère glissa entre les toits, plana un moment, telle une mouche bleue, puis repartit comme une flèche, dans un vol courbe. C\'était une patrouille qui venait mettre le nez aux fenêtres des gens. Mais les patrouilles n\'avaient pas d\'importance. Seule comptait la Police de la Pensée.', 4),
('2070373096', 'Les Paravents', 7, 1961, 1, 2, NULL, 'La guerre vue par Genet. En Algérie, fellagas et légionnaires s\'affrontent, pendant qu\'autour d\'eux s\'agitent travailleurs arabes et colons. \r\nMais, dans la mort, tous se rejoignent, et les ennemis découvrent leurs ressemblances secrètes. \" Ceux qui vont sur la terre d\'ici peu seront dedans. C\'est les mêmes... \"', 4),
('2070411613', 'L\'étranger', 7, 1999, 2, 2, 192, 'Condamné à mort, Meursault. Sur une plage algérienne, il a tué un Arabe. À cause du soleil, dira-t-il, parce qu\'il faisait chaud. On n\'en tirera rien d\'autre. Rien ne le fera plus réagir : ni l\'annonce de sa condamnation, ni la mort de sa mère, ni les paroles du prêtre avant la fin.\r\n\r\nComme si, sur cette plage, il avait soudain eu la révélation de l\'universelle équivalence du tout et du rien.\r\n\r\nLa conscience de n\'être sur la terre qu\'en sursis, d\'une mort qui, quoi qu\'il arrive, arrivera, sans espoir de salut. Et comment être autre chose qu\'indifférent à tout après ça ?\r\n\r\nÉtranger sur la terre, étranger à lui-même, Meursault le bien nommé pose les questions qui deviendront un leitmotiv dans l’œuvre de Camus.\r\n\r\nDe La Peste à La Chute, mais aussi dans ses pièces et dans ses essais, celui qui allait devenir Prix Nobel de littérature en 1957 ne cessera de s\'interroger sur le sens de l\'existence. Sa violente en 1960 contribua quelque peu à rendre mythique ce maître à penser de toute une génération.', 4),
('2081219972', 'Le Comédien désincarné', 2, 2009, 2, 2, 390, 'Voilà longtemps déjà que je pratique mon métier, que je le ressens, le surveille comme on surveille une habitude ; \r\nil me pénètre, et j\'ai pris cette manie d\'en chercher les effets en moi et dans les autres, d\'en surveiller les manifestations. \r\nTout le théâtre, cet état dramatique en moi, cette habitude de penser et de sentir pour les autres, par les autres et à travers moi-même, \r\ncette attitude vis-à-vis d\'un tiers offert de ce tiers qu\'est le public, et vis-à-vis de moi, ces reflets que j\'en fais et dont je suis fait, \r\nce comportement entre le soi que je suis et le moi que je me suis donné, à travers tant de personnages, tout cela est là, sensible, visible en moi, tout le long de ma journée, \r\net je cherche à le penser, à le lier, à le raisonner, et à m\'en expliquer l\'agencement, les raisons. Je veux préciser mes sensations, je note dans mes lectures des reflets de mes états (Proust), \r\nj\'écris des notes et la vanité de m\'exprimer moi-même me rattrape, me rejoint, me retrouve dans ce nomment de ma carrière où j\'ai découvert cependant (depuis longtemps déjà) que l\'acteur n\'est qu\'une table d\'harmonie.', 4),
('208127857X', 'Un fil à la patte', 7, 1894, 1, 2, 208, 'Bois-d\'Enghien est dans de beaux draps ! Comment réussir à se séparer de sa maîtresse Lucette, une jolie chanteuse de café- concert, pour épouser la respectable Viviane, jeune et fortunée ? \r\nCar malgré ses nombreux prétendants, Lucette reste follement éprise de son amant et fait tout pour le conserver. \r\nSi bien qu\'elle repousse les avances du général Irrigua, venu du bout du monde, et se joue des maladresses de Bouzin, \r\nbouffon pathétique aux allures de Charlot, que Bois-d\'Enghien tente vainement de mettre entre ses bras. \r\nQui, de Bois-d\'Enghien ou de Lucette, parviendra à ses fins ? Seule la traversée effrénée d\'une course d\'obstacles savamment agencée par Feydeau nous donnera la réponse !', 4),
('2253037923', 'Le misanthrope', 6, 1666, 1, 2, NULL, ' Alceste, \"l\'atrabilaire amoureux\" qui refuse tous les artifices de la civilité, a-t-il sa place dans la société du XVIIe siècle ? Cette comédie tantôt drôle, souvent amère, parfois noire, résonne de toutes nos interrogations sur l\'être et le paraître, l\'amitié et l\'amour, la sincérité et l\'imposture.', 4),
('2253038741', 'Les femmes savantes', 6, 1672, 1, 2, NULL, 'Les grandes pièces du répertoire: Modernisées dans leur présentation; Préfacées par des gens de théâtre acteurs, metteurs en scène et critiques ; \r\nCommentées et annotées par des universitaires, tous spécialistes du théâtre. \r\nLes femmes soulèvent à chaque époque - croyant l\'inventer - la querelle de l\'égalité des sexes, qui dure en vérité depuis que le monde est monde et a pris conscience qu\'il existait entre eux une certaine différence. \r\nDans Les Femmes savantes, Molière s\'attaque cependant moins au beau sexe qu\'aux cuistres des deux bords. \r\nSi Bélise ou Philaminte revendiquent un savoir qui leur encombre la langue sans leur pénétrer l\'esprit, l\'art et la science de Trissotin se résument également à un ridicule jargon mondain. \r\nTrissotins et trissotines renvoyés dos à dos, enfin à égalité ! Avec peut-être... sûrement même, l\'idée derrière la tête que si les hommes et les femmes sont égaux, ma foi, il en est de plus égaux que d\'autres.', 4),
('2253040156', 'Poètes français des XIXe et XXe sciècles', 6, 2009, 5, 2, NULL, 'Romantiques, symbolistes, puis surréalistes, modernes, écrivant en alexandrins ou en vers libres : tous poètes. Qu’ont-ils donc en commun ?\r\n«Un poème doit être une fête de l’intellect», dit Valéry. «Un poème doit être une débâcle de l’intellect», dit Eluard. À vous de juger…', 1),
('2253041475', 'Hernani', 6, 1830, 1, 2, NULL, 'Broché. Quelle heure est-il ?: est-ce là une manière de parler pour un roi ? \r\nEt au lieu qu\'on lui réponde dignement: Du haut de ma demeure, Seigneur, l\'horloge enfin sonne la douzième; voilà qu\'il s\'entend dire tout bêtement: Minuit. \r\nIl n\'en fallait pas plus pour que la bataille s\'engaget. Passion racinienne, honneur cornélien, rien ne manquait à Hernani, fors le respect du majestueux alexandrin. \r\nEpluchures, balayures, ordures, injures se mirent à voler dans le sacro-saint Thétre-Français, lancées par les tenants du classicisme sur la horde barbue et chevelue des romantiques. \r\nUn trognon de chou alla même atterrir sur la tête de M. de Balzac. Et soir après soir la bataille recommença, s\'étendit jusqu\'à la province où, \r\nà Toulouse, un jeune homme mourut en duel pour avoir pris la défense de Victor Hugo. Mort qui donne tout son poids de vérité à l\'illusion thétrale.', 4),
('2253160466', 'Les précieuses ridicules', 6, 1660, 1, 2, NULL, 'Les Précieuses ridicules sont la première comédie imprimée de Molière, mais le texte publié n\'est que l\'image silencieuse de ce qui fit en 1659 son succès immédiat : un théâtre vivant et neuf, \r\ncar cette courte pièce en un acte et en prose affichait son parti pris en faveur du spectaculaire, du jeu des acteurs, de ce qu\'on voit et qu\'on entend, de ce que l\'écrit justement ne transmet pas. \r\nSa nouveauté prit à rebours les idées reçues sur la comédie : spectateurs conquis et rivaux dépassés surent alors que plus rien ne serait comme avant sur les scènes parisiennes du XVIIe siècle.', 4),
('2253163503', 'Le Dindon', 6, 1989, 1, 2, 107, 'Pontagnac, le dragueur malheureux, sera finalement le dindon de la farce. C\'est d\'ailleurs un brave garçon, qui ne trompe jamais sa femme sans la plaindre. \r\nEt qui ne perd jamais la tête : il suit les dames dans la rue, mais s\'il pénètre derrière elles dans les pâtisseries, il les attend sagement à la porte des bijouteries. \r\nQuant à Vautelin, le mari de Lucienne, il risque de payer fort cher une vieille entorse à la fidélité conjugale, laquelle entorse refait brusquement surface en la personne de Maggy, une joyeuse fofolle anglaise... \r\nUn troisième larron, rival de Pontagnac, vient encore compliquer la situation. Et voilà la mécanique en marche, sans que s\'affole un seul rouage, sans que saute un seul ressort , comme dit Jean Richepin.', 4),
('2264056002', 'La ballade de l\'impossible', 1, 2002, 2, 2, 456, 'Dans un avion, une chanson ramène Watanabe à ses souvenirs. Son amour de lycée pour Naoko, hantée comme lui par le suicide de leur ami, Kizuki. \r\n Puis sa rencontre avec une jeune fille, Midori, qui combat ses démons en affrontant la vie. \r\n Hommage aux amours enfuies, le premier roman culte d\'Haruki Murakami fait resurgir la violence et la poésie de l\'adolescence.', 4),
('2264056169', 'Kafka sur le rivage', 1, 2002, 2, 2, 648, 'Un adolescent, Kafka Tamura, quitte la maison familiale de Tokyo pour échapper à une malédiction oedipienne proférée par son père. \r\nDe l\'autre côté de l\'archipel, Nakata, un vieil homme amnésique, décide lui aussi de prendre la route. \r\nLeurs deux destinées s\'entremêlent pour devenir le miroir l\'une de l\'autre, tandis que, sur leur chemin, la réalité bruisse d\'un murmure envoûtant.', 4),
('2264069112', 'L\'étrange bibliothèque', 1, 2015, 3, 2, 80, 'Japon, de nos jours. Un jeune garçon se rend à la bibliothèque municipale. \r\nJusqu\'ici, rien que de très banal, le garçon est scrupuleux, il rend toujours ses livres à l\'heure. \r\nCette fois, pourtant, rien ne se passera comme prévu... \r\nEntre rêve et cauchemar, Haruki Murakami nous livre une nouvelle Inédite, hypnotique, grinçante, superbement mise en images par la talentueuse illustratrice allemande Kat Menschik.', 4),
('2266152181', 'Le cid', 2, 1637, 1, 2, 208, 'L\'histoire de Rodrigue et Chimène est bien connue : tout concourt au bonheur des deux amants, jusqu\'à ce que Rodrigue accepte, question d\'honneur, de se battre en duel contre le père de Chimène. \r\nVaincu, il perd la vie ; vainqueur, il perd Chimène, donc la vie. \r\nL\'essence du dilemme cornélien tient en ces quelques mots, et c\'est tout l\'art de Corneille que d\'inventer une issue à cette tragédie en apparence inextricable.', 4),
('2266152182', 'L\'art de la guerre', 2, 1963, 4, 2, NULL, 'L’Art de la guerre de Sunzi (Ve siècle avant J.-C.) est le premier traité de stratégie connu au monde. Stratège militaire du début de l’époque des Royaumes combattants (475-221 av. J.-C.), \r\nl’auteur favorise la stratégie indirecte. Classique du genre, sa compréhension dépasse le domaine militaire et peut être étendue à la plupart des domaines de l’activité humaine.\r\nL’Occident en prit tardivement connaissance à partir du XVIIIe siècle.\r\nQuant à L’Art de la guerre de Sun Bin (milieu du IVe siècle avant JC.), on croyait ce texte perdu depuis plus d’un millénaire, \r\nau point de douter de l’existence de son auteur et de le confondre avec son ancêtre Sunzi. \r\nJusqu’à la découverte, en avril 1972, de lamelles de bambou, dans un tombeau des Han de l’Ouest à Yinqueshan, dans le district de Linyi, province du Shandong. \r\nElles portaient non seulement le texte de L’Art de la guerre de Sunzi mais aussi celui de L’Art de la guerre de Sun Bin. \r\nElles permirent de distinguer les deux auteurs, leur originalité, et de prendre enfin connaissance de l’œuvre disparue.\r\nPour la première fois en France ces deux textes sont publiés ensemble dans la traduction de Tang Jialong.', 4),
('2266203533', 'Les Contemplations', 4, 1856, 5, 2, 672, 'Ma vie est la vôtre, votre Vie est la mienne. Vous vivez ce que je vis. \r\nEn 1856, le public fait un triomphe à ce monument de 11000 vers que Hugo présente comme les mémoires de son âme et la grande Pyramide de son oeuvre. \r\nDans les six livres de cette autobiographie sublimée, il célèbre la grâce enfantine et les jeunes années. \r\nLe temps des amours et des extases, il médite sur les luttes, les épreuves et les douleurs de l\'âge adulte, il plaint la misère des sociétés modernes. \r\nC\'est ensuite le chant de l\'énergie retrouvée, et le dialogue avec la Bouche d\'Ombre ouverte sur l\'infini qui annonce enfin l\'avènement d\'un pardon universel. \r\nMage, prophète, voyant, rêveur sacré . Hugo déchiffre l\'énigme du monde et de la destinée humaine.', 4),
('2266232991', 'Intégrale - Le Seigneur des Anneaux', 4, 2012, 2, 2, 1400, 'Une contrée paisible où vivent les Hobbits. Un anneau magique à la puissance infinie. Sauron, son créateur, prêt à dévaster le monde entier pour récupérer son bien. Frodon, jeune Hobbit, détenteur de l\'Anneau malgré lui. Gandalf, le Magicien, venu avertir Frodon du danger. Et voilà déjà les Cavaliers Noirs qui approchent...\r\n\r\nC\'est ainsi que tout commence en Terre du Milieu entre la Comté et Mordor. C\'est ainsi que la plus grande légende est née.', 4),
('2809710562', 'La tombe des lucioles', 8, 1967, 2, 2, 143, 'Avant de devenir le célèbre dessin animé de Takahata Isao, La Tombe des lucioles est une oeuvre magnifique et poignante de l\'écrivain Nosaka Akiyuki. \r\nL\'histoire d\'un frère et d\'une soeur qui s\'aiment et vagabondent dans l\'enfer des incendies tandis que la guerre fait rage ; \r\nune histoire qui est celle que Nosaka vécut lui-même, âgé de quatorze ans, en juin 1945.\r\n Mais Nosaka, c\'est aussi un style inimitable, une écriture luxuriante que l\'on reconnaît d\'abord à son brassage de toutes sortes de voix et de langues. \r\n Une prose étonnante, ample, longue, qui réussit à, concentrer en une seule phrase des couleurs, odeurs et dialogues, secouée de mots d\'argot, d\'expressions crues, \r\n d\'images quasi insoutenables, qui trouvent ici une beauté poétique et nouvelle.', 4);

-- --------------------------------------------------------

--
-- Structure de la table `Membre`
--

CREATE TABLE `Membre` (
  `id` int NOT NULL,
  `nomUtilisateur` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `motDePasse` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telephone` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `niveauAcces` int NOT NULL DEFAULT '1',
  `valider` int NOT NULL DEFAULT '0',
  `nom` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenom` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Membre`
--

INSERT INTO `Membre` (`id`, `nomUtilisateur`, `motDePasse`, `email`, `telephone`, `niveauAcces`, `valider`, `nom`, `prenom`) VALUES
(1, 'Adrien_hue', '$2y$10$aIkwt5q9H8ofEZ05r2kEoO9L9OhGojN4FJAwTSe6t2C8KWrhhVVAi', 'adrien.houee1@gmail.com', '0649784070', 2, 0, 'HOUEE', 'Adrien'),
(2, 'NKPortable', 'kevigauchet', 'kevigauchet@gmail.com', '0683435677', 1, 0, 'GAUCHET', 'Kevin'),
(5, 'Adrien_hue', '$2y$10$iYBuu9KkQPo0w0GQ093adO/GAhMxYpKiu/gR.YMi/d4yza0NjVww2', '', '', 1, 0, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `Personne`
--

CREATE TABLE `Personne` (
  `id` int NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Personne`
--

INSERT INTO `Personne` (`id`, `nom`, `prenom`) VALUES
(1, 'Murakami', 'Haruki'),
(2, 'Corneille', 'Pierre'),
(3, 'Menschik', 'Kat'),
(4, 'Morita', 'Helene'),
(5, 'Feydeau', 'Georges'),
(6, 'Hugo', 'Victor'),
(7, 'Chedeville', 'Elise'),
(8, 'Molière', NULL),
(9, 'Genet', 'Jean'),
(10, 'Jouvet', 'Louis'),
(11, 'Tzu', 'Sun'),
(12, 'Amiot', 'Joseph-Marie'),
(13, 'Nosaka', 'Akiyuki'),
(14, 'De Vos', 'Patrick'),
(15, 'Gossot', 'Anne'),
(16, 'Chamarat-Malandain', 'Gabrielle'),
(17, 'Bryson', 'Bill'),
(18, 'Orwell', 'George'),
(19, 'Tolkien', 'John Ronald Reuel'),
(20, 'Camus', 'Albert');

-- --------------------------------------------------------

--
-- Structure de la table `Reservation`
--

CREATE TABLE `Reservation` (
  `id` int NOT NULL,
  `idMembre` int NOT NULL,
  `isbn` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dateDebut` datetime DEFAULT NULL,
  `dateFin` datetime DEFAULT NULL,
  `retour` int NOT NULL DEFAULT '0',
  `jourRetard` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Role`
--

CREATE TABLE `Role` (
  `id` int NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Role`
--

INSERT INTO `Role` (`id`, `libelle`) VALUES
(1, 'Ecrivain'),
(2, 'Illustrateur'),
(3, 'Traducteur'),
(4, 'Préface');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Auteur`
--
ALTER TABLE `Auteur`
  ADD KEY `fk_auteurIdPersonneId` (`idPersonne`),
  ADD KEY `fk_auteurIdLivreId` (`idLivre`),
  ADD KEY `fk_auteurIdRoleId` (`idRole`);

--
-- Index pour la table `Editeur`
--
ALTER TABLE `Editeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libelle` (`libelle`);

--
-- Index pour la table `Langue`
--
ALTER TABLE `Langue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Livre`
--
ALTER TABLE `Livre`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `fk_livreEditeurId` (`editeur`),
  ADD KEY `fk_livreGenreId` (`genre`),
  ADD KEY `fk_livreLangueId` (`langue`);

--
-- Index pour la table `Membre`
--
ALTER TABLE `Membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Personne`
--
ALTER TABLE `Personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ReservationMembre` (`idMembre`),
  ADD KEY `fk_ReservationLivre` (`isbn`);

--
-- Index pour la table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Editeur`
--
ALTER TABLE `Editeur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Langue`
--
ALTER TABLE `Langue`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Membre`
--
ALTER TABLE `Membre`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Personne`
--
ALTER TABLE `Personne`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `Reservation`
--
ALTER TABLE `Reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Role`
--
ALTER TABLE `Role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Auteur`
--
ALTER TABLE `Auteur`
  ADD CONSTRAINT `fk_auteurIdLivreId` FOREIGN KEY (`idLivre`) REFERENCES `Livre` (`isbn`),
  ADD CONSTRAINT `fk_auteurIdPersonneId` FOREIGN KEY (`idPersonne`) REFERENCES `Personne` (`id`),
  ADD CONSTRAINT `fk_auteurIdRoleId` FOREIGN KEY (`idRole`) REFERENCES `Role` (`id`);

--
-- Contraintes pour la table `Livre`
--
ALTER TABLE `Livre`
  ADD CONSTRAINT `fk_livreEditeurId` FOREIGN KEY (`editeur`) REFERENCES `Editeur` (`id`),
  ADD CONSTRAINT `fk_livreGenreId` FOREIGN KEY (`genre`) REFERENCES `Genre` (`id`),
  ADD CONSTRAINT `fk_livreLangueId` FOREIGN KEY (`langue`) REFERENCES `Langue` (`id`);

--
-- Contraintes pour la table `Reservation`
--
ALTER TABLE `Reservation`
  ADD CONSTRAINT `fk_ReservationLivre` FOREIGN KEY (`isbn`) REFERENCES `Livre` (`isbn`),
  ADD CONSTRAINT `fk_ReservationMembre` FOREIGN KEY (`idMembre`) REFERENCES `Membre` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
