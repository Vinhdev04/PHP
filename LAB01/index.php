<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 

     // khai báo biến
    $name = "Vinh";
    $nam = 1990;
    echo "$name  $nam <br>";
    echo "Hello ${name}! Welcome to channel PHP! You ${nam} ages <br>";

     // lấy ra kiểu dữ liệu và giá trị
    $x = 5;
    var_dump($x);

    // khai báo hằng số -
    define("limit","100");
    echo limit;

    // biến "global"
    $z = 100;
    function testGlobal(){
        global $z; // Khai báo biến toàn cục
        echo "<p>Biến z có thể sử dụng trong hàm: $z</p>";
    }
    testGlobal();
    echo "<p>Biến z có thể sử dụng ngoài hàm: $z</p>";


    function testlocal(){
        $z = 12; // Khai báo biến cục bộ
        echo "<p>Biến z có thể sử dụng trong hàm: $z</p>";
    }
    testlocal();
    echo "<p>Biến z có thể sử dụng ngoài hàm: $z</p>";

    $i = 5;
    $m = 10;

    function myTestX() {
    $GLOBALS['k'] = $GLOBALS['i'] + $GLOBALS['m'];
    }

    myTestX();
    echo "$k <br>"; // 15

    // biến static 
    function testStatic(){
        static $d = 10;
        echo "$d <br>";
        $d++;
    }
    testStatic(); // 10
    testStatic(); // 11
    testStatic(); // 12



    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";



    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";

    print '<h2>' . $txt1 . '</h2>';
    print '<p>Study PHP at ' . $txt2 . '</p>';

    $test = print "Hello"; 
    echo $test; // Kết quả: Hello1 (do print trả về 1)

?>
    <?php
    $nameX = "Vinh";
    $years = "2004";
    echo "Hello ".$name." in ".$years; // Hello Vinh in 2004
?>
</body>

</html>