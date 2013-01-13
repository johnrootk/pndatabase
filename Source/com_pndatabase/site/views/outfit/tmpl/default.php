<?php
// No direct access to this file
defined('_JEXEC') or die;
jimport('joomla.application.component.helper');
$params = JComponentHelper::getParams('com_pndatabase');
$MAX_OUTFIT = $params->get('outfit_maxlevel');
?>
<table class="db-table" style="width:60%; margin: auto;">
    <tr>
        <td rowspan="8"><img src="<?php echo JURI::root().$this->item['picturepose']; ?>"></td>
        <td colspan="3"><h2><?php echo $this->item['name']; ?></h2></td>
    </tr>
    <tr>
        <td><?php echo ($this->item['name']=='m'?"Male":"Female"); ?><br/>&nbsp;</td>
        <td colspan="2"><?php echo $this->item['release']; ?> Release<br/>&nbsp;</td>
    </tr>
    <tr>
        <td></td>
        <th>Initial:</th>
        <th>Maxed (+<?php echo $MAX_OUTFIT; ?>):</th>
    </tr>
    <tr>
        <th>Strength:</th>
        <td><?php echo $this->item['initstrength']." (".$this->item['growthstrength'].")"; ?></td>
        <td><?php echo floor($this->item['initstrength']+8*($this->item['growthstrength']+0.3)*$MAX_OUTFIT)." (".($this->item['growthstrength']+0.3).")"; ?></td>
    </tr>
    <tr>
        <th>Agility:</th>
        <td><?php echo $this->item['initagility']." (".$this->item['growthagility'].")"; ?></td>
        <td><?php echo floor($this->item['initagility']+8*($this->item['growthagility']+0.3)*$MAX_OUTFIT)." (".($this->item['growthagility']+0.3).")"; ?></td>
    </tr>
    <tr>
        <th>Stamina:</th>
        <td><?php echo $this->item['initstamina']." (".$this->item['growthstamina'].")"; ?></td>
        <td><?php echo floor($this->item['initstamina']+8*($this->item['growthstamina']+0.3)*$MAX_OUTFIT)." (".($this->item['growthstamina']+0.3).")"; ?></td>
    </tr>
    <tr>
        <th>BMV:</th>
        <td colspan="2"><?php echo $this->item['bmvstrength']." / ".$this->item['bmvagility']." / ".$this->item['bmvstamina']; ?></td>
    </tr>
    <tr>
        <th>Type:</th>
        <td colspan="2"><?php echo $this->item['wpot']; ?></td>
    </tr>
</table>
<pre>
<?php
// uncomment the next line to see the array
// print_r($this->item); ?>
</pre>
