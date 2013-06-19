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

		<?php echo $form->errorSummary($SUPx); ?>
		
		<h4><b> Surat Undangan Aanwijzing </b></h4>
		<div class="row">
			<?php echo $form->labelEx($SUPx,'nomor'); ?>
			<?php echo $form->textField($SUPx,'nomor',array('size'=>56,'maxlength'=>20)); ?>
			<?php echo $form->error($SUPx,'nomor'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($Dokumenx,'tanggal surat'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'model'=>$Dokumenx,
					'attribute'=>'tanggal',
					'value'=>$Dokumenx->tanggal,
					'htmlOptions'=>array('size'=>56),
					'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					),
			));?>
			<?php echo $form->error($Dokumenx,'tanggal'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($SUPx,'perihal'); ?>
			<?php echo $form->textArea($SUPx,'perihal',array('cols'=>40,'rows'=>3, 'maxlength'=>100)); ?>
			<?php echo $form->error($SUPx,'perihal'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($SUPx,'tanggal Aanwijzing'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'model'=>$SUPx,
					'attribute'=>'tanggal_undangan',
					'value'=>$SUPx->tanggal_undangan,
					'htmlOptions'=>array('size'=>56),
					'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					),
			));?>
			<?php echo $form->error($SUPx,'tanggal_undangan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($SUPx,'waktu Aanwijzing'); ?>
			<?php echo $form->textField($SUPx,'waktu',array('size'=>56,'maxlength'=>20)); ?>
			<?php echo $form->error($SUPx,'waktu'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($SUPx,'tempat Aanwijzing'); ?>
			<?php echo $form->textArea($SUPx,'tempat',array('cols'=>40,'rows'=>3, 'maxlength'=>100)); ?>
			<?php echo $form->error($SUPx,'tempat'); ?>
		</div>
		
		<h4><b> Berita Acara Aanwijzing </b></h4>
		<div class="row">
			<?php echo $form->labelEx($BAPx,'nomor'); ?>
			<?php echo $form->textField($BAPx,'nomor',array('size'=>56,'maxlength'=>20)); ?>
			<?php echo $form->error($BAPx,'nomor'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton($Dokumenx->isNewRecord ? 'Simpan' : 'Save',array('class'=>'sidafbutton')); ?>
		</div>
		
	<?php $this->endWidget(); ?>

	</div><!-- form -->
	
	
<?php	}
?>
	</div>
</div>

<div>
<?php echo CHtml::button('Kembali', array('submit'=>array('site/dashboard'), 'class'=>'sidafbutton'));  ?></div>
