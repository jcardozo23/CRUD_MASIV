<html>
    <head>
<title>Lista de usuarios</title>
    </head>
    <body>
        <?php
        include("Conexion.php");
        $sql="select * from cliente";
        $Resultado=mysqli_query($conexion,$sql);
        ?>
    <h1>Lista de usuarios</h1> 
    <a href="Agregar.php">Nuevo Usuario</a><br><br>   
    
    <table>
<thead>
   <tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>CELULAR</th>
    <th>CORREO</th>
    <th>EDAD</th>
    <TH>ACCIONES</TH>
</tr>
</thead>
<tbody>
    <?php while($filas=mysqli_fetch_assoc($Resultado)){
    ?>
<tr>
    <td><?php echo $filas ['ID']?></td>
    <td><?php echo $filas ['NOMBRE']?></td>
    <td><?php echo $filas ['APELLIDO']?></td>
    <td><?php echo $filas ['CELULAR']?></td>
    <td><?php echo $filas ['CORREO']?></td>
    <td><?php echo $filas ['EDAD']?></td>
    <td> 
        <?php echo "<a href='Eliminar.php?id=".$filas['ID']."'>Eliminar</a>"; 
        ?>
        
    </td>
</tr>

<?php
    }
?>
</tbody>
    </table>
    <?php
    mysqli_close($conexion);
    ?>
    </body>
</html>