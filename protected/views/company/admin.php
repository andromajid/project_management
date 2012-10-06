<?php
$this->breadcrumbs=array(
	'Companies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List company','url'=>array('index')),
	array('label'=>'Create company','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('company-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Companies</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'company-grid',
        'type' => 'striped',
    'template'=>"{items}",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'company_id',
		'company_name',
		'company_email',
		'company_address',
		'company_phone',
		'company_logo',
		/*
		'company_description',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
