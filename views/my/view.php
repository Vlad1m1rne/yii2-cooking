<?

use yii\helpers\Html;
use yii\helpers\Url;
?>


<div class="container text-center">
  <? if (Yii::$app->session->hasFlash('updateOk')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= Yii::$app->session->getFlash('updateOk') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <? endif; ?>
</div>

<? $this->beginBlock('block1') ?>
<div class="container text-center">
  <h3>Рецепт: <?= $model->nameRecipe  ?></h3>
</div>
<? $this->endBlock() ?>

<? $this->beginBlock('block2') ?>
<div class="container text-center img">


  <? if ($model->categoryId == '1') : ?>
    <img id='mainImg' class="mainImg img-fluid" src="/img/first.jpg">
  <? endif; ?>
  <? if ($model->categoryId == '2') : ?>
    <img id='mainImg' class="mainImg img-fluid" src="/img/second.jpg">
  <? endif; ?>
  <? if ($model->categoryId == '3') : ?>
    <img id='mainImg' class="mainImg img-fluid" src="/img/salat.jpg">
  <? endif; ?>
  <? if ($model->categoryId == '4') : ?>
    <img id='mainImg' class="mainImg img-fluid" src="/img/cake.jpg">
  <? endif; ?>
  <? if ($model->categoryId == '5') : ?>
    <img id='mainImg' class="mainImg img-fluid" src="/img/other.jpg">
  <? endif; ?>
</div>
<? $this->endBlock() ?>

<div class="container text-center mt-4">
  <table class="mainT">
    <tr>
      <th>Ингредиенты</th>
      <th>Рецепт</th>
      <th>Ссылка</th>
      <th>Изменить</th>
    </tr>

    <tr>
      <td> <?= $model->ingredient ?> </td>
      <td><?= $model->recipeDescription ?></td>
      <td>
        <? if ($model->link != null) : ?>
          <?= Html::a('Ссылка', $model->link, ['target' => '_blank']) ?>
        <? else : ?>
          <?= $model->link ?>

        <? endif; ?>
      </td>
      <td><button class="btn btn-success btnM"><?= Html::a('Изменить', Url::toRoute(['my/update', 'id' => $model->recipeId])) ?></button></td>
    </tr>




  </table>

</div>