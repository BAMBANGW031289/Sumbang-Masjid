<?php

include '../koneksi.php';

$judul = mysql_real_escape_string($_POST['judul']);
$teks = mysql_real_escape_string($_POST['teks']);

$query = "INSERT INTO berita(judul, teks) VALUES('$judul', '$teks');";
$result = mysql_query($query);

if (mysql_affected_rows() > 0) {
    echo "<script>
                alert('Berita telah ditambahkan!');
            </script>";
    echo "<script>
                window.location.href = 'mberita.php';
            </script>";
} else {
    echo "<script>
                alert('Berita gagal ditambahkan!');
            </script>";
    echo "<script>
                window.location.href = 'mberita.php';
            </script>";
}
?>