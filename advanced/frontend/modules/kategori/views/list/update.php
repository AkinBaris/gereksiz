<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\kategori\models\Favoriread */

$this->title = 'Update Favoriread: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Favorireads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="favoriread-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>