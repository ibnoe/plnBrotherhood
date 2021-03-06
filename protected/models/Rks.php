<?php

/**
 * This is the model class for table "rks".
 *
 * The followings are the available columns in table 'rks':
 * @property string $id_dokumen
 * @property string $nomor
 * @property integer $tipe_rks
 * @property string $bidang_usaha
 * @property string $sub_bidang_usaha
 * @property string $kualifikasi
 * @property string $klasifikasi
 * @property string $tanggal_pendaftaran
 * @property string $tanggal_pengambilan_dokumen1
 * @property string $tanggal_pengambilan_dokumen2
 * @property string $waktu_pengambilan_dokumen1
 * @property string $waktu_pengambilan_dokumen2
 * @property string $tempat_pengambilan_dokumen
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
 * @property integer $jangka_waktu_penyerahan
 * @property string $tempat_penyerahan
 * @property integer $lama_pelaksanaan
 * @property integer $jangka_waktu_berlaku_jaminan
 * @property integer $biaya_jaminan_pelaksanaan
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
			array('id_dokumen, nomor, tipe_rks, bidang_usaha, sub_bidang_usaha, kualifikasi, klasifikasi, tanggal_pendaftaran, tanggal_pengambilan_dokumen1, tanggal_pengambilan_dokumen2, waktu_pengambilan_dokumen1, waktu_pengambilan_dokumen2, tempat_pengambilan_dokumen, tanggal_permintaan_penawaran, tanggal_penjelasan, waktu_penjelasan, tempat_penjelasan, tanggal_awal_pemasukan_penawaran1, tanggal_akhir_pemasukan_penawaran1, waktu_pemasukan_penawaran1, tempat_pemasukan_penawaran1, tanggal_pembukaan_penawaran1, waktu_pembukaan_penawaran1, tempat_pembukaan_penawaran1, tanggal_evaluasi_penawaran1, waktu_evaluasi_penawaran1, tempat_evaluasi_penawaran1, tanggal_awal_pemasukan_penawaran2, tanggal_akhir_pemasukan_penawaran2, waktu_pemasukan_penawaran2, tempat_pemasukan_penawaran2, tanggal_pembukaan_penawaran2, waktu_pembukaan_penawaran2, tempat_pembukaan_penawaran2, tanggal_evaluasi_penawaran2, waktu_evaluasi_penawaran2, tempat_evaluasi_penawaran2, tanggal_negosiasi, waktu_negosiasi, tempat_negosiasi, tanggal_usulan_pemenang, waktu_usulan_pemenang, tanggal_penetapan_pemenang, waktu_penetapan_pemenang, tanggal_pemberitahuan_pemenang, waktu_pemberitahuan_pemenang, tanggal_penunjukan_pemenang, waktu_penunjukan_pemenang, sistem_evaluasi_penawaran, jangka_waktu_penyerahan, tempat_penyerahan, lama_pelaksanaan, jangka_waktu_berlaku_jaminan, biaya_jaminan_pelaksanaan', 'required'),
			array('tipe_rks, jangka_waktu_penyerahan, lama_pelaksanaan, jangka_waktu_berlaku_jaminan, biaya_jaminan_pelaksanaan', 'numerical', 'integerOnly'=>true),
			array('id_dokumen', 'length', 'max'=>32),
			array('nomor, bidang_usaha, sub_bidang_usaha, kualifikasi, klasifikasi, tempat_pengambilan_dokumen, tempat_penjelasan, tempat_pemasukan_penawaran1, tempat_pembukaan_penawaran1, tempat_evaluasi_penawaran1, tempat_pemasukan_penawaran2, tempat_pembukaan_penawaran2, tempat_evaluasi_penawaran2, tempat_negosiasi, sistem_evaluasi_penawaran, tempat_penyerahan', 'length', 'max'=>256),
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
			array('waktu_pengambilan_dokumen1','check13'),
			array('waktu_pengambilan_dokumen2','check14'),
			
			array('tanggal_permintaan_penawaran','checkLibur'),
			
			array('id_dokumen, nomor, tipe_rks, bidang_usaha, sub_bidang_usaha, kualifikasi, klasifikasi, tanggal_pendaftaran, tanggal_pengambilan_dokumen1, tanggal_pengambilan_dokumen2, waktu_pengambilan_dokumen1, waktu_pengambilan_dokumen2, tempat_pengambilan_dokumen, tanggal_permintaan_penawaran, tanggal_penjelasan, waktu_penjelasan, tempat_penjelasan, tanggal_awal_pemasukan_penawaran1, tanggal_akhir_pemasukan_penawaran1, waktu_pemasukan_penawaran1, tempat_pemasukan_penawaran1, tanggal_pembukaan_penawaran1, waktu_pembukaan_penawaran1, tempat_pembukaan_penawaran1, tanggal_evaluasi_penawaran1, waktu_evaluasi_penawaran1, tempat_evaluasi_penawaran1, tanggal_awal_pemasukan_penawaran2, tanggal_akhir_pemasukan_penawaran2, waktu_pemasukan_penawaran2, tempat_pemasukan_penawaran2, tanggal_pembukaan_penawaran2, waktu_pembukaan_penawaran2, tempat_pembukaan_penawaran2, tanggal_evaluasi_penawaran2, waktu_evaluasi_penawaran2, tempat_evaluasi_penawaran2, tanggal_negosiasi, waktu_negosiasi, tempat_negosiasi, tanggal_usulan_pemenang, waktu_usulan_pemenang, tanggal_penetapan_pemenang, waktu_penetapan_pemenang, tanggal_pemberitahuan_pemenang, waktu_pemberitahuan_pemenang, tanggal_penunjukan_pemenang, waktu_penunjukan_pemenang, sistem_evaluasi_penawaran, jangka_waktu_penyerahan, tempat_penyerahan, lama_pelaksanaan, jangka_waktu_berlaku_jaminan, biaya_jaminan_pelaksanaan', 'safe', 'on'=>'search'),
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
			'bidang_usaha' => 'Bidang Usaha',
			'sub_bidang_usaha' => 'Sub Bidang Usaha',
			'kualifikasi' => 'Kualifikasi',
			'klasifikasi' => 'Klasifikasi',
			'tanggal_pendaftaran' => 'Tanggal Pendaftaran',
			'tanggal_pengambilan_dokumen1' => 'Tanggal Pengambilan Dokumen1',
			'tanggal_pengambilan_dokumen2' => 'Tanggal Pengambilan Dokumen2',
			'waktu_pengambilan_dokumen1' => 'Waktu Pengambilan Dokumen1',
			'waktu_pengambilan_dokumen2' => 'Waktu Pengambilan Dokumen2',
			'tempat_pengambilan_dokumen' => 'Tempat Pengambilan Dokumen',
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
			'jangka_waktu_penyerahan' => 'Jangka Waktu Penyerahan',
			'tempat_penyerahan' => 'Tempat Penyerahan',
			'lama_pelaksanaan' => 'Lama Pelaksanaan',
			'jangka_waktu_berlaku_jaminan' => 'Jangka Waktu Berlaku Jaminan',
			'biaya_jaminan_pelaksanaan' => 'Biaya Jaminan Pelaksanaan',
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
		$criteria->compare('bidang_usaha',$this->bidang_usaha,true);
		$criteria->compare('sub_bidang_usaha',$this->sub_bidang_usaha,true);
		$criteria->compare('kualifikasi',$this->kualifikasi,true);
		$criteria->compare('klasifikasi',$this->klasifikasi,true);
		$criteria->compare('tanggal_pendaftaran',$this->tanggal_pendaftaran,true);
		$criteria->compare('tanggal_pengambilan_dokumen1',$this->tanggal_pengambilan_dokumen1,true);
		$criteria->compare('tanggal_pengambilan_dokumen2',$this->tanggal_pengambilan_dokumen2,true);
		$criteria->compare('waktu_pengambilan_dokumen1',$this->waktu_pengambilan_dokumen1,true);
		$criteria->compare('waktu_pengambilan_dokumen2',$this->waktu_pengambilan_dokumen2,true);
		$criteria->compare('tempat_pengambilan_dokumen',$this->tempat_pengambilan_dokumen,true);
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
		$criteria->compare('jangka_waktu_penyerahan',$this->jangka_waktu_penyerahan);
		$criteria->compare('tempat_penyerahan',$this->tempat_penyerahan,true);
		$criteria->compare('lama_pelaksanaan',$this->lama_pelaksanaan);
		$criteria->compare('jangka_waktu_berlaku_jaminan',$this->jangka_waktu_berlaku_jaminan);
		$criteria->compare('biaya_jaminan_pelaksanaan',$this->biaya_jaminan_pelaksanaan);

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
	
	public function Check13($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_pengambilan_dokumen1'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function Check14($attribute,$params){		
		if(!preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $this->attributes['waktu_pengambilan_dokumen2'])){
			$this->addError($attribute, 'Waktu tidak sesuai dengan format');
		}
	}
	
	public function checkLibur($attribute,$params){
		$arrayLibur = Libur::model()->findAll();
		$jmlLibur = count(Libur::model()->findAll());
		$arrayLibur2 = array();
		
		for($i=0;$i<$jmlLibur;$i++){
			$arrayLibur2[$i] = $arrayLibur[$i]->tanggal;
		} 
		
		if($this->isTglLibur($this->attributes['tanggal_permintaan_penawaran'],$arrayLibur2)){
			$this->addError($attribute, 'Tanggal tidak boleh tanggal libur');
			// $this->addError($attribute, 'Tanggal tidak dapat dipilih karena tanggal tersebut merupakan ' . );
		}
	}
	
	public function isTglLibur($tgl,$arrayTgl){
		$a = false;
		$i = 0;
		while($a==false && $i!=count($arrayTgl)){
			// if(($tgl('y')==$arrayTgl[$i]('y'))&&($tgl('m')==$arrayTgl[$i]('m'))&&($tgl('d')==$arrayTgl[$i]('d'))){
			if(Tanggal::getTanggalLengkap($tgl)==Tanggal::getTanggalLengkap($arrayTgl[$i])){
				$a = true;
			}
			$i++;
		}
		return $a;
	}
	
}