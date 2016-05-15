<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\read\models\Users10Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users10s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users10-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Users10', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Username',
            'Password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
