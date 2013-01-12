<?php
// No direct access to this file
defined('_JEXEC') or die;
jimport('joomla.application.component.view');
class PNDatabaseViewOutfit extends JView
{
    function display($tpl = null)
    {
        // Assign data to the view
        $this->item = $this->get('Item');

        // Display the view
        parent::display($tpl);
    }
}
