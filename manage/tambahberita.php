<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
        <meta charset="utf-8">
        <title>Kelola Material</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
        <?php include '../assets.php'; ?>

        <style>
            table, tr, td{
                border: hidden;
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
                                    <h2 class="bd-postheader">Kelola Material</h2>

                                    <div class="bd-postcontent bd-postcontent-0 clearfix"><div class="bd-content-layout">
                                            <div class="bd-content-layout-row">
                                                <div class="bd-layout-cell" style="width: 100%" >
                                                    <center>
                                                        <form action="prosestambahberita.php" method="POST">
                                                            <table style="width: 50%; padding-left: 40px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 50%; text-align: right; ">Judul Berita</td>
                                                                        <td style="width: 50%; "><input name="judul" type="text"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 50%; text-align: right; ">Teks Berita</td>
                                                                        <td style="width: 50%; "><textarea name="teks"></textarea></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" style="text-align: center"><input class="bd-button" type="submit" value="Kirim" /></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </form>
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