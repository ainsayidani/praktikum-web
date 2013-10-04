<?php

function matrik(){
$kol=0;
$bar=0;
if($kol=3 and $bar=4){
echo "<table width=250 border=1>
	<tr>
		<td>1</td>
		<td>2</td>
		<td>3</td>
	</tr>
	<tr>
		<td>4</td>
		<td>5</td>
		<td>6</td>
	</tr>
	<tr>
		<td>7</td>
		<td>8</td>
		<td>9</td>
	</tr>
	<tr>
		<td>10</td>
		<td>11</td>
		<td>12</td>
	</tr>
</table>";
} else echo "salah";

}
?>
<?php
matrik();
?>