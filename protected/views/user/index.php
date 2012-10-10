<?php
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Edit '.$model->user_fullname, 'icon' => 'icon-pencil','url'=>array('edit')),
);
?>

<h1><?php echo $model->user_fullname;?></h1>

<?php 
if(file_exists(dirname(Yii::app()->request->scriptFile).'/uploads/image/'.$model->user_avatar)) {
    $image = CHtml::image(Yii::app()->baseUrl.'/uploads/image/thumb/thumb_'.$model->user_avatar, $model->user_avatar);
} else {
    $image = '';
}
$this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
        'attributes' => array('user_name',
                              'user_fullname',
                              'user_email',
                              'user_company',
                              'user_avatar' => array('label' => 'User Image', 'value' => $image,'type' => 'html'),
                              array('label' => 'jenis kelamin', 'value' => $model->user_gender == 'l'?'Laki-Laki':'Perempuan'),
                              'user_url',
                              'user_address',
                              'user_mobilephone'),
)); ?>
