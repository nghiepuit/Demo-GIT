<?php 
	$mcate= new cate;
	$mproduct= new product;
	$mloai= new loai;
	$data_cate=$mcate->listall();
	foreach ($data_cate as $item_cate) {
		echo "<div class='product'>";
			echo "<div class='pro-title'>";
				echo "<div class='title-name'>";
					echo "<img class='logo-pro-title' src='public/images/site/pro/cd.png' alt='$item_cate[product_cate]'>";
					echo "<a href='index.php?cate=$item_cate[product_cate]'>$item_cate[product_cate]</a>";
				echo "</div>";
				echo "<div class='sub-title'>";
					echo "<div class='sub-title-ul'>";
						$data_loai=$mloai->filter_cate($item_cate['product_cate']);
						foreach ($data_loai as $item_loai) {
							echo "<div class='sub-title-li'><a href='index.php?cate=$item_loai[product_cate]&loai=$item_loai[product_loai]' target='_blank'>$item_loai[product_loai]  | </a></div>";
						}
					echo "</div>";
				echo "</div>";
			echo "</div>";
			echo "<img src='upload/baner/$item_cate[product_cate].png'>";
			echo "<div class='pro'>";
				echo "<div class='pros'>";
					echo "<ul class='pro-ul'>";
						$data_product=$mproduct->filter_cate_limit12($item_cate['product_cate']);
						foreach ($data_product as $item_product) {
							echo "<li class='pro-li'>";
								echo "<a class='pro-a' href='index.php?uid=$item_product[product_id]' target'_blank' title='$item_product[product_name]'>";
									echo "<img class='pro-img' src='upload/product/$item_product[product_img]' alt='$item_product[product_name]'>";
									echo "<img class='sale-value-img' src='public/images/site/pro/sale-img.png' alt=''>";
									echo "<span class='sale-value-txt'>$item_product[product_salevalue]%</span>";
									echo "<span class='pro-price1'>".number_format($item_product['product_price'])."</span>";
									echo "<span class='pro-price2'>".number_format($item_product['product_price2'])."</span>";
									echo "<span class='pro-name' title=''>$item_product[product_name]</span>";
									echo "<span class='pro-info' title=''>$item_product[product_info]</span>";
									echo "<span class='pro-sale-info' title=''>$item_product[product_saleinfo]</span>";
								echo "</a>";
							echo "</li>";
						}
					echo "</ul>";
				echo "</div>";
				echo "<div class='pro-banner'><img src='upload/baner/$item_cate[product_cate]2.png'></div>";
			echo "</div>";
		echo "</div>";
	}
 ?>

<div style="clear: both;"></div>