<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Card */

//$this->title = 'Update Card: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Карты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="card-update">

    <h1><?= Html::encode('Изменить статус карты ') ?><i><?= Html::encode($model->series.'  '.$model->number) ?></i></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
