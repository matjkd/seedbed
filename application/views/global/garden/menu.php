
<ul>
    <li><?= anchor('/', 'home') ?></li>
    <li><?= anchor('/about', 'about us') ?></li>
    <li><?= anchor('/services', ' our services') ?></li>

    <li><?= anchor('/testimonials', 'testimonials') ?></li>

    <li><?= anchor('/contact', 'contact us') ?></li>


    <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    $role = $this->session->userdata('role');
    if ($is_logged_in != 0 || $role == 1) {

        echo anchor('admin', 'Admin');
    }
    ?>

</ul>

