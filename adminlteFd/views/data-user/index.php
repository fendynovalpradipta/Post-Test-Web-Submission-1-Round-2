<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-user-index">


    <p>
        <?= Html::a('Create Data User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_user',
            'username',
            'password',
            'auth_key',
            'accessToken',
            'role',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
