<?php
$title = 'Contact';
  include("includes/tpl_header.php"); ?>

<!-- Main Container
================================================== -->
<div id="contact-us" class="site_container container">
    <div class="top28">
        <h2>Contact Cameron Bird Group</h2>
	    <div class="columns seven">
        	<h3>Property Investment Alerts Signup</h3>
            <p>We source the best possible investment properties we can find throughout Australia and overseas that fit <a href="our-property-criteria.php">our strict investment criteria</a>, which often have limited availability and strict timeframes - so don't miss out.</p>
            <p class="mandatory"><span>*</span> Mandatory fields</span></p>
            <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
                <div class="contact_label">
                  <label for="fname">First Name <em>*</em> <span class="error not-here">Please enter your First Name</span></label>
                </div>
                <div class="contact_input">
                  <input type="text" name="fname" id="fname" />
                </div>
                <div class="contact_label">
                  <label for="lname">Last Name <em>*</em> <span class="error not-here">Please enter your Last Name</span></label>
                </div>
                <div class="contact_input">
                  <input type="text" name="lname" id="lname" />
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="contact_label">
                  <label for="email">Email <em>*</em> <span class="error not-here">Please enter a valid Email</span></label>
                </div>
                <div class="contact_input">
                  <input type="text" name="email" id="email" />
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="contact_label">
                  <label for="phone">Phone <em>*</em> <span class="error not-here">Please enter your Phone number</span></label>
                </div>
                <div class="contact_input">
                  <input type="text" name="phone" id="phone" />
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="contact_button">
					<input type="submit" name="button" id="button" value="Send Email" />
                    <span class="response" aria-live="polite">
                      <? require_once('site-handlers/contact-us.php');
                        if (isset($_GET['submit'])) {
                          if($_GET['submit']){ echo contactUs(); }
                        } ?>
                    </span>
                </div>
                <div class="clear"><!-- ClearFix --></div>
            </form>
        </div>
        <div class="columns six offset-by-two">
        	<div class="add-bottom">
                <h3>General Inquiries</h3>
                <p>PO Box 1566<br>Toowong<br>Queensland 4066<br>Australia</p>
                <p>Ph: (07) 38712500 <br />
                Fax: (07) 38711200<br />
                E-mail: <a href="mailto:admin@cameronbird.com.au">admin@cameronbird.com.au</a></p>
            </div>
			<h3>Directions</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14158.80437670608!2d152.9831172!3d-27.47856355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9150c0e176822d%3A0x502a35af3de9b80!2sToowong+QLD!5e0!3m2!1sen!2sau!4v1402966417769" width="400" height="300" frameborder="0" style="border:0"></iframe>
        </div>
	</div>
</div>

<!-- Footer
================================================== -->
<?php include("includes/tpl_footer.php"); ?>