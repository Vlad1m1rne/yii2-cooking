<?
use app\components\TableWidget;
?>

<? $this->beginBlock('block1') ?>
<div class="container text-center">
  <h3>Результаты поиска</h3>
</div>
<? $this->endBlock() ?>

<? $this->beginBlock('block2') ?>
<div class="container text-center img">
  <img id='mainImg' class="mainImg img-fluid" src="/img/other.jpg">
</div>
<? $this->endBlock() ?>

<div class="container text-center tabl">
      <table class="mainT">
      <?= TableWidget::widget(['cat'=>'search','searchVal'=>$_GET['searchVal']]) ?>
        <thead>
          <tr>
            <th>Id</th>
            <th>Категория</th>
            <th>Название</th>
            <th>Ингредиенты</th>
            <th>Рецепт</th>
            <th>Ссылка</th>
            <th>Дата добавления</th>
         
          </tr>
        </thead>
     
      </table>

    </div>
