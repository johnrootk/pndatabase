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
        $this->sortDirection = $state->get('filter_order_Dir');
        $this->sortColumn = $state->get('filter_order');
        $this->pagination = $pagination;

        // Set the toolbar
        $this->addToolBar();

        // Display the template
        parent::display($tpl);
    }

    protected function addToolBar()
    {
        JToolBarHelper::title(JText::_('COM_PNDATABASE_MANAGER_OUTFITS'));
        JToolBarHelper::publish('outfits.publish', 'JTOOLBAR_PUBLISH', true);
        JToolBarHelper::unpublish('outfits.unpublish', 'JTOOLBAR_UNPUBLISH', true);
        JToolBarHelper::deleteListX('', 'outfits.delete');
        JToolBarHelper::editListX('outfit.edit');
        JToolBarHelper::addNewX('outfit.add');
    }
}
?>
