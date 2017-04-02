<?php
	$mcate=new cate;
	$mloai=new loai;
	$mproduct= new product;
	if (isset($_GET['loai']) || isset($_GET['cate']) || isset($_GET['nsx']) || isset($_GET['search'])) {
		if (isset($_GET['cate'])) {
			$cate=$_GET['cate'];
			$data=$mproduct->filter_cate($cate);
		}
		if (isset($_GET['loai'])) {
			$loai=$_GET['loai'];
			$data=$mproduct->filter_loai($loai);
		}
		if (isset($_GET['nsx'])) {
			$nsx=$_GET['nsx'];
			$data=$mproduct->filter_nsx($nsx);
		}
		if (isset($_GET['search'])) {
			$search=$_GET['search'];
			$data=$mproduct->search($search);
		}
		if (isset($_GET['cate']) && isset($_GET['loai'])) {
	      $cate=$_GET['cate'];
	      $loai=$_GET['loai'];
	      $data=$mproduct->filter_cateloai($cate,$loai);
	    }
	    if (isset($_GET['loai']) && isset($_GET['nsx'])) {
	      $loai=$_GET['loai'];
	      $nsx=$_GET['nsx'];
	      $data=$mproduct->filter_loainsx($loai,$nsx);
	    }
	    if (isset($_GET['cate']) && isset($_GET['nsx'])) {
	      $cate=$_GET['cate'];
	      $nsx=$_GET['nsx'];
	      $data=$mproduct->filter_catensx($cate,$nsx);
	    }
	    if (isset($_GET['cate']) && isset($_GET['loai']) && isset($_GET['nsx'])) {
	      $cate=$_GET['cate'];
	      $loai=$_GET['loai'];
	      $nsx=$_GET['nsx'];
	      $data=$mproduct->filter_cln($cate,$loai,$nsx);
	    }
	    echo "<div class='product'>";
		echo "<div class='pro-title'>";
			echo "<div class='title-name'>";
				if (isset($_GET['cate'])) {
					echo "<img class='logo-pro-title' src='public/images/site/pro/cd.png' alt='".$cate."'>";
					echo "<h3>$cate</h3>";
				}
				else if (isset($_GET['loai'])) {
					echo "<img class='logo-pro-title' src='public/images/site/pro/cd.png' alt='".$loai."'>";
					echo "<h3>$loai</h3>";
				}
				else if (isset($_GET['nsx'])) {
					echo "<img class='logo-pro-title' src='public/images/site/pro/cd.png' alt='".$nsx."'>";
					echo "<h3>$nsx</h3>";
				} else {
					echo "<h3>KẾT QUẢ TỪ KHÓA: $search</h3>";
				}
			echo "</div>";
			if (isset($_GET['cate'])) {
				echo "<div class='sub-title'>";
					echo "<div class='sub-title-ul'>";
						$data_loai=$mloai->filter_cate($_GET['cate']);
						foreach ($data_loai as $item_loai) {
							echo "<div class='sub-title-li'><a href='index.php?cate=$item_loai[product_cate]&loai=$item_loai[product_loai]'>$item_loai[product_loai]  | </a></div>";
						}
					echo "</div>";
				echo "</div>";
			}
			
		echo "</div>";
		
		echo "<div class='pro'>";
			echo "<div class='pros'>";
				echo "<ul class='pro-ul'>";
					foreach ($data as $item_product) {
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
				echo "</div>";
			echo "</div>";
			if (isset($_GET['cate'])) {
				echo "<div class='pro-banner'><img src='upload/baner/".$cate."2.png'></div>";
			}
		echo "</div>";
		}
 ?>
 <div style="clear: both;"></div>