<?php

use yii\helpers\Html;

$this->title = 'Генерация карт';
$this->params['breadcrumbs'][] = ['label' => 'Карты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_generator-form', [
        'model' => $model,
    ]) ?>

</div>