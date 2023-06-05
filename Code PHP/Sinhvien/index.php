<?php

    $students = array(
        "st1" => array(
            "name" => "Đức",
            "age" => "19",
            "point" => "80"
        ),
        "st2" => array(
            "name" => "Giáp",
            "age" => "19",
            "point" => "79"
        ),
        "st3" => array(
            "name" => "Toàn",
            "age" => "22",
            "point" => "39"
        ),
        "st4" => array(
            "name" => "Hưng",
            "age" => "23",
            "point" => "56"
        )
    );

    foreach($students as $student) {
        echo "Tên: {$student['name' ]} <br>";
        echo "Tuổi: {$student['age']} <br>";
        echo "Điểm: {$student['point']}% <br>";
        if($student['point'] >= 40) {

            echo "Đỗ Đại Học<br>";
            echo "--------------------------------<br>";
        }else {

            echo "Trượt Đại Học<br>";
            echo "--------------------------------<br>";
        }

    }

?>
