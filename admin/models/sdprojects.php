<?php
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


class SdprojectsModelSdprojects extends JModelList
{
	protected function populateState($ordering = null, $direction = null) {
		parent::populateState('year', 'DESC');
	}

	public function __construct($config = array()) 
	{
		$config['filter_fields'] = array(
			'title',
			'year',
			'id',
			'students',
			'semester'
		);
		parent::__construct($config);
	}

	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		
		$query->select(array('a.*', 'b.id', 'b.name'), array(NULL, 'coid','coname'))
				->from($db->quoteName('#__projects', 'a'))
				->join('LEFT', $db->quoteName('#__sponsors', 'b') .' ON (' . $db->quoteName('a.company') . ' = ' . $db->quoteName('b.id') . ')')
				->where($db->quoteName('a.company') . ' = ' . ('b.id'));
 		$query->order($db->escape($this->getState('list.ordering', 'a.year')).' '.
 				$db->escape($this->getState('list.direction', 'DESC')));		
		return $query;
 
		// Create the base select statement.
		//$query->select('*')
          //      ->from($db->quoteName('#__projects'));
 		//$query->order($db->escape($this->getState('list.ordering', 'year')).' '.
 				//$db->escape($this->getState('list.direction', 'DESC')));		
		//return $query;
	}


	protected function _buildQuery()
	{
		// $query->select(array('a.*', 'b.id', 'b.name'), array(NULL, 'coid','coname'))
		// 		->from($db->quoteName('#__projects', 'a'))
		// 		->join('LEFT', $db->quoteName('#__sponsors', 'b') .' ON (' . $db->quoteName('a.company') . ' = ' . $db->quoteName('b.id') . ')')
		// 		->where($db->quoteName('a.company') . ' = ' . ('b.id'));
		
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select(array('a.*', 'b.id', 'b.name'), array(NULL, 'coid','coname'))
				->from($db->quoteName('#__projects', 'a'))
				->join('LEFT', $db->quoteName('#__sponsors', 'b') .' ON (' . $db->quoteName('a.company') . ' = ' . $db->quoteName('b.id') . ')')
				->where($db->quoteName('a.company') . ' = ' . ('b.id'));

		$db->setQuery($query);
		$row = $db->loadObjectList(); 
	}	
}