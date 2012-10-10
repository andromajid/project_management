<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'inlineForm',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
            ));
    ?>
    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model, 'user_name', array('size' => 250, 'maxlength' => 127)); ?>
    <?php echo $form->error($model, 'user_name'); ?>
    <?php if ($model->isNewRecord): ?>
        <?php echo $form->textFieldRow($model, 'user_password', array('size' => 120, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'user_password'); ?>
    <?php endif; ?>
    <?php echo $form->textFieldRow($model, 'user_email', array('size' => 250, 'maxlength' => 255)); ?>
    <?php echo $form->error($model, 'user_email'); ?>

    <?php echo $form->textFieldRow($model, 'user_company', array('size' => 250, 'maxlength' => 127)); ?>
    <?php echo $form->error($model, 'user_company'); ?>

    <?php echo $form->dropDownListRow($model, 'user_gender', array('l' => 'Laki-Laki', 'p' => 'Perempuan')); ?>
    <?php echo $form->error($model, 'user_gender'); ?>

    <?php echo $form->textFieldRow($model, 'user_url', array('size' => 250, 'maxlength' => 255)); ?>
    <?php echo $form->error($model, 'user_url'); ?>

    <?php echo $form->textFieldRow($model, 'user_address', array('size' => 250, 'maxlength' => 255)); ?>
    <?php echo $form->error($model, 'user_address'); ?>
    <?php echo $form->fileFieldRow($model, 'user_avatar'); ?>
    <?php echo $form->error($model, 'user_avatar'); ?>
    <?php
    if (!$model->isNewRecord && isset($model->user_avatar)) {
        echo '<br />';
        $this->widget('bootstrap.widgets.TbButton', array(
            'label' => 'user image',
            'type' => 'danger',
            'htmlOptions' => array('data-title' => $model->user_avatar, 'data-content' => CHtml::image(Yii::app()->baseUrl.'/uploads/image/thumb/thumb_'.$model->user_avatar, $model->user_avatar), 'rel' => 'popover'),
        ));
    }
    ?>
    <?php echo $form->dropDownListRow($model, 'user_role', CHtml::listData(AuthItem::model()->findAll(), 'name', 'name')); ?>
    <?php echo $form->error($model, 'user_avatar'); ?>


    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->