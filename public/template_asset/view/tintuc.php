<?php 
	$link=$_GET['tintuc'];
	$mtintuc= new tintuc;
	$data=$mtintuc->echo_tintuc($link);
	echo "<div class='tintuc'>";
	echo "<div class='tieude'><h1>$data[tintuc_ten]</h1></div>";
	echo "<div class='noidung'>$data[tintuc_noidung]</div>";
	echo "</div>";
 ?>