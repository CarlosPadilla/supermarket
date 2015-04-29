<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201432_IMPORT extends Migration
{
	public function up()
	{
		$sql = 'SET FOREIGN_KEY_CHECKS = 0;';
		$this->execute($sql);

		$sql = "DROP TABLE IF EXISTS `inventary`;
		CREATE TABLE `inventary` (
		  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `unit_number` int(200) DEFAULT NULL,
		  `acquire_date` date DEFAULT NULL,
		  `expire_date` date DEFAULT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$this->execute($sql);
		$sql = " DROP TABLE IF EXISTS `products`;
		CREATE TABLE `products` (
		  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `name` varchar(20) DEFAULT NULL,
		  `description` varchar(255) DEFAULT NULL,
		  `stock` int(11) DEFAULT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1;";


		$this->execute($sql);
		$sql = " DROP TABLE IF EXISTS `roles`;
		CREATE TABLE `roles` (
		  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `role_name` varchar(20) DEFAULT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$this->execute($sql);
		$sql = "DROP TABLE IF EXISTS `transactions`;
		CREATE TABLE `transactions` (
		  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `total` int(225) DEFAULT NULL,
		  `is_venta` int(2) DEFAULT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$this->execute($sql);
		$sql = "DROP TABLE IF EXISTS `list_product`;
		CREATE TABLE `list_product` (
		  `id_product` int(11) unsigned NOT NULL,
		  `id_transaction` int(11) unsigned NOT NULL,
		  PRIMARY KEY (`id_product`),
		  KEY `id_transaction` (`id_transaction`),
		  CONSTRAINT `list_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
		  CONSTRAINT `list_product_ibfk_2` FOREIGN KEY (`id_transaction`) REFERENCES `transactions` (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$this->execute($sql);
		$sql = "DROP TABLE IF EXISTS `users`;

		CREATE TABLE `users` (
		  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `name` varchar(20) DEFAULT NULL,
		  `last_name` varchar(20) DEFAULT NULL,
		  `password` varchar(20) DEFAULT NULL,
		  `id_rol` int(11) unsigned NOT NULL,
		  PRIMARY KEY (`id`),
		  KEY `id_rol` (`id_rol`),
		  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$this->execute($sql);

		$sql = 'SET FOREIGN_KEY_CHECKS = 1;';
		$this->execute($sql);
	}

	public function down()
	{
		$this->dropTable('{{%user}}');
	}
}
