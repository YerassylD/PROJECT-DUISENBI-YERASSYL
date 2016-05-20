-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 20 2016 г., 18:58
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `SF`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Add_photo`
--

CREATE TABLE `Add_photo` (
  `id` int(250) NOT NULL,
  `photo` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(1000) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `Add_photo`
--

INSERT INTO `Add_photo` (`id`, `photo`, `comment`, `Email`, `Username`) VALUES
(10, 'red-like.png', 'adsfdfgbfsdf', 'erasyl.d97@gmail.com', 'Yerassyl'),
(19, 'red-like.png', 'dhgfcgfchgchgf', 'gamedev@gmail.com', 'Game');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `photo` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `subhead` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `para` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `id` int(255) NOT NULL,
  `user` varchar(1000) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`photo`, `title`, `subhead`, `para`, `id`, `user`) VALUES
('ss.jpg', 'End of Course', 'Yahoo We are very happy!a', 'fasdfasdfasd asdfsdasdf asdf asd fas df asdf sad asd f asdf asdf as df asdf asd fa pdf asdf sad fast fast ', 2, 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `Photo`
--

CREATE TABLE `Photo` (
  `email` varchar(700) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `SF`
--

CREATE TABLE `SF` (
  `ID` int(11) NOT NULL,
  `Username` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Surname` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Birthdate` int(11) NOT NULL,
  `Monthdate` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Yeardate` int(11) NOT NULL,
  `photo` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `SF`
--

INSERT INTO `SF` (`ID`, `Username`, `Surname`, `Password`, `Email`, `Birthdate`, `Monthdate`, `Yeardate`, `photo`, `comment`) VALUES
(18, 'Game', 'Inc', 'gamer', 'gamedev@gmail.com', 1, '1', 2001, '', ''),
(20, 'qweqweqwe', 'qweqweqwe', 'qwerty44', 'erasyl.d97@gmail.com', 1, '1', 1972, '', ''),
(21, 'ADMIN', 'DUIS', 'admin', 'admin@gmail.com', 1, '1', 2011, '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Add_photo`
--
ALTER TABLE `Add_photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Photo`
--
ALTER TABLE `Photo`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `SF`
--
ALTER TABLE `SF`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Add_photo`
--
ALTER TABLE `Add_photo`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `SF`
--
ALTER TABLE `SF`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
