-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 10:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', '2020-05-11 05:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `FirstName` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Phone` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `NameOnCard` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `CardNumber` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ExpMonth` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ExpYear` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `CVV` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Country` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `StreetLine1` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `StreetLine2` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `City` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `State1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Pincode` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Additional_Information` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `BookingTime` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingId`, `PackageId`, `FirstName`, `Email`, `Phone`, `NameOnCard`, `CardNumber`, `ExpMonth`, `ExpYear`, `CVV`, `Country`, `StreetLine1`, `StreetLine2`, `City`, `State1`, `Pincode`, `Additional_Information`, `status`, `CancelledBy`, `BookingTime`) VALUES
(31, 18, 'Anjali', 'anjalis3455@gmail.com', '6307134789', 'Anjali Singh', '2154795623', '87', '8954', '', 'United states', 'PATNA', 'apa', 'lambhua', 'patna', '212356', 'Helooooo', 2, 'a', '2023-05-29 10:51:28'),
(32, 18, 'Shivam', 'ashish@gmail.com', '08126707709', 'Shivam Maurya', '6958956295', '05', '26', '', 'United states', 'Dewalpur', 'Sultanpur', 'Lambhua', 'Uttar Pradesh', '222302', 'Hello', 2, 'a', '2023-05-29 19:04:57'),
(33, 19, 'Shivam', 'ashish@gmail.com', '08126707709', 'Shivam Maurya', '8956239856', '15', '156523', '', 'United states', 'Dewalpur', 'Sultanpur', 'Lambhua', 'Uttar Pradesh', '222302', 'Hello', 2, 'a', '2023-05-29 19:08:32'),
(34, 19, 'Shivam', 'anjalis3455@gmail.com', '08126707709', 'Shivam Maurya', '6525852585258525', '05', '4000', '', 'United states', 'Dewalpur', 'Sultanpur', 'Lambhua', 'Uttar Pradesh', '222302', '', 2, 'a', '2023-05-29 19:19:28'),
(35, 20, 'Shivam Maurya', 'anjalis3455@gmail.com', '08126707709', 'Shivam Maurya', '1485659856223526', '05', '2026', '', 'Asia', 'Dewalpur', 'Sultanpur', 'Lambhua', 'Uttar Pradesh', '222302', 'Hello', 0, NULL, '2023-05-29 19:31:28'),
(36, 19, 'Shivam Maurya', 'ashish@gmail.com', '08126707709', 'Shivam Maurya', '8745148745484518', '02', '2026', '', 'Asia', 'Dewalpur', 'Sultanpur', 'Lambhua', 'Uttar Pradesh', '222302', 'cvbn', 0, NULL, '2023-05-29 19:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `packageoffer`
--

CREATE TABLE `packageoffer` (
  `OfferId` int(11) NOT NULL,
  `OfferName` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `OfferLocation` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `OfferDetails` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ActualPrice` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `OfferPrice` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `PercentageOff` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `OfferImage` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packageoffer`
--

INSERT INTO `packageoffer` (`OfferId`, `OfferName`, `OfferLocation`, `OfferDetails`, `ActualPrice`, `OfferPrice`, `PercentageOff`, `OfferImage`, `Creationdate`, `UpdationDate`) VALUES
(10, 'Darjeeling-Town in West Bengal', 'West Bengal', 'The following day, we got up late, but it was still dark outside. An irritating faint knocking sound on the window did wake me. I reluctantly moved the curtains and what I saw outside made me rub my eyes. It’s snowing! The snowflakes were knocking against the glass panes. With uncontrollable excitement, we decided the venture to Chowrasta. Foggy weather conditions and low visibility forced most people to stay indoors, barring a few excited tourists like us from the plains who flocked the hills to witness the snowfall. The temperature was 3°C and, thankfully, was not windy. We did experience snowfall earlier, but it was a lifetime experience for kids – their first snowfall. I was awestruck to see that still there is a long queue out Kev’s for breakfast. Adverse weather did not allow us to stay out for long; we had to come back after spending a couple of hours. The rest of the day was lazing on the couch, watching online streaming and enjoying our favourite poison. We had Darjeeling offbeat locations travel plans the following days. But not sure about the feasibility in the present climatic conditions. The alarm goes off. What torture during holidays! The room is freezing outside the electric blanket. Saw the first glimpse of sunlight on the peak. An SMS flashing on the screen “Sir Ji, weather is clear. Be ready at 8.30”. I was about to ignore the alarm, then suddenly remembered our driver would honk in the next 90 minutes. Better wake up, make the kids ready and all set to a great day ahead. Around 9 am, after completing our banana pancake in breakfast, it is time we hit the road. Excited to think of the memories we are going to make today. Lepchajagat is 18 km from Darjeeling, at an altitude of 6959 feet. As the name suggests, the place was once predominantly a settlement by the Lepcha tribe. Today the tiny hamlet is significantly a reserve forest area filled with thick oak, firs and rhododendron trees. The offbeat forest is 45 minutes driving from Darjeeling.', '6550', '5900', '15%', '6467143468923.jpg', '2023-05-19 06:16:20', NULL),
(11, 'Ladakh, Jammu and Kashmir', 'Jammu and Kashmir', 'Ladakh, union territory of India, located in the northern part of the Indian subcontinent in the vicinity of the Karakoram and westernmost Himalayan mountain ranges. It is bounded by Jammu and Kashmir union territory to the west and by Himachal Pradesh to the south; its northern and eastern borders are disputed with Pakistan and China, respectively. Ladakh was administered as part of Jammu and Kashmir state from 1947 until 2019, when it became a separate administrative unit. Area 22,836 square miles (59,146 square km). Pop. (2011) 274,289. Geologically complex and topographically immense, the Great Himalayas contain ranges with numerous peaks reaching elevations of 20,000 feet (6,100 metres) or higher, between which lie deeply entrenched remote valleys. Running parallel to the main Great Himalayas directly to the east is the Zaskar Range, which begins its flank from the main range at the Karnali River to the southeast of Ladakh. The zone was heavily glaciated during the Pleistocene Epoch, and remnant glaciers and snowfields are still present. The mountains constitute a climatic divide, representing a transition from the monsoon climate of the Indian subcontinent in neighbouring Jammu and Kashmir to the dry continental climate of Central Asia and Tibet. The valley of the upper Indus River is a well-defined feature that follows the geologic strike (structural trend) westward from the Tibetan border to the point in the Pakistani sector of Kashmir where the river rounds the great mountainous mass of Nanga Parbat to run southward in deep gorges that cut across the strike. In its upper reaches the river is flanked by gravel terraces; each tributary builds an alluvial fan out into the main valley. The town of Leh stands on such a fan, 11,500 feet (3,500 metres) above sea level, with a climate characterized by an almost total lack of precipitation, by intense insolation (exposure to sunlight), and by great diurnal and annual ranges in temperature. Life depends on meltwater from the surrounding mountains, and vegetation is alpine (i.e., consists of species above the tree line), growing on thin soils.', '8999', '7600', '20%', '64671589e4748.jpg', '2023-05-19 06:22:01', NULL),
(12, 'Mysuru-City in Karnataka', 'Karnataka', 'Mysuru, also called Mysore, city, south-central Karnataka state, southern India. It lies northwest of Chamundi Hill and midway between the Kaveri (Cauvery) and Kabani (Kabbani) rivers on the undulating Deccan plateau at an elevation of 2,525 feet (770 metres). The land surrounding the city is characterized by rain-filled shallow depressions (tanks). The site was mentioned in the epic Mahabharata as Mahishmati (Mahismati). Mysore was known as Purigere in the Mauryan era (3rd century BCE) and later became Mahishapura. It was the administrative capital of the princely state of Mysore from 1799 to 1831 and long was the second most-populous city (after Bengaluru [Bangalore]) of Karnataka state, until being surpassed by Hubballi-Dharwad in the second half of the 20th century. Its urban agglomeration, however, is still the state’s second largest. Mysuru is an important manufacturing and trading centre, and it has textile (cotton and silk), rice, and oil mills, sandalwood-oil and chemical factories, and tanneries. The suburb of Belagula, to the northwest, produces chrome dyes and chemical fertilizer. The city’s industries are powered by the hydroelectric station near Sivasamudram Island to the east. Mysuru’s cottage industries include cotton weaving, tobacco and coffee processing, and the making of bidis (cigarettes). The area is known for its artwork in ivory, metal, and wood, and the market near the railway station serves as a collection centre for local farm products. The city has an airport, lies at the junction of two northern railway lines, and is a major intersection on India’s principal western road system. An ancient fort, rebuilt along European lines in the 18th century, stands in the centre of Mysuru. The fort area comprises Mysore Palace (1912) with its ivory and gold throne, Curzon Park, the Silver Jubilee Clock Tower (1927), Gandhi Square, and two statues of maharajas. To the west, near Gordon Park, are the former British residency (1805), the noted Oriental Library, university buildings, and public offices. Jaganmohan Palace and Lalitha Mahal are other notable buildings. The University of Mysore was founded in 1916; other educational facilities include Maharaja’s College, Maharani’s College for Women, and affiliated colleges of medicine, law, engineering, and teacher training. There are also several institutions for the advancement of Kannada culture.', '7699', '7300', '10%', '6467163cdec85.jpg', '2023-05-19 06:25:00', NULL),
(13, 'Mata Vaishno Devi Temple', 'Katra-Jammu and Kashmir', 'The second-most visited Hindu pilgrimage destination in India, Mata Vaishno Devi Cave Temple is situated in the Trikuta Hills in Katra, Jammu & Kashmir. Hindu devotees from all over the world visit this famed religious site where the Mother Goddess or Mata Vaishno Devi is said to fulfill their wishes. This religious place is considered the most important Shaktipeeth as it is believed, here the skull of the Goddess Sati fell. At Mata Vaishno Devi Cave, the goddess is in the form of a five and a half feet tall rock which has three heads or the Pindies. On Mata Vaishno Devi pilgrimage, devotees make traditional offerings to Mata of chunri (a red coloured drape), sarees, dry fruits, silver or gold ornaments, cholas, flowers etc. Mata Vaishno Devi Shrine Board was formedu in 1986 and ever since this most popular religious site in Jammu started to attract a lot of Hindu pilgrims. The holy cave of Mata Vaishno Devi is said to have been discovered by Pandit Sridhar, a Hindu priest. Goddess Vaishnavi appeared in the dream of the priest and instructed him on how to find here abode on Trikuta Hills. The priest following her instruction heads out for the journey after the dream and found the cave as instructed earlier. Mata Vaishno Devi appeared to him and blessed him with four sons. She also gave him the boon of being the custodian of the cave. Even today, Pandit Shridhar’s descendant abide by the commitment.', '8599', '6300', '30%', '646716a17ddc8.jpg', '2023-05-19 06:26:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbldestination`
--

CREATE TABLE `tbldestination` (
  `DestinationId` int(11) NOT NULL,
  `DestinationName` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `DestinationLocation` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `DestinationDetails` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `DestinationImage` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldestination`
--

INSERT INTO `tbldestination` (`DestinationId`, `DestinationName`, `DestinationLocation`, `DestinationDetails`, `DestinationImage`, `Creationdate`, `UpdationDate`) VALUES
(13, 'Ayodhya Ram Mandir', 'Ayodhya-Uttar Pradesh', 'The Uttar Pradesh administration is rushing to fulfil the December 2023 deadline by completing phase one of the Ram Temple in Ayodhya. The Ram Temple, one of the largest temples erected in India after independence, is said to be a blend of modern technology amenities with age-old Indian customs.\r\nThe Mughal monarch Babur erected the Babri Masjid between 1528 and 1529. Members of the Hindu community, on the other hand, claimed ownership of the location, believing it to be the birthplace of Lord Ram. The location was later declared contested, resulting in a lengthy legal fight.\r\n\r\nOn November 9, 2019, the Supreme Court resolved the title issue by accepting the 2.77 acres of contested land as Lord Ram’s birthplace, opening the path for the construction of the Ram Mandir.\r\n“Every material that is being used…every configuration and sketch that is being used…is being done in IIT Chennai,” says the architect. They are the pioneers. L&T and TCE then put it to the test. Eventually, we offered the Central Research Building Institute the testing procedure for our 1,000-year programme. The CRBI has simulated the whole load that will be applied to the framework. In summary, we rely on the brightest minds in our country.\r\n\r\n“There is just one goal: how to make this temple distinctive and lasting for 1,000 years,” Nripendra Misra, head of the temple building committee of the Shri Ram Janmabhoomi Teerth Kshetra Trust, stated Asianet News in an exclusive conversation.\r\n\r\nDisclaimer: The views expressed above are for informational purposes only based on industry reports and related news stories. PropertyPistol does not guarantee the accuracy, completeness, or reliability of the information and shall not be held responsible for any action taken based on the published information.', '64670c83371d9.jpg', '2023-05-19 05:43:31', NULL),
(14, 'Golden Temple of Amritsar', 'Amritsar', 'The top of our list when traveling to India was to visit Punjab and witness the Golden Temple of Amritsar. The Golden Temple of Amritsar, or Darbar Sahib or Harmandar Sahib is Sikhism’s Holiest Site\r\n\r\nBut this temple welcomes everyone to enjoy its beauty and spirituality. It doesn’t matter your race, faith or culture. Everyone is welcome.\r\nAmritsar is located in Punjab and is 460 km from Delhi. We spent 12 hours on a slow train in general class where locals welcomed us offering food and even their seats to make us more comfortable. We knew this trip was going to be special before we even arrived.\r\n\r\nMen and Women must cover their heads out of respect before entering the Golden Temple. Long pants and shoulders should also be covered.\r\n\r\nLike many other holy places around, shoes are not allowed in the temple complex. But this temple has a little twist to walking barefoot. Before entering you walk through a foot bath to ensure your feet are clean.\r\n\r\nThe Golden Temple temple is free to enter.\r\nIn my humble opinion, I think the Sikh Religion is probably one of the least understood religions on the planet. We learned quite a bit during our time at the Golden Temple. And we’d like to share what we learned about Sikhism there.\r\nFounded in the 15th century by Guru Nanak’s frustration with the caste system and rituals of other religions, Sikhism was formed to be all-inclusive. Much of the religion is also based on science.\r\n\r\nUnlike The Pope of Catholicism or The Dalai Lama of Buddhism, a woman can lead the Sikhs if she is elected. Women have complete equality and can even be the head of the religion.', '64670d7cb520c.jpg', '2023-05-19 05:47:40', NULL),
(15, 'Rameswaram -Tamil Nadu', 'Tamil Nadu', 'Adi Shankaracharya propagated the idea of Hinduism through Advaita Vedanta and the town of Rameshwaram stands as a testimony of his faith. One of the four pilgrimage places, Char Dham of India, it modestly invites followers of Lord Shiva from everywhere to pay visit at least once in their lifetime to the Jyotirlinga installed in the Ramanathaswamy Temple. Vaishnavites are also not left in their devotion to come to this place which is believed to be associated with Lord Rama, incarnation of Lord Vishnu as well.\r\n\r\nLocated in Ramanathapuram district, the town is a part of Pamban Island also known as Rameshwaram Island being associated with the legendry temple built in marvelous Dravidian style of architecture. Situated at the very tip of the Indian peninsula, the island is connected with Indian mainland by Pamban Bridge on Pamban Channel in Gulf of Mannar.\r\n\r\nA visit to Varanasi in Uttar Pradesh is not considered complete in terms of pilgrimage if not coupled with a trip to Rameshwaram which is said to be the Varanasi of South. Welcome to the charm that devotees come to associated with an abode of God irrespective of the place it belong to.\r\nThe town has been changed many hands; main amongst them were Cholas, Jaffna Kingdom, Allaudin Khilji (Malik Kafur), Pandya Dynasty, Vijayanagara Empire, followed by some other rulers who ruled the town for a very short while before British East India Company directly took over it and made it a part of Madras Presidency.\r\n\r\nThe Rameshwaram Temple which is the main reason the town is known to every other person following Hinduism, Lord Shiva and Lord Vishnu is said to be built by Sethupathis of Sethukavalan - custodian of the legendary bridge built by Lord Rama when he crossed the sea to reach Lanka (now Sri Lanka) the place in the control of Demon King Ravana, also a Brahman.', '64670e3fdef41.jpeg', '2023-05-19 05:50:55', NULL),
(16, 'Amarnath Cave Temple', 'Sonmarg-Jammu & Kashmir', 'The holy shrine of Amarnath Ji, or Amarnath Temple, is located at an elevation of 3,888 meters approx, about 29 kilometers from Pahalgam. Inside the cave is a Shiva Lingam (a phallus shaped formation made of ice), considered to be the most holy symbol by Hindus all across the globe. Devotees visit it in large numbers from June to August, with the pilgrimage tour famously known as Amarnath Yatra, which begins from Chandanwari. It is considered to be one of the 18 Maha Shakti Peethas, or the holiest shrines in Hinduism. Besides seeking blessings at the Amarnath Temple, the views surrounding it are extraordinary.\r\nThe place where the Amarnath Cave stands today is believed to be the same place where Lord Shiva explained the meaning of life and eternity to his consort & wife, Goddess Parvati. According to legends, Bhrigu Muni, a famous sage in Hinduism, was the first person to have discovered this holy site. At that time, the entire Kashmir Valley was submerged under water, and Kashyap Muni, another powerful sage, drained the waters with his divine powers. As the waters cleared, Bhrigu Muni was the first person to have the site of the Shiva Lingam.\r\nYou can also reach Amarnath Temple via a helicopter ride. After arriving in Srinagar, drive up to Baltal & board the helicopter which will take you up to Panchtarni. From Panchtarni, you will have to trek only for about 6 kilometers, or you can hire a palki/horse ride.\r\nYou will have to complete online registration before taking the Amarnath Yatra. You will have to fill out an application form which can be downloaded online, where you will be required to enter your details like full name, gender, address, state & mobile number.Registration will commence from all bank branches.Carry enough toilet paper, soap napkins.Remember to carry two pairs of shoes & enough socks.To maintain energy, carry adequate chocolates, apples, dry fruits & cheese cubes.Remember to carry medicines like anti allergic tablets, painkillers, crocin etc.Carry enough warm clothes with you.You will also have to buy pre activated SIM cards at the base camp of Baltal & Nunwan.Improve your physical fitness by doing physical exercises before taking the Amarnath Yatra.No one below 13 years of age and no one above 75 years of age can take the Amarnath Yatra.', '6467105313148.png', '2023-05-19 05:59:47', NULL),
(17, 'Kedarnath Town in Uttarakhand', 'Uttarakhand', 'Kedarnath is one of the most sacred pilgrimages of Lord Shiva situated in Rudraprayag district of Garhwal region in Uttarakhand. Kedarnath is one of the Char Dham in Uttarakhand and the most important dham among Panch kedar. Kedarnath is situated at an altitude of 3586 mts, in the lap of the majestic mountain peaks and near the head of river Mandakini, Kedarnath range stands one of the twelve Jyotirlingas of Lord Shiva.\r\n\r\nKedar meaning powerful is another name of Lord Shiva the protector and the destroyer. The beautiful ambiance around the temple looks like quite peace on heaven causes a beautiful place to do meditation.The main attractions here is the Shiva Temple, which is a popular Hindu shrine and pilgrimage, attracting devotees from all over the world. The travel and tourism scope here is strengthened by factors like natural beauty and religious zest.\r\n\r\nShiva is considered the embodiment of all passions - love, hatred, fear, death and mysticism which are expressed through his various forms. There are more than 200 shrines dedicated to Lord Shiva in the area itself, the most important one is Kedarnath.\r\nKedarnath Temple is the most revered shrine of Hindu deity Lord Shiva. The Mandir was built in 8th century A.D. by Adi Shankaracharya. It is adjacent to the site of an earlier temple built by the Pandavas. Kedarnath is one of India’s most famous temples (more than 1000 years old temple) dedicated to Lord Shiva.\r\n\r\nKedarnath Temple complex is being rehabilitated after 2013 Kedarnath floods. New facilities include helipads, helipad and new guest houses. Online facilities for Kedarnath booking are also there. Kedarnath Puja can be book online and no physical presence of devotees needed. Some pujas could be book on the internet or in person. The daily pooja rituals at the Kedarnath temple start early morning, around 4.00 am with Maha Abhishek and end at around 7.00 pm with the Shyam aarti. The Kedarnath temple opens for darshan for the general public around 6 am.\r\n\r\nVisitors can touch idle and perform Abhishek with Ghee before 3 p.m. After 5 p.m., no one can approach Idle, but they can get Darshan from a distance. The temple at Kedarnath opens only six months of the year when the sun enters the zodiac sign of Aries and Scorpio is in full-blown eclipse.', '646710fdbe0dc.jpeg', '2023-05-19 06:02:37', NULL),
(18, 'Tirupati', 'Andhra Pradesh', 'Venkateswara Temple is a landmark Vaishnavite temple situated in the hill town of Tirumala at Tirupati in Chittoor district of Andhra Pradesh, India. The Temple is dedicated to Lord Sri Venkateswara, an incarnation of Vishnu, who is believed to have appeared here to save mankind from trials and troubles of Kali Yuga. Hence the place has also got the name Kaliyuga Vaikuntham and Lord here is referred to as Kaliyuga Prathyaksha Daivam. The temple is also known by other names like Tirumala Temple, Tirupati Temple, Tirupati Balaji Temple. Lord Venkateswara is known by many other names: Balaji, Govinda, and Srinivasa.\r\nSrimad-Bhagavatam describes the history of Tirumala that during Satya yuga, Hiranyaksha, due to his exploitative activities created a situation where the earth was drowned to the bottom of the Garbhodaka ocean. At that time, the demigods approached Lord Brahma who prayed to Lord Vishnu.Lord Vishnu then appeared from the nose of Brahma in the form of Sri Varahadev. He killed Hiryanaksha and lifted the earth, ‘Bhudevi’ with His tusks, and brought her to a safe position on top of the Garbhodaka ocean.\r\nBhudevi, the goddess of the earth, being an expansion of Goddess Laxmi was very much pleased to be reunited with Her Lord, Her eternal consort in the form of Sri Varahadev. In Vaikuntha ‘BhuVaraha’resideseternally, so Bhudevi, who is the goddess of this earth, pleaded Lord Varahadev to remain with Her on this earth planet. Sri Varahadev decided to satisfy her desire and called for Garuda to fly to Vaikuntha and bring one of His favourite mountains down to the earth, so that He and Bhudevi could reside here together on that mountain. That mountain was brought down, and it is today called ‘Tirumala’. It is the mountain that was carried from Vaikuntha by Garuda himself.', '646712a728d17.jpg', '2023-05-19 06:09:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(18, 'Taj Mahal-An immense mausoleum', 'Family Package', 'Agra', 5699, 'Free pickup and drop facility', 'The Taj Mahal is located on the right bank of the Yamuna River in a vast Mughal garden that encompasses nearly 17 hectares, in the Agra District in Uttar Pradesh. It was built by Mughal Emperor Shah Jahan in memory of his wife Mumtaz Mahal with construction starting in 1632 AD and completed in 1648 AD, with the mosque, the guest house and the main gateway on the south, the outer courtyard and its cloisters were added subsequently and completed in 1653 AD. The existence of several historical and Quaranic inscriptions in Arabic script have facilitated setting the chronology of Taj Mahal. For its construction, masons, stone-cutters, inlayers, carvers, painters, calligraphers, dome builders and other artisans were requisitioned from the whole of the empire and also from the Central Asia and Iran. Ustad-Ahmad Lahori was the main architect of the Taj Mahal.\r\n\r\nThe Taj Mahal is considered to be the greatest architectural achievement in the whole range of Indo-Islamic architecture. Its recognised architectonic beauty has a rhythmic combination of solids and voids, concave and convex and light shadow; such as arches and domes further increases the aesthetic aspect. The colour combination of lush green scape reddish pathway and blue sky over it show cases the monument in ever changing tints and moods. The relief work in marble and inlay with precious and semi precious stones make it a monument apart. \r\nThe four free-standing minarets at the corners of the platform added a hitherto unknown dimension to the Mughal architecture. The four minarets provide not only a kind of spatial reference to the monument but also give a three dimensional effect to the edifice.\r\n\r\nThe most impressive in the Taj Mahal complex next to the tomb, is the main gate which stands majestically in the centre of the southern wall of the forecourt. The gate is flanked on the north front by double arcade galleries. The garden in front of the galleries is subdivided into four quarters by two main walk-ways and each quarters in turn subdivided by the narrower cross-axial walkways, on the Timurid-Persian scheme of the walled in garden. The enclosure walls on the east and west have a pavilion at the centre.', '646701c31b6b4.jpg', '2023-05-19 04:57:39', '2023-05-19 05:04:30'),
(19, 'Jaipur: The Ancient \'Pink City\' of Rajasthan', 'Couple', 'Rajasthan', 4999, 'Free pickup and drop facility', 'The first planned city of India, Jaipur has a rich history of a clan of rulers who lived in magnificent forts and palaces. But, that’s not only what the capital of Rajasthan is famous for. The entire city of Jaipur is painted in the colour pink and there’s a really interesting story behind this. Here’s all you need to know about the ‘Pink Paint Culture’ of one of the most hospitable cities on the planet.\r\nThe reason behind the terracotta-pink colour of the city was the influence of a king named Sawai Ram Singh. In 1876, Queen Victoria’s son, Albert Edward, Prince of Wales (who later became King Edward VII, Emperor of India) visited India and, since pink was considered the colour of hospitality at the time, Maharaja Ram Singh had the whole city painted pink to welcome the royal guests. Lord Albert was said to have described Jaipur as the ‘pink city’, hence creating the name Jaipur is known by today.\r\nAt the time of his rule, the Maharaja Sawai Ram Singh was one of the richest and most powerful men in the country. His true power was reflected by the law passed by him to maintain the pink colour for any future buildings in the city. The law was passed in 1877 because legend has it that the Queen of Jaipur was extremely fond of the terracotta pink colour.', '646704d661acd.jpg', '2023-05-19 05:10:46', NULL),
(20, 'The Kerala Backwaters', 'Family Package', 'Kerala', 6999, 'Free pickup and drop facility', 'The Kerala backwaters is the rather unappealing name given to the peaceful and picturesque palm-lined network of lagoons, lakes, rivers, and canals that run inland from the coast of Kerala, from Kochi (Cochin) to Kollam (Quilon) in India. The main entry point, situated between Kochi and Kollam, is Alleppey (Alappuzha). At the heart of the backwaters is vast Vembanad Lake.\r\n\r\nTraditionally, the backwaters are used by locals for transport, fishing, and agriculture. Annual snake boat races, held along the backwaters, also provide a great source of entertainment for the locals and tourists alike.\r\n\r\nThe lush green landscape, diverse wildlife, and houses and villages that line the backwaters make a journey along these waterways seem like a journey through another world. No wonder the backwaters is one of the must-visit tourist places in Kerala. Don\'t miss it!\r\n\r\nThese dreamy photos of the Kerala backwaters show some of the attractions.\r\nAlleppey can easily be reached in just over two hours by prepaid taxi from Kochi airport. Tickets are available at the booth in the airport arrivals hall. Expect to pay about 3,500 rupees. Uber and Ola app-based taxis are also available.\r\n\r\nA much cheaper option is to take one of the Kerala State Road Transport Corporation bus services from in front of the airport to Alleppey. Unfortunately, their departure times don\'t follow a schedule though. If you arrive when there\'s not a bus, you\'ll find more services departing from Aluva Rajiv Gandhi Bus Station, about 20 minutes away, and the modern Vytilla Mobility Hub located 45 minutes away in Ernakulam.', '646705846e750.jpg', '2023-05-19 05:13:40', NULL),
(21, 'A VISIT TO BANARAS OR VARANASI', 'Family Package', 'VARANASI', 4000, 'Free pickup and drop facility', 'This time, I made a trip to Varanasi in May, 2014. I went to Varanasi to attend a friend’s wedding. I had planned for two more days so that I could explore the city. Our group consisted of three boys including Sanjay and Rohit. Sanjay is a native of Banaras and we stayed at his place.\r\nOn the morning of May 10th, we were at the Varanasi Railway station. Varanasi station looks like a temple. Banaras was very crowded at that time due to elections; there were many rallies going on from different parties. Sanjay hired an auto-rickshaw and then we left for home. Mid way, Sanjay took Jalebi, Kachori and sabzi (?????, ?????? ?? ?????) for the morning breakfast. These are famous morning breakfast items in Banaras.\r\n\r\nAfter breakfast, we decided to visit Kashi Vishwanath Temple. Since temple is open until noon, so we left the house at 10:00 am. Mobile and camera are not allowed in temple due to security reasons. Therefore we only captured photo of the main gate. Street from gate to temple is called “Vishwanath Gali”. Vishwanath gali has many shops that sale pooja stuff and sweets. Near the temple, I also met a friend called Hari.\r\nKashi Vishwanath Temple is one of the most famous temples in Varanasi. It is also known as the Golden temple dedicated to the Lord Shiva. This temple is having great religious importance to the Hindus because this temple is one of the 12 Jyotirlingas of lord Shiva and this one is 12th. There are various small temples such as the Kaalbhairav, Avimukteshwara, Vishnu, Vinayaka and Virupaksh Gauri are located in the main campus of the temple.', '64670614e9fa4.jpeg', '2023-05-19 05:16:04', NULL),
(22, 'Ladakh, Jammu and Kashmir', 'Couple', 'Jammu and Kashmir', 8999, 'Free pickup and drop facility', 'Ladakh, union territory of India, located in the northern part of the Indian subcontinent in the vicinity of the Karakoram and westernmost Himalayan mountain ranges. It is bounded by Jammu and Kashmir union territory to the west and by Himachal Pradesh to the south; its northern and eastern borders are disputed with Pakistan and China, respectively. Ladakh was administered as part of Jammu and Kashmir state from 1947 until 2019, when it became a separate administrative unit. Area 22,836 square miles (59,146 square km). Pop. (2011) 274,289.\r\nGeologically complex and topographically immense, the Great Himalayas contain ranges with numerous peaks reaching elevations of 20,000 feet (6,100 metres) or higher, between which lie deeply entrenched remote valleys. Running parallel to the main Great Himalayas directly to the east is the Zaskar Range, which begins its flank from the main range at the Karnali River to the southeast of Ladakh. The zone was heavily glaciated during the Pleistocene Epoch, and remnant glaciers and snowfields are still present. The mountains constitute a climatic divide, representing a transition from the monsoon climate of the Indian subcontinent in neighbouring Jammu and Kashmir to the dry continental climate of Central Asia and Tibet.\r\nThe valley of the upper Indus River is a well-defined feature that follows the geologic strike (structural trend) westward from the Tibetan border to the point in the Pakistani sector of Kashmir where the river rounds the great mountainous mass of Nanga Parbat to run southward in deep gorges that cut across the strike. In its upper reaches the river is flanked by gravel terraces; each tributary builds an alluvial fan out into the main valley. The town of Leh stands on such a fan, 11,500 feet (3,500 metres) above sea level, with a climate characterized by an almost total lack of precipitation, by intense insolation (exposure to sunlight), and by great diurnal and annual ranges in temperature. Life depends on meltwater from the surrounding mountains, and vegetation is alpine (i.e., consists of species above the tree line), growing on thin soils.', '6467077b0c75d.jpg', '2023-05-19 05:22:03', NULL),
(23, 'Udaipur Tourism', 'Family Package', 'Rajasthan', 5599, 'Free pickup and drop facility', 'About Udaipur Tourism\r\nIn the southern part of Indian state of Rajasthan, Udaipur is a city situated 598 m above the sea level. It is the best place to holiday in Rajasthan. The mind- boggling city of Udaipur is a hub of lakes, magnificent palaces, rich cultural heritage and lip - smacking delicious cuisines.\r\n\r\nLet’s show you the mesmerizing beauty of this beautiful lake city Udaipur where royalty, beauty and culture join hands to create a true reflection of incredible India.\r\nUdaipur, no doubt will definitely rejuvenate your body and soul because multiple lakes adorn this city. For this particular reason, Udaipur is also known as ‘Venice of the East’. The lakes of Udaipur are a poetry of charm and enchantment which has been luring tourists for ages.\r\n\r\nYou would see tourists enjoy a lazy lake day on a boat ride and be lost in the mesmerizing beauty of nature. Some tourists would enjoy the romantic atmosphere of the lakes. Some lakes would give you the reflection of the rich history of the region. Explore best romantic places to stay in Udaipur.\r\n\r\nSome lakes of Udaipur like Lake Pichola are even featured in Hollywood and Bollywood movies. Some lakes would take you to green fields and farms, narrow pathways, scenic villages. Some of the most popular lakes of Udaipur are Fateh Sagar Lake, Lake Pichola, Udaisagar Lake, Jaisamand Lake, Badi Lake, Doodh Talai etc. Visiting Udaipur would be one of the best things to do in Udaipur if you want to experience the feel of Venice in India.', '6467081d9a535.jpg', '2023-05-19 05:24:45', NULL),
(24, 'Mysuru-City in Karnataka', 'Family Package', 'Karnataka', 7699, 'Free pickup and drop facility', 'Mysuru, also called Mysore, city, south-central Karnataka state, southern India. It lies northwest of Chamundi Hill and midway between the Kaveri (Cauvery) and Kabani (Kabbani) rivers on the undulating Deccan plateau at an elevation of 2,525 feet (770 metres). The land surrounding the city is characterized by rain-filled shallow depressions (tanks).\r\n\r\nThe site was mentioned in the epic Mahabharata as Mahishmati (Mahismati). Mysore was known as Purigere in the Mauryan era (3rd century BCE) and later became Mahishapura. It was the administrative capital of the princely state of Mysore from 1799 to 1831 and long was the second most-populous city (after Bengaluru [Bangalore]) of Karnataka state, until being surpassed by Hubballi-Dharwad in the second half of the 20th century. Its urban agglomeration, however, is still the state’s second largest.\r\n\r\nMysuru is an important manufacturing and trading centre, and it has textile (cotton and silk), rice, and oil mills, sandalwood-oil and chemical factories, and tanneries. The suburb of Belagula, to the northwest, produces chrome dyes and chemical fertilizer. The city’s industries are powered by the hydroelectric station near Sivasamudram Island to the east. Mysuru’s cottage industries include cotton weaving, tobacco and coffee processing, and the making of bidis (cigarettes). The area is known for its artwork in ivory, metal, and wood, and the market near the railway station serves as a collection centre for local farm products. The city has an airport, lies at the junction of two northern railway lines, and is a major intersection on India’s principal western road system.\r\nAn ancient fort, rebuilt along European lines in the 18th century, stands in the centre of Mysuru. The fort area comprises Mysore Palace (1912) with its ivory and gold throne, Curzon Park, the Silver Jubilee Clock Tower (1927), Gandhi Square, and two statues of maharajas. To the west, near Gordon Park, are the former British residency (1805), the noted Oriental Library, university buildings, and public offices. Jaganmohan Palace and Lalitha Mahal are other notable buildings. The University of Mysore was founded in 1916; other educational facilities include Maharaja’s College, Maharani’s College for Women, and affiliated colleges of medicine, law, engineering, and teacher training. There are also several institutions for the advancement of Kannada culture.', '6467097f8c7b1.jpg', '2023-05-19 05:30:39', NULL),
(25, 'Darjeeling-Town in West Bengal', 'Couple', 'West Bengal', 6550, 'Free pickup and drop facility', 'The following day, we got up late, but it was still dark outside. An irritating faint knocking sound on the window did wake me. I reluctantly moved the curtains and what I saw outside made me rub my eyes. It’s snowing! The snowflakes were knocking against the glass panes.\r\n\r\nWith uncontrollable excitement, we decided the venture to Chowrasta. Foggy weather conditions and low visibility forced most people to stay indoors, barring a few excited tourists like us from the plains who flocked the hills to witness the snowfall. The temperature was 3°C and, thankfully, was not windy. We did experience snowfall earlier, but it was a lifetime experience for kids – their first snowfall.\r\nI was awestruck to see that still there is a long queue out Kev’s for breakfast. Adverse weather did not allow us to stay out for long; we had to come back after spending a couple of hours. The rest of the day was lazing on the couch, watching online streaming and enjoying our favourite poison. We had Darjeeling offbeat locations travel plans the following days. But not sure about the feasibility in the present climatic conditions.\r\nThe alarm goes off. What torture during holidays! The room is freezing outside the electric blanket. Saw the first glimpse of sunlight on the peak. An SMS flashing on the screen “Sir Ji, weather is clear. Be ready at 8.30”. I was about to ignore the alarm, then suddenly remembered our driver would honk in the next 90 minutes. Better wake up, make the kids ready and all set to a great day ahead. Around 9 am, after completing our banana pancake in breakfast, it is time we hit the road. Excited to think of the memories we are going to make today.\r\n\r\nLepchajagat is 18 km from Darjeeling, at an altitude of 6959 feet. As the name suggests, the place was once predominantly a settlement by the Lepcha tribe. Today the tiny hamlet is significantly a reserve forest area filled with thick oak, firs and rhododendron trees. The offbeat forest is 45 minutes driving from Darjeeling.\r\n', '64670a4a877e7.jpg', '2023-05-19 05:34:02', NULL),
(26, 'Hampi-City in Karnataka', 'Family Package', 'Karnataka', 5700, 'Free pickup and drop facility', 'The austere, grandiose site of Hampi was the last capital of the last great Hindu Kingdom of Vijayanagar. Its fabulously rich princes built Dravidian temples and palaces which won the admiration of travellers between the 14th and 16th centuries. Conquered by the Deccan Muslim confederacy in 1565, the city was pillaged over a period of six months before being abandoned.\r\nThe austere and grandiose site of Hampi comprise mainly the remnants of the Capital City of Vijayanagara Empire (14th-16th Cent CE), the last great Hindu Kingdom. The property encompasses an area of 4187, 24 hectares, located in the Tungabhadra basin in Central Karnataka, Bellary District.\r\n\r\nHampi’s spectacular setting is dominated by river Tungabhadra, craggy hill ranges and open plains, with widespread physical remains. The sophistication of the varied urban, royal and sacred systems is evident from the more than 1600 surviving remains that include forts, riverside features, royal and sacred complexes, temples, shrines, pillared halls, Mandapas, memorial structures, gateways, defence check posts, stables, water structures, etc.\r\n\r\nAmong these, the Krishna temple complex, Narasimha, Ganesa, Hemakuta group of temples, Achyutaraya temple complex, Vitthala temple complex, Pattabhirama temple complex, Lotus Mahal complex, can be highlighted. Suburban townships (puras) surrounded the large Dravidian temple complexes containing subsidiary shrines, bazaars, residential areas and tanks applying the unique hydraulic technologies and skilfully and harmoniously integrating the town and defence architecture with surrounding landscape. The remains unearthed in the site delineate both the extent of the economic prosperity and political status that once existed indicating a highly developed society.\r\n\r\nDravidian architecture flourished under the Vijayanagara Empire and its ultimate form is characterised by their massive dimensions, cloistered enclosures, and lofty towers over the entrances encased by decorated pillars.\r\n\r\nThe Vitthla temple is the most exquisitely ornate structure on the site and represents the culmination of Vijayanagara temple architecture. It is a fully developed temple with associated buildings like Kalyana Mandapa and Utsava Mandapa within a cloistered enclosure pierced with three entrance Gopurams. In addition to the typical spaces present in contemporary temples, it boasts of a Garuda shrine fashioned as a granite ratha and a grand bazaar street. This complex also has a large Pushkarani (stepped tank) with a Vasantotsava mandapa (ceremonial pavilion at the centre), wells and a network of water channels.', '64670af6a29ca.jpg', '2023-05-19 05:36:54', NULL),
(27, 'Mata Vaishno Devi Temple', 'Family Package', 'Katra-Jammu & Kashmir', 8599, 'Free pickup and drop facility', 'The second-most visited Hindu pilgrimage destination in India, Mata Vaishno Devi Cave Temple is situated in the Trikuta Hills in Katra, Jammu & Kashmir. Hindu devotees from all over the world visit this famed religious site where the Mother Goddess or Mata Vaishno Devi is said to fulfill their wishes. This religious place is considered the most important Shaktipeeth as it is believed, here the skull of the Goddess Sati fell.\r\n\r\nAt Mata Vaishno Devi Cave, the goddess is in the form of a five and a half feet tall rock which has three heads or the Pindies. On Mata Vaishno Devi pilgrimage, devotees make traditional offerings to Mata of chunri (a red coloured drape), sarees, dry fruits, silver or gold ornaments, cholas, flowers etc.\r\nMata Vaishno Devi Shrine Board was formedu in 1986 and ever since this most popular religious site in Jammu started to attract a lot of Hindu pilgrims.\r\n\r\nThe holy cave of Mata Vaishno Devi is said to have been discovered by Pandit Sridhar, a Hindu priest. Goddess Vaishnavi appeared in the dream of the priest and instructed him on how to find here abode on Trikuta Hills. The priest following her instruction heads out for the journey after the dream and found the cave as instructed earlier. Mata Vaishno Devi appeared to him and blessed him with four sons. She also gave him the boon of being the custodian of the cave. Even today, Pandit Shridhar’s descendant abide by the commitment.', '64670bad37421.jpg', '2023-05-19 05:39:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `RegDate`, `UpdationDate`) VALUES
(9, 'Ashish Kumar', 'ashish@gmail.com', '456', 'user', 'active', '2023-05-29 08:21:20', '2023-05-29 19:59:45'),
(10, 'Anjali', 'anjalis3455@gmail.com', '123', 'user', 'active', '2023-05-29 10:48:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `packageoffer`
--
ALTER TABLE `packageoffer`
  ADD PRIMARY KEY (`OfferId`);

--
-- Indexes for table `tbldestination`
--
ALTER TABLE `tbldestination`
  ADD PRIMARY KEY (`DestinationId`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `packageoffer`
--
ALTER TABLE `packageoffer`
  MODIFY `OfferId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbldestination`
--
ALTER TABLE `tbldestination`
  MODIFY `DestinationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
