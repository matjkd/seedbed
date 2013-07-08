<?php $blockArray = array('A', 'B', 'C', 'D', 'E');?>
<?php $tenantArray[0] = 'None';?>
<?php foreach($tenants as $row2):?>

<?php $tenantArray[$row2->tenant_id] = $row2->tenant_name; ?>

<?php endforeach;?>
<div style="background:#fff; padding:10px;">


<h2 class="primary-color">Tenant Assignment </h2>
						<div class="accordion" id="accordion2">
							<?php foreach($blockArray as $block):?>
								<div class="accordion-group">
										<div class="accordion-heading">
												<h3><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?=$block?>"><i class="e-icon-up-open-big"></i> Block <?=$block?></a></h3>
										</div>
										<!--/ .accordion-heading-->
										<div id="collapse<?=$block?>" class="accordion-body collapse ">
												<div class="accordion-inner">
														<ul style="display: block;">
			<?php foreach($units as $row):?>

			<?php if($row->block[0] == $block) {?>

			<li class="<?= strtolower($row->block[0]).$row->number?>"
				id="<?=$row->unit_id?>"><span class="clicky"
				onclick="unitClick('<?php echo strtolower($row->block[0]).$row->number;?>', '<?=$row->unit_id?>')">
					<?=$row->block[0].$row->number?> - <?=round($row->width, 2)?>m x <?=round($row->length, 2)?>m
					<?php if($row->occupied > 0) {?> (<?=$row->tenant_name?>) <?php }?>
			</span> 
			<?=form_open('admin/assign_tenant')?> 
			<?=form_hidden('unit_id', $row->unit_id)?>
			<?=form_dropdown('tenants', $tenantArray, $row->tenant_id)?>
<?=form_submit('submit',"Assign Tenant")?>

			<?=form_close()?>
			</li>


			<?php } ?>
			<?php endforeach;?>
		</ul>
												</div>
												<!--/ .accordion-inner-->
										</div>
										<!--/ .accordion-body-->
								</div>
								<!--/ .accordion-group-->
								<?php endforeach;?>
								
								
						</div>
					</div>