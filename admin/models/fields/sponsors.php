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
SELECT a.id,a.title,a.year,a.company, b.id AS coid,b.name FROM #__projects AS a LEFT JOIN #__sponsors AS b ON (a.company = b.id) LIMIT 0, 1000;
';
		$db->setQuery( $query );
		$allgs = $db->loadObjectList();


  		foreach ($allgs as $listc) {
  			$options[] = JHTML::_('select.option', $listc->coid, $listc->name );
  		}
  		
  			
	 	$dropdown = JHTML::_('select.genericlist', $options, 'jform[company]', null, 'value', 'text', $options->id);
		return $dropdown;
	
	}
}

?>