<div class="header">
	<div class="header1">
		<ul class="ulh1">
		<?php
			
			echo "<li class='lih1'>";
			echo "<a class='ah1' href='index.php?gh=giohang'>";
			$ok=1;
			 if(isset($_SESSION['cart']))
			 {
			  foreach($_SESSION['cart'] as $k=>$v)
			  {
			   if(isset($k))
			   {
			   $ok=2;
			   }
			  }
			 }
			 if ($ok != 2)
			  {
			  echo '(0)';
			 } else {
			  $items = $_SESSION['cart'];
			  echo '('.count($items).')';
			 }
		?>
			GIỎ HÀNG CỦA BẠN</a></li>
		</ul>
	</div>
	<div class="header2">
		<a href="index.php"><img src="public/images/logo/ngotai.png" alt=""></a>
		<form action="" class="search" method="GET">
			<input class="txt-search" type="text" name="search" size="30" placeholder="Nhập tên hoặc mã sản phẩm">
			<input type="submit" class="ok" value="Tìm kiếm">
		</form>
		
		<ul class="header-right">
			<li><a href="index.php?tintuc=tai-tai" target="_blank"><img src="public/images/site/header/btn-doitra30.png" alt=""></a></li>
			<li><a href="" target="_blank"><img src="public/images/site/header/btn-mienphivanchuyen.png" alt=""></a></li>
			<li><a href="" target="_blank"><img src="public/images/site/header/btn-tragop0lai.png" alt=""></a></li>
			<li><img src="public/images/site/header/btn-tuvan.png" alt=""></li>
		</ul>
	</div>
</div>
<div style="clear: both;"></div>