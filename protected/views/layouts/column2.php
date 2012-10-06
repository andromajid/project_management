<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
    <div id="content">
        <?php echo $content; ?>
    </div><!-- content -->
</div>
<div class="span-5 last">
    <?php //var_dump($this->menu);?>
    <?php if(count($this->menu) > 0):?>
    <div id="sidebar" class="subnav well">
        <?php
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type' => 'list', // '', 'tabs', 'pills' (or 'list')
            'items' => $this->menu,
        ));
        ?>
    </div><!-- sidebar -->
    <?php endif;?>
</div>
<?php $this->endContent(); ?>