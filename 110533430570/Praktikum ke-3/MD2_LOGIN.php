<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #0000FF;
}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style3 {font-size: 24px}
-->
</style>
</head>
<script>
    function validasi(){
        var namaValid    = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
        var emailValid   = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        var nama         = formulir.nama.value;
        var jeniskelamin = formulir.jenis_kelamin.value;
        var email        = formulir.email.value;
        var pesan = '';
        
        if (nama == '') {
            pesan = '-Nama tidak boleh kosong\n';
        }
        
        if (nama != '' && !nama.match(namaValid)) {
            pesan += '-nama tidak valid\n';
        }
        
        if (jeniskelamin == '') {
            pesan += '-jenis kelamin harus dipilih\n';
        }
        
        if (email == '') {
            pesan += '-email tidak boleh kosong\n';
        }
        
        if (email !=''  && !email.match(emailValid)) {
            pesan += '-alamat email tidak valid\n';
        }
        
        if (pesan != '') {
            alert('Maaf, ada kesalahan pengisian Formulir : \n'+pesan);
            return false;
        }
    return true
    }
</script>
<body bgcolor="#0099FF">
<fieldset style="margin:auto; width:40%;">
<legend></legend>
<form name="formulir" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onSubmit="return validasi()">
    <p align="center" class="style1"><span class="style3">Halaman Login
  	</span><br />
    <hr color="#000000" size="3px">
    </p>
  <span class="style2">Username : </span><br />
    <input type="text" name="user" placeholder="masukkan username" />
  <p>
        <span class="style2">Password :</span> <br />
        <input type="password" name="psw" placeholder="password Anda" />
  </p>
    
  <p>
    <input type="submit" value="Login" name="submit" />
  </p>
</form>

</fieldset>

<?php 
if (isset($_POST['submit'])) {
	if ((isset($_POST['user'])&&$_POST['user']=='ain')&&(isset($_POST['psw'])&&$_POST['psw']=='dealove')) {
		echo "<center>Selamat datang, ". $_POST['user']."</center>";
	}
	else{
		echo "<script>alert('Username dan/atau password salah')</script>";
	}
}
 ?>
</body>
</html>
