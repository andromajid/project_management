<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->company_id),array('view','id'=>$data->company_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_name')); ?>:</b>
	<?php echo CHtml::encode($data->company_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_email')); ?>:</b>
	<?php echo CHtml::encode($data->company_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_address')); ?>:</b>
	<?php echo CHtml::encode($data->company_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_phone')); ?>:</b>
	<?php echo CHtml::encode($data->company_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_logo')); ?>:</b>
	<?php echo CHtml::encode($data->company_logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_description')); ?>:</b>
	<?php echo CHtml::encode($data->company_description); ?>
	<br />


</div>