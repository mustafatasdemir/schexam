<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $this->call(ClassTermSeeder::class);
    $this->call(ClassYearSeeder::class);
    $this->call(ExamTermSeeder::class);
    $this->call(ExamTypeSeeder::class);
    $this->call(FacultySeeder::class);
    $this->call(TitleSeeder::class);
    $this->call(ClassroomSeeder::class);
    $this->call(PersonSeeder::class);
    $this->call(DepartmentSeeder::class);
  }
}
