<?php 	
include('koneksi.php');
$db = new database();
$data_user = $db->tampil_user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Tabel User</h2>
  <a href="tambah_user.php">Tambah Data</a>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>ID User</th>
        <th>Nama </th>
        <th>Username</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
		<?php 
		$no = 1;
		foreach($data_user as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['iduser']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['password']; ?></td>
				<td>
					<a href="edit_usr.php?id=<?php echo $row['iduser']; ?>">Update</a>
					<a href="proses_user.php?action=delete&id=<?php echo $row['iduser']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>