<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
        <meta charset="utf-8">
        <title>Kelola Pesan Masuk</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
        <?php include '../assets.php'; ?>

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
                            <div class="bd-layout-cell bd-content"><article class="bd-post bd-article">
                                    <h2 class="bd-postheader">Kelola Pesan Masuk</h2>

                                    <div class="bd-postcontent bd-postcontent-0 clearfix"><div class="bd-content-layout">
                                            <div class="bd-content-layout-row">
                                                <div class="bd-layout-cell" style="width: 100%" >
                                                    <?php $query = "SELECT * FROM pesan;";
                                                    $result = mysql_query($query);
                                                    if(mysql_num_rows($result) > 0):
                                                    ?>
                                                    <table style="width: 100%">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Email</th>
                                                            <th>Pertanyaan</th>
                                                            <th colspan="2">Kelola</th>
                                                        </tr>
                                                        <?php $i = 1; ?>
                                                        <?php while($r = mysql_fetch_array($result)): ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $r['nama']; ?></td>
                                                            <td style="text-align: center"><?php echo $r['email']; ?></td>
                                                            <td style="text-align: center"><?php echo $r['pertanyaan']; ?></td>
                                                            <td style="text-align: center"><a href="bacapesan.php?id=<?php echo $r['idpesan']; ?>" class="bd-button">Baca</a></td>
                                                            <td style="text-align: center"><a href="hapusmaterial.php?id=<?php echo $r['idmaterial']; ?>" onclick="return confirm('Anda yakin ingin menghapus pesan ini?')" class="bd-button">Hapus</a></td>
                                                        </tr>
                                                        <?php $i++; ?>
                                                        <?php endwhile; ?>
                                                    </table>
                                                    <?php else: ?>
                                                    <center>
                                                        <h2>Belum ada Data</h2>
                                                    </center>
                                                    <?php endif; ?>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </article></div>
                        </div>
                    </div>
                </div>
                <?php include('../footer.php'); ?>
            </div>
        </div>


    </body></html>