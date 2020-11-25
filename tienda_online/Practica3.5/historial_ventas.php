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
    <script src="carrito.js"></script>
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
	.colirin2{
		text-decoration: none;
		padding: 5px;
		font-weight: 600;
		font-size: 20px;
		color: #ffffff;
		background-color: #b85d18;
		border-radius: 10px;
		border: 1px none #0016b0;
		margin-left:10px;
	}
	
	</style>
    <h3>Ticket</h3>
    <table style="margin-left:10px; margin-right:10px; width:70%;" align="left" class="table" border="1" action="ticket.php" method="get">
    	<tr>
        <th>Fecha</th>
        <th>Cantidad producto</th>
        <th>Producto</th>
        <th>Total producto</th>
        </tr>
        
        <?php
		$consulta = "select * from tickets;";
        $resultado = $basedatos->query($consulta );		 
		while ($row = $resultado->fetchArray()) {
		//while($row = $resultado->fetchArrays()){
			?>
            <tr>
                <td><?php echo $row['fecha'];?></td>
                <td><?php echo $row['cantidad_producto'];?></td>
                <td><?php echo $row['producto'];?></td>
                <td><?php echo $row['total_producto'];?></td>            
            </tr>
            <?php
		}
        
		?>
	</table>
   <a class="colirin" href="index.php">Inicio</a>
	</body>
</html>