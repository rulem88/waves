-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 21 2022 г., 00:57
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `waves`
--

-- --------------------------------------------------------

--
-- Структура таблицы `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comp` varchar(255) NOT NULL,
  `url_pic` text NOT NULL,
  `url_icon` text NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `offers`
--

INSERT INTO `offers` (`id`, `name`, `comp`, `url_pic`, `url_icon`, `price`) VALUES
(1, 'Paris', 'Polish airlines', 'https://a.cdn-hotels.com/gdcs/production183/d522/6ddb51d6-9b99-426e-b5b3-91d2df5b771b.jpg?impolicy=fcrop&w=1600&h=1066&q=medium', 'https://cdn.freelogovectors.net/wp-content/uploads/2020/02/lot-polish-airlines-logo-768x768.png', 39753),
(2, 'Dubai', 'Aeroflot', 'https://icdn.lenta.ru/images/2021/06/09/17/20210609172110229/preview_d7cb4f5d02fa280086c66b72cce7c84e.jpg', 'https://cdn.worldvectorlogo.com/logos/aeroflot-russian-airlines-26748.svg', 67676),
(3, 'Paris', 'Ural airlines', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/La_Tour_Eiffel_vue_de_la_Tour_Saint-Jacques%2C_Paris_ao%C3%BBt_2014_%282%29.jpg/280px-La_Tour_Eiffel_vue_de_la_Tour_Saint-Jacques%2C_Paris_ao%C3%BBt_2014_%282%29.jpg', 'https://www.uralairlines.ru/upload/iblock/20e/20e4cd4780c5864f70f69d8504379942.jpg', 49376),
(4, 'Bali', 'British airlines', 'https://i2.wp.com/fb.ru/misc/i/gallery/11992/507008.jpg', 'https://iconape.com/wp-content/png_logo_vector/british-airways-48174.png', 142753);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `second_name` text NOT NULL,
  `bday` text NOT NULL,
  `email` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `second_name`, `bday`, `email`, `login`, `password`) VALUES
(1, 'admin', 'admin', '2036-10-20', 'admin.waves@gmail.com', 'admin_tools_waves', '@d_min-t00lz'),
(2, 'vlad', 'vlad', '2036-10-20', 'dadwdawdasdawdawd', 'admin_tools_waves', '@d_min-t00lz'),
(3, 'vladislav', 'drozdov', '2003-07-03', 'maseeeeeeeed@gmail.com', 'vlad200343', '134512345'),
(4, 'vlad', 'drozdovdrozdovdrozdov', '2003-07-03', 'maseeeeeeeed@gmail.com', 'vlad200343', '134512345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
