<?php $blockArray = array('A', 'B', 'C', 'D', 'E');?>


<div class="accordion" id="accordion2">
	
	<?php foreach($blockArray as $block):?>
  <div class="accordion-group">
    <div class="accordion-heading ">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?=$block?>">
        Block <?=$block?>
      </a>
    </div>
    <div id="<?=$block?>" class="accordion-body collapse ">
      <div class="accordion-inner">
        <ul style="display: block;">
			<?php foreach($units as $row):?>

			<?php if($row->block[0] == $block) {?>

			<li class="<?= strtolower($row->block[0]).$row->number?> visible<?=$row->visible?>"
				id="<?=$row->unit_id?>"> <a href="#myModal"  data-toggle="modal"><span class="clicky"
				onclick="unitClick('<?php echo strtolower($row->block[0]).$row->number;?>', '<?=$row->unit_id?>')">
					<?=$row->block[0].$row->number?> - <?=round($row->width, 2)?>m x <?=round($row->length, 2)?>m
					<?php if($row->occupied > 0) {?>
					
					<?php if($row->visible == 1){?>
					(Occupied)
					<?php } else { ?>
					(Occupied)
					<?php }?>
					
					 
					<?php }
					else {
						echo "(Available)";
					}?>
			</span></a></li>


			<?php } ?>
			<?php endforeach;?>
		</ul>
      </div>
    </div>
  </div>
  <?php endforeach;?>
  
  
</div>

