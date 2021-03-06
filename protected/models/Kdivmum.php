<?php

/**
 * This is the model class for table "kdivmum".
 *
 * The followings are the available columns in table 'kdivmum':
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property string $email
 * @property integer $id_jabatan
 * @property string $status_user
 *
 * The followings are the available model relations:
 * @property Jabatan $idJabatan
 */
class Kdivmum extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kdivmum the static model class
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
		return 'kdivmum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, nama, email, id_jabatan, status_user', 'required'),
			array('id_jabatan', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>20),
			array('password, nama', 'length', 'max'=>256),
			array('email', 'length', 'max'=>32),
			array('status_user', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('username, password, nama, email, id_jabatan, status_user', 'safe', 'on'=>'search'),
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
			'idJabatan' => array(self::BELONGS_TO, 'Jabatan', 'id_jabatan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'username' => 'Username',
			'password' => 'Password',
			'nama' => 'Nama',
			'email' => 'Email',
			'id_jabatan' => 'Id Jabatan',
			'status_user' => 'Status User',
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
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('id_jabatan',$this->id_jabatan);
		$criteria->compare('status_user',$this->status_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchKdiv()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('id_jabatan',$this->id_jabatan,true);
		$criteria->compare('status_user',$this->status_user,true);
		$criteria->addcondition('status_user = "Aktif"');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}