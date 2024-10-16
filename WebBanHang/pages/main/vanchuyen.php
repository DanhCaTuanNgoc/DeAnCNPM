<div class="main_content">
  <p>Thông tin vận chuyển</p>
  <div class="wrapper-2">
      <div class="arrow-steps clearfix">
          <div class="step done"> <span> <a href="index.php?quanly=giohang"> Giỏ hàng</a></span> </div>
          <div class="step current"> <span><a href="index.php?quanly=vanChuyen"> Vận chuyển</a></span> </div>
          <div class="step "> <span><a href="index.php?quanly=thongTinThanhToan">Thanh toán</a></span> </div>
          <div class="step "> <span><a href="index.php?quanly=donHangDaDat">Lịch sử đơn hàng</a></span> </div>
      </div>
  </div>
  <h4 style="text-align:center;">THÔNG TIN VẬN CHUYỂN</h4>
  <?php
        if(isset($_POST['themvanchuyen'])){
          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $address = $_POST['address'];
          $note = $_POST['note'];
          $id_dangky = $_SESSION['id_khachhang'];
          $sql_them_vanchuyen = mysqli_query($mysqli,"INSERT INTO tbl_giaohang(name,phone,address,note,id_dangky) VALUES ('$name','$phone','$address','$note','$id_dangky')");
          if($sql_them_vanchuyen){
            echo '<script>alert("Thêm thông tin vận chuyển thành công!")</script>';
          }
        }
        else if(isset($_POST['capnhatvanchuyen'])){
          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $address = $_POST['address'];
          $note = $_POST['note'];
          $id_dangky = $_SESSION['id_khachhang'];
          $sql_update_vanchuyen = mysqli_query($mysqli,"UPDATE tbl_giaohang SET name='$name', phone ='$phone', address='$address', note ='$note', id_dangky='$id_dangky' WHERE id_dangky='$id_dangky'");
          if($sql_update_vanchuyen){
            echo '<script>alert("Cập nhật thông tin vận chuyển thành công!")</script>';
          }
        }
      ?>
  <div class="row">
      <?php
        $id_dangky = $_SESSION['id_khachhang'];
        $sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM tbl_giaohang WHERE id_dangky='$id_dangky' LIMIT 1");
        $count = mysqli_num_rows($sql_get_vanchuyen);
        if($count > 0){
          $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
          $name = $row_get_vanchuyen['name'];
          $phone = $row_get_vanchuyen['phone'];
          $address = $row_get_vanchuyen['address'];
          $note = $row_get_vanchuyen['note'];
        }
        else{
          $name = '';
          $phone = '';
          $address = '';
          $note = '';
        }
        ?>
      <div class="col-md-12"></div>
      <form action="" autocomplete="off" method="POST">
          <div class="form-group">
              <label for="email">Họ và tên: </label>
              <input type="text" name="name" class="form-control" style="width: 300px;margin-left: 22px;" value="<?php echo $name?>" placeholder="....">
          </div>
          <div class="form-group">
              <label for="pwd">Số điện thoại:</label>
              <input type="text" name="phone" class="form-control" style="width: 300px;" value="<?php echo $phone?>" placeholder="....">
          </div>
          <div class="form-group">
              <label for="pwd">Địa chỉ:</label>
              <input type="text" name="address" class="form-control" style="width: 300px;margin-left: 37px;" value="<?php echo $address?>" placeholder="....">
          </div>
          <div class="form-group">
              <label for="pwd">Ghi chú:</label>
              <input type="text" name="note" class="form-control" style="width: 300px;margin-left: 34px;" value="<?php echo $note?>" placeholder="....">
          </div>
          <?php
        if($name=='' && $phone==''){
      ?>
          <button type="submit" name="themvanchuyen" class="btn btn-primary">Thêm thông tin vận chuyển</button>
          <?php
        } else if($name!='' && $phone!=''){
      ?>
          <button type="submit" name="capnhatvanchuyen" class="btn btn-succcess">Cập nhật thông tin vận chuyển </button>
          <?php
        }  
      ?>
      </form>
      <!-- Giỏ hàng -->
  </div>
  <table style="width: 100%; text-align: center; border-collapse: collapse;" border="1">
      <tr>
          <th>Id</th>
          <th>Ma SP</th>
          <th>Ten san pham</th>
          <th>Hinh anh</th>
          <th>So luong</th>
          <th>Gia san pham</th>
          <th>Thanh Tien</th>
      </tr>
  
      <?php
    if(isset($_SESSION['cart'])){
      $i=0;
      $tongtien=0;
      foreach($_SESSION['cart'] as $cart_item){
        $thanhtien= $cart_item['so_luong']*$cart_item['gia_sp'];
        $tongtien+=$thanhtien;
        $i++;
    ?>
  
  
      <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $cart_item['ma_sp']  ?></td>
          <td><?php echo $cart_item['ten_sp']  ?></td>
          <td><img src="admincp/modules/quanLySanPham/uploads/<?php echo $cart_item['hinh_anh'];?>" width="150px"></td>
          <td>
              <!-- <a href="pages/main/themGioHang.php?cong=<?php echo $cart_item['id']?>"><i class="fa-solid fa-plus"></i></a> -->
              <?php echo $cart_item['so_luong'] ?>
              <!-- <a href="pages/main/themGioHang.php?tru=<?php echo $cart_item['id']?>"><i class="fa-solid fa-minus"></i></a>   -->
          </td>
          <td><?php echo number_format($cart_item['gia_sp'],0,',','.').' VND ' ?></td>
          <td><?php echo number_format($thanhtien,0,',','.').' VND ' ?></td>
      </tr>
      <?php 
    }
    //$_SESSION['cart']['tong_tien'] = $tongtien;
    ?>
      <tr>
          <td colspan="8">
              <p style="float: left;">Tong tien : <?php echo number_format($tongtien,0,',','.').' VND ' ?></p>
              <div style="clear: both;"></div>
              <?php  
        if(isset($_SESSION['dang_ky'])){
        ?>
              <p><a href="index.php?quanly=thongTinThanhToan">Thanh toán</a></p>
              <?php 
        }else{
        ?>
              <p><a href="index.php?quanly=dangKy">Đăng Ký Đặt Hàng</a></p>
              <?php 
        }
        ?>
          </td>
      </tr>
      <?php 
    }else{
    ?>
      <tr>
          <td colspan="8">
              <p>Hien tai khong co san pham</p>
          </td>
      </tr>
      <?php 
    } ?>
  </table>
  </div>
  </div>
</div>