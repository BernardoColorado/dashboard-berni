<?php
//
namespace App\Models\Manager;
//
use Core\Models\Manager\AbstractManager as AbstractManager;
use Illuminate\Database\Eloquent\Model as Model;
use App\Models\ORM\Repositories\UserRepository as UserRepository;
use App\Models\ORM\Repositories\DataStudioRepository as DataStudioRepository;
use App\Models\ORM\Entities\User as User;
use App\Models\ORM\Entities\DataStudio as DataStudio;
use App\Models\ORM\Validators\UserValidator as UserValidator;
//
class EntityManager extends AbstractManager{

  protected static $instance=null;

  public static function instanciate()
  {

    if(!isset(self::$instance)){
      self::$instance=new self;
    }
    return self::$instance;

  }
  public function getRepository(string $key):Model
  {

    switch ($key) {
      case 'user':
        return new UserRepository;
      case 'data-studio':
        return new DataStudioRepository;
        break;
    }

  }
  public function getEntity(string $key)
  {

    switch ($key) {
      case 'user':
        return new User;
      case 'data-studio':
        return new DataStudio;
        break;
    }

  }
  public function getValidator(string $key)
  {
    switch($key){
      case 'user':
        return new UserValidator;
        break;
    }

  }
  
}
