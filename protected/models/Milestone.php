<?php

/**
 * This is the model class for table "milestone".
 *
 * The followings are the available columns in table 'milestone':
 * @property integer $milestone_id
 * @property integer $milestone_project_id
 * @property string $milestone_name
 * @property string $milestone_desc
 * @property string $milestone_start
 * @property string $milestone_end
 * @property string $milestone_status
 *
 * The followings are the available model relations:
 * @property Project $milestoneProject
 * @property Tasks[] $tasks
 */
class Milestone extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Milestone the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'milestone';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('milestone_name, milestone_desc', 'required'),
            array('milestone_project_id', 'numerical', 'integerOnly' => true),
            array('milestone_name', 'length', 'max' => 255),
            array('milestone_status', 'length', 'max' => 1),
            array('milestone_start, milestone_end', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('milestone_id, milestone_project_id, milestone_name, milestone_desc, milestone_start, milestone_end, milestone_status', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'milestone_project' => array(self::BELONGS_TO, 'Project', 'milestone_project_id'),
            'tasks' => array(self::HAS_MANY, 'Tasks', 'task_milestone_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'milestone_id' => 'Milestone',
            'milestone_project_id' => 'Milestone Project',
            'milestone_name' => 'Milestone Name',
            'milestone_desc' => 'Milestone Desc',
            'milestone_start' => 'Milestone Start',
            'milestone_end' => 'Milestone End',
            'milestone_status' => 'Milestone Status',
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

        $criteria->compare('milestone_id', $this->milestone_id);
        $criteria->compare('milestone_project_id', $this->milestone_project_id);
        $criteria->compare('milestone_name', $this->milestone_name, true);
        $criteria->compare('milestone_desc', $this->milestone_desc, true);
        $criteria->compare('milestone_start', $this->milestone_start, true);
        $criteria->compare('milestone_end', $this->milestone_end, true);
        $criteria->compare('milestone_status', $this->milestone_status, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function getCalendarData($start_date, $end_date, $user_id) {
        $data_arr = array();
        $data = $this->with('milestone_project')->findAll('milestone_start >= :milestone_start AND milestone_end <= :milestone_end', array(':milestone_start' => $start_date, ':milestone_end' => $end_date));
        foreach ($data as $row) {
            $data_arr[] = array('title' => $row->milestone_name . "(" . $row->milestone_project->project_name . ")",
                'start' => strtotime($row->milestone_start),
                'end' => strtotime($row->milestone_end),
                'className' => 'milestone-' . $row->milestone_id,
                'color' => 'blue',
                'url' => Yii::app()->getController()->createUrl('dashboard/get_modal_data', array('type' => 'milestone', 'data_id' => $row->milestone_id)),
                'editable' => false);
        }
        return $data_arr;
    }

}