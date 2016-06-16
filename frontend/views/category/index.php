<?php 
 $this->title = 'Категорії';
 $this->params['breadcrumbs'][] = $this->title;
foreach ($category as $c) :

 ?>



 

 <div class="category-container">
 <div class="category-title">
 <a href="category/view/<?= $c->id ?>" class="">
 
 <h2 class=""><?=$c->title; ?></h2>
 </div>
 </a>
 
<div class="category-content">
 <?=$c->content; ?>
 </div>
</div>
 

<?php 
endforeach; ?>