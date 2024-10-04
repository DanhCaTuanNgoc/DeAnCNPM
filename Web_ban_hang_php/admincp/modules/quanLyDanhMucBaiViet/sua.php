<?php
    $sql_sua_danhmucbv= "SELECT * FROM tbl_danhmuc_baiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
    $sua_danhmucbv= mysqli_query($mysqli,$sql_sua_danhmucbv);
?>
<h3>Sua danh muc bai viet</h3>
<table border="1px" style="border-collapse: collapse;">
  <?php 
        while($dong= mysqli_fetch_array($sua_danhmucbv)) {
     ?>
 <form method="POST" action="modules/quanLyDanhMucBaiViet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
    
    <tr>
    <td>Ten Danh Muc Bai Viet</td>
    <td><input type="text" value="<?php echo $dong['tendanhmuc_baiviet'] ?>" name="tendanhmucbaiviet"></td>
  </tr>
  <tr>
    <td>Thu tu</td>
    <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thu_tu"></td>
  </tr>
  <tr>
    <td colspan="3"><input type="submit" name="suaDanhMucBaiViet" value="Sửa Danh Muc Bai Viet"></td>
  </tr>
    
 </form>
  <?php
    }   
    ?>
</table> 