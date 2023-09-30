<?php
// 
$username = $_POST['syahal131'];
$password = $_POST['12345'];
$namaUser = "syahal131"; 
$kataSandi = "12345"; 

// if
if ($username == $namaUser && $password == $kataSandi) {
    echo "Anda berhasil login";
} elseif ($username == $namaUser) {
    echo "Password salah";
} elseif ($password == $kataSandi) {
    echo "Username salah";
} else {
    echo "Mohon maaf username dan password salah";
}
?>