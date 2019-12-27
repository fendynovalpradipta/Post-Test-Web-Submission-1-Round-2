<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataUser */

$this->title = 'Create Data User';
$this->params['breadcrumbs'][] = ['label' => 'Data User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-user-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
