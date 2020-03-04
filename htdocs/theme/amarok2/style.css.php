<?php
/* Copyright (C) 2012-2020	Nicolas Péré		<nicolas@wapp.fr>
 * Copyright (C) 2012	Xavier Peyronnet	<xavier.peyronnet@free.fr>
 * Copyright (C) 2012	Regis Houssin		<regis@dolibarr.fr>
 * Version 6.0.14 (2018-03-23)
 * Version 6.0.20 (2020-03-01)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 *		\file       htdocs/theme/amarok2/style.css.php
 *		\brief      Fichier de style CSS du theme amarok2
 */



//if (! defined('NOREQUIREUSER')) define('NOREQUIREUSER','1');	// Not disabled cause need to load personalized language
//if (! defined('NOREQUIREDB'))   define('NOREQUIREDB','1');	// Not disabled to increase speed. Language code is found on url.
if (! defined('NOREQUIRESOC'))    define('NOREQUIRESOC','1');
//if (! defined('NOREQUIRETRAN')) define('NOREQUIRETRAN','1');	// Not disabled cause need to do translations
if (! defined('NOCSRFCHECK'))     define('NOCSRFCHECK',1);
if (! defined('NOTOKENRENEWAL'))  define('NOTOKENRENEWAL',1);
if (! defined('NOLOGIN'))         define('NOLOGIN',1);
if (! defined('NOREQUIREMENU'))   define('NOREQUIREMENU',1);
if (! defined('NOREQUIREHTML'))   define('NOREQUIREHTML',1);
if (! defined('NOREQUIREAJAX'))   define('NOREQUIREAJAX','1');

session_cache_limiter(FALSE);

require_once("../../main.inc.php");

// Define css type
header('Content-type: text/css');
// Important: Following code is to avoid page request by browser and PHP CPU at
// each Dolibarr page access.
if (empty($dolibarr_nocache)) header('Cache-Control: max-age=3600, public, must-revalidate');
else header('Cache-Control: no-cache');

// On the fly GZIP compression for all pages (if browser support it). Must set the bit 3 of constant to 1.
if (isset($conf->global->MAIN_OPTIMIZE_SPEED) && ($conf->global->MAIN_OPTIMIZE_SPEED & 0x04)) { ob_start("ob_gzhandler"); }

if (GETPOST('lang')) $langs->setDefaultLang(GETPOST('lang'));  // If language was forced on URL
if (GETPOST('theme')) $conf->theme=GETPOST('theme');  // If theme was forced on URL
$langs->load("main",0,1);
$right=($langs->trans("DIRECTION")=='rtl'?'left':'right');
$left=($langs->trans("DIRECTION")=='rtl'?'right':'left');
$fontsize=empty($conf->browser->phone)?'12':'12';
$fontsizesmaller=empty($conf->browser->phone)?'11':'11';

$path='';    // This value may be used in future for external module to overwrite theme
$theme='amarok2';	// Value of theme

// Define image path files
$fontlist='helvetica,arial,tahoma,verdana';    //$fontlist='Verdana,Helvetica,Arial,sans-serif';
//'/theme/auguria/img/menus/trtitle.png';
$img_liste_titre=dol_buildpath($path.'/theme/'.$theme.'/img/menus/trtitle.png',1);
$img_head=dol_buildpath($path.'/theme/'.$theme.'/img/headbg2.jpg',1);
$img_button=dol_buildpath($path.'/theme/'.$theme.'/img/button_bg.png',1);


$theme_topmenu_disable_image = $conf->global->THEME_TOPMENU_DISABLE_IMAGE; // boolean
$top_menu_height = ($theme_topmenu_disable_image) ? '36' : '65'; // hauteur du menu principal en fonction de l affichage ou non des icônes.



// Inclusion des variables pour les couleurs avec les valeurs par défaut :
$main_background_color = (isset($conf->global->THEME_ELDY_BACKBODY)) ?  $conf->global->THEME_ELDY_BACKBODY :'227,235,241'; // #e3ebf1 couleur de fond de la partie principale
$vermenu_background_color = (isset($conf->global->THEME_ELDY_VERMENU_BACK1)) ?  $conf->global->THEME_ELDY_VERMENU_BACK1 :'209,215,224'; //#d1d7e0 couleur de fond de la partie principale


if (! empty($conf->global->MAIN_OVERWRITE_THEME_RES)) { $path='/'.$conf->global->MAIN_OVERWRITE_THEME_RES; $theme=$conf->global->MAIN_OVERWRITE_THEME_RES; }

echo "/*\n";
//print_r($conf->global);
echo "*/\n";
?>


/* ! ============================================================================== */
/* ! STYLES PAR DEFAUT                                                            */
/* ! ============================================================================== */

*, html {
	margin:0;
	padding:0;
	font-size:100%;
	}

body {
	background-color: rgb(<?php echo $main_background_color; ?>);
	/* background-image:url(<?php echo DOL_URL_ROOT.'/theme/'.$theme.'/img/vmenu.png' ?>); */
	background-repeat: repeat-y;
	background-attachment: fixed;
		
	color:#232323;
	font-size: <?php print $fontsize ?>px;
   	font-family: <?php print $fontlist ?>;
	margin:0px;
    <?php print 'direction:'.$langs->trans("DIRECTION").";\n"; ?>
	}

.checkVatPopup {
	background-color:#f5f5f5;
	background-image:none;
	margin:10px;
	line-height:16px;
	}

a {
	font-family:<?php print $fontlist ?>;
	font-weight:bold;
	text-decoration:none;
	color:#232323;
	}

a:hover, a:active { color:rgba(0,0,0,.6); }

a.refurl:hover, a.cal_event:hover { color:#999 !important; }

input, textarea {
    font-size:<?php print $fontsize ?>px;
    font-family:<?php print $fontlist ?>;
    border-radius:4px;
    border:solid 1px rgba(0,0,0,.3);
    border-top:solid 1px rgba(0,0,0,.4);
    border-bottom:solid 1px rgba(0,0,0,.2);
    box-shadow:1px 1px 2px rgba(0,0,0,.2) inset;
    padding:6px !important;
	}

textarea {
	width:80%;
	resize: vertical;
	}

input[type="image"] {
	border-radius:0px;
	border:none;
	box-shadow:none;
	}

input.flat {
	font-size:<?php print $fontsize ?>px;
	font-family:<?php print $fontlist ?>;
    border-radius:4px;
    border:solid 1px rgba(0,0,0,.3);
    border-top:solid 1px rgba(0,0,0,.4);
    border-bottom:solid 1px rgba(0,0,0,.2);
	padding:4px;
	margin-bottom:6px;
	}

input:disabled {background:#b6b6b6;}

textarea.flat {
	font-size:<?php print $fontsize ?>px;
	font-family:<?php print $fontlist ?>;
    border-radius:4px;
    border:solid 1px rgba(0,0,0,.3);
    border-top:solid 1px rgba(0,0,0,.4);
    border-bottom:solid 1px rgba(0,0,0,.2);
    box-shadow:1px 1px 2px rgba(0,0,0,.2) inset;
	}

textarea:disabled {background:#dddddd;}

select.flat {
    font-size:<?php print $fontsize ?>px;
	font-family:<?php print $fontlist ?>;
	border-radius:4px;
	border:solid 1px rgba(0,0,0,.3);
	border-top:solid 1px rgba(0,0,0,.4);
	border-bottom:solid 1px rgba(0,0,0,.2);
	box-shadow:1px 1px 2px rgba(0,0,0,.2) inset;
	}

form {
    padding:0px;
    margin:0px;
	}

input { padding:4px; }
.divsearchfield{ display: inline-flex; margin-right: 22px; }
.divsearchfield input { padding:4px; margin-left:6px;}



/* !============================================================================== */
/* ! PARTIE PRINCIPALE															   */
/* !============================================================================== */
#id-right { left: 251px !important;}
#id-right span.select2-selection { margin-left: 1em; min-width: 180px; }



/* !============================================================================== */
/* ! LOGIN																		  */
/* !============================================================================== */


body.bodylogin {
	background-image: url(img/background_login.png);
	background-repeat: repeat;
	
	}


form#login {
	display:block;
	border:solid 1px rgba(0,0,0,.3);
	border-top:solid 1px rgba(255,255,255,.6);
	border-bottom:solid 1px rgba(0,0,0,.5);

	background: #bdb5b5;  /* fallback for old browsers */
	
	background: -webkit-linear-gradient(to top, #9ba1af, #bdb5b5);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to top, #9ba1af, #bdb5b5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


	margin-left:auto;
	margin-right:auto;
	padding:20px 20px 10px;
	margin-top:16%;
	width:500px;
	border-radius:.5em;
	
	box-shadow: 0 0 16px rgba(0,0,0,.2);
	}
	
form#login img  {width:auto; height:auto; opacity:.7;}
form#login img#img_logo {
	width:120px;
	max-width:120px;
	height:auto;
	border-radius:6px;
	padding:6px;
	background-color:#ffffff;
	border:solid 1px rgba(0,0,0,.4);
	border-top:solid 1px rgba(0,0,0,.5);
	border-bottom:solid 1px rgba(0,0,0,.3);
	box-shadow:1px 1px 6px rgba(0,0,0,.3) inset , 0 0 1px rgba(255,255,255,.6);
	}
	
form#login input[type=text], form#login input[type=password] {
	/*padding:8px;
	font-size:120%;*/
	border-radius:.3em;
	margin:.4em;
	width:80%;
	}
	
form#login label, form#login td b {
	vertical-align:middle;
	line-height:40px;
	color:rgba(0,0,0,.4);
	text-shadow:1px 1px 1px rgba(255,255,255,.6);
	}
	
form#login span.fa, form#login span.fas  {
	font-size:14pt !important;
	width:18px;
	line-height: 46px;
	vertical-align: middle;
	float:right !important;
	}
	
form#login span.fa input  {
	font-size:12pt !important;
	width:78%;
	}
	
form#login table.login_table {
	margin:10px 0px;
	border:none;
	background:none !important;
	}
	
.login_center.center { background: none !important; }

form#login .center { margin-bottom:.4em; }

.login_main_home {
	display: block;
	position : absolute;
	font-size: 160%;
	color: white;
	top:0;
	left:0;
	right:0;
	text-align: center;
	margin-left: auto;
	margin-right: auto;
	margin-top:10%;
	}

table.login_table { background-color: transparent  !important;}
table.login_table tr td {vertical-align:middle;}
table.login_table tr.vmenu td {font-size:18px;}
table.login_table tr td a {color:#333333 !important;}
table.login_table tr td a:hover {color:#000000 !important;}

table.login_table .button {
	font-size:120%;
	background-color:#168ac2;
	color:#ffffff;
	padding:6px;
	margin:10px 0px;
	border-radius:1.6em;
	border:solid 1px #2e7992;
	box-shadow:1px 1px 3px rgba(0,0,0,.4);
	}
	
table.login_table .vmenu {
	color:rgba(0,0,0,.6);
	text-shadow:1px 1px 1px rgba(255,255,255,.6);
	font-size:120%;
	}

/* ! Message d'erreur lors du login : */
.login_main_message {
	text-align: center;
	margin-left: auto;
	margin-right: auto;
	margin-top: 2em;
	width: 500px;
	}
.error {
	margin:0;
	margin-left: -22px !important;
	padding:8px !important;
	padding-left:26px !important;
	padding-right:20px;
	width:inherit;
	max-width:500px;
	color:#552323 !important;
	font-size:14px;
	border-radius:4px;
	text-align: left;
	}

/* For hide object and add pointer cursor */

.hideobject {display:none;}
.linkobject {cursor:pointer;}

/* For dragging lines */

.dragClass {color:#333333;}
td.showDragHandle {cursor:move;}
.tdlineupdown {white-space:nowrap;}


/* !============================================================================== */
/* ! TIP TIP (TOOLTIPS)                                                           */
/* !============================================================================== */
#tiptip_content, .mytooltip {
    font-size: 12px;
    color: #000;
    padding: 4px 8px;
    border: 1px solid #ae823e !important;
    
	background: #fff2d3;
	background: -moz-linear-gradient(top, #fff2d3 0%, #ffee9e 100%);
	background: -webkit-linear-gradient(top, #fff2d3 0%,#ffee9e 100%);
	background: linear-gradient(to bottom, #fff2d3 0%,#ffee9e 100%);
    
    border-radius: .3em;
    -webkit-border-radius: .3em;
    -moz-border-radius: .3em;
    box-shadow: 0 0 3px rgba(0,0,0,.1);
    -webkit-box-shadow: 0 0 3px rgba(0,0,0,.1);
    -moz-box-shadow: 0 0 3px rgba(0,0,0,.1);
	}

/* Help tooltip */
tr.oddeven td div.inline-block { text-align: right !important; float:right !important; }


/* !============================================================================== */
/* ! TOOLTIPS                                                                     */
/* !============================================================================== */

#tooltip {
	position:absolute;
	width:<?php print dol_size(450,'width'); ?>px;
	border-top:solid 1px #bbbbbb;
	border-left:solid 1px #bbbbbb;
	border-right:solid 1px #444444;
	border-bottom:solid 1px #444444;
	padding:2px;
	z-index:3000;
	background-color:#fffff0;
	opacity:1;
	-moz-border-radius:6px;
}



/* !============================================================================== */
/*  ! Styles de positionnement des zones                                          */
/* !============================================================================== */

#id-container, .id-container {
	display: block;
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	margin:0;
	padding:0;
	}

.side-nav #id-left {
	display:block;
	position:absolute;
	top: <?php echo $top_menu_height; ?>px;
	bottom:0 !important;
	width: 200px;
	height: 100%;
	}

#id-right {
	display:block;
	position:absolute;
	top: <?php echo $top_menu_height; ?>px;
	left: 200px;
	right: 0;
	bottom:0;
	}


td.vmenu {
	<?php if (GETPOST("optioncss") != 'print') {?>
    margin-right:2px;
    padding:0px;
    width:200px;
    <?php } ?>
	}

div.fiche {
	padding:8px 12px 10px;
	margin-left:220px;
	}

img.photouserphoto, img.userphoto, img.ui-datepicker-trigger {
	width:16px !important;
	height:auto !important;
	}
	
img.mycompany { padding-top:10px; width: auto; height:30px; }


/* !============================================================================== */
/* ! Menu top et 1ère ligne tableau                                               */
/* !============================================================================== */

div.tmenu {
	<?php if (GETPOST("optioncss") == 'print') {?>
	display:none;
	<?php } else {?>
	position:relative;
	display:block;
	margin:0;
	padding:0;
	padding-left:1em;
	top:0;
	left:0;
	right:0;
    white-space:nowrap;
	height:<?php echo $top_menu_height; ?>px;
	line-height:<?php echo $top_menu_height+14; ?>px;
	background:#333333;
    background-image:linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-o-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-ms-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-gradient(
		linear,
		left top,
		left bottom,
		color-stop(0, rgba(255,255,255,.3)),
		color-stop(1, rgba(0,0,0,.3))
	);
	border-bottom:solid 1px rgba(0,0,0,.8);
	box-shadow:0 0 6px rgba(0,0,0,.4) !important;
	z-index:100;
	
	-webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none;
	
	<?php } ?>
	}

div.tmenu a {
	font-weight:normal;
	}

div.tmenu li {
	display:inline-table;
	margin-right:1em;
	text-transform:uppercase;
	}

div.tmenudiv li a { color: rgba(255,255,255,.3) !important; }
div.tmenudiv li a:hover { color:rgba(255,255,255,.9) !important; -webkit-transition: color ease-in-out .5s; }
	
div.tmenudiv ul li a.tmenusel {/* texte du menu principal sélectionné */
	color:#ffffff !important;
	font-weight:normal;
	}

.tmenudisabled {color:#d0d0d0 !important;}



/* Affichage des icônes dans la barre des menus (si l'option est choisie) : */

<?php if(!$theme_topmenu_disable_image) : ?>
/* .tmenucenter { text-align: center !important; } */
.topmenuimage {
	opacity: .8;
	vertical-align:top;
	width: auto !important;
	height: 42px !important;
	margin-top:8px !important;
	margin-bottom:-26px !important;
	background-origin: padding-box !important;
	background-repeat: no-repeat;
	background-position: center top;
	background-attachment:inherit;
	
	}
	
.topmenuimage:hover, .topmenuimage:active { opacity:1; -webkit-transition: opacity .6s; }

<?php endif; ?>









/* Do not load menu img if hidden to save bandwidth */
<?php if (empty($theme_topmenu_disable_image)) { ?>

div.mainmenu.home{
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/home.png',1) ?>);
}

div.mainmenu.billing {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/money.png',1) ?>);
}

div.mainmenu.accountancy {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/money.png',1) ?>);
}

div.mainmenu.agenda {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/agenda.png',1) ?>);
}

div.mainmenu.bank {
    background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/bank.png',1) ?>);
}

div.mainmenu.cashdesk {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/pointofsale.png',1) ?>);
}

div.mainmenu.companies {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/company.png',1) ?>);
}

div.mainmenu.commercial {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/commercial.png',1) ?>);
}

div.mainmenu.ecm {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/ecm.png',1) ?>);
}

div.mainmenu.externalsite {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/externalsite.png',1) ?>);
}

div.mainmenu.ftp {
    background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/tools.png',1) ?>);
}

div.mainmenu.hrm {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/holiday.png',1) ?>);
}

div.mainmenu.members {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/members.png',1) ?>);
}

div.mainmenu.menu {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/menu.png',1) ?>);
	top: 7px;
}

div.mainmenu.products {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/products.png',1) ?>);
}

div.mainmenu.project {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/project.png',1) ?>);
}

div.mainmenu.tools {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/tools.png',1) ?>);
}

div.mainmenu.website {
	background-image: url(<?php echo dol_buildpath($path.'/theme/'.$theme.'/img/menus/externalsite.png',1) ?>);
}

<?php
// Add here more div for other menu entries. moduletomainmenu=array('module name'=>'name of class for div')

$moduletomainmenu=array('user'=>'','syslog'=>'','societe'=>'companies','projet'=>'project','propale'=>'commercial','commande'=>'commercial',
	'produit'=>'products','service'=>'products','stock'=>'products',
	'don'=>'accountancy','tax'=>'accountancy','banque'=>'accountancy','facture'=>'accountancy','compta'=>'accountancy','accounting'=>'accountancy','adherent'=>'members','import'=>'tools','export'=>'tools','mailing'=>'tools',
	'contrat'=>'commercial','ficheinter'=>'commercial','deplacement'=>'commercial',
	'fournisseur'=>'companies',
	'barcode'=>'','fckeditor'=>'','categorie'=>'',
);
$mainmenuused='home';
foreach($conf->modules as $val)
{
	$mainmenuused.=','.(isset($moduletomainmenu[$val])?$moduletomainmenu[$val]:$val);
}
//var_dump($mainmenuused);
$mainmenuusedarray=array_unique(explode(',',$mainmenuused));

$generic=1;
// Put here list of menu entries when the div.mainmenu.menuentry was previously defined
$divalreadydefined=array('home','companies','products','commercial','externalsite','accountancy','project','tools','members','agenda','ftp','holiday','hrm','bookmark','cashdesk','ecm','geoipmaxmind','gravatar','clicktodial','paypal','stripe','webservices','website');
// Put here list of menu entries we are sure we dont want
$divnotrequired=array('multicurrency','salaries','margin','opensurvey','paybox','expensereport','incoterm','prelevement','propal','workflow','notification','supplier_proposal','cron','product','productbatch','expedition');
foreach($mainmenuusedarray as $val)
{
	if (empty($val) || in_array($val,$divalreadydefined)) continue;
	if (in_array($val,$divnotrequired)) continue;
	//print "XXX".$val;

	// Search img file in module dir
	$found=0; $url='';
	foreach($conf->file->dol_document_root as $dirroot)
	{
		if (file_exists($dirroot."/".$val."/img/".$val.".png"))
		{
			$url=dol_buildpath("/".$val."/img/".$val.".png", 1);
			$found=1;
			break;
		}
	}
	// Img file not found
	if (! $found)
	{
		$url=dol_buildpath($path."/theme/".$theme."/img/menus/generic".$generic.".png",1);
		$found=1;
		if ($generic < 4) $generic++;
		print "/* A mainmenu entry was found but img file ".$val.".png not found (check /".$val."/img/".$val.".png), so we use a generic one */\n";
	}
	if ($found)
	{
		print "div.mainmenu.".$val." {\n";
		print "	background-image: url(".$url.");\n";
		print "}\n";
	}
}
// End of part to add more div class css
?>

<?php
}	// End test if $dol_hide_topmenu
?>

/* --- end nav --- */




/* Login */

.inline-block { display:inline-block !important; padding-right: .2em; }

/*
.login_block {
	position:absolute;
	<?php if (GETPOST("optioncss") == 'print') {?>
	display:none;
	<?php } ?>
	top:0px;
	right:12px;
	height:36px;
	line-height: 36px;
	vertical-align: middle;
	margin:0;
	padding:0;
	z-index:100;
	
}
*/

.login_block_elem { display: inline-block !important; }

/*.topmenu-login-dropdown {display:none; }  work*/


.login_block_user {
 	display: inline-block !important;
	min-width:180px;
	width:180px;
	max-width:300px;
	text-align: right !important;
/* 	border:dashed 1px red; */
	}
	
.userimgatoplogin img.photouserphoto { width: 16px !important; height: auto !important; vertical-align: middle; }

.login_block_other {
	float: right;
	font-size:140%;
	text-align: right !important;
	min-width:96px;
	width:96px;
	max-width:96px;
	}


/* !============================================================================== */
/* ! TOP MENU                                                                      */
/* !============================================================================== */

/* #topmenu-login-dropdown { width:300px; } */

.usedropdown > div { width:300px; }


.side-nav-vert #id-top ul li {
	margin:0;
	padding: 0;
	}
	
.side-nav-vert #id-top ul li {
	display: inline-table;
	list-style-type: none;
	margin:0;
	padding: 0;
	margin-top:-8px;
	padding-right: .6em;
	vertical-align: top;
	}
.side-nav-vert #id-top ul li a, .side-nav-vert #id-top .login_block a {
	color: #ccc;
	text-decoration: none;
	}
	
.side-nav-vert #id-top ul li a:hover, .side-nav-vert #id-top .login_block a:hover {
	color: #fff;
	-webkit-transition: color .6s;
	}
	
.side-nav-vert #id-top .login_block { display:none; width:300px; }
	
.side-nav-vert #id-top .login_block img { width:16px; height:auto; }

.login_block_user {
	display: inline-table;
	width: 120px;
	}


.login_block_other {
	display: inline-table;
	min-width:100px;
	text-align: right;
	}
.login_block_other .inline-block { padding-right:.6em; }

.login_block a {color: #dddddd;}
.login_block a:hover {color: #ffffff; }

/* div.login_block table { display:inline; } */

.login {
	white-space:nowrap;
	padding:8px 0px 0px 0px;
	margin:0px 0px 0px 8px;
	font-weight:bold;
}

img.login, img.printer, img.entity {
	padding:8px 0px 0px 0px;
	margin:0px 0px 0px 8px;
	text-decoration:none;
	color:#ffffff;
	font-weight:bold;
}


/* !============================================================================== */
/* ! Menu gauche                                                                  */
/* !============================================================================== */

#id-left {
	background-color: rgb(<?php echo $vermenu_background_color; ?>);
	border-right: solid 1px rgba(0,0,0,.2);
	width: 250px;
	min-width:250px;
	}
	
div.vmenu {
	<?php if (GETPOST("optioncss") == 'print') {?>
	display:none;
	<?php } else {?>
<!-- 	width:199px; -->
	width:249px;
	padding-top: 0px;
	padding-bottom: 4px;
	<?php } ?>
}

nav.menu_contenu, nav.menu_contenu ul li { margin:0;padding:0; }
.menu_contenu li { list-style-type:none; }

.menu_contenu li.menu_titre a, .blockvmenu .menu_titre {
	display:block;
	min-height:22px;
	line-height:22px;
	background-color:rgba(0,0,0,.08);
	background-image:linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-o-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-ms-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-gradient(
		linear,
		left top,
		left bottom,
		color-stop(0, rgba(255,255,255,.3)),
		color-stop(1, rgba(0,0,0,.3))
	);
	padding: 4px;
	padding-left: 6px;
	border-top:solid 1px rgba(255,255,255,.5);
	border-bottom:solid 1px rgba(0,0,0,.5);
}

.menu_contenu .menu_titre a, .blockvmenuimpair .menu_titre a { font-weight:normal; }

.menu_contenu li.menu_titre .sec-nav__sub-list li a { background-image: none; background-color:transparent; padding-left:1.3em; border-bottom: none; }



.menu_contenu {
	background-color:#ffffff;
	padding: 4px;
	padding-left: 12px;
	border-bottom: solid 1px rgba(0,0,0,.05);
}

.menu_contenu:hover {background-color:#f7f7f7;}
.menu_contenu a.vsmenu {
	color:#000000;
	line-height:18px;
	font-weight:normal;
}

.blockvmenusearch, .blockvmenubookmarks {
	border-top:solid 1px rgba(0,0,0,.3);
	padding:10px 5px 20px;
	text-align:center;
}
.vmenusearchselectcombo { width: 100% !important; }

.select2-drop-mask { width: 100% !important; }

.blockvmenusearch .menu_titre, .blockvmenubookmarks .menu_titre {
	margin-top:6px;
	text-align:left;
	padding-left:18px;
}

.select2-container { width: 100%; }

#blockvmenuhelp {
	border-top:solid 1px rgba(0,0,0,.1);
	padding:12px;
	text-align:center;
}







/* !============================================================================== */
/* ! Panes for Main                                                   			  */
/* !============================================================================== */

#mainContent {
	background-color:<?php echo $main_background_color; ?>;
}

#mainContent, #leftContent .ui-layout-pane {
    padding:0px;
    overflow:auto;
}

#mainContent, #leftContent .ui-layout-center {
	padding:0px;
	position:relative; /* contain floated or positioned elements */
    overflow:auto;  /* add scrolling to content-div */
}


/* !============================================================================== */
/* ! Toolbar for ECM or Filemanager                                               */
/* !============================================================================== */

.toolbar {}
.toolbarbutton {}


/* !============================================================================== */
/* ! Panes for ECM or Filemanager                                                 */
/* !============================================================================== */

#containerlayout .layout-with-no-border {
    border:0 !important;
    border-width:0 !important;
}

#containerlayout .layout-padding {
    padding:2px !important;
}

#containerlayout .ui-layout-pane {/* all 'panes' */
    background:#ffffff;
    border:1px solid #bbbbbb;
    padding:0px;
    overflow:auto;
}

#containerlayout .ui-layout-content {
	padding:10px;
	position:relative; /* contain floated or positioned elements */
	overflow:auto; /* add scrolling to content-div */
}

#containerlayout .pane-in.ecm-in-layout-center.ui-layout-pane.ui-layout-pane-center {
	border:0px solid #bbbbbb;
	border-bottom:1px solid #bbbbbb;
}

#containerlayout .pane-in.ecm-in-layout-south.layout-padding.ui-layout-pane.ui-layout-pane-south {
	border:0px solid #bbbbbb;
	border-top:1px solid #bbbbbb;
}

/* !============================================================================== */
/* ! ONGLETS                                                                      */
/* !============================================================================== */

div.tabs {
    margin-top:8px;
	}

div.tabBar {
    background-color:#ffffff;
    padding:6px;
    margin:3px 0px 5px;
    border:1px solid #bbbbbb;
	}

div.tabBar table.notopnoleftnoright {
	white-space:nowrap;
	}

div.tabsAction {
    margin-top:12px !important;
    text-align:center;
	}

a.tabTitle {
	display: block;
	height: 36px;
	width: 100%;
	font-size: 14pt;
	font-weight: normal;
    color:rgba(0,0,0,.5);
    margin-right:10px;
    text-shadow:1px 1px 1px #ffffff;
    padding-left:5px;
    vertical-align:middle;
	}

a.tabTitle img {
	vertical-align:top;
	margin-top:-1px;
	width: 32px !important;
	height: auto;
	}

.tab {
	margin-left:2px;
	margin-right:2px;
	margin-bottom:-4px;
	padding:8px;
	background-color:rgba(0,0,0,.1);
	color:#666666;
	border:solid 1px rgba(0,0,0,.3);
	border-bottom:0px;
	-webkit-border-top-left-radius:6px;
	-webkit-border-top-right-radius:6px;
}
	
.tab#active, .tabactive {
	color:#232323;
	font-weight:bold;
	background-color:#ffffff;
	border-bottom:solid 1px #ffffff !important;
	padding:8px;
	margin-bottom:-4px;
	z-index:999;
}
	
.tab:hover {color:#333333;}


/* !============================================================================== */
/* ! STYLES DES ZONES					                                          */
/* !============================================================================== */
 
div.fiche {
	margin-<?php print $left; ?>: <?php print (empty($conf->browser->phone) || empty($conf->global->MAIN_MENU_USE_JQUERY_LAYOUT))?'20':'24'; ?>px;
	margin-<?php print $right; ?>: <?php print empty($conf->browser->phone)?'12':'6'; ?>px;
}
 
div.fichecenter {
	width: 100%;
	clear: both;	/* This is to have div fichecenter that are true rectangles */
}
div.fichethirdleft {
	<?php if (empty($conf->browser->phone))   { print "float: ".$left.";\n"; } ?>
	<?php if (empty($conf->browser->phone))   { print "width: 35%;\n"; } ?>
	<?php if (! empty($conf->browser->phone)) { print "padding-bottom: 6px;\n"; } ?>
}
div.fichetwothirdright {
	<?php if (empty($conf->browser->phone))   { print "float: ".$left.";\n"; } ?>
	<?php if (empty($conf->browser->phone))   { print "width: 65%;\n"; } ?>
	<?php if (! empty($conf->browser->phone)) { print "padding-bottom: 6px\n"; } ?>
}
div.fichehalfleft {
	<?php if (empty($conf->browser->phone))   { print "float: ".$left.";\n"; } ?>
	<?php if (empty($conf->browser->phone))   { print "width: 50%;\n"; } ?>
}
div.fichehalfright {
	<?php if (empty($conf->browser->phone))   { print "float: ".$left.";\n"; } ?>
	<?php if (empty($conf->browser->phone))   { print "width: 50%;\n"; } ?>
}
div.ficheaddleft {
	<?php if (empty($conf->browser->phone))   { print "padding-left: 16px;\n"; } ?>
}



/* !============================================================================== */
/* ! BOUTONS ACTIONS                                                              */
/* !============================================================================== */

.butActionRefused {
	background:#cccccc;
	border:solid 1px #666666;
	}

.butActionDelete {
	background:#b33c37;
	border:solid 1px #8d2f2b;
	}

input[type="submit"] { box-shadow: none !important; }

.button, .buttonajax, .butAction, .butActionRefused, .butActionDelete, input[type="submit"], td.titre_right a, button.liste_titre, button.dpInvisibleButtons {
	cursor:pointer;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	display:inline-block;
	color:#ffffff !important;
	font-size:12px;
	font-weight:normal;
	padding:6px 12px;
	margin:2px;
	text-decoration:none;

	background: #00b7ea;
	background: -moz-linear-gradient(top, hsl(193,100%,46%) 0%, hsl(191,100%,38%) 100%);
	background: -webkit-linear-gradient(top, hsl(193,100%,46%) 0%,hsl(191,100%,38%) 100%);
	background: linear-gradient(to bottom, hsl(193,100%,46%) 0%,hsl(191,100%,38%) 100%);
	border:1px solid hsl(191,100%,32%);
	}
	

.button:hover, .butAction:hover, .butActionDelete:hover, td.titre_right a:hover {
	background: #00aed5;
	background: -moz-linear-gradient(top, hsl(193,100%,38%) 0%, hsl(191,100%,30%) 100%);
	background: -webkit-linear-gradient(top, hsl(193,100%,38%) 0%,hsl(191,100%,30%) 100%);
	background: linear-gradient(to bottom, hsl(193,100%,38%) 0%,hsl(191,100%,30%) 100%);
	}
	
.button:active, .butAction:active, .butActionDelete:active, td.titre_right a:active {
	background: #0097b2;
	background: -moz-linear-gradient(top, hsl(193,100%,30%) 0%, hsl(191,100%,22%) 100%);
	background: -webkit-linear-gradient(top, hsl(193,100%,30%) 0%,hsl(191,100%,22%) 100%);
	background: linear-gradient(to bottom, hsl(193,100%,30%) 0%,hsl(191,100%,22%) 100%);
	}
	
.button, a.butAction { color:#333333; }
.butActionDelete { color:#ffffff; }

	
td.titre_right a {
	color: #666 !important;
	border: solid 1px hsl(0,0%,78%);
	background: #eeeeee;
	background: -moz-linear-gradient(top, hsl(0,0%,93%) 0%, hsl(0,0%,80%) 100%);
	background: -webkit-linear-gradient(top, hsl(0,0%,93%) 0%,hsl(0,0%,80%) 100%);
	background: linear-gradient(to bottom, hsl(0,0%,93%) 0%,hsl(0,0%,80%) 100%);
	}
td.titre_right a:hover {
	background: #eeeeee;
	background: -moz-linear-gradient(top, hsl(0,0%,83%) 0%, hsl(0,0%,70%) 100%);
	background: -webkit-linear-gradient(top, hsl(0,0%,83%) 0%,hsl(0,0%,70%) 100%);
	background: linear-gradient(to bottom, hsl(0,0%,83%) 0%,hsl(0,0%,70%) 100%);
	}
td.titre_right a:active {
	background: #eeeeee;
	background: -moz-linear-gradient(top, hsl(0,0%,73%) 0%, hsl(0,0%,60%) 100%);
	background: -webkit-linear-gradient(top, hsl(0,0%,73%) 0%,hsl(0,0%,60%) 100%);
	background: linear-gradient(to bottom, hsl(0,0%,73%) 0%,hsl(0,0%,60%) 100%);
	}

td.titre_right a.reposition:before { content: none !important; }
td.titre_right a.reposition{ background:none; border:none; }



.butActionRefused:hover {
	color:#232323;
	cursor:default;
	}
	
span.fa, span.fas { height:16px; width:16px; font-size: 12pt; margin:.1em; }
td.widthpictotitle .fas { height:32px; width:32px; font-size: 16pt; margin:.1em; }
button.liste_titre { padding:.2em; margin-right: .2em; }
button.dpInvisibleButtons { font-size:8pt;}

.photoref img { width:32px !important; height: 32px; }


/* !============================================================================== */
/* ! TABLES                                                                       */
/* !============================================================================== */

table img {
	padding:0px 2px;
	vertical-align:middle;
	}


table.liste img { padding:0px; }

table a { vertical-align:middle; }

.nocellnopadd {
	list-style-type:none;
	margin:0px;
	padding:0px;
	}
	

.notopnoleft {
	border-collapse:collapse;
	border:0px;
	padding-top:0px;
	padding-left:0px;
	padding-right:10px;
	padding-bottom:4px;
	margin:0px 0px;
	width:40%;
}

table.notopnoleftnoright {
	border:0px;
	border-collapse:collapse;
	padding-top:0px;
	padding-left:0px;
	padding-right:10px;
	padding-bottom:4px;
	margin:0px;
}

table.border {
	border:1px solid #bbbbbb;
	border-collapse:collapse;
}

table.border td {
	padding: 6px;
	border:1px solid #efefef;
	border-collapse:collapse;
}



/* Main boxes */

table.border.formdoc {
	background-color:#f7f7f7;
	border:1px solid #dddddd;
	margin:0px;
	width:60%;
}

table.border.formdoc td {padding:1px 3px;}

table.noborder {
	border:1px solid #bbbbbb;
	padding:0px;
	margin:3px 0px 8px;
	border-spacing:0px;
}


table.noborder td { padding:6px !important; background-color: #fefefe; }

table.nobordernopadding {
	border-collapse:collapse;
	border:0px;
	
}

table.nobordernopadding tr td { background-color: inherit !important; }

table.nobordernopadding tr {
	border:0px;
	padding:0px 0px;
}

table.nobordernopadding td {
	border:0px;
	padding:1px 0px;
}

table.notopnoleftnopadd {
	background-color:#ffffff;
	border:1px solid #bbbbbb;
	padding:6px;
}


/* !============================================================================== */
/* ! Dashboard                                                   			  */
/* !============================================================================== */
table tbody tr.liste_titre.box_titre td { padding:0 !important; }
table tbody tr.liste_titre.box_titre td tbody tr td { padding-left:1em !important; }
.firstcolumn .box { margin: .3em; }

/* !============================================================================== */
/* ! PAGINATION                                                                    */
/* !============================================================================== */

div.pagination { min-width: 300px !important; width: inherit !important; max-width: 300px !important; }
.pagination ul {
	border-radius: 4px !important;
	width:inherit !important;
	background-color: white;
	background: hsl(0,0%,100%);
	background: -moz-linear-gradient(top, hsl(0,0%,100%) 0%, hsl(0,0%,96%) 47%, hsl(0,0%,93%) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, hsl(0,0%,100%)), color-stop(47%, hsl(0,0%,96%)), color-stop(100%, hsl(0,0%,93%)));
	background: -webkit-linear-gradient(top, hsl(0,0%,100%) 0%, hsl(0,0%,96%) 47%, hsl(0,0%,93%) 100%);
	background: -o-linear-gradient(top, hsl(0,0%,100%) 0%, hsl(0,0%,96%) 47%, hsl(0,0%,93%) 100%);
	background: -ms-linear-gradient(top, hsl(0,0%,100%) 0%, hsl(0,0%,96%) 47%, hsl(0,0%,93%) 100%);
	background: linear-gradient(to bottom, hsl(0,0%,100%) 0%, hsl(0,0%,96%) 47%, hsl(0,0%,93%) 100%);
	border:solid 1px #ccc !important;
	box-shadow: 0 0 1px white inset;
	}
.pagination ul li {
	display: inline-table;
	list-style-type: none;
	padding: 6px;
	font-size: 120%;
	font-weight: normal;
	}
	
.pagination li.pagination::first { margin-right: 6px !important }
.pagination li.pagination a.paginationnext { margin-right: 8px !important }
.pagination li.pagination a { margin:0 !important; padding: 6px !important; }
.pagination li.pagination a:hover { padding-top:6px !important; background-color: rgba(0,0,0,.1) !important; }
.pagination li.pagination span.active { display: inline-block !important;  padding:6px !important; color:#ccc; font-size: 100%; vertical-align:middle; }
.pagination li.pagination span.inactive { color:#ccc; } /* les trois petits points... */
.pagination li.pagination a.paginationnext, .pagination li.pagination a.paginationprevious { padding: 6px !important; padding-top:6px !important; }


/* For lists */

table.liste {
	padding:0px;
	border:1px solid #bbbbbb;
	border-spacing:0px;
	background-image:linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-o-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-ms-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-gradient(
		linear,
		left top,
		left bottom,
		color-stop(0, rgba(255,255,255,.3)),
		color-stop(1, rgba(0,0,0,.3))
	);
}

table.liste td {padding:1px 2px 1px 0px; padding:4px;padding-left:6px; }

tr.liste_titre th, tr.box_titre, tr.liste_titre tr td  {
	padding-left: 12px !important;
	font-weight: normal;
	text-align: left;
	min-height:36px !important;
	height:36px !important;
	max-height:36px !important;
	background-color:#cccccc;
	background-image:linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-o-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-ms-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-gradient(
		linear,
		left top,
		left bottom,
		color-stop(0, rgba(255,255,255,.3)),
		color-stop(1, rgba(0,0,0,.1))
	);
}

table.boxtable tr.liste_titre.box_titre {
	background-color:#cccccc;
	background-image:linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-o-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-ms-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-gradient(
		linear,
		left top,
		left bottom,
		color-stop(0, rgba(255,255,255,.3)),
		color-stop(1, rgba(0,0,0,.1))
	);
}
table.boxtable table.nobordernopadding tbody tr { background-color: none !important; }

tr.liste_titre th.titlefield { text-align:left; padding:6px; font-weight: normal; }
tr.liste_titre th.right a { font-weight: normal !important; right:12px !important; }

tr.liste_titre td {
	padding: 6px;
	padding-left:6px !important;
	white-space:nowrap;
	background-color:#cccccc;
	background-image:linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-o-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-ms-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-gradient(
		linear,
		left top,
		left bottom,
		color-stop(0, rgba(255,255,255,.3)),
		color-stop(1, rgba(0,0,0,.1))
	);

}

tr.liste_titre td input.flat {
    width:70%;
}

td.liste_titre_sel {
	font-weight:bold;
	white-space:nowrap;
}

tr.liste_total td {
	padding:6px;
	border-top:solid 1px #999;
	background-color:#bebebe;
	background-image: -webkit-gradient(
	linear,
	left bottom,
	left top,
	color-stop(0, #E3E3E3),
	color-stop(1, #CCCCCC)
	);
	background-image: -o-linear-gradient(top, #E3E3E3 0%, #CCCCCC 100%);
	background-image: -moz-linear-gradient(top, #E3E3E3 0%, #CCCCCC 100%);
	background-image: -webkit-linear-gradient(top, #E3E3E3 0%, #CCCCCC 100%);
	background-image: -ms-linear-gradient(top, #E3E3E3 0%, #CCCCCC 100%);
	background-image: linear-gradient(to top, #E3E3E3 0%, #CCCCCC 100%);
	font-weight:bold;
	white-space:nowrap;
}

tr.liste_titre + tr > td {
	color: #333;
	background: #ffffff;
	background: -moz-linear-gradient(top, #ffffff 0%, #e5e5e5 100%);
	background: -webkit-linear-gradient(top, #ffffff 0%,#e5e5e5 100%);
	background: linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
	border-top: solid 1px #999;
	border-bottom: solid 1px #ccc;
	padding: 6px !important;
	}

tr.impair td, tr.pair td {padding:1px 1px 1px 2px;}

tr.impair table.nobordernopadding td, tr.pair table.nobordernopadding td {padding:1px 0px;}

.impair {
	background:#f4f4f4;
	font-family:<?php print $fontlist ?>;
	border:0px;
	}

.pair {
	background:#eaeaea;
	font-family:<?php print $fontlist ?>;
	border:0px;
	}

td.right { text-align: right !important; }

td.widthpictotitle { width:32px; }

/*
 *  Boxes
 */

.boxtable {
	white-space:nowrap;
	}

.box {
	padding-right:0px;
	padding-left:0px;
	padding-bottom:4px;
	}

tr.box_impair {
	background:#f4f4f4;
	font-family:<?php print $fontlist ?>;
	}

tr.box_pair {
	background:#eaeaea;
	font-family:<?php print $fontlist ?>;
	}

tr.fiche {
	font-family:<?php print $fontlist ?>;
	}

tr.oddeven td { margin:4px !important; }
tr.oddeven td { background-color: #fefefe !important; } /* fond pour les tableaux */

tr.oddeven td .inline-block .inline-block { float:right !important; }


table.boxtable td { /* padding:0 !important; margin:0 !important; background-color: #ccc; */ } /* fond pour les tableaux */

td.flexcontainer { background-color: #fefefe !important; }

.statusref {
	padding:8px;
	text-align: right;
	margin-bottom:6px;
	border-bottom: solid 1px rgba(0,0,0,.1);
	}

dd { position:relative; }
.multichoicedoc {
	left:12px !important;
	top: 12px !important;
	width:inherit !important;
	background-color: white;
	border:solid 1px #ccc;
	border-radius: .3em;
	box-shadow: 2px 2px 3px rgba(0,0,0,.3);
	text-align: left;
	}
.multichoicedoc li, .multichoicedoc li.nowrap {  list-style-type: none; padding:6px; min-width:130px; }

/* !============================================================================== */
/* ! ICONES                           											  */
/* !============================================================================== */

table.liste img, .classfortooltip img, .oddeven img, span.boxstatstext img { width: 22px !important; height: auto !important; }
img.inline-block { width: 16px !important; height: auto; }
.pictostatus { width:16px !important; height:auto !important; }
.imgdown, .imgup { width:9px !important; height: auto !important; }

#pictotitle { width:32px !important; height: auto !important; line-height:32px; vertical-align: middle; margin-right:1em; }

img.hideonsmartphone { width:22px; height:auto; }
td table td div div.inline-block a img { width: auto !important; height: 60px !important; }

table td a img { height: auto !important; width: auto !important; }
img.photouserphoto { width:32px !important; height: auto !important; }
img.photouserphoto.userphoto { width:26px !important; height: auto !important; }

img.userphotosmall { width:22px !important; height: auto; }

a.reposition img, tr.oddeven td img.inline-block, tr.oddeven td img.pictostatus { height:16px !important; width: auto !important; }

td.tdsetuppicto img { width:22px !important; height:22px !important; }


/* icone dans les listes en popup : */
i.paddingright, img.paddingright { padding-right:.3em !important; }


img.pictodelete { width:16px !important; height: 16px !important; }

/* !============================================================================== */
/* ! DASHBOARD                           										  */
/* !============================================================================== */

.boxstats, .boxstatscontent { display:block !important; padding:6px; }
a.boxstatsindicator.thumbstat, .boxstatscontent { display:block; width:100%; min-height:0 !important; height:22px; }
span.boxstatstext { display:inline-block; width:80% !important; text-align: left !important; margin-top:16px; }

span.boxstatsindicator, a.dashboardlineindicator {  position:relative; float:right; top:-18px !important; margin-right:12px; min-width:40px !important; }


.div-table-responsive { margin-top: 1em; min-width:100% !important; width: 100%; max-width: 100%; }
.div-table-responsive table { min-width:100% !important; width: 100%; max-width: 100%; }

/*
 *   ALERTES
 *   Ok, Warning, Error
 */

.ok {
	color:#159e26;
	background:#61e372;
	padding: 6px;
	padding-left:20px;
	border:1px solid #159e26;
	font-weight:normal;
}

.warning {
	color:#bca936;
	background:#fcf5b8;
	padding: 6px;
	padding-left:20px;
	border-radius: .3em;
	border:1px solid #bca936;
	font-weight:normal;
}

.info {
	color:#2d576b;
	background:#78defc;
	padding: 6px;
	padding-left:20px;
	border-radius: .3em;
	border:1px solid #2a76b7;
	font-weight:normal;
	margin-bottom: .3em !important;
}


.error {
	color:#a61111;
	background:#f58080;
	margin:0.5em 0em;
	border:1px solid #a61111;
	font-weight:normal;
	padding:6px;
	padding-left:20px;
	border-radius: .3em;
}
.info .fa, .ok .fa, .warning .fa, .error .fa { font-size:250%; padding:.2em; opacity: .6; color: inherit; }


td.highlights {background:#f9c5c6;}

.box-flex-container { background-color: rgba(255,255,255,.7); margin:1em; border-radius:.6em; padding: 1em; }

/*
 *  Other
 */

.fieldrequired {
	font-weight:bold;
	color:#333333;
}

#pictotitle {
	padding-left:5px;
	padding-right:1px;
}


.photo {border:0px;}

.titre {
	color:rgba(0,0,0,.7);
	margin-right:12px;
	text-shadow:none;
	font-weight:normal;
	font-size:14pt;
	padding-left:1px;
	padding-bottom:12px;
	vertical-align:middle;
	line-height:32px;
}


/* !============================================================================== */
/* ! Formulaire confirmation (When Ajax JQuery is used)                           */
/* !============================================================================== */

.ui-dialog-titlebar {}
.ui-dialog-content {font-size:<?php print $fontsize; ?>px !important;}


/* !============================================================================== */
/* ! Formulaire de confirmation (When HTML is used)                               */
/* !============================================================================== */

table.valid {
    border-top:solid 1px #e6e6e6;
    border-left:solid 1px #e6e6e6;
    border-right:solid 1px #444444;
    border-bottom:solid 1px #555555;
	padding-top:0px;
	padding-left:0px;
	padding-right:0px;
	padding-bottom:0px;
	margin:0px 0px;
    background:#d5baa8;
}

.validtitre {
    background:#d5baa8;
	font-weight:bold;
}




/* !============================================================================== */
/* ! CALENDAR                                                                     */
/* !============================================================================== */

.ui-datepicker-title {
    margin:0 !important;
    line-height:28px;
}
.ui-datepicker-month {
    margin:0 !important;
    padding:0 !important;
}
.ui-datepicker-header {
    height:28px !important;
}

.bodyline {
	-moz-border-radius:8px;
	padding:0px;
	margin-bottom:5px;
	z-index:3000;
}

table.dp {
	width:180px;
	margin-top:3px;
	background-color:#ffffff;
	border:1px solid #bbbbbb;
	border-spacing:0px;
	-moz-box-shadow:2px 4px 2px #cccccc;
	-webkit-box-shadow:2px 4px 2px #cccccc;
	box-shadow:2px 4px 2px #cccccc;
}

.dp td, .tpHour td, .tpMinute td {
	padding:2px;
	font-size:11px;
}

td.dpHead {
	padding:4px;
	font-size:11px;
	font-weight:bold;
}

/* Barre titre */
.dpHead, .tpHead, .tpHour td:Hover .tpHead {
	background-color:rgba(0,0,0,.2);
	background-image:linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-o-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-ms-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image:-webkit-gradient(
		linear,
		left top,
		left bottom,
		color-stop(0, rgba(255,255,255,.3)),
		color-stop(1, rgba(0,0,0,.3))
	);
	font-size:10px;
	cursor:auto;
}

/* Barre navigation */
.dpButtons, .tpButtons {
	text-align:center;
	background-color:#eaeaea;
	color:#232323;
	font-weight:bold;
	cursor:pointer;
}

.dpDayNames td, .dpExplanation {
	background-color:#eaeaea;
	font-weight:bold;
	text-align:center;
	font-size:11px;
}

.dpWeek td {text-align:center}

.dpToday, .dpReg, .dpSelected {cursor:pointer;}

.dpToday {
	font-weight:bold;
	color:#232323;
	background-color:#dddddd;
}

.dpReg:Hover, .dpToday:Hover {
	background-color:#333333;
	color:#ffffff;
}

/* Jour courant */
.dpSelected {
	background-color:#a61111;
	color:#ffffff;
	font-weight:bold;
}

.tpHour {
	border-top:1px solid #dddddd;
	border-right:1px solid #dddddd;
}

.tpHour td {
	border-left:1px solid #dddddd;
	border-bottom:1px solid #dddddd;
	cursor:pointer;
}

.tpHour td:Hover {
	background-color:#232323;
	color:#ffffff;
}

.tpMinute {margin-top:5px;}

.tpMinute td:Hover {
	background-color:#333333;
	color:#ffffff;
}
.tpMinute td {
	background-color:#eaeaea;
	text-align:center;
	cursor:pointer;
}

.fulldaystarthour {margin-right:2px;}
.fulldaystartmin {margin-right:2px;}
.fulldayendhour {margin-right:2px;}
.fulldayendmin {margin-right:2px;}

/* Bouton X fermer */
.dpInvisibleButtons {
	border-style:none;
	background-color:transparent;
	padding:0px 2px;
	font-size:9px;
	border-width:0px;
	color:#a61111;
	vertical-align:middle;
	cursor:pointer;
}

td.dpHead .dpInvisibleButtons {
	color:#232323;
	font-weight:bold;
}


/* !============================================================================== */
/* ! Afficher/cacher                                                              */
/* !============================================================================== */

div.visible {display:block;}
div.hidden {display:none;}
tr.visible {display:block;}
td.hidden {display:none;}

/* a.tmenuimage img { display: block !important; position: absolute; margin-top: 150px !important; width: 36px; height: 36px; } */


/* !============================================================================== */
/*  ! AGENDA 		                                                              */
/* !============================================================================== */

.cal_other_month {
	background:#dddddd;
	border:solid 1px #bbbbbb;
}

.cal_past_month {
	background:#eeeeee;
	border:solid 1px #bbbbbb;
}

.cal_current_month {
	background:#ffffff;
	border:solid 1px #bbbbbb;
}

.cal_today {
	background:#ffffff;
	border:solid 2px #bbbbbb;
}

div.dayevent table.nobordernopadding tr td {padding:1px;}

table.cal_event {
	border-collapse:collapse;
	margin-bottom:1px;
}

.cal_event a:link {
	color:#232323;
	font-size:11px;
	font-weight:normal !important;
}

.cal_event a:visited {
	color:#232323;
	font-size:11px;
	font-weight:normal !important;
}

.cal_event a:active {
	color:#232323;
	font-size:11px;
	font-weight:normal !important;
}

.cal_event a:hover {
	color:rgba(255,255,255,.75);
	font-size:11px;
	font-weight:normal !important;
}


/* !============================================================================== */
/*  ! Afficher/cacher                                                             */
/* !============================================================================== */

#evolForm input.error {
	font-weight:bold;
	border:solid 1px #ff0000;
	padding:1px;
	margin:1px;
}

#evolForm input.focuserr {
	font-weight:bold;
	background:#faf8e8;
	color:#333333;
	border:solid 1px #ff0000;
	padding:1px;
	margin:1px;
}


#evolForm input.focus {	/*** Mise en avant des champs en cours d'utilisation ***/
	background:#faf8e8;
	color:#333333;
	border:solid 1px #000000;
	padding:1px;
	margin:1px;
}

#evolForm input.normal { /*** Retour a l'état normal après l'utilisation ***/
	background:#ffffff;
	color:#333333;
	border:solid 1px #ffffff;
	padding:1px;
	margin:1px;
}


/* !============================================================================== */
/*  ! Ajax - Liste déroulante de l'autocompletion                                 */
/* !============================================================================== */

.ui-widget {font-family:Verdana,Arial,sans-serif; font-size:0.9em;}
.ui-autocomplete-loading {background:#ffffff url(<?php echo DOL_URL_ROOT.'/theme/amarok/img/working.gif' ?>) right center no-repeat;}


/* !============================================================================== */
/*   ! Ajax - In place editor                                                     */
/* !============================================================================== */

form.inplaceeditor-form {/* The form */
}

form.inplaceeditor-form input[type="text"] {/* Input box */
}

form.inplaceeditor-form textarea {/* Textarea, if multiple columns */
	background:#FAF8E8;
	color:#333333;
}

form.inplaceeditor-form input[type="submit"] {/* The submit button */
	font-size:100%;
	font-weight:normal;
	border:0px;
	cursor:pointer;
}

form.inplaceeditor-form a {/* The cancel link */
	margin-left:5px;
	font-size:11px;
	font-weight:normal;
	border:0px;
	cursor:pointer;
}


/* !============================================================================== */
/* ! Admin Menu                                                                   */
/* !============================================================================== */

/* CSS à appliquer à l'arbre hierarchique */

/* Lien plier / déplier tout */
.arbre-switch {
    text-align:right;
    padding:0 5px;
    margin:0 0 -18px 0;
}

/* Arbre */
ul.arbre {padding:5px 10px;}

/* strong: A modifier en fonction de la balise choisie */
ul.arbre strong {
    font-weight:normal;
    padding:0 0 0 20px;
    margin:0 0 0 -7px;
    background-image:url(<?php echo DOL_URL_ROOT.'/theme/common/treemenu/branch.gif' ?>);
    background-repeat:no-repeat;
    background-position:1px 50%;
}

ul.arbre strong.arbre-plier {
    background-image:url(<?php echo DOL_URL_ROOT.'/theme/common/treemenu/plus.gif' ?>);
    cursor:pointer;
}

ul.arbre strong.arbre-deplier {
    background-image:url(<?php echo DOL_URL_ROOT.'/theme/common/treemenu/minus.gif' ?>);
    cursor:pointer;
}

ul.arbre ul {
    padding:0;
    margin:0;
}

ul.arbre li {
    padding:0;
    margin:0;
    list-style:none;
}

/* This is to create an indent */
ul.arbre li li {margin:0 0 0 16px;}

/* Classe pour masquer */
.hide {display:none;}

img.menuNew {
	display:block;
	border:0px;
	}

img.menuEdit {
	border:0px;
	display:block;
	}


img.menuDel {
	display:none;
	border:0px;
	}

div.menuNew {
	margin-top:-20px;
	margin-left:270px;
	height:20px;
	padding:0px;
	width:30px;
	position:relative;
	}

div.menuEdit {
	margin-top:-15px;
	margin-left:250px;
	height:20px;
	padding:0px;
	width:30px;
	position:relative;
	}

div.menuDel {
	margin-top:-20px;
	margin-left:290px;
	height:20px;
	padding:0px;
	width:30px;
	position:relative;
}

div.menuFleche {
	margin-top:-16px;
	margin-left:320px;
	height:20px;
	padding:0px;
	width:30px;
	position:relative;
}


/* !============================================================================== */
/*  ! Show Excel tabs                                                             */
/* !============================================================================== */

.table_data {
	border-style:ridge;
	border:1px solid;
}

.tab_base {
	background:#C5D0DD;
	font-weight:bold;
	border-style:ridge;
	border:1px solid;
	cursor:pointer;
}

.table_sub_heading {
	background:#CCCCCC;
	font-weight:bold;
	border-style:ridge;
	border:1px solid;
}

.table_body {
	background:#F0F0F0;
	font-weight:normal;
	font-family:sans-serif;
	border-style:ridge;
	border:1px solid;
	border-spacing:0px;
	border-collapse:collapse;
}

.tab_loaded {
	background:#232323;
	color:#ffffff;
	font-weight:bold;
	border-style:groove;
	border:1px solid;
	cursor:pointer;
}


/* !============================================================================== */
/*  ! CSS for color picker                                                        */
/* !============================================================================== */

a.color, a.color:active, a.color:visited {
	position:relative;
	display:block;
	text-decoration:none;
	width:10px;
	height:10px;
	line-height:10px;
	margin:0px;
	padding:0px;
	border:1px inset #ffffff;
}

a.color:hover {border:1px outset #ffffff;}

a.none, a.none:active, a.none:visited, a.none:hover {
	position:relative;
	display:block;
	text-decoration:none;
	width:10px;
	height:10px;
	line-height:10px;
	margin:0px;
	padding:0px;
	cursor:default;
	border:1px solid #b3c5cc;
}

.tblColor {display:none;}
.tdColor {padding:1px;}
.tblContainer {background-color:#b3c5cc;}

.tblGlobal {
	position:absolute;
	top:0px;
	left:0px;
	display:none;
	background-color:#b3c5cc;
	border:2px outset;
}

.tdContainer {padding:5px;}

.tdDisplay {
	width:50%;
	height:20px;
	line-height:20px;
	border:1px outset #ffffff;
}

.tdDisplayTxt {
	width:50%;
	height:24px;
	line-height:12px;
	font-family:<?php print $fontlist ?>;
	font-size:8pt;
	color:#333333;
	text-align:center;
}

.btnColor {
	width:100%;
	font-family:<?php print $fontlist ?>;
	font-size:10pt;
	padding:0px;
	margin:0px;
}

.btnPalette {
	width:100%;
	font-family:<?php print $fontlist ?>;
	font-size:8pt;
	padding:0px;
	margin:0px;
}

/* Style to overwrites JQuery styles */
.ui-menu .ui-menu-item a {
    text-decoration:none;
    display:block;
    padding:.2em .4em;
    line-height:1.5;
    zoom:1;
    font-weight:normal;
    font-family:<?php echo $fontlist; ?>;
    font-size:1em;
}

.ui-widget {
    font-family:<?php echo $fontlist; ?>;
    font-size:<?php echo $fontsize; ?>px;
}

.ui-button {margin-left:-1px;}
.ui-button-icon-only .ui-button-text {height:8px;}
.ui-button-icon-only .ui-button-text, .ui-button-icons-only .ui-button-text {padding:2px 0px 6px 0px;}
.ui-button-text {line-height:1em !important;}
.ui-autocomplete-input {margin:0; padding:1px;}


/* !============================================================================== */
/*  ! CKEditor                                                                    */
/* !============================================================================== */

.cke_editor table, .cke_editor tr, .cke_editor td {border:0px solid #FF0000 !important;}
span.cke_skin_kama {padding:0px !important;}


/* !============================================================================== */
/*  ! File upload                                                                 */
/* !============================================================================== */

.template-upload {height:72px !important;}


/* !============================================================================== */
/*  ! TREE VIEW                                                                   */
/* !============================================================================== */
table.centpercent { width: 100% !important; }
ul.treeview, ul.treeview ul, ul.treeview ul ul { background-color: transparent; }
ul.treeview table tr td { background-color: transparent; }
ul.treeview table.centpercent { width:100% !important; }
ul.treeview li.collapsable table {
	margin-top: -16px !important;
	padding-top:4px;
	}
/* ul.treeview li.collapsable table tr td { min-height: 22px !important; max-height: 22px !important; } */
ul.treeview li.collapsable table tr:hover td { background-color: rgba(0,0,0,.03); vertical-align: middle !important; }

/* ul.treeview li.collapsable table tbody tr td { border:solid 1px red;  } */
ul.treeview li.collapsable table tbody tr td a img { width: auto !important; height: auto; }
ul.treeview li.collapsable table tbody tr td strong a:hover { color:#666666; border-bottom: dashed 1px grey; }









/* !============================================================================== */
/*  ! NOTIFICATIONS                                                                */
/* !============================================================================== */

.jnotify-container .jnotify-notification .jnotify-background {
	min-width: 300px !important;
	opacity: 1 !important;
	background: #cdeb8e !important;
	background: -moz-linear-gradient(top, hsl(79,70%,74%) 0%, hsl(79,52%,56%) 100%) !important;
	background: -webkit-linear-gradient(top, hsl(79,70%,74%) 0%,hsl(79,52%,56%) 100%) !important;
	background: linear-gradient(to bottom, hsl(79,70%,74%) 0%,hsl(79,52%,56%) 100%) !important;
	border: solid 1px #6d7951 !important;
    -moz-border-radius: .3em;
    -webkit-border-radius: .3em;
    border-radius: .3em;
	box-shadow: 2px 2px 3px rgba(0,0,0,.3);
}

/* notification type == "error" */
.jnotify-container .jnotify-notification-error .jnotify-background {
    background: #ff3019 !important;
	background: -moz-linear-gradient(top, hsl(6,100%,55%) 0%, hsl(0,96%,42%) 100%) !important;
	background: -webkit-linear-gradient(top, hsl(6,100%,55%) 0%,hsl(0,96%,42%) 100%) !important;
	background: linear-gradient(to bottom, hsl(6,100%,55%) 0%,hsl(0,96%,42%) 100%) !important;
    border: solid 1px #6f1f0d !important;
}

.jnotify-container .jnotify-notification-error .jnotify-close,
.jnotify-container .jnotify-notification-error .jnotify-message {
    color: white !important;
    font-weight: normal !important;
}

/* notification type == "warning" */
.jnotify-container .jnotify-notification-warning .jnotify-background {
    background: #fcf7cc !important;
	background: -moz-linear-gradient(top, hsl(54,89%,89%) 0%, hsl(54,100%,80%) 100%) !important;
	background: -webkit-linear-gradient(top, hsl(54,89%,89%) 0%,hsl(54,100%,80%) 100%) !important;
	background: linear-gradient(to bottom, hsl(54,89%,89%) 0%,hsl(54,100%,80%) 100%) !important;
    border: solid 1px #666456 !important;
	}

.jnotify-container .jnotify-notification-warning .jnotify-close,
.jnotify-container .jnotify-notification-warning .jnotify-message {
    color: rgba(0,0,0,.6) !important;
    font-weight: normal !important;
}


/* !============================================================================== */
/*  ! MODULES                                                                     */
/* !============================================================================== */
body .conteneur { background-color: #efefef !important; height: 100%; }
.principal_login {
	background: #eeeeee;
	background: -moz-linear-gradient(-45deg, #eeeeee 0%, #cccccc 100%);
	background: -webkit-linear-gradient(-45deg, #eeeeee 0%,#cccccc 100%);
	background: linear-gradient(135deg, #eeeeee 0%,#cccccc 100%);
	padding: .6em !important;
	border-radius: .4em;
	border: solid 1px #bbb;
	border-bottom: solid 1px #666;
	}
.principal_login fieldset { color: black !important; border: none; }

	/* Documents */
	#ecm-layout-west {
	 Width: 60%;
	}

#ecm-layout-north { margin-top:1em; }
ul.ecmjqft li { list-style-type: none; padding-left: 6px; padding-top:6px; margin-left:-4px; margin-top:-2px; }
ul.ecmjqft li:hover { background-color: rgba(0,0,0,.06); }
ul.ecmjqft li .ecmjqft { text-align:right; margin-top:-16px; }
ul.ecmjqft table { width: 100%; }
.select2-container { width: 100% !important; }



/* !============================================================================== */
/*  ! MEDIAS QUERIES                                                              */
/* !============================================================================== */

@media screen and (min-width: 320px) and (max-width: 568px) {
	form#login {
		margin-top:26% !important;
		width:250px;
		}
		
	.login_main_message {
		width: 250px;
		}
	} /* media */

@media screen and (max-width: 768px) {
	/* Permet de réduire les menus en haut afin de gagner de la place (expérimental) */
	.tmenu { height:36px !important; margin-bottom:26px;  }
	.topmenuimage { display:none; }
	div.tmenudiv li {
		display:inline-block !important;
		color: #37ffff !important;
		white-space: nowrap !important;
		overflow: hidden !important;
		text-overflow: clip !important;
		width: 1.65em;
		margin-right: .8em !important;
		}
  	div.tmenudiv li:hover {
	  	color: white !important;
	  	overflow: visible !important;
	  	-webkit-transition: all ease-in-out .6s;
	  	z-index:3000 !important;
	  	}
	  	div.tmenudiv li:hover a { background-color: rgba(0,0,0,.6); }
	} /* media */

