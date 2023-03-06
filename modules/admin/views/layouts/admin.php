<?

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Html;


AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Админка | <?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>


<body>
  <?php $this->beginBody() ?>

  <header>

   
    </div>

   

    <div class="container ">
      <h1 class="text-center text-white">Приятного аппетита!</h1>


      <div class="row row-header">


        <div class="col text-center">
          <button id='all' class="btn btn-outline-success btn-lg"><?= Html::a('Главная', ['/my/index']) ?></button>
        </div>


        <div class="col text-center">
          <button id='first' class="btn btn-outline-success btn-lg"><?= Html::a('Первые блюда', ['/my/first']) ?></button>
        </div>

        <div class="col text-center">
          <button id='second' class="btn btn-outline-success btn-lg"><?= Html::a('Вторые блюда', ['/my/second']) ?></button>
        </div>
        <div class="col text-center">
          <button id='salat' class="btn btn-outline-success btn-lg"><?= Html::a('Салаты', ['/my/salat']) ?></button>
        </div>
        <div class="col text-center">
          <button id='cake' class="btn btn-outline-success btn-lg"><?= Html::a('Выпечка', ['/my/cake']) ?></button>
        </div>
        <div class="col text-center">
          <button id='other' class="btn btn-outline-success btn-lg"><?= Html::a('Другое', ['/my/other']) ?></button>
        </div>
        <div class="col text-center">
          <button id="login" class="btn btn-outline-success btn-lg btnlog">Авторизация</button>
        </div>
        <div id="log" class="col text-center" style="display:none">
          <form action="login.php" method="POST">
            <input type="text" class="form-control" name="userName" placeholder="login">
            <input type="password" class="form-control" name="userPassword" placeholder="password">
            <input type="submit" class="btn btn-success btn-sm" value="Войти">
            <input id="otmena" type="button" class="btn btn-secondary btn-sm" value="Отмена">
          </form>
        </div>
      </div>
    </div>
  </header>

  <main>



    <?= $content ?>



  </main>

  <footer>
    <div class="container text-center">
      <img class='dn' src="/img/night.png" alt="Day/Night">
    </div>
  </footer>
  <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>