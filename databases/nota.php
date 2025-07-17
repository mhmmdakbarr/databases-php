
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
  <h2>Tambah nota</h2>
  <form method="post" action="proses_nota.php?action=add">
  <div class="mb-3 mt-3">
      <label for="no_nota">NO NOTA</label>
      <input type="text" class="form-control" placeholder="Enter no nota"name="no_nota">
    </div>
  
    <div class="mb-3 mt-3">
      <label for="id_barang">ID Barang</label>
      <input type="text" class="form-control" id="id_barang" placeholder="Enter ID Barang" name="id_barang">
    </div>
    <div class="mb-3">
      <label for="jumlah_beli">Jumlah Beli</label>
      <input type="text" class="form-control" id="jumlahbeli" placeholder="Enter Jumlah Beli" name="jumlah_beli">
    </div>
    <div class="mb-3 mt-3">
      <label for="harga">Harga</label>
      <input type="text" class="form-control" id="harga"  placeholder="Enter Harga" name="harga">
    </div>
    <button type="submit" class="btn btn-primary" name="tombol" value="Simpan">Simpan</button>
    <button type="reset" class="btn btn-primary" name="tombol" value="Reset form">batal</button>
  </form>
</div>
</body>
</html>
