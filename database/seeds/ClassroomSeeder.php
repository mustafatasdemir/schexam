<?php

use Illuminate\Database\Seeder;

use App\Models\Classroom as Classroom;

class ClassroomSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {


    Classroom::create(['code' => 'A-101',
    'name' => 'A-101',
    'description' => '',
    'capacity' => 30]);

    Classroom::create(['code' => 'A-102',
    'name' => 'A-102',
    'description' => '',
    'capacity' => 32]);

    Classroom::create(['code' => 'A-201',
    'name' => 'A-201',
    'description' => '',
    'capacity' => 25]);

    Classroom::create(['code' => 'A-202',
    'name' => 'A-202',
    'description' => '',
    'capacity' => 30]);

    Classroom::create(['code' => 'A-203',
    'name' => 'A-203',
    'description' => '',
    'capacity' => 30]);

    Classroom::create(['code' => 'A-204',
    'name' => 'A-204',
    'description' => '',
    'capacity' => 30]);

    Classroom::create(['code' => 'A-205',
    'name' => 'A-205',
    'description' => '',
    'capacity' => 30]);

    Classroom::create(['code' => 'A-301',
    'name' => 'A-301',
    'description' => '',
    'capacity' => 25]);

    Classroom::create(['code' => 'A-302',
    'name' => 'A-302',
    'description' => '',
    'capacity' => 25]);

    Classroom::create(['code' => 'A-303',
    'name' => 'A-303',
    'description' => '',
    'capacity' => 25]);

    Classroom::create(['code' => 'A-304',
    'name' => 'A-304',
    'description' => '',
    'capacity' => 25]);

    Classroom::create(['code' => 'A-305',
    'name' => 'A-305',
    'description' => '',
    'capacity' => 25]);

    Classroom::create(['code' => 'A-306',
    'name' => 'A-306',
    'description' => '',
    'capacity' => 25]);

    Classroom::create(['code' => 'A-307',
    'name' => 'A-307',
    'description' => '',
    'capacity' => 30]);

    Classroom::create(['code' => 'B-101',
    'name' => 'B-101',
    'description' => '',
    'capacity' => 28]);

    Classroom::create(['code' => 'B-102',
    'name' => 'B-102',
    'description' => '',
    'capacity' => 30]);

    Classroom::create(['code' => 'B-103',
    'name' => 'B-103',
    'description' => '',
    'capacity' => 32]);

    Classroom::create(['code' => 'B-104',
    'name' => 'B-104',
    'description' => '',
    'capacity' => 15]);

    Classroom::create(['code' => 'B-105',
    'name' => 'B-105',
    'description' => '',
    'capacity' => 36]);

    Classroom::create(['code' => 'B-201',
    'name' => 'B-201',
    'description' => '',
    'capacity' => 28]);

    Classroom::create(['code' => 'B-205',
    'name' => 'B-205',
    'description' => '',
    'capacity' => 42]);

    Classroom::create(['code' => 'B-206',
    'name' => 'B-206',
    'description' => '',
    'capacity' => 32]);

    Classroom::create(['code' => 'B-207',
    'name' => 'B-207',
    'description' => '',
    'capacity' => 36]);

    Classroom::create(['code' => 'BZ-01',
    'name' => 'BZ-01',
    'description' => '',
    'capacity' => 25]);

    Classroom::create(['code' => 'A-FENLAB',
    'name' => 'A-FENLAB',
    'description' => '',
    'capacity' => 18]);
    
  }
}
