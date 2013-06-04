
<?php if($this->session->flashdata('message')) { ?>
<div class="container">
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?=$this->session->flashdata('message')?>
</div>
</div>
<?php } ?>

