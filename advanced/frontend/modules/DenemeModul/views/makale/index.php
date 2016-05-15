<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\DenemeModul\models\MakalemodulSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Makalemoduls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makalemodul-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Makalemodul', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Name',
            'Text:ntext',
            'DC',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
