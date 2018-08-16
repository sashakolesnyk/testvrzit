-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 16 2018 г., 19:12
-- Версия сервера: 5.5.53-log
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `landing_page`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lp_table`
--

CREATE TABLE `lp_table` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `phone` varchar(24) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lp_table`
--

INSERT INTO `lp_table` (`id`, `name`, `phone`, `text`) VALUES
(1, 'nm', 'phn', 'mess'),
(2, 'nm', 'phn', 'mess'),
(3, 'nn', 'phn', 'mess'),
(4, 'nn', 'phn', 'mess'),
(5, 'nn', 'phn', 'mess'),
(6, 'All works !', '+380 (777) 777-77-77', 'All works greatly !!!! :-)'),
(7, 'new_line', '+380 (347) 584-79-37', 'new message test'),
(8, 'dsaff', '+380 (323) 243-24-42', 'sdafsdfasfdsff');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lp_table`
--
ALTER TABLE `lp_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lp_table`
--
ALTER TABLE `lp_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
