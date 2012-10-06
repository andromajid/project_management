<h1>Desktop</h1>
<?php
$this->renderPartial('partial/_dashboard', array('model' => $model));
$this->widget('bootstrap.widgets.TbButton', array(
    'label' => 'Add Project',
    'type' => 'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size' => 'small', // null, 'large', 'small' or 'mini'
    'htmlOptions' => array(
        'data-toggle' => 'modal',
        'data-target' => '#myModal',
        )));
$this->renderPartial('partial/_modal', array('user' => $user, 'model' => $project));
?>
