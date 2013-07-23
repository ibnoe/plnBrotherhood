<?php
	$this->pageTitle=Yii::app()->name . ' | Panitia/Pejabat Pengadaan';
?>

<h3>Pejabat pengadaan</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->searchPejabat(),
	'columns'=>array(
		array(
			'name'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage * 10 + $row + 1',
		),
		array(
			'name'=>'Nama Pengguna',
			'value'=>'$data->anggotas[0]->username',
		),
		array(
			'name'=>'Nama Pejabat',
			'value'=>'$data->nama_panitia',
		),
	),
	'pager'=>array(
			'class'=>'CLinkPager',
			'header'=>'',
			'nextPageLabel'=>"Selanjutnya",
			'prevPageLabel'=>'Sebelumnya',
	),
	'summaryText'=>'',
));
?>
<br /><br />

<h3>Panitia pengadaan</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->searchPanitia(),
	'htmlOptions'=>array('style'=>'cursor: pointer;'),			
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->createUrl("admin/detailpanitia", array("id"=>"$model->id_panitia")) . "'+ $.fn.yiiGridView.getSelection(id);}",
	'columns'=>array(
		array(
			'name'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage * 10 + $row + 1',
		),
		'nama_panitia',
		'SK_panitia',
		array(
			'name'=>'Tanggal SK',
			'value'=>'Tanggal::getTanggalStrip($data->tanggal_sk)',
		),
	),
	'pager'=>array(
			'class'=>'CLinkPager',
			'header'=>'',
			'nextPageLabel'=>"Selanjutnya",
			'prevPageLabel'=>'Sebelumnya',
	),
	'summaryText'=>'',
));
?>