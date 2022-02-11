<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Person extends Model
{
    public function newCollection(array $models = [])
    {
      return new MyCollection($models);
    }
}


class MyCollection extends Collection
{
    public function fields()
    {
      //Personのフィールド名を取得（first部分）
      $item = $this->first();
      return array_keys($item->toArray());
    }
}
