<?php
//espacio de controladores
namespace App\Controllers\Page;
//interfaz para contenedor de dependencias
use Psr\Container\ContainerInterface as ContainerInterface;
//mandamos llamar al controlador abstracto
use Core\Controllers\Parents\AbstractController as AbstractController;
//controlador de usuario y sesiones
class StatisticsController extends AbstractController{

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
        
      //variables de usuario a iniciar sesion
      $this->twig->render($response,'layouts/statistics/index.php',[]);

    }

}

?>