<?php
/* @var $this SiteController */

$id = Yii::app()->getRequest()->getQuery('id');
$cpengadaan = Pengadaan::model()->find('id_pengadaan = "' . $id . '"');
$this->pageTitle=Yii::app()->name . ' | '.$cpengadaan->nama_pengadaan;
?>

<div id="pagecontent">
	<div id="sidebar">
		<?php if(!Yii::app()->user->isGuest) $this->widget('MenuPortlet'); ?>
		<script type="text/javascript">
			$('#17').attr('class','onprogress');
		</script>
	</div>

	<div id="maincontent">
	
		<?php 
			if (Yii::app()->user->getState('role') == 'anggota') {
		?>
          	<?php if($cpengadaan->metode_pengadaan == 'Penunjukan Langsung') { ?>
        		<div id="menuform">
                    <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'items'=>array(
                                    array('label'=>'ND Usulan', 'url'=>array('/generator/editnotadinasusulanpemenang','id'=>$id)),
                                    array('label'=>'ND Penetapan', 'url'=>array($NDPP->isNewRecord?'/generator/notadinaspenetapanpemenang':'/generator/editnotadinaspenetapanpemenang','id'=>$id)),
                                    array('label'=>'Surat Penunjukan Pemenang', 'url'=>array(Pengadaan::model()->findByPk($id)->status=='36'?'/generator/suratpenunjukanpemenang':(Pengadaan::model()->findByPk($id)->status=='33'?'':'/generator/editsuratpenunjukanpemenang'),'id'=>$id)),
                            ),
                        ));
                    ?>
                </div>
        	<?php } else if($cpengadaan->metode_pengadaan == 'Pemilihan Langsung') { ?>
                <div id="menuform">
                    <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'items'=>array(
									array('label'=>'ND Usulan', 'url'=>array('/generator/editnotadinasusulanpemenang','id'=>$id)),
                                    array('label'=>'ND Penetapan', 'url'=>array($NDPP->isNewRecord?'/generator/notadinaspenetapanpemenang':'/generator/editnotadinaspenetapanpemenang','id'=>$id)),
                                    array('label'=>'ND Pemberitahuan', 'url'=>array(Pengadaan::model()->findByPk($id)->status=='34'?'/generator/notadinaspemberitahuanpemenang':(Pengadaan::model()->findByPk($id)->status=='33'?'':'/generator/editnotadinaspemberitahuanpemenang'),'id'=>$id)),
                                    array('label'=>'Surat Penunjukan Pemenang', 'url'=>array(Pengadaan::model()->findByPk($id)->status=='36'?'/generator/suratpenunjukanpemenang':(Pengadaan::model()->findByPk($id)->status=='34'?'':(Pengadaan::model()->findByPk($id)->status=='33'?'':'/generator/editsuratpenunjukanpemenang')),'id'=>$id)),
                            ),
                        ));
                    ?>
                </div>
			<?php } else if($cpengadaan->metode_pengadaan == 'Pelelangan') { ?>
				<div id="menuform">
                    <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'items'=>array(
                                    array('label'=>'ND Usulan', 'url'=>array('/generator/editnotadinasusulanpemenang','id'=>$id)),
                                    array('label'=>'ND Penetapan', 'url'=>array($NDPP->isNewRecord?'/generator/notadinaspenetapanpemenang':'/generator/editnotadinaspenetapanpemenang','id'=>$id)),
                                    array('label'=>'SP Pemenang', 'url'=>array(Pengadaan::model()->findByPk($id)->status=='35'?'/generator/suratpengumumanpemenang':(Pengadaan::model()->findByPk($id)->status=='33'?'':'/generator/editsuratpengumumanpemenang'),'id'=>$id)),
                                    array('label'=>'Surat Penunjukan Pemenang', 'url'=>array(Pengadaan::model()->findByPk($id)->status=='36'?'/generator/suratpenunjukanpemenang':(Pengadaan::model()->findByPk($id)->status=='35'?'':(Pengadaan::model()->findByPk($id)->status=='33'?'':'/generator/editsuratpenunjukanpemenang')),'id'=>$id)),
                            ),
                        ));
                    ?>
                </div>
			<?php } ?>
                
                <br/>
                
		<div class="form">

		<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'nota-dinas-penetapan-pemenang-form',
		'enableAjaxValidation'=>false,
		)); ?>
		
		<h4><b> Nota Dinas Penetapan Pemenang </b></h4>
		<div class="row">
			<?php echo $form->labelEx($NDPP,'nomor'); ?>
			Nomor Nota Dinas Usulan Pemenang : <?php echo $NDUP->nomor ?> <br/>
			<?php echo $form->textField($NDPP,'nomor',array('size'=>56,'maxlength'=>50)); ?>
			<?php echo $form->error($NDPP,'nomor'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($Dokumen0,'tanggal surat'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'model'=>$Dokumen0,
					'attribute'=>'tanggal',
					'value'=>$Dokumen0->tanggal,
					'htmlOptions'=>array('size'=>56),
					'options'=>array(
					'dateFormat'=>'dd-mm-yy',
					),
			));?>
			<?php echo $form->error($Dokumen0,'tanggal'); ?>
		</div>
		
		<div class="row">
				<?php 
					$this->widget('application.extensions.appendo.JAppendo',array(
					'id' => 'idpenyedia',        
					'model' => $PP,
					// 'model2' => $PP2,
					'viewName' => 'formperusahaan_penetapan_pemenang',
					'labelAdd' => '',
					'labelDel' => '',
					
					)); 
				?>
		</div>	
		
		<div class="row buttons">
			<?php echo CHtml::submitButton($NDPP->isNewRecord ? 'Simpan' : 'Perbarui',array('class'=>'sidafbutton')); ?>
		</div>
		
	<?php $this->endWidget(); ?>

	</div><!-- form -->
	
	<?php if($NDPP->isNewRecord) { ?>
		
	<?php } else { ?>
		<br/>
		<div style="border-top:1px solid lightblue">
		<br/>
			<h4><b> Daftar Dokumen </b></h4>
			<ul class="generatedoc">
				<li><?php echo CHtml::link('Nota Dinas Penetapan Pemenang', array('docx/download','id'=>$NDPP->id_dokumen)); ?></li>
			</ul>
		</div>
	<?php } ?>
	
<?php	} ?>
	</div>
</div>

<div>
<?php echo CHtml::button('Kembali', array('submit'=>array('site/dashboard'), 'style'=>'background:url(css/bg.gif)'));  ?></div>
