<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Recipe $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="recipe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categoryId')->textInput() ?>

    <?= $form->field($model, 'nameRecipe')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ingredient')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'recipeDescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'link')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
