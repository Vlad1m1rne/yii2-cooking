<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error container text-center">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Ошибка.
    </p>
    <? if ($exception->statusCode === 404) : ?>
        <p>Проверьте строку запроса.</p>
    <?else:?><p> Пожалуйста, свяжитесь с нами, если это ошибка #500.</p>
    <? endif; ?>

  </div>