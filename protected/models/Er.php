<?php

/**
 * This is the model class for table "er".
 *
 * The followings are the available columns in table 'er':
 * @property integer $id
 * @property string $w1
 * @property string $w2
 * @property string $w3
 * @property string $note
 * @property string $name
 * @property string $contact
 */
class Er extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'er';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('w1, w2, w3, name, contact', 'length', 'max'=>255),
			array('note', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, w1, w2, w3, note, name, contact', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'w1' => 'W1',
			'w2' => 'W2',
			'w3' => 'W3',
			'note' => 'Note',
			'name' => 'Name',
			'contact' => 'Contact',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('w1',$this->w1,true);
		$criteria->compare('w2',$this->w2,true);
		$criteria->compare('w3',$this->w3,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('contact',$this->contact,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Er the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
