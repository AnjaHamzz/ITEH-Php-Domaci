-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2022 at 06:02 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putovanjablog`
--

-- --------------------------------------------------------

--
-- Table structure for table `drzava`
--

CREATE TABLE `drzava` (
  `naziv` varchar(100) DEFAULT NULL,
  `sifraDrzave` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drzava`
--

INSERT INTO `drzava` (`naziv`, `sifraDrzave`) VALUES
('Velika Britanija', 1),
('Srbija', 2),
('Češka', 3),
('Italija', 4),
('Francuska', 5),
('Nemačka', 6),
('Austrija', 7),
('Švajcarska', 8),
('Španija', 9),
('Belgija', 10),
('Slovenija', 11),
('Finska', 12),
('Hrvatska', 13),
('Mađarska', 14),
('Holandija', 15),
('Makedonija', 16),
('Irska', 17);

-- --------------------------------------------------------

--
-- Table structure for table `putovanje`
--

CREATE TABLE `putovanje` (
  `sifra` bigint(20) UNSIGNED NOT NULL,
  `ime` varchar(100) DEFAULT NULL,
  `prezime` varchar(100) DEFAULT NULL,
  `drzava` bigint(20) UNSIGNED DEFAULT NULL,
  `naslov` varchar(100) DEFAULT NULL,
  `opis` varchar(2000) DEFAULT NULL,
  `ocena` int(10) UNSIGNED DEFAULT NULL,
  `grad` varchar(100) DEFAULT NULL,
  `datumPutovanja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `putovanje`
--

INSERT INTO `putovanje` (`sifra`, `ime`, `prezime`, `drzava`, `naslov`, `opis`, `ocena`, `grad`, `datumPutovanja`) VALUES
(4, 'Milica', 'Milić', 15, 'Vikend u Holandiji', 'Nakon ovog kratkog izleta, zaputih se u Roterdam. Bila sam uzbuđena što ću se kroz dva sata naći na glavnoj stanici sa Golubom koji je u Holandiji već nekoliko dana i Ivankom, drugaricom iz Brisela. Vožnja kroz Holandiju, nakon nekoliko godina, izgledala je kao prvi put i u sebi sam ponavljala da je ovo najsavršenija zemlja koju sam obišla. Videla sam svog tatu koji nikada nije bio u Holandiji i ne bi verovao svojim očima da ovoliko sređena zemlja može da bude. Puštam duge uzdahe za tim konjima, kravama, ovcama na zelenim pašnjacima, za guskama i patkama u vodama i kanalima, za usputnim kućama, zelenim ravnicama i šumama.', 4, 'Roterdam', '2019-12-02'),
(5, 'Marija', 'Marković', 16, 'Izlet u Skoplju', 'Bulevar Makedonije koji se nastavlja na muzej, predstavlja šetalište sa velikim brojem restorana, jednom crkvom (Crkva Sv. Konstantina i Elene) i kućom veoma neobične arhitekture koju nikada do tada nisam videla, a koja predstavlja Muzej Majke Tereze. Majka Tereza je rođena u Skoplju, upravo u kući koja se nalazila na tom mestu gde je sada muzej. Izjašnjavala se da je albanskog porekla, po veri katolik, a po državljanstvu Indijka, gde je i umrla 1997. godine. Nobelovu nagradu za mir dobila je 1979, u godinama kasnije njen humanitarni rad je kritikovan od strane brojnih pojedinaca i organizacija, a 2016. godine Papa Franja ju je kanonizovao.\r\nU okolini ova dva objekta, kao i u samoj ulici, videćete statue modernih devojaka i zanimljive arhitektonske stilove. I tu ste već u samom centru. Znaćete to po megalomanskoj fontani sa spomenikom Aleksandra Velikog na konju i Trijumfalnoj kapiji odmah preko puta. Na Trijumfalnu kapiju se možete popeti, ali proverite radno vreme, jer je već oko 16h bila zatvorena kada smo pokušali da je posetimo.', 3, 'Skoplje', '2020-12-02'),
(8, 'Aleksa', 'Aleksić', 4, 'Rim – grad 280 fontana, 900 crkava,  najvećeg amfiteatra na svetu i ko zna čega još ne ', 'Pantheon\r\nSigurno ste pročitali već da meni ovaj hram svim bogovima izaziva vrtoglavicu. To je valjda strahopoštovanje koje u meni ova građevina izaziva. Priča se da je hram građen po uzoru na sunčani sat. Nekada je predstavljao hram svim bogovima, što na grčkom, ime hrama i znači. Danas je to hrišćanski hram u čijoj kripti se nalaze posmrtni ostaci Rafaela, ujedinitelja Vittoria Emanuela II i tako dalje. Pantheon predstavlja jedinu netaknutu građevinu iz antičkog perioda. Sve ostale nisu odolele varvarskim napadima, a ni zubu vremena.\r\nLegenda kaže da je hram izgrađen na mestu gde je osnivač Rima, Romulus, izdigao u raj. \r\nNajfantastičniji deo građevine je svakako najšira kupola bez potpore. Na sredini je otvor koji podseća na džinovsko oko koje gleda u nebo i propušta sunčeve zrake. Prečnik kupole iznosi 43.3m, a toliko iznosi i razdaljina od poda do vrha kupole.\r\n16 stubova izrađenih u korintskom stilu, gde svaki teži 60 tona, predstavljaju podupirače hrama.', 4, 'Rim', '2020-12-02'),
(35, 'Tamara', 'Perić', 13, 'Istra – letovanje u mobilnim kamp kućicama', 'Laterna rizort se nalazi na 20 minuta vožnje od Poreča, smešten u borovoj šumi na poluostrvu Lanterna. Ogroman kompleks sa 4 bazena, dosta mesta za kamp prikolice, sa redovima mobilnih kućica i šatorima. Rezervisali smo četvorokrevetnu kućicu, koja ima potpuno opremljenu kuhinju, 2 spavaće sobe, ogromnu terasu sa stolom za ručavanje i ležaljkama. Zamislite ispijanje jutarnje kafice omađijani mirisom borove šume dok dete mirno sedi na noši i gleda Pepu prase. Uživanje traje jedno 5 do 10 minuta. Gosti rizorta su većinom Nemci i Poljaci. U velikom broju su to porodice sa decom koju napakuju u Tula kolica ili smeste na trotinete, pa im dolazak do bilo koje tačke u rizortu ne predstavlja nikakav problem. Za prvi dan smo odabrali da odemo do najbliže plaže, ispostavilo se kamenite. Nabavite patikice za vodu i za sebe i decu, jer, što se mene tiče, to je izum veka.', 5, 'Poreč', '2019-11-16'),
(36, 'Tanja', 'Mirković', 4, 'Ravena – carstvo mozaika i grad Danteovog počinka', 'Dok smo hodali ka centru grada, nisam mogla da se otrgnem utisku da mi je grad čudan, nimalo siguran. Uhvatila me neka jeza. Šetamo do Piazza del Popolo, grad prazan, skoro pust. Govorim Vladi da treba odmah da se vratimo kući taksijem. Ne osećam se ni malo sigurno ovde. Ubeđuje me da ipak krenemo pešaka, neće se desiti ništa, da sam malo isparanoisala. Napravili smo brzinski plan šta ćemo obići sutra i brzim hodom se vratili do kuće. „Ravena, baš si bezveze. Daću ti sutra drugu šansu. Ako se u roku od sat vremena ne pokažeš dostojnom obilaska, bićeš drugi italijanski grad koji me je razočarao“. S tim skeptičnim mišljenjem sam i zaspala.\r\nNakon doručka, odlazimo do Danteove grobnice (Tomba di Dante), da se poklonimo velikanu, koji je u ovaj grad došao kao izgnanik, proterak iz Firence. Iznad kamenog reljefa, na kom zamišljeno gleda u knjigu, stoji mala, uljana lampa sa maslinovim uljem. Firentinci svake godine šalju ulje Raveni na dan godišnjice Danteove smrti, 14. septembra. Iako su postojale tendencije da se mošti vrate u Firencu, pokušaji su bili sprečeni. Danas, čak, postoji grobnica na trgu Santa Croce u Firenci, koja čeka Danteove mošti.', 4, 'Ravena', '2018-10-26'),
(37, 'Pera', 'Perić', 14, 'Gde za vikend? Segedin', 'Iznenadio me grad. Udario šamar mojim predrasudama. Nisam očekivala mnogo od grada u koji svi idu radi jeftinije kupovine i valjaju belu tehniku. Kako sam se grdno prevarila. Taj austougarski šmek me odmah osvojio i promenio sve slike koje sam imala pred dolazak u grad.\r\n\r\nSegedin, najveći grad na reci Tisi, poznat po spa centrima i banjama sa termalnom vodom, nazivaju ga još i Grad sunca zbog najvećeg broja sunčanih dana godišnje u Mađarskoj. Od Beograda je udaljen svega 220km, od Novog Sada 140km, a od Subotice samo 50km.\r\n\r\nSem bele tehnike, jeftinijih radnji, za Srbe i Srbiju interesantna, istorijska činjenica je i da je, nakon Velike Seobe Srba pod Arsenijem Čarnojevićem, Segedin prvi grad u kom su Srbi sa Kosmeta dobili crkveno-versku autonomiju. Za uzvrat su morali da budu austrijski vojnici.\r\n\r\nMeđutim, dolaskom velikih brendova robne marke na naše prostore, poseta Segedinu zbog kupovine je znatno opala. Ali poseta Aquapolis-u, sa druge strane, je znatno porasla. Kad se samo setim tobogana zvanih Anakonde do čijeg se početka popnete liftom, pa onda spuštate duuugooo i uz vrisak izađete iz njega, ide mi se opet. Idealan je za porodične posete sa decom. Biće im ovo nezaboravan doživljaj. A idealan je i za uživanje u „Tihom Spa centru“, koga od žagora na toboganima deli samo jedan zid. Kao nemi film, pratite dešava u susednom delu bez zvuka i opuštate se posle naporne radne nedelje.', 3, 'Segedin', '2020-01-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drzava`
--
ALTER TABLE `drzava`
  ADD PRIMARY KEY (`sifraDrzave`);

--
-- Indexes for table `putovanje`
--
ALTER TABLE `putovanje`
  ADD PRIMARY KEY (`sifra`),
  ADD KEY `putovanje_FK` (`drzava`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drzava`
--
ALTER TABLE `drzava`
  MODIFY `sifraDrzave` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `putovanje`
--
ALTER TABLE `putovanje`
  MODIFY `sifra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `putovanje`
--
ALTER TABLE `putovanje`
  ADD CONSTRAINT `putovanje_FK` FOREIGN KEY (`drzava`) REFERENCES `drzava` (`sifraDrzave`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
