<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Homegaleria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="homegaleria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'images')->fileInput() ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
