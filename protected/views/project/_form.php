<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'project-form',
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'project_name', array('class' => 'span5', 'maxlength' => 127)); ?>
<label for="project_project_start"><?php echo $model->getAttributeLabel('project_description'); ?></label>
<?php
$this->widget('ext.tinymce.TinyMce', array(
    'model' => $model,
    'attribute' => 'project_description',
    // Optional config
    //'compressorRoute' => 'tinymce/compressor',
//    'fileManager' => array(
//        'class' => 'ext.elFinder.TinyMceElFinder',
//        'connectorRoute' => 'admin/elfinder/connector',
//    ),
    'fileManager' => array(
        'class' => 'ext.elFinder.TinyMceElFinder',
        'connectorRoute' => 'elfinder/connector',
    ),
));
?>
<label for="project_project_start"><?php echo $model->getAttributeLabel('project_start'); ?></label>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    'attribute' => 'project_start',
    // additional javascript options for the date picker plugin
    'options' => array('dateFormat' => 'yy-mm-dd',
        'changeMonth' => true,
        'minDate' => '-0d',
        'changeYear' => true),
    'value' => date("Y-m-d"),
    'htmlOptions' => array(
        'style' => 'height:20px;',
        'class' => 'span5'
    ),
));
?>
<label for="project_project_end"><?php echo $model->getAttributeLabel('project_end'); ?></label>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    'attribute' => 'project_end',
    // additional javascript options for the date picker plugin
    'options' => array('dateFormat' => 'yy-mm-dd',
        'changeMonth' => true,
        'minDate' => '-0d',
        'changeYear' => true),
    'value' => date("Y-m-d"),
    'htmlOptions' => array(
        'style' => 'height:20px;',
        'class' => 'span5'
    ),
));
//ambil data user
$employee_drop_down_list = CHtml::listData($user->findAll(), 'user_id', 'user_fullname');
$x = 0;
?>
<label for="user_user_fullname">Employee</label>

<?php foreach ($employee_drop_down_list as $row_id => $row_name): ?>
    <label class="checkbox">
        <input id="user_user_fullname_<?php echo $x; ?>" value="<?php echo $row_id; ?>" type="checkbox" name="user[]" />
        <label for="user_user_fullname_<?php echo $x; ?>"><?php echo $row_name ?></label></label>
    <?php
    $x++;
    ?>
<?php endforeach; ?>
<?php echo $form->dropDownListRow($model, 'project_status', array('1' => 'active', '0' => 'unactive')); ?>
<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
