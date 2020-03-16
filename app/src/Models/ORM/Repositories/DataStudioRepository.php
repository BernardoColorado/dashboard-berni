<?php

namespace App\Models\ORM\Repositories;

use Illuminate\Database\Eloquent\Model as Model;
use App\Models\ORM\Entities\DataStudio as DataStudio;

class DataStudioRepository extends Model{

  //creamos 
  protected $table = 'data_studios';
  protected $primaryKey = 'id';
  protected $fillable =['name','url'];

  //regresamos arreglo de entidades
  public function index():iterable
  {

    $table = self::all();

    $dataStudios=[];

    foreach($table as $record){

      $dataStudio = new DataStudio();

      $dataStudio->id = $record->id;
      $dataStudio->name = $record->name;
      $dataStudio->url = $record->url;

      $dataStudios[]=$dataStudio;

    }

    return $dataStudios;

  }
  //registro simple en base a id
  public function getBYId(int $id):DataStudio
  {

    $record = self::find($id);

    $dataStudio = new DataStudio();

    $dataStudio->id=$record->id;
    $dataStudio->name=$record->name;
    $dataStudio->url=$record->url;

    return $record;

  }

}