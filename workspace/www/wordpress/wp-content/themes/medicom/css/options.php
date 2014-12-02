<?php
//OptionTree Stuff
if ( function_exists( 'get_option_tree') ) {
  $theme_options = get_option('option_tree');
}

$all_css = $parallax_back = $keys = "";

$boxedtest = get_option_tree('boxed_layout',$theme_options);
    if ( $boxedtest == "Yes" ) {
  $all_css = $all_css . "#medicom-layout { width: 1170px; margin: 0 auto; } .medicom-header { left: auto; right:auto; width: 1170px; } .medicom-header .col-md-12 { padding-left: 0; padding-right: 0; }";  
}

$bodybackground = get_option_tree('body_background', $theme_options);
$background_repeat = get_option_tree('background_repeat', $theme_options);
if( $bodybackground != "" ) {
	$all_css = $all_css . "body { background: url({$bodybackground}) {$background_repeat}; }"; 
}

if ( !empty ($theme_options['h_tags'])) {
	$keys=$theme_options['h_tags'];
	if(!empty($keys['font-family'])) {
		$all_css = $all_css . "@import url(http://fonts.googleapis.com/css?family={$keys['font-family']}:normal);";
		$all_css = $all_css . "h1, h2, h3, h4, h5, h6 {
				font-family:'{$keys['font-family']}';}";
		}
	}
if ( !empty ($theme_options['main_font'])) {
		$keys=$theme_options['main_font'];
		if(!empty($keys['font-family'])) {
          $all_css = $all_css . "@import url(http://fonts.googleapis.com/css?family={$keys['font-family']}:normal);";
          $all_css = $all_css . "body {
            font-family:'{$keys['font-family']}';}";
        }
    }

if ( !empty ($theme_options['header_menu'])) {
		$keys=$theme_options['header_menu'];
		$fontfamily = $fontweight = $fontsize = $fontstyle = $textdecoration  = $fontsize = $texttransform = "";
		
		if(!empty($keys['font-weight'])) {
			$fontweight="font-weight:{$keys['font-weight']};";
		}
		if(!empty($keys['font-variant'])) {

			$fontvariant="font-variant:{$keys['font-variant']};";
		}
		if(!empty($keys['font-size'])) {
			
			$fontsize="font-size:{$keys['font-size']};";
		}
		if(!empty($keys['font-style'])) {
			
			$fontstyle="font-style:{$keys['font-style']};";
		}
		if(!empty($keys['text-decoration'])) {
			
			$textdecoration="text-decoration:{$keys['text-decoration']};";
		}
		if(!empty($keys['text-transform'])) {
			
			$texttransform="text-transform:{$keys['text-transform']};";
		}
		if(!empty($keys['font-family'])) {
			$all_css = $all_css . "@import url(http://fonts.googleapis.com/css?family={$keys['font-family']}:normal);";
			$all_css = $all_css . ".medicom-header-small, .medicom-header-large {
				font-family:'{$keys['font-family']}'; {$fontweight} {$fontsize} {$fontstyle} {$textdecoration} {$fontvariant} {$texttransform} }";
		}		
	
}

if ( !empty ($theme_options['custom_asset_color']) ) {
		$all_css = $all_css . " 
	span {color:{$theme_options['custom_asset_color']};}
a, a:hover {color:{$theme_options['custom_asset_color']};}
.navbar-default .navbar-nav>li.firstitem.current-menu-item>a, .navbar-default .navbar-nav>li.firstitem.current-menu-parent>a {background-color: {$theme_options['custom_asset_color']};}
.medicom-header.header-2:before {background:{$theme_options['custom_asset_color']};}
.header-2 .navbar-default .navbar-nav>.firstitem.current-menu-item>a,.header-2 .navbar-default .navbar-nav>.firstitem.current-menu-item>a:hover,.header-2 .navbar-default .navbar-nav>.firstitem.current-menu-item>a:focus {background-color: {$theme_options['custom_asset_color']};}
.header-2 .navbar-default .navbar-nav>.firstitem.current-menu-parent>a,.header-2 .navbar-default .navbar-nav>.firstitem.current-menu-parent>a:hover,.header-2 .navbar-default .navbar-nav>.firstitem.current-menu-parent>a:focus {background-color: {$theme_options['custom_asset_color']};}
.header-2 .navbar-default .navbar-nav>.open>a,.header-2 .navbar-default .navbar-nav>.open>a:hover,.header-2 .navbar-default .navbar-nav>.open>a:focus {background-color: {$theme_options['custom_asset_color']};}
.header-2 .dropdown-menu>li>a:hover, .header-2 .dropdown-menu>li>a:focus {color: {$theme_options['custom_asset_color']}; }
.header-2 .dropdown-menu {border-top: 4px solid {$theme_options['custom_asset_color']};}
.header-6 span {color: {$theme_options['custom_asset_color']};}
.header-6 .dropdown-menu {border-top: 4px solid {$theme_options['custom_asset_color']};}
.header-6 .dropdown-menu>li>a:hover, .header-6 .dropdown-menu>li>a:focus{color:{$theme_options['custom_asset_color']};}
.header-1 .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus {color:{$theme_options['custom_asset_color']};}
.header-1 .dropdown-menu{border-top: 6px solid {$theme_options['custom_asset_color']};}
.multi .dropdown-menu ul li a:hover {color:{$theme_options['custom_asset_color']};}
button.search-icon{background:{$theme_options['custom_asset_color']};}
.fullstyle{background:{$theme_options['custom_asset_color']};}
.asset-bg{background: {$theme_options['custom_asset_color']};}
.teal-highlight{background: {$theme_options['custom_asset_color']};}
.widget_nav_menu h2, .menu-widget h4 {background-color: {$theme_options['custom_asset_color']};}
.widget_nav_menu ul li:hover, .menu-widget ul li:hover {color: {$theme_options['custom_asset_color']};}
ul.sub-menu li:hover a,ul.sub-menu li:active{color:{$theme_options['custom_asset_color']};}
.b_asset {background: {$theme_options['custom_asset_color']};}
.b_blue {background: {$theme_options['custom_asset_color']};}
.b_inherit { background: {$theme_options['custom_asset_color']};}
.b_teal { background: {$theme_options['custom_asset_color']};}
.page-numbers>.current>a,.page-numbers>.current>span, .page-numbers>.current>a:hover, .page-numbers>.current>span:hover, .page-numbers>.current>a:focus, .page-numbers>.current>span:focus {background: {$theme_options['custom_asset_color']};border-color: {$theme_options['custom_asset_color']};}
.page-numbers .current, .page-numbers .current:hover {background: {$theme_options['custom_asset_color']};border-color: {$theme_options['custom_asset_color']};}
.list-none i {color:{$theme_options['custom_asset_color']};}
.tabs-classic .nav-tabs>li.active>a, .tabs-classic .nav-tabs>li.active>a:hover, .tabs-classic .nav-tabs>li.active>a:focus, .tabs-classic .nav-tabs>li>a:hover {color: {$theme_options['custom_asset_color']};}
.services-1:hover {background: {$theme_options['custom_asset_color']};}
.services-1:hover .holder {color: {$theme_options['custom_asset_color']};}
.services-2:hover {background: {$theme_options['custom_asset_color']};}
.services-2:hover .holder {background: {$theme_options['custom_asset_color']};}
.services-3:hover h4 {color: {$theme_options['custom_asset_color']};}
.services-3:hover .holder {background: {$theme_options['custom_asset_color']};}
.services-3:hover .caret {border-top: 12px solid {$theme_options['custom_asset_color']};}
.services-3:hover .b_inherit {background: {$theme_options['custom_asset_color']};}
.services-4 .holder{background-color: {$theme_options['custom_asset_color']};}
.services-5:hover .holder {color: {$theme_options['custom_asset_color']};border: 6px double {$theme_options['custom_asset_color']};}
.medicom-table .back-inherit {background: {$theme_options['custom_asset_color']};}
.medicom-table .b_inherit {background: {$theme_options['custom_asset_color']};}
.asset-bg .call-to-action a{color: {$theme_options['custom_asset_color']};}
.carousel-container li:hover .latest-item  {-webkit-box-shadow: 0px 7px 0px {$theme_options['custom_asset_color']};-moz-box-shadow:0px 7px 0px {$theme_options['custom_asset_color']};box-shadow:0px 7px 0px {$theme_options['custom_asset_color']};}
.blog-widget .disabled {background: {$theme_options['custom_asset_color']};}
.blog-widget .slide-pagination a.disabled, .blog-widget .slide-pagination a:hover {background: {$theme_options['custom_asset_color']};}
.blog-wrapper .blog-title a:hover {color: {$theme_options['custom_asset_color']};}
.blog-wrapper .blog-thumbnail {position: relative; border-bottom: 4px solid {$theme_options['custom_asset_color']};}
.blog-wrapper .blog-type-logo {border-bottom: 5px solid {$theme_options['custom_asset_color']};}
.blog-wrapper .half-round {background: {$theme_options['custom_asset_color']};}
.blog-wrapper .social-widget a:hover .socialbox{background: {$theme_options['custom_asset_color']};}
.blog-style-2 .blog-date {background: {$theme_options['custom_asset_color']};}
.blog-wrapper .blog-categories ul li.current-cat a {color: {$theme_options['custom_asset_color']};}
.blog-wrapper .blog-categories ul li a:hover {color: {$theme_options['custom_asset_color']};}
.blog-style-two-column .blog-date {background: {$theme_options['custom_asset_color']};}
.blog-style-3 .blog-date {background: {$theme_options['custom_asset_color']};}
.sidebar-widget h2 {color: {$theme_options['custom_asset_color']};}
.sidebar-widget .popular-post h4 a:hover {color: {$theme_options['custom_asset_color']};}
.sidebar-widget ul li a:hover i {color: {$theme_options['custom_asset_color']};}
.sidebar-widget ul li a:hover {color: {$theme_options['custom_asset_color']};}
.sidebar-widget .medicom-tag-cloud ul li:hover a {border: 1px solid {$theme_options['custom_asset_color']}; color: {$theme_options['custom_asset_color']};}
.sidebar-widget .subscribe-mini .b_inherit {background: {$theme_options['custom_asset_color']};}
#wp-calendar tbody td a{color: {$theme_options['custom_asset_color']};}
#wp-calendar tfoot #next {color: {$theme_options['custom_asset_color']};}
#wp-calendar tfoot #prev {color: {$theme_options['custom_asset_color']};}
#wp-calendar tfoot #next a{color: {$theme_options['custom_asset_color']};}
#wp-calendar tfoot #prev a{color: {$theme_options['custom_asset_color']};}
.portfolio-style-1-filter ul li.active {color:{$theme_options['custom_asset_color']};}
.portfolio-style-1-filter ul li:hover {color: {$theme_options['custom_asset_color']};}
.portfolio-style-1 .portfolio-content {border-bottom: 4px solid {$theme_options['custom_asset_color']};}
.portfolio-style-1 .portfolio-meta:hover .holder {background: {$theme_options['custom_asset_color']};}
.portfolio-style-1 .portfolio-meta:hover .project-meta, .project-meta a:hover {color: {$theme_options['custom_asset_color']};}
.portfolio-style-3 .portfolio-item-3:hover {-webkit-box-shadow: 0px 7px 0px {$theme_options['custom_asset_color']};-moz-box-shadow: 0px 7px 0px {$theme_options['custom_asset_color']};box-shadow: 0px 7px 0px {$theme_options['custom_asset_color']};}
.html_carousel div.slide .blog-date {background: {$theme_options['custom_asset_color']};}
.html_carousel .nextprev .slidebox:hover {background: {$theme_options['custom_asset_color']};}
.contact-info .social-widget a:hover .socialbox{border-color:{$theme_options['custom_asset_color']};}
.contact-info .social-widget a:hover .socialbox i{color: {$theme_options['custom_asset_color']};}
.bottom-section {background: {$theme_options['custom_asset_color']};}
footer h4 {position: relative;color: {$theme_options['custom_asset_color']};}
footer h4 span {border-bottom: 1px solid {$theme_options['custom_asset_color']};}
.footer-widget ul li:hover:before {color: {$theme_options['custom_asset_color']};}
.footer-widget ul li a:hover {color: {$theme_options['custom_asset_color']} ;}
.footer-widget .twitter-widget .bird {color: {$theme_options['custom_asset_color']};}
.footer-widget .medicom-tag-cloud ul li:hover a { background: {$theme_options['custom_asset_color']};}
.footer-widget .social-widget a:hover .socialbox{border-color:{$theme_options['custom_asset_color']};}
.footer-widget .social-widget a:hover .socialbox i{color: {$theme_options['custom_asset_color']};}
.custom-categories ul li.active a { color: {$theme_options['custom_asset_color']};}
.custom-categories ul li a:hover { color: {$theme_options['custom_asset_color']};}
.wpb_accordion_header i {color: {$theme_options['custom_asset_color']};}
.flex-control-paging li a.flex-active {background: {$theme_options['custom_asset_color']} !important;}
.entry-title {color: {$theme_options['custom_asset_color']} !important;}
h4.wpb_pie_chart_heading {color: {$theme_options['custom_asset_color']} !important;}
.ui-datepicker-header{background: {$theme_options['custom_asset_color']} !important;}
.medicom-feature-list li i{background: {$theme_options['custom_asset_color']} !important;}
.wpb_toggle.wpb_toggle_title_active { color: {$theme_options['custom_asset_color']} !important; }
.wpb_toggle.wpb_toggle_title_active:before {background: {$theme_options['custom_asset_color']} !important; }
.ui-icon-triangle-1-s:before {color: {$theme_options['custom_asset_color']} !important;}
.ui-icon-triangle-1-e:before {color: {$theme_options['custom_asset_color']} !important;}
.tablepress tfoot th, .tablepress thead th {background-color: {$theme_options['custom_asset_color']} !important;}
.services_lists .services_list .list_icon:hover i{color:{$theme_options['custom_asset_color']} !important; }
h2.tablepress-table-name {color: {$theme_options['custom_asset_color']} !important;}
.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus{background-color: {$theme_options['custom_asset_color']};}
.item-box:hover {border-color: {$theme_options['custom_asset_color']};}
.titleBorder{color:{$theme_options['custom_asset_color']}}
.bigP h1{color:{$theme_options['custom_asset_color']}}
.services-4 .services-4-content a{color:{$theme_options['custom_asset_color']}}";
}
if ( !empty ($theme_options['custom_css'])) {
		$all_css = $all_css . "{$theme_options['custom_css']}";
}
define('medicom_custom', $all_css);
?>