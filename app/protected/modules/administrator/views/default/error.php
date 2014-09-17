<?php
$this->page_header = 'Error ' . $code;
?>

<div class="error">
    <?php echo CHtml::encode($message); ?>
</div>