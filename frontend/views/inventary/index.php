<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\products;

/* @var $this yii\web\View */
/* @var $searchModel common\models\InventarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Inventaries');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventary-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Inventary'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'id_product',
            array(
                'attribute' => 'id_product',
                'format' => 'raw',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'id_product',
                    ArrayHelper::map(
                        Products::find()->asArray()->all(),
                        'id',
                        'name'
                    ),
                    ['class'=>'form-control','prompt' => 'Select Category']),
                'value' => function($value,$key)
                {
                    return Products::findOne($value->id_product)? Products::findOne($value->id_product)->name : NULL;
                },
            ),
            'unit_number',
            array(
                'attribute' => 'acquire_date',
                'format' => 'DATE',
            ),
            array(
                'attribute' => 'expire_date',
                'format' => 'DATE',
            ),
            // 'expire_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
