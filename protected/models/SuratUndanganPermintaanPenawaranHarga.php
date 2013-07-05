<?php

/**
 * This is the model class for table "surat_undangan_permintaan_penawaran_harga".
 *
 * The followings are the available columns in table 'surat_undangan_permintaan_penawaran_harga':
 * @property string $id_dokumen
 * @property string $nomor
 * @property integer $waktu_kerja
 * @property string $tempat_penyerahan
 */
class SuratUndanganPermintaanPenawaranHarga extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SuratUndanganPermintaanPenawaranHarga the static model class
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
		return 'surat_undangan_permintaan_penawaran_harga';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_dokumen, nomor, waktu_kerja, tempat_penyerahan', 'required'),
			array('waktu_kerja', 'numerical', 'integerOnly'=>true),
			array('id_dokumen', 'length', 'max'=>32),
			array('nomor', 'length', 'max'=>50),
			array('tempat_penyerahan', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dokumen, nomor, waktu_kerja, tempat_penyerahan', 'safe', 'on'=>'search'),
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
			'id_dokumen' => 'Id Dokumen',
			'nomor' => 'Nomor',
			'waktu_kerja' => 'Waktu Kerja',
			'tempat_penyerahan' => 'Tempat Penyerahan',
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
		$criteria->compare('waktu_kerja',$this->waktu_kerja);
		$criteria->compare('tempat_penyerahan',$this->tempat_penyerahan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}