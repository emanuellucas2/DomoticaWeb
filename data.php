<?php
include ('connection.php');
$sql_insert = "INSERT INTO amostras (Usuario_id, eletro, pot_ativa, pot_aparente,micro) VALUES ('".$_GET["Usuario_id"]."', '".$_GET["eletro"]."', '".$_GET["pot_ativa"]."', '".$_GET["pot_aparente"]."','".$_GET["micro"]."')";
if(mysqli_query($con,$sql_insert))
{
echo "Done";
mysqli_close($con);
}
else
{
echo "error is ".mysqli_error($con );
}
?>