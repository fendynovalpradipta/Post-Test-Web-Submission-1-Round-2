<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Absensi */

$this->title = ' ';
$this->params['breadcrumbs'][] = ['label' => 'Absensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Create Absensi';
?>
<div class="absensi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
