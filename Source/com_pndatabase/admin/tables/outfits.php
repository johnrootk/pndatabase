<?php
// No direct access to this file
defined('_JEXEC') or die;

jimport('joomla.database.table');

class PNDatabaseTableOutfits extends JTable
{
  	var $id = null;
	var $name = "";
	var $pictureface = "";
	var $picturepose = "";
	var $gender = "";
	var $release = "";
	var $collstrength = 0;
	var $collagility = 0;
	var $collstamina = 0;
	var $initstrength = 0;
	var $initagility = 0;
	var $initstamina = 0;
	var $growthstrength = 0;
	var $growthagility = 0;
	var $growthstamina = 0;
	var $bmvstrength = 0;
	var $bmvagility = 0;
	var $bmvstamina = 0;
	var $pot = 0;
	var $chinese = 1;

  function __construct(&$db)
  {
    parent::__construct('#__PNDatabase_outfits', 'id', $db);
  }
}
?>