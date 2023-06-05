<?php
    $numbers = array(1, 2, 3, 4, 5);
    $numbers[1] = "1";
    $numbers[2] = "3";
    $numbers[3] = "2";
    $numbers[4] = "10";
    $numbers[5] = "15";
    $i = 1;


    for($i = 1; $i < count($numbers); $i++) {
        if($numbers[$i] < 10 ) {

            echo $numbers[$i];
            echo " Là số có 1 chữ số <br>";
        } else {

            echo $numbers[$i];
            echo " Chưa xác định<br>";
        }
}
    echo "___________________________________ <br>";
    $x = 2;

        switch ($x) {
            case 1:
                echo "so 1";
                break;
            case 2:
                echo "so 2";
                break;
            case 3:
                echo "so 3";
                break;
        }

?>