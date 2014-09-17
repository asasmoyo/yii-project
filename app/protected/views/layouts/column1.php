<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php
            $this->widget('booster.widgets.TbAlert', array(
                'fade' => true,
                'closeText' => '&times;',
                'events' => array(),
                'htmlOptions' => array(),
                'userComponentId' => 'user',
            ));
            ?>

            <div class="page-header">
                <h2>
                    <?php echo $this->page_header; ?>
                    <small><?php echo $this->sub_page_header; ?></small>
                </h2>
            </div>

            <?php echo $content; ?>
        </div>
    </div>
<?php $this->endContent(); ?>