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

    <!--<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'total',
            [
            'attribute' => 'is_venta',
            'value' => $model->is_venta? 'Venta' : 'Compra',
        ],
        ],
    ]) ?> -->
    <table class="table table-striped table-bordered detail-view">
    <thead>
        <tr>
            <th>Lista de <?= $model->is_venta? 'Venta' : 'Compra';?> de Productos</th>
            <th>Precios</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listProducts as $key => $product) {
        ?>
        <tr>
            <?php

                echo '<th>' . $product['name'] . '</th><td>$' . $product['price'] . '</td>';
            ?>
        </tr>
        <?php
        }
        ?>
        </tbody>
        <tfoot>
            <th>Total</th>
            <th>$<?=$model->total; ?></th>
        </tfoot>
    </table>

</div>
