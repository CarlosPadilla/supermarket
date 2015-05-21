<?php

use yii\db\Schema;
use yii\db\Migration;

class m150521_043848_relationForProductsAndInventary extends Migration
{
    public function safeUp()
    {
        $sql = 'ALTER TABLE `inventary` ADD id_product INT(11) UNSIGNED;
            ALTER TABLE `inventary` ADD INDEX `PRODUCT` (`id_product`);';
        $this->execute($sql);

        $sql = 'UPDATE `inventary` SET id_product = 1 + FLOOR(RAND() * 27) ';
        $this->execute($sql);

        $sql = 'ALTER TABLE `inventary` ADD CONSTRAINT `product` FOREIGN KEY (`id_product`) REFERENCES `products`(id);';
        $this->execute($sql);

    }

    public function safeDown()
    {
        $sql = 'ALTER TABLE `inventary` DROP FOREIGN KEY (product);';
        $this->execute($sql);

        $sql = 'ALTER TABLE `inventary` DROP id_product;';
        $this->execute($sql);
    }
}
