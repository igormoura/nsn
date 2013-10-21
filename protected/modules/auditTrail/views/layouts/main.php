<?php $this->beginContent('//layouts/main'); ?>
<?php $this->renderPartial('//components/_TbNavbarModules') ?>

<?php if (isset($this->breadcrumbs)): ?>
    <?php
    $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
        'links' => $this->breadcrumbs,
    ));
    ?><!-- breadcrumbs -->
<?php endif ?>

<div id="rights" class="container center tudo">
    <div id="content">
        <?php echo $content; ?>
    </div><!-- content -->
</div>

<?php $this->endContent(); ?>