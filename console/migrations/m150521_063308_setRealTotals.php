<?php

use yii\db\Schema;
use yii\db\Migration;

class m150521_063308_setRealTotals extends Migration
{
    public function down()
    {
        echo "m150521_063308_setRealTotals cannot be reverted.\n";

        return false;
    }

    public function safeUp()
    {
        $sql = 'CREATE TEMPORARY TABLE precios SELECT t.id, SUM(p.price) AS precio FROM transactions t
            INNER JOIN list_product lp ON t.id = lp.id_transaction INNER JOIN products p ON lp.id_product = p.id GROUP BY t.id;';
        $this->execute($sql);
            $sql = 'UPDATE transactions t INNER JOIN precios p ON p.id = t.id SET t.total = p.precio;';
        $this->execute($sql);
    }

}
