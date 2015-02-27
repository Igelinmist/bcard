<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="card-form">

    <?php $form = ActiveForm::begin([
        'action' => ['create-cards'],
        'method' => 'post',
    ]); ?>

    <?= $form->field($model, 'serNo') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'termInMounth') ?>

    <div class="form-group">
        <?= Html::submitButton('Генерировать', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>