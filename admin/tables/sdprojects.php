<?php

// No direct access
defined('_JEXEC') or die('Restricted access');
 
class SdprojectsTableSdprojects extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__projects', 'id', $db);
		parent::__construct('#__sponsors', 'id', $db);
	}
}