-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Сервер: 127.0.0.1 via TCP/IP
-- Тип сервера: MariaDB
-- Соединение сервера: SSL не используется
-- Версия сервера: 10.4.32-MariaDB - mariadb.org binary distribution
-- Версия протокола: 10
-- Пользователь: root@localhost
-- Кодировка сервера: UTF-8 Unicode (utf8mb4)
-- Версия клиента базы данных: libmysql - mysqlnd 8.2.12
-- PHP расширение: mysqli
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

CREATE DATABASE IF NOT EXISTS `chatapp`;
USE `chatapp`;

--
-- Структура таблицы `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` varchar(255) NOT NULL,
  `outgoing_msg_id` varchar(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Извлечение данных из таблицы `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, '257260160', '1171249814', 'Привет, как дела?'),
(2, '1171249814', '257260160', 'Привет, все хорошо'),
(3, '257260160', '1171249814', 'Как жизнь?'),
(4, '1171249814', '257260160', 'Спокойно'),
(5, '257260160', '1171249814', 'Хорошо, тестировщик'),
(6, '1171249814', '257260160', 'Но я и есть тестировщик'),
(7, '257260160', '1171249814', 'Это будет последнее сообщение Адриель'),
(15, '1417767906', '257260160', 'Привет случайный'),
(16, '1171249814', '257260160', 'Спасибо тестировщик, я ухожу.'),
(14, '257260160', '1417767906', 'привет'),
(13, '257260160', '1171249814', 'А');

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `unique_id` int NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Извлечение данных из таблицы `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fName`, `lName`, `email`, `password`, `image`, `status`) VALUES
(2, 257260160, 'Адриель', 'Кавалканте', 'a.a@a.com', '12345678', '1618675478bannerlinhas.png', 'Офлайн сейчас'),
(3, 1171249814, 'Тестировщик', 'Тест', 'teste@gmail.com', '1234', '1618678205telafinal1.jpg', 'Онлайн сейчас'),
(4, 1417767906, 'Случайный', 'случайный', 'random@gmail.com', '123456', '1618701855barco.png', 'Онлайн сейчас');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
