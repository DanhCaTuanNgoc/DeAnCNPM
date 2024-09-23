<?php
session_start();
include("../../admincp/config/config.php");
// thêm vào giỏ hàng
if (isset($_POST['themgiohang'])) {
    //    RESET SESSTION 
    // if (session_status() == PHP_SESSION_NONE) {
    //     session_start();
    // }
    // session_destroy();
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.idSanPham = '" . $id . "' LIMIT 1 ";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array(
            'tenSanPham' => $row['tenSanPham'],
            'id' => $id,
            'soLuong' => $soluong,
            'giaSanPham' => $row['giaSanPham'],
            'hinhAnh' => $row['hinhAnh'],
            'maSanPham' => $row['maSanPham']
        ));
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            $found = false;
            $product = array();
            foreach ($_SESSION['cart'] as $cart_item) {
                // nếu trùng sản phẩm
                if ($cart_item['id'] == $id) {
                    $product[] = array(
                        'tenSanPham' => $cart_item['tenSanPham'],
                        'id' => $cart_item['id'],
                        'soLuong' => $cart_item['soLuong'] + 1,
                        'giaSanPham' => $cart_item['giaSanPham'],
                        'hinhAnh' => $cart_item['hinhAnh'],
                        'maSanPham' => $cart_item['maSanPham']
                    );
                    $found = true;
                } else {
                    $product[] = array(
                        'tenSanPham' => $cart_item['tenSanPham'],
                        'id' => $cart_item['id'],
                        'soLuong' => $soluong,
                        'giaSanPham' => $cart_item['giaSanPham'],
                        'hinhAnh' => $cart_item['hinhAnh'],
                        'maSanPham' => $cart_item['maSanPham']

                    );
                }
            }
            if ($found == false) {
                $_SESSION['cart'] = array_merge($product, $new_product);
                // echo 'ko trùng';
                // print_r($_SESSION['cart']);
            } else {
                $_SESSION['cart'] = $product;
                // echo 'trùng';
                // print_r($_SESSION['cart']);
            }
        } else {
            $_SESSION['cart'] = $new_product;
            // echo 'Tạo mới session';
            // print_r($_SESSION['cart']);
        }
    }
    header('Location:../../index.php?quanly=giohang');
}

// xóa tất cả
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['cart']);
    header('Location:../../index.php?quanly=giohang');
}
// xóa sản phẩm
if (isset($_GET['xoa']) && isset($_SESSION['cart'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tenSanPham' => $cart_item['tenSanPham'],
                'id' => $cart_item['id'],
                'soLuong' => $cart_item['soLuong'],
                'giaSanPham' => $cart_item['giaSanPham'],
                'hinhAnh' => $cart_item['hinhAnh'],
                'maSanPham' => $cart_item['maSanPham']
            );
        }
        $_SESSION['cart'] = $product;
    }
    header('Location:../../index.php?quanly=giohang');
}
//thêm số lượng

if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.idSanPham = '" . $id . "' LIMIT 1";
    $pro = mysqli_query($mysqli, $sql_pro);
    $row = mysqli_fetch_array($pro);
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tenSanPham' => $cart_item['tenSanPham'],
                'id' => $cart_item['id'],
                'soLuong' => $cart_item['soLuong'],
                'giaSanPham' => $cart_item['giaSanPham'],
                'hinhAnh' => $cart_item['hinhAnh'],
                'maSanPham' => $cart_item['maSanPham']
            );
            $_SESSION['cart'] = $product;
        } else {
            if ($cart_item['soLuong'] < $row['soLuong']) {
                $tangsoluong = $cart_item['soLuong'] + 1;
                $product[] = array(
                    'tenSanPham' => $cart_item['tenSanPham'],
                    'id' => $cart_item['id'],
                    'soLuong' => $tangsoluong,
                    'giaSanPham' => $cart_item['giaSanPham'],
                    'hinhAnh' => $cart_item['hinhAnh'],
                    'maSanPham' => $cart_item['maSanPham']
                );
            } else {
                $product[] = array(
                    'tenSanPham' => $cart_item['tenSanPham'],
                    'id' => $cart_item['id'],
                    'soLuong' => $cart_item['soLuong'],
                    'giaSanPham' => $cart_item['giaSanPham'],
                    'hinhAnh' => $cart_item['hinhAnh'],
                    'maSanPham' => $cart_item['maSanPham']
                );
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('Location:../../index.php?quanly=giohang');
}
// trừ số lượng
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tenSanPham' => $cart_item['tenSanPham'],
                'id' => $cart_item['id'],
                'soLuong' => $cart_item['soLuong'],
                'giaSanPham' => $cart_item['giaSanPham'],
                'hinhAnh' => $cart_item['hinhAnh'],
                'maSanPham' => $cart_item['maSanPham']
            );
            $_SESSION['cart'] = $product;
        } else {
            if ($cart_item['soLuong'] >= -9) {
                $tangsoluong = $cart_item['soLuong'] - 1;
                $product[] = array(
                    'tenSanPham' => $cart_item['tenSanPham'],
                    'id' => $cart_item['id'],
                    'soLuong' => $tangsoluong,
                    'giaSanPham' => $cart_item['giaSanPham'],
                    'hinhAnh' => $cart_item['hinhAnh'],
                    'maSanPham' => $cart_item['maSanPham']
                );
            } else {
                $product[] = array(
                    'tenSanPham' => $cart_item['tenSanPham'],
                    'id' => $cart_item['id'],
                    'soLuong' => $cart_item['soLuong'],
                    'giaSanPham' => $cart_item['giaSanPham'],
                    'hinhAnh' => $cart_item['hinhAnh'],
                    'maSanPham' => $cart_item['maSanPham']
                );
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('Location:../../index.php?quanly=giohang');
}
