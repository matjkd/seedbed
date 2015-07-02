<div style="background: #fff;
padding: 10px; display:block; ">
	<?=form_open('admin/create_tenant')?>
<p>
<?=form_label('Tenant Name')?>
	<?=form_input('tenant_name')?>

</p>
<p>
<?=form_label('Websdite')?>
	<?=form_input('website')?>

</p>
<p>
<?=form_label('Visible')?>
	<?=form_checkbox('visible', 1, TRUE)?>

</p>
<p>

	<?=form_submit('submit',"Add Tenant")?>

</p>
<?=form_close()?>


<?=$this->load->view('admin/dashboard')?>

</div>