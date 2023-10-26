-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Out-2023 às 19:16
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `upx`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(16) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('Feminino','Masculino','Outros') NOT NULL,
  `time` enum('Noite','Manhã','Tarde') NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `regiao` enum('Salto','Sorocaba','Votorantim','Boituva') DEFAULT NULL,
  `providing_ride` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Inserir 20 registros com providing_ride = 1
INSERT INTO `users` (`firstname`, `lastname`, `email`, `number`, `cpf`, `password`, `gender`, `time`, `register_date`, `regiao`, `providing_ride`)
VALUES
  ('Alice', 'Smith', 'alice.smith@example.com', '1234567890', '12345678901', 'password123', 'Feminino', 'Manhã', NOW(), 'Salto', 1),
  ('Bob', 'Johnson', 'bob.johnson@example.com', '9876543210', '98765432102', 'password456', 'Masculino', 'Tarde', NOW(), 'Sorocaba', 1),
  ('Charlie', 'Williams', 'charlie.williams@example.com', '5678901234', '56789012303', 'password789', 'Outros', 'Noite', NOW(), 'Votorantim', 1),
  ('David', 'Brown', 'david.brown@example.com', '3456789012', '34567890104', 'passwordABC', 'Masculino', 'Manhã', NOW(), 'Boituva', 1),
  ('Jane', 'Doe', 'jane.doe@example.com', '2345678901', '23456789005', 'passwordDEF', 'Feminino', 'Tarde', NOW(), 'Salto', 1),
  ('Ethan', 'Johnson', 'ethan.johnson@example.com', '7890123456', '78901234506', 'passwordGHI', 'Masculino', 'Noite', NOW(), 'Sorocaba', 1),
  ('Olivia', 'Davis', 'olivia.davis@example.com', '4567890123', '45678901207', 'passwordJKL', 'Feminino', 'Manhã', NOW(), 'Votorantim', 1),
  ('James', 'Miller', 'james.miller@example.com', '9012345678', '90123456708', 'passwordMNO', 'Masculino', 'Tarde', NOW(), 'Boituva', 1),
  ('Liam', 'Garcia', 'liam.garcia@example.com', '6789012345', '67890123409', 'passwordPQR', 'Masculino', 'Noite', NOW(), 'Salto', 1),
  ('Sophia', 'Wilson', 'sophia.wilson@example.com', '1234509876', '12345098710', 'passwordSTU', 'Feminino', 'Tarde', NOW(), 'Sorocaba', 1),
  ('Mia', 'Martinez', 'mia.martinez@example.com', '8901234567', '89012345611', 'passwordVWX', 'Feminino', 'Manhã', NOW(), 'Votorantim', 1),
  ('Logan', 'Lee', 'logan.lee@example.com', '2345678901', '23456789012', 'passwordYZA', 'Masculino', 'Tarde', NOW(), 'Boituva', 1),
  ('Noah', 'Hernandez', 'noah.hernandez@example.com', '7890123456', '78901234513', 'passwordBCD', 'Masculino', 'Noite', NOW(), 'Salto', 1),
  ('Ava', 'White', 'ava.white@example.com', '4567890123', '45678901214', 'passwordEFG', 'Feminino', 'Tarde', NOW(), 'Sorocaba', 1),
  ('Emma', 'Martin', 'emma.martin@example.com', '9012345678', '90123456715', 'passwordHIJ', 'Feminino', 'Manhã', NOW(), 'Votorantim', 1),
  ('Liam', 'Garcia', 'liam.garcia@example.com', '6789012345', '67890123416', 'passwordKLM', 'Masculino', 'Noite', NOW(), 'Boituva', 1),
  ('William', 'Adams', 'william.adams@example.com', '1234509876', '12345098717', 'passwordNOP', 'Masculino', 'Tarde', NOW(), 'Salto', 1),
  ('Sophia', 'Wilson', 'sophia.wilson@example.com', '2345678901', '23456789018', 'passwordQRS', 'Feminino', 'Manhã', NOW(), 'Sorocaba', 1),
  ('Henry', 'Thomas', 'henry.thomas@example.com', '8901234567', '89012345619', 'passwordTUV', 'Masculino', 'Tarde', NOW(), 'Votorantim', 1),
  ('Chloe', 'Perez', 'chloe.perez@example.com', '1234567890', '12345678920', 'passwordWXY', 'Feminino', 'Noite', NOW(), 'Boituva', 1);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
