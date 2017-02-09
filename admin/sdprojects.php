<?php

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Access check: is this user allowed to access the backend of this component?
if (!JFactory::getUser()->authorise('core.manage', 'com_sdprojects'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}
 
// Create the controller
$controller = JControllerLegacy::getInstance('Sdprojects');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();