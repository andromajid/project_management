<?php

/**
 * This is the model class for table "tasks".
 *
 * The followings are the available columns in table 'tasks':
 * @property integer $task_id
 * @property string $task_start
 * @property string $task_end
 * @property string $task_title
 * @property string $task_text
 * @property string $task_status
 * @property integer $task_project_id
 * @property integer $task_milestone_id
 *
 * The followings are the available model relations:
 * @property Milestone $taskMilestone
 * @property Project $taskProject
 * @property TasksAssigned[] $tasksAssigneds
 */
class Tasks extends CActiveRecord {
    public $project_name,$milestone_name;
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Tasks the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tasks';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('task_title, task_text', 'required'),
            array('task_project_id, task_milestone_id', 'numerical', 'integerOnly' => true),
            array('task_title', 'length', 'max' => 255),
            array('task_status', 'length', 'max' => 1),
            array('task_start, task_end', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('task_id, task_start, task_end, task_title, task_text, task_status, task_project_id, task_milestone_id,project_name, milestone_name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'taskMilestone' => array(self::BELONGS_TO, 'Milestone', 'task_milestone_id'),
            'taskProject' => array(self::BELONGS_TO, 'Project', 'task_project_id'),
            'task_assigned' => array(self::HAS_MANY, 'Tasks_assigned', 'task_assign_task_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'task_id' => 'Task',
            'task_start' => 'Task Start',
            'task_end' => 'Task End',
            'task_title' => 'Task Title',
            'task_text' => 'Task Text',
            'task_status' => 'Task Status',
            'task_project_id' => 'Task Project',
            'task_milestone_id' => 'Task Milestone',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;
        $criteria->together = true;
        $criteria->with = array('taskProject', 'task_assigned', 'taskMilestone');
        $criteria->compare('task_id', $this->task_id);
        $criteria->compare('task_start', $this->task_start, true);
        $criteria->compare('task_end', $this->task_end, true);
        $criteria->compare('task_title', $this->task_title, true);
        $criteria->compare('task_text', $this->task_text, true);
        $criteria->compare('task_status', $this->task_status, true);
        $criteria->compare('task_project_id', $this->task_project_id);
        $criteria->compare('task_milestone_id', $this->task_milestone_id);
        $criteria->compare('taskMilestone.milestone_name', $this->milestone_name);
        $criteria->compare('taskProject.project_name', $this->project_name);
        $criteria->order = 'task_start DESC';
        $criteria->addCondition('task_assigned.task_assign_user_id=' . Yii::app()->user->getId());
        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function get_calender_data($start_date, $end_date, $user_id) {
        $data_arr = array();
        $data = $this->with('task_assigned')->findAll('task_start >= :task_start AND task_end <= :task_end AND task_assign_user_id = :user_id', array(':task_start' => $start_date, ':task_end' => $end_date, ':user_id' => $user_id));
        foreach ($data as $row) {
            $data_arr[] = array('title' => $row->task_title,
                'start' => strtotime($row->task_start),
                'end' => strtotime($row->task_end),
                'className' => 'task-calendar task-' . $row->task_id,
                'color' => 'green',
                'url' => Yii::app()->getController()->createUrl('dashboard/get_modal_data', array('type' => 'task', 'data_id' => $row->task_id)),
                'editable' => false);
        }
        return $data_arr;
    }

}