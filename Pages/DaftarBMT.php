<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
        <meta charset="iso-8859-1">
        <title>SISFO_PBMT</title>
        
        <link href="css/HeaderFooter.css" rel="stylesheet">
        <link href="css/DaftarBMT.css" rel="stylesheet">
        <!-- Insert Google Analytics code here -->
    </head>
    <body>
        <div id="FooterLayer" style="position:absolute;text-align:center;left:0px;bottom:0px;width:100%;height:50px;z-index:21;" title="Footer">
            <div id="FooterLayer_Container" style="width:1366px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
            </div>
        </div>
        <div id="HeaderLayer" style="position:absolute;text-align:left;left:0px;top:0px;width:100%;height:123px;z-index:22;" title="Header">
            <label for="" id="Label1" onclick="window.location.href = './MenuUtama.php';
        return false;" style="position:absolute;left:0px;top:13px;width:1358px;height:62px;line-height:62px;z-index:0;">SISTEM INFORMASI PEMBIAYAAN BMT</label>
        </div>
        <div id="container">
            <div id="wb_Image1" style="position:absolute;left:0px;top:123px;width:1366px;height:476px;z-index:23;">
                <img src="images/pbmt04.jpg" id="Image1" alt=""></div>
            <div id="wb_Form1" style="position:absolute;left:227px;top:140px;width:934px;height:436px;z-index:24;">
                <form name="Form1" method="post" action="" enctype="text/plain" id="Form1">
                    <textarea name="txtalamat" id="TextArea1" style="position:absolute;left:169px;top:143px;width:236px;height:102px;z-index:1;" rows="5" cols="36" autofocus></textarea>
                    <input type="text" id="Editbox1" style="position:absolute;left:169px;top:55px;width:236px;height:18px;line-height:18px;z-index:2;" name="txtnoinduk" value="">
                    <input type="text" id="Editbox2" style="position:absolute;left:169px;top:100px;width:236px;height:18px;line-height:18px;z-index:3;" name="txtnamaBMT" value="">
                    <label for="" id="Label5" style="position:absolute;left:5px;top:179px;width:156px;height:33px;line-height:33px;z-index:4;">ALAMAT :</label>
                    <label for="" id="Label4" style="position:absolute;left:13px;top:99px;width:148px;height:22px;line-height:22px;z-index:5;">NAMA BMT :</label>
                    <label for="" id="Label3" style="position:absolute;left:13px;top:55px;width:148px;height:21px;line-height:21px;z-index:6;">NO.INDUK BMT :</label>
                    <input type="text" id="Editbox3" style="position:absolute;left:169px;top:267px;width:236px;height:18px;line-height:18px;z-index:7;" name="txtnoaBMT" value="">
                    <label for="" id="Label7" style="position:absolute;left:496px;top:55px;width:148px;height:21px;line-height:21px;z-index:8;">MPD :</label>
                    <label for="" id="Label8" style="position:absolute;left:496px;top:100px;width:148px;height:21px;line-height:21px;z-index:9;">MPW :</label>
                    <label for="" id="Label9" style="position:absolute;left:496px;top:143px;width:148px;height:21px;line-height:21px;z-index:10;">NO.TELPON :</label>
                    <label for="" id="Label10" style="position:absolute;left:468px;top:185px;width:176px;height:21px;line-height:21px;z-index:11;">NAMA KONTAK BMT :</label>
                    <label for="" id="Label11" style="position:absolute;left:496px;top:226px;width:148px;height:21px;line-height:21px;z-index:12;">NO.KONTAK BMT :</label>
                    <input type="text" id="Editbox4" style="position:absolute;left:652px;top:55px;width:236px;height:18px;line-height:18px;z-index:13;" name="txtMPD" value="">
                    <input type="text" id="Editbox5" style="position:absolute;left:652px;top:99px;width:236px;height:18px;line-height:18px;z-index:14;" name="txtMPW" value="">
                    <input type="text" id="Editbox6" style="position:absolute;left:652px;top:143px;width:236px;height:18px;line-height:18px;z-index:15;" name="txtnotelp" value="">
                    <input type="text" id="Editbox7" style="position:absolute;left:652px;top:185px;width:236px;height:18px;line-height:18px;z-index:16;" name="txtnamaKontak" value="">
                    <input type="text" id="Editbox8" style="position:absolute;left:652px;top:226px;width:236px;height:18px;line-height:18px;z-index:17;" name="txtnoKontak" value="">
                    <input type="submit" id="Button1" name="btndaftar" value="DAFTAR" style="position:absolute;left:188px;top:334px;width:160px;height:44px;z-index:18;">
                    <input type="reset" id="Button2" name="btncancel" value="CANCEL" style="position:absolute;left:387px;top:334px;width:160px;height:44px;z-index:19;">
                    <input type="submit" id="Button3" name="btnubah" value="EDIT" style="position:absolute;left:585px;top:334px;width:160px;height:44px;z-index:20;">
                </form>
            </div>
            <label for="" id="Label2" style="position:absolute;left:204px;top:153px;width:983px;height:26px;line-height:26px;z-index:25;">DATA BMT</label>
            <label for="" id="Label6" style="position:absolute;left:227px;top:408px;width:164px;height:24px;line-height:24px;z-index:26;">NO.ANGGOTA BMT :</label>
            <div id="wb_CssMenu1" style="position:absolute;left:0px;top:83px;width:1366px;height:41px;text-align:center;z-index:27;">
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
                            <li class="firstitem"><a href="#" target="_self">Data BMT</a>
                            </li>
                            <li><a href="#" target="_self">Data Rekening</a>
                            </li>
                            <li class="lastitem"><a href="#" target="_self">Data Anggota</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="withsubmenu" href="#" target="_self">Administrasi</a>

                        <ul>
                            <li class="firstitem"><a href="#" target="_self">Data Iuran</a>
                            </li>
                            <li><a href="#" target="_self">Data User</a>
                            </li>
                            <li class="lastitem"><a href="#" target="_self">submenu3</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>