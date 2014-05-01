<?php
class ComBelagerTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{
	public function groups( $config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'		=> 'groups',
			'name' 		=> 'belager_group_id',
			'value'		=> 'id',
			'text'		=> 'title',
			'prompt'	=> '- Select Group -',
			'attribs'    => array('id' => $config->name)
		));

		return parent::_listbox($config);
	}
	public function networks( $config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'		=> 'networks',
			'name' 		=> 'belager_network_id',
			'value'		=> 'id',
			'text'		=> 'title',
			'prompt'	=> '- Select Network -',
			'attribs'    => array('id' => $config->name)
		));

		return parent::_listbox($config);
	}
    public function targets($config = array())
    {
        $config = new KConfig($config);
        $config->append(array(
            'name' => 'target',
            'attribs'    => array('id' => $config->name)
        ));
	
		$options[]	= $this->option(array('text' => '- Select Link Target -'));
		$options[]	= $this->option(array('text' => 'New Tab or Window', 'value'=> '_blank'));
		$options[]	= $this->option(array('text' => 'This Tab or Window', 'value'=> '_self'));
		
		$list = $this->optionlist(array(
			'options'   => $options,
			'name'      => $config->name,
			'selected'  => $config->{$config->name},
			'attribs'   => $config->attribs
		));

		return $list; 
    }
	
	public function images($config = array())
    {
        $config = new KConfig($config);
        $config->append(array(
            'extensions' => 'bmp|gif|jpg|png',
            'directory'  => KRequest::root()->path.'/media/com_belager/images/icons/elegantthemes/',
            'attribs'    => array('id' => $config->name)
        ));
		$base = str_replace(JPATH_ROOT, '', $config->directory);
		
		jimport( 'joomla.filesystem.folder' );
		$files  = JFolder::files( str_replace( KRequest::root()->path, '', JPATH_ROOT).DS.$config->directory );
		$options[]	= $this->option(array('text' => '- '.JText::_( 'Select image').' -')); 
			
		foreach ($files as $file) 
		{
            if (preg_match("#".$config->extensions."#i", $file)) 
            {
				$options[] 	= $this->option(array('text' => $file, 'value' => $file));
				$preload[]	= $base.$file;
			}
		}

		if (!$config->javascript) 
		{
			$config->javascript = "
			new Asset.images(".json_encode($preload).");
			window.addEvent('domready', function(){
				$('".$config->name."').addEvent('change', function(){
					$('".$config->name."-preview').setProperty('src', '" .$base. "' + this.value);
				});
			});
			";
			
			//KService::get('JFactory::getDocument')->addScriptDeclaration($config->javascript);
			//temp fix, borrowed from com_harbour
            JFactory::getDocument()->addScriptDeclaration($config->javascript);
			
		}

		$list = $this->optionlist(array(
			'options'   => $options,
			'name'      => $config->name,
			'selected'  => $config->{$config->name},
			'attribs'   => $config->attribs
		));

		return $list; 
    }	
}