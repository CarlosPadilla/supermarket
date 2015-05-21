<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'SuperMarket';
?>
<div class="site-index">

	<div class="jumbotron">
		<h1>Bienvenido!</h1>
<?php if (!Yii::$app->user->isGuest): ?>
	<div class="form-group">
		<?= Html::a(Yii::t('app', 'Vender'), ['store'], ['class' => 'btn btn-primary']) ?>
	</div>
<?php else: ?>
		<p class="lead">Inicia sesion para comenzar</p>
			 <?php endif;?>

	</div>

	<div class="body-content">

		<div class="row">
		</div>

	</div>
</div>
