<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['id_barang'],$_POST['nama_barang'],$_POST['stok'],$_POST['tglproduksi'],$_POST['tglkadaluarsa']);
	header('location:tampil_barang.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['namabarang'],$_POST['stok'],$_POST['tglproduksi'],$_POST['tglkadaluarsa'],$_POST['idbarang']);
	header('location:tampil_barang.php');
}
elseif($action=="delete")
{
	$id_barang = $_GET['id'];
	$koneksi->delete_data($id_barang);
	header('location:tampil_barang.php');
}
?>