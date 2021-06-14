-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 12 2021 г., 19:33
-- Версия сервера: 10.4.10-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shopping`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Bambi', 'Bambi Print Mini Backpack', 150.00, './assets/products/1.png', '2020-03-28 11:08:57'),
(2, 'Air Jordan', 'Air Jordan 1 Custom Green', 150.00, './assets/products/2.png', '2020-03-28 11:08:57'),
(3, 'Dolce&Gabbana', 'Dolce&Gabbana Premium Backpack', 150.00, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 'Classic', 'Classic Outfit', 170.00, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 'Louis Vuitton', 'Louis Vuitton Exclusive Bag', 250.00, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 'Wildberry', 'Wildberry Suede Women Shoes', 150.00, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 'New Balance', 'New Balance EDIT 1', 123.00, './assets/products/8.png', '2020-03-28 11:08:57'),
(8, 'New Balance', 'New Balance EDIT 2', 120.00, './assets/products/10.png', '2020-03-28 11:08:57'),
(9, 'Gucci Watches', 'Gucci Watches Rolex Collab', 1500.00, './assets/products/11.png', '2020-03-28 11:08:57'),
(10, 'ZARA', 'ZARA White Classic Jacket', 220.00, './assets/products/12.png', '2020-03-28 11:08:57'),
(11, 'Polo', 'Blue Polo Shirt', 150.00, './assets/products/13.png', '2020-03-28 11:08:57'),
(12, 'Dolce&Gabbana', 'Dolce&Gabbana Backpack', 300.00, './assets/products/14.png', '2020-03-28 11:08:57'),
(13, 'LV AF Collab', 'LV AF Collab Women Bag', 220.00, './assets/products/15.png', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'olzhastoi26', 'olzhastoi26@gmail.com', '825f3b26ee35df8778a12754054906ea');

-- --------------------------------------------------------

--
-- Структура таблицы `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
