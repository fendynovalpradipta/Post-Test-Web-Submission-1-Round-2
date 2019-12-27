<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataUser */

$this->title = 'Update Data User: ' . $model->id_user;
$this->params['breadcrumbs'][] = ['label' => 'Data User', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_user, 'url' => ['view', 'id' => $model->id_user]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-user-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
