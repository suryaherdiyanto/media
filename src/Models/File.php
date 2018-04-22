<?php

namespace Models;
use Illuminate\Database\Model;

class File extends Model{
  protected $fillable = [
    'name',
    'type',
    'url'
  ];
}
