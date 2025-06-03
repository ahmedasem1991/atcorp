-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2025 at 04:59 AM
-- Server version: 9.1.0
-- PHP Version: 8.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samoumfc`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<h2 style=\"margin-bottom: 0.5rem; font-family: sans-serif; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 2rem; text-align: right; background-color: rgb(255, 255, 255);\">لماذا نحن ؟</h2><h6 style=\"margin-bottom: 0.5rem; font-family: inherit; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">1) لأن لدينا المنهج السليم والوسائل العصرية الفاعلة والكفاءة والخبرة والمؤهلات اللازمة لتحقيق الآتي:</h6><p style=\"margin-bottom: 1rem;\">إرشاد وتوجيه عميلنا إلى إدارة علاقاته المصرفية بطرق وأساليب احترافية.</p><p style=\"margin-bottom: 1rem;\">تنوير عميلنا بماهية حقوقه , وكيفية حمايتها, وتمكينه من جني ثمار التسيير والتشغيل الفعال والاقتصادي لعمله التجاري بمهارة فائقة ومستوى رفيع.</p><p style=\"margin-bottom: 1rem;\">حماية عميلنا من أي أضرار أو تلاعب أو إهمال ينشأ نتيجة اختلاف وجهات النظر أو التفسير الخاطئ لحجم الخدمات والتسهيلات المصرفية ودرء المخاطر المحتملة وما يترتب عليها من نتائج سلبية.</p><h6 style=\"margin-bottom: 0.5rem; font-family: inherit; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">2) ولأننا استشاريون متخصصون فى مجالنا , ولدينا الموارد والأدوات والمهارات والإلمام بالقواعد السليمة التي تساعدنا في أن نقدم لعميلنا الخدمة ذات القيمة المضافة. ولأننا ننتمي للمجتمع السعودي , ونتفهم طبيعة الأعمال والاستثمارات التي تتفق مع تراثنا وقيمنا وأخلاقنا.</h6><h6 style=\"margin-bottom: 0.5rem; font-family: inherit; font-weight: 500; line-height: 1.2; color: inherit; font-size: 1rem;\">ألا تعتقد أنك بحاجة لخدمات تضيف قيمة ومردودا طيبا لعملك التجاري على أن تقاس وفقا لمؤشرات ومقاييس الأداء العصرية مثل التكلفة والجودة وسرعة الانجاز ؟</h6><p style=\"margin-bottom: 1rem;\">إذا كان الأمر كذلك , فمرحبا بك في قائمة عملائنا التي تنعم بثمار عوننا وعطائنا .</p>', '2025-01-08 17:58:22', '2025-01-08 18:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `about_licenses`
--

CREATE TABLE `about_licenses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_licenses`
--

INSERT INTO `about_licenses` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', '01JH3RC4CREAF421QM047SZ6YW.png', '2025-01-08 18:05:56', '2025-01-08 18:05:56'),
(2, '2', '01JH3RCEEY2Y5PZVDMHRXC5SRR.png', '2025-01-08 18:06:06', '2025-01-08 18:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ahmed asem', 'ahmedasem86@gmail.com', 'test', '2025-01-09 02:12:30', '2025-01-09 02:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Desar', '01JH3H521TMZTT9DF11EDC9GFF.png', '2025-01-08 15:59:44', '2025-01-08 15:59:44'),
(2, 'Fakieh', '01JH3H5B1YR6C0M1GJ7T4CBHGM.gif', '2025-01-08 15:59:53', '2025-01-08 15:59:53'),
(3, 'Halwni', '01JH3H5PV4R0VF3AS2078JMXCW.png', '2025-01-08 16:00:05', '2025-01-08 16:00:05'),
(4, 'indigo', '01JH3H62T562HXK493CWCH9ED3.jpg', '2025-01-08 16:00:17', '2025-01-08 16:00:17'),
(5, 'Habitat', '01JH3H6D615H7J1W3C1D53CF5A.jpg', '2025-01-08 16:00:28', '2025-01-08 16:00:28'),
(7, 'sabek', '01JH3J259S9TJ1DD0BRMC9TPM7.png', '2025-01-08 16:15:38', '2025-01-08 16:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', '01JH4KMB7AAXJ6ZSCG6SCA9T8E.jpg', '2025-01-09 02:02:16', '2025-01-09 02:02:16'),
(2, '2', '01JH4KN3WAACZ806K12T6XNCK4.jpg', '2025-01-09 02:02:42', '2025-01-09 02:02:42'),
(3, '3', '01JH4KNGP05SX3AVNKTADC69GR.jpg', '2025-01-09 02:02:55', '2025-01-09 02:02:55'),
(4, '4', '01JH4KNXJW9M4VSA0ZJRQ53EJT.png', '2025-01-09 02:03:08', '2025-01-09 02:03:08'),
(5, '5', '01JH4KPAPS4QBYWVPQR8Q3MJTA.jpg', '2025-01-09 02:03:21', '2025-01-09 02:03:21'),
(6, '6', '01JH4KPQ8Z996Z4P7JGMP2MKM3.jpg', '2025-01-09 02:03:34', '2025-01-09 02:03:34'),
(7, '7', '01JH4KQM8XDK7S039GCCSDECCV.png', '2025-01-09 02:04:04', '2025-01-09 02:04:04'),
(8, '8', '01JH4KR0RDDT02NFB21R22ZNTE.png', '2025-01-09 02:04:17', '2025-01-09 02:04:17'),
(9, '9', '01JH4KREG0XY4Q5FNTS07J3Z2V.png', '2025-01-09 02:04:31', '2025-01-09 02:04:31'),
(10, '10', '01JH4KT2WK9RAGFAR6BDV3T9NN.png', '2025-01-09 02:05:25', '2025-01-09 02:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `main_sliders`
--

CREATE TABLE `main_sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_sliders`
--

INSERT INTO `main_sliders` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(5, 'استشارات المصرفية', '01JH3GSQ5M4SEDRQEQ9CJS9ZJ5.jpg', '2025-01-08 15:53:32', '2025-01-08 15:53:32'),
(6, 'الخدمات المصرفية', '01JH3GV3PNGDYDYNVSYA83YR85.jpg', '2025-01-08 15:54:18', '2025-01-08 15:54:18'),
(7, 'الخدمات المالية المتخصصة', '01JH3GVKD5JQ7CZYB0K8ZQEGTP.png', '2025-01-08 15:54:34', '2025-01-08 15:54:34'),
(8, 'الاستشارات الاستثمارية والمالية', '01JH3GX042PZY5HQHMGQA43XGD.png', '2025-01-08 15:55:20', '2025-01-08 15:55:20'),
(9, 'خدمات التدريب والتنمية', '01JH3GXJY6EXA6MA2E449NH4NM.png', '2025-01-08 15:55:39', '2025-01-08 15:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_08_122006_create_main_slider_resources_table', 1),
(6, '2025_01_08_175746_create_customers_table', 2),
(7, '2025_01_08_190414_create_qoutes_table', 3),
(8, '2025_01_08_193625_create_quotes_table', 4),
(9, '2025_01_08_195451_create_abouts_table', 5),
(10, '2025_01_08_200222_create_about_licenses_table', 6),
(11, '2025_01_09_032115_create_news_videos_table', 7),
(12, '2025_01_09_035830_create_galleries_table', 8),
(13, '2025_01_09_040947_create_contact_us_table', 9),
(14, '2025_01_09_041842_create_newsletters_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ahmedasem86@gmail.com', '2025-01-09 02:25:18', '2025-01-09 02:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `news_videos`
--

CREATE TABLE `news_videos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_videos`
--

INSERT INTO `news_videos` (`id`, `title`, `video_url`, `created_at`, `updated_at`) VALUES
(1, '1', 'https://www.youtube.com/embed/AlwV4RXHngU?autoplay=1', '2025-01-09 01:26:04', '2025-01-09 01:26:04'),
(2, '2', 'https://www.youtube.com/embed/AlwV4RXHngU?autoplay=1', '2025-01-09 01:26:18', '2025-01-09 01:26:18'),
(3, '3', 'https://www.youtube.com/embed/NLUUI_SYURM?autoplay=1', '2025-01-09 01:26:28', '2025-01-09 01:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qoutes`
--

CREATE TABLE `qoutes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'الرواد', ' مكتبنا رآئد في مجال الاستشارات المصرفية والمالية والإستثمارية بالمملكة العربية السعودية ، وقد قام بتأسيسة المستشار المصرفي عبد الله إسماعيل سموم\n', '2025-01-08 17:39:42', '2025-01-08 17:39:42'),
(2, 'الإفتتاح', ' من دواعي فخرنا وأعتزازنا ، أننا أول مكتب سعودي مؤهل يقدم إستشارات وخدمات مالية متخصصة بالمملكة العربية السعودية ، وقد حصلنا علي مباركة مقام وزارة المالية والترخيص رقم (١) من من مقام وزارة التجارة والصناعة في ١٤٠٦/٧/٢١ ه.\n', '2025-01-08 17:39:57', '2025-01-08 17:39:57'),
(3, 'رسالتنا', ' أن نحقق مكاسب ملموسة لعملائنا بأن نتيح لهم الحصول علي أفضل الخدمات الإستشارية الممكنة في أسرع وقت وبأقل تكلفة وبأعلي جودة.\n', '2025-01-08 17:40:10', '2025-01-08 17:40:10'),
(4, 'خبرتنا', ' نسخر لعملائنا حصيلة خبرات مصرفية ومالية واستشارية تجاوزت أربعة عقود من الزمن وبمعرفة غزيرة وكفاءة مهنية وعالية تمكننا من تكريس المشورة المخلصة والعطاء المتميز ، ونحن بعون الله وتوفيقة نرسم مع عملائنا طريق النجاح\n', '2025-01-08 17:40:37', '2025-01-08 17:40:37'),
(5, 'شركاؤكم', 'نحن شركاؤكم المخلصون والقادرون بإذن الله من تمكين منشآتكم من تطبيق أفضل التقنيات والنظم والممارسات التجارية لتنفيذ خططكم وأعمالكم بالأسلوب والنهج الصحيحين منذ الوهلة الأولي .', '2025-01-08 17:49:04', '2025-01-08 17:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmed asem', 'admin@samoum.com', NULL, '$2y$12$r84rvUjH0F3EyQ5bbrNms.vIDWoPmysSMMcRxT07.abYZu2PzHtM6', NULL, '2025-01-08 15:11:45', '2025-01-08 15:11:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_licenses`
--
ALTER TABLE `about_licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_sliders`
--
ALTER TABLE `main_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_videos`
--
ALTER TABLE `news_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `qoutes`
--
ALTER TABLE `qoutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_licenses`
--
ALTER TABLE `about_licenses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `main_sliders`
--
ALTER TABLE `main_sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_videos`
--
ALTER TABLE `news_videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qoutes`
--
ALTER TABLE `qoutes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
