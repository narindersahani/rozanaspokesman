-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `display_order` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categories` (`id`, `location`, `slug`, `name`, `description`, `display_order`, `status`, `created_at`, `updated_at`) VALUES
(1,	'below_header',	'technology',	'Technology',	'Aut necessitatibus totam minus dolorem quam veniam omnis quis. Dolorem cumque amet unde magnam quia saepe totam. Sit voluptatibus iste sit. Debitis accusamus velit consectetur sint debitis numquam reiciendis dolorem.\nSit qui dolorem eos. Architecto accusamus vel sequi fugiat. Iste et et ut voluptas dolore neque molestiae.',	7,	1,	'2017-05-23 15:39:13',	'2017-06-01 15:26:29'),
(2,	'below_header',	'punjab',	'Punjab',	'Eius et itaque ut est. Enim maiores dolorum in eligendi. Assumenda officia aut neque neque. Et quo iure atque debitis.\nQuia id est temporibus sapiente nisi amet minima. Qui aut iusto quod quia animi ut velit. Pariatur nostrum exercitationem eaque ut accusantium.\nEnim voluptatum non consequatur corrupti ad. Voluptatem commodi enim quibusdam dolorem. Et incidunt non alias voluptatem molestiae quae nesciunt laboriosam. Hic quo officia et impedit.',	1,	1,	'2017-05-23 15:39:14',	'2017-06-01 15:24:45'),
(3,	'below_header',	'fashion',	'Fashion',	'Culpa sint nihil enim. Ullam distinctio alias est illo voluptatum. Earum aperiam consequatur consequatur tenetur omnis. Excepturi qui et cum dolor.\nVelit modi inventore dolorem cupiditate est iusto nesciunt. Eveniet deleniti suscipit totam libero.\nVoluptas accusamus accusamus ea officia aut est qui. Deleniti alias cupiditate quam distinctio vero qui commodi. Dolores ut ad cum velit. Magni recusandae omnis qui consequuntur iste. Est libero tempore sunt vero consequatur iusto.',	8,	1,	'2017-05-23 15:39:14',	'2017-06-01 15:26:41'),
(4,	'below_header',	'environment',	'Environment',	'Enim fugiat deleniti nisi ab necessitatibus veritatis. Ut cum aperiam qui quia suscipit. Sequi accusamus in aspernatur et. Maxime libero veniam dolorem voluptatibus et et molestias. Magnam unde veritatis cum sit.\nQuae quam at necessitatibus et dolor sed. Magnam omnis sunt nostrum aut aliquid. Sit accusantium dolores accusantium error minus. Dolores inventore culpa dolorem aut consequatur ut tempora.',	9,	1,	'2017-05-23 15:39:14',	'2017-06-01 15:26:35'),
(5,	'below_header',	'top',	'Top',	'Sed enim aperiam molestias et necessitatibus ipsam. Magni est est et saepe ut et. Cupiditate qui necessitatibus eum sed. Iure ea explicabo cupiditate dolores.\nMolestiae corrupti laborum molestiae facilis aspernatur. Nobis quo eum sed saepe sequi a est facilis. Magnam dolor doloremque facilis nihil eum vero possimus. Neque labore et qui sequi quisquam.\nVel quidem molestiae quasi nostrum. Qui quo rerum eum consequuntur. Aut unde omnis sit illo. Pariatur rerum facilis omnis fugit.',	6,	1,	'2017-05-23 15:39:14',	'2017-06-01 15:25:36'),
(6,	'below_header',	'india',	'India',	'Repellendus et ullam est voluptatem veniam porro. Nihil qui velit ea id. Tempora suscipit nisi qui mollitia.\nPerspiciatis atque veniam autem voluptas est aut temporibus. Recusandae officia pariatur blanditiis cupiditate rerum. Est aliquid dolorum sint culpa quisquam expedita aut. Temporibus ipsa officiis nobis numquam illum beatae voluptatum. Voluptas veritatis id autem qui nihil.',	2,	1,	'2017-05-23 15:39:14',	'2017-06-01 15:24:53'),
(7,	'below_header',	'business',	'Business',	'Accusamus unde quidem quos nisi. Harum eius exercitationem atque molestiae accusamus itaque. Voluptatum est enim aut facere sed repellat.\nMinima deleniti dolor quis magnam officiis asperiores. Dolor sint labore aliquid eius. Perspiciatis repudiandae aperiam molestiae quis possimus. Vitae alias cum possimus in et dolorem.\nCommodi et sint voluptatem eos. Dolorum omnis provident sed. Ut magnam recusandae quia dignissimos autem molestiae rerum enim.',	4,	1,	'2017-05-23 15:39:14',	'2017-06-01 15:25:13'),
(8,	'below_header',	'politics',	'Politics',	'Et sit distinctio est provident doloribus consequatur enim. Enim ducimus molestias ipsam quis eum perspiciatis perferendis. Dolorem molestiae voluptas in.\nBlanditiis officiis illo sint hic ad. Non sint nemo necessitatibus corrupti officiis consequatur. Excepturi eligendi harum libero quaerat iure dolore. Ut nam est quibusdam optio possimus.\nEt et odio corrupti laboriosam maiores. Excepturi id voluptate dolor corrupti vel ea. Expedita nostrum dolor dolor hic sed. Quo accusamus distinctio dolor.',	5,	1,	'2017-05-23 15:39:14',	'2017-06-01 15:25:26'),
(9,	'below_header',	'world',	'World',	'Eius asperiores consequatur aut voluptates. Sit est magnam libero blanditiis explicabo. Quas quia architecto eos.\nEst vel ut laboriosam in voluptatem labore sunt corporis. Iusto facere velit sit enim iure tenetur quidem. Hic perspiciatis itaque dolor velit est.\nNumquam et aliquam tenetur iusto. Explicabo porro exercitationem atque error nostrum. Quis ipsa temporibus non aut cum quae quod.',	3,	1,	'2017-05-23 15:39:14',	'2017-06-01 15:25:02'),
(10,	'header',	'culture',	'Culture',	'Modi ut eveniet laudantium placeat. Praesentium praesentium molestiae consequatur ex voluptate. Nobis ea et est non. Et esse iure sit fugiat.\nDignissimos et in facere aliquam cum perferendis. Perferendis reprehenderit voluptatibus doloribus aliquid rerum aut mollitia. Expedita praesentium nulla sunt quas totam. Consectetur possimus quis vitae sequi temporibus ut. Odit eum labore delectus ex maiores.',	2,	1,	'2017-05-23 15:39:14',	'2017-06-01 15:23:15'),
(11,	'header',	'sports',	'Sports',	'Voluptas deleniti nostrum saepe eos atque quam sed. Ut dolorum ex doloremque ut. Quibusdam qui aut ab repellat.\nMagni rerum hic non dolor atque doloremque qui aut. Commodi et velit quia non nesciunt. Impedit in est eum mollitia adipisci ea.\nReprehenderit sed magnam eos aliquid laborum aut est nulla. Deserunt non dolor perferendis autem error dignissimos esse. Eos quam ipsam culpa culpa id amet est necessitatibus.',	1,	1,	'2017-05-23 15:39:14',	'2017-06-01 16:28:11'),
(12,	'header',	'entertainment',	'Entertainment',	NULL,	4,	1,	'2017-05-31 16:26:33',	'2017-06-01 15:23:48'),
(13,	'header',	'lifestyle',	'Lifestyle',	NULL,	3,	1,	'2017-05-31 16:28:34',	'2017-06-01 15:23:30'),
(14,	'header',	'travel',	'Travel',	NULL,	5,	1,	'2017-05-31 16:29:49',	'2017-06-01 15:23:58'),
(15,	'header',	'art-design',	'Art & Design',	NULL,	6,	1,	'2017-05-31 16:30:26',	'2017-06-01 15:24:12'),
(16,	'header',	'weather',	'Weather',	NULL,	7,	1,	'2017-05-31 16:30:45',	'2017-06-01 15:24:26'),
(17,	'header',	'health',	'Health',	NULL,	8,	1,	'2017-05-31 16:31:02',	'2017-06-01 15:24:29');

DROP TABLE IF EXISTS `category_post`;
CREATE TABLE `category_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_post_category_id_index` (`category_id`),
  KEY `category_post_post_id_index` (`post_id`),
  CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `category_post` (`id`, `category_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1278,	2,	777,	'2017-06-04 04:09:19',	'2017-06-04 04:09:19'),
(1279,	6,	778,	'2017-06-04 04:22:57',	'2017-06-04 04:22:57'),
(1280,	2,	778,	'2017-06-04 05:28:48',	'2017-06-04 05:28:48'),
(1281,	1,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1282,	3,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1283,	4,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1284,	5,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1285,	7,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1286,	8,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1287,	9,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1288,	10,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1289,	11,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1290,	12,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1291,	13,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1292,	14,	778,	'2017-06-04 06:14:19',	'2017-06-04 06:14:19'),
(1293,	15,	778,	'2017-06-04 06:14:20',	'2017-06-04 06:14:20'),
(1294,	16,	778,	'2017-06-04 06:14:20',	'2017-06-04 06:14:20'),
(1295,	17,	778,	'2017-06-04 06:14:20',	'2017-06-04 06:14:20'),
(1296,	1,	777,	'2017-06-04 06:14:56',	'2017-06-04 06:14:56'),
(1297,	3,	777,	'2017-06-04 06:14:56',	'2017-06-04 06:14:56'),
(1298,	4,	777,	'2017-06-04 06:14:56',	'2017-06-04 06:14:56'),
(1299,	5,	777,	'2017-06-04 06:14:56',	'2017-06-04 06:14:56'),
(1300,	6,	777,	'2017-06-04 06:14:56',	'2017-06-04 06:14:56'),
(1301,	7,	777,	'2017-06-04 06:14:57',	'2017-06-04 06:14:57'),
(1302,	8,	777,	'2017-06-04 06:14:57',	'2017-06-04 06:14:57'),
(1303,	9,	777,	'2017-06-04 06:14:57',	'2017-06-04 06:14:57'),
(1304,	10,	777,	'2017-06-04 06:14:57',	'2017-06-04 06:14:57'),
(1305,	11,	777,	'2017-06-04 06:14:57',	'2017-06-04 06:14:57'),
(1306,	12,	777,	'2017-06-04 06:14:57',	'2017-06-04 06:14:57'),
(1307,	13,	777,	'2017-06-04 06:14:57',	'2017-06-04 06:14:57'),
(1308,	14,	777,	'2017-06-04 06:14:57',	'2017-06-04 06:14:57'),
(1309,	15,	777,	'2017-06-04 06:14:57',	'2017-06-04 06:14:57'),
(1310,	16,	777,	'2017-06-04 06:14:57',	'2017-06-04 06:14:57'),
(1311,	17,	777,	'2017-06-04 06:14:57',	'2017-06-04 06:14:57'),
(1312,	1,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1313,	2,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1314,	3,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1315,	4,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1316,	5,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1317,	6,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1318,	7,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1319,	8,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1320,	9,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1321,	10,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1322,	11,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1323,	12,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1324,	13,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1325,	14,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1326,	15,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1327,	16,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1328,	17,	784,	'2017-06-04 06:15:43',	'2017-06-04 06:15:43'),
(1329,	1,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1330,	2,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1331,	3,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1332,	4,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1333,	5,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1334,	6,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1335,	7,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1336,	8,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1337,	9,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1338,	10,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1339,	11,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1340,	12,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1341,	13,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1342,	14,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1343,	15,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1344,	16,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1345,	17,	782,	'2017-06-04 06:16:06',	'2017-06-04 06:16:06'),
(1346,	1,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1347,	2,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1348,	3,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1349,	4,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1350,	5,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1351,	6,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1352,	7,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1353,	8,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1354,	9,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1355,	10,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1356,	11,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1357,	12,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1358,	13,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1359,	14,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1360,	15,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1361,	16,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1362,	17,	781,	'2017-06-04 06:16:33',	'2017-06-04 06:16:33'),
(1363,	1,	780,	'2017-06-04 06:17:36',	'2017-06-04 06:17:36'),
(1364,	2,	780,	'2017-06-04 06:17:36',	'2017-06-04 06:17:36'),
(1365,	3,	780,	'2017-06-04 06:17:36',	'2017-06-04 06:17:36'),
(1366,	4,	780,	'2017-06-04 06:17:36',	'2017-06-04 06:17:36'),
(1367,	5,	780,	'2017-06-04 06:17:36',	'2017-06-04 06:17:36'),
(1368,	6,	780,	'2017-06-04 06:17:36',	'2017-06-04 06:17:36'),
(1369,	7,	780,	'2017-06-04 06:17:36',	'2017-06-04 06:17:36'),
(1370,	8,	780,	'2017-06-04 06:17:37',	'2017-06-04 06:17:37'),
(1371,	9,	780,	'2017-06-04 06:17:37',	'2017-06-04 06:17:37'),
(1372,	10,	780,	'2017-06-04 06:17:37',	'2017-06-04 06:17:37'),
(1373,	11,	780,	'2017-06-04 06:17:37',	'2017-06-04 06:17:37'),
(1374,	12,	780,	'2017-06-04 06:17:37',	'2017-06-04 06:17:37'),
(1375,	13,	780,	'2017-06-04 06:17:37',	'2017-06-04 06:17:37'),
(1376,	14,	780,	'2017-06-04 06:17:37',	'2017-06-04 06:17:37'),
(1377,	15,	780,	'2017-06-04 06:17:37',	'2017-06-04 06:17:37'),
(1378,	16,	780,	'2017-06-04 06:17:37',	'2017-06-04 06:17:37'),
(1379,	17,	780,	'2017-06-04 06:17:37',	'2017-06-04 06:17:37'),
(1380,	1,	779,	'2017-06-04 06:18:11',	'2017-06-04 06:18:11'),
(1381,	2,	779,	'2017-06-04 06:18:11',	'2017-06-04 06:18:11'),
(1382,	3,	779,	'2017-06-04 06:18:11',	'2017-06-04 06:18:11'),
(1383,	4,	779,	'2017-06-04 06:18:11',	'2017-06-04 06:18:11'),
(1384,	5,	779,	'2017-06-04 06:18:11',	'2017-06-04 06:18:11'),
(1385,	6,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1386,	7,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1387,	8,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1388,	9,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1389,	10,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1390,	11,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1391,	12,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1392,	13,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1393,	14,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1394,	15,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1395,	16,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1396,	17,	779,	'2017-06-04 06:18:12',	'2017-06-04 06:18:12'),
(1397,	2,	787,	'2017-06-04 06:26:45',	'2017-06-04 06:26:45'),
(1398,	1,	787,	'2017-06-04 08:14:03',	'2017-06-04 08:14:03'),
(1399,	3,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1400,	4,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1401,	5,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1402,	6,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1403,	7,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1404,	8,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1405,	9,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1406,	10,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1407,	11,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1408,	12,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1409,	13,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1410,	14,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1411,	15,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1412,	16,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04'),
(1413,	17,	787,	'2017-06-04 08:14:04',	'2017-06-04 08:14:04');

DROP TABLE IF EXISTS `category_video`;
CREATE TABLE `category_video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `video_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_video_category_id_index` (`category_id`),
  KEY `category_video_video_id_index` (`video_id`),
  CONSTRAINT `category_video_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_video_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `category_video` (`id`, `category_id`, `video_id`, `created_at`, `updated_at`) VALUES
(1,	1,	1,	'2017-06-04 08:25:17',	'2017-06-04 08:25:17'),
(2,	2,	1,	'2017-06-04 08:25:17',	'2017-06-04 08:25:17');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2017_04_30_060924_create_roles_table',	1),
(4,	'2017_04_30_060935_create_user_metas_table',	1),
(5,	'2017_04_30_060958_create_posts_table',	1),
(6,	'2017_05_14_131255_create_categories_table',	1),
(7,	'2017_05_14_131541_create_categories_posts_table',	1),
(8,	'2017_05_23_165951_add_slug_field_to_posts_table',	2),
(11,	'2017_05_26_154229_create_videos_table',	3),
(12,	'2017_05_26_155319_create_categories_videos_table',	3),
(13,	'2017_05_29_155249_change_short_description_field_datatype_in_posts_table',	4),
(14,	'2017_05_29_155300_change_short_description_field_datatype_in_videos_table',	4),
(15,	'2017_06_01_144242_add_location_field_in_categories_table',	5);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `start_date` datetime NOT NULL COMMENT 'post start showing date.',
  `end_date` datetime DEFAULT NULL COMMENT 'post end showing date.',
  `event_date` datetime NOT NULL,
  `display_order` int(11) NOT NULL DEFAULT '0',
  `is_featured` tinyint(1) DEFAULT '0',
  `show_on_banner` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `posts` (`id`, `slug`, `title`, `image`, `short_description`, `description`, `start_date`, `end_date`, `event_date`, `display_order`, `is_featured`, `show_on_banner`, `status`, `created_at`, `updated_at`) VALUES
(777,	'the-assailants-who-mowed-down-people-on-london-bridge-attacked-people-with-knives-afp-4',	'The assailants who mowed down people on London Bridge attacked people with knives. (AFP)',	'1496573778_file000132701536-1024x768.jpg',	'LONDON:  Three assailants stabbed passers-by at random after smashing into pedestrians in a van, killing six people in a \"terror attack\" in a popular night-life hub in London before armed police shot all three dead.',	'<p>LONDON:&nbsp;&nbsp;Three assailants stabbed passers-by at random after smashing into pedestrians in a van,&nbsp;<a href=\"http://www.ndtv.com/world-news/van-and-knife-attack-leaves-trail-of-casualties-in-terrorist-incidents-on-london-bridge-and-in-nearb-1707609?pfrom=home-lateststories\">killing six people in a &quot;terror attack&quot;</a>&nbsp;in a popular night-life hub in London before armed police shot all three dead.<br />\r\n<br />\r\nAs they rampaged through the bars around London Bridge on Saturday night, the trio wore what looked like&nbsp;<a href=\"http://www.ndtv.com/world-news/terrorist-attack-in-heart-of-london-on-london-bridge-and-borough-market-what-we-know-so-far-10-point-1707613\">suicide vests which turned out to be &quot;hoaxes&quot;</a>, said Mark Rowley, head of counter-terrorism policing.<br />\r\n<br />\r\n&quot;We believe that six people have died in addition to the three attackers shot dead by police&quot; in what is being treated as a &quot;terrorist incident&quot;, Rowley said.<br />\r\n&nbsp;</p>',	'2017-04-06 09:39:19',	NULL,	'2017-04-06 09:39:19',	3,	1,	1,	1,	'2017-06-04 04:09:19',	'2017-06-04 06:14:56'),
(778,	'highcharts-demo',	'Highcharts Demo',	'1496573778_file000132701536-1024x768.jpg',	'Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .Second News  .',	'<p>Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.Second News &nbsp;.</p>',	'2017-04-06 09:52:57',	NULL,	'2017-04-06 09:52:57',	2,	1,	1,	1,	'2017-06-04 04:22:57',	'2017-06-04 06:14:19'),
(779,	'third-news-the-assailants-who-mowed-down-people-on-london-bridge-attacked-people-with-knives-afp-4',	'Third News assailants who mowed down people on London Bridge attacked people with knives. (AFP)',	'1496573778_file000132701536-1024x768.jpg',	'LONDON:  Three assailants stabbed passers-by at random after smashing into pedestrians in a van, killing six people in a \"terror attack\" in a popular night-life hub in London before armed police shot all three dead.',	'<p>LONDON:&nbsp;&nbsp;Three assailants stabbed passers-by at random after smashing into pedestrians in a van,&nbsp;<a href=\"http://www.ndtv.com/world-news/van-and-knife-attack-leaves-trail-of-casualties-in-terrorist-incidents-on-london-bridge-and-in-nearb-1707609?pfrom=home-lateststories\">killing six people in a &quot;terror attack&quot;</a>&nbsp;in a popular night-life hub in London before armed police shot all three dead.<br />\r\n<br />\r\nAs they rampaged through the bars around London Bridge on Saturday night, the trio wore what looked like&nbsp;<a href=\"http://www.ndtv.com/world-news/terrorist-attack-in-heart-of-london-on-london-bridge-and-borough-market-what-we-know-so-far-10-point-1707613\">suicide vests which turned out to be &quot;hoaxes&quot;</a>, said Mark Rowley, head of counter-terrorism policing.<br />\r\n<br />\r\n&quot;We believe that six people have died in addition to the three attackers shot dead by police&quot; in what is being treated as a &quot;terrorist incident&quot;, Rowley said.<br />\r\n&nbsp;</p>',	'2017-04-06 09:39:19',	NULL,	'2017-04-06 09:39:19',	3,	1,	1,	1,	'2017-06-04 04:09:19',	'2017-06-04 06:18:11'),
(780,	'forth-news-the-assailants-who-mowed-down-people-on-london-bridge-attacked-people-with-knives-afp-4',	'Forth News assailants who mowed down people on London Bridge attacked people with knives. (AFP)',	'1496573778_file000132701536-1024x768.jpg',	'LONDON:  Three assailants stabbed passers-by at random after smashing into pedestrians in a van, killing six people in a \"terror attack\" in a popular night-life hub in London before armed police shot all three dead.',	'<p>LONDON:&nbsp;&nbsp;Three assailants stabbed passers-by at random after smashing into pedestrians in a van,&nbsp;<a href=\"http://www.ndtv.com/world-news/van-and-knife-attack-leaves-trail-of-casualties-in-terrorist-incidents-on-london-bridge-and-in-nearb-1707609?pfrom=home-lateststories\">killing six people in a &quot;terror attack&quot;</a>&nbsp;in a popular night-life hub in London before armed police shot all three dead.<br />\r\n<br />\r\nAs they rampaged through the bars around London Bridge on Saturday night, the trio wore what looked like&nbsp;<a href=\"http://www.ndtv.com/world-news/terrorist-attack-in-heart-of-london-on-london-bridge-and-borough-market-what-we-know-so-far-10-point-1707613\">suicide vests which turned out to be &quot;hoaxes&quot;</a>, said Mark Rowley, head of counter-terrorism policing.<br />\r\n<br />\r\n&quot;We believe that six people have died in addition to the three attackers shot dead by police&quot; in what is being treated as a &quot;terrorist incident&quot;, Rowley said.<br />\r\n&nbsp;</p>',	'2017-04-06 09:39:19',	NULL,	'2017-04-06 09:39:19',	3,	1,	1,	1,	'2017-06-04 04:09:19',	'2017-06-04 06:17:36'),
(781,	'fifth-news-the-assailants-who-mowed-down-people-on-london-bridge-attacked-people-with-knives-afp-4',	'Fifth News assailants who mowed down people on London Bridge attacked people with knives. (AFP)',	'1496573778_file000132701536-1024x768.jpg',	'LONDON:  Three assailants stabbed passers-by at random after smashing into pedestrians in a van, killing six people in a \"terror attack\" in a popular night-life hub in London before armed police shot all three dead.',	'<p>LONDON:&nbsp;&nbsp;Three assailants stabbed passers-by at random after smashing into pedestrians in a van,&nbsp;<a href=\"http://www.ndtv.com/world-news/van-and-knife-attack-leaves-trail-of-casualties-in-terrorist-incidents-on-london-bridge-and-in-nearb-1707609?pfrom=home-lateststories\">killing six people in a &quot;terror attack&quot;</a>&nbsp;in a popular night-life hub in London before armed police shot all three dead.<br />\r\n<br />\r\nAs they rampaged through the bars around London Bridge on Saturday night, the trio wore what looked like&nbsp;<a href=\"http://www.ndtv.com/world-news/terrorist-attack-in-heart-of-london-on-london-bridge-and-borough-market-what-we-know-so-far-10-point-1707613\">suicide vests which turned out to be &quot;hoaxes&quot;</a>, said Mark Rowley, head of counter-terrorism policing.<br />\r\n<br />\r\n&quot;We believe that six people have died in addition to the three attackers shot dead by police&quot; in what is being treated as a &quot;terrorist incident&quot;, Rowley said.<br />\r\n&nbsp;</p>',	'2017-04-06 09:39:19',	NULL,	'2017-04-06 09:39:19',	3,	1,	1,	1,	'2017-06-04 04:09:19',	'2017-06-04 06:16:33'),
(782,	'Sixth-news-the-assailants-who-mowed-down-people-on-london-bridge-attacked-people-with-knives-afp-4',	'Sixth News assailants who mowed down people on London Bridge attacked people with knives. (AFP)',	'1496573778_file000132701536-1024x768.jpg',	'LONDON:  Three assailants stabbed passers-by at random after smashing into pedestrians in a van, killing six people in a \"terror attack\" in a popular night-life hub in London before armed police shot all three dead.',	'<p>LONDON:&nbsp;&nbsp;Three assailants stabbed passers-by at random after smashing into pedestrians in a van,&nbsp;<a href=\"http://www.ndtv.com/world-news/van-and-knife-attack-leaves-trail-of-casualties-in-terrorist-incidents-on-london-bridge-and-in-nearb-1707609?pfrom=home-lateststories\">killing six people in a &quot;terror attack&quot;</a>&nbsp;in a popular night-life hub in London before armed police shot all three dead.<br />\r\n<br />\r\nAs they rampaged through the bars around London Bridge on Saturday night, the trio wore what looked like&nbsp;<a href=\"http://www.ndtv.com/world-news/terrorist-attack-in-heart-of-london-on-london-bridge-and-borough-market-what-we-know-so-far-10-point-1707613\">suicide vests which turned out to be &quot;hoaxes&quot;</a>, said Mark Rowley, head of counter-terrorism policing.<br />\r\n<br />\r\n&quot;We believe that six people have died in addition to the three attackers shot dead by police&quot; in what is being treated as a &quot;terrorist incident&quot;, Rowley said.<br />\r\n&nbsp;</p>',	'2017-04-06 09:39:19',	NULL,	'2017-04-06 09:39:19',	3,	1,	1,	1,	'2017-06-04 04:09:19',	'2017-06-04 06:16:06'),
(783,	'Seventh-news-the-assailants-who-mowed-down-people-on-london-bridge-attacked-people-with-knives-afp-4',	'Seventh News assailants who mowed down people on London Bridge attacked people with knives. (AFP)',	'1496573778_file000132701536-1024x768.jpg',	'LONDON:  Three assailants stabbed passers-by at random after smashing into pedestrians in a van, killing six people in a \"terror attack\" in a popular night-life hub in London before armed police shot all three dead.',	'<p>LONDON:&nbsp;&nbsp;Three assailants stabbed passers-by at random after smashing into pedestrians in a van,&nbsp;<a href=\"http://www.ndtv.com/world-news/van-and-knife-attack-leaves-trail-of-casualties-in-terrorist-incidents-on-london-bridge-and-in-nearb-1707609?pfrom=home-lateststories\">killing six people in a &quot;terror attack&quot;</a>&nbsp;in a popular night-life hub in London before armed police shot all three dead.<br />\r\n<br />\r\nAs they rampaged through the bars around London Bridge on Saturday night, the trio wore what looked like&nbsp;<a href=\"http://www.ndtv.com/world-news/terrorist-attack-in-heart-of-london-on-london-bridge-and-borough-market-what-we-know-so-far-10-point-1707613\">suicide vests which turned out to be &quot;hoaxes&quot;</a>, said Mark Rowley, head of counter-terrorism policing.<br />\r\n<br />\r\n&quot;We believe that six people have died in addition to the three attackers shot dead by police&quot; in what is being treated as a &quot;terrorist incident&quot;, Rowley said.<br />\r\n&nbsp;</p>',	'2017-04-06 09:39:19',	NULL,	'2017-04-06 09:39:19',	3,	1,	1,	1,	'2017-06-04 04:09:19',	'2017-06-04 05:29:50'),
(784,	'Eight-news-the-assailants-who-mowed-down-people-on-london-bridge-attacked-people-with-knives-afp-4',	'Eight News assailants who mowed down people on London Bridge attacked people with knives. (AFP)',	'1496573778_file000132701536-1024x768.jpg',	'LONDON:  Three assailants stabbed passers-by at random after smashing into pedestrians in a van, killing six people in a \"terror attack\" in a popular night-life hub in London before armed police shot all three dead.',	'<p>LONDON:&nbsp;&nbsp;Three assailants stabbed passers-by at random after smashing into pedestrians in a van,&nbsp;<a href=\"http://www.ndtv.com/world-news/van-and-knife-attack-leaves-trail-of-casualties-in-terrorist-incidents-on-london-bridge-and-in-nearb-1707609?pfrom=home-lateststories\">killing six people in a &quot;terror attack&quot;</a>&nbsp;in a popular night-life hub in London before armed police shot all three dead.<br />\r\n<br />\r\nAs they rampaged through the bars around London Bridge on Saturday night, the trio wore what looked like&nbsp;<a href=\"http://www.ndtv.com/world-news/terrorist-attack-in-heart-of-london-on-london-bridge-and-borough-market-what-we-know-so-far-10-point-1707613\">suicide vests which turned out to be &quot;hoaxes&quot;</a>, said Mark Rowley, head of counter-terrorism policing.<br />\r\n<br />\r\n&quot;We believe that six people have died in addition to the three attackers shot dead by police&quot; in what is being treated as a &quot;terrorist incident&quot;, Rowley said.<br />\r\n&nbsp;</p>',	'2017-04-06 09:39:19',	NULL,	'2017-04-06 09:39:19',	3,	1,	1,	1,	'2017-06-04 04:09:19',	'2017-06-04 06:15:42'),
(785,	'Nine-news-the-assailants-who-mowed-down-people-on-london-bridge-attacked-people-with-knives-afp-4',	'Nine News assailants who mowed down people on London Bridge attacked people with knives. (AFP)',	'1496573778_file000132701536-1024x768.jpg',	'LONDON:  Three assailants stabbed passers-by at random after smashing into pedestrians in a van, killing six people in a \"terror attack\" in a popular night-life hub in London before armed police shot all three dead.',	'<p>LONDON:&nbsp;&nbsp;Three assailants stabbed passers-by at random after smashing into pedestrians in a van,&nbsp;<a href=\"http://www.ndtv.com/world-news/van-and-knife-attack-leaves-trail-of-casualties-in-terrorist-incidents-on-london-bridge-and-in-nearb-1707609?pfrom=home-lateststories\">killing six people in a &quot;terror attack&quot;</a>&nbsp;in a popular night-life hub in London before armed police shot all three dead.<br />\r\n<br />\r\nAs they rampaged through the bars around London Bridge on Saturday night, the trio wore what looked like&nbsp;<a href=\"http://www.ndtv.com/world-news/terrorist-attack-in-heart-of-london-on-london-bridge-and-borough-market-what-we-know-so-far-10-point-1707613\">suicide vests which turned out to be &quot;hoaxes&quot;</a>, said Mark Rowley, head of counter-terrorism policing.<br />\r\n<br />\r\n&quot;We believe that six people have died in addition to the three attackers shot dead by police&quot; in what is being treated as a &quot;terrorist incident&quot;, Rowley said.<br />\r\n&nbsp;</p>',	'2017-04-06 09:39:19',	NULL,	'2017-04-06 09:39:19',	3,	1,	1,	1,	'2017-06-04 04:09:19',	'2017-06-04 05:29:50'),
(786,	'Ten-news-the-assailants-who-mowed-down-people-on-london-bridge-attacked-people-with-knives-afp-4',	'Ten News assailants who mowed down people on London Bridge attacked people with knives. (AFP)',	'1496569159_news-2-e1481703815958.jpg',	'LONDON:  Three assailants stabbed passers-by at random after smashing into pedestrians in a van, killing six people in a \"terror attack\" in a popular night-life hub in London before armed police shot all three dead.',	'<p>LONDON:&nbsp;&nbsp;Three assailants stabbed passers-by at random after smashing into pedestrians in a van,&nbsp;<a href=\"http://www.ndtv.com/world-news/van-and-knife-attack-leaves-trail-of-casualties-in-terrorist-incidents-on-london-bridge-and-in-nearb-1707609?pfrom=home-lateststories\">killing six people in a &quot;terror attack&quot;</a>&nbsp;in a popular night-life hub in London before armed police shot all three dead.<br />\r\n<br />\r\nAs they rampaged through the bars around London Bridge on Saturday night, the trio wore what looked like&nbsp;<a href=\"http://www.ndtv.com/world-news/terrorist-attack-in-heart-of-london-on-london-bridge-and-borough-market-what-we-know-so-far-10-point-1707613\">suicide vests which turned out to be &quot;hoaxes&quot;</a>, said Mark Rowley, head of counter-terrorism policing.<br />\r\n<br />\r\n&quot;We believe that six people have died in addition to the three attackers shot dead by police&quot; in what is being treated as a &quot;terrorist incident&quot;, Rowley said.<br />\r\n&nbsp;</p>',	'2017-04-06 09:39:19',	NULL,	'2017-04-06 09:39:19',	3,	1,	1,	1,	'2017-06-04 04:09:19',	'2017-06-04 05:29:50'),
(787,	'how-the-six-day-war-brought-elation-and-despair',	'How the Six Day War brought elation and despair',	'1496583844_file00053809264-1024x733.jpg',	'From a monastery rooftop just outside Jerusalem\'s ancient walls there is a spectacular view of the Dome of the Rock, rising in gold above the Old City.\r\nThe author Meir Shalev was brought to this spot as a boy to look across at the Western Wall - which at the time could not be accessed by Israelis.',	'<p>From a monastery rooftop just outside Jerusalem&#39;s ancient walls there is a spectacular view of the Dome of the Rock, rising in gold above the Old City.</p>\r\n\r\n<p>The author Meir Shalev was brought to this spot as a boy to look across at the Western Wall - which at the time could not be accessed by Israelis.</p>\r\n\r\n<p>From a monastery rooftop just outside Jerusalem&#39;s ancient walls there is a spectacular view of the Dome of the Rock, rising in gold above the Old City.</p>\r\n\r\n<p>The author Meir Shalev was brought to this spot as a boy to look across at the Western Wall - which at the time could not be accessed by Israelis.</p>\r\n\r\n<p>From a monastery rooftop just outside Jerusalem&#39;s ancient walls there is a spectacular view of the Dome of the Rock, rising in gold above the Old City.</p>\r\n\r\n<p>The author Meir Shalev was brought to this spot as a boy to look across at the Western Wall - which at the time could not be accessed by Israelis.</p>\r\n\r\n<p>From a monastery rooftop just outside Jerusalem&#39;s ancient walls there is a spectacular view of the Dome of the Rock, rising in gold above the Old City.</p>\r\n\r\n<p>The author Meir Shalev was brought to this spot as a boy to look across at the Western Wall - which at the time could not be accessed by Israelis.</p>',	'2017-04-06 11:56:45',	NULL,	'2017-04-06 11:56:45',	0,	1,	1,	1,	'2017-06-04 06:26:45',	'2017-06-04 08:14:04');

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1,	'Super Admin',	1,	'2017-05-23 15:39:12',	'2017-05-23 15:39:12'),
(2,	'Customer',	1,	'2017-05-23 15:39:12',	'2017-05-23 15:39:12');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	1,	'Super Admin',	'paul@gmail.com',	'$2y$10$Fy9X7CtjNfBzGQ04sTMeJ.ZfhOF.KRriOzylCzQFWDkmFUJmbeV/i',	1,	'NiT1HHL3QXSRDaotvIrARZwaEznpsCSgdB27nbnknbNhQX0PsjZN9QdHy0RJ',	'2017-05-23 15:39:12',	'2017-05-23 15:39:12');

DROP TABLE IF EXISTS `user_metas`;
CREATE TABLE `user_metas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `user_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_metas_user_id_foreign` (`user_id`),
  CONSTRAINT `user_metas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `thumbnail_image` text COLLATE utf8mb4_unicode_ci,
  `small_image` text COLLATE utf8mb4_unicode_ci,
  `large_image` text COLLATE utf8mb4_unicode_ci,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `start_date` datetime DEFAULT NULL COMMENT 'video start showing date.',
  `end_date` datetime DEFAULT NULL COMMENT 'video end showing date.',
  `event_date` datetime DEFAULT NULL,
  `display_order` int(11) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `videos` (`id`, `slug`, `title`, `url`, `thumbnail_image`, `small_image`, `large_image`, `short_description`, `description`, `start_date`, `end_date`, `event_date`, `display_order`, `status`, `created_at`, `updated_at`) VALUES
(1,	'first-video-lore-ipsum-dolor-sit-emit',	'First Video. Lore Ipsum Dolor Sit EMit.',	'https://www.youtube.com/embed/6pxRHBw-k8M',	'https://img.youtube.com/vi/6pxRHBw-k8M/0.jpg',	'https://img.youtube.com/vi/6pxRHBw-k8M/1.jpg',	'https://img.youtube.com/vi/6pxRHBw-k8M/maxresdefault.jpg',	'First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.',	'<p>First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.First Video. Lore Ipsum Dolor Sit EMit.</p>',	'2017-06-04 13:55:30',	NULL,	NULL,	0,	1,	'2017-06-04 08:25:16',	'2017-06-04 08:52:41');

-- 2017-06-04 14:37:50
