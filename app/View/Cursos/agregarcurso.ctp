<h2>Vista de Agregar Curso</h2>
<?php
echo $this->Form->create('Curso');
echo $this->Form->input('name',array('label'=>'nombre'));
echo $this->Form->input('descripcion');
echo $this->Form->input('teacher_id');
echo $this->Form->end('Gurdar Profesor');
?>