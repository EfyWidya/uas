<?php
$koneksi = new mysqli('localhost', 'root', '', 'interpro');
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$matkul = $_POST['matkul'];
$judul = $_POST['judul'];

$sql = "INSERT INTO Efy VALUES ('$nama', '$nim', '$prodi', '$matkul', '$judul')";
mysqli_query($koneksi, $sql);

echo "<h1> Efy </h1>";
echo "<h3>";
echo "nama\t : $nama"."<h3>";
echo "nim\t : $nim"."<h3>";
echo "prodi\t : $prodi"."<h3>";
echo "matkul\t : $matkul"."<h3>";
echo "judul\t : $judul"."<h3>";
?>