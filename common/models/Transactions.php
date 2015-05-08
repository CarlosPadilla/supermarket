<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transactions".
 *
 * @property integer $id
 * @property integer $total
 * @property integer $is_venta
 *
 * @property ListProduct[] $listProducts
 */
class Transactions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transactions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['total', 'is_venta'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'total' => Yii::t('app', 'Total'),
            'is_venta' => Yii::t('app', 'Tipo de transaccion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListProducts()
    {
        return $this->hasMany(ListProduct::className(), ['id_transaction' => 'id']);
    }
}
