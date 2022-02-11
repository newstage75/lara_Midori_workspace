<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Person extends Model
{

  //P161Personモデルクラスに$guardedと$rulesを追加

    protected $guarded = ['id'];

    public static $rules = [
      'name' => 'required',
      'mail' => 'email',
      'age' => 'integer',
    ];


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


    //nameを大文字にするアクセサ
    public function getNameAttribute($value)
    {
      return strtoupper($value);
    }

    //nameを大文字にするミューテータ
    public function setNameAttribute($value)
    {
      $this->attributes['name'] = strtoupper($value);
    }

    //配列でデータを保存する
    public function setAllDataAttribute(Array $value)
    {
        $this->attributes['name'] = $value[0];
        $this->attributes['mail'] = $value[1];
        $this->attributes['age'] = $value[2];
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
