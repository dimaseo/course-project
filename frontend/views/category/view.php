 <script src="/www/advanced/frontend/web/assets/455153c3/jquery.js"></script>
 <script type="text/javascript">
	// $(document).ready(function () {
	// 	var src = [];
	// 	$(".grid-view").find("a").each(function (){
	// 		src[] = $(this).attr('href');
	// 	});
	// 	$('.photo').html('');
	// 	$.each(src, function (key, value) {
	// 		$('.photo').append('<img src="'+value+'">');
	// 	});
	// })
</script>
 <?
 $this->title = 'Курси';
 $this->params['breadcrumbs'][] = $this->title;
foreach ($course as $k) : ?>



 <div class="panel panel-default panel-def">
	 <div class="title-course">
	 <div class="name_course"><h2><?=$k->name; ?></h2>
	 </div>

	 <div class="price_course">
	 <p>Ціна (грн.)</p>
	 <p><?=$k->price;  ?> </p> 
 	</div>
 </div>
	 <div class="description_course"><?=$k->descrip; ?></div>
	 
	
<!-- <div class="photo"><img src="/www/advanced/backend/web/img/constructor/tshirt/<?//=$k->photo; ?>" alt="">   ?></div> -->


 
	
	

 </div>



<?php 
endforeach; ?>
