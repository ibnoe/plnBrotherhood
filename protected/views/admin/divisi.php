<?php
	$this->pageTitle=Yii::app()->name . ' | Divisi';
?>

<div id="pagecontent">
	<div id="sidebar">
	<?php $this->beginWidget('zii.widgets.CPortlet'); ?>
	<ul>
		<li><?php echo CHtml::link('Tambah divisi', array('admin/tambahdivisi')) ?></li>
		<li><?php echo CHtml::link('Hapus divisi', array('admin/hapusdivisi')) ?></li>
	</ul>
	<?php $this->endWidget(); ?>
	</div>
	<div id="maincontent">
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'dataProvider'=>$model->search(),
			'htmlOptions'=>array('style'=>'cursor: pointer;'),			
			'selectionChanged'=>"function(id){window.location='" . Yii::app()->createUrl("admin/detaildivisi", array("id"=>"$model->username")) . "'+ $.fn.yiiGridView.getSelection(id);}",
			'columns'=>array(
				array(
					'name'=>'No',
					'value'=>'$this->grid->dataProvider->pagination->currentPage * 10 + $row + 1',
				),
				array(
					'name'=>'Divisi',
					'value'=>'$data->username',
				),
				array(
					'name'=>'Kepanjangan',
					'value'=>'$data->nama_divisi',
				),
				array(
					'class'=>'CButtonColumn',
					'template'=>'{delete}',
					'deleteButtonLabel'=>'Hapus',
					'deleteConfirmation'=>'Hapus divisi?',
					'buttons'=>array(
						'delete'=>array(
							'url'=>'Yii::app()->createUrl("admin/hapusdivisi", array("id"=>$data->username))',
						),
					),
				),
			),
		));
		?>
	</div>
</div>