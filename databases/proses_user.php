<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_user($_POST['iduser'],$_POST['nama'],$_POST['username'],$_POST['password']);
	header('location:tampil_user.php');
}
elseif($action=="update")
{
	$koneksi->update_user($_POST['nama'],$_POST['username'],$_POST['password'],$_POST['iduser']);
	header('location:tampil_user.php');
}
elseif($action=="delete")
{
	$iduser = $_GET['id'];
	$koneksi->delete_user($iduser);
	header('location:tampil_user.php');
}
?>