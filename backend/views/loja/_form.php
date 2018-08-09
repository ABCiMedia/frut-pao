<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Contacto;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Loja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'endereco')->dropDownList(
    	ArrayHelper::map(Contacto::find()->all(),'endereco','endereco'),
        ['prompt'=>'-- Selecione Endereço --']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
