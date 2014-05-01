<?php
class ComBelagerModelGroups extends ComDefaultModelDefault
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
	}
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{		
		parent::_buildQueryWhere($query);
	}
}