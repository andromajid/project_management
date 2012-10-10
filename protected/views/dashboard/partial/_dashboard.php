<?php
$list_data[] = array('text' => 'done', 'value' => '1');
$list_data[] = array('text' => 'undone', 'value' => '0');
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'project-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'template' => "{items}",
    //'afterAjaxUpdate' => "function(){jQuery('#".CHtml::activeId($model, 'project_start').",#".CHtml::activeId($model, 'project_end')."').datepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['id'], {'changeMonth':true,'dateFormat':'yy-mm-dd'}));}",
    'columns' => array(
        array('name' => 'project_name',
            'value' => '$data->project->project_name'),
       /* array('header' => 'project_start', 'name' => 'project_start',
            'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array('model' => $model, 'language' => 'id', 'attribute' => 'project_start', 'options' => array('changeMonth' => true, 'dateFormat' => "yy-mm-dd")), true),
            'value' => '$data->project->project_start', 'htmlOptions' => array('style' => 'text-align:center;')),
        array('header' => 'project_end', 'name' => 'project_end',
            'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array('model' => $model, 'language' => 'id', 'attribute' => 'project_end', 'options' => array('changeMonth' => true, 'dateFormat' => "yy-mm-dd")), true),
            'value' => '$data->project->project_end', 'htmlOptions' => array('style' => 'text-align:center;')),
            */
        array('name' => 'project_status',
            'value' => 'Yii::app()->getController()->widget(\'bootstrap.widgets.TbProgress\', array(
    \'type\'=>\'danger\', 
    \'percent\'=>Project::Model()->getProgress($data->project->project_id), // the progress
    \'striped\'=>true,
    \'animated\'=>true,
), true);',
           // 'value' => 'Project::Model()->getProgress($data->project->project_id)',
            'filter' => CHtml::listData($list_data, 'value', 'text'),
            'type' => 'raw',
            'htmlOptions' => array('width' => '100px','style' => 'text-align:center;')),
        array('header' => 'Days Left',
            'value' => 'function_lib::getDateInterval(date(\'Y-m-d\'),$data->project->project_end).\' Hari\'', 
            'htmlOptions' => array('style' => 'text-align:center;')),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));

?>