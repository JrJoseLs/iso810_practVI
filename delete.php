<?php

include("db.php");
$con=conectar();

$id_cuenta=$_GET['id'];

$sql="DELETE FROM cxc  WHERE id_cuenta='$id_cuenta'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: CuentasxCobrar.php");
    }
?>
