<?php
// No direct access to this file
defined('_JEXEC') or die;
?>
<tr>
  <th width="5">
  <?php echo JHtml::_('grid.sort', JText::_('COM_PNDATABASE_OUTFIT_HEADING_ID'), 'id', $this->sortDirection, $this->sortColumn); ?>
  </th>
  <th width="20">
  <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
  </th>
  <th>
  <?php echo JHtml::_('grid.sort', JText::_('COM_PNDATABASE_OUTFIT_HEADING_NAME'), 'name', $this->sortDirection, $this->sortColumn); ?>
  </th>
  <th>
  <?php echo JText::_('COM_PNDATABASE_OUTFIT_HEADING_BMV').' '.JHtml::_('grid.sort', 'Str', 'bmvstrength', $this->sortDirection, $this->sortColumn).' '.JHtml::_('grid.sort', 'Agi', 'bmvagility', $this->sortDirection, $this->sortColumn).' '.JHtml::_('grid.sort', 'Sta', 'bmvstamina', $this->sortDirection, $this->sortColumn); ?>
  </th>
  <th>
  <?php echo JHtml::_('grid.sort', JText::_('COM_PNDATABASE_OUTFIT_HEADING_POT'), 'wpot', $this->sortDirection, $this->sortColumn); ?>
  </th>
  <th>
  <?php echo JHtml::_('grid.sort', JText::_('COM_PNDATABASE_OUTFIT_HEADING_PUBLISHED'), 'chinese', $this->sortDirection, $this->sortColumn); ?>
  </th>
</tr>