<?php
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Edit '.$model->user_fullname, 'icon' => 'icon-pencil','url'=>array('edit')),
);
?>

<h1><?php echo $model->user_fullname;?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
        'attributes' => array('user_name',
                              'user_fullname',
                              'user_email',
                              'user_company',
                              array('label' => 'jenis kelamin', 'value' => $model->user_gender == 'l'?'Laki-Laki':'Perempuan'),
                              'user_url',
                              'user_address',
                              'user_mobilephone'),
)); ?>
