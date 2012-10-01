<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/structure.css">
    </head>

    <body>
        
        <?php $this->widget('bootstrap.widgets.BootAlert'); ?>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),'htmlOptions' => array('class' => 'box login'),
                ));
        ?>
            <fieldset class="boxBody">
                <label>Username</label><?php echo $form->error($model,'username'); ?>
                <?php echo $form->textField($model,'username', array('tabindex' => '1', 'placeholder' => 'username',
                                            'required' => 'required')); ?>
                <!--<input type="text" tabindex="1" placeholder="Username" required>-->
                <label>Password</label>
                <?php echo $form->passwordField($model,'password', array('tabindex' => '2', 'placeholder' => 'password',
                                            'required' => 'required')); ?>
                <!--<input type="password" tabindex="2" required>-->
            </fieldset>
            <footer>
                <label><?php echo $form->checkBox($model,'rememberMe', array('tabindex' => '3')); ?>Keep me logged in</label>
                <input type="submit" class="btnLogin" value="Login" tabindex="4">
            </footer>
        <?php $this->endWidget(); ?>
        <footer id="main">Developed By
            <a href="http://wwww.andromajid.com">Andro Majid</a></a>
    </footer>
</body>
</html>
