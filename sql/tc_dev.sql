-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Machine: localhost:3306
-- Gegenereerd op: 17 feb 2015 om 04:21
-- Serverversie: 5.5.41-0+wheezy1
-- PHP-versie: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `tc_dev`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0197e8103994fcc2a9754b0227ac769e', '66.249.73.196', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1424140909, ''),
('856ff2c4f3673ad63236cd5f33d84340', '84.194.119.116', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', 1424142913, 'a:6:{s:9:"user_data";s:0:"";s:8:"identity";s:15:"admin@admin.com";s:8:"username";s:13:"administrator";s:5:"email";s:15:"admin@admin.com";s:7:"user_id";s:1:"1";s:14:"old_last_login";s:10:"1424097804";}'),
('b4694922be1f70f20dc52ed90bddd6a3', '66.249.73.188', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1424140908, ''),
('b753fdfbc74611d8b02b77279f5bb6d1', '173.246.106.126', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.110 Safari/537.36', 1424134993, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
`department_id` int(11) NOT NULL,
  `department_name` varchar(90) NOT NULL,
  `department_manager` int(11) NOT NULL,
  `department_created` datetime NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Gegevens worden geëxporteerd voor tabel `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_manager`, `department_created`) VALUES
(1, 'Administration', 1, '2014-12-14 13:49:00'),
(4, 'Technical support', 1, '0000-00-00 00:00:00'),
(5, 'Sales', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'agents', 'General User'),
(3, 'teamcoach', 'Default team coach role'),
(4, 'manager', 'Default manager');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `groups_permissions`
--

CREATE TABLE IF NOT EXISTS `groups_permissions` (
`id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  `permission_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=110 ;

--
-- Gegevens worden geëxporteerd voor tabel `groups_permissions`
--

INSERT INTO `groups_permissions` (`id`, `group_id`, `permission_id`) VALUES
(109, 1, 1),
(108, 1, 2),
(107, 1, 3),
(106, 1, 4),
(105, 1, 5),
(104, 1, 6),
(103, 1, 7),
(102, 1, 8),
(101, 1, 9),
(100, 1, 11),
(99, 1, 12),
(98, 1, 13),
(97, 1, 14),
(96, 1, 15),
(95, 1, 16),
(94, 2, 10),
(28, 3, 1),
(27, 3, 2),
(26, 3, 3),
(25, 3, 4),
(24, 3, 9),
(23, 3, 11),
(22, 3, 12),
(79, 4, 1),
(78, 4, 2),
(77, 4, 3),
(76, 4, 4),
(75, 4, 6),
(74, 4, 8),
(73, 4, 9),
(72, 4, 11),
(71, 4, 12);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`message_id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `reciever` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date_send` datetime NOT NULL,
  `date_read` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Gegevens worden geëxporteerd voor tabel `messages`
--

INSERT INTO `messages` (`message_id`, `sender`, `reciever`, `subject`, `message`, `date_send`, `date_read`, `status`) VALUES
(1, 1, 11, 'Dit is een test bericht', 'jhkhlkjhkjhlkhkjhkjh', '2014-12-24 02:44:00', '2014-12-24 02:44:00', 2),
(2, 1, 11, 'Demo onderwerp', 'Ik wil u niet dood ! \r\nMaar wel stoned :D\r\n', '2014-12-24 02:44:00', '2014-12-24 02:44:00', 2),
(3, 1, 0, '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 1, 0, '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 1, 1, '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, 1, 1, 'Second message send with timecontrol', 'second demo message.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(7, 1, 1, 'Third message send with timecontrol', 'Third demo message.', '2014-12-24 05:56:39', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Gegevens worden geëxporteerd voor tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`) VALUES
(1, 'create_user', 'Create new user'),
(2, 'edit_user', 'Edit user details'),
(3, 'change_user_state', 'Activate/Deactivate User'),
(4, 'view_all_users', 'View all users'),
(5, 'create_users_groups', 'Create users groups'),
(6, 'edit_users_groups', 'Edit users groups'),
(7, 'create_group_permissions', 'Create group permissions'),
(8, 'edit_group_permissions', 'Edit group permissions'),
(9, 'task_request', 'Request a new task for any user.'),
(10, 'take_break', 'Allow user to take break'),
(11, 'manage_breaks', 'Manage breaks'),
(12, 'create_report', 'Create Report'),
(13, 'create_task_item', 'Create a new task item'),
(14, 'create_task', 'Create a new task'),
(15, 'view_all_reports', 'View all reports'),
(16, 'manage_shifts_hours', 'Manage shifts');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `planning_employee`
--

CREATE TABLE IF NOT EXISTS `planning_employee` (
`planning_id` int(11) NOT NULL,
  `planning_title` text NOT NULL,
  `planning_start` datetime NOT NULL,
  `planning_stop` datetime NOT NULL,
  `planning_color` int(11) NOT NULL,
  `planning_user` int(11) NOT NULL,
  `date_requested` datetime NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `planning_employee`
--

INSERT INTO `planning_employee` (`planning_id`, `planning_title`, `planning_start`, `planning_stop`, `planning_color`, `planning_user`, `date_requested`) VALUES
(1, 'Inbound', '2014-12-24 08:00:00', '2014-12-24 08:30:00', 0, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `task_requests`
--

CREATE TABLE IF NOT EXISTS `task_requests` (
`task_id` int(11) NOT NULL,
  `task_type` int(11) NOT NULL,
  `task_start` datetime NOT NULL,
  `task_stop` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `task_shifts`
--

CREATE TABLE IF NOT EXISTS `task_shifts` (
`shift_id` int(11) NOT NULL,
  `shift_code` varchar(8) NOT NULL,
  `shift_start` time NOT NULL,
  `shift_end` time NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Gegevens worden geëxporteerd voor tabel `task_shifts`
--

INSERT INTO `task_shifts` (`shift_id`, `shift_code`, `shift_start`, `shift_end`) VALUES
(6, 'V33', '13:30:00', '22:00:00'),
(10, 'V10', '08:00:00', '16:30:00'),
(12, 'N10', '12:30:00', '20:30:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
`teams_id` int(11) NOT NULL,
  `teams_name` varchar(110) NOT NULL,
  `teams_department` int(11) NOT NULL,
  `teams_coach` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Gegevens worden geëxporteerd voor tabel `teams`
--

INSERT INTO `teams` (`teams_id`, `teams_name`, `teams_department`, `teams_coach`) VALUES
(1, 'Tina', 1, 1),
(2, 'Team2', 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `zipcode` int(12) NOT NULL,
  `city` varchar(90) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `address`, `zipcode`, `city`, `phone`, `mobile`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 's8MTPu4IOWzyCVZuunR0YO', 1268889823, 1424134807, 1, 'iDevelopment', 'Administrator', 'ADMIN', '', 0, '', '0', 0),
(2, '84.194.119.116', 'glenn hermans', '$2y$08$l8YmF66DJSmdKRD1KC0zpuMfV92uTQdGyfnlxuq3y8qYuY/oPvkaa', NULL, 'glenn.hermans@unixtrip.org', '3de4905ea2ef89ca0e752c4104246c165358ce44', NULL, NULL, NULL, 1423700100, NULL, 0, 'Glenn', 'Hermans', 'iDevelopment', '', 0, '', '+32', 0),
(3, '84.194.119.116', 'testplein manager', '$2y$08$qJnzwF5ELe1lHEN8Jnhz0OzfXo0ob5mHa6QuNnBM5CAGLz8HKwwyS', NULL, 'glenn.hermans@idevelopment.be', NULL, NULL, NULL, NULL, 1423755457, NULL, 1, 'Testplein', 'Manager', 'iDevelopment', '', 0, '', '+32', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Gegevens worden geëxporteerd voor tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(6, 1, 1),
(3, 2, 2),
(4, 3, 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexen voor tabel `departments`
--
ALTER TABLE `departments`
 ADD PRIMARY KEY (`department_id`);

--
-- Indexen voor tabel `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `groups_permissions`
--
ALTER TABLE `groups_permissions`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_groups_permissions` (`group_id`,`permission_id`), ADD KEY `fk_groups_permissions_groups1_idx` (`group_id`), ADD KEY `fk_groups_permissions_permissions1_idx` (`permission_id`);

--
-- Indexen voor tabel `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`message_id`);

--
-- Indexen voor tabel `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `planning_employee`
--
ALTER TABLE `planning_employee`
 ADD PRIMARY KEY (`planning_id`);

--
-- Indexen voor tabel `task_requests`
--
ALTER TABLE `task_requests`
 ADD PRIMARY KEY (`task_id`);

--
-- Indexen voor tabel `task_shifts`
--
ALTER TABLE `task_shifts`
 ADD PRIMARY KEY (`shift_id`);

--
-- Indexen voor tabel `teams`
--
ALTER TABLE `teams`
 ADD PRIMARY KEY (`teams_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `departments`
--
ALTER TABLE `departments`
MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `groups_permissions`
--
ALTER TABLE `groups_permissions`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT voor een tabel `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `messages`
--
ALTER TABLE `messages`
MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT voor een tabel `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT voor een tabel `planning_employee`
--
ALTER TABLE `planning_employee`
MODIFY `planning_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `task_requests`
--
ALTER TABLE `task_requests`
MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `task_shifts`
--
ALTER TABLE `task_shifts`
MODIFY `shift_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT voor een tabel `teams`
--
ALTER TABLE `teams`
MODIFY `teams_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `groups_permissions`
--
ALTER TABLE `groups_permissions`
ADD CONSTRAINT `fk_groups_permissions_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_groups_permissions_permissions1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
