<?php
    if(isset($_POST["sumbit"])){
        $nama = $_POST["nama"];
        $email = $_POST["email"];

        echo 'nama : '. $nama;
        echo 'email : '. $email;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lalu Oji Darmaji</title>
</head>
<body>
    <p>Nama : Lalu Oji Darmaji</p>
    <p>Jurusan : Sistem Informasi</p>
    <p>Minat : menggambar</p>
    <form action="" method="post">
        <label for="nama">
            <input type="text" name="nama" placeholder="nama" required>
        </label>
        <label for="nama">
            <input type="email" name="email" placeholder="email" required>
        </label>
        <button type="sumbit" name="sumbit">sumbit</button>
    </form>

    <p></p>
</body>
</html>