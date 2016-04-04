<?php


// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


class SdprojectsViewDetails extends JViewLegacy
{
	function display($tpl = null)
	{
		
		// Get data from the model
		
		$this->sdp = $this->get('Sdp');
 
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
 
			return false;
		}
 
		// Display the template
		parent::display($tpl);
	}
}