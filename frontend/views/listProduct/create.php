<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ListProduct */

$this->title = Yii::t('app', 'Create List Product');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'List Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
