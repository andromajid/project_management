<?php
$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->company_id=>array('view','id'=>$model->company_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List company','url'=>array('index')),
	array('label'=>'Create company','url'=>array('create')),
	array('label'=>'View company','url'=>array('view','id'=>$model->company_id)),
	array('label'=>'Manage company','url'=>array('admin')),
);
?>

<h1>Update company <?php echo $model->company_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>