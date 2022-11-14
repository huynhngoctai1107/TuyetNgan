

 <?php
$sql_sua_danhmucsp = "SELECT * FROM loai WHERE ma_loai='$_GET[maloai]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<table  class="chinhsua" >
     <form class="cs" action="quanly/quanlytrangweb/danhmuc_xuli.php?maloai=<?php echo $_GET['maloai'] ?>" method="POST">
        <?php
        while ($dong = mysqli_fetch_array($query_sua_danhmucsp)){

        ?>
        <tr style="border: none;">
            <td style="border: none !important;  font-size: 180%;font-weight: 600;">Tên danh mục</td>
        </tr>
        <tr>
        <td style="border: none !important; "><input type="text" value="<?php echo $dong['ten_loai'] ?>" name="tendanhmuc" id=""></td>
 
        </tr>
        
       
        <tr style="border: none !important; margin: 0px;">
            <td style="border: none !important;" colspan="2"><button class="nut12" type="submit" name="suadanhmuc" value="">Chỉnh Sửa</button></td>
        </tr>
<?php } ?>
    </form>
</table>
<style>
 .chinhsua{ 
    box-shadow: 0px 0px 5px black;
    background-color: white;
    width:30%;
    height: 400px;
    border: none;
    margin-top: 2%;
    margin-left: 35%;
 }
    .cs{
    width: 100%;
    background-color: blue !important;
    height: auto;
    height: 100%;
    
 }
 .chinhsua form tr{
    height: 30px;
     border: none !important;
 }
 
 .chinhsua input{
    margin: 0px !important;
    border-radius: 10px;
    height: 50px;
    width: 70%;
 }
 .nut12{
    width: 180px;
    height: 50px;
    border-radius: 60% 10%;
    border: none;
    background-color:  #5e72e4;
    color: white;
 }
 .nut12:hover{
        background-color: green;
    }

</style>