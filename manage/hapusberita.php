<?php
include '../koneksi.php';
if (isset($_GET['id'])) {
    $id = mysql_real_escape_string($_GET['id']);
    $query = "DELETE FROM berita WHERE idberita = '$id'";
    $result = mysql_query($query);
    if (mysql_affected_rows() > 0) {
        echo "<script>
            alert('Berita telah dihapus!!!.');
        </script>";
    } else {
        echo "<script>
            alert('Berita gagal dihapus!!!.');
        </script>";
    }
} else {
    echo "<script>
            alert('Berita tidak ditemukan!!!.');
        </script>";
}
echo "<script>
            window.location.href = 'mberita.php';
        </script>";
?>