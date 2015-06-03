<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BlogText */

$this->title = 'Update Blog Text: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blog Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->text_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blog-text-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
