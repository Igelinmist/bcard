<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Card */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'series')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'issue')->textInput() ?>

    <?= $form->field($model, 'expiration')->textInput() ?>

    <?= $form->field($model, 'activity')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
