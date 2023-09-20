<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            margin: 0 auto;
        }

        table tr td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>Nama Pengguna</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Kata Sandi</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Masuk" name="btLogin"></td>
            </tr>
        </table>
    </form>
</body>
</html>


    <?php
    if(isset($_POST['btLogin'])) {
        echo "tombol log in di tekan";
        include_once "koneksi.php";

        $server = new koneksi();
        $server->server();
    }else{
    }
    ?>