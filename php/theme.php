<?php global $path; ?>
<!doctype html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
  <!--[if gt IE 8]><!--> <html> <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - Guide | OpenEnergyMonitor</title>
    <meta name="author" content="Glyn Hudson">
    <meta name="description" content="Connect to network & create account">
    
    <meta name="viewport" content="width=device-width">
    <link rel="canonical" href="http://guide.openenergymonitor.org/setup/connect/">

    <meta property="fb:app_id" content="xxxxxxxxxxxxxxx">
    <meta property="og:title" content="1. Connect">
    <meta property="og:site_name" content="Guide | OpenEnergyMonitor">
    <meta property="og:url" content="http://guide.openenergymonitor.org/setup/connect/">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Connect to network & create account">
    <meta property="og:image" content="<?php echo $path; ?>source/images/favicon-192x192.png">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@openenergymon">
    
    <meta name="twitter:title" content="1. Connect">
    <meta name="twitter:description" content="Connect to network & create account">
    <meta name="twitter:image" content="<?php echo $path; ?>source/images/favicon-192x192.png">

    <link href="<?php echo $path; ?>css/screen.css" media="screen, projection" rel="stylesheet">
    <link href="/atom.xml" rel="alternate" title="Guide | OpenEnergyMonitor" type="application/atom+xml">
    <link rel='shortcut icon' href='<?php echo $path; ?>source/images/favicon.ico' />
    <link rel='icon' type='image/png' href='<?php echo $path; ?>source/images/favicon-192x192.png' sizes='192x192' />

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="<?php echo $path; ?>source/images/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="<?php echo $path; ?>source/images/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $path; ?>source/images/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo $path; ?>source/images/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $path; ?>source/images/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $path; ?>source/images/favicon-16.png">
    <link rel="apple-touch-icon" href="<?php echo $path; ?>source/images/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $path; ?>source/images/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $path; ?>source/images/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $path; ?>source/images/favicon-144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $path; ?>source/images/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $path; ?>source/images/favicon-180.png">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:light,bold&amp;subset=Latin" rel="stylesheet"> <!-- Ubuntu font -->
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?php echo $path; ?>source/images/favicon-144.png">
    <meta name="msapplication-config" content="<?php echo $path; ?>source/images/browserconfig.xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!--<link href='https://fonts.googleapis.com/css?family=Raleway:400,400italic,700' rel='stylesheet' type='text/css' -->

  </head>

<body >

<style>

:target:before {  /* target not hidden by fixed top bar */
  content : "";
  display : block;
  height  : 45px;
  margin  : -45px 0 0;
}

@font-face {
  font-family : "oemFont";
  src         : url(<?php echo $path; ?>font/Ubuntu-OEM-Light.ttf);
}

html, body {
  font-family     : "oemFont", sans-serif;
  margin          : 0;
  height          : 100vh;
  overflow-wrap   : break-word;
  word-wrap       : break-word;
  scroll-behavior : smooth;
  color: #000 !important;
}

html {
  min-height: 100vh;
}

.grid {
  margin-bottom: 0;
}

a:visited, .a:hover, a:focus, a {
  color: #219dd2;
}

/*--------------------------------------------
custom header...
--------------------------------------------*/

.communityWrapper {
  position: relative;
  box-sizing: border-box;
  margin: 0 auto;
  width: 100%;
  height: 42px;
}

@media (min-width: 1080px) {
  .communityWrapper {
  width: 1080px;
  }
}

@media screen and (max-width: 400px) {
  .oemWrap {
    display: none;
  }
}

.fa-navicon {
  display: none;
  cursor: pointer;
  font-size: 30px;
  line-height: 42px;
  position: absolute;
  left: 0;
  color: #ffffff;
  padding-left: 12px;
  z-index: 9997;
}

@media screen and (max-width: 1079px) {
  .fa-navicon {
    display: inline-block;
  }
}

.titleHolder {
  position: fixed;
  top: 0;
  width: 100%;
  height: 42px;
  background-color: #44b3e2;
  -webkit-box-shadow: 0 -2px 4px 2px #000;
  -moz-box-shadow: 0 -2px 4px 2px #000;
  box-shadow: 0 -2px 4px 2px #000;
  overflow: hidden;
  z-index: 999;
}

.titleIcon {
  position: absolute;
  height: 42px;
  padding: 0 0 0 7px;
  text-align: center;
  line-height: 42px;
  color: #ffffff;
  vertical-align: top;
}

  .titleIcon i {
    vertical-align: middle;
    font-size: 32px;
    line-height: 42px;
  }

.thisTitle {
  position: absolute;
  box-sizing: border-box;
  left: 42px;
  right: 0;
  height: 42px;
  padding: 5px 0 5px 0;
  text-align: left;
  color: #ffffff;
  line-height: normal;
  vertical-align: top;
}

  .thisTitle a {
    position: absolute;
    top: 0;
    color: #ffffff;
  }

@media screen and (max-width: 1079px) {
  .titleIcon {
    left: auto;
    right: 0;
    padding: 0 7px 0 0;
  }

  .thisTitle {
    right: 42px;
    left: 0;
    text-align: right;
  }

    .thisTitle a {
      padding-right: 0;
    }
}

.thisTitle-top {
  top: 0;
  height: 60%;
  font-size: 18px;
}

.thisTitle-bottom {
  bottom: 0;
  height: 40%;
  font-size: 12px;
}

@media screen and (max-width: 1080px) {
  .navigationTitle {
    display: none;
  }
}

/*--------------------------------------------
    search...
--------------------------------------------*/
  
.searchBox {
  width: 100%;
  height: 100%;
  top: 0;
  position: absolute;
  background-color: rgba(0,0,0,0.8);
  color: #fff;
  display: none;
  cursor: pointer;
  z-index: 99999999999999999999999;
}

.searchBox form {
  margin: auto;
}

.searchBox input[type=submit] {
  cursor: pointer;
  padding: 10px;
  font-size: 20px;
  font-weight: bold;
  background-color: #44b3e2;
  color: #fff;
  border: none;
  -webkit-transition: background-color 500ms linear;
  -ms-transition: background-color 500ms linear;
  transition: background-color 500ms linear;
}

.searchBox input[type=submit]:hover {
  background-color: #77c8ea;
}

.searchBox input[type=text] {
  padding: 10px;
  font-size: 20px;
  border: none;
}

.searchText {
  width: 0;
}

.searchIcon {
  cursor: pointer;
}

/*--------------------------------------------
site links on larger screens...
--------------------------------------------*/

.navigation {
  position: absolute;
  display: inline-block;
  top: 0;
  right: 0;
  margin-right: 6px;
  height: 42px;
  min-width: 774px;
  overflow: visible;
  padding-right: 7px;
}

@media screen and (min-width: 1080px) {
  .navigation {
    position: relative;
    float: right;
    display: inline-block;
    margin: 0;
  }
}

.navigation ul {
  list-style-type: none;
  float: right;
  top: 0;
  margin: 0;
  padding: 0;
  height: 100%;
  display: block;
  min-width: 719px;
}

.navigation ul li {
  float: left;
  background-color: #44b3e2;
}

.navigation ul li a {
  display: block;
  line-height: 42px;
  font-family:"oemFont";
  font-size: 16px;
  text-align: center;
  padding-left: 10px;
  padding-right: 10px;
  color: #ffffff;
}

@media screen and (min-width: 1080px) {
 .navigation ul li:nth-child(1) {
    width: 88px;
  }
  .navigation ul li:nth-child(2) {
    width: 86px;
  }
  .navigation ul li:nth-child(3) {
    width: 92px;
  }
  .navigation ul li:nth-child(4) {
    width: 123px;
  }
  .navigation ul li:nth-child(5) {
    width: 133px;
  }
  .navigation ul li:nth-child(6) {
    width: 76px;
  }
  .navigation ul li:nth-child(7) {
    width: 80px;
  }
  .navigation ul li:nth-child(8) {
    width: 96px;
  }
}

@media screen and (max-width: 1079px) {
  .navigation {
    display: none;
  }
}

/*--------------------------------------------
site links on smaller screens...
--------------------------------------------*/

.menuFreeze {
  height: 100vh;
  min-height: 100vh;
  overflow: hidden;
}

@media screen and (max-width: 1079px) {

.navigationSmall {
  position: fixed;
  display: none;
  top: 0;
  left: 0;
  height: 100vh;
  margin: 0;
  width: 0;
  font-size: 20px;
  background-color: #44b3e2;
  color: #ffffff;
  box-sizing: border-box;
  overflow: auto;
  min-width: 0;
  padding-right: 0;
  z-index: 999999999;
}

.navigationSmall ul {
  list-style-type: none;
  margin: 0;
  padding-top: 0;
  display: block;
  min-width: 100px;
}

.navigationSmall ul li a {
  box-sizing: border-box;
  font-family: "oemFont";
  font-size: 20px;
  display: block;
  color: #ffffff;
  padding: 0 20px 0 40px;
  height: 12.5vh;
  line-height: 12.5vh;
  min-width: 100px;
  text-align: left;
}

.navigationSmall ul li .fa {
  min-width: 25px;
  }
}

@media screen and (min-width: 1080px) {
  .navigationSmall {
    display: none;
  }
}

.fa {
  text-shadow: 2px 2px 2px rgba(150,150,150,0.5);
}

/*--------------------------------------------
grayed out overlay when menu is active...
--------------------------------------------*/

.blackOut {
  position: fixed;
  display: none;
  top: 0;
  right: 0;
  height: 100vh;
  width: 100vw;
  background-color: rgba(0,0,0,0.5);
  overflow: hidden;
  cursor: pointer;
  z-index: 9999;
}

/*--------------------------------------------
highlight active link...
--------------------------------------------*/

.actoemLink {
  background-color: #368fb4 !important;
}

.actoemLink a {
  color: #ffffff !important;
}

.section {
  display: block;
}

@media screen and (max-width: 1079px) {
  .section {
    box-sizing: border-box;
    position: fixed;
    display: none;
    left: 100px;
    top: 0;
    height: 100vh;
    width: 0;
    overflow: auto;
    background-color: #ffffff;
    z-index: 99999;
  }
  
  .section ul {
    height: 100%;
    padding-bottom: 20px;
    padding-left: 0;
    list-style-type: none;
    margin-left: 0 !important;
    min-width: 170px;
  }
  
  .section ul li {
    padding: 20px 10px 20px 10px;
    min-width: 170px;
  }
  
  .section ul li b {
    padding-left: 10px;
  }
  
  .section ul li a {
    min-width: 170px;
  }

  .section h1 {
    margin-bottom: 20px !important;
    margin-top: 20px !important;
    padding-left: 20px;
  }
  
  .navname {
    display: none;
  }
}

.hero {
  background-color: #ffffff;
  color: #777777 !important;
  margin-top: 0 !important;
}

</style>

<div style="height:42px"></div>
<div class="titleHolder">
  <div class="communityWrapper">
    <i class="fa fa-navicon"></i>
      <div class="titleWrapper">
        <a href="/">
          <div class="titleIcon">
    				<i aria-hidden="true" class="fa fa-book"></i>
    			</div>
    			<div class="thisTitle">
    			  <div class="thisTitle-top">
            		<b>Guide</b>
    				</div>
    				<div class="thisTitle-bottom">
              Open<b>EnergyMonitor</b>
    				</div>
    			</div>
    		</a>
    	</div>
      <div id="siteLinks" class="navigation">
        <ul>
          <li title="the homepage of OpenEnergyMonitor">
            <a href="https://openenergymonitor.org">
              <i class="fa fa-home" aria-hidden="true"></i>
              <span class="navname">Home</span>
            </a>
          </li>
          <li title="you are here: a user guide for the OpenEnergyMonitor system" id="takeIt" class="actoemLink">
            <a href="https://guide.openenergymonitor.org">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span class="navname">Guide</span>
            </a>
          </li>
          <li title="general information about energy monitoring, diversion and sustainability">
            <a href="https://learn.openenergymonitor.org">
              <i class="fa fa-mortar-board" aria-hidden="true"></i>
              <span class="navname">Learn</span>
            </a>
          </li>
          <li title="a definitive list of resources for OpenEnergyMonitor hardware" id="changeIt">
            <a href="https://guide.openenergymonitor.org/technical/resources/">
              <i class="fa fa-list-alt" aria-hidden="true"></i>
              <span class="navname">Resources</span>
            </a>
          </li>
          <li title="the openenergymonitor forum">
            <a href="https://community.openenergymonitor.org">
              <i class="fa fa-comments" aria-hidden="true"></i>
              <span class="navname">Community</span>
            </a>
          </li>
          <li title="keep up with new developments at OpenEnergyMonitor">
            <a href="https://blog.openenergymonitor.org">
              <i class="fa fa-bullhorn" aria-hidden="true"></i>
              <span class="navname">Blog</span>
            </a>
          </li>
          <li title="the official OpenEnergyMonitor online store">
            <a href="https://shop.openenergymonitor.com">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <span class="navname">Shop</span>
            </a>
          </li>
          <li title="search for something on OpenEnergyMonitor">
      			<a class="searchIcon">
      				<i aria-hidden="true" class="fa fa-search"></i>
      				<span class="navname">Search</span>
      			</a>
      		</li>
        </ul>
      </div>
  </div>
</div>
<div class="searchBox">
  <form target="_blank" id="searchform" action="https://www.google.com/cse">
    <div>
      <input type="hidden" name="cx" value="006198118389747886812:_nmxikw563w" />
      <input type="hidden" name="ie" value="UTF-8" />
      <input type="text" class="searchText" value="" name="q" id="q" autocomplete="off" />
      <input type="submit" id="searchsubmit" name="sa" value="Search" />
    </div>
  </form>
</div>
<div style="position:relative;width:100%;top:0;height:20px;z-index:-99;"></div>


<div class="grid-wrapper">
<div class="grid grid-center">

<div class="grid__item two-thirds lap-one-whole palm-one-whole">


<article class="page">

<header>
    <h1 class="title indent">
      <?php echo $title; ?>
    </h1>
  </header>
  <hr class="divider">

  <?php echo $content; ?>
</article>


</div>


<aside id="sidebar" class="grid__item one-third lap-one-whole palm-one-whole">
<div class="grid">

  

  
  <!--<div class="searchtool">

  
  <form action="https://encrypted.google.com/search" method="get">
    <fieldset role="search">
      <input type="hidden" name="q" value="site:guide.openenergymonitor.org" />
      <input class="search" type="text" name="q" results="0" placeholder="Search..." />
      <button type="submit">Search</button>
    </fieldset>
  </form>
  </div>-->
  
    <section class="aside-module grid__item one-whole lap-one-half">
    <div class='section'>
    <?php echo view("menu.php",array()); ?>
    </div>
<gcse:search></gcse:search>
</section>
  

    
</div>
</aside>

</div>
</div>

<footer>
  <div class="grid-wrapper">
  <div class="grid">
    <div class="grid__item">
      <div class="copyright">

  <a rel="me" href='https://twitter.com/openenergymon'><i class="icon-twitter"></i></a>
  <a rel="me" href='https://github.com/openenergymonitor/guide'><i class="icon-github"></i></a>
  <a rel="me" href='http://blog.openenergymonitor.org'><i class="icon-bullhorn"></i></a>

  <div class="credit">
    Website powered by <a href='http://jekyllrb.com/'>Jekyll</a> and <a href='https://github.com/coogie/oscailte'>Oscalite</a>.<br />
    Hosted by <a href='https://pages.github.com/'>GitHub</a> and served by <a href='https://cloudflare.com'>CloudFlare</a>.
  </div>
  
</div>
    </div>
  </div>
</div>
</footer>

<div class="blackOut"></div>
<div id="siteLinks" class="navigationSmall">
  <ul>
    <li title="the homepage of OpenEnergyMonitor">
      <a href="https://openenergymonitor.org">
        <i class="fa fa-home" aria-hidden="true"></i>
        <span class="navname">Home</span>
      </a>
    </li>
    <li title="you are here: a user guide for the OpenEnergyMonitor system" id="takeIt2" class="actoemLink">
      <a href="https://guide.openenergymonitor.org">
        <i class="fa fa-book" aria-hidden="true"></i>
        <span class="navname">Guide</span>
      </a>
    </li>
    <li title="general information about energy monitoring, diversion and sustainability">
      <a href="https://learn.openenergymonitor.org">
        <i class="fa fa-mortar-board" aria-hidden="true"></i>
        <span class="navname">Learn</span>
      </a>
    </li>
    <li title="a definitive list of resources for OpenEnergyMonitor hardware" id="changeIt2">
      <a href="https://guide.openenergymonitor.org/technical/resources/">
        <i class="fa fa-list-alt" aria-hidden="true"></i>
        <span class="navname">Resources</span>
      </a>
    </li>
    <li title="the openenergymonitor forum">
      <a href="https://community.openenergymonitor.org">
        <i class="fa fa-comments" aria-hidden="true"></i>
        <span class="navname">Community</span>
      </a>
    </li>
    <li title="keep up with new developments at OpenEnergyMonitor">
      <a href="https://blog.openenergymonitor.org">
        <i class="fa fa-bullhorn" aria-hidden="true"></i>
        <span class="navname">Blog</span>
      </a>
    </li>
    <li title="the official OpenEnergyMonitor online store">
      <a href="https://shop.openenergymonitor.com">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        <span class="navname">Shop</span>
      </a>
    </li>
    <li title="search for something on OpenEnergyMonitor">
			<a class="searchIcon">
				<i aria-hidden="true" class="fa fa-search"></i>
				<span class="navname">Search</span>
			</a>
		</li>
  </ul>
</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
  var _gaq=[['_setAccount','UA-10321170-5'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  $(document).ready(function(){
    if (!window.jXHR){
      var jxhr = document.createElement('script');
      jxhr.type = 'text/javascript';
      jxhr.src = '/javascripts/libs/jXHR.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(jxhr, s);
    }

    github.showRepos({
      user: 'openenergymonitor',
      count: 5,
      skip_forks: true,
      target: '#gh_repos'
    });
  });
</script>
<script src="<?php echo $path; ?>javascripts/github.js"></script>

<script>

// navigation controls

function openButton() {
  $("html, body").addClass("menuFreeze");
  $(".blackOut").show();
  $(".navigationSmall").show();
  $(".navigationSmall").animate({ width:'100' },"0.5s");
  $(".section").delay("slow").show().animate({ width:'190' },"0.5s");
}

$(".fa-navicon").click(function() {
  openButton();
});

function closeButton() {
  $("html, body").removeClass("menuFreeze");
  $(".blackOut").hide();
  $(".section").hide();
  $(".section").css("width","0");
  $(".navigationSmall").animate({ width:'0' },"0.5s");
}

$(".blackOut").click(function() {
  closeButton();
});

// if window size changes make responsive changes to sidebar and navigation
windowState = true;
var xsize = 0;
$(window).on('load', function(){
  xsize = $( window ).width();
});
$( window ).resize( function(){
  if( xsize == $( window ).width() ) return;
  if ( $(window).width() <= 1079 ) {
      $("html, body").removeClass("menuFreeze");
      $(".blackOut").hide();
      $(".section").hide();
      $(".section").css("width","0");
      $(".navigationSmall").css("width","0");
      windowState = true;
  }
  else if ($(window).width() >= 1080 && windowState == true) {
    if (!$("html").hasClass("mobile-device")) {
      $("html, body").removeClass("menuFreeze");
      $(".blackOut").hide();
      $(".section").show();
      $(".section").css("width","auto");
      $(".navigationSmall").css("width","0");
      $(".navigationSmall").hide();
      windowState = false;
    }
  }
  xsize = $( window ).width();
});

// make tables scrollable

$(document).ready(function(){
  $("table").wrap("<div style='max-width:100%;overflow-x:auto'></div>");
});

// hide and reveal elements on page

$(document).ready(function(){
  $(".show_hide").click(function(){
  $("#slidingDiv").slideToggle();
  });
});

// detect 'Resources' page and modify title and menu index accordingly

$(document).ready(function(){
  var pathname = window.location.pathname;
  if (pathname == "/technical/resources/") {
    $(".titleWrapper a").html("<div class='titleIcon'><i aria-hidden='true' class='fa fa-list-alt'></i></div><div class='thisTitle'><div class='thisTitle-top'><b>Resources</b></div><div class='thisTitle-bottom'>Open<b>EnergyMonitor</b></div></div>");
    $("#takeIt,#takeIt2").removeClass("actoemLink").prop('title', 'a user guide for the OpenEnergyMonitor system');
    $("#changeIt,#changeIt2").addClass("actoemLink").prop('title', 'you are here: a definitive list of resources for OpenEnergyMonitor hardware');
    $(".titleWrapper a").attr("href", "/technical/resources/");
  }
});

// site search

$(".searchIcon").click(function() {
   $(".searchBox").css("display","flex");
   $(".searchText").animate({width: "200px"});
   $(".searchText").focus();
   $("html, body").addClass("menuFreeze");
});

$(".searchBox").click(function() {
  $(".searchBox").css("display","none");
  $(".searchText").blur();
  $(".searchText").css("width","0");
  $("html, body").removeClass("menuFreeze");
  $(".blackOut").hide();
  $(".navigationSmall").animate({ width:'0' },"0.5s");
  if ($(window).width() <= 1079) {
    $(".section").hide();
    $(".section").css("width","0");
  }
});

$(".searchBox form").click( function(event) {
   event.stopPropagation();
});

</script>

</body>
</html>

