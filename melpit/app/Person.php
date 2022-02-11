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

    //アクセサP157にname_and_age属性の追加
    public function getNameAndIdAttribute()
    {
      return $this->name . '[id='. $this->id . ']';
    }

    public function getNameAndMailAttribute()
    {
      return $this->name . '[id='. $this->mail . ']';
    }

    public function getNameAndAgeAttribute()
    {
      return $this->name . '[id='. $this->age . ']';
    }

    public function getAllDataAttribute()
    {
      return $this->name . '('. $this->age . ')' . '['. $this->mail .']';
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
