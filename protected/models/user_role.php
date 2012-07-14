<?php

/**
 * This is the model class for table "user_role".
 *
 * The followings are the available columns in table 'user_role':
 * @property integer $user_role_id
 * @property integer $user_role_user_id
 * @property integer $user_role_role_id
 *
 * The followings are the available model relations:
 * @property User $userRoleUser
 * @property Role $userRoleRole
 */
class user_role extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return user_role the static model class
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
		return 'user_role';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_role_user_id, user_role_role_id', 'required'),
			array('user_role_user_id, user_role_role_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_role_id, user_role_user_id, user_role_role_id', 'safe', 'on'=>'search'),
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
			'userRoleUser' => array(self::BELONGS_TO, 'User', 'user_role_user_id'),
			'userRoleRole' => array(self::BELONGS_TO, 'Role', 'user_role_role_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_role_id' => 'User Role',
			'user_role_user_id' => 'User Role User',
			'user_role_role_id' => 'User Role Role',
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

		$criteria->compare('user_role_id',$this->user_role_id);
		$criteria->compare('user_role_user_id',$this->user_role_user_id);
		$criteria->compare('user_role_role_id',$this->user_role_role_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}