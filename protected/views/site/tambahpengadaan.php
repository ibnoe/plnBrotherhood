<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' | Tambah Pengadaan';
?>
<h4> Pilih pelaku pengadaan</h4>
<?php 
	if (Yii::app()->user->name == 'kadiv') {
		echo CHtml::button('Pejabat Pengadaan', array('submit'=>array('tambahpengadaanpejabat'), 'style'=>'background:url(css/bg.gif)'));
		echo CHtml::button('Panitia Pengadaan', array('submit'=>array('tambahpengadaanpanitia'), 'style'=>'background:url(css/bg.gif)')); 
	}
?>