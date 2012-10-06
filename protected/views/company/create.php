<?php
$this->breadcrumbs=array(
	'Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List company','url'=>array('index')),
	array('label'=>'Manage company','url'=>array('admin')),
);
?>

<h1>Create company</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>