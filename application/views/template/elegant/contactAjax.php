
				

<form id="callback-form" method="post" action="<?=base_url()?>email/contactform" accept-charset="utf-8">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button>
        <h3 id="myModalLabel">Get in Contact</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="span3">
            <p> Enter Your details</p>
            <div class=" input-prepend"> <span class="add-on"><i class="icon-user"></i></span>
              <input style="width:180px" class="" id="formname" type="text" name="name" placeholder="Name">
            </div>
            
            <div class="input-prepend" style="clear:both;"> <span class="add-on"><i class="icon-phone"></i></span>
              <input style="width:180px" class="" id="formphone" type="text" name="phone" placeholder="Phone Number">
            </div>
            <div class=" input-prepend"> <span class="add-on"><i class="icon-envelope"></i></span>
              <input style="width:180px" class="" id="formemail" type="text" name="email" placeholder="Email">
            </div>
            
            <?php if(isset($unitID)) { ?>
            <div class="input-prepend"> <span class="add-on"><i class="icon-map-marker"></i></span>
              <input style="width:180px" class="" id="formemail" type="text" name="unit" placeholder="unit" value="<?=$unitID?>">
            </div>
            	
            	
            	<?php } ?>
          </div>
          <div class="span2">
           
           <p><?= form_label('Message') ?></p>
    <p class="form_message">
        <?= form_textarea('message') ?>
    </p>
   
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"> Close </button>
        <button class="btn btn-primary" type="submit"> Send Message </button>
      </div>
    </form>
    
<script src='<?=base_url() ?>themes/elegant/assets/js/custom.js'></script> 