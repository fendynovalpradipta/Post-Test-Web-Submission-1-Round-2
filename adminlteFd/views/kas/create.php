<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kas */

$this->title = ' ';
$this->params['breadcrumbs'][] = ['label' => 'Kas', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Create Kas';
?>
<div class="kas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
