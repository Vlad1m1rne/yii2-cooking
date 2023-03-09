<?

use app\components\TableWidget;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<?
if (!isset($cookies['page'])) {
  $page = $cookies['page'] = 'all';
} ?>

<? $this->beginBlock('block1') ?>
<div class="container text-center">
  <h3>Все рецепты</h3>
</div>
<? $this->endBlock() ?>

<? $this->beginBlock('block2') ?>
<div class="container text-center img">
  <img id='mainImg' class="mainImg img-fluid" src="/img/all.jpg">
</div>
<? $this->endBlock() ?>

<div class="container text-center">
  <button id="btn1" type="button" class="btn btn-success btnM">Добавить рецепт</button>
  <button id='btn3' type='button' class="btn btn-danger btnM">Удалить рецепт</button>
  <button id='btn6' type='button' class='btn btn-info btnM'>Поиск</button>
</div>

<div class="container text-center">
  <div class="searchF" style='display: none'>
    <h4>Найти в:</h4>
    <form action=<?= Url::to(['my/search']) ?> method='GET'>
    <input class='radio' type="radio" name='searchField' value='nameRecipe' checked> Названиях<br>
    <input class='radio' type="radio" name='searchField' value='recipeDescription'> Рецептах<br>
      <input type="text" id='searchInp' name='searchVal' required="required">
      <input type="submit" class="btn btn-success btnM" value="Найти">
      <input id="btn7" type="reset" class="btn btn-secondary btnM" value="Отмена">
    </form>
  </div>

</div>

<div class="container text-center">
  <div class="delF" style="display: none">
    <h4>Удалить рецепт</h4>

    <? $form = ActiveForm::begin(['options' => ['id' => 'test-form']]) ?>
    <?= $form->field($model, 'recipeId')->label('Введите Id рецепта') ?>
    <? if (!Yii::$app->user->isGuest) : ?>
        <?= Html::submitButton('Удалить', ['class' => 'btn btn-danger btnM']) ?>
        <?endif;?>
        <? if (Yii::$app->user->isGuest) : ?>
<button class="btn btn-danger btnM" disabled>Авторизуйтесь!</button>
  <?endif;?>
    <?= Html::resetButton('Отмена', ['class' => 'btn btn-secondary btnM', 'id' => 'btn5']) ?>



  <? ActiveForm::end() ?>
  </div>
</div>

<div class="container text-center">

  <div class="updF" style="display: none">
    <h4>Изменить рецепт</h4>
    <? $form = ActiveForm::begin(['options' => ['id' => 'upd-form']]) ?>
    <?= $form->field($model, 'recipeId')->label('ID')->input('text', ['class' => 'inpUpd', 'readonly' => '']) ?>
    <?= $form->field($model, 'categoryId')->label('Категория')->dropDownList([1 => 'Первые блюда', 2 => 'Вторые блюда', 3 => 'Салаты', 4 => 'Выпечка', 5 => 'Другое']) ?>
    <?= $form->field($model, 'nameRecipe')->label('Название рецепта')  ?>
    <?= $form->field($model, 'ingredient')->label('Ингридиенты') ?>
    <?= $form->field($model, 'recipeDescription')->label('Рецепт')->textArea(['rows' => 4]) ?>
    <?= $form->field($model, 'link')->label('Ссылка на рецепт') ?>
    <? if (!Yii::$app->user->isGuest) : ?>
    <?= Html::submitButton('Изменить рецепт', ['class' => 'btn btn-success btnM']) ?>
<?endif;?>
<? if (Yii::$app->user->isGuest) : ?>
<button class='btn btn-success btnM' disabled>Авторизуйтесь!</button>
  <?endif;?>
    <?= Html::resetButton('Отмена', ['class' => 'btn btn-secondary btnM', 'id' => 'btn4']) ?>
    <? ActiveForm::end() ?>

  </div>
</div>

<div class="container text-center">
  <div class="add_form" style="display: none">
    <h4>Добавить рецепт</h4>
    <? $form = ActiveForm::begin(['options' => ['id' => 'add-form']]) ?>
    <?= $form->field($model, 'categoryId')->label('Категория')->dropDownList([1 => 'Первые блюда', 2 => 'Вторые блюда', 3 => 'Салаты', 4 => 'Выпечка', 5 => 'Другое']) ?>
    <?= $form->field($model, 'nameRecipe')->label('Название рецепта') ?>
    <?= $form->field($model, 'ingredient')->label('Ингридиенты') ?>
    <?= $form->field($model, 'recipeDescription')->label('Рецепт')->textArea(['rows' => 4]) ?>
    <?= $form->field($model, 'link')->label('Ссылка на рецепт') ?>

    <? if (!Yii::$app->user->isGuest) : ?>
    <?= Html::submitButton('Сохранить рецепт', ['class' => 'btn btn-success btnM']) ?>
    <?endif;?>
    <? if (Yii::$app->user->isGuest) : ?>    
    <button class="btn btn-success btnM" disabled>Авторизуйтесь!</button>
      <?endif;?>
    <?= Html::resetButton('Отмена', ['class' => 'btn btn-secondary btnM', 'id' => 'btn2']) ?>
    <? ActiveForm::end() ?>
  </div>
</div>

<div class="container text-center tabl">
  <table class="mainT">
    <thead>
      <tr>
        <th>Id</th>
        <th>Категория</th>
        <th>Название</th>
        <th>Ингредиенты</th>
        <th>Рецепт</th>
        <th>Ссылка</th>
        <th>Дата добавления</th>
        <th>Изменить</th>
      </tr>
    </thead>

    <?= TableWidget::widget(['cat' => 'all']) ?>
  </table>

</div>