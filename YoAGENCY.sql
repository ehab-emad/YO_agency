-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: YoAGENCY
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about` (
  `id` int NOT NULL AUTO_INCREMENT,
  `b1m_title` varchar(50) NOT NULL,
  `b1_point1` varchar(300) NOT NULL,
  `b1_point2` varchar(300) NOT NULL,
  `b2m_title` varchar(50) NOT NULL,
  `b2_point1` varchar(300) NOT NULL,
  `b2_point2` varchar(400) NOT NULL,
  `b3m_title` varchar(50) NOT NULL,
  `b3s_title1` varchar(50) NOT NULL,
  `b3_point1` varchar(300) NOT NULL,
  `b3s_title2` varchar(50) NOT NULL,
  `b3_point2` varchar(300) NOT NULL,
  `b3s_title3` varchar(30) NOT NULL,
  `b3_point3` varchar(300) NOT NULL,
  `b3s_title4` varchar(50) NOT NULL,
  `b3_point4` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,'عن وكالتنا ','نحن وكالة إعلان تسويقية مبتكرة، نسعى جاهدين لتحويل الأفكار الإبداعية إلى استراتيجيات تسويقية ناجحة. ','فريقنا من الخبراء المتخصصين يجمع بين المعرفة العميقة بالسوق والقدرة على التفكير الإبداعي لتقديم حلول تسويقية فعالة تساعد عملائنا على النمو والتميز في سوقهم.\r\n','رؤيتنا ','أن نكون الشريك الأول والمفضل للعملاء الذين يسعون إلى تحقيق التميز والابتكار في مجال الإعلان والتسويق.\r\n','نحن نؤمن بأن الإبداع والابتكار هما مفتاح النجاح، ونسعى جاهدين لتقديم حلول مبتكرة تتجاوز توقعات عملائنا وتساعدهم على التميز في سوقهم. رؤيتنا تتجسد في تقديم خدمات تسويقية متميزة تلبي احتياجات السوق المتغيرة، وتعزز من قيمة العلامات التجارية التي نعمل معها. نطمح أن نكون جزءاً من قصة نجاح كل عميل، ونساهم في تحقيق أهدافهم ونموهم المستدام.\r\n','قيمنا','الإبداع:','نسعى دائماً لتقديم أفكار وحلول إبداعية تتجاوز توقعات عملائنا.','الجودة:','نلتزم بتقديم أفضل الخدمات بأعلى مستويات الجودة.','الالتزام:','نعتبر نجاح عملائنا جزءاً من نجاحنا، ونسعى دائماً لتحقيق أفضل النتائج لهم.','الشراكة:','نبني علاقات قوية ومستدامة مع عملائنا مبنية على الثقة والتعاون.','70ce44e75c96f3f341995bfe590bde65.png');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artical`
--

DROP TABLE IF EXISTS `artical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artical` (
  `id` int NOT NULL AUTO_INCREMENT,
  `art_name` varchar(100) NOT NULL,
  `art_description` text,
  `img` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artical`
--

LOCK TABLES `artical` WRITE;
/*!40000 ALTER TABLE `artical` DISABLE KEYS */;
INSERT INTO `artical` VALUES (1,'artical 2','we said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeer we said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeerwe said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeerwe said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeerwe said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeerwe said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeerwe said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeerwe said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeerwe said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeerwe said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeerwe said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeerwe said to you that we have a;; honor to kill you and ignore our live for freedom and  happiens,we can kill any body for studyb to be a sofftware engineeer',''),(2,'artical 1','Starting Container\r\n\r\nnpm warn config production Use --omit=dev instead.\r\n\r\n \r\n\r\n> json-server@1.0.0 start\r\n\r\n> node index.js\r\n\r\n \r\n\r\nServer is running on http://localhost:8080\r\n\r\nConnected to PostgreSQL database','24fb8426197f171e4ef2248ada17804d.jpg'),(4,'المقال الاول','نتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميلنتسم بعامل السرعه والاهتمام بالمتطلبات للحصول علي اعلي جوده للعميل','dce7e0569b1035308d1e359af6221bc9.jpg'),(5,'new','uyututt',''),(6,'artical 1','khkhkkkkk','250b04f38456eb61ee4c684c31672572.jpg');
/*!40000 ALTER TABLE `artical` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articals`
--

DROP TABLE IF EXISTS `articals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articals`
--

LOCK TABLES `articals` WRITE;
/*!40000 ALTER TABLE `articals` DISABLE KEYS */;
INSERT INTO `articals` VALUES (3,'????? ????? ?????','???? ???? ?????? ?????? ????? ?????? ??????????.',''),(4,'??????? ??? ????? ???????','????? ??????? ????? ??????? ????????? ??????? ??????? ????????.',''),(5,'????? ?? ???????','??? ??? ?????? ?? ??????? ?????????.',''),(6,'????????? ?? ?????? ???????','??? ?????? ??? ????? ??????????? ?? ?????? ???????.',''),(7,'????? ?? ???????','??? ??? ?????? ?? ??????? ?????????.',''),(8,'????????? ?? ?????? ???????','??? ?????? ??? ????? ??????????? ?? ?????? ???????.',''),(9,'????? ?? ???????','??? ??? ?????? ?? ??????? ?????????.',''),(10,'????????? ?? ?????? ???????','??? ?????? ??? ????? ??????????? ?? ?????? ???????.','');
/*!40000 ALTER TABLE `articals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `main_title` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (1,'يو للتسويق الالكترونى ','لا نكتفي فقط بالإعلان عن منتجاتك أو خدماتك، بل نتجاوز ذلك لنقدم لك استراتيجيات تسويقية شاملة تهدف إلى بناء علاقات قوية ومستدامة مع عملائك. نحن نؤمن بأن التسويق هو فن كسب ولاء العملاء من خلال تقديم تجارب مميزة وقيمة حقيقية. ','a2aca3ce426e6d453b17829b0741f69e.png');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `text` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'نحن هنا للإجابة على أي استفسارات قد تكون لديك. إذا كنت ترغب في معرفة المزيد عن خدماتنا أو لديك أسئلة معينة، لا تتردد في التواصل معنا. فريقنا المتفاني سيعود إليك في أقرب وقت ممكن. \r\n');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `proj_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `proj_description` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'f382177f83cd5ebd0f1ab92ff485da34.jpg','كورس الدراسه الجسديه','صبي صغير من قريه ورقه الشجر '),(4,'0fbf1f2991c9af3a16104302dad126e5.jpg','كورس التسويق الالكتروني','دراسه الاقتصاد ومعرفه البورصات');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(300) NOT NULL,
  `serv_name` varchar(100) NOT NULL,
  `serv_description` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (7,'77bb7a7fc8a56eee9ed2afb2242184fa.jpg','التسويق','نبتكر استراتيجيات تسويقية مخصصة لتعزيز تواجد علامتك التجارية وزيادة مبيعاتك.\r\n\r\n'),(8,'c9fe20c5c4af5cbcf5567cfd91c1ab93.avif','التصميم','نقدم تصاميم جذابة واحترافية تعكس هوية علامتك التجارية وتجذب جمهورك المستهدف.\r\n\r\n'),(9,'79e65325e88099c3bdd270fb38678d4a.jpg','كتابة المحتوى','نصوغ محتوى إبداعي وجذاب يعبر عن رسالتك بوضوح ويحقق التفاعل المطلوب مع جمهورك.\r\n\r\n'),(10,'e27c44f5a172d812146d39f6a7830669.jpg','إدارة الحملات الإعلانية','ندير حملات إعلانية متكاملة لضمان وصول رسائلك التسويقية إلى الجمهور الصحيح بفعالية.\r\n\r\n'),(11,'0eb0dc09417f6a0d82ffe67a94fcb18c.jpg','تصميم/برمجة مواقع الويب','نطور مواقع ويب مخصصة تجمع بين الجمال والوظائف المتقدمة لتوفير تجربة مستخدم رائعة.\r\n\r\n'),(12,'857e1b0ba73ca66b99c66e4c93dd7caf.jpg','إدارة مواقع التواصل الاجتماعي','نحرص على تعزيز تواجدك الرقمي من خلال إدارة فعّالة لحساباتك على منصات التواصل الاجتماعي.\r\n\r\n');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `team` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `img` varchar(300) NOT NULL,
  `job` varchar(100) NOT NULL,
  `qout` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (2,'يونس محمود رجب','5d293b9d47ca6615dd9719e2bd5e91f0.png','المدير التنفيذي',' التسويق لا يعتمد على الاعلانات والدفع بل يعتمد علي سلسلة من الاجرائات لإقناع العميل بالبيع '),(3,'عبدالله سيد','c044da7a42868adbeec8b7802cdd278a.png','مدير المشاريع',' السر دائمًا يكمنُ في إضفاء قيمةٍ إلى مشروعك.. وهذا ما نبرعُ به ');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'yo-agency','$2y$10$DdgPbCeabVe8XbAolEh5I./jbnzReW0uWwvOz.ig1eAGWwmQTkaFq');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-29 21:42:54
