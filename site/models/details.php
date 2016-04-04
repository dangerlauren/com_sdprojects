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
		
 
		if (!isset($this->sdp))
		{
			$jinput = JFactory::getApplication()->input;
			$id = $jinput->get('id');
			//$id = '328143808';
 
			// Get a TableSdprojects instance
			$table = $this->getTable();
 
			// Load the message
			$table->load($id);
 
			// Assign the message
			$sdp = $table;
		}
 
		return $sdp;
	}
}