<?php 
/**
 * summary
 */
class Teacher extends AppModel
{
	public $displayField='nombre';
	// public $virtualFields = array (
	// 	'name'=>'CONCAT(
	// 		Teacher.nombre," ",Teacher.apellido
	// 	)'
	// );
    public $hasMany = array(
    		'Curso'=>array(
    			'className'=>'Curso',
    			'foreignKey'=>'teacher_id',
    			'dependent'=>'true'

    		)
    );

}

 ?>