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
    <title>insert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
    </head>
	<body style="margin-left:100px;">
    <?php 
	if(empty($_GET['producto'])){?>
    <h3>Inserta producto</h3>
    <form action="Insert.php" method="get">
	<table class="table" border="1" style="width:50%;">
    	<tr>
        <th>Producto: </th>
        <td><input name="producto" type="text" required></td>
        </tr>
        
        <tr>
        <th>Precio: </th>
        <td><input name="precio" type="number" step="any"></td>
        </tr>
        
        <tr>
        <th>Existencia: </th>
        <td><input name="existencia" type="number" required></td>
        </tr>        
	</table><br>
    <input type="submit"  value="Guardar" style="width:100px;height:30px;background-color:#3C3;color:black;font-size:12pt; font-family:Verdana;text-align:center;">
    </form>
    <?php }else{
		
		$insert = "insert into productos (producto, precio, existencias) values ('".$_GET['producto']."', ".$_GET['precio'].", ".$_GET['existencia'].");";
		$basedatos->query($insert );
			
			
		/*$_GET['producto']
		$_GET['precio']
		$_GET['existencia']*/
		
		?>
		<h3>El producto <strong><?php echo $_GET['producto'];?></strong> ha registrado con exito!!</h3>
        <?php
	}?>
    <p><a class="colirin" href="index.php">Inicio</a> </p>
	</body>
</html>
