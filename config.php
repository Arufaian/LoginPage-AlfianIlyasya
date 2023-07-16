<?php 
$db = mysqli_connect("localhost", "root", "", "latihan");

function register($data) {
    global $db;
    $username = stripslashes(strtolower($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    // cek username, apakah sudah ada?
    $result = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('Username yang dipilih sudah ada, silahkan buat username yang lain');
                </script>";

                return false;
    }

    // enskripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan user ke database
    mysqli_query($db, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($db);


}

?>