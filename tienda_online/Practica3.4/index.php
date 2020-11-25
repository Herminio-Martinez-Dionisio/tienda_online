<?php
	/*$conexion = mysqli_connect("http://localhost:3306", "root	", ""); 
	mysqli_select_db($conexion, "tienda"); */
	//$tildes = $conexion->query("SET NAMES 'utf8'");//Para que se muestren las tildes correctamente
	
	/*$resultado = mysqli_query($conexion, $consulta);				
	if($row2 = mysqli_fetch_array($resultado))
	
	$result2 = mysqli_query($conexion, $consulta);		 
	while($row = mysqli_fetch_array($result2)){}*/
	
	//$basedatos = new SQLite3('tienda.db');
	include ('./db/conexion.php');
	?> 
<!DOCTYPE html>
<html>
	<head>
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  

    </head>
	<body>
    <style>
	.colirin{
		text-decoration: none;
		padding: 5px;
		font-weight: 600;
		font-size: 20px;
		color: #ffffff;
		background-color: #18b83a;
		border-radius: 10px;
		border: 1px none #0016b0;
		margin-left:10px;
	}
	
	</style>
    <h3>Lista de productos</h3><br>
    <a class="colirin" href="Insert.php"> Nuevo producto</a><br><br>
    <table style="margin-left:10px; margin-right:10px; width:70%;" class="table" border="1" action="ticket.php" method="get">
    	<tr>
        <th>Id producto</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Opciones</th>
        </tr>
        
        <?php
		$consulta = "SELECT * FROM productos;";
        $resultado = $basedatos->query($consulta );		 
		while ($row = $resultado->fetchArray()) {
		//while($row = $resultado->fetchArrays()){
			?>
            <tr>
            <td><?php echo $row['id_producto'];?></td>
            <td><?php echo $row['producto'];?></td>
            <td><?php echo $row['precio'];?></td>
            <td>
            <a href="view.php?idpro=<?php echo $row['id_producto'];?>" type="button" style="width:100px;height:30px;background-color:blue;color:black;font-size:12pt; font-family:Verdana;text-align:center;">Detalle</a>
            <a href="Update.php?idactu=<?php echo $row['id_producto'];?>" type="button" style="width:100px;height:30px;background-color:orange;color:black;font-size:12pt; font-family:Verdana;text-align:center;">Actualizar</a>
            <a href="Delete.php?idelim=<?php echo $row['id_producto'];?>" type="button" style="width:100px;height:30px;background-color:red;color:black;font-size:12pt; font-family:Verdana;text-align:center;">Eliminar</a>
            </td>
            
            </tr>
            <?php
			/*echo 'hola mundo'.$row['id_producto'];
			echo 'hola mundo'.$row['producto'];
			echo 'hola mundo'.$row['precio'];
			echo 'hola mundo'.$row['existencias'];*/
			
			
		}
        
		?>
	</table>
	</body>
</html>