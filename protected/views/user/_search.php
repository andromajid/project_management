<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
    'htmlOptions'=>array('class'=>'well'),
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_company'); ?>
		<?php echo $form->textField($model,'user_company',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_lastlogin'); ?>
		<?php echo $form->textField($model,'user_lastlogin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_gender'); ?>
		<?php echo $form->textField($model,'user_gender',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_url'); ?>
		<?php echo $form->textField($model,'user_url',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_address'); ?>
		<?php echo $form->textField($model,'user_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_avatar'); ?>
		<?php echo $form->fileFieldRow($model,'user_avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_rate'); ?>
		<?php echo $form->textField($model,'user_rate',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->