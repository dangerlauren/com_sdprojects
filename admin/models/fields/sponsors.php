<?php 
defined('_JEXEC') or die();

jimport('joomla.form.formfield');

class JFormFieldSponsors extends JFormField
{
	protected $type = 'Sponsors';
	
	public function getInput() 
	{
		$db = JFactory::getDBO();
		$query = '
SELECT a.id,b.company, b.id AS projid,a.name FROM #__sponsors AS a LEFT JOIN #__projects AS b ON (a.id = b.company);
';
		$db->setQuery( $query );
		$allgs = $db->loadObjectList();


  		foreach ($allgs as $listc) {
  			$options[] = JHTML::_('select.option', $listc->id, $listc->name );
  		}
  		
  			
	 	$dropdown = JHTML::_('select.genericlist', $options, 'jform[company]', null, 'value', 'text', $selected);
		return $dropdown;
	
	}
}

?>