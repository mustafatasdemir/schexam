<?php

use Illuminate\Database\Seeder;

use App\Models\ClassYear as ClassYear;

class ClassYearSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    ClassYear::create(['code' => '1',
    'name' => '1. Sınıf']);
    ClassYear::create(['code' => '2',
    'name' => '2. Sınıf']);
    ClassYear::create(['code' => '3',
    'name' => '3. Sınıf']);
    ClassYear::create(['code' => '4',
    'name' => '4. Sınıf']);
    ClassYear::create(['code' => 'H',
    'name' => 'Hazırlık Sınıfı']);
    ClassYear::create(['code' => 'M',
    'name' => 'Mezun']);
  }
}
