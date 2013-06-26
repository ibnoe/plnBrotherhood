<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' | Generator';
$id = Yii::app()->getRequest()->getQuery('id');
$cpengadaan = Pengadaan::model()->find('id_pengadaan = "' . $id . '"');
?>

<div id="pagecontent">
	<div id="sidebar">
		<?php if(!Yii::app()->user->isGuest) $this->widget('MenuPortlet'); ?>
	</div>

	<div id="maincontent">

		<?php 
			if (Anggota::model()->exists('username = "' . Yii::app()->user->name . '"')) {
		?>
                
                <div id="menuform">
                    <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'items'=>array(
//                                    array('label'=>'SU Pembukaan Penawaran', 'url'=>array($BAPP->isNewRecord?('/site/suratundanganpembukaanpenawaran'):('/site/editsuratundanganpembukaanpenawaran'),'id'=>$id)),
                                    array('label'=>'SU Pembukaan Penawaran', 'url'=>array(Pengadaan::model()->findByPk($id)->status=='8'?'/site/suratundanganpembukaanpenawaran':'/site/editsuratundanganpembukaanpenawaran','id'=>$id)),
                                    array('label'=>'BA Pembukaan Penawaran', 'url'=>array(Pengadaan::model()->findByPk($id)->status=='9'?'/site/beritaacarapembukaanpenawaran':(Pengadaan::model()->findByPk($id)->status=='8'?'':'/site/editberitaacarapembukaanpenawaran'),'id'=>$id)),
//                                    array('label'=>'BA Pembukaan Penawaran', 'visible'=>$BAPP->isNewRecord),
//                                    array('label'=>'BA Pembukaan Penawaran', 'url'=>array(Pengadaan::model()->findByPk($id)->status=='9'?'/site/beritaacarapembukaanpenawaran':'/site/editberitaacarapembukaanpenawaran','id'=>$id), 'visible'=>!$BAPP->isNewRecord),
//                                    array('label'=>'Berita Acara Evaluasi Penawaran', 'visible'=>$SUPP->isNewRecord),
//                                    array('label'=>'Berita Acara Evaluasi Penawaran', 'url'=>array(Pengadaan::model()->findByPk($id)->status=='10'?'/site/beritaacaraevaluasipenawaran':(Pengadaan::model()->findByPk($id)->status=='9'?'':'/site/editberitaacaraevaluasipenawaran'),'id'=>$id)),
                            ),
                        ));
                    ?>
                </div>
                <br/>
                
		<div class="form">

		<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'berita-acara-pembukaan-penawaran-form',
		'enableAjaxValidation'=>false,
		)); ?>

		<?php echo $form->errorSummary($BAPP); ?>
		
		<h4><b> Berita Acara Pembukaan Penawaran </b></h4>
		<div class="row">
			<?php echo $form->labelEx($BAPP,'nomor'); ?>
			<?php echo $form->textField($BAPP,'nomor',array('size'=>56,'maxlength'=>50)); ?>
			<?php echo $form->error($BAPP,'nomor'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($BAPP,'jumlah penyedia diundang'); ?>
			<?php echo $form->textField($BAPP,'jumlah_penyedia_diundang',array('size'=>56,'maxlength'=>10)); ?>
			<?php echo $form->error($BAPP,'jumlah_penyedia_diundang'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($BAPP,'jumlah penyedia dengan dokumen yang sah'); ?>
			<?php echo $form->textField($BAPP,'jumlah_penyedia_dokumen_sah',array('size'=>56,'maxlength'=>10)); ?>
			<?php echo $form->error($BAPP,'jumlah_penyedia_dokumen_sah'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($BAPP,'jumlah penyedia dengan dokumen tidak sah'); ?>
			<?php echo $form->textField($BAPP,'jumlah_penyedia_dokumen_tidak_sah',array('size'=>56,'maxlength'=>10)); ?>
			<?php echo $form->error($BAPP,'jumlah_penyedia_dokumen_tidak_sah'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($BAPP,'status metode'); ?>
			<?php echo $form->textField($BAPP,'status_metode',array('size'=>56,'maxlength'=>10)); ?>
			<?php echo $form->error($BAPP,'status_metode'); ?>
		</div>
	
		<div class="row buttons">
			<?php echo CHtml::submitButton($BAPP->isNewRecord ? 'Simpan' : 'Perbarui',array('class'=>'sidafbutton')); ?>
		</div>
		
		<?php $this->endWidget(); ?>

		</div><!-- form -->
		
	<?php if($BAPP->isNewRecord) { ?>
		
	<?php } else { ?>
		<br/>
		<div style="border-top:1px solid lightblue">
		<br/>
			<h4><b> Buat Dokumen </b></h4>
			<ul class="generatedoc">
				<li><?php echo CHtml::link('Berita Acara Pembukaan Penawaran', array('docx/download','id'=>$BAPP->id_dokumen)); ?></li>
				<li><?php echo CHtml::link('Daftar Hadir Pembukaan Penawaran', array('docx/download','id'=>$DH->id_dokumen)); ?></li>
			</ul>
		</div>
	<?php } ?>
	
	
	<?php	} ?>
	</div>
</div>

<div>
<?php echo CHtml::button('Kembali', array('submit'=>array('site/dashboard'), 'class'=>'sidafbutton'));  ?></div>