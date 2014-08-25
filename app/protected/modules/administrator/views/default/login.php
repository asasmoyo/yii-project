<?php

$this->sub_page_header = 'halaman login';
?>

<?php
/** @var TbActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
        'type' => 'horizontal',
    )
);
?>

<?php echo $form->textFieldRow($model, 'username', array('class' => 'span3')); ?>
<?php echo $form->passwordFieldRow($model, 'password', array('class' => 'span3')); ?>

    <div class="form-actions">
        <?php $this->widget(
            'bootstrap.widgets.TbButton',
            array(
                'buttonType' => 'submit',
                'type' => 'primary',
                'label' => 'Login'
            )
        ); ?>
    </div>

<?php $this->endWidget(); ?>