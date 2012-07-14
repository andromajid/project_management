<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_company')); ?>:</b>
	<?php echo CHtml::encode($data->user_company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_lastlogin')); ?>:</b>
	<?php echo CHtml::encode($data->user_lastlogin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_gender')); ?>:</b>
	<?php echo CHtml::encode($data->user_gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_url')); ?>:</b>
	<?php echo CHtml::encode($data->user_url); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_address')); ?>:</b>
	<?php echo CHtml::encode($data->user_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_avatar')); ?>:</b>
	<?php echo CHtml::encode($data->user_avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_rate')); ?>:</b>
	<?php echo CHtml::encode($data->user_rate); ?>
	<br />

	*/ ?>

</div>