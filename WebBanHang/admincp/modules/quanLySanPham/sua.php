<?php
    $sql_sua_sp= "SELECT * FROM tbl_sanpham WHERE ma_sp='$_GET[idsp]' LIMIT 1";
    $sua_sp= mysqli_query($mysqli,$sql_sua_sp);
?>
<h3>Sua San Pham</h3>
 <table border="1px" width="100%" style="border-collapse: collapse;">
  <?php 
        while($row= mysqli_fetch_array($sua_sp)) {
  ?>
 <form method="POST" action="modules/quanLySanPham/xuly.php?idsp=<?php echo $row['ma_sp'] ?>" enctype="multipart/form-data">
  <tr>
    <td>Ten San Pham</td>
    <td><input type="text" value="<?php echo $row['ten_sp'] ?>" name="ten_sp"></td>
  </tr>
  <tr>
    <td>Ma San Pham</td>
    <td><input type="text" value="<?php echo $row['ma_sp'] ?>" name="ma_sp"></td>
  </tr>
  <tr>
    <td>Gia San Pham</td>
    <td><input type="text" value="<?php echo $row['gia_sp'] ?>" name="gia_sp"></td>
  </tr>
  <tr>
    <td>So luong</td>
    <td><input type="text" value="<?php echo $row['so_luong'] ?>" name="so_luong"></td>
  </tr>
  <tr>
    <td>Hinh anh</td>
    <td><input type="file" name="hinh_anh">
      <img src="modules/quanLySanPham/uploads/<?php echo $row['hinh_anh'] ?>" width='150px'>
    </td>
  </tr>
  <tr>
    <td>Tom tat</td>
    <td><textarea rows="8" cols="100%" name="tom_tat" style="resize: none;"><?php echo $row['tom_tat'] ?></textarea></td>
  </tr>
  <tr>
    <td>Noi dung</td>
    <td><textarea rows="8" cols="100%" name="noi_dung"style="resize: none;"><?php echo $row['noi_dung'] ?></textarea></td>
  </tr>
  <tr>
    <td>Danh Mục</td>
    <td>
        <select name="id_dm">
            <?php
              $sql_danhmuc= "SELECT * FROM tbl_danhmucqa ORDER BY id_dm DESC";
              $sql_query= mysqli_query($mysqli,$sql_danhmuc);
              while($row_danhmuc= mysqli_fetch_array($sql_query)){
                if($row_danhmuc['id_dm']==$row['id_dm']) {
            ?>
            <option selected value="<?php echo $row_danhmuc['id_dm'] ?>"><?php echo $row_danhmuc['name_sp']?></option>
            <?php 
              }else{
            ?>
            <option value="<?php echo $row_danhmuc['id_dm'] ?>"><?php echo $row_danhmuc['name_sp']?></option>
            <?php
              }
            }
             ?> 
              
        </select>
    </td>
  </tr>
  <tr>
    <td>Tinh Trang</td>
    <td>
        <select name="tinh_trang">
          <?php
          if($row['tinh_trang']== 1){
          ?>
            <option value="1" selected>Kich Hoat</option>
            <option value="0">An</option>
          <?php
          }else{
          ?>
            <option value="1">Kich Hoat</option>
            <option value="0" selected>An</option>
          <?php 
          }
           ?>
        </select>
    </td>
  </tr>
  <tr>
    <td colspan="8"><input type="submit" name="suaSanPham" value="Sua San Pham"></td>
  </tr>
 </form>
  <?php
    }   
    ?>
</table>