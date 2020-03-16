<?php
//
$container['entity-manager']=function($container){

  return App\Models\Manager\EntityManager::instanciate();

};
