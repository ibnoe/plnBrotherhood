<?php
/* @var $this PengadaanController */
/* @var $data Pengadaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pengadaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pengadaan), array('view', 'id'=>$data->id_pengadaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pengadaan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pengadaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_penyedia')); ?>:</b>
	<?php echo CHtml::encode($data->nama_penyedia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya')); ?>:</b>
	<?php echo CHtml::encode($data->biaya); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_panitia')); ?>:</b>
	<?php echo CHtml::encode($data->kode_panitia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metode_pengadaan')); ?>:</b>
	<?php echo CHtml::encode($data->metode_pengadaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metode_penawaran')); ?>:</b>
	<?php echo CHtml::encode($data->metode_penawaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	*/ ?>

</div>