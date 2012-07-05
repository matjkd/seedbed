<div id="contact_form">
    <?= form_open('email/send'); ?>
    <br/>
    <p class="form_name">
        <?= form_label('Full Name') ?>
        <?= form_input('name', set_value('name')) ?>
    </p>

    <p class="form_phone">
        <?= form_label('Phone Number') ?>
        <?= form_input('phone', set_value('phone')) ?>
    </p>
    <?= form_label('Email') ?>
    <p class="form_email">
        <?= form_input('email') ?>
    </p>
    <?= form_label('Subject') ?>
    <p class="form_subject">
        <?= form_input('subject') ?>
    </p>
    <?= form_label('Message') ?>
    <p class="form_message">
        <?= form_textarea('message') ?>
    </p>
 <?= form_label('How did you hear about us?') ?>
 <?php $hearAboutUs =array(
 		'search' => 'Search Engine',
 		'recomendation' => 'Recommendation',
 		'newspaper' => 'Newspaper',
 		'localSign' => 'Local Sign',
 		'agent' => 'Agent',
 		'other' => 'Other',
 		
 		); ?>
    <p class="form_hear">
        <?= form_dropdown('hearabout', $hearAboutUs) ?>
    </p>
    Enter the word you see below<br/>



    <input type="text" name="captcha" value="" /><?= form_label($captcha['image']) ?>
</div>
<?= form_hidden('ip_address', $this->input->ip_address()) ?>
<?= form_hidden('time', $captcha['time']) ?>
<div id="contact_submit"><?= form_submit('submit', 'Submit') ?></div><br/>
<?=
form_close()?>