<?php
session_start();
// membuat database / isikan dengan nama kamu
$database = [
    'email' => 'dastinmaq777@gmail.com',
    'password' => '1366x766'
];

//cek apakah terdapat submit yang dilakukan
if (isset($_POST['submit'])) {
    //mengambil nilai yang dikirim melalui method post ke dalam variabel
    $email = $_POST['email'];
    $password = $_POST['password'];

    //mengecek apakah username dan password sesuai dengan database
    if ($email == $database['email'] && $password == $database['password']) {
        //set session username
        $_SESSION['email'] = $email;
        //redirect/mengarahkan menuju halaman admin
        header("location:admin-tokped.php");
    } else {
        //memunculkan pemberitahuan gagal login dan redirect ke login page
        echo '<script> alert("Username atau password salah!");
        window.location="login-page-tokped.php"; </script>';
    }
} else {
    //jika tidak ada submit mengembalikan ke login page
    echo '<script> window.location="login-page-tokped.php"; </script>';
}
