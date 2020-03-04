<?php if (!defined('ISLOADEDBYSTEELSHEET')) die('Must be call by steelsheet'); ?>
/* <style type="text/css" > */


/* Light mode (normal) */
:root{
	--login-bg-color: rgba(128,128,128,1);
	--login-bg-end-color: rgba(224,224,224,1);
	--login-table-bg-color: #ccc;
	
	--main-bg-color: #eeeeee;
	--main-bg-gradient-start: hsl(0,0%,93%);
	--main-bg-gradient-ends: hsl(0,0%,80%);
	--main-text-color: #222222;
	--main-text-muted-color: rgba(0,0,0,.4);
	--main-title-color: #666;
	--main-link-color: #35a1ba;
	--main-select2-color: #333;
	
	--bs-info-color : #35a1ba;
	--bs-primary-color : #2c78d4;
	--bs-success-color : #49af50;
	--bs-warning-color : #e88927;
	--bs-danger-color : #df3b1e;
	
	--button-success-bg-color: #82cb64;
	--button-success-color: white;
	--button-success-border-color: #5f9449;
	--button-danger-bg-color: #de4c5e;
	--button-danger-color: white;
	--button-danger-border-color: #993440;
	--button-primary-bg-color: #f3f4f3;
	--button-primary-color: #555655;
	--button-primary-border-color: #aaabab;
	
	--menus-bg-color: #ccc;
	--menus-bg-gradient-start: #ccc;
	--menus-bg-gradient-ends: #aaa;
	--menus-bg-active-color: #ddd;
	--menus-color: #666;
	--menus-active-color: #111;
	
	--sidebar-title-color: #444;
	--sidebar-bg-color: #ccc;
	--sidebar-bg-gradient-start: #ccc;
	--sidebar-bg-gradient-ends: #aaa;
	--sidebar-bg-active-color: #ddd;
	--sidebar-color: #666;
	--sidebar-active-color: #111;

	
	--window-bg-begin-color: #BDC1BA;
	--window-bg-ends-color: #959B92;
	--window-border-color: #D0D3CE;
	--window-text-color: #CCCCCC;
	--window-title-color: #222222;
	--window-title-bg-color: #C5C9C2;
	--windows-bg-color: #9FA69C;
	  
	--table-bg-color: #ebeeee;
	--table-second-bg-color: #efefef;
	--table-border-color: #c4ccc3;
	--table-head-bg-color: #797a7a;
	--table-head-text-color: #dbdbdb;
	--table-body-text-color: #333;
	    
	--pagination-bg-color: #bcbcbc;
	--pagination-text-color: #DDDDDD;
	--pagination-active-text-color: #222222;
	
	--modal-bg-color: #bcbcbc;
	--modal-text-color: #222222;
	--modal-border-color: rgba(0,0,0,.2);
	--modal-close-color: rgba(0,0,0,.5);
	
	--switch-bg-color: #bcbcbc;
	--switch-btn-color: #fec108;
	}

/* Dark mode */
@media (prefers-color-scheme: dark) {
	:root{
		--login-bg-color: rgba(224,224,224,1);
		--login-bg-end-color: rgba(128,128,128,1);
		--login-table-bg-color: #565656;
		
		--main-bg-color: #cedce7;
		--main-bg-gradient-start: hsl(206,34%,86%);
		--main-bg-gradient-ends: hsl(199,12%,40%);
		--main-text-color: #efefef;/*#333*/
		--main-text-muted-color: rgba(255,255,255,.4);
		--main-title-color: white;
		--main-link-color: #56a5d5;
		--main-select2-color: #333;
		
		--bs-info-color : #56a5d5;
		--bs-primary-color : #6782e0;
		--bs-success-color : #87dd7e;
		--bs-warning-color : #e0a350;
		--bs-danger-color : #e03934;
		
		--button-success-bg-color: #82cb64;
		--button-success-color: white;
		--button-success-border-color: #5f9449;
		--button-danger-bg-color: #de4c5e;
		--button-danger-color: white;
		--button-danger-border-color: #993440;
		--button-primary-bg-top-color: #cbd2d6;
		--button-primary-bg-bottom-color: #92999b;
		--button-primary-color: #111111;
		--button-primary-border-color: #454848;
		
		--menus-bg-color: #444;
		--menus-bg-gradient-start: #666;
		--menus-bg-gradient-ends: #444;
		--menus-bg-active-color: #888;
		--menus-color: #aaa;
		--menus-active-color: #fff;
		
		--sidebar-title-color: white;
		--sidebar-bg-color: #444;
		--sidebar-bg-gradient-start: #666;
		--sidebar-bg-gradient-ends: #444;
		--sidebar-bg-active-color: #ddd;
		--sidebar-color: #ddd;
		--sidebar-active-color: #fff;
		
		--window-bg-begin-color: #6a646d;
		--window-bg-ends-color: #423e45;
		--window-border-color: #2f2c31;
		--window-text-color: #333;
		--window-title-color: white;
		--window-title-bg-color: #3a363d;
		--windows-bg-color: #605963;
		
		--table-bg-color: #686868;
		--table-second-bg-color: #6f6f6f;
		--table-border-color: #6a6a6a;
		--table-head-bg-color: #444;
		--table-head-text-color: #dcdcdc;
		--table-body-text-color: #ddd;
		  
		--pagination-bg-color: #423d45;
		--pagination-text-color: #222;
		--pagination-active-text-color: white;
		
		--modal-bg-color: #423d45;
		--modal-text-color: white;
		--modal-border-color: rgba(255,255,255,.2);
		--modal-close-color: rgba(255,255,255,.5);
		
		--switch-bg-color: #423d45;
		--switch-btn-color: #fec108;
		}
} /* end of dark mode */

