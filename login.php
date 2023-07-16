<?php 

require 'config.php';

if (isset($_POST["login"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result =  mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            header("Location: main.php");
            exit;
        }
    }

    $error = true;
    if (isset($error)) {
            echo "<script>
            alert('Username/password salah!!!');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form registrasi</title>
    <!-- <link rel="stylesheet" href="Bootstrap/bootstrap.css"> -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;1,100&display=swap" rel="stylesheet">
</head>

    <div class="container">
        <div class="cardContent">
            <div class="cardTitle">
                <h2>LOGIN</h2>
                <div class="underline"></div>
            </div>

            <form action="" method="post" class="form">
            <label for="username" class="label1">Username</label>
            <input type="text" name="username" class="form-content" id="username" autocomplete="on" required>
            <div class="form-border"></div>

            <label for="password" class="label2">Password</label>
            <input type="password" name="password" class="form-content" id="password">
            <div class="form-border"></div>

            <button type="submit" name="login">Login</button>
            <a href="register.php">create account</a>
        </form>
        </div>

    </div>
</body>
</html>