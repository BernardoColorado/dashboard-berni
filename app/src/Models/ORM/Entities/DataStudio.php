<?php

namespace App\Models\ORM\Entities;

class DataStudio{

  public $id=null;
  public $name=null;
  public $url=null;

  public function __construct(int $id=null,string $name=null,$url=null){

    $this->id=$id;
    $this->name=$name;
    $this->url=$url;

  }

}