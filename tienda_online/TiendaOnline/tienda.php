<!DOCTYPE html>
<html>
    <head>
    <title>Tienda</title>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="carrito.js"></script>
    </head>
    <body style="margin-left:100px;">
   	<form action="ticket.php" method="get">
    <h3>Seleccion de producto</h3> 
     	Nombre del producto<br><select id="productazo">
                <option value="20">Azucar 1 kg</option>
                <option value="12">Sal 1 kg</option>
                <option value="30">Aceite nutrioli</option>
                <option value="28">Pepsi</option>
                <option value="24">Leche lala entera</option>
                <option value="10">Yoghurt Lala clásico</option>
                <option value="12">Papas sabritas</option>
                <option value="140">Detergente en polvo Ace 5.5 kg</option>
            	</select><br><br>
	   	Cantidad<br><input id="cantidad_obt" type="number" value="1"><br><br>
      	<input  onClick="agregar_productos();" type="button"  value="Insertar" style="width:100px;height:30px;background-color:#0C0;color:black;font-size:12pt; font-family:Verdana;text-align:center;">
      	<!--<input onClick="borra_lista();"type="button"  value="Cobrar" style="width:100px;height:30px;background-color:#208FFF;color:blaack;font-size:12pt; font-family:Verdana;text-align:center;">-->
        <input onClick="checa_pago();" type="submit" value="Cobrar" style="width:100px;height:30px;background-color:#208FFF;color:blaack;font-size:12pt; font-family:Verdana;text-align:center;" > <br><br>
      	Carrito de compras<br>
        <textarea name="carrito" id="texto_almacenado"  style="width:400px; height:150px;">Producto     Precio($)    Cantidad     SubTotal($)</textarea>
        <br><br>
        <input id="contarr" name="contador_art" type="number" value="0.0"  hidden="false"><br>
      	Total a pagar<br><input id="pagar" name="tot_pagar" type="number" readonly value="0.0"><br><br>
        Pago<br><input name="pago" id="pago" type="number" value="0.0">
	</form>
	</body>
</html>
