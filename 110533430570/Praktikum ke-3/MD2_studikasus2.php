<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Preselecting Data Checkbox</title>
</head>

<body>
 <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Perasaan
<input name="feeling[]" type = "checkbox" value="Senang" checked="CHECKED"/>Senang
<input type = "checkbox" name="feeling[]" value="Bahagia"/> Bahagia
<input name="feeling[]" type = "checkbox" value="Riang" checked="checked"/>Riang
<br>
<input type="submit" value="OK" /> 
</form>

<?php
//Ekstrasi Nilai
if (isset($_POST['feeling'])){
 foreach ($_POST['feeling'] as $key => $val ){
 echo $key . ' -> ' .$val . '<br />';
 }
}
?>
</body>
</html>
