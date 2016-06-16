<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $email frontend\models\SignupForm */
/* @var $password frontend\models\SignupForm */

?>
<div class="password-reset">
    <h1 style="text-align: center;">Доброго часу доби!</h1>
    <p>Щиро дякуємо Вам за реєстрацію на сайті: <?= Html::a(Html::encode(Yii::$app->urlManager->hostInfo), Yii::$app->urlManager->hostInfo) ?>!</p>
	
    <h2>
      	Ваш логін (телефон): <?=$phone?> </h2>
		 <h2>Ваш пароль: <?=$password?> </h2>
<br>
<h2>Приємного користування. З повагою Адміністрація сайту!</h2>
    
</div>
