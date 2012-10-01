<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'project_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'project_name',array('class'=>'span5','maxlength'=>127)); ?>

	<?php echo $form->textAreaRow($model,'project_description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'project_start',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'project_end',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'project_status',array('class'=>'span5','maxlength'=>1)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
