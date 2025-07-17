<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_crudoop";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_barang");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($idbarang,$namabarang,$stok,$tglproduksi,$tglkadaluarsa)
	{
		mysqli_query($this->koneksi,"insert into tb_barang values ('$idbarang','$namabarang','$stok','$tglproduksi','$tglkadaluarsa')");
	}

	function get_by_id($idbarang)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_barang where idbarang='$idbarang'");
		return $query->fetch_array();
	}
	function update_data($namabarang,$stok,$tglproduksi,$tglkadaluarsa,$idbarang)
	{
		$query = mysqli_query($this->koneksi,"update tb_barang set namabarang='$namabarang',stok='$stok',tglproduksi='$tglproduksi',tglkadaluarsa='$tglkadaluarsa' 
		where idbarang='$idbarang'");
	}

	function delete_data($idbarang)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_barang where idbarang='$idbarang'");
	}

	function tampil_user()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_user");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_user($iduser,$nama,$username,$password)
	{
		mysqli_query($this->koneksi,"insert into tb_user values('$iduser','$nama','$username','$password')");
	}
	function get_by_id1($iduser)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where iduser='$iduser'");
		return $query->fetch_array();
	}
	function update_user($nama,$username,$password,$iduser)
	{
		$query = mysqli_query($this->koneksi,"update tb_user set nama='$nama',username='$username',password='$password' 
		where iduser='$iduser'");
	}

	function delete_user($iduser)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_user where iduser='$iduser'");
	}

	function tampil_nota()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_nota");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	
	function tambah_nota($no_nota,$id_barang,$jumlah_beli,$harga)
	{	
		$total=$jumlah_beli * $harga;
		$query = mysqli_query($this->koneksi, "insert into tb_nota values('$no_nota','$id_barang','$jumlah_beli','$harga','$total')");

		$result = mysqli_query($this->koneksi, "select stok from tb_barang where idbarang='$id_barang'");
		$row = mysqli_fetch_assoc($result);
		$stok = $row['stok'];

		$stok -=$jumlah_beli;
		$query = mysqli_query($this->koneksi, "update tb_barang set stok='$stok'
		where idbarang='$id_barang'");
	
	}

	function get_by_id2($no_nota)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_nota where no_nota='$no_nota'");
		return $query->fetch_array();
	}

	function delete_nota($no_nota)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_nota where no_nota='$no_nota'");
	}
}
?>