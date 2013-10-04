<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Tabel 1</title>
<style type="text/css">
<!--
#apDiv1 {
position:absolute;
width:178px;
height:24px;
z-index:1;
left: 284px;
top: 189px;
}
.style1 {
color: red;
font-weight: bold;
}
-->
</style>
</head>
<body>
<form method="post" action="praktikum_2b.php">
<h3 align="center" class="style1"><font color = "red" size = "14">Pembuatan Tabel Otomatis</font></h3>
<div align="center">
<table width="325" border="1" bgcolor = "green">

<tr>
<td style="text-align:center"><label><font color = "black">Kolom</font></label></td>
<td><strong>= </strong>
<input name="JumlahColum" type="text" id="JumlahColum" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr>
<td style="text-align:center"><font color = "black">Sel Total</font></td>
<td><strong>= </strong>
<input name="JumlahCell" type="text" id="JumlahCell" onKeyUp="getmax();" onFocus="this.select();"></td>
</tr>

</table>
</div>
<div id="apDiv1">
<br/>
<br/>
<br/>
<input type="submit" name="Generate" value="Generate..">
<input type="reset" name="Reset" value="Reset..">
</div>
</form>
</body>

</html>