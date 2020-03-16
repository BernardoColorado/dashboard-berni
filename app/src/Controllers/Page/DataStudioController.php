<?php
//espacio de controladores
namespace App\Controllers\Page;
use Psr\Container\ContainerInterface as ContainerInterface;
use Core\Controllers\Parents\AbstractController as AbstractController;

//controlador de usuario y sesiones
class DataStudioController extends AbstractController{

  /**********************************************/
  /*****Funciones de Intanciacion y constructor**/
  /**********************************************/
  public function __construct(ContainerInterface $container){

    //container y sus dependencias
    $this->container=$container;
    //metodos plantilla de instanciacion
    $this->setMainInstances();
    //mandamos llamar la insrancia de usuario
    $this->entityManager = $this->container['entity-manager'];

  }
  /*******************************/
  /*****Funciones de Controlador**/
  /*******************************/
  public function index($request,$response){
        
    session_start();

    if(!isset($_SESSION['nickname'])){

      return $response->withRedirect($this->globals['url'].'/user/signin');

    }
    else{

      //datos en la vista
      $view=[];
      $userRepository = $this->entityManager->getRepository('user');
      $user=$userRepository->getByNickname($_SESSION['nickname']);
      $view['user']=$user;
      $this->twig->render($response,'layouts/datastudio/index.php',$view);

    }

  }

  public function dashboard($request,$response,$args){
        
    session_start();

    if(!isset($_SESSION['nickname'])){

      return $response->withRedirect($this->globals['url'].'/user/signin');

    }
    else{

      //datos en la vista
      $view=[];
      $userRepository = $this->entityManager->getRepository('user');
      $user=$userRepository->getByNickname($_SESSION['nickname']);
      $view['user']=$user;
      $this->twig->render($response,'layouts/datastudio/index.php',$view);

    }

  }

}

?>