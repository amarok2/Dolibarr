<?php if (!defined('ISLOADEDBYSTEELSHEET')) die('Must be call by steelsheet'); ?>

/* ============================================================================== */
/* LOGIN                                                                          */
/* ============================================================================== */
body.bodylogin .login_center {
	position: absolute;
	top:0;
	left:0;
	right:0;
	bottom:0 !important;
	}

body.bodylogin .login_vertical_align {
	margin-top: 6%;
	width:50%;
	margin-left:25%;
	margin-right:25%;
	padding:1.3em;
	border-radius: .2em;
	background: var(--main-bg-color);
	background: -moz-linear-gradient(-45deg, var(--main-bg-gradient-start) 0%, var(--main-bg-gradient-ends) 100%);
	background: -webkit-linear-gradient(-45deg, var(--main-bg-gradient-start) 0%,var(--main-bg-gradient-ends) 100%);
	background: linear-gradient(135deg, var(--main-bg-gradient-start) 0%,var(--main-bg-gradient-ends) 100%);
	box-shadow: 1px 1px 12px rgba(0,0,0,.2);
	}

body.bodylogin a { color: #004e7f; text-decoration: none; }
body.bodylogin .login_table_title { color: rgba(0,0,0,.6) !important; }
body.bodylogin .login_main_home { font-size:120%; color: rgba(255,255,255,.8); text-align: center; width:100%; padding-top:1em; } 

/* end of Login */


/* ============================================================================== */
/* Default styles                                                                 */
/* ============================================================================== */
html { font-size:100%; }

body {
	background: var(--main-bg-color);
	background: -moz-linear-gradient(-45deg, var(--main-bg-gradient-start) 0%, var(--main-bg-gradient-ends) 100%);
	background: -webkit-linear-gradient(-45deg, var(--main-bg-gradient-start) 0%,var(--main-bg-gradient-ends) 100%);
	background: linear-gradient(135deg, var(--main-bg-gradient-start) 0%,var(--main-bg-gradient-ends) 100%);


	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;

	color: rgb(<?php echo $colortext; ?>);
	font-size: <?php print is_numeric($fontsize) ? $fontsize.'px' : $fontsize; ?>;
	line-height: 1.4;
	font-family: <?php print $fontlist ?>;
    margin-top: 0;
    margin-bottom: 0;
    margin-right: 0;
    margin-left: 0;
    <?php print 'direction: '.$langs->trans("DIRECTION").";\n"; ?>
}

.center { text-align: center !important; }
.pull-right { float: right !important; }
.pull-left { float: left !important; }
.valignmiddle { text-align:center !important; }
.width50 { width:50px !important; height: auto; }

img.photo, img.photouserphoto,img.userphoto, img.inline-block, img.paddingright { width:16px; height:auto; }
img.mycompany { height:32px; width:auto; padding-top:4px;}
img.width50, img.dropdown-user-image { width:50px; height:auto; }
img.img-skinthumb { width:160px; height:120px; }

td img { width:22px; height:auto; }


/* ============================================================================== */
/* BLOCS POSITIONS                                                                */
/* ============================================================================== */
	/* Menus en haut */
	.side-nav-vert {
		top:0;
		left:0;
		right:0;
		width:100%;
		background: var(--menus-bg-color);
		background: -moz-linear-gradient(top, var(--menus-bg-gradient-start) 0%, var(--menus-bg-gradient-ends) 100%);
		background: -webkit-linear-gradient(top, var(--menus-bg-gradient-start) 0%, var(--menus-bg-gradient-ends) 100%);
		background: linear-gradient(to bottom, var(--menus-bg-gradient-start) 0%, var(--menus-bg-gradient-ends) 100%);
		
		height: 36px;
		}
	
	.side-nav-vert ul li { display:inline-block; }
	.side-nav-vert ul li a { color: var(--menus-color); }
	.side-nav-vert ul li a:hover, .side-nav-vert ul li a:active { color: var(--menus-active-color); -webkit-transition: all ease-in-out .4s; }
	
	/* Partie principale */
	.id-container {
		
	}
	
	/* Menus à gauche */
	.id-container .side-nav {
		top:36px;
		left:0;
		width:250px;
		bottom:0;
		}
	.vmenu { height:100%; bottom:0; padding-top:1.2em;}
	.vmenu .blockvmenubookmarks .select2, .vmenu .blockvmenusearch .select2 { margin:6px; width:238px !important; }
		
	/* Partie à droite */
	.id-container #id-right {
		display: block;
		position: absolute;
		top: 36px;
		left: 250px;
		right: 0;
		bottom: 0 !important;
		height: inherit !important;
		background-color: transparent !important;
/* 		border-left: solid 1px rgba(0,0,0,.2); */
		padding: 1em;
		margin-bottom: 3em !important;
		}

/* end of bloc positions */


/* ============================================================================== */
/* BUTTONS.                                                                       */
/* ============================================================================== */
button, input[type=submit], .butAction, .butActionDelete, .button-top-menu-dropdown {
	color:hsl(0,0%,20%) !important;
	text-shadow: 1px 1px 1px hsl(0,0%,90%) !important;
	padding:.2em !important;
	padding-left:.4em !important;
	padding-right:.4em !important;
	margin-right:1em !important;
	border-radius: .2em !important;
	border:solid 1px hsl(0,0%,70%) !important;
	box-shadow: 1px 1px 1px rgba(255,255,255,.6) inset !important;
	background: #eeeeee !important;
	background: -moz-linear-gradient(top, hsl(0,0%,93%) 0%, hsl(0,0%,80%) 100%) !important;
	background: -webkit-linear-gradient(top, hsl(0,0%,93%) 0%,hsl(0,0%,80%) 100%) !important;
	background: linear-gradient(to bottom, hsl(0,0%,93%) 0%,hsl(0,0%,80%) 100%) !important;
	}
button:hover, input[type=submit]:hover, .butAction:hover, .butActionDelete:hover, .button-top-menu-dropdown:hover {
	text-shadow: none !important;
	background: #eeeeee !important;
	background: -moz-linear-gradient(top, hsl(0,0%,80%) 0%, hsl(0,0%,93%) 100%) !important;
	background: -webkit-linear-gradient(top, hsl(0,0%,80%) 0%,hsl(0,0%,93%) 100%) !important;
	background: linear-gradient(to bottom, hsl(0,0%,80%) 0%,hsl(0,0%,93%) 100%) !important;
	}
button:active, input[type=submit]:active, .butAction:active, .butActionDelete:active, .button-top-menu-dropdown:active {
	text-shadow: none !important;
	box-shadow: none !important;
	background: #eeeeee !important;
	background: -moz-linear-gradient(top, hsl(0,0%,60%) 0%, hsl(0,0%,80%) 100%) !important;
	background: -webkit-linear-gradient(top, hsl(0,0%,60%) 0%,hsl(0,0%,80%) 100%) !important;
	background: linear-gradient(to bottom, hsl(0,0%,60%) 0%,hsl(0,0%,80%) 100%) !important;
	}


/* end of buttons */



/* ============================================================================== */
/* FORMS                                                                          */
/* ============================================================================== */
input[type=text], input[type=password] {
	border-radius: .2em;
	border:solid 1px #999;
	margin:.1em;
	padding:.1em;
	width:90%;
}


/* end of forms */



/* ============================================================================== */
/* MENUS                                                                          */
/* ============================================================================== */
.login_block.usedropdown {
	display:flex;
	position:relative;
	float:right;
	margin-top:-32px;
	margin-right: 4px;
	text-align: right !important;
	background-color:rgba(0,0,0,.2);
	padding:.2em;
	border-radius:.1em;
	}
.login_block.usedropdown a.login-dropdown-a, .login_block_other a { color:rgba(255,255,255,.6); }
.login_block.usedropdown a.login-dropdown-a:hover, .login_block_other a:hover { color: white; text-decoration: none; -webkit-transition: all ease-in-out .4s; }

.dropdown-menu { border-radius: .2em !important; }
.dropdown-menu .user-header {
	border:none !important;
	background: #cedce7 !important;
	background: -moz-linear-gradient(-45deg, hsl(206,34%,86%) 0%, hsl(199,12%,40%) 100%) !important;
	background: -webkit-linear-gradient(-45deg, hsl(206,34%,86%) 0%,hsl(199,12%,40%) 100%) !important;
	background: linear-gradient(135deg, hsl(206,34%,86%) 0%,hsl(199,12%,40%) 100%) !important;
	}


li.menuhider a.menuhider { display:none; }
.tmenu ul { line-height: 36px; margin:0; }
.tmenu ul li { padding-right: .3em; }
.tmenu ul li a { color: var(--menus-color); }
.tmenu ul li a:hover, .tmenu ul li a.tmenusel { color: var(--menus-active-color); text-decoration: none; -webkit-transition: all ease-in-out .4s; }

/*
		--sidebar-title-color: #444;
	--sidebar-bg-color: #ccc;
	--sidebar-bg-gradient-start: #ccc;
	--sidebar-bg-gradient-ends: #aaa;
	--sidebar-bg-active-color: #ddd;
	--sidebar-color: #666;
	--sidebar-active-color: #111;
	*/
.blockvmenu .menu_titre {
	display:block;
	background: var(--sidebar-bg-color);
	background: -moz-linear-gradient(top, var(--sidebar-bg-gradient-start) 0%, var(--sidebar-bg-gradient-ends) 100%);
	background: -webkit-linear-gradient(top, var(--sidebar-bg-gradient-start) 0%,var(--sidebar-bg-gradient-ends) 100%);
	background: linear-gradient(to bottom, var(--sidebar-bg-gradient-start) 0%,var(--sidebar-bg-gradient-ends) 100%);
}
.blockvmenu .menu_titre a {display:block; color: var(--sidebar-color); padding:.5em;}
.blockvmenu .menu_titre a:hover {color: var(--sidebar-active-color); text-decoration: none; -webkit-transition: all ease-in-out .4s; }
.blockvmenufirst {margin-top:1em; border-top:solid 1px rgba(255,255,255,.3); }
.blockvmenulast {box-shadow: 0 0 3px rgba(0,0,0,.3); }
.blockvmenu .menu_contenu {
	padding-left:1.5em;
	background-color: white;
	font-size:96%;
}
.blockvmenu .menu_contenu a { color:rgba(0,0,0,.9); }
.blockvmenu .menu_contenu a:hover { color:#1d78c7; text-decoration: none; -webkit-transition: all ease-in-out .4s; }
/* end of menus */



/* ============================================================================== */
/* ALERTS                                                                         */
/* ============================================================================== */
.jnotify-container { position: absolute; top:1em; right: 1em; width: inherit;  }
.jnotify-notification { }
.jnotify-notification-warning { color: #5b5444 !important; }
.jnotify-notification-error { color: #782a1c !important; }
.jnotify-background {
/* 	border:solid 1px #afa07c; */
	box-shadow: 1px 1px 3px rgba(0,0,0,.3);
	border-radius:.3em;
	
	background: #fcf294;
	background: -moz-linear-gradient(-45deg, hsl(54,95%,78%) 0%, hsl(53,100%,92%) 100%);
	background: -webkit-linear-gradient(-45deg, hsl(54,95%,78%) 0%,hsl(53,100%,92%) 100%);
	background: linear-gradient(135deg, hsl(54,95%,78%) 0%,hsl(53,100%,92%) 100%);	
	opacity:1 !important;
	}
.jnotify-message { font-weight: normal !important; font-size:80% !important; }

/* end of alerts
	




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


div.inline-block { display: inline-block; }


/* !============================================================================== */
/* ! ONGLETS                                                                      */
/* !============================================================================== */

div.tabs {
    margin-top:.4em;
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
    margin-bottom: .5em;
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



/* ============================================================================== */
/* BOX-FLEX.                                                                      */
/* ============================================================================== */


.box-flex-container {
	display:inline-flex;
	flex-flow: row wrap;
    justify-content: flex-start;
	position: relative;
	margin-top:.3em;
	}
	
.box-flex-item {
/* 	width:32% !important; */
	font-family: monospace;
	margin:.3em;
	}
	

.info-box {
	background: #fcfff4;
	background: -moz-linear-gradient(-45deg, #fcfff4 0%, #b3bead 100%);
	background: -webkit-linear-gradient(-45deg, #fcfff4 0%,#b3bead 100%);
	background: linear-gradient(135deg, #fcfff4 0%,#b3bead 100%);
	border:solid 1px #b3bead;
	border-radius: .2em;
	min-height: 80px !important;
	height: 80px !important;
	max-height:80px !important;
	padding: 0;
	box-shadow: 1px 1px 3px rgba(0,0,0,.2);
	}
.info-box-icon { display:block; width: 60px; height: 100%; background-color: rgba(0,0,0,.1); vertical-align: middle; text-align:center; }
.info-box-icon img { padding-top:.6em; }
.info-box-content {
	display:block;
	position:relative;
	margin-left:66px;
	top: -76px;
}
.width50 { width:50px; height: auto; }

.info-box-title {
	display:block;
	position:relative;
	font-weight: bold;
	text-transform: uppercase;
	padding-bottom: .3em;
}
.info-box-sm {
	
	}
.info-box-number {
	
}
.progress-description { display:block; font-size:80%; opacity:.4;}


.box-flex-item.filler { display:none; }
/* end of box-flex */





/* ============================================================================== */
/* MEDIAS QUERIES                                                                 */
/* ============================================================================== */	
/* Extra small devices (portrait phones, less than 576px) */
@media (max-width: 576px) {
	/* maybe time to hide the menu and display the icon ... */
/* 	.tmenu ul li a { color: red; } */
	
	/* Menus en haut */
	.side-nav-vert {
		top:0;
		left:0;
		right:0;
		width:100%;
		height: 120px;
		}
	
	

	/* Menus à gauche */
	.id-container .side-nav {
		top:120px; /* doit changer en fonction des icones */
		left:0;
		width:250px;
		bottom:0;
		}
			
	/* Partie à droite */
	.id-container #id-right {
		display:block;
		position:absolute;
		top: 120px; /* doit changer en fonction des icones */
		left: 250px;
		right:0;
		bottom: 0 !important;
		z-index:-1;
		}
		
	/* dashboard boxes */
	.box-flex-item { width:100% !important; }
		
}

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {
/* 	.tmenu ul li a { color: green; } */
	/* Menus en haut */
	.side-nav-vert {
		top:0;
		left:0;
		right:0;
		width:100%;
		height: 90px; /* doit changer en fonction des icones */
		}

	/* Menus à gauche */
	.id-container .side-nav {
		top:90px; /* doit changer en fonction des icones */
		left:0;
		width:250px;
		bottom:0;
		}
		
	/* Partie à droite */
	.id-container #id-right {
		display:block;
		position:absolute;
		top: 90px; /* doit changer en fonction des icones */
		left: 250px;
		right:0;
		bottom: 0 !important;
		}
		
	/* dashboard boxes */
	.box-flex-item { width:100% !important; }
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
/* 	.tmenu ul li a { color: pink; } */
	/* Menus en haut */
	.side-nav-vert {
		top:0;
		left:0;
		right:0;
		width:100%;
		height: 72px; /* doit changer en fonction des icones */
		}

	/* Menus à gauche */
	.id-container .side-nav {
		top:72px; /* doit changer en fonction des icones */
		left:0;
		width:250px;
		bottom:0;
		}
		
	/* Partie à droite */
	.id-container #id-right {
		display:block;
		position:absolute;
		top: 72px; /* doit changer en fonction des icones */
		left: 250px;
		right:0;
		bottom: 0 !important;
		}
		
	/* dashboard boxes */
	.box-flex-item { width:48% !important; }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
/* 	.tmenu ul li a { color: yellow; } */
	/* Menus en haut */
	.side-nav-vert {
		top:0;
		left:0;
		right:0;
		width:100%;
		height: 72px; /* doit changer en fonction des icones */
		}

	/* Menus à gauche */
	.id-container .side-nav {
		top:72px; /* doit changer en fonction des icones */
		left:0;
		width:250px;
		bottom:0;
		}
		
	/* Partie à droite */
	.id-container #id-right {
		display:block;
		position:absolute;
		top: 72px; /* doit changer en fonction des icones */
		left: 250px;
		right:0;
		bottom: 0 !important;
		}
		
		/* dashboard boxes */
	.box-flex-item { width:32% !important; }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
/* 	.tmenu ul li a { color: black; } */
	/* Menus en haut */
	.side-nav-vert {
		top:0;
		left:0;
		right:0;
		width:100%;
		height: 36px; /* doit changer en fonction des icones */
		}

	/* Menus à gauche */
	.id-container .side-nav {
		top:36px; /* doit changer en fonction des icones */
		left:0;
		width:250px;
		bottom:0;
		}
		
	/* Partie à droite */
	.id-container #id-right {
		display:block;
		position:absolute;
		top: 36px; /* doit changer en fonction des icones */
		left: 250px;
		right:0;
		bottom: 0 !important;
		}
		
		/* dashboard boxes */
	.box-flex-item { width:32% !important; }
}



/* end of medias queries */