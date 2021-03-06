<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RasporedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Raspored';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raspored-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Raspored', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dan',
            'br_casa',
            'id_predmet',
            'id_odeljenje',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
