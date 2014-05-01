<?php
class ComBelagerControllerToolbarMenubar extends ComDefaultControllerToolbarMenubar {
	public function getCommands() {
		$name = $this -> getController() -> getIdentifier() -> name;

		$this -> addCommand("Your connections", array('href' => JRoute::_('index.php?option=com_belager&view=belagers'), 'active' => ($name == 'belager')));

		$this -> addCommand("Groups", array('href' => JRoute::_('index.php?option=com_belager&view=groups'), 'active' => ($name == 'group')));

		$this -> addCommand("All networks", array('href' => JRoute::_('index.php?option=com_belager&view=networks'), 'active' => ($name == 'network')));

		return parent::getCommands();
	}

}
