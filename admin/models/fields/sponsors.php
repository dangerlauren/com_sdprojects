<?php 
defined('_JEXEC') or die();

jimport('joomla.form.formfield');

class JFormFieldSponsors extends JFormField
{
	protected $type = 'Sponsors';
	
	protected function getOptions()
	{
		$db = JFactory::getDBO();
		$query = 'SELECT * FROM #__sponsors ORDER BY name';
		$db->setQuery( $query );
		$allgs = $db->loadObjectList();


  		foreach ($allgs as $listc) {
  			$options[] = JHTML::_('select.option', $listc->id, $listc->name );
  		}
  			
	 	$options = array_merge(parent::getOptions(), $options);
		return $options;
	
	}
}

?>