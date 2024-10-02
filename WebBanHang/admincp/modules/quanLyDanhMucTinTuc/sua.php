<?php
    $sql_sua= "SELECT * FROM tbl_danhmuctt WHERE id_tt='$_GET[idtt]' LIMIT 1";
    $sua= mysqli_query($mysqli,$sql_sua);
?>
<h3>Sửa Danh Muc Tin Tuc</h3>
 <table border="1px" style="border-collapse: collapse;">
    <?php 
        while($dong= mysqli_fetch_array($sua)) {
     ?>
<form method="POST" action="modules/quanLyDanhMucTinTuc/xuly.php?idtt=<?php echo $_GET['idtt'] ?>">
 	<tr>
  	<td>Ten Danh Muc</td>
  	<td><input type="text" value="<?php echo $dong['name_tt'] ?>" name="name_tt"></td>
  </tr>
  <tr>
  	<td>Thu tu</td>
  	<td><input type="text" value="<?php echo $dong['thu_tu'] ?>" name="thu_tu"></td>
  </tr>
  <tr>
  	<td colspan="3"><input type="submit" name="suaDanhMuc" value="Cập nhật danh mục tinh tức"></td>
  </tr>
 </form>
  <?php } ?>
</table> 