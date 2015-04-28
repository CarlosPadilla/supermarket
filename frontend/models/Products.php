<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $stock
 *
 * @property ListProduct $listProduct
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stock'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'stock' => Yii::t('app', 'Stock'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListProduct()
    {
        return $this->hasOne(ListProduct::className(), ['id_product' => 'id']);
    }
}
