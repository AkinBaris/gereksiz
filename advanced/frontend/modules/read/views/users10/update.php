<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\read\models\Users10 */

$this->title = 'Update Users10: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Users10s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users10-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
