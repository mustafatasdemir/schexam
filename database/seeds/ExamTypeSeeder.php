<?php

use Illuminate\Database\Seeder;

use App\Models\ExamType as ExamType;

class ExamTypeSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    ExamType::create(['code' => 'V',
    'name' => 'Vize',
    'description' => '']);
    ExamType::create(['code' => 'F',
    'name' => 'Final',
    'description' => '']);
    ExamType::create(['code' => 'B',
    'name' => 'Bütünleme',
    'description' => '']);
    ExamType::create(['code' => 'M',
    'name' => 'Muafiyet',
    'description' => '']);
    ExamType::create(['code' => 'FO',
    'name' => 'Formasyon',
    'description' => '']);
  }
}
