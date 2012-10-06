<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <link media="screen" rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css"  />

    </head>

    <body>
        <div id="wrapper"  style="display:block;">
          <!--  <div id="header" class="container-fluid">
                <div id="logo"><h1><?php echo CHtml::encode(Yii::app()->name); ?></h1></div>
            </div> header -->

            <div id="mainmenu">
               <?php
                $this->widget('bootstrap.widgets.TbNavbar', array(
                    'fixed' => false,
                    'brand' =>  CHtml::encode(Yii::app()->name),
                    'brandUrl' => '#',
                    'collapse' => true, // requires bootstrap-responsive.css
                    'items' => array(
                        array(
                            'class' => 'bootstrap.widgets.TbMenu',
                            'items' => array(
                            array('label' => 'Home', 'url' => array('/site/index')),
                            array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                            array('label' => 'Contact', 'url' => array('/site/contact')),
                            array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                        )),
                    ),
                ));
                ?>
            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs) && !empty($this->breadcrumbs)): ?>
                <div id="breadcrumbs-container">
                    <?php
                    $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?>
                    <div class="clear"></div>
                </div>
            <?php endif ?>
            <div id="content">
                <div class="container-fluid">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container-fluid">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div>
        </div><!-- footer -->
    </body>
</html>
