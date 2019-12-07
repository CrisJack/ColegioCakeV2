<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MVC</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Clase 1 MVC</h1>
	<button><?php echo $this->Html->link('Estudiantes', array('controller' => 'Students', 'action' => 'index')); ?></button>
	
	<button><?php echo $this->Html->link('Profesores', array('controller' => 'Teachers', 'action' => 'index')); ?></button>
	
	<button><?php echo $this->Html->link('Cursos', array('controller' => 'Cursos', 'action' => 'index')); ?></button>
	
</body>
</html>