
<section class="MyManicontent">		
		
		
	
		<table class="table table-bordered" style="border: 2px;text-align: center;margin-top: 20px">
			<thead>
					<th width="100px">STT</th>
					<th width="200px">Tên sản phẩm</th>
					<th width="200px">Ảnh</th>
					<th width="300px">Số Lượng</th>
					<th width="150px">Giá</th>
					<th width="200px">Thành tiền</th>
					<th width="100px">Quản Lý</th>
				
			</thead>
				<?php 
					if (isset($_SESSION['cart'])) {
							$i = 0;
							$tongtien = 0;
							foreach ($_SESSION['cart'] as $cart_item) {
								$thanhtien = $cart_item['soluong'] * $cart_item['gia'];
								$tongtien += $thanhtien;
								$i++;
						?>
								<tr>
									<td><?php echo $i ?></td>
									<td><?php echo $cart_item['ten_sp'] ?></td>
									<td><img src="../img/<?php echo $cart_item['img_sp'];  ?>" width="150px"></td>
									<td>
										<a href="Them_gio_hang.php?cong=<?php echo $cart_item['id']?>"><i class="fa-solid fa-plus"></i></a>&nbsp;
										<?php echo $cart_item['soluong'] ?>
										&nbsp;<a href="Them_gio_hang.php?tru=<?php echo $cart_item['id']?>"><i class="fa-solid fa-minus"></i></a>
									</td>
									<td> <p style="color: red"><?php echo number_format($cart_item['gia'], 0, ',', '.') . 'đ'; ?></p></td>
									<td><?php echo number_format($thanhtien, 0, ',', '.') . 'đ' ?></td>
									<td><a href="Them_gio_hang.php?xoa=<?php echo $cart_item['id']?>">Xóa</a></td>
								</tr>
						<?php
							}
						?>
						<tbody >
						<td colspan="7" style="">
						<p style="margin-bottom: 0;float: left">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') . 'đ' ?></p>
						<p style="float: right;margin-bottom: 0;margin-right: 20px"><a href="Them_gio_hang.php?xoatatca=1">Xóa tất cả</a></p>

								</td>
							</tbody>
						<?php
					
						} else {
						?>
							<tbody>
								<td colspan="7"><p>Hiện tại giỏ hàng trống</p></td>
							</tbody>
						<?php
						}
						?>
			</table>
		
	</section>