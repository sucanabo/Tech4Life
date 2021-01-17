-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 17, 2021 at 07:17 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'You have new message from system ', 'Your post has been successfully moderated', NULL, NULL),
(2, 'You have new message from system ', 'Your post has been successfully moderated', NULL, NULL),
(3, 'You have new message from system ', 'Your post has been successfully moderated', NULL, NULL),
(4, 'You have new message from system ', 'Your post has been successfully moderated', NULL, NULL),
(5, 'You have new message from system ', 'Your post has been successfully moderated', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `owned_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `status`, `owned_by`, `created_at`, `updated_at`) VALUES
(1, 'Laravel ', 'Category1.jpg', 1, 'Tech4life', NULL, NULL),
(2, 'Android ', 'Category2.jpg', 1, 'Tech4life', NULL, NULL),
(3, 'NodeJS ', 'Category3.jpg', 1, 'Tech4life', NULL, NULL),
(4, 'c++ ', 'Category4.jpg', 1, 'Tech4life', NULL, NULL),
(5, 'c# ', 'Category5.jpg', 1, 'Tech4life', NULL, NULL),
(6, 'MySQL ', 'Category6.jpg', 1, 'Tech4life', NULL, NULL),
(7, 'JAVA ', 'Category7.jpg', 1, 'Tech4life', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_follow`
--

CREATE TABLE `category_follow` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `publish_date` datetime NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_19_154818_post', 1),
(5, '2020_11_19_155621_series', 1),
(6, '2020_11_19_160456_category', 1),
(7, '2020_11_19_160653_user_report', 1),
(8, '2020_11_19_161554_notifications', 1),
(9, '2020_11_19_163405_announcement', 1),
(10, '2020_11_19_163652_category_follow', 1),
(11, '2020_11_19_163822_post_category', 1),
(12, '2020_11_19_163929_series_post', 1),
(13, '2020_11_19_164039_series_clip', 1),
(14, '2020_11_19_164321_post_report', 1),
(15, '2020_11_19_164458_post_image', 1),
(16, '2020_12_20_025335_create_session_users_table', 1),
(17, '2020_12_29_090139_create_comments_table', 1),
(18, '2021_01_06_051348_post_clip', 1),
(19, '2021_01_15_145553_user_follow', 1),
(20, '2021_01_16_152137_update', 1),
(21, '2021_01_16_152720_vote_post', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL, NULL),
(2, 2, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL, NULL),
(3, 3, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL, NULL),
(4, 4, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL, NULL),
(5, 5, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL, NULL),
(6, 6, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL, NULL),
(7, 7, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL, NULL),
(8, 8, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL, NULL),
(9, 9, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `image_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `view`, `image_title`, `user_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'LARAVEL 02 : TÌM HIỂU VỀ ROUTE TRONG LARAVEL', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 1, 1, '0', NULL, '2021-01-16 22:47:15'),
(2, 'Laravel 03 : Group Router trong laravel', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 1, 1, '0', NULL, NULL),
(3, 'Laravel 04 : Controller trong laravel', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 1, 1, '0', NULL, NULL),
(4, 'Laravel 05 : View trong laravel', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 1, 1, '0', NULL, NULL),
(5, 'Laravel 06 : Truyền tham số từ Controller sang View', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 1, 1, '0', NULL, NULL),
(6, 'Laravel 07 : Truyền dữ liệu ô input từ View .php sang Controller', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 1, 1, '0', NULL, NULL),
(7, 'Laravel 08 : Blade Template trong laravel', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 1, 1, '0', NULL, NULL),
(8, 'Laravel 09 : Cú pháp có thể sử dụng trong file blade.php của laravel', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 2, 1, '0', NULL, NULL),
(9, 'Laravel 10 : Hiển thị nội dung từ controller sang View sử dụng cú pháp blade của laravel', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 2, 1, '0', NULL, NULL),
(10, 'Laravel 11 : Tránh lỗi file css,js khi blade template', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 2, 1, '0', NULL, NULL),
(11, 'Laravel 12 : Validate,Validator trong laravel', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 2, 1, '0', NULL, NULL),
(12, 'Laravel 13 : Hiển Thị Thông báo lỗi – validate Trong Laravel.', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 2, 1, '0', NULL, NULL),
(13, 'Laravel 14 : Clear Code Validate bằng Form Request trong laravel', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 3, 1, '0', NULL, NULL),
(14, 'Laravel 15 : Sử dụng Schema builder Thao tác với bảng', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 3, 1, '0', NULL, NULL),
(15, 'Laravel 16 : Quản lý bảng bằng Migration trong laravel', '<p>ahihi</p>', 200, '1610862991.jpg', 3, 1, '0', NULL, '2021-01-16 22:56:31'),
(16, 'Laravel 17 : Query builder thực thi truy vấn CSDL', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 3, 1, '0', NULL, NULL),
(17, 'Laravel 18 :Tạo dữ liệu mẫu với Seeding', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 3, 1, '0', NULL, NULL),
(18, 'LARAVEL 02 :Laravel 19 :Phân trang trong laravel', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 3, 1, '0', NULL, NULL),
(19, 'LARAVEL 02 : Laravel 20 :Tìm hiểu về session trong laravel', 'Bây Giờ chúng ta có thể mở  routes/web.php và thử tạo 1 url là ‘xin-chao’\r\n\r\n    Bây giờ chúng ta Bật Xampp sau đó mở trình duyệt gõ http://localhost/Thaygiaoquocdan/public/xin-chao\r\n    \r\n    Trong đó http://localhost/Thaygiaoquocdan/public/ đóng voi trò là tên miền mà chúng ta mua. Ở buổi cuối mình sẽ hướng dẫn các bạn upload web lên hosting\r\n    \r\n    VD: tên miền của bạn là thaygiaoquocdan.vn\r\n    \r\n    lúc đó thay vì gõ :http://localhost/Thaygiaoquocdan/public/xin-chao các bạn chỉ cần gõ :  thaygiaoquocdan.vn/xin-chao   thui nhé!', 200, '1610862991.jpg', 3, 1, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_clip`
--

CREATE TABLE `post_clip` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_image`
--

CREATE TABLE `post_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_report`
--

CREATE TABLE `post_report` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vote` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `title`, `description`, `vote`, `view`, `user_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Laravel sesson 1', 'All Laravel routes are defined in your route files, which are located in the routes directory.', 100, 200, 1, 1, '0', NULL, NULL),
(2, 'Laravel sesson 2', 'All Laravel routes are defined in your route files, which are located in the routes directory.', 100, 200, 1, 1, '0', NULL, NULL),
(3, 'Laravel sesson 3', 'All Laravel routes are defined in your route files, which are located in the routes directory.', 100, 200, 1, 1, '0', NULL, NULL),
(4, 'Laravel sesson 4', 'All Laravel routes are defined in your route files, which are located in the routes directory.', 100, 200, 1, 1, '0', NULL, NULL),
(5, 'Laravel sesson 5', 'All Laravel routes are defined in your route files, which are located in the routes directory.', 100, 200, 1, 1, '0', NULL, NULL),
(6, 'Laravel sesson 6', 'All Laravel routes are defined in your route files, which are located in the routes directory.', 100, 200, 1, 1, '0', NULL, NULL),
(7, 'Laravel sesson 7', 'All Laravel routes are defined in your route files, which are located in the routes directory.', 100, 200, 1, 1, '0', NULL, NULL),
(8, 'Laravel sesson 8', 'All Laravel routes are defined in your route files, which are located in the routes directory.', 100, 200, 1, 1, '0', NULL, NULL),
(9, 'Laravel sesson 9', 'All Laravel routes are defined in your route files, which are located in the routes directory.', 100, 200, 1, 1, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `series_clip`
--

CREATE TABLE `series_clip` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `series_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `series_post`
--

CREATE TABLE `series_post` (
  `series_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session_users`
--

CREATE TABLE `session_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refresh_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_expried` datetime NOT NULL,
  `refresh_token_expried` datetime NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `gender` tinyint(3) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `permission` tinyint(3) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone_number`, `display_name`, `avatar`, `view`, `gender`, `status`, `permission`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User_1', '$2y$10$8LkE5TnqR.m/9PP1BAdlN.XGDGI02.AQJxqPgkoXkXpQijxfbnOb6', 'user_1@mymail.com', 979769711, 'Phuc Dinh', '1609054668Pi.jpg', 100, 0, 1, 1, '0', NULL, NULL),
(2, 'User_2', '$2y$10$tKF39c46.bpNrVWnF7/MqO6vuqw0lIc.FawkmX4k5.wdpd3xfk4hy', 'user_2@mymail.com', 979769712, 'Sprint Log', '2.jpg', 100, 0, 1, 1, '0', NULL, NULL),
(3, 'User_3', '$2y$10$ddjZ8xfLJ.p3JT7G8tH.VOaUlIlZE90QFB4/BIVBniRxrj3mIR7Vi', 'user_3@mymail.com', 979769713, 'Ká né', '3.jpg', 100, 0, 1, 1, '0', NULL, NULL),
(4, 'User_4', '$2y$10$nqlsses93Sodzc8MXDMCgOkp44CJPPYFibjltdeQXxzRo6pLM5W8C', 'user_4@mymail.com', 979769714, 'Kien Cu Te', '4.jpg', 100, 0, 1, 1, '0', NULL, NULL),
(5, 'User_5', '$2y$10$DrVPchSW7LjeANVNTsvFmuH3sxAtjt7LzSQr/irG9EP65LIuhjQGa', 'user_5@mymail.com', 979769715, 'Xuân Lộc', '5.jpg', 100, 0, 1, 1, '0', NULL, NULL),
(6, 'User_6', '$2y$10$4jB3VzEuEOOGkSpjV6XBe.2qN5VhZQ2fyJhCWCFlRpMTQCG2Ouo.i', 'user_6@mymail.com', 979769716, 'Xuân Lộc', '6.jpg', 100, 0, 1, 1, '0', NULL, NULL),
(7, 'User_7', '$2y$10$u9m8YNvcH2jG1dNFyMtcN.dxqPpoPhyCdvql//QMoHVS0SeBkaJTm', 'user_7@mymail.com', 979769717, 'Xuân Lộc', '7.jpg', 100, 0, 1, 1, '0', NULL, NULL),
(8, 'User_8', '$2y$10$Ehu5wKnvxmV7IR9.ABGIX.jzUyOit9Cmsq.6i8oYHaAyaEy5MTyBy', 'user_8@mymail.com', 979769718, 'Xuân Lộc', '8.jpg', 100, 0, 1, 1, '0', NULL, NULL),
(9, 'User_9', '$2y$10$DgZA9p2g5XWsKJ2RKlVknOyZwt3gIaNZd2pKyZkN20btN2YgZACEa', 'user_9@mymail.com', 979769719, 'Xuân Lộc', '9.jpg', 100, 0, 1, 1, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_follow`
--

CREATE TABLE `user_follow` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_follwing_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_report`
--

CREATE TABLE `user_report` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_reported_id` int(11) NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vote_post`
--

CREATE TABLE `vote_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_follow`
--
ALTER TABLE `category_follow`
  ADD KEY `category_follow_user_id_foreign` (`user_id`),
  ADD KEY `category_follow_category_id_foreign` (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notification_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD KEY `post_category_post_id_foreign` (`post_id`),
  ADD KEY `post_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `post_clip`
--
ALTER TABLE `post_clip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_clip_user_id_foreign` (`user_id`),
  ADD KEY `post_clip_post_id_foreign` (`post_id`);

--
-- Indexes for table `post_image`
--
ALTER TABLE `post_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_image_post_id_foreign` (`post_id`);

--
-- Indexes for table `post_report`
--
ALTER TABLE `post_report`
  ADD KEY `post_report_post_id_foreign` (`post_id`),
  ADD KEY `post_report_user_id_foreign` (`user_id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`),
  ADD KEY `series_user_id_foreign` (`user_id`);

--
-- Indexes for table `series_clip`
--
ALTER TABLE `series_clip`
  ADD KEY `series_clip_user_id_foreign` (`user_id`),
  ADD KEY `series_clip_series_id_foreign` (`series_id`);

--
-- Indexes for table `series_post`
--
ALTER TABLE `series_post`
  ADD KEY `series_post_series_id_foreign` (`series_id`),
  ADD KEY `series_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `session_users`
--
ALTER TABLE `session_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_follow`
--
ALTER TABLE `user_follow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_follow_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_report`
--
ALTER TABLE `user_report`
  ADD KEY `user_report_user_id_foreign` (`user_id`);

--
-- Indexes for table `vote_post`
--
ALTER TABLE `vote_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vote_post_user_id_foreign` (`user_id`),
  ADD KEY `vote_post_post_id_foreign` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `post_clip`
--
ALTER TABLE `post_clip`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_image`
--
ALTER TABLE `post_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `session_users`
--
ALTER TABLE `session_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_follow`
--
ALTER TABLE `user_follow`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vote_post`
--
ALTER TABLE `vote_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_follow`
--
ALTER TABLE `category_follow`
  ADD CONSTRAINT `category_follow_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `category_follow_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `post_category`
--
ALTER TABLE `post_category`
  ADD CONSTRAINT `post_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `post_category_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `post_clip`
--
ALTER TABLE `post_clip`
  ADD CONSTRAINT `post_clip_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `post_clip_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `post_image`
--
ALTER TABLE `post_image`
  ADD CONSTRAINT `post_image_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `post_report`
--
ALTER TABLE `post_report`
  ADD CONSTRAINT `post_report_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `post_report_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `series_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `series_clip`
--
ALTER TABLE `series_clip`
  ADD CONSTRAINT `series_clip_series_id_foreign` FOREIGN KEY (`series_id`) REFERENCES `series` (`id`),
  ADD CONSTRAINT `series_clip_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `series_post`
--
ALTER TABLE `series_post`
  ADD CONSTRAINT `series_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `series_post_series_id_foreign` FOREIGN KEY (`series_id`) REFERENCES `series` (`id`);

--
-- Constraints for table `user_follow`
--
ALTER TABLE `user_follow`
  ADD CONSTRAINT `user_follow_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_report`
--
ALTER TABLE `user_report`
  ADD CONSTRAINT `user_report_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `vote_post`
--
ALTER TABLE `vote_post`
  ADD CONSTRAINT `vote_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `vote_post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
