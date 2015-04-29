<?php

use yii\db\Schema;
use yii\db\Migration;

class m150428_043053_deleteUsers_setUser extends Migration
{
	public function up()
	{

		$sql = 'ALTER TABLE `user` ADD id_rol INT(11) UNSIGNED;';
		$this->execute($sql);

		$sql = 'DROP TABLE `users`;';
		$this->execute($sql);

		$sql = 'ALTER TABLE `user` ADD CONSTRAINT `roles` FOREIGN KEY (id_rol) REFERENCES `roles`(id);';
		$this->execute($sql);

		$sql = 'ALTER TABLE `products` ADD price FLOAT NULL DEFAULT NULL;';
		$this->execute($sql);

		$sql = 'UPDATE user SET id_rol = 1';
		$this->execute($sql);

		$sql = 'ALTER TABLE `list_product` DROP FOREIGN KEY `list_product_ibfk_1`;
			ALTER TABLE `list_product` DROP PRIMARY KEY;
			ALTER TABLE `list_product` ADD INDEX `PRODUCT` (`id_product`);
			ALTER TABLE `list_product` ADD CONSTRAINT `products` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
			ALTER TABLE `transactions` CHANGE `total` `total` FLOAT  NULL  DEFAULT NULL;';
		$this->execute($sql);

	}

	public function down()
	{
		echo "m150428_043053_deleteUsers_setUser cannot be reverted.\n";

		return false;
	}
}
