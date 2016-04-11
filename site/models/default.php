<?php


// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class SdprojectsModelDefault extends JModelList
{

	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$this->setState('list.limit', 15);
		$query = $db->getQuery(true);
 
		// Create the base select statement.
		$query->select($db->quoteName(array('id', 'title', 'year', 'students', 'solution', 'reqs', 'semester', 'team_photo', 'graphic1', 'graphic2', 'webcast', 'problem', 'name')))
                ->from($db->quoteName('#__projects'))
                ->order('year DESC');
 		$db->escape($this->getState('setQuery($query)');
		$db->execute();
		$sdps = $db->loadObjectList();
		return $query;
	}
}