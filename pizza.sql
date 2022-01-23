-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 23 2022 г., 15:30
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pizza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pizza`
--

CREATE TABLE `pizza` (
  `id` int NOT NULL,
  `pizza_name` text NOT NULL,
  `size` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `pizza`
--

INSERT INTO `pizza` (`id`, `pizza_name`, `size`, `price`) VALUES
(1, 'Пепперони', 21, 29),
(2, 'Пепперони', 26, 33),
(3, 'Пепперони', 31, 37),
(4, 'Пепперони', 45, 43),
(5, 'Деревенская', 21, 28),
(6, 'Деревенская', 26, 32),
(7, 'Деревенская', 31, 36),
(8, 'Деревенская', 45, 42),
(9, 'Гавайская', 21, 27),
(10, 'Гавайская', 26, 31),
(11, 'Гавайская', 31, 35),
(12, 'Гавайская', 45, 41),
(13, 'Грибная', 21, 30),
(14, 'Грибная', 26, 34),
(15, 'Грибная', 31, 38),
(16, 'Грибная', 45, 44);

-- --------------------------------------------------------

--
-- Структура таблицы `sause`
--

CREATE TABLE `sause` (
  `id` int NOT NULL,
  `sause_name` text NOT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `sause`
--

INSERT INTO `sause` (`id`, `sause_name`, `price`) VALUES
(1, 'сырный', 1.2),
(2, 'кисло-сладкий', 0.8),
(3, 'чесночный', 1.1),
(4, 'барбекю', 0.9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sause`
--
ALTER TABLE `sause`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `sause`
--
ALTER TABLE `sause`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
