<div class="special-box">
	<div class="sp-hot">
		<div class="title">
			<img class="spbc" src="public/images/site/sphot/spbc.png" alt="">
			<a class="xtc" href="" title="Xem tất cả"><img src="public/images/site/sphot/views-more-bg.png" alt=""></a>
		</div>
		<div style="clear: both;"></div>
		<div class="sp">
			<ul class="sp-ul">
				<?php 
					$mproduct= new product;
					$values='4';
					$data_product=$mproduct->echohot($values);
					foreach ($data_product as $item_product) {
						echo "<li class='sp-li'>";
						echo "<a href='index.php?uid=$item_product[product_id]' title='$item_product[product_name]'>";
						echo "<img class='sp-img' src='upload/product/$item_product[product_img]'>";
						echo "<span class='sp-name'>$item_product[product_name]</span>";
						echo "<span class='sp-price1'>".number_format($item_product['product_price'])." đ</span>";
						echo "<span class='sp-price2'>".number_format($item_product['product_price2'])." đ</span>";
						echo "</a>";
						echo "</li>";
					}
				 ?>
			</ul>
		</div>
	</div>
	<div class="video-news">
		<iframe width="300" height="273" src="https://www.youtube.com/embed/99DlqDCeuIw" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
<div style="clear: both;"></div>