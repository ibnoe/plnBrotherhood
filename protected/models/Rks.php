<?php

/**
 * This is the model class for table "rks".
 *
 * The followings are the available columns in table 'rks':
 * @property string $id_dokumen
 * @property string $nomor
 * @property integer $tipe_rks
 * @property string $tanggal_permintaan_penawaran
 * @property string $tanggal_penjelasan
 * @property string $waktu_penjelasan
 * @property string $tempat_penjelasan
 * @property string $tanggal_awal_pemasukan_penawaran1
 * @property string $tanggal_akhir_pemasukan_penawaran1
 * @property string $waktu_pemasukan_penawaran1
 * @property string $tempat_pemasukan_penawaran1
 * @property string $tanggal_pembukaan_penawaran1
 * @property string $waktu_pembukaan_penawaran1
 * @property string $tempat_pembukaan_penawaran1
 * @property string $tanggal_evaluasi_penawaran1
 * @property string $waktu_evaluasi_penawaran1
 * @property string $tempat_evaluasi_penawaran1
 * @property string $tanggal_awal_pemasukan_penawaran2
 * @property string $tanggal_akhir_pemasukan_penawaran2
 * @property string $waktu_pemasukan_penawaran2
 * @property string $tempat_pemasukan_penawaran2
 * @property string $tanggal_pembukaan_penawaran2
 * @property string $waktu_pembukaan_penawaran2
 * @property string $tempat_pembukaan_penawaran2
 * @property string $tanggal_evaluasi_penawaran2
 * @property string $waktu_evaluasi_penawaran2
 * @property string $tempat_evaluasi_penawaran2
 * @property string $tanggal_negosiasi
 * @property string $waktu_negosiasi
 * @property string $tempat_negosiasi
 * @property string $tanggal_usulan_pemenang
 * @property string $waktu_usulan_pemenang
 * @property string $tanggal_penetapan_pemenang
 * @property string $waktu_penetapan_pemenang
 * @property string $tanggal_pemberitahuan_pemenang
 * @property string $waktu_pemberitahuan_pemenang
 * @property string $tanggal_penunjukan_pemenang
 * @property string $waktu_penunjukan_pemenang
 * @property string $sistem_evaluasi_penawaran
 * @property integer $lama_berlaku_penawaran
 * @property integer $jangka_waktu_penyerahan
 * @property string $tanggal_paling_lambat_penyerahan
 * @property integer $jangka_waktu_berlaku_jaminan
 * @property integer $lama_waktu_tambahan
 *
 * The followings are the available model relations:
 * @property RincianRks[] $rincianRks
 * @property Dokumen $idDokumen
 */
class Rks extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rks the static model class
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
		return 'rks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_dokumen, nomor, tipe_rks, tanggal_permintaan_penawaran, tanggal_penjelasan, waktu_penjelasan, tempat_penjelasan, tanggal_awal_pemasukan_penawaran1, tanggal_akhir_pemasukan_penawaran1, waktu_pemasukan_penawaran1, tempat_pemasukan_penawaran1, tanggal_pembukaan_penawaran1, waktu_pembukaan_penawaran1, tempat_pembukaan_penawaran1, tanggal_evaluasi_penawaran1, waktu_evaluasi_penawaran1, tempat_evaluasi_penawaran1, tanggal_awal_pemasukan_penawaran2, tanggal_akhir_pemasukan_penawaran2, waktu_pemasukan_penawaran2, tempat_pemasukan_penawaran2, tanggal_pembukaan_penawaran2, waktu_pembukaan_penawaran2, tempat_pembukaan_penawaran2, tanggal_evaluasi_penawaran2, waktu_evaluasi_penawaran2, tempat_evaluasi_penawaran2, tanggal_negosiasi, waktu_negosiasi, tempat_negosiasi, tanggal_usulan_pemenang, waktu_usulan_pemenang, tanggal_penetapan_pemenang, waktu_penetapan_pemenang, tanggal_pemberitahuan_pemenang, waktu_pemberitahuan_pemenang, tanggal_penunjukan_pemenang, waktu_penunjukan_pemenang, sistem_evaluasi_penawaran, lama_berlaku_penawaran, jangka_waktu_penyerahan, tanggal_paling_lambat_penyerahan, jangka_waktu_berlaku_jaminan, lama_waktu_tambahan', 'required'),
			array('tipe_rks, lama_berlaku_penawaran, jangka_waktu_penyerahan, jangka_waktu_berlaku_jaminan, lama_waktu_tambahan', 'numerical', 'integerOnly'=>true),
			array('id_dokumen', 'length', 'max'=>32),
			array('nomor, sistem_evaluasi_penawaran', 'length', 'max'=>50),
			array('tempat_penjelasan, tempat_pemasukan_penawaran1, tempat_pembukaan_penawaran1, tempat_evaluasi_penawaran1, tempat_pemasukan_penawaran2, tempat_pembukaan_penawaran2, tempat_evaluasi_penawaran2, tempat_negosiasi', 'length', 'max'=>256),
			array('waktu_penjelasan','check1'),
			array('waktu_pemasukan_penawaran1','check2'),
			array('waktu_pembukaan_penawaran1','check3'),
			array('waktu_evaluasi_penawaran1','check4'),
			array('waktu_pemasukan_penawaran2','check5'),
			array('waktu_pembukaan_penawaran2','check6'),			
			array('waktu_evaluasi_penawaran2','check7'),
			array('waktu_negosiasi','check8'),
			array('waktu_usulan_pemenang','check9'),
			array('waktu_penetapan_pemenang','check10'),
			array('waktu_pemberitahuan_pemenang','check11'),
			array('waktu_penunjukan_pemenang','check12'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dokumen, nomor, tipe_rks, tanggal_permintaan_penawaran, tanggal_penjelasan, waktu_penjelasan, tempat_penjelasan, tanggal_awal_pemasukan_penawaran1, tanggal_akhir_pemasukan_penawaran1, waktu_pemasukan_penawaran1, tempat_pemasukan_penawaran1, tanggal_pembukaan_penawaran1, waktu_pembukaan_penawaran1, tempat_pembukaan_penawaran1, tanggal_evaluasi_penawaran1, waktu_evaluasi_penawaran1, tempat_evaluasi_penawaran1, tanggal_awal_pemasukan_penawaran2, tanggal_akhir_pemasukan_penawaran2, waktu_pemasukan_penawaran2, tempat_pemasukan_penawaran2, tanggal_pembukaan_penawaran2, waktu_pembukaan_penawaran2, tempat_pembukaan_penawaran2, tanggal_evaluasi_penawaran2, waktu_evaluasi_penawaran2, tempat_evaluasi_penawaran2, tanggal_negosiasi, waktu_negosiasi, tempat_negosiasi, tanggal_usulan_pemenang, waktu_usulan_pemenang, tanggal_penetapan_pemenang, waktu_penetapan_pemenang, tanggal_pemberitahuan_pemenang, waktu_pemberitahuan_pemenang, tanggal_penunjukan_pemenang, waktu_penunjukan_pemenang, sistem_evaluasi_penawaran, lama_berlaku_penawaran, jangka_waktu_penyerahan, tanggal_paling_lambat_penyerahan, jangka_waktu_berlaku_jaminan, lama_waktu_tambahan', 'safe', 'on'=>'search'),
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
			'rincianRks' => array(self::HAS_MANY, 'RincianRks', 'id_dokumen'),
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
			'tipe_rks' => 'Tipe Rks',
			'tanggal_permintaan_penawaran' => 'Tanggal Permintaan Penawaran',
			'tanggal_penjelasan' => 'Tanggal Penjelasan',
			'waktu_penjelasan' => 'Waktu Penjelasan',
			'tempat_penjelasan' => 'Tempat Penjelasan',
			'tanggal_awal_pemasukan_penawaran1' => 'Tanggal Awal Pemasukan Penawaran1',
			'tanggal_akhir_pemasukan_penawaran1' => 'Tanggal Akhir Pemasukan Penawaran1',
			'waktu_pemasukan_penawaran1' => 'Waktu Pemasukan Penawaran1',
			'tempat_pemasukan_penawaran1' => 'Tempat Pemasukan Penawaran1',
			'tanggal_pembukaan_penawaran1' => 'Tanggal Pembukaan Penawaran1',
			'waktu_pembukaan_penawaran1' => 'Waktu Pembukaan Penawaran1',
			'tempat_pembukaan_penawaran1' => 'Tempat Pembukaan Penawaran1',
			'tanggal_evaluasi_penawaran1' => 'Tanggal Evaluasi Penawaran1',
			'waktu_evaluasi_penawaran1' => 'Waktu Evaluasi Penawaran1',
			'tempat_evaluasi_penawaran1' => 'Tempat Evaluasi Penawaran1',
			'tanggal_awal_pemasukan_penawaran2' => 'Tanggal Awal Pemasukan Penawaran2',
			'tanggal_akhir_pemasukan_penawaran2' => 'Tanggal Akhir Pemasukan Penawaran2',
			'waktu_pemasukan_penawaran2' => 'Waktu Pemasukan Penawaran2',
			'tempat_pemasukan_penawaran2' => 'Tempat Pemasukan Penawaran2',
			'tanggal_pembukaan_penawaran2' => 'Tanggal Pembukaan Penawaran2',
			'waktu_pembukaan_penawaran2' => 'Waktu Pembukaan Penawaran2',
			'tempat_pembukaan_penawaran2' => 'Tempat Pembukaan Penawaran2',
			'tanggal_evaluasi_penawaran2' => 'Tanggal Evaluasi Penawaran2',
			'waktu_evaluasi_penawaran2' => 'Waktu Evaluasi Penawaran2',
			'tempat_evaluasi_penawaran2' => 'Tempat Evaluasi Penawaran2',
			'tanggal_negosiasi' => 'Tanggal Negosiasi',
			'waktu_negosiasi' => 'Waktu Negosiasi',
			'tempat_negosiasi' => 'Tempat Negosiasi',
			'tanggal_usulan_pemenang' => 'Tanggal Usulan Pemenang',
			'waktu_usulan_pemenang' => 'Waktu Usulan Pemenang',
			'tanggal_penetapan_pemenang' => 'Tanggal Penetapan Pemenang',
			'waktu_penetapan_pemenang' => 'Waktu Penetapan Pemenang',
			'tanggal_pemberitahuan_pemenang' => 'Tanggal Pemberitahuan Pemenang',
			'waktu_pemberitahuan_pemenang' => 'Waktu Pemberitahuan Pemenang',
			'tanggal_penunjukan_pemenang' => 'Tanggal Penunjukan Pemenang',
			'waktu_penunjukan_pemenang' => 'Waktu Penunjukan Pemenang',
			'sistem_evaluasi_penawaran' => 'Sistem Evaluasi Penawaran',
			'lama_berlaku_penawaran' => 'Lama Berlaku Penawaran',
			'jangka_waktu_penyerahan' => 'Jangka Waktu Penyerahan',
			'tanggal_paling_lambat_penyerahan' => 'Tanggal Paling Lambat Penyerahan',
			'jangka_waktu_berlaku_jaminan' => 'Jangka Waktu Berlaku Jaminan',
			'lama_waktu_tambahan' => 'Lama Waktu Tambahan',
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
		$criteria->compare('tipe_rks',$this->tipe_rks);
		$criteria->compare('tanggal_permintaan_penawaran',$this->tanggal_permintaan_penawaran,true);
		$criteria->compare('tanggal_penjelasan',$this->tanggal_penjelasan,true);
		$criteria->compare('waktu_penjelasan',$this->waktu_penjelasan,true);
		$criteria->compare('tempat_penjelasan',$this->tempat_penjelasan,true);
		$criteria->compare('tanggal_awal_pemasukan_penawaran1',$this->tanggal_awal_pemasukan_penawaran1,true);
		$criteria->compare('tanggal_akhir_pemasukan_penawaran1',$this->tanggal_akhir_pemasukan_penawaran1,true);
		$criteria->compare('waktu_pemasukan_penawaran1',$this->waktu_pemasukan_penawaran1,true);
		$criteria->compare('tempat_pemasukan_penawaran1',$this->tempat_pemasukan_penawaran1,true);
		$criteria->compare('tanggal_pembukaan_penawaran1',$this->tanggal_pembukaan_penawaran1,true);
		$criteria->compare('waktu_pembukaan_penawaran1',$this->waktu_pembukaan_penawaran1,true);
		$criteria->compare('tempat_pembukaan_penawaran1',$this->tempat_pembukaan_penawaran1,true);
		$criteria->compare('tanggal_evaluasi_penawaran1',$this->tanggal_evaluasi_penawaran1,true);
		$criteria->compare('waktu_evaluasi_penawaran1',$this->waktu_evaluasi_penawaran1,true);
		$criteria->compare('tempat_evaluasi_penawaran1',$this->tempat_evaluasi_penawaran1,true);
		$criteria->compare('tanggal_awal_pemasukan_penawaran2',$this->tanggal_awal_pemasukan_penawaran2,true);
		$criteria->compare('tanggal_akhir_pemasukan_penawaran2',$this->tanggal_akhir_pemasukan_penawaran2,true);
		$criteria->compare('waktu_pemasukan_penawaran2',$this->waktu_pemasukan_penawaran2,true);
		$criteria->compare('tempat_pemasukan_penawaran2',$this->tempat_pemasukan_penawaran2,true);
		$criteria->compare('tanggal_pembukaan_penawaran2',$this->tanggal_pembukaan_penawaran2,true);
		$criteria->compare('waktu_pembukaan_penawaran2',$this->waktu_pembukaan_penawaran2,true);
		$criteria->compare('tempat_pembukaan_penawaran2',$this->tempat_pembukaan_penawaran2,true);
		$criteria->compare('tanggal_evaluasi_penawaran2',$this->tanggal_evaluasi_penawaran2,true);
		$criteria->compare('waktu_evaluasi_penawaran2',$this->waktu_evaluasi_penawaran2,true);
		$criteria->compare('tempat_evaluasi_penawaran2',$this->tempat_evaluasi_penawaran2,true);
		$criteria->compare('tanggal_negosiasi',$this->tanggal_negosiasi,true);
		$criteria->compare('waktu_negosiasi',$this->waktu_negosiasi,true);
		$criteria->compare('tempat_negosiasi',$this->tempat_negosiasi,true);
		$criteria->compare('tanggal_usulan_pemenang',$this->tanggal_usulan_pemenang,true);
		$criteria->compare('waktu_usulan_pemenang',$this->waktu_usulan_pemenang,true);
		$criteria->compare('tanggal_penetapan_pemenang',$this->tanggal_penetapan_pemenang,true);
		$criteria->compare('waktu_penetapan_pemenang',$this->waktu_penetapan_pemenang,true);
		$criteria->compare('tanggal_pemberitahuan_pemenang',$this->tanggal_pemberitahuan_pemenang,true);
		$criteria->compare('waktu_pemberitahuan_pemenang',$this->waktu_pemberitahuan_pemenang,true);
		$criteria->compare('tanggal_penunjukan_pemenang',$this->tanggal_penunjukan_pemenang,true);
		$criteria->compare('waktu_penunjukan_pemenang',$this->waktu_penunjukan_pemenang,true);
		$criteria->compare('sistem_evaluasi_penawaran',$this->sistem_evaluasi_penawaran,true);
		$criteria->compare('lama_berlaku_penawaran',$this->lama_berlaku_penawaran);
		$criteria->compare('jangka_waktu_penyerahan',$this->jangka_waktu_penyerahan);
		$criteria->compare('tanggal_paling_lambat_penyerahan',$this->tanggal_paling_lambat_penyerahan,true);
		$criteria->compare('jangka_waktu_berlaku_jaminan',$this->jangka_waktu_berlaku_jaminan);
		$criteria->compare('lama_waktu_tambahan',$this->lama_waktu_tambahan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
			
	public function Check1($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_penjelasan'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function Check2($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_pemasukan_penawaran1'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function Check3($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_pembukaan_penawaran1'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function Check4($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_evaluasi_penawaran1'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
			
	public function Check5($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_pemasukan_penawaran2'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function Check6($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_pembukaan_penawaran2'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function Check7($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_evaluasi_penawaran2'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function Check8($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_negosiasi'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function Check9($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_usulan_pemenang'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function Check10($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_penetapan_pemenang'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function Check11($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_pemberitahuan_pemenang'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function Check12($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_penunjukan_pemenang'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
}