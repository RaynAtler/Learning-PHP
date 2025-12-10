<?php
    function InDulieu(){
        echo "Xin chao";
    }
    InDulieu();
    echo"<br>";

    function TinhTong($a, $b){
        $c = $a + $b;
        return $c;
    }
    echo TinhTong(1,2);
    echo"<br>";
    
    function TinhHieu($a, $b){
        return $a - $b;
    }
    echo TinhHieu(5,1);
    echo"<br>";


    if(isset($_POST["ten_dang_nhap"]))
    echo "Xin chào".$_POST["ten_dang_nhap"];
    else
    echo "Vui lòng nhập tên đăng nhập";
    echo"<br>";

    if(empty($_POST["ten_dang_nhap"])) {
    echo "Vui long nhập tên đăng nhập";
    exit;
    } else {
        echo "Xin chào ".$_POST["ten_dang_nhap"];
    }
    echo"<br>";

    if(is_numeric($_NUM["so_luong"])) {
        $so_luong = $_NUM["so_luong"];
        $thanh_tien = $so_luong * $don_gia; 
    }
    else {
        echo "Số lượng phải là kiểu số!";
    }
    echo"<br>";

    $n = "Day là chuỗi";
    $a = 123;
    $b = 123.456;
    $mang = array(1, 2, 3);
    echo gettype($n); 
    echo "<br>";
    echo gettype($a);  
    echo "<br>";
    echo gettype($b);   
    echo "<br>";
    echo gettype($mang);
?>