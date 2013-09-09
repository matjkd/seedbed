<script type="style/css">
	.adminmenu {
		background:#fff;
		display:block;
	}
</script>
<div style="background: #fff;
padding: 10px;" class="well">
	<div>
    
    
 <?=$this->load->view('login/login_box')?>   
    
    
</div>

<!-- <a href="<?=base_url()?>admin/add_content">Add Content</a><br/>

<a href="<?=base_url()?>admin/add_news_content">Add News</a><br/> 

<a href="<?=base_url()?>admin/list_clicks">Tenant Links Clicked</a><br/>

<a href="<?=base_url()?>user/management">User Management</a><br/>

-->


<a href="<?=base_url()?>admin/assign_tenants">Assign Tenants</a><br/>

<a href="<?=base_url()?>admin/list_tenants">List Tenants</a><br/>



</div>
