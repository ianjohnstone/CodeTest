<?php

/**
 * This is the model class for table "results".
 *
 * The followings are the available columns in table 'results':
 * @property integer $ResultID
 * @property integer $EventID
 * @property integer $AthleteID
 * @property integer $Gold
 * @property integer $Silver
 * @property integer $Bronze
 *
 * The followings are the available model relations:
 * @property Athletes $athlete
 * @property Events $event
 */
class Results extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'results';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EventID, AthleteID, Gold, Silver, Bronze', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ResultID, EventID, AthleteID, Gold, Silver, Bronze', 'safe', 'on'=>'search'),
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
			'athlete' => array(self::BELONGS_TO, 'Athletes', 'AthleteID'),
			'event' => array(self::BELONGS_TO, 'Events', 'EventID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ResultID' => 'Result',
			'EventID' => 'Event',
			'AthleteID' => 'Athlete',
			'Gold' => 'Gold',
			'Silver' => 'Silver',
			'Bronze' => 'Bronze',
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

		$criteria->compare('ResultID',$this->ResultID);
		$criteria->compare('EventID',$this->EventID);
		$criteria->compare('AthleteID',$this->AthleteID);
		$criteria->compare('Gold',$this->Gold);
		$criteria->compare('Silver',$this->Silver);
		$criteria->compare('Bronze',$this->Bronze);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Results the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
