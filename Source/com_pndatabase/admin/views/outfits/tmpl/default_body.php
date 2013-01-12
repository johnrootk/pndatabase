<?php
// No direct access to this file
defined('_JEXEC') or die;
?>
<?php foreach($this->items as $i => $item): ?>
  <tr class="row<?php echo $i % 2; ?>">
  <td><?php echo $item->id; ?></td>
  <td><?php echo JHtml::_('grid.id', $i, $item->id); ?></td>
  <td>
  <a href="<?php echo JRoute::_('index.php?option=com_pndatabase&task=outfit.edit&id=' . $item->id); ?>">
  <?php echo $item->name; ?>
  </a>
  </td>
  <td><?php echo $item->bmvstrength."/".$item->bmvagility."/".$item->bmvstamina; ?></td>
  <td><?php echo $item->wpot; ?></td>
  <td><?php echo JHtml::_('jgrid.published', $item->published, $i, 'outfits.'); ?></td>
  </tr>
<?php endforeach; ?>