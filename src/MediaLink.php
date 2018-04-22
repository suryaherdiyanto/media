<?php
namespace Media;
use Illuminate\Facades\DB;

trait MediaLink
{
  public function linkMediaTo($model, $file_id){
    DB::table('linkables')->insert([
      'file_id' => $file_id,
      'linkable_id' => $model->id,
      'linkable_type' => $model
    ]);
  }

  public function removeLinkMediaFrom($model, $file_id){
    DB::table('linkables')
              ->where('linkable_id', $model->id)
              ->where('file_id', $file_id)
              ->delete();
  }
}
