<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vendors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'price_low',
            'price_high',
            'address',
            'city',
            // 'state',
            // 'zip',
            // 'phone',
            // 'email:email',
            // 'website',
            // 'lat',
            // 'lng',
            // 'photo',
            // 'hours',
            // 'name',
            // 'desc',
            // 'u_cut',
            // 'pre_cut',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
