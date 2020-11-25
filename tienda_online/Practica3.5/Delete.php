<?php
include ('./db/conexion.php');
if(empty($_GET['idelim'])){
	?>
		<h3>Hubo un error con el id, <strong>producto no encontrado!!</strong></h3>
    <?php
}else{
	$insert = "DELETE FROM productos WHERE id_producto =  ".$_GET['idelim'].";";
	//echo $insert;
	$basedatos->query($insert);
?>
		<h3>El ID <strong><?php echo $_GET['idelim'];?></strong> ha ELIMINADO con exito!!</h3>
<?php
}
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
<a class="colirin" href="index.php">Inicio</a>