<?php
    $sql_sua= "SELECT * FROM tbl_danhmucqa WHERE id_dm='$_GET[idsp]' LIMIT 1";
    $sua= mysqli_query($mysqli,$sql_sua);
?>
<h3>Sua danh muc san pham</h3>
<table border="1px" style="border-collapse: collapse;">
  <?php 
        while($dong= mysqli_fetch_array($sua)) {
     ?>
 <form method="POST" action="modules/quanLyDanhMucSanPham/xuly.php?idsp=<?php echo $_GET['idsp'] ?>">
    
    <tr>
    <td>Ten Danh Muc</td>
    <td><input type="text" value="<?php echo $dong['name_sp'] ?>" name="name_sp"></td>
  </tr>
  <tr>
    <td>Thu tu</td>
    <td><input type="text" value="<?php echo $dong['thu_tu'] ?>" name="thu_tu"></td>
  </tr>
  <tr>
    <td colspan="3"><input type="submit" name="suaDanhMuc" value="Sửa Danh Muc San Pham"></td>
  </tr>
    
 </form>
  <?php
    }   
    ?>
</table> 