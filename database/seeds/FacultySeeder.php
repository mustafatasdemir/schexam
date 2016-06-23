<?php

use Illuminate\Database\Seeder;

use App\Models\Faculty as Faculty;

class FacultySeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    Faculty::create(['code' => 'EGT',
    'name' => 'Eğitim Fakültesi']);
  }
}
