<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="todo-form">
    <?php $form = ActiveForm::begin(); ?>
    <div style="display: flex;">
        <div style="margin-right:50px; width:12%">
            <?= $form->field($model, 'category_id')->dropDownList(['Category', 1 => 'Category A', 2 => 'Category B', 3 => 'Category C']) ?>
        </div>
        <div style=" width:25%">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Type todo item name']) ?>
        </div>
        <div class="form-group my-4 mx-4">
            <?= Html::submitButton('Add', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
