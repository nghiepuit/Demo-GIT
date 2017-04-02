<div class="gh">
	<?php
		if(isset($_POST['submit'])){
			foreach($_POST['qty'] as $key=>$value){
			  	if( ($value == 0) and (is_numeric($value))){
			   		unset ($_SESSION['cart'][$key]);
			  	}	elseif(($value > 0) and (is_numeric($value))){
			   		$_SESSION['cart'][$key]=$value;
			  	}
			}
		}

		$ok=1;
		if(isset($_SESSION['cart']))
		{
			foreach($_SESSION['cart'] as $k => $v)
			{
				if(isset($k))
				{
					$ok=2;
				}
			}
		}
		if($ok == 2)
		{
			echo "<form method='POST'>";
			echo "<table border='1px'>";
			echo "<tr style='font-weight:bold; text-align: center; font-size:28px;'>";
			echo "<td colspan='6'>GIỎ HÀNG</td>";
			echo "</tr>";
			echo "<tr style='font-weight:bold;'>";
			echo "<td>STT</td>";
			echo "<td>TÊN HÀNG HÓA</td>";
			echo "<td>GIÁ TIỀN</td>";
			echo "<td>SỐ LƯỢNG</td>";
			echo "<td colspan='2'>THÀNH TIỀN</td>";
			echo "</tr>";
			$stt=0;
			foreach($_SESSION['cart'] as $key=>$value){
				$item[]=$key;
			}
			$str=implode(",",$item);
			$connect=mysql_connect("localhost","root","") or die("Can not connect database");
			mysql_select_db("taitai",$connect);
			$sql="select * from products where product_id in ($str)";
			$query=mysql_query($sql);
			while($row=mysql_fetch_array($query)){
				$stt++;
				$thanht=$row['product_price']*$_SESSION['cart'][$row['product_id']];
				echo "<tr>";
				echo "<td>$stt</td>";
				echo "<td>$row[product_name]</td>";
				echo "<td>".number_format($row['product_price'])."</td>";
				echo "<td><input type='text' name='qty[$row[product_id]]'value='{$_SESSION['cart'][$row["product_id"]]}' size='3'></td>";
				echo "<td colspan='2' style='font-weight: bold;'>".number_format($thanht)."</td>";
				echo "</tr>";
				$total += $thanht;
				$noidung = array($row['product_name'], $_SESSION['cart'][$row['product_id']], $thanht);
			}
			$thuoctinh = array('ten','soluong','thanht' );
			echo "<tr>";
			echo "<td colspan='4' style='font-weight:bold;'>TỔNG TIỀN (ĐÃ BAO GỒM THUẾ GTGT)</td>";
			echo "<td colspan='2' style='color: #f00; font-weight: bold; font-size: 20px;'>".number_format($total)."</td>";
			echo "<td></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td colspan='4'></td>";
			echo "<td colspan='2'><input type='submit' name='submit' value='CẬP NHẬT'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan='6'>(*) Để xóa mặt hàng nhập giá trị 0 vào ô số lượng</td>";
			echo "</tr>";
			echo "</table>";
			echo "</form>";
		} else{
			echo "<form>";
			echo "<table>";
			echo "<tr>";
			echo "<td>Không có mặt hàng nào</td>";
			echo "</tr>";
			echo "</table>";
			echo "</form>";
		}
	require 'add_hoadon.php';
	?>	
</div>
