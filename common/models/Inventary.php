<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "inventary".
 *
 * @property integer $id
 * @property integer $unit_number
 * @property string $acquire_date
 * @property string $expire_date
 */
class Inventary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unit_number'], 'integer'],
            [['acquire_date', 'expire_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'unit_number' => Yii::t('app', 'Numero de unidades'),
            'acquire_date' => Yii::t('app', 'Fecha de compra'),
            'expire_date' => Yii::t('app', 'caducidad'),
        ];
    }
}
