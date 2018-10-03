<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Good */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $categories array */
?>

<div class="good-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal'
    ]); ?>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <?= Html::a('Создать новую категорию', ['category/create'], ['class' => 'btn btn-primary']) ?>
                <?= $form->field($model, 'category_id')->dropDownList($categories)->label('Категория') ?>

            </div>

            <?= $form->field($model, 'title_img')->fileInput(['accept' => 'image/*']) ?>

            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'price')->textInput() ?>

            <?= $form->field($model, 'short_description')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'full_description')->textInput(['maxlength' => true]) ?>


            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>

        </div>
        <div class="col-lg-6">

            <?= Html::img($model->getThumbUploadUrl('title_img', \app\models\Good::BIG_IMG), ['class' => 'img-thumbnail']) ?>

        </div>

    </div>


    <?php ActiveForm::end(); ?>

</div>
