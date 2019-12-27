<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\search\AbsensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' ';
$this->params['breadcrumbs'][] = 'Absensi';
?>
<div class="absensi-index">

    <br><br><br>

    <p>
        <?= Html::a('Create Absensi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'nim',
            'nama',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
