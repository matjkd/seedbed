


<table id="datatable">
<thead>
<tr>
<th>
Link Clicked
</th>
<th>
Time
</th>
<th>
IP Address
</th>
</tr>

</thead>
<tbody>
<?php foreach($clicks as $row):?>
<tr>
<td>
<?=$row->link?>
</td>
<td>
<?php 

echo unix_to_human($row->datetime);


?>
</td>
<td>
<?=$row->ip_address?>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>