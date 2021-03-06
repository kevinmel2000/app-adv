<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ReservationDetail */

$this->title = $model->reservation_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reservation Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservation-detail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'reservation_id' => $model->reservation_id, 'goods_id' => $model->goods_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'reservation_id' => $model->reservation_id, 'goods_id' => $model->goods_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'reservation_id',
            'goods_id',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'status',
        ],
    ]) ?>

</div>
