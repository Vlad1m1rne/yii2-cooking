<?
use app\components\TableWidget;



?>

<div class="container text-center">
      <h3>Первые блюда</h3>
    </div>

    <div class="container text-center img">
      <img id='mainImg' class="mainImg img-fluid" src="/img/first.jpg">
      </div>
    <div class="container text-center">
      <button id="btn1" type="button" class="btn btn-success btnM">Добавить рецепт</button>
      <button id='btn3' type='button' class="btn btn-danger btnM">Удалить рецепт</button>
    </div>

    <div class="container text-center">
      <div class="delF" style="display: none">
        <h4>Удалить рецепт</h4>
        <form action="del.php" method="POST">
          <div class="mb-3">
            <label for="del1" class="form-label">Введите Id рецепта</label>
            <input id="del1" type="number" class="form-control" name="recipeId">
          </div>
          <input <? if(!$user){echo " disabled ";} ?> class="btn btn-danger btnM" type="submit" value="Удалить">
          <input class="btn btn-secondary btnM" type="reset" id="btn5" value="Отмена">
        </form>
      </div>
    </div>

    <div class="container text-center">

      <div class="updF" style="display: none">
        <h4>Изменить рецепт</h4>
        <form action="update.php" method="POST">
          <div class="mb-3">
            <input hidden class="inpUpd form-control" type="number" name="recipeId">
            <label for="in1" class="form-label">ID</label>
            <input id="in1" disabled class="inpUpd form-control" type="number" name="recipeId">
            <label for="in2" class="form-label">Название рецепта</label>
            <input id="in2" type="text" class="form-control" name="nameRecipe">
            <label for="ar1" class="form-label">Ингредиенты</label>
            <textarea id="ar1" rows="2" class="form-control" name="ingredient"></textarea>
            <label for="ar2" class="form-label">Описание</label>
            <textarea id="ar2" rows="3" class="form-control" name="recipeDescription"></textarea>

            <label for="ur" class="form-label">Ссылка на рецепт</label>
            <input id="ur" type="url" class="form-control" name="link">
          </div>
          <input <? if(!$user){echo " disabled ";} ?> class="btn btn-success btnM" type="submit" value="Отредактировать">
          <input class="btn btn-secondary btnM" type="reset" id="btn4" value="Отмена редактирования">
        </form>

      </div>
    </div>

    <div class="container text-center">
      <div class="add_form" style="display: none">
        <h4>Добавить рецепт</h4>
        <form action="add.php" method="POST">
          <div class="mb-3">
            <label for="sel" class="form-label">Категория</label>
            <select id="sel" class="form-select form-select-sm" name="categoryId">
              <option selected value="1">Первые блюда</option>
              <option value="2">Вторые блюда</option>
              <option value="3">Салаты</option>
              <option value="4">Выпечка</option>
              <option value="5">Другое</option>
            </select>
            <label for="inp1" class="form-label">Название рецепта</label>
            <input id="inp1" class="form-control" type="text" size="48" name="nameRecipe">
            <label for="area1" class="form-label">Ингридиенты</label>
            <textarea id="area1" class="form-control" rows="3" name="ingredient"></textarea>
            <label for="area2" class="form-label">Описание</label>
            <textarea id="area2" class="form-control" rows="5" name="recipeDescription"></textarea>
            <label for="inp2" class="form-label">Ссылка на рецепт</label>
            <input id="inp2" class="form-control" type="url" size="48" name="link">
          </div>
          <input <? if(!$user){echo " disabled ";} ?> class="btn btn-success btnM" type="submit" value="Сохранить рецепт">
          <input class="btn btn-secondary btnM" id="btn2" type="reset" value="Отмена">
        </form>

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
     
        <?= TableWidget::widget(['cat'=>'first']) ?>

      </table>

    </div>