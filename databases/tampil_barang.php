<?php 	
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Tabel Barang</h2>
  <a href="tambah_barang.php">Tambah Data</a>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Tanggal Produksi</th>
        <th>Tanggal Kadaluarsa</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['idbarang'];?></td>
				<td><?php echo $row['namabarang']; ?></td>
				<td><?php echo $row['stok']; ?></td>
				<td><?php echo $row['tglproduksi']; ?></td>
				<td><?php echo $row['tglkadaluarsa']; ?></td>
				<td>
					<a href="edit_brg.php?id=<?php echo $row['idbarang']; ?>">Update</a>
					<a href="proses_barang.php?action=delete&id=<?php echo $row['idbarang']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
</div>

</body>
</html>