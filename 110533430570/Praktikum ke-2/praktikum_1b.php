<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Pass by value</title>
</head>

<body>
<p><h1>Contoh Pass By Reference</h1></p>
<br>

<?php
function tambah(&$val){
	$val++;
}
$input = 6;
tambah($input);
echo $input;
?>
</body>
</html>