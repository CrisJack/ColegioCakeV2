<h1>Index de Cursos</h1>
<?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'display', 'home')); ?>
<br>
<br>
<?php echo $this->Html->link('Agregar Curso', array('action'=>'agregarcurso')); ?>
<table>
	<tr>
		<th><?php echo $this->Paginator->sort('id') ?></th>
		<th><?php echo $this->Paginator->sort('name') ?></th>
		<th><?php echo $this->Paginator->sort('descripcion') ?></th>
		<th><?php echo $this->Paginator->sort('Profesor') ?></th>
	</tr>
	<?php //var_dump($Cursos) ?>
	<?php foreach ($Cursos as $value) { ?>
		<tr>
			<td><?php echo $value['Curso']['id'] ?></td>
			<td><?php echo $value['Curso']['name'] ?></td>
			<td><?php echo $value['Curso']['descripcion'] ?></td>
			<?php $nombreprofesor = $value['Teacher']['nombre'];?>
			<td><?php echo 
						  $this->Html->link($nombreprofesor, array('controller' => 'Teachers', 'action' => 'editarprofesor',$value['Teacher']['id']));?></td>
		</tr>
	<?php } ?>
</table>