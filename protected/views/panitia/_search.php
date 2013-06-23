<?php
/* @var $this PanitiaController */
/* @var $model Panitia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_panitia'); ?>
		<?php echo $form->textField($model,'id_panitia',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_panitia'); ?>
		<?php echo $form->textField($model,'nama_panitia',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SK_panitia'); ?>
		<?php echo $form->textField($model,'SK_panitia',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_anggota'); ?>
		<?php echo $form->textField($model,'jumlah_anggota',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_panitia'); ?>
		<?php echo $form->textField($model,'status_panitia',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_panitia'); ?>
		<?php echo $form->textField($model,'jenis_panitia',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>'sidafbutton')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->