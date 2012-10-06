<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
        array('label'=>'View user', 'url'=>array('/user/')),
	array('label'=>'View user', 'url'=>array('view', 'id'=>$model->user_id),'visible' => Yii::app()->user->checkAccess('Admin')),
	array('label'=>'Manage user', 'url'=>array('admin'), 'visible' => Yii::app()->user->checkAccess('Admin')),
);
?>

<h1>Update user <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>