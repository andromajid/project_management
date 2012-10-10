<?php

/**
 * This is the model class for table "user_project".
 *
 * The followings are the available columns in table 'user_project':
 * @property integer $user_id
 * @property integer $project_id
 *
 * The followings are the available model relations:
 * @property Project $project
 * @property User $user
 */
class User_project extends CActiveRecord {
    public $project_name,$project_start,$project_end,$project_status;
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return user_project the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user_project';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, project_id', 'required'),
            array('user_id, project_id', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('user_id, project_id,project_name,project_start,project_end,project_status', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'user_id' => 'User',
            'project_id' => 'Project',
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

        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('project_id', $this->project_id);
        $criteria->together = true;
        $criteria->with = array('user', 'project');
        $criteria->addCondition('user.user_id=' . Yii::app()->user->getId());
        $criteria->compare('project.project_name', $this->project_name, true);
        $criteria->compare('project.project_start', $this->project_start, true);
        $criteria->compare('project.project_end', $this->project_end, true);
        $criteria->order = 'project.project_start DESC';
        $criteria->compare('project.project_status', $this->project_status, true);
        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}