<?php

include '../koneksi.php';
if (isset($_GET['id'])) {
    $id = mysql_real_escape_string($_GET['id']);
    $query = "DELETE FROM material WHERE idmaterial = '$id'";
    $result = mysql_query($query);
    if (mysql_affected_rows() > 0) {
        echo "<script>
            alert('Material telah dihapus!!!.');
        </script>";
        echo "<script>
            window.location.href = 'mmaterial.php';
        </script>";
    } else {
        echo "<script>
            alert('Material gagal dihapus!!!.');
        </script>";
        echo "<script>
            window.location.href = 'mmaterial.php';
        </script>";
    }
} else {
    echo "<script>
            alert('Material tidak ditemukan!!!.');
        </script>";
    echo "<script>
            window.location.href = 'mmaterial.php';
        </script>";
}
?>