<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Tambah Data Barang</h2>
  <form method="post" action="proses_barang.php?action=add">
    <div class="mb-3 mt-3">
      <label for="id_barang">ID Barang</label>
      <input type="text" class="form-control" id="id_barang" placeholder="Enter ID Barang" name="id_barang">
    </div>
    <div class="mb-3">
      <label for="nama_barang">Nama Barang</label>
      <input type="text" class="form-control" id="nama_barang" placeholder="Enter Nama Barang" name="nama_barang">
    </div>
    <div class="mb-3 mt-3">
      <label for="stok">Stok Barang</label>
      <input type="text" class="form-control" id="stok" placeholder="Enter Stok Barang" name="stok">
    </div>
    <div class="mb-3 mt-3">
      <label for="tglproduksi">Tanggal Produksi</label>
      <input type="date" class="form-control" id="tglproduksi" name="tglproduksi">
    </div>
    <div class="mb-3 mt-3">
      <label for="tglkadaluarsa">Tanggal Kadaluarsa</label>
      <input type="date" class="form-control" id="tglkadaluarsa" name="tglkadaluarsa">
    </div>
    <button type="submit" class="btn btn-primary" name="tombol" value="Simpan">Simpan</button>
  </form>
</div>

</body>
</html>
