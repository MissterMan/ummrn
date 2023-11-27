<?php
	include"koneksi.php";
	$projectid=$_POST['projectid'];
	$studentid=$_POST['studentid'];
	$motive=$_POST['motivation'];
    /**
	$lokasi=$_FILES['foto']['tmp_name'];
	$tipe=end((explode(".",$_FILES['foto']['name'])));
	$ukuran=$_FILES['foto']['size'];
	$file=rand(100,10000)."-pengguna.$tipe";
    $folder="foto/";
     */
	$sql="insert into joinresearch(id_project,id_student,motivation) values('$projectid','$studentid','$motive')";
	$query=mysqli_query($koneksi,$sql);
    if($query){
        echo"
            <script>
                window.alert('Your request has been sent.');
                window.location.href='http://localhost/ummrn/';
            </script>
        ";
    }else{
        echo"
            <script>
                window.alert('You have been registered in this project.');
                window.location.href='http://localhost/ummrn/';
            </script>
        ";
    }
?>