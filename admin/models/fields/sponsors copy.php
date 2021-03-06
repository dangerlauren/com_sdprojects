<?php 
defined('_JEXEC') or die();

jimport('joomla.form.formfield');

class JFormFieldSponsors extends JFormField
{
	protected $type = 'Sponsors';
	
	public function getInput() 
	{
		$db = JFactory::getDBO();
		$query = 'SELECT * FROM #__sponsors ORDER BY name';
		$db->setQuery( $query );
		$allgs = $db->loadObjectList();


  		foreach ($allgs as $listc) {
  			$options[] = JHTML::_('select.option', $listc->id, $listc->name );
  		}
  		
  			
	 	$dropdown = JHTML::_('select.genericlist', $options, 'jform[company]', null, 'value', 'text', $options->id);
		return $dropdown;
	
	}
}

?>