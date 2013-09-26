 <div class="flashes">

	 <?php if(Yii::app()->user->hasFlash('success')):?>
	 	<div class="flash-sucess center" style="margin-bottom: -30px!important; margin-top: -40px !important;">
	 		
	 		<div class="alert in alert-block fade alert-success flash-success">
	        <?php echo Yii::app()->user->getFlash('success'); ?>
	    </div>

	    <?php
	            Yii::app()->clientScript->registerScript(
	               'myHideEffect',
	               '$(".flash-sucess").animate({opacity: 1.0}, 2000).fadeOut("slow");',
	               CClientScript::POS_READY
	            );
	        ?>
	 	</div>
	    
	<?php endif; ?>


<?php if(Yii::app()->user->hasFlash('error')):?>
	 	<div class="flash-error" style="margin-bottom: -56px; margin-top: -14px;">
	 		
	 		<div class="alert in alert-block fade alert-success flash-error">
	        <?php echo Yii::app()->user->getFlash('error'); ?>
	    </div>

	    <?php
	            Yii::app()->clientScript->registerScript(
	               'myHideEffect',
	               '$(".flash-error").animate({opacity: 1.0}, 2000).fadeOut("slow");',
	               CClientScript::POS_READY
	            );
	        ?>
	 	</div>
	    
	<?php endif; ?>

 </div>