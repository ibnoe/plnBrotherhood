<?php

/**
 * This is the model class for table "berita_acara_evaluasi_penawaran".
 *
 * The followings are the available columns in table 'berita_acara_evaluasi_penawaran':
 * @property string $id_dokumen
 * @property string $no_RKS
 * @property string $id_panitia
 * @property string $nomor
 * @property string $tanggal_berita_acara
 *
 * The followings are the available model relations:
 * @property Rks $noRKS
 * @property Dokumen $idDokumen
 * @property Pengadaan $idPanitia
 */
class BeritaAcaraEvaluasiPenawaran extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BeritaAcaraEvaluasiPenawaran the static model class
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
		return 'berita_acara_evaluasi_penawaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_dokumen, no_RKS, id_panitia, nomor, tanggal_berita_acara', 'required','message'=>'{attribute} tidak boleh kosong'),
			array('id_dokumen', 'length', 'max'=>32),
			array('no_RKS, nomor', 'length', 'max'=>50),
			array('id_panitia', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dokumen, no_RKS, id_panitia, nomor, tanggal_berita_acara', 'safe', 'on'=>'search'),
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
			'noRKS' => array(self::BELONGS_TO, 'Rks', 'no_RKS'),
			'idDokumen' => array(self::BELONGS_TO, 'Dokumen', 'id_dokumen'),
			'idPanitia' => array(self::BELONGS_TO, 'Pengadaan', 'id_panitia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_dokumen' => 'Id Dokumen',
			'no_RKS' => 'No Rks',
			'id_panitia' => 'Id Panitia',
			'nomor' => 'Nomor',
			'tanggal_berita_acara' => 'Tanggal Berita Acara',
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
		$criteria->compare('no_RKS',$this->no_RKS,true);
		$criteria->compare('id_panitia',$this->id_panitia,true);
		$criteria->compare('nomor',$this->nomor,true);
		$criteria->compare('tanggal_berita_acara',$this->tanggal_berita_acara,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}