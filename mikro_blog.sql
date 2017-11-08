-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 23 2017 г., 14:12
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mikro_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `name`) VALUES
(1, 'Німця, який влаштував різанину в Мюнхені, відправили до психлікарні'),
(2, 'США анулювали візу відомому критику Путіна');

-- --------------------------------------------------------

--
-- Структура таблицы `news_comments`
--

CREATE TABLE `news_comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `users` char(25) NOT NULL,
  `id_news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_comments`
--

INSERT INTO `news_comments` (`id`, `content`, `users`, `id_news`) VALUES
(1, 'Чоловіка, який у суботу вранці з ножем напав на перехожих у Мюнхені та поранив вісьмох людей, відправили до психіатричної лікарні.\r\nПро це повідомила німецька поліція, інформує Associated Press.\r\nНападником виявився 33-річний німець. Слідчий Йозеф Віммер у неділю заявив, що під час допиту зловмисник надавав суперечливу інформацію. Зокрема, він стверджував, що відчував загрозу з боку своєї сім’ї, але не зміг розповісти про це детальніше.\r\nВін також заявив, що шум поліцейського гелікоптера спонукав його атакувати ще більше людей. За рішенням судді нападника було відправлено до психіатричної лікарні.\r\nНагадаємо, у суботу вранці чоловік з ножем напав на людей у Мюнхені. Восьмеро осіб отримали легкі поранення. За деякий час поліція затримала нападника, заявивши, що у нього можуть бути психічні проблеми зі здоров’ям. Версію теракту правоохоронці виключили. ', 'user', 1),
(2, 'Влада США анулювала візу британського підприємця, співзасновника фонду \"Hermitage Capital\" Вільяма Браудера.\r\nЦе сталося після того, як Росія внесла його в базу Інтерполу, написав Браудер у Twitter, передає \"Радіо Свобода\".\r\nКолишній посол США в Росії Майкл Макфолл назвав цю ситуацію \"обурливою\" і закликав президента США Дональда Трампа і Держдепартамент \"не приєднуватися до кампанії Путіна проти Браудера\".\r\n22 жовтня з’явилися повідомлення, що Росія з п\'ятої спроби змогла внести Браудера до списку розшукуваних Інтерполом.', 'admin', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `news_content`
--

CREATE TABLE `news_content` (
  `id_content` int(11) NOT NULL,
  `content` text NOT NULL,
  `id_news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `USERS`
--

CREATE TABLE `USERS` (
  `id` int(11) NOT NULL,
  `login` text,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `USERS`
--

INSERT INTO `USERS` (`id`, `login`, `password`) VALUES
(1, 'user', ''),
(2, 'admin', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD KEY `id_news` (`id_news`);

--
-- Индексы таблицы `news_comments`
--
ALTER TABLE `news_comments`
  ADD KEY `id_users` (`users`),
  ADD KEY `id_news` (`id_news`);

--
-- Индексы таблицы `news_content`
--
ALTER TABLE `news_content`
  ADD KEY `id_news` (`id_news`);

--
-- Индексы таблицы `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
