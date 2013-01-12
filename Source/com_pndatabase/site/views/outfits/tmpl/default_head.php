<?php
// No direct access to this file
defined('_JEXEC') or die;
?>
<tr>
    <th width="5%">
	<?php echo JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_GENDER', 'gender', $this->sortDirection, $this->sortColumn); ?>
    </th>
    <th width="35%">
	<?php echo JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_NAME', 'name', $this->sortDirection, $this->sortColumn); ?>
    </th>
    <th width="12%">
	<?php echo JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_RELEASE', 'release', $this->sortDirection, $this->sortColumn); ?>
    </th>
    <th width="12%">
	<?php echo JText::_('COM_PNDATABASE_OUTFIT_HEADING_INIT').'<br/> '.JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_STRSHORT', 'initstrength', $this->sortDirection, $this->sortColumn).' '.JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_AGISHORT', 'initagility', $this->sortDirection, $this->sortColumn).' '.JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_STASHORT', 'initstamina', $this->sortDirection, $this->sortColumn); ?>
    </th>
    <th width="12%">
	<?php echo JText::_('COM_PNDATABASE_OUTFIT_HEADING_GROWTH').'<br/> '.JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_STRSHORT', 'growthstrength', $this->sortDirection, $this->sortColumn).' '.JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_AGISHORT', 'growthagility', $this->sortDirection, $this->sortColumn).' '.JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_STASHORT', 'growthstamina', $this->sortDirection, $this->sortColumn); ?>
    </th>
    <th width="12%">
	<?php echo JText::_('COM_PNDATABASE_OUTFIT_HEADING_BMV').'<br/> '.JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_STRSHORT', 'bmvstrength', $this->sortDirection, $this->sortColumn).' '.JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_AGISHORT', 'bmvagility', $this->sortDirection, $this->sortColumn).' '.JHtml::_('grid.sort', 'COM_PNDATABASE_OUTFIT_HEADING_STASHORT', 'bmvstamina', $this->sortDirection, $this->sortColumn); ?>
    </th>
    <th width="12%">
	<?php echo JHtml::_('grid.sort', JText::_('COM_PNDATABASE_OUTFIT_HEADING_POT'), 'wpot', $this->sortDirection, $this->sortColumn); ?>
    </th>
</tr>