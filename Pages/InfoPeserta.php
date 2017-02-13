<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
        <meta charset="iso-8859-1">
        <title>SISFO_PBMT</title>
        
        <link href="css/HeaderFooter.css" rel="stylesheet">
        <link href="css/InfoPeserta.css" rel="stylesheet">
        <link href="css/MenuUtama.css" rel="stylesheet">
        <!-- Insert Google Analytics code here -->
    </head>
    <body>
        <div id="FooterLayer" style="position:absolute;text-align:center;left:0px;bottom:0px;width:100%;height:50px;z-index:4;" title="Footer">
            <div id="FooterLayer_Container" style="width:1366px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
            </div>
        </div>
        <div id="HeaderLayer" style="position:absolute;text-align:left;left:0px;top:0px;width:100%;height:123px;z-index:5;" title="Header">
            <label for="" id="Label1" onclick="window.location.href = './MenuUtama.php';
        return false;" style="position:absolute;left:0px;top:13px;width:1358px;height:62px;line-height:62px;z-index:0;">SISTEM INFORMASI PEMBIAYAAN BMT</label>
        </div>
        <div id="container">
            <div id="wb_Image1" style="position:absolute;left:0px;top:125px;width:1366px;height:476px;z-index:6;">
                <img src="images/pbmt04.jpg" id="Image1" alt=""></div>
            <div id="wb_Form1" style="position:absolute;left:227px;top:164px;width:929px;height:386px;z-index:7;">
                <form name="Form1" method="post" action="" enctype="text/plain" id="Form1">
                    <label for="" id="Label3" style="position:absolute;left:326px;top:52px;width:73px;height:27px;line-height:27px;z-index:1;">FILTER :</label>
                    <select name="cbFilterdata" size="1" id="Combobox1" style="position:absolute;left:407px;top:52px;width:181px;height:31px;z-index:2;">
                        <option>Data Peserta</option>
                        <option>Rekening</option>
                        <option>Pembiayaan</option>
                    </select>
                    <input type="submit" id="Button1" name="ViewData" value="View Data" style="position:absolute;left:340px;top:92px;width:248px;height:39px;z-index:3;">
                </form>
            </div>
            <label for="" id="Label2" style="position:absolute;left:204px;top:179px;width:983px;height:26px;line-height:26px;z-index:8;">INFO PESERTA</label>
            <div id="wb_CssMenu1" style="position:absolute;left:0px;top:83px;width:1366px;height:41px;text-align:center;z-index:9;">
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