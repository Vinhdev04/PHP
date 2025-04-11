<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post" id="form-login">
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="username" id="name" placeholder="Enter your username..." autocomplete="true">
            <span class="error" id="error-name"></span>
        </div>
        <div class="form-group">
            <label for="mssv">Mssv</label>
            <input type="text" name="mssv" autocomplete="true" id="mssv" placeholder="Enter your mssv...">
            <span class="error" id="error-mssv"></span>
        </div>
        <div class="form-group">
            <label for="EMAIL">Email</label>
            <input type="email" name="email" autocomplete="true" id="email" placeholder="Enter your email...">
            <span class="error" id="error-email"></span>
        </div>
        <input type="submit" name="login" value="login" onclick="validate()">
    </form>

    <?php
    // Kiểm tra nút submit có được nhấn hay không
    if(isset(($_POST['login']))&& ($_POST['login'])){
        // lấy dữ liệu từ form và gán vào biến
        $username = $_POST['username'];
        $mssv = $_POST['mssv'];
        $email = $_POST['email'];


        // kiểm tra dữ liệu có hợp lệ hay không
        if(empty($username) || empty($mssv) || empty($email)){
            echo '<div class="error">Vui lòng nhập đầy đủ thông tin</div>';

        }else{
         // Nếu hợp lệ thì hiển thị bảng
         $result = '
               <div class="result">
        <h2>Result Login</h2>
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>MSSV</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>'.$username.'</td>
                    <td>'.$mssv.'</td>
                    <td>'.$email.'</td>
                </tr>
            </tbody>
        </table>
    </div>
        ';
        echo $result;
    }
}
    ?>
</body>

<script src="validate.js"></script>

</html>