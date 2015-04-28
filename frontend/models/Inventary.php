<?php

namespace app\models;

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
            'unit_number' => Yii::t('app', 'Unit Number'),
            'acquire_date' => Yii::t('app', 'Acquire Date'),
            'expire_date' => Yii::t('app', 'Expire Date'),
        ];
    }
}
