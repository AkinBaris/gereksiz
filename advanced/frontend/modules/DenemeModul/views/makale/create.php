<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\DenemeModul\models\Makalemodul */

$this->title = 'Create Makalemodul';
$this->params['breadcrumbs'][] = ['label' => 'Makalemoduls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makalemodul-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
