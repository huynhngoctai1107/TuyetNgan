 <div class="container-fluid" id="history" style="margin: 150px 0px;">
     <div class="history" style="margin-top: 120px;">
         <h1 class="text-center">LỊCH SỬ ĐẶT HÀNG</h1>
         <table class="table table-striped" style="margin-top: 20px;margin-left: 10%; width: 80%;">
             <tr class="m">

                 <th>
                     Mã
                 </th>
                 <th>
                     Tên
                 </th>
                 <th>
                     Số lượng
                 </th>
                 <th>
                     Đơn giá
                 </th>

                 <th>
                     Thời gian đặt
                 </th>
                 <th>
                     Tình trạng
                 </th>

             </tr>



             <tr>
                 <?php
                    include_once("./dao/pdo.php");
                    $us =  $_SESSION['dangnhap'];
                    $sql = "select * from khach_hang where email = '" . $us . "'";
                    $query_seo = mysqli_query($mysqli, $sql);
                    while ($row_seo = mysqli_fetch_array($query_seo)) {
                        $a = $row_seo['ma_kh'];
                    }

                    $query = "SELECT * FROM hoadon,hang_hoa,chitiethoadon where hoadon.ma_hd = chitiethoadon.ma_hd and chitiethoadon.ma_hh = hang_hoa.ma_hh and  hoadon.ma_kh = '" . $a . "' ";
                    $query_sanpham = mysqli_query($mysqli, $query);
                    while ($hoadon = mysqli_fetch_array($query_sanpham)) {
                        $tinhtrang = $hoadon['tinhtrang'];
                        $b = "";
                        $tien = 0;
                        if ($tinhtrang == 0) {
                            $b = "Đang xử lí";
                        } else if ($tinhtrang == 1) {
                            $b = "Đã xử lí";
                        } else if ($tinhtrang == 2) {
                            $b = "Đang giao hàng";
                        } else {
                            $b = "Đã giao thành công";
                        }
                    ?>

                     <td><?php echo $hoadon['ma_hh'] ?></td>
                     <td><?php echo $hoadon['ten_hh'] ?></td>
                     <td><?php echo $hoadon['soluong'] ?></td>
                     <td><?php echo  number_format($hoadon['don_gia']) ?></td>

                     <td><?php echo $hoadon['tgdat'] ?></td>
                     <td style="color:green ;"><?php echo $b ?></td>




             </tr>

         <?php
                    } ?>




         </table>
     </div>

 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>