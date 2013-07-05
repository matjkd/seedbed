<?php 

function convert_to_inches($meters) {
	$inches_per_meter = 39.3700787;
	
	$inches_total = round($meters * $inches_per_meter);  /* round to integer */
	$feet = floor($inches_total / 12);  /* assumes division truncates result; if not use floor() */
	$inches = $inches_total % 12; /* modulus */
	
	if($inches == 0) {
		$total = $feet;
	} else {
		$total = $feet;
	}
	
	return $total;
}


?>
<div class="container">	
	
		
			
		<div class="row-fluid  featured-columns"> <!-- add class equal to the surrounding row-fluid class you can stick anything you want in here, this is an example with some custom css-->
				<div class="span12">
					<a href="#" class="innershadow"></a> <!-- the class innershadow can be any wrapping tag (div,span), if you want a link on the image, then use an a tag-->
					<div class="content">
								<h3 class="primary-color">Units Currently Available</h3>
								
			<table class="table table-striped table-hover responsiv">
				<thead>
						<tr>
								<th>Unit</th>
								<th>Size</th>
								<th>Availiability</th>
								<th>Contact</th>
						</tr>
				</thead>
				<tbody>
							<?php foreach($units as $row):?>
				<?php if($row->occupied == 0) {?>
					
					<?php 
					
					$area_m = ($row->width)*($row->length); 
					$area_f = convert_to_inches($area_m); 
					
					?>
					<tr>
					<td><?=$row->block[0].$row->number?></td>  
					<td><?=$area_f?> square feet (<?=round($area_m,0)?>m<sup>2</sup>) </td>
					<td>Available</td>
					<td>
						
						
						<p class="text-right last" id="click_<?=strtolower($row->block[0]).$row->number?>" ><a  href="#myModal"  data-toggle="modal" class="btn custom-btn btn-small btn-very-subtle clickunit">Contact us about unit <?=$row->block[0].$row->number?> &rarr;</a></p></td>
					<?php } ?>
				
			<?php endforeach;?>	
					
				</tbody>
		</table>				
	
	
		
				
</ul>


								
								
								
								
					</div>
				</div>
				
				
		</div>
		<!--close row-fluid -->
		

		
		
</div><!--close .container-->



