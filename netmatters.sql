--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(3000) NOT NULL,
  `marketing_preferences` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Table structure for table `news_posts`
--

CREATE TABLE `news_posts` (
  `id` int(11) NOT NULL,
  `category` enum('software','it','digital','telecoms','web','security','developer','busdev') NOT NULL,
  `tag` varchar(50) NOT NULL,
  `thumbnail_img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `read_time` int(11) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `author_img` varchar(255) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_posts`
--
ALTER TABLE `news_posts`
  ADD PRIMARY KEY (`id`);
