<?php

/**
 * This is the model class for table "tasks_assigned".
 *
 * The followings are the available columns in table 'tasks_assigned':
 * @property integer $task_assign_id
 * @property integer $task_assign_user_id
 * @property integer $task_assign_task_id
 *
 * The followings are the available model relations:
 * @property Tasks $taskAssignTask
 * @property User $taskAssignUser
 */
class Tasks_assigned extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tasks_assigned the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tasks_assigned';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('task_assign_user_id, task_assign_task_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('task_assign_id, task_assign_user_id, task_assign_task_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'taskAssignTask' => array(self::BELONGS_TO, 'Tasks', 'task_assign_task_id'),
			'taskAssignUser' => array(self::BELONGS_TO, 'User', 'task_assign_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'task_assign_id' => 'Task Assign',
			'task_assign_user_id' => 'Task Assign User',
			'task_assign_task_id' => 'Task Assign Task',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('task_assign_id',$this->task_assign_id);
		$criteria->compare('task_assign_user_id',$this->task_assign_user_id);
		$criteria->compare('task_assign_task_id',$this->task_assign_task_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}