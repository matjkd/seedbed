<?php foreach($unit as $row):?>


<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h2 id="myModalLabel"><strong>Unit  <?=$row -> block[0] ?><?=$row -> number ?></strong>
    	 <?php if($row->occupied == 0) {?> (Available) <?php } ?> 
    	 <?php if($row->occupied > 0) {?> (Occupied) <?php } ?></h2>
  </div>
  <div class="modal-body">
  

  

<?php

	function convert_to_inches($meters, $feetonly)
	{
		$inches_per_meter = 39.3700787;

		$inches_total = round($meters * $inches_per_meter);
		/* round to integer */
		$feet = floor($inches_total / 12);
		/* assumes division truncates result; if not use floor() */
		$inches = $inches_total % 12;
		/* modulus */

		if ($inches == 0)
		{
			$total = $feet . "ft ";
		}
		else
		{
			if ($feetonly == 1)
			{
				$total = $feet . " sq.ft ";
			}
			else
			{
				$total = $feet . "ft " . $inches . "ins <sup>2</sup>";
			}
		}

		return $total;
	}
?>
<?php if($row->occupied > 0) {?>
<?php if($row->visible == 1){?>
					<div class="lead">Let to <?=$row -> tenant_name ?></div>
					<?php } else { ?>
					
					<?php } ?>
					<?php } ?>
					
					<?php

						$area_m = ($row -> width) * ($row -> length);
						$area_f = convert_to_inches($area_m, 1);
					?>
<p class="lead">Size: <?=$area_f ?> (<?=round($area_m, 0) ?>m<sup>2</sup>) </p>


</div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    
  </div>

<?php endforeach; ?>