<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TransactionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Transactions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transactions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Transactions'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            array(
                'attribute' => 'total',
                'format' => 'currency',
            ),
            array(
                'attribute' => 'is_venta',
                'format' => 'raw',
                'filter' => Html::activeDropDownList($searchModel, 'is_venta', array(
                    ''=>'Todos',
                    '1'=>'Ventas',
                    '0'=>'Compras',
                ), ['class'=>'form-control','prompt' => 'Select Category']),
                'value' => function($value,$key)
                {
                    return $value->is_venta? "Venta" : "Compra";
                },
            ),

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
