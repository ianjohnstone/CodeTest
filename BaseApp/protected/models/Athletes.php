<?php

/**
 * This is the model class for table "athletes".
 *
 * The followings are the available columns in table 'athletes':
 * @property integer $AthleteID
 * @property string $Name
 * @property integer $Age
 * @property integer $CountryID
 *
 * The followings are the available model relations:
 * @property Countries $country
 * @property Results[] $results
 */
class Athletes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'athletes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Age, CountryID', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('AthleteID, Name, Age, CountryID', 'safe', 'on'=>'search'),
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
			'country' => array(self::BELONGS_TO, 'Countries', 'CountryID'),
			'results' => array(self::HAS_MANY, 'Results', 'AthleteID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'AthleteID' => 'Athlete',
			'Name' => 'Name',
			'Age' => 'Age',
			'CountryID' => 'Country',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('AthleteID',$this->AthleteID);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Age',$this->Age);
		$criteria->compare('CountryID',$this->CountryID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Athletes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
