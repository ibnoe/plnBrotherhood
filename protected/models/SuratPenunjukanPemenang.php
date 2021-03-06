<?php

/**
 * This is the model class for table "surat_penunjukan_pemenang".
 *
 * The followings are the available columns in table 'surat_penunjukan_pemenang':
 * @property string $id_dokumen
 * @property string $nomor
 * @property string $nomor_ski
 * @property string $tanggal_ski
 * @property string $no_ski
 *
 * The followings are the available model relations:
 * @property Dokumen $idDokumen
 */
class SuratPenunjukanPemenang extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SuratPenunjukanPemenang the static model class
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
		return 'surat_penunjukan_pemenang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_dokumen, nomor, nomor_ski, tanggal_ski, no_ski', 'required'),
			array('id_dokumen', 'length', 'max'=>32),
			array('nomor, nomor_ski, no_ski', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dokumen, nomor, nomor_ski, tanggal_ski, no_ski', 'safe', 'on'=>'search'),
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
			'idDokumen' => array(self::BELONGS_TO, 'Dokumen', 'id_dokumen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_dokumen' => 'Id Dokumen',
			'nomor' => 'Nomor',
			'nomor_ski' => 'Nomor Ski',
			'tanggal_ski' => 'Tanggal Ski',
			'no_ski' => 'No Ski',
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

		$criteria->compare('id_dokumen',$this->id_dokumen,true);
		$criteria->compare('nomor',$this->nomor,true);
		$criteria->compare('nomor_ski',$this->nomor_ski,true);
		$criteria->compare('tanggal_ski',$this->tanggal_ski,true);
		$criteria->compare('no_ski',$this->no_ski,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}