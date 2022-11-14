 <div class="chua" style="margin: 200px auto; width: 70%;">
 	<h1 style="text-align: center; margin-bottom: 50px;">Giỏ hàng</h1>
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
				$mysqli = new mysqli("localhost", "root", "", "du_an_mau");

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

 						<form action="./playout/main/giohang/giohang_xuli.php" method="post">
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
 						<form action="./playout/main/giohang/giohang_xuli.php" method="post">

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
























 <section id="cart_items">
 	<div class="container">
 		<div class="breadcrumbs">
 			<ol class="breadcrumb">
 				<li><a href="#">Home</a></li>
 				<li class="active">Shopping Cart</li>
 			</ol>
 		</div>
 		<div class="table-responsive cart_info">
 			<table class="table table-condensed">
 				<thead>
 					<tr class="cart_menu">
 						<td class="image">ID</td>

 						<td class="price">Price</td>
 						<td class="quantity">Quantity</td>
 						<td class="total">Total</td>
 						<td></td>
 					</tr>
 				</thead>
 				<tbody>
 					<tr>
 						<td class="cart_product">
 							<a href=""><img src="images/cart/one.png" alt=""></a>
 						</td>
 						<td class="cart_description">
 							<h4><a href="">Colorblock Scuba</a></h4>
 							<p>Web ID: 1089772</p>
 						</td>
 						<td class="cart_price">
 							<p>$59</p>
 						</td>
 						<td class="cart_quantity">
 							<div class="cart_quantity_button">
 								<a class="cart_quantity_up" href=""> + </a>
 								<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
 								<a class="cart_quantity_down" href=""> - </a>
 							</div>
 						</td>
 						<td class="cart_total">
 							<p class="cart_total_price">$59</p>
 						</td>
 						<td class="cart_delete">
 							<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
 						</td>
 					</tr>

 					<tr>
 						<td class="cart_product">
 							<a href=""><img src="images/cart/two.png" alt=""></a>
 						</td>
 						<td class="cart_description">
 							<h4><a href="">Colorblock Scuba</a></h4>
 							<p>Web ID: 1089772</p>
 						</td>
 						<td class="cart_price">
 							<p>$59</p>
 						</td>
 						<td class="cart_quantity">
 							<div class="cart_quantity_button">
 								<a class="cart_quantity_up" href=""> + </a>
 								<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
 								<a class="cart_quantity_down" href=""> - </a>
 							</div>
 						</td>
 						<td class="cart_total">
 							<p class="cart_total_price">$59</p>
 						</td>
 						<td class="cart_delete">
 							<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
 						</td>
 					</tr>
 					<tr>
 						<td class="cart_product">
 							<a href=""><img src="images/cart/three.png" alt=""></a>
 						</td>
 						<td class="cart_description">
 							<h4><a href="">Colorblock Scuba</a></h4>
 							<p>Web ID: 1089772</p>
 						</td>
 						<td class="cart_price">
 							<p>$59</p>
 						</td>
 						<td class="cart_quantity">
 							<div class="cart_quantity_button">
 								<a class="cart_quantity_up" href=""> + </a>
 								<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
 								<a class="cart_quantity_down" href=""> - </a>
 							</div>
 						</td>
 						<td class="cart_total">
 							<p class="cart_total_price">$59</p>
 						</td>
 						<td class="cart_delete">
 							<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
 						</td>
 					</tr>
 				</tbody>
 			</table>
 		</div>
 	</div>
 </section>

 <section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section>