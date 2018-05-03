<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
$gridColumns = [
                'name',
                'description:ntext',
                [
                    'attribute' => 'category',
                    'value'     => 'category.name'
                ],

                ['class' => 'yii\grid\ActionColumn'],
            ];
?>
<div class="item-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Item', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <div class="pull-right">
        <?= ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' => $gridColumns,
            'fontAwesome' => true,
            'showConfirmAlert' => false,
            'target' => ExportMenu::TARGET_SELF,
            'dropdownOptions' => [
                'label' => 'Export All',
                'class' => 'btn btn-default'
            ]
        ]) ?>
        </div>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); 
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => $gridColumns,
        ]); ?>
    </div>
</div>
