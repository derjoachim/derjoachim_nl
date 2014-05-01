<?php
class ComBelagerDatabaseTableBelagers extends KDatabaseTableAbstract {
	public function __construct(KConfig $config) {
		$config->append(array(
			'name' => 'belager_view_belagers',
			'behaviors'  => array('orderable'),
			'base' => 'belager_belagers'
		));
		parent::__construct($config);
	}
}
