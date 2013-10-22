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
                <p>180 Moggill Road<br />Taringa<br /> Queensland 4068<br />Australia</p>
                <p>Ph: (07) 38712500 <br />
                Fax: (07) 38711200<br />
                E-mail: <a href="mailto:admin@cameronbird.com.au">admin@cameronbird.com.au</a></p>
            </div>
			<h3>Directions</h3>
            <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=180+Moggill+Road,+Taringa&amp;aq=&amp;sll=-35.358635,149.10482&amp;sspn=0.599192,1.143951&amp;ie=UTF8&amp;hq=&amp;hnear=180+Moggill+Rd,+Taringa+Queensland+4068&amp;t=m&amp;z=14&amp;ll=-27.492868,152.980095&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=180+Moggill+Road,+Taringa&amp;aq=&amp;sll=-35.358635,149.10482&amp;sspn=0.599192,1.143951&amp;ie=UTF8&amp;hq=&amp;hnear=180+Moggill+Rd,+Taringa+Queensland+4068&amp;t=m&amp;z=14&amp;ll=-27.492868,152.980095" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        </div>
	</div>
</div>

<!-- Footer
================================================== -->
<?php include("includes/tpl_footer.php"); ?>