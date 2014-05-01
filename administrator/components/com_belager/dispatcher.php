<?php
class ComBelagerDispatcher extends ComDefaultDispatcher {
	protected function _initialize(KConfig $config) {
		$config -> append(array('controller' => 'belagers'));
		parent::_initialize($config);
	}
}