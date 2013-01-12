<?php
// No direct access to this file
defined('_JEXEC') or die;
jimport('joomla.application.component.modellist');
class PNDatabaseModelOutfits extends JModelList
{
    public function populateState($ordering = null, $direction = null){
          $releaseFilter = $this->getUserStateFromRequest($this->context.'.filter.release', 'filter_release', '');
          $this->setState('filter.release', $releaseFilter);
          $nameFilter = $this->getUserStateFromRequest($this->context.'.filter.name', 'filter_name', '');
          $this->setState('filter.name', $nameFilter);
          $potFilter = $this->getUserStateFromRequest($this->context.'.filter.pot', 'filter_pot', '');
          $this->setState('filter.pot', $potFilter);

          $filter_order = JRequest::getCmd('filter_order','id');
          $filter_order_Dir = JRequest::getCmd('filter_order_Dir','ASC');

          $this->setState('filter_order', $filter_order);
          $this->setState('filter_order_Dir', $filter_order_Dir);
          
          JRequest::setVar('limit',100);
          parent::populateState('id', 'ASC');
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
    
    // Filter by search in name
    $nameFilter = $this->getState('filter.name');
    if (!empty($nameFilter)) {
        $nameFilter = $db->Quote('%'.$db->escape($nameFilter, true).'%');
        $query->where('name LIKE '.$nameFilter);
    }
    // Filter by Release
    $releaseFilter = $this->getState('filter.release');
    if (!empty($releaseFilter)) {
        $query->where('`release` = ' . $db->quote($releaseFilter));
    }
    // Filter by Pot
    $potFilter = $this->getState('filter.pot');
    if (is_numeric($potFilter)) {
        $query->where('pot = ' . (int) $potFilter);
    }
    
    // Sort the output
    $query->order('`'.$db->getEscaped($this->getState('filter_order', 'id')).'` '.$db->getEscaped($this->getState('filter_order_Dir', 'ASC')));
    
    return $query;
  }
}
?>