<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
class JFormFieldReleases extends JFormFieldList
{
  protected $type = 'Releases';
  public function getOptions()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);
    $query->select('DISTINCT `release`');
    $query->from('#__PNDatabase_outfits');
    $db->setQuery((string)$query);
    $titles = $db->loadObjectList();
    $options = array();
    if($titles){
      foreach($titles as $title)
      {
        $options[] = JHtml::_('select.option', $title->release, $title->release);
      }
    }
    return $options;
  }
}