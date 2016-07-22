<?php

use Illuminate\Database\Seeder;

use App\Models\ExamTerm as ExamTerm;

class ExamTermSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    ExamTerm::create(['code' => 'F2016',
    'name' => '2016 Güz Dönemi',
    'description' => '',
    'start_date' => '17.10.2016',
    'end_date' => '27.10.2016']);
  }
}
