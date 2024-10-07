<?php
    $sql_sua_bv= "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbv]' LIMIT 1";
    $sua_bv= mysqli_query($mysqli,$sql_sua_bv);
?>
<h3>Sửa Sản Phẩm</h3>
 <table border="1px" width="100%" style="border-collapse: collapse;">
  <?php 
        while($row= mysqli_fetch_array($sua_bv)) {
  ?>
 <form method="POST" action="modules/quanLyBaiViet/xuly.php?idbv=<?php echo $row['id'] ?>" enctype="multipart/form-data">
  <tr>
    <td>Tên Sản Phẩm</td>
    <td><input type="text" value="<?php echo $row['tenbaiviet'] ?>" name="tenbaiviet"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh">
      <img src="modules/quanLyBaiViet/uploads/<?php echo $row['hinhanh'] ?>" width='150px'>
    </td>
  </tr>
  <tr>
    <td>Tom tat</td>
    <td><textarea rows="8" cols="100%" name="tomtat" style="resize: none;"><?php echo $row['tomtat'] ?></textarea></td>
  </tr>
  <tr>
    <td>Noi dung</td>
    <td><textarea rows="8" cols="100%" name="noi_dung"style="resize: none;"><?php echo $row['noidung'] ?></textarea></td>
  </tr>
  <tr>
    <td>Mã Danh Mục</td>
    <td>
        <select name="id_danhmuc">
            <?php
              $sql_danhmuc= "SELECT * FROM tbl_danhmuc_baiviet ORDER BY id_baiviet DESC";
              $sql_query= mysqli_query($mysqli,$sql_danhmuc);
              while($row_danhmuc= mysqli_fetch_array($sql_query)){
                if($row_danhmuc['id_baiviet']==$row['id_baiviet']) {
            ?>
            <option selected value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
            <?php 
              }else{
            ?>
            <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
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
        <select name="tinhtrang">
          <?php
          if($row['tinhtrang']== 1){
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
    <td colspan="8"><input type="submit" name="suabaiviet" value="Sua San Pham"></td>
  </tr>
 </form>
  <?php
    }   
    ?>
</table>