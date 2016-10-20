<?php
if( !is_object( $modx )
   || $modx->isBackend() === false )
{
  die('Please use the MODX Backend.');
}

$_module_params = array(
  'module_version'   => '1.0.0',
  'module_params'    => '',
  'module_id'        => $_GET['id'],
  'package_name'     => 'Module_Categories_Manager',
  'native_language'  => 'de',
  'name'             => 'Categories Manager',
  'dirname'          => basename( dirname(__FILE__) ),
  'url'              => 'index.php?a='. $modx->manager->action .'&amp;id=' . $_GET['id'],
  'path'             => realpath( dirname(__FILE__) ) . DIRECTORY_SEPARATOR,
  'inc_dir'          => realpath( dirname(__FILE__) ) . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR,
  'languages_dir'    => realpath( dirname(__FILE__) ) . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR,
  'views_dir'        => realpath( dirname(__FILE__) ) . DIRECTORY_SEPARATOR . 'skin' . DIRECTORY_SEPARATOR,
  'request_key'      => 'module_categories_manager',
  'messages'         => array()
);

require_once $_module_params['inc_dir'] . 'Module_Categories_Manager.php';
$cm = new Module_Categories_Manager();

// assign module_params to internal params
foreach( $_module_params as $param => $value )
{
  $cm->set( $param, $value );
}

// catch the request actions
include_once $cm->get('inc_dir') . 'request_trigger.inc.php';

// check the column rank
if( trim( $cm->get('check_db_table') ) === 'true' 
   && $cm->checkCategoriesDbTable() === false )
{
  $data = 'TABLE_COLUMN_SORT_NOT_SET';
  $cm->renderView('main', $data );
  return;
}

if( !$categories = $cm->getCategories() )
{
  setcookie('webfxtab_manage-categories-pane', 0 );
  $cm->addMessage( $cm->txt('Currently no categories available... JUST ADD A NEW ONE!'), 'global' );
}

$cm->renderView('main', $categories );
return;