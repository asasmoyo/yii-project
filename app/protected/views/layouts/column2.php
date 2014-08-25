<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
    <div class="span3">
        <?php
        $this->widget('bootstrap.widgets.TbMenu',
            array(
                'type' => 'list',
                'items' => $this->side_bar,
            )
        );
        ?>
    </div>
    <div class="span8">
        <div id="content">
            <h2>
                <?php echo $this->page_header; ?>
                <small><?php echo $this->sub_page_header; ?></small>
            </h2>
            <?php
            $this->widget('bootstrap.widgets.TbAlert', array(
                'block' => true,
                'fade' => true,
                'closeText' => '&times;',
                'events' => array(),
                'htmlOptions' => array(),
                'userComponentId' => 'user',
            ));
            ?>
            <?php echo $content; ?>
        </div>
    </div>
<?php $this->endContent(); ?>