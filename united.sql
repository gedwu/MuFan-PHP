-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 m. Geg 29 d. 17:46
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `united`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `game_id` int(11) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `intro` text COLLATE utf8_bin,
  `content` longtext COLLATE utf8_bin,
  `photo_url` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `video_url` varchar(400) COLLATE utf8_bin DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `articles`
--

INSERT INTO `articles` (`id`, `game_id`, `title`, `intro`, `content`, `photo_url`, `video_url`, `created_at`) VALUES
(1, NULL, 'Kas yra Lorem Ipsum?', 'Lorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių', '<p>\nLorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių. Šis tekstas išliko beveik nepasikeitęs ne tik penkis amžius, bet ir įžengė i kopiuterinio grafinio dizaino laikus. Jis išpopuliarėjo XX a. šeštajame dešimtmetyje, kai buvo išleisti Letraset lapai su Lorem Ipsum ištraukomis, o vėliau -leidybinė sistema AldusPageMaker, kurioje buvo ir Lorem Ipsum versija.\n</p>\n<p>\nau seniai žinoma, kad vertinant dizainą ir kompoziciją, blaško skaitomas tekstas. Tad Lorem Ipsum naudojamas tam, kad daugiau ar mažiau normalizuotų raidžių paskirstymą vietoje paprasto dubliavimo: „Tekstas tekstas tekstas tekstas...“. Daugelis leidybinių sistemų programų, o taip pat ir Hiperteksto kalbos redaktoriai naudoja Lorem Ipsum kaip demonstracinę numatyto teksto versiją, todel žodžių „Lorem Ipsum“ internetinė paieška parodo daug tinklalapių kurie yra dar besikuriantys. Egzistuoja ne mažai įvairių Lorem Ipsum versijų. Kai kurios iš jų buvo sukurtos per klaidą, kitos - tyčia (pvz. jumoristinės).\n</p>\n<p>\nDaug kas galvoja, kad Lorem Ipsum - tai vien tik atsitiktinai surinktas tekstas, bet taip nėra. Jo šaknis galima rasti klasikiniame Lotynų kalba parašytame kūrinyje, išleistame 45 pr. m. e., t.y. prieš du tūkstančius metų. Richard McClintock, lotynų kalbos profesorius Hampden-Sydney (JAV) koledže, išrinko vieną iš neaiškesnių žodžių iš Lorem Ipsum ištraukos - „consectetur“, ir ėmėsi ieškoti jo klasikinėje lotynų kalbos literatūroje. Tokiu būdu jis rado neabejotiną šio žodžio ir Lorem Ipsum šaltinį knygos „de Finibus Bonorum et Malorum“ (Apie gėrio ir blogio ribas) 1.10.32 ir 1.10.33 pastraipose. Kūrinio autorius – Ciceronas, parašęs jį 45 pr. m. e. Šis etikos teorijos traktatas buvo labai populiarus Renesanso laikais. Pirmoji Lorem Ipsum teksto eilutė, „Lorem ipsum dolor sit amet..“ sukurta remiantis 1.10.32 pastraipa.\n</p>\n<p>\nYra daug įvarių Lorem Ipsum variantų, bet daugelis jų buvo vienokiu ar kitokiu būdu modifikuoti, pvz. jumoristiniai intarpai arba žodžiai, nė kiek nepanasūs i lotynų kalbą. Jeigu Jums reikia Lorem Ipsum teksto rimtam projektui, Jūs tikriausiai nenorėtumėte viduryje eilutės kokio nors trikdančio išsireiškimo. Visi kiti Lorem Ipsum teksto eilučių generatoriai dažniausiai tik kartoja tą patį tekstą, kol užpildo reikiamus tarpus. Todėl čia siūlomas teksto eilučių generatorius yra vienintelis tikras Lorem Ipsum teksto generatorius. Jame naudojamas žodynas iš daugiau nei 200 lotynų kalbos žodžių, o taip pat keletas ištisų sakinių modelių. Taip surinktas Lorem Ipsum teksto variantas atrodo tikroviškai, nesikartoja, ir jame nėra „neįmanomų“ žodžių.\n</p>', 'vanpersie.jpg', NULL, '2014-03-10 17:09:46'),
(7, NULL, 'Kas yra Lorem Ipsum?', 'Lorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių', '<p>\nLorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių. Šis tekstas išliko beveik nepasikeitęs ne tik penkis amžius, bet ir įžengė i kopiuterinio grafinio dizaino laikus. Jis išpopuliarėjo XX a. šeštajame dešimtmetyje, kai buvo išleisti Letraset lapai su Lorem Ipsum ištraukomis, o vėliau -leidybinė sistema AldusPageMaker, kurioje buvo ir Lorem Ipsum versija.\n</p>\n<p>\nau seniai žinoma, kad vertinant dizainą ir kompoziciją, blaško skaitomas tekstas. Tad Lorem Ipsum naudojamas tam, kad daugiau ar mažiau normalizuotų raidžių paskirstymą vietoje paprasto dubliavimo: „Tekstas tekstas tekstas tekstas...“. Daugelis leidybinių sistemų programų, o taip pat ir Hiperteksto kalbos redaktoriai naudoja Lorem Ipsum kaip demonstracinę numatyto teksto versiją, todel žodžių „Lorem Ipsum“ internetinė paieška parodo daug tinklalapių kurie yra dar besikuriantys. Egzistuoja ne mažai įvairių Lorem Ipsum versijų. Kai kurios iš jų buvo sukurtos per klaidą, kitos - tyčia (pvz. jumoristinės).\n</p>\n<p>\nDaug kas galvoja, kad Lorem Ipsum - tai vien tik atsitiktinai surinktas tekstas, bet taip nėra. Jo šaknis galima rasti klasikiniame Lotynų kalba parašytame kūrinyje, išleistame 45 pr. m. e., t.y. prieš du tūkstančius metų. Richard McClintock, lotynų kalbos profesorius Hampden-Sydney (JAV) koledže, išrinko vieną iš neaiškesnių žodžių iš Lorem Ipsum ištraukos - „consectetur“, ir ėmėsi ieškoti jo klasikinėje lotynų kalbos literatūroje. Tokiu būdu jis rado neabejotiną šio žodžio ir Lorem Ipsum šaltinį knygos „de Finibus Bonorum et Malorum“ (Apie gėrio ir blogio ribas) 1.10.32 ir 1.10.33 pastraipose. Kūrinio autorius – Ciceronas, parašęs jį 45 pr. m. e. Šis etikos teorijos traktatas buvo labai populiarus Renesanso laikais. Pirmoji Lorem Ipsum teksto eilutė, „Lorem ipsum dolor sit amet..“ sukurta remiantis 1.10.32 pastraipa.\n</p>\n<p>\nYra daug įvarių Lorem Ipsum variantų, bet daugelis jų buvo vienokiu ar kitokiu būdu modifikuoti, pvz. jumoristiniai intarpai arba žodžiai, nė kiek nepanasūs i lotynų kalbą. Jeigu Jums reikia Lorem Ipsum teksto rimtam projektui, Jūs tikriausiai nenorėtumėte viduryje eilutės kokio nors trikdančio išsireiškimo. Visi kiti Lorem Ipsum teksto eilučių generatoriai dažniausiai tik kartoja tą patį tekstą, kol užpildo reikiamus tarpus. Todėl čia siūlomas teksto eilučių generatorius yra vienintelis tikras Lorem Ipsum teksto generatorius. Jame naudojamas žodynas iš daugiau nei 200 lotynų kalbos žodžių, o taip pat keletas ištisų sakinių modelių. Taip surinktas Lorem Ipsum teksto variantas atrodo tikroviškai, nesikartoja, ir jame nėra „neįmanomų“ žodžių.\n</p>', 'rooney.jpg', NULL, '2017-04-16 16:03:39'),
(12, NULL, 'Kas yra Lorem Ipsum?', '	 "Old Trafford" stadione į lemiamą kovą stojo "Manchester United" ir Pirėjo "Olympiacos" klubai. Davido Moyeso vadovaujama ekipa atsitiesė po pirmojo mačo ', '<p>\nLorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių. Šis tekstas išliko beveik nepasikeitęs ne tik penkis amžius, bet ir įžengė i kopiuterinio grafinio dizaino laikus. Jis išpopuliarėjo XX a. šeštajame dešimtmetyje, kai buvo išleisti Letraset lapai su Lorem Ipsum ištraukomis, o vėliau -leidybinė sistema AldusPageMaker, kurioje buvo ir Lorem Ipsum versija.\n</p>\n<p>\nau seniai žinoma, kad vertinant dizainą ir kompoziciją, blaško skaitomas tekstas. Tad Lorem Ipsum naudojamas tam, kad daugiau ar mažiau normalizuotų raidžių paskirstymą vietoje paprasto dubliavimo: „Tekstas tekstas tekstas tekstas...“. Daugelis leidybinių sistemų programų, o taip pat ir Hiperteksto kalbos redaktoriai naudoja Lorem Ipsum kaip demonstracinę numatyto teksto versiją, todel žodžių „Lorem Ipsum“ internetinė paieška parodo daug tinklalapių kurie yra dar besikuriantys. Egzistuoja ne mažai įvairių Lorem Ipsum versijų. Kai kurios iš jų buvo sukurtos per klaidą, kitos - tyčia (pvz. jumoristinės).\n</p>\n<p>\nDaug kas galvoja, kad Lorem Ipsum - tai vien tik atsitiktinai surinktas tekstas, bet taip nėra. Jo šaknis galima rasti klasikiniame Lotynų kalba parašytame kūrinyje, išleistame 45 pr. m. e., t.y. prieš du tūkstančius metų. Richard McClintock, lotynų kalbos profesorius Hampden-Sydney (JAV) koledže, išrinko vieną iš neaiškesnių žodžių iš Lorem Ipsum ištraukos - „consectetur“, ir ėmėsi ieškoti jo klasikinėje lotynų kalbos literatūroje. Tokiu būdu jis rado neabejotiną šio žodžio ir Lorem Ipsum šaltinį knygos „de Finibus Bonorum et Malorum“ (Apie gėrio ir blogio ribas) 1.10.32 ir 1.10.33 pastraipose. Kūrinio autorius – Ciceronas, parašęs jį 45 pr. m. e. Šis etikos teorijos traktatas buvo labai populiarus Renesanso laikais. Pirmoji Lorem Ipsum teksto eilutė, „Lorem ipsum dolor sit amet..“ sukurta remiantis 1.10.32 pastraipa.\n</p>\n<p>\nYra daug įvarių Lorem Ipsum variantų, bet daugelis jų buvo vienokiu ar kitokiu būdu modifikuoti, pvz. jumoristiniai intarpai arba žodžiai, nė kiek nepanasūs i lotynų kalbą. Jeigu Jums reikia Lorem Ipsum teksto rimtam projektui, Jūs tikriausiai nenorėtumėte viduryje eilutės kokio nors trikdančio išsireiškimo. Visi kiti Lorem Ipsum teksto eilučių generatoriai dažniausiai tik kartoja tą patį tekstą, kol užpildo reikiamus tarpus. Todėl čia siūlomas teksto eilučių generatorius yra vienintelis tikras Lorem Ipsum teksto generatorius. Jame naudojamas žodynas iš daugiau nei 200 lotynų kalbos žodžių, o taip pat keletas ištisų sakinių modelių. Taip surinktas Lorem Ipsum teksto variantas atrodo tikroviškai, nesikartoja, ir jame nėra „neįmanomų“ žodžių.\n</p>', 'ibra2.jpg', NULL, '2017-04-16 16:08:51'),
(13, NULL, 'Kas yra Lorem Ipsum?', 'Lorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių', '<p>\nLorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių. Šis tekstas išliko beveik nepasikeitęs ne tik penkis amžius, bet ir įžengė i kopiuterinio grafinio dizaino laikus. Jis išpopuliarėjo XX a. šeštajame dešimtmetyje, kai buvo išleisti Letraset lapai su Lorem Ipsum ištraukomis, o vėliau -leidybinė sistema AldusPageMaker, kurioje buvo ir Lorem Ipsum versija.\n</p>\n<p>\nau seniai žinoma, kad vertinant dizainą ir kompoziciją, blaško skaitomas tekstas. Tad Lorem Ipsum naudojamas tam, kad daugiau ar mažiau normalizuotų raidžių paskirstymą vietoje paprasto dubliavimo: „Tekstas tekstas tekstas tekstas...“. Daugelis leidybinių sistemų programų, o taip pat ir Hiperteksto kalbos redaktoriai naudoja Lorem Ipsum kaip demonstracinę numatyto teksto versiją, todel žodžių „Lorem Ipsum“ internetinė paieška parodo daug tinklalapių kurie yra dar besikuriantys. Egzistuoja ne mažai įvairių Lorem Ipsum versijų. Kai kurios iš jų buvo sukurtos per klaidą, kitos - tyčia (pvz. jumoristinės).\n</p>\n<p>\nDaug kas galvoja, kad Lorem Ipsum - tai vien tik atsitiktinai surinktas tekstas, bet taip nėra. Jo šaknis galima rasti klasikiniame Lotynų kalba parašytame kūrinyje, išleistame 45 pr. m. e., t.y. prieš du tūkstančius metų. Richard McClintock, lotynų kalbos profesorius Hampden-Sydney (JAV) koledže, išrinko vieną iš neaiškesnių žodžių iš Lorem Ipsum ištraukos - „consectetur“, ir ėmėsi ieškoti jo klasikinėje lotynų kalbos literatūroje. Tokiu būdu jis rado neabejotiną šio žodžio ir Lorem Ipsum šaltinį knygos „de Finibus Bonorum et Malorum“ (Apie gėrio ir blogio ribas) 1.10.32 ir 1.10.33 pastraipose. Kūrinio autorius – Ciceronas, parašęs jį 45 pr. m. e. Šis etikos teorijos traktatas buvo labai populiarus Renesanso laikais. Pirmoji Lorem Ipsum teksto eilutė, „Lorem ipsum dolor sit amet..“ sukurta remiantis 1.10.32 pastraipa.\n</p>\n<p>\nYra daug įvarių Lorem Ipsum variantų, bet daugelis jų buvo vienokiu ar kitokiu būdu modifikuoti, pvz. jumoristiniai intarpai arba žodžiai, nė kiek nepanasūs i lotynų kalbą. Jeigu Jums reikia Lorem Ipsum teksto rimtam projektui, Jūs tikriausiai nenorėtumėte viduryje eilutės kokio nors trikdančio išsireiškimo. Visi kiti Lorem Ipsum teksto eilučių generatoriai dažniausiai tik kartoja tą patį tekstą, kol užpildo reikiamus tarpus. Todėl čia siūlomas teksto eilučių generatorius yra vienintelis tikras Lorem Ipsum teksto generatorius. Jame naudojamas žodynas iš daugiau nei 200 lotynų kalbos žodžių, o taip pat keletas ištisų sakinių modelių. Taip surinktas Lorem Ipsum teksto variantas atrodo tikroviškai, nesikartoja, ir jame nėra „neįmanomų“ žodžių.\n</p>', 'pogba.jpg', NULL, '2017-03-16 16:10:01'),
(14, NULL, 'Kas yra Lorem Ipsum?', 'Lorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių', '<p>\nLorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių. Šis tekstas išliko beveik nepasikeitęs ne tik penkis amžius, bet ir įžengė i kopiuterinio grafinio dizaino laikus. Jis išpopuliarėjo XX a. šeštajame dešimtmetyje, kai buvo išleisti Letraset lapai su Lorem Ipsum ištraukomis, o vėliau -leidybinė sistema AldusPageMaker, kurioje buvo ir Lorem Ipsum versija.\n</p>\n<p>\nau seniai žinoma, kad vertinant dizainą ir kompoziciją, blaško skaitomas tekstas. Tad Lorem Ipsum naudojamas tam, kad daugiau ar mažiau normalizuotų raidžių paskirstymą vietoje paprasto dubliavimo: „Tekstas tekstas tekstas tekstas...“. Daugelis leidybinių sistemų programų, o taip pat ir Hiperteksto kalbos redaktoriai naudoja Lorem Ipsum kaip demonstracinę numatyto teksto versiją, todel žodžių „Lorem Ipsum“ internetinė paieška parodo daug tinklalapių kurie yra dar besikuriantys. Egzistuoja ne mažai įvairių Lorem Ipsum versijų. Kai kurios iš jų buvo sukurtos per klaidą, kitos - tyčia (pvz. jumoristinės).\n</p>\n<p>\nDaug kas galvoja, kad Lorem Ipsum - tai vien tik atsitiktinai surinktas tekstas, bet taip nėra. Jo šaknis galima rasti klasikiniame Lotynų kalba parašytame kūrinyje, išleistame 45 pr. m. e., t.y. prieš du tūkstančius metų. Richard McClintock, lotynų kalbos profesorius Hampden-Sydney (JAV) koledže, išrinko vieną iš neaiškesnių žodžių iš Lorem Ipsum ištraukos - „consectetur“, ir ėmėsi ieškoti jo klasikinėje lotynų kalbos literatūroje. Tokiu būdu jis rado neabejotiną šio žodžio ir Lorem Ipsum šaltinį knygos „de Finibus Bonorum et Malorum“ (Apie gėrio ir blogio ribas) 1.10.32 ir 1.10.33 pastraipose. Kūrinio autorius – Ciceronas, parašęs jį 45 pr. m. e. Šis etikos teorijos traktatas buvo labai populiarus Renesanso laikais. Pirmoji Lorem Ipsum teksto eilutė, „Lorem ipsum dolor sit amet..“ sukurta remiantis 1.10.32 pastraipa.\n</p>\n<p>\nYra daug įvarių Lorem Ipsum variantų, bet daugelis jų buvo vienokiu ar kitokiu būdu modifikuoti, pvz. jumoristiniai intarpai arba žodžiai, nė kiek nepanasūs i lotynų kalbą. Jeigu Jums reikia Lorem Ipsum teksto rimtam projektui, Jūs tikriausiai nenorėtumėte viduryje eilutės kokio nors trikdančio išsireiškimo. Visi kiti Lorem Ipsum teksto eilučių generatoriai dažniausiai tik kartoja tą patį tekstą, kol užpildo reikiamus tarpus. Todėl čia siūlomas teksto eilučių generatorius yra vienintelis tikras Lorem Ipsum teksto generatorius. Jame naudojamas žodynas iš daugiau nei 200 lotynų kalbos žodžių, o taip pat keletas ištisų sakinių modelių. Taip surinktas Lorem Ipsum teksto variantas atrodo tikroviškai, nesikartoja, ir jame nėra „neįmanomų“ žodžių.\n</p>', 'mauras.jpg', NULL, '2017-04-16 16:10:01'),
(15, NULL, 'Kas yra Lorem Ipsum?', 'Lorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių', '<p>\nLorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių. Šis tekstas išliko beveik nepasikeitęs ne tik penkis amžius, bet ir įžengė i kopiuterinio grafinio dizaino laikus. Jis išpopuliarėjo XX a. šeštajame dešimtmetyje, kai buvo išleisti Letraset lapai su Lorem Ipsum ištraukomis, o vėliau -leidybinė sistema AldusPageMaker, kurioje buvo ir Lorem Ipsum versija.\n</p>\n<p>\nau seniai žinoma, kad vertinant dizainą ir kompoziciją, blaško skaitomas tekstas. Tad Lorem Ipsum naudojamas tam, kad daugiau ar mažiau normalizuotų raidžių paskirstymą vietoje paprasto dubliavimo: „Tekstas tekstas tekstas tekstas...“. Daugelis leidybinių sistemų programų, o taip pat ir Hiperteksto kalbos redaktoriai naudoja Lorem Ipsum kaip demonstracinę numatyto teksto versiją, todel žodžių „Lorem Ipsum“ internetinė paieška parodo daug tinklalapių kurie yra dar besikuriantys. Egzistuoja ne mažai įvairių Lorem Ipsum versijų. Kai kurios iš jų buvo sukurtos per klaidą, kitos - tyčia (pvz. jumoristinės).\n</p>\n<p>\nDaug kas galvoja, kad Lorem Ipsum - tai vien tik atsitiktinai surinktas tekstas, bet taip nėra. Jo šaknis galima rasti klasikiniame Lotynų kalba parašytame kūrinyje, išleistame 45 pr. m. e., t.y. prieš du tūkstančius metų. Richard McClintock, lotynų kalbos profesorius Hampden-Sydney (JAV) koledže, išrinko vieną iš neaiškesnių žodžių iš Lorem Ipsum ištraukos - „consectetur“, ir ėmėsi ieškoti jo klasikinėje lotynų kalbos literatūroje. Tokiu būdu jis rado neabejotiną šio žodžio ir Lorem Ipsum šaltinį knygos „de Finibus Bonorum et Malorum“ (Apie gėrio ir blogio ribas) 1.10.32 ir 1.10.33 pastraipose. Kūrinio autorius – Ciceronas, parašęs jį 45 pr. m. e. Šis etikos teorijos traktatas buvo labai populiarus Renesanso laikais. Pirmoji Lorem Ipsum teksto eilutė, „Lorem ipsum dolor sit amet..“ sukurta remiantis 1.10.32 pastraipa.\n</p>\n<p>\nYra daug įvarių Lorem Ipsum variantų, bet daugelis jų buvo vienokiu ar kitokiu būdu modifikuoti, pvz. jumoristiniai intarpai arba žodžiai, nė kiek nepanasūs i lotynų kalbą. Jeigu Jums reikia Lorem Ipsum teksto rimtam projektui, Jūs tikriausiai nenorėtumėte viduryje eilutės kokio nors trikdančio išsireiškimo. Visi kiti Lorem Ipsum teksto eilučių generatoriai dažniausiai tik kartoja tą patį tekstą, kol užpildo reikiamus tarpus. Todėl čia siūlomas teksto eilučių generatorius yra vienintelis tikras Lorem Ipsum teksto generatorius. Jame naudojamas žodynas iš daugiau nei 200 lotynų kalbos žodžių, o taip pat keletas ištisų sakinių modelių. Taip surinktas Lorem Ipsum teksto variantas atrodo tikroviškai, nesikartoja, ir jame nėra „neįmanomų“ žodžių.\n</p>', 'mu-ever.jpg', NULL, '2017-04-16 16:11:51'),
(26, NULL, 'Kas yra Lorem Ipsum?', 'Lorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių', '<p>\nLorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių. Šis tekstas išliko beveik nepasikeitęs ne tik penkis amžius, bet ir įžengė i kopiuterinio grafinio dizaino laikus. Jis išpopuliarėjo XX a. šeštajame dešimtmetyje, kai buvo išleisti Letraset lapai su Lorem Ipsum ištraukomis, o vėliau -leidybinė sistema AldusPageMaker, kurioje buvo ir Lorem Ipsum versija.\n</p>\n<p>\nau seniai žinoma, kad vertinant dizainą ir kompoziciją, blaško skaitomas tekstas. Tad Lorem Ipsum naudojamas tam, kad daugiau ar mažiau normalizuotų raidžių paskirstymą vietoje paprasto dubliavimo: „Tekstas tekstas tekstas tekstas...“. Daugelis leidybinių sistemų programų, o taip pat ir Hiperteksto kalbos redaktoriai naudoja Lorem Ipsum kaip demonstracinę numatyto teksto versiją, todel žodžių „Lorem Ipsum“ internetinė paieška parodo daug tinklalapių kurie yra dar besikuriantys. Egzistuoja ne mažai įvairių Lorem Ipsum versijų. Kai kurios iš jų buvo sukurtos per klaidą, kitos - tyčia (pvz. jumoristinės).\n</p>\n<p>\nDaug kas galvoja, kad Lorem Ipsum - tai vien tik atsitiktinai surinktas tekstas, bet taip nėra. Jo šaknis galima rasti klasikiniame Lotynų kalba parašytame kūrinyje, išleistame 45 pr. m. e., t.y. prieš du tūkstančius metų. Richard McClintock, lotynų kalbos profesorius Hampden-Sydney (JAV) koledže, išrinko vieną iš neaiškesnių žodžių iš Lorem Ipsum ištraukos - „consectetur“, ir ėmėsi ieškoti jo klasikinėje lotynų kalbos literatūroje. Tokiu būdu jis rado neabejotiną šio žodžio ir Lorem Ipsum šaltinį knygos „de Finibus Bonorum et Malorum“ (Apie gėrio ir blogio ribas) 1.10.32 ir 1.10.33 pastraipose. Kūrinio autorius – Ciceronas, parašęs jį 45 pr. m. e. Šis etikos teorijos traktatas buvo labai populiarus Renesanso laikais. Pirmoji Lorem Ipsum teksto eilutė, „Lorem ipsum dolor sit amet..“ sukurta remiantis 1.10.32 pastraipa.\n</p>\n<p>\nYra daug įvarių Lorem Ipsum variantų, bet daugelis jų buvo vienokiu ar kitokiu būdu modifikuoti, pvz. jumoristiniai intarpai arba žodžiai, nė kiek nepanasūs i lotynų kalbą. Jeigu Jums reikia Lorem Ipsum teksto rimtam projektui, Jūs tikriausiai nenorėtumėte viduryje eilutės kokio nors trikdančio išsireiškimo. Visi kiti Lorem Ipsum teksto eilučių generatoriai dažniausiai tik kartoja tą patį tekstą, kol užpildo reikiamus tarpus. Todėl čia siūlomas teksto eilučių generatorius yra vienintelis tikras Lorem Ipsum teksto generatorius. Jame naudojamas žodynas iš daugiau nei 200 lotynų kalbos žodžių, o taip pat keletas ištisų sakinių modelių. Taip surinktas Lorem Ipsum teksto variantas atrodo tikroviškai, nesikartoja, ir jame nėra „neįmanomų“ žodžių.\n</p>', '1494069718_mu-celta.jpg', '//rutube.ru/play/embed/10327196', '2017-05-06 14:21:58'),
(28, NULL, 'Kas yra Lorem Ipsum?', 'Lorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių', '<p>\nLorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių. Šis tekstas išliko beveik nepasikeitęs ne tik penkis amžius, bet ir įžengė i kopiuterinio grafinio dizaino laikus. Jis išpopuliarėjo XX a. šeštajame dešimtmetyje, kai buvo išleisti Letraset lapai su Lorem Ipsum ištraukomis, o vėliau -leidybinė sistema AldusPageMaker, kurioje buvo ir Lorem Ipsum versija.\n</p>\n<p>\nau seniai žinoma, kad vertinant dizainą ir kompoziciją, blaško skaitomas tekstas. Tad Lorem Ipsum naudojamas tam, kad daugiau ar mažiau normalizuotų raidžių paskirstymą vietoje paprasto dubliavimo: „Tekstas tekstas tekstas tekstas...“. Daugelis leidybinių sistemų programų, o taip pat ir Hiperteksto kalbos redaktoriai naudoja Lorem Ipsum kaip demonstracinę numatyto teksto versiją, todel žodžių „Lorem Ipsum“ internetinė paieška parodo daug tinklalapių kurie yra dar besikuriantys. Egzistuoja ne mažai įvairių Lorem Ipsum versijų. Kai kurios iš jų buvo sukurtos per klaidą, kitos - tyčia (pvz. jumoristinės).\n</p>\n<p>\nDaug kas galvoja, kad Lorem Ipsum - tai vien tik atsitiktinai surinktas tekstas, bet taip nėra. Jo šaknis galima rasti klasikiniame Lotynų kalba parašytame kūrinyje, išleistame 45 pr. m. e., t.y. prieš du tūkstančius metų. Richard McClintock, lotynų kalbos profesorius Hampden-Sydney (JAV) koledže, išrinko vieną iš neaiškesnių žodžių iš Lorem Ipsum ištraukos - „consectetur“, ir ėmėsi ieškoti jo klasikinėje lotynų kalbos literatūroje. Tokiu būdu jis rado neabejotiną šio žodžio ir Lorem Ipsum šaltinį knygos „de Finibus Bonorum et Malorum“ (Apie gėrio ir blogio ribas) 1.10.32 ir 1.10.33 pastraipose. Kūrinio autorius – Ciceronas, parašęs jį 45 pr. m. e. Šis etikos teorijos traktatas buvo labai populiarus Renesanso laikais. Pirmoji Lorem Ipsum teksto eilutė, „Lorem ipsum dolor sit amet..“ sukurta remiantis 1.10.32 pastraipa.\n</p>\n<p>\nYra daug įvarių Lorem Ipsum variantų, bet daugelis jų buvo vienokiu ar kitokiu būdu modifikuoti, pvz. jumoristiniai intarpai arba žodžiai, nė kiek nepanasūs i lotynų kalbą. Jeigu Jums reikia Lorem Ipsum teksto rimtam projektui, Jūs tikriausiai nenorėtumėte viduryje eilutės kokio nors trikdančio išsireiškimo. Visi kiti Lorem Ipsum teksto eilučių generatoriai dažniausiai tik kartoja tą patį tekstą, kol užpildo reikiamus tarpus. Todėl čia siūlomas teksto eilučių generatorius yra vienintelis tikras Lorem Ipsum teksto generatorius. Jame naudojamas žodynas iš daugiau nei 200 lotynų kalbos žodžių, o taip pat keletas ištisų sakinių modelių. Taip surinktas Lorem Ipsum teksto variantas atrodo tikroviškai, nesikartoja, ir jame nėra „neįmanomų“ žodžių.\n</p>', 'vanpersie.jpg', NULL, '2014-03-10 17:09:46'),
(35, NULL, 'Kas yra Lorem Ipsum?', 'Lorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių', '<p>\r\nLorem ipsum - tai fiktyvus tekstas naudojamas spaudos ir grafinio dizaino pasaulyje jau nuo XVI a. pradžios. Lorem Ipsum tapo standartiniu fiktyviu tekstu, kai nežinomas spaustuvininkas atsitiktine tvarka išdėliojo raides atspaudų prese ir tokiu būdu sukūrė raidžių egzempliorių. Šis tekstas išliko beveik nepasikeitęs ne tik penkis amžius, bet ir įžengė i kopiuterinio grafinio dizaino laikus. Jis išpopuliarėjo XX a. šeštajame dešimtmetyje, kai buvo išleisti Letraset lapai su Lorem Ipsum ištraukomis, o vėliau -leidybinė sistema AldusPageMaker, kurioje buvo ir Lorem Ipsum versija.\r\n</p>\r\n<p>\r\nau seniai žinoma, kad vertinant dizainą ir kompoziciją, blaško skaitomas tekstas. Tad Lorem Ipsum naudojamas tam, kad daugiau ar mažiau normalizuotų raidžių paskirstymą vietoje paprasto dubliavimo: „Tekstas tekstas tekstas tekstas...“. Daugelis leidybinių sistemų programų, o taip pat ir Hiperteksto kalbos redaktoriai naudoja Lorem Ipsum kaip demonstracinę numatyto teksto versiją, todel žodžių „Lorem Ipsum“ internetinė paieška parodo daug tinklalapių kurie yra dar besikuriantys. Egzistuoja ne mažai įvairių Lorem Ipsum versijų. Kai kurios iš jų buvo sukurtos per klaidą, kitos - tyčia (pvz. jumoristinės).\r\n</p>\r\n<p>\r\nDaug kas galvoja, kad Lorem Ipsum - tai vien tik atsitiktinai surinktas tekstas, bet taip nėra. Jo šaknis galima rasti klasikiniame Lotynų kalba parašytame kūrinyje, išleistame 45 pr. m. e., t.y. prieš du tūkstančius metų. Richard McClintock, lotynų kalbos profesorius Hampden-Sydney (JAV) koledže, išrinko vieną iš neaiškesnių žodžių iš Lorem Ipsum ištraukos - „consectetur“, ir ėmėsi ieškoti jo klasikinėje lotynų kalbos literatūroje. Tokiu būdu jis rado neabejotiną šio žodžio ir Lorem Ipsum šaltinį knygos „de Finibus Bonorum et Malorum“ (Apie gėrio ir blogio ribas) 1.10.32 ir 1.10.33 pastraipose. Kūrinio autorius – Ciceronas, parašęs jį 45 pr. m. e. Šis etikos teorijos traktatas buvo labai populiarus Renesanso laikais. Pirmoji Lorem Ipsum teksto eilutė, „Lorem ipsum dolor sit amet..“ sukurta remiantis 1.10.32 pastraipa.\r\n</p>\r\n<p>\r\nYra daug įvarių Lorem Ipsum variantų, bet daugelis jų buvo vienokiu ar kitokiu būdu modifikuoti, pvz. jumoristiniai intarpai arba žodžiai, nė kiek nepanasūs i lotynų kalbą. Jeigu Jums reikia Lorem Ipsum teksto rimtam projektui, Jūs tikriausiai nenorėtumėte viduryje eilutės kokio nors trikdančio išsireiškimo. Visi kiti Lorem Ipsum teksto eilučių generatoriai dažniausiai tik kartoja tą patį tekstą, kol užpildo reikiamus tarpus. Todėl čia siūlomas teksto eilučių generatorius yra vienintelis tikras Lorem Ipsum teksto generatorius. Jame naudojamas žodynas iš daugiau nei 200 lotynų kalbos žodžių, o taip pat keletas ištisų sakinių modelių. Taip surinktas Lorem Ipsum teksto variantas atrodo tikroviškai, nesikartoja, ir jame nėra „neįmanomų“ žodžių.\r\n</p>', '1496071868_mu.jpg', '', '2017-05-29 18:31:08');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `content` longtext COLLATE utf8_bin,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES
(28, 6, 'Temos pavadinimas Temos pavadinimas Temos pavadinimas Temos pavadinimas Temos pavadinimas ', 'Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs Turinyrs ', '2017-05-07 18:50:24'),
(34, 6, 'Cia mano blogo antraste', 'CIa mano blogo tekstas. CIa mano blogo tekstas. CIa mano blogo tekstas. CIa mano blogo tekstas', '2017-05-13 13:29:30');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `blogs_ratings`
--

CREATE TABLE `blogs_ratings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `up` tinyint(4) NOT NULL DEFAULT '0',
  `down` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `blogs_ratings`
--

INSERT INTO `blogs_ratings` (`id`, `user_id`, `blog_id`, `up`, `down`) VALUES
(44, 6, 28, 0, 1),
(45, 6, 34, 1, 0);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `article_id`, `content`, `created_at`) VALUES
(23, 6, 26, 'Pirmas', '2017-05-06 07:21:43'),
(24, 6, 26, 'Antras', '2017-05-06 07:22:22'),
(25, 6, 26, 'Trecias', '2017-05-07 08:56:28'),
(26, 6, 27, 'mano tekstas', '2017-05-28 07:02:36'),
(27, 6, 27, 'naujas komentaras', '2017-05-28 07:02:52'),
(28, 6, 26, 'qwe', '2017-05-28 07:03:49'),
(29, 6, 26, 'asd', '2017-05-28 07:03:54'),
(30, 6, 26, 'zxc', '2017-05-28 07:03:57'),
(31, 6, 35, 'qweqwedfawegqerg', '2017-05-29 09:04:32');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `match_date` date DEFAULT NULL,
  `match_time` time DEFAULT NULL,
  `opp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `home` tinyint(4) DEFAULT NULL,
  `league` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `goals_in` smallint(2) DEFAULT NULL,
  `goals_out` smallint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `games`
--

INSERT INTO `games` (`id`, `match_date`, `match_time`, `opp`, `home`, `league`, `goals_in`, `goals_out`) VALUES
(2, '2017-07-24', '00:00:00', 'Madrid Real', 0, 'ICC', NULL, NULL),
(3, '2017-07-17', '00:00:00', 'Manchester City', 1, 'ICC', NULL, NULL),
(4, '2017-07-17', '00:00:00', 'Real Salt Lake', 0, 'CLF', NULL, NULL),
(6, '2017-05-21', '17:00:00', 'Crystal Palace', 1, 'PRL', 1, 1),
(8, '2017-05-14', '18:30:00', 'Tottenham Hotspur', 0, 'PRL', 2, 1),
(10, '2017-04-15', '20:30:00', 'London Chelsea', 1, 'FAC', 1, 1),
(11, '2017-04-15', '16:00:00', 'Manchester CIty', 0, 'FAC', 1, 2),
(22, '2017-06-22', '20:00:00', 'Everton', 1, 'PRL', NULL, NULL),
(23, '2017-06-06', '23:00:00', 'Tottenham Hotspur', 0, 'FAC', NULL, NULL);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `nr` int(2) NOT NULL,
  `pos` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `nat` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_first` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name_last` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `birth_place` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `height` int(3) DEFAULT NULL,
  `transfer_club` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transfer_cost` float DEFAULT NULL,
  `transfer_date` date DEFAULT NULL,
  `info_img` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `players`
--

INSERT INTO `players` (`id`, `nr`, `pos`, `nat`, `name_first`, `name_last`, `birth_place`, `birth_date`, `height`, `transfer_club`, `transfer_cost`, `transfer_date`, `info_img`) VALUES
(1, 10, 'A', 'eng', 'Wayne', 'Rooney', 'Liverpulis, Jungtinė Karalystė', '1985-10-24', 176, 'London Everton', 37, '2004-08-31', '327021'),
(2, 16, 'M', 'eng', 'Michael', 'Carrick', 'Wallsend', '1981-07-08', 188, 'London Spurs', 27.2, '2006-07-31', '284219'),
(3, 25, 'M', 'ecu', 'Antonio', 'Valencia', 'Nueva Locha', '1985-08-04', 180, 'Wigan Athletic', 18.9, '2009-07-01', '209478'),
(4, 12, 'D', 'eng', 'Chris', 'Smalling', 'Grinvičas, Jungtinė Karalystė', '1989-11-22', 193, 'London Fullham', 8, '2010-07-01', '219081'),
(5, 4, 'D', 'eng', 'Phil', 'Jones', 'Prestonas', '1992-02-21', 185, 'Blackburn Rovers', 19.3, '2011-07-01', '300063'),
(6, 1, 'G', 'esp', 'David', 'de Gea', 'Madridas, Ispanija', '1990-11-07', 192, 'Atlético Madrid', 25, '2011-07-01', '225698'),
(7, 18, 'M', 'eng', 'Ashley', 'Young', 'Stevenage', '1985-07-09', 175, 'Aston Villa', 18, '2011-07-07', '210972'),
(8, 14, 'M', 'eng', 'Jesse', 'Lingard', 'Warrington', '1992-12-15', 175, 'academy', 0, '2012-07-07', '256080'),
(9, 27, 'M', 'bel', 'Marouane', 'Fellaini', 'Etterbeek', '1987-11-22', 194, 'London Everton', 32.4, '2013-09-02', '279633'),
(10, 8, 'M', 'esp', 'Juan', 'Mata', 'Burgos', '1988-04-28', 170, 'London Chelsea', 44.73, '2014-01-24', '262578'),
(11, 21, 'M', 'esp', 'Ander', 'Herrera', 'Bilbao', '1989-08-14', 182, 'Athletic Bilbao', 26, '2014-07-01', '205814'),
(12, 23, 'D', 'eng', 'Luke', 'Shaw', 'Kingstonas', '1995-07-12', 181, 'Southampton', 37.5, '2014-07-01', '274177'),
(13, 5, 'D', 'arg', 'Marcos', 'Rojo', 'La Plata', '1990-03-20', 187, 'Lisbon Sporting', 20, '2014-08-20', '277451'),
(14, 17, 'M', 'nld', 'Daley', 'Blind', 'Amsterdamas', '1990-03-09', 180, 'Amsterdam Ajax', 17.5, '2014-09-01', '222569'),
(15, 36, 'D', 'ita', 'Matteo', 'Darmian', 'Lenjanas, Italija', '1989-12-02', 183, 'Torino', 18, '2015-07-11', '282092'),
(16, 20, 'G', 'arg', 'Sergio', 'Romero', 'Bernardo de Irigoyen, Argentina', '1987-02-22', 192, 'Sampdoria', 0, '2015-07-27', '312581'),
(17, 11, 'A', 'fra', 'Anthony', 'Martial', 'Massy', '1995-12-05', 184, 'Monaco', 50, '2015-09-01', '208851'),
(18, 24, 'M', 'nld', 'Timothy', 'Fosu-Mensah', 'Amsterdam', '1998-01-02', 185, 'academy', 0, '2016-01-01', '321002'),
(19, 19, 'A', 'eng', 'Marcus ', 'Rashford', 'Manchester', '1997-10-31', 180, 'academy', 0, '2016-01-01', '277575'),
(20, 3, 'D', 'dkk', 'Eric', 'Bailly', 'Bingervilis', '1994-04-12', 187, 'Villarreal', 38, '2016-07-01', '234062'),
(21, 9, 'A', 'swe', 'Zlatan', 'Ibrahimovic', 'Malmė, Švedija', '1981-10-03', 195, 'Paris PSG', 0, '2016-07-01', '330572'),
(22, 22, 'M', 'arm', 'Henrikh', 'Mkhitaryan', 'Jerevanas', '1989-01-21', 178, 'Borussia Dortmund', 42, '2016-07-06', '247226'),
(23, 6, 'M', 'fra', 'Paul', 'Pogba', 'Langny-sur-Marne', '1993-03-15', 191, 'Turino Juventus', 105, '2016-08-09', '298051');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `positions`
--

CREATE TABLE `positions` (
  `letter` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(12) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `positions`
--

INSERT INTO `positions` (`letter`, `name`) VALUES
('A', 'Puolėjai'),
('D', 'Gynėjai'),
('M', 'Saugai');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `up` tinyint(4) NOT NULL DEFAULT '0',
  `down` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `comment_id`, `up`, `down`) VALUES
(29, 6, 28, 0, 1),
(30, 6, 27, 1, 0),
(31, 6, 26, 1, 0),
(32, 6, 23, 1, 0),
(33, 6, 25, 1, 0),
(34, 6, 24, 0, 1),
(35, 6, 31, 0, 1);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gedva.dev', 1),
(5, 'gedvidukas', 'e012854edf9e5a82e36621b78900d015eed11ead', 'gedwidas@gmail.com', 0),
(6, 'gedwu', 'e012854edf9e5a82e36621b78900d015eed11ead', 'gedwu@gmail.com', 1),
(7, 'Petras', '2a306b2b5713ab4ed669a245efca99d2025be261', 'petras@gmail.com', 0),
(8, 'lopas', '4e2710e140c079f4da6ceb9da3f550de88897ff9', 'lopas@gmail.com', 0),
(9, 'juozas', 'ad81648efc4a9abdbafed71917a8672d5bdba4eb', 'juozas@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`);

--
-- Indexes for table `blogs_ratings`
--
ALTER TABLE `blogs_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pos` (`pos`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD UNIQUE KEY `letter` (`letter`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`),
  ADD KEY `id_comment` (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `blogs_ratings`
--
ALTER TABLE `blogs_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);

--
-- Apribojimai lentelei `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
