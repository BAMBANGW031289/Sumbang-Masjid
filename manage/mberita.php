<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
        <meta charset="utf-8">
        <title>Kelola Berita Update</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
        <?php include '../assets.php'; ?>
        
        <style>
            tr, td {
                text-align: center;
                vertical-align: middle;
            }
        </style>
    </head>
    <body>
        <div id="bd-main">
            <div class="bd-sheet clearfix">
                <header class="bd-header">

                    <div class="bd-shapes">

                    </div>

                </header>
                <?php include('navadmin.php'); ?>
                <div class="bd-layout-wrapper">
                    <div class="bd-content-layout">
                        <div class="bd-content-layout-row">
                            <div class="bd-layout-cell bd-sidebar1">
                                <?php include('sidebaradmin.php'); ?>
                            </div>
                            <div class="bd-layout-cell bd-content">
                                <article class="bd-post bd-article">
                                    <h2 class="bd-postheader">Kelola Berita Update</h2>

                                    <div class="bd-postcontent bd-postcontent-0 clearfix"><div class="bd-content-layout">
                                            <div class="bd-content-layout-row">
                                                <div class="bd-layout-cell" style="width: 100%" >
                                                    <?php $query = "SELECT * FROM berita;";
                                                    $result = mysql_query($query);
                                                    if(mysql_num_rows($result) > 0):
                                                    ?>
                                                    <table style="width: 100%">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Judul Berita</th>
                                                            <th>Tanggal</th>
                                                            <th>Kelola</th>
                                                        </tr>
                                                        <?php $i = 1; ?>
                                                        <?php while($r = mysql_fetch_array($result)): ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $r['judul']; ?></td>
                                                            <td style="text-align: center"><?php echo $r['tanggal']; ?></td>
                                                            <td style="text-align: center"><a href="hapusberita.php?id=<?php echo $r['idberita']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="bd-button">Hapus</a></td>
                                                        </tr>
                                                        <?php $i++; ?>
                                                        <?php endwhile; ?>
                                                    </table>
                                                    <?php else: ?>
                                                    <center>
                                                        <h2>Belum ada Berita</h2>
                                                    </center>
                                                    <?php endif; ?>
                                                    <br>
                                                    <center>
                                                        <a class="bd-button" href="tambahberita.php">Tambah</a>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('../footer.php'); ?>
            </div>
        </div>


    </body></html>