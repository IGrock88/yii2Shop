<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GoodImg */

$this->title = 'Create Good Img';
$this->params['breadcrumbs'][] = ['label' => 'Good Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="good-img-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
