<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modelitem');
class PNDatabaseModelOutfit extends JModelItem
{
    public function &getItem($id = null)
    {
        $id = JRequest::getInt('id');
        if(!isset($item)){
              try{
                  // Create a new query object.
		  $db = $this->getDBo();
		  
                  $query = $db->getQuery(true);

                  $query->select('#__PNDatabase_outfits.*, #__PNDatabase_wishingpots.name AS wpot');
                  $query->from('#__PNDatabase_outfits');
                  $query->innerJoin('#__PNDatabase_wishingpots ON #__PNDatabase_wishingpots.id = #__PNDatabase_outfits.pot');
                  $query->where('#__PNDatabase_outfits.id = '.$id);
                  
                  $db->setQuery($query);

                  $item = $db->loadAssoc();
              }catch(JException $e){
                  $this->setError($e);
              }
        }
        return $item;
    }
}
?>
