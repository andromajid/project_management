<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List user', 'url'=>array('index')),
	array('label'=>'Create user', 'url'=>array('create')),
	array('label'=>'View user', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage user', 'url'=>array('admin')),
);
?>

<h1>Update user <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>