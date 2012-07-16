<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
    <div id="content">
        <?php echo $content; ?>
    </div><!-- content -->
</div>
<div class="span-5 last">
    <div id="sidebar">
        <?php
        $this->widget('bootstrap.widgets.BootMenu', array(
            'type' => 'list', // '', 'tabs', 'pills' (or 'list')
            'stacked' => false, // whether this is a stacked menu
            'items' => $this->menu,
        ));
        ?>
    </div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>