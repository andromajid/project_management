<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div id="sidebar" class="span3">

        <div class="well" style="padding: 8px 0;">
            <?php
            $this->widget('bootstrap.widgets.TbMenu', array(
                'type' => 'list',
                'items' => $this->menu,
            ));
            ?>
        </div>
    </div>
    <div id="content" class="span9">
        <?php echo $content; ?>
    </div>
</div>
<?php $this->endContent(); ?>