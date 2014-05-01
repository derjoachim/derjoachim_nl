<?php
class ComBelagerModelBelagers extends ComDefaultModelDefault
{
	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
			->insert('groupid'    ,  'int')
			->insert('ordering'   , 'int')
			->insert('enabled'    , 'int');
	}
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;

		if(is_numeric($state->ordering)) {
			$query->where('tbl.ordering','=', $state->ordering);
		}
		
		if(is_numeric($state->enabled)) {
			$query->where('tbl.enabled','=', $state->enabled);
		}
		
		if ($this->_state->groupid) {
            $query->where('tbl.belager_group_id', '=', $state->groupid);
        }
		/* @TODO?
		if($state->search)
		{
			$search = '%'.$state->search.'%';
			$query->where('description', 'LIKE',  $search);
		}*/
		
		parent::_buildQueryWhere($query);
	}	
}