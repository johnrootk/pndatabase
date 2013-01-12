<?php
// No direct access to this file
defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');
class PNDatabaseControllerOutfits extends JControllerAdmin
{
  public function getModel($name = 'Outfit', $prefix = 'PNDatabaseModel')         {
    $model = parent::getModel($name, $prefix, array('ignore_request' => true));
    return $model;
  }
}