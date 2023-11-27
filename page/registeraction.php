<?php
	include"koneksi.php";
	$name=$_POST['name'];
	$nim=$_POST['nim'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$descripition=$_POST['description'];
	$usr=$_POST['usr'];
	$psw=$_POST['psw'];
    $pswmd5=md5($psw);
    /**
	$lokasi=$_FILES['foto']['tmp_name'];
	$tipe=end((explode(".",$_FILES['foto']['name'])));
	$ukuran=$_FILES['foto']['size'];
	$file=rand(100,10000)."-pengguna.$tipe";
    $folder="foto/";
     */
	$sql="insert into students(name,nim,phone,email,usr,psw,description) values('$name','$nim','$phone','$email','$usr','$pswmd5','$description')";
	$query=mysqli_query($koneksi,$sql);
    if($query){
        echo"
            <script>
                window.alert('Registration Succeed.');
                window.location.href='http://localhost/ummrn/';
            </script>
        ";
    }else{
        echo"
            <script>
                window.alert('Registration Failed.');
                window.location.href='http://localhost/ummrn/';
            </script>
        ";
    }
?>