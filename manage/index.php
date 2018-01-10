<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
        <meta charset="utf-8">
        <title>Kontak Kami</title>
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
                            <div class="bd-layout-cell bd-content"><article class="bd-post bd-article">
                                    <h2 class="bd-postheader">Kontak Kami</h2>

                                    <div class="bd-postcontent bd-postcontent-0 clearfix"><div class="bd-content-layout">
                                            <div class="bd-content-layout-row">
                                                <div class="bd-layout-cell" style="width: 100%" >
                                                    <p style="padding-left: 40px;">Apabila anda memiliki pertanyaan mengenai sumbangan <span style="font-weight: bold;">MASJID AGUNG AL-JAUHAR</span>&nbsp;anda dapat menghubungi</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bd-content-layout">
                                            <div class="bd-content-layout-row">
                                                <div class="bd-layout-cell" style="width: 50%" >
                                                    <p style="text-align: center;"><span style="font-weight: bold;">Bambang Wisnu</span></p><p style="text-align: center;">bams@gmail.com</p><p style="text-align: center;">088181818181</p>
                                                </div><div class="bd-layout-cell" style="width: 50%" >
                                                    <p style="text-align: center;"><span style="font-weight: bold;">Doni Birdawan</span></p><p style="text-align: center;">donybiardawan@gmail.com</p><p style="text-align: center;">08818181818</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bd-content-layout">
                                            <div class="bd-content-layout-row">
                                                <div class="bd-layout-cell" style="width: 100%" >
                                                    <p style="padding-left: 40px; ">Anda juga dapat mengirimkan pertanyaan melalui form yang sudah kami sediakan</p>
                                                    <center>
                                                        <form method="POST" action="proseskontak.php">
                                                            <table style="width: 50%;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 50%; text-align: right; ">Nama</td>
                                                                        <td style="width: 50%; "><input name="nama" type="text"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 50%; text-align: right; ">Email</td>
                                                                        <td style="width: 50%; "><input name="email" type="text" /></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 50%; text-align: right; ">Telepon</td>
                                                                        <td style="width: 50%; "><input name="telepon" type="text"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 50%; text-align: right; ">Pertanyaan</td>
                                                                        <td style="width: 50%; "><textarea name="pesan" rows="10"></textarea></td>
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


                                </article></div>
                        </div>
                    </div>
                </div>
                <?php include('../footer.php'); ?>
            </div>
        </div>


    </body></html>