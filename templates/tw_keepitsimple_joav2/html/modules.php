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
defined('_JEXEC') or die('Restricted access');


/*
 * tw
 */
function modChrome_tw($module, &$params, &$attribs)
{
	if (!empty ($module->content)) :
?>
<div class="moduletable <?php echo $params -> get('moduleclass_sfx');?>">
	<?php if ($module->showtitle != 0) :
	?>
	<h3><?php echo $module -> title;?></h3>
	<?php endif;?>
	<?php echo $module -> content;?>
</div>
<?php endif;
	}
?>