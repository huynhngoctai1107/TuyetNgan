<?php
$sql_sua_danhmucsp = "SELECT * FROM hoadon WHERE ma_hd='$_GET[mahd]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<table class=" ">
   <form class="cs" style="" action=".././dao/donhang_xuli.php?mahd=<?php echo $_GET['mahd'] ?>" method="POST">
      <?php
      while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {

      ?>
         <div class="chinhsua">
            <h1 style="text-align: center;">Chỉnh Sửa</h1>

            <br><br>

            </select>
            <h6>Thanh toán</h6>
            <select name="thanhtoan" style="width: 70%; margin-left: 15%; height: 40px;" id="">

               <option value="0">Chưa thanh toán</option>
               <option value="1">Đã thanh toán</option>
            </select>
            
            <h6>Tình trạng</h6>
            <select name="tinhtrang" style="width: 70%; margin-left: 15%; height: 40px;" id="">

               <option value="0">Đang xử lí</option>
               <option value="1">Đã xử lí</option>
               <option value="1">Đang giao hang</option>
               <option value="1">Đã giao thành công</option>
            </select>


               <button class="nut12" type="submit" name="sua" value="">Chỉnh Sửa</button>

         </div>

      <?php } ?>
   </form>
</table>
<style>
   .chinhsua {
      padding: 50px 0px;
      box-shadow: 0px 0px 5px black;
      background-color: white;
      width: 50%;
      height: auto;
      border: none;
      margin-top: 2%;
      margin-left: 25%;
   }






   .nut12 {
      width: 30%;
      text-align: center;
      height: 50px;
      margin-left: 35%;
      margin-top: 50px;

      border-radius: 60% 10%;
      border: none;
      background-color: #5e72e4;
      color: white;
   }

   .nut12:hover {
      background-color: green;
   }

   h6 {
      width: 70%;
      margin-left: 15%;
   }

   input {
      height: 50px;
      margin: 10px 0px;
      width: 70%;
      margin-left: 15%;
   }
</style>