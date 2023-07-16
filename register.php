<?php 

require 'config.php';

if (isset($_POST["register"])) {

    if (register($_POST) > 0) {
    echo "<script>
            alert('User baru berhasil ditambahkan');
        </script>";
    } else {
        echo mysqli_error($db);
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;1,100&display=swap" rel="stylesheet">
</head>

    <div class="container">
        <div class="cardContent">
            <div class="cardTitle">
                <h2>CREATE ACCOUNT</h2>
                <div class="underline"></div>
            </div>

            <form action="" method="post" class="form">
            <label for="username" class="label1">Username</label>
            <input type="text" name="username" class="form-content" id="username" autocomplete="on" required>
            <div class="form-border"></div>

            <label for="password" class="label2">Password</label>
            <input type="password" name="password" class="form-content" id="password">
            <div class="form-border"></div>

            <label for="password2" class="label2">Re-type Password</label>
            <input type="password" name="password2" class="form-content" id="password2">
            <div class="form-border"></div>

            <button type="submit" name="register">Register</button>
            <a href="login.php">already have an account?</a>
        </form>
        </div>

    </div>
</body>
</html>