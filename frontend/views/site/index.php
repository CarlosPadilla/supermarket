<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">

	<div class="jumbotron">
		<h1>Welcome!</h1>
<?php if (!Yii::$app->user->isGuest): ?>
	<div class="form-group">
		<?= Html::a(Yii::t('app', 'Vender'), ['Vender'], ['class' => 'btn btn-primary']) ?>
	</div>
<?php else: ?>
		<p class="lead">Yey...</p>
			 <?php endif;?>

	</div>

	<div class="body-content">

		<div class="row">
		</div>

	</div>
</div>
