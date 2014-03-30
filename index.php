<!DOCTYPE html>

<?php
// login
#require '/opt/simplesamlphp/lib/_autoload.php';
#$as = new SimpleSAML_Auth_Simple('default-sp');
#$as->requireAuth();
?>


<title>Webapps — Studentmediene</title>

<link rel="stylesheet" type="text/css" href="//static.iapc.utwente.nl/theme/unboxing/style/style.css" />
<link rel="stylesheet" type="text/css" href="//static.iapc.utwente.nl/theme/unboxing/style/webapps.css" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge; FF=3; OtherUA=4; chrome=1" />
<link rel="stylesheet" type="text/css" href="//static.iapc.utwente.nl/theme/unboxing/style/animate/webkit.css" />
<style type="text/css">
#nav a, #nav form {
	background: #008;
	background-image: -ms-linear-gradient(top, #009, #006);
	background-image: -moz-linear-gradient(top, #009, #006);
	background-image: -webkit-gradient(linear, left top, left bottom, from(#009), to(#006));
	background-image: -o-linear-gradient(top, #009, #006);
	background-image: linear-gradient(top, #009, #006);
	filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr=#000099, EndColorStr=#000066, GradientType=0);
	border: 0.075em solid #00a;
	border-bottom: 0.075em solid #006;
	border-right: 0.075em solid #006;
	box-shadow:inset 0 0 0.1em #007;
}
#nav a:hover, #nav a:active, a.button:hover, a.button:active {
	background: #006;
	background-image: -ms-linear-gradient(top, #006, #004);
	background-image: -moz-linear-gradient(top, #006, #004);
	background-image: -webkit-gradient(linear, left top, left bottom, from(#007), to(#005));
	background-image: -o-linear-gradient(top, #006, #004);
	background-image: linear-gradient(top, #006, #004);
	filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr=#000066, EndColorStr=#000044, GradientType=0);
	border-color: #005;
	box-shadow:inset 0 0 0.625em #005;
}
a.button:hover {
	background: #009;
	background-image: -ms-linear-gradient(top, #00a, #007);
	background-image: -moz-linear-gradient(top, #00a, #007);
	background-image: -webkit-gradient(linear, left top, left bottom, from(#00a), to(#007));
	background-image: -o-linear-gradient(top, #00a, #007);
	background-image: linear-gradient(top, #00a, #007);
	filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr=#0000aa, EndColorStr=#000077, GradientType=0);
	border-color: #00b;
	box-shadow:inset 0 0 0.1em #009;
}
#nav a:active, a.button:active {
	background: #005;
	background-image: -ms-linear-gradient(top, #006, #004);
	background-image: -moz-linear-gradient(top, #006, #004);
	background-image: -webkit-gradient(linear, left top, left bottom, from(#006), to(#004));
	background-image: -o-linear-gradient(top, #006, #004);
	background-image: linear-gradient(top, #006, #004);
	filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr=#000066, EndColorStr=#000044, GradientType=0);
	box-shadow:inset 0 0 0.625em #004;
	border-color: #005;
}
</style>
<ul id="nav">
	<li><a href="//www.studentmediene.no/" onmousedown="return false;">Studentmediene</a></li>
	<li><a href="//dusken.no/" onmousedown="return false;">Dusken</a></li>
	<li><a href="//ibok.no/" onmousedown="return false;">iBok</a></li>
	<li><a href="//www.smint.no/" onmousedown="return false;">Intranet</a></li>
</ul>

<div id="static" class="big box icons">

<h1>Felles</h1>
<ul class="icons" onmousedown="return false;">
<!--
	<li><a href="//booking.smint.no/" title="Booking"><img src="static/icon/booking" alt="Booking" /></a></li>
	<li><a href="//feil.smint.no/" title="Feil"><img src="static/icon/feil" alt="Feil" /></a></li>
-->
	<li><a href="//wiki.smint.no/" title="Wiki"><img src="//static.iapc.utwente.nl/theme/unboxing/icon/wiki" alt="Wiki" /></a></li>
</ul>

<h1>Redaksjonelt</h1>
<ul class="icons" onmousedown="return false;">
	<li><a href="//dusken.no/admin" title="Chimera"><img src="static/icon/dusken.svg" alt="Chimera" /></a></li>
</ul>

<h1>Teknisk</h1>
<ul class="icons" onmousedown="return false;">
	<li><a href="//ipa.smint.no/"
    	title="freeIPA"><img
src="//static.iapc.utwente.nl/theme/unboxing/icon/phpldapadmin"
alt="freeIPA" /></a></li>
	<li><a href="//phpmyadmin.smint.no/" title="phpMyAdmin"><img src="//static.iapc.utwente.nl/theme/unboxing/icon/phpmyadmin" alt="phpMyAdmin" /></a></li>
	<li><a href="//idp.smint.no/simplesaml/saml2/idp/metadata.php?output=xhtml" title="SAML metadata"><img src="//static.iapc.utwente.nl/theme/unboxing/icon/idp" alt="SAML metadata" /></a></li>
</ul>

</div>

<p id="footer">
	<span>Product of <strong>Studentmediene i Trondheim AS</strong></span>
	<span>Design <strong>Yørn de Jong</strong></span>
</p>

