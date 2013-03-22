<!DOCTYPE html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>The Cameron Bird Group - <?php echo $title ?></title>
	<meta name="description" content="The Cameron Bird group has been on the forefront of property investment for over 30 years. The team has dedicated themselves to helping others achieve wealth creation and early retirement through smart property investment. Professionals that not only provide subscribers with a wealth of experience and knowledge but are also backed by an exclusive diversified collection of property investment opportunities.">
    <meta name="keywords" content="buying a home, for sale, properties for sale, unit for sale, townhouse for sale, house for sale, the Cameron bird group, david bird, jack bird, cash flow positive properties, property experts, finance, high depreciation, free cash flow analyser, Brisbane, taringa, property advice, Gladstone, mining properties, high capital gain, high capital growth">
	<meta name="author" content="Light Is Everything :: http://lightiseverything.com.au">

	<!-- Mobile Specific Metas
  ================================================== -->

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/fw_base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/fw_layout.css">
    <link rel="stylesheet" href="css/plugins/camera.css">
    <link rel="stylesheet" href="css/plugins/elastislide.css">
    <link rel="stylesheet" href="css/plugins/prettyPhoto.css">
    <link rel="stylesheet" href="css/kickstart/kickstart.css">
    <link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>

    <!-- @FontFace /=Disabled=/
    <link rel="stylesheet" href="css/fonts/stylesheet.css">-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"> -->
	<!--[if IE]> <link rel="stylesheet" href="css/ie_fix.css"> <![endif]-->

	<!-- JS
	================================================== -->
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
    <script type="text/javascript" src="js/jquery.elastislide.js"></script>
    <script type='text/javascript' src='js/camera.min.js'></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
    <script type='text/javascript' src='js/kickstart.js'></script>
    <script type='text/javascript' src='js/prettify.js'></script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script type="text/javascript" src="js/respond.src.js"></script>
        <script type="text/javascript" src="js/ie_fix.js"></script>
	<![endif]-->

    <?php if ($title == 'Home') {
    echo"<link rel='stylesheet' href='css/plugins/simpleOverlay.css'>";
    echo"<script type='text/javascript' src='js/jquery.tools.min.js'></script>";} ?>
	<script type='text/javascript' src='js/fw_ui.js'></script>
    <script type='text/javascript' src='js/fw_scripts.js'></script>

    <!--Microsoft. Delete if not required -->
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>

<?php if ($title == 'Home') { ?>
    <div class="simple_overlay" id="mies1">
        <h1><img alt="The Cameron Bird Group" src="images/cbird-text.png" /></h1>
        <h2>Join Australia's most advanced property investment portal now for free.</h2>
        <p>Over 10,000 members and 35 years of helping investors.</p>
        <p class="mandatory"><span>*</span> Mandatory fields</span></p>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
                <label for="fname">First Name <em>*</em> <span class="error not-here">Please enter your First Name</span></label>
                <input type="text" name="fname" id="fname" />
                <label for="lname">Last Name <em>*</em> <span class="error not-here">Please enter your Last Name</span></label>
                <input type="text" name="lname" id="lname" />
                <label for="email">Email <em>*</em> <span class="error not-here">Please enter a valid Email</span></label>
                <input type="text" name="email" id="email" />
                <label for="phone">Phone <em>*</em> <span class="error not-here">Please enter your Phone number</span></label>
                <input type="text" name="phone" id="phone" />
                <input class="submit" type="submit" name="button" id="button" value="Register Now" />
                <span class="response" aria-live="polite">
                  <? require_once('site-handlers/sign-up.php');
                    if (isset($_GET['submit'])) {
                      if($_GET['submit']){ echo signup(); }
                    } ?>
                </span>
                <a href="#" class="cancel">No thanks</a>
        </form>
    </div>
<?php } ?>
<div class="main_wrapper">
	<!-- Header Begin
    ================================================== -->
	<header>
    	<div class="red_line"><!-- Header Blue Line --></div>
        <a href="index.php" class="logo"><img src="images/cameron-bird-group.jpg" alt="The Cameron Bird Group - Your Propery Partners" /></a>
        <div class="alerts-form">
            <h2>Free Property Investments Alerts</h2>
            <p>Never miss out the biggest investment opportunites.</p>
            <a href="http://lightiseverything.com.au/cameronbird/contacts.php" class="btn_readmore arrow_right">Sign-up now!<span class="ico_arrow">&rarr;</span></a>
        </div>
        <div class="login-form">
            <h2>Members only portal</h2>
            <p style="margin:0; padding:0">Coming soon, when you sign up for free property investment alerts you'll gain access to our exclusive member's only portal.</p>
			<p style="text-align:right; margin:0; padding:0"
>English&nbsp;&nbsp;&nbsp;<a href="cn/index.php">中文</a></p>
        </div>
        <!-- ~#Main Navigation -->
        <nav class="head_nav">
			<ul class="mainmenu">
	            <li class="act"><a href="index.php">Home</a></li>
                <li class="sep"></li>
	            <li>
                	<a href="about-us.php">About us</a>
                	<ul class="sub_menu level1">
                    	<li><a href="about-us.php">About us</a></li>
                        <li>
                        	<a href="our-property-criteria.php">Our property criteria</a>
                        </li>
                        <li><a href="our-research-process.php">Our research process</a></li>
                        <li><a href="our-purchase-process.php">Our property purchase process</a></li>
                    </ul>
                </li>
                <li class="sep"></li>
                <li>
                	<a href="financial-services.php">Services</a>
                    <ul class="sub_menu level1">
                    	<li><a href="financial-services.php">Financial services</a></li>
                        <li><a href="cash-flow-analyser.php">Free Property Cash Flow Analyser</a></li>
                    </ul>
                </li>
                <li class="sep"></li>
                <li>
                	<a href="properties.php">Properties</a>
                    <ul class="sub_menu level1">
                    	<li><a href="properties.php#gracemere">Gracemere (Mining)</a></li>
                        <li><a href="properties.php#thailand">Thailand (Overseas Investment)</a></li>
                        <li><a href="properties.php#cloncurry">Cloncurry (Remote Mining)</a></li>
                        <li><a href="properties.php#kawana">Kawana Hospital Precinct (Health Sector)</a></li>
                    </ul>
                </li>
                <li class="sep"></li>
                <li>
                	<a href="property-investments.php">Property Investment Alerts</a>
                </li>
                <li class="sep"></li>
                <li><a href="http://lightiseverything.com.au/cameronbird/contacts.php">Contact Cameron Bird Group</a></li>
            </ul>
            <div class="menu_indicator"></div>
		</nav>
        <nav class="mobile_nav">
        	<a href="javascript:void(0)" class="menu_toggle">Menu</a>
        	<ul class="mobile_menu">
            </ul>
        </nav>
	</header>