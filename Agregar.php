<html>


<head>
<title>AGREGAR</title>
</head>
<body>
    <?php
    if(isset($_POST['enviar'])){
       
        $NOMBRE=$_POST['NOMBRE'];
        $APELLIDO=$_POST['APELLIDO'];
        $CELULAR=$_POST['CELULAR'];
        $CORREO=$_POST['CORREO'];
        $EDAD=$_POST['EDAD'];

        include("Conexion.php");
        $sql="insert into cliente(NOMBRE,APELLIDO,CELULAR,CORREO,EDAD)
        values ('".$NOMBRE."','".$APELLIDO."','".$CELULAR."','".$CORREO."','".$EDAD."')";
        $Resultado=mysqli_query($conexion,$sql);

        if($Resultado){
            echo"<script language='javaScript'>
            alert('Se Guardaron los datos correctamente');
            location.assign('Index.php');
            </script>";

        }else{

            echo"<script language='javaScript'>
            alert('Datos No gurdados');
            location.assign('Index.php');
            </script>";
        }
         mysqli_close($conexion);
   } 
   else
   {
   ?>
    <h1>Agregar Alumno</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label> NOMBRE:</label>
        <input type="text" name="NOMBRE"><br>
        <label> APELLIDO:</label>
        <input type="text" name="APELLIDO"><br>
        <label> CELULAR:</label>
        <input type="text" name="CELULAR"><br>
        <label> CORREO:</label>
        <input type="text" name="CORREO"><br>
        <label> EDAD</label>
        <input type="text" name="EDAD"><br>
        <input type="submit" name="enviar" value="AGREGAR"> 
        <a href="Index.php">Regresar</a>

    </form>
    <?php
    }
    ?>
</body>

</html>
