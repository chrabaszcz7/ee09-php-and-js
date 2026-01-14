-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 22, 2025 at 01:52 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dnd`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `alignements`
--

CREATE TABLE `alignements` (
  `id` int(11) NOT NULL,
  `alignement` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alignements`
--

INSERT INTO `alignements` (`id`, `alignement`) VALUES
(1, 'Chaotic evil'),
(2, 'Chaotic neutral'),
(3, 'Chaotic good'),
(4, 'Neutral good'),
(5, 'Neutral'),
(6, 'Neutral evil'),
(7, 'Lawful evil'),
(8, 'Lawful neutral'),
(9, 'Lawful good');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `monsters`
--

CREATE TABLE `monsters` (
  `id` int(11) NOT NULL,
  `name` varchar(63) NOT NULL,
  `description` varchar(511) NOT NULL,
  `size_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `alignement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monsters`
--

INSERT INTO `monsters` (`id`, `name`, `description`, `size_id`, `type_id`, `alignement_id`) VALUES
(1, 'Mind Flayer', 'Mind flayers were sadistic aberrations feared by sentient creatures on many worlds across the multiverse due to their powerful psionic abilities. From their twisted lairs deep in the Underdark, these alien entities sought to expand their dominion over all other lifeforms, controlling their minds to use them as obedient thralls. They consumed their victims very personality by extracting and devouring their brains while they were still alive.', 3, 1, 7),
(2, 'Flumph', 'Flumphs were mysterious and benevolent creatures that drifted through the Underdark.', 2, 1, 9),
(3, 'Phasm', 'Phasms were amorphous shapechangers.', 3, 1, 2),
(4, 'Solar', 'Solar were the most powerful of all the angels and indeed of most celestials. Described by some as truly godlike, only a celestial paragon could be more powerful.[13] Solars never took their own worshipers. Instead, they often served as the direct hand of the divine being to whom they owed their allegiance. Even the demon lords feared these holy celestial beings.', 4, 2, 9),
(5, 'Couatl', 'Couatl was a large, otherworldly, winged serpentine creature.', 3, 2, 9),
(6, 'Rilmani', 'Rilmani were powerful outsiders who were the living embodiment of pure neutrality.', 3, 2, 5),
(7, 'Azer', 'Azers were elemental creatures native to the Elemental Plane of Fire and Elemental Chaos.', 3, 3, 8),
(8, 'Leviathan', 'A leviathan was an elder elemental of water, a very rare variety of elementals that possessed immense proportions and apocalyptic power.', 5, 3, 5),
(9, 'Phoenix', 'A phoenix was a powerful elemental bird that embodied the wild and unpredictable nature of fire.', 4, 3, 5),
(10, 'Death knight', 'A death knight was a mighty undead warrior created by gods of death or other malevolent forces. They were most commonly created from evil humanoids who in life had been blackguards, fighters, rangers, barbarians, and even paladins fallen from grace.', 3, 4, 1),
(11, 'Dryad', 'Dryads, also known as wood nymphs, were fey-maidens who acted as the protectors of forests and trees.', 3, 4, 5),
(12, 'Astral elf', 'Astral Elves were a variety of elves native to the Astral Plane. They traced their roots to the Feywild like other elves, but were very different from their terrestrial brethren. The millennia they spent within the Astral Plane imbued them with a spark of divine energy, bestowed upon them by divine powers.', 3, 4, 3),
(13, 'Crawling claw', 'Crawling claws were the amputated and then reanimated hands of humanoids. They were employed by dark wizards and warlocks to perform watch duty or provide an extra set of hands.', 1, 5, 6),
(14, 'Vampire', 'Vampires were a type of powerful and feared undead that fed on blood and showed no mercy, had no feelings of compassion.', 3, 5, 7),
(15, 'Banshee', 'A banshee , also known as a groaning spirit, or wailing ghost, was a female undead phantom, typically a selfish, strong-willed spirit that embodied the essence of hideousness. Oftentimes they were the spirits of elven women, whom in life had an evil alignment.', 3, 5, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `size` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`) VALUES
(1, 'Tiny'),
(2, 'Small'),
(3, 'Medium'),
(4, 'Large'),
(5, 'Huge');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'Aberration'),
(2, 'Celestial'),
(3, 'Elemental'),
(4, 'Humanoid'),
(5, 'Undead');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `alignements`
--
ALTER TABLE `alignements`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `monsters`
--
ALTER TABLE `monsters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `alignement_id` (`alignement_id`);

--
-- Indeksy dla tabeli `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alignements`
--
ALTER TABLE `alignements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `monsters`
--
ALTER TABLE `monsters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `monsters`
--
ALTER TABLE `monsters`
  ADD CONSTRAINT `monsters_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `monsters_ibfk_2` FOREIGN KEY (`alignement_id`) REFERENCES `alignements` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
