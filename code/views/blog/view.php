<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BlogText */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blog Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-text-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->text_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->text_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <h2><?= Html::encode($model->title); ?><h5><?= $model->create_date; ?></h5></h2>
    <p>
        <?= Html::encode($model->content); ?>
    </p>
</div>
