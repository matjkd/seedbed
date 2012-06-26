<?php foreach($tenants as $row):?>
<?php if($row->visible == 1) {?>
<div style="float:left; width:300px; height:80px; background:#ddd; padding:10px; margin:10px;">
<h4><?=$row->tenant_name?></h4>

<a href="http://<?=$row->website?>" target="_blank"><?=$row->website?></a><br/>
Located in 
<?php foreach($units as $unitrow):?>
<?php if($unitrow->occupied == $row->tenant_id) {?>
<?=$unitrow->block?><?=$unitrow->number?>&nbsp;
<?php }?>
<?php endforeach;?>
</div>
<?php }?>
<?php endforeach; ?>