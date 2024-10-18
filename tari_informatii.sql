-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 02:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tari_informatii`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`, `status`) VALUES
(1, 'admin', 'admin', 0, 1),
(2, 'admin2', 'coding', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `citybreak_tur`
--

CREATE TABLE `citybreak_tur` (
  `id` int(11) NOT NULL,
  `nume_oras` varchar(255) NOT NULL,
  `iltinerariu` text DEFAULT NULL,
  `imagine` varchar(255) DEFAULT NULL,
  `pret_citybreak` varchar(500) NOT NULL,
  `pret_tur` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `citybreak_tur`
--

INSERT INTO `citybreak_tur` (`id`, `nume_oras`, `iltinerariu`, `imagine`, `pret_citybreak`, `pret_tur`) VALUES
(1, 'Bucuresti', '09:00 - 10:30: Vizită la Piața Victoriei și Muzeul Național de Artă al României.\r\n12:00 - 13:30: Explorare la Piața Universității și Bulevardul Unirii, cu opțiunea de a vizita exteriorul și/sau interiorul Palatului Parlamentului.\r\n14:30 - 16:00: Plimbare în Centrul Vechi (Lipscani), vizită la Muzeul Național de Istorie a României.\r\n17:30 - 19:00: Relaxare în Parcul Herăstrău, cu opțiunea de a explora Grădina Japoneză și alte atracții din parc.\r\n19:30 - 21:00: Cina la un restaurant tradițional românesc în apropierea Parcului Herăstrău.', 'https://zilibera.ro/wp-content/uploads/2023/06/arcul-de-triumf-bucuresti-1024x576.jpg', '700', 150.00),
(2, 'Cluj-Napoca', 'Dimineața:\r\n09:00 - 10:30: Vizită la Piața Unirii și Catedrala Sfântul Mihail.\r\nPrânz:\r\n12:00 - 13:30: Explorare la Muzeul de Artă din Cluj-Napoca.\r\nDupă-amiază:\r\n14:30 - 16:00: Plimbare în Parcul Central și vizită la Muzeul Etnografic al Transilvaniei.\r\nSeara:\r\n17:30 - 19:00: Relaxare în Piața Muzeului și Piața Avram Iancu.\r\nCină:\r\n19:30 - 21:00: Cina la un restaurant tradițional românesc în centrul orașului.', 'https://romaniatourism.com/images/cluj-napoca/cluj-napoca-romania2.jpg', '800', 150.00),
(3, 'Timișoara', 'Dimineața:\r\n09:00 - 10:30: Vizită la Piața Victoriei și Catedrala Mitropolitană.\r\nPrânz:\r\n12:00 - 13:30: Explorare la Castelul Huniade și Muzeul de Artă Timișoara.\r\nDupă-amiază:\r\n14:30 - 16:00: Plimbare în Parcul Central și vizită la Muzeul Banatului.\r\nSeara:\r\n17:30 - 19:00: Relaxare în Piața Unirii și Piața Libertății.\r\nCină:\r\n19:30 - 21:00: Cina la un restaurant tradițional românesc în centrul orașului.', 'https://visit-timisoara.com/wp-content/uploads/2023/07/46-50.jpg', '550', 134.00),
(4, 'Brașov', 'Dimineața:\r\n09:00 - 10:30: Vizită la Piața Sfatului și Biserica Neagră.\r\nPrânz:\r\n12:00 - 13:30: Explorare la Strada Sforii și Muzeul Prima Școală Românească.\r\nDupă-amiază:\r\n14:30 - 16:00: Plimbare în Parcul Central și vizită la Castelul Bran.\r\nSeara:\r\n17:30 - 19:00: Relaxare în Centrul Istoric și Biserica Sfântul Nicolae.\r\nCină:\r\n19:30 - 21:00: Cina la un restaurant tradițional românesc în centrul orașului.', 'https://static.wixstatic.com/media/db4a54_4e63822206f8437bb01257ecb6e75058~mv2.jpg/v1/fill/w_640,h_364,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/db4a54_4e63822206f8437bb01257ecb6e75058~mv2.jpg', '920', 122.00),
(6, 'Roma', 'Dimineața:\r\n09:00 - 10:30: Vizită la Colosseum și Forumul Roman.\r\nPrânz:\r\n12:00 - 13:30: Explorare la Piața Venezia și Monumentul Vittorio Emanuele II.\r\nDupă-amiază:\r\n14:30 - 16:00: Plimbare în Piazza Navona și vizită la Pantheon.\r\nSeara:\r\n17:30 - 19:00: Relaxare în Trevi Fountain și Piața di Spagna.\r\nCină:\r\n19:30 - 21:00: Cina la un restaurant tradițional italian în centrul orașului.', 'https://mediacdn.libertatea.ro/unsafe/1260x708/smart/filters:format(webp):contrast(8):quality(75)/https://static4.libertatea.ro/wp-content/uploads/2022/05/locuri-de-vizitat-in-roma.jpg', '1200', 190.00),
(7, 'Milano', 'Dimineața:\r\n09:00 - 10:30: Vizită la Catedrala din Milano și Galeria Vittorio Emanuele II.\r\nPrânz:\r\n12:00 - 13:30: Explorare la Castelul Sforzesco și Parcul Sempione.\r\nDupă-amiază:\r\n14:30 - 16:00: Plimbare în Brera Art Gallery și vizită la Teatro alla Scala.\r\nSeara:\r\n17:30 - 19:00: Relaxare în Navigli District și Corso Como.\r\nCină:\r\n19:30 - 21:00: Cina la un restaurant tradițional italian în centrul orașului.', 'https://mediacdn.libertatea.ro/unsafe/1260x708/smart/filters:format(webp):contrast(8):quality(75)/https://static4.libertatea.ro/wp-content/uploads/2022/05/locuri-de-vizitat-in-milano.jpg', '990', 230.00),
(9, 'Paris', 'Dimineața:\r\n09:00 - 10:30: Vizită la Turnul Eiffel și Champ de Mars.\r\nPrânz:\r\n12:00 - 13:30: Explorare la Muzeul Luvru și Grădinile Tuileries.\r\nDupă-amiază:\r\n14:30 - 16:00: Plimbare în Cartierul Latin și vizită la Catedrala Notre-Dame.\r\nSeara:\r\n17:30 - 19:00: Relaxare în Montmartre și Sacré-Cœur.\r\nCină:\r\n19:30 - 21:00: Cina la un restaurant tradițional francez în centrul orașului.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThs5-mHeP12rT27QMJ8WEL9GJ9Q31P1psXag&s', '1350', 135.00);

-- --------------------------------------------------------

--
-- Table structure for table `contactări`
--

CREATE TABLE `contactări` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactări`
--

INSERT INTO `contactări` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Pescar rebeca', 'rebi@yahoo.com', '0753678333', 'Salut');

-- --------------------------------------------------------

--
-- Table structure for table `destinatii`
--

CREATE TABLE `destinatii` (
  `id` int(11) NOT NULL,
  `nume_destinatie` varchar(255) NOT NULL,
  `oras` varchar(255) NOT NULL,
  `descriere` text DEFAULT NULL,
  `latitudine` decimal(10,8) DEFAULT NULL,
  `longitudine` decimal(11,8) DEFAULT NULL,
  `imagine` varchar(500) NOT NULL,
  `tara` varchar(500) NOT NULL,
  `despre` text NOT NULL,
  `pret` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinatii`
--

INSERT INTO `destinatii` (`id`, `nume_destinatie`, `oras`, `descriere`, `latitudine`, `longitudine`, `imagine`, `tara`, `despre`, `pret`) VALUES
(1, 'Palatul Parlamentului', 'București', 'Palatul Parlamentului este una dintre atractiile turistice de top din Bucuresti. Este a doua cea mai mare cladire administrativa din lume (dupa Pentagon), un colos arhitectural care revendica si titlul de cea mai grea cladire din lume.', 44.42739800, 26.08753500, 'https://s.iw.ro/gateway/g/ZmlsZVNvdXJjZT1odHRwJTNBJTJGJTJG/c3RvcmFnZTAzdHJhbnNjb2Rlci5yY3Mt/cmRzLnJvJTJGc3RvcmFnZSUyRjIwMTMl/MkYxMCUyRjMxJTJGMTU5MjMxXzE1OTIz/MV9jYXNhLXBvcG9ydWx1aS0wMi5qcGcm/dz03ODAmaD00NDAmaGFzaD0wYzFjMGUz/YTE2ZmRhZjAwZmIzNzU2ZTYxNmI5MTY0Yg==.thumb.jpg', 'Romania', 'Palatul Parlamentului din București, România (cunoscut înainte de revoluția din 1989 sub numele de Casa Republicii sau Casa Poporului), măsoară 270 m pe 240 m, 84 m înălțime, și 92 m sub pământ realizat în spiritul arhitecturii realist socialiste. Are 9 niveluri la suprafață și alte 9 subterane. Conform World Records Academy, Palatul Parlamentului este a treia cea mai mare clădire administrativă pentru uz civil ca suprafață din lume, cea mai scumpă clădire administrativă din lume, și cea mai grea clădire din lume.\r\n Clădirea Palatului Parlamentului este situată în partea centrală a Bucureștiului (sector 5), pe locul care astăzi se cheamă Dealul Arsenalului, încadrat de strada Izvor la vest și nord-vest, Bulevardul Națiunile Unite spre nord, Bulevardul Libertății la est și Calea 13 Septembrie la sud. Aceasta se află la 10 minute distanță de Piața Unirii și 20 de minute de Gara de Nord (cu autobuzul 123).\r\n\r\nDealul pe care se află astăzi Palatul Parlamentului este în general o creație a naturii, având o înălțime inițială de 18 m, dar partea dinspre Bulevardul Libertății este înălțată în mod artificial.\r\n\r\nSe află pe locul 2 în lume la capitolul „cele mai costisitoare proiecte de arhitectură făcute vreodată\", clasament realizat de cel mai vizitat site de arhitectură din lume, ArchDaily. Deși a costat și costă enorm în bani, 70% este nefolosită, mare parte nefiind structurată pentru nevoile indivizilor ci pentru dorințele megalomanice ale lui Ceaușescu, cultul personalității punându-și amprenta pe acest edificiu.\r\n\r\n', '50'),
(2, 'Arcul de Triumf', 'București', 'Terminat in 1878, primul Arc de Triumf al Bucurestiului a fost realizat din lemn si dedicat soldatilor romani care au luptat in Primul Razboi Mondial. In 1936, a fost reconstruit in granit si proiectat de arhitectul Petre Antonescu la o inaltime de 27 de ani. metri. Arcul este impodobit cu sculpturi realizate de cei mai de seama sculptori romani, printre care Ion Jalea si Dimitrie Paciurea.', 44.46090000, 26.08340000, 'https://mediacdn.libertatea.ro/unsafe/870x0/smart/filters:format(webp):contrast(8):quality(75)/https://static4.libertatea.ro/wp-content/uploads/2020/11/arcul-de-triumf.jpg', '', 'Arcul de Triumf din București este un monument remarcabil care marchează multiplele momente importante din istoria României. Iată câteva detalii suplimentare despre acest monument iconic:\r\n\r\nIstorie: Arcul de Triumf a fost inițial construit din lemn în 1878, pentru a sărbători independența României și victoria împotriva Imperiului Otoman. Versiunea actuală, din piatră, a fost finalizată în 1936, după un proiect al arhitectului Petre Antonescu.\r\n\r\nDesign: Arcul de Triumf din București este inspirat de Arcul de Triumf din Paris, având o înălțime de aproximativ 27 de metri. Este realizat într-un stil arhitectural neoclasic și prezintă basoreliefuri care ilustrează momente din istoria României.\r\n\r\nLocație: Se află în nordul Bucureștiului, în apropierea Bulevardului Kiseleff, și marchează punctul de intrare în capitală dinspre nord.\r\n\r\nSimbolism: Arcul de Triumf simbolizează unitatea națională a României și victoriile țării în diverse conflicte istorice, inclusiv în cele două războaie mondiale.\r\n\r\nAtracție turistică: Este deschis publicului și este inclus în traseele turistice ale Bucureștiului. Vizitatorii pot urca pe platforma superioară pentru a admira o panoramă impresionantă asupra orașului.\r\n\r\nEvenimente ceremoniale: Arcul de Triumf este locul unde se desfășoară ceremonialuri de stat și parade militare în anumite ocazii speciale, cum ar fi Ziua Națională a României sau alte sărbători importante.\r\n\r\nRenovări și conservare: Monumentul a fost restaurat și renovat de-a lungul anilor pentru a-i păstra integritatea și frumusețea arhitecturală.\r\n\r\nArcul de Triumf reprezintă nu doar o comoară arhitecturală, ci și un simbol viu al istoriei și culturii României, fiind o destinație obligatorie pentru vizitatorii care explorează capitala țării.', 'Gratuit'),
(3, 'Muzeul Național de Artă al României', 'Bucuresti', 'Amplasat într-un palat impunător, muzeul găzduiește o colecție impresionantă de artă românească și internațională, inclusiv lucrări celebre de pictură, sculptură și artă decorativă.\r\nMuzeul are în jur de 70.000 de opere de artă, inclusiv lucrări de Nicolae Grigorescu, Ștefan Luchian, dar și picturi celebre de El Greco, Rembrandt și alții.', 44.43070000, 26.06400000, 'https://booktes.com/thumbs/866/61d833fac9182_1641559034.jpg', '', 'Muzeul Național de Artă al României este cel mai important muzeu de artă din țară. Funcționează în subordinea Ministerului Culturii și Cultelor. Muzeul a fost înființat în 1948 și este găzduit în Palatul Regal din Capitală.\r\n\r\nPalatul Regal din București\r\nMuzeul Național de Artă din București are în patrimoniul său una dintre cele mai mari colecții de picturi din România. El a fost înființat în anul 1948, având o colecție importantă a regelui Carol I, aflată inițial la Castelul Peleș de la Sinaia precum și în alte saloane ale reședințelor regale române. O altă parte a exponatelor a fost adusă de la Muzeul Brukenthal din Sibiu, din alte muzee bucureștene cum a fost Anastase Simu (înființat în anul 1910), Muzeul Dr. Ioan și Nicolae Kalinderu (inaugurat în anul 1909) precum și din colecții particulare. Pe lângă aceste exponate, s-a atras și fondul muzeal din colecția primului muzeu de artă din București, înființat în anul 1836 în clădirea unei școli a Mănăstirii Sfântul Sava la inițiativa pictorului Carol Valenstein.\r\n\r\nÎncepând din anul 1948, Muzeul Național de Artă ocupă clădirea Palatului Regal din București, construit în anul 1937. Astăzi, muzeul are spre expunere peste 70.000 de exponate separate în două direcții principale: Galeria Națională, ce are în componență lucrările celor mai buni pictori români (Ion Andreescu, Theodor Aman, Nicolae Grigorescu, Gheorghe Petrașcu,...) și Galeria de Artă Europeană.', '25'),
(4, 'Ateneul Român', 'Bucuresti', 'O sală de concerte de renume mondial, cu o arhitectură deosebită în stil neoclasic, cunoscută pentru acustica sa excelentă și pentru gazduirea unor evenimente muzicale de înaltă clasă.\r\n Ateneul Român este locul unde se desfășoară Festivalul Internațional George Enescu și alte concerte prestigioase. Este o parte importantă a vieții culturale din București și găzduiește și alte evenimente culturale și expoziții.', 44.44000000, 26.09850000, 'https://www.seebucharest.ro/wp-content/uploads/2019/03/ateneul-roman.jpg', 'Romania', 'Ateneul Român este o sală de concerte din București, situată pe Calea Victoriei, în Piața George Enescu (în partea nordică a Pieței Revoluției). Clădirea, care este realizată într-o combinație de stil neoclasic cu stil eclectic, a fost construită între 1886 și 1888, după planurile arhitectului francez Albert Galleron. În prezent, adăpostește și sediul Filarmonicii „George Enescu”.\r\n\r\nIstoric\r\nAteneul Român a fost ridicat în Grădina Episcopiei, teren ce aparținea familiei Văcăreștilor. Mulți contemporani au criticat amplasamentul ... căci locul ales era socotit ca fiind prea departe de centrul orașului și foarte greu de ajuns, mai cu seamă iarna. Nu avea statul destule terenuri centrale, trebuia oare neapărat ales acest loc \"la marginea orașului\"? În 1886 a început construcția actualului edificiu; o parte din fonduri au fost adunate prin subscripție publică, la îndemnul Dați un leu pentru Ateneu.\r\n\r\nLa recomandarea arhitectului francez Charles Garnier, autorul Opéra Garnier din Paris, planurile clădirii au fost concepute de arhitectul francez Albert Galleron, în așa fel încât să se poată folosi fundația deja turnată a manejului început de „Societatea Equestra Română”. Clădirea a fost inaugurată la 14 februarie 1888,[1] deși lucrările au continuat până în 1897.\r\n\r\n\r\nAteneul Român în 1940\r\nÎn 1935, la inițiativa lui George Enescu, au fost strânse fonduri pentru construcția orgii de concert, amplasată în fundalul scenei. Orga a fost construită de firma E.F. Walcker & Co. Ludwigsburg Württemberg și a fost inaugurată la 22 aprilie 1939 printr-un concert susținut de Franz Schütz, director al Hochschule für Musik din Viena. (Aceeași firmă construise în 1910-1912 orga care este instalată în Biserica Evanghelică C.A. București care se află în apropiere de Ateneu).\r\n\r\nAteneul a fost consolidat, restaurat și modernizat în perioada 1994-2004 de arhitectele Ana Braniște, Raluca Nicoară și Gabriela Mindu împreună cu inginerii Dragoș Badea și Silvia Caraman. A fost redeschis în 2005, cu ocazia ediției a XVII-a a Festivalului Internațional George Enescu.', '10'),
(5, 'Piața Unirii', 'Cluj-Napoca', 'Piața centrală a orașului, Piața Unirii, este punctul de întâlnire al clujenilor și al turiștilor. Este dominată de Biserica Sfântul Mihail, cu arhitectura sa gotică, și de clădirile baroce care înconjoară piața. Oferă o atmosferă vibrantă, cu terase, restaurante și evenimente culturale.', 46.77120000, 23.59290000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwb8uE-AofmaJWEJMBsf56KSM-33Bet0oHzw&s', '', 'Actuala Piață a Unirii a constituit miezul orașului medieval Cluj, grupat în jurul Bisericii Sf. Mihail. Zidurile cetății medievale delimitează centrul istoric al orașului. Piața este cea mai mare ca dimensiune (cca. 220m pe 160m) din vechile piețe aflate în centrul și sud-estul Europei. Există piețe de dimensiuni mai mari, dar acestea s-au format mult mai târziu.\r\n\r\nIstoric, este cea de-a doua piață a Clujului, după Piața Mică (actuala Piața Muzeului), în Evul Mediu, fiind denumită Piața Mare, spre a fi deosebită de cealaltă piață, Piața Mică. În ultima parte a secolului XIX numele i-a fost schimbat în Piața Principală, denumire care nu a rămas pentru mult timp. În prima parte a secolului XX piața a fost denumită Piața Regele Matia (Mátyas Király tér), după numele lui Matia Corvin. După 1980 piața a fost numită Piața Unirii, nume pe care îl poartă și acum. Între 1952-1980 denumirea i-a fost schimbată în Piața Libertății. Colocvial mai este denumită și Piața Mare sau simplu Centru.\r\n\r\nÎn mijlocul pieței se află Biserica Sf. Mihail și Statuia lui Matia Corvin. Laturile pieței conțin mai multe clădiri celebre: astfel pe latura estică se află Palatul Bánffy, care adăpostește acum Muzeul de Artă și cele 2 clădiri construite în oglindă, de la care pornește strada Iuliu Maniu. Pe latura sudică se află clădirea fostei primării și cea a Băncii Naționale. La colțul sud-vestic se află clădirea Hotelului Continental, ridicată la 1894.\r\n\r\nDupă revoluție, piața a devenit principalul punct financiar-comercial al orașului. Printre mărcile care au închiriat spații în Piața Unirii se numără, Adidas, United Colors of Benetton, Reebok, Outwear, Steillmann. Totodată s-au deschis reprezentanțe ale Băncii Transilvania, Citibank, Alpha Bank, BRD, Bank Leumi.\r\n\r\n\r\nPiața Unirii văzută din colțul sud-estic\r\nPiața urmează a fi supusă unui proces de refacere și transformare în zonă pietonală, alături de latura nordică a Bulevardului Eroilor. La data de 29 septembrie 2008 au început lucrările la amenajarea vestigiilor romane din fața Statuii lui Matia Corvin, aceasta reprezentând prima din cele patru faze ale refacerii pieței.', 'Gratuit'),
(6, 'Parcul Central „Simion Bărnuțiu”', 'Cluj-Napoca', 'Parcul Central este locul ideal pentru relaxare și recreere în Cluj-Napoca. Aici poți plimba pe aleile încărcate de istorie, admira sculpturile artistice și participa la diverse evenimente culturale și concerte în aer liber.', 46.77400000, 23.59270000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhISYHzjRvIR41UVByHhBHZpDrJNSFKFzulg&s', 'Romania', 'Parcul Central \"Simion Bărnuțiu\", colocvial Parcul Mare, în maghiară Sétatér, cu o vechime de peste 180 de ani, este unul dintre principalele spații verzi din zona centrală a municipiului Cluj-Napoca. Parcul este delimitat de Cluj Arena la vest, Teatrul Maghiar de Stat la est, râul Someșul Mic la nord, respectiv strada Iuliu Hossu (fostă Pavlov) la sud. Este înscris pe lista monumentelor istorice din județul Cluj, elaborată de Ministerul Culturii si Patrimoniului Național din România în anul 2010 \r\n\r\n\r\nÎncă de la începutul secolului al XIX-lea locația actualului parc a devenit un loc de întâlnire preferat de locuitorii orașului din clasa de mijloc. Primele încercări de a transfoma locul într-un parc public însă nu s-au bucurat de sprijinul material și moral al familiilor nobiliare clujene, ele deținând grădini ornamentale proporii.\r\n\r\nIstoria parcului începe în anul 1827, când organizația Asociația de Binefacere a Femeilor (Jóltevő Asszonyi Egyesület), sub conducerea președintei Jósika Józsefné, a închiriat terenul pe atunci neamenajat, cu scopul de a înființa un loc de recreație. La data de 1 mai 1838 a luat ființă Comisia Orășenească pentru Parc care a preluat activitatea de la Asociația de Binefacere a Femeilor. Parcul a fost deschis publicului la începutul anilor 1830, având inițial numele de Népkert (Grădina Populară).', 'Gratuit'),
(7, 'Cetatea Oradea', 'Oradea', 'Cetatea Oradea, construită inițial în secolul al XI-lea și reconstruită în secolul al XVI-lea, este un exemplu impresionant de arhitectură renascentistă. Cetatea a fost un important centru militar, religios și cultural, având o istorie bogată și diverse influențe arhitecturale. Astăzi, cetatea găzduiește muzee, expoziții și diverse evenimente culturale.', 47.05540000, 21.93580000, 'https://planiada.ro/www/uploads/638/306.Cetatea_Oradea_2.jpg', '', 'Cetatea Oradea reprezintă un monument arhitectonic din România, una dintre puținele cetăți utilizate și în prezent. Se spune despre cetate că nu putea fi cucerită din cauza vastelor rețele subterane de legături cu exteriorul[necesită citare]. Șanțul cu apă al cetății era umplut în caz de asediu cu apă termală (prin aducțiuni) din râul Peța.\r\nSecolul XI: Regele Ladislau I (1077-1095) a zidit o mănăstire fortificată, cu hramul Sfintei Fecioare Maria. Ulterior, întemeiază în cetate episcopia romano-catolică de Oradea, biserica mănăstirii fiind folosită drept catedrală.\r\n\r\nMiniatură a Regelui-Sfânt din Chronicum Pictum, 1360\r\n27 iunie 1192: Papa Celestinus III a emis un act prin care are loc sanctificarea regelui Ladislau I, fondatorul cetății orădene, locul unde este înmormântat, transformată, prin acest eveniment, în loc de pelerinaj al cărui prestigiu va spori constant.\r\nSecolele XI-XIII: Cetatea era o fortificație (castrum), cu val de pământ și palisadă, ziduri de piatră pe anumite porțiuni și turnuri din lemn la poartă și la colțurile incintei.\r\nAnul 1241: Magistrul Rogerius descrie în poemul „Carmen miserabile” cucerirea și incendierea Cetății Oradea în timpul invaziei mongole.\r\nFebruarie 1245: În urma Conciliului de la Lyon, unde s-au pus bazele unei politici coerente a statelor catolice în fața amenințării mongole, grație facilităților acordate, debutează și la Oradea un amplu proces de reconstrucție.\r\nCirca 1290: Voievodul Roland Borșa intră în conflict cu puterea regală, căreia episcopii orădeni i-au rămas fideli. Drept represalii, Borșa atacă cetatea aflată în plin proces de reconstrucție și-i provoacă mari distrugeri.\r\n1502-1510: la Școala capitulară din Oradea a învățat și tânărul Nicolae Olahus (1493-1568), celebrul umanist de origine română.\r\nAnul 1514: oștile răsculaților lui Gheorghe Doja atacă, dar nu reușesc să ocupe cetatea, datorită intervenției căpitanului cetății Făgărașului, Pál Tomori, venit în sprijinul asediaților. În urma executării lui Gheorghe Doja la Timișoara, de poarta Cetății Oradea a fost aninată una din cele patru părți în care a fost sfârtecat trupul său.\r\nAnii 1526-1538: după prăbușirea regatului feudal maghiar și împărțirea sa între Imperiul Otoman și Austria, Cetatea Oradea va fi disputată între Ferdinand de Habsburg, autoîncoronat rege al Ungariei, și regele de drept Ioan Zapolya.\r\n1703-1710: Cetatea Oradea a fost asediată fără succes de curuți în timpul conflictului dintre răsculații conduși de Francisc Rakoczi al II-lea și habsburgi.\r\nSecolul XVIII: deși Cetatea Oradea era doar o garnizoană militară, imperialii vor continua să-i acorde o atenție deosebită și să întreprindă mari campanii de reparații și reamenajări în anii 1725, 1754-1755 și 1775-1777; prin ultima se definitivează ansamblul arhitectonic ce poate fi vizitat în zilele noastre.', '10'),
(8, 'Palatul Vulturul Negru', 'Oradea', 'alatul Vulturul Negru este o clădire emblematică în stil secession, situată în centrul orașului Oradea. Construit la începutul secolului XX, palatul este cunoscut pentru pasajul său interior acoperit de un acoperiș din sticlă colorată, care oferă o priveliște spectaculoasă. Clădirea găzduiește diverse magazine, cafenele și restaurante.', 47.05310000, 21.93900000, 'https://infooradea.ro/wp-content/uploads/2017/09/adam-freundlich-960x550.jpg', 'Romania', 'Palatul Vulturul Negru este un monument arhitectonic reprezentativ al municipiului Oradea.\r\n\r\nPalatul, aflat la adresa str. Independenței Nr. 1, a fost construit între 1907-1908 de arhitecții orădeni Marcell Komor și Dezső Jakab, în stil secession. Antreprenorul lucrării a fost Ferenc Sztarill. Pe locul acestei clădiri s-a aflat palatul Arborele Verde, care dispunea de o sală ce găzduia manifestările culturale și politice.\r\n\r\nClădirea este de colț, cu parter înalt și patru etaje, format din două corpuri între care se găsește un pasaj vitrat cu acces spre str. Independenței, Piața Unirii și str. Vasile Alecsandri. Fațada principală dinspre Piața Unirii este asimetrică, fiind formată din două corpuri mari, inegale, ce relevă cel mai bine stilul secession. Fațada corpului din str. Independenței este mai ordonată și sobră. Motivul central îl reprezintă un corp ieșit, împărțit în două registre, care se termină în atic trilobat, având un vitraliu în timpan. Vitraliul cu vulturul negru, devenit o emblemă a ansamblului, a fost executat în 1909, în atelierul orădean Neumann K.\r\n\r\nPalatul Vulturul Negru este cea mai importantă clădire a stilului său, din Oradea. Clădirea este multifuncțională, cuprinzând, la vremea inaugurării, cazino, hotel, birouri, restaurant, grupate în trei corpuri asimetrice. În prezent, în clădire funcționează multe cluburi, cafenele, restaurante si birouri Digi, fiind un loc important de întâlnire pentru scena socială a Oradiei.', 'Gratuit'),
(9, 'Biserica cu Lună', 'Oradea', 'Biserica cu Lună, construită între 1784 și 1790, este o biserică ortodoxă unică datorită mecanismului său special care arată fazele lunii pe fațada clădirii. Aceasta este o atracție inedită și un simbol al orașului Oradea, combinând elemente baroce și neoclasice. Interiorul bisericii impresionează prin picturile murale și iconostasul bogat decorat.', 47.05230000, 21.93750000, 'https://www.oradeainimagini.ro/wp-content/uploads/2013/03/Biserica-cu-Luna.jpg', '', 'Edificiul cunoscut sub denumirea de „Biserica cu Lună ” este unul dintre monumentele emblematice ale oraşului. Piatra de temelie a bisericii a fost depusă în anul 1784 de către episcopul Aradului, Petru Petrovici. Construcţia a fost finalizată în 1790 după planurile arhitectului Éder Jakab.\r\n\r\nArhitectura\r\nDin punct de vedere stilistic, biserica aparţine barocului târziu provincial, a cărui exuberanţă decorativă este atenuată de elemente stilistice neo-clasice, aşa cum sunt, spre exemplu, desenele ce ritmează faţada, încununate cu capiteluri cu volute ionice, sau amplele arcaturi de tip „arc de triumf” prin care sunt puse în valoare ferestrele. Turnul de pe latura vestică ce surmontează un naos îngust etalează o succesiune stratificată de elemente stilistice târziu baroce şi neo-clasice, ca de exemplu cele două „panouri în oglindă” ce flanchează oculusul cu globul „Lunii”, panouri încheiate la extremităţi cu vase monumentale de inspiraţie „empire”. Acest registru baroc este surmontat de un discret fronton triunghiular neoclasicist, care susţine, la rândul lui, volumetria barocă a turnului. Aceasta este încununată de un coif metalic modelat în spirit eclectic, cu accente bizantine (cei patru Evanghelişti sun pictaţi după modelul icoanelor răsăritene).\r\n\r\nInteriorul\r\nIn interior, planimetria bisericii-sală se adaptează specificului cultului ortodox prin marcarea unui pronaos îngust surmontat de un amplul cor. De asemenea, naosul este amplificat spre altar prin doua ample nişe cu treseu dreptunghiular care sugerează planimetria răsăriteană de de tip triconc. Spectaculoasă este decoraţia iconostasului, piesa de mobilier liturgic cea mai reprezentativă. Remarcabilă ca şi execuţie plastică este sculptura scaunului episcopal şi cea a amvonului. Decoraţia este concepută dupa modelele epocii, ce îmbinau elemente de stil rococo, empire, târziu baroce sau neoclasice într-o viziune de ansamblu grandioasă.\r\n\r\nSfinţirea catedralei a avut loc în anul 1832, după finalizarea decoraţiunilor interioare.\r\nBiserica este monument istoric, cod LMI BH-II-m-A-01088.', 'Gratuit'),
(10, 'Biserica Neagră', 'Brașov', 'Biserica Neagră, construită în secolul al XIV-lea, este cel mai mare edificiu gotic din România și un simbol al orașului Brașov. Este cunoscută pentru orga sa impresionantă și colecția de covoare orientale.', 45.64190000, 25.58830000, 'https://www.turistulliber.ro/wp-content/uploads/2022/10/biserica-neagra-brasov-scaled.jpg', '', 'Biserica Neagră (în germană Die Schwarze Kirche) este biserica parohială a comunității evanghelice luterane din Brașov, situată în centrul municipiului Brașov. Clădirea gotică a fost parțial avariată în incendiul din 1689, când zidurile ei s-au înnegrit și a primit numele actual. Denumirea populară de după incendiu, „Biserica Neagră”, a fost acceptată oficial în secolul al XIX-lea.\r\n\r\nBiserica Neagră este unul dintre cele mai reprezentative monumente de arhitectură gotică din România, datând din secolele XIV-XV. Având o lungime de peste 89 de metri este considerată a fi a doua cea mai mare biserică din România, după Catedrala Mântuirii Neamului și cea mai mare construcție gotică din Europa de Sud-est. Datorită mărimii ei, când a fost finalizată a primit titlul de Cea mai mare biserică dintre Viena și Constantinopol.\r\nBiserica Neagră (în germană Die Schwarze Kirche) este biserica parohială a comunității evanghelice luterane din Brașov, situată în centrul municipiului Brașov. Clădirea gotică a fost parțial avariată în incendiul din 1689, când zidurile ei s-au înnegrit și a primit numele actual. Denumirea populară de după incendiu, „Biserica Neagră”, a fost acceptată oficial în secolul al XIX-lea.\r\n\r\nBiserica Neagră este unul dintre cele mai reprezentative monumente de arhitectură gotică din România, datând din secolele XIV-XV. Având o lungime de peste 89 de metri este considerată a fi a doua cea mai mare biserică din România, după Catedrala Mântuirii Neamului și cea mai mare construcție gotică din Europa de Sud-est. Datorită mărimii ei, când a fost finalizată a primit titlul de Cea mai mare biserică dintre Viena și Constantinopol.', '15 '),
(11, 'Cetatea Brașovului (Cetățuia de pe Strajă)', 'Brașov', 'Cetatea Brașovului, cunoscută și sub numele de Cetățuia de pe Strajă, a fost construită în secolul al XV-lea și oferă o vedere panoramică asupra orașului. A fost folosită ca punct de apărare și ulterior ca închisoare.', 45.64750000, 25.58920000, 'https://www.radiovacanta.ro/wp-content/uploads/2023/07/CETATEA-BRASOVULUI-PRIMARIA-BRASOV-2023-5.jpeg', '', 'Cetățuia de pe Strajă a fost o fortificație importantă de apărare, situată însă în afara Cetății Brașovului, cu scopul de a împiedica atacarea și mai ales bombardarea acesteia de pe înălțimile din jur.Cetățuia este situată la nord de Cetatea Brașovului (Centrul istoric al orașului), pe Dealul Straja (Dealul Cetății) între Brașovechi și Blumăna și este declarată monument istoric de importanță națională (cod LMI BV-II-a-A-11393).Cetățuia de pe Strajă nu trebuie confundată cu Cetatea Brașovului, ansamblul fortificațiilor care înconjurau actualul centru istoric al orașului.\r\nLa începutul secolului al XV-lea, pe Dealul Straja (Martinsberg) exista doar un turn de veghe în formă de potcoavă, care a fost completat în anul 1524 cu un bastion de lemn cu patru turnuri. Turnul avea trei etaje prevăzute cu ambrazuri la etajele inferioare și cu guri de păcură la ultimul nivel.\r\n\r\nFortificațiile din lemn au fost distruse în anul 1529 de armata lui Petru Rareș după lupta de la Feldioara din 21 octombrie 1529, în care a învins trupele împăratului Ferdinand I de Habsburg și au fost reconstruite la mijlocul secolului al XVI-lea. În urma extinderii influenței în Transilvania a lui Ferdinand I, împărat al Sfântului Imperiu Roman, rege al Boemiei și al Ungariei, în Transilvania, contele de Arco, subalternul lui Giovanni Battista Castaldo, adjunctul militar al regelui Ferdinand, a cerut refacerea și întărirea fortificației. Astfel, turnul central în formă de potcoavă a fost extins între anii 1552-1553 cu trei turnuri mici de artilerie, asemănătoare bastioanelor. Ulterior, în anul 1611, Cetățuia a fost înconjurată cu un șanț cu apă și un val de pământ.\r\n\r\nCa urmare a unui incendiu din anul 1618 care a distrus schela interioară de lemn, Cetățuia a fost supusă reconstrucției în 1625 de către autoritățile principatului Transilvaniei și tot atunci a fost săpată o fântână de 25 de metri în interiorul curții, adâncită ulterior la 81 de metri, care constituia sursa de apă a Cetățuii, în caz de asediu.\r\n\r\nCetățuia de pe Strajă în secolul XIX\r\nCetățuia de pe Strajă\r\nîn secolul XIX\r\nÎn anul 1630 a început ridicarea zidurilor exterioare ale Cetățuii cu bastioane și porți de acces, lucrare terminată în 1631. Construcția avea forma de patrulater, cu bastioane în stil italian în colțuri și cu o singură intrare care se făcea printr-un pod mobil.', '10'),
(12, 'Muntele Tâmpa', 'Brașov', 'Muntele Tâmpa este un parc natural situat în mijlocul orașului Brașov, oferind trasee de drumeție și o telecabină care duce la vârf, de unde se poate admira o panoramă spectaculoasă a orașului.', 45.63690000, 25.58990000, 'https://www.zebrasov.ro/blog/wp-content/uploads/2017/09/4.jpg', 'Romania', 'Tâmpa  este un munte care aparține de masivul Postăvaru, localizat în sudul Carpaților Orientali (mai precis în Carpații de Curbură) și înconjurat aproape în totalitate de municipiul Brașov. Muntele este alcătuit în principal din formațiuni calcaroase formate în urma procesului de încrețire a scoarței terestre. Înălțimea maximă atinsă este de 960m (după unele surse 995m), la aproape 400m deasupra orașului. Mare parte a sa (150 ha) este instituită ca rezervație naturală de tip florisitc, faunistic și peisagistic; corespunzătoare categoriei a IV-a IUCN.Aceasta a fost înființată în anul 1980, urmând ca apoi, prin Legea Nr.5 din 6 martie 2000 (privind aprobarea Planului de amenajare a teritoriului național - Secțiunea a -III-a - zone protejate să fie declarată arie protejată de interes național. La baza desemnării acesteia se află mai multe specii de animale (urși, râși, lupi, fluturi - 35% din totalul speciilor din țara noastră, păsări) și plante rare (crucea voinicului, obsiga bârsană) protejate la nivel european.\r\nSextil Pușcariu și-a pus problema etimologiei cuvântului Tâmpa astfel: „cum se face însă că românii, care au de obicei pentru munții lor denumiri atât de plastice, ca Omul, Babele, Strunga și alte nume ce se întâlnesc în Bucegii apropiați, să fi dat în cazul acesta numele atât de nepotrivit ce amintește de cuvintele «tâmp» și «tâmpit»?”. El preia explicația lui N. Drăganu, potrivit căreia sensul original al Tâmpei e cel de „stâncă abruptă”, cum sunt cele din vârfurile muntelui (Tâmpa mare și Tâmpa mică). Cuvântul este străvechi în limba noastră, din epoca preromană, găsindu-se și în dialectele meridionale italiene și la albanezii din Calabria. Dar aceasta nu este singura teorie existentă.\r\nTâmpa a fost relativ ferită de calamități precum alunecări de teren ori cutremure. Cele mai mari pagube au fost provocate de către incendii, mai cunoscute fiind cele din 1689, 1731, 1860, 1880 și 1946.', 'Gratuit'),
(13, 'cs', 'ca', 'c', 0.00000000, 0.00000000, 'ca', 'cs', 'cds', 'dc');

-- --------------------------------------------------------

--
-- Table structure for table `favorite1`
--

CREATE TABLE `favorite1` (
  `id` int(11) NOT NULL,
  `usermail` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite1`
--

INSERT INTO `favorite1` (`id`, `usermail`, `type`, `name`) VALUES
(1, 'rebypescar@yahoo.com', 'city', 'Cluj-Napoca'),
(12, 'rebypescar@yahoo.com', 'citybreak', 'Bucuresti'),
(3, 'rebypescar@yahoo.com', 'country', 'Italia'),
(2, 'rebypescar@yahoo.com', 'country', 'România'),
(13, 'rebypescar@yahoo.com', 'tur', 'București'),
(14, 'rebypescar@yahoo.com', 'tur', 'Oradea');

-- --------------------------------------------------------

--
-- Table structure for table `hoteluri`
--

CREATE TABLE `hoteluri` (
  `id` int(11) NOT NULL,
  `nume_hotel` varchar(255) NOT NULL,
  `pret` decimal(10,2) NOT NULL,
  `oras` varchar(255) NOT NULL,
  `link_booking` varchar(255) DEFAULT NULL,
  `imagine_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoteluri`
--

INSERT INTO `hoteluri` (`id`, `nume_hotel`, `pret`, `oras`, `link_booking`, `imagine_url`) VALUES
(1, 'Grand Hotel Bucharest', 1200.00, 'București', 'https://www.booking.com/hotel/ro/grand-hotel-bucharest.ro.html?aid=304142&label=gen173rf-1FCAsoggJCFWdyYW5kK2hvdGVsK2J1Y2hhcmVzdEgzWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQuIAgGiAglsb2NhbGhvc3SoAgO4Apmz_LIGwAIB0gIkMmVjZTYxNjEtZTUwZS00ZTgxLWFlOGEtNzk0NTNiMTI2NDMw', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/395929229.jpg?k=5b00d46a5ebbd09984da8f667f7c885927a8d1bc0c0bbe6bc2c9e9772fb35f70&o=&hp=1'),
(2, 'SIR FUNDENI HOTEL', 950.00, 'București', 'https://www.booking.com/hotel/ro/sir-fundeni.ro.html?aid=304142&label=gen173nr-1FCAEoggI46AdIM1gEaMABiAEBmAEguAEXyAEM2AEB6AEB-AELiAIBqAIDuAKtsvyyBsACAdICJGFlZGRhNzQ3LTdkNDItNDhlNy05ZjZiLTZjMGM1NjE1MWI3NtgCBuACAQ&sid=5aafae2a2b98af78ddcbfae347c7f1d0&dest_i', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/522984000.jpg?k=ddf17e90b1713441ca0838a619251676a0d1e2f7f1ce76f3e77ee2ab24750d2d&o=&hp=1'),
(3, 'Hotel Sir Orhideea', 700.00, 'București', 'https://www.booking.com/hotel/ro/sir-orhideea.ro.html?aid=304142&label=gen173nr-1FCAQoggJCEHNlYXJjaF9idWN1cmVzdGlIIFgEaMABiAEBmAEguAEXyAEM2AEB6AEB-AEDiAIBqAIDuAKNqqazBsACAdICJDQ1Mjc0NzAzLTBmZTItNDgyZS1hZDIyLWUyYmI4ZDI1YTBkMdgCBeACAQ&sid=5aafae2a2b98af78dd', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/31660527.jpg?k=2fd6bbcadf9443dc9ded70cf45337bfde8c7fdffe567601eb66035d8b5ed2bf9&o=&hp=1\r\n\r\n'),
(4, 'Sofitel Marseille Vieux-Port', 1026.00, 'Marsilia', 'https://www.booking.com/hotel/fr/sofitel-marseille-vieux-port.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78ddcbfae3', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/485540178.jpg?k=a4884e9beb49fff326001314770c6bbb4100b239332659aead96840d700502da&o=&hp=1'),
(5, 'Odalys City Marseille Centre Euromed', 890.00, 'Marsilia', 'https://www.booking.com/hotel/fr/odalys-city-marseille-centre-euromed.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/493296419.jpg?k=61714b21949f64dbd32069a9b822353e9b7643cd7d1357d82bca5fa78e60db4e&o=&hp=1'),
(6, 'Hotel Le M', 550.00, 'Marsilia', 'https://www.booking.com/hotel/fr/le-m-marseille1.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78ddcbfae347c7f1d0&dest', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/474855198.jpg?k=aacff4942d8fd6e0a9c92a5e1a884ed7d42a13d3e348f7d9f8135baf598291cd&o=&hp=1'),
(7, 'Hotel Impero', 630.00, 'Oradea', 'https://www.booking.com/hotel/ro/impero.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78ddcbfae347c7f1d0&dest_id=-1165', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/61077692.jpg?k=bbf9a7f30d1044923188c3fa3691f2e4fe79e61b9b933c200e4ec8e56bd62890&o=&hp=1'),
(8, 'Astoria Grand Hotel', 860.00, 'Oradea', 'https://www.booking.com/hotel/ro/astoria-grand.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78ddcbfae347c7f1d0&dest_i', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/25225159.jpg?k=0e3529ffd5f52920a2b58dfe8cdd2720424f7171fe2a7f243461df156ae0797d&o=&hp=1'),
(9, 'Hotel Mures', 350.00, 'Oradea', 'https://www.booking.com/hotel/ro/mures-baile-felix.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78ddcbfae347c7f1d0&de', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/203516133.jpg?k=e23568d0bff37fedb5c68b309a5d2ecd254ea4c0572da89931027bb8220f6e25&o=&hp=1'),
(10, 'Borgia di Firenze', 600.00, 'Florența', 'https://www.booking.com/hotel/it/borgia-di-firenze.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78ddcbfae347c7f1d0&de', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/539553082.jpg?k=76f8573c84b68b1252a878f1d7765097336767341901132e140251af7e29b80d&o=&hp=1'),
(11, 'Residenza Delle Arti \r\n', 900.00, 'Florența', 'https://www.booking.com/hotel/it/residenza-delle-arti-firenze.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78ddcbfae3', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/132228487.jpg?k=ec8711d38e2409ae703e260bbfbab0140aa455122438548c22f2efa1f7212eeb&o=&hp=1'),
(12, 'Floren Luxury Hotel', 1200.00, 'Florența', 'https://www.booking.com/hotel/it/bonciani.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78ddcbfae347c7f1d0&dest_id=-11', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/569747669.jpg?k=b6ce979f420479bbbaff744669aa64150961c8afc89622143f5ad395787590a4&o=&hp=1'),
(13, 'Vega Hotel', 1300.00, 'Roma', 'https://www.booking.com/hotel/ro/vega.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78ddcbfae347c7f1d0&dest_id=-116351', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/265649662.jpg?k=c7fcabe9d1af91b31c5beb80095c0543a4f879b1b7f4760468a39089e494c730&o=&hp=1'),
(14, 'Hotel Ges ', 900.00, 'Roma', 'https://www.booking.com/hotel/ro/ges.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78ddcbfae347c7f1d0&dest_id=-1163519', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/270040782.jpg?k=89e66fbaaa2beb0963b6a4b5a3b134bbdae6400fe6a6c08d8e80a2a8c6361e35&o=&hp=1'),
(15, 'Hotel Riviera', 700.00, 'Roma', 'https://www.booking.com/hotel/ro/riviera-mamaia.ro.html?aid=356980&label=gog235jc-1FCAMoTTjGA0ggWANowAGIAQGYASC4ARfIAQzYAQHoAQH4AQKIAgGoAgO4AuCXyrMGwAIB0gIkMjdjYjFkNDYtYzU2Ny00NjczLTllNjMtOWZlMTZkMDRiNmJl2AIF4AIB&sid=5aafae2a2b98af78ddcbfae347c7f1d0&dest_', 'https://cf2.bstatic.com/xdata/images/hotel/max1024x768/300926657.jpg?k=900079623c4d1fd9ab99934e0dd6022cc8716c4bbc0735d925cb27b746543d13&o=&hp=1');

-- --------------------------------------------------------

--
-- Table structure for table `orase`
--

CREATE TABLE `orase` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) DEFAULT NULL,
  `tara` varchar(255) DEFAULT NULL,
  `imagine` varchar(255) DEFAULT NULL,
  `descriere` text DEFAULT NULL,
  `latitudine` decimal(9,6) DEFAULT NULL,
  `longitudine` decimal(9,6) DEFAULT NULL,
  `despre` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orase`
--

INSERT INTO `orase` (`id`, `nume`, `tara`, `imagine`, `descriere`, `latitudine`, `longitudine`, `despre`) VALUES
(1, 'București', 'România', 'https://xplorer.ro/wp-content/uploads/2022/10/Locuri-de-vizitat-in-Bucuresti.webp', 'Cunoscută drept \'Micul Paris al Estului\', Bucureștiul se remarcă prin amestecul său eclectic de istorie și modernitate. Ca inima pulsantă a României, acest oraș vibrant și plin de contrast oferă o călătorie fascinantă prin timp și cultură. De la grandioasele sale bulevarde și clădirile istorice la muzeele sale remarcabile și viața de noapte efervescentă, Bucureștiul încântă și surprinde în egală măsură. ', 44.426767, 26.102538, 'București este capitala României, cel mai populat oraș și cel mai important centru industrial și comercial al țării. Populația stabilă de 1.883.425 de locuitori  face ca Bucureștiul să fie printre marile orașe din Uniunea Europeană. Conform unor estimări ce iau în considerare persoanele fără domiciliu în oraș, sau în tranzit, Bucureștiul adună zilnic peste trei milioane de oameni. La acestea se adaugă faptul că localitățile din preajma orașului, care fac parte din Zona Metropolitană, însumează o populație de aproximativ 430.000 de locuitori.\r\n\r\nBucurești este capitala României, cel mai populat oraș și cel mai important centru industrial și comercial al țării. Populația stabilă de 1.883.425 de locuitori (2011) face ca Bucureștiul să fie printre marile orașe din Uniunea Europeană. Conform unor estimări ce iau în considerare persoanele fără domiciliu în oraș, sau în tranzit, Bucureștiul adună zilnic peste trei milioane de oameni. La acestea se adaugă faptul că localitățile din preajma orașului, care fac parte din Zona Metropolitană, însumează o populație de aproximativ 430.000 de locuitori.\r\n\r\nPrima mențiune a localității apare în 1459, în timpul celei de-a doua domnii a lui Vlad Țepeș. În 1862 devine capitala Principatelor Unite. De atunci a suferit schimbări continue, devenind centrul scenei artistice, culturale și mass-media românești. Arhitectura elegantă și atmosfera sa urbană i-au adus în Belle Époque supranumele de „Micul Paris”. Deși clădirile și cartierele din centrul istoric au fost deteriorate sau distruse de război, cutremure și chiar programul lui Nicolae Ceaușescu de sistematizare, multe au supraviețuit. După anul 2000, orașul a cunoscut un boom economic și cultural.\r\n\r\nConform recensământului din 2011, 1.883.425 de locuitori trăiesc în limitele orașului, mai puțini față de cifra înregistrată la recensământul din 2002. Prin adăugarea orașelor satelit din jurul zonei urbane, zona metropolitană a Bucureștiului propusă ar avea o populație de 2,42 milioane de locuitori. Potrivit datelor neoficiale, populația este de peste 3 milioane de locuitori.\r\n\r\nDin punct de vedere economic, București este orașul cel mai prosper din România, și este unul dintre principalele centre industriale și noduri de transport din Europa de Est. Orașul are facilități pentru convenții, instituții de învățământ, zone culturale, centre comerciale, și zone de agrement.\r\n\r\nOrașul este administrat de Primăria Municipiului București, are același nivel administrativ ca și județele României și este împărțit în șase sectoare.'),
(2, 'Cluj-Napoca', 'România', 'https://romaniatourism.com/images/cluj-napoca/cluj-napoca-romania2.jpg', 'Străjuit de dealuri și încărcat de energie tinerescă, Cluj-Napoca este un oraș cu o personalitate distinctivă. Ca centru universitar de prestigiu din Transilvania, acest oraș oferă o atmosferă vibrantă, îmbinând tradiția și inovația. Cu piețe pitorești, clădiri istorice și o scenă culturală efervescentă, Clujul își surprinde vizitatorii cu fiecare colț de stradă.', 46.771210, 23.623635, 'Cluj-Napoca, numit doar Cluj până în 1974 și în limbajul cotidian, este municipiul de reședință al județului Cluj, România, aflat în regiunea istorică Transilvania. Având 324.576 de locuitori la recensământul din 2011, este al doilea oraș ca populație din țară. Cu o istorie de peste două milenii, orașul este supranumit Inima Transilvaniei sau Orașul comoară.\r\n\r\nClujul este situat în nordul Depresiunii Transilvaniei, între Munții Apuseni și Câmpia Transilvaniei, pe valea râului Someșul Mic la confluența cu râul Nadăș și cinci alte pâraie. Datorită geografiei locale, orașul s-a dezvoltat mai ales pe axa est-vest, de-a lungul limitei sudice a Podișului Someșan, fiind flancat la sud de dealul Feleac, iar la nord de dealul Lomb. Hotarele administrative ale municipiului cuprind o arie de 179,5 km², iar suprafața construită a municipiului era de 36 km² în 2020.\r\n\r\nIstoria Clujului începe cu popularea teritoriului orașului modern de triburi de daci și celți, care se presupune că au dat zonei denumirea de Napoca, și cucerirea acestuia de către Imperiul Roman. Promovat la rang de colonia, castrul roman Napoca este pentru o perioadă capitala provinciei Dacia Porolissensis. După retragerea romană și secole de invazii ale popoarelor migratoare, Clujul a fost repopulat cu coloniști sași în secolul XIII, aceștia constituind majoritatea populației până în secolul al XV-lea, orașul devenind ulterior majoritar maghiar. Clujul a găzduit mai multe sesiuni ale Dietei Transilvaniei și a fost capitala administrativă a Principatului Transilvaniei în secolul al XVIII-lea și secolul al XIX-lea (alternativ cu Sibiul). În secolul al XX-lea Clujul a devenit parte din România, iar populația orașului s-a schimbat treptat din majoritar maghiară în română.\r\n\r\nClujul este unul din cele mai importante centre academice, culturale și economice din România. Acesta găzduiește sediile unor firme importante pe plan național, precum Banca Transilvania, producătorul de farmaceutice Terapia, producătorul de cosmetice Farmec și Berăria Ursus. Din mediul academic clujean fac parte: Universitatea Babeș-Bolyai, cea mai mare și veche instituție academică din țară, Universitatea Tehnică din Cluj-Napoca și Universitatea Sapientia, cea mai mare universitate cu predare în limba maghiară din România.'),
(3, 'Timișoara', 'România', 'https://visit-timisoara.com/wp-content/uploads/2023/07/46-50.jpg', 'Cunoscută sub numele de \'Micul Veneția al Banatului\', Timișoara este o bijuterie a arhitecturii baroce și a diversității culturale. Cu străzi înguste, piețe pitorești și o atmosferă cosmopolită, acest oraș atrage privirile și inimile celor ce-i trec pragul. Evenimentele culturale, cafenelele cochete și farmecul său boem fac din Timișoara un loc de neratat în călătoria prin România.', 45.748900, 21.208700, 'Timișoara (în latină Timisvaria; în maghiară Temesvár; în germană Temeschwar, alternativ Temeschburg sau Temeswar; în sârbă Темишвар, cu alfabet latin: Temišvar; în turcă Temeșvar) este municipiul de reședință al județului Timiș, Banat, România. Se află în vestul României, aproape de frontierele cu Ungaria și Serbia, pe malul râului Bega.\r\n\r\nNumele localității provine de la cel al râului Timiș, combinat cu substantivul maghiar vár, „cetate”, adică Cetatea Timișului. Situat pe râul Bega, Timișoara este cel mai mare și important oraș al regiunii istorice Banat. Din 1848 și până în 1860 a fost capitala Voivodinei Sârbești și Banatului Timișan. După Primul Război Mondial Timișoara a intrat în componența României. În anul 1989, orașul a fost focarul Revoluției Române, care a îndepărtat de la guvernare regimul comunist.\r\n\r\nTimișoara este capitala regiunii de dezvoltare Vest și cel mai important oraș al macroregiunii de dezvoltare Sud-Vest a României.\r\n\r\nLa recensământul din 2011 avea 319.279 de locuitori și era al treilea oraș ca populație din România, fiind printre puținele orașe care au înregistrat o creștere de la cifra înregistrată la recensământul din 2002. Zona metropolitană Timișoara cuprinde 27 de localități, are o suprafață de 2.439,19 km², și o populație de 468.162 de locuitori.\r\n\r\nPotrivit datelor Institutului Național de Statistică, ce iau în considerare indici de migrație internă și navetism, Timișoara adună zilnic peste 500.000 de oameni, fiind orașul cu cea mai rapidă urbanizare din România, fenomen demografic corelat cu dezvoltarea economică accelerată a județului Timiș.Timișul este din anul 2023 cea mai mare piață de real-estate din România, cu 1.459 de proiecte în execuție și pregătire.\r\n\r\nConform datelor oficiale furnizate de Banca Mondială, Timișoara este orașul cu cea mai mare creștere economică din Uniunea Europeană. În clasamentul mondial al calității vieții realizat de platforma Numbeo, Timișoara se află pe primul loc în România și pe locul 84 în lume, imediat după Philadelphia și Birmingham, și peste Lisabona, Bruxelles sau Manchester.\r\n\r\nTimișoara are cea mai dinamică economie din România și cel mai mare aflux de investiții dintre orașele regionale ale țării, având cea mai ridicată rată antreprenorială din regiune și un sistem de Startup-uri în plină dezvoltare. Timișoara este cel mai bun oraș pentru afaceri din România, conform companiei Forbes. Este singurul oraș din Europa de Est cu grad investițional AAA, calculat de agenția Fitch Ratings.\r\n\r\nTrendul se va accentua odată cu aderarea României la Spațiul Schengen și celelalte structuri euro-atlantice, datorită proximității imediate la graniță și accesului rapid al Timișoarei la piețele din Occident și Balcanii de Vest.\r\n\r\nÎmpreună cu Aradul formează cea mai mare aglomerare urbană din afara Bucureștiului, constituind o conurbație cu o arie teritorială de polarizare de peste 5.000 km² și o populație de 805.000 de rezidenți.\r\n\r\nTimișoara este un centru industrial, comercial, medical, cultural și universitar important pentru România. Acesta găzduiește sediile multor firme autohtone: compania aeriană Carpatair; retailer-ul Life Care; compania de IT&C ETA2U; Profi, cel mai mare jucător de pe piața românească de retail; producătorul de sisteme de iluminat ELBA; producătorul de vopsele Azur; producătorul de contoare și regulatoare electrice AEM; firma de încălțăminte Guban; fabrica de bere Timișoreana; precum și cel mai mare combinat de prelucrare a cărnii din sud-estul Europei, Comtim.'),
(4, 'Brașov', 'România', 'https://static.wixstatic.com/media/db4a54_4e63822206f8437bb01257ecb6e75058~mv2.jpg/v1/fill/w_640,h_364,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/db4a54_4e63822206f8437bb01257ecb6e75058~mv2.jpg', '\r\nLa poalele munților, între legende și peisaje mărețe, se află Brașovul, un oraș medieval cu o aură mistică. Cu turnurile sale vechi, biserici impunătoare și străzi pietruite, Brașovul pare desprins dintr-un basm. Încântând vizitatorii cu farmecul său autentic și natura înconjurătoare spectaculoasă, acest oraș promite o călătorie plină de descoperiri și aventură.', 45.657900, 25.601200, 'Mărginit de culmile Carpaților Meridionali și strălucitor de arhitectură gotică, baroc și renascentist, Brașovul este unul dintre cele mai frumoase și vizitate locuri din România.\r\nBrașovul a fost fondat, în 1211, de cavalerii teutoni, pe un vechi sit dacic. În secolul al XIII-lea, Brașovul a fost așezat de sași și în scurt timp a devenit una dintre cele șapte cetăți cu ziduri ale Transilvaniei Siebenburgen.\r\nAmplasarea Brașovului, la intersecția rutelor comerciale care leagă Imperiul Otoman și Europa de Vest, împreună cu regimul fiscal prietenos, a permis comercianților săși să obțină bogății considerabile și să exercite o puternică influență politică în regiune. Acest lucru s-a reflectat și în numele orașului, Kronstadt (germană) sau Corona (latină), adică Orașul Coroanei.\r\nFortificații puternice de apărare a turnurilor au fost ridicate și întreținute cu finanțare oferită breslelor de meșteșuguri ale orașului.\r\n\r\nBrașovul găzduiește una dintre cele mai înguste străzi din Europa: Strada Sforii . Acest pasaj de 3,6 până la 4 picioare lățime și 265 de picioare lungime leagă Strada Cerbului de Strada Poarta Schei din Orașul Vechi Brașov. Începând cu secolul al XV-lea și până la începutul secolului al XX-lea, strada Funii a servit drept cale de acces pentru pompieri.\r\nLegenda spune că strada Rope a fost un loc de întâlnire pentru îndrăgostiți ai căror părinți nu le-au aprobat relația și că cuplurile care s-au sărutat pe strada Rope nu se vor despărți niciodată.\r\nPiața Primăriei Veche (Piața Sfatului) este mărginită de structuri baroc pictate colorat și bogat ornamentat.\r\nChiar la sud de Piața Primăriei, Biserica Neagră (Biserica Neagră) - cea mai mare construcție gotică din România - și-a luat numele de la aspectul zidurilor exterioare, întunecate de flăcările și fumul „Marele Foc” din 1689. Impresionantul interiorul bisericii adăpostește una dintre cele mai mari organe din Europa de Est și o colecție unică de covoare și kilimuri antice.\r\n\r\nMuntele Tâmpa și semnul hollywoodian sunt adevărate simboluri ale orașului Brașov.\r\nDeasupra indicatorului se afla o terasa mare care ofera o panorama unica a orasului.\r\nSemnul - iluminat noaptea - poate fi văzut de la o distanță de peste 15 mile.\r\nLângă Brașov sunt munți falnici, câmpuri ondulate, păduri dese și sate săsești vechi de secole.\r\n\r\nBrașov  este una dintre Transilvania (șapte cetăți cu ziduri) înființate de sașii transilvăneni.\r\nCealaltă Transilvania sunt:   ​​Bistrița (Bistritz),   Cluj (Klausenburg),   Mediaș (Mediasch),   Sebeș (Mühlbach),   Sibiu (Hermannstadt) și   Sighișoara (Sighișoara)'),
(6, 'Roma', 'Italia', 'https://mediacdn.libertatea.ro/unsafe/1260x708/smart/filters:format(webp):contrast(8):quality(75)/https://static4.libertatea.ro/wp-content/uploads/2022/05/locuri-de-vizitat-in-roma.jpg', 'Roma, capitala Italiei, este una dintre cele mai vechi și mai importante orașe din istoria umanității. Cunoscută pentru vestigiile sale istorice remarcabile, precum Colosseumul și Forumul Roman, Roma este o destinație iconică pentru turiști din întreaga lume. Orașul oferă o combinație unică între istorie, artă și cultură, fiind cunoscut și pentru influența sa în domeniile arhitecturii, modei și gastronomiei.', 41.902800, 12.496400, 'Roma este capitala Italiei. Situat pe malul fluviului Tibru, orașul are o istorie îndelungată, fiind de-a lungul secolelor capitala Republicii Romane, a Imperiului Roman, a Bisericii Romano-Catolice și a Italiei moderne. Roma are o populație de 2.745.819 persoane. Aria metropolitană are o populație de 4.355.725 milioane de locuitori. Este capitala regiunii Lazio și a Provinciei Roma.\r\n\r\nRoma este un important centru turistic. Printre monumentele cele mai faimoase se numără Colosseumul și Columna lui Traian. O enclavă a Romei este și statul Vatican, un teritoriu suveran al Sfântului Scaun situat într-un cartier roman. Este cel mai mic stat din lume, și capitala singurei religii care are reprezentanță în Națiunile Unite (ca un stat observator non-membru).\r\n\r\nRoma, Caput mundi („Capitala lumii”), la Città Eterna („Orașul etern”), Limen Apostolorum („Pragul apostolilor”), la città dei sette colli („Orașul celor șapte coline”) sau, pur și simplu, l\'Urbe („Orașul”), este profund modernă și cosmopolită. Ca unul dintre puținele orașe mari ale Europei care a supraviețuit celui de-al Doilea Război Mondial relativ puțin afectat, centrul Romei rămâne renascentist și baroc în esența sa. Centrul Istoric al Romei este pe lista patrimoniului mondial UNESCO'),
(7, 'Milano', 'Italia', 'https://mediacdn.libertatea.ro/unsafe/1260x708/smart/filters:format(webp):contrast(8):quality(75)/https://static4.libertatea.ro/wp-content/uploads/2022/05/locuri-de-vizitat-in-milano.jpg', 'Milano este unul dintre cele mai importante centre economice și culturale din Italia. Cunoscut pentru moda sa de lux și industria designului, Milano este de asemenea renumit pentru clădiri istorice impresionante cum ar fi Catedrala din Milano (Duomo di Milano), precum și pentru operele de artă celebre și galeriile de artă. Orașul este un nod vital pentru comerțul internațional și un punct de atracție pentru vizitatori datorită atmosferei sale vibrantă și bogatei sale moșteniri culturale.', 45.464200, 9.190000, 'Milano este principalul oraș din Italia de nord. Se află pe câmpiile Lombardiei, una dintre cele mai dezvoltate regiuni urbane ale Italiei. Milano este de asemenea recunoscut ca una din capitalele modei și design-ului, metropola Lombardiei fiind faimoasă prin casele de modă și cochetele ei magazine, cum ar fi cele de pe via Montenapoleone sau din renumita Galleria Vittorio Emanuele II din Piazza Duomo (considerată a fi cel mai vechi shopping mall al lumii). Orașul a găzduit World Exposition 1906 și și-a anunțat disponibilitatea de a fi gazda Universal Expo în 2015. Locuitorii din Milano sunt cunoscuți sub numele de Milanesi sau, informal, Meneghini sau Ambrosiani.\r\n\r\nMunicipalitatea (Comune di Milano) are aproximativ 1,3 milioane locuitori. Populația din zona urbană, care coincide cu Provincia Milano se ridică conform unei estimări din 2023 la 3.229.648 locuitori, în timp ce zona metropolitană însumează peste 8.220.170 milioane rezidenți, constituind deci cea mai densă populație din Italia, deși suprafața sa este relativ mică, nereprezentând decât a opta parte din cea a capitalei Roma. Acest fapt se datorează în principal unei dezvoltări vertiginoase a bogatei zone agricole Lombardia. Aglomerația urbană se centralizează în jurul orașului Milano, extinzându-se totuși și în zonele limitrofe, inclusiv în unele din teritoriile Elveției - în sudul Cantonului Ticino, deși aceasta nu implică nici un fel de unitate administrativă.'),
(8, 'Florența', 'Italia', 'https://www.travelmood.ro/thumbs/facebook/2018/04/19/city-break-florenta-excursii-de-o-zi-imprejurimi-12871.jpg', 'Florența este faimoasă pentru peisajele sale urbane pitorești, operele de artă clasice și arhitectura renascentistă remarcabilă. Orașul este renumit pentru Galeria Uffizi, Catedrala Santa Maria del Fiore (Duomo), Piazza della Signoria și Podul Vecchio (Ponte Vecchio), care atrag milioane de vizitatori din întreaga lume în fiecare an. Florența este considerată un centru cultural și artistic al Italiei și al Europei, contribuind semnificativ la patrimoniul mondial al umanității prin moștenirea sa artistică și culturală bogată.', 43.769600, 11.255800, 'Florența (în italiană Firenze) este capitala regiunii italiene Toscana și a provinciei Florența. Este cel mai populat oraș din Toscana, cu o populație de 367.569 de locuitori (1.500.000 în zona metropolitană).\r\n\r\nOrașul se află pe râul Arno și este cunoscut pentru istoria și importanța sa în Evul Mediu și în Renaștere, în special pentru arta și arhitectura sa. Un centru comercial și economic medieval, fiind unul dintre cele mai bogate orașe ale timpurilor, Florența este considerat locul de naștere al Renașterii italiene; de fapt a fost numită Atena din Evul Mediu. A fost mult timp sub conducerea de facto a Familiei Medici. Din 1865 până în 1870 orașul a fost de asemenea capitala Regatului Italiei.\r\n\r\nCentrul istoric al Florenței atrage anual milioane de turiști și a fost declarat de UNESCO Patrimoniu mondial în 1982. Florența este unul din cele mai frumoase orașe din lume, cu o istorie și cultură remarcabilă. Centrul istoric din Florența este alcătuit din numeroase piețe elegante, palate renascentiste, academii, parcuri, grădini, biserici, mănăstiri, muzee, galerii de artă și ateliere. Orașul este una din cele mai căutate destinații turistice din lume.\r\n\r\nOrașul oferă o gamă largă de colecții de artă, în special cele găzduite de Palazzo Pitti și de la Galeria Uffizi, (care primește aproximativ 1,6 milioane de turiști pe an). Florența este probabil ultimul oraș conservat al Renașterii din lume[8] și este considerat de mulți ca fiind capitala italiană a artei. Acesta a fost locul de naștere sau de domiciliu a numeroase personalități istorice marcante, cum ar fi: Dante, Boccaccio, Leonardo da Vinci, Amerigo Vespucci, Botticelli, Niccolò Machiavelli, Brunelleschi, Michelangelo, Donatello, Galileo Galilei, Catherine de\' Medici, Antonio Meucci, Guccio Gucci, Salvatore Ferragamo, Roberto Cavalli, Florence Nightingale și Emilio Pucci.'),
(9, 'Paris', 'Franta', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThs5-mHeP12rT27QMJ8WEL9GJ9Q31P1psXag&s', 'Parisul este capitala Franței și unul dintre cele mai populare orașe turistice din lume. Este cunoscut pentru simboluri precum Turnul Eiffel, Catedrala Notre-Dame, Arcul de Triumf și Muzeul Luvru. Orașul este celebru pentru cultura sa artistică, gastronomia rafinată și străzile sale emblematice.', 48.856600, 2.352200, 'Paris este capitala și cel mai mare oraș din Franța. Orașul este traversat de fluviul Sena, în nordul Franței, în mijlocul regiunii Île-de-France (cunoscută și ca regiunea Paris). Orașul în limitele sale administrative (cele 20 de arondismente) este în mare parte neschimbat din anul 1860, având o populație estimată oficială de 2.102.650 de locuitori la 1 ianuarie 2023, iar zona metropolitană Paris are o populație estimată oficial de 12.271.794 de locuitori la 1 ianuarie 2023, sau aproximativ 19% din populația Franței. Este una dintre cele mai populate zone metropolitane din Europa. Parisul a fost unul dintre cele mai mari orașe ale lumii occidentale pentru aproape 1000 de ani, înainte de secolul al XIX-lea și cel mai mare oraș din lume între secolele XVI-XIX. Începând cu secolul al XVII-lea, Parisul a fost unul dintre cele mai importante centre ale lumii de finanțe, diplomație, comerț, modă, gastronomie și știință. Pentru rolul său principal în arte și științe, precum și pentru sistemul său timpuriu extins de iluminat stradal, în secolul al XIX-lea, a devenit cunoscut sub numele de „Orașul Luminii”. Ca și Londra, înainte de cel de-al Doilea Război Mondial, a fost numită uneori și capitala lumii.\r\n\r\nParisul este astăzi unul dintre cele mai mari centre economice și culturale din lume, iar influența sa politică, educativă, divertisment, mass-media, modă, știință și arte contribuie la considerarea sa drept unul dintre cele mai importante orașe din lume. Acesta găzduiește sediul mai multor organizații internaționale, cum ar fi mai multe organizații ale Națiunilor Unite, UNESCO, Organizația pentru Cooperare și Dezvoltare Economică, Camera Internațională de Comerț, Biroul Internațional de Greutăți și Măsuri, informalul Club Paris, Agenția Internațională pentru Energie, Federația Internațională pentru Drepturile Omului, împreună cu organisme europene precum Agenția Spațială Europeană, Autoritatea Bancară Europeană sau Autoritatea Europeană pentru Valori Mobiliare și Piețe. Parisul este considerat unul dintre cele mai verzi și mai locuibile orașe din Europa. De asemenea este unul dintre cele mai scumpe.'),
(10, 'Marsilia', 'Franta', 'https://www.cruiseget.com/ro/uploads/file_6252e88d6b035.jpg', 'Marsilia este cel mai mare port al Franței, situat pe coasta mediteraneană. Orașul este renumit pentru Vieux-Port (Portul Vechi), Basilica Notre-Dame de la Garde și arhitectura sa diversă, care include influențe mediteraneene și istorice.', 43.296500, 5.369800, 'Marsilia  este al doilea cel mai mare oraș din Franța. Situată pe coasta Mediteranei, în vechea Provența (Provenza în italiană, în franceză Provence, Provença în occitană), este cel mai mare port comercial al țării. Marsilia este prefectura departamentului Bouches-du-Rhône și capitala regiunii Provence-Alpi-Coasta de Azur.\r\nFigurează printre cele mai vechi orașe ale Franței, fiind fondată sub numele de Massalía (în greacă veche Μασσαλία), spre anii 600 î.Hr., de către marinari și negustori greci originari din Phocaea. Vechiul nume grecesc, Massalía, provine din cuvântul grecesc Mασα (citit masa), ce înseamnă „jertfă”.\r\n\r\nÎn anul 49 î.Hr., orașul a trecut în subordinea romanilor, primind numele de Massilia, care, prin evoluție fonetică, a devenit numele actual al orașului, în occitană, Marselha, iar în franceză, Marseille.\r\nMarsilia a fost evanghelizată începând cu secolul I. Potrivit legendei, predicator ar fi fost Lazăr din Betania, Marta și Maria, cei trei frați prieteni ai lui Isus Cristos.\r\n\r\nÎn secolul IV se stabilește la Marsilia monahul Sfântul Ioan Casian, de origine din Dobrogea, care pune pe picioare monahismul galic. Acesta s-a născut în anul 365 într-o așezare situată la gurile Dunării. A fost călugăr la Betleem, călugăr pelerin în Egipt, diacon la biserica St. Ioan Gură-de-aur în Constantinopol, preot la Roma. În primăvara anului 416, el ajunge la Marsilia și se stabilește acolo. Construiește o criptă peste mormintele a doi martiri pentru a sărbători Euharistia. Era un obicei al Bisericii să alăture sărbătoarea Sacrificiului lui Isus cu sărbătoarea sacrificiului celor care au murit pentru el, iar mormintele pe care se ține slujba erau întotdeauna ale unor martiri. '),
(11, 'Oradea', 'Romania', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCjujplvzmYher0rCG2ZAwYkMpfvW-vx8FVA&s', 'Un oraș cu o arhitectură eclectică și un farmec aparte, Oradea impresionează prin frumusețea sa arhitecturală și bogăția sa culturală. Cunoscut pentru Băile Felix, Cetatea Oradea și Grădina Zoologică, Oradea este o destinație ideală pentru cei în căutare de relaxare, cultură și aventură în natură.', 47.045800, 21.918300, 'Oradea, mai demult Oradea Mare,  este municipiul de reședință al județului Bihor, Crișana, România. Se află în vestul României, pe râul Crișul Repede, în imediata apropiere a frontierei cu Ungaria.\r\n\r\nTotodată, Oradea este și cel mai important oraș din regiunea istorică Crișana. La recensământul din 2021 municipiul avea 183.105 de locuitori. Zona metropolitană, care include și 11 comune învecinate, avea, în anul 2002, o populație de 249.746 locuitori, dintre care 68,2 % români, 28,7 % maghiari ș.a. În perioada interbelică, 20,6 % din populația orașului era alcătuită din evrei, fiind consemnate, de asemenea, comunități de germani, slovaci, ucraineni etc. \r\n\r\nStațiunile balneare Băile Felix și Băile 1 mai se află la o distanță de 8 km, respectiv 4 km de oraș. Pe lângă apele termale recunoscute pe plan internațional pentru efectele terapeutice, în această zonă se găsește o formațiune carstică spectaculoasă, mai exact, un aven cu o adâncime de 86 de metri, denumit în zonă „Craterul de la Betfia”, precum și Pârâul Peța, cu o vegetație tropicală unică în Europa.\r\n\r\nDe secole, municipiul Oradea a reprezentat un punct important de referință pentru zonă, fiind cel mai important centru cultural și comercial. În Evul Mediu, în Cetatea Oradei exista un observator astronomic, iar astronomii care lucrau acolo foloseau meridianul Oradei ca meridian de 0°.\r\n\r\nTurismul orădean se dezvoltă, Oradea participând, alături de Băile Felix, la Târgul de Turism de la Viena din ianuarie 2015,și la Târgul de Turism de la Berlin in 2024.'),
(12, 'Lyon', 'Franta', 'https://lp-cms-production.imgix.net/2019-06/09725aa1c74318de6506ae99595d4115-place-des-terreaux.jpg', 'Lyon este un oraș din sud-estul Franței, faimos pentru gastronomia sa deosebită, inclusă în patrimoniul mondial UNESCO. Este cunoscut pentru Vieux Lyon (Centrul Vechi), cu străzi medievale, biserici și mănăstiri. Lyon găzduiește, de asemenea, Festivalul de Lumini (Fête des Lumières), atrăgând vizitatori din întreaga lume pentru spectacolele sale de iluminare urbană impresionante', 45.757800, 4.832000, 'Lyon este un oraș în Franța situat la confluența fluviului Rhône cu râul Saône, la 460 km spre sud-est de Paris și la 314 km spre nord de Marsilia. Este capitala departamentului Rhône și a regiunii Auvergne-Ron-Alpi. Este al treilea oraș ca mărime din Franța.\r\nGeografia Lyonului este marcată de confluența Ronului (Rhône) și Sonei (Saône) în partea sudică a centrului istoric, formând un fel de peninsulă sau „presqu\'île”; două mari coline, una la vest și una la nord față de centrul istoric al orașului și o câmpie plană la est de malul Rhonului. La vest este colina Fourvière, unde este ridicată catedrala Notre-Dame de Fourvière, palatul episcopal, turnul metalic (un turn TV ce imită ultimul tronson al Turnului Eiffel și un funicular).\r\n\r\nLa nord se află colina Croix-Rousse, fieful tradițional al atelierelor și magazinelor de mătase, o industrie pentru care orașul este faimos. Orașul medieval (Vieux Lyon) a fost construit pe malul vestic al râului Saône la poalele colinei Fourvière, la vest de peninsulă. Pe mica peninsulă (presqu\'ile) între Ron și Sona se află a treia piață publică din Franța, și una din cele mai mari din Europa: Place Bellecour. De fapt este cea mai mare piață publică liberă de obstacole (cum ar fi copaci, porțiuni de gazon etc) din Europa. Spre nord se poate merge pe strada pietonală Rue de la République iar spre sud pe strada pietonală Victor Hugo.\r\nIstoria Lyonului, începe în perioada romanilor în primul secol înainte de Hristos. Romanii au întemeiat așezarea numită Lugdunum (cetatea luminoasă după unii, iar după alții cetatea lui Lug). Timp de trei secole așezarea a servit ca centru al celor trei Galii, din punct de vedere politic, economic, militar și religios. După o vreme Lyonul cunoaște o perioadă decandentă, biserica fiind cea care i-a oferit ocazia de a renaște începând cu secolul al XI-lea, ca Primat al Galilor. Prosperitatea sa nu a încetat să se amplifice atingând apogeul în timpul Renașterii. De la finele secolului al XV-lea, apar marile târguri, apar bănci locale care îi atrag pe comercianții din întreaga Europă. Apoi elita intelectuală și artistică se instalează la Lyon.');

-- --------------------------------------------------------

--
-- Table structure for table `rezervaritur`
--

CREATE TABLE `rezervaritur` (
  `id` int(11) NOT NULL,
  `nume_complet` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `nr_adulti` int(11) NOT NULL,
  `nr_copii` int(11) NOT NULL,
  `data_tur` date NOT NULL,
  `mesaj` text DEFAULT NULL,
  `oras` varchar(100) NOT NULL,
  `varsta_copii` varchar(255) DEFAULT NULL,
  `usermail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rezervaritur`
--

INSERT INTO `rezervaritur` (`id`, `nume_complet`, `email`, `telefon`, `nr_adulti`, `nr_copii`, `data_tur`, `mesaj`, `oras`, `varsta_copii`, `usermail`) VALUES
(1, 'Pescar rebeca', 'reby@yahoo.com', '0743689843', 2, 1, '2024-06-25', '', 'Bucuresti', '2', 'rebypescar@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `rezervari_citybreak`
--

CREATE TABLE `rezervari_citybreak` (
  `id` int(11) NOT NULL,
  `nume_complet` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `nr_adulti` int(11) DEFAULT NULL,
  `nr_copii` int(11) DEFAULT NULL,
  `hotel_ales` varchar(255) DEFAULT NULL,
  `data_plecare` date DEFAULT NULL,
  `data_retur` date DEFAULT NULL,
  `mesaj` text DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `usermail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rezervari_citybreak`
--

INSERT INTO `rezervari_citybreak` (`id`, `nume_complet`, `email`, `telefon`, `nr_adulti`, `nr_copii`, `hotel_ales`, `data_plecare`, `data_retur`, `mesaj`, `city`, `usermail`) VALUES
(8, 'Pescar Rebeca', 'reby@yahoo.com', '0768946578', 2, 0, 'hotel1', '2024-06-19', '2024-06-22', 'se poate schimba compania aeriana?', 'Bucuresti', 'rebypescar@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `rezervari_intrari`
--

CREATE TABLE `rezervari_intrari` (
  `id` int(11) NOT NULL,
  `nume_complet` varchar(255) NOT NULL,
  `data_intrare` date NOT NULL,
  `ora_intrare` time NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usermail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rezervari_intrari`
--

INSERT INTO `rezervari_intrari` (`id`, `nume_complet`, `data_intrare`, `ora_intrare`, `telefon`, `email`, `usermail`) VALUES
(1, 'Pescar rebeca', '2024-06-19', '22:47:00', '0753734655', 'reby@yahoo.com', 'rebypescar@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tari`
--

CREATE TABLE `tari` (
  `id` int(11) NOT NULL,
  `nume` varchar(100) DEFAULT NULL,
  `imagine` varchar(255) DEFAULT NULL,
  `latitudine` decimal(10,6) DEFAULT NULL,
  `longitudine` decimal(10,6) DEFAULT NULL,
  `descriere` text DEFAULT NULL,
  `istoric` text DEFAULT NULL,
  `relief` text DEFAULT NULL,
  `clima` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tari`
--

INSERT INTO `tari` (`id`, `nume`, `imagine`, `latitudine`, `longitudine`, `descriere`, `istoric`, `relief`, `clima`) VALUES
(1, 'România', 'https://newsweek.ro/resize/BoOQq_HA-4b7AFz10qaN-WgC3FZEMmZmMy3GM3UwXS4/resize:fit:800:600:0/gravity:ce/aHR0cHM6Ly9uZXdzd2Vlay5yby9zdG9yYWdlL3N0b3JhZ2UvbWVkaWEvMjAyMy9NYXkvMWVmMWI2MDNmYmRkN2VlOTZlZjhkNTA0ZDdhNmY2MjkuanBlZw.jpg', 45.943200, 24.966800, 'România, situată în Europa de Sud-Est, este o țară cu o istorie bogată și diversă, îmbinând influențe latine și orientale. Cu o populație de aproximativ 19 milioane de locuitori, este una dintre cele mai populate țări din regiune.\r\n\r\nCapitala României este București, un centru cultural și economic vibrant, renumit pentru arhitectura sa eclectică, parcurile mari și viața de noapte animată. Pe lângă București, România este bogată în orașe istorice, cum ar fi Sibiu, Brașov și Cluj-Napoca, fiecare cu farmecul și caracteristicile sale unice.\r\n\r\nCultura românească este influențată de o istorie complexă și de o varietate de popoare și tradiții. România este cunoscută pentru folclorul său bogat, dansurile populare vibrante și mâncărurile tradiționale delicioase, cum ar fi sarmalele, mămăliga și mititeii.\r\n\r\nCu toate acestea, România nu este doar despre tradiție - este o țară în plină dezvoltare, cu o economie în creștere și oameni inovatori care contribuie la diverse domenii, de la tehnologie la artă și știință.', 'Istoria României nu a fost niciodată pe atât de idilică şi de liniştită pe cât îi este peisajul. Ținut locuit de oameni dârzi și harnici, demni și curajoşi, a fost mereu pus la încercare de valurile de invadatori care atacau această parte a Europei.\r\n\r\nRomânia este un stat relativ tânăr. A fost întemeiat în 1859 prin unirea Moldovei cu Valahia, mai târziu, în 1878, i s-a alăturat Dobrogea, iar în 1918, Transilvania și Bucovina, și pentru o perioadă și Basarabia.  Înainte de acest moment tot teritoriul era divizat politic, economic, religios. Singurul element comun a fost întotdeauna limba română.\r\n\r\nSe spune despre actualul teritoriu al României că este locuit neîntrerupt de 40.000 de ani. Cel mai solid argument este descoperirea făcută în 2002 la \"Peștera cu oase\" (jud. Caraş Severin) a trei schelete considerate a fi cele mai vechi rămășițe umane din Europa ale omului modern.\r\n\r\nUn alt moment de vârf în istoria acestor locuri este Cultura Cucuteni (5500 – 2750 î.Ch.), una dintre cele mai fascinante și misterioase civilizații, care s-a dezvoltat, în mare parte, în regiunea Moldovei, şi care folosea ceramica pictată. Frânturi ale priceperii lor sunt vasele minunat decorate cu celebrele motive spiralate sau cu figuri antropice sau zoomorfe.\r\n\r\n\r\n\r\n\r\nConform tradiției creștine, Sfântul Apostol Andrei este cel care aduce creștinismul în zonă, însă, istoricii se contrazic cu privire la momentul exact în care locuitorii adoptă creștinismul. Urmează secole în care triburi migratoare folosesc acest teritoriu drept culoar de trecere spre Europa de Vest în căutarea unor pășuni și condiții mai bune de trai. Începutul noului mileniu (sec. X-XI) găsește populația de la nord de Dunăre ca fiind singurul popor latin din estul Europei şi singurul popor latin de rit ortodox.', 'Relieful Romaniei este armonios repartizat: muntii, care formeaza un arc in partea centrala, ocupa 31% din suprafata, dealurile si podisurile 33%, iar campiile situate in S si V tarii 36%.  Carpatii Romanesti se impart in trei grupe: Carpatii Orientali, Meridionali si Occidentali.', 'Temperat-continentala de tranzitie, cu usoare influente oceanice (in V), mediteraneene (in SV), continentale (in NE), modificate local de orientarea reliefului. Iarna temperatura medie coboara sub -3°C, iar vara oscileaza intre 22°C si 24°C. Media anuala este, la alt. apropiate, de 11°C de-a lungul Dunarii si 8°C in N tarii. Minima absoluta inregitrata a fost de -38,5°C (in localitatea Bod din depresiunea Brasov), iar maxima absoluta de +44,5°C (in localitatea Ion Sion din Baragan). Precipitatiile medii sunt de 637 mm/an, cantitati mari inregistrandu-se in zonba montana (peste 1000 mm/an) si mai scazute in Baragan (500 mm/an), Dobrogea si Delta Dunarii (sub 400 mm/an).'),
(2, 'Franța', 'https://triply.ro/wp-content/uploads/2023/04/paris-franta.webp', 46.227600, 2.213700, 'Franța , recunoscută în mod oficial ca Republica Franceză este o republică constituțională unitară având un mod de guvernare semi-prezidențial, mare parte din teritoriul său și din populație fiind situată în Europa de Vest, dar care cuprinde și mai multe regiuni și teritorii răspândite în toată lumea. Capitala sa este orașul Paris, limba oficială este franceza iar moneda este euro. Deviza națională este „Libertate, egalitate, fraternitate” (în franceză Liberté, Égalité, Fraternité), iar drapelul Franței este format din trei benzi verticale colorate, respectiv în albastru, alb, roșu. Imnul național este La Marseillaise.', 'În timpul epocii fierului, zona ce reprezintă astăzi Franța a fost locuită de gali, un popor celtic. Roma a anexat zona în anul 51 î.Hr. și a deținut regiunea până în anul 486, când francii (un popor germanic) au cucerit regiunea și au format Regatul Franței. Franța a devenit o mare putere europeană în Evul Mediu, în urma victoriei din războiul de o sută de ani (1337-1453). În perioada renașterii, cultura franceză a înflorit, iar Franța a pus bazele unui imperiu colonial global, care urma ulterior să devină al doilea cel mai mare din lume. Secolul al XVI-lea a fost dominat de către războaie civile și religioase, între catolici și protestanți (hughenoți). Sub Ludovic al XIV-lea, Franța a devenit puterea culturală, politică și militară dominantă a Europei. În secolul al XVIII-lea, Revoluția franceză a răsturnat monarhia absolută, a dezvoltat una dintre cele mai vechi republici din istoria modernă și a elaborat Declarația Drepturilor Omului și ale Cetățeanului, care exprimă idealurile unei națiuni inclusiv în ziua de astăzi.\r\n\r\nÎn secolul al XIX-lea, Napoleon I a preluat puterea și a creat Primul Imperiu Francez, care prin războaiele napoleoniene a schimbat istoria Europei continentale. După prăbușirea imperiului, Franța a trecut printr-o perioadă tumultuoasă, având o succesiune de guverne ce a dus într-un final în 1870 la înființarea celei de-a Treia Republici Franceze. Franța a fost un participant major în Primul Război Mondial, din care a ieșit victorioasă, și a fost una dintre Puterile Aliate în Al Doilea Război Mondial, dar a intrat sub ocupația puterilor Axei în 1940. În urma eliberării, în 1944, a fost creată A Patra Republică Franceză, ulterior dizolvată în cursul Războiului din Algeria. A Cincea Republică, condusă de Charles de Gaulle, a fost înființată în 1958 și există până în ziua de astăzi. Algeria și aproape toate celelalte colonii au devenit independente în anii 1960, dar au păstrat legături economice și militare cu Franța.\r\n\r\nFranța este o putere nucleară, este unul dintre cei cinci membri permanenți ai Consiliului de Securitate al Națiunilor Unite și membru NATO. De asemenea, Franța este membră a G7, G20, a zonei euro, a spațiului Schengen și găzduiește sediile Consiliului Europei, Parlamentului European și UNESCO. Franța joacă un rol important în istoria mondială prin intermediul influenței exercitate de cultura sa, de limba sa și de valorile democratice, seculare și republicane pe care le-a promovat în ultimele două secole.', 'Teritoriul metropolitan al Franței oferă forme de relief și peisaje naturale deosebit de variate. Mari părți din teritoriul actual al Franței s-au înălțat de-a lungul mai multor episoade tectonice, în special în orogeneza hercinică din paleozoic, care stă la originea masivelor Armorican, Central, Morvan, Vosgi, Ardeni și Corsican. Munții Alpi, Pirinei și Jura sunt mult mai tineri, și sunt mai puțin erodați] — Alpii ating 4.810 m altitudine în Mont Blanc (cel mai înalt punct al Franței). Deși 60% din comunele Franței sunt clasificate ca având risc seismic, acest risc rămâne unul moderat.\r\n\r\nAceste masive delimitează mai multe bazine sedimentare, cele mai mari fiind bazinul Aquitaniei în sud-vest și Bazinul Parisului în nord — acesta din urmă cuprinzând mai multe regiuni cu soluri deosebit de fertile, în special platourile cu soluri acide din Beauce și Brie.În rest, diferite căi naturale de trecere, cum ar fi valea Ronului, permit comunicații facile. Zonele litorale oferă și ele peisaje diverse: maluri abrupte ale masivelor muntoase (Coasta de Azur, de exemplu), câmpii ce se termină cu faleze (Coasta de Alabastru), regiuni umede și forestiere, cum ar fi Sologne sau mari câmpii nisipoase (Câmpia Languedoc).\r\n\r\nRețeaua hidrografică a Franței este, în principal, drenată de patru mari fluvii: Loara, Sena, Garonne și Ron, la care se mai pot adăuga și Meuse și Rinul, mai puțin importante pentru Franța, dar fluvii majore la nivel european. Bazinele hidrografice ale primelor patru acoperă peste 62% din teritoriul metropolitan.', 'Clima Franței metropolitane este una temperată, influențată de anticiclonul Azorelor, ca și restul Europei de Vest, cu variante regionale sau locale destul de însemnate. Tipologia actuală reține șase mari zone climatice:\r\n\r\nsfertul nord-vestic al țării aparține zonei bretone, cu nuanțe pariziene și flamande; aceasta este caracterizată printr-un regim de temperatură blând, cu variații reduse de temperatură și cu precipitații relativ importante;\r\nla sud de aceasta, zona aquitană, cu aceleași caracteristici ca și zona bretonă, dar cu temperaturi mai ridicate;\r\nîn nord-estul țării, zona Lorenei deține caracteristici semicontinentale, cu ierni reci și precipitații mai reduse decât în vest;\r\npe coasta Mării Mediterane, zona provensală este caracterizată prin numeroase zile însorite, cu veri calde și uscate și cu ierni blânde și umede;\r\nîntre zona Lorenei și cea provensală se află zona dunăreană cu rol de zonă de tranziție, cu variații mari de temperatură;\r\nzona montană, ce corespunde regiunilor de altitudini ridicate, este caracterizată prin ierni reci și umede, cu precipitații nivale importante.\r\nMare parte din teritoriile de peste mări este, în schimb, dominată de clima tropicală (de intensitate variabilă), excepție făcând Guyana franceză (climă ecuatorială), Saint-Pierre-et-Miquelon (climă temperat-oceanică) și teritoriile australe și antarctice franceze (cu climă polară și temperat-oceanică).'),
(3, 'Italia', 'https://calatoresc.ro/wp-content/uploads/2013/10/roma-italia-770x600.jpg', 41.900000, 12.483300, 'Italia oficial Republica italiană,este un stat unitar, republică parlamentară, aflat în Europa de Sud. Ea acoperă o arie de 301.338 km² și are o climă temperată; datorită formei părții sale continentale, este denumită pe plan intern lo Stivale („Cizma”). Cu 61 de milioane de locuitori, este a cincea cea mai populată țară a Europei. Italia este o țară dezvoltată și are a treia cea mai mare economie din zona Euro și a opta din lume după PIB nominal.', 'Săpăturile efectuate pe teritoriul Italiei și al Sicilei au scos la lumină dovezi ale existenței umane în aceste regiuni încă din paleolitic, perioadă ce a debutat acum 2.500.000 de ani și s-a încheiat acum 200.000 de ani. Stau mărturie vestigiile arheologice descoperite în situri ca: Monte Poggiolo (în apropierea orașului Forlì) și Grotta dell\'Addaura (lângă Palermo). Putem menționa obiecte de artă confecționate acum 800.000 de ani și diverse desene rupestre.\r\nConform legendei, Roma a fost înființată în 753 î.Hr. de către Romulus, care l-a învins pe fratele sau Remus. În mitologie vedem cum Rhea Silvia și zeul Marte au doi fii, Romulus și Remus, care au fost alăptați de o lupoaică și crescuți de un cioban. Romulus a fost considerat strămoșul regilor care s-au succedat la conducerea Regatului Roman.\r\nÎn 535, Iustinian reunește Imperiul Roman, sub conducerea sa intrând aproape întreaga Peninsula El moare însă în 565, iar doi ani mai târziu longobarzii invadează nordul și Peninsula, viitoarea Italie revine la starea de fărâmițare. Longobarzii s-au stabilit in provincia Lombardia din Nord. Mai multe principate longobarde au apărut și în Sud, dar acestea au căzut în mâinile dinastiei normande în secolul al XI-lea. Francii au luptat, alături de papă, împotriva longobarzilor, până când Carol cel Mare a cucerit regatul longobard în 774 (marșul asupra Paviei) și s-a încoronat ca împărat.\r\nÎn 1025, franco-normanzii invadează Sicilia, iar în 1091 obțin controlul asupra peninsulei în fața germanilor și reușesc să-i alunge pe arabi din Sicilia, deși în 1282 prin celebra răscoală Vesperi Siciliani, sicilienii îi alungă pe franci.', 'Italia constă în principal dintr-o peninsulă (poreclă Stivale-cizma) care se extinde în Marea Mediterană, unde împreună cu două mari insule, Sicilia și Sardinia (Sardegna), creează diferite compartimente ale mărilor: Marea Adriatică la nord-est, Marea Ionică la sud-est, Marea Tireniană la sud-vest și în final Marea Ligurică la nord-vest.\r\n\r\nMunții Apenini (Monti Appennini) din centrul peninsulei, merg spre est, unindu-se cu Alpii, care apoi formează un arc, închizând Italia în nord. Aici se află și o lagună aluvionară mare, Laguna Pad-Veneția, străbătută de Râul Pad și de mulți afluenți ai săi, care curg dinspre Alpi, Apenini și Dolomiți.\r\n\r\nAlte râuri cunoscute sunt Tibrul (Tevere), Adige și Arno. Cel mai înalt vârf al Italiei este Mont Blanc (Monte Bianco) cu 4,807 m, dar Italia este mai ales asociată cu doi faimoși vulcani: acum adormitul Vezuviu (Vesuvio) în apropriere de Napoli și activul Etna în Sicilia.', 'Datorită întinderii mari pe longitudine și datorită configurației interne predominant montane, clima Italiei este deosebit de diversă. În mare parte din regiunile nordice și centrale continentale, clima are caracteristici de la subtropicale umede până la continentale umede și oceanice. În particular, clima văii Padului este predominant continentală, cu ierni geroase și veri călduroase.\r\n\r\nZonele de coastă din Liguria, Toscana și mare parte din sud se potrivesc cel mai bine stereotipului de climă mediteraneană (Csa în Clasificarea climatică Köppen). Condițiile climatice din zonele peninsulare de coastă pot fi foarte diferite de cele ale zonelor mai înalte și ale văilor din interior, în special în lunile de iarnă, când la altitudinile mai înalte tinde să fie mai rece, mai umed și adesea să cadă zăpadă mai abundentă. Regiunile de coastă au ierni blânde și veri în general uscate, deși în văi și în câmpii, vara tinde să fie călduroasă. Temperaturile medii pe timp de iarnă variază de la 0 °C în Alpi până la 12 °C în Sicilia, iar mediile pe timp de vară se încadrează între 20–30 °C.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(0, 'rebypescar@yahoo.com', '708a65c007259f302db570f607cfa897');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citybreak_tur`
--
ALTER TABLE `citybreak_tur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactări`
--
ALTER TABLE `contactări`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinatii`
--
ALTER TABLE `destinatii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite1`
--
ALTER TABLE `favorite1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usermail` (`usermail`,`type`,`name`);

--
-- Indexes for table `hoteluri`
--
ALTER TABLE `hoteluri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orase`
--
ALTER TABLE `orase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervaritur`
--
ALTER TABLE `rezervaritur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervari_citybreak`
--
ALTER TABLE `rezervari_citybreak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervari_intrari`
--
ALTER TABLE `rezervari_intrari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tari`
--
ALTER TABLE `tari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nume_index` (`nume`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `citybreak_tur`
--
ALTER TABLE `citybreak_tur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contactări`
--
ALTER TABLE `contactări`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `destinatii`
--
ALTER TABLE `destinatii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `favorite1`
--
ALTER TABLE `favorite1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hoteluri`
--
ALTER TABLE `hoteluri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orase`
--
ALTER TABLE `orase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rezervaritur`
--
ALTER TABLE `rezervaritur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rezervari_citybreak`
--
ALTER TABLE `rezervari_citybreak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rezervari_intrari`
--
ALTER TABLE `rezervari_intrari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tari`
--
ALTER TABLE `tari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citybreak_tur`
--
ALTER TABLE `citybreak_tur`
  ADD CONSTRAINT `citybreak_tur_ibfk_1` FOREIGN KEY (`id`) REFERENCES `orase` (`id`);

--
-- Constraints for table `rezervari_intrari`
--
ALTER TABLE `rezervari_intrari`
  ADD CONSTRAINT `rezervari_intrari_ibfk_1` FOREIGN KEY (`id`) REFERENCES `destinatii` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
