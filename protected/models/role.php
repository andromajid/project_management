<?php

/**
 * This is the model class for table "role".
 *
 * The followings are the available columns in table 'role':
 * @property integer $role_id
 * @property string $role_name
 * @property string $role_project
 * @property string $role_task
 * @property string $role_milestone
 * @property string $role_message
 * @property string $role_files
 * @property string $role_time_tracker
 * @property string $role_admin
 */
class role extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return role the static model class
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
		return 'role';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('role_name, role_project, role_task, role_milestone, role_message, role_files, role_time_tracker, role_admin', 'length', 'max'=>1023),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('role_id, role_name, role_project, role_task, role_milestone, role_message, role_files, role_time_tracker, role_admin', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'role_id' => 'Role',
			'role_name' => 'Role Name',
			'role_project' => 'Role Project',
			'role_task' => 'Role Task',
			'role_milestone' => 'Role Milestone',
			'role_message' => 'Role Message',
			'role_files' => 'Role Files',
			'role_time_tracker' => 'Role Time Tracker',
			'role_admin' => 'Role Admin',
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

		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('role_name',$this->role_name,true);
		$criteria->compare('role_project',$this->role_project,true);
		$criteria->compare('role_task',$this->role_task,true);
		$criteria->compare('role_milestone',$this->role_milestone,true);
		$criteria->compare('role_message',$this->role_message,true);
		$criteria->compare('role_files',$this->role_files,true);
		$criteria->compare('role_time_tracker',$this->role_time_tracker,true);
		$criteria->compare('role_admin',$this->role_admin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}