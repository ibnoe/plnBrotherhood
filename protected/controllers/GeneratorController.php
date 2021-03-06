<?php
	class GeneratorController extends Controller
	{
		public function actionGenerator()
		{
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					if(Pengadaan::model()->findByPk($id)->status=="0"){
						$this->redirect(array('generator/penentuanmetode','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="1"){
						$this->redirect(array('generator/rks','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="2"){
						$this->redirect(array('generator/hps','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="3"){
						$this->redirect(array('generator/edithps','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="4"){
						$this->redirect(array('generator/dokumenprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="5"){
						$this->redirect(array('generator/suratundanganprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="6"){
						$this->redirect(array('generator/suratpengumumanpelelanganprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="7"){
						$this->redirect(array('generator/pendaftaranpelelanganprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="8"){
						$this->redirect(array('generator/pengambilandokumenprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="9"){
						$this->redirect(array('generator/penyampaiandokumenprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="10"){
						$this->redirect(array('generator/penyampaiandokumenprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="11"){
						$this->redirect(array('generator/evaluasidokumenprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="12"){
						$this->redirect(array('generator/evaluasidokumenprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="13"){
						$this->redirect(array('generator/usulanhasilprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="14"){
						$this->redirect(array('generator/penetapanhasilprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="15"){
						$this->redirect(array('generator/pengumumanhasilprakualifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="16"){
						$this->redirect(array('generator/permintaanpenawaranharga','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="17"){
						$this->redirect(array('generator/suratpengumumanpelelangan','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="18"){
						$this->redirect(array('generator/pendaftaranpelelangan','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="19"){
						$this->redirect(array('generator/pengambilandokumen','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="20"){
						$this->redirect(array('generator/aanwijzing','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="21"){
						$this->redirect(array('generator/beritaacaraaanwijzing','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="22"){
						$this->redirect(array('generator/pembukaanpenawaran','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="23"){
						$this->redirect(array('generator/beritaacarapembukaanpenawaran','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="24"){
						$this->redirect(array('generator/evaluasipenawaran','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="25"){
						$this->redirect(array('generator/beritaacaraevaluasipenawaran','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="26"){
						$this->redirect(array('generator/pembukaanpenawaran2','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="27"){
						$this->redirect(array('generator/beritaacarapembukaanpenawaran2','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="28"){
						$this->redirect(array('generator/evaluasipenawaran2','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="29"){
						$this->redirect(array('generator/beritaacaraevaluasipenawaran2','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="30"){
						$this->redirect(array('generator/negosiasiklarifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="31"){
						$this->redirect(array('generator/beritaacaranegosiasiklarifikasi','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="32"){
						$this->redirect(array('generator/notadinasusulanpemenang','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="33"){
						$this->redirect(array('generator/notadinaspenetapanpemenang','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="34"){
						$this->redirect(array('generator/notadinaspemberitahuanpemenang','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="35"){
						$this->redirect(array('generator/suratpengumumanpemenang','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="36"){
						$this->redirect(array('generator/suratpenunjukanpemenang','id'=>$id));
					}
					if(Pengadaan::model()->findByPk($id)->status=="98"){
						$this->redirect(array('generator/pengadaangagal','id'=>$id));
					}
					else{
						$this->redirect(array('generator/checkpoint2','id'=>$id));
					}
				}
			}
		}
	
		public function actionPenentuanMetode(){
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '0' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status='1';
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->id_pengadaan=$Pengadaan->id_pengadaan;
				$Dokumen0->nama_dokumen='Pakta Integritas Awal Panitia';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$PAP1= new PaktaIntegritasPanitia1;
				$PAP1->id_dokumen=$Dokumen0->id_dokumen;
				
				if(isset($_POST['Pengadaan']))
				{
					$Pengadaan->attributes=$_POST['Pengadaan'];
					$valid=$Pengadaan->validate();
					if($valid){		
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($PAP1->save(false)){
									$this->redirect(array('editpenentuanmetode','id'=>$id));
								}
							}
						}
					}
				}

				$this->render('penentuanmetode',array(
					'Pengadaan'=>$Pengadaan,'PAP1'=>$PAP1,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
			
		}
		
		public function actionEditPenentuanMetode(){
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}

			else if (Pengadaan::model()->findByPk($id)->status > '0' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Pakta Integritas Awal Panitia"');
				$PAP1=PaktaIntegritasPanitia1::model()->findByPk($Dokumen0->id_dokumen);
				
				if(isset($_POST['Pengadaan']))
				{
					$Pengadaan->attributes=$_POST['Pengadaan'];
					$valid=$Pengadaan->validate();
					if($valid){		
						if($Pengadaan->save(false))
						{	
							$this->redirect(array('editpenentuanmetode','id'=>$id));
						}
					}
				}

				$this->render('penentuanmetode',array(
					'Pengadaan'=>$Pengadaan,'PAP1'=>$PAP1,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionRks()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '1' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='2';
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->id_pengadaan=$Pengadaan->id_pengadaan;
				$Dokumen0->nama_dokumen='RKS';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$RKS= new Rks;
				$RKS->id_dokumen=$Dokumen0->id_dokumen;
				
				if ($Pengadaan->metode_penawaran=="Satu Sampul"){
					$RKS->tanggal_awal_pemasukan_penawaran2='00-00-0000';
					$RKS->tanggal_akhir_pemasukan_penawaran2='00-00-0000';
					$RKS->waktu_pemasukan_penawaran2='00:00';
					$RKS->tempat_pemasukan_penawaran2='-';
					$RKS->tanggal_pembukaan_penawaran2='00-00-0000';
					$RKS->waktu_pembukaan_penawaran2='00:00';
					$RKS->tempat_pembukaan_penawaran2='-';
					$RKS->tanggal_evaluasi_penawaran2='00-00-0000';
					$RKS->waktu_evaluasi_penawaran2='00:00';
					$RKS->tempat_evaluasi_penawaran2='-';
				} else if ($Pengadaan->metode_penawaran=="Dua Sampul"){
					$RKS->tanggal_awal_pemasukan_penawaran2='00-00-0000';
					$RKS->tanggal_akhir_pemasukan_penawaran2='00-00-0000';
					$RKS->waktu_pemasukan_penawaran2='00:00';
					$RKS->tempat_pemasukan_penawaran2='-';
				}
				
				if($Pengadaan->metode_pengadaan=="Pelelangan"){
					$RKS->tanggal_permintaan_penawaran='00-00-0000';
				} else {
					$RKS->tipe_rks=0;
					$RKS->tanggal_pendaftaran='00-00-0000';
					$RKS->tanggal_pengambilan_dokumen1='00-00-0000';
					$RKS->tanggal_pengambilan_dokumen2='00-00-0000';
					$RKS->waktu_pengambilan_dokumen1='00:00';
					$RKS->waktu_pengambilan_dokumen2='00:00';
					$RKS->tempat_pengambilan_dokumen='-';
				}
				
				$DaftarIsi= new RincianRks;
				$DaftarIsi->id_dokumen=$RKS->id_dokumen;
				$DaftarIsi->nama_rincian="Daftar Isi";
				$Isi= new RincianRks;
				$Isi->id_dokumen=$RKS->id_dokumen;
				$Isi->nama_rincian="Isi";
				$Lamp1= new RincianRks;
				$Lamp1->id_dokumen=$RKS->id_dokumen;
				$Lamp1->nama_rincian="Lampiran 1";
				$Lamp2= new RincianRks;
				$Lamp2->id_dokumen=$RKS->id_dokumen;
				$Lamp2->nama_rincian="Lampiran 2";
				$Lamp3= new RincianRks;
				$Lamp3->id_dokumen=$RKS->id_dokumen;
				$Lamp3->nama_rincian="Lampiran 3";
				$Lamp4= new RincianRks;
				$Lamp4->id_dokumen=$RKS->id_dokumen;
				$Lamp4->nama_rincian="Lampiran 4";
				$Lamp5= new RincianRks;
				$Lamp5->id_dokumen=$RKS->id_dokumen;
				$Lamp5->nama_rincian="Lampiran 5";
				$Lamp6= new RincianRks;
				$Lamp6->id_dokumen=$RKS->id_dokumen;
				$Lamp6->nama_rincian="Lampiran 6";
				$Lamp7= new RincianRks;
				$Lamp7->id_dokumen=$RKS->id_dokumen;
				$Lamp7->nama_rincian="Lampiran 7";;
				$Lamp8= new RincianRks;
				$Lamp8->id_dokumen=$RKS->id_dokumen;
				$Lamp8->nama_rincian="Lampiran 8";
				
				if($Pengadaan->jenis_kualifikasi=="Pasca Kualifikasi") {
					$DokumenX1= new Dokumen;
					$DokumenX1->id_dokumen=$somevariable+3;
					$DokumenX1->nama_dokumen='Pakta Integritas Penyedia';
					$DokumenX1->status_upload='Belum Selesai';
					$DokumenX1->tanggal='-';
					$DokumenX1->tempat='-';
					$DokumenX1->id_pengadaan=$id;
					
					$DokumenX2= new Dokumen;
					$DokumenX2->id_dokumen=$somevariable+4;
					$DokumenX2->nama_dokumen='Surat Pernyataan Minat';
					$DokumenX2->tanggal='-';
					$DokumenX2->tempat='-';
					$DokumenX2->status_upload='Belum Selesai';
					$DokumenX2->id_pengadaan=$id;
					
					$DokumenX3= new Dokumen;
					$DokumenX3->id_dokumen=$somevariable+5;
					$DokumenX3->nama_dokumen='Form Isian Kualifikasi';
					$DokumenX3->tanggal='-';
					$DokumenX3->tempat='-';
					$DokumenX3->status_upload='Belum Selesai';
					$DokumenX3->id_pengadaan=$id;
					
					$X1= new PaktaIntegritasPenyedia;
					$X1->id_dokumen=$DokumenX1->id_dokumen;
					
					$X2= new SuratPernyataanMinat;
					$X2->id_dokumen=$DokumenX2->id_dokumen;
					
					$X3= new FormIsianKualifikasi;
					$X3->id_dokumen=$DokumenX3->id_dokumen;
				}
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['Rks']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$RKS->attributes=$_POST['Rks'];
					$RKS->tanggal_pendaftaran=date('Y-m-d', strtotime($RKS->tanggal_pendaftaran));
					$RKS->tanggal_pengambilan_dokumen1=date('Y-m-d', strtotime($RKS->tanggal_pengambilan_dokumen1));
					$RKS->tanggal_pengambilan_dokumen2=date('Y-m-d', strtotime($RKS->tanggal_pengambilan_dokumen2));
					$RKS->tanggal_permintaan_penawaran=date('Y-m-d', strtotime($RKS->tanggal_permintaan_penawaran));
					$RKS->tanggal_penjelasan=date('Y-m-d', strtotime($RKS->tanggal_penjelasan));
					$RKS->tanggal_awal_pemasukan_penawaran1=date('Y-m-d', strtotime($RKS->tanggal_awal_pemasukan_penawaran1));
					$RKS->tanggal_akhir_pemasukan_penawaran1=date('Y-m-d', strtotime($RKS->tanggal_akhir_pemasukan_penawaran1));
					$RKS->tanggal_pembukaan_penawaran1=date('Y-m-d', strtotime($RKS->tanggal_pembukaan_penawaran1));
					$RKS->tanggal_evaluasi_penawaran1=date('Y-m-d', strtotime($RKS->tanggal_evaluasi_penawaran1));
					$RKS->tanggal_awal_pemasukan_penawaran2=date('Y-m-d', strtotime($RKS->tanggal_awal_pemasukan_penawaran2));
					$RKS->tanggal_akhir_pemasukan_penawaran2=date('Y-m-d', strtotime($RKS->tanggal_akhir_pemasukan_penawaran2));
					$RKS->tanggal_pembukaan_penawaran2=date('Y-m-d', strtotime($RKS->tanggal_pembukaan_penawaran2));
					$RKS->tanggal_evaluasi_penawaran2=date('Y-m-d', strtotime($RKS->tanggal_evaluasi_penawaran2));
					$RKS->tanggal_negosiasi=date('Y-m-d', strtotime($RKS->tanggal_negosiasi));
					$RKS->tanggal_usulan_pemenang=date('Y-m-d', strtotime($RKS->tanggal_usulan_pemenang));
					$RKS->tanggal_penetapan_pemenang=date('Y-m-d', strtotime($RKS->tanggal_penetapan_pemenang));
					$RKS->tanggal_pemberitahuan_pemenang=date('Y-m-d', strtotime($RKS->tanggal_pemberitahuan_pemenang));
					$RKS->tanggal_penunjukan_pemenang=date('Y-m-d', strtotime($RKS->tanggal_penunjukan_pemenang));
					$valid=$RKS->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						$Cover = new RincianRks;
						$Cover->id_dokumen=$RKS->id_dokumen;
						$Cover->nama_rincian="Cover";
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($RKS->save(false)){
									if($Pengadaan->jenis_kualifikasi=="Pasca Kualifikasi") {
										$DokumenX1->save(false);
										$DokumenX2->save(false);
										$DokumenX3->save(false);
										$X1->save(false);
										$X2->save(false);
										$X3->save(false);
									}
									$Cover->save(false);
									$DaftarIsi->save(false);
									$Isi->save(false);										
									$Lamp1->save(false);
									$Lamp2->save(false);
									$Lamp3->save(false);
									$Lamp4->save(false);
									$Lamp5->save(false);
									$Lamp6->save(false);
									$Lamp7->save(false);
									$Lamp8->save(false);
									$this->redirect(array('editrks','id'=>$id));
								}
							}
						}
					}
				}
				$this->render('rks',array(
					'Rks'=>$RKS,'Dokumen0'=>$Dokumen0,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
			
		}
		
		public function actionEditRks()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '1' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				
				$RKS= Rks::model()->findByPk($Dokumen0->id_dokumen);
				$RKS->waktu_pengambilan_dokumen1=Tanggal::getJamMenit($RKS->waktu_pengambilan_dokumen1);
				$RKS->waktu_pengambilan_dokumen2=Tanggal::getJamMenit($RKS->waktu_pengambilan_dokumen2);
				$RKS->waktu_penjelasan=Tanggal::getJamMenit($RKS->waktu_penjelasan);
				$RKS->waktu_pemasukan_penawaran1=Tanggal::getJamMenit($RKS->waktu_pemasukan_penawaran1);
				$RKS->waktu_pembukaan_penawaran1=Tanggal::getJamMenit($RKS->waktu_pembukaan_penawaran1);
				$RKS->waktu_evaluasi_penawaran1=Tanggal::getJamMenit($RKS->waktu_evaluasi_penawaran1);
				$RKS->waktu_pemasukan_penawaran2=Tanggal::getJamMenit($RKS->waktu_pemasukan_penawaran2);
				$RKS->waktu_pembukaan_penawaran2=Tanggal::getJamMenit($RKS->waktu_pembukaan_penawaran2);
				$RKS->waktu_evaluasi_penawaran2=Tanggal::getJamMenit($RKS->waktu_evaluasi_penawaran2);
				$RKS->waktu_negosiasi=Tanggal::getJamMenit($RKS->waktu_negosiasi);
				$RKS->waktu_usulan_pemenang=Tanggal::getJamMenit($RKS->waktu_usulan_pemenang);
				$RKS->waktu_penetapan_pemenang=Tanggal::getJamMenit($RKS->waktu_penetapan_pemenang);
				$RKS->waktu_pemberitahuan_pemenang=Tanggal::getJamMenit($RKS->waktu_pemberitahuan_pemenang);
				$RKS->waktu_penunjukan_pemenang=Tanggal::getJamMenit($RKS->waktu_penunjukan_pemenang);
				$RKS->tanggal_pendaftaran=Tanggal::getTanggalStrip($RKS->tanggal_pendaftaran);
				$RKS->tanggal_pengambilan_dokumen1=Tanggal::getTanggalStrip($RKS->tanggal_pengambilan_dokumen1);
				$RKS->tanggal_pengambilan_dokumen2=Tanggal::getTanggalStrip($RKS->tanggal_pengambilan_dokumen2);
				$RKS->tanggal_permintaan_penawaran=Tanggal::getTanggalStrip($RKS->tanggal_permintaan_penawaran);
				$RKS->tanggal_awal_pemasukan_penawaran1=Tanggal::getTanggalStrip($RKS->tanggal_awal_pemasukan_penawaran1);
				$RKS->tanggal_akhir_pemasukan_penawaran1=Tanggal::getTanggalStrip($RKS->tanggal_akhir_pemasukan_penawaran1);
				$RKS->tanggal_pembukaan_penawaran1=Tanggal::getTanggalStrip($RKS->tanggal_pembukaan_penawaran1);
				$RKS->tanggal_evaluasi_penawaran1=Tanggal::getTanggalStrip($RKS->tanggal_evaluasi_penawaran1);
				$RKS->tanggal_awal_pemasukan_penawaran2=Tanggal::getTanggalStrip($RKS->tanggal_awal_pemasukan_penawaran2);
				$RKS->tanggal_akhir_pemasukan_penawaran2=Tanggal::getTanggalStrip($RKS->tanggal_akhir_pemasukan_penawaran2);
				$RKS->tanggal_pembukaan_penawaran2=Tanggal::getTanggalStrip($RKS->tanggal_pembukaan_penawaran2);
				$RKS->tanggal_evaluasi_penawaran2=Tanggal::getTanggalStrip($RKS->tanggal_evaluasi_penawaran2);
				$RKS->tanggal_penjelasan=Tanggal::getTanggalStrip($RKS->tanggal_penjelasan);
				$RKS->tanggal_negosiasi=Tanggal::getTanggalStrip($RKS->tanggal_negosiasi);
				$RKS->tanggal_usulan_pemenang=Tanggal::getTanggalStrip($RKS->tanggal_usulan_pemenang);
				$RKS->tanggal_penetapan_pemenang=Tanggal::getTanggalStrip($RKS->tanggal_penetapan_pemenang);
				$RKS->tanggal_pemberitahuan_pemenang=Tanggal::getTanggalStrip($RKS->tanggal_pemberitahuan_pemenang);
				$RKS->tanggal_penunjukan_pemenang=Tanggal::getTanggalStrip($RKS->tanggal_penunjukan_pemenang);
				
				if($Pengadaan->jenis_kualifikasi=="Pasca Kualifikasi") {
					
					$DokumenX1= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Pakta Integritas Penyedia"');
					$DokumenX2= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Surat Pernyataan Minat"');
					$DokumenX3= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Form Isian Kualifikasi"');
					
					$X1= PaktaIntegritasPenyedia::model()->findByPk($DokumenX1->id_dokumen);
					$X2= SuratPernyataanMinat::model()->findByPk($DokumenX2->id_dokumen);
					$X3= FormIsianKualifikasi::model()->findByPk($DokumenX3->id_dokumen);
				}
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['Rks']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$RKS->attributes=$_POST['Rks'];
					$RKS->tanggal_pendaftaran=date('Y-m-d', strtotime($RKS->tanggal_pendaftaran));
					$RKS->tanggal_pengambilan_dokumen1=date('Y-m-d', strtotime($RKS->tanggal_pengambilan_dokumen1));
					$RKS->tanggal_pengambilan_dokumen2=date('Y-m-d', strtotime($RKS->tanggal_pengambilan_dokumen2));
					$RKS->tanggal_permintaan_penawaran=date('Y-m-d', strtotime($RKS->tanggal_permintaan_penawaran));
					$RKS->tanggal_penjelasan=date('Y-m-d', strtotime($RKS->tanggal_penjelasan));
					$RKS->tanggal_awal_pemasukan_penawaran1=date('Y-m-d', strtotime($RKS->tanggal_awal_pemasukan_penawaran1));
					$RKS->tanggal_akhir_pemasukan_penawaran1=date('Y-m-d', strtotime($RKS->tanggal_akhir_pemasukan_penawaran1));
					$RKS->tanggal_pembukaan_penawaran1=date('Y-m-d', strtotime($RKS->tanggal_pembukaan_penawaran1));
					$RKS->tanggal_evaluasi_penawaran1=date('Y-m-d', strtotime($RKS->tanggal_evaluasi_penawaran1));
					$RKS->tanggal_awal_pemasukan_penawaran2=date('Y-m-d', strtotime($RKS->tanggal_awal_pemasukan_penawaran2));
					$RKS->tanggal_akhir_pemasukan_penawaran2=date('Y-m-d', strtotime($RKS->tanggal_akhir_pemasukan_penawaran2));
					$RKS->tanggal_pembukaan_penawaran2=date('Y-m-d', strtotime($RKS->tanggal_pembukaan_penawaran2));
					$RKS->tanggal_evaluasi_penawaran2=date('Y-m-d', strtotime($RKS->tanggal_evaluasi_penawaran2));
					$RKS->tanggal_negosiasi=date('Y-m-d', strtotime($RKS->tanggal_negosiasi));
					$RKS->tanggal_usulan_pemenang=date('Y-m-d', strtotime($RKS->tanggal_usulan_pemenang));
					$RKS->tanggal_penetapan_pemenang=date('Y-m-d', strtotime($RKS->tanggal_penetapan_pemenang));
					$RKS->tanggal_pemberitahuan_pemenang=date('Y-m-d', strtotime($RKS->tanggal_pemberitahuan_pemenang));
					$RKS->tanggal_penunjukan_pemenang=date('Y-m-d', strtotime($RKS->tanggal_penunjukan_pemenang));
					$valid=$RKS->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){		
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($RKS->save(false)){
									$this->redirect(array('editrks','id'=>$id));
								}
							}
						}
					}
				}

				if($Pengadaan->jenis_kualifikasi=="Pasca Kualifikasi"){
					$this->render('rks',array(
						'Rks'=>$RKS,'Dokumen0'=>$Dokumen0,'X1'=>$X1,'X2'=>$X2,'X3'=>$X3,
					));
				} else {
					$this->render('rks',array(
						'Rks'=>$RKS,'Dokumen0'=>$Dokumen0,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		
		}
		
		public function actionHps()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '2' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status='3';
				
				$Dok= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
				$RKS= Rks::model()->findByPk($Dok->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->id_pengadaan=$Pengadaan->id_pengadaan;
				$Dokumen0->nama_dokumen='HPS';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$HPS= new Hps;
				$HPS->id_dokumen=$Dokumen0->id_dokumen;
				$HPS->nilai_hps=0;
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['Hps']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$HPS->attributes=$_POST['Hps'];
					$valid=$HPS->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($HPS->save(false)){
									$this->redirect(array('edithps','id'=>$id));
								}
							}
						}						
					}
				}

				$this->render('hps',array(
					'Hps'=>$HPS,'Dokumen0'=>$Dokumen0,'Rks'=>$RKS,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditHps()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '2' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Dok= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
				$RKS= Rks::model()->findByPk($Dok->id_dokumen);
				
				$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "HPS"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				
				$HPS= Hps::model()->findByPk($Dokumen0->id_dokumen);
								
				if(isset($_POST['Hps']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$HPS->attributes=$_POST['Hps'];
					if($HPS->nilai_hps>0 && $Pengadaan->status=="3"){
						if($Pengadaan->jenis_kualifikasi=="Pra Kualifikasi") {
							$Pengadaan->status="4";
						} else {
							if($Pengadaan->metode_pengadaan=='Pelelangan'){
								$Pengadaan->status= "17";
							} else if ($Pengadaan->metode_pengadaan=='Penunjukan Langsung'||$Pengadaan->metode_pengadaan=='Pemilihan Langsung') {
								$Pengadaan->status= "16";
							}
						}
					}
					$valid=$HPS->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){						
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($HPS->save(false)){
									Yii::app()->user->setFlash('sukses','Data Telah Disimpan');
									$this->redirect(array('edithps','id'=>$id));
								}
							}
						}
					}
				}
				
				$this->render('hps',array(
					'Hps'=>$HPS,'Dokumen0'=>$Dokumen0,'Rks'=>$RKS
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionDokumenprakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '4' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				if ($Pengadaan->metode_pengadaan=='Pelelangan'){
					$Pengadaan->status= "6";
				} else {	
					$Pengadaan->status= "5";
				}
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Dokumen Prakualifikasi';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$Dokumen1= new Dokumen;
				$Dokumen1->id_dokumen=$somevariable+2;
				$Dokumen1->nama_dokumen='Pakta Integritas Penyedia';
				$Dokumen1->status_upload='Belum Selesai';
				$Dokumen1->tanggal='-';
				$Dokumen1->tempat='-';
				$Dokumen1->id_pengadaan=$id;
				
				$Dokumen2= new Dokumen;
				$Dokumen2->id_dokumen=$somevariable+3;
				$Dokumen2->nama_dokumen='Surat Pernyataan Minat';
				$Dokumen2->tanggal='-';
				$Dokumen2->tempat='-';
				$Dokumen2->status_upload='Belum Selesai';
				$Dokumen2->id_pengadaan=$id;
				
				$Dokumen3= new Dokumen;
				$Dokumen3->id_dokumen=$somevariable+4;
				$Dokumen3->nama_dokumen='Form Isian Kualifikasi';
				$Dokumen3->tanggal='-';
				$Dokumen3->tempat='-';
				$Dokumen3->status_upload='Belum Selesai';
				$Dokumen3->id_pengadaan=$id;
				
				$DPK= new DokumenPrakualifikasi;
				$DPK->id_dokumen=$Dokumen0->id_dokumen;
				
				$X1= new PaktaIntegritasPenyedia;
				$X1->id_dokumen=$Dokumen1->id_dokumen;
				
				$X2= new SuratPernyataanMinat;
				$X2->id_dokumen=$Dokumen2->id_dokumen;
				
				$X3= new FormIsianKualifikasi;
				$X3->id_dokumen=$Dokumen3->id_dokumen;
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);
				
				if(isset($_POST['DokumenPrakualifikasi']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$DPK->attributes=$_POST['DokumenPrakualifikasi'];
					$DPK->tanggal_pengambilan1=date('Y-m-d',strtotime($DPK->tanggal_pengambilan1));
					$DPK->tanggal_pengambilan2=date('Y-m-d',strtotime($DPK->tanggal_pengambilan2));
					$DPK->tanggal_pemasukan1=date('Y-m-d',strtotime($DPK->tanggal_pemasukan1));
					$DPK->tanggal_pemasukan2=date('Y-m-d',strtotime($DPK->tanggal_pemasukan2));
					$DPK->tanggal_evaluasi=date('Y-m-d',strtotime($DPK->tanggal_evaluasi));
					$DPK->tanggal_penetapan=date('Y-m-d',strtotime($DPK->tanggal_penetapan));
					$valid=$DPK->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)&&$Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
								if($DPK->save(false)&&$X1->save(false)&&$X2->save(false)&&$X3->save(false)){
									$this->redirect(array('editdokumenprakualifikasi','id'=>$Dokumen0->id_pengadaan));
								}
							}
						}
					}
				}

				$this->render('dokumenprakualifikasi',array(
					'DPK'=>$DPK,'Dokumen0'=>$Dokumen0,
				));
			}	
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditDokumenprakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '4' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Dokumen Prakualifikasi"');
				$Dokumen1= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Pakta Integritas Penyedia"');
				$Dokumen2= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Pernyataan Minat"');
				$Dokumen3= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Form Isian Kualifikasi"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				$DPK= DokumenPrakualifikasi::model()->findByPk($Dokumen0->id_dokumen);
				$DPK->tanggal_pengambilan1=Tanggal::getTanggalStrip($DPK->tanggal_pengambilan1);
				$DPK->tanggal_pengambilan2=Tanggal::getTanggalStrip($DPK->tanggal_pengambilan2);
				$DPK->tanggal_pemasukan1=Tanggal::getTanggalStrip($DPK->tanggal_pemasukan1);
				$DPK->tanggal_pemasukan2=Tanggal::getTanggalStrip($DPK->tanggal_pemasukan2);
				$DPK->tanggal_evaluasi=Tanggal::getTanggalStrip($DPK->tanggal_evaluasi);
				$DPK->tanggal_penetapan=Tanggal::getTanggalStrip($DPK->tanggal_penetapan);
				$DPK->waktu_pengambilan1=Tanggal::getJamMenit($DPK->waktu_pengambilan1);
				$DPK->waktu_pengambilan2=Tanggal::getJamMenit($DPK->waktu_pengambilan2);
				$DPK->waktu_pemasukan1=Tanggal::getJamMenit($DPK->waktu_pemasukan1);
				$DPK->waktu_pemasukan2=Tanggal::getJamMenit($DPK->waktu_pemasukan2);
				$DPK->waktu_evaluasi=Tanggal::getJamMenit($DPK->waktu_evaluasi);
				$DPK->waktu_penetapan=Tanggal::getJamMenit($DPK->waktu_penetapan);
				
				$X1= PaktaIntegritasPenyedia::model()->findByPk($Dokumen1->id_dokumen);
				$X2= SuratPernyataanMinat::model()->findByPk($Dokumen2->id_dokumen);
				$X3= FormIsianKualifikasi::model()->findByPk($Dokumen3->id_dokumen);
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['DokumenPrakualifikasi']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$DPK->attributes=$_POST['DokumenPrakualifikasi'];
					$DPK->tanggal_pengambilan1=date('Y-m-d',strtotime($DPK->tanggal_pengambilan1));
					$DPK->tanggal_pengambilan2=date('Y-m-d',strtotime($DPK->tanggal_pengambilan2));
					$DPK->tanggal_pemasukan1=date('Y-m-d',strtotime($DPK->tanggal_pemasukan1));
					$DPK->tanggal_pemasukan2=date('Y-m-d',strtotime($DPK->tanggal_pemasukan2));
					$DPK->tanggal_evaluasi=date('Y-m-d',strtotime($DPK->tanggal_evaluasi));
					$DPK->tanggal_penetapan=date('Y-m-d',strtotime($DPK->tanggal_penetapan));
					$valid=$DPK->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)&&$Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
								if($DPK->save(false)&&$X1->save(false)&&$X2->save(false)&&$X3->save(false)){
									$this->redirect(array('editdokumenprakualifikasi','id'=>$Dokumen0->id_pengadaan));
								}
							}
						}
					}
				}

				$this->render('dokumenprakualifikasi',array(
					'DPK'=>$DPK,'Dokumen0'=>$Dokumen0,'X1'=>$X1,'X2'=>$X2,'X3'=>$X3,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionSuratundanganprakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status == '5' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {								
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status= "9";
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Surat Undangan Prakualifikasi';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				
				$SUPK= new SuratUndanganPrakualifikasi;
				$SUPK->id_dokumen=$Dokumen0->id_dokumen;
				$SUPK->perihal= 'Undangan Prakualifikasi '.$Pengadaan->nama_pengadaan;
				
				$PP = array(new PenerimaPengadaan);	
				
				if(isset($_POST['SuratUndanganPrakualifikasi']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUPK->attributes=$_POST['SuratUndanganPrakualifikasi'];
					$valid=$Dokumen0->validate();
					$valid=$valid&&$SUPK->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){
							$total = count($_POST['perusahaan']);
							
							for($i=0;$i<$total;$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i] = new PenerimaPengadaan;									
									$PP[$i]->id_pengadaan = $Pengadaan->id_pengadaan;									
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->alamat=$_POST['alamat'][$i];									
									$PP[$i]->npwp='-';		
									$PP[$i]->nilai = 0;									
									$PP[$i]->biaya = 0;									
									$PP[$i]->nomor_surat_penawaran = '-';									
									$PP[$i]->tanggal_penawaran = '-';									
									$PP[$i]->undangan_prakualifikasi = '1';
									$PP[$i]->save();
								}
							}
																
						}
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($SUPK->save(false)){
									$this->redirect(array('editsuratundanganprakualifikasi','id'=>$Dokumen0->id_pengadaan));
								}
							}
						}
					}
				}

				$this->render('suratundanganprakualifikasi',array(
					'Dokumen0'=>$Dokumen0,'SUPK'=>$SUPK,'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditSuratundanganprakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '5' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {					
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Prakualifikasi"');
				
				$SUPK= SuratUndanganPrakualifikasi::model()->findByPk($Dokumen0->id_dokumen);
				
				$PP = PenerimaPengadaan::model()->findAll('(undangan_prakualifikasi = "1" or undangan_prakualifikasi = "0") and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['SuratUndanganPrakualifikasi']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUPK->attributes=$_POST['SuratUndanganPrakualifikasi'];
					$valid=$Dokumen0->validate();
					$valid=$valid&&$SUPK->validate();
					if($valid){
						if(isset($_POST['perusahaan'])){

							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){																																																
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->alamat=$_POST['alamat'][$i];										
									$PP[$i]->save();
								}
							}
							
							$total = count($_POST['perusahaan']);
							if(count($PP)<$total){
								$PPkurang = $total - count($PP);
								for($j=0;$j<$PPkurang;$j++){
									$PPbaru = new PenerimaPengadaan;
									$PPbaru->id_pengadaan = $Pengadaan->id_pengadaan;							
									$PPbaru->perusahaan=$_POST['perusahaan'][$j+$i];	
									$PPbaru->alamat=$_POST['alamat'][$j+$i];									
									$PPbaru->npwp='-';		
									$PPbaru->nilai = 0;
									$PPbaru->biaya = 0;							
									$PPbaru->nomor_surat_penawaran = '-';
									$PPbaru->tanggal_penawaran = '-';														
									$PPbaru->undangan_prakualifikasi = '1';
									$PPbaru->save();
								}
								
							}
						
						}
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($SUPK->save(false)){
									$this->redirect(array('editsuratundanganprakualifikasi','id'=>$Dokumen0->id_pengadaan));
								}
							}
						}
					}
				}

				$this->render('suratundanganprakualifikasi',array(
					'Dokumen0'=>$Dokumen0,'SUPK'=>$SUPK,'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}			
		}
	
		public function actionSuratpengumumanpelelanganprakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '6' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status="7";
				
				$DokHPS=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "HPS"');
				$HPS=Hps::model()->findByPk($DokHPS->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Surat Pengumuman Pelelangan Prakualifikasi';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$SPPP= new SuratPengumumanPelelangan;
				$SPPP->id_dokumen=$Dokumen0->id_dokumen;
				
				if(isset($_POST['SuratPengumumanPelelangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SPPP->attributes=$_POST['SuratPengumumanPelelangan'];
					$valid=$Dokumen0->validate();
					$valid=$valid&&$SPPP->validate();
					if($valid){
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($SPPP->save(false)){
									$this->redirect(array('editsuratpengumumanpelelanganprakualifikasi','id'=>$Dokumen0->id_pengadaan));
								}
							}
						}
					}
				}
				$this->render('suratpengumumanpelelanganprakualifikasi',array(
					'SPPP'=>$SPPP,'Dokumen0'=>$Dokumen0,'HPS'=>$HPS,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditSuratpengumumanpelelanganprakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '6' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {					
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$DokHPS=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "HPS"');
				$HPS=Hps::model()->findByPk($DokHPS->id_dokumen);
				
				$Dokumen0=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Pengumuman Pelelangan Prakualifikasi"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				$SPPP=SuratPengumumanPelelangan::model()->findByPk($Dokumen0->id_dokumen);
				
				if(isset($_POST['SuratPengumumanPelelangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SPPP->attributes=$_POST['SuratPengumumanPelelangan'];
					$valid=$Dokumen0->validate();
					$valid=$valid&&$SPPP->validate();
					if($valid){
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($SPPP->save(false)){
									$this->redirect(array('editsuratpengumumanpelelanganprakualifikasi','id'=>$Dokumen0->id_pengadaan));
								}
							}
						}
					}
				}
				$this->render('suratpengumumanpelelanganprakualifikasi',array(
					'SPPP'=>$SPPP,'Dokumen0'=>$Dokumen0,'HPS'=>$HPS,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionPendaftaranpelelanganprakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '7' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status="8";

				$PP = array(new PenerimaPengadaan);	
					
				if(isset($_POST['perusahaan'])){
					$total = count($_POST['perusahaan']);
					
					for($i=0;$i<$total;$i++){
						if(isset($_POST['perusahaan'][$i])){
							$PP[$i] = new PenerimaPengadaan;									
							$PP[$i]->id_pengadaan = $Pengadaan->id_pengadaan;									
							$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
							$PP[$i]->alamat='-';									
							$PP[$i]->npwp='-';		
							$PP[$i]->nilai = 0;									
							$PP[$i]->biaya = 0;									
							$PP[$i]->nomor_surat_penawaran = '-';									
							$PP[$i]->tanggal_penawaran = '-';																	
							$PP[$i]->pendaftaran_pelelangan_pq = '1';		
							$PP[$i]->save();
						}
					}
						
					if($Pengadaan->save(false))
					{						
						$this->redirect(array('editpendaftaranpelelanganprakualifikasi','id'=>$id));					
					}
				}


				$this->render('pendaftaranpelelanganprakualifikasi',array(
					'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditPendaftaranpelelanganprakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '7' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {						
				$Pengadaan=Pengadaan::model()->findByPk($id);
								
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);
				
				$PP = PenerimaPengadaan::model()->findAll('pendaftaran_pelelangan_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					
				if($PP == null){
					$this->redirect(array('pendaftaranpelelanganprakualifikasi','id'=>$id));		
				}
				
				if(isset($_POST['perusahaan'])){
												
					for($i=0;$i<count($PP);$i++){
						if(isset($_POST['perusahaan'][$i])){																																																
							$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
							$PP[$i]->save();
						}
					}
					
					$total = count($_POST['perusahaan']);
					if(count($PP)<$total){
						$PPkurang = $total - count($PP);
						for($j=0;$j<$PPkurang;$j++){
							$PPbaru = new PenerimaPengadaan;
							$PPbaru->id_pengadaan = $Pengadaan->id_pengadaan;							
							$PPbaru->perusahaan=$_POST['perusahaan'][$j+$i];	
							$PPbaru->alamat='-';									
							$PPbaru->npwp='-';		
							$PPbaru->nilai = 0;
							$PPbaru->biaya = 0;							
							$PPbaru->nomor_surat_penawaran = '-';
							$PPbaru->tanggal_penawaran = '-';																						
							$PPbaru->pendaftaran_pelelangan_pq = '1';		
							$PPbaru->save();
						}
						
					}
					
					if($Pengadaan->save(false)){	
						$this->redirect(array('editpendaftaranpelelanganprakualifikasi','id'=>$id));					
					}			
					
				}
					
				$this->render('pendaftaranpelelanganprakualifikasi',array(
					'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionPengambilanDokumenPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '8' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status="9";
					
				$PP = PenerimaPengadaan::model()->findAll('pendaftaran_pelelangan_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['perusahaan'])){
												
					for($i=0;$i<count($PP);$i++){
						if(isset($_POST['perusahaan'][$i])){																																																
							$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
							$PP[$i]->pengambilan_lelang_pq = $_POST['pengambilan_lelang_pq'][$i];	
							$PP[$i]->save();
						}
					}											
					
					if($Pengadaan->save(false)){	
						$this->redirect(array('editpengambilandokumenprakualifikasi','id'=>$id));					
					}			
					
				}
					
					
				$this->render('pengambilandokumenprakualifikasi',array(
					'Pengadaan'=>$Pengadaan,'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditPengambilanDokumenPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '8' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {						
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$PP = PenerimaPengadaan::model()->findAll('pendaftaran_pelelangan_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['perusahaan'])){
												
					for($i=0;$i<count($PP);$i++){
						if(isset($_POST['perusahaan'][$i])){																																																
							$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
							$PP[$i]->pengambilan_lelang_pq = $_POST['pengambilan_lelang_pq'][$i];	
							$PP[$i]->save();
						}
					}	
					$this->redirect(array('editpengambilandokumenprakualifikasi','id'=>$id));					
				}
										
				$this->render('pengambilandokumenprakualifikasi',array(
					'Pengadaan'=>$Pengadaan,'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionPenyampaianDokumenPrakualifikasiBagian1()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			if (Yii::app()->user->getState('role') == 'anggota') {
				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status="10";
				
				$DokDp= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Dokumen Prakualifikasi"');
				$DPK= DokumenPrakualifikasi::model()->findByPk($DokDp->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Berita Acara Penerimaan Prakualifikasi';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$Dokumen1=new Dokumen;
				$Dokumen1->id_dokumen=$somevariable+2;
				$Dokumen1->nama_dokumen='Daftar Hadir Penerimaan Prakualifikasi';
				$Dokumen1->tempat='Jakarta';
				$Dokumen1->status_upload='Belum Selesai';
				$Dokumen1->id_pengadaan=$Pengadaan->id_pengadaan;
				$Dokumen1->tanggal=$DPK->tanggal_pemasukan2;
				
				$BAPPQ= new BeritaAcaraPenerimaanPq;
				$BAPPQ->id_dokumen=$Dokumen0->id_dokumen;
				
				$DH= new DaftarHadir;
				$DH->id_dokumen=$Dokumen1->id_dokumen;
				$DH->acara='Penerimaan Prakualifikasi';
				$DH->tempat_hadir=$DPK->tempat_pemasukan;
				$DH->jam=Tanggal::getJamMenit($DPK->waktu_pemasukan2);
				
				if(isset($_POST['BeritaAcaraPenerimaanPq']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$BAPPQ->attributes=$_POST['BeritaAcaraPenerimaanPq'];
					$valid=$BAPPQ->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){											
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)&&$Dokumen1->save(false)){
								if($BAPPQ->save(false)&&$DH->save(false)){
									$this->redirect(array('editpenyampaiandokumenprakualifikasibagian1','id'=>$id));
								}
							}
						}						
					}
				}
				
				$this->render('penyampaiandokumenprakualifikasibagian1',array(
					'Dokumen0'=>$Dokumen0,'Pengadaan'=>$Pengadaan,'BAPPQ'=>$BAPPQ,'DH'=>$DH,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditPenyampaianDokumenPrakualifikasiBagian1()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					
					$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Penerimaan Prakualifikasi"');
					$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
					$Dokumen1= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Penerimaan Prakualifikasi"');
					
					$BAPPQ= BeritaAcaraPenerimaanPq::model()->findByPk($Dokumen0->id_dokumen);
					$DH=DaftarHadir::model()->findByPk($Dokumen1->id_dokumen);
					
					if(isset($_POST['BeritaAcaraPenerimaanPq']))
					{
						$Dokumen0->attributes=$_POST['Dokumen'];
						$BAPPQ->attributes=$_POST['BeritaAcaraPenerimaanPq'];
						$valid=$BAPPQ->validate();
						$valid=$valid&&$Dokumen0->validate();
						if($valid){					
							if($Pengadaan->save(false))
							{	
								if($Dokumen0->save(false)&&$Dokumen1->save(false)){
									if($BAPPQ->save(false)&&$DH->save(false)){
										$this->redirect(array('editpenyampaiandokumenprakualifikasibagian1','id'=>$id));
									}
								}
							}						
						}
					}
						
					$this->render('penyampaiandokumenprakualifikasibagian1',array(
						'Pengadaan'=>$Pengadaan,'Dokumen0'=>$Dokumen0,'BAPPQ'=>$BAPPQ,'DH'=>$DH,
					));
				}			
			}
		}
		
		public function actionPenyampaianDokumenPrakualifikasiBagian2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			if (Yii::app()->user->getState('role') == 'anggota') {
				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status="11";
										
				if($Pengadaan->metode_pengadaan == "Pelelangan"){
					$PP = PenerimaPengadaan::model()->findAll('pengambilan_lelang_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				}
				else {
					$PP = PenerimaPengadaan::model()->findAll('undangan_prakualifikasi = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				}
							
				if(isset($_POST['perusahaan'])){	
					for($i=0;$i<count($PP);$i++){
						if(isset($_POST['perusahaan'][$i])){			
							$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
							$PP[$i]->penyampaian_lelang = $_POST['penyampaian_lelang'][$i];
							$PP[$i]->save();
						}
					}
					if($Pengadaan->save(false)){	
						$this->redirect(array('editpenyampaiandokumenprakualifikasibagian2','id'=>$id));					
					}	
				}
				
				$this->render('penyampaiandokumenprakualifikasibagian2',array('PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditPenyampaianDokumenPrakualifikasiBagian2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					
					if($Pengadaan->metode_pengadaan == "Pelelangan"){
						$PP = PenerimaPengadaan::model()->findAll('pengambilan_lelang_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					}
					else {
						$PP = PenerimaPengadaan::model()->findAll('undangan_prakualifikasi = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					}
					
					if(isset($_POST['perusahaan'])){	
					for($i=0;$i<count($PP);$i++){
							if(isset($_POST['perusahaan'][$i])){			
								$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
								$PP[$i]->penyampaian_lelang = $_POST['penyampaian_lelang'][$i];
								$PP[$i]->save();
							}
						}	
						$this->redirect(array('editpenyampaiandokumenprakualifikasibagian2','id'=>$id));						
					}
						
					$this->render('penyampaiandokumenprakualifikasibagian2',array('PP'=>$PP,
					));
				}			
			}
		}
		
		public function actionEvaluasiDokumenPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					$Pengadaan->status="12";
					
					$DokDp= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Dokumen Prakualifikasi"');
					$DPK= DokumenPrakualifikasi::model()->findByPk($DokDp->id_dokumen);
					
					$Dokumen0= new Dokumen;
					$criteria=new CDbcriteria;
					$criteria->select='max(id_dokumen) AS maxId';
					$row = $Dokumen0->model()->find($criteria);
					$somevariable = $row['maxId'];
					$Dokumen0->id_dokumen=$somevariable+1;
					$Dokumen0->id_pengadaan=$Pengadaan->id_pengadaan;
					$Dokumen0->nama_dokumen='Berita Acara Evaluasi Prakualifikasi';
					$Dokumen0->tempat='Jakarta';
					$Dokumen0->status_upload='Belum Selesai';
					$Dokumen0->tanggal=Tanggal::getTanggalStrip($DPK->tanggal_evaluasi);
					
					$Dokumen1=new Dokumen;
					$Dokumen1->id_dokumen=$somevariable+2;
					$Dokumen1->id_pengadaan=$Pengadaan->id_pengadaan;
					$Dokumen1->nama_dokumen='Lampiran Berita Acara Evaluasi Prakualifikasi';
					$Dokumen1->tempat='Jakarta';
					$Dokumen1->status_upload='Belum Selesai';
					
					$Dokumen2=new Dokumen;
					$Dokumen2->id_dokumen=$somevariable+3;
					$Dokumen2->nama_dokumen='Daftar Hadir Evaluasi Prakualifikasi';
					$Dokumen2->tempat='Jakarta';
					$Dokumen2->status_upload='Belum Selesai';
					$Dokumen2->id_pengadaan=$Pengadaan->id_pengadaan;
					
					$BAEPK= new BeritaAcaraEvaluasiPrakualifikasi;
					$BAEPK->id_dokumen=$Dokumen0->id_dokumen;
					$BAEPK->nomor='-';
					$BAEPK->waktu=Tanggal::getJamMenit($DPK->waktu_evaluasi);
					$BAEPK->tempat=$DPK->tempat_evaluasi;
					
					$DH= new DaftarHadir;
					$DH->id_dokumen=$Dokumen2->id_dokumen;
					$DH->acara='Evaluasi Prakualifikasi';
	
					if(isset($_POST['BeritaAcaraEvaluasiPrakualifikasi']))
					{
						$Dokumen0->attributes=$_POST['Dokumen'];
						$BAEPK->attributes=$_POST['BeritaAcaraEvaluasiPrakualifikasi'];
						$valid=$BAEPK->validate();
						$valid=$valid&&$Dokumen0->validate();
						if($valid){
							$Dokumen1->tanggal=$Dokumen0->tanggal;
							$Dokumen2->tanggal=$Dokumen0->tanggal;
							$DH->tempat_hadir=$BAEPK->tempat;
							$DH->jam=$BAEPK->waktu;
							if($Pengadaan->save(false))
							{	
								if($Dokumen0->save(false)&&$Dokumen1->save(false)&&$Dokumen2->save(false)){
									if($BAEPK->save(false)&&$DH->save(false)){
										$this->redirect(array('editevaluasidokumenprakualifikasi','id'=>$id));
									}
								}
							}						
						}
					}
					
					$this->render('evaluasidokumenprakualifikasi',array(
						'BAEPK'=>$BAEPK,'Dokumen0'=>$Dokumen0,'DH'=>$DH,
					));
				}
			}
		}
		
		public function actionEditEvaluasiDokumenPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					
					$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Prakualifikasi"');
					$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
					$Dokumen1= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Prakualifikasi"');
					$Dokumen2= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Evaluasi Prakualifikasi"');
					
					$BAEPK= BeritaAcaraEvaluasiPrakualifikasi::model()->findByPk($Dokumen0->id_dokumen);
					$DH=DaftarHadir::model()->findByPk($Dokumen2->id_dokumen);
		
					
					if(isset($_POST['BeritaAcaraEvaluasiPrakualifikasi']))
					{
						$Dokumen0->attributes=$_POST['Dokumen'];
						$BAEPK->attributes=$_POST['BeritaAcaraEvaluasiPrakualifikasi'];
						$valid=$BAEPK->validate();
						$valid=$valid&&$Dokumen0->validate();
						if($valid){
							$Dokumen1->tanggal=$Dokumen0->tanggal;
							$Dokumen2->tanggal=$Dokumen0->tanggal;
							$DH->tempat_hadir=$BAEPK->tempat;
							$DH->jam=$BAEPK->waktu;
							if($Dokumen0->save(false)&&$Dokumen1->save(false)&&$Dokumen2->save(false)){
								if($BAEPK->save(false)&&$DH->save(false)){
									$this->redirect(array('editevaluasidokumenprakualifikasi','id'=>$id));
								}
							}					
						}
					}
					
					$this->render('evaluasidokumenprakualifikasi',array(
						'BAEPK'=>$BAEPK,'Dokumen0'=>$Dokumen0,'Dokumen1'=>$Dokumen1,'DH'=>$DH,
					));
				}
			}
		}
		
		public function actionBeritaAcaraEvaluasiDokumenPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					$Pengadaan->status="13";
					
					$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Prakualifikasi"');
					$BAEPK= BeritaAcaraEvaluasiPrakualifikasi::model()->findByPk($Dokumen0->id_dokumen);
					
					if($Pengadaan->metode_pengadaan == 'Pelelangan'){
						$PP = PenerimaPengadaan::model()->findAll('penyampaian_lelang = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					}else{
						$PP = PenerimaPengadaan::model()->findAll('undangan_prakualifikasi = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					}
					
					if(isset($_POST['BeritaAcaraEvaluasiPrakualifikasi']))
					{
						$BAEPK->attributes=$_POST['BeritaAcaraEvaluasiPrakualifikasi'];
						$valid=$BAEPK->validate();
						if($valid){						
							if(isset($_POST['perusahaan'])){															
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){																																																
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																																		
										$PP[$i]->evaluasi_pq = $_POST['evaluasi_pq'][$i];	
										$PP[$i]->save();
									}
								}								
							}
							if($Pengadaan->save(false))
							{	
								if($BAEPK->save(false)){
									$this->redirect(array('editberitaacaraevaluasidokumenprakualifikasi','id'=>$id));
								}
							}						
						}
					}
					
					$this->render('beritaacaraevaluasidokumenprakualifikasi',array(
						'BAEPK'=>$BAEPK,'PP'=>$PP,
					));
				}
			}
		}
		
		public function actionEditBeritaAcaraEvaluasiDokumenPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					
					$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Prakualifikasi"');
					$BAEPK= BeritaAcaraEvaluasiPrakualifikasi::model()->findByPk($Dokumen0->id_dokumen);
					
					if($Pengadaan->metode_pengadaan == 'Pelelangan'){
						$PP = PenerimaPengadaan::model()->findAll('penyampaian_lelang = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					}else{
						$PP = PenerimaPengadaan::model()->findAll('undangan_prakualifikasi = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					}
					
					if(isset($_POST['BeritaAcaraEvaluasiPrakualifikasi']))
					{
						$BAEPK->attributes=$_POST['BeritaAcaraEvaluasiPrakualifikasi'];
						$valid=$BAEPK->validate();
						if($valid){						
							if(isset($_POST['perusahaan'])){															
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){																																																
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																																		
										$PP[$i]->evaluasi_pq = $_POST['evaluasi_pq'][$i];	
										$PP[$i]->save();
									}
								}								
							}
							if($BAEPK->save(false)){
								$this->redirect(array('editberitaacaraevaluasidokumenprakualifikasi','id'=>$id));
							}					
						}
					}
					
					$this->render('beritaacaraevaluasidokumenprakualifikasi',array(
						'BAEPK'=>$BAEPK,'PP'=>$PP,
					));
				}
			}
		}
	
		public function actionUsulanHasilPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					$Pengadaan->status='14';
					
					$Dokumen0= new Dokumen;
					$criteria=new CDbcriteria;
					$criteria->select='max(id_dokumen) AS maxId';
					$row = $Dokumen0->model()->find($criteria);
					$somevariable = $row['maxId'];
					$Dokumen0->id_dokumen=$somevariable+1;
					$Dokumen0->id_pengadaan=$Pengadaan->id_pengadaan;
					$Dokumen0->nama_dokumen='Nota Dinas Usulan Hasil Prakualifikasi';
					$Dokumen0->tempat='Jakarta';
					$Dokumen0->status_upload='Belum Selesai';
					date_default_timezone_set("Asia/Jakarta");
					$Dokumen0->tanggal=date('d-m-Y');
					
					$NDUPN= new NotaDinasUsulanPenetapan;
					$NDUPN->id_dokumen=$Dokumen0->id_dokumen;

					$PP = PenerimaPengadaan::model()->findAll('evaluasi_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
						
					//Uncomment the following line if AJAX validation is needed
					//$this->performAjaxValidation($model);

					if(isset($_POST['NotaDinasUsulanPenetapan']))
					{
						$Dokumen0->attributes=$_POST['Dokumen'];
						$NDUPN->attributes=$_POST['NotaDinasUsulanPenetapan'];
						$valid=$NDUPN->validate();
						$valid=$valid&&$Dokumen0->validate();
						if($valid){
							if(isset($_POST['perusahaan'])){
														
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){																																																
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																			
										$PP[$i]->usulan_hasil_pq = $_POST['usulan_hasil_pq'][$i];	
										$PP[$i]->save();
									}
								}							
							}
							
							if($Pengadaan->save(false))
							{	
								if($Dokumen0->save(false)){
									if($NDUPN->save(false)){
										$this->redirect(array('editusulanhasilprakualifikasi','id'=>$id));
									}
								}
							}						
						}
					}

					$this->render('usulanhasilprakualifikasi',array(
						'NDUPN'=>$NDUPN,'Dokumen0'=>$Dokumen0,'PP'=>$PP,
					));
				}
			}
		}
		
		public function actionEditUsulanHasilPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					
					$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Usulan Hasil Prakualifikasi"');
					$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
					
					$NDUPN= NotaDinasUsulanPenetapan::model()->findByPk($Dokumen0->id_dokumen);

					$PP = PenerimaPengadaan::model()->findAll('evaluasi_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					
					if(isset($_POST['NotaDinasUsulanPenetapan']))
					{
						$Dokumen0->attributes=$_POST['Dokumen'];
						$NDUPN->attributes=$_POST['NotaDinasUsulanPenetapan'];
						$valid=$NDUPN->validate();
						$valid=$valid&&$Dokumen0->validate();
						if($valid){
							if(isset($_POST['perusahaan'])){
														
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){																																																
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																			
										$PP[$i]->usulan_hasil_pq = $_POST['usulan_hasil_pq'][$i];	
										$PP[$i]->save();
									}
								}							
							}
								
							if($Pengadaan->save(false))
							{	
								if($Dokumen0->save(false)){
									if($NDUPN->save(false)){
										$this->redirect(array('editusulanhasilprakualifikasi','id'=>$id));
									}
								}
							}						
						}
					}

					$this->render('usulanhasilprakualifikasi',array(
						'NDUPN'=>$NDUPN,'Dokumen0'=>$Dokumen0,'PP'=>$PP,
					));
				}
			}
		}
		public function actionPenetapanHasilPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					$Pengadaan->status='15';
					
					$Dokumen0= new Dokumen;
					$criteria=new CDbcriteria;
					$criteria->select='max(id_dokumen) AS maxId';
					$row = $Dokumen0->model()->find($criteria);
					$somevariable = $row['maxId'];
					$Dokumen0->id_dokumen=$somevariable+1;
					$Dokumen0->id_pengadaan=$Pengadaan->id_pengadaan;
					$Dokumen0->nama_dokumen='Nota Dinas Penetapan Hasil Prakualifikasi';
					$Dokumen0->tempat='Jakarta';
					$Dokumen0->status_upload='Belum Selesai';
					date_default_timezone_set("Asia/Jakarta");
					$Dokumen0->tanggal=date('d-m-Y');
					
					$NDPK= new NotaDinasPenetapanKualifikasi;
					$NDPK->id_dokumen=$Dokumen0->id_dokumen;
					
					$PP = PenerimaPengadaan::model()->findAll('evaluasi_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);

					if(isset($_POST['NotaDinasPenetapanKualifikasi']))
					{
						$Dokumen0->attributes=$_POST['Dokumen'];
						$NDPK->attributes=$_POST['NotaDinasPenetapanKualifikasi'];
						$valid=$NDPK->validate();
						$valid=$valid&&$Dokumen0->validate();
						if($valid){
							if($Pengadaan->save(false))
							{	
								if(isset($_POST['perusahaan'])){
															
									for($i=0;$i<count($PP);$i++){
										if(isset($_POST['perusahaan'][$i])){																																																
											$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																																
											$PP[$i]->penetapan_pq =  $_POST['penetapan_pq'][$i];	
											$PP[$i]->save();
										}
									}								
								}
								if($Dokumen0->save(false)){
									if($NDPK->save(false)){
										$this->redirect(array('editpenetapanhasilprakualifikasi','id'=>$id));
									}
								}
							}													
						}
					}
					
					$this->render('penetapanhasilprakualifikasi',array(
						'NDPK'=>$NDPK,'Dokumen0'=>$Dokumen0,'PP'=>$PP,
					));
				}
			}
		}
		
		public function actionEditPenetapanHasilPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					
					$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Penetapan Hasil Prakualifikasi"');
					$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
					
					$NDPK= NotaDinasPenetapanKualifikasi::model()->findByPk($Dokumen0->id_dokumen);
					
					$PP = PenerimaPengadaan::model()->findAll('evaluasi_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);

					if(isset($_POST['NotaDinasPenetapanKualifikasi']))
					{
						$Dokumen0->attributes=$_POST['Dokumen'];
						$NDPK->attributes=$_POST['NotaDinasPenetapanKualifikasi'];
						$valid=$NDPK->validate();
						$valid=$valid&&$Dokumen0->validate();
						if($valid){
						
							if(isset($_POST['perusahaan'])){
													
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){																																																
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																
										$PP[$i]->penetapan_pq =  $_POST['penetapan_pq'][$i];							
										$PP[$i]->save();
									}
								}
								
							}
							
							if($Pengadaan->save(false))
							{	
								if($Dokumen0->save(false)){
									if($NDPK->save(false)){
										$this->redirect(array('editpenetapanhasilprakualifikasi','id'=>$id));
									}
								}
							}
						}
					}


					$this->render('penetapanhasilprakualifikasi',array(
						'NDPK'=>$NDPK,'Dokumen0'=>$Dokumen0,'PP'=>$PP,
					));
				}
			}
		}
	
		public function actionPengumumanHasilPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					if($Pengadaan->metode_pengadaan=="Pelelangan") {
						$Pengadaan->status="19";
					} else if ($Pengadaan->metode_pengadaan=="Penunjukan Langsung"||$Pengadaan->metode_pengadaan=="Pemilihan Langsung") {
						$Pengadaan->status="20";
					}
					//Uncomment the following line if AJAX validation is needed
					//$this->performAjaxValidation($model);
					
					$newDokumen = new Dokumen;
					$criteria=new CDbcriteria;
					$criteria->select='max(id_dokumen) AS maxId';
					$row = $newDokumen->model()->find($criteria);
					$somevariable = $row['maxId'];					
					$newDokumen->id_dokumen=$somevariable+1;
					$newDokumen->nama_dokumen='Surat Pengumuman Hasil Kualifikasi';
					date_default_timezone_set('Asia/Jakarta');
					$newDokumen->tanggal=date('Y-m-d');
					$newDokumen->tempat='Jakarta';
					$newDokumen->id_pengadaan=$id;
					$newDokumen->status_upload='Belum Selesai';
					
					$Pengumuman = new PengumumanHasilPrakualifikasi;
					$Pengumuman->id_dokumen=$newDokumen->id_dokumen;
					
					if(isset($_POST['PengumumanHasilPrakualifikasi'])){
					$Pengumuman->attributes=$_POST['PengumumanHasilPrakualifikasi'];						
					$newDokumen->attributes=$_POST['Dokumen'];
						$valid=$Pengumuman->validate();
						if($valid){
							if($Pengadaan->save(false)){
								if($newDokumen->save(false)){
									if($Pengumuman->save(false)){
										$this->redirect(array('editpengumumanhasilprakualifikasi','id'=>$id));
									}
								}
							}
						}
					}
					
					$this->render('pengumumanhasilprakualifikasi',array(
						'Pengadaan'=>$Pengadaan,'Pengumuman'=>$Pengumuman, 'newDokumen'=>$newDokumen,
					));
				}
			}
		}
		
		public function actionEditPengumumanHasilPrakualifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else {
				if (Yii::app()->user->getState('role') == 'anggota') {
					
					$Pengadaan=Pengadaan::model()->findByPk($id);
					$tempDokumen=Dokumen::model()->find('id_pengadaan='.$id.' and nama_dokumen="Surat Pengumuman Hasil Kualifikasi"');
					$Pengumuman = PengumumanHasilPrakualifikasi::model()->find('id_dokumen='.$tempDokumen->id_dokumen);
					
					if(isset($_POST['PengumumanHasilPrakualifikasi'])){
					$Pengumuman->attributes=$_POST['PengumumanHasilPrakualifikasi'];
					$tempDokumen->attributes=$_POST['Dokumen'];
					$valid=$Pengumuman->validate();
					if($valid){
						if($Pengadaan->save(false)){
							if($tempDokumen->save(false)){
								if($Pengumuman->save(false)){
									$this->redirect(array('editpengumumanhasilprakualifikasi','id'=>$id));
								}
							}
						}
					}
				}
					
					$this->render('pengumumanhasilprakualifikasi',array(
						'Pengadaan'=>$Pengadaan,'Pengumuman'=>$Pengumuman,'newDokumen'=>$tempDokumen,
					));
				}
			}
		}
	
		public function actionSuratpengumumanpelelangan()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '17' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status="18";
				
				$DokHPS=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "HPS"');
				$HPS=Hps::model()->findByPk($DokHPS->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Surat Pengumuman Pelelangan';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$SPP= new SuratPengumumanPelelangan;
				$SPP->id_dokumen=$Dokumen0->id_dokumen;	
				
				if(isset($_POST['SuratPengumumanPelelangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SPP->attributes=$_POST['SuratPengumumanPelelangan'];
					$valid=$Dokumen0->validate();
					$valid=$valid&&$SPP->validate();
					if($valid){
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($SPP->save(false)){
									$this->redirect(array('editsuratpengumumanpelelangan','id'=>$Dokumen0->id_pengadaan));
								}
							}
						}
					}
				}

				$this->render('suratpengumumanpelelangan',array(
					'SPP'=>$SPP,'Dokumen0'=>$Dokumen0,'HPS'=>$HPS,
				));	
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
			
		public function actionEditSuratpengumumanpelelangan()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '17' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {
				$Pengadaan=Pengadaan::model()->findByPk($id);				
				$DokHPS=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "HPS"');
				$HPS=Hps::model()->findByPk($DokHPS->id_dokumen);
				
				$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Pengumuman Pelelangan"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				
				$SPP= SuratPengumumanPelelangan::model()->findByPk($Dokumen0->id_dokumen);
				
				if(isset($_POST['SuratPengumumanPelelangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SPP->attributes=$_POST['SuratPengumumanPelelangan'];
					$valid=$Dokumen0->validate();
					$valid=$valid&&$SPP->validate();
					if($valid){
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($SPP->save(false)){
									$this->redirect(array('editsuratpengumumanpelelangan','id'=>$id));
								}
							}
						}
					}
				}

				$this->render('suratpengumumanpelelangan',array(
					'SPP'=>$SPP,'Dokumen0'=>$Dokumen0,'HPS'=>$HPS,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionPendaftaranPelelangan()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '18' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status="19";

				$PP = array(new PenerimaPengadaan);	
					
				if(isset($_POST['perusahaan'])){
					$total = count($_POST['perusahaan']);
					
					for($i=0;$i<$total;$i++){
						if(isset($_POST['perusahaan'][$i])){
							$PP[$i] = new PenerimaPengadaan;									
							$PP[$i]->id_pengadaan = $Pengadaan->id_pengadaan;									
							$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
							$PP[$i]->alamat='-';									
							$PP[$i]->npwp='-';		
							$PP[$i]->nilai = 0;									
							$PP[$i]->biaya = 0;									
							$PP[$i]->nomor_surat_penawaran = '-';									
							$PP[$i]->tanggal_penawaran = '-';																	
							$PP[$i]->pendaftaran_pc = '1';	
							$PP[$i]->save();
						}
					}
						
					if($Pengadaan->save(false))
					{						
						$this->redirect(array('editpendaftaranpelelangan','id'=>$id));					
					}
				}


				$this->render('pendaftaranpelelangan',array(
					'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditPendaftaranPelelangan()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '18' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {
				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$PP = PenerimaPengadaan::model()->findAll('pendaftaran_pc = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					
				if($PP == null){
					$this->redirect(array('pendaftaranpelelangan','id'=>$id));		
				}
				
				if(isset($_POST['perusahaan'])){
												
					for($i=0;$i<count($PP);$i++){
						if(isset($_POST['perusahaan'][$i])){																																																
							$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
							$PP[$i]->save();
						}
					}
					
					$total = count($_POST['perusahaan']);
					if(count($PP)<$total){
						$PPkurang = $total - count($PP);
						for($j=0;$j<$PPkurang;$j++){
							$PPbaru = new PenerimaPengadaan;
							$PPbaru->id_pengadaan = $Pengadaan->id_pengadaan;							
							$PPbaru->perusahaan=$_POST['perusahaan'][$j+$i];	
							$PPbaru->alamat='-';									
							$PPbaru->npwp='-';		
							$PPbaru->nilai = 0;
							$PPbaru->biaya = 0;							
							$PPbaru->nomor_surat_penawaran = '-';
							$PPbaru->tanggal_penawaran = '-';														
							$PPbaru->pendaftaran_pc = '1';
							$PPbaru->save();
						}
						
					}					
					
					if($Pengadaan->save(false)){	
						$this->redirect(array('editpendaftaranpelelangan','id'=>$id));					
					}								
				}
					
				$this->render('pendaftaranpelelangan',array(
					'Pengadaan'=>$Pengadaan,'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionPermintaanpenawaranharga()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status == '16' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status="20";
				
				$DokHPS=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "HPS"');
				$HPS=Hps::model()->findByPk($DokHPS->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Surat Undangan Permintaan Penawaran Harga';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$SUPPP= new SuratUndanganPermintaanPenawaranHarga;
				$SUPPP->id_dokumen=$Dokumen0->id_dokumen;							
				
				$PP = array(new PenerimaPengadaan);										
				
				if(isset($_POST['SuratUndanganPermintaanPenawaranHarga']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					// $PP->attributes=$_POST['PenerimaPengadaan'][0];
					
					$SUPPP->attributes=$_POST['SuratUndanganPermintaanPenawaranHarga'];
					$valid=$Dokumen0->validate();
					$valid=$valid&&$SUPPP->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){
							$total = count($_POST['perusahaan']);
							
							for($i=0;$i<$total;$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i] = new PenerimaPengadaan;									
									$PP[$i]->id_pengadaan = $Pengadaan->id_pengadaan;									
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->alamat=$_POST['alamat'][$i];								
									$PP[$i]->npwp='-';		
									$PP[$i]->nilai = 0;									
									$PP[$i]->biaya = 0;									
									$PP[$i]->nomor_surat_penawaran = '-';									
									$PP[$i]->tanggal_penawaran = '-';									
									$PP[$i]->undangan_supph ='1';		
									$PP[$i]->save();
								}
							}
							
						}		

						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($SUPPP->save(false)){
									// if($PP->save(false)){
										$this->redirect(array('editpermintaanpenawaranharga','id'=>$id));
									// }
								}
							}
						}
					}
				}

				$this->render('permintaanpenawaranharga',array(
					'SUPPP'=>$SUPPP,'Dokumen0'=>$Dokumen0,'PP'=>$PP,'HPS'=>$HPS,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditpermintaanpenawaranharga()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '19' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {
				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$DokHPS=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "HPS"');
				$HPS=Hps::model()->findByPk($DokHPS->id_dokumen);
				
				$Dokumen0= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Permintaan Penawaran Harga"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				
				$SUPPP= SuratUndanganPermintaanPenawaranHarga::model()->findByPk($Dokumen0->id_dokumen);
				
				$PP = PenerimaPengadaan::model()->findAll('undangan_supph = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);					
				
				if(isset($_POST['SuratUndanganPermintaanPenawaranHarga']))
				{
					
					$Dokumen0->attributes=$_POST['Dokumen'];
					// $PP->perusahaan=$_POST['perusahaan'][0];
					$SUPPP->attributes=$_POST['SuratUndanganPermintaanPenawaranHarga'];
					$valid=$Dokumen0->validate();
					$valid=$valid&&$SUPPP->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){

							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){																																																
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->alamat=$_POST['alamat'][$i];										
									$PP[$i]->save();
								}
							}
							
							$total = count($_POST['perusahaan']);
							if(count($PP)<$total){
								$PPkurang = $total - count($PP);
								for($j=0;$j<$PPkurang;$j++){
									$PPbaru = new PenerimaPengadaan;
									$PPbaru->id_pengadaan = $Pengadaan->id_pengadaan;							
									$PPbaru->perusahaan=$_POST['perusahaan'][$j+$i];	
									$PPbaru->alamat=$_POST['alamat'][$j+$i];									
									$PPbaru->npwp='-';		
									$PPbaru->nilai = 0;
									$PPbaru->biaya = 0;							
									$PPbaru->nomor_surat_penawaran = '-';
									$PPbaru->tanggal_penawaran = '-';														
									$PPbaru->undangan_supph = '1';
									$PPbaru->save();
								}								
							}						
						}
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($SUPPP->save(false)){
									// if($PP->save(false)){
										$this->redirect(array('editpermintaanpenawaranharga','id'=>$id));
									// }
								}
							}
						}
					}
				}
	
				$this->render('permintaanpenawaranharga',array(
					'SUPPP'=>$SUPPP,'Dokumen0'=>$Dokumen0,'PP'=>$PP,'HPS'=>$HPS,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionPengambilanDokumen()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '19' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status="20";
				
				if($Pengadaan->jenis_kualifikasi=='Pasca Kualifikasi'){
					$PP = PenerimaPengadaan::model()->findAll('pendaftaran_pc = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				}else{
					$PP = PenerimaPengadaan::model()->findAll('penetapan_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				}				
				
				if(isset($_POST['perusahaan'])){
												
					for($i=0;$i<count($PP);$i++){
						if(isset($_POST['perusahaan'][$i])){																																																
							$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
							$PP[$i]->pengambilan_dokumen = $_POST['pengambilan_dokumen'][$i];								
							$PP[$i]->save();
						}
					}
					
					if($Pengadaan->save(false)){	
						$this->redirect(array('editpengambilandokumen','id'=>$id));					
					}			
					
				}
					
					
				$this->render('pengambilandokumen',array(
					'Pengadaan'=>$Pengadaan,'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditPengambilanDokumen()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '19' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);				
				if($Pengadaan->jenis_kualifikasi=='Pasca Kualifikasi'){
					$PP = PenerimaPengadaan::model()->findAll('pendaftaran_pc = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				}else{
					$PP = PenerimaPengadaan::model()->findAll('penetapan_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				}				
				if(isset($_POST['perusahaan'])){
												
					for($i=0;$i<count($PP);$i++){
						if(isset($_POST['perusahaan'][$i])){																																																
							$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
							$PP[$i]->pengambilan_dokumen = $_POST['pengambilan_dokumen'][$i];									
							$PP[$i]->save();
						}
					}
					
					if($Pengadaan->save(false)){	
						$this->redirect(array('editpengambilandokumen','id'=>$id));					
					}			
					
				}
					
					
				$this->render('pengambilandokumen',array(
					'Pengadaan'=>$Pengadaan,'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionUndanganAanwijzing()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '19' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$DokRKS=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "RKS"');
				$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Surat Undangan Aanwijzing';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$SUP= new NotaDinasUndangan;
				$SUP->id_dokumen=$Dokumen0->id_dokumen;
				$SUP->tanggal_undangan=Tanggal::getTanggalStrip($RKS->tanggal_penjelasan);
				$SUP->waktu=Tanggal::getJamMenit($RKS->waktu_penjelasan);
				$SUP->tempat=$RKS->tempat_penjelasan;
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUP->attributes=$_POST['NotaDinasUndangan'];
					$SUP->tanggal_undangan=date('Y-m-d',strtotime($SUP->tanggal_undangan));
					$valid=$SUP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SUP->save(false)){
								$this->redirect(array('editundanganaanwijzing','id'=>$id));
							}
						}
					}
				}					
				if($Pengadaan->jenis_kualifikasi=="Pasca Kualifikasi"){
					if($Pengadaan->metode_pengadaan=="Pelelangan"){
						$DokPengumuman=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Pengumuman Pelelangan"');
						$SUPDP=SuratPengumumanPelelangan::model()->findByPk($DokPengumuman->id_dokumen);
						$this->render('undanganaanwijzing',array(
							'SUP'=>$SUP,'Dokumen0'=>$Dokumen0,'SUPDP'=>$SUPDP,
						));
					} else if ($Pengadaan->metode_pengadaan=="Penunjukan Langsung"||$Pengadaan->metode_pengadaan=="Pemilihan Langsung"){
						$DokPermintaan=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Undangan Permintaan Penawaran Harga"');
						$SUPPPH=SuratUndanganPermintaanPenawaranHarga::model()->findByPk($DokPermintaan->id_dokumen);
						$this->render('undanganaanwijzing',array(
							'SUP'=>$SUP,'Dokumen0'=>$Dokumen0,'SUPPPH'=>$SUPPPH,
						));
					}
				} else {
					$DokSPHK=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Pengumuman Hasil Kualifikasi"');
					$SPHK=PengumumanHasilPrakualifikasi::model()->findByPk($DokSPHK->id_dokumen);
					$this->render('undanganaanwijzing',array(
						'SUP'=>$SUP,'Dokumen0'=>$Dokumen0,'SPHK'=>$SPHK,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}			
		}
		
		public function actionEditUndanganAanwijzing()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '19' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Aanwijzing"');				
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				
				$SUP=NotaDinasUndangan::model()->findByPk($Dokumen0->id_dokumen);
				$SUP->tanggal_undangan=Tanggal::getTanggalStrip($SUP->tanggal_undangan);	
				$SUP->waktu=Tanggal::getJamMenit($SUP->waktu);
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUP->attributes=$_POST['NotaDinasUndangan'];
					$SUP->tanggal_undangan=date('Y-m-d',strtotime($SUP->tanggal_undangan));
					$valid=$SUP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){				
						if($Dokumen0->save(false)){
							if($SUP->save(false)){
								$this->redirect(array('editundanganaanwijzing','id'=>$id));
							}
						}						
					}
				}
				if($Pengadaan->jenis_kualifikasi=="Pasca Kualifikasi"){
					if($Pengadaan->metode_pengadaan=="Pelelangan"){
						$DokPengumuman=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Pengumuman Pelelangan"');
						$SUPDP=SuratPengumumanPelelangan::model()->findByPk($DokPengumuman->id_dokumen);
						$this->render('undanganaanwijzing',array(
							'SUP'=>$SUP,'Dokumen0'=>$Dokumen0,'SUPDP'=>$SUPDP,
						));
					} else if ($Pengadaan->metode_pengadaan=="Penunjukan Langsung"||$Pengadaan->metode_pengadaan=="Pemilihan Langsung"){
						$DokPermintaan=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Undangan Permintaan Penawaran Harga"');
						$SUPPPH=SuratUndanganPermintaanPenawaranHarga::model()->findByPk($DokPermintaan->id_dokumen);
						$this->render('undanganaanwijzing',array(
							'SUP'=>$SUP,'Dokumen0'=>$Dokumen0,'SUPPPH'=>$SUPPPH,
						));
					}
				} else {
					$DokSPHK=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Pengumuman Hasil Kualifikasi"');
					$SPHK=PengumumanHasilPrakualifikasi::model()->findByPk($DokSPHK->id_dokumen);
					$this->render('undanganaanwijzing',array(
						'SUP'=>$SUP,'Dokumen0'=>$Dokumen0,'SPHK'=>$SPHK,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}

		public function actionAanwijzing()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '20' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='21';
				
				$Dokumen1= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen1->model()->find($criteria);
				$somevariable = $row['maxId'];				
								
				$Dokumen1->id_dokumen=$somevariable+1;
				$Dokumen1->nama_dokumen='Berita Acara Aanwijzing';
				$Dokumen1->tempat='Jakarta';
				$Dokumen1->status_upload='Belum Selesai';
				$Dokumen1->id_pengadaan=$id;
				
				$Dokumen2=new Dokumen;
				$Dokumen2->id_dokumen=$somevariable+2;
				$Dokumen2->nama_dokumen='Lampiran Berita Acara Aanwijzing';
				$Dokumen2->tempat='Jakarta';
				$Dokumen2->status_upload='Belum Selesai';
				$Dokumen2->id_pengadaan=$id;
				
				$Dokumen3=new Dokumen;
				$Dokumen3->id_dokumen=$somevariable+3;
				$Dokumen3->nama_dokumen='Daftar Hadir Aanwijzing';
				$Dokumen3->tempat='Jakarta';
				$Dokumen3->status_upload='Belum Selesai';
				$Dokumen3->id_pengadaan=$id;
							
				$BAP= new BeritaAcaraPenjelasan;
				$BAP->id_dokumen=$Dokumen1->id_dokumen;
				$BAP->nomor='-';
				
				$DH= new DaftarHadir;
				$DH->id_dokumen=$Dokumen3->id_dokumen;
				$DH->acara="Aanwijzing";
				
				$DokSUP = Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Undangan Aanwijzing"');
				if($DokSUP==null) {
					$DokRKS=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
					$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($RKS->tanggal_penjelasan);
					$BAP->waktu=Tanggal::getJamMenit($RKS->waktu_penjelasan);
					$BAP->tempat=$RKS->tempat_penjelasan;
				} else {
					$SUP=NotaDinasUndangan::model()->findByPk($DokSUP->id_dokumen);
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($SUP->tanggal_undangan);
					$BAP->waktu=Tanggal::getJamMenit($SUP->waktu);
					$BAP->tempat=$SUP->tempat;
				}
				
				if($Pengadaan->metode_pengadaan == 'Pelelangan'){
					$PP = PenerimaPengadaan::model()->findAll('pengambilan_dokumen = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				}
				else{
					if($Pengadaan->jenis_kualifikasi == 'Pasca Kualifikasi'){
						$PP = PenerimaPengadaan::model()->findAll('undangan_supph = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					}else{
						$PP = PenerimaPengadaan::model()->findAll('penetapan_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					}					
				}
				
				if(isset($_POST['BeritaAcaraPenjelasan']))
				{
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BAP->attributes=$_POST['BeritaAcaraPenjelasan'];
					$valid=$Dokumen1->validate()&&$BAP->validate();
					if($valid){
						$Dokumen2->tanggal=$Dokumen1->tanggal;
						$Dokumen3->tanggal=$Dokumen1->tanggal;
						$DH->jam=$BAP->waktu;
						$DH->tempat_hadir=$BAP->tempat;
						if(isset($_POST['perusahaan'])){
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->ba_aanwijzing = $_POST['ba_aanwijzing'][$i];
									$PP[$i]->save();
								}
							}
							
						}		
						
						if($Pengadaan->save(false)){
							if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
								if($BAP->save(false)&&$DH->save(false)){
									$this->redirect(array('editaanwijzing','id'=>$id));
								}
							}
						}
					}
				}
				
				$this->render('aanwijzing',array(
					'BAP'=>$BAP,'PP'=>$PP,'Dokumen1'=>$Dokumen1,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditAanwijzing()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '20' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$Dokumen1=Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen= "Berita Acara Aanwijzing"');
				$Dokumen2=Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen= "Lampiran Berita Acara Aanwijzing"');
				$Dokumen3=Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen= "Daftar Hadir Aanwijzing"');
				$Dokumen1->tanggal=Tanggal::getTanggalStrip($Dokumen1->tanggal);
				$BAP=BeritaAcaraPenjelasan::model()->findByPk($Dokumen1->id_dokumen);
				$BAP->waktu=Tanggal::getJamMenit($BAP->waktu);
				$DH=DaftarHadir::model()->findByPk($Dokumen3->id_dokumen);
				

				if($Pengadaan->metode_pengadaan == 'Pelelangan'){
					$PP = PenerimaPengadaan::model()->findAll('pengambilan_dokumen = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				}
				else{
					if($Pengadaan->jenis_kualifikasi == 'Pasca Kualifikasi'){
						$PP = PenerimaPengadaan::model()->findAll('undangan_supph = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					}else{
						$PP = PenerimaPengadaan::model()->findAll('penetapan_pq = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
					}					
				}
				
				if(isset($_POST['BeritaAcaraPenjelasan']))
				{
					// $Dokumen0->attributes=$_POST['Dokumen'];
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BAP->attributes=$_POST['BeritaAcaraPenjelasan'];
					$valid=$BAP->validate();					
					if($valid){

						if(isset($_POST['perusahaan'])){							
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){									
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->ba_aanwijzing = $_POST['ba_aanwijzing'][$i];
									$PP[$i]->save();
								}
							}
							
						}
						if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
							if($BAP->save(false)&&$DH->save(false)){
								$this->redirect(array('editaanwijzing','id'=>$id));
							}
						}
						
					}
				}
				 $this->render('aanwijzing',array(
					'BAP'=>$BAP,'PP'=>$PP,'DH'=>$DH,'Dokumen2'=>$Dokumen2,'Dokumen1'=>$Dokumen1,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionBeritaAcaraAanwijzing()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '21' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='22';
				
				$DokBAP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen= "Berita Acara Aanwijzing"');
				$BAP= BeritaAcaraPenjelasan::model()->findByPk($DokBAP->id_dokumen);
	
				if(isset($_POST['BeritaAcaraPenjelasan']))
				{
					$BAP->attributes=$_POST['BeritaAcaraPenjelasan'];
					$valid=$BAP->validate();
					if($valid){						
						if($Pengadaan->save(false)){
							if($BAP->save(false)){
								$this->redirect(array('editberitaacaraaanwijzing','id'=>$id));
							}
						}
					}
				}
				
				if($Pengadaan->jenis_kualifikasi=="Pasca Kualifikasi") {
					$DokSUP=Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Surat Undangan Aanwijzing"');
					if($DokSUP== null ){
						if($Pengadaan->metode_pengadaan=="Pelelangan"){
							$DokPengumuman=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Pengumuman Pelelangan"');
							$SUPDP=SuratPengumumanPelelangan::model()->findByPk($DokPengumuman->id_dokumen);
							$this->render('beritaacaraaanwijzing',array(
								'BAP'=>$BAP,'SUPDP'=>$SUPDP,
							));
						} else if ($Pengadaan->metode_pengadaan=="Penunjukan Langsung"||$Pengadaan->metode_pengadaan=="Pemilihan Langsung"){
							$DokPermintaan=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Undangan Permintaan Penawaran Harga"');
							$SUPPPH=SuratUndanganPermintaanPenawaranHarga::model()->findByPk($DokPermintaan->id_dokumen);
							$this->render('beritaacaraaanwijzing',array(
								'BAP'=>$BAP,'SUPPPH'=>$SUPPPH,
							));
						}
					} else {
						$SUP=NotaDinasUndangan::model()->findByPk($DokSUP->id_dokumen);
						$this->render('beritaacaraaanwijzing',array(
							'BAP'=>$BAP,'SUP'=>$SUP,
						));
					}
				} else {
					$DokSPHK=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Pengumuman Hasil Kualifikasi"');
					$SPHK=PengumumanHasilPrakualifikasi::model()->findByPk($DokSPHK->id_dokumen);
					$this->render('beritaacaraaanwijzing',array(
						'BAP'=>$BAP,'SPHK'=>$SPHK,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditBeritaAcaraAanwijzing()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '21' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$DokBAP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen= "Berita Acara Aanwijzing"');
				$BAP= BeritaAcaraPenjelasan::model()->findByPk($DokBAP->id_dokumen);
				
				if(isset($_POST['BeritaAcaraPenjelasan']))
				{
					$BAP->attributes=$_POST['BeritaAcaraPenjelasan'];
					$valid=$BAP->validate();
					if($valid){
						if($BAP->save(false)){
							$this->redirect(array('editberitaacaraaanwijzing','id'=>$id));
						}
					}
				}
				if($Pengadaan->jenis_kualifikasi=="Pasca Kualifikasi") {
					$DokSUP=Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Surat Undangan Aanwijzing"');
					if($DokSUP== null ){
						if($Pengadaan->metode_pengadaan=="Pelelangan"){
							$DokPengumuman=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Pengumuman Pelelangan"');
							$SUPDP=SuratPengumumanPelelangan::model()->findByPk($DokPengumuman->id_dokumen);
							$this->render('beritaacaraaanwijzing',array(
								'BAP'=>$BAP,'SUPDP'=>$SUPDP,
							));
						} else if ($Pengadaan->metode_pengadaan=="Penunjukan Langsung"||$Pengadaan->metode_pengadaan=="Pemilihan Langsung"){
							$DokPermintaan=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Undangan Permintaan Penawaran Harga"');
							$SUPPPH=SuratUndanganPermintaanPenawaranHarga::model()->findByPk($DokPermintaan->id_dokumen);
							$this->render('beritaacaraaanwijzing',array(
								'BAP'=>$BAP,'SUPPPH'=>$SUPPPH,
							));
						}
					} else {
						$SUP=NotaDinasUndangan::model()->findByPk($DokSUP->id_dokumen);
						$this->render('beritaacaraaanwijzing',array(
							'BAP'=>$BAP,'SUP'=>$SUP,
						));
					}
				} else {
					$DokSPHK=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "Surat Pengumuman Hasil Kualifikasi"');
					$SPHK=PengumumanHasilPrakualifikasi::model()->findByPk($DokSPHK->id_dokumen);
					$this->render('beritaacaraaanwijzing',array(
						'BAP'=>$BAP,'SPHK'=>$SPHK,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionSuratundanganpembukaanpenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '21' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$DokBAP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Berita Acara Aanwijzing"');
				$BAP= BeritaAcaraPenjelasan::model()->findByPk($DokBAP->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen0->nama_dokumen='Surat Undangan Pembukaan Penawaran';
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen0->nama_dokumen='Surat Undangan Pembukaan Penawaran Sampul Satu';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen0->nama_dokumen='Surat Undangan Pembukaan Penawaran Tahap Satu';
				}
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$SUPP= new NotaDinasUndangan;
				$SUPP->id_dokumen=$Dokumen0->id_dokumen;
				
				$DokRKS=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
				$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
				
				$SUPP->tanggal_undangan=Tanggal::getTanggalStrip($RKS->tanggal_pembukaan_penawaran1);
				$SUPP->waktu=Tanggal::getJamMenit($RKS->waktu_pembukaan_penawaran1);
				$SUPP->tempat=$RKS->tempat_pembukaan_penawaran1;
				
				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUPP->attributes=$_POST['NotaDinasUndangan'];
					$SUPP->tanggal_undangan=date('Y-m-d',strtotime($SUPP->tanggal_undangan));
					$valid=$SUPP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SUPP->save(false)){
								$this->redirect(array('editsuratundanganpembukaanpenawaran','id'=>$id));
							}
						}
					}
				}

				$this->render('suratundanganpembukaanpenawaran',array(
					'SUPP'=>$SUPP,'Dokumen0'=>$Dokumen0,'BAP'=>$BAP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditSuratundanganpembukaanpenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '21' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Tahap Satu"');
				}
				
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				
				$DokBAP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Berita Acara Aanwijzing"');
				$BAP= BeritaAcaraPenjelasan::model()->findByPk($DokBAP->id_dokumen);
				
				$SUPP=NotaDinasUndangan::model()->findByPk($Dokumen0->id_dokumen);
				$SUPP->tanggal_undangan=Tanggal::getTanggalStrip($SUPP->tanggal_undangan);	
				$SUPP->waktu=Tanggal::getJamMenit($SUPP->waktu);
		
				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUPP->attributes=$_POST['NotaDinasUndangan'];
					$SUPP->tanggal_undangan=date('Y-m-d',strtotime($SUPP->tanggal_undangan));
					$valid=$SUPP->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SUPP->save(false)){
								$this->redirect(array('editsuratundanganpembukaanpenawaran','id'=>$id));
							}
						}
					}
				}

				$this->render('suratundanganpembukaanpenawaran',array(
					'SUPP'=>$SUPP,'Dokumen0'=>$Dokumen0,'BAP'=>$BAP
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionPembukaanpenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '22' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='23';
						
				$Dokumen1= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen1->model()->find($criteria);
				$somevariable = $row['maxId'];				
								
				$Dokumen1->id_dokumen=$somevariable+1;
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen1->nama_dokumen='Berita Acara Pembukaan Penawaran';
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen1->nama_dokumen='Berita Acara Pembukaan Penawaran Sampul Satu';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen1->nama_dokumen='Berita Acara Pembukaan Penawaran Tahap Satu';
				}
				$Dokumen1->tempat='Jakarta';
				$Dokumen1->status_upload='Belum Selesai';
				$Dokumen1->id_pengadaan=$id;
				
				$Dokumen2=new Dokumen;
				$Dokumen2->id_dokumen=$somevariable+2;
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen2->nama_dokumen='Lampiran Berita Acara Pembukaan Penawaran';
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen2->nama_dokumen='Lampiran Berita Acara Pembukaan Penawaran Sampul Satu';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen2->nama_dokumen='Lampiran Berita Acara Pembukaan Penawaran Tahap Satu';
				}
				$Dokumen2->tempat='Jakarta';
				$Dokumen2->status_upload='Belum Selesai';
				$Dokumen2->id_pengadaan=$id;
				
				$Dokumen3=new Dokumen;
				$Dokumen3->id_dokumen=$somevariable+3;
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen3->nama_dokumen='Daftar Hadir Pembukaan Penawaran';
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen3->nama_dokumen='Daftar Hadir Pembukaan Penawaran Sampul Satu';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen3->nama_dokumen='Daftar Hadir Pembukaan Penawaran Tahap Satu';
				}
				$Dokumen3->tempat='Jakarta';
				$Dokumen3->status_upload='Belum Selesai';
				$Dokumen3->id_pengadaan=$id;
				
				$BAPP= new BeritaAcaraPembukaanPenawaran;
				$BAPP->id_dokumen=$Dokumen1->id_dokumen;
				$BAPP->nomor='-';
				
				
				$DH= new DaftarHadir;
				$DH->id_dokumen=$Dokumen3->id_dokumen;
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$DH->acara="Pembukaan Penawaran";
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DH->acara="Pembukaan Penawaran Sampul Satu";
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DH->acara="Pembukaan Penawaran Tahap Satu";
				}
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Tahap Satu"');
				}
				
				if ($Dok0==null) {
					$DokRKS=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
					$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($RKS->tanggal_pembukaan_penawaran1);
					$BAPP->waktu=Tanggal::getJamMenit($RKS->waktu_pembukaan_penawaran1);
					$BAPP->tempat=$RKS->tempat_pembukaan_penawaran1;
				} else {
					$SUPP=NotaDinasUndangan::model()->findByPk($Dok0->id_dokumen);
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($SUPP->tanggal_undangan);
					$BAPP->waktu=Tanggal::getJamMenit($SUPP->waktu);
					$BAPP->tempat=$SUPP->tempat;
				}
								
				$PP = PenerimaPengadaan::model()->findAll('(ba_aanwijzing = "1" or ba_aanwijzing = "0") and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraPembukaanPenawaran']))
				{
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BAPP->attributes=$_POST['BeritaAcaraPembukaanPenawaran'];
					$valid=$Dokumen1->validate()&&$BAPP->validate();
					if($valid){
						$Dokumen2->tanggal=$Dokumen1->tanggal;
						$Dokumen3->tanggal=$Dokumen1->tanggal;
						$DH->jam=$BAPP->waktu;
						$DH->tempat_hadir=$BAPP->tempat;
				
						if(isset($_POST['perusahaan'])){								
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->hadir_pembukaan_penawaran_1 = $_POST['hadir_pembukaan_penawaran_1'][$i];
									$PP[$i]->save();
								}
							}								
						}//end isset perusahaan		
						
						if($Pengadaan->save(false)){
							if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
								if($BAPP->save(false)&&$DH->save(false)){
									$this->redirect(array('editpembukaanpenawaran','id'=>$id));
								}
							}
						}
					}
				}//end isset
				
				$this->render('pembukaanpenawaran',array(
					'BAPP'=>$BAPP,'PP'=>$PP,'Dokumen1'=>$Dokumen1,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditPembukaanpenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '22' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran"');
					$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Lampiran Berita Acara Pembukaan Penawaran"');
					$Dokumen3=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Pembukaan Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Satu"');
					$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Lampiran Berita Acara Pembukaan Penawaran Sampul Satu"');
					$Dokumen3=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Pembukaan Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Satu"');
					$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Lampiran Berita Acara Pembukaan Penawaran Tahap Satu"');
					$Dokumen3=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Pembukaan Penawaran Tahap Satu"');
				}
				$Dokumen1->tanggal=Tanggal::getTanggalStrip($Dokumen1->tanggal);
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($Dokumen1->id_dokumen);
				$BAPP->waktu=Tanggal::getJamMenit($BAPP->waktu);
				$DH=DaftarHadir::model()->findByPk($Dokumen3->id_dokumen);
			
				$PP = PenerimaPengadaan::model()->findAll('(ba_aanwijzing = "1" or ba_aanwijzing = "0") and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraPembukaanPenawaran']))
				{
					// $Dokumen0->attributes=$_POST['Dokumen'];
					
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BAPP->attributes=$_POST['BeritaAcaraPembukaanPenawaran'];
					$valid=$Dokumen1->validate()&&$BAPP->validate();
					if($valid){
						$Dokumen2->tanggal=$Dokumen1->tanggal;
						$Dokumen3->tanggal=$Dokumen1->tanggal;
						$DH->jam=$BAPP->waktu;
						$DH->tempat_hadir=$BAPP->tempat;

						if(isset($_POST['perusahaan'])){
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->hadir_pembukaan_penawaran_1 = $_POST['hadir_pembukaan_penawaran_1'][$i];														
									$PP[$i]->save();
								}
							}
							
						}
						if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
							if($BAPP->save(false)&&$DH->save(false)){
								$this->redirect(array('editpembukaanpenawaran','id'=>$id));
							}
						}
						
					}
				}
				$this->render('pembukaanpenawaran',array(
					'BAPP'=>$BAPP,'PP'=>$PP,'Dokumen1'=>$Dokumen1,'Dokumen2'=>$Dokumen2,'DH'=>$DH,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionBeritaacarapembukaanpenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}	
			else if (Pengadaan::model()->findByPk($id)->status == '23' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='24';
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Satu"');
				}
				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);				
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Tahap Satu"');
				}
				
				$PP = PenerimaPengadaan::model()->findAll('(hadir_pembukaan_penawaran_1 = "1" or hadir_pembukaan_penawaran_1 = "2") and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraPembukaanPenawaran']))
				{
					$BAPP->attributes=$_POST['BeritaAcaraPembukaanPenawaran'];
					$valid=$BAPP->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->pembukaan_penawaran_1 = $_POST['pembukaan_penawaran_1'][$i];
									$PP[$i]->save();
								}
							}
							
						}//end isset perusahaan		
						
						if($Pengadaan->save(false)){
							if($BAPP->save(false)){
								$this->redirect(array('editberitaacarapembukaanpenawaran','id'=>$id));
							}
						}
					}
				}//end isset
				
				if ($Dok0==null) {
					$DokBAP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Berita Acara Aanwijzing"');
					$BAP= BeritaAcaraPenjelasan::model()->findByPk($DokBAP->id_dokumen);
					$this->render('beritaacarapembukaanpenawaran',array(
						'BAPP'=>$BAPP,'PP'=>$PP,'BAP'=>$BAP,'Dok0'=>$Dok0,
					));
				} else {
					$SUPP=NotaDinasUndangan::model()->findByPk($Dok0->id_dokumen);
					$this->render('beritaacarapembukaanpenawaran',array(
						'BAPP'=>$BAPP,'PP'=>$PP,'SUPP'=>$SUPP,'Dok0'=>$Dok0,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditBeritaacarapembukaanpenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '23' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Tahap Satu"');
				}
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Satu"');
				}
				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);	
			
				$PP = PenerimaPengadaan::model()->findAll('(hadir_pembukaan_penawaran_1 = "1" or hadir_pembukaan_penawaran_1 = "2") and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraPembukaanPenawaran']))
				{
					// $Dokumen0->attributes=$_POST['Dokumen'];
					
					$BAPP->attributes=$_POST['BeritaAcaraPembukaanPenawaran'];
					$valid=$BAPP->validate();					
					if($valid){		

						if(isset($_POST['perusahaan'])){
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																		
									$PP[$i]->pembukaan_penawaran_1 = $_POST['pembukaan_penawaran_1'][$i];
									$PP[$i]->save();
								}
							}							
							
						}
						if($BAPP->save(false)){
							$this->redirect(array('editberitaacarapembukaanpenawaran','id'=>$id));
						}
						
					}
				}

				if ($Dok0==null) {
					$DokBAP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Berita Acara Aanwijzing"');
					$BAP= BeritaAcaraPenjelasan::model()->findByPk($DokBAP->id_dokumen);
					$this->render('beritaacarapembukaanpenawaran',array(
						'BAPP'=>$BAPP,'PP'=>$PP,'BAP'=>$BAP,'Dok0'=>$Dok0,
					));
				} else {
					$SUPP=NotaDinasUndangan::model()->findByPk($Dok0->id_dokumen);
					$this->render('beritaacarapembukaanpenawaran',array(
						'BAPP'=>$BAPP,'PP'=>$PP,'SUPP'=>$SUPP,'Dok0'=>$Dok0,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionSuratundanganevaluasipenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '23' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Satu"');
				}
				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen0->nama_dokumen='Surat Undangan Evaluasi Penawaran';
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen0->nama_dokumen='Surat Undangan Evaluasi Penawaran Sampul Satu';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen0->nama_dokumen='Surat Undangan Evaluasi Penawaran Tahap Satu';
				}
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$SUEP= new NotaDinasUndangan;
				$SUEP->id_dokumen=$Dokumen0->id_dokumen;
				
				$DokRKS=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
				$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
				
				$SUEP->tanggal_undangan=Tanggal::getTanggalStrip($RKS->tanggal_evaluasi_penawaran1);
				$SUEP->waktu=Tanggal::getJamMenit($RKS->waktu_evaluasi_penawaran1);
				$SUEP->tempat=$RKS->tempat_evaluasi_penawaran1;
				
				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUEP->attributes=$_POST['NotaDinasUndangan'];
					$SUEP->tanggal_undangan=date('Y-m-d',strtotime($SUEP->tanggal_undangan));
					$valid=$SUEP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SUEP->save(false)){
								$this->redirect(array('editsuratundanganevaluasipenawaran','id'=>$id));
							}
						}
					}
				}

				$this->render('suratundanganevaluasipenawaran',array(
					'SUEP'=>$SUEP,'Dokumen0'=>$Dokumen0,'BAPP'=>$BAPP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditSuratundanganevaluasipenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '23' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Satu"');
				}
				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Evaluasi Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Evaluasi Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Evaluasi Penawaran Tahap Satu"');
				}
				
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				
				$SUEP=NotaDinasUndangan::model()->findByPk($Dokumen0->id_dokumen);
				$SUEP->tanggal_undangan=Tanggal::getTanggalStrip($SUEP->tanggal_undangan);	
				$SUEP->waktu=Tanggal::getJamMenit($SUEP->waktu);
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUEP->attributes=$_POST['NotaDinasUndangan'];
					$SUEP->tanggal_undangan=date('Y-m-d',strtotime($SUEP->tanggal_undangan));
					$valid=$SUEP->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SUEP->save(false)){
								$this->redirect(array('editsuratundanganevaluasipenawaran','id'=>$id));
							}
						}
					}
				}

				$this->render('suratundanganevaluasipenawaran',array(
					'SUEP'=>$SUEP,'Dokumen0'=>$Dokumen0,'BAPP'=>$BAPP
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
			
		public function actionEvaluasipenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status == '24' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='25';
				
				$DokRKS=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "RKS"');
				$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
				
				$Dokumen1= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen1->model()->find($criteria);
				$somevariable = $row['maxId'];				
								
				$Dokumen1->id_dokumen=$somevariable+1;
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen1->nama_dokumen='Berita Acara Evaluasi Penawaran';
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen1->nama_dokumen='Berita Acara Evaluasi Penawaran Sampul Satu';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen1->nama_dokumen='Berita Acara Evaluasi Penawaran Tahap Satu';
				}
				$Dokumen1->tempat='Jakarta';
				$Dokumen1->status_upload='Belum Selesai';
				$Dokumen1->id_pengadaan=$id;
				
				$Dokumen2=new Dokumen;
				$Dokumen2->id_dokumen=$somevariable+2;
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen2->nama_dokumen='Lampiran Berita Acara Evaluasi Penawaran';
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen2->nama_dokumen='Lampiran Berita Acara Evaluasi Penawaran Sampul Satu';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen2->nama_dokumen='Lampiran Berita Acara Evaluasi Penawaran Tahap Satu';
				}
				$Dokumen2->tempat='Jakarta';
				$Dokumen2->status_upload='Belum Selesai';
				$Dokumen2->id_pengadaan=$id;
				
				$Dokumen3=new Dokumen;
				$Dokumen3->id_dokumen=$somevariable+3;
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen3->nama_dokumen='Daftar Hadir Evaluasi Penawaran';
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen3->nama_dokumen='Daftar Hadir Evaluasi Penawaran Sampul Satu';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen3->nama_dokumen='Daftar Hadir Evaluasi Penawaran Tahap Satu';
				}
				$Dokumen3->tempat='Jakarta';
				$Dokumen3->status_upload='Belum Selesai';
				$Dokumen3->id_pengadaan=$id;
				
				$BAEP= new BeritaAcaraEvaluasiPenawaran;
				$BAEP->id_dokumen=$Dokumen1->id_dokumen;
				$BAEP->nomor='-';
				
				$DH= new DaftarHadir;
				$DH->id_dokumen=$Dokumen3->id_dokumen;
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$DH->acara="Evaluasi Penawaran";
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DH->acara="Evaluasi Penawaran Sampul Satu";
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DH->acara="Evaluasi Penawaran Tahap Satu";
				}
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Evaluasi Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Evaluasi Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Evaluasi Penawaran Tahap Satu"');
				}
				
				if ($Dok0==null) {
					$DokRKS=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
					$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($RKS->tanggal_evaluasi_penawaran1);
					$BAEP->waktu=Tanggal::getJamMenit($RKS->waktu_evaluasi_penawaran1);
					$BAEP->tempat=$RKS->tempat_evaluasi_penawaran1;
				} else {
					$SUEP=NotaDinasUndangan::model()->findByPk($Dok0->id_dokumen);
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($SUEP->tanggal_undangan);
					$BAEP->waktu=Tanggal::getJamMenit($SUEP->waktu);
					$BAEP->tempat=$SUEP->tempat;
				}
				
				if(isset($_POST['BeritaAcaraEvaluasiPenawaran']))
				{
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BAEP->attributes=$_POST['BeritaAcaraEvaluasiPenawaran'];
					$valid=$Dokumen1->validate()&&$BAEP->validate();
					if($valid){
						$DH->jam=$BAEP->waktu;
						$DH->tempat_hadir=$BAEP->tempat;
						$Dokumen2->tanggal=$Dokumen1->tanggal;
						$Dokumen3->tanggal=$Dokumen1->tanggal;						
						
						if($Pengadaan->save(false)){
							if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
								if($BAEP->save(false)&&$DH->save(false)){
									$this->redirect(array('editevaluasipenawaran','id'=>$id));
								}
							}
						}
					}
				}

				$this->render('evaluasipenawaran',array(
					'BAEP'=>$BAEP,'Dokumen1'=>$Dokumen1,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditEvaluasipenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '24' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran"');
					$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Lampiran Berita Acara Evaluasi Penawaran"');
					$Dokumen3=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Evaluasi Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Satu"');
					$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Lampiran Berita Acara Evaluasi Penawaran Sampul Satu"');
					$Dokumen3=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Evaluasi Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Satu"');
					$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Lampiran Berita Acara Evaluasi Penawaran Tahap Satu"');
					$Dokumen3=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Evaluasi Penawaran Tahap Satu"');
				}
				
				$Dokumen1->tanggal=Tanggal::getTanggalStrip($Dokumen1->tanggal);
				$BAEP=BeritaAcaraEvaluasiPenawaran::model()->findByPk($Dokumen1->id_dokumen);
				$BAEP->waktu=Tanggal::getJamMenit($BAEP->waktu);
				$DH=DaftarHadir::model()->findByPk($Dokumen3->id_dokumen);
			
				if(isset($_POST['BeritaAcaraEvaluasiPenawaran']))
				{
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BAEP->attributes=$_POST['BeritaAcaraEvaluasiPenawaran'];
					$valid=$BAEP->validate();
					if($valid){
					
						if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
							if($BAEP->save(false)&&$DH->save(false)){
								$this->redirect(array('editevaluasipenawaran','id'=>$id));
							}
						}
					}
				}

				$this->render('evaluasipenawaran',array(
					'BAEP'=>$BAEP,'Dokumen1'=>$Dokumen1,'DH'=>$DH,'Dokumen2'=>$Dokumen2,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionBeritaacaraevaluasipenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status == '25' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$Pengadaan->status ='30';
				} else {
					$Pengadaan->status ='26';
				}
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Satu"');
				}
				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$DokBAEP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAEP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAEP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Satu"');
				}
				
				$BAEP=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokBAEP->id_dokumen);
				
				$PP = PenerimaPengadaan::model()->findAll('(pembukaan_penawaran_1 = "1") and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraEvaluasiPenawaran']))
				{
					$BAEP->attributes=$_POST['BeritaAcaraEvaluasiPenawaran'];
					$valid=$BAEP->validate();
					if($valid){
						if(isset($_POST['perusahaan'])){
							if ($Pengadaan->metode_penawaran == 'Dua Sampul' || $Pengadaan->metode_penawaran == 'Dua Tahap'){
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
										$PP[$i]->alamat=$_POST['alamat'][$i];									
										$PP[$i]->npwp=$_POST['npwp'][$i];												
										$PP[$i]->nomor_surat_penawaran = $_POST['nomor_surat_penawaran'][$i];								
										$PP[$i]->tanggal_penawaran = $_POST['tanggal_penawaran'][$i];					
										$PP[$i]->evaluasi_penawaran_1 = $_POST['evaluasi_penawaran_1'][$i];										
										$PP[$i]->administrasi = $_POST['administrasi'][$i];										
										$PP[$i]->save();
									}
								}
																
							}//end dua sampul
							else if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
										$PP[$i]->alamat = $_POST['alamat'][$i];								
										$PP[$i]->npwp = $_POST['npwp'][$i];											
										$PP[$i]->biaya = $_POST['biaya'][$i];													
										$PP[$i]->nomor_surat_penawaran = $_POST['nomor_surat_penawaran'][$i];
										$PP[$i]->tanggal_penawaran = $_POST['tanggal_penawaran'][$i];																					
										$PP[$i]->evaluasi_penawaran_1 = $_POST['evaluasi_penawaran_1'][$i];														
										$PP[$i]->evaluasi_penawaran_2 = $_POST['evaluasi_penawaran_2'][$i];			
										$PP[$i]->administrasi = $_POST['administrasi'][$i];																									
										$PP[$i]->save();
									}
								}
								
							}//end satu sampul
						}//end isset perusahaan		
						
						if($Pengadaan->save(false)){
							if($BAEP->save(false)){
								$this->redirect(array('editberitaacaraevaluasipenawaran','id'=>$id));
							}
						}
					}
				}

				$this->render('beritaacaraevaluasipenawaran',array(
					'BAEP'=>$BAEP,'PP'=>$PP,'BAPP'=>$BAPP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditBeritaacaraevaluasipenawaran()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '25' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$DokBAEP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAEP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAEP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Satu"');
				}
				
				$BAEP=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokBAEP->id_dokumen);
				
				if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Satu"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Satu"');
				}
				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);
			
				$PP = PenerimaPengadaan::model()->findAll('(pembukaan_penawaran_1 = "1") and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraEvaluasiPenawaran']))
				{
					$BAEP->attributes=$_POST['BeritaAcaraEvaluasiPenawaran'];
					$valid=$BAEP->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){
							if ($Pengadaan->metode_penawaran == 'Dua Sampul' || $Pengadaan->metode_penawaran == 'Dua Tahap'){
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
										$PP[$i]->alamat=$_POST['alamat'][$i];									
										$PP[$i]->npwp=$_POST['npwp'][$i];		
										
										$PP[$i]->nomor_surat_penawaran = $_POST['nomor_surat_penawaran'][$i];								
										$PP[$i]->tanggal_penawaran = $_POST['tanggal_penawaran'][$i];					
										
										$PP[$i]->evaluasi_penawaran_1 = $_POST['evaluasi_penawaran_1'][$i];
										$PP[$i]->administrasi = $_POST['administrasi'][$i];
										
										$PP[$i]->save();
									}
								}
								
							}//end dua sampul
							else if ($Pengadaan->metode_penawaran == 'Satu Sampul'){
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
										$PP[$i]->alamat = $_POST['alamat'][$i];								
										$PP[$i]->npwp = $_POST['npwp'][$i];
										// $PP[$i]->nilai = 0;						
										$PP[$i]->biaya = $_POST['biaya'][$i];		
										
										$PP[$i]->nomor_surat_penawaran = $_POST['nomor_surat_penawaran'][$i];								
										$PP[$i]->tanggal_penawaran = $_POST['tanggal_penawaran'][$i];										
										
										$PP[$i]->evaluasi_penawaran_1 = $_POST['evaluasi_penawaran_1'][$i];
										$PP[$i]->evaluasi_penawaran_2 = $_POST['evaluasi_penawaran_2'][$i];
										$PP[$i]->administrasi = $_POST['administrasi'][$i];
										
										$PP[$i]->save();
									}
								}
								
							}//end satu sampul
						}//end isset perusahaan		
			
						if($BAEP->save(false)){
							$this->redirect(array('editberitaacaraevaluasipenawaran','id'=>$id));
						}
					}
				}

				$this->render('beritaacaraevaluasipenawaran',array(
					'BAEP'=>$BAEP,'PP'=>$PP,'BAPP'=>$BAPP,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionSuratundanganpembukaanpenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '25' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if($Pengadaan->metode_penawaran=="Dua Sampul") {
					$DokBAEP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Berita Acara Evaluasi Penawaran Sampul Satu"');
				} else if($Pengadaan->metode_penawaran=="Dua Tahap") {
					$DokBAEP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Berita Acara Evaluasi Penawaran Tahap Satu"');
				}
				$BAEP= BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokBAEP->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen0->nama_dokumen='Surat Undangan Pembukaan Penawaran Sampul Dua';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen0->nama_dokumen='Surat Undangan Pembukaan Penawaran Tahap Dua';
				}
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$SUPP= new NotaDinasUndangan;
				$SUPP->id_dokumen=$Dokumen0->id_dokumen;
				
				$DokRKS=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
				$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
				
				$SUPP->tanggal_undangan=Tanggal::getTanggalStrip($RKS->tanggal_pembukaan_penawaran2);
				$SUPP->waktu=Tanggal::getJamMenit($RKS->waktu_pembukaan_penawaran2);
				$SUPP->tempat=$RKS->tempat_pembukaan_penawaran2;
				
				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUPP->attributes=$_POST['NotaDinasUndangan'];
					$SUPP->tanggal_undangan=date('Y-m-d',strtotime($SUPP->tanggal_undangan));
					$valid=$SUPP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SUPP->save(false)){
								$this->redirect(array('editsuratundanganpembukaanpenawaran2','id'=>$Dokumen0->id_pengadaan));
							}
						}
					}
				}

				$this->render('suratundanganpembukaanpenawaran2',array(
					'SUPP'=>$SUPP,'Dokumen0'=>$Dokumen0,'BAEP'=>$BAEP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditSuratundanganpembukaanpenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '25' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if($Pengadaan->metode_penawaran=="Dua Sampul") {
					$DokBAEP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Berita Acara Evaluasi Penawaran Sampul Satu"');
				} else if($Pengadaan->metode_penawaran=="Dua Tahap") {
					$DokBAEP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Berita Acara Evaluasi Penawaran Tahap Satu"');
				}
				$BAEP= BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokBAEP->id_dokumen);
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Tahap Dua"');
				}
				
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				
				$SUPP=NotaDinasUndangan::model()->findByPk($Dokumen0->id_dokumen);
				$SUPP->tanggal_undangan=Tanggal::getTanggalStrip($SUPP->tanggal_undangan);	
				$SUPP->waktu=Tanggal::getJamMenit($SUPP->waktu);
		
				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUPP->attributes=$_POST['NotaDinasUndangan'];
					$SUPP->tanggal_undangan=date('Y-m-d',strtotime($SUPP->tanggal_undangan));
					$valid=$SUPP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SUPP->save(false)){
								$this->redirect(array('editsuratundanganpembukaanpenawaran2','id'=>$Dokumen0->id_pengadaan));
							}
						}
					}
				}

				$this->render('suratundanganpembukaanpenawaran2',array(
					'SUPP'=>$SUPP,'Dokumen0'=>$Dokumen0,'BAEP'=>$BAEP,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
			
		public function actionPembukaanpenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '26' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='27';
						
				$Dokumen1= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen1->model()->find($criteria);
				$somevariable = $row['maxId'];				
								
				$Dokumen1->id_dokumen=$somevariable+1;
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen1->nama_dokumen='Berita Acara Pembukaan Penawaran Sampul Dua';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen1->nama_dokumen='Berita Acara Pembukaan Penawaran Tahap Dua';
				}
				$Dokumen1->tempat='Jakarta';
				$Dokumen1->status_upload='Belum Selesai';
				$Dokumen1->id_pengadaan=$id;
				
				$Dokumen2=new Dokumen;
				$Dokumen2->id_dokumen=$somevariable+2;
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen2->nama_dokumen='Lampiran Berita Acara Pembukaan Penawaran Sampul Dua';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen2->nama_dokumen='Lampiran Berita Acara Pembukaan Penawaran Tahap Dua';
				}
				$Dokumen2->tempat='Jakarta';
				$Dokumen2->status_upload='Belum Selesai';
				$Dokumen2->id_pengadaan=$id;
				
				$Dokumen3=new Dokumen;
				$Dokumen3->id_dokumen=$somevariable+3;
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen3->nama_dokumen='Daftar Hadir Pembukaan Penawaran Sampul Dua';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen3->nama_dokumen='Daftar Hadir Pembukaan Penawaran Tahap Dua';
				}
				$Dokumen3->tempat='Jakarta';
				$Dokumen3->status_upload='Belum Selesai';
				$Dokumen3->id_pengadaan=$id;
				
				$BAPP= new BeritaAcaraPembukaanPenawaran;
				$BAPP->id_dokumen=$Dokumen1->id_dokumen;
				$BAPP->nomor='-';
				
				
				$DH= new DaftarHadir;
				$DH->id_dokumen=$Dokumen3->id_dokumen;
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DH->acara="Pembukaan Penawaran Sampul Dua";
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DH->acara="Pembukaan Penawaran Tahap Dua";
				}
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Tahap Dua"');
					$PP = PenerimaPengadaan::model()->findAll('evaluasi_penawaran_1 = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				}
				
				if ($Dok0==null) {
					$DokRKS=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
					$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($RKS->tanggal_pembukaan_penawaran2);
					$BAPP->waktu=Tanggal::getJamMenit($RKS->waktu_pembukaan_penawaran2);
					$BAPP->tempat=$RKS->tempat_pembukaan_penawaran2;
				} else {
					$SUPP=NotaDinasUndangan::model()->findByPk($Dok0->id_dokumen);
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($SUPP->tanggal_undangan);
					$BAPP->waktu=Tanggal::getJamMenit($SUPP->waktu);
					$BAPP->tempat=$SUPP->tempat;
				}									
				
				if(isset($_POST['BeritaAcaraPembukaanPenawaran']))
				{
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BAPP->attributes=$_POST['BeritaAcaraPembukaanPenawaran'];
					$valid=$BAPP->validate();
					if($valid){
						$Dokumen2->tanggal=$Dokumen1->tanggal;
						$Dokumen3->tanggal=$Dokumen1->tanggal;
						$DH->jam=$BAPP->waktu;
						$DH->tempat_hadir=$BAPP->tempat;
						
						if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
							if(isset($_POST['perusahaan'])){																
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){									
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																		
										$PP[$i]->hadir_pembukaan_penawaran_2 = $_POST['hadir_pembukaan_penawaran_2'][$i];												
										$PP[$i]->save();
									}
								}									
							}//end isset perusahaan
						}
						
						if($Pengadaan->save(false)){
							if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
								if($BAPP->save(false)&&$DH->save(false)){
									$this->redirect(array('editpembukaanpenawaran2','id'=>$id));
								}
							}
						}
					}
				}
				
				if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$this->render('pembukaanpenawaran2',array(
					'BAPP'=>$BAPP,'PP'=>$PP,'Dokumen1'=>$Dokumen1,
					));
				}else{
					$this->render('pembukaanpenawaran2',array(
					'BAPP'=>$BAPP,'Dokumen1'=>$Dokumen1,
					));
				}
				
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditPembukaanpenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '26' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
			
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Dua"');
					$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Lampiran Berita Acara Pembukaan Penawaran Sampul Dua"');
					$Dokumen3=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Pembukaan Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Dua"');
					$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Lampiran Berita Acara Pembukaan Penawaran Tahap Dua"');
					$Dokumen3=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Pembukaan Penawaran Tahap Dua"');
				}
				$Dokumen1->tanggal=Tanggal::getTanggalStrip($Dokumen1->tanggal);
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($Dokumen1->id_dokumen);
				$BAPP->waktu=Tanggal::getJamMenit($BAPP->waktu);
				$DH=DaftarHadir::model()->findByPk($Dokumen3->id_dokumen);
			
				$PP = PenerimaPengadaan::model()->findAll('evaluasi_penawaran_1 = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraPembukaanPenawaran']))
				{
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BAPP->attributes=$_POST['BeritaAcaraPembukaanPenawaran'];
					$valid=$BAPP->validate();
					if($valid){
						$Dokumen2->tanggal=$Dokumen1->tanggal;
						$Dokumen3->tanggal=$Dokumen1->tanggal;
						$DH->jam=$BAPP->waktu;
						$DH->tempat_hadir=$BAPP->tempat;
						if(isset($_POST['perusahaan'])){							
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){									
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																		
									$PP[$i]->hadir_pembukaan_penawaran_2 = $_POST['hadir_pembukaan_penawaran_2'][$i];														
									$PP[$i]->save();
								}
							}
							
						}//end isset perusahaan
					
						if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
							if($BAPP->save(false)&&$DH->save(false)){
								$this->redirect(array('editpembukaanpenawaran2','id'=>$id));
							}
						}
					}
				}
				$this->render('pembukaanpenawaran2',array(
					'BAPP'=>$BAPP,'PP'=>$PP,'Dokumen1'=>$Dokumen1,'Dokumen2'=>$Dokumen2,'DH'=>$DH,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionBeritaacarapembukaanpenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '27' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='28';
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Dua"');
				}
				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Tahap Dua"');
				}
				
				if($Pengadaan->metode_penawaran=="Dua Sampul") {
					$DokBAEP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Berita Acara Evaluasi Penawaran Sampul Satu"');
					$PP = PenerimaPengadaan::model()->findAll('evaluasi_penawaran_1 = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				} else if($Pengadaan->metode_penawaran=="Dua Tahap") {
					$DokBAEP= Dokumen::model()->find('id_pengadaan = '.$id.' and nama_dokumen = "Berita Acara Evaluasi Penawaran Tahap Satu"');
					$PP = PenerimaPengadaan::model()->findAll('(hadir_pembukaan_penawaran_2 = "1" or hadir_pembukaan_penawaran_2 = "0") and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				}
				$BAEP= BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokBAEP->id_dokumen);
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);										
				
				if(isset($_POST['BeritaAcaraPembukaanPenawaran']))
				{
					$BAPP->attributes=$_POST['BeritaAcaraPembukaanPenawaran'];
					$valid=$BAPP->validate();
					if($valid){
						if(isset($_POST['perusahaan'])){							
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){									
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																		
									$PP[$i]->pembukaan_penawaran_2 = $_POST['pembukaan_penawaran_2'][$i];												
									$PP[$i]->save();
								}
							}
							
						}//end isset perusahaan
						
						if($Pengadaan->save(false)){
							if($BAPP->save(false)){
								$this->redirect(array('editberitaacarapembukaanpenawaran2','id'=>$id));
							}
						}
					}
				}
				if ($Dok0==null) {
					if ($Pengadaan->metode_penawaran=="Dua Sampul") {
						$DokBAEP= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Satu"');
					} else if ($Pengadaan->metode_penawaran=="Dua Tahap") {
						$DokBAEP= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Satu"');
					}
					$BAEP= BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokBAEP->id_dokumen);
					$this->render('beritaacarapembukaanpenawaran2',array(
						'BAPP'=>$BAPP,'PP'=>$PP,'BAEP'=>$BAEP,'Dok0'=>$Dok0,
					));
				} else {
					$SUPP=NotaDinasUndangan::model()->findByPk($Dok0->id_dokumen);
					$this->render('beritaacarapembukaanpenawaran2',array(
						'BAPP'=>$BAPP,'PP'=>$PP,'SUPP'=>$SUPP,'Dok0'=>$Dok0,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditBeritaacarapembukaanpenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '27' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Dua"');
				}
				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Sampul Dua"');
					$PP = PenerimaPengadaan::model()->findAll('evaluasi_penawaran_1 = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Pembukaan Penawaran Tahap Dua"');
					$PP = PenerimaPengadaan::model()->findAll('(hadir_pembukaan_penawaran_2 = "1" or hadir_pembukaan_penawaran_2 = "0") and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				}
				
				
				if(isset($_POST['BeritaAcaraPembukaanPenawaran']))
				{
					// $Dokumen0->attributes=$_POST['Dokumen'];
					
					$BAPP->attributes=$_POST['BeritaAcaraPembukaanPenawaran'];
					$valid=$BAPP->validate();					
					if($valid){	

						if(isset($_POST['perusahaan'])){							
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){									
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																	
									$PP[$i]->pembukaan_penawaran_2 = $_POST['pembukaan_penawaran_2'][$i];			
									$PP[$i]->save();
								}
							}
							
						}//end isset perusahaan
						
						if($BAPP->save(false)){
							$this->redirect(array('editberitaacarapembukaanpenawaran2','id'=>$id));
						}
						
					}
				}
				
				if ($Dok0==null) {
					if ($Pengadaan->metode_penawaran=="Dua Sampul") {
						$DokBAEP= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Satu"');
					} else if ($Pengadaan->metode_penawaran=="Dua Tahap") {
						$DokBAEP= Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Satu"');
					}
					$BAEP= BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokBAEP->id_dokumen);
					$this->render('beritaacarapembukaanpenawaran2',array(
						'BAPP'=>$BAPP,'PP'=>$PP,'BAEP'=>$BAEP,'Dok0'=>$Dok0,
					));
				} else {
					$SUPP=NotaDinasUndangan::model()->findByPk($Dok0->id_dokumen);
					$this->render('beritaacarapembukaanpenawaran2',array(
						'BAPP'=>$BAPP,'PP'=>$PP,'SUPP'=>$SUPP,'Dok0'=>$Dok0,
					));
				}

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionSuratundanganevaluasipenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
		
			else if (Pengadaan::model()->findByPk($id)->status > '27' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Dua"');
				}
				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen0->nama_dokumen='Surat Undangan Evaluasi Penawaran Sampul Dua';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen0->nama_dokumen='Surat Undangan Evaluasi Penawaran Tahap Dua';
				}
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$SUEP= new NotaDinasUndangan;
				$SUEP->id_dokumen=$Dokumen0->id_dokumen;
				
				$DokRKS=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
				$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
				
				$SUEP->tanggal_undangan=Tanggal::getTanggalStrip($RKS->tanggal_evaluasi_penawaran2);
				$SUEP->waktu=Tanggal::getJamMenit($RKS->waktu_evaluasi_penawaran2);
				$SUEP->tempat=$RKS->tempat_evaluasi_penawaran2;
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);
				
				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUEP->attributes=$_POST['NotaDinasUndangan'];
					$SUEP->tanggal_undangan=date('Y-m-d',strtotime($SUEP->tanggal_undangan));
					$valid=$SUEP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SUEP->save(false)){
								$this->redirect(array('editsuratundanganevaluasipenawaran2','id'=>$id));
							}
						}
					}
				}

				$this->render('suratundanganevaluasipenawaran2',array(
					'SUEP'=>$SUEP,'Dokumen0'=>$Dokumen0,'BAPP'=>$BAPP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditSuratundanganevaluasipenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Pengadaan::model()->findByPk($id)->status > '27' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Dua"');
				}
				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Evaluasi Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Evaluasi Penawaran Tahap Dua"');
				}
				
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				
				$SUEP=NotaDinasUndangan::model()->findByPk($Dokumen0->id_dokumen);
				$SUEP->tanggal_undangan=Tanggal::getTanggalStrip($SUEP->tanggal_undangan);	
				$SUEP->waktu=Tanggal::getJamMenit($SUEP->waktu);
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUEP->attributes=$_POST['NotaDinasUndangan'];
					$SUEP->tanggal_undangan=date('Y-m-d',strtotime($SUEP->tanggal_undangan));
					$valid=$SUEP->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SUEP->save(false)){
								$this->redirect(array('editsuratundanganevaluasipenawaran2','id'=>$id));
							}
						}
					}
				}

				$this->render('suratundanganevaluasipenawaran2',array(
					'SUEP'=>$SUEP,'Dokumen0'=>$Dokumen0,'BAPP'=>$BAPP
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionEvaluasipenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '28' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='29';
				
				$DokRKS=Dokumen::model()->find('id_pengadaan = '.$id. ' and nama_dokumen = "RKS"');
				$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
				
				$Dokumen1= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen1->model()->find($criteria);
				$somevariable = $row['maxId'];				
								
				$Dokumen1->id_dokumen=$somevariable+1;
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen1->nama_dokumen='Berita Acara Evaluasi Penawaran Sampul Dua';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen1->nama_dokumen='Berita Acara Evaluasi Penawaran Tahap Dua';
				}
				$Dokumen1->tempat='Jakarta';
				$Dokumen1->status_upload='Belum Selesai';
				$Dokumen1->id_pengadaan=$id;
				
				$Dokumen2=new Dokumen;
				$Dokumen2->id_dokumen=$somevariable+2;
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen2->nama_dokumen='Lampiran Berita Acara Evaluasi Penawaran Sampul Dua';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen2->nama_dokumen='Lampiran Berita Acara Evaluasi Penawaran Tahap Dua';
				}
				$Dokumen2->tempat='Jakarta';
				$Dokumen2->status_upload='Belum Selesai';
				$Dokumen2->id_pengadaan=$id;
				
				$Dokumen3=new Dokumen;
				$Dokumen3->id_dokumen=$somevariable+3;
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen3->nama_dokumen='Daftar Hadir Evaluasi Penawaran Sampul Dua';
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen3->nama_dokumen='Daftar Hadir Evaluasi Penawaran Tahap Dua';
				}
				$Dokumen3->tempat='Jakarta';
				$Dokumen3->status_upload='Belum Selesai';
				$Dokumen3->id_pengadaan=$id;
				
				$BAEP= new BeritaAcaraEvaluasiPenawaran;
				$BAEP->id_dokumen=$Dokumen1->id_dokumen;
				$BAEP->nomor='-';
				
				$DH= new DaftarHadir;
				$DH->id_dokumen=$Dokumen3->id_dokumen;
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DH->acara="Evaluasi Penawaran Sampul Dua";
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DH->acara="Evaluasi Penawaran Tahap Dua";
				}
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Evaluasi Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dok0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Evaluasi Penawaran Tahap Dua"');
				}
				
				if ($Dok0==null) {
					$DokRKS=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
					$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($RKS->tanggal_evaluasi_penawaran2);
					$BAEP->waktu=Tanggal::getJamMenit($RKS->waktu_evaluasi_penawaran2);
					$BAEP->tempat=$RKS->tempat_evaluasi_penawaran2;
				} else {
					$SUEP=NotaDinasUndangan::model()->findByPk($Dok0->id_dokumen);
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($SUEP->tanggal_undangan);
					$BAEP->waktu=Tanggal::getJamMenit($SUEP->waktu);
					$BAEP->tempat=$SUEP->tempat;
				}
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);
				
				if(isset($_POST['BeritaAcaraEvaluasiPenawaran']))
				{
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BAEP->attributes=$_POST['BeritaAcaraEvaluasiPenawaran'];
					$valid=$BAEP->validate();
					if($valid){
						$DH->jam=$BAEP->waktu;
						$DH->tempat_hadir=$BAEP->tempat;
						$Dokumen2->tanggal=$Dokumen1->tanggal;
						$Dokumen3->tanggal=$Dokumen1->tanggal;
				
						if($Pengadaan->save(false)){
							if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
								if($BAEP->save(false)&&$DH->save(false)){
									$this->redirect(array('editevaluasipenawaran2','id'=>$id));
								}
							}
						}
					}
				}

				$this->render('evaluasipenawaran2',array(
					'BAEP'=>$BAEP,'Dokumen1'=>$Dokumen1,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditEvaluasipenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '28' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Dua"');
					$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Lampiran Berita Acara Evaluasi Penawaran Sampul Dua"');
					$Dokumen3=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Evaluasi Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Dua"');
					$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Lampiran Berita Acara Evaluasi Penawaran Tahap Dua"');
					$Dokumen3=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Evaluasi Penawaran Tahap Dua"');
				}
				
				$Dokumen1->tanggal=Tanggal::getTanggalStrip($Dokumen1->tanggal);
				
				$BAEP=BeritaAcaraEvaluasiPenawaran::model()->findByPk($Dokumen1->id_dokumen);
				$BAEP->waktu=Tanggal::getJamMenit($BAEP->waktu);
				$DH=DaftarHadir::model()->findByPk($Dokumen3->id_dokumen);
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['BeritaAcaraEvaluasiPenawaran']))
				{
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BAEP->attributes=$_POST['BeritaAcaraEvaluasiPenawaran'];
					$valid=$BAEP->validate();
					if($valid){
						$DH->jam=$BAEP->waktu;
						$DH->tempat_hadir=$BAEP->tempat;
						$Dokumen2->tanggal=$Dokumen1->tanggal;
						$Dokumen3->tanggal=$Dokumen1->tanggal;
							
						$Dokumen2->tanggal=$Dokumen1->tanggal;
						if($Pengadaan->save(false)){
							if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
								if($BAEP->save(false)&&$DH->save(false)){
									$this->redirect(array('editevaluasipenawaran2','id'=>$id));
								}
							}
						}
					}
				}

				$this->render('evaluasipenawaran2',array(
					'BAEP'=>$BAEP,'Dokumen1'=>$Dokumen1,'DH'=>$DH,'Dokumen2'=>$Dokumen2,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionBeritaacaraevaluasipenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '29' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='30';
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Dua"');
				}				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAEP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAEP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Dua"');
				}
				$BAEP= BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokBAEP->id_dokumen);
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);
				
				$PP = PenerimaPengadaan::model()->findAll('pembukaan_penawaran_2 = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraEvaluasiPenawaran']))
				{
					$BAEP->attributes=$_POST['BeritaAcaraEvaluasiPenawaran'];
					$valid=$BAEP->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){							
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){									
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->biaya=$_POST['biaya'][$i];									
									$PP[$i]->evaluasi_penawaran_2 = $_POST['evaluasi_penawaran_2'][$i];
									$PP[$i]->save();
								}
							}
							
						}//end isset perusahaan
						if($Pengadaan->save(false)){
							if($BAEP->save(false)){
								$this->redirect(array('editberitaacaraevaluasipenawaran2','id'=>$id));
							}
						}
					}
				}

				$this->render('beritaacaraevaluasipenawaran2',array(
					'BAEP'=>$BAEP,'PP'=>$PP,'BAPP'=>$BAPP
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditBeritaacaraevaluasipenawaran2()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '29' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Pembukaan Penawaran Tahap Dua"');
				}				
				$BAPP=BeritaAcaraPembukaanPenawaran::model()->findByPk($DokBAPP->id_dokumen);
				
				if ($Pengadaan->metode_penawaran == 'Dua Sampul'){
					$DokBAEP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Dua"');
				} else if ($Pengadaan->metode_penawaran == 'Dua Tahap'){
					$DokBAEP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Dua"');
				}
				$BAEP= BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokBAEP->id_dokumen);
				
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				$PP = PenerimaPengadaan::model()->findAll('pembukaan_penawaran_2 = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraEvaluasiPenawaran']))
				{
					$BAEP->attributes=$_POST['BeritaAcaraEvaluasiPenawaran'];
					$valid=$BAEP->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){							
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){									
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->biaya=$_POST['biaya'][$i];									
									$PP[$i]->evaluasi_penawaran_2 = $_POST['evaluasi_penawaran_2'][$i];
									$PP[$i]->save();
								}
							}
							
						}//end isset perusahaan
						if($BAEP->save(false)){
							$this->redirect(array('editberitaacaraevaluasipenawaran2','id'=>$id));
						}
					}
				}

				$this->render('beritaacaraevaluasipenawaran2',array(
					'BAEP'=>$BAEP,'PP'=>$PP,'BAPP'=>$BAPP
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionSuratundangannegosiasiklarifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '29' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$DokRKS=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
				$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Surat Undangan Negosiasi dan Klarifikasi';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$SUNK= new NotaDinasUndangan;
				$SUNK->id_dokumen=$Dokumen0->id_dokumen;
				$SUNK->tanggal_undangan=Tanggal::getTanggalStrip($RKS->tanggal_negosiasi);
				$SUNK->waktu=Tanggal::getJamMenit($RKS->waktu_negosiasi);
				$SUNK->tempat=$RKS->tempat_negosiasi;
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUNK->attributes=$_POST['NotaDinasUndangan'];
					$SUNK->tanggal_undangan=date('Y-m-d',strtotime($SUNK->tanggal_undangan));
					$valid=$SUNK->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SUNK->save(false)){
								$this->redirect(array('editsuratundangannegosiasiklarifikasi','id'=>$id));
							}
						}
					}
				}
				
				if($Pengadaan->metode_penawaran=="Satu Sampul") {
					$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran"');
					$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
					$this->render('suratundangannegosiasiklarifikasi',array(
						'SUNK'=>$SUNK,'Dokumen0'=>$Dokumen0,'Eval'=>$Eval,
					));
				} else if ($Pengadaan->metode_penawaran=="Dua Sampul"){
					$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Dua"');
					$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
					$this->render('suratundangannegosiasiklarifikasi',array(
						'SUNK'=>$SUNK,'Dokumen0'=>$Dokumen0,'Eval'=>$Eval,
					));
				} else if ($Pengadaan->metode_penawaran=="Dua Tahap"){
					$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Dua"');
					$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
					$this->render('suratundangannegosiasiklarifikasi',array(
						'SUNK'=>$SUNK,'Dokumen0'=>$Dokumen0,'Eval'=>$Eval,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditSuratundangannegosiasiklarifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '29' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Negosiasi dan Klarifikasi"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				
				$SUNK=NotaDinasUndangan::model()->findByPk($Dokumen0->id_dokumen);
				$SUNK->tanggal_undangan=Tanggal::getTanggalStrip($SUNK->tanggal_undangan);
				$SUNK->waktu=Tanggal::getJamMenit($SUNK->waktu);
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['NotaDinasUndangan']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SUNK->attributes=$_POST['NotaDinasUndangan'];
					$SUNK->tanggal_undangan=date('Y-m-d',strtotime($SUNK->tanggal_undangan));
					$valid=$SUNK->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SUNK->save(false)){
								$this->redirect(array('editsuratundangannegosiasiklarifikasi','id'=>$id));
							}
						}
					}
				}

				if($Pengadaan->metode_penawaran=="Satu Sampul") {
					$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran"');
					$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
					$this->render('suratundangannegosiasiklarifikasi',array(
						'SUNK'=>$SUNK,'Dokumen0'=>$Dokumen0,'Eval'=>$Eval,
					));
				} else if ($Pengadaan->metode_penawaran=="Dua Sampul"){
					$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Dua"');
					$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
					$this->render('suratundangannegosiasiklarifikasi',array(
						'SUNK'=>$SUNK,'Dokumen0'=>$Dokumen0,'Eval'=>$Eval,
					));
				} else if ($Pengadaan->metode_penawaran=="Dua Tahap"){
					$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Dua"');
					$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
					$this->render('suratundangannegosiasiklarifikasi',array(
						'SUNK'=>$SUNK,'Dokumen0'=>$Dokumen0,'Eval'=>$Eval,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionNegosiasiklarifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '30' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='31';
				
				$DokRKS=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "RKS"');
				$RKS=Rks::model()->findByPk($DokRKS->id_dokumen);
				
				$Dokumen1= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen1->model()->find($criteria);
				$somevariable = $row['maxId'];				
								
				$Dokumen1->id_dokumen=$somevariable+1;
				$Dokumen1->nama_dokumen='Berita Acara Negosiasi dan Klarifikasi';
				$Dokumen1->tempat='Jakarta';
				$Dokumen1->status_upload='Belum Selesai';
				$Dokumen1->id_pengadaan=$id;
				
				$Dokumen2=new Dokumen;
				$Dokumen2->id_dokumen=$somevariable+2;
				$Dokumen2->nama_dokumen='Lampiran Berita Acara Negosiasi dan Klarifikasi';
				$Dokumen2->tempat='Jakarta';
				$Dokumen2->status_upload='Belum Selesai';
				$Dokumen2->id_pengadaan=$id;
				
				$Dokumen3=new Dokumen;
				$Dokumen3->id_dokumen=$somevariable+3;
				$Dokumen3->nama_dokumen='Daftar Hadir Negosiasi dan Klarifikasi';
				$Dokumen3->tempat='Jakarta';
				$Dokumen3->status_upload='Belum Selesai';
				$Dokumen3->id_pengadaan=$id;
				
				$BANK= new BeritaAcaraNegosiasiKlarifikasi;
				$BANK->id_dokumen=$Dokumen1->id_dokumen;
				$BANK->nomor='-';
				
				$DH= new DaftarHadir;
				$DH->id_dokumen=$Dokumen3->id_dokumen;
				$DH->acara="Negosiasi dan Klarifikasi";
				
				$Dok0=Dokumen::model()->find('id_pengadaan = ' .$id. ' and nama_dokumen = "Surat Undangan Negosiasi dan Klarifikasi"');
				if($Dok0==null) {
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($RKS->tanggal_negosiasi);
					$BANK->tempat=$RKS->tempat_negosiasi;
					$BANK->waktu=Tanggal::getJamMenit($RKS->waktu_negosiasi);
				} else {
					$SUNK=NotaDinasUndangan::model()->findByPk($Dok0->id_dokumen);
					$Dokumen1->tanggal=Tanggal::getTanggalStrip($SUNK->tanggal_undangan);
					$BANK->tempat=$SUNK->tempat;
					$BANK->waktu=Tanggal::getJamMenit($SUNK->waktu);
				}
				
				$PP = PenerimaPengadaan::model()->findAll('evaluasi_penawaran_2 = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraNegosiasiKlarifikasi']))
				{
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BANK->attributes=$_POST['BeritaAcaraNegosiasiKlarifikasi'];
					$valid=$Dokumen1->validate()&&$BANK->validate();
					if($valid){
						if(isset($_POST['perusahaan'])){
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->hadir_klarifikasi_negosiasi = $_POST['hadir_klarifikasi_negosiasi'][$i];
									$PP[$i]->save();
								}
							}
							
						}//end isset perusahaan	
						
						$DH->jam=$BANK->waktu;
						$DH->tempat_hadir=$BANK->tempat;
						$Dokumen2->tanggal=$Dokumen1->tanggal;
						$Dokumen3->tanggal=$Dokumen1->tanggal;
						
						if($Pengadaan->save(false)){
							if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
								if($BANK->save(false)&&$DH->save(false)){
									$this->redirect(array('editnegosiasiklarifikasi','id'=>$id));
								}
							}
						}
					}
				}
				$this->render('negosiasiklarifikasi',array(
					'BANK'=>$BANK,'Dokumen1'=>$Dokumen1,'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditNegosiasiklarifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '30' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Negosiasi dan Klarifikasi"');
				$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Lampiran Berita Acara Negosiasi dan Klarifikasi"');
				$Dokumen3=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Negosiasi dan Klarifikasi"');
				$Dokumen1->tanggal=Tanggal::getTanggalStrip($Dokumen1->tanggal);
				$BANK=BeritaAcaraNegosiasiKlarifikasi::model()->findByPk($Dokumen1->id_dokumen);
				$BANK->waktu=Tanggal::getJamMenit($BANK->waktu);
				$DH=DaftarHadir::model()->findByPk($Dokumen3->id_dokumen);
				
				$PP = PenerimaPengadaan::model()->findAll('evaluasi_penawaran_2 = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraNegosiasiKlarifikasi']))
				{
					$Dokumen1->attributes=$_POST['Dokumen'];
					$BANK->attributes=$_POST['BeritaAcaraNegosiasiKlarifikasi'];
					$valid=$Dokumen1->validate()&&$BANK->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->hadir_klarifikasi_negosiasi = $_POST['hadir_klarifikasi_negosiasi'][$i];
									$PP[$i]->save();
								}
							}
							
						}//end isset perusahaan	
						
						$DH->jam=$BANK->waktu;
						$DH->tempat_hadir=$BANK->tempat;
						$Dokumen2->tanggal=$Dokumen1->tanggal;
						$Dokumen3->tanggal=$Dokumen1->tanggal;
				
						if($Dokumen1->save(false)&&$Dokumen2->save(false)&&$Dokumen3->save(false)){
							if($BANK->save(false)&&$DH->save(false)){
								$this->redirect(array('editnegosiasiklarifikasi','id'=>$id));
							}
						}	
					}
				}
				$this->render('negosiasiklarifikasi',array(
					'BANK'=>$BANK,'Dokumen1'=>$Dokumen1,'Dokumen2'=>$Dokumen2,'DH'=>$DH,'PP'=>$PP,
				));
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionBeritaacaranegosiasiklarifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '31' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='32';
				
				
				$DokBANK=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Negosiasi dan Klarifikasi"');
				$BANK=BeritaAcaraNegosiasiKlarifikasi::model()->findByPk($DokBANK->id_dokumen);
				
				$PP = PenerimaPengadaan::model()->findAll('evaluasi_penawaran_2 = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['BeritaAcaraNegosiasiKlarifikasi']))
				{
					$BANK->attributes=$_POST['BeritaAcaraNegosiasiKlarifikasi'];
					$valid=$BANK->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];
									$PP[$i]->negosiasi_klarifikasi = $_POST['negosiasi_klarifikasi'][$i];
									if ($Pengadaan->metode_pengadaan!="Pelelangan"){			
										$PP[$i]->biaya=$_POST['biaya'][$i];
									}
									$PP[$i]->save();
								}
							}
							
						}//end isset perusahaan	
						
						if($Pengadaan->save(false)){
							if($BANK->save(false)){
								$this->redirect(array('editberitaacaranegosiasiklarifikasi','id'=>$id));
							}
						}
					}
				}
				if (Dokumen::model()->find('id_pengadaan = ' .$id. ' and nama_dokumen = "Surat Undangan Negosiasi dan Klarifikasi"') == null) {
					if($Pengadaan->metode_penawaran=="Satu Sampul") {
						$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran"');
						$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
						$this->render('beritaacaranegosiasiklarifikasi',array(
							'BANK'=>$BANK,'Eval'=>$Eval,'PP'=>$PP,
						));
					} else if ($Pengadaan->metode_penawaran=="Dua Sampul"){
						$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Dua"');
						$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
						$this->render('beritaacaranegosiasiklarifikasi',array(
							'BANK'=>$BANK,'Eval'=>$Eval,'PP'=>$PP,
						));
					} else if ($Pengadaan->metode_penawaran=="Dua Tahap"){
						$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Dua"');
						$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
						$this->render('beritaacaranegosiasiklarifikasi',array(
							'BANK'=>$BANK,'Eval'=>$Eval,'PP'=>$PP,
						));
					}
				} else {
					$DokSUNK=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Negosiasi dan Klarifikasi"');
					$SUNK=NotaDinasUndangan::model()->findByPk($DokSUNK->id_dokumen);
					$this->render('beritaacaranegosiasiklarifikasi',array(
						'BANK'=>$BANK,'SUNK'=>$SUNK,'PP'=>$PP,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditBeritaacaranegosiasiklarifikasi()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '31' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Negosiasi dan Klarifikasi"');
				$Dokumen2=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Daftar Hadir Negosiasi dan Klarifikasi"');
				
				$BANK=BeritaAcaraNegosiasiKlarifikasi::model()->findByPk($Dokumen1->id_dokumen);
				$DH=DaftarHadir::model()->findByPk($Dokumen2->id_dokumen);
				
				$PP = PenerimaPengadaan::model()->findAll('evaluasi_penawaran_2 = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if($PP=='null'){
					$this->redirect(array('beritaacaranegosiasiklarifikasi','id'=>$Dokumen1->id_pengadaan));
				}
				
				if(isset($_POST['BeritaAcaraNegosiasiKlarifikasi']))
				{
					// $Dokumen0->attributes=$_POST['Dokumen'];
					
					$BANK->attributes=$_POST['BeritaAcaraNegosiasiKlarifikasi'];
					$valid=$BANK->validate();					
					if($valid){				
						
						if(isset($_POST['perusahaan'])){
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];
									$PP[$i]->negosiasi_klarifikasi = $_POST['negosiasi_klarifikasi'][$i];
									if ($Pengadaan->metode_pengadaan!="Pelelangan"){			
										$PP[$i]->biaya=$_POST['biaya'][$i];
									}
									$PP[$i]->save();
								}
							}
							
						}//end isset perusahaan	
						
						if($BANK->save(false)&&$DH->save(false)){
							$this->redirect(array('editberitaacaranegosiasiklarifikasi','id'=>$id));
						}
						
					}
				}

				if (Dokumen::model()->find('id_pengadaan = ' .$id. ' and nama_dokumen = "Surat Undangan Negosiasi dan Klarifikasi"') == null) {
					if($Pengadaan->metode_penawaran=="Satu Sampul") {
						$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran"');
						$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
						$this->render('beritaacaranegosiasiklarifikasi',array(
							'BANK'=>$BANK, 'DH'=>$DH, 'Eval'=>$Eval,'PP'=>$PP,
						));
					} else if ($Pengadaan->metode_penawaran=="Dua Sampul"){
						$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Sampul Dua"');
						$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
						$this->render('beritaacaranegosiasiklarifikasi',array(
							'BANK'=>$BANK, 'DH'=>$DH, 'Eval'=>$Eval,'PP'=>$PP,
						));
					} else if ($Pengadaan->metode_penawaran=="Dua Tahap"){
						$DokEval=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Evaluasi Penawaran Tahap Dua"');
						$Eval=BeritaAcaraEvaluasiPenawaran::model()->findByPk($DokEval->id_dokumen);
						$this->render('beritaacaranegosiasiklarifikasi',array(
							'BANK'=>$BANK, 'DH'=>$DH, 'Eval'=>$Eval,'PP'=>$PP,
						));
					}
				} else {
					$DokSUNK=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Undangan Negosiasi dan Klarifikasi"');
					$SUNK=NotaDinasUndangan::model()->findByPk($DokSUNK->id_dokumen);
					$this->render('beritaacaranegosiasiklarifikasi',array(
							'BANK'=>$BANK, 'DH'=>$DH, 'SUNK'=>$SUNK,'PP'=>$PP,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionNotadinasusulanpemenang()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '32' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='33';
				
				$Panitia=Panitia::model()->findByPk($Pengadaan->id_panitia);
				
				$DokBANK=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Negosiasi dan Klarifikasi"');				
				$BANK=BeritaAcaraNegosiasiKlarifikasi::model()->findByPk($DokBANK->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Nota Dinas Usulan Pemenang';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$Dokumen1= new Dokumen;
				$Dokumen1->id_dokumen=$somevariable+2;
				if ($Panitia->jenis_panitia == 'Panitia'){
					$Dokumen1->nama_dokumen='Pakta Integritas Akhir Panitia';
				} else if ($Panitia->jenis_panitia == 'Pejabat'){
					$Dokumen1->nama_dokumen='Pakta Integritas Akhir Pejabat';
				}
				$Dokumen1->tempat='Jakarta';
				$Dokumen1->status_upload='Belum Selesai';
				$Dokumen1->id_pengadaan=$id;
				
				$NDUP= new NotaDinasUsulanPemenang;
				$NDUP->id_dokumen=$Dokumen0->id_dokumen;
				
				$PIP2= new PaktaIntegritasPanitia2;
				$PIP2->id_dokumen=$Dokumen1->id_dokumen;
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				$PP = PenerimaPengadaan::model()->findAll('negosiasi_klarifikasi = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['NotaDinasUsulanPemenang']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$NDUP->attributes=$_POST['NotaDinasUsulanPemenang'];
					$valid=$NDUP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){							
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];																	
										$PP[$i]->usulan_pemenang = $_POST['usulan_pemenang'][$i];
										$PP[$i]->save();
									}
								}
								
						}//end isset perusahaan		
						
						$Dokumen1->tanggal=$Dokumen0->tanggal;
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)&&$Dokumen1->save(false)){
								if($NDUP->save(false)&&$PIP2->save(false)){
									$this->redirect(array('editnotadinasusulanpemenang','id'=>$id));
								}
							}
						}
					}
				}

				$this->render('notadinasusulanpemenang',array(
					'NDUP'=>$NDUP,'Dokumen0'=>$Dokumen0,'PP'=>$PP,'BANK'=>$BANK,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditNotadinasusulanpemenang()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '32' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Panitia=Panitia::model()->findByPk($Pengadaan->id_panitia);
				
				$DokBANK=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Berita Acara Negosiasi dan Klarifikasi"');				
				$BANK=BeritaAcaraNegosiasiKlarifikasi::model()->findByPk($DokBANK->id_dokumen);
				
				$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Usulan Pemenang"');
				if ($Panitia->jenis_panitia == 'Panitia'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Pakta Integritas Akhir Panitia"');
				} else if ($Panitia->jenis_panitia == 'Pejabat'){
					$Dokumen1=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Pakta Integritas Akhir Pejabat"');
				}
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				
				$NDUP=NotaDinasUsulanPemenang::model()->findByPk($Dokumen0->id_dokumen);
				$PIP2=PaktaIntegritasPanitia2::model()->findByPk($Dokumen1->id_dokumen);
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				$PP = PenerimaPengadaan::model()->findAll('negosiasi_klarifikasi = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if($PP=='null'){
					$this->redirect(array('notadinasusulanpemenang','id'=>$id));
				}
				
				if(isset($_POST['NotaDinasUsulanPemenang']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$NDUP->attributes=$_POST['NotaDinasUsulanPemenang'];
					$valid=$NDUP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){
							
							for($i=0;$i<count($PP);$i++){
								if(isset($_POST['perusahaan'][$i])){
									$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
									$PP[$i]->usulan_pemenang = $_POST['usulan_pemenang'][$i];
									$PP[$i]->save();
								}
							}
							
						}//end isset perusahaan	
						
						$Dokumen1->tanggal=$Dokumen0->tanggal;
						if($Dokumen0->save(false)&&$Dokumen1->save(false)){
							if($NDUP->save(false)&&$PIP2->save(false)){
								$this->redirect(array('editnotadinasusulanpemenang','id'=>$id));
							}
						}
					}
				}

				$this->render('notadinasusulanpemenang',array(
					'NDUP'=>$NDUP,'Dokumen0'=>$Dokumen0,'PIP2'=>$PIP2,'PP'=>$PP,'BANK'=>$BANK,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionNotadinaspenetapanpemenang()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '33' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				if ($Pengadaan->metode_pengadaan == 'Penunjukan Langsung'){
					$Pengadaan->status ='36';
				} else if ($Pengadaan->metode_pengadaan == 'Pemilihan Langsung'){
					$Pengadaan->status ='34';
				} else if ($Pengadaan->metode_pengadaan == 'Pelelangan'){
					$Pengadaan->status ='35';
				}
				
				$DokNDUP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Usulan Pemenang"');
				$NDUP=NotaDinasUsulanPemenang::model()->findByPk($DokNDUP->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Nota Dinas Penetapan Pemenang';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$NDPP= new NotaDinasPenetapanPemenang;
				$NDPP->id_dokumen=$Dokumen0->id_dokumen;
								
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				$PP = PenerimaPengadaan::model()->findAll('usulan_pemenang = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['NotaDinasPenetapanPemenang']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$NDPP->attributes=$_POST['NotaDinasPenetapanPemenang'];
					$valid=$NDPP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){							
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
										$PP[$i]->penetapan_pemenang	 = $_POST['penetapan_pemenang'][$i];																
										$PP[$i]->save();
									}
								}
								
						}//end isset perusahaan	
						
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($NDPP->save(false)){
									$this->redirect(array('editnotadinaspenetapanpemenang','id'=>$id));
								}
							}
						}
					}
				}

				$this->render('notadinaspenetapanpemenang',array(
					'NDPP'=>$NDPP,'Dokumen0'=>$Dokumen0,'NDUP'=>$NDUP,'PP'=>$PP,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditNotadinaspenetapanpemenang()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '33' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$DokNDUP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Usulan Pemenang"');
				$NDUP=NotaDinasUsulanPemenang::model()->findByPk($DokNDUP->id_dokumen);
				
				$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Penetapan Pemenang"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				$NDPP=NotaDinasPenetapanPemenang::model()->findByPk($Dokumen0->id_dokumen);
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				$PP = PenerimaPengadaan::model()->findAll('usulan_pemenang = "1" and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				
				if(isset($_POST['NotaDinasPenetapanPemenang']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$NDPP->attributes=$_POST['NotaDinasPenetapanPemenang'];
					$valid=$NDPP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
					
						if(isset($_POST['perusahaan'])){							
								for($i=0;$i<count($PP);$i++){
									if(isset($_POST['perusahaan'][$i])){
										$PP[$i]->perusahaan=$_POST['perusahaan'][$i];									
										$PP[$i]->penetapan_pemenang	 = $_POST['penetapan_pemenang'][$i];						
										$PP[$i]->save();
									}
								}
								
						}//end isset perusahaan	
						
						if($Dokumen0->save(false)){
							if($NDPP->save(false)){
								$this->redirect(array('editnotadinaspenetapanpemenang','id'=>$id));
							}
						}
					}
				}

				$this->render('notadinaspenetapanpemenang',array(
					'NDPP'=>$NDPP,'Dokumen0'=>$Dokumen0,'NDUP'=>$NDUP,'PP'=>$PP,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionNotadinaspemberitahuanpemenang()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '34' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='36';
				
				$DokNDPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Penetapan Pemenang"');
				$NDPP=NotaDinasPenetapanPemenang::model()->findByPk($DokNDPP->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Nota Dinas Pemberitahuan Pemenang';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$NDBP= new NotaDinasPemberitahuanPemenang;
				$NDBP->id_dokumen=$Dokumen0->id_dokumen;
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['NotaDinasPemberitahuanPemenang']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$NDBP->attributes=$_POST['NotaDinasPemberitahuanPemenang'];
					$valid=$NDBP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($NDBP->save(false)){
									$this->redirect(array('editnotadinaspemberitahuanpemenang','id'=>$id));
								}
							}
						}
					}
				}

				$this->render('notadinaspemberitahuanpemenang',array(
					'NDBP'=>$NDBP,'Dokumen0'=>$Dokumen0,'NDPP'=>$NDPP,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditNotadinaspemberitahuanpemenang()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '34' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$DokNDPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Penetapan Pemenang"');
				$NDPP=NotaDinasPenetapanPemenang::model()->findByPk($DokNDPP->id_dokumen);
				
				$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Pemberitahuan Pemenang"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				$NDBP=NotaDinasPemberitahuanPemenang::model()->findByPk($Dokumen0->id_dokumen);
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['NotaDinasPemberitahuanPemenang']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$NDBP->attributes=$_POST['NotaDinasPemberitahuanPemenang'];
					$valid=$NDBP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($NDBP->save(false)){
								$this->redirect(array('editnotadinaspemberitahuanpemenang','id'=>$id));
							}
						}
					}
				}

				$this->render('notadinaspemberitahuanpemenang',array(
					'NDBP'=>$NDBP,'Dokumen0'=>$Dokumen0,'NDPP'=>$NDPP
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionSuratpengumumanpemenang()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '35' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='36';
				
				$DokNDPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Penetapan Pemenang"');
				$NDPP=NotaDinasPenetapanPemenang::model()->findByPk($DokNDPP->id_dokumen);
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Surat Pengumuman Pemenang';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$SPP= new SuratPengumumanPemenang;
				$SPP->id_dokumen=$Dokumen0->id_dokumen;
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['SuratPengumumanPemenang']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SPP->attributes=$_POST['SuratPengumumanPemenang'];
					$valid=$SPP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($SPP->save(false)){
									$this->redirect(array('editsuratpengumumanpemenang','id'=>$id));
								}
							}
						}
					}
				}

				$this->render('suratpengumumanpemenang',array(
					'SPP'=>$SPP,'Dokumen0'=>$Dokumen0,'NDPP'=>$NDPP,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditSuratpengumumanpemenang()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '35' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$DokNDPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Penetapan Pemenang"');
				$NDPP=NotaDinasPenetapanPemenang::model()->findByPk($DokNDPP->id_dokumen);
				
				$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Pengumuman Pemenang"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				$SPP=SuratPengumumanPemenang::model()->findByPk($Dokumen0->id_dokumen);
				
				
				if(isset($_POST['SuratPengumumanPemenang']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SPP->attributes=$_POST['SuratPengumumanPemenang'];
					$valid=$SPP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Dokumen0->save(false)){
							if($SPP->save(false)){
								$this->redirect(array('editsuratpengumumanpemenang','id'=>$id));
							}
						}
					}
				}

				$this->render('suratpengumumanpemenang',array(
					'SPP'=>$SPP,'Dokumen0'=>$Dokumen0,'NDPP'=>$NDPP,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionSuratpenunjukanpemenang()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status == '36' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='37';
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Surat Penunjukan Pemenang';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$SPPM= new SuratPenunjukanPemenang;
				$SPPM->id_dokumen=$Dokumen0->id_dokumen;
				if ($Pengadaan->metode_pengadaan == 'Penunjukan Langsung' || $Pengadaan->metode_pengadaan == 'Pemilihan Langsung'){
					$SPPM->nomor_ski='-';
					$SPPM->tanggal_ski='00-00-0000';
					$SPPM->no_ski='-';
				}
				
				$PP = PenerimaPengadaan::model()->find('penetapan_pemenang = "1"  and id_pengadaan = ' . $Pengadaan->id_pengadaan);
				$Pengadaan->biaya=$PP->biaya;
				$Pengadaan->nama_penyedia = $PP->id_penerima;
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['SuratPenunjukanPemenang']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SPPM->attributes=$_POST['SuratPenunjukanPemenang'];
					$SPPM->tanggal_ski=date('Y-m-d',strtotime($SPPM->tanggal_ski));
					$valid=$SPPM->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						// $Pengadaan->nama_penyedia=$SPPM->nama_penyedia;
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($SPPM->save(false)){
									$this->redirect(array('editsuratpenunjukanpemenang','id'=>$id));
								}
							}
						}
					}
				}
				if($Pengadaan->metode_pengadaan=="Penunjukan Langsung") {
					$DokNDPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Penetapan Pemenang"');
					$NDPP=NotaDinasPenetapanPemenang::model()->findByPk($DokNDPP->id_dokumen);
					$this->render('suratpenunjukanpemenang',array(
						'SPPM'=>$SPPM,'Dokumen0'=>$Dokumen0,'NDPP'=>$NDPP,
					));
				} else if ($Pengadaan->metode_pengadaan=="Pemilihan Langsung") {
					$DokNDBP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Pemberitahuan Pemenang"');
					$NDBP=NotaDinasPemberitahuanPemenang::model()->findByPk($DokNDBP->id_dokumen);
					$this->render('suratpenunjukanpemenang',array(
						'SPPM'=>$SPPM,'Dokumen0'=>$Dokumen0,'NDBP'=>$NDBP,
					));
				} else if ($Pengadaan->metode_pengadaan=="Pelelangan") {
					$DokSPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Pengumuman Pemenang"');
					$SPP=SuratPengumumanPemenang::model()->findByPk($DokSPP->id_dokumen);
					$this->render('suratpenunjukanpemenang',array(
						'SPPM'=>$SPPM,'Dokumen0'=>$Dokumen0,'SPP'=>$SPP,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditSuratpenunjukanpemenang()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Pengadaan::model()->findByPk($id)->status > '36' && Pengadaan::model()->findByPk($id)->status < '99' && Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Penunjukan Pemenang"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				$SPPM=SuratPenunjukanPemenang::model()->findByPk($Dokumen0->id_dokumen);
				$SPPM->tanggal_ski=Tanggal::getTanggalStrip($SPPM->tanggal_ski);
				
				//Uncomment the following line if AJAX validation is needed
				//$this->performAjaxValidation($model);

				if(isset($_POST['SuratPenunjukanPemenang']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$SPPM->attributes=$_POST['SuratPenunjukanPemenang'];
					$SPPM->tanggal_ski=date('Y-m-d',strtotime($SPPM->tanggal_ski));
					$valid=$SPPM->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						// $Pengadaan->nama_penyedia=$SPPM->nama_penyedia;			
						if($Dokumen0->save(false)){
							if($SPPM->save(false)){
								$this->redirect(array('editsuratpenunjukanpemenang','id'=>$id));
							}
						}
					}
				}
				if($Pengadaan->metode_pengadaan=="Penunjukan Langsung") {
					$DokNDPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Penetapan Pemenang"');
					$NDPP=NotaDinasPenetapanPemenang::model()->findByPk($DokNDPP->id_dokumen);
					$this->render('suratpenunjukanpemenang',array(
						'SPPM'=>$SPPM,'Dokumen0'=>$Dokumen0,'NDPP'=>$NDPP,
					));
				} else if ($Pengadaan->metode_pengadaan=="Pemilihan Langsung") {
					$DokNDBP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Pemberitahuan Pemenang"');
					$NDBP=NotaDinasPemberitahuanPemenang::model()->findByPk($DokNDBP->id_dokumen);
					$this->render('suratpenunjukanpemenang',array(
						'SPPM'=>$SPPM,'Dokumen0'=>$Dokumen0,'NDBP'=>$NDBP,
					));
				} else if ($Pengadaan->metode_pengadaan=="Pelelangan") {
					$DokSPP=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Surat Pengumuman Pemenang"');
					$SPP=SuratPengumumanPemenang::model()->findByPk($DokSPP->id_dokumen);
					$this->render('suratpenunjukanpemenang',array(
						'SPPM'=>$SPPM,'Dokumen0'=>$Dokumen0,'SPP'=>$SPP,
					));
				}
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionCheckpoint2()
		{	
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Yii::app()->user->getState('role') == 'anggota') {
				$this->render('checkpoint2');
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionPengadaangagal()
		{	
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {						
				$this->render('pengadaangagal');
			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionNotadinaslaporanpengadaangagal()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				$Pengadaan->status ='98';
				
				$Dokumen0= new Dokumen;
				$criteria=new CDbcriteria;
				$criteria->select='max(id_dokumen) AS maxId';
				$row = $Dokumen0->model()->find($criteria);
				$somevariable = $row['maxId'];
				$Dokumen0->id_dokumen=$somevariable+1;
				$Dokumen0->nama_dokumen='Nota Dinas Laporan Pengadaan Gagal';
				$Dokumen0->tempat='Jakarta';
				$Dokumen0->status_upload='Belum Selesai';
				$Dokumen0->id_pengadaan=$id;
				date_default_timezone_set("Asia/Jakarta");
				$Dokumen0->tanggal=date('d-m-Y');
				
				$NDPGP= new NotaDinasPengadaanGagalPanitia;
				$NDPGP->id_dokumen=$Dokumen0->id_dokumen;
			
				if(isset($_POST['NotaDinasPengadaanGagalPanitia']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$NDPGP->attributes=$_POST['NotaDinasPengadaanGagalPanitia'];
					$valid=$NDPGP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($NDPGP->save(false)){
									$this->redirect(array('editnotadinaslaporanpengadaangagal','id'=>$id));
								}
							}
						}
					}
				}

				$this->render('notadinaslaporanpengadaangagal',array(
					'NDPGP'=>$NDPGP,'Dokumen0'=>$Dokumen0,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
		
		public function actionEditNotadinaslaporanpengadaangagal()
		{	
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}			
			else if (Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {				
		
				$Pengadaan=Pengadaan::model()->findByPk($id);
				
				$Dokumen0=Dokumen::model()->find(('id_pengadaan='.$Pengadaan->id_pengadaan).' and nama_dokumen= "Nota Dinas Laporan Pengadaan Gagal"');
				$Dokumen0->tanggal=Tanggal::getTanggalStrip($Dokumen0->tanggal);
				$NDPGP=NotaDinasPengadaanGagalPanitia::model()->findByPk($Dokumen0->id_dokumen);
				
				
				if(isset($_POST['NotaDinasPengadaanGagalPanitia']))
				{
					$Dokumen0->attributes=$_POST['Dokumen'];
					$NDPGP->attributes=$_POST['NotaDinasPengadaanGagalPanitia'];
					$valid=$NDPGP->validate();
					$valid=$valid&&$Dokumen0->validate();
					if($valid){
						if($Pengadaan->save(false))
						{	
							if($Dokumen0->save(false)){
								if($NDPGP->save(false)){
									$this->redirect(array('editnotadinaslaporanpengadaangagal','id'=>$id));
								}
							}
						}
					}
				}

				$this->render('notadinaslaporanpengadaangagal',array(
					'NDPGP'=>$NDPGP,'Dokumen0'=>$Dokumen0,
				));

			}
			else {
				$this->redirect(array('site/terlarang'));
			}
		}
	
		public function actionUploader(){
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {						
				
				$id = Yii::app()->getRequest()->getQuery('id');
				$user = Yii::app()->user->name;
				$objectpengadaan = Pengadaan::model()->find('id_pengadaan = "' . $id. '"');

				$metode_penawaran1='';
				$metode_penawaran2='';
				if($objectpengadaan->metode_penawaran=='Dua Tahap'){
					$metode_penawaran1='Tahap 1';
					$metode_penawaran2='Tahap 2';
				} else if ($objectpengadaan->metode_penawaran=='Dua Sampul'){
					$metode_penawaran1='Sampul 1';
					$metode_penawaran2='Sampul 2';
				}	
				
				$newDokumen = new Dokumen;
				$newLinkDokumen = new LinkDokumen;
					
				if(isset($_POST['Dokumen'])){
					$newDokumen->attributes=$_POST['Dokumen'];
					$fileDokumen = CUploadedFile::getInstance($newDokumen,'uploadedFile');				
					$newDokumen = Dokumen::model()->findByPk($newDokumen->id_dokumen);
					$newDokumen->uploadedFile=$fileDokumen;
					
					$newDokumen->status_upload='Selesai';
					
					date_default_timezone_set("Asia/Jakarta");
					$secs = time() + (7*3600);
					$hours = $secs / 3600 % 24;
					$minutes = $secs / 60 % 60;
					$seconds = $secs % 60;
					$waktu_upload = $hours . ':' . $minutes . ':' . $seconds;				
					$pathinfo = pathinfo($newDokumen->uploadedFile->getName());
					
					// $criteria=new CDbcriteria;
					// $criteria->select='max(id_link) AS maxId';
					// $row = $newLinkDokumen->model()->find($criteria);
					// $id_link = $row['maxId'] + 1;
					
					$newLinkDokumen->id_link=LinkDokumen::model()->count() + 1;
					$newLinkDokumen->id_dokumen=$newDokumen->id_dokumen;
					$newLinkDokumen->waktu_upload=$waktu_upload;
					$newLinkDokumen->tanggal_upload=date('Y-m-d');
					$newLinkDokumen->pengunggah=$user;
					$newLinkDokumen->nomor_link=LinkDokumen::model()->count('id_dokumen="' . $newDokumen->id_dokumen . '"') + 1;
					$newLinkDokumen->nama_file=$pathinfo['filename'];
					$newLinkDokumen->format_dokumen=$pathinfo['extension'];
					$newLinkDokumen->save();
									
					$path = $_SERVER["DOCUMENT_ROOT"] . Yii::app()->request->baseUrl . '/uploads/' . $newDokumen->id_pengadaan . '/' . $newDokumen->id_dokumen . '/';
					@mkdir($path,0700,true);
					$namaFile = $newLinkDokumen->nomor_link;
					
					if($newDokumen->save(false)){
						$newDokumen->uploadedFile->saveAs($path . $namaFile . '.' . $pathinfo['extension']);
						}
				}
				
				$modelDok = Dokumen::model()->findAll('id_pengadaan= '.$id.' and nama_dokumen != "Nota Dinas Permintaan" and nama_dokumen != "TOR" and nama_dokumen != "RAB" and nama_dokumen != "Nota Dinas Perintah Pengadaan"');

				$modelDokKadiv = array(Dokumen::model()->find('nama_dokumen="Nota Dinas Permintaan" AND id_pengadaan="' . $id . '"'),
					Dokumen::model()->find('nama_dokumen="TOR" AND id_pengadaan="' . $id . '"'),
					Dokumen::model()->find('nama_dokumen="RAB" AND id_pengadaan="' . $id . '"'),
					Dokumen::model()->find('nama_dokumen="Nota Dinas Perintah Pengadaan" AND id_pengadaan="' . $id . '"')
				);
				$this->render('uploader',array('modelDok'=>$modelDok));
			}
		}
        
        public function actionDokumengenerator(){
			$id = Yii::app()->getRequest()->getQuery('id');
			if (Yii::app()->user->isGuest) {
				$this->redirect(array('site/login'));
			}
			else if (Anggota::model()->exists('username = "' . Yii::app()->user->name . '" and id_panitia = "' . Pengadaan::model()->findByPk($id)->id_panitia . '"')) {						
				$model=new Dokumen('search');
				$model->unsetAttributes();  // clear any default values
				if(isset($_GET['Dokumen'])){
					$model->attributes=$_GET['Dokumen'];
				}
	            $this->render('dokumengenerator', array(
	            	'model'=>$model,
	            ));		
	        }
        } 
				
	}
?>