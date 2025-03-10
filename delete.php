
<?php 
$koneksi = new mysqli("localhost","root","","db_portofolio");
if($koneksi -> connect_error){
    echo("<script>alert('koneksi gagal')</script>");
};
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Mencegah SQL Injection
    $sql = "DELETE FROM coment WHERE id = $id";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('komentar berhasil dihapus'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $koneksi->error;
    }
}?>
