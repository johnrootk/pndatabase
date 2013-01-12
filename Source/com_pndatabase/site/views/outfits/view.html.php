<?php
// No direct access to this file
defined('_JEXEC') or die;
jimport('joomla.application.component.view');
class PNDatabaseViewOutfits extends JView
{
  function display($tpl = null)
  {
    // Get data from the model
    $items = $this->get('Items');
    $state = $this->get('State');
    $pagination = $this->get('Pagination');

    // Assign data to the view
    $this->items = $items;
    $this->state = $state;
    $this->sortDirection = $state->get('filter_order_Dir');
    $this->sortColumn = $state->get('filter_order');
    $this->pagination = $pagination;

    // Display the template
    parent::display($tpl);
  }
}
?>
