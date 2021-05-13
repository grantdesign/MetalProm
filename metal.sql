-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 13 2021 г., 20:06
-- Версия сервера: 10.4.12-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `metal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Центральный федеральный округ', NULL, NULL),
(3, 'Южный федеральный округ', NULL, NULL),
(4, 'Северо-западный федеральный округ', NULL, NULL),
(5, 'Дальневосточный федеральный округ', NULL, NULL),
(6, 'Сибирский федеральный округ', NULL, NULL),
(7, 'Уральский федеральный округ', NULL, NULL),
(8, 'Приволжский федеральный округ', NULL, NULL),
(9, 'Северо-Кавказский федеральный округ', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'categories/no_image.jpg',
  `parent_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `description`, `url`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Главная', 'glavnaya', NULL, 'http://metal.loc', 'categories/no_image.jpg', 0, NULL, NULL),
(2, 'Каталог поставщиков', 'katalog-postavshikov', NULL, 'http://metal.loc/companies', 'categories/no_image.jpg', 0, NULL, NULL),
(3, 'Доска объявлений', 'doska-obuyavlenij', NULL, '#', 'categories/no_image.jpg', 0, NULL, NULL),
(4, 'Новости', 'novosti', NULL, 'http://metal.loc/news', 'categories/no_image.jpg', 0, NULL, NULL),
(5, 'Контакты', 'kontakty', NULL, 'http://metal.loc/contacts', 'categories/no_image.jpg', 0, NULL, NULL),
(6, 'Металлопродукция', 'metalloprodukciya', 'Объявления о продаже металлопродукции, металлопроката, черных и цветных металлов', NULL, 'categories/abt-1.jpg', 3, NULL, NULL),
(7, 'Сырье и материалы', 'syre-i-materialy', 'In sit amet sapien eros Integer dolore magna aliqua', NULL, 'categories/abt-2.jpg', 3, NULL, NULL),
(8, 'Транспорт и спецтехника', 'transport-i-spetstekhnika', 'In sit amet sapien eros Integer dolore magna aliqua', NULL, 'categories/abt-3.jpg', 3, NULL, NULL),
(9, 'Черный металлопрокат', 'chernyj-metalloprokat', NULL, NULL, 'categories/no_image.jpg', 6, NULL, NULL),
(10, 'Цветные металлы', 'nerzhaveyushij-metalloprokat', NULL, NULL, 'categories/no_image.jpg', 6, NULL, NULL),
(11, 'Метизы и крепеж', 'metizy-i-krepezh', NULL, NULL, 'categories/no_image.jpg', 6, NULL, NULL),
(14, 'Нефтепродукты', 'nefteprodukty', NULL, NULL, 'categories/no_image.jpg', 7, NULL, NULL),
(15, 'Лакокрасочные материалы', 'lakokrasochnye-materialy', NULL, NULL, 'categories/no_image.jpg', 7, NULL, NULL),
(16, 'Резинотехнические изделия', 'rezinotehnicheskie-izdeliya', NULL, NULL, 'categories/no_image.jpg', 7, NULL, NULL),
(19, 'Грузовой автотранспорт', 'gruzovoj-avtotransport', NULL, NULL, 'categories/no_image.jpg', 8, NULL, NULL),
(20, 'Спецтехника', 'spectehnika', NULL, NULL, 'categories/no_image.jpg', 8, NULL, NULL),
(21, 'Тракторы и сельхозтехника', 'traktory-i-selkhoztekhnika', NULL, NULL, 'categories/no_image.jpg', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Александр', 'grant@mail.ru', 'Привет! Как дела?', '2021-04-03 10:56:59', '2021-04-03 10:56:59');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_03_31_161029_create_menus_table', 1),
(4, '2021_03_31_184749_change_table_menus_add_slug', 2),
(5, '2021_03_31_185809_change_table_menus_add_description', 3),
(6, '2021_03_31_201046_create_sliders_table', 4),
(7, '2021_04_01_074715_change_table_menus_add_image', 5),
(8, '2021_04_01_114250_create_companies_table', 6),
(9, '2021_04_01_205257_change_table_users_add_menu_id', 7),
(10, '2021_04_01_210317_change_table_users_add_region_id', 8),
(11, '2021_04_02_091255_create_districts_table', 9),
(12, '2021_04_02_091547_change_table_regions_add_column_district_id', 10),
(14, '2021_04_02_093832_change_table_column_regions_add_district_id', 11),
(15, '2021_04_02_094113_change_table_column_regions_district_id', 12),
(16, '2021_04_02_094930_create_districts_table', 13),
(17, '2021_04_02_095115_create_regions_table', 14),
(18, '2021_04_02_095727_change_table_users_add_is_admin', 15),
(19, '2021_04_02_110425_create_posts_table', 16),
(20, '2021_04_02_111750_change_table_posts_add_menu_id', 17),
(21, '2021_04_02_113045_change_table_posts_add_image', 18),
(22, '2021_04_03_090912_change_table_users_add_image', 19),
(23, '2021_04_03_134441_create_messages_table', 20),
(24, '2021_04_03_175010_create_subscribes_table', 21),
(25, '2021_04_04_093010_create_news_table', 22);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'news/no_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Производство литейного оборудования на \"ОПТИМ Толедо\"', 'Ряд производственных событий произошло с начала этого года в компании \"ОПТИМ Толедо\".', 'Запущена в работу лабораторная дуговая печь постоянного тока с одним сводовым и одним подовым электродами. Емкость печи 30 кг по стали.\r\n\r\nВведен в эксплуатацию электрический стенд нагрева ковшей для ООО \"БЭНЗ\". Мощность нагревательного блока 16 кВт.\r\n\r\nОтгружена заказчику печь постоянного тока ДППТ-0,1 специального исполнения.\r\n\r\nС технологиями компании можно будет познакомиться 8-10 июня в Москве, на Красной Пресне. ', 'news/1.jpg', '2021-04-04 11:30:59', '2021-04-04 11:30:59');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'posts/no_image.jpg',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `price`, `text`, `image`, `user_id`, `created_at`, `updated_at`, `menu_id`) VALUES
(1, 'Квадрат калиброванный из наличия, сталь 45, 40Х', '7.000', 'Профнастил Н75-750-0, 7 оц - 18 тонн\r\nЦена: 70 000 руб./тн\r\nПАО Челябинский завод профилированного стального настила\r\nМесто хранения: г. Нижний Новгород\r\n---\r\n(831) 423-59-80, +7 920 253 6101\r\nМоб./WhatsApp +7 929 053 5980\r\nБорткевич Николай Алексеевич\r\nwww.rosrezerv52.ru\r\nzakaz@rosrezerv52.ru', 'posts/hGVK1qDvTX17tmKnoOvHcocjGvq6xA1l1ma9XqrA.jpg', 1, '2021-04-02 10:40:02', '2021-04-02 10:40:02', 9),
(3, 'Штрипс оцинкованный Z275 1,0-3,2мм ширина 50-317мм', '6.800', 'Штрипс оц. толщина от 1, 0-3, 2мм. ширина от 50-317мм. остаток 350тн. Список по запросу, на объем хороший торг.', 'posts/LzHTMVlRoU039VQeRP5WPP4xP89iq4ZEyobve7iy.jpg', 1, '2021-04-02 14:22:50', '2021-04-02 14:22:50', 9),
(4, 'Ароматизаторы для нефтепродуктов', '1.000', 'Difron ZH1 -аромат зеленого чай (дозировка 25-40 гр/тонну)\r\nDifron TAIGA - аромат хвои (дозировка - от 20 гр/тонну)\r\n\r\nС помощью ароматизаторов для светлых нефтепродуктов вы удалите любой химический запах.\r\n\r\nАроматизаторы Difron:\r\n-полностью синтетические продукты;\r\n-обеспечивают топливу приятный запах зеленого чая или хвои;\r\n-прошли испытания на различных топливах Европы, проведена полная программа -испытаний на совместимость с другими присадками;', 'posts/KqtewT3bWUtLLmVBuAYtzpWixNGTQTju2vCxtDL4.jpg', 1, '2021-04-04 05:02:10', '2021-04-04 05:02:10', 14),
(5, 'Нефть сырая компаундированная', '19.200', 'Предлагается к поставке варианты нефти сырой.\r\nХарактеристики.\r\n1.Нефть сырая плотностью 835-837; сера 0, 25%; вода 0, 01 %.\r\nЦена 19 200 руб. за тонну.\r\n\r\n2.Нефть сырая плотностью 817, 7.\r\nЦена 26 100 руб. за тонну.\r\n\r\nДоставка ж/д или автовывоз (автоналив).\r\nПоставка по России.', 'posts/g2Zxc9q1qxf9ifx17Weoo3afzSPtglLKotoKGubf.jpg', 1, '2021-04-04 05:06:27', '2021-04-04 05:06:27', 14),
(6, 'ЭБП-17 экскаватор-погрузчик универсальный', '3.000 000', 'ЭБП-17 экскаватор-погрузчик универсальный, со смещаемой осью копания на базе тракторов СМТ-80.\r\nОсновные характеристики экскаватора\r\nТрактор СМТ-80 СМТ-90\r\nДвигатель, мощностью, л/с LR4108T4X LR4105ZT55\r\n80 л/с 90 л/с\r\nТип двигателя дизельный без турбонаддува\r\nТяговый класс по ГОСТ 27021-86 1, 4\r\nМаксимальная транспортная скорость, км/ч 20\r\nРабочая скорость км/ч (не более) 4\r\nДорожный просвет, мм, не менее 420\r\nЭксплуатационная масса без сменного навесного инструмента, кг, не более 6500\r\nВид заднего навесного экскаваторного оборудования обратная лопата.', 'posts/8MVmgPbXa9lPOby6qPaDmfiequhqM4T2w3sNcybZ.jpg', 1, '2021-04-04 05:11:00', '2021-04-04 05:11:00', 20),
(7, 'Магниевые листы и прутки МА2-1', '4.000', 'ООО «КольчугМетПром» г. Кольчугино предлагает магниевые листы и прутки сплавов МА8, МА2-1, МА14-Т1, МА15 из наличия. Толщина от 0, 8 мм до 16 мм. Доставка продукции. Людмила т/ф (49245) 2-35-64; 2-47-28; 8-915-753-5531, 8-910-771-33-98.\r\nE-mail: kmp.11@yandex.ru. Наш сайт: www.oookmp.ru', 'posts/FLkaRaRGag4RJkP3kI7vN7fdpEbeIn9lPT5VFOir.jpg', 1, '2021-04-04 05:23:28', '2021-04-04 05:23:28', 10),
(8, 'Производство болтов по ГОСТу 7798 от 24мм', '500', 'Собственное производство болтов по ГОСТу 7798 класс прочности 5.8 диаметром от 30 мм до 48 мм любой длины . Различные марки стали. Цена от 80 руб/кг .\r\nПишите doktor4-4@mail.ru , звоните 8 903 317 77 17 ; 8(8443) 34 27 04', 'posts/qKrtlWyadxGXAJyDMMejMxE4Rd2QDPHgJVydqfkY.jpg', 1, '2021-04-04 05:46:01', '2021-04-04 05:46:01', 11),
(9, 'Преобразователь ржавчины для металла - АРМАКОР', '150', 'АРМАКОР Ф – фосфатирующая пропитка для металла, антикоррозионный модификатор ржавчины.\r\n\r\nФосфатирующий модификатор ржавчины для обработки стальных, чугунных, оцинкованных и алюминиевых поверхностей перед нанесением ЛКМ. Представляет собой водный (спиртовой для зимней модификации) раствор ортофосфорной кислоты, ингибиторов коррозии, спирта и специальных целевых добавок.', 'posts/0nOHLCdJudLYZ7XweZ8GYVyAroywptVHHm8U1GoT.jpg', 1, '2021-04-04 05:52:01', '2021-04-04 05:52:01', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `district_id`, `name`, `created_at`, `updated_at`) VALUES
(2, 3, 'Адыгея', NULL, NULL),
(3, 6, 'Алтай', NULL, NULL),
(4, 6, 'Алтайский край', NULL, NULL),
(5, 5, 'Амурская область', NULL, NULL),
(6, 4, 'Архангельская область', NULL, NULL),
(7, 3, 'Астраханская область', NULL, NULL),
(8, 8, 'Башкортостан', NULL, NULL),
(9, 2, 'Белгородская область', NULL, NULL),
(10, 2, 'Брянская область', NULL, NULL),
(11, 6, 'Бурятия', NULL, NULL),
(12, 2, 'Владимирская область', NULL, NULL),
(13, 3, 'Волгоградская область', NULL, NULL),
(14, 4, 'Вологодская область', NULL, NULL),
(15, 2, 'Воронежская область', NULL, NULL),
(16, 9, 'Дагестан', NULL, NULL),
(17, 5, 'Еврейская АО', NULL, NULL),
(18, 6, 'Забайкальский край', NULL, NULL),
(19, 2, 'Ивановская область', NULL, NULL),
(20, 9, 'Ингушетия', NULL, NULL),
(21, 6, 'Иркутская область', NULL, NULL),
(22, 9, 'Кабардино-Балкария', NULL, NULL),
(23, 4, 'Калининградская область', NULL, NULL),
(24, 3, 'Калмыкия', NULL, NULL),
(25, 2, 'Калужская область', NULL, NULL),
(26, 5, 'Камчатский край', NULL, NULL),
(27, 9, 'Карачаево-Черкессия', NULL, NULL),
(28, 4, 'Карелия', NULL, NULL),
(29, 6, 'Кемеровская область', NULL, NULL),
(30, 8, 'Кировская область', NULL, NULL),
(31, 4, 'Коми', NULL, NULL),
(32, 2, 'Костромская область', NULL, NULL),
(33, 3, 'Краснодарский край', NULL, NULL),
(34, 6, 'Красноярский край', NULL, NULL),
(35, 7, 'Курганская область', NULL, NULL),
(36, 2, 'Курская область', NULL, NULL),
(37, 4, 'Ленинградская область', NULL, NULL),
(38, 2, 'Липецкая область', NULL, NULL),
(39, 5, 'Магаданская область', NULL, NULL),
(40, 8, 'Марий Эл', NULL, NULL),
(41, 8, 'Мордовия', NULL, NULL),
(42, 2, 'Москва', NULL, NULL),
(43, 2, 'Московская область', NULL, NULL),
(44, 4, 'Мурманская область', NULL, NULL),
(45, 4, 'Ненецкий АО', NULL, NULL),
(46, 8, 'Нижегородская область', NULL, NULL),
(47, 4, 'Новгородская область', NULL, NULL),
(48, 6, 'Новосибирская область', NULL, NULL),
(49, 6, 'Омская область', NULL, NULL),
(50, 8, 'Оренбургская область', NULL, NULL),
(51, 2, 'Орловская область', NULL, NULL),
(52, 8, 'Пензенская область', NULL, NULL),
(53, 8, 'Пермский край', NULL, NULL),
(54, 5, 'Приморский край', NULL, NULL),
(55, 4, 'Псковская область', NULL, NULL),
(56, 3, 'Ростовская область', NULL, NULL),
(57, 2, 'Рязанская область', NULL, NULL),
(58, 8, 'Самарская область', NULL, NULL),
(59, 4, 'Санкт-Петербург', NULL, NULL),
(60, 8, 'Саратовская область', NULL, NULL),
(61, 5, 'Саха (Якутия)', NULL, NULL),
(62, 5, 'Сахалинская область', NULL, NULL),
(63, 7, 'Свердловская область', NULL, NULL),
(64, 9, 'Северная Осетия - Алания', NULL, NULL),
(65, 2, 'Смоленская область', NULL, NULL),
(66, 9, 'Ставропольский край', NULL, NULL),
(67, 2, 'Тамбовская область', NULL, NULL),
(68, 8, 'Татарстан', NULL, NULL),
(69, 2, 'Тверская область', NULL, NULL),
(70, 6, 'Томская область', NULL, NULL),
(71, 2, 'Тульская область', NULL, NULL),
(72, 6, 'Тыва', NULL, NULL),
(73, 7, 'Тюменская область', NULL, NULL),
(74, 8, 'Удмуртия', NULL, NULL),
(75, 8, 'Ульяновская область', NULL, NULL),
(76, 5, 'Хабаровский край', NULL, NULL),
(77, 6, 'Хакасия', NULL, NULL),
(78, 7, 'Ханты-Мансийский АО - Югра', NULL, NULL),
(79, 7, 'Челябинская область', NULL, NULL),
(80, 9, 'Чеченская республика', NULL, NULL),
(81, 8, 'Чувашская республика', NULL, NULL),
(82, 5, 'Чукотский АО', NULL, NULL),
(83, 7, 'Ямало-Ненецкий АО', NULL, NULL),
(84, 2, 'Ярославская область', NULL, NULL),
(86, 3, 'Крым', NULL, NULL),
(87, 3, 'Севастополь', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sliders/no_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'bnr-1.jpg', NULL, NULL),
(2, 'bnr-2.jpg', NULL, NULL),
(3, 'bnr-3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'test@mail.ru', '2021-04-03 15:02:04', '2021-04-03 15:02:04');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'users/no_image.jpg',
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `is_admin` tinyint(3) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `description`, `text`, `person`, `phone`, `address`, `site`, `image`, `menu_id`, `region_id`, `is_admin`) VALUES
(1, 'ООО ТД Уралпрокат', 'tduralprokat@mail.ru', NULL, '$2y$10$s3QAK21QkqLNuBkxoiWpQ.pmCsI/XDsmLV5Akb/1VnVGvXVGBtS5G', NULL, '2021-04-02 09:00:17', '2021-04-02 09:00:17', 'ООО ТД «Уралпрокат» осуществляет поставку качественного металлопроката, более 500 видов стали.', 'ООО ТД \"Уралпрокат\" стабильная компания. Основным видом деятельности нашей компании является оптово-розничные поставки черного и нержавеющего металлопроката во все регионы России, стран СНГ и стран дальнего зарубежья. Всегда в наличии на складе рядовые, инструментальные, легированные, рессорно-пружинные, теплоустойчивые, автоматные,подшипниковые, быстрорежущие, нержавеющие и др. стали. Постоянное наличие больших объемов металлопроката на складах, позволяет обеспечивать бесперебойное снабжение металлопродукцией наших клиентов. Наша цель — долгосрочное и взаимовыгодное сотрудничество.', 'Сергей Геннадьевич', '+7 (343) 201 67 15', '620012, г.Екатеринбург. ул. Машиностроителей, д. 19, оф. 512', 'http://tduralprokat.ru', 'users/user1.jpg', 9, 63, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_district_id_foreign` (`district_id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribes_email_unique` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_menu_id_foreign` (`menu_id`),
  ADD KEY `users_region_id_foreign` (`region_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `regions_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `users_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
