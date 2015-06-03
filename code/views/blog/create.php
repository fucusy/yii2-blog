<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BlogText */

$this->title = 'Create Blog Text';
$this->params['breadcrumbs'][] = ['label' => 'Blog Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-text-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
