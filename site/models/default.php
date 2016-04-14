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
		// $query->select($db->quoteName(array('id', 'title', 'year', 'students', 'solution', 'reqs', 'semester', 'team_photo', 'graphic1', 'graphic2', 'webcast', 'problem', 'name')))
  //               ->from($db->quoteName('#__projects'))
            $query->select(array('a.*'))
            ->select($db->quoteName('b.id', 'coid'))
            ->select($db->quoteName('b.name', 'coname'))
            ->select($db)->quoteName('b.url', 'courl')
				->from($db->quoteName('#__projects', 'a'))
				->join('LEFT', $db->quoteName('#__sponsors', 'b') .' ON (' . $db->quoteName('a.company') . ' = ' . $db->quoteName('b.id') . ')')
				->where($db->quoteName('a.company') . ' = ' . ('b.id'))
                ->order('year DESC');
 		$db->setQuery($query);
		$db->execute();
		$sdps = $db->loadObjectList();
		return $query;
	}
}