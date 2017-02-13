<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
        <meta charset="iso-8859-1">
        <title>SISFO_PBMT</title>
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link href="cupertino/jquery-ui.min.css" rel="stylesheet">
        <link href="css/HeaderFooter.css" rel="stylesheet">
        <link href="css/DaftarAnggota.css" rel="stylesheet">
        <link href="css/MenuUtama.css" rel="stylesheet">
        <script src="cupertino/jquery-1.12.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="cupertino/jquery.ui.core.min.js"></script>
        <script src="cupertino/jquery.ui.widget.min.js"></script>
        <script src="cupertino/jquery.ui.datepicker.min.js"></script>
        <script>
            $(function () {
                $("#datepicker").datepicker();
            });
        </script>
        <!-- Insert Google Analytics code here -->
    </head>
    <body>
        <div id="FooterLayer" style="position:absolute;text-align:center;left:0px;bottom:0px;width:100%;height:50px;z-index:20;" title="Footer">
            <div id="FooterLayer_Container" style="width:1366px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
            </div>
        </div>
        <div id="HeaderLayer" style="position:absolute;text-align:left;left:0px;top:0px;width:100%;height:123px;z-index:21;" title="Header">
            <label for="" id="Label1" onclick="window.location.href = './MenuUtama.php';
        return false;" style="position:absolute;left:0px;top:13px;width:1358px;height:62px;line-height:62px;z-index:0;">SISTEM INFORMASI PEMBIAYAAN BMT</label>
        </div>
        <div id="container">
            <div id="wb_Image1" style="position:absolute;left:0px;top:123px;width:1366px;height:476px;z-index:22;">
                <img src="images/pbmt04.jpg" id="Image1" alt=""></div>
            <div id="wb_Form1" style="position:absolute;left:227px;top:140px;width:934px;height:436px;z-index:23;">
                <form name="Form1" method="post" action="" enctype="text/plain" id="Form1">
                    <textarea name="txtalamatAGT" id="TextArea1" style="position:absolute;left:169px;top:143px;width:236px;height:102px;z-index:1;" rows="5" cols="36" autofocus></textarea>
                    <input type="text" id="Editbox1" style="position:absolute;left:169px;top:55px;width:236px;height:18px;line-height:18px;z-index:2;" name="txtnoktp" value="">
                    <input type="text" id="Editbox2" style="position:absolute;left:169px;top:100px;width:236px;height:18px;line-height:18px;z-index:3;" name="txtnamaAGT" value="">
                    <label for="" id="Label5" style="position:absolute;left:5px;top:179px;width:156px;height:33px;line-height:33px;z-index:4;">ALAMAT :</label>
                    <label for="" id="Label4" style="position:absolute;left:13px;top:99px;width:148px;height:22px;line-height:22px;z-index:5;">NAMA :</label>
                    <label for="" id="Label3" style="position:absolute;left:13px;top:55px;width:148px;height:21px;line-height:21px;z-index:6;">NO.KTP :</label>
                    <label for="" id="Label7" style="position:absolute;left:496px;top:55px;width:148px;height:21px;line-height:21px;z-index:7;">TEMPAT LAHIR :</label>
                    <label for="" id="Label8" style="position:absolute;left:496px;top:100px;width:148px;height:21px;line-height:21px;z-index:8;">TANGGAL LAHIR :</label>
                    <label for="" id="Label9" style="position:absolute;left:496px;top:143px;width:148px;height:21px;line-height:21px;z-index:9;">LOKASI USAHA :</label>
                    <label for="" id="Label10" style="position:absolute;left:468px;top:185px;width:176px;height:21px;line-height:21px;z-index:10;">JENIS USAHA :</label>
                    <label for="" id="Label11" style="position:absolute;left:496px;top:226px;width:148px;height:21px;line-height:21px;z-index:11;">NIK BMT :</label>
                    <input type="text" id="Editbox4" style="position:absolute;left:652px;top:55px;width:236px;height:18px;line-height:18px;z-index:12;" name="txttemplahir" value="">
                    <input type="text" id="datepicker" style="position:absolute;left:652px;top:99px;width:236px;height:18px;line-height:18px;z-index:13;" name="txtMPW" value="">
                    <input type="text" id="Editbox6" style="position:absolute;left:652px;top:143px;width:236px;height:18px;line-height:18px;z-index:14;" name="txtLksUsh" value="">
                    <input type="text" id="Editbox7" style="position:absolute;left:652px;top:185px;width:236px;height:18px;line-height:18px;z-index:15;" name="txtJnUsh" value="">
                    <input type="text" id="Editbox8" style="position:absolute;left:652px;top:226px;width:236px;height:18px;line-height:18px;z-index:16;" name="txtnikBMT" value="">
                    <input type="submit" id="Button1" name="btndaftar" value="DAFTAR" style="position:absolute;left:188px;top:334px;width:160px;height:44px;z-index:17;">
                    <input type="reset" id="Button2" name="btncancel" value="CANCEL" style="position:absolute;left:387px;top:334px;width:160px;height:44px;z-index:18;">
                    <input type="submit" id="Button3" name="btnubah" value="EDIT" style="position:absolute;left:585px;top:334px;width:160px;height:44px;z-index:19;">
                </form>
            </div>
            <label for="" id="Label2" style="position:absolute;left:204px;top:153px;width:983px;height:26px;line-height:26px;z-index:24;">DATA ANGGOTA</label>
            <div id="wb_CssMenu1" style="position:absolute;left:0px;top:83px;width:1366px;height:41px;text-align:center;z-index:25;">
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
            <input id="jQueryDatePicker1_input" name="jQueryDatePicker1" style="display:none" type="text" value="">
            <div id="jQueryDatePicker1" style="position:absolute;left:113px;top:261px;width:89px;height:88px;z-index:26;visibility:hidden;">
            </div>
        </div>
    </body>
</html>