<?php

use Illuminate\Database\Seeder;

use App\Models\Person as Person;

class PersonSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    Person::create(['name' => 'Mustafa',
    'surname' => 'Tasdemir',
    'phone' => '05367204185',
    'email' => 'mustafa.tasdemir@erdogan.edu.tr',
    'max_allowed_task' => 5,
    'is_proctor' => true,
    'is_active' => true,
    'title_id' => 1,
    'department_id' => 1]);
  }
}
