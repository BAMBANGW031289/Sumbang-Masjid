<?php 
error_reporting(0);
session_start();
if(!$_SESSION['login']['status']){
    header("Location: index.php");
}
?>
<nav class="bd-nav">
    <ul class="bd-hmenu">
        <?php $queryP = "SELECT * FROM pesan WHERE status='0'"; ?>
        <?php $resultP = mysql_query($queryP); ?>
        <?php if(mysql_num_rows($resultP) > 0): ?>
        <li><a href="mpesan.php"><b>Pesan <?php echo "(".mysql_num_rows($resultP).")"; ?></b></a></li>
        <?php else: ?>
        <li><a href="mpesan.php">Pesan</a></li>
        <?php endif; ?>`
        <li><a href="#">Konfirmasi</a>
            <ul>
                <li><a href="profil.php">Konfirmasi Tunai</a></li>
                <li><a href="mmaterial.php">Konfirmasi Material</a></li>
            </ul>
        </li>
        <li><a href="mmaterial.php">Kelola Material</a></li>
        <li><a href="mberita.php">Kelola Berita Update</a></li>
    </ul>
</nav>