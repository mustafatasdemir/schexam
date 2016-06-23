<?php

use Illuminate\Database\Seeder;

use App\Models\Department as Department;

class DepartmentSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    Department::create(['code' => 'BOTE',
    'name' => 'Bilgisayar Öğretim Teknolojileri',
    'faculty_id' => 1]);
  }
}
