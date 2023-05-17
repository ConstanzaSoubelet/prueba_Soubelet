<?php 
$conexion = mysqli_connect("localhost","root","","db_soubelet");
$region=$_POST['region'];
$consulta="SELECT id,
id_region,
comuna
from region
where id_region='$region'";

$result=mysqli_query($conexion,$consulta);

$cadena="<label>Comuna</label> 
<select id='lista2' name='lista2'>"; // lista2 : comuna

while ($ver=mysqli_fetch_row($result)) {
$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
}

echo  $cadena."</select>";
	

?>
