<?php
session_start();
include "koneksi.php";

// Pastikan ini adalah langkah-langkah keamanan yang sesuai dengan kebutuhan Anda.
// Misalnya, gunakan fungsi filter_var untuk memastikan data yang benar-benar sesuai dengan format yang diinginkan.
$newName = $_POST['name'];
$newNim = $_POST['nim'];
$newPhone = $_POST['phone'];
$newEmail = $_POST['email'];
$newUsr = $_POST['usr'];

// Mengasumsikan $_SESSION['userid'] berisi ID pengguna
$userId = $_SESSION['userid'];
var_dump($userId);

// Melakukan query untuk memperbarui data di database
// $updateSql = "UPDATE students SET name = '$newName', nim = '$newNim', phone = '$newPhone', email = '$newEmail', usr = '$newUsr' WHERE id_student = $userId";
$updateSql = "UPDATE `students` SET `name` = '$newName', `nim` = '$newNim', `phone` = '$newPhone', `email` = '$newEmail', `usr` = '$newUsr' WHERE id_student = $userId";
$updateQuery = mysqli_query($koneksi, $updateSql);

if ($updateQuery) {
  echo "
            <script>
                window.alert('Update User Succeed.');
                window.location.href='http://localhost/ummrn/';
            </script>
        ";
} else {
  echo "
            <script>
                window.alert('Update User Failed.');
                window.location.href='http://localhost/ummrn/';
            </script>
        ";
}

mysqli_close($koneksi);
