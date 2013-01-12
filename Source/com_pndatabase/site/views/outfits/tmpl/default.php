<?php
// No direct access to this file
defined('_JEXEC') or die;
JHtml::_('behavior.tooltip');
JFormHelper::addFieldPath(JPATH_COMPONENT . '/models/fields');
?>
<div class="db-frame">
    <form action="<?php echo JRoute::_('index.php?option=com_pndatabase'); ?>" method="post" name="adminForm">
        <table style="width:50%;">
            <tr>
                <th><?php echo JText::_("COM_PNDATABASE_FILTER_LABEL_NAME"); ?></th>
                <td>
                    <input type="text" name="filter_name" id="filter_name" value="<?php echo $this->escape($this->state->get('filter.name')); ?>" />
                </td>
            </tr>
            <tr>
                <th><?php echo JText::_("COM_PNDATABASE_FILTER_LABEL_RELEASE"); ?></th>
                <td>
                    <select name="filter_release" class="inputbox">
                        <option value=""><?php echo JText::_("COM_PNDATABASE_FIELDS_SELECTONE");?></option>
                        <?php 
                            $releases = JFormHelper::loadFieldType('Releases', false); 
                            echo JHtml::_('select.options', $releases->getOptions(), 'value', 'text', $this->state->get('filter.release')); 
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th><?php echo JText::_("COM_PNDATABASE_FILTER_LABEL_POT"); ?></th>
                <td>
                    <select name="filter_pot" class="inputbox">
                        <option value=""><?php echo JText::_("COM_PNDATABASE_FIELDS_SELECTONE");?></option>
                        <?php 
                            $pots = JFormHelper::loadFieldType('Pots', false); 
                            echo JHtml::_('select.options', $pots->getOptions(), 'value', 'text', $this->state->get('filter.pot')); 
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit"><?php echo JText::_('COM_PNDATABASE_FILTER_SUBMIT'); ?></button><br/>
        <br/>
        <table class="adminlist db-table">
            <thead><?php echo $this->loadTemplate('head');?></thead>
            <tfoot><?php echo $this->loadTemplate('foot');?></tfoot>
            <tbody><?php echo $this->loadTemplate('body');?></tbody>
        </table>
        <div>
            <input type="hidden" name="filter_order" value="<?php echo $this->sortColumn; ?>" />
            <input type="hidden" name="filter_order_Dir" value="<?php echo $this->sortDirection; ?>" />
            <?php echo JHtml::_('form.token'); ?>
        </div>
    </form>
</div>