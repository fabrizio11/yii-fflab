<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Item */

$this->title = 'Update Item: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->item_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
