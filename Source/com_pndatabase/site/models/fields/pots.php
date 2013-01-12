<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
class JFormFieldPots extends JFormFieldList
{
  protected $type = 'Pots';
  public function getOptions()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);
    $query->select('*');
    $query->from('#__PNDatabase_wishingpots');
    $db->setQuery((string)$query);
    $titles = $db->loadObjectList();
    $options = array();
    if($titles){
      foreach($titles as $title)
      {
        $options[] = JHtml::_('select.option', $title->id, $title->name);
      }
    }
    return $options;
  }
}