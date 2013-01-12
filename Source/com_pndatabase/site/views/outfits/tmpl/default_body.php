<?php
// No direct access to this file
defined('_JEXEC') or die;
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?> hasTip" title="<?php echo $item->name; ?>::<img src='<?php echo JURI::root().$item->pictureface; ?>'>">
    <td>
	<?php echo ($item->gender=='m'?"&#9794":"&#9792"); ?>
    </td>
    <td>
	<a href="<?php echo JRoute::_('index.php?option=com_pndatabase&view=outfit&id=' . $item->id); ?>">
	    <font color="<?php echo ($item->pot==1)?"#9f9f9f":(($item->pot==2)?"#0088c7":"#ff8400"); ?>">
	    <?php echo $item->name; ?>
	    </font>
	</a>
    </td>
    <td>
	<?php echo $item->release; ?>
    </td>
    <td><?php echo $item->initstrength." / ".$item->initagility." / ".$item->initstamina; ?></td>
    <td><?php echo $item->growthstrength." / ".$item->growthagility." / ".$item->growthstamina; ?></td>
    <td><?php echo $item->bmvstrength." / ".$item->bmvagility." / ".$item->bmvstamina; ?></td>
    <td><?php echo $item->wpot; ?></td>
</tr>
<?php endforeach; ?>