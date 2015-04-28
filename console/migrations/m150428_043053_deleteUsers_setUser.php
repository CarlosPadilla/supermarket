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

		$sql = 'ALTER TABLE `user` ADD FOREIGN KEY (id_rol) REFERENCES `roles`(id);';
		$this->execute($sql);

		$sql = 'UPDATE user SET id_rol = 1';
		$this->execute($sql);

	}

	public function down()
	{
		echo "m150428_043053_deleteUsers_setUser cannot be reverted.\n";

		return false;
	}
}
