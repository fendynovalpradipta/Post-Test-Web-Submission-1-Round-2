<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataMahasiswa */

$this->title = ' ';
$this->params['breadcrumbs'][] = ['label' => 'Data Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->nim ;
\yii\web\YiiAsset::register($this);
?>
<br><br>
<div class="data-mahasiswa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nim], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nim',
            'nama',
            'alamat',
            'jurusan',
            'semester',
            'jenis_kel',
            'agama',
            'kelas',
        ],
    ]) ?>

</div>
