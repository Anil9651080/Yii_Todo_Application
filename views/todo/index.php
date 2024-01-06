<?php

use app\models\Todo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\TodoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

// $this->title = 'To-do List Application';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div style="display:flex">
    
    <div style=" width:13%;height: 120px; border:2px solid black; padding:5px">
        <img src="../web/img/h.png" alt="Image Not Found" style="width: 99.8%; height:110px">
    </div>
    <div>
        <h1 style="margin-left:40vh; margin-top:20px">To-do List Application</h1>
        <p style=" margin-left:37vh">Where to-do items are added/deleted and belong to categories.</p>
    </div>
    
</div>

<div style="border:2px solid black; padding:10px; margin-top:10px">

<div class="todo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
  
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
    Pjax::begin();
    echo GridView::widget([
        'dataProvider' => $dataProvider,


        'columns' => [
            [
                'label' => 'Todo item name',
                'attribute' => 'name',
                'enableSorting' => false,
            ],
            [
                'label' => 'Category',
                'attribute' => 'category_id ',
                'value' => 'category.name',
                'enableSorting' => false,
            ],
            [
                'label' => 'Timestamp',
                'attribute' => 'timestamp',
                'format' => ['date', 'j MMMM'],
                'enableSorting' => false,
            ],

            [

                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'header' => 'Action',
                'icons' => ['trash' => '<button class="btn btn-danger">Delete</button>']

            ]


        ],
    ]);
    Pjax::end();
    ?>

</div>
</div>
