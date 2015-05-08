<?php

namespace common\models;

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
            'name' => Yii::t('app', 'Nombre'),
            'description' => Yii::t('app', 'Descripcion'),
            'stock' => Yii::t('app', 'Existencia'),
            'price' => yii::t('app', 'Precio')
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
