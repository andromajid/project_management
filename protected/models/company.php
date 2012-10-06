<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property integer $company_id
 * @property string $company_name
 * @property string $company_email
 * @property string $company_address
 * @property string $company_phone
 * @property string $company_logo
 * @property string $company_description
 */
class company extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return company the static model class
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
		return 'company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_name', 'required'),
			array('company_name, company_email', 'length', 'max'=>127),
			array('company_address', 'length', 'max'=>512),
			array('company_phone', 'length', 'max'=>56),
			array('company_logo', 'length', 'max'=>45),
			array('company_description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('company_id, company_name, company_email, company_address, company_phone, company_logo, company_description', 'safe', 'on'=>'search'),
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
			'company_id' => 'Company',
			'company_name' => 'Company Name',
			'company_email' => 'Company Email',
			'company_address' => 'Company Address',
			'company_phone' => 'Company Phone',
			'company_logo' => 'Company Logo',
			'company_description' => 'Company Description',
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

		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('company_email',$this->company_email,true);
		$criteria->compare('company_address',$this->company_address,true);
		$criteria->compare('company_phone',$this->company_phone,true);
		$criteria->compare('company_logo',$this->company_logo,true);
		$criteria->compare('company_description',$this->company_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}