<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Transactions */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Transactions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transactions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'total',
            'is_venta',
        ],
    ]) ?>
    <h3>Lista de produtos</h3>
    <ul>
        <?php
        foreach ($listProducts as $product) {
        ?>
            <li>
            <?php
                echo DetailView::widget([
                    'model' => $product,
                    'attributes' => [
                        'name',
                        'price',
                    ],
                ]);
            ?>
            </li>
        <?php
        }
        ?>
    </ul>

</div>
