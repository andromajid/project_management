<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->project_id,
);

$this->menu=array(
	array('label'=>'List project','url'=>array('index')),
	array('label'=>'Create project','url'=>array('create')),
	array('label'=>'Update project','url'=>array('update','id'=>$model->project_id)),
	array('label'=>'Delete project','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->project_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage project','url'=>array('admin')),
);
?>

<h1>View project #<?php echo $model->project_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'project_id',
		'project_name',
		'project_description',
		'project_start',
		'project_end',
		'project_status',
	),
)); ?>
