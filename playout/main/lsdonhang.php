 <div class="container-fluid" id="history" style="margin: 150px 0px;">
     <div class="history" style="margin-top: 120px;">
         <h1 class="text-center">Chi tiết đơn hàng</h1>
         <table class="table table-striped" style="margin-top: 20px;margin-left: 10%; width: 80%;">
             <tr class="m" style="background-color:#FE980F ;">

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

                    $query = "SELECT * FROM hang_hoa,chitiethoadon where  chitiethoadon.ma_hd = '$_GET[id]' and chitiethoadon.ma_hh = hang_hoa.ma_hh ";
                    $query_sanpham = mysqli_query($mysqli, $query);
                    while ($hoadon = mysqli_fetch_array($query_sanpham)) {
                     
                    ?>

                     <td><?php echo $hoadon['ma_hh'] ?></td>
                     <td><?php echo $hoadon['ten_hh'] ?></td>
                     <td><?php echo $hoadon['soluong'] ?></td>
                     <td><?php echo  number_format($hoadon['don_gia']) ?></td>

                    
                   




             </tr>

         <?php
                    } ?>




         </table>
     </div>

 </div>
 <style>
    th{
        background-color: #FE980F !important;
        color:white;
    }
 </style>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>