<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ListProduct */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'List Product',
]) . ' ' . $model->id_product;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'List Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_product, 'url' => ['view', 'id' => $model->id_product]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="list-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
