<?php
$this->breadcrumbs=array(
	'Companies',
);

$this->menu=array(
	array('label'=>'Create company','url'=>array('create')),
	array('label'=>'Manage company','url'=>array('admin')),
);
?>

<h1>Companies</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
