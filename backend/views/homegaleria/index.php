<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HomegaleriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home galerias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="list-group-item active">
        <h3 class="panel-title">Home Galerias</h3>
    </div>
        <div class="panel-body">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Home galeria', ['create'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Publicações', ['publicacao/index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'filter' => false,
                'attribute' => 'images',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->images,
                    ['width' => 70, 'height' => 55]);
                },
            ],
            'descricao:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>
