<h3>Them San Pham</h3>
 <table border="1px" width="100%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanLySanPham/xuly.php" enctype="multipart/form-data">
 	<tr>
  	<td>Ten San Pham</td>
  	<td><input type="text" name="ten_sp"></td>
  </tr>
  <tr>
  	<td>Ma San Pham</td>
  	<td><input type="text" name="ma_sp"></td>
  </tr>
  <tr>
    <td>Gia San Pham</td>
    <td><input type="text" name="gia_sp"></td>
  </tr>
  <tr>
    <td>So luong</td>
    <td><input type="text" name="so_luong"></td>
  </tr>
  <tr>
  	<td>Hinh anh</td>
  	<td><input type="file" name="hinh_anh"></td>
  </tr>
  <tr>
    <td>Tom tat</td>
    <td><textarea rows="8" cols="100%" name="tom_tat" style="resize: none;"></textarea></td>
  </tr>
  <tr>
    <td>Noi dung</td>
    <td><textarea rows="8" cols="100%" name="noi_dung"style="resize: none;"></textarea></td>
  </tr>
  <tr>
    <td>Danh Mục</td>
    <td>
        <select name="id_dm">
            <?php
              $sql_danhmuc= "SELECT * FROM tbl_danhmucqa ORDER BY id_dm DESC";
              $sql_query= mysqli_query($mysqli,$sql_danhmuc);
              while($row_danhmuc= mysqli_fetch_array($sql_query)){
            ?>
            <option value="<?php echo $row_danhmuc['id_dm'] ?>"><?php echo $row_danhmuc['name_sp']?></option>
            <?php 
            }
             ?>  
              
        </select>
    </td>
  </tr>
  <tr>
    <td>Tinh Trang</td>
    <td>
        <select name="tinh_trang">
            <option value="1">Kich Hoat</option>
            <option value="0">An</option>
        </select>
    </td>
  </tr>
  <tr>
  	<td colspan="9"><input type="submit" name="themSanPham" value="Them San Pham"></td>
  </tr>
 </form>
  
</table>