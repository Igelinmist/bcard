<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="card-form">

    <?php $form = ActiveForm::begin([
        'action' => ['generate'],
        'method' => 'post',
    ]); ?>

    <?= $form->field($model, 'serNo') ?>

    <?= $form->field($model, 'amount') ?>

    <div class="form-group">
        <?= Html::submitButton('Generate', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>