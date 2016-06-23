<?php

use Illuminate\Database\Seeder;

use App\Models\ClassTerm as ClassTerm;

class ClassTermSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    ClassTerm::create(['code' => 'G',
    'name' => 'Güz Dönemi']);
    ClassTerm::create(['code' => 'B',
    'name' => 'Bahar Dönemi']);
    ClassTerm::create(['code' => 'Y',
    'name' => 'Yaz Dönemi']);
  }
}
