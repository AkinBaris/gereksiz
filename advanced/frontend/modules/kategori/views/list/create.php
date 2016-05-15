<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\kategori\models\Favoriread */

$this->title = 'Create Favoriread';
$this->params['breadcrumbs'][] = ['label' => 'Favorireads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="favoriread-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>