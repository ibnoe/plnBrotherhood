<?php

class AdminController extends Controller
{
	public function actionPanitia()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$model = new Panitia('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['Panitia'])){
				$model->attributes = $_GET['Panitia'];
			}
			$this->render('panitia', array(
				'model'=>$model,
			));
		}
	}

	public function actionDetailpanitia()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$id = Yii::app()->getRequest()->getQuery('id');
			$panitia = Panitia::model()->findByPk($id);
			$panitia->tanggal_sk = Tanggal::getTanggalStrip($panitia->tanggal_sk);
			if (isset($_POST['Panitia']) && isset($_POST['nama']) && isset($_POST['namaluar'])) {
				$panitia->attributes = $_POST['Panitia'];
				$panitia->tanggal_sk = date('Y-m-d', strtotime($panitia->tanggal_sk));
				$n = count($_POST['nama']);
				for ($i=0; $i < $n; $i++) {
					if (isset($_POST['id'])) {
						if ($_POST['status'][$i] == 'Tidak Aktif') {
							$current = Anggota::model()->findByAttributes(array('username'=>$_POST['nama'][$i], 'id_panitia'=>$id, 'jabatan'=>$_POST['jabatan'][$i]));
							if ($current != null) {
								$current->status_user = 'Tidak Aktif';
								$current->save(false);
							}
							else {
								$ang = Anggota::model()->findByAttributes(array('username'=>$_POST['nama'][$i]));
								$new = new Anggota;
								$new->username = $_POST['nama'][$i];
								$new->nama = $ang->nama;
								$new->password = $ang->password;
								$new->NIP = $ang->NIP;
								$new->email = $ang->email;
								$new->divisi = 'Divisi Umum';
								$new->id_panitia = $id;
								$new->jabatan = $_POST['jabatan'][$i];
								$new->status_user = 'Tidak Aktif';
								$new->save(false);
							}
						}
						else {
							if ($_POST['id'][$i] != -1) {
								$current = Anggota::model()->findByPk($_POST['id'][$i]);
								$current->status_user = 'Tidak Aktif';
								$current->save(false);
							}
							$old = Anggota::model()->findByAttributes(array('username'=>$_POST['nama'][$i], 'id_panitia'=>$id));
							if ($old != null) {
								$old->jabatan = $_POST['jabatan'][$i];
								$old->status_user = 'Aktif';
								$old->save(false);
							}
							else {
								$ang = Anggota::model()->findByAttributes(array('username'=>$_POST['nama'][$i]));
								$new = new Anggota;
								$new->username = $_POST['nama'][$i];
								$new->nama = $ang->nama;
								$new->password = $ang->password;
								$new->NIP = $ang->NIP;
								$new->email = $ang->email;
								$new->divisi = 'Divisi Umum';
								$new->id_panitia = $id;
								$new->jabatan = $_POST['jabatan'][$i];
								$new->status_user = 'Aktif';
								$new->save(false);
							}
						}
					}
					else {
						$ang = Anggota::model()->findByAttributes(array('username'=>$_POST['nama'][$i]));
						$new = new Anggota;
						$new->username = $_POST['nama'][$i];
						$new->nama = $ang->nama;
						$new->password = $ang->password;
						$new->NIP = $ang->NIP;
						$new->email = $ang->email;
						$new->divisi = 'Divisi Umum';
						$new->id_panitia = $id;
						$new->jabatan = $_POST['jabatan'][$i];
						$new->status_user = 'Aktif';
						$new->save(false);
					}
				}
				$n = count($_POST['namaluar']);
				for ($i=0; $i < $n; $i++) {
					if (isset($_POST['idluar'])) {
						if ($_POST['statusluar'][$i] == 'Tidak Aktif') {
							$current = Anggota::model()->findByAttributes(array('username'=>$_POST['userluar'][$i], 'id_panitia'=>$id, 'jabatan'=>$_POST['jabatanluar'][$i]));
							if ($current != null) {
								$current->status_user = 'Tidak Aktif';
								$current->save(false);
							}
							else {
								$new = new Anggota;
								$new->username = $_POST['userluar'][$i];
								$new->nama = $_POST['namaluar'][$i];
								$new->password = sha1($new->username);
								$new->NIP = $_POST['NIPluar'][$i];
								$new->email = $_POST['emailluar'][$i];
								$new->divisi = $_POST['divisiluar'][$i];
								$new->id_panitia = $id;
								$new->jabatan = $_POST['jabatanluar'][$i];
								$new->status_user = 'Tidak Aktif';
								$new->save(false);
							}
						}
						else {
							if ($_POST['idluar'][$i] != -1) {
								$current = Anggota::model()->findByPk($_POST['idluar'][$i]);
								$current->status_user = 'Tidak Aktif';
								$current->save(false);
							}
							$old = Anggota::model()->findByAttributes(array('username'=>$_POST['userluar'][$i], 'id_panitia'=>$id));
							if ($old != null) {
								$old->jabatan = $_POST['jabatanluar'][$i];
								$old->status_user = 'Aktif';
								$old->save(false);
							}
							else {
								$new = new Anggota;
								$new->username = $_POST['userluar'][$i];
								$new->nama = $_POST['namaluar'][$i];
								$new->password = sha1($new->username);
								$new->NIP = $_POST['NIPluar'][$i];
								$new->email = $_POST['emailluar'][$i];
								$new->divisi = $_POST['divisiluar'][$i];
								$new->id_panitia = $id;
								$new->jabatan = $_POST['jabatanluar'][$i];
								$new->status_user = 'Aktif';
								$new->save(false);
							}
						}
					}
					else {
						$new = new Anggota;
						$new->username = $_POST['userluar'][$i];
						$new->nama = $_POST['namaluar'][$i];
						$new->password = sha1($new->username);
						$new->NIP = $_POST['NIPluar'][$i];
						$new->email = $_POST['emailluar'][$i];
						$new->divisi = $_POST['divisiluar'][$i];
						$new->id_panitia = $id;
						$new->jabatan = $_POST['jabatanluar'][$i];
						$new->status_user = 'Aktif';
						$new->save(false);
					}
				}
				if ($panitia->validate()) {
					if ($panitia->save(false)) {
						Yii::app()->user->setFlash('sukses','Data Telah Disimpan');
					}
				}
			}
			$anggota = Anggota::model()->findAll('id_panitia = ' . $id . ' and divisi = "Divisi Umum" and status_user = "Aktif"');
			$anggotaluar = Anggota::model()->findAll('id_panitia = ' . $id . ' and divisi != "Divisi Umum" and status_user = "Aktif"');
			$this->render('detailpanitia', array(
				'id'=>$id,
				'panitia'=>$panitia,
				'anggota'=>$anggota,
				'anggotaluar'=>$anggotaluar,
			));
		}
	}

	public function actionDetailpejabat()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$id = Yii::app()->getRequest()->getQuery('id');
			$panitia = Panitia::model()->findByPk($id);
			$pejabat = Anggota::model()->findByAttributes(array('id_panitia'=>$id));
			if (isset($_POST['Anggota'])) {
				$pejabat->attributes = $_POST['Anggota'];
				$panitia->nama_panitia = $pejabat->nama;
				if ($panitia->save(false) && $pejabat->save(false)) {
					Yii::app()->user->setFlash('sukses','Data Telah Disimpan');
				}
			}
			$this->render('detailpejabat', array(
				'pejabat'=>$pejabat,
			));
		}
	}

	public function actionTambahpanitia()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$panitia = new Panitia;
			if (isset($_POST['Panitia'])) {
				$panitia->attributes = $_POST['Panitia'];
				$panitia->tanggal_sk = date('Y-m-d', strtotime($panitia->tanggal_sk));
				$panitia->status_panitia = 'Aktif';
				$panitia->jenis_panitia = 'Panitia';
				if ($panitia->save(false)) {
					$this->redirect(array('panitia'));
				}
			}
			$this->render('tambahpanitia', array(
				'panitia'=>$panitia,
			));
		}
	}

	public function actionTambahpejabat()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$pejabat = new Anggota;
			if (isset($_POST['Anggota'])) {
				$pejabat->attributes = $_POST['Anggota'];
				$panitia = new Panitia;
				$panitia->nama_panitia = $pejabat->nama;
				$panitia->SK_panitia = '-';
				$panitia->tanggal_sk = '0000-00-00';
				$panitia->status_panitia = 'Aktif';
				$panitia->jenis_panitia = 'Pejabat';
				if ($panitia->save(false)) {
					$pejabat->password = sha1($pejabat->username);
					$pejabat->divisi = 'Divisi Umum';
					$pejabat->id_panitia = $panitia->id_panitia;
					$pejabat->jabatan = 'Pejabat';
					$pejabat->status_user = 'Aktif';
					if ($pejabat->save(false)) {
						$this->redirect(array('panitia'));
					}
				}
			}
			$this->render('tambahpejabat', array(
				'pejabat'=>$pejabat,
			));
		}
	}

	public function actionHapuspanitia()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$panitia = Panitia::model();
			if (isset($_POST['Panitia'])) {
				foreach ($_POST['Panitia']['id_panitia'] as $item) {
					$cpanitia = $panitia->findByPk($item);
					$cpanitia->status_panitia = 'Tidak Aktif';
					$cpanitia->save(false);
					$anggotas = Anggota::model()->findAllByAttributes(array('id_panitia'=>$item));
					foreach ($anggotas as $anggota) {
						$anggota->status_user = 'Tidak Aktif';
						$anggota->save(false);
					}
				}
				$this->redirect(array('panitia'));
			}
			$this->render('hapuspanitia', array(
				'panitia'=>$panitia,
			));
		}
	}

	public function actionHapuspejabat()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$pejabat = Panitia::model();
			if (isset($_POST['Panitia'])) {
				foreach ($_POST['Panitia']['id_panitia'] as $item) {
					$cpejabat = $pejabat->findByPk($item);
					$cpejabat->status_panitia = 'Tidak Aktif';
					$cpejabat->save(false);
					$person = Anggota::model()->findByAttributes(array('id_panitia'=>$item));
					$person->status_user = 'Tidak Aktif';
					$person->save(false);
				}
				$this->redirect(array('panitia'));
			}
			$this->render('hapuspejabat', array(
				'pejabat'=>$pejabat,
			));
		}
	}

	public function actionKdiv()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$model = new Kdivmum('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['Kdivmum'])){
				$model->attributes = $_GET['Kdivmum'];
			}
			$this->render('kdiv', array(
				'model'=>$model,
			));
		}
	}

	public function actionTambahkdiv()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$kdiv = new Kdivmum;
			if (isset($_POST['Kdivmum'])) {
				$kdiv->attributes = $_POST['Kdivmum'];
				$kdiv->status_user = 'Aktif';
				if ($kdiv->save(false)) {
					$this->redirect(array('kdiv'));
				}
			}
			$this->render('tambahkdiv', array(
				'kdiv'=>$kdiv,
			));
		}
	}

	public function actionHapuskdiv()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$kdiv = Kdivmum::model();
			if (isset($_POST['Kdivmum'])) {
				foreach ($_POST['Kdivmum']['username'] as $item) {
					$ckdiv = $kdiv->findByPk($item);
					$ckdiv->status_user = 'Tidak Aktif';
					$ckdiv->save(false);
				}
				$this->redirect(array('kdiv'));
			}
			$this->render('hapuskdiv', array(
				'kdiv'=>$kdiv,
			));
		}
	}

	public function actionDivisi()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$model = new Divisi('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['Divisi'])){
				$model->attributes = $_GET['Divisi'];
			}
			$this->render('divisi', array(
				'model'=>$model,
			));
		}
	}

	public function actionTambahdivisi()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$divisi = new Divisi;
			if (isset($_POST['Divisi'])) {
				$divisi->attributes = $_POST['Divisi'];
				$divisi->password = $divisi->username;
				$divisi->oldpass = $divisi->password;
				$divisi->newpass = $divisi->password;
				$divisi->confirmpass = $divisi->password;
				if ($divisi->save(false)) {
					$this->redirect(array('divisi'));
				}
			}
			$this->render('tambahdivisi', array(
				'divisi'=>$divisi,
			));
		}
	}

	public function actionHapusdivisi()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$divisi = Divisi::model();
			if (isset($_POST['Divisi'])) {
				foreach ($_POST['Divisi']['username'] as $item) {
					$divisi->deleteByPk($item);
				}
				$this->redirect(array('divisi'));
			}
			$this->render('hapusdivisi', array(
				'divisi'=>$divisi,
			));
		}
	}

	public function actionAdmin()
	{
		if (Yii::app()->user->getState('role') == 'admin') {
			$query = Admin::model()->findAll();
			$admin = $query[0];
			if (isset($_POST['Admin'])) {
				$admin->attributes = $_POST['Admin'];
				if ($admin->validate()) {
					if ($admin->save(false)) {
						Yii::app()->user->name = $admin->username;
						Yii::app()->user->setFlash('sukses','Data Telah Disimpan');
					}
				}
			}
			$this->render('admin', array(
				'admin'=>$admin,
			));
		}
	}
}
