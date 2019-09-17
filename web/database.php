-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 17, 2019 at 09:30 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Countries`
--
CREATE DATABASE IF NOT EXISTS `Countries` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Countries`;

-- --------------------------------------------------------

--
-- Table structure for table `TBL_NAME`
--

CREATE TABLE `TBL_NAME` (
  `id` int(1) NOT NULL,
  `name` varchar(12) DEFAULT NULL,
  `businessScore` int(2) DEFAULT NULL,
  `contracts` int(2) DEFAULT NULL,
  `credit` int(2) DEFAULT NULL,
  `electricity` int(2) DEFAULT NULL,
  `permits` int(2) DEFAULT NULL,
  `propertyreg` int(2) DEFAULT NULL,
  `startingup` int(2) DEFAULT NULL,
  `taxes` int(2) DEFAULT NULL,
  `population` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TBL_NAME`
--

INSERT INTO `TBL_NAME` (`id`, `name`, `businessScore`, `contracts`, `credit`, `electricity`, `permits`, `propertyreg`, `startingup`, `taxes`, `population`) VALUES
(1, 'Nigeria', 59, 58, 85, 44, 58, 29, 82, 54, 190886311),
(2, 'Ghana', 66, 54, 60, 74, 66, 56, 84, 67, 28833629),
(3, 'South Africa', 67, 54, 60, 69, 68, 59, 81, 81, 56717156),
(4, 'Kenya', 63, 58, 90, 77, 63, 56, 82, 72, 49699862),
(5, 'Mauritius', 82, 70, 65, 86, 83, 79, 94, 94, 1264613),
(6, 'Rwanda', 82, 60, 95, 79, 67, 94, 91, 85, 12208407),
(7, 'Gabon', 48, 33, 40, 50, 59, 37, 83, 36, 2025137),
(8, 'Angola', 50, 26, 5, 54, 69, 43, 81, 70, 29784193),
(9, 'Egypt', 63, 43, 65, 71, 72, 55, 84, 53, 97553151),
(10, 'Ivory Coast', 61, 56, 56, 56, 59, 58, 94, 46, 24294750);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TBL_NAME`
--
ALTER TABLE `TBL_NAME`
  ADD PRIMARY KEY (`id`);
--
-- Database: `forum`
--
CREATE DATABASE IF NOT EXISTS `forum` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `forum`;

-- --------------------------------------------------------

--
-- Table structure for table `bans`
--

CREATE TABLE `bans` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `expire` int(10) UNSIGNED DEFAULT NULL,
  `ban_creator` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(80) NOT NULL DEFAULT 'New Category',
  `disp_position` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `disp_position`) VALUES
(1, 'Main', 1);

-- --------------------------------------------------------

--
-- Table structure for table `censoring`
--

CREATE TABLE `censoring` (
  `id` int(10) UNSIGNED NOT NULL,
  `search_for` varchar(60) NOT NULL DEFAULT '',
  `replace_with` varchar(60) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `conf_name` varchar(255) NOT NULL DEFAULT '',
  `conf_value` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`conf_name`, `conf_value`) VALUES
('o_cur_version', '1.5.11'),
('o_database_revision', '21'),
('o_searchindex_revision', '2'),
('o_parser_revision', '2'),
('o_board_title', 'Invest in Africa Forum'),
('o_board_desc', '<p><span>Meet fellow entrepreneur for advice, partnerships or just to hang out.</span></p>'),
('o_default_timezone', '0'),
('o_time_format', 'H:i:s'),
('o_date_format', 'Y-m-d'),
('o_timeout_visit', '1800'),
('o_timeout_online', '300'),
('o_redirect_delay', '1'),
('o_show_version', '0'),
('o_show_user_info', '1'),
('o_show_post_count', '1'),
('o_signatures', '1'),
('o_smilies', '1'),
('o_smilies_sig', '1'),
('o_make_links', '1'),
('o_default_lang', 'English'),
('o_default_style', 'Oxygen'),
('o_default_user_group', '4'),
('o_topic_review', '15'),
('o_disp_topics_default', '30'),
('o_disp_posts_default', '25'),
('o_indent_num_spaces', '4'),
('o_quote_depth', '3'),
('o_quickpost', '1'),
('o_users_online', '1'),
('o_censoring', '0'),
('o_show_dot', '0'),
('o_topic_views', '1'),
('o_quickjump', '1'),
('o_gzip', '0'),
('o_additional_navlinks', ''),
('o_report_method', '0'),
('o_regs_report', '0'),
('o_default_email_setting', '1'),
('o_mailing_list', 'osikhianosime@gmail.com'),
('o_avatars', '1'),
('o_avatars_dir', 'img/avatars'),
('o_avatars_width', '60'),
('o_avatars_height', '60'),
('o_avatars_size', '10240'),
('o_search_all_forums', '1'),
('o_base_url', 'http://localhost:8888/Doingbusinessinafrica/web/forum'),
('o_admin_email', 'osikhianosime@gmail.com'),
('o_webmaster_email', 'osikhianosime@gmail.com'),
('o_forum_subscriptions', '1'),
('o_topic_subscriptions', '1'),
('o_smtp_host', NULL),
('o_smtp_user', NULL),
('o_smtp_pass', NULL),
('o_smtp_ssl', '0'),
('o_regs_allow', '1'),
('o_regs_verify', '0'),
('o_announcement', '0'),
('o_announcement_message', 'Enter your announcement here.'),
('o_rules', '0'),
('o_rules_message', 'Enter your rules here'),
('o_maintenance', '0'),
('o_maintenance_message', 'The forums are temporarily down for maintenance. Please try again in a few minutes.'),
('o_default_dst', '0'),
('o_feed_type', '2'),
('o_feed_ttl', '0'),
('p_message_bbcode', '1'),
('p_message_img_tag', '1'),
('p_message_all_caps', '1'),
('p_subject_all_caps', '1'),
('p_sig_all_caps', '1'),
('p_sig_bbcode', '1'),
('p_sig_img_tag', '0'),
('p_sig_length', '400'),
('p_sig_lines', '4'),
('p_allow_banned_email', '1'),
('p_allow_dupe_email', '0'),
('p_force_guest_email', '1');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` int(10) UNSIGNED NOT NULL,
  `forum_name` varchar(80) NOT NULL DEFAULT 'New forum',
  `forum_desc` text,
  `redirect_url` varchar(100) DEFAULT NULL,
  `moderators` text,
  `num_topics` mediumint(8) UNSIGNED NOT NULL DEFAULT '0',
  `num_posts` mediumint(8) UNSIGNED NOT NULL DEFAULT '0',
  `last_post` int(10) UNSIGNED DEFAULT NULL,
  `last_post_id` int(10) UNSIGNED DEFAULT NULL,
  `last_poster` varchar(200) DEFAULT NULL,
  `sort_by` tinyint(1) NOT NULL DEFAULT '0',
  `disp_position` int(10) NOT NULL DEFAULT '0',
  `cat_id` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `forum_name`, `forum_desc`, `redirect_url`, `moderators`, `num_topics`, `num_posts`, `last_post`, `last_post_id`, `last_poster`, `sort_by`, `disp_position`, `cat_id`) VALUES
(3, 'Start a Business', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 1),
(2, 'Partnership', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum_perms`
--

CREATE TABLE `forum_perms` (
  `group_id` int(10) NOT NULL DEFAULT '0',
  `forum_id` int(10) NOT NULL DEFAULT '0',
  `read_forum` tinyint(1) NOT NULL DEFAULT '1',
  `post_replies` tinyint(1) NOT NULL DEFAULT '1',
  `post_topics` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_subscriptions`
--

CREATE TABLE `forum_subscriptions` (
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `forum_id` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `g_id` int(10) UNSIGNED NOT NULL,
  `g_title` varchar(50) NOT NULL DEFAULT '',
  `g_user_title` varchar(50) DEFAULT NULL,
  `g_promote_min_posts` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `g_promote_next_group` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `g_moderator` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_edit_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_rename_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_change_passwords` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_ban_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_promote_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_read_board` tinyint(1) NOT NULL DEFAULT '1',
  `g_view_users` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_replies` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_topics` tinyint(1) NOT NULL DEFAULT '1',
  `g_edit_posts` tinyint(1) NOT NULL DEFAULT '1',
  `g_delete_posts` tinyint(1) NOT NULL DEFAULT '1',
  `g_delete_topics` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_links` tinyint(1) NOT NULL DEFAULT '1',
  `g_set_title` tinyint(1) NOT NULL DEFAULT '1',
  `g_search` tinyint(1) NOT NULL DEFAULT '1',
  `g_search_users` tinyint(1) NOT NULL DEFAULT '1',
  `g_send_email` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_flood` smallint(6) NOT NULL DEFAULT '30',
  `g_search_flood` smallint(6) NOT NULL DEFAULT '30',
  `g_email_flood` smallint(6) NOT NULL DEFAULT '60',
  `g_report_flood` smallint(6) NOT NULL DEFAULT '60'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`g_id`, `g_title`, `g_user_title`, `g_promote_min_posts`, `g_promote_next_group`, `g_moderator`, `g_mod_edit_users`, `g_mod_rename_users`, `g_mod_change_passwords`, `g_mod_ban_users`, `g_mod_promote_users`, `g_read_board`, `g_view_users`, `g_post_replies`, `g_post_topics`, `g_edit_posts`, `g_delete_posts`, `g_delete_topics`, `g_post_links`, `g_set_title`, `g_search`, `g_search_users`, `g_send_email`, `g_post_flood`, `g_search_flood`, `g_email_flood`, `g_report_flood`) VALUES
(1, 'Administrators', 'Administrator', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
(2, 'Moderators', 'Moderator', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
(3, 'Guests', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 60, 30, 0, 0),
(4, 'Members', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 60, 30, 60, 60);

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ident` varchar(200) NOT NULL DEFAULT '',
  `logged` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `idle` tinyint(1) NOT NULL DEFAULT '0',
  `last_post` int(10) UNSIGNED DEFAULT NULL,
  `last_search` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`user_id`, `ident`, `logged`, `idle`, `last_post`, `last_search`) VALUES
(2, 'osine', 1568533213, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `poster` varchar(200) NOT NULL DEFAULT '',
  `poster_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `poster_ip` varchar(39) DEFAULT NULL,
  `poster_email` varchar(80) DEFAULT NULL,
  `message` mediumtext,
  `hide_smilies` tinyint(1) NOT NULL DEFAULT '0',
  `posted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `edited` int(10) UNSIGNED DEFAULT NULL,
  `edited_by` varchar(200) DEFAULT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `topic_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `forum_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `reported_by` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `message` text,
  `zapped` int(10) UNSIGNED DEFAULT NULL,
  `zapped_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `search_cache`
--

CREATE TABLE `search_cache` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ident` varchar(200) NOT NULL DEFAULT '',
  `search_data` mediumtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `search_matches`
--

CREATE TABLE `search_matches` (
  `post_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `word_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `subject_match` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `search_words`
--

CREATE TABLE `search_words` (
  `id` int(10) UNSIGNED NOT NULL,
  `word` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `poster` varchar(200) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `posted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `first_post_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `last_post` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `last_post_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `last_poster` varchar(200) DEFAULT NULL,
  `num_views` mediumint(8) UNSIGNED NOT NULL DEFAULT '0',
  `num_replies` mediumint(8) UNSIGNED NOT NULL DEFAULT '0',
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `moved_to` int(10) UNSIGNED DEFAULT NULL,
  `forum_id` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `topic_subscriptions`
--

CREATE TABLE `topic_subscriptions` (
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `topic_id` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL DEFAULT '3',
  `username` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `title` varchar(50) DEFAULT NULL,
  `realname` varchar(40) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `jabber` varchar(80) DEFAULT NULL,
  `icq` varchar(12) DEFAULT NULL,
  `msn` varchar(80) DEFAULT NULL,
  `aim` varchar(30) DEFAULT NULL,
  `yahoo` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `signature` text,
  `disp_topics` tinyint(3) UNSIGNED DEFAULT NULL,
  `disp_posts` tinyint(3) UNSIGNED DEFAULT NULL,
  `email_setting` tinyint(1) NOT NULL DEFAULT '1',
  `notify_with_post` tinyint(1) NOT NULL DEFAULT '0',
  `auto_notify` tinyint(1) NOT NULL DEFAULT '0',
  `show_smilies` tinyint(1) NOT NULL DEFAULT '1',
  `show_img` tinyint(1) NOT NULL DEFAULT '1',
  `show_img_sig` tinyint(1) NOT NULL DEFAULT '1',
  `show_avatars` tinyint(1) NOT NULL DEFAULT '1',
  `show_sig` tinyint(1) NOT NULL DEFAULT '1',
  `timezone` float NOT NULL DEFAULT '0',
  `dst` tinyint(1) NOT NULL DEFAULT '0',
  `time_format` tinyint(1) NOT NULL DEFAULT '0',
  `date_format` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(25) NOT NULL DEFAULT 'English',
  `style` varchar(25) NOT NULL DEFAULT 'Cobalt',
  `num_posts` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `last_post` int(10) UNSIGNED DEFAULT NULL,
  `last_search` int(10) UNSIGNED DEFAULT NULL,
  `last_email_sent` int(10) UNSIGNED DEFAULT NULL,
  `last_report_sent` int(10) UNSIGNED DEFAULT NULL,
  `registered` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `registration_ip` varchar(39) NOT NULL DEFAULT '0.0.0.0',
  `last_visit` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `admin_note` varchar(30) DEFAULT NULL,
  `activate_string` varchar(80) DEFAULT NULL,
  `activate_key` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `password`, `email`, `title`, `realname`, `url`, `jabber`, `icq`, `msn`, `aim`, `yahoo`, `location`, `signature`, `disp_topics`, `disp_posts`, `email_setting`, `notify_with_post`, `auto_notify`, `show_smilies`, `show_img`, `show_img_sig`, `show_avatars`, `show_sig`, `timezone`, `dst`, `time_format`, `date_format`, `language`, `style`, `num_posts`, `last_post`, `last_search`, `last_email_sent`, `last_report_sent`, `registered`, `registration_ip`, `last_visit`, `admin_note`, `activate_string`, `activate_key`) VALUES
(1, 3, 'Guest', 'Guest', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 'English', 'Cobalt', 0, NULL, NULL, NULL, NULL, 0, '0.0.0.0', 0, NULL, NULL, NULL),
(2, 1, 'osine', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'osikhianosime@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 'English', 'Earth', 1, 1568532543, NULL, NULL, NULL, 1568532543, '::1', 1568532543, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bans`
--
ALTER TABLE `bans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bans_username_idx` (`username`(25));

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `censoring`
--
ALTER TABLE `censoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`conf_name`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_perms`
--
ALTER TABLE `forum_perms`
  ADD PRIMARY KEY (`group_id`,`forum_id`);

--
-- Indexes for table `forum_subscriptions`
--
ALTER TABLE `forum_subscriptions`
  ADD PRIMARY KEY (`user_id`,`forum_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD UNIQUE KEY `online_user_id_ident_idx` (`user_id`,`ident`(25)),
  ADD KEY `online_ident_idx` (`ident`(25)),
  ADD KEY `online_logged_idx` (`logged`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_topic_id_idx` (`topic_id`),
  ADD KEY `posts_multi_idx` (`poster_id`,`topic_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_zapped_idx` (`zapped`);

--
-- Indexes for table `search_cache`
--
ALTER TABLE `search_cache`
  ADD PRIMARY KEY (`id`),
  ADD KEY `search_cache_ident_idx` (`ident`(8));

--
-- Indexes for table `search_matches`
--
ALTER TABLE `search_matches`
  ADD KEY `search_matches_word_id_idx` (`word_id`),
  ADD KEY `search_matches_post_id_idx` (`post_id`);

--
-- Indexes for table `search_words`
--
ALTER TABLE `search_words`
  ADD PRIMARY KEY (`word`),
  ADD KEY `search_words_id_idx` (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_forum_id_idx` (`forum_id`),
  ADD KEY `topics_moved_to_idx` (`moved_to`),
  ADD KEY `topics_last_post_idx` (`last_post`),
  ADD KEY `topics_first_post_id_idx` (`first_post_id`);

--
-- Indexes for table `topic_subscriptions`
--
ALTER TABLE `topic_subscriptions`
  ADD PRIMARY KEY (`user_id`,`topic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_idx` (`username`(25)),
  ADD KEY `users_registered_idx` (`registered`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bans`
--
ALTER TABLE `bans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `censoring`
--
ALTER TABLE `censoring`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `g_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `search_words`
--
ALTER TABLE `search_words`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `www_project`
--
CREATE DATABASE IF NOT EXISTS `www_project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `www_project`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `book_title` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_author` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_image` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `book_descr` text COLLATE latin1_general_ci,
  `book_price` decimal(6,2) NOT NULL,
  `publisherid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_isbn`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_price`, `publisherid`) VALUES
('978-0-321-94786-4', 'Learning Mobile App Development', 'Jakob Iversen, Michael Eierman', 'mobile_app.jpg', 'Now, one book can help you master mobile app development with both market-leading platforms: Apple\'s iOS and Google\'s Android. Perfect for both students and professionals, Learning Mobile App Development is the only tutorial with complete parallel coverage of both iOS and Android. With this guide, you can master either platform, or both - and gain a deeper understanding of the issues associated with developing mobile apps.\r\n\r\nYou\'ll develop an actual working app on both iOS and Android, mastering the entire mobile app development lifecycle, from planning through licensing and distribution.\r\n\r\nEach tutorial in this book has been carefully designed to support readers with widely varying backgrounds and has been extensively tested in live developer training courses. If you\'re new to iOS, you\'ll also find an easy, practical introduction to Objective-C, Apple\'s native language.', '20.00', 6),
('978-0-7303-1484-4', 'Doing Good By Doing Good', 'Peter Baines', 'doing_good.jpg', 'Doing Good by Doing Good shows companies how to improve the bottom line by implementing an engaging, authentic, and business-enhancing program that helps staff and business thrive. International CSR consultant Peter Baines draws upon lessons learnt from the challenges faced in his career as a police officer, forensic investigator, and founder of Hands Across the Water to describe the Australian CSR landscape, and the factors that make up a program that benefits everyone involved. Case studies illustrate the real effect of CSR on both business and society, with clear guidance toward maximizing involvement, engaging all employees, and improving the bottom line. The case studies draw out the companies that are focusing on creating shared value in meeting the challenges of society whilst at the same time bringing strong economic returns.\r\n\r\nConsumers are now expecting that big businesses with ever-increasing profits give back to the community from which those profits arise. At the same time, shareholders are demanding their share and are happy to see dividends soar. Getting this right is a balancing act, and Doing Good by Doing Good helps companies delineate a plan of action for getting it done.', '20.00', 2),
('978-1-118-94924-5', 'Programmable Logic Controllers', 'Dag H. Hanssen', 'logic_program.jpg', 'Widely used across industrial and manufacturing automation, Programmable Logic Controllers (PLCs) perform a broad range of electromechanical tasks with multiple input and output arrangements, designed specifically to cope in severe environmental conditions such as automotive and chemical plants.Programmable Logic Controllers: A Practical Approach using CoDeSys is a hands-on guide to rapidly gain proficiency in the development and operation of PLCs based on the IEC 61131-3 standard. Using the freely-available* software tool CoDeSys, which is widely used in industrial design automation projects, the author takes a highly practical approach to PLC design using real-world examples. The design tool, CoDeSys, also features a built in simulator / soft PLC enabling the reader to undertake exercises and test the examples.', '20.00', 2),
('978-1-1180-2669-4', 'Professional JavaScript for Web Developers, 3rd Edition', 'Nicholas C. Zakas', 'pro_js.jpg', 'If you want to achieve JavaScript\'s full potential, it is critical to understand its nature, history, and limitations. To that end, this updated version of the bestseller by veteran author and JavaScript guru Nicholas C. Zakas covers JavaScript from its very beginning to the present-day incarnations including the DOM, Ajax, and HTML5. Zakas shows you how to extend this powerful language to meet specific needs and create dynamic user interfaces for the web that blur the line between desktop and internet. By the end of the book, you\'ll have a strong understanding of the significant advances in web development as they relate to JavaScript so that you can apply them to your next website.', '20.00', 1),
('978-1-44937-019-0', 'Learning Web App Development', 'Semmy Purewal', 'web_app_dev.jpg', 'Grasp the fundamentals of web application development by building a simple database-backed app from scratch, using HTML, JavaScript, and other open source tools. Through hands-on tutorials, this practical guide shows inexperienced web app developers how to create a user interface, write a server, build client-server communication, and use a cloud-based service to deploy the application.\r\n\r\nEach chapter includes practice problems, full examples, and mental models of the development workflow. Ideal for a college-level course, this book helps you get started with web app development by providing you with a solid grounding in the process.', '20.00', 3),
('978-1-44937-075-6', 'Beautiful JavaScript', 'Anton Kovalyov', 'beauty_js.jpg', 'JavaScript is arguably the most polarizing and misunderstood programming language in the world. Many have attempted to replace it as the language of the Web, but JavaScript has survived, evolved, and thrived. Why did a language created in such hurry succeed where others failed?\r\n\r\nThis guide gives you a rare glimpse into JavaScript from people intimately familiar with it. Chapters contributed by domain experts such as Jacob Thornton, Ariya Hidayat, and Sara Chipps show what they love about their favorite language - whether it\'s turning the most feared features into useful tools, or how JavaScript can be used for self-expression.', '20.00', 3),
('978-1-4571-0402-2', 'Professional ASP.NET 4 in C# and VB', 'Scott Hanselman', 'pro_asp4.jpg', 'ASP.NET is about making you as productive as possible when building fast and secure web applications. Each release of ASP.NET gets better and removes a lot of the tedious code that you previously needed to put in place, making common ASP.NET tasks easier. With this book, an unparalleled team of authors walks you through the full breadth of ASP.NET and the new and exciting capabilities of ASP.NET 4. The authors also show you how to maximize the abundance of features that ASP.NET offers to make your development process smoother and more efficient.', '20.00', 1),
('978-1-484216-40-8', 'Android Studio New Media Fundamentals', 'Wallace Jackson', 'android_studio.jpg', 'Android Studio New Media Fundamentals is a new media primer covering concepts central to multimedia production for Android including digital imagery, digital audio, digital video, digital illustration and 3D, using open source software packages such as GIMP, Audacity, Blender, and Inkscape. These professional software packages are used for this book because they are free for commercial use. The book builds on the foundational concepts of raster, vector, and waveform (audio), and gets more advanced as chapters progress, covering what new media assets are best for use with Android Studio as well as key factors regarding the data footprint optimization work process and why new media content and new media data optimization is so important.', '20.00', 4),
('978-1-484217-26-9', 'C++ 14 Quick Syntax Reference, 2nd Edition', '	Mikael Olsson', 'c_14_quick.jpg', 'This updated handy quick C++ 14 guide is a condensed code and syntax reference based on the newly updated C++ 14 release of the popular programming language. It presents the essential C++ syntax in a well-organized format that can be used as a handy reference.\r\n\r\nYou won\'t find any technical jargon, bloated samples, drawn out history lessons, or witty stories in this book. What you will find is a language reference that is concise, to the point and highly accessible. The book is packed with useful information and is a must-have for any C++ programmer.\r\n\r\nIn the C++ 14 Quick Syntax Reference, Second Edition, you will find a concise reference to the C++ 14 language syntax. It has short, simple, and focused code examples. This book includes a well laid out table of contents and a comprehensive index allowing for easy review.', '20.00', 4),
('978-1-49192-706-9', 'C# 6.0 in a Nutshell, 6th Edition', 'Joseph Albahari, Ben Albahari', 'c_sharp_6.jpg', 'When you have questions about C# 6.0 or the .NET CLR and its core Framework assemblies, this bestselling guide has the answers you need. C# has become a language of unusual flexibility and breadth since its premiere in 2000, but this continual growth means there\'s still much more to learn.\r\n\r\nOrganized around concepts and use cases, this thoroughly updated sixth edition provides intermediate and advanced programmers with a concise map of C# and .NET knowledge. Dive in and discover why this Nutshell guide is considered the definitive reference on C#.', '20.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `zip_code` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `zip_code`, `country`) VALUES
(1, 'a', 'a', 'a', 'a', 'a'),
(2, 'b', 'b', 'b', 'b', 'b'),
(3, 'test', '123 test', '12121', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ship_name` char(60) COLLATE latin1_general_ci NOT NULL,
  `ship_address` char(80) COLLATE latin1_general_ci NOT NULL,
  `ship_city` char(30) COLLATE latin1_general_ci NOT NULL,
  `ship_zip_code` char(10) COLLATE latin1_general_ci NOT NULL,
  `ship_country` char(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `ship_name`, `ship_address`, `ship_city`, `ship_zip_code`, `ship_country`) VALUES
(1, 1, '60.00', '2015-12-03 13:30:12', 'a', 'a', 'a', 'a', 'a'),
(2, 2, '60.00', '2015-12-03 13:31:12', 'b', 'b', 'b', 'b', 'b'),
(3, 3, '20.00', '2015-12-03 19:34:21', 'test', '123 test', '12121', 'test', 'test'),
(4, 1, '20.00', '2015-12-04 10:19:14', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderid`, `book_isbn`, `item_price`, `quantity`) VALUES
(1, '978-1-118-94924-5', '20.00', 1),
(1, '978-1-44937-019-0', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1),
(2, '978-1-118-94924-5', '20.00', 1),
(2, '978-1-44937-019-0', '20.00', 1),
(2, '978-1-49192-706-9', '20.00', 1),
(3, '978-0-321-94786-4', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisherid` int(10) UNSIGNED NOT NULL,
  `publisher_name` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisherid`, `publisher_name`) VALUES
(1, 'Wrox'),
(2, 'Wiley'),
(3, 'O\'Reilly Media'),
(4, 'Apress'),
(5, 'Packt Publishing'),
(6, 'Addison-Wesley');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`pass`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_isbn`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
