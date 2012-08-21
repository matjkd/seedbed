<table id="box-table-a">
	<thead>
		<tr>
			<th>Tenant Name</th>
			<th>Website</th>
			
			<th>Visible</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($tenants as $row):?>

		<tr>
			<td><?=$row->tenant_name?>
			</td>
			<td><a href="http://<?=$row->website?>" target="_blank"><?=$row->website?></a>
			</td>
<td><?=$row->visible?>
			</td>
			
			</td>
<td><a href="<?=base_url()?>admin/edit_tenant/<?=$row->tenant_id?>">edit</a>
			</td>
		</tr>




		<?php endforeach; ?>
	</tbody>
</table>
