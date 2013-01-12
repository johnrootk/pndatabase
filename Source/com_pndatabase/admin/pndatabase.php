<?php
// No direct access to this file
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by PNDatabase
$controller = JController::getInstance('PNDatabase');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
?>

