<?php
// No direct access to this file
defined('_JEXEC') or die;
jimport('joomla.application.component.modellist');
class PNDatabaseModelOutfits extends JModelList
{
    protected $searchInFields = array('release');
    
    public function __construct($config = array()){
        $config['filter_fields']=array_merge($this->searchInFields,array('release'));
        parent::__construct($config);
    }
    
  public function populateState(){
      parent::populateState();
      $filter_order = JRequest::getCmd('filter_order','id');
      $filter_order_Dir = JRequest::getCmd('filter_order_Dir','ASC');

      $this->setState('filter_order', $filter_order);
      $this->setState('filter_order_Dir', $filter_order_Dir);
  }

  protected function getListQuery()
  {
    // Create a new query object.
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);

    // Select some fields
    $query->select('#__PNDatabase_outfits.*, #__PNDatabase_wishingpots.name AS wpot');

    // From the outfits table
    $query->from('#__PNDatabase_outfits');

    $query->innerJoin('#__PNDatabase_wishingpots ON #__PNDatabase_wishingpots.id = #__PNDatabase_outfits.pot');
    
    // Sort the output
    $query->order($db->getEscaped($this->getState('filter_order', 'id')).' '.$db->getEscaped($this->getState('filter_order_Dir', 'ASC')));

    return $query;
  }
}
?>