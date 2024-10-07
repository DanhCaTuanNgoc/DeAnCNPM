<h3>Thêm Bài Viết</h3>
 <table border="1px" width="100%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanLyBaiViet/xuly.php" enctype="multipart/form-data">
 	<tr>
  	<td>Tên Bài Viết</td>
  	<td><input type="text" name="tenbaiviet"></td>
  </tr>
  <tr>
  	<td>Hình ảnh</td>
  	<td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td><textarea rows="8" cols="100%" name="tomtat" style="resize: none;"></textarea></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><textarea rows="8" cols="100%" name="noidung"style="resize: none;"></textarea></td>
  </tr>
  <tr>
    <td>Danh Mục Bài Viết</td>
    <td>
        <select name="id_danhmuc">
            <?php
              $sql_danhmuc= "SELECT * FROM tbl_danhmuc_baiviet ORDER BY id_baiviet DESC";
              $sql_query= mysqli_query($mysqli,$sql_danhmuc);
              while($row_danhmuc= mysqli_fetch_array($sql_query)){
            ?>
            <option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
            <?php 
            }
             ?>  
              
        </select>
    </td>
  </tr>
  <tr>
    <td>Tình Trạng</td>
    <td>
        <select name="tinhtrang">
            <option value="1">Kich Hoat</option>
            <option value="0">An</option>
        </select>
    </td>
  </tr>
  <tr>
  	<td colspan="9"><input type="submit" name="thembaiviet" value="Thêm Bài Viết"></td>
  </tr>
 </form>
  
</table>