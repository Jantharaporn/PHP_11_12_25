<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การใช้ User-define Function ฟังก์ชันที่สร้างขึ้นเอง</title>
</head>
<body>
    <h1>การใช้ User-define Function ฟังก์ชันที่สร้างขึ้นเอง</h1>
    <?php //เรียกใข้ function
    echo "ผลบวกของ 10 กับ 20 คือ " . sum(10, 20) . "<br>";
    echo "ผลบวกของ 15 กับ 25 คือ " . sum(15, 25) . "<br>";
    $a = 30; $b = 45;
    echo "ผลบวกของ $a กับ $b คือ " . sum($a, $b) . "<br>";
    echo "<hr>";
    $num = 50;
    echo "ค่าของ num ก่อนเรียกใช้ฟังก์ชัน add_five() คือ $num<br>";
    add_five($num);
    echo "ค่าของ num หลังเรียกใช้ฟังก์ชัน add_five() คือ $num<br>";

    ?>

    <h2>ตัวอย่าง function ที่มีพารามิเตอร์หลายตัว</h2>
    <?php
    //สร้าง function sumListofNumbers ที่รับพารามิเตอร์หลายตัว
    function sumListofNumbers(...$x){
        $n = 0;
        $len = count($x);
        for($i=0; $i<$len; $i++){
            $n += $x[$i];
        }
        return $n;
    }
   //เรียกใช้ function sumListofNumbers
    echo "ผลบวกของตัวเลข 5, 10, 15 คือ " . sumListofNumbers(5, 10, 15) . "<br>";
    echo "ผลบวกของตัวเลข 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 คือ " . sumListofNumbers(1,2,3,4,5,6,7,8,9,10) . "<br>";
    
    //สร้าง function รับนามสกุล และชื่อหลายคน
    function myFamily($lastname, ...$firstname){
        $len = count($firstname);
        for ($i=0; $i<$len; $i++ ){
            echo "<br>สวัสดี คุณ" . $firstname[$i] . " " . $lastname . "<br>";
        }
    }

    //เรียกใช้ function myFamily
    myFamily("ผาสีดา","ทรงศิล","ศศิกานต์","สมพร","ธราเทพ");
    ?>
    <h2>ตัวอย่าง function ที่มีพารามิเตอร์ค่าเริ่มต้น</h2>
    <?php
    function thai_date($strDate="now"){
        $strYear = date("Y", strtotime($strDate)) + 543;
        $strMonth = date("n", strtotime($strDate));
        $strDay = date("j", strtotime($strDate));

        $thaiMonthNames = ["", "มกรามคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
        "กราฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศิกายน", "ธันวาคม"];

        $strMonthThai = $thaiMonthNames[$strMonth];
        return "$strDay $strMonthThai พ.ศ. $strYear";
    }
    echo thai_date("2025-12-11") . "<br>";
    echo thai_date(); //ใช้ค่าเริ่มต้นเป็นวันปัจจุบัน
    ?>
</body>
</html>

<?php //function php_UDF
function sum($sum1, $sum2){
    $result = $sum1 + $sum2;
    return $result;
}
function add_five($num){
    $value = $num + 5;
    echo "ค่าภายในฟังก์ชัน add_five() คือ $value<br>";
}

?>