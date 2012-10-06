<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property integer $project_id
 * @property string $project_name
 * @property string $project_description
 * @property string $project_start
 * @property string $project_end
 * @property string $project_status
 *
 * The followings are the available model relations:
 * @property File[] $files
 * @property UserProject[] $userProjects
 */
class Project extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return project the static model class
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
		return 'project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_name, project_start', 'required'),
			array('project_name', 'length', 'max'=>127),
			array('project_status', 'length', 'max'=>1),
			array('project_description, project_end', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('project_id, project_name, project_description, project_start, project_end, project_status', 'safe', 'on'=>'search'),
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
			'files' => array(self::HAS_MANY, 'File', 'project_id'),
			'userProjects' => array(self::HAS_MANY, 'UserProject', 'project_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'project_id' => 'Project',
			'project_name' => 'Project Name',
			'project_description' => 'Project Description',
			'project_start' => 'Project Start',
			'project_end' => 'Project End',
			'project_status' => 'Project Status',
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

		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('project_description',$this->project_description,true);
		$criteria->compare('project_start',$this->project_start,true);
		$criteria->compare('project_end',$this->project_end,true);
		$criteria->compare('project_status',$this->project_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}