<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataMahasiswa */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Data Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Create Data Mahasiswa';
?>
<br><br>
<div class="data-mahasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
