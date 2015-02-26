<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Card */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card-view">

    <h1><?= Html::encode('Профиль карты ') ?><i><?= Html::encode($model->series.'  '.$model->number) ?></i></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'series',
            // 'number',
            [
                'label' => 'Выпуск',
                'value' => Yii::$app->formatter->asDatetime($model->issue),
            ],
            [
                'label' => 'Срок действия',
                'value' => Yii::$app->formatter->asDatetime($model->expiration),
            ],
            [
                'label' => 'Дата использования',
                'value' => Yii::$app->formatter->asDatetime($model->activity),
            ],
            [
                'label' => 'Сумма',
                'value' => Yii::$app->formatter->asCurrency($model->getAmount()),
            ],
            [
                'label' => 'Статус',
                'value' => $model->getStatus(),
            ],
        ],
    ]) ?>

</div>
