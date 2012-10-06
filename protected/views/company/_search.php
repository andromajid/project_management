<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'company_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'company_name',array('class'=>'span5','maxlength'=>127)); ?>

	<?php echo $form->textFieldRow($model,'company_email',array('class'=>'span5','maxlength'=>127)); ?>

	<?php echo $form->textFieldRow($model,'company_address',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'company_phone',array('class'=>'span5','maxlength'=>56)); ?>

	<?php echo $form->textFieldRow($model,'company_logo',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textAreaRow($model,'company_description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
