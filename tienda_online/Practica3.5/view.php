<?php
include ('./db/conexion.php');
?>
<style>
	.colirin{
		text-decoration: none;
		padding: 5px;
		font-weight: 600;
		font-size: 20px;
		color: #ffffff;
		background-color: #ff9d0a;
		border-radius: 10px;
		border: 1px none #0016b0;
		margin-left:10px;
	}
	
	</style>
    
<!DOCTYPE html>
<html>
    <head>
    <title>view</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
    </head>
	<body style="margin-left:100px;">
    <h3>Detalle del producto</h3>
    <?php
	$consulta="select * from productos where id_producto = ".$_GET['idpro'].";";
	$datoobt = $basedatos->query($consulta);
	$campos = $datoobt->fetchArray();
	?>
	<table class="table" border="1" style="width:50%;">
    	<tr>
        <th>Id producto: </th>
        <th><?php echo $campos['id_producto'];?></th>
        </tr>
        
        <tr>
        <th>Producto: </th>
        <th><?php echo $campos['producto'];?></th>
        </tr>
        
        <tr>
        <th>Precio: </th>
        <th><?php echo $campos['precio'];?></th>
        </tr>
        
        <tr>
        <th>Existencia: </th>
        <th><?php echo $campos['existencias'];?></th>
        </tr>
	</table><br>
    <a class="colirin" href="index.php">Inicio</a>
	</body>
</html>