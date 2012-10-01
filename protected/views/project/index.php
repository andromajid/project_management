<?php
$this->breadcrumbs=array(
	'Projects',
);

$this->menu=array(
	array('label'=>'Create project','url'=>array('create')),
	array('label'=>'Manage project','url'=>array('admin')),
);
?>

<h1>Projects</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
