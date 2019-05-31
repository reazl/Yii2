-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Май 28 2019 г., 16:00
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1559047635);

-- --------------------------------------------------------

--
-- Структура таблицы `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sections`
--

INSERT INTO `sections` (`id`, `name`) VALUES
(1, 'Администрирование'),
(2, 'Обучение');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `author_id` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `body` varchar(255) NOT NULL,
  `executer_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `create_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `header`, `author_id`, `deadline`, `body`, `executer_id`, `section_id`, `create_date`) VALUES
(1, 'Закончить task-менеджер', 1, '2019-06-24', 'Закончить task-менеджер и первую часть курса по изучению фреймворка Yii2', 2, 2, NULL),
(2, 'Изучить встроенный функционал Yii2', 1, '2019-06-03', 'Ознакомиться со встроенным функционалом фреймворка и получить полезные навыки при работе с ним.', 3, 2, '2019-05-27'),
(3, 'Миграции', 100, '2019-06-24', 'Сделать миграции для всех проигнорированных мной изменений в БД', 3, 1, '2019-05-28'),
(4, 'Связь таблиц', 100, '2019-06-24', 'Сделать связь по первичному ключу во взаимосвязанных таблицах', 3, 1, '2019-05-28');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `position_id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `accessToken` varchar(50) NOT NULL,
  `authKey` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `position_id`, `login`, `password`, `accessToken`, `authKey`) VALUES
(2, 'demo', 0, 'demo', 'demo', '', ''),
(3, 'Тимофеев Андрей', 2, '', '0', '', ''),
(100, 'admin', 1, 'admin', 'admin', '100-token', 'test100key');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
