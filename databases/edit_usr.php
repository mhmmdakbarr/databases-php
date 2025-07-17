<?php 	
include('koneksi.php');
$db = new database();
$iduser = $_GET['id'];
if(! is_null($iduser))
{
	$data_user = $db->get_by_id1($iduser);
}
else
{
	header('location:tampil_user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Tambah Data User</h2>
  <form method="post" action="proses_user.php?action=update">
    <div class="mb-3 mt-3">
      <label for="iduser">ID User</label>
      <input type="text" class="form-control" id="iduser" placeholder="Enter ID User" readonly name="iduser" value="<?php echo $data_user['iduser']; ?>"/>
    </div>
    <div class="mb-3">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama" value="<?php echo $data_user['nama']; ?>"/>
    </div>
    <div class="mb-3 mt-3">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="<?php echo $data_user['username']; ?>"/>
    </div>
    <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php echo $data_user['password']; ?>"/>
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
    <button type="submit" class="btn btn-primary" name="tombol" value="update">Update</button>
  </form>
</div>
