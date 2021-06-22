<?php

    session_start();
    include_once("function/koneksi.php");
    if (isset($_POST["submit"])) { 

        $nip = $_POST['nip'];
        $password = $_POST['password'];
        
        $query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip='$nip' AND password='$password'");
        
        if(mysqli_num_rows($query) == 0){
            echo "
                <script>
                    alert('username atau password tidak cocok');
                    document.location.href = 'login.php' ;
                </script>
            ";
        }else{
            $_SESSION['status_login'] = "login";
            echo "
                <script>
                    alert('login berhasil');
                    document.location.href = 'index.php' ;
                </script>
            ";
        } 
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <main class="container">
        <h2>Login Admin</h2>
        <form action="" method="post">
            <div class="input-field">
                <input type="text" name="nip" id="nip"
                    placeholder="NIP">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password"
                    placeholder="Password">
                <div class="underline"></div>
            </div>

            <input type="submit" name="submit" value="Continue">
        </form>
    </main>
</body>
</html>