<?php
$this->sub_page_header = 'halaman login';
?>

<?php
/** @var TbActiveForm $form */
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'verticalForm',
    'type' => 'horizontal',
));
?>

<?php
echo $form->textFieldGroup($model, 'username', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-md-3'
    ),
    'labelOptions' => array(
        'class' => 'col-md-2',
    ),
));
?>

<?php
echo $form->passwordFieldGroup($model, 'password', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-md-3'
    ),
    'labelOptions' => array(
        'class' => 'col-md-2',
    ),
));
?>

    <div class="form-actions">
        <?php
        $this->widget('booster.widgets.TbButton', array(
            'buttonType' => 'submit',
            'label' => 'Login',
            'htmlOptions' => array(
                'class' => 'col-md-offset-2',
            ),
        ));
        ?>
    </div>

<?php $this->endWidget(); ?>