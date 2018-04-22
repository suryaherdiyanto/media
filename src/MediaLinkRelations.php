<?php

Trait MediaLinkRelations {
  public function files(){
    return $this->morphToMany(Surya\Models\File::class, 'linkable', 'linkables');
  }
}
