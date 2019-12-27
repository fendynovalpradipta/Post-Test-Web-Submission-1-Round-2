<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_key')->radioList(['test100-key'=>'admin', 'user101-key'=>'user'], ['unselect'=> null]) ?>

    <?= $form->field($model, 'accessToken')->radioList(['100-token'=>'admin', '101-token'=>'user'], ['unselect'=> null]) ?>

    <?= $form->field($model, 'role')->radioList(['admin'=>'admin', 'user'=>'user'], ['unselect'=> null]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
