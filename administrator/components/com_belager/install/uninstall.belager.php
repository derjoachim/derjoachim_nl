<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
jimport('joomla.installer.installer');
// load the component language file
$lang = &JFactory::getLanguage();
$lang->load('com_harbout');
$status = new JObject();
$status->modules = array ();
$status->plugins = array ();
$modules = & $this->manifest->getElementByPath('modules');
$plugins = & $this->manifest->getElementByPath('plugins');
if (is_a($modules, 'JSimpleXMLElement') && count($modules->children())) {
	foreach ($modules->children() as $module) {
		$name = $module->attributes('module');
		$db = & JFactory::getDBO();
		$query = "SELECT `id` FROM `#__modules` WHERE module = ".$db->Quote($name)."";
		$db->setQuery($query);
		$modules = $db->loadResultArray();
		if (count($modules)) {
			foreach ($modules as $module) {
				$installer = new JInstaller;
				$result = $installer->uninstall('module', $module, 0);
			}
		}
		$status->modules[] = array ('name'=>$name, 'client'=>'Site', 'result'=>$result);
	}
}
if (is_a($plugins, 'JSimpleXMLElement') && count($plugins->children())) {
	foreach ($plugins->children() as $plugin) {
		$name = $plugin->attributes('plugin');
		$group = $plugin->attributes('group');
		$db = & JFactory::getDBO();
		$query = 'SELECT `id` FROM #__plugins WHERE element = '.$db->Quote($name).' AND folder = '.$db->Quote($group);
		$db->setQuery($query);
		$plugins = $db->loadResultArray();
		if (count($plugins)) {
			foreach ($plugins as $plugin) {
				$installer = new JInstaller;
				$result = $installer->uninstall('plugin', $plugin, 0);
			}
		}
		$status->plugins[] = array ('name'=>$name, 'group'=>$group, 'result'=>$result);
	}
}
?>
<?php $rows = 0;?>
<h2><?php echo JText::_('Thank you for using Harbour. We hope you learned something ;)'); ?></h2>
<table class="adminlist">
	<thead>
		<tr>
			<th class="title" colspan="2"><?php echo JText::_('System'); ?></th>
			<th width="30%"><?php echo JText::_('Status'); ?></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="3"></td>
		</tr>
	</tfoot>
	<tbody>
		<tr class="row0">
			<td class="key" colspan="2"><?php echo 'Harbour '.JText::_('Component'); ?></td>
			<td><strong><?php echo JText::_('Removed'); ?></strong></td>
		</tr>
		<?php if (count($status->modules)) : ?>
		<tr>
			<th><?php echo JText::_('Module'); ?></th>
			<th><?php echo JText::_('Client'); ?></th>
			<th></th>
		</tr>
		<?php foreach ($status->modules as $module) : ?>
		<tr class="row<?php echo (++ $rows % 2); ?>">
			<td class="key"><?php echo $module['name']; ?></td>
			<td class="key"><?php echo ucfirst($module['client']); ?></td>
			<td><strong><?php echo ($module['result'])?JText::_('Removed'):JText::_('Not removed'); ?></strong></td>
		</tr>
		<?php endforeach;?>
		<?php endif; ?>
		
		<?php if (count($status->plugins)) : ?>
		<tr>
			<th><?php echo JText::_('Plugin'); ?></th>
			<th><?php echo JText::_('Group'); ?></th>
			<th></th>
		</tr>
		<?php foreach ($status->plugins as $plugin) : ?>
		<tr class="row<?php echo (++ $rows % 2); ?>">
			<td class="key"><?php echo ucfirst($plugin['name']); ?></td>
			<td class="key"><?php echo ucfirst($plugin['group']); ?></td>
			<td><strong><?php echo ($plugin['result'])?JText::_('Removed'):JText::_('Not removed'); ?></strong></td>
		</tr>
		<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
</table>