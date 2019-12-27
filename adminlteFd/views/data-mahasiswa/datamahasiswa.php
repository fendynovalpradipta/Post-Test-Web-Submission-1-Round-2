<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\search\DataMahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' ';
$this->params['breadcrumbs'][] = ' Data Mahasiswa';
?>
<div class="data-mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
       

            'nim',
            'nama',
            'alamat',
            'jurusan',
            'semester',
            'jenis_kel',
            'agama',
            'kelas',

            
        ],
    ]); ?>


</div>
