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

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            

           
            'nim',
            'nim0.nama',
            'nim0.alamat',
            'nim0.jurusan',
            'nim0.semester',            
            'setor',
            'tglsetor',

        ],
    ]); ?>


</div>
