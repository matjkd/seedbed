
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>

        <?= $this->load->view('template/' . $this->config_theme . '/header') ?>

    </head>

    <body>



        <!-- Primary Page Layout
        ================================================== -->

        <!-- Delete everything in this .container and get started on your own site! -->
        <div id="top_heading">
            <div class="container">
                <div class="sixteen columns" >
                    <h2 class="remove-bottom" >Loughton Seedbed Centre</h2>

                </div>
            </div>
        </div>

        <div class="big_menu">
            <div class="container">

                <div class="four columns"><img id="headerimage" src="<?= base_url() ?>images/photos/unit1.jpg"/></div>
                <div class="four columns"><img id="headerimage" src="<?= base_url() ?>images/photos/unit2.jpg"/></div>
                <div class="eight columns" id="headertext"><img src="<?= base_url() ?>images/titles/seedbed/big_heading.png"> </div>


            </div>
        </div>

        <div class="container">
            <div class="sixteen columns mainheading"  >
                <h2>Centre for small businesses</h2>
            </div>
            <div class="eight columns" id="bluebox">
                <div id="bluebox_content">

                    <div class="blue_logo"><img src="<?= base_url() ?>images/icons/white/unit.png"/></div>

                    <div class="blue_text">
                        <h4>Welcome</h4>
                        <p>Our site is currently being redesigned. Please check back soon, or contact us using the details below</p>
                    </div>
                </div>

            </div>


            <div class="eight columns" id="bluebox">
                <div id="bluebox_content">
                    <div class="blue_logo"><img src="<?= base_url() ?>images/icons/white/roundarrow.png"/></div>
                    <div class="blue_text">
                        <h4>Easy In Easy Out</h4>
                        <p>Monthly ‘Easy In Easy Out’ licence. Contact us for more info.</p>
                    </div>
                </div>

            </div>





            <div class="sixteen columns mainheading"  >
                <h2>Facilities and Benefits</h2>
            </div>
            <div class="eight columns">

                <p>The Loughton Seedbed Centre offers the small business or a person embarking on a business venture, 
                    high quality modern accommodation with the use of technical facilities and administrative back up
                    on a monthly ‘Easy In Easy Out’ licence basis.</p>

                <p>Security, insurance, repairs and utilities are included with the cost shared between
                    occupants to create an affordable and supported environment with permanent on 
                    site staff assistance and telephone answering.
                </p>
            </div>


            <div class="four columns">

                
                <p><strong>EFI (Loughton) Ltd</strong><br/>
                    The Loughton Seedbed Centre<br/>
                    Langston Road<br/>
                    Loughton<br/>
                    Essex<br/>
                    IG10 3TQ<br/><br/>


            </div>

            <div class="four columns">

                <p>

                    Tel No: 020 8787 7000<br/>
                    Fax No: 020 8787 7003<br/>
                    Email:  <a href="mailto:info@seedbedloughton.com">info@seedbedloughton.com</a></p>
            </div>


        </div><!-- container -->
        <div class="sixteen columns" id="footerblock">
            <div class="container">
                <div class="eight columns">
Site being developed by <a href="http://www.redstudio.co.uk">redstudio design limited</a>
                </div>
                <div class="eight columns">

                    &nbsp;

                </div>


            </div>


        </div>




        <?= $this->load->view('template/' . $this->config_theme . '/footer') ?>

        <!-- End Document
        ================================================== -->
    </body>
</html>