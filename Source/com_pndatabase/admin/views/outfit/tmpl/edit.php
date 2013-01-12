<?php
// No direct access to this file
defined('_JEXEC') or die;
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_pndatabase&layout=edit&id='.(int) $this->item->id); ?>"
  method="post" name="adminForm" id="outfit-form">
  <fieldset class="adminform">
    <legend><?php echo JText::_('COM_PNDATABASE_OUTFIT_DETAILS'); ?></legend>
    <ul class="adminformlist">
      <?php foreach($this->form->getFieldset() as $field): ?>
        <li><?php echo $field->label;echo $field->input;?></li>
      <?php endforeach; ?>
    </ul>
  </fieldset>
  <div>
    <input type="hidden" name="task" value="outfit.edit" />
      <?php echo JHtml::_('form.token'); ?>
  </div>
</form>