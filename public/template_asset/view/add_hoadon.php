<?php
$loi="";
if (isset($_POST['ok'])) {
	$hoten=$diachi=$sdt=$email=$diachi=$noidung=$ghichu=$hinhthuctt=$hinhthucvc=$tinhtrang="";
	if ($_POST['txthoadon_hoten']==NULL) {
		# code...
		$loi[]="Khong de trong ho ten";
	} else{
		$hoten=$_POST['txthoadon_hoten'];
	}
	if ($_POST['txthoadon_sdt']==NULL) {
		# code...
		$loi[]="Khong de trong so dien thoai";
	} else{
		$sdt=$_POST['txthoadon_sdt'];
	}
	$email=$_POST['txthoadon_email'];
	$noidung=$_POST['txthoadon_noidung'];
	if ($_POST['txthoadon_diachi']==NULL) {
		# code...
		$loi[]="Khong de trong dia chi";
	} else{
		$diachi=$_POST['txthoadon_diachi'];
	}
	if ($_POST['txthoadon_ghichu']==NULL) {
		# code...
		$ghichu="";
	} else{
		$ghichu=$_POST['txthoadon_ghichu'];
	}
	if ($_POST['txthoadon_hinhthuctt']=="") {
		# code...
		$loi[]="Khong de trong hinh thuc thanh toan";
	} else{
		$hinhthuctt=$_POST['txthoadon_hinhthuctt'];
	}
	if ($_POST['txthoadon_hinhthucvc']=="") {
		# code...
		$loi[]="Khong de trong hinh thuc van chuyen";
	} else{
		$hinhthucvc=$_POST['txthoadon_hinhthucvc'];
	}
	$tinhtrang='Đang chờ';
		$mhoadon= new hoadon;
		$mhoadon->set_hd_hoten($hoten);
		$mhoadon->set_hd_sdt($sdt);
		$mhoadon->set_hd_email($email);
		$mhoadon->set_hd_diachi($diachi);
		$mhoadon->set_hd_noidung($noidung);
		$mhoadon->set_hd_ghichu($ghichu);
		$mhoadon->set_hd_hinhthuctt($hinhthuctt);
		$mhoadon->set_hd_hinhthucvc($hinhthucvc);
		$mhoadon->set_hd_tinhtrang($tinhtrang);
		$mhoadon->insert_hoadon();
		exit();
}
 ?>
<script>
function reset(){
	$s("txthoadon_hoten","");
	$s("txthoadon_sdt","");
	$s("txthoadon_email","");
	$s("txthoadon_diachi","");
	$s("txthoadon_noidung","");
	$s("txthoadon_ghichu","");
}
</script>
<script src="public/js/checktt.js"></script>
<form action="" method="post" name="thanhtoan">
	<table border="1px" style="margin-top: 40px;">
	<tr>
		<td>Họ tên quý khách (*)</td>
		<td><input type="text" name="txthoadon_hoten" size="48" ></td>
	</tr>
	<tr>
		<td>Số điện thoại (*)</td>
		<td><input type="text" name="txthoadon_sdt" size="48" ></td>
	</tr>
	<tr>
		<td>Địa chỉ Email</td>
		<td><input type="text" name="txthoadon_email" size="48" ></td>
	</tr>
	<tr>
		<td>NỘI DUNG (*)</td>
		<td><textarea name="txthoadon_noidung" rows="5" cols="50">
			<?php
				if ($ok==2) {
				 	print_r(array_combine($thuoctinh, $noidung));
				 } else{
				 	echo "Không có sản phẩm nào";
				 }
				
			 ?>
		</textarea></td>
	</tr>
	<tr>
		<td>Địa chỉ chuyển hàng đến (*)</td>
		<td><textarea name="txthoadon_diachi" rows="5" cols="50"></textarea></td>
	</tr>
	<tr>
		<td>Ghi chú(nếu cần)</td>
		<td><textarea name="txthoadon_ghichu" rows="3" cols="50"></textarea></td>
	</tr>
	<tr>
		<td>Hình thức thanh toán (*)</td>
		<td>
			<select name="txthoadon_hinhthuctt">
				<option value="" selected>--Chọn hình thức thanh toán--</option>
				<option value="Thanh toán trực tiếp">Thanh toán trực tiếp</option>
				<option value="Thanh toán tại nơi giao hàng">Thanh toán tại nơi giao hàng</option>
				<option value="Thanh toán bằng chuyển khoản">Thanh toán bằng chuyển khoản</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Hình thức vận chuyển (*)</td>
		<td>
			<select name="txthoadon_hinhthucvc">
				<option value="" selected>--Chọn hình thức vận chuyển--</option>
				<option value="Vận chuyển tính phí theo thỏa thuận">Vận chuyển tính phí theo thỏa thuận</option>
				<option value="Miễn phí trong nội thành Thái Nguyên">Miễn phí trong nội thành Thái Nguyên</option>
				<option value="Miễn phí trong 35 KM">Miễn phí trong 35 KM</option>
			</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" name="ok" value="ĐẶT HÀNG">
			<input type="reset" name="reset" value="NHẬP LẠI" onclick="reset()">
		</td>
	</tr>
	</table>
</form>