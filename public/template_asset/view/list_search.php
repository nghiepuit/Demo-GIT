<?php 
			isset($_POST['btn-search']){
				if ($_POST['txt-search']== NULL) {
					echo "Nhập tên hoặc mã";
				} else{
					$txt=$_POST['txt-search']
				}
				$search = new product;
				$data=$search->search($txt);
				if ($data==0) {
					echo "Không có kết quả nào.";
				} else {
					foreach ($data as $item) {
						echo "$item[product_name]";
					}
				}
			}
		 ?>