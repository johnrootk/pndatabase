<?php
// No direct access to this file
defined('_JEXEC') or die;
jimport('joomla.application.component.modeladmin');
class PNDatabaseModelOutfit extends JModelAdmin
{
  public function getForm($data = array(), $loadData = true)
  {
    // Get the form.
    $form = $this->loadForm('com_pndatabase.outfit', 'outfit', array('control' => 'jform', 'load_data' => $loadData));
    return $form;
  }

  protected function loadFormData()
  {
    // Check the session for previously entered form data.
    $data = JFactory::getApplication()->getUserState('com_pndatabase.edit.outfit.data', array());
    if(empty($data)){
      $data = $this->getItem();
    }
    return $data;
  }

  public function getTable($name = 'Outfits', $prefix = 'PNDatabaseTable', $options = array())
  {
    return parent::getTable($name, $prefix, $options);
  }
}
