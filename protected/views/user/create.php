<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List user', 'url'=>array('index')),
	array('label'=>'Manage user', 'url'=>array('admin')),
);
?>

<h1>Create user</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>