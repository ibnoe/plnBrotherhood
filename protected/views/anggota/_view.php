<?php
/* @var $this AnggotaController */
/* @var $data Anggota */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->username), array('view', 'id'=>$data->username)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIP')); ?>:</b>
	<?php echo CHtml::encode($data->NIP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_panitia')); ?>:</b>
	<?php echo CHtml::encode($data->kode_panitia); ?>
	<br />


</div>