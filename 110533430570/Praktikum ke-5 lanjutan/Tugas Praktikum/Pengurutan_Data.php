<html>
<head>
<title>Pengurutan</title>

<body>
<h2>Pengurutan Data by Ain Sayidani</h2>
<table border="1" cellspacing="1" cellpadding="5">
<?php
require_once './koneksi.php';

$sql = "SELECT * FROM mahasiswa order by nama";

$pola='asc';
$polabaru='asc';
if(isset($_GET['orderby'])){
	$orderby=$_GET['orderby'];
	$pola=$_GET['pola'];
	
	$sql = "SELECT * FROM  mahasiswa order by $orderby $pola";
	if($pola=='asc'){
		$polabaru='desc';
	}else{
		$polabaru='asc';
	}
}
?>	
    <th>
    	<td width="100">NIM</td>
        <td width="150"><a href='Pengurutan_Data.php?orderby=nama&pola=<?=$polabaru;?>'>Nama</a></td>
        <td>Alamat</td>
     </th>
     <?php
	//query database 
	$result=mysql_query($sql) or die(mysql_error());
	$no=1; //penomoran
	while($rows=mysql_fetch_object($result)){
      ?>
      <tr>
      <td><?php echo $no
        ?></td>
        <td><?php    echo $rows -> nim;?></td>
        <td><?php    echo $rows -> nama;?></td>
        <td><?php    echo $rows -> alamat;?></td>
      </tr>
      <?php
	$no++;
	}?>
    </table> 
    
</body>
</head>
</html>
