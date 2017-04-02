<div class="wrap">
	<div class="navi">
		<ul>
			<li>
				<a href="">
					<span class="s-lv1">TRANG CHỦ</span>
				</a>
			</li>
			<?php 
				$mproduct= new product;
				$data_product=$mproduct->echo_product($_GET['uid']);
					echo "<li>";
					echo "<a href='index.php?cate=$data_product[product_cate]'>";
					echo "<span class='s-lv2'>$data_product[product_cate]</span>";
					echo "</a>";
					echo "</li>";

					echo "<li>";
					echo "<a href='index.php?loai=$data_product[product_loai]'>";
					echo "<span class='s-lv3'>$data_product[product_loai]</span>";
					echo "</a>";
					echo "</li>";

					echo "<li>";
					echo "<a href='index.php?nsx=$data_product[product_nsx]'>";
					echo "<span>$data_product[product_nsx]</span>";
					echo "</a>";
					echo "</li>";
			 ?>
		</ul>
	</div>
	<div class="main">
		<div class="w-left">
			<div class="img">
				<?php 
					$mproduct= new product;
					$data_product=$mproduct->echo_product($_GET['uid']);
					echo "<img src='upload/product/$data_product[product_img]' alt='$data_product[product_name]'>";
				?>
			</div>
			<ul class="price">
			<?php 
				echo $data_product['product_price'];
				echo (addcslashes('freetuts.net FREETUTS.NET', 'a..z'));
				if ($data_product['product_price']==1) {
					echo "<li><img src='public/images/site/wrap/1x42.png' alt=''></li>";
				}
				if ($data_product['product_price']==2) {
					echo "<li><img src='public/images/site/wrap/2x42.png' alt=''></li>";
				}
				if ($data_product['product_price']==3) {
					echo "<li><img src='public/images/site/wrap/3x42.png' alt=''></li>";
				}
			 ?>
				<!-- <li><a href=""><img src="public/images/site/wrap/0x42.png" alt=""></a></li> -->
			</ul>
			<?php 
				echo "<a href='index.php?item=$data_product[product_id]'>";
				echo "<img class='cart-btn' src='public/images/site/wrap/add-to-cart.png'>";
				echo "</a>";
			 ?>
		</div>
		<div class="w-right">
			<div class="gt">
				<div class="pro-detail">
					<?php 
						$mproduct= new product;
						$data_product=$mproduct->echo_product($_GET['uid']);
						echo "<h1>$data_product[product_name]</h1>";
						echo "<div class='p-pro'>";
						echo "<span>Mã hàng: $data_product[product_model]</span>";
						echo "<span>|</span>";
						echo "<span class='tinhtrang'>$data_product[product_status]</span>";
						echo "</div>";
					echo "<div class='p-spec'>";
						echo "<p>$data_product[product_info]</p>";
					echo "</div>";
					?>
					<div class="boder-line"></div>
					<ul class="p-program">
						<li>
							<a href="" title="">
								<img src="public/images/site/wrap/program-1.png" alt="" class="img-program">
								<span class="sp-program">Đổi mới trong 30 ngày nếu sản phẩm lỗi do nhà sản xuất, cửa hàng.</span>
							</a>
						</li>
						<li>
							<a href="" title="">
								<img src="public/images/site/wrap/program-3.png" alt="" class="img-program">
								<span class="sp-program">Miễn phí vận chuyển cho khách hàng doanh nghiệp, dịch vụ net trong bán kính 200km từ công ty</span>
							</a>
						</li>
						<li>
							<a href="" title="">
								<img src="public/images/site/wrap/program-6.png" alt="" class="img-program">
								<span class="sp-program">Hộ trợ trả góp với lãi xuất cực thấp, thủ tục đơn giản nhanh chóng</span>
							</a>
						</li>
						<li>
							<a href="" title="">
								<img src="public/images/site/wrap/program-7.png" alt="" class="img-program">
								<span class="sp-program">Hàng tuần có tổ chức Gameshow trúng thẻ cào, và hàng nghìn phần quà khác đang chờ đón bạn</span>
							</a>
						</li>
					</ul>
					<div class="boder-line"></div>
				</div>
				<div class="pro-price"></div>
			</div>
			
			<div style="clear: both;"></div>

			<div class="tags">
				<h3>TAGS: </h3>
				<?php 
					echo "<p>$data_product[product_tag]</p>";
				 ?>
			</div>
			<div style="clear: both;"></div>

			<div class="same">
				<h4>
					<span>CÓ THỂ BẠN THÍCH SẢN PHẦM NÀY</span>
				</h4>
				<ul class="same-ul">
				<?php 
					$values='5';
					$may_product=$mproduct->echohot($values);
					foreach ($may_product as $item) {
						echo "<li class='same-li'>";
						echo "<a href='index.php?uid=$item[product_id]' class='same-img'>";
						echo "<img src='upload/product/$item[product_img]' alt='$item[product_name]'>";
						echo "</a>";
						echo "<p class='same-name'>$item[product_name]</p>";
						echo "<p class='same-price'>$item[product_price]</p>";

					}
				 ?>
				</ul>
			</div>
			<div style="clear: both;"></div>

<!-- 			<div class="splq">
	<h4>
		<span>SẢN PHẨM LIÊN QUAN</span>
	</h4>
	<ul class="splq-ul">
		<li class="splq-li">
			<a href="" target="_blank">
				<a href="" class="splq-img">
					<img src="public/images/site/wrap/sp-img2.jpg" alt="">
				</a>
				<p class="splq-name">APPLE IPHONE 6</p>
				<p class="splq-price">9 999 000</p>
			</a>
		</li>
		<li class="splq-li">
			<a href="" target="_blank">
				<a href="" class="splq-img">
					<img src="public/images/site/wrap/sp-img2.jpg" alt="">
				</a>
				<p class="splq-name">APPLE IPAD MINI</p>
				<p class="splq-price">9 999 000</p>
			</a>
		</li>
		<li class="splq-li">
			<a href="" target="_blank">
				<a href="" class="splq-img">
					<img src="public/images/site/wrap/sp-img2.jpg" alt="">
				</a>
				<p class="splq-name">APPLE IPAD MINI</p>
				<p class="splq-price">9 999 000</p>
			</a>
		</li>
		<li class="splq-li">
			<a href="" target="_blank">
				<a href="" class="splq-img">
					<img src="public/images/site/wrap/sp-img2.jpg" alt="">
				</a>
				<p class="splq-name">APPLE IPAD MINI</p>
				<p class="splq-price">9 999 000</p>
			</a>
		</li>
		<li class="splq-li">
			<a href="" target="_blank">
				<a href="" class="splq-img">
					<img src="public/images/site/wrap/sp-img2.jpg" alt="">
				</a>
				<p class="splq-name">APPLE IPAD MINI</p>
				<p class="splq-price">9 999 000</p>
			</a>
		</li>
	</ul>
</div> -->
			<div style="clear: both;"></div>
			
			<div class="spch">
				<h4>
					<span>SẢN PHẨM CÙNG HÃNG</span>
				</h4>
				<ul class="spch-ul">
				<?php 
					$same_product=$mproduct->filter_nsx($data_product['product_nsx']);
					foreach ($same_product as $item) {
						echo "<li class='spch-li'>";
						echo "<a href='index.php?uid=$item[product_id]'>";
							echo "<a href='index.php?uid=$item[product_id]' class='spch-img'>";
								echo "<img src='upload/product/$item[product_img]' alt='$item[product_name]'>";
							echo "</a>";
						echo "<p class='spch-name'>$item[product_name]</p>";
						echo "<p class='spch-price'>$item[product_price]</p>";
						echo "</a>";
						echo "</li>";
					}
				 ?>
					</ul>
			</div>

		</div>
	</div>
</div>

<div style="clear: both;"></div>