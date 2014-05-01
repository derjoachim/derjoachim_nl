<?php
/*
// "Keep It Simple" Template for Joomla! 1.5.x - Version: 1.0
// Designed by styleshout (www.styleshout.com) & developed for Joomla! by TemplateWorks
// Copyright (c) 2008 - 2009 TemplateWorks. All rights reserved.
// Released under the GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
// More info at http://www.templateworks.net
// *** Last update: Jun 20th, 2009 ***
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

include_once(JPATH_SITE."/templates/".$this->template."/includes/tw_api.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
<style type="text/css" media="all">
@import "<?php echo $this->baseurl; ?>/templates/<?php echo $mainframe->getTemplate(); ?>/css/template_css.<?php if($enable_css_compression) echo "php"; else echo "css"; ?>";
</style>
</head>
<body class="contentpane">
    <jdoc:include type="message" />
    <jdoc:include type="component" />
</body>
</html>
