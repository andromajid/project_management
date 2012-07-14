<?php
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create user', 'url'=>array('create')),
	array('label'=>'Manage user', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
