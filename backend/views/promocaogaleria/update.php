<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Promocaogaleria */

$this->title = 'Update Promoção galeria: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Promoção galeria', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Promoção galerias</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>
