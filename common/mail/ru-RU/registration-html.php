<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $email frontend\models\SignupForm */
/* @var $password frontend\models\SignupForm */

?>
<div class="password-reset">
    <h2 style="text-align: center;">Доброго часу доби!</h2>
    <p style="font-size: 16px;">Щиро дякуємо Вам за реєстрацію на сайті: <?= Html::a(Html::encode(Yii::$app->urlManager->hostInfo), Yii::$app->urlManager->hostInfo) ?>!</p>
	
    <h3>
      	Ваш логін (телефон): <?=$phone?> </h3>
		 <h3>Ваш пароль: <?=$password?> </h3>
<h2>Приємного користування. З повагою Адміністрація сайту!</h2>
    
</div>

