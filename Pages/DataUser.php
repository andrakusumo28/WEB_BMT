<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
        <meta charset="iso-8859-1">
        <title>SISFO_PBMT</title>
        
        <link href="css/HeaderFooter.css" rel="stylesheet">
        <link href="css/DataUser.css" rel="stylesheet">
        <link href="css/MenuUtama.css" rel="stylesheet"
        <!-- Insert Google Analytics code here -->
    </head>
    <body>
        <div id="FooterLayer" style="position:absolute;text-align:center;left:0px;bottom:0px;width:100%;height:50px;z-index:34;" title="Footer">
            <div id="FooterLayer_Container" style="width:1366px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
            </div>
        </div>
        <div id="HeaderLayer" style="position:absolute;text-align:left;left:0px;top:0px;width:100%;height:123px;z-index:35;" title="Header">
            <label for="" id="Label1" onclick="window.location.href = './MenuUtama.php';
        return false;" style="position:absolute;left:0px;top:13px;width:1358px;height:62px;line-height:62px;z-index:0;">SISTEM INFORMASI PEMBIAYAAN BMT</label>
        </div>
        <div id="container">
            <div id="wb_Image1" style="position:absolute;left:0px;top:125px;width:1366px;height:476px;z-index:36;">
                <img src="images/pbmt04.jpg" id="Image1" alt=""></div>
            <div id="wb_Form1" style="position:absolute;left:205px;top:165px;width:929px;height:386px;z-index:37;">
                <form name="Form1" method="post" action="" enctype="text/plain" id="Form1">
                    <div id="wb_Form2" style="position:absolute;left:219px;top:44px;width:479px;height:310px;z-index:17;">
                        <form name="DAFTARUSER" method="post" action="" id="Form2">
                            <label for="Editbox1" id="Label3" style="position:absolute;left:68px;top:21px;width:73px;height:18px;line-height:18px;z-index:1;">NOMOR:</label>
                            <input type="text" id="Editbox1" style="position:absolute;left:159px;top:14px;width:214px;height:21px;line-height:21px;z-index:2;" name="NOMOR" value="" maxlength="10">
                            <label for="Editbox2" id="Label4" style="position:absolute;left:68px;top:55px;width:73px;height:18px;line-height:18px;z-index:3;">NAMA:</label>
                            <input type="text" id="Editbox2" style="position:absolute;left:159px;top:50px;width:214px;height:21px;line-height:21px;z-index:4;" name="NAMA" value="">
                            <label for="Editbox3" id="Label5" style="position:absolute;left:55px;top:91px;width:86px;height:18px;line-height:18px;z-index:5;">PASSWORD:</label>
                            <input type="password" id="Editbox3" style="position:absolute;left:159px;top:86px;width:214px;height:21px;line-height:21px;z-index:6;" name="PASSWORD" value="" maxlength="10">
                            <label for="Editbox4" id="Label6" style="position:absolute;left:55px;top:131px;width:86px;height:18px;line-height:18px;z-index:7;">PASSLAMA:</label>
                            <input type="password" id="Editbox4" style="position:absolute;left:159px;top:122px;width:214px;height:21px;line-height:21px;z-index:8;" name="PASSLAMA" value="" maxlength="10">
                            <label for="Editbox5" id="Label7" style="position:absolute;left:34px;top:163px;width:107px;height:18px;line-height:18px;z-index:9;">CONFIRMPASS:</label>
                            <input type="password" id="Editbox5" style="position:absolute;left:159px;top:158px;width:214px;height:21px;line-height:21px;z-index:10;" name="code" value="">
                            <label for="Editbox6" id="Label8" style="position:absolute;left:68px;top:201px;width:73px;height:18px;line-height:18px;z-index:11;">ROLE:</label>
                            <input type="text" id="Editbox6" style="position:absolute;left:159px;top:194px;width:214px;height:21px;line-height:21px;z-index:12;" name="KEWENANGAN" value="">
                            <label for="Editbox7" id="Label9" style="position:absolute;left:34px;top:240px;width:107px;height:18px;line-height:18px;z-index:13;">KETERANGAN:</label>
                            <input type="text" id="Editbox7" style="position:absolute;left:159px;top:233px;width:214px;height:21px;line-height:21px;z-index:14;" name="KETERANGAN" value="">
                            <input type="submit" id="Button1" name="btnsimpan" value="SIMPAN" style="position:absolute;left:159px;top:271px;width:96px;height:25px;z-index:15;">
                            <input type="reset" id="Button2" name="" value="Reset" style="position:absolute;left:287px;top:271px;width:96px;height:25px;z-index:16;">
                        </form>
                    </div>
                </form>
            </div>
            <label for="" id="Label2" style="position:absolute;left:210px;top:180px;width:926px;height:26px;line-height:26px;z-index:38;">USER DATA</label>
            <div id="wb_CssMenu1" style="position:absolute;left:0px;top:83px;width:1366px;height:41px;text-align:center;z-index:39;">
                <ul>
                    <li class="firstmain"><a class="withsubmenu" href="#" target="_self">Menu&nbsp;Transaksi</a>

                        <ul>
                            <li class="firstitem"><a href="DaftarBmt.php">Daftar BMT</a>
                            </li>
                            <li><a href="DaftarAnggota.php">Daftar Anggota</a>
                            </li>
                            <li><a href="DaftarPeserta.php">Daftar Peserta</a>
                            </li>
                            <li class="lastitem"><a href="BayarIuran.php">Bayar Iuran</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="withsubmenu" href="#" target="_self">Menu&nbsp;Informasi</a>

                        <ul>
                            <li class="firstitem">
                                <a href="InfoPeserta.php">Info Peserta</a>
                            </li>
                            <li class="lastitem">
                                <a href="InfoTagihan.php">Info Tagihan</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#" target="_self">Laporan</a>
                    </li>
                    <li><a class="withsubmenu" href="#" target="_self">Properti</a>

                        <ul>
                            <li class="firstitem">
                                <a href="#" target="_self">Data BMT</a>
                            </li>
                            <li>
                                <a href="#" target="_self">Data Rekening</a>
                            </li>
                            <li class="lastitem">
                                <a href="#" target="_self">Data Anggota</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="withsubmenu" href="#" target="_self">Administrasi</a>

                        <ul>
                            <li class="firstitem"><a href="#" target="_self">Data Iuran</a>
                            </li>
                            <li><a href="DataUser.php">Data User</a>
                            </li>
                            <li class="lastitem"><a href="#" target="_self">Log_Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>