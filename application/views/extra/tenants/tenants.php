<?php foreach($tenants as $row):?>
<?php if($row->visible == 1) {?>
<div style="float:left; width:300px; height:80px; background:#ddd; padding:10px; margin:10px;">
<h4><?=$row->tenant_name?>

 <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    if (!isset($is_logged_in) || $is_logged_in == true) {
        echo "<a href='" . base_url() . "admin/edit_tenant/" . $row->tenant_id . "'>(edit)</a>";
    }
    ?>

</h4>

<a href="<?=base_url()?>welcome/visit_site/<?=$row->tenant_id?>" target="_blank"><?=$row->website?></a><br/>
Located in 
<?php foreach($units as $unitrow):?>
<?php if($unitrow->occupied == $row->tenant_id) {?>
<?=$unitrow->block[0]?><?=$unitrow->number?>&nbsp;
<?php }?>
<?php endforeach;?>
</div>
<?php }?>
<?php endforeach; ?>