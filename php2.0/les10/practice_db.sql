-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 11 2019 г., 17:44
-- Версия сервера: 10.1.36-MariaDB
-- Версия PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practice_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `post` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `site` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `name`, `post`, `email`, `phone`, `site`) VALUES
(1, 'Кравчинский Алексей', 'web dev', 'alexeym4l@mail.ru', '+79780973752', 'https://vk.com/lesha_w');

-- --------------------------------------------------------

--
-- Структура таблицы `aboutcareer`
--

CREATE TABLE `aboutcareer` (
  `id` int(11) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `aboutcareer`
--

INSERT INTO `aboutcareer` (`id`, `descr`) VALUES
(1, 'По специальности не работал. <br> Работал менежером по продажам на летний период 2 сезона.\r\n                      Принимал участие в строительстве Симферопольского аэропорта, а затем одного из комплексом отеля в Ялте.\r\n                     В web разработке достаточно недавно, но есть один незавершенный проект сайта для молодежной организации \"Российские студенческие отряды.\" \r\n                     А так же есть личный проект, который находится в стадии разработки.\r\n                     Учился Yii2 на личных проектах онлайн магазинов наставника. Успешно завершенный проект переноса задачь из AmoCRM в Trello.');

-- --------------------------------------------------------

--
-- Структура таблицы `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `post` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `duty` varchar(100) NOT NULL,
  `yearStart` int(11) NOT NULL,
  `yearEnd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `career`
--

INSERT INTO `career` (`id`, `post`, `place`, `duty`, `yearStart`, `yearEnd`) VALUES
(1, 'ООО \"Винный Альянс\"', 'Судак', 'Должность Менеджера по продажам', 2016, '2016'),
(2, 'ООО \"Винный Альянс\"', 'Судак', 'Должность Менеджера по продажам', 2017, '2017'),
(3, 'web dev', 'Симферополь', 'немого Yii2 и верстки', 2018, '2018');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `comment`) VALUES
(42, '1'),
(43, '1'),
(44, '1'),
(45, '1'),
(46, '1'),
(47, '2');

-- --------------------------------------------------------

--
-- Структура таблицы `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `univercity` varchar(100) NOT NULL,
  `yearStart` int(11) NOT NULL,
  `yearEnd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `education`
--

INSERT INTO `education` (`id`, `faculty`, `univercity`, `yearStart`, `yearEnd`) VALUES
(1, 'Системный аналитик', 'Донбасская государственная машиностроительная академия', 2014, '2015'),
(2, 'Радиофизика', 'Физико-технический институт (КФУ) В.И.Вернадского', 2015, '2018'),
(3, 'Информатика и вычислительная техника', 'Физико-технический институт (КФУ) В.И.Вернадского', 2018, '2020');

-- --------------------------------------------------------

--
-- Структура таблицы `interests`
--

CREATE TABLE `interests` (
  `id` int(11) NOT NULL,
  `interest` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `interests`
--

INSERT INTO `interests` (`id`, `interest`) VALUES
(1, 'Робототехника'),
(2, 'Web dev');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `title`) VALUES
(1, 'English'),
(2, 'Russian'),
(3, 'Ukrainian');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `name`, `descr`, `link`) VALUES
(1, 'Elab', 'онлайн магазин цветов', '#'),
(2, 'bestflowers', 'онлайн магазин цветов', '#'),
(3, 'rosesspb', 'онлайн магазин цветов по СПБ', '#'),
(4, 'Optimization amoCRM to Trello', 'Перенос задач из AmoCRM в Trello с помощью apiTrello + js', '#');

-- --------------------------------------------------------

--
-- Структура таблицы `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lvl` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `skills`
--

INSERT INTO `skills` (`id`, `name`, `lvl`) VALUES
(1, 'HTML5 & CSS', '50'),
(2, 'Javascript & jQuery', '70'),
(3, 'PHP', '10'),
(4, 'C++', '5');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `aboutcareer`
--
ALTER TABLE `aboutcareer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `aboutcareer`
--
ALTER TABLE `aboutcareer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
