<?php
$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->company_id,
);

$this->menu=array(
	array('label'=>'List company','url'=>array('index')),
	array('label'=>'Create company','url'=>array('create')),
	array('label'=>'Update company','url'=>array('update','id'=>$model->company_id)),
	array('label'=>'Delete company','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->company_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage company','url'=>array('admin')),
);
?>

<h1>View company #<?php echo $model->company_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'company_id',
		'company_name',
		'company_email',
		'company_address',
		'company_phone',
		'company_logo',
		'company_description',
	),
)); ?>
