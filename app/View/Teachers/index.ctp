<h1>Index de profesores</h1>
<?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'display', 'home')); ?>
<br>
<br>
<?php echo $this->Html->link('Agregar Profesor', array('action'=>'agregarprofesor')); ?>
<table>
	<tr>
		<th><?php echo $this->Paginator->sort('id') ?></th>
		<th><?php echo $this->Paginator->sort('nombre') ?></th>
		<th><?php echo $this->Paginator->sort('apellido') ?></th>
		<th><?php echo $this->Paginator->sort('Cv') ?></th>
	</tr>
	<?php foreach ($Profesores as $value) { ?>
		<tr>
			<td><?php echo $value['Teacher']['id'] ?></td>
			<td><?php echo $value['Teacher']['nombre'] ?></td>
			<td><?php echo $value['Teacher']['apellido'] ?></td>
			<td><?php echo $value['Teacher']['cv'] ?></td>
		</tr>
	<?php } ?>
</table>