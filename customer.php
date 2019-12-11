

<!DOCTYPE html PUBLIC> 
<html> 
<head> 


<title>Pembelian Baju Vintage </title>


<marquee direction="left" scrollamount="2" align="center" behavior="alternate">
<b><font face="Arial" color="purple" size="3">Selamat datang, Costomerku:)</b></marquee></font>
<style type="text/css">
<!--
.style1 {color: #0099FF}
.style3 {color: #0000FF}
.style4 {color: #FF9900}
.style5 {color: #FF0000}
.style7 {
    color: #FF0000;
    font-size: 18px;
    font-weight: bold;
}
.style9 {color: #0000FF; font-weight: bold; }
-->



</style>


<script language = "JavaScript" type="text/JavaScript">
<!--
function barang()
{
    var catat = document.formbarang;
    var hargafifi = parseInt(catat.satu.value) * parseInt(catat.satujamaa.value);
    var hargapupi = parseInt(catat.lima.value) * parseInt(catat.limajamaa.value);
    var hargasiska= parseInt(catat.dua.value) * parseInt(catat.dua1.value);
    var hargacressida = parseInt(catat.enam.value) * parseInt(catat.enam1.value);
    var hargavenda = parseInt(catat.tujuh.value) * parseInt(catat.tujuh1.value);
     var hargatazhkia = parseInt(catat.delapan.value) * parseInt(catat.delapan1.value);

    var hargasemua = hargafifi + hargapupi + hargasiska + hargacressida + hargavenda + hargatazhkia;
    if (hargasemua > 100000)
    {
        catat.TotalBayar.value = hargasemua;
        catat.Diskon.value = 10000;
        catat.JumlahBayar.value = hargasemua - parseInt(catat.Diskon.value);
     }
     else
     {
        catat.TotalBayar.value = hargasemua;
        catat.Diskon.value = 0;
        catat.JumlahBayar.value = hargasemua;
    }   
}
function awal(){
document.formbarang.reset();
}
//-->
</script>
</head>





<body>
<h2 align="center" class="style1">DAFTAR MENU BAJU VINTAGE</h2>
<form name="formbarang" action="#">
<table border="1" align="center" style="width:589">
<tr bgcolor="#FFCC00">   
<th style="width:27" scope="col">No</th>
<th style="width:181" scope="col">Daftar Menu</th>
<th style="width:185" scope="col">Harga</th>
<th style="width:166" scope="col">Order</th>
</tr>
<tr>
<td style="text-align:center"><strong>1.</strong></td>
<td><strong>Harga Baju Fifi</strong></td>
<td><strong>@
<input type="text" name="satu" value="7000" size="20" disabled="disabled"/>
</strong></td>
<td><input name="satujamaa" type="text" onkeyup="barang()" value="0" size="20"/></td>
</tr>
<tr style="background-color:#CCFF99">
<td style="text-align:center"><strong>2.</strong></td>
<td><strong>Harga Baju Pupi</strong></td>
<td><strong>@
<input type="text" name="lima" value="50000" size="20" disabled="disabled"/>
</strong></td>
<td><input name="limajamaa" type="text" onkeyup="barang()" value="0" size="20"/></td>
</tr>
<tr>
<td style="text-align:center"><strong>3.</strong></td>
<td><strong>Harga Baju Siska</strong></td>
<td><strong>@
<input type="text" name="dua1" value="100000" size="20" disabled="disabled"/>
</strong></td>
<td><input name="dua" type="text" onkeyup="barang()" value="0" size="20"/></td>
</tr>
<tr>
<td style="text-align:center"><strong>4.</strong></td>
<td><strong>Harga Baju Cressida</strong></td>
<td><strong>@
<input type="text" name="enam1" value="78000" size="20" disabled="disabled"/>
</strong></td>
<td><input name="enam" type="text" onkeyup="barang()" value="0" size="20"/></td>
</tr>

<tr>
<td style="text-align:center"><strong>5.</strong></td>
<td><strong>Harga Baju Venda</strong></td>
<td><strong>@
<input type="text" name="tujuh1" value="45000" size="20" disabled="disabled"/>
</strong></td>
<td><input name="tujuh" type="text" onkeyup="barang()" value="0" size="20"/></td>
</tr>

<tr>
<td style="text-align:center"><strong>6.</strong></td>
<td><strong>Harga Baju Tazkhia</strong></td>
<td><strong>@
<input type="text" name="delapan1" value="157000" size="20" disabled="disabled"/>
</strong></td>
<td><input name="delapan" type="text" onkeyup="barang()" value="0" size="20"/></td>
</tr>



<tr style="background-color:#FF99FF">
<td colspan="3" style="text-align:center"><strong>Jumlah Total</strong></td>
<td><input name="TotalBayar" type="text" style="text-align:center" disabled="disabled" value="-" size="20"/></td>
</tr>
<tr>
<td colspan="3" style="text-align:center"><strong>Diskon )*</strong></td>
<td><input name="Diskon" type="text" style="text-align:center" disabled="disabled" value="-" size="20"/></td>
</tr>
<tr style="background-color:#FF99FF">
<td colspan="3" style="text-align:center"><strong>Jumlah Bayar</strong></td>
<td><input name="JumlahBayar" type="text" style="text-align:center" disabled="disabled" value="-" size="20"/></td>
</tr>
</table>


<p align="center"><span class="style7">)* </span><span class="style9">: Menunjukkan Jumlah potongan dikarenakan Pemesanan telah melebihi Rp. 100.000,00. Potongan tidak berlaku kelipatan</span> <br/>
</p>
<div id="Layer1" style="position:absolute; width:166px; height:45px; z-index:1; left: 585px; top: 420px;">
<input type="button" value="Hapus" onclick="awal()"/>
  
 <button><a href="input.php">Next</a></button>
</div>
</form>
</body>
</html>
