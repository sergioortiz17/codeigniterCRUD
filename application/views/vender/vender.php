<?php 
$granTotal = 0;
?>
<div class="col-xs-12">
	<h1>Hacer nuevo pedido</h1>
	<?php if(!empty($this->session->flashdata())): ?>
		<div class="alert alert-<?php echo $this->session->flashdata('clase')?>">
			<?php echo $this->session->flashdata('') ?>
		</div>
	<?php endif; ?>
	<br>
	<form method="post" action="<?php echo base_url() ?>index.php/vender/agregar">
		<label for="codigo">Código:</label>
		<input autocomplete="off" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código del producto que deseas comprar y  presiona ENTER">
	</form>
	<br><br>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Código</th>
				<th>Descripción</th>
				<th>Precio de venta</th>
				<th>Cantidad</th>
				<th>Total</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($carrito as $indice => $producto){ 
					$granTotal += $producto->total;
				?>
			<tr>
				<td><?php echo $producto->id ?></td>
				<td><?php echo $producto->codigo ?></td>
				<td><?php echo $producto->descripcion ?></td>
				<td><?php echo $producto->precioVenta ?></td>
				<td><?php echo $producto->cantidad ?></td>
				<td><?php echo $producto->total ?></td>
				<td><a class="btn btn-danger" href="<?php echo base_url() . "index.php/vender/quitarDelCarrito/" . $indice?>"><i class="fa fa-trash"></i></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<h3>Total: <?php echo $granTotal; ?></h3>
	<input name="total" type="hidden" value="<?php echo $granTotal;?>">
	<a href="<?php echo base_url() ?>index.php/vender/terminarVenta" class="btn btn-success">Terminar pedido</a>
	<a href="<?php echo base_url() ?>index.php/vender/cancelarVenta" class="btn btn-danger">Cancelar pedido</a>
</div>