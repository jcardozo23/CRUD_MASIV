<?php

$id=$_GET['id'];
include("Conexion.php");
$sql="delete from cliente where ID='".$ID."'";
$Resultado=mysqli_query($Conexion,$sql);

if($Resultado){
    echo"<script language='javaScript'>
    alert('Cliente Eliminado');
    location.assign('Index.php');
    </script>";

}else{

    echo"<script language='javaScript'>
    alert('Datos No eliminado');
    location.assign('Index.php');
    </script>";
}

?>