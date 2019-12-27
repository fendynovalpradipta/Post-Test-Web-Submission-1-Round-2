<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\search\KasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' ';
$this->params['breadcrumbs'][] = 'Kas';
?>
<div class="kas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'nim',
            'setor',
            'tglsetor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
