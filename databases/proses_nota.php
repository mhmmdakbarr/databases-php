<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];

if($action == "add")
{	
	$koneksi->tambah_nota($_POST['no_nota'],$_POST['id_barang'],$_POST['jumlah_beli'],$_POST['harga']);
	header('location:tampil_nota.php');
}

elseif($action=="delete")
{
	$no_nota = $_GET['no'];
	$koneksi->delete_nota($no_nota);
	header('location:tampil_nota.php');
}
?>