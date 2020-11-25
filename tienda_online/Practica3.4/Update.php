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
    
    <?php
	///echo $_GET['idactu'];
	?>
    
<!DOCTYPE html>
<html>
    <head>
    <title>update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
	<body style="margin-left:100px;">
    
    
    <?php 
	if(empty($_GET['idactu'])){	
	$insert = "update productos set producto = '".$_GET['producto_up']."',  precio = '".$_GET['precio_up']."', existencias = '".$_GET['existe_up']."' where id_producto = ".$_GET['id_up'].";";
	//echo $insert;
		$basedatos->query($insert);	
		?>
		<h3>El ID <strong><?php echo $_GET['id_up'];?></strong> ha ACTUALIZADO con exito!!</h3>
        <?php
	}else{
		
	$consulta="select * from productos where id_producto = ".$_GET['idactu'].";";
	///echo $consulta;
	$datoobt = $basedatos->query($consulta);
	$campos = $datoobt->fetchArray();
	?>
    <h3>Actualizar</h3>
    <form action="Update.php" method="get">    
	<table class="table" border="1" style="width:50%;">
    	<tr>
        <th></th>
        <th>Valores actuales</th>
        <th>Nuevos valores</th>
        </tr>
        
        <tr>
        <th>Id Producto: </th>
        <th><?php echo $campos['id_producto'];?></th>
        <th><input hidden="true" name="id_up" type="text" value="<?php echo $campos['id_producto'];?>"></th>
        </tr>
        
    	<tr>
        <th>Producto: </th>
        <th><?php echo $campos['producto'];?></th>
        <th><input name="producto_up" type="text" required></th>
        </tr>
        
        <tr>
        <th>Precio: </th>
        <th><?php echo $campos['precio'];?></th>
        <th><input name="precio_up" type="number" step="any"></th>
        </tr>
        
        <tr>
        <th height="29">Existencia: </th>
        <th><?php echo $campos['existencias'];?></th>
        <th><input name="existe_up" type="number" required></th>
      </tr>
	</table>    
    <br>
    <input type="submit"  value="Actualizar" style="width:100px;height:30px;background-color:orange; color:black;font-size:12pt; font-family:Verdana;text-align:center;">
    </form>
    <?php }?>
    <a class="colirin" href="index.php">Inicio</a>
	</body>
</html>
