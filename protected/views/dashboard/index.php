<h1>Desktop</h1>
<?php
$javascript = "js:function(calEvent, jsEvent, view) {
        $.get(calEvent.url, function(data) {
            $('#modal_task').html(data);
            $('#modal_task').modal('show');
        });
        $(this).css('border-color', 'black');
        return false;
    }";
$this->renderPartial('partial/_dashboard', array('model' => $model, 'data_task' => $data_task,));
$this->renderPartial('partial/_grid_project', array('data_task' => $data_task,));
$this->widget('bootstrap.widgets.TbButton', array(
    'label' => 'Add Project',
    'type' => 'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size' => 'small', // null, 'large', 'small' or 'mini'
    'htmlOptions' => array(
        'data-toggle' => 'modal',
        'data-target' => '#myModal',
        )));
$this->renderPartial('partial/_modal', array('user' => $user, 'model' => $project, ));

$this->widget('application.extensions.fullcalendar.FullcalendarGraphWidget', array(
    'data' => $this->createUrl('dashboard/calfeed'),
    'options' => array(
        'editable' => true,
        'eventClick' => $javascript,
    ),
    'htmlOptions' => array(
        'style' => 'margin: 0 auto;'
    ),
        )
);
?>
<div id="modal_task" class="modal fade">
    
</div>