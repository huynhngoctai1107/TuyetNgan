 <div class="chua" style="margin: 200px auto; width: 70%;">
 <div class="breadcrumbs">
 			<ol class="breadcrumb">
 				<li><a href="#">Home</a></li>
 				<li class="active">Giỏ Hàng</li>
 			</ol>
 		</div>
 	<table class="table">
 		<thead>
 			<tr style="background-color: #FE980F; color:white ;">
 				<th>ID</th>
 				<th>Tên</th>
 				<th>Hình ảnh</th>
 				<th>Giá</th>
 				<th>Số lượng</th>
 				<th>Tổng tiền</th>
 				<th width="15%"></th>
 			</tr>
 		</thead>
 		<tbody>

 			<?php
            	include_once("./dao/pdo.php");

				$cookie_data = $_COOKIE['cart'];
				$cart_data = json_decode($cookie_data, true);

				$tongtatca = 0;
				// var_dump($cart_data);
				foreach ($cart_data as $sp) :
					$tongtien = $sp['don_gia'] * $sp['soluong'];
					$tongtatca += $tongtien;
				?>
 				<tr style="background-color: white;">
 					<td scope="row"><?= $sp['ma_hh'] ?></td>
					 <td><?= $sp['ten_hh'] ?></td>
 					<td><img src="./images/<?= $sp['hinh'] ?>" width="100" alt=""></td>
 					
 					<td> <?= number_format($sp['don_gia']) ?> đ</td>
 					<td width="200px">
 						<!-- cập nhật số lượng sản phẩm  -->

 						<form action="./dao/giohang_xuli.php" method="post">
 							<input type="number" name="soluong" value="<?= $sp['soluong'] ?>" onchange="this.form.submit()" class="form-control" min=1>
 							<input type="hidden" name="ma_hh" value="<?= $sp['ma_hh'] ?>">
 							<input type="hidden" name="ten_hh" value="<?= $sp['ten_hh'] ?>">
 							<input type="hidden" name="don_gia" value="<?= $sp['don_gia'] ?>">
 							<input type="hidden" name="hinh" value="<?= $sp['hinh'] ?>">
 							<input type="hidden" name="sua">

 						</form>

 					</td>
 					<td style="color: #FE980F;"> <?= number_format($tongtien) ?> đ</td>
 					<td class="text-right">
 						<!-- xóa sản phẩm trong giỏ hàng  -->
 						<form action="./dao/giohang_xuli.php" method="post">

 							<input type="hidden" name="ma_hh" id="" value="<?= $sp['ma_hh'] ?>">
 							<button class="btn btn-outline-danger" name="xoa">Xóa</button>
 						</form>
 					</td>
 				</tr>
 			<?php
				endforeach;
				?>

 			<tr style="background-color: #FE980F ; color: white;">
				<td></td>
 				<td colspan="4">Tổng tiền tất cả</td>
 				<td>
 					<b><?= number_format($tongtatca) ?> đ</b>
 				</td>
 				<td></td>
 			</tr>
 			<tr style="background-color: whitesmoke;">
 				<td colspan="5" >
 					<a href="./thanhtoan.php" class="btn btn-outline-dark">Thanh toán</a>
 				</td>
				<td></td>
 				<td class="text-right">
 					<!-- xóa giỏ hàng  -->
 				 
 				</td>
 			</tr>

 		</tbody>
 	</table>


 </div>


 </div>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>

 </html>
 <?php ob_end_flush(); ?>






















 