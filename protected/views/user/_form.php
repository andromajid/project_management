<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
        'id' => 'inlineForm',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model, 'user_name', array('size' => 60, 'maxlength' => 127)); ?>
    <?php echo $form->error($model, 'user_name'); ?>

    <?php echo $form->textFieldRow($model, 'user_email', array('size' => 60, 'maxlength' => 255)); ?>
    <?php echo $form->error($model, 'user_email'); ?>

    <?php echo $form->textFieldRow($model, 'user_company', array('size' => 60, 'maxlength' => 127)); ?>
    <?php echo $form->error($model, 'user_company'); ?>

    <?php echo $form->textFieldRow($model, 'user_lastlogin'); ?>
    <?php echo $form->error($model, 'user_lastlogin'); ?>

    <?php echo $form->dropDownListRow($model, 'user_gender', array('l' => 'Laki-Laki', 'p' => 'Perempuan')); ?>
    <?php echo $form->error($model, 'user_gender'); ?>

    <?php echo $form->textFieldRow($model, 'user_url', array('size' => 60, 'maxlength' => 255)); ?>
    <?php echo $form->error($model, 'user_url'); ?>

    <?php echo $form->textFieldRow($model, 'user_address', array('size' => 60, 'maxlength' => 255)); ?>
    <?php echo $form->error($model, 'user_address'); ?>

    <?php echo $form->fileFieldRow($model, 'user_avatar'); ?>
    <?php echo $form->error($model, 'user_avatar'); ?>
    <?php echo $form->dropDownListRow($model, 'user_role', CHtml::listData(authitem::model()->findAll() , 'name', 'name')); ?>
    <?php echo $form->error($model, 'user_avatar'); ?>


    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->