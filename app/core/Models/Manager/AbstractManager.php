<?php
namespace Core\Models\Manager;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractManager{

  public abstract function getRepository(string $key):Model;
  public abstract function getEntity(string $key);
  public abstract function getValidator(string $key);

}