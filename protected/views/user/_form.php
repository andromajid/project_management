<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_company'); ?>
		<?php echo $form->textField($model,'user_company',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'user_company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_lastlogin'); ?>
		<?php echo $form->textField($model,'user_lastlogin'); ?>
		<?php echo $form->error($model,'user_lastlogin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_gender'); ?>
		<?php echo $form->textField($model,'user_gender',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'user_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_url'); ?>
		<?php echo $form->textField($model,'user_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_address'); ?>
		<?php echo $form->textField($model,'user_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_avatar'); ?>
		<?php echo $form->textField($model,'user_avatar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'user_avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_rate'); ?>
		<?php echo $form->textField($model,'user_rate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_rate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->