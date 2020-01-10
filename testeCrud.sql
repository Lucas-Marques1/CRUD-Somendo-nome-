-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.8-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela crud.nomes
CREATE TABLE IF NOT EXISTS `nomes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela crud.nomes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `nomes` DISABLE KEYS */;
INSERT INTO `nomes` (`id`, `nome`, `date`) VALUES
	(10, 'LUCAS MARQUES DOS ANJOS', '2019-12-20 02:30:27'),
	(18, 'GABRIELA MARCELY', '2019-12-20 03:23:50'),
	(19, 'KATRINA BENET', '2019-12-20 03:39:06'),
	(20, 'JéSSICA LOPEZ ', '2019-12-20 04:14:18'),
	(22, 'JENIFER ALMEIDA', '2019-12-20 04:18:41'),
	(24, 'NATALIA DE MELLO', '2019-12-20 04:20:53'),
	(26, 'BIANCA DANTAS', '2019-12-20 04:24:30'),
	(27, 'BEATRAIZ DE STACI', '2019-12-20 04:24:44'),
	(28, 'CAROL AZEVEDO', '2019-12-20 04:26:24'),
	(29, 'DEISE MARIA', '2019-12-20 04:27:23'),
	(30, 'HELENA ALVES', '2019-12-20 04:28:43'),
	(31, 'MONIQUE SPIRS', '2019-12-20 04:30:56'),
	(32, 'KETHELLEN ALVES', '2019-12-20 04:31:14'),
	(33, 'SANDRA GOES', '2019-12-20 04:32:44');
/*!40000 ALTER TABLE `nomes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
