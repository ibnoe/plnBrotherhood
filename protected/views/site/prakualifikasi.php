<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' | Generator';
$id = Yii::app()->getRequest()->getQuery('id');
?>

<div id="pagecontent">
	<div id="sidebar">
		<?php if(!Yii::app()->user->isGuest) $this->widget('MenuPortlet'); ?>
	</div>

	<div id="maincontent">
		<?php 
			if (Anggota::model()->exists('username = "' . Yii::app()->user->name . '"')) {
		?>
		<div class="form">

		<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'surat-undangan-penjelasan-form',
		'enableAjaxValidation'=>false,
		)); ?>

		<?php echo $form->errorSummary($SUP); ?>
		
		<h4><b> Surat Undangan Prakualifikasi</b></h4>
		
		</br>
		
		<h2><b> Dokumen Kualifikasi</b></h2>
		<h4><b> Surat Undangan Prakualifikasi</b></h4>
		<div class="row">
			<?php echo $form->labelEx($SUP,'nomor'); ?>
			<?php echo $form->textField($SUP,'nomor',array('size'=>60,'maxlength'=>20)); ?>
			<?php echo $form->error($SUP,'nomor'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($Dokumen0,'tanggal surat'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'model'=>$Dokumen0,
					'attribute'=>'tanggal',
					'value'=>$Dokumen0->tanggal,
					'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					),
			));?>
			<?php echo $form->error($Dokumen0,'tanggal'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($SUP,'sifat'); ?>
			<?php echo $form->textField($SUP,'sifat',array('size'=>60,'maxlength'=>20)); ?>
			<?php echo $form->error($SUP,'sifat'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($SUP,'perihal'); ?>
			<?php echo $form->textField($SUP,'perihal',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($SUP,'perihal'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($SUP,'tanggal Aanwijzing'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'model'=>$SUP,
					'attribute'=>'tanggal_undangan',
					'value'=>$SUP->tanggal_undangan,
					'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					),
			));?>
			<?php echo $form->error($SUP,'tanggal_undangan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($SUP,'waktu Aanwijzing'); ?>
			<?php echo $form->textField($SUP,'waktu',array('size'=>60,'maxlength'=>20)); ?>
			<?php echo $form->error($SUP,'waktu'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($SUP,'tempat Aanwijzing'); ?>
			<?php echo $form->textField($SUP,'tempat',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($SUP,'tempat'); ?>
		</div>
		
		<h4><b> Berita Acara Aanwijzing </b></h4>
		<div class="row">
			<?php echo $form->labelEx($BAP,'nomor'); ?>
			<?php echo $form->textField($BAP,'nomor',array('size'=>60,'maxlength'=>20)); ?>
			<?php echo $form->error($BAP,'nomor'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton($Dokumen0->isNewRecord ? 'Simpan' : 'Save',array('class'=>'sidafbutton')); ?>
		</div>
		
	<?php $this->endWidget(); ?>

	</div><!-- form -->
	
	
<?php	} ?>
	</div>
</div>

<div>
<?php echo CHtml::button('Kembali', array('submit'=>array('site/dashboard'), 'class'=>'sidafbutton'));  ?></div>
