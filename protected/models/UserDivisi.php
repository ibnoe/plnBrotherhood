<?php

/**
 * This is the model class for table "user_divisi".
 *
 * The followings are the available columns in table 'user_divisi':
 * @property string $username
 * @property string $nama
 * @property string $divisi
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Divisi $divisi0
 */
class UserDivisi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserDivisi the static model class
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
		return 'user_divisi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, nama, divisi, password', 'required'),
			array('username', 'length', 'max'=>50),
			array('nama, password', 'length', 'max'=>256),
			array('divisi', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('username, nama, divisi, password', 'safe', 'on'=>'search'),
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
			'divisi0' => array(self::BELONGS_TO, 'Divisi', 'divisi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'username' => 'Username',
			'nama' => 'Nama',
			'divisi' => 'Divisi',
			'password' => 'Password',
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

		$criteria->compare('username',$this->username,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('divisi',$this->divisi,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function searchUser($divisi)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('username',$this->username,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('divisi',$this->divisi,true);
		$criteria->compare('password',$this->password,true);
		$criteria->addcondition('divisi = "' . $divisi . '"');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}