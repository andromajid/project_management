<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4><?php echo $data['data_title']; ?></h4>
</div>

<div class="modal-body">
    <?php
    $attr = array(
        array('name' => 'data_title', 'label' => 'judul ' . $type),
        array('name' => 'start_date', 'label' => 'Mulai ' . $type),
        array('name' => 'end_date', 'label' => 'berakhir ' . $type),
        array('name' => 'status', 'label' => 'Status ' . $type),
        array('name' => 'project', 'label' => 'Nama Project '),
    );
    if($type == 'task') {
        $attr[] =  array('name' => 'milestone', 'label' => 'Milestone');
    }
    $attr[] = array('name' => 'description', 'label' => 'Deskripsi '.$type);
    $this->widget('bootstrap.widgets.TbDetailView', array(
        'data' => $data,
        'attributes' => $attr,
    ));
    ?>
</div>
<div class="modal-footer">
</div>