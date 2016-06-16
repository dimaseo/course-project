<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
$this->theme->pathMap["@app/views"] = '@app/themes/site';
?>
<!-- Main content -->
<section class="content">

    <div class="error-page">
        <h2 class="headline text-info"><i class="fa fa-warning text-yellow"></i></h2>

        <div class="error-content">
            <h3><?= $name ?></h3>

            <p>
                <?= nl2br(Html::encode($message)) ?>
            </p>

            <p>Сталася помилка при зверненні до веб-сервер, що обробляє Ваш запит.
Будь ласка, зв'яжіться з нами, якщо ви думаєте, що це помилка сервера. Спасибі.
Між тим, ви можете <a href='<?= Yii::$app->homeUrl ?>'>повернутися до головної панелі.</a>
            </p>

        </div>
    </div>

</section>
