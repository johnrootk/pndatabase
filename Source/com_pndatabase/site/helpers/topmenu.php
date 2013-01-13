<?php
defined('_JEXEC') or die;

class PNDatabaseHelperTopmenu{
    
    public static function getMenu(){
	$params = JComponentHelper::getParams('com_pndatabase');
	$selected_ids = $params->get('parent_id');
	$menu = JFactory::getApplication()->getMenu();
	$menuitems = array();
	foreach($selected_ids as $next_id)
	    $menuitems[] = $menu->getItem($next_id);
	
	$menuactive = JFactory::getApplication()->getMenu()->getActive();
	
	$var = "<ul class='db-tabs'>";
	    foreach($menuitems as $i => &$menuitem)
		if($menuitem->id==$menuactive->id)
		    $var .= "<li class='active'>".$menuitem->title."</li>";
		else
		    $var .= "<li><a href='".$menuitem->link."'>".$menuitem->title."</a></li>";
	$var .= "</ul>";
	return $var;
    }
}