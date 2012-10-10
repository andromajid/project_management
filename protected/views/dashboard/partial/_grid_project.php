<?php

$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'task-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $data_task->search(),
    'filter' => $data_task,
    'template' => "{items}",
    //'afterAjaxUpdate' => "function(){jQuery('#".CHtml::activeId($model, 'project_start').",#".CHtml::activeId($model, 'project_end')."').datepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['id'], {'changeMonth':true,'dateFormat':'yy-mm-dd'}));}",
    'columns' => array(
        array('name' => 'task_title',
            'value' => '$data->task_title'),
       array('header' => 'Project', 'name' => 'project_name',
            'value' => '$data->taskProject->project_name', 'htmlOptions' => array('style' => 'text-align:center;')),
        /*array('header' => 'project_end', 'name' => 'project_end',
            'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array('model' => $model, 'language' => 'id', 'attribute' => 'project_end', 'options' => array('changeMonth' => true, 'dateFormat' => "yy-mm-dd")), true),
            'value' => '$data->project->project_end', 'htmlOptions' => array('style' => 'text-align:center;')),
            */
        array('header' => 'Days Left',
            'value' => 'function_lib::getDateInterval(date(\'Y-m-d\'),$data->task_end).\' Hari\'', 
            'htmlOptions' => array('style' => 'text-align:center;')),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update}',
            'buttons' => array('update' => array('label' => 'update project','url' => Yii::app()->createUrl('dashboard'))),
        ),
    ),
));

