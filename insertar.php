<?php
include("db.php");
$con=conectar();

$id_cuenta=$_POST['id_cuenta'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$cliente=$_POST['cliente'];
$fecha=$_POST['fecha'];
$monto=$_POST['monto'];

$sql="INSERT INTO cxc VALUES('$id_cuenta','$producto','$cantidad','$cliente','$fecha','$monto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: CuentasxCobrar.php");
    
}else {
}
?>
