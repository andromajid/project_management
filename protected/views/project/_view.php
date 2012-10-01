<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->project_id),array('view','id'=>$data->project_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_name')); ?>:</b>
	<?php echo CHtml::encode($data->project_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_description')); ?>:</b>
	<?php echo CHtml::encode($data->project_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_start')); ?>:</b>
	<?php echo CHtml::encode($data->project_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_end')); ?>:</b>
	<?php echo CHtml::encode($data->project_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_status')); ?>:</b>
	<?php echo CHtml::encode($data->project_status); ?>
	<br />


</div>