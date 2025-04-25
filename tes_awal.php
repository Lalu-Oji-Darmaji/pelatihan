<?php
    $nama ='';
    $email ='';
    if(isset($_POST["sumbit"])){
        $nama = 'nama :'. $_POST["nama"];
        $email = 'email :'. $_POST["email"];
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
    <h1>Halo,Saya Lalu Oji Darmaji</h1>
    <h3>Biodata saya</h3>
    <p>Nama : Lalu Oji Darmaji</p>
    <p>Jurusan : Sistem Informasi</p>
    <p>Minat : menggambar</p>
    <form action="" method="post">
        <label for="nama">
            <input type="text" name="nama" placeholder="nama" required>
        </label>
        <label for="email">
            <input type="email" name="email" placeholder="email" required>
        </label>
        <button type="sumbit" name="sumbit" onclick="kirim()">sumbit</button>
    </form>

    <div>
        <h2>Hasil input :</h2>
        <p><?php echo $nama; ?></p>
        <p><?php echo $email; ?></p>
    </div>

    <script>
        function kirim(event) {
            const nama = document.forms[0]["nama"].value.trim();
            const email = document.forms[0]["email"].value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (nama === "") {
                alert("Nama tidak boleh kosong");
            }

            if (email === "") {
                alert("Email tidak boleh kosong");
                return false;
            }

            if (!emailPattern.test(email)) {
                alert("Format email tidak valid");
            }

            return true;
        }
    </script>
</body>
</html>