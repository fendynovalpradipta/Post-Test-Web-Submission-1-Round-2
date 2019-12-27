<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Absensi */

$this->title = ' ' ;
$this->params['breadcrumbs'][] = ['label' => 'Absensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update Absensi: '. $model->id;
?>
<div class="absensi-update">
<br><br><br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
