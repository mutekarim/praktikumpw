<<<<<<< HEAD
<?php
include "config.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
$sql = "INSERT INTO tb_user (nama,username,password,email) values ('$nama','$username','$password','$email')";
$query = mysqli_query($db, $sql);
if ($query){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=register.php'>";
}
}
?>

<!-- 
Sumber : http://ardisaputraaa.blogspot.com/2013/09/cara-membuat-form-daftar-login-dan.html#ixzz5Yjxjk9oT -->
=======
<?php
include "config.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
$sql = "INSERT INTO tb_user (nama,username,password,email) values ('$nama','$username','$password','$email')";
$query = mysqli_query($db, $sql);
 header("location:index.php");
if ($query){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}
}
?>
>>>>>>> 9629e48a8a2bfeac943c90dd7f681dad46a4425b