<!-- MODAL -->
<?php $this->beginWidget(
    'bootstrap.widgets.TbModal',
    array('id' => 'modal', 'htmlOptions' => array('style' => 'width: 750px; margin-left: -395px; overflow:hidden;'))
); ?>
 
<div class="modal-header" id="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
</div>

<div class="modal-body" id="modal-body">
</div>

<div class="modal-footer" style="height: 50px;">
    <?php $this->widget(
        'bootstrap.widgets.TbButton',
        array(
            'type' => 'primary',
            'label' => 'Fechar',
            'url' => '#',
            'htmlOptions' => array('data-dismiss' => 'modal'),
        )
    ); ?>
</div>
 
<?php $this->endWidget(); ?>