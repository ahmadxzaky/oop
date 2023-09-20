<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Sign Up</h3>

<form action="prosesLogin.php" method="post">
    <table> 
        <tr>
            <td width="130">Username</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="Proses" value="Proses">
            </td>
        </tr>

    </table>
</form>
</body>
</html>
<?php

if(isset($_POST['Proses'])){
    echo"Ok";
    include_once "koneksi2.php";

    $server = new koneksi();
    $server->server();
}else{
    
}
?>

<!-- if(isset($_POST['Proses'])){
  echo "Masukan Username Dan Password Yang Tepat";
}else{ -->
