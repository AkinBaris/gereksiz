<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\read\models\Users10 */

$this->title = 'Create Users10';
$this->params['breadcrumbs'][] = ['label' => 'Users10s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users10-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
