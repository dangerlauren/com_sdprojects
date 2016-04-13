<?php


// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class SdprojectsModelDetails extends JModelItem
{

	protected $messages;
 
	/**
	 * Method to get a table object, load it if necessary.
	 *
	 * @param   string  $type    The table name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  JTable  A JTable object
	 *
	 * @since   1.6
	 */
	public function getTable($type = 'Sdprojects', $prefix = 'SdprojectsTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
 
	/**
	 * Get the message
	 *
	 * @param   integer  $id  Greeting Id
	 *
	 * @return  string        Fetched String from Table for relevant Id
	 */
	public function getSdp()
	{
		$db =& JFactory::getDBO();
		$id = JRequest::getInt('id');
		
		$query = $db->getQuery(true);	
 		$query->select(array('a.*', 'b.id', 'b.name'))
				->from($db->quoteName('#__projects', 'a'))
				->join('LEFT', $db->quoteName('#__sponsors', 'b') .' ON (' . $db->quoteName('a.company') . ' = ' . $db->quoteName('b.id') . ')')
				->where($db->quoteName('a.company') . ' = ' . ('b.id'))
				->where($db->quoteName('a.id') . ' = ' . ($id));
		//if (!isset($this->sdp))
		//{
			//$jinput = JFactory::getApplication()->input;
			//$id = $jinput->get('id');
			//$id = '328143808';
 
			// Get a TableSdprojects instance
			//$table = $this->getTable();
 
			// Load the message
			//$table->load($id);
 
			// Assign the message
			//$sdp = $table;
		//}
 		$db->setQuery($query);
		$db->execute();
		$sdp = $db->loadObject();
		return $sdp;
	}
}