<?php
/*
// "Keep It Simple" Template for Joomla! 1.5.x - Version: 1.0
// Designed by styleshout (www.styleshout.com) & developed for Joomla! by TemplateWorks
// Copyright (c) 2008 - 2009 TemplateWorks. All rights reserved.
// Released under the GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
// More info at http://www.templateworks.net
// *** Last update: Jun 20th, 2009 ***
*/

ob_start ("ob_gzhandler");
header("Content-type: text/css; charset: UTF-8");
header("Cache-Control: must-revalidate");
$offset = 60 * 60 ;
$ExpStr = "Expires: " . 
gmdate("D, d M Y H:i:s",
time() + $offset) . " GMT";
header($ExpStr);
include("template_css.css");
ob_flush();
?>