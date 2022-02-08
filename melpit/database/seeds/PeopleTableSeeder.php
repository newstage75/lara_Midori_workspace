<?php

use Illuminate\Database\Seeder;
//↓追記
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'name' => 'taro',
          'mail' => 'taro@yamada.jp',
          'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'hanako',
          'mail' => 'hanako@flower.jp',
          'age' => 34,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'sachiko',
          'mail' => 'sachiko@happy.jp',
          'age' => 56,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'jiro',
          'mail' => 'jiro@change.jp',
          'age' => 27,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'mami',
          'mail' => 'mami@mumemo.jp',
          'age' => 56,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'ichiro',
          'mail' => 'ichiroo@baseball.jp',
          'age' => 68,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'miyoko',
          'mail' => 'miyoko@piyoko.jp',
          'age' => 7,
        ];
        DB::table('people')->insert($param);
    }
}
