<?php $this->beginContent('//layouts/main'); ?>
<?php $this->renderPartial('//components/_TbNavbarModules') ?>

<?php if(isset($this->breadcrumbs)):?>
    <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
    ));?><!-- breadcrumbs -->
<?php endif  ?>
    
<div id="rbam">
	<?php
	/*if (strtolower($this->id)!=='rbaminitialise'):
		if ($this->getModule()->showMenu)*/
                $this->renderPartial('/rbam/_menu');
		echo "<h2>".$this->pageTitle.'</h2>';
		//$this->renderPartial('/help/_help');
	/*else:
		echo "<h2>{$this->pageTitle}</h2>";
	endif;*/

	echo $content;
	?>
</div>
    
<?php $this->endContent(); ?>