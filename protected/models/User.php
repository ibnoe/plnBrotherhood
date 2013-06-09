<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $username
 * @property string $nama
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Anggota $anggota
 * @property Divisi $divisi
 * @property Pengadaan[] $pengadaans
 * @property Sekretaris $sekretaris
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, nama, password', 'required'),
			array('username', 'length', 'max'=>20),
			array('nama', 'length', 'max'=>32),
			array('password', 'length', 'max'=>24),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('username, nama, password', 'safe', 'on'=>'search'),
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
			'anggota' => array(self::HAS_ONE, 'Anggota', 'username'),
			'divisi' => array(self::HAS_ONE, 'Divisi', 'username'),
			'pengadaans' => array(self::HAS_MANY, 'Pengadaan', 'nama'),
			'sekretaris' => array(self::HAS_ONE, 'Sekretaris', 'username'),
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
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}