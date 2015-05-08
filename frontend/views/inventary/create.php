<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Inventary */

$this->title = Yii::t('app', 'Create Inventary');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Inventaries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventary-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
