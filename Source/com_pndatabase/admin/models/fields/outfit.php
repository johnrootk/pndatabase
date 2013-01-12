<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
class JFormFieldOutfit extends JFormFieldList
{
  protected $type = 'Outfit';
  protected function getOptions()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);
    $query->select('id,name');
    $query->from('#__PNDatabase_outfits');
    $db->setQuery((string)$query);
    $titles = $db->loadObjectList();
    $options = array();
    if($titles){
      foreach($titles as $title)
      {
        $options[] = JHtml::_('select.option', $title->id, $title->id.' '.$title->name);
      }
    }
    $options = array_merge(parent::getOptions(), $options);
    return $options;
  }
}