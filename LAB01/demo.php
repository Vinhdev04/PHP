<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Search Result</title>
</head>

<body>
    <?php
   $name = "Vinh";
    $id = "PS1";
    $email = "pcv.fed@gmail.com";
    $clss = "22HG";



    echo '   <h2>Search Result</h2> 
    <table>
        <thead>
            <tr>
                <th>NAME</th>
                <th>ID</th>
                <th>EMAIL</th>
                <th>CLASS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$name.'</td>
                <td>'.$id.'</td>
                <td>'.$email.'</td>
                <td>'.$clss.'</td>
            </tr>
        </tbody>
    </table>
    '
 
?>
</body>

</html>