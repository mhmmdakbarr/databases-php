<?php 	
include('koneksi.php');
$db = new database();
$idbarang = $_GET['id'];
if(! is_null($idbarang))
{
	$data_barang = $db->get_by_id($idbarang);
}
else
{
	header('location:tampil_barang.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Data Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="container mt-3">
  <h2>Update Data Barang</h2>
  <form method="post" action="proses_barang.php?action=update">
    <div class="mb-3 mt-3">
      <label for="idbarang">ID Barang</label>
      <input type="text" class="form-control" id="idbarang" placeholder="Enter ID Barang" readonly name="idbarang" value="<?php echo $data_barang['idbarang']; ?>"/>
    </div>
    <div class="mb-3">
      <label for="namabarang">Nama Barang</label>
      <input type="text" class="form-control" id="namabarang" placeholder="Enter Nama Barang" name="namabarang" value="<?php echo $data_barang['namabarang']; ?>"/>
    </div>
    <div class="mb-3 mt-3">
      <label for="stok">Stok Barang</label>
      <input type="text" class="form-control" id="stok" placeholder="Enter Stok Barang" name="stok" value="<?php echo $data_barang['stok']; ?>"/>
    </div>
    <div class="mb-3 mt-3">
      <label for="tglproduksi">Tanggal Produksi</label>
      <input type="date" class="form-control" id="tglproduksi" name="tglproduksi" value="<?php echo $data_barang['tglproduksi']; ?>"/>
    </div>
    <div class="mb-3 mt-3">
      <label for="tglkadaluarsa">Tanggal Kadaluarsa</label>
      <input type="date" class="form-control" id="tglkadaluarsa" name="tglkadaluarsa" value="<?php echo $data_barang['tglkadaluarsa']; ?>"/>
    </div>
    <button type="submit" class="btn btn-primary" name="tombol" value="Update">Update</button>
  </form>
</div>
