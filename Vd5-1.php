<?php
    $name = "Nguyễn Minh Đức";
    $year = 2000;
    $city = 'Hà Nội';
    echo "<p>Giá trị của biến name là chuỗi $name";
    echo "<p>Giá trị của biến year là số $year";
    echo "<p>Giá trị của biến city là chuỗi $city";
    echo"<br>";

    define("PI",3.14);
    echo PI;
    echo"<br>";

    $x = "10" + 5; 	// "10" được chuyển thành số nguyên
    echo $x; 
    echo"<br>";	

    $y = "5" . 10; 
    echo $y;
    echo"<br>";

    $a = 10;
    $b=20;
    if ($a > $b){ echo "<p>a > b";}
    else if ($a < $b){ echo "<p>a < b";}
    else { echo "<p>a = b";};
    echo"<br>";

    switch($a) {
        case 0 :
            print("giá trị = 0");
            break;
        case 10 :
            print("giá trị = 10");
            break;
        default :
            print("giá trị ko xác định\n");
            break;
    }
    echo"<br>";

    for($x = 0; $x < 10; $x++){
        echo $x;
    }
    echo"<br>";

    $arr = array(1, 2, 3, 4, 5);
    foreach ($arr as $x){
        echo $x;
    };
    echo"<br>";

    $c = 1;
    while ($c <5){
        echo $c;
        $c++;
    };


?>