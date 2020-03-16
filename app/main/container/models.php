<?php
//
$container['entity-manager']=function($container){

  return App\Models\ORM\Manager\EntityManager::instanciate();

};
