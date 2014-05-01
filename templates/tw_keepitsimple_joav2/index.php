<?php
/*
// Keep It Simple Joa
//====================
// Based on "Keep It Simple" Template for Joomla! 1.5.x - Version: 1.0
// Designed by styleshout (www.styleshout.com) & developed for Joomla! by TemplateWorks
// Copyright (c) 2008 - 2009 TemplateWorks. All rights reserved.
// Released under the GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
// More info at http://www.templateworks.net
// *** Last update: Jun 20th, 2009 ***
//
// Modified for personal use by Joachim van de Haterd 2010-2012
// ============================================================
// http://www.derjoachim.nl/
// Free for personal use if you dare. :)
// V2: HTML5 FTW
*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$this->setMetaData('generator','');
$app = JFactory::getApplication();
$sitename = $app->getCfg('sitename');
$option = JRequest::getCmd('option');
$view = JRequest::getCmd('view');
$layout = JRequest::getCmd('layout');
$page = JRequest::getCmd('page');
$category_id = JRequest::getCmd('category_id');
$task = JRequest::getCmd('task');
$itemid = JRequest::getCmd('Itemid');
$siteurl= "index.php";

// Template Parameters
$enable_css_compression = $this->params->get('enable_css_compression');
$tagline = $this->params->get('tagline');
$youarehere = $this->params->get('youarehere');
$return_to_frontpage = $this->params->get('return_to_frontpage');
?>
<!DOCTYPE html>
<html xml:lang="<?=$this->language;?>" lang="<?=$this->language;?>">
<head>
<jdoc:include type="head" />
<meta http-equiv="imagetoolbar" content="false" />
<meta name="Copyright" content="Designed and developed by Joachim van de Haterd http://www.derjoachim.nl/" />
<meta charset="utf-8" />
<link rel="stylesheet" href="<?=$this->baseurl;?>/templates/<?=$this->template;?>/css/template.css" type="text/css" />
<link rel="shortcut icon" href="<?=$this->baseurl;?>/templates/<?=$this->template;?>/favicon.ico" />
<!--[if lte IE 6]>
<style type="text/css" media="all">
@import "<?=$this->baseurl; ?>/templates/<?=$this->template; ?>/css/template_ie.css";
</style>
<![endif]-->
<!--[if IE 7]>
<style type="text/css" media="all">
@import "<?=$this->baseurl; ?>/templates/<?=$this->template; ?>/css/template_ie7.css";
</style>
<![endif]-->
<script type="text/javascript">
var _gaq = _gaq || []; 
_gaq.push(['_setAccount', 'UA-22946638-1']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
</head>
<body id="<?php echo $option;?>" class="<?php echo $view.' '.$layout.' '.$task;?>">
<div id="top-container">
	<div id="top">
		<div class="topArea">
			<div id="menu-top"><jdoc:include type="modules" name="user3" style="tw" /></div>
			<div id="search"><jdoc:include type="modules" name="user4" style="tw" /></div>
			<div class="clr"></div>
		</div>
		<div id="logo"><h1><a href="<?php echo $siteurl; ?>" title="<?php if($view=="frontpage") echo $sitename; else echo $return_to_frontpage; ?>"> <?php echo $sitename;?> </a></h1>
		<h2><?php echo $tagline; ?></h2>
	</div>
	<div class="clr"></div>
</div>
<div id="content">
	<jdoc:include type="message" />
	<?php $extraWidth = ($this->countModules('right'))? '' : 'style="width:674px;"'; ?>
	<div id="left-col" <?php echo $extraWidth; ?>>
		<?php if($view!="frontpage" && $this->countModules('breadcrumbs')): ?>
		<div id="pathway"> <?php echo $youarehere; ?><jdoc:include type="module" name="breadcrumbs" style="none" /></div>
		<?php endif; ?>
		<jdoc:include type="component" />
	</div>
	<?php if(($this->countModules('left')) and ($task!="edit")) : ?>
		<?php $noBorder = ($this->countModules('right'))? '' : 'style="border-right:0;"' ; ?>
		<div id="mid-col" <?php echo $noBorder; ?>>
		<jdoc:include type="modules" name="left" style="tw" />
	</div>
	<?php endif; ?>
	<?php if(($this->countModules('right')) and ($task!="edit")) : ?>
	<div id="right-col">
		<jdoc:include type="modules" name="right" style="tw" />
	</div>
	<?php endif; ?>
	<div class="clr"></div>
	</div>
</div>
<div id="footer">
	<?php if($this->countModules('footer')) : ?>
	<jdoc:include type="modules" name="footer" style="tw" />
	<?php endif; ?>
</div>
</body>
</html>