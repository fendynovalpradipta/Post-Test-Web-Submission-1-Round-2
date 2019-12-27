<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataMahasiswa */

$this->title = ' ';
$this->params['breadcrumbs'][] = ['label' => 'Data Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nim, 'url' => ['view', 'id' => $model->nim]];
$this->params['breadcrumbs'][] = 'Update Data Mahasiswa: ' . $model->nim;
?>
<br><br><br>
<div class="data-mahasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
