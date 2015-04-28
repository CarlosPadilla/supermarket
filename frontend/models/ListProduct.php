<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_product".
 *
 * @property integer $id_product
 * @property integer $id_transaction
 *
 * @property Products $idProduct
 * @property Transactions $idTransaction
 */
class ListProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'list_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_product', 'id_transaction'], 'required'],
            [['id_product', 'id_transaction'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_product' => Yii::t('app', 'Id Product'),
            'id_transaction' => Yii::t('app', 'Id Transaction'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'id_product']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTransaction()
    {
        return $this->hasOne(Transactions::className(), ['id' => 'id_transaction']);
    }
}
