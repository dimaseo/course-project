<?php
/* @var $this yii\web\View */
$this->title = 'Навчальні курси ХПК'; ?>






<!-- 2. Add images to <div class="fotorama"></div>. -->
<div class="fotorama">
<img src="http://blog/frontend/web/images/1.jpg">
  <img src="http://blog/frontend/web/images/2.jpg">
  <img src="http://blog/frontend/web/images/3.jpg">
  <img src="http://blog/frontend/web/images/4.jpg">
                   <?php/*
 foreach ($slid as $s){




 ?> 
  <img src="http://blog/backend/web/<?=$s->img;?>" style="width: 1024px; height: 240px;">

  <?php };
// endforeach;*/ ?>
</div>







        
            



<?php

foreach ($site as $g){




 ?>


<!-- <img src="/backend/web<?//=$g->img; ?>"> -->

 




 
 <h2 style="text-align: center;"><?=$g->title; ?></h2>
 

 
<div class="category-content">
 <?=$g->description; ?>
 </div>


 

<?php };
// endforeach; ?>