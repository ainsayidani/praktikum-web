<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kombinasi Data</title>
</head>

<body>

	<form method="post" action="" name="frm_select">
    Tampilkan
    <select name="row_page"
    onchange="document.forms.frm_select.submit();">
	<option> -- Pilih -- </option>
    <option value="5">5</option>
    <option value="10">10</option>
	<option value="20">20</option>
    <option value="50">50</option>
    <option value="100">100</option>
    </select>  baris per halaman
    </form>
    
<?php
if(isset($_POST['row_page']) && $_POST['row_page']) {
	require_once './koneksi.php';
	
	//batas baris data
	$rowsPerPage = $_POST['row_page'];
	$tablename="mahasiswa";
	//nilai pertama
	$pageNum = 1;
	if(!empty($_GET['page']))
	{
		$pageNum = $_GET['page'];
	}
	$offset = ($pageNum - 1) * $rowsPerPage;
	// query database
	$sql  = "SELECT * FROM $tablename ORDER by nim asc LIMIT $offset, $rowsPerPage";
	$result = mysql_query($sql) or die('Error, query failed. ' . mysql_error());

//LENGKAPI
// Variabel $sql berisi pernyataan SQL retrieve dg limitasi
//$sql = 'SELECT * FROM Mahasiswa LIMIT 0 , 10';

if($result){
	if(mysql_num_rows($result)) { ?>
    <table border="1" cellspacing="1" cellpadding="5">
    <tr>
        <th width="100">NIM</th>
        <th width="150">Nama</th>
        <th>Alamat</th>
    </tr>
    <?php
    $i = 1;
	while ($row = mysql_fetch_row($result)) { ?>
        <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
        </tr>
	<?php
   }
	?>
    </table>

<?php
	$query   = "SELECT COUNT(nim) AS numrows FROM $tablename";
	$result  = mysql_query($query) or die('Error, query failed. ' . mysql_error());
	$row     = mysql_fetch_array($result, MYSQL_ASSOC);
	$numrows = $row['numrows'];
	$maxPage  = ceil($numrows/$rowsPerPage);
	$nextLink = '&nbsp;';
	if($maxPage >1)
	{
		$self     = $_SERVER['PHP_SELF'];
		$nextLink = array();
		for($page = 1; $page <= $maxPage; $page++)
		{
			$nextLink[] =  "<a href=\"".$baselink."?page=$page\">$page</a>";
		}
		$nextLink = "<p>Halaman : </p>" . implode(' ', $nextLink);
	}
	echo '<div id="navpage">'.$nextLink.'</div>';
	mysql_free_result($result);
?>

  <?php
  } else {
	echo 'Data Tidak Ditemukan';
  }

 }

}
?>

</body>
</html>
