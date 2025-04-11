<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="username" id="name" placeholder="Enter your username..." autocomplete="true">
        </div>
        <div class="form-group">
            <label for="MSSV">Mssv</label>
            <input type="text" name="mssv" autocomplete="true" id="MSSV" placeholder="Enter your mssv...">
        </div>
        <div class="form-group">
            <label for="EMAIL">Email</label>
            <input type="email" name="email" autocomplete="true" id="EMAIL" placeholder="Enter your email...">
        </div>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
    // Kiểm tra nút submit có được nhấn hay không
    if(isset(($_POST['login']))&& ($_POST['login'])){
        // lấy dữ liệu từ form và gán vào biến
        $username = $_POST['username'];
        $mssv = $_POST['mssv'];
        $email = $_POST['email'];

        // show dữ liệu trong table
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




       
    ?>
</body>

</html>