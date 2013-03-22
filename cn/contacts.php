<?php
$title = 'Contact';
  include("includes/tpl_header.php"); ?>

<!-- Main Container
================================================== -->
<div id="contact-us" class="site_container container">
    <div class="top28">
        <h2>聯繫Cameron Bird Group</h2>
	    <div class="columns seven">
        	<h3>註冊物業投資快訊</h3>
            <p>我們挑選出整個澳大利亞和其他海外地區最好的物業投資機會，并要求符合 <a href="our-property-criteria.php">我們嚴格的投資標準</a>， 所以經常物業出售的數量有限和有時間限制。</p>
            <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
                <div class="columns two contact_label alpha">
                    <label for="name">您的姓名</label>
                </div>
                <div class="columns five contact_input omega">
                    <input type="text" name="name" id="name" />
                </div>
                <div class="columns two contact_label alpha">
                    <label for="user-name">用戶名</label>
                </div>
                <div class="columns five contact_input omega">
                    <input type="text" name="user-name" id="user-name" />
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="columns two contact_label alpha">
                    <label for="email">E-mail</label>
                </div>
                <div class="columns five contact_input omega">
                  	<input type="text" name="email" id="email" />
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="columns two contact_label alpha">
                    <label for="phone">電話</label>
                </div>
                <div class="columns five contact_input omega">
                  	<input type="text" name="phone" id="phone" />
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="columns two contact_label alpha">
                    <label for="address">地址</label>
                </div>
                <div class="columns five contact_input omega">
					<input type="text" name="address" id="address" />
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="columns two contact_label alpha">
                    <label for="suburb">地區</label>
                </div>
                <div class="columns five contact_input omega">
                    <input type="text" name="suburb" id="suburb" />
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="columns two contact_label alpha">
                    <label for="state">州</label>
                </div>
                <div class="columns five contact_input omega">
                    <input type="text" name="state" id="state" />
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="columns two contact_label alpha">
                    <label for="postcode">郵政編碼</label>
                </div>
                <div class="columns five contact_input omega">
                    <input type="text" name="postcode" id="postcode" />
                </div>
                <div class="clear"><!-- ClearFix --></div>
                <div class="columns five contact_button alpha omega offset-by-two">
					<input type="submit" name="button" id="button" value="寄出電郵" />
                    <span class="response" aria-live="polite">
                      <? require_once('site-handlers/contact-us.php'); if($_GET['submit']){ echo contactUs(); } ?>
                    </span>
                </div>
                <div class="clear"><!-- ClearFix --></div>
            </form>
        </div>
        <div class="columns six offset-by-two">
        	<div class="add-bottom">
                <h3>相關查詢</h3>
                <p>180 Moggill Road<br />Taringa<br /> Queensland 4068<br />Australia</p>
                <p>電話: (07) 38712500 <br />
                傳真: (07) 38711200<br />
                E-mail: <a href="mailto:admin@cameronbird.com.au">admin@cameronbird.com.au</a></p>
            </div>
			<h3>地點</h3>
            <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=180+Moggill+Road,+Taringa&amp;aq=&amp;sll=-35.358635,149.10482&amp;sspn=0.599192,1.143951&amp;ie=UTF8&amp;hq=&amp;hnear=180+Moggill+Rd,+Taringa+Queensland+4068&amp;t=m&amp;z=14&amp;ll=-27.492868,152.980095&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=180+Moggill+Road,+Taringa&amp;aq=&amp;sll=-35.358635,149.10482&amp;sspn=0.599192,1.143951&amp;ie=UTF8&amp;hq=&amp;hnear=180+Moggill+Rd,+Taringa+Queensland+4068&amp;t=m&amp;z=14&amp;ll=-27.492868,152.980095" style="color:#0000FF;text-align:left">查看更大的地圖</a></small>
        </div>
	</div>
</div>

<!-- Footer
================================================== -->
<?php include("includes/tpl_footer.php"); ?>