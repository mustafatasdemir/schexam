<?php

use Illuminate\Database\Seeder;

use App\Models\CourseExam as CourseExam;

class CourseExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      CourseExam::create(['duration' => 120,
      'course_id' => 1,
      'exam_term_id' => 1,
      'exam_type_id' => 1]);
    }
}
