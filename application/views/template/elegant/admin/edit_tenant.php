<?php foreach($tenant as $row):?>


<?php  $id = $row->tenant_id;?>


<?=form_open_multipart("admin/edit_tenant_details/$row->tenant_id")?> 


Tenant Name: <br/><?=form_input('tenant_name', $row->tenant_name)?><br/>
Website:<br/><?=form_input('website', $row->website)?>
<br/>Email:<br/><?=form_input('email', $row->email)?>
<p>
<?=form_label('Visible')?>
	<?=form_checkbox('visible',  1, $row->visible)?>

</p>
<p>
<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;?>