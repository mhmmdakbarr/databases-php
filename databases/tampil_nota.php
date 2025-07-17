<?php 	
include('koneksi.php');
$db = new database();
$data_nota = $db->tampil_nota();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Transaksi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Tabel Transaksi</h2>
  <a href="nota.php">Tambah Data</a>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>Nomor Nota</th>
        <th>ID Barang</th>
        <th>Jumlah Beli</th>
        <th>Harga</th>
        <th>Total</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
		$no = 1;
		foreach($data_nota as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['no_nota'];?></td>
				<td><?php echo $row['id_barang']; ?></td>
				<td><?php echo $row['jumlah_beli']; ?></td>
				<td><?php echo $row['harga']; ?></td>
				<td><?php echo $row['total']; ?></td>
				<td>
					<a href="proses_nota.php?action=delete&no=<?php echo $row['no_nota']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
</div>

</body>
</html>