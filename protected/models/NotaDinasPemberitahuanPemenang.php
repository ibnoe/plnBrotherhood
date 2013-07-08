<?php

/**
 * This is the model class for table "nota_dinas_pemberitahuan_pemenang".
 *
 * The followings are the available columns in table 'nota_dinas_pemberitahuan_pemenang':
 * @property string $id_dokumen
 * @property string $nomor
 * @property string $keterangan
 * @property integer $batas_sanggahan
 *
 * The followings are the available model relations:
 * @property Dokumen $idDokumen
 */
class NotaDinasPemberitahuanPemenang extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NotaDinasPemberitahuanPemenang the static model class
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
		return 'nota_dinas_pemberitahuan_pemenang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_dokumen, nomor, keterangan, batas_sanggahan', 'required'),
			array('batas_sanggahan', 'numerical', 'integerOnly'=>true),
			array('id_dokumen', 'length', 'max'=>32),
			array('nomor', 'length', 'max'=>50),
			array('keterangan', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dokumen, nomor, keterangan, batas_sanggahan', 'safe', 'on'=>'search'),
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
			'keterangan' => 'Keterangan',
			'batas_sanggahan' => 'Batas Sanggahan',
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
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('batas_sanggahan',$this->batas_sanggahan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}