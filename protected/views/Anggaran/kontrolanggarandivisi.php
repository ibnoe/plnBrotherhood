<?php
/* @var $this SiteController */
$id = Yii::app()->getRequest()->getQuery('id');
$divisi = Divisi::model()->findByPk($id);
$this->pageTitle=Yii::app()->name . ' | Kontrol Anggaran '.$divisi->nama_divisi;
?>
<h1 align="center" >Kontrol Anggaran <?php echo $divisi->nama_divisi;?></h1>
<!--
<p>
	Pagu Total :  <?php //echo $pagutotal; ?>
	RAB Total :  <?php //echo $rabtotal; ?> 
	HPS Total :  <?php //echo $hpstotal; ?>
	Kontrak Total :  <?php //echo $kontraktotal; ?>
	Penghematan Total :  <?php //echo $penghematantotal; ?>
	Pesren Total :  <?php //echo $persenpenghematantotal; ?> 
</p>
--->
<?php
	$this->widget('zii.widgets.CDetailView', array(
						'id'=>'viewdetail',
						'data'=>$anggarantotal,
						'attributes'=>array(
							'total_pagu_anggaran_divisi',
							'total_nilai_rab_divisi',
							'total_nilai_hps_divisi',
							'total_nilai_kontrak_divisi',
							'total_penghematan_divisi',
							'persentase',
						),
					));
 
	$this->widget('zii.widgets.grid.CGridView', 
	array( 'id'=>'anggaran-grid',
		 'dataProvider'=>$dataanggaran,
		 'htmlOptions'=>array('style'=>'cursor: pointer;'),			
		 'selectionChanged'=>"function(id){window.location='" . Yii::app()->createUrl("site/detailpengadaan", array("id"=>'')) . "'+ $.fn.yiiGridView.getSelection(id);}",
		 'columns'=>array(
			array( 'name'=>'Nama Pengadaan', 'value'=>'$data["nama_pengadaan"]',),
			array( 'name'=>'Pagu Anggaran', 'value'=>'$data["pagu_anggaran"]',),
			array( 'name'=>'Nilai RAB', 'value'=>'$data["nilai_rab"]',),
			array( 'name'=>'Nilai HPS', 'value'=>'$data["nilai_hps"]',),
			array( 'name'=>'Nilai Kontrak', 'value'=>'$data["nilai_kontrak"]',),
			array( 'name'=>'Penghematan', 'value'=>'$data["penghematan"]',),
			array( 'name'=>'Persentase', 'value'=>'$data["persentase"]',),
			),
		'pager'=>array(
			'class'=>'CLinkPager',
			'header'=>'',
			'nextPageLabel'=>"Selanjutnya",
			'prevPageLabel'=>'Sebelumnya',
		),
		'summaryText' => 'Keterangan : Angka dalam satuan rupiah.',
	));
?>