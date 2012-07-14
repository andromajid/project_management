<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('bootstrap.widgets.BootMenu', array(
                        'type' => 'list',
			'items'=>$this->menu,
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
        <?php $this->widget('bootstrap.widgets.BootMenu', array(
    'type'=>'list',
    'items'=>$this->menu
)); ?>
</div>
<?php $this->endContent(); ?>