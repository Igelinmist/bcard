<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="card-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'status')->radioList([
            0 => 'Не активная',
            1 => 'Активная'
            ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
