
<ul>
    <li><?= anchor('/', 'Home') ?></li>
    <li><?= anchor('/news', 'News') ?></li>
 

    <li><?= anchor('/map', 'Map') ?></li>
    <li><?= anchor('/workspaces', 'Terms') ?></li>
        <li><?= anchor('/mailbox', 'Virtual Office') ?></li>
        
        
          <li><?= anchor('/terms', 'FAQ') ?></li>
    <li><?= anchor('/contact', 'Contact') ?></li>


    <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    $role = $this->session->userdata('role');
    if ($is_logged_in != 0 || $role == 1) {

        echo anchor('admin', 'Admin');
    }
    ?>

</ul>



